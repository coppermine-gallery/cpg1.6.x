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
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
 ************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

require_once './plugins/upload_h5a/initialize.inc.php';
global $lang_plugin_upload_h5a, $lang_gallery_admin_menu;

$name = $lang_plugin_upload_h5a['html5upload'];
$description = $lang_plugin_upload_h5a['plug_desc'];
$author = 'Coppermine Dev Team';
$version = '1.0';
$plugin_cpg_version = array('min' => '1.6');
//$extra_info = '<a href="index.php?file=upload_h5a/admin" class="admin_menu">'.cpg_fetch_icon('config', 1)."$name {$lang_gallery_admin_menu['admin_lnk']}</a>";
$install_info = $lang_plugin_upload_h5a['plug_info'];
$config_action = 'config';
