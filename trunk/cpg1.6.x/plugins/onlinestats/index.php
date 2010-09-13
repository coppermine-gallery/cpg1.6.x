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
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
**********************************************/

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}
$changes_message = '';
if ($superCage->post->keyExists('submit')) {
    if (!checkFormToken()) {
        global $lang_errors;
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    if ($superCage->post->keyExists('duration') && $superCage->post->getInt('duration') >= '0' && $superCage->post->getInt('duration') <= '1440') {
        if ($superCage->post->getInt('duration') != $CONFIG['mod_updates_duration']) {
            $CONFIG['mod_updates_duration'] = $superCage->post->getInt('duration');
            cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value='{$CONFIG['mod_updates_duration']}' WHERE name='mod_updates_duration'");
            $changes_message .= sprintf($lang_admin_php['config_setting_ok'], $lang_plugin_php['onlinestats_config_text']) . '<br />';
        }
    }
    $matches = $superCage->post->getMatched('main_page_layout', '#^(([0-9a-z]){1,}(([,]){0,1}([0-9]){1,2}){0,1}){1,1}((/){1,1}([0-9a-z]{1,}(([,]){0,1}([0-9]){1,2}){0,1})){1,}$#i');
    if ($superCage->post->keyExists('main_page_layout') && $matches[0] != '') {
        if ($matches[0] != $CONFIG['main_page_layout']) {
            $CONFIG['main_page_layout'] = $matches[0];
            cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value='{$CONFIG['main_page_layout']}' WHERE name='main_page_layout'");
            $changes_message .= sprintf($lang_admin_php['config_setting_ok'], $lang_admin_php['main_page_layout']) . '<br />';
        }
    }
}


// Configuration
$icon_array['config']  = cpg_fetch_icon('config', 2);
pageheader($lang_pluginmgr_php['configure_plugin'] . ': ' . $lang_plugin_php['onlinestats_name']);
$contentOfTheMainpage_array = explode('/',$CONFIG['main_page_layout']);
if (in_array('onlinestats', $contentOfTheMainpage_array) != TRUE){
	$CONFIG['main_page_layout'] .= '/onlinestats';
	cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value='{$CONFIG['main_page_layout']}' WHERE name='main_page_layout'");
	msg_box('', $lang_plugin_php['onlinestats_config_extra'], '', '', 'warning');
}
if ($changes_message != '') {
    msg_box('', $changes_message, '', '', 'success');
}
starttable('100%',$icon_array['config'] . $lang_pluginmgr_php['configure_plugin'] . ': ' . $lang_plugin_php['onlinestats_name']);
echo <<< EOT
    <tr>
        <td>
EOT;
online_configure();
echo <<< EOT
        </td>
    </tr>
EOT;
endtable();
pagefooter();
die;
?>