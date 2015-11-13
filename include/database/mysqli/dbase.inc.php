<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2015 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

/** MySQLi database implementation **/

class CPG_Dbase
{
	protected $linkid = null;
	protected $connected = false;
	protected $errnum = 0;
	protected $error = '';

	public function __construct ($cfg)
	{
		$link = @mysqli_connect($cfg['dbserver'], $cfg['dbuser'], $cfg['dbpass'], $cfg['dbname']);

		if ($link) {
			$this->linkid = $link;
			$this->connected = true;
			if (!empty($cfg['dbcharset'])) {
				mysqli_real_query($link, "SET NAMES '{$cfg['dbcharset']}'");
			}
		} else {
			$this->errnum = mysqli_connect_errno();
			$this->error = mysqli_connect_error();
		}
	}

	public function query ($sql)
	{
		$rslt = mysqli_query($this->linkid, $sql);
		if ($rslt === true) return true;
		if ($rslt) {
			return new CPG_DbaseResult($rslt);
		} else {
			return false;
		}
	}

	public function execute ()
	{
		// not currently used
	}

	public function isConnected ()
	{
		return $this->connected;
	}

	public function getError ()
	{
		return $this->errnum . ' : ' . $this->error;
	}

	public function escapeStr ($str)
	{
		return mysqli_real_escape_string($this->linkid, $str);
	}

	public function insertId ()
	{
		return mysqli_insert_id($this->linkid);
	}

	public function affectedRows ()
	{
		return mysqli_affected_rows($this->linkid);
	}

}

class CPG_DbaseResult
{
	protected $qresult = null;

	public function __construct ($rslt)
	{
		$this->qresult = $rslt;
	}

	public function fetchRow ($hold=false)
	{
		$dat = mysqli_fetch_row($this->qresult);
		if (!$hold) $this->free();
		return $dat;
	}

	public function fetchAssoc ($hold=false)
	{
		$dat = mysqli_fetch_assoc($this->qresult);
		if (!$hold) $this->free();
		return $dat;
	}

	public function fetchAssocAll ($hold=false)
	{
		// not currently used
	}

	public function fetchArray ($hold=false)
	{
		$dat = mysqli_fetch_array($this->qresult);
		if (!$hold) $this->free();
		return $dat;
	}

	public function result ($row=0, $fld=0, $hold=false)
	{
		$return = null;
		if (mysqli_data_seek($this->qresult, $row)) {
			$row = $this->qresult->fetch_row();
			$return = $row[$fld];
		}
		if (!$hold) $this->free();
		return $return;
	}

	public function numRows ()
	{
		$num = mysqli_num_rows($this->qresult);
		return $num;
	}

	public function free ()
	{
		if ($this->qresult) mysqli_free_result($this->qresult);
		$this->qresult = null;
	}

}
