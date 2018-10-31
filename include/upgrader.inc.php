<?php
/**************************
  Coppermine Photo Gallery
 **************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

 ********************************************
  Coppermine version: 1.6.03
  $HeadURL$
 ********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

class CPG_Updater
{
	protected $updates = array();

	public function __construct ($quiet=false, $no_pre=true)
	{
		global $lang_update_php;

		$releases = json_decode($this->getUrlData('https://api.github.com/repos/coppermine-gallery/cpg1.6.x/releases'));
		if (!$releases) {
			if ($quiet) return;
			cpg_die(ERROR, $lang_update_php['not_found']?:'Releases of CPG not found at Github', __FILE__, __LINE__);
		}
		foreach ($releases as $r) {
			if ($r->prerelease && $no_pre) continue;	// don't offer any prereleases
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

	public function __toString ()
	{
		return print_r($this->updates, true);
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