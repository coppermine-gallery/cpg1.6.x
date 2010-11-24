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

global $lang_pluginmgr_php;

$icon_array['config']  = cpg_fetch_icon('config', 2);

$name = $lang_plugin_php['onlinestats_name'];
$description = $lang_plugin_php['onlinestats_description'] . '&nbsp;' . cpg_display_help('f=plugins.htm&amp;as=plugin_bundled_onlinestats&amp;ae=plugin_bundled_onlinestats_end', '400', '200');
$author = 'Originally created by <a href="http://coppermine-gallery.net/forum/index.php?action=profile;u=941" rel="external" class="external">Nibbler</a>, <acronym title="internationalization">i18n</acronym> by <a href="http://coppermine-gallery.net/forum/index.php?action=profile;u=9980" rel="external" class="external">Frantz</a>';
$version = '2.6';
$plugin_cpg_version = array('min' => '1.5');
$extra_info = <<< EOT
    <a href="index.php?file=onlinestats/index&amp;action=configure" class="admin_menu">{$icon_array['config']}{$lang_pluginmgr_php['configure_plugin']}</a><br />
    {$lang_plugin_php['onlinestats_config_extra']}
EOT;
$install_info = $lang_plugin_php['onlinestats_config_install'];
?>