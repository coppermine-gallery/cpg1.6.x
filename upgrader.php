<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.03
  $HeadURL$
**********************************************/

define('IN_COPPERMINE', true);
define('UPDATE_PHP', true);
define('UPDATER_LOG', 'logs/updater.log.txt');

require('include/init.inc.php');

// ================================================== //
// to be added appropriately to the language file(s)
	$lang_update_php['no_zip_extn'] = 'The extension providing ZipArchive is not available';
	$lang_update_php['files_placed_title'] = 'Update files placed';
	$lang_update_php['files_placed_msg'] = 'All update files were successfully placed. Click below to complete the update.';
	$lang_update_php['complete_update'] = 'Complete Update';
	$lang_update_php['select_update'] = 'Please select the update to perform.';
	$lang_update_php['available_updates'] = 'Available Updates';
	$lang_update_php['not_writeable'] = '<b>Updating can not be performed</b><br />The following directories are not writeable: ';
	$lang_update_php['perform_update'] = 'Perform Selected Update';
	$lang_update_php['no_updates_title'] = 'No update available';
	$lang_update_php['no_updates_msg'] = 'No updates are available for your version';
	$lang_update_php['not_found'] = 'Releases of CPG not found at Github';
	$lang_update_php['save_error'] = 'Could not save new update. Operation aborted.';
	$lang_update_php['pre_warning'] = '<span style="color:red">WARNING: This is a pre-release version!</span>';
// ================================================== //

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
$updater = new CPG_Updater();
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
			$xmsg = '';
			if ($updt['pre']) { $xmsg .= '<br />'.$lang_update_php['pre_warning']; }
			$tclass = $k%2 ? 'tableb_alternate' : 'tabelb';
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


class CPG_Updater
{
	protected $updates = array();

	public function __construct ()
	{
		global $lang_update_php;

		$releases = json_decode($this->getUrlData('https://api.github.com/repos/coppermine-gallery/cpg1.6.x/releases'));
		if (!$releases) {
			cpg_die(ERROR, $lang_update_php['not_found'], __FILE__, __LINE__);
		}
		foreach ($releases as $r) {
		//	if ($r->prerelease) continue;	// don't offer any prereleases
			$tag = $r->tag_name;
			if (preg_match('/\d+\.\d+\.\d+/', $tag, $m)) {
				if (version_compare($m[0], COPPERMINE_VERSION) == 1) {
					$this->updates[] = array(
						'id' => $r->id,
						'tag' => $m[0],
						'pre' => $r->prerelease,
						'ball' => $r->zipball_url,
						'name' => $r->name,
						'body' => nl2br($r->body)
						);
				}
			}
		}
	}

	public function getUpdates ()
	{
		return $this->updates;
	}

	public function performUpdate ($id)
	{
		global $lang_update_php;

		$updt = null;
		foreach ($this->updates as $u) {
			if ($u['id'] == $id) {
				$updt = $u;
				break;
			}
		}
		if (!$updt) return;

		unlink(UPDATER_LOG);
		$this->logIt("UPDATING TO: {$updt['tag']}");
		$tmpf = (sys_get_temp_dir() ?: 'albums/edit').'/cpg_upd_'.time().'.zip';
		$newUpdate = $this->getUrlData($updt['ball']);
		$dlHandler = fopen($tmpf, 'w');
		if (!fwrite($dlHandler, $newUpdate)) { cpg_die(ERROR, $lang_update_php['save_error'], __FILE__, __LINE__); }
		fclose($dlHandler);

		$f2p = array('include/config.inc.php','anycontent.php');	//files to preserve if they already exist
		$p2s = array('albums/');	//paths to skip (whether they exist or not)
		$zip = new ZipArchive;
		$res = $zip->open($tmpf);
		if ($res === TRUE) {
			for ($i = 0; $i < $zip->numFiles; $i++ ) {
				$stat = $zip->statIndex($i);
				list($bd,$fp) = explode('/', $stat['name'], 2);
				if (substr($fp, -1) == '/') {
					if ($this->matchedPath($fp, $p2s)) continue;
					if (!is_dir($fp)) @mkdir($fp);
					$this->logIt("DIR: {$fp}");
				} elseif ($fp) {
					if (in_array($fp, $f2p) && file_exists($fp)) continue;
					if ($this->matchedPath($fp, $p2s)) continue;
					$fc = $zip->getFromIndex($i);
					file_put_contents($fp, $fc);
					$this->logIt("PUT: {$fp}");
				}
			}
			$zip->close();
		} else {
			echo 'failed, code:' . $res;
		}

		unlink($tmpf);
	}

	public function checkCpgDirs ()
	{
		$cpgDirs = array('albums','bridge','css','docs','images','include','js','lang','logs','plugins','sql','themes');
		$ng = array();
		foreach ($cpgDirs as $dir) {
			if (!(is_dir($dir) && is_writable($dir))) $ng[] = $dir;
		}
		return $ng;
	}

	private function getUrlData ($url)
	{
		$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/537.75.14';
		if (ini_get('allow_url_fopen')) {
			ini_set('user_agent', $ua);
			$rfc = file_get_contents($url);
			if (!$rfc) return $this->curly($url, $ua);
			return $rfc;
		} else {
			return $this->curly($url, $ua);
		}
	}

	private function curly ($url, $agent)
	{
		if (!extension_loaded('libcurl')) return '';
		// create curl resource
		$ch = curl_init();
		// set url
		curl_setopt($ch, CURLOPT_URL, $url);
		//return the transfer as a string
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		// $output contains the output string
		$output = curl_exec($ch);
		// close curl resource to free up system resources
		curl_close($ch);
		// return the data
		return $output;
	}

	private function matchedPath ($file, $paths)
	{
		foreach ($paths as $p) {
			$p = str_replace('/','\/',$p);
			if (preg_match("/^{$p}/", $file)) return true;
		}
		return false;
	}

	private function logIt ($msg)
	{
		file_put_contents(UPDATER_LOG, "{$msg}\n", FILE_APPEND);
	}

}
//EOF