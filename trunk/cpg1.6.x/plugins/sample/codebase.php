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

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');
if (!defined('CORE_PLUGIN')) {
    define('CORE_PLUGIN', true);
}

// Add an install action
$thisplugin->add_action('plugin_install','sample_install');

// Add a configure action
$thisplugin->add_action('plugin_configure','sample_configure');

// Add a filter for the gallery header
$thisplugin->add_filter('gallery_header','sample_header');

$thisplugin->add_filter('plugin_block','sample_block_mgr');


// Sample function to modify gallery header html
function sample_header($html) {
    global $thisplugin, $lang_plugin_php;
    $return = $html.'<strong style="color:red;">'.$lang_plugin_php['sample_output'].'</strong>';
    return $return;
}

function sample_block_mgr($block) {
    return $block;
}


// Install function
// Checks if uid is 'foo' and pwd is 'bar'; If so, then install the plugin
function sample_install() {
    
    // Create the super cage
    $superCage = Inspekt::makeSuperCage();
    // Install
    if ($superCage->post->getAlpha('uid')=='foo' && $superCage->post->getAlpha('pwd') == 'bar') {

        return true;

    // Loop again
    } else {

        return 1;
    }
}

// Configure function
// Displays the form
function sample_configure() {
    global $lang_plugin_php, $lang_common;
    // Create the super cage
    $superCage = Inspekt::makeSuperCage();

    echo '<form name="cpgform" id="cpgform" action="'.$superCage->server->getEscaped('REQUEST_URI').'" method="post">';
    echo <<< EOT
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td class="tableh2" colspan="2">
              <h3>{$lang_plugin_php['sample_install_explain']}</h3>
            </td>
          </tr>
          <tr>
            <td class="tableb" align="right">
              {$lang_plugin_php['sample_install_username']}:
            </td>
            <td class="tableb">
              <input type="text" name="uid" class="textinput" style="width:100%" />
            </td>
          </tr>
          <tr>
            <td class="tableb tableb_alternate" align="right">
              {$lang_plugin_php['sample_install_password']}:
            </td>
            <td class="tableb tableb_alternate">
              <input type="password" name="pwd" class="textinput" style="width:100%" />
            </td>
          </tr>
          <tr>
            <td class="tablef" colspan="2">
              <input type="submit" value="{$lang_common['go']}" class="button" />
            </td>
          </tr>
        </table>
    </form>
EOT;
}
?>