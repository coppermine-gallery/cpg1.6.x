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
define('DB_INPUT_PHP', true);

require('include/init.inc.php');
require('include/mailer.inc.php');

// NOTE: This script won't make any noise in any case.

$category = false; // Setting category to false to begin with.

// The script must get called as a AJAX request and with the data we are expecting
if ($CONFIG['upl_notify_admin_email'] && $superCage->post->keyExists('album') && $superCage->post->getInt('album')) {

    $album = $superCage->post->getInt('album');

    if (!GALLERY_ADMIN_MODE) {
        $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album' and (uploads = 'YES' OR category = '" . (USER_ID + FIRST_USER_CAT) . "' OR owner = '" . USER_ID . "')");
        if (mysql_num_rows($result)) {
            $row = mysql_fetch_array($result);
            mysql_free_result($result);
            $category = $row['category'];
        }
    } else {
        $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'");
        if (mysql_num_rows($result)) {
            $row = mysql_fetch_array($result);
            mysql_free_result($result);
            $category = $row['category'];
        }
    }
    
    if (false !== $category) {
        // Test if picture requires approval
        if (GALLERY_ADMIN_MODE) {
            $approved = 'YES';
        } elseif (!$USER_DATA['priv_upl_need_approval'] && $category == FIRST_USER_CAT + USER_ID) {
            $approved = 'YES';
        } elseif (!$USER_DATA['pub_upl_need_approval'] && $category < FIRST_USER_CAT) {
            $approved = 'YES';
        } else {
            $approved = 'NO';
        }
        
        $PIC_NEED_APPROVAL = ($approved == 'NO');
        
        if ($PIC_NEED_APPROVAL) {
            cpg_mail('admin', sprintf($lang_db_input_php['notify_admin_email_subject'], $CONFIG['gallery_name']), make_clickable(sprintf($lang_db_input_php['notify_admin_email_body'], USER_NAME, $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .'editpics.php?mode=upload_approval')));
        }
    }
}
?>