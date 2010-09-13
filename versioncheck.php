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

define('IN_COPPERMINE', true);
define('VERSIONCHECK_PHP', true);

require_once('include/init.inc.php');

// define some vars that need to exist in JS

// Include the JS for versioncheck.php
js_include('js/versioncheck.js');

require_once('include/versioncheck.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die($lang_common['error'], $lang_errors['access_denied'], __FILE__, __LINE__);
}

// Sanitize the GET vars and populate the optionsArray --- start
// possible values: screen, textarea, create, options
$optionDisplayOutput_array = array();
$actionGet = $superCage->get->getMatched('output','/^[a-z]+$/');
if (in_array ($actionGet[0], array('screen', 'textarea', 'create', 'options')) == TRUE) {
  $action = $actionGet[0];
} else {
  $action = 'options';
}

if ($superCage->get->getInt('do_not_connect_to_online_repository') == '1') {
  $displayOption_array['do_not_connect_to_online_repository'] = 1;
  $optionDisplayOutput_array['do_not_connect_to_online_repository'] = 'checked="checked"';
} else {
  $displayOption_array['do_not_connect_to_online_repository'] = 0;
}
if ($action == 'textarea') {
  $displayOption_array['output'] = 'textarea';
  $optionDisplayOutput_array['screen'] = '';
  $optionDisplayOutput_array['textarea'] = 'checked="checked"';
} elseif ($action == 'create') {
  $displayOption_array['output'] = 'create';
  $displayOption_array['do_not_connect_to_online_repository'] = 1;
} elseif ($action == 'screen') {
  $displayOption_array['output'] = 'screen';
  $optionDisplayOutput_array['screen'] = 'checked="checked"';
  $optionDisplayOutput_array['textarea'] = '';
} else {
  $displayOption_array['output'] = 'options';
  $optionDisplayOutput_array['screen'] = 'checked="checked"';
  $optionDisplayOutput_array['textarea'] = '';
}

if ($superCage->get->getInt('errors_only') == '1') {
  $displayOption_array['errors_only'] = 1;
  $optionDisplayOutput_array['errors_only'] = 'checked="checked"';
} else {
  $displayOption_array['errors_only'] = 0;
}
if ($superCage->get->getInt('hide_images') == '1') {
  $displayOption_array['hide_images'] = 1;
  $optionDisplayOutput_array['hide_images'] = 'checked="checked"';
} else {
  $displayOption_array['hide_images'] = 0;
}
if ($superCage->get->getInt('no_modification_check') == '1') {
  $displayOption_array['no_modification_check'] = 1;
  $optionDisplayOutput_array['no_modification_check'] = 'checked="checked"';
} else {
  $displayOption_array['no_modification_check'] = 0;
}
// Sanitize the GET vars and populate the optionsArray --- end
  

// Connect to the repository
if ($displayOption_array['output'] != 'options') {
    $file_data_array = cpgVersioncheckConnectRepository();
    $file_data_array = cpg_versioncheckPopulateArray($file_data_array);
    $file_data_count = count($file_data_array);
}

// main code starts here
$title_help = ' ' . cpg_display_help('f=upgrading.htm&amp;as=versioncheck&amp;ae=versioncheck_end', '600', '400');
pageheader($lang_versioncheck_php['title']);
starttable('100%', cpg_fetch_icon('check_versions', 2) . $lang_versioncheck_php['title']. $title_help, 1);
//print '<h1>' . cpg_fetch_icon('check_versions', 2) . $lang_versioncheck_php['title']. $title_help . '</h1>';


// Print options if applicable
if ($displayOption_array['output'] == 'options' || $displayOption_array['output'] == 'screen' || $displayOption_array['output'] == 'textarea') {
    print <<< EOT
    <tr>
        <td class="tableb">
EOT;
    cpg_versioncheckDisplayOptions();
    print <<< EOT
        </td>
    </tr>
EOT;
}

if ($displayOption_array['output'] == 'create') {

    // create data 
    $file_data_count = cpg_versioncheckCreateXml($file_data_array);

} else if ($displayOption_array['output'] == 'textarea') {

    // display the output in a textarea field
    print <<< EOT
    <tr>
        <td class="tableb">
EOT;
    print cpg_versioncheckCreateTextOnlyOutput($file_data_array);
    print <<< EOT
        </td>
    </tr>
EOT;

} else if ($displayOption_array['output'] == 'screen') {

    // display the output in HTML
    print <<< EOT
    <tr>
        <td class="tableb">
EOT;
    $outputResult = cpg_versioncheckCreateHTMLOutput($file_data_array);
    print <<< EOT
        </td>
    </tr>
EOT;
    print <<< EOT
    <tr>
        <td class="tablef">
EOT;
    printf($lang_versioncheck_php['files_folder_processed'], $outputResult['display'], $outputResult['total'], $outputResult['error']);
    print <<< EOT
        </td>
    </tr>
EOT;
   
}

endtable();
pagefooter();

?>