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

/** MySQL database implementation **/

class CPG_Dbase
{
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
		return new CPG_DbaseResult($rslt);
	}

	public function execute ()
	{
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

	public function fetchRow ()
	{
		return mysql_fetch_row($this->qresult);
	}

	public function fetchAssoc ()
	{
		return mysql_fetch_assoc($this->qresult);
	}

	public function fetchAssocAll ()
	{
	}

	public function fetchArray ()
	{
		return mysql_fetch_array($this->qresult);
	}

	public function result ($row=0, $fld=0)
	{
		return mysql_result($this->qresult, $row, $fld);
	}

	public function numRows ()
	{
		$num = mysql_num_rows($this->qresult);
		return $num;
	}

}