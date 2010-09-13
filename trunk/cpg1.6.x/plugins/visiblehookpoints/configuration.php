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

$name = 'Visible HookPoints';
$description =  <<< EOT
Tool for plugin developers to locate plugin entry points (plugin hooks) and array information. Do not enable this plugin unless you want to start developing your own plugin.
EOT;
$description .= '&nbsp;' . cpg_display_help('f=plugins.htm&amp;as=plugin_bundled_visiblehookpoints&amp;ae=plugin_bundled_visiblehookpoints_end', '400', '200');
$extra_info = <<<EOT
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="admin_menu">
          <a href="index.php?file=visiblehookpoints/index&action=config" title="Configuration">Visible HookPoints configuration</a>
        </td>
        <td>&nbsp;</td>
        <td class="admin_menu">
          <a href="http://cpg-contrib.org/board/index.php?board=27.0" title="Support">Plugin support</a>
        </td>
    </tr>
    </table>
EOT;
$install_info = 'Plugin comes with a configuration page (accessible via the config manager) that will allow you to specify if the hookpoints should be displayed only if the parameter &quot;hookpoints&quot; is set in the URL or if they are supposed to be display always to every visitor. Second option is only meant for plugin development on testbeds - do not use on production sites, as this plugin will output information about the hookpoints directly on all pages.';
$author = <<< EOT
Donnoman from <a href="http://cpg-contrib.org">cpg-contrib.org</a> (v1.x and 2.x)<br />
Plugin config section added, ported to cpg1.5.x, added hovering boxes: by <a href="http://coppermine-gallery.net/forum/index.php?action=profile;u=2" rel="external" class="external">Joachim M&uuml;ller</a> (v3.0)
EOT;
$version='3.3';
$plugin_cpg_version = array('min' => '1.5');
?>