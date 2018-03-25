<?php
/**************************
  Coppermine Photo Gallery
 **************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

 ************************************
  Coppermine version: 1.6.03
  $HeadURL$
 ************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

require_once './plugins/upload_h5a/initialize.inc.php';
global $lang_plugin_upload_h5a, $lang_gallery_admin_menu;

$name = $lang_plugin_upload_h5a['html5upload'];
$description = $lang_plugin_upload_h5a['plug_desc'];
$author = 'Coppermine Dev Team';
$version = '1.1';
$plugin_cpg_version = array('min' => '1.6');
$config_action = 'config';
