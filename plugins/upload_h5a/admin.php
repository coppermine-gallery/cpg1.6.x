<?php
/**************************
  Coppermine Photo Gallery
 **************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

 ************************************
  Coppermine version: 1.6.03
  $HeadURL$
 ************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

if (!GALLERY_ADMIN_MODE) {
	cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

require_once './plugins/upload_h5a/initialize.inc.php';

pageheader($lang_plugin_upload_h5a['html5upload'].' - '.$lang_gallery_admin_menu['admin_lnk']);

function h5u_config_save ($sC, $revert=false) {
	global $CONFIG, $superCage, $lang_plugin_upload_h5a, $lang_common, $lang_errors;

	if (!checkFormToken()) {
		global $lang_errors;
		cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
	}

	$grpn = 0;
	if ($superCage->post->keyExists('h5u_gSel')) {
		$grpn = (int) $superCage->post->getEscaped('h5u_gSel');
	}
	$grpc = $grpn ? $grpn : '';

	if ($revert && $grpc) {
		cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'upload_h5a{$grpc}'");
		return;
	}

	$cfg = isset($CONFIG['upload_h5a'.$grpc]) ? unserialize($CONFIG['upload_h5a'.$grpc]) : unserialize($CONFIG['upload_h5a']);

	if ($superCage->post->keyExists('upsize')) {
		$uplsiz = (int) $superCage->post->getEscaped('upsize');
		$uplsizm = (int) $superCage->post->getEscaped('upsizem');
		for ($i=0;$i<$uplsizm+1;$i++) {
			$uplsiz = $uplsiz << 10;
		}
		$cfg['upldsize'] = $uplsiz;
	}

	if ($superCage->post->keyExists('concurrent')) {
		$cfg['concurrent'] = (int) $superCage->post->getEscaped('concurrent');
	}

	if ($superCage->post->keyExists('acptmime')) {
		$mtypes = trim($superCage->post->getEscaped('acptmime'));
		$mtypes = str_replace('&quot;', '', $mtypes);
		$mtypes = trim($mtypes);
		$mtypes = preg_replace('/([^,\s])[,\s]+([^,\s])/', '$1,$2', $mtypes);
		$mtypes = preg_replace('/\s+/', '', $mtypes);
		$cfg['acptmime'] = $mtypes;
	}

	$cfg['autoedit'] = $superCage->post->keyExists('autoedit') ? 1 : 0;
	$cfg['enabtitl'] = $superCage->post->keyExists('titlfld') ? 1 : 0;
	$cfg['enabdesc'] = $superCage->post->keyExists('descfld') ? 1 : 0;
	$cfg['enabkeys'] = $superCage->post->keyExists('keysfld') ? 1 : 0;
	$cfg['enabusr1'] = $superCage->post->keyExists('usr1fld') ? 1 : 0;
	$cfg['enabusr2'] = $superCage->post->keyExists('usr2fld') ? 1 : 0;
	$cfg['enabusr3'] = $superCage->post->keyExists('usr3fld') ? 1 : 0;
	$cfg['enabusr4'] = $superCage->post->keyExists('usr4fld') ? 1 : 0;

	$scfg = cpg_db_escape_string(serialize($cfg));
	if (isset($CONFIG['upload_h5a'.$grpc])) {
		cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$scfg}' WHERE name = 'upload_h5a{$grpc}'");
	} else {
		cpg_db_query("INSERT INTO {$CONFIG['TABLE_CONFIG']} (name, value) VALUES ('upload_h5a{$grpc}', '{$scfg}')");
	}

	starttable('100%', $lang_common['information']);
	echo <<<EOT
	<tr>
		<td class="tableb" width="200">
			<div class="cpg_message_info">{$lang_plugin_upload_h5a['saved']}</div>
		</td>
	</tr>
EOT;
	endtable();
	echo '<br />';
}

function h5u_config_groupSel ($grpn=0) {
	global $CONFIG, $superCage;

	$sql = "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name";
	$rslt = cpg_db_query($sql);
	$group_list = cpg_db_fetch_rowset($rslt, true);

	$htm = '<select name="h5u_gSel" onchange="selectConfigGroup(event,this)" style="margin-left:3em">';
	$htm .= '<option value="0"'.($grpn==0?' selected':'').'>&lt; default &gt;</option>';
	foreach ($group_list as $group) {
		$htm .= '<option value="'.$group['group_id'].'"'.($grpn==$group['group_id']?' selected':'').'>'.$group['group_name'].'</option>';
	}
	return $htm. '</select><div id="h5u_busy"></div>';
}

function h5u_config_form ($sC) {
	global $CONFIG, $superCage, $lang_common, $lang_plugin_upload_h5a, $lang_gallery_admin_menu, $h5a_upload;

	$plugpath = 'plugins/upload_h5a';
	echo <<<EOT
	<style>
		#h5u_busy {width:20px;height:20px;vertical-align:middle;margin-left:8px;display:none;background: transparent url("{$plugpath}/css/busy.gif") 0 0 no-repeat}
	</style>
EOT;
	$grpn = 0;
	if ($superCage->post->keyExists('h5u_gSel')) {
		$grpn = (int) $superCage->post->getEscaped('h5u_gSel');
	}

	// since we may have just written the cfg to the db, get a fresh copy from there
	$grpc = $grpn ? $grpn : '';
	$rslt = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'upload_h5a{$grpc}'");
	$scfg = $rslt->fetchAssoc(true);
	$tcfg = $scfg ? unserialize($scfg['value']) : unserialize($CONFIG['upload_h5a']);

	$plugin_help = $h5a_upload->help_button('adm');
	echo '<form id="cfgForm" action="'.$superCage->server->getEscaped('REQUEST_URI').'" method="post">';
	starttable('100%', $lang_plugin_upload_h5a['html5upload']." - ".$lang_gallery_admin_menu['admin_lnk'].$plugin_help.h5u_config_groupSel($grpn), 2);

	$concopts = '';
	for ($value=1; $value<5; $value++) {
		$selected = $tcfg['concurrent'] == $value ? 'selected="selected"' : '';
		$concopts .= "<option value=\"$value\" $selected>$value</option>";
	}

	$uplsizm = 0;
	$uplsiz = $tcfg['upldsize'];
	if ($uplsiz) {
		if ($uplsiz % 1073741824 == 0) {
			$uplsizm = 2;
			$uplsiz = $uplsiz >> 30;
		} elseif ($uplsiz % 1048576 == 0) {
			$uplsizm = 1;
			$uplsiz = $uplsiz >> 20;
		} else {
			$uplsiz = $uplsiz >> 10;
		}
	} else {
		$uplsiz = '';
	}

	$sizmopts = '';
	foreach(array('K','M','G') as $k=>$v) {
		$selected = $uplsizm == $k ? 'selected="selected"' : '';
		$sizmopts .= "<option value=\"$k\" $selected>$v</option>";
	}

	$sysfmax = $h5a_upload->sys_max_upl_size;
	$sysfmaxh = $h5a_upload->to_KMG($sysfmax);

	$autochecked = $tcfg['autoedit'] ? 'checked="checked" ' : '';
	$titlchecked = $tcfg['enabtitl'] ? 'checked="checked" ' : '';
	$descchecked = $tcfg['enabdesc'] ? 'checked="checked" ' : '';
	$keyschecked = $tcfg['enabkeys'] ? 'checked="checked" ' : '';
	$usr1checked = $tcfg['enabusr1'] ? 'checked="checked" ' : '';
	$usr2checked = $tcfg['enabusr2'] ? 'checked="checked" ' : '';
	$usr3checked = $tcfg['enabusr3'] ? 'checked="checked" ' : '';
	$usr4checked = $tcfg['enabusr4'] ? 'checked="checked" ' : '';

	$enabflds = '';
	if (!empty($CONFIG['user_field1_name'])) {
		$enabflds .= '<br /><input type="checkbox" name="usr1fld" id="usr1fld" '.$usr1checked.'/> <label for="usr1fld">'.$CONFIG['user_field1_name'].'</label>';
	}
	if (!empty($CONFIG['user_field2_name'])) {
		$enabflds .= '<br /><input type="checkbox" name="usr2fld" id="usr2fld" '.$usr2checked.'/> <label for="usr2fld">'.$CONFIG['user_field2_name'].'</label>';
	}
	if (!empty($CONFIG['user_field3_name'])) {
		$enabflds .= '<br /><input type="checkbox" name="usr3fld" id="usr3fld" '.$usr3checked.'/> <label for="usr3fld">'.$CONFIG['user_field3_name'].'</label>';
	}
	if (!empty($CONFIG['user_field4_name'])) {
		$enabflds .= '<br /><input type="checkbox" name="usr4fld" id="usr4fld" '.$usr4checked.'/> <label for="usr4fld">'.$CONFIG['user_field4_name'].'</label>';
	}

	$submit_icon = cpg_fetch_icon('ok', 1);
	$rvrtbut = '';
	if ($grpn && $scfg) {
		$undo_icon = cpg_fetch_icon('undo', 1);
		$rvrtbut = '<button value="'.$lang_plugin_upload_h5a['revert'].'" name="revert" class="button" type="submit">'.$undo_icon.$lang_plugin_upload_h5a['revert'].'&nbsp;</button>&nbsp;&nbsp;';
	}

	echo <<<EOT
	<tr>
		<td class="tableb" width="50%">
			{$lang_plugin_upload_h5a['select']}
		</td>
		<td class="tableb">
			<select class="listbox" name="concurrent">$concopts</select>
		</td>
	</tr>
	<tr>
		<td class="tableb">
			{$lang_plugin_upload_h5a['maxUplSiz']} (PHP:CPG&nbsp;=&nbsp;{$sysfmaxh})
		</td>
		<td class="tableb">
			<input type="text" name="upsize" style="width:4em" maxlength="5" value="{$uplsiz}" />
			<select class="listbox" name="upsizem">$sizmopts</select>
		</td>
	</tr>
	<tr>
		<td class="tableb">
			{$lang_plugin_upload_h5a['acptmime']}
		</td>
		<td class="tableb">
			<input type="text" name="acptmime" style="width:90%" maxlength="60" value="{$tcfg['acptmime']}" />
		</td>
	</tr>
	<tr>
		<td class="tableb">
			{$lang_plugin_upload_h5a['autoedit']}
		</td>
		<td class="tableb">
			<input type="checkbox" name="autoedit" $autochecked/>
		</td>
	</tr>
	<tr>
		<td class="tableb">
			{$lang_plugin_upload_h5a['incflds']}
		</td>
		<td class="tableb">
			<input type="checkbox" name="titlfld" id="titlfld" $titlchecked/> <label for="titlfld">{$lang_common['title']}</label>
			<br /><input type="checkbox" name="descfld" id="descfld" $descchecked/> <label for="descfld">{$lang_common['caption']}</label>
			<br /><input type="checkbox" name="keysfld" id="keysfld" $keyschecked/> <label for="keysfld">{$lang_common['keywords']}</label>
			{$enabflds}
		</td>
	</tr>
	<tr>
		<td class="tableb" colspan="2" style="text-align:center">
			{$rvrtbut}<button value="{$lang_common['apply_changes']}" name="save" class="button" type="submit">{$submit_icon}{$lang_common['apply_changes']}&nbsp;</button>
		</td>
	</tr>
EOT;
	endtable();

	list($timestamp, $form_token) = getFormToken();
	echo "<input type=\"hidden\" name=\"form_token\" value=\"{$form_token}\" />";
	echo "<input type=\"hidden\" name=\"timestamp\" value=\"{$timestamp}\" />";
	pagefooter();

}

if ($superCage->post->keyExists('save'))
	h5u_config_save($superCage);

if ($superCage->post->keyExists('revert'))
	h5u_config_save($superCage, true);

echo <<<EOT
<script type="text/javascript">
function selectConfigGroup (e,elm) {
	document.getElementById("h5u_busy").style.display = "inline-block";
	document.getElementById("cfgForm").submit();
}
</script>
EOT;
h5u_config_form($superCage);
?>