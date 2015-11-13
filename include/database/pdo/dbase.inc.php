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

/** PDO database implementation **/

class CPG_Dbase
{
	protected $_instance;
	protected $connected = false;
	protected $errnum = 0;
	protected $error = '';
	protected $stmt = null;

	public function __construct ($cfg)
	{
		list($db_ext, $db_sub) = explode(':', $cfg['dbtype']);
		try {
			$dsn = "{$db_sub}:host=" . $cfg['dbserver'] . ';dbname='.$cfg['dbname'];
			$db = new PDO($dsn, $cfg['dbuser'], $cfg['dbpass']);
			$this->_instance = $db;
			$this->connected = true;
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
		}
	}

	public function query ($sql)
	{
		$this->stmt = $this->_instance->query($sql);
		if ($this->stmt === true) return true;
		if ($this->stmt) {
			return new CPG_DbaseResult($this->stmt);
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
		//need to remove single quote chars that PDO places around string
		return trim($this->_instance->quote($str), '\'');
	}

	public function insertId ()
	{
		return $this->_instance->lastInsertId();
	}

	public function affectedRows ()
	{
		if (!$this->stmt) return false;
		return $this->stmt->rowCount();
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
		$dat = $this->qresult->fetch(PDO::FETCH_NUM);
		if (!$hold) $this->free();
		return $dat;
	}

	public function fetchAssoc ($hold=false)
	{
		$dat = $this->qresult->fetch(PDO::FETCH_ASSOC);
		if (!$hold) $this->free();
		return $dat;
	}

	public function fetchAssocAll ($hold=false)
	{
		// not currently used
	}

	public function fetchArray ($hold=false)
	{
		$dat = $this->qresult->fetch(PDO::FETCH_BOTH);
		if (!$hold) $this->free();
		return $dat;
	}

	public function result ($row=0, $fld=0, $hold=false)
	{
		$row = $this->qresult->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_ABS, $row);
		if (!$hold) $this->free();
		return $r ? $r[$fld] : false;
	}

	public function numRows ()
	{
		$i = 0;
		if ($this->qresult) while ($this->qresult->fetch(PDO::FETCH_NUM)) { $i++; }
		return $i;
	}

	public function free ()
	{
		if ($this->qresult) $this->qresult->closeCursor();
		$this->qresult = null;
	}

}
