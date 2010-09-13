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
define('MODE_PHP', true);

require('include/init.inc.php');

if ($superCage->get->getAlpha('what') == 'news') {

    if (!GALLERY_ADMIN_MODE) {
        cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
    }
    
    if ($CONFIG['display_coppermine_news'] == 0) {
        $value = 1;
        $message = $lang_mode_php['news_show'];
    } else {
        $value = 0;
        $message = $lang_mode_php['news_hide'];
    }

    cpg_config_set('display_coppermine_news', $value);

    cpgRedirectPage($CPG_REFERER, $lang_common['information'], $message, 3);

} else {

    if (!USER_IS_ADMIN) {
        cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
    }

    if (!$superCage->get->keyExists('admin_mode') || !$CPG_REFERER) {
        cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
    }

    $admin_mode = $superCage->get->getInt('admin_mode')? 1 : 0;

    $USER['am'] = $admin_mode;
    
    if (!$admin_mode) {
        $CPG_REFERER = 'index.php';
    }

    cpgRedirectPage($CPG_REFERER, $lang_common['information'], $lang_mode_php[$admin_mode], 3);
}

?>