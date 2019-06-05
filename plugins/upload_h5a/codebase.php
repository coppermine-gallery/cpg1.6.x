<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * plugins/upload_h5a/codebase.php
 * @since  1.6.05
 */

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

require_once './plugins/upload_h5a/initialize.inc.php';

// Add a filter for the upload options
$thisplugin->add_filter('upload_options','uploadh5a_add_upload_option');
// Add actions for processing uploads
$thisplugin->add_action('upload_form','uploadh5a_display_upload_form');

function uploadh5a_add_upload_option($upload_choices)
{
	global $lang_plugin_upload_h5a;

	$more_upload_choices = array('upload_h5a' => $lang_plugin_upload_h5a['html5_method']);
	return array_merge($upload_choices, $more_upload_choices);
}

function uploadh5a_display_upload_form($upload_settings)
{
	global $CONFIG, $USER_DATA, $lang_common, $lang_upload_php, $lang_plugin_upload, $lang_plugin_upload_h5a, $icon_array, $h5a_upload, $lang_bbcode_help_title, $lang_bbcode_help;

	list($upload_form, $upload_select) = $upload_settings;
	if ($upload_form != 'upload_h5a') {
		return $upload_settings;
	}
	$plugpath = 'plugins/upload_h5a';

	$grpn = USER_ID > 0 ? (int) $USER_DATA['group_id'] : 0;
	$grpc = $grpn ? $grpn : '';
	$cfg = isset($CONFIG['upload_h5a'.$grpc]) ? unserialize($CONFIG['upload_h5a'.$grpc]) : unserialize($CONFIG['upload_h5a']);

	$maxfilesizebytes = $cfg['upldsize'] ? max($cfg['upldsize'], $h5a_upload->sys_max_upl_size) : $h5a_upload->sys_max_upl_size;
	$maxfilesize = sprintf($lang_upload_php['max_fsize'], $h5a_upload->to_KMG($maxfilesizebytes));

	list($timestamp, $form_token) = getFormToken(time()+14400); //allow up to 4 hours for upload to complete
	set_js_var('timestamp', $timestamp-14400);	//subtract those 4 hours so edits happen correctly
	set_js_var('concurrent', $cfg['concurrent']);
	set_js_var('autoedit', $cfg['autoedit']);
	set_js_var('user_id', USER_ID);
	set_js_var('guest_edit', $CONFIG['allow_guests_enter_file_details']);

	set_js_var('H5uPath', "{$plugpath}/");
	set_js_var('maxfilesize', $maxfilesizebytes);
	set_js_var('maxchunksize', $h5a_upload->sys_max_chnk_size);
	set_js_var('fup_payload', array('method'=>'upload_h5a','form_token'=>$form_token,'timestamp'=>$timestamp));
	set_js_var('h5uM', array(
			'selAlb'=>$lang_plugin_upload['albmSelMsg'],
			'aborted'=>$lang_plugin_upload_h5a['aborted'],
			'type_err'=>$lang_plugin_upload_h5a['type_err'],
			'size_err'=>$lang_plugin_upload['size_err'],
			'extallow'=>$lang_plugin_upload_h5a['extallow'],
			'q_stop'=>$lang_plugin_upload_h5a['q_stop'],
			'q_go'=>$lang_plugin_upload_h5a['q_resume'],
			'q_can'=>$lang_plugin_upload_h5a['q_cancel']
			));

	$allowed_types = array_merge(
			explode('/', $CONFIG['allowed_img_types']),
			explode('/', $CONFIG['allowed_mov_types']),
			explode('/', $CONFIG['allowed_snd_types']),
			explode('/', $CONFIG['allowed_doc_types'])
			);
	set_js_var('allowed_file_types', $allowed_types);

	// include the javascript upload engine (minified unless in debug mode)
	$jsv = ($CONFIG['debug_mode']==1 || ($CONFIG['debug_mode']==2 && GALLERY_ADMIN_MODE)) ? '' : '.min';
	js_include('plugins/upload_h5a/js/upload'.$jsv.'.js');

	// add our style sheet
	$h5up_meta = '<link rel="stylesheet" href="plugins/upload_h5a/css/upload.css" type="text/css" />';

	pageheader($lang_plugin_upload_h5a['title'], $h5up_meta);

	$upload_help = $h5a_upload->help_button('use');
	$upload_table_header = <<<EOT
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr>
			<td>
				{$icon_array['upload']}{$lang_plugin_upload_h5a['upldfiles']}{$upload_help}
			</td>
			<td style="text-align:right">
				<span id="upload_method_selector">{$upload_select}</span>
			</td>
		</tr>
	</table>
EOT;

	starttable('100%', $upload_table_header, 2);
	echo '<tr><td colspan="2" class="tableb tableb_alternate"><strong>' . $maxfilesize . '</strong></td></tr>';
	form_alb_list_box($lang_common['album'], 'h5u_album');
	echo <<<EOT
	<tr id="navailrow" style="text-align:center;background-color:yellow;display:none">
		<td colspan="2">{$lang_plugin_upload_h5a['notavail']}</td>
	</tr>
	<tr class="H5upV">
		<td class="tableb" width="30%">{$lang_plugin_upload_h5a['flistitl']}</td>
		<td class="tableb"><input type="checkbox" id="flistitl" onchange="shide_titlrow(this);" /></td>
	</tr>
EOT;

	if (USER_ID > 0 || $CONFIG['allow_guests_enter_file_details'] == 1) {
		if ($cfg['enabtitl']) {
			echo '<tr id="titlrow"><td class="tableb">'.$lang_upload_php['pic_title'].'</td><td class="tableb"><input type="text" name="title" id="title" class="textinput" maxlength="255" /></td></tr>';
		}
		if ($cfg['enabdesc']) {
			$desclabl = $lang_upload_php['description'];
			if ($CONFIG['show_bbcode_help']) {
				$desclabl .= '&nbsp;'. cpg_display_help('f=empty.htm&amp;h=lang_bbcode_help_title&amp;t=lang_bbcode_help',470,245);
			}
			echo '<tr><td class="tableb">'.$desclabl.'</td><td class="tableb"><textarea name="caption" rows="2" id="caption" class="textinput" /></textarea></td></tr>';
		}
		if ($cfg['enabkeys']) {
			$keywordLabel = sprintf($lang_common['keywords_insert1'],$lang_common['keyword_separators'][$CONFIG['keyword_separator']])
			. '<br /><a href="keyword_select.php" class="greybox">' . $lang_common['keywords_insert2'] .'</a>';
			echo '<tr><td class="tableb">'.$keywordLabel.'</td><td class="tableb"><input type="text" name="keywords" id="keywords" class="textinput" maxlength="255" /></td></tr>';
		}
		if ($cfg['enabusr1'] && !empty($CONFIG['user_field1_name'])) {
			echo '<tr><td class="tableb">'.$CONFIG['user_field1_name'].'</td><td class="tableb"><input type="text" name="user1" id="user1" class="textinput" maxlength="255" /></td></tr>';
		}
		if ($cfg['enabusr2'] && !empty($CONFIG['user_field2_name'])) {
			echo '<tr><td class="tableb">'.$CONFIG['user_field2_name'].'</td><td class="tableb"><input type="text" name="user2" id="user2" class="textinput" maxlength="255" /></td></tr>';
		}
		if ($cfg['enabusr3'] && !empty($CONFIG['user_field3_name'])) {
			echo '<tr><td class="tableb">'.$CONFIG['user_field3_name'].'</td><td class="tableb"><input type="text" name="user3" id="user3" class="textinput" maxlength="255" /></td></tr>';
		}
		if ($cfg['enabusr4'] && !empty($CONFIG['user_field4_name'])) {
			echo '<tr><td class="tableb">'.$CONFIG['user_field4_name'].'</td><td class="tableb"><input type="text" name="user4" id="user4" class="textinput" maxlength="255" /></td></tr>';
		}
	}

	$acptmime = $cfg['acptmime'] ? ("accept=\"{$cfg['acptmime']}\" ") : '';

	$auto_orient_checked = (isset($CONFIG['auto_orient_checked']) && !$CONFIG['auto_orient_checked']) ? '' : ' checked="checked"';
	echo <<<EOT
	<tr id="h5upldrow">
		<td class="tableb">{$lang_plugin_upload_h5a['files']}</td>
		<td class="tableb" style="padding:1em">
			<div style="width:480px">
				<input type="file" name="userpictures" id="upload_field" multiple="multiple" {$acptmime}/>
				<input type="checkbox" name="autorient" id="autorient" value="1"{$auto_orient_checked} />
				<label for="autorient">{$lang_upload_php['auto_orient']}</label>
				&nbsp;<br />
				<div id="dropArea">{$lang_plugin_upload_h5a['drop_files']}</div>
				&nbsp;<br />
				<div id="progress_report" style="position:relative">
					<div id="progress_report_name"></div>
					<div id="progress_report_status" style="font-style: italic;"></div>
					<div id="totprogress">
						<div id="progress_report_bar" style="background-color: blue; width: 0; height: 100%;"></div>
					</div>
					<div>
						{$lang_plugin_upload_h5a['files_left']}<span id="qcount">0</span><div class="acti" id="qstop"><img src="plugins/upload_h5a/css/stop.png" title="{$lang_plugin_upload_h5a['q_stop']}" alt="" onclick="H5uQctrl.stop()" /></div><div class="acti" id="qgocan"><img src="plugins/upload_h5a/css/play-green.png" title="{$lang_plugin_upload_h5a['q_resume']}" alt="" onclick="H5uQctrl.go()" /><img src="plugins/upload_h5a/css/cross.png" title="{$lang_plugin_upload_h5a['q_cancel']}" alt="" onclick="H5uQctrl.cancel()" /></div>
					</div>
					<div id="fprogress"></div>
					<div id="server_response"></div>
				</div>
			</div>
		</td>
	</tr>
	<tr id="gotoedit" style="display:none">
		<td class="tableb tableb_alternate">{$lang_plugin_upload_h5a['continue']}</td>
		<td class="tableb tableb_alternate">
			<button type="button" onclick="window.location=redirURL">{$lang_plugin_upload_h5a['gotoedit']}</button>
		</td>
	</tr>
EOT;
	endtable();
	pagefooter();
	exit;
}


/** INSTALL/UNINSTALL **/
$thisplugin->add_action('plugin_install', 'upload_h5a_install');

function upload_h5a_install () {
	global $CONFIG, $h5a_upload;
	$scfg = cpg_db_escape_string(serialize($h5a_upload->h5u_config_default));
	cpg_db_query("INSERT INTO {$CONFIG['TABLE_CONFIG']} (name, value) VALUES ('upload_h5a', '{$scfg}')");
	return true;
}

$thisplugin->add_action('plugin_uninstall', 'upload_h5a_uninstall');

function upload_h5a_uninstall () {
	global $CONFIG;
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name LIKE 'upload_h5a%'");
	return true;
}
