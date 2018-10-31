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

class UpChunkObj
{
	protected $ckid;
	protected $ckpath;
	protected $dstpath;
	protected $filename;
	protected $totalchunks;

	public function __construct ($p)
	{
		global $CONFIG;

		$this->ckid = $p->getEscaped('identifier');
		$this->filename = $p->getEscaped('filename');
		$this->totalchunks = $p->getInt('totalChunks');
		$this->dstpath = $CONFIG['fullpath'] . $CONFIG['userpics'] . (USER_ID + FIRST_USER_CAT) . '/';
		$this->ckpath = $this->dstpath . $this->ckid;

		// create the temporary directory
		if ($this->ckid && !is_dir($this->ckpath)) {
			mkdir($this->ckpath, 0777, true);
			upldLog('created chunk dir: '.$this->ckpath);
		}
	}

	public function addChunk ($file, $cnkn)
	{
		$dest = $this->ckpath.'/'.$this->filename.'.part'.$cnkn;
		if (!move_uploaded_file($file, $dest)) {
			upldLog('failed to place chunk: '.$dest);
			errorOut(sprintf($GLOBALS['lang_plugin_upload_h5a']['muf_err'], $cnkn, $this->filename, $file, $dest));
		}
		upldLog('placed chunk: '.$dest);

		if ($cnkn == $this->totalchunks) {

			// count all the parts of this file
			$total_files = 0;
			foreach(scandir($this->ckpath) as $filepart) {
				if (stripos($filepart, $this->filename) !== false) {
					$total_files++;
				}
			}

			if ($total_files !== $this->totalchunks) errorOut($GLOBALS['lang_plugin_upload_h5a']['miss_chnk']);
			return true;
		}

		return false;
	}

	public function combineTo ($dest)
	{
		// create the final destination file
		if (($fp = @fopen($dest, 'w')) !== false) {
			for ($i=1; $i<=$this->totalchunks; $i++) {
				fwrite($fp, file_get_contents($this->ckpath.'/'.$this->filename.'.part'.$i));
			}
			fclose($fp);
		} else {
			upldLog('failed to open destination file: '.$dest);
			errorOut(sprintf($GLOBALS['lang_plugin_upload_h5a']['dest_fail'], $dest));
		}

		upldLog('combined chunks: '.$dest);
	}

	public function cleanup ()
	{
		if ($this->ckid) $this->rrmdir($this->ckpath);
		upldLog('chunks cleared: '.$this->ckpath);
	}

	private function rrmdir ($dir) {
		if (is_dir($dir)) {
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != '.' && $object != '..') {
					if (filetype($dir . '/' . $object) == 'dir') {
						$this->rrmdir($dir . '/' . $object); 
					} else {
						unlink($dir . '/' . $object);
					}
				}
			}
			reset($objects);
			rmdir($dir);
		}
	}

}
//EOF