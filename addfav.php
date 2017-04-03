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

define('IN_COPPERMINE', true);
define('RATEPIC_PHP', true);

require('include/init.inc.php');

$pid = $superCage->get->getInt('pid');

// Check if required parameters are present
if (empty($pid)) {
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

$ref = $CONFIG['site_url'] . (!empty($CPG_REFERER) ? $CPG_REFERER : "displayimage.php?pid={$pid}");
$ref = str_replace('&amp;', '&', $ref);

// If user does not accept script's cookies, we don't accept the vote
if (!$superCage->cookie->keyExists($CONFIG['cookie_name'] . '_data')) {
    header("Location: $ref");
    exit;
}

// See if this picture is already present in the array
if (!in_array($pid, $FAVPICS)) {
    $FAVPICS[] = $pid;
} else {
    $key = array_search($pid, $FAVPICS);
    unset($FAVPICS[$key]);
}

// Adjust redirect for "My Favorites" meta album
if (!empty($CPG_REFERER) && strpos($CPG_REFERER, 'album=favpics')) {
    if (empty($FAVPICS)) {
        // No favorites, redirect to empty thumbnail page
        $ref = $CONFIG['site_url'] . "thumbnails.php?album=favpics";
    } elseif (!in_array($pid, $FAVPICS)) {
        // It may be possible that there are PIDs in the $FAVPICS array which has been removed from the gallery or the user has (temporary) no access to.
        // That's why we need to query the database to get the current accessible PIDs and redirect the user accordingly.
        // We don't update the $FAVPICS array in case the user gets access to any pictures at a later date

        $query = "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} AS p
            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid
            $RESTRICTEDWHERE
            AND approved = 'YES'
            AND pid IN (".implode(', ', $FAVPICS).", $pid)
            ORDER BY pid DESC";
        $result = cpg_db_query($query);

        if ($result->numRows() == 1) {
            // No favorites (as we added the already removed $pid to the query), redirect to empty thumbnail page
            $ref = $CONFIG['site_url'] . "thumbnails.php?album=favpics";
        } else {
            while ($row = $result->fetchAssoc()) {
                if ($row['pid'] == $pid && $new_pid) {
                    break;
                }
                $new_pid = $row['pid'];
                if ($new_pid < $pid) {
                    break;
                }
            }
            $ref = str_replace("pid={$pid}", "pid={$new_pid}", $ref);
        }
        $result->free();
    }
}

$data = base64_encode(serialize($FAVPICS));
if (CPG_COOKIES_ALLOWED) {
    setcookie($CONFIG['cookie_name'].'_fav', $data, time() + (CPG_DAY*30), $CONFIG['cookie_path']);
}

// If the user is logged in then put it in the DB
if (USER_ID > 0) {

    $sql = "UPDATE {$CONFIG['TABLE_FAVPICS']} SET user_favpics = '$data' WHERE user_id = " . USER_ID;
    cpg_db_query($sql);

    // User never stored a fav... so insert new row
    if (!cpg_db_affected_rows()) {
        $sql = "INSERT INTO {$CONFIG['TABLE_FAVPICS']} (user_id, user_favpics) VALUES (" . USER_ID . ", '$data')";
        cpg_db_query($sql);
    }
}

// Prepare message
if (in_array($pid, $FAVPICS)) {
    $message_id = cpgStoreTempMessage($lang_rate_pic_php['fav_added']);
    $message_icon = 'success';
} else {
    $message_id = cpgStoreTempMessage($lang_rate_pic_php['fav_removed']);
    $message_icon = 'info';
}
$ref .= strpos($ref, '?') !== FALSE ? '&' : '?';
$ref .= 'message_id='.$message_id.'&message_icon='.$message_icon.'#cpgMessageBlock';

$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $ref);
pageheader($lang_common['information'], "<meta http-equiv=\"refresh\" content=\"1;url=$ref\">");
msg_box($lang_common['information'], $lang_rate_pic_php['rate_ok'], $lang_common['continue'], $ref);
pagefooter();

//EOF