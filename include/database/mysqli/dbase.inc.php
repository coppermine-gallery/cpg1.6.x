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

	public function fetchRow ()
	{
		return mysqli_fetch_row($this->qresult);
	}

	public function fetchAssoc ()
	{
		return mysqli_fetch_assoc($this->qresult);
	}

	public function fetchAssocAll ()
	{
	}

	public function fetchArray ()
	{
		return mysqli_fetch_array($this->qresult);
	}

	public function result ($row=0, $fld=0)
	{
		$return = null;
		if (mysqli_data_seek($this->qresult, $row)) {
			$row = $this->qresult->fetch_row();
			$return = $row[$fld];
		}
		return $return;
	}

	public function numRows ()
	{
		$num = mysqli_num_rows($this->qresult);
		return $num;
	}

}