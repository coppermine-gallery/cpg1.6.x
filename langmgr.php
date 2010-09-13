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
define('ADMIN_PHP', true);
define('LANGMGR_PHP', true);

/*
TODO: make sure that the default language is not disabled
*/

require_once('include/init.inc.php');
require_once('include/sql_parse.php');

js_include('js/langmgr.js');


$query_output_ok = '<li style="list-style-image:url(images/icons/ok.png)">%s</li>'.$LINEBREAK;
$query_output_error = '<li style="list-style-image:url(images/icons/cancel.png)">%s</li>'.$LINEBREAK;
$query_output = '';

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$help = array();
$help['language_manager'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager&amp;ae=language_manager_end', '450', '300');
$help['default'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager_columns_default&amp;ae=language_manager_columns_default_end', '450', '300');
$help['name'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager_columns_name&amp;ae=language_manager_columns_name_end', '450', '300');
$help['english'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager_columns_name_english&amp;ae=language_manager_columns_name_english_end', '450', '300');
$help['native'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager_columns_name_native&amp;ae=language_manager_columns_name_native_end', '450', '300');
$help['custom'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager_columns_name_custom&amp;ae=language_manager_columns_name_custom_end', '450', '300');
$help['flag'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager_columns_flag&amp;ae=language_manager_columns_flag_end', '450', '300');
$help['file'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager_columns_file&amp;ae=language_manager_columns_file_end', '450', '300');
$help['available'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager_columns_file_available&amp;ae=language_manager_columns_file_available_end', '450', '300');
$help['complete'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager_columns_file_complete&amp;ae=language_manager_columns_file_complete_end', '450', '300');
$help['enabled'] = '&nbsp;' . cpg_display_help('f=languages.htm&amp;as=language_manager_columns_enabled&amp;ae=language_manager_columns_enabled_end', '450', '300');

pageheader($lang_langmgr_php['title']);
print '<form action="'.$CPG_PHP_SELF.'" method="post" name="cpgform" id="cpgform" onsubmit="return form_submit();">';
$hide_icon = cpg_fetch_icon('hide_table_row', 2);
$show_icon = cpg_fetch_icon('show_table_row', 2);

// Form has been submit --- start
if ($superCage->post->keyExists('submit')) {
    $posted_lang_id_array = $superCage->post->getEscaped('lang_id'); 
    foreach ($posted_lang_id_array as $posted_lang_id) {
        // Create the query
        if ($superCage->post->getAlpha('new_'.$posted_lang_id) == 'YES') {
            $query = "INSERT INTO `".$CONFIG['TABLE_LANGUAGE']. "` ( `lang_id` , `english_name` , `native_name` , `custom_name` , `flag` , `available` , `enabled` , `complete` ) VALUES (";
            $query .= "'".$posted_lang_id."', ";
            $query .= "'".$superCage->post->getEscaped('english_name_'.$posted_lang_id)."', ";
            $query .= "'".$superCage->post->getEscaped('native_name_'.$posted_lang_id)."', ";
            $query .= "'".$superCage->post->getEscaped('custom_name_'.$posted_lang_id)."', ";
            if ($superCage->post->getAlpha('flag_'.$posted_lang_id) != '' && $superCage->post->getAlpha('flag_'.$posted_lang_id) != $lang_langmgr_php['pick_a_flag']) {
                $query .= "'".$superCage->post->getAlpha('flag_'.$posted_lang_id)."', ";
            } else {
                $query .= "'', ";
            }
            if ($superCage->post->getAlpha('available_'.$posted_lang_id) == 'YES') {
                $query .= "'YES', ";
            } else {
                $query .= "'NO', ";
            }
            if ($superCage->post->getAlpha('enable_'.$posted_lang_id) == 'YES') {
                $query .= "'YES', ";
            } else {
                $query .= "'NO', ";
            }
            if ($superCage->post->getAlpha('complete_'.$posted_lang_id) == 'YES') {
                $query .= "'YES', ";
            } else {
                $query .= "'NO', ";
            }
            $query = rtrim(trim($query), ',');
            $query .= ");";
        } else {
            $query = "UPDATE `".$CONFIG['TABLE_LANGUAGE']. "` SET ";
            $query .= "`english_name` = '".$superCage->post->getEscaped('english_name_'.$posted_lang_id)."', ";
            $query .= "`native_name` = '".$superCage->post->getEscaped('native_name_'.$posted_lang_id)."', ";
            $query .= "`custom_name` = '".$superCage->post->getEscaped('custom_name_'.$posted_lang_id)."', ";
            if ($superCage->post->getAlpha('flag_'.$posted_lang_id) != '' && $superCage->post->getAlpha('flag_'.$posted_lang_id) != $lang_langmgr_php['pick_a_flag']) {
                $query .= "`flag` = '".$superCage->post->getAlpha('flag_'.$posted_lang_id)."', ";
            }
            if ($superCage->post->getAlpha('available_'.$posted_lang_id) == 'YES') {
                $query .= "`available` = 'YES', ";
            } else {
                $query .= "`available` = 'NO', ";
            }
            if ($superCage->post->getAlpha('enable_'.$posted_lang_id) == 'YES') {
                $query .= "`enabled` = 'YES', ";
            } else {
                $query .= "`enabled` = 'NO', ";
            }
            if ($superCage->post->getAlpha('complete_'.$posted_lang_id) == 'YES') {
                $query .= "`complete` = 'YES', ";
            } else {
                $query .= "`complete` = 'NO', ";
            }
            // Strip the whitespace and coma from the query
            $query = rtrim(trim($query), ',');
            $query .= " WHERE `lang_id` = '".$posted_lang_id."'  LIMIT 1;";
        }
        $result = cpg_db_query($query);
        $query = '';
    } // foreach loop end
    // Now let's set the default language // DEFAULT_LANGUAGE
    $submit_default_id = $superCage->post->getEscaped('is_default');
    if ($submit_default_id != DEFAULT_LANGUAGE) { // only write the change if the submit default language differs from the current default language
        // Check if the "new" default language is enabled in the first place
        if ($superCage->post->getAlpha('enable_'.$submit_default_id) == 'YES') {
            $CONFIG['lang'] = $CONFIG['lang_config'];
            cpg_config_set('lang', $submit_default_id);
            $CONFIG['default_lang'] = $submit_default_id;
            $query_output .= sprintf($query_output_ok, sprintf($lang_langmgr_php['default_language'], $submit_default_id));
        } else {
            $query_output .= sprintf($query_output_error, $lang_langmgr_php['enable_default']);
        }
    }
    // Output status messages if applicable
    if ($query_output != '') {
        starttable('100%', cpg_fetch_icon('info', 2).$lang_langmgr_php['status'], 1);
        print <<< EOT
        <tr>
            <td class="tableb">
                <ul>
                    {$query_output}
                </ul>
            </td>
        </tr>
EOT;
        endtable;
        print '<br />'.$LINEBREAK;
    }
}
// Form has been submit --- end


// Populate an array of available flags$flag_array = form_get_foldercontent('images/flags/', 'file', 'png');
// Populate an array of files existing inside the lang folder
$lang_file_array = form_get_foldercontent('lang/', 'file', 'php');
$lang_file_orphan_array = $lang_file_array;

// Let's populate the language list from the database
$results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_LANGUAGE']}");
while ($row = mysql_fetch_array($results)) {
        $lang_language_data[$row['lang_id']]['lang_id'] = $row['lang_id'];
        $lang_language_data[$row['lang_id']]['english_name'] = $row['english_name'];
        $lang_language_data[$row['lang_id']]['native_name'] = $row['native_name'];
        $lang_language_data[$row['lang_id']]['custom_name'] = $row['custom_name'];
        $lang_language_data[$row['lang_id']]['flag'] = $row['flag'];
        $lang_language_data[$row['lang_id']]['available'] = $row['available'];
        $lang_language_data[$row['lang_id']]['enabled'] = $row['enabled'];
        $lang_language_data[$row['lang_id']]['complete'] = $row['complete'];
        if (in_array($lang_language_data[$row['lang_id']]['lang_id'], $lang_file_orphan_array) == TRUE) {
            unset($lang_file_orphan_array[array_search($lang_language_data[$row['lang_id']]['lang_id'],$lang_file_orphan_array)]);
        }
        $lang_language_data[$row['lang_id']]['new'] = 'NO';
} // while
mysql_free_result($results);
unset($row);

// Now let's merge the orphaned files (i.e. the files that exist on file system level, but not in the database) into the array that will compose the form output
foreach ($lang_file_orphan_array as $orphans) {
    $lang_language_data[$orphans]['lang_id'] = $orphans;
    $lang_language_data[$orphans]['english_name'] = ucfirst($orphans);
    $lang_language_data[$orphans]['native_name'] = '';
    $lang_language_data[$orphans]['custom_name'] = '';
    $lang_language_data[$orphans]['flag'] = '';
    $lang_language_data[$orphans]['available'] = 'NO';
    $lang_language_data[$orphans]['enabled'] = 'NO';
    $lang_language_data[$orphans]['complete'] = 'NO';
    $lang_language_data[$orphans]['new'] = 'YES';
}

// sort the array by English name
ksort($lang_language_data);





starttable('100%', '<h2>' . cpg_fetch_icon('babelfish', 2) . $lang_langmgr_php['title'] . $help['language_manager']. '</h2>', 9);
print <<< EOT
    <tr>
        <td class="tableh2" colspan="6">
        </td>
        <td class="tableh2" colspan="2" align="center">
            <span id="expand_all_top" style="display:none"><a href="javascript:;" class="admin_menu" onclick="show_section('expand_all_bottom');show_section('collapse_all_bottom');show_section('expand_all_top');show_section('collapse_all_top');toggleExpandCollpaseButtons('expand');">{$show_icon}{$lang_langmgr_php['show_details']}</a></span>
            <span id="collapse_all_top" style="display:none"><a href="javascript:;" class="admin_menu" onclick="show_section('expand_all_bottom');show_section('collapse_all_bottom');show_section('expand_all_top');show_section('collapse_all_top');toggleExpandCollpaseButtons('collapse');">{$hide_icon}{$lang_langmgr_php['hide_details']}</a></span>
        </td>
    </tr>
    <tr>
        <th class="tableh2" rowspan="2" align="center">
          <span class="album_stat">{$lang_langmgr_php['default']}</span>{$help['default']}
        </th>
        <th class="tableh2" colspan="3">
          <span class="album_stat">{$lang_langmgr_php['language_name']}</span>{$help['name']}
        </th>
        <th class="tableh2" rowspan="2">
          <span class="album_stat">{$lang_langmgr_php['flag']}</span>{$help['flag']}
        </th>
        <th class="tableh2" colspan="2">
          <span class="album_stat">{$lang_langmgr_php['language_file']}</span>{$help['file']}
        </th>
        <th class="tableh2" rowspan="2">
          <span class="album_stat">{$lang_langmgr_php['enabled']}</span>{$help['enabled']}
        </th>
    </tr>
    <tr>
        <th class="tableh2">
          <span class="album_stat">{$lang_langmgr_php['english_language_name']}</span>{$help['english']}
        </th>
        <th class="tableh2">
          <span class="album_stat">{$lang_langmgr_php['native_language_name']}</span>{$help['native']}
        </th>
        <th class="tableh2">
          <span class="album_stat">{$lang_langmgr_php['custom_language_name']}</span>{$help['custom']}
        </th>
        <th class="tableh2">
          <span class="album_stat">{$lang_langmgr_php['file_available']}</span>{$help['file']}
        </th>
        <th class="tableh2">
          <span class="album_stat">{$lang_langmgr_php['complete']}</span>{$help['complete']}
        </th>
    </tr>
EOT;
$loopCounter = 0;
$cpg_version_determination = 'Coppermine' . ' ' . 'version:';
foreach ($lang_language_data as $language) {
    $availability_output = '';
    $file_lookup_errors = 0;
    $version_warning = '';
    $version_output = '';
    $filesize_output = '';
    $additional_output = '';
    if ($language['available'] == 'YES' || in_array($language['lang_id'], $lang_file_array) == TRUE) {
        // Open the file to see if they're complete translations
        $handle = @fopen('lang/'. $language['lang_id'] . '.php', 'r');
        if ($handle == FALSE) {
            // We haven't been able to open the file, so let's drop it from the list
            $language['available'] = 'NO';
            $language['broken'] = 'YES';
        } else {
            $language['broken'] = 'NO';
            //$filesize = filesize('lang/'. $language['lang_id'] . '.php');
            $blob = @fread($handle, 2000);
            $blob = str_replace('<?php','',$blob);
            // Perform the version comparison
            $language['version'] = substr($blob,strpos($blob, $cpg_version_determination)); // chop off the first bit up to the string $cpg_version_determination
            $double_slash_position = strpos($language['version'], '//');
            if ($double_slash_position) {
                $language['version'] = substr($language['version'],0,$double_slash_position);
            }
            $language['version'] = trim(str_replace($cpg_version_determination, '', $language['version']));
            $language['version'] = trim(str_replace('#', '', $language['version']));
            $language['version'] = trim(substr($language['version'], 0, strpos($language['version'], '$')));
            if (strlen($language['version']) > 6) { // Version numbers larger than 6 are not likely at all
                $language['version'] = 0;
            }
            $versionCompare = version_compare($language['version'],COPPERMINE_VERSION);
            if ($versionCompare == 0) {
                $language['complete'] = 'YES';
            } else {
                $language['complete'] = 'NO';
                $version_warning = $lang_langmgr_php['version_does_not_match'];
            }
            // Perform the lookup for the native language name
            $language['file_native'] = strings_from_language_file('lang_name_native');
            if ($language['file_native'] == '') {
                $file_lookup_errors++;
            }
            if ($language['native_name'] == '') {
                $language['native_name'] = $language['file_native']; // Populate the native name field from the file if emtpy 
            }
            if ($language['file_native'] != $language['native_name'] && $language['file_native'] != '') {
                $reset_native = '<a href="javascript:;" title="' . sprintf($lang_langmgr_php['replace_x_with_y'], '&quot;'.$language['native_name'].'&quot;', '&quot;'.$language['file_native'].'&quot;') . '" id="reset_native_'.$loopCounter.'" onclick="document.getElementById(\'native_name_'.$language['lang_id'].'\').value = \''.$language['file_native'].'\';document.getElementById(\'reset_native_'.$loopCounter.'\').style.display = \'none\';">' . cpg_fetch_icon('undo',0) . '</a>';
            } else {
                $reset_native = '';
            }
            // Perform the lookup for the English language name
            $language['file_english'] = strings_from_language_file('lang_name_english');
            if ($language['file_english'] == '') {
                $file_lookup_errors++;
            }
            if ($language['english_name'] == '') {
                $language['english_name'] = $language['file_english']; // Populate the english name field from the file if emtpy 
            }
            if ($language['file_english'] != $language['english_name'] && $language['file_english'] != '') {
                $reset_english = '<a href="javascript:;" title="' . sprintf($lang_langmgr_php['replace_x_with_y'], '&quot;'.$language['english_name'].'&quot;', '&quot;'.$language['file_english'].'&quot;') . '" id="reset_english_'.$loopCounter.'" onclick="document.getElementById(\'english_name_'.$language['lang_id'].'\').value = \''.$language['file_english'].'\';document.getElementById(\'reset_english_'.$loopCounter.'\').style.display = \'none\';">' . cpg_fetch_icon('undo',0) . '</a>';
            } else {
                $reset_english = '';
            }
            // Look up the translator name
            $language['translator_name'] = strings_from_language_file('trans_name');
            // Look up the translator website
            $language['translator_website'] = strings_from_language_file('trans_website');
            // Look up the default country code
            $language['file_flag'] = strings_from_language_file('lang_country_code');
            if ($language['file_flag'] == '') {
                $file_lookup_errors++;
            }
        }
        @fclose($handle);
        $language['file_size'] = filesize('lang/'. $language['lang_id'] . '.php');
        // Alternating colors
        if ($loopCounter/2 == floor($loopCounter/2)) {
            $cellstyle = 'tableb';
        } else {
            $cellstyle = 'tableb tableb_alternate';
        }
        // Default language
        if ($language['lang_id'] == $CONFIG['default_lang']) {
            $default_checked = 'checked="checked"';
        } else {
            $default_checked = '';
        }
        // Completeness --- start
        if ($language['complete'] == 'YES') {
            $completeness_output = cpg_fetch_icon('ok', 0);
            $completeness_output .= '<input type="hidden" name="complete_'.$language['lang_id'].'" id="complete_' . $language['lang_id'] .'" value="YES" />';
        } else {
            $completeness_output = cpg_fetch_icon('cancel', 0);
            $completeness_output .= '<input type="hidden" name="complete_'.$language['lang_id'].'" id="complete_' . $language['lang_id'] .'" value="NO" />';
        }
        // Completeness --- end
        if ($language['available'] == 'YES') { // availability --- start
            if (in_array($language['lang_id'], $lang_file_array) == TRUE) {
                // Language file is in database and in lang folder                $availability_output = cpg_fetch_icon('ok', 0, 'lang/'.$language['lang_id'].'.php ' . $lang_langmgr_php['exists_in_db_and_file']);
                $availability_output .= '<input type="hidden" name="available_'.$language['lang_id'].'" id="available_' . $language['lang_id'] .'" value="YES" />';
                $enable_greyed_out = '';
            } else {
                //  Language file is in database, but not in lang folder                $availability_output = cpg_fetch_icon('stop', 0, 'lang/'.$language['lang_id'].'.php '.$lang_langmgr_php['missing']);
                $availability_output .= '<input type="hidden" name="available_'.$language['lang_id'].'" id="available_' . $language['lang_id'] .'" value="NO" />';
                $enable_greyed_out = 'disabled="disabled"';
            }
        } else {
            if (in_array($language['lang_id'], $lang_file_array) == TRUE) {
                // Language file is not database but in lang folder                $availability_output = cpg_fetch_icon('add', 0, 'lang/'.$language['lang_id'].'.php ' . $lang_langmgr_php['exists_as_file_only']);
                $availability_output .= '<input type="hidden" name="available_'.$language['lang_id'].'" id="available_' . $language['lang_id'] .'" value="YES" />';
                $enable_greyed_out = '';
            } else {
                //  Language file is not database nor in lang folder - this case should never be true                $availability_output = cpg_fetch_icon('stop', 0, 'lang/'.$language['lang_id'].'.php ' . $lang_langmgr_php['missing']);
                $availability_output .= '<input type="hidden" name="available_'.$language['lang_id'].'" id="available_' . $language['lang_id'] .'" value="NO" />';
                $enable_greyed_out = 'disabled="disabled"';
            }
            if ($language['broken'] == 'YES') {
                $availability_output = cpg_fetch_icon('stop', 0, 'lang/'.$language['lang_id'].'.php ' . $lang_langmgr_php['broken']);
                $availability_output .= '<input type="hidden" name="available_'.$language['lang_id'].'" id="available_' . $language['lang_id'] .'" value="NO" />';
                $enable_greyed_out = 'disabled="disabled"';
            }
        }    // availability --- end
        //  Flag new records accordingly --- start
        if ($language['new'] == 'YES') {
            $new_output = '<input type="hidden" name="new_'.$language['lang_id'].'" id="available_' . $language['lang_id'] .'" value="YES" />';
        } else {
            $new_output = '<input type="hidden" name="new_'.$language['lang_id'].'" id="available_' . $language['lang_id'] .'" value="NO" />';
        }
        //  Flag new records accordingly --- end
        // Populate credits section
        if ($language['translator_name'] != '') {
            $translator_output = '<li>'.$lang_langmgr_php['tanslator_information'] . ': ';
            if ($language['translator_website'] != '') {
                $translator_output .= '<a href="'.$language['translator_website'].'" rel="external" class="external">';
            }
            $translator_output .= $language['translator_name'];
            if ($language['translator_website'] != '') {
                $translator_output .= '</a>';
            }
            $translator_output .= '</li>';
        } else {
            $translator_output = '';
            $file_lookup_errors++;
        }
        if ($language['version'] != '') {
            $version_output .= '<li>'.$lang_langmgr_php['cpg_version'] . ': ' . $language['version'].'<br />'.$version_warning.'</li>';
        } else {
            $version_output = '<li>'.$lang_langmgr_php['no_version'].'</li>';
            $file_lookup_errors++;
        }
        if ($language['file_size'] < 100000 || $language['file_size'] > 400000) {
            $filesize_output = '<li>';
            $filesize_output .= sprintf($lang_langmgr_php['filesize'], round($language['file_size']/1000) . ' ' . $lang_byte_units[1]);
            $filesize_output .= '</li>';
        }
        if ($file_lookup_errors > 3) {
            $additional_output = '<li>'.$lang_langmgr_php['content_missing'].'</li>';
        }
        // Flag icon population --- start
        if ($language['flag'] != '') {
            $flag_path = 'images/flags/'.$language['flag'] . '.png';
        } elseif (in_array($language['file_flag'], $flag_array) == TRUE) {
            $flag_path = 'images/flags/'.$language['file_flag'] . '.png';
            $language['flag'] = $language['file_flag'];
        } else {
            $flag_path = 'images/spacer.gif';
        }
        // Flag icon population --- end
        // Actual table row output --- start
        print <<< EOT
    <tr>
        <td class="{$cellstyle}" rowspan="2" align="center">
          <input name="is_default" id="is_default_{$language['lang_id']}" type="radio" value="{$language['lang_id']}" class="radio" {$default_checked} {$enable_greyed_out} />
          <input type="hidden" name="lang_id[]" id="lang_id_{$language['lang_id']}" value="{$language['lang_id']}" />
        </td>
EOT;
        print <<< EOT
        
        <td class="{$cellstyle}">
          <input type="text" name="english_name_{$language['lang_id']}" id="english_name_{$language['lang_id']}" class="textinput" value="{$language['english_name']}" />{$reset_english}
        </td>
EOT;
        print <<< EOT
        
        <td class="{$cellstyle}">
          <input type="text" name="native_name_{$language['lang_id']}" id="native_name_{$language['lang_id']}" class="textinput" value="{$language['native_name']}" />{$reset_native}
        </td>
EOT;
        print <<< EOT
        
        <td class="{$cellstyle}">
          <input type="text" name="custom_name_{$language['lang_id']}" id="custom_name_{$language['lang_id']}" class="textinput" value="{$language['custom_name']}" />
        </td>
EOT;
        print <<< EOT
        
        <td class="{$cellstyle}">
            <img src="{$flag_path}" width="16" height="11" border="0" alt="" name="image_{$loopCounter}" style="float:left" />
            <select id="flag_{$language['lang_id']}" name="flag_{$language['lang_id']}" size="1" onchange="if(document.images) document.images['image_{$loopCounter}'].src='images/flags/'+this.options[this.selectedIndex].value+'.png';" class="listbox_lang" style="width:60px">
>
EOT;
        if ($language['flag'] == '') {
            print '            <option value="">'.$lang_langmgr_php['pick_a_flag'].'</option>'.$LINEBREAK;
        }
        foreach ($flag_array as $flags) {
            if ($flags == $language['flag']) {
                $flag_selected = 'selected="selected"';
            } else {
                $flag_selected = '';
            }
            print '            <option style="background-image:url(images/flags/' . $flags . '.png);background-repeat:no-repeat;text-indent:16px;width:20px;" value="' . $flags . '" '.$flag_selected.'>' . $flags . '</option>'.$LINEBREAK;
        }
        print <<< EOT
            </ul>    
        </td>
EOT;
        print <<< EOT
        
        <td class="{$cellstyle}">
            {$availability_output}{$new_output}
        </td>
EOT;
        print <<< EOT
        
        <td class="{$cellstyle}">
          {$completeness_output}
        </td>
EOT;
        print <<< EOT
        
        <td class="{$cellstyle}">
EOT;
        if ($language['enabled'] == 'YES') {
            $enable_checked = 'checked="checked"';
        } else {
            $enable_checked = '';
        }
        print <<< EOT
            <input type="checkbox" name="enable_{$language['lang_id']}" id="enable_{$language['lang_id']}" value="YES" class="checkbox" {$enable_checked} {$enable_greyed_out} />
        </td>
    </tr>
    <tr>
        <td class="{$cellstyle}" colspan="7">
            <span id="translator_{$loopCounter}" style="display:none;">
                <ul style="margin:0px">
                    {$translator_output}
                    {$version_output}
                    {$filesize_output}
                    {$additional_output}
                </ul>
            </span> 
        </td>
    </tr>
EOT;
        // Actual table row output --- end
        $loopCounter++;
    }
}
$loopCounter--; // Subtract one from counter, since we start counting from zero
// Output warnings if applicable
if (in_array('english', $lang_file_array) != TRUE) {
    print <<< EOT
    <tr>
        <td class="cpg_message_error" colspan="8" align="center">
            {$lang_langmgr_php['english_missing']}
        </td>
    </tr>
EOT;
}

// Output submit button
$submit_icon = cpg_fetch_icon('ok', 2);
print <<< EOT
    <tr>
        <td class="tablef" colspan="6" align="center">
            <button type="submit" class="button" name="submit" id="submit" value="{$lang_common['ok']}">{$submit_icon}{$lang_common['ok']}</button>
            <div id="cpg_form_error_message_enable_one" class="cpg_message_validation" style="display:none;">{$lang_langmgr_php['enable_at_least_one']}</div>
            <div id="cpg_form_error_message_not_available" class="cpg_message_validation" style="display:none;">{$lang_langmgr_php['available_default']}</div>
            <div id="cpg_form_error_message_not_enabled" class="cpg_message_validation" style="display:none;">{$lang_langmgr_php['enable_default']}</div>
        </td>
        <td class="tablef" colspan="2" align="center">
            <span id="expand_all_bottom" style="display:none"><a href="javascript:;" class="admin_menu" onclick="show_section('expand_all_bottom');show_section('collapse_all_bottom');show_section('expand_all_top');show_section('collapse_all_top');toggleExpandCollpaseButtons('expand');">{$show_icon}{$lang_langmgr_php['show_details']}</a></span>
            <span id="collapse_all_bottom" style="display:none"><a href="javascript:;" class="admin_menu" onclick="show_section('expand_all_bottom');show_section('collapse_all_bottom');show_section('expand_all_top');show_section('collapse_all_top');toggleExpandCollpaseButtons('collapse');">{$hide_icon}{$lang_langmgr_php['hide_details']}</a></span>
            <input type="hidden" name="loopCounter" id="loopCounter" value="{$loopCounter}" />
        </td>
    </tr>
EOT;
endtable();
print <<< EOT
</form>
EOT;

pagefooter();

function strings_from_language_file($string) {
    global $blob;
    $string = "'" . $string . "'";
    if (strstr($blob , $string) == FALSE) {
        return '';
    }
    $return = str_replace($string, '', substr($blob,strpos($blob, $string),100)); // get the first 100 characters starting at $string
    $return = str_replace('] = ', '', $return); // strip the string '=>'
    $return = str_replace(strstr($return, "';"), '', $return); // Throw everything away after and including ';
    $return = ltrim(trim($return), "'"); // Trim the leading single quotes and the whitespace

    return $return;
}
?>