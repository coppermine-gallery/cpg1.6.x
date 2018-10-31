<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * plugins/upload_sgl/codebase.php
 * @since  1.6.04
 */

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// Add a filter for the upload options
$thisplugin->add_filter('upload_options','sgl_add_upload_option');
// Add actions for processing uploads
$thisplugin->add_action('upload_form','sgl_display_upload_form');

function sgl_add_upload_option($upload_choices)
{
	global $lang_plugin_upload_sgl;

	$more_upload_choices = array('upload_sgl' => $lang_plugin_upload_sgl['sgl_method']);
	return array_merge($upload_choices, $more_upload_choices);
}

function sgl_display_upload_form($upload_settings)
{
	global $CONFIG, $lang_common, $lang_upload_php, $lang_plugin_upload, $lang_plugin_upload_sgl, $lang_bbcode_help_title, $lang_bbcode_help, $icon_array;

	list($upload_form, $upload_select) = $upload_settings;
	if ($upload_form != 'upload_sgl') {
		return $upload_settings;
	}

	list($timestamp, $form_token) = getFormToken();

	$plugpath = 'plugins/upload_sgl/';
	$maxfilesizebytes = $CONFIG['max_upl_size'] * 1024;
	$maxfilesize = sprintf($lang_upload_php['max_fsize'], cpg_format_bytes($maxfilesizebytes));

	// provide some form validations - degrades if no javascript
	set_js_var('maxfilesize', $maxfilesizebytes);
	set_js_var('choose_file', $lang_plugin_upload_sgl['choose_file']);
	set_js_var('too_large', $lang_plugin_upload['size_err']);
	set_js_var('sel_album', $lang_plugin_upload['albmSelMsg']);
	js_include($plugpath.'js/single.js');

	pageheader($lang_plugin_upload_sgl['title'], '<style type="text/css">.textinput {width:100%;box-sizing:border-box}</style>');

	echo '<form name="cpgform" id="cpgform" method="post" action="uniload.php" enctype="multipart/form-data" onsubmit="return sgl_form_check(this)">';

	$upload_help = cpg_display_help('f=uploading_http.htm&amp;as=upload_http_interface_html&amp;ae=upload_http_interface_html_end', '450', '300');

	$upload_table_header = <<< EOT
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

	$captionLabel = $lang_upload_php['description'];
	$keywordLabel = sprintf($lang_common['keywords_insert1'],$lang_common['keyword_separators'][$CONFIG['keyword_separator']]) . '<br /><a href="keyword_select.php" class="greybox">' . $lang_common['keywords_insert2'] .'</a>';
	if ($CONFIG['show_bbcode_help']) {
		$captionLabel .= '&nbsp;'. cpg_display_help('f=empty.htm&amp;h=lang_bbcode_help_title&amp;t=lang_bbcode_help',470,245);
	}

	starttable('100%', $upload_table_header, 2);
	echo '<tr><td colspan="2" class="tableb tableb_alternate"><strong>' . $maxfilesize . '</strong></td></tr>';

	form_alb_list_box($lang_common['album'], 'album');

	$auto_orient_checked = $CONFIG['auto_orient_checked'] ? 'value="1" checked="checked"' : '';
	echo <<<EOT
<tr>
	<td width="30%" class="tableb">
		{$lang_upload_php['picture']}
	</td>
	<td width="70%" class="tableb" valign="top">
		<input type="file" name="Filedata" size="60" class="listbox" />
		<input type="checkbox" name="autorient" id="autorient" $auto_orient_checked />
		<label for="autorient">{$lang_upload_php['auto_orient']}</label>
	</td>
</tr>
EOT;

	if (USER_ID > 0 || $CONFIG['allow_guests_enter_file_details'] == 1) {
	echo <<<EOT
<tr>
	<td class="tableb">
		{$lang_upload_php['pic_title']}
	</td>
	<td class="tableb" valign="top">
		<input type="text" name="title" maxlength="255" value="" class="textinput" id="title" />
	</td>
</tr>
<tr>
	<td class="tableb" valign="top">
		{$captionLabel}
	</td>
	<td class="tableb" valign="top">
		<textarea name="caption" rows="5" cols="40" class="textinput" onkeydown="textCounter(this, 512);" onkeyup="textCounter(this, 512);"></textarea>
	</td>
</tr>
<tr>
	<td class="tableb">
		{$keywordLabel}
	</td>
	<td class="tableb" valign="top">
		<input type="text" name="keywords" maxlength="255" value="" class="textinput upld-elem" id="keywords" />
	</td>
</tr>
EOT;

		if(!empty($CONFIG['user_field1_name'])) {
			echo <<<EOT
<tr>
	<td class="tableb">
		{$CONFIG['user_field1_name']}
	</td>
	<td class="tableb" valign="top">
		<input type="text" name="user1" maxlength="255" value="" class="textinput" id="user1" />
	</td>
</tr>
EOT;
		}
		if(!empty($CONFIG['user_field2_name'])) {
			echo <<<EOT
<tr>
	<td class="tableb">
		{$CONFIG['user_field2_name']}
	</td>
	<td class="tableb" valign="top">
		<input type="text" name="user2" maxlength="255" value="" class="textinput" id="user2" />
	</td>
</tr>
EOT;
		}
		if(!empty($CONFIG['user_field3_name'])) {
			echo <<<EOT
<tr>
	<td class="tableb">
		{$CONFIG['user_field3_name']}
	</td>
	<td class="tableb" valign="top">
		<input type="text" name="user3" maxlength="255" value="" class="textinput" id="user3" />
	</td>
</tr>
EOT;
		}
		if(!empty($CONFIG['user_field4_name'])) {
			echo <<<EOT
<tr>
	<td class="tableb">
		{$CONFIG['user_field4_name']}
	</td>
	<td class="tableb" valign="top">
		<input type="text" name="user4" maxlength="255" value="" class="textinput" id="user4" />
	</td>
</tr>
EOT;
		}
	}

	echo <<<EOT
<tr>
	<td colspan="2">
		<input type="hidden" name="method" value="upload_sgl" />
		<input type="hidden" name="form_token" value="{$form_token}" />
		<input type="hidden" name="timestamp" value="{$timestamp}" />
	</td>
</tr>
EOT;

	close_form($lang_upload_php['title'], 1, 'ok');

	endtable();
	echo '</form>';
	pagefooter();
	exit;
}
