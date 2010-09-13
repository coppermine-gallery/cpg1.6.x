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
define('LOGOUT_PHP', true);

require('include/init.inc.php');

if (!USER_ID) {
    if ($CONFIG['log_mode'] == CPG_LOG_ALL) {
        log_write("Logout attempt failed because visitor is not logged in.", CPG_SECURITY_LOG);
    }
    cpg_die(ERROR, $lang_logout_php['err_not_logged_in'], __FILE__, __LINE__);
}

if (!checkFormToken()) {
    cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
}
    
if ($CONFIG['log_mode'] == CPG_LOG_ALL) {
    log_write('The user ' . $USER_DATA['user_name'] . ' (user ID ' . $USER_DATA['user_id'] . ") logged out.", CPG_ACCESS_LOG);
}

if (defined('UDB_INTEGRATION')) {
    $cpg_udb->logout_page();
}

cpgRedirectPage('index.php', $lang_logout_php['logout'], sprintf($lang_logout_php['bye'], stripslashes(USER_NAME)), 3); // Replace 'index.php' with $CPG_REFERER to redirect the user to the page he came from, with the drawback that the visitor will get an error message if he came from a page that is not accesible for guests 

?>