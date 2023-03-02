<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2023 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * include/database/pdo/dbase.inc.php
 * @since  1.6.23
 */

/** PDO database implementation **/

class CPG_Dbase
{
	public $db_type = 'MySQL(PDO)';
	protected $_instance;
	protected $connected = false;
	protected $errnum = 0;
	protected $error = '';
	protected $stmt = null;

	public function __construct ($cfg)
	{
		//parse server and resolve any connection port
		$sp = explode(':', $cfg['dbserver']);
		if (empty($sp[1])) $sp[1] = null;
		if (isset($cfg['dbport'])) $sp[1] = $cfg['dbport'];

		list($db_ext, $db_sub) = explode(':', $cfg['dbtype']);
		try {
			$dsn = "{$db_sub}:host=" . $sp[0] . ';dbname='.$cfg['dbname'];
			if ($sp[1]) $dsn .= ';port='.$sp[1];
			if (!empty($cfg['dbcharset'])) {
				$dsn .= ';charset='.$cfg['dbcharset'];
			}
			$db = new PDO($dsn, $cfg['dbuser'], $cfg['dbpass']);
			$this->_instance = $db;
			$this->connected = true;
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
		}
	}

	public function query ($sql)
	{
		try {
			$this->stmt = $this->_instance->query($sql);
		} catch (PDOException $e) {
			$this->errnum = $e->getCode();
			$this->error = $e->getMessage();
			return false;
		}
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

	public function getError ($code=false, $last=false)
	{
		if (!$last) {
			$einf = $this->_instance->errorInfo();
			$this->errnum = $einf[1];
			$this->error = $einf[2];
		}
		if ($code) {
			return $this->errnum;
		} else {
			return $this->errnum . ' : ' . $this->error;
		}
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

	public function fetchRow ($free=false)
	{
		$dat = $this->qresult->fetch(PDO::FETCH_NUM);
		if ($free) $this->free();
		return $dat;
	}

	public function fetchAssoc ($free=false)
	{
		$dat = $this->qresult->fetch(PDO::FETCH_ASSOC);
		if ($free) $this->free();
		return $dat;
	}

	public function fetchAssocAll ($free=false)
	{
		// not currently used
	}

	public function fetchArray ($free=false)
	{
		$dat = $this->qresult->fetch(PDO::FETCH_BOTH);
		if ($free) $this->free();
		return $dat;
	}

	public function result ($row=0, $fld=0, $free=false)
	{
		$r = $this->qresult->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_ABS, $row);
		if ($free) $this->free();
		return $r ? $r[$fld] : false;
	}

	public function numRows ($free=false)
	{
		$n = $this->qresult->rowCount();
		if ($free) $this->free();
		return $n;
	}

	public function free ()
	{
		if ($this->qresult) $this->qresult->closeCursor();
		$this->qresult = null;
	}

}
