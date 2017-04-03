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

// Call basic functions, etc.
require_once('include/init.inc.php');

//####################################################################################################
//#############################  INIT OF SCRIPT VARIABLES  ###########################################
//####################################################################################################

//Initialize local parameters.
//$action = isset($_POST['action']) ? $_POST['action']: $_GET['action'];
//$superCage->get->getInt('hookpoints'){gaugau}
if($superCage->post->keyExists('action')){
    $action = $superCage->post->getAlpha('action');
}else{
    $action = $superCage->get->getAlpha('action');
}


//####################################################################################################
//################################# MAIN CODE BLOCK ##################################################
//####################################################################################################


if (!GALLERY_ADMIN_MODE) {
  cpg_die($lang_common['error'], $lang_errors['access_denied'], __FILE__, __LINE__);
}

///////////////////////////////////////////////////////////////////////
/////////////////   HANDLE OF INCOMING ACTIONS  (if any)  /////////////
///////////////////////////////////////////////////////////////////////


switch ($action) {
  case 'config':
    if ($superCage->post->keyExists('visiblehookpoints_display')) {
      if ($superCage->post->getInt('visiblehookpoints_display') == 1) {
        $value = 1;
      } elseif ($superCage->post->getInt('visiblehookpoints_display') == 0) {
          $value = 0;
      } else {
        $value = 2;
      }
      if ($value != $CONFIG['plugin_visiblehookpoints_display']) {
        $f= cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$value}' WHERE name = 'plugin_visiblehookpoints_display'");
        if (version_compare(COPPERMINE_VERSION, '1.5.1') == -1) {
            $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
            $redirect = "index.php?file=visiblehookpoints/index&action=config";
            header($header_location . $redirect);
            pageheader('Information', "<meta http-equiv=\"refresh\" content=\"0;url=$redirect\" />");
            msg_box('Information', $lang_plugin_visiblehookpoints['settings_saved'], 'continue', $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        } else {
            cpgRedirectPage('index.php?file=visiblehookpoints/index&action=config', $lang_common['information'], $lang_plugin_visiblehookpoints['settings_saved'], 1);
        }
      }
    } else {
      $message_id = '';
    }
    pageheader($lang_plugin_visiblehookpoints['config_name'] . ' - ' . $lang_plugin_visiblehookpoints['plugin_config']);
    visiblehookpoints_configure();
          break;
  default:
          cpg_die (ERROR, $lang_plugin_visiblehookpoints['error'], __FILE__, __LINE__);
}

pagefooter();
ob_end_flush();

//EOF