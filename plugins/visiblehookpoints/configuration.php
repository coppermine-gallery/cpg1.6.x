<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2026 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * plugins/visiblehookpoints/configuration.php
 * @since  1.6.31
 */

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

$name = $lang_plugin_visiblehookpoints['config_name'];
$description =  $lang_plugin_visiblehookpoints['config_description'] . '&nbsp;' . cpg_display_help('f=plugins.htm&amp;as=plugin_bundled_visiblehookpoints&amp;ae=plugin_bundled_visiblehookpoints_end', '400', '200');
$config_icon = cpg_fetch_icon('config', 1);
$extra_info = <<<EOT
    <a href="index.php?file=visiblehookpoints/index&action=config" class="admin_menu">{$config_icon}{$lang_plugin_visiblehookpoints['plugin_config']}</a>
    <a href="https://coppermine-gallery.com/forum/index.php?board=97.0" class="admin_menu">{$lang_plugin_visiblehookpoints['plugin_support']}</a>
    
EOT;
$install_info = $lang_plugin_visiblehookpoints['config_install'];
$author = <<<EOT
Donnoman from <a href="http://cpg-contrib.org">cpg-contrib.org</a> (v1.x and 2.x)<br />
Plugin config section added, ported to cpg1.5.x, added hovering boxes: by <a href="https://coppermine-gallery.com/forum/index.php?action=profile;u=2" rel="external" class="external">Joachim M&uuml;ller</a> (v3.0)<br />
Added i18n support: by <a href="https://coppermine-gallery.com/forum/index.php?action=profile;u=24278" rel="external" class="external">eenemeenemuu</a> (v4.0)
EOT;
$version='4.1';
$plugin_cpg_version = array('min' => '1.6');
