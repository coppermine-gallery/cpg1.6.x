<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2014 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

$name = $lang_plugin_sample['config_name'];
$description = $lang_plugin_sample['config_description'];
$author = 'Coppermine Development Team';
$version = '1.7';
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
$install_info=<<<EOT
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td><a href="http://coppermine-gallery.net/forum/index.php?board=97.0" title="{$lang_plugin_sample['plugin_support']}" class="admin_menu">{$lang_plugin_sample['plugin_support']}</a></td>
    </tr>
    </table>
EOT;

?>
