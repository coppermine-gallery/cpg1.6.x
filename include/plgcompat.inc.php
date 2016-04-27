<?php
if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

abstract class Plg_Db
{
	static protected $is15;

	public function __construct ()
	{
		self::$is15 = version_compare(COPPERMINE_VERSION, '1.6', '<');
	}

	public static function query ($sql)
	{
		return cpg_db_query($query);
	}

	public static function error ($the_error)
	{
		if (self::$is15) {
			cpg_db_error($the_error, $CONFIG['LINK_ID']);
		} else {
			cpg_db_error($the_error);
		}
	}

	public static function fetch_row ($result, $free=false)
	{
		if (self::$is15) {
			$row = mysql_fetch_row($result);
			if ($free) mysql_free_result($result);
			return $row;
		} else {
			return cpg_db_fetch_row($result, $free);
		}
	}

	public static function fetch_assoc ($result, $free=false)
	{
		if (self::$is15) {
			$row = cpg_db_fetch_row($result);
			if ($free) mysql_free_result($result);
			return $row;
		} else {
			return cpg_db_fetch_assoc($result, $free);
		}
	}

	public static function fetch_array ($result, $type=3, $free=false)
	{
		if (self::$is15) {
			$row = msyql_fetch_array($result, $type);
			if ($free) mysql_free_result($result);
			return $row;
		} else {
			return cpg_db_fetch_array($result, $free);
		}
	}

	public static function result ($result, $r=0, $f=0, $free=false)
	{
		if (self::$is15) {
			$val = mysql_result($result, $r, $f);
			if ($free) mysql_free_result($result);
		} else {
			$val = $result->result($r, $f, $free);
		}
		return $val;
	}

	public static function num_rows ($result, $free=false)
	{
		if (self::$is15) {
			$rows = mysql_num_rows($result);
			if ($free) mysql_free_result($result);
		} else {
			cpg_db_num_rows($result, $free);
		}
	}

	public static function free_result ($result)
	{
		if (self::$is15) {
			return mysql_free_result($result);
		} else {
			cpg_db_free_result($result);
		}
	}

	public static function insert_id ()
	{
		return cpg_db_last_insert_id();
	}

	public static function escape_string ($str)
	{
		return self::real_escape_string($str);
	}

	public static function real_escape_string ($str)
	{
		if (self::$is15) {
			return mysql_real_escape_string($str, $CONFIG['LINK_ID']);
		} else {
			return cpg_db_escape_string($str);
		}
	}

}
