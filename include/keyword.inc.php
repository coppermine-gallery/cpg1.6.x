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

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// ADDED QUICK KEYWORDS FUNCTIONALITY

$icon_array['edit'] = cpg_fetch_icon('ok', 2);

$result = cpg_db_query("SELECT keywords FROM {$CONFIG['TABLE_PICTURES']} WHERE keywords <> '' $ALBUM_SET");
if (mysql_num_rows($result)) {

  // Grab all keywords
  print '<br />';
  starttable("100%", $lang_search_php['keyword_list_title']);


  // Find unique keywords
  $keywords_array = array();
  $keyword_count = array();

  while (list($keywords) = mysql_fetch_row($result)) {
      $array = explode($CONFIG['keyword_separator'],$keywords);

      foreach($array as $word)
      {
       if (!in_array($word = utf_strtolower($word),$keywords_array)) {
        $keywords_array[] = $word;
        $keyword_count[$word] = 1;
       } else {
        $keyword_count[$word]++;
       }
      }
  }

  // Sort selected keywords
  sort($keywords_array);
  $count = count($keywords_array);

  $maxQuantity = max($keyword_count);
  $minQuantity = min($keyword_count);

  $spread = $maxQuantity - $minQuantity;

  //spread should be greater than zero
  if ($spread == 0) {
    $spread = 1;
  }

  $step = ((25 - 10) / $spread);

  // Result to table
  echo '<tr><td class="tableb">' ;
  for ($i = 0; $i < $count; $i++) {
    if ($keywords_array[$i]) {     // Eliminates Null Keywords

        $fontSize = (10 + ($keyword_count[$keywords_array[$i]] - $minQuantity) * $step);
        $keyword_param = str_replace(' ','+',$keywords_array[$i]);
        echo "<a href=\"thumbnails.php?album=search&amp;keywords=on&amp;search=".$keyword_param."\" style=\"font-size: {$fontSize}px;\">$keywords_array[$i]</a>";
        if ($i<$count-1) {                     // Don't keep space after last keyword
            echo " ";
        }
    }
  }
  echo "</td></tr>" ;
  if (GALLERY_ADMIN_MODE == true) {
    $url = basename($CPG_PHP_SELF);
    if ($url != "keywordmgr.php"){
    echo '<tr><td class="tableb" align="center">';
    echo '<a href="keywordmgr.php" class="button">' . $icon_array['edit'] . $lang_search_php['edit_keywords'] . '</a>';
    echo "</td></tr>" ;
    }
  } else {
    echo '<tr><td class="tableb" align="center">';
    echo $lang_search_php['keyword_msg'];
    echo "</td></tr>" ;
  }

  endtable();
}
?>