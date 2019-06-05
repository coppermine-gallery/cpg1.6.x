<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * plugins/upload_h5a/configuration.php
 * @since  1.6.04
 */

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

require_once './plugins/upload_h5a/initialize.inc.php';
global $lang_plugin_upload_h5a, $lang_gallery_admin_menu;

$name = $lang_plugin_upload_h5a['html5upload'];
$description = $lang_plugin_upload_h5a['plug_desc'];
$author = 'Coppermine Dev Team';
$version = '1.1';
$plugin_cpg_version = array('min' => '1.6');
$config_action = 'config';
