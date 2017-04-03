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

$name = $lang_plugin_visiblehookpoints['config_name'];
$description =  $lang_plugin_visiblehookpoints['config_description'] . '&nbsp;' . cpg_display_help('f=plugins.htm&amp;as=plugin_bundled_visiblehookpoints&amp;ae=plugin_bundled_visiblehookpoints_end', '400', '200');
$config_icon = cpg_fetch_icon('config', 1);
$extra_info = <<<EOT
    <a href="index.php?file=visiblehookpoints/index&action=config" class="admin_menu">{$config_icon}{$lang_plugin_visiblehookpoints['plugin_config']}</a>
    <a href="http://forum.coppermine-gallery.net/index.php?board=97.0" class="admin_menu">{$lang_plugin_visiblehookpoints['plugin_support']}</a>
    
EOT;
$install_info = $lang_plugin_visiblehookpoints['config_install'];
$author = <<<EOT
Donnoman from <a href="http://cpg-contrib.org">cpg-contrib.org</a> (v1.x and 2.x)<br />
Plugin config section added, ported to cpg1.5.x, added hovering boxes: by <a href="http://coppermine-gallery.net/forum/index.php?action=profile;u=2" rel="external" class="external">Joachim M&uuml;ller</a> (v3.0)<br />
Added i18n support: by <a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=24278" rel="external" class="external">eenemeenemuu</a> (v4.0)
EOT;
$version='4.1';
$plugin_cpg_version = array('min' => '1.6');
