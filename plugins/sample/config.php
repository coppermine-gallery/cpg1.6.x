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

// Don't allow access by non-admin users
if (!GALLERY_ADMIN_MODE) {
	cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}


// Save the submitted configuration settings
function plg_sample_config_save ($sC)
{
	global $lang_plugin_sample, $lang_common, $lang_pluginmgr_php;

	// Get configuration values and save them
	$optval = $sC->post->getEscaped('cfgopt');
	cpg_config_set('plg_sample_optval', $optval, true);

	// Display a success message
	starttable('100%', $lang_common['information']);
	$msg = sprintf($lang_pluginmgr_php['saved_config'], $lang_plugin_sample['config_name']);
	echo <<<EOT
	<tr>
		<td class="tableb" width="200">
			<div class="cpg_message_info">{$msg}</div>
		</td>
	</tr>
EOT;
	endtable();
	echo '<br />';
}


// Display a configuration setting form
function plg_sample_config_form ($sC)
{
	global $CONFIG, $lang_common, $lang_plugin_sample, $lang_gallery_admin_menu;
	
	$submit_icon = cpg_fetch_icon('ok', 1);

	// Provide a configuration table header
	starttable('100%', $lang_plugin_sample['config_name'].' - '.$lang_gallery_admin_menu['admin_lnk'], 2);

	// Display rows for config items and a save button
	echo <<<EOT
	<tr>
		<td class="tableb" width="40%">Configuration phrase:</td>
		<td class="tableb"><input type="text" class="text" name="cfgopt" value="{$CONFIG['plg_sample_optval']}" /></td>
	</tr>
	<tr>
		<td class="tableb" colspan="2" style="text-align:center">
			<button value="{$lang_common['apply_changes']}" name="save" class="button" type="submit">
				{$submit_icon}{$lang_common['apply_changes']}
			</button>
		</td>
	</tr>
EOT;

	endtable();
}


if ($superCage->post->keyExists('save'))
	plg_sample_config_save($superCage);

plg_sample_config_form($superCage);

//EOF