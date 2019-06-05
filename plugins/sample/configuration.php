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

$name = $lang_plugin_sample['config_name'];
$description = $lang_plugin_sample['config_description'];
$author = 'Coppermine Development Team';
$version = '1.8';
$plugin_cpg_version = array('min' => '1.6');
/*
 * $extra_info is displayed with the title of a plugin that IS installed and
 * can be used to present extra information.  In this case we show a complex
 * example that forms a button the user can click.
 */
$extra_info = <<<EOT
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td><a href="docs/en/plugins.htm" title="{$lang_plugin_sample['plugin_documentation']}" class="admin_menu">{$lang_plugin_sample['plugin_documentation']}</a></td>
    </tr>
    </table>
EOT;
/*
 * $install_info is displayed with the title of a plugin that is NOT installed and
 * can be used to present extra information. In this case we show a complex
 * example that forms a button the user can click.
 */
$install_info = <<<EOT
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td><a href="http://coppermine-gallery.net/forum/index.php?board=97.0" title="{$lang_plugin_sample['plugin_support']}" class="admin_menu">{$lang_plugin_sample['plugin_support']}</a></td>
    </tr>
    </table>
EOT;
/*
 * $config_action provides the name of a PHP file in the plugin that will be
 * linked to in the Plugin Manager to allow configuration of the plugin.
 * Use the file name without the .php extension.
 */
$config_action = 'config';
/*
 Alternatively, $config_action can be an array with .css and .js files included that the plugin
 manager will load when running the configuration action. Paths are plugin relative.
$config_action = array(
		'action' => 'config',
		'css' => 'css/mystyle.css',	//can be an array as the js below
		'js' => array('js/myjs1.js','js/myjs2.js')
	)
*/

//EOF