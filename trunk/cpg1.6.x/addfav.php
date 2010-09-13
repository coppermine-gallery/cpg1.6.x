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

$data = base64_encode(serialize($FAVPICS));
setcookie($CONFIG['cookie_name'] . '_fav', $data, time() + 86400 * 30, $CONFIG['cookie_path']);

// If the user is logged in then put it in the DB
if (USER_ID > 0) {

    $sql = "UPDATE {$CONFIG['TABLE_FAVPICS']} SET user_favpics = '$data' WHERE user_id = " . USER_ID;
    cpg_db_query($sql);

    // User never stored a fav... so insert new row
    if (!mysql_affected_rows($CONFIG['LINK_ID'])) {
        $sql = "INSERT INTO {$CONFIG['TABLE_FAVPICS']} (user_id, user_favpics) VALUES (" . USER_ID . ", '$data')";
        cpg_db_query($sql);
    }
}

$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $ref);
pageheader($lang_common['information'], "<meta http-equiv=\"refresh\" content=\"1;url=$ref\">");
msg_box($lang_common['information'], $lang_rate_pic_php['rate_ok'], $lang_common['continue'], $ref);
pagefooter();

?>