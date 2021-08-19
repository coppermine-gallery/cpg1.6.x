<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2021 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * updater.php
 * @since  1.6.14
 */

define('IN_COPPERMINE', true);
define('UPDATE_PHP', true);
define('UPDATER_LOG', 'logs/updater.log.txt');

require 'include/init.inc.php';

require_once 'include/upgrader.inc.php';

if (!GALLERY_ADMIN_MODE) {
	cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

if (!extension_loaded('zip')) {
	cpg_die(ERROR, $lang_update_php['no_zip_extn'], __FILE__, __LINE__);
}

pageheader('Coppermine Upgrader');
echo <<<EOT
<style type="text/css">
span.admin_menu { padding:1px; }
span.admin_menu a:link { color:#FFF; }
span.admin_menu a:visited { color:#FFF; }
</style>
EOT;

$updater = new CPG_Updater(false, isset($pre_release) ? !$pre_release : true);
if ($superCage->post->keyExists('doupd')) {
	if (!checkFormToken()) {
		cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
	}
	$updater->performUpdate($superCage->post->getInt('updid'));
	theme_msg_box($lang_update_php['files_placed_title'], $lang_update_php['files_placed_msg'], 'cpg_message_info', $lang_update_php['complete_update'], 'update.php');
} else {

	echo <<<EOT
	<script type="text/javascript">
	function hasUpdSelect(frm)
	{
		if ((frm.updid.length && !frm.updid.value) || (!frm.updid.length && !frm.updid.checked)) {
			alert('{$lang_update_php['select_update']}');
			return false;
		}
		$('#doupd').hide();
		$('#upding').show();
		return true;
	}
	</script>
EOT;

	$updates = $updater->getUpdates();
	if ($updates) {
		$badDirs = $updater->checkCpgDirs();
		if ($badDirs) {
			$bdmsg = implode(',', $badDirs);
			theme_msg_box('',$lang_update_php['not_writeable'].$bdmsg, 'cpg_message_error', '', '');
		}
		echo '<form id="updForm" action="'.$superCage->server->getEscaped('REQUEST_URI').'" method="post" onsubmit="return hasUpdSelect(this);">';
		starttable('100%', $lang_update_php['available_updates'], 2);
		foreach ($updates as $k => $updt) {
			$tclass = $k%2 ? 'tableb_alternate' : 'tabelb';
			$xmsg = '';
			if ($updt['pre']) { $xmsg .= '<br />'.$lang_update_php['pre_warning']; }
			echo <<<EOT
		<tr>
			<td class="{$tclass}"><input type="radio" name="updid" value="{$updt['id']}" /></td>
			<td class="{$tclass}"><b>{$updt['name']}</b>{$xmsg}<br />{$updt['body']}</td>
		</tr>
EOT;
		}
		endtable();
		list($timestamp, $form_token) = getFormToken();
		echo "<input type=\"hidden\" name=\"form_token\" value=\"{$form_token}\" />";
		echo "<input type=\"hidden\" name=\"timestamp\" value=\"{$timestamp}\" />";
		if (!$badDirs) echo '<button type="submit" name="doupd" id="doupd" class="admin">'.$lang_update_php['perform_update'].'</button>';
		echo '<img id="upding" src="images/loader.gif" alt="" style="display:none" /></form>';
	} else {
		theme_msg_box($lang_update_php['no_updates_title'], $lang_update_php['no_updates_msg'], 'cpg_message_warning', '', '');
	}
}
pagefooter();
//EOF