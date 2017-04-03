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

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

class DbaseSelect
{
	protected $dbtypes = array('mysqli'=>'MYSQLI','pdo:mysql'=>'PDO:MYSQL','mysql'=>'MYSQL');

	public function __construct ($dbtypes=null)
	{
		if ($dbtypes) $this->dbtypes = $dbtypes;
	}

	public function options ($sel='mysqli', $upd=false)
	{
		$opts = '';
		foreach ($this->dbtypes as $dtype => $dsp) {
			$opts .= '<option value="'.$dtype.'"';
			list($tnam,$tsub) = explode(':', $dtype.':');
			require_once 'include/database/'.$tnam.'/install.php';
			$ifunc = 'dbcheck_'.$tnam;
			if (function_exists($ifunc) && $ifunc($tsub)===true) {
				if ($dtype == $sel) $opts .= ' selected';
				$opts .= '>'.$dsp;
			} else {
				$opts .= ' disabled>'.$dsp.' ('.$ifunc($tsub).')';
			}
			$opts .= '</option>';
		}
		return $opts;
	}

}
//EOF