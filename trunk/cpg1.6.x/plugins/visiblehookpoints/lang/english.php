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

$lang_plugins['visiblehookpoints']['config_name'] = 'Visible HookPoints';
$lang_plugins['visiblehookpoints']['config_description'] = 'Tool for plugin developers to locate plugin entry points (plugin hooks) and array information. Do not enable this plugin unless you want to start developing your own plugin.';
$lang_plugins['visiblehookpoints']['config_install'] = 'Plugin comes with a configuration page (accessible via the config manager) that will allow you to specify if the hookpoints should be displayed only if the parameter &quot;hookpoints&quot; is set in the URL or if they are supposed to be display always to every visitor. Second option is only meant for plugin development on testbeds - do not use on production sites, as this plugin will output information about the hookpoints directly on all pages.';
$lang_plugins['visiblehookpoints']['plugin_support'] = 'Plugin support';
$lang_plugins['visiblehookpoints']['plugin_config'] = 'Plugin configuration';
$lang_plugins['visiblehookpoints']['help_invisible_header'] = 'Adding the hookpoint parameter manually';
$lang_plugins['visiblehookpoints']['help_invisible_text'] = 'Manually add the parameter &quot;hookpoint&quot; to the URL in the address bar of your browser (e.g. <tt class="code">'.$CONFIG['ecards_more_pic_target'].'index.php?hookpoint</tt>) to see the hookpoints. This option is meant for live, production galleries, where you wouldn\'t want to display the hookpoints to every site visitor.';
$lang_plugins['visiblehookpoints']['help_visible_header'] = 'Displaying the hookpoints for everyone';
$lang_plugins['visiblehookpoints']['help_visible_text'] = 'Only choose this option on your testbed server, i.e. for galleries that don\'t run in a production environment, as the hookpoints will be displayed for all gallery visitors.';
$lang_plugins['visiblehookpoints']['visibility_choose'] = 'Choose visibility option of hooks';
$lang_plugins['visiblehookpoints']['visibility_parameter'] = 'Only visible with URL-parameter &quot;hookpoints&quot;';
$lang_plugins['visiblehookpoints']['visibility_permanent'] = 'Visible permanently for everyone';
$lang_plugins['visiblehookpoints']['visibility_admin'] = 'Only visible for the admin';
$lang_plugins['visiblehookpoints']['save'] = 'Save settings';
$lang_plugins['visiblehookpoints']['settings_saved'] = 'Settings saved for Visible HookPoints plugin';
$lang_plugins['visiblehookpoints']['usage_stats'] = 'Visible HookPoints marker usage stats';
$lang_plugins['visiblehookpoints']['time_chart'] = 'Visible HookPoints time chart in seconds from CPG_TIME_START';
$lang_plugins['visiblehookpoints']['error'] = 'Plugin &quot;Visible HookPoints&quot;: Unknown action value';

?>
