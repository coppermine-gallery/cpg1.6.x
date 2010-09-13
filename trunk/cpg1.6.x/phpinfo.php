<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
**********************************************/

error_reporting (E_ALL ^ E_NOTICE);
define('IN_COPPERMINE', true);
define('PHPINFO_PHP', true);
require('include/init.inc.php');

$CONFIG['debug_mode']=0;

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied']);
}

pageheader($lang_cpg_debug_output['phpinfo']);

ob_start();
phpinfo();
preg_match('#<body>(.*)</body>#s', ob_get_clean(), $matches);
$string = $matches[1];

$string = str_replace(' class="p"','',$string);
$string = str_replace(' class="e"','',$string);
$string = str_replace(' class="v"','',$string);
$string = str_replace(' class="h"',' class="tableh2"',$string);
$string = str_replace(' class="center"','',$string);
$string = str_replace(' width="600"','',$string);
$string = str_replace(' cellpadding="3"','',$string);
$string = str_replace('<table border="0"','<table',$string);
$string = str_replace('<table>','<table border="0" cellspacing="0" cellpadding="0" class="cpg_zebra" style="table-layout:fixed;width:100%">',$string);
$string = str_replace('<td>','<td style="text-align:left;vertical-align:top">',$string);

print '<div align="left" style="overflow:hidden;width:100%;text-align:left;">';
starttable('100%', cpg_fetch_icon('phpinfo', 2) . $lang_phpinfo_php['php_info'], 1);
print '<tr><td class="tableb">';
print $lang_phpinfo_php['explanation'];
print '<br />';
print $lang_phpinfo_php['no_link'];
print '</td></tr>';
endtable();
print '<br />';

print $string;
print '</div>' . $LINEBREAK;

pagefooter();

?>