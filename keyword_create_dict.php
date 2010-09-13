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

define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$output = ($CPG_REFERER != 'keyword_select.php');
if ($output) { pageheader_mini($lang_gallery_admin_menu['key_lnk']); }

$query = "SELECT keywords FROM {$CONFIG['TABLE_PICTURES']} WHERE keywords <> ''";
$result = cpg_db_query($query);
$i = 0;
if (mysql_num_rows($result)) {

    if ($output) { starttable('100%', $lang_gallery_admin_menu['key_lnk']); }

    cpg_db_query("TRUNCATE TABLE {$CONFIG['TABLE_DICT']}");
    while ($row = mysql_fetch_assoc($result)) {
        $keyArr = explode($CONFIG['keyword_separator'], $row['keywords']);
        foreach ($keyArr as $keyword) {
            $keyword = trim($keyword);
            if (empty($keyword)) {
                continue;
            }
            $query = "SELECT null FROM {$CONFIG['TABLE_DICT']} WHERE keyword = '$keyword'";
            $result2 = cpg_db_query($query);
            if (!mysql_num_rows($result2)) {
                $query = "INSERT INTO {$CONFIG['TABLE_DICT']} (keyword) VALUES ('$keyword')";
                cpg_db_query($query);
                if ($output) { echo '<tr><td class="tableh2">' . $keyword . '</td></tr>'; }
                $i++ ;
            }
        }
        mysql_free_result($result2);
    }
    if ($output) { endtable(); }
    mysql_free_result($result);
}

if ($output) { 
    echo "<p>{$lang_editpics_php['new_keywords']}: $i</p>"; 
    pagefooter_mini();
} else {
    header("Location: $CPG_REFERER");
}

?>