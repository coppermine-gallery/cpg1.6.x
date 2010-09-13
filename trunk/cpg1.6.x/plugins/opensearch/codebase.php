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

$thisplugin->add_action('plugin_install','opensearch_install');
$thisplugin->add_action('plugin_configure','opensearch_configure');
$thisplugin->add_action('plugin_uninstall','opensearch_uninstall');

$thisplugin->add_filter('page_meta','opensearch_meta');

function opensearch_meta(){
	
	global $CONFIG, $lang_plugin_php;

	return '<link rel="search" href="plugins/opensearch/osd.xml" type="application/opensearchdescription+xml" title="' . sprintf($lang_plugin_php['opensearch_search'], $CONFIG['gallery_name']).'" />';
}

function opensearch_uninstall() {
	// We have to restore the XML file to how it was in case the user decides to re-install the plugin
	global $CONFIG, $lang_plugin_php;
	$osd = 'plugins/opensearch/osd.xml';
	$handle = fopen($osd, "w+");
	if (!$handle) {
		echo '<p style="color: red; text-align: center">'.sprintf($lang_plugin_php['opensearch_failed_to_open_file'], $osd).'.</p>';
		return 1;
	}
	$content = <<< EOT
<?xml version="1.0" encoding="UTF-8"?>

<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
 <ShortName>{SHORT_NAME}</ShortName>
 <Description>{DESCRIPTION}</Description>
 <Url type="text/html" template="{SITE_URL}thumbnails.php?album=search&amp;search={searchTerms}"/>
</OpenSearchDescription>

EOT;
	$written = fwrite($handle, $content);
	if (!$written) {
		echo '<p style="color: red; text-align: center">'.sprintf($lang_plugin_php['opensearch_failed_to_write_file'], $osd).'</p>';
		fclose($handle);
		return 1;
	}
	
	fclose($handle);
	
	return true;
}

function opensearch_install() {

	global $CONFIG, $lang_plugin_php;
	$superCage = Inspekt::makeSuperCage();
	
	$osd = 'plugins/opensearch/osd.xml';
	
	$handle = fopen($osd, "r+");
	
	if (!$handle) {
		echo '<p style="color: red; text-align: center">'.sprintf($lang_plugin_php['opensearch_failed_to_open_file'], $osd).'.</p>';
		return 1;
	}
	
	//if (empty($_POST['os_submit'])) return 1;
	if ($superCage->post->keyExists('os_submit')) {
	} else {
		return 1;
	}
	
	$content = fread($handle, filesize($osd));

	// There's no real sanitization here yet (should be added) - we only rely on this screen being admin-only
	$data = array(
		'{SHORT_NAME}' => substr($superCage->post->getRaw('os_name'), 0, 16),
		'{DESCRIPTION}' => substr($superCage->post->getRaw('os_desc'), 0, 1024),
		'{SITE_URL}' => $superCage->post->getRaw('os_url'),
	);
	
	$content = str_replace(array_keys($data), array_values($data), $content);
	
	rewind($handle);

	$written = fwrite($handle, $content);

	if (!$written) {
		echo '<p style="color: red; text-align: center">'.sprintf($lang_plugin_php['opensearch_failed_to_write_file'], $osd).'</p>';
		fclose($handle);
		return 1;
	}
	
	fclose($handle);
	
	return true;
}

function opensearch_configure() {

	global $CONFIG, $lang_plugin_php, $lang_common;
	$superCage = Inspekt::makeSuperCage();
	$action = $superCage->server->getEscaped('REQUEST_URI');
	
    $nameLimit = sprintf($lang_plugin_php['opensearch_character_limit'], '16');
    $descriptionLimit = sprintf($lang_plugin_php['opensearch_character_limit'], '1024');
    echo <<< EOT
    <form name="cpgform" id="cpgform" action="{$action}" method="post">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
              <tr>
                <td class="tableh2" colspan="2">
                  <h3>{$lang_plugin_php['opensearch_form_header']}</h3>
                </td>
              </tr>
              <tr>
                <td class="tableb" align="right">
                  {$lang_plugin_php['opensearch_gallery_url']}:
                </td>
                <td class="tableb">
                  <input type="text" class="textinput" name="os_url" size="25" value="{$CONFIG['site_url']}" />
                </td>
              </tr>
              <tr>
                <td class="tableb tableb_alternate" align="right">
                  {$lang_plugin_php['opensearch_display_name']}:
                </td>
                <td class="tableb tableb_alternate">
                  <input type="text" class="textinput" name="os_name" maxlength="16" size="25" value="{$CONFIG['gallery_name']}"/> ({$nameLimit})
                </td>
              </tr>
              <tr>
                <td class="tableb" align="right">
                  {$lang_plugin_php['opensearch_description']}:
                </td>
                <td class="tableb">
                  <input type="text" class="textinput" name="os_desc" maxlength="1024" size="25" value="{$CONFIG['gallery_description']}" /> ({$descriptionLimit})
                </td>
              </tr>
              <tr>
                <td class="tablef" colspan="2">
                  <input type="submit" name="os_submit" value="{$lang_common['go']}" class="button" />
                </td>
              </tr>
            </table>
    </form>    
EOT;
}
?>
