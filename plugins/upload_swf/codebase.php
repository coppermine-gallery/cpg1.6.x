<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * plugins/upload_swf/codebase.php
 * @since  1.6.05
 */

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// Add a filter for the upload options
$thisplugin->add_filter('upload_options','swf_add_upload_option');
// Add actions for processing uploads
$thisplugin->add_action('upload_form','swf_display_upload_form');

function swf_add_upload_option($upload_choices)
{
	global $lang_plugin_upload_swf;

	$more_upload_choices = array('upload_swf' => $lang_plugin_upload_swf['swf_method']);
	return array_merge($upload_choices, $more_upload_choices);
}

function swf_display_upload_form($upload_settings)
{
	global $CONFIG, $USER_DATA, $lang_common, $lang_db_input_php, $lang_upload_php, $lang_plugin_upload_swf, $lang_upload_swf_php, $icon_array, $cpg_udb;

	list($upload_form, $upload_select) = $upload_settings;
	if ($upload_form != 'upload_swf') {
		return $upload_settings;
	}

	js_include('plugins/upload_swf/js/swfupload/swfupload.js');
	js_include('plugins/upload_swf/js/swfupload/swfupload.swfobject.js');
	js_include('plugins/upload_swf/js/swfupload/swfupload.queue.js');
	js_include('plugins/upload_swf/js/swfupload/fileprogress.js');
	js_include('plugins/upload_swf/js/swfupload/handlers.js');
	js_include('plugins/upload_swf/js/setup_swf_upload.js');

	// Set the lang_upload_swf_php language array for use in js
	set_js_var('lang_upload_swf_php', $lang_upload_swf_php);

	set_js_var('notify_admin', $CONFIG['upl_notify_admin_email']);
	set_js_var('max_upl_size', $CONFIG['max_upl_size']);

	list($timestamp, $form_token) = getFormToken(); //(time()+14400); //allow up to 4 hours for upload to complete
	set_js_var('timestamp', $timestamp/*-14400*/);	//subtract those 4 hours so edits happen correctly
	set_js_var('form_token', $form_token);

	// Get the user password hash
	$user_pass = $cpg_udb->get_user_pass(USER_ID);
	// Serialize and base64 encode the password
	set_js_var('user', base64_encode(serialize($user_pass)));
	set_js_var('user_id', USER_ID);
	set_js_var('allow_guests_enter_file_details', $CONFIG['allow_guests_enter_file_details']);

	$plugpath = 'plugins/upload_swf/';
	$maxfilesizebytes = $CONFIG['max_upl_size'] * 1024;
	$maxfilesize = sprintf($lang_upload_php['max_fsize'], cpg_format_bytes($maxfilesizebytes));

	pageheader($lang_plugin_upload_swf['title']);

	if ($USER_DATA['pub_upl_need_approval'] == 1 || $USER_DATA['priv_upl_need_approval'] == 1) {
		echo '<div id="admin_approval" style="display: none;">';
		msg_box($lang_common['information'], $lang_db_input_php['upload_success']);
		echo '</div>';
	}

	$restriction_filesize = sprintf($lang_upload_php['restriction_filesize'], '<strong>' . cpg_format_bytes($maxfilesizebytes) . '</strong>');
	if ($CONFIG['allowed_img_types'] != '') {
		$allowed_img_types = '<li>' . sprintf ($lang_upload_php['allowed_img_types'], $CONFIG['allowed_img_types']) . '</li>';
	} else {
		$allowed_img_types = '';
	}
	if ($CONFIG['allowed_mov_types'] != '') {
		$allowed_mov_types = '<li>' . sprintf ($lang_upload_php['allowed_mov_types'], $CONFIG['allowed_mov_types']) . '</li>';
	} else {
		$allowed_mov_types = '';
	}
	if ($CONFIG['allowed_snd_types'] != '') {
		$allowed_snd_types = '<li>' . sprintf ($lang_upload_php['allowed_snd_types'], $CONFIG['allowed_snd_types']) . '</li>';
	} else {
		$allowed_snd_types = '';
	}
	if ($CONFIG['allowed_doc_types'] != '') {
		$allowed_doc_types = '<li>' . sprintf ($lang_upload_php['allowed_doc_types'], $CONFIG['allowed_doc_types']) . '</li>';
	} else {
		$allowed_doc_types = '';
	}

	$help_page = <<< EOT
	<ul>
		<li>{$lang_upload_php['up_instr_1']}</li>
		<li>{$lang_upload_php['up_instr_2']}</li>
		<li>{$lang_upload_php['up_instr_3']}</li>
		<li>{$lang_upload_php['up_instr_4']}</li>
		<li>{$lang_upload_php['up_instr_5']}</li>
	</ul>

	<h2>{$lang_upload_php['restrictions']}</h2>
	<ul>
		<li>{$restriction_filesize}</li>
		<li>{$lang_upload_php['restriction_zip']}</li>
		<li>{$lang_upload_php['allowed_types']}
			<ul>
				{$allowed_img_types}
				{$allowed_mov_types}
				{$allowed_snd_types}
				{$allowed_doc_types}
			</ul>
		</li>
	</ul>
EOT;

	$upload_help = cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_upload_php['title']))).'&amp;t='.urlencode(base64_encode(serialize($help_page))),470,245);

	$upload_table_header = <<<EOT
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr>
			<td>
				{$icon_array['upload']}{$lang_upload_php['title']} {$upload_help}
			</td>
			<td style="text-align:right">
				<span id="upload_method_selector">
					{$upload_select}
				</span>
			</td>
		</tr>
	</table>
EOT;

	starttable('100%', $upload_table_header, 2);
	echo <<<EOT
	<tr>
		<td colspan="2" class="tableh2">
			<noscript>
				<div class="cpg_message_error">
					{$lang_upload_php['err_js_disabled']}<br />{$lang_upload_php['err_alternate_method']}
				</div>
			</noscript>
			<div id="divLoadingContent" class="cpg_message_info" style="display: none;">{$lang_upload_php['flash_loading']}</div>
			<div id="divLongLoading" class="cpg_message_warning" style="display: none;">{$lang_upload_php['err_flash_disabled']}<br />{$lang_upload_php['err_alternate_method']}</div>
			<div id="divAlternateContent" class="cpg_message_error" style="display: none;">{$lang_upload_php['err_flash_version']}<br />{$lang_upload_php['err_alternate_method']}</div>
			<div id="divMaxFilesize" style="display: none;"><strong>{$maxfilesize}</strong></div>
		</td>
	</tr>
EOT;

	form_alb_list_box($lang_common['album'], 'swf_album');

	echo <<<EOT
	<tr>
		<td colspan="2" class="tableb tableb_alternate">
			<div id="upload_form">
				<span id="browse_button_place_holder"></span>
				<input type="checkbox" name="autorient" id="autorient" value="1" checked="checked" />
				<label for="autorient">{$lang_upload_php['auto_orient']}</label>
				<button id="button_cancel" onclick="swfu.cancelQueue();" disabled="disabled" class="button">
					{$icon_array['cancel']}
					{$lang_upload_swf_php['cancel_all']}
				</button>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="tableb">
			<div class="fieldset flash" id="upload_progress">
				<span class="legend">{$lang_upload_swf_php['upload_queue']}</span>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="tableb tableb_alternate">
			<button id="button_continue" class="button" onclick="return continue_upload();" style="display: none; margin-top: 5px;">
				{$icon_array['continue']}
				{$lang_common['continue']}
			</button>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="tableh2">
			<div id="upload_status">
				<span id="upload_count">0</span> {$lang_upload_swf_php['files_uploaded']}:
			</div>
			<div id="uploadedThumbnails"></div>
		</td>
	</tr>
EOT;
	endtable();
	pagefooter();
	exit;
}
