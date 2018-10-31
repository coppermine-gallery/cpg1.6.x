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

/** MySQL database implementation **/

class CPG_Dbase
{
	public $db_type = 'MySQL';
	protected $linkid = null;
	protected $connected = false;
	protected $errnum = 0;
	protected $error = '';

	public function __construct ($cfg)
	{
		$link = @mysql_connect($cfg['dbserver'], $cfg['dbuser'], $cfg['dbpass']);

		if ($link) {
			$this->linkid = $link;
			if (mysql_select_db($cfg['dbname'], $link)) {
				$this->connected = true;
			} else {
				$this->errnum = mysql_errno();
				$this->error = mysql_error();
			}
			if (!empty($cfg['dbcharset'])) {
				mysql_query("SET NAMES '{$cfg['dbcharset']}'", $link);
			}
		} else {
			$this->errnum = mysql_errno();
			$this->error = mysql_error();
		}
	}

	public function query ($sql)
	{
		$rslt = mysql_query($sql, $this->linkid);
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

	public function getError ($code=false, $last=false)
	{
		if (!$last) {
			$this->errnum = mysql_errno();
			$this->error = mysql_error();
		}
		if ($code) {
			return $this->errnum;
		} else {
			return $this->errnum . ' : ' . $this->error;
		}
	}

	public function escapeStr ($str)
	{
		return mysql_real_escape_string($str, $this->linkid);
	}

	public function insertId ()
	{
		return mysql_insert_id($this->linkid);
	}

	public function affectedRows ()
	{
		return mysql_affected_rows($this->linkid);
	}

}

class CPG_DbaseResult
{
	protected $qresult = null;

	public function __construct ($rslt)
	{
		$this->qresult = $rslt;
	}

	public function fetchRow ($free=false)
	{
		$dat = mysql_fetch_row($this->qresult);
		if ($free) $this->free();
		return $dat;
	}

	public function fetchAssoc ($free=false)
	{
		$dat = mysql_fetch_assoc($this->qresult);
		if ($free) $this->free();
		return $dat;
	}

	public function fetchAssocAll ($free=false)
	{
		// not currently used
	}

	public function fetchArray ($free=false)
	{
		$dat = mysql_fetch_array($this->qresult);
		if ($free) $this->free();
		return $dat;
	}

	public function result ($row=0, $fld=0, $free=false)
	{
		$dat = mysql_result($this->qresult, $row, $fld);
		if ($free) $this->free();
		return $dat;
	}

	public function numRows ($free=false)
	{
		$num = mysql_num_rows($this->qresult);
		if ($free) $this->free();
		return $num;
	}

	public function free ()
	{
		if ($this->qresult) mysql_free_result($this->qresult);
		$this->qresult = null;
	}

}
