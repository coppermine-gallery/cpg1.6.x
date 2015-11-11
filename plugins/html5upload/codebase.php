<?php
if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

require_once './plugins/html5upload/initialize.inc.php';

// Add a filter for the upload options
$thisplugin->add_filter('upload_options','html5_add_upload_option');
// Add actions for processing uploads
$thisplugin->add_action('upload_form','html5_display_upload_form');

function html5_add_upload_option($upload_choices)
{
	global $lang_plugin_html5upload;

	$more_upload_choices = array('html5_upload' => $lang_plugin_html5upload['html5_method']);
	return array_merge($upload_choices, $more_upload_choices);
}

function html5_display_upload_form($upload_settings)
{
	global $CONFIG, $USER_DATA, $lang_common, $lang_upload_php, $lang_plugin_html5upload, $icon_array, $h5a_upload, $lang_bbcode_help_title, $lang_bbcode_help;

	list($upload_form, $upload_select) = $upload_settings;
	if ($upload_form != 'html5_upload') {
		return $upload_settings;
	}
	$plugpath = 'plugins/html5upload';

	$grpn = USER_ID > 0 ? (int) $USER_DATA['group_id'] : 0;
	$grpc = $grpn ? $grpn : '';
	$cfg = isset($CONFIG['html5upload_config'.$grpc]) ? unserialize($CONFIG['html5upload_config'.$grpc]) : unserialize($CONFIG['html5upload_config']);

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
	set_js_var('fup_payload', array('event'=>'picture','process'=>1,'form_token'=>$form_token,'timestamp'=>$timestamp,'MFU'=>1));
	set_js_var('h5uM', array(
			'selAlb'=>$lang_plugin_html5upload['albmSelMsg'],
			'aborted'=>$lang_plugin_html5upload['aborted'],
			'type_err'=>$lang_plugin_html5upload['type_err'],
			'size_err'=>$lang_plugin_html5upload['size_err'],
			'extallow'=>$lang_plugin_html5upload['extallow'],
			'q_stop'=>$lang_plugin_html5upload['q_stop'],
			'q_go'=>$lang_plugin_html5upload['q_resume'],
			'q_can'=>$lang_plugin_html5upload['q_cancel']
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
	js_include('plugins/html5upload/js/upload'.$jsv.'.js');

	// add our style sheet
	$h5up_meta = '<link rel="stylesheet" href="plugins/html5upload/css/upload.css" type="text/css" />';

	pageheader($lang_plugin_html5upload['title'], $h5up_meta);

	$upload_help = $h5a_upload->help_button('use');
	$upload_table_header = <<<EOT
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr>
			<td>
				{$icon_array['upload']}{$lang_plugin_html5upload['upldfiles']}{$upload_help}
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
		<td colspan="2">{$lang_plugin_html5upload['notavail']}</td>
	</tr>
	<tr class="H5upV">
		<td class="tableb" width="30%">{$lang_plugin_html5upload['flistitl']}</td>
		<td class="tableb"><input type="checkbox" id="flistitl" onchange="shide_titlrow(this);" /></td>
	</tr>
EOT;

	if (USER_ID > 0 || $CONFIG['allow_guests_enter_file_details'] == 1) {
		if ($cfg['enabtitl']) {
			echo '<tr id="titlrow"><td class="tableb">'.$lang_upload_php['pic_title'].'</td><td class="tableb"><input type="text" name="title" id="title" class="textinput" maxlength="255" style="width:90%" /></td></tr>';
		}
		if ($cfg['enabdesc']) {
			$desclabl = $lang_upload_php['description'];
			if ($CONFIG['show_bbcode_help']) {
				$desclabl .= '&nbsp;'. cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_bbcode_help_title))).'&amp;t='.urlencode(base64_encode(serialize($lang_bbcode_help))),470,245);
			}
			echo '<tr><td class="tableb">'.$desclabl.'</td><td class="tableb"><textarea name="caption" rows="2" id="caption" class="textinput" style="width:90%" /></textarea></td></tr>';
		}
		if ($cfg['enabkeys']) {
			$keywordLabel = sprintf($lang_common['keywords_insert1'],$lang_common['keyword_separators'][$CONFIG['keyword_separator']])
			. '<br /><a href="keyword_select.php" class="greybox">' . $lang_common['keywords_insert2'] .'</a>';
			echo '<tr><td class="tableb">'.$keywordLabel.'</td><td class="tableb"><input type="text" name="keywords" id="keywords" class="textinput" maxlength="255" style="width:90%" /></td></tr>';
		}
		if ($cfg['enabusr1'] && !empty($CONFIG['user_field1_name'])) {
			echo '<tr><td class="tableb">'.$CONFIG['user_field1_name'].'</td><td class="tableb"><input type="text" name="user1" id="user1" class="textinput" maxlength="255" style="width:90%" /></td></tr>';
		}
		if ($cfg['enabusr2'] && !empty($CONFIG['user_field2_name'])) {
			echo '<tr><td class="tableb">'.$CONFIG['user_field2_name'].'</td><td class="tableb"><input type="text" name="user2" id="user2" class="textinput" maxlength="255" style="width:90%" /></td></tr>';
		}
		if ($cfg['enabusr3'] && !empty($CONFIG['user_field3_name'])) {
			echo '<tr><td class="tableb">'.$CONFIG['user_field3_name'].'</td><td class="tableb"><input type="text" name="user3" id="user3" class="textinput" maxlength="255" style="width:90%" /></td></tr>';
		}
		if ($cfg['enabusr4'] && !empty($CONFIG['user_field4_name'])) {
			echo '<tr><td class="tableb">'.$CONFIG['user_field4_name'].'</td><td class="tableb"><input type="text" name="user4" id="user4" class="textinput" maxlength="255" style="width:90%" /></td></tr>';
		}
	}

	$acptmime = $cfg['acptmime'] ? ("accept=\"{$cfg['acptmime']}\"") : '';

	echo <<<EOT
	<tr id="h5upldrow">
		<td class="tableb">{$lang_plugin_html5upload['files']}</td>
		<td class="tableb" style="padding:1em">
			<div style="width:480px">
				<input type="file" name="userpictures" id="upload_field" multiple="multiple" {$acptmime}/>
				&nbsp;<br />
				<div id="dropArea">{$lang_plugin_html5upload['drop_files']}</div>
				&nbsp;<br />
				<div id="progress_report" style="position:relative">
					<div id="progress_report_name"></div>
					<div id="progress_report_status" style="font-style: italic;"></div>
					<div id="totprogress">
						<div id="progress_report_bar" style="background-color: blue; width: 0; height: 100%;"></div>
					</div>
					<div>
						{$lang_plugin_html5upload['files_left']}<span id="qcount">0</span><div class="acti" id="qstop"><img src="plugins/html5upload/css/stop.png" title="{$lang_plugin_html5upload['q_stop']}" onclick="H5uQctrl.stop()" /></div><div class="acti" id="qgocan"><img src="plugins/html5upload/css/play-green.png" title="{$lang_plugin_html5upload['q_resume']}" onclick="H5uQctrl.go()" /><img src="plugins/html5upload/css/cross.png" title="{$lang_plugin_html5upload['q_cancel']}" onclick="H5uQctrl.cancel()" /></div>
					</div>
					<div id="fprogress"></div>
					<div id="server_response"></div>
				</div>
			</div>
		</td>
	</tr>
	<tr id="gotoedit" style="display:none">
		<td class="tableb tableb_alternate">{$lang_plugin_html5upload['continue']}</td>
		<td class="tableb tableb_alternate">
			<button type="button" onclick="window.location=redirURL">{$lang_plugin_html5upload['gotoedit']}</button>
		</td>
	</tr>
EOT;
	endtable();
	pagefooter();
	exit;
}


/** INSTALL/UNINSTALL **/
$thisplugin->add_action('plugin_install', 'html5upload_install');

function html5upload_install () {
	global $CONFIG, $h5a_upload;
	$scfg = cpg_db_escape_string(serialize($h5a_upload->h5u_config_default));
	cpg_db_query("INSERT INTO {$CONFIG['TABLE_CONFIG']} (name, value) VALUES ('html5upload_config', '{$scfg}')");
	return true;
}

$thisplugin->add_action('plugin_uninstall', 'html5upload_uninstall');

function html5upload_uninstall () {
	global $CONFIG;
	cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name LIKE 'html5upload_config%'");
	return true;
}
