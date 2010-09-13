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
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
  
**********************************************/

$name = $lang_plugin_php['sample_config_name'];
$description = $lang_plugin_php['sample_config_description'] . '&nbsp;' . cpg_display_help('f=plugins.htm&amp;as=plugin_bundled_sample&amp;ae=plugin_bundled_sample_end', '400', '200');
$author = 'Coppermine Development Team';
$version = '1.6';
$plugin_cpg_version = array('min' => '1.5');
/*
 * $extra_info is displayed with the title of a plugin that IS installed and
 * can be used to present extra information.  In this case we show a complex
 * example that forms a button the user can click.
 */
$extra_info = <<<EOT
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="admin_menu"><a href="docs/en/plugins.htm" title="{$lang_plugin_php['sample_plugin_documentation']}">{$lang_plugin_php['sample_plugin_documentation']}</a></td>
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
        <td class="admin_menu"><a href="http://coppermine-gallery.net/forum/index.php?board=97.0" title="{$lang_plugin_php['sample_plugin_support']}">{$lang_plugin_php['sample_plugin_support']}</a></td>
    </tr>
    </table>
EOT;
?>