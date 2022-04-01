<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2022 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * include/database/mysqli/dbase.inc.php
 * @since  1.6.19
 */

/** MySQLi database implementation **/

class CPG_Dbase
{
	public $db_type = 'MySQLi';
	protected $dbobj = null;
	protected $connected = false;
	protected $errnum = 0;
	protected $error = '';

	public function __construct ($cfg)
	{
		//parse server and resolve any connection port
		$sp = explode(':', $cfg['dbserver']);
		if (empty($sp[1])) $sp[1] = null;
		if (isset($cfg['dbport'])) $sp[1] = $cfg['dbport'];

		// needed for PHP 8.1 and later
		mysqli_report(MYSQLI_REPORT_OFF);

		$obj = new mysqli($sp[0], $cfg['dbuser'], $cfg['dbpass'], $cfg['dbname'], $sp[1]);

		if ($obj) {
			$this->dbobj = $obj;
			if (!mysqli_connect_error()) {
				$this->connected = true;
				if (!empty($cfg['dbcharset'])) {
					$obj->real_query("SET NAMES '{$cfg['dbcharset']}'");
				}
			}
		}
		$this->errnum = mysqli_connect_errno();
		$this->error = mysqli_connect_error();
	}

	public function query ($sql)
	{
		$rslt = $this->dbobj->query($sql);
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
			$this->errnum = $this->dbobj->errno;
			$this->error = $this->dbobj->error;
		}
		if ($code) {
			return $this->errnum;
		} else {
			return $this->errnum . ' : ' . $this->error;
		}
	}

	public function escapeStr ($str)
	{
		return $this->dbobj->real_escape_string($str);
	}

	public function insertId ()
	{
		return $this->dbobj->insert_id;
	}

	public function affectedRows ()
	{
		return $this->dbobj->affected_rows;
	}

}

class CPG_DbaseResult
{
	protected $robj = null;

	public function __construct ($rslt)
	{
		$this->robj = $rslt;
	}

	public function fetchRow ($free=false)
	{
		$dat = $this->robj->fetch_row();
		if ($free) $this->free();
		return $dat;
	}

	public function fetchAssoc ($free=false)
	{
		$dat = $this->robj->fetch_assoc();
		if ($free) $this->free();
		return $dat;
	}

	public function fetchAssocAll ($free=false)
	{
		// not currently used
	}

	public function fetchArray ($free=false)
	{
		$dat = $this->robj->fetch_array();
		if ($free) $this->free();
		return $dat;
	}

	public function result ($row=0, $fld=0, $free=false)
	{
		$return = null;
		if ($this->robj->data_seek($row)) {
			$row = $this->robj->fetch_array();
			$return = $row[$fld];
		}
		if ($free) $this->free();
		return $return;
	}

	public function numRows ($free=false)
	{
		$num = $this->robj->num_rows;
		if ($free) $this->free();
		return $num;
	}

	public function free ()
	{
		if (is_object($this->robj)) $this->robj->free();
		$this->robj = null;
	}

}
