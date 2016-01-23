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
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

define('IN_COPPERMINE', true);

define('SMILIES_PHP', true);
define('ALBMGR_PHP', true);
define('BANNING_PHP', true);
define('BRIDGEMGR_PHP', true);
define('CALENDAR_PHP', true);
define('CATMGR_PHP', true);
define('CONTACT_PHP', true);
define('ADMIN_PHP', true);
define('DB_ECARD_PHP', true);
define('DB_INPUT_PHP', true);
define('DELETE_PHP', true);
define('DISPLAYIMAGE_PHP', true);
define('ECARDS_PHP', true);
define('REPORT_FILE_PHP', true);
define('EDITPICS_PHP', true);
define('FORGOT_PASSWD_PHP', true);
define('GROUPMGR_PHP', true);
define('INDEX_PHP', true);
define('INSTALL_PHP', true);
define('KEYWORDMGR_PHP', true);
define('LANGMGR_PHP', true);
define('LOGIN_PHP', true);
define('LOGOUT_PHP', true);
define('MINIBROWSER_PHP', true);
define('MODE_PHP', true);
define('MODIFYALB_PHP', true);
define('PHPINFO_PHP', true);
define('PICMGR_PHP', true);
define('PLUGINMGR_PHP', true);
define('RATEPIC_PHP', true);
define('REGISTER_PHP', true);
define('PROFILE_PHP', true);
define('REVIEWCOM_PHP', true);
define('SIDEBAR_PHP', true);
define('SEARCH_PHP', true);
define('SEARCHNEW_PHP', true);
define('SEND_ACTIVATION_PHP', true);
define('STAT_DETAILS_PHP', true);
define('UPLOAD_PHP', true);
define('UPLOAD_H5A', true);
define('USERMGR_PHP', true);
define('UPDATE_PHP', true);
define('UTIL_PHP', true);
define('VERSIONCHECK_PHP', true);
define('VIEWLOG_PHP', true);
define('XP_PUBLISH_PHP', true);

class Lang
{
	public $vars;

	public function __construct ($lang)
	{
		if (!$lang) $lang = 'english.php';
		require "lang/{$lang}";
		$this->vars = get_defined_vars();
	}
}

$langs = array();
foreach(scandir('lang') as $f) {
	if ($f[0] === '.') continue;
	if (substr($f, 0, 7) === 'english') continue;
	$langs[] = $f;
}

$en = new Lang();

foreach ($langs as $lang) {
	$lobj = new Lang($lang);
	$misses = array_diff_key_recursive($en->vars, $lobj->vars);
	if ($misses) {
		echo "<h3>Missing translations for languge file: {$lang}</h3>";
		echo'<xmp>';
		splay($misses);
		echo'</xmp>';
	}
	
}

function splay ($nodes, $ind=0)
{
	foreach ($nodes as $k => $node) {
		if (is_array($node)) {
			echo $k . " >>\n";
			splay($node, $id+1);
		} else {
			echo str_repeat("\t", $ind) . "['{$k}']" . ' = \'' . $node . "';\n";
		}
	}
}

function array_diff_key_recursive (array $arr1, array $arr2)
{
	$diff = array_diff_key($arr1, $arr2);
	$intersect = array_intersect_key($arr1, $arr2);

	foreach ($intersect as $k => $v) {
		if (is_array($arr1[$k]) && is_array($arr2[$k])) {
			$d = array_diff_key_recursive($arr1[$k], $arr2[$k]);
			if ($d) {
				$diff[$k] = $d;
			}
		}
	}

	return $diff;
}

?>