<?php
if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

require_once './plugins/html5upload/initialize.inc.php';
global $lang_plugin_html5upload, $lang_gallery_admin_menu;

$name = $lang_plugin_html5upload['html5upload'];
$description = $lang_plugin_html5upload['plug_desc'];
$author = 'Ron Crans';
$version = '1.3.6';
$plugin_cpg_version = array('min' => '1.5');
$extra_info = '<a href="index.php?file=html5upload/admin" class="admin_menu">'.cpg_fetch_icon('config', 1)."$name {$lang_gallery_admin_menu['admin_lnk']}</a>";
$install_info = $lang_plugin_html5upload['plug_info'];
?>