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
define('BRIDGEMGR_PHP', true);

require('include/init.inc.php');

///////////// function defintions start /////////////////////////////

function write_to_db($step) {
    global $BRIDGE,$CONFIG,$default_bridge_data,$lang_bridgemgr_php, $posted_var, $LINEBREAK;
    $error = 0;
    // do the check for plausibility of posted data
    foreach($posted_var as $key => $value) { // loop through the posted data -- start
        // filter the post data that doesn't get written
        if (array_key_exists($key, $BRIDGE)) { // post data exists as db key -- start
            // do the lookups
            $options = explode(',', $default_bridge_data[$BRIDGE['short_name']][$key.'_used']);
            foreach($options as $key2) {
                $options[$key2] = trim($options[$key2], ','); // get rid of the delimiters
            }
            if ($options[0] != '') { // only continue with this loop if there really is an option to check --- start
                if ($options[0] == 'lookfor') { // check for the existance of a local file/folder --- start
                    if (file_exists($value.$options[1]) == false) {
                        $return[$key] = sprintf($lang_bridgemgr_php['error_folder_not_exist'], '<tt>'.$value.$options[1].'</tt>','<i>'.$lang_bridgemgr_php[$key].'</i>');
                    }
                } // check for the existance of a file/folder --- end
                if ($options[0] == 'cookie') { // check for the existance of a cookie --- start
                    foreach ($_COOKIE as $key2 => $value2) { // loop through the cookie global var --- start
                        //print '<br>cookie:'.$key2.', content:'.$value2.'<br />' . $LINEBREAK;
                        if (@strstr($key2,$value) == false && $options[1] == 'not_empty') {
                            $return[$key] = sprintf($lang_bridgemgr_php['error_cookie_not_readible'], '&quot;<tt>'.$value.'</tt>*&quot;','<i>'.$lang_bridgemgr_php[$key].'</i>');
                        }
                    }  // loop through the cookie global var --- end
                                        if (isset($temp_err)) $return[$key] = $temp_err;
                } // check for the existance of a cookie --- end
                if ($options[1] == 'not_empty') { // check for empty mandatory fields --- start
                    if ($value == '') {
                        $return[$key] = sprintf($lang_bridgemgr_php['error_mandatory_field_empty'], '<i>'.$lang_bridgemgr_php[$key].'</i>');
                    }
                } // check for empty mandatory fields --- end
                if ($options[0] == 'no_trailing_slash' || $options[1] == 'no_trailing_slash' || $options[2] == 'no_trailing_slash') { // check for unneeded trailing slashes --- start
                    if ($value != rtrim($value, '/')) {
                        $return[$key] = sprintf($lang_bridgemgr_php['error_no_trailing_slash'], '<i>'.$lang_bridgemgr_php[$key].'</i>');
                    }
                } // check for unneeded traling slashes --- end
                if ($options[0] == 'trailing_slash' || $options[1] == 'trailing_slash' || $options[2] == 'trailing_slash') { // check for needed trailing slashes --- start
                    if ($value == rtrim($value, '/')) {
                        $return[$key] = sprintf($lang_bridgemgr_php['error_trailing_slash'], '<i>'.$lang_bridgemgr_php[$key].'</i>');
                    }
                } // check for needed traling slashes --- end
            } // only continue with this loop if there really is an option to check --- end
        } // post data exists as db key -- end
    } // loop through the posted data -- end


    // loop through the expected data
    //void


    // do some checking according to the step we're currently in
    switch ($step) {
    case "choose_bbs":
    if ($posted_var['short_name'] == '') {
        $return['short_name'] = $lang_bridgemgr_php['error_specify_bbs'];
        $error++;
    }
    if ($posted_var['short_name'] == 'custom_selector') {
        $posted_var['short_name'] = $posted_var['custom_filename'];
        if ($posted_var['short_name'] == '') {
            $return['short_name'] = $lang_bridgemgr_php['error_no_blank_name'];
        }
        if (preg_match('/[^a-z0-9_-]/i',$posted_var['short_name'])) {
            $return['short_name'] = $lang_bridgemgr_php['error_no_special_chars'];
        }
    }
    // check if the bridge file actually exists
    if (file_exists('bridge/'.$posted_var['short_name'].'.inc.php') == false) {
        $return['bridge_file_not_exist'] = sprintf($lang_bridgemgr_php['error_bridge_file_not_exist'],'<i>bridge/'.$posted_var['short_name'].'.inc.php</i>');
    }
       break;

    case "settings_path":
    //if ($posted_var['short_name'] == '') {
    //    $return['short_name'] = $lang_bridgemgr_php['error_specify_bbs'];
    //}

       break;

    } // end switch

    // write the post data to the database
    foreach($posted_var as $key => $value) {
        // filter the post data that doesn't get written
        if (array_key_exists($key, $BRIDGE)) {
            if ($CONFIG['debug_mode'] != 0) { // print what actually get's written when in debug_mode
                print '<span class="explanation">Writing to database: ';
                print $key . '|' . $value;
                print '<br /></span>';
            }
            if ($return[$key] != '') {
                //print '|Error in this key';
            } else {
                cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '$value' WHERE name = '$key'");
            }
            //print '<br />';
        }
    }
    $value = $posted_var['bridge_enable'];
    if ($value != '0' && $value != '1') {
        $value = $CONFIG['bridge_enable'];
    }
    
    cpg_config_set('bridge_enable', $value);
    
    if ($posted_var['clear_unused_db_fields'] == 1) {
        // clear all database entries that aren't actually used with the current bridge file
        // not implemented yet (not sure if necessary after all)
    }

    // ouput error messages, if any
    if (is_array($return)) {
        starttable(-1, $lang_bridgemgr_php['error_title']);
        print '<tr><td class="tableb" align="left"><ul>';
        foreach($return as $key) {
            print '<li>'.$key.'</li>';
        }
        print '</ul></td></tr>';
        print '<tr>'.$LINEBREAK;
        print '    <td class="tablef" align="center">'.$LINEBREAK;
        print '        <a href="javascript:history.back()" class="admin_menu" title="'.$lang_bridgemgr_php['back'].'" />&laquo;'.$lang_bridgemgr_php['back'].'</a>'.$LINEBREAK;
        print '    </td>'.$LINEBREAK;
        print '</tr>'.$LINEBREAK;
        endtable();
        $error = 1;
    }
    print '<br />';
    if ($error != '') {return 'error';}
}

function cpg_check_allowed_emergency_logon($timestamp,$failures = '') {
    //define the wait time (in seconds)
    $wait_time = array('0','5','10','20','30','60','120', '300', '1500', '6000');
    // make a real timestamp out of the date
    $timestamp = strtotime($timestamp);
    // if failed more than x times, the wait time will keep the same
    if ($failures > count($wait_time)) {$failures = count($wait_time);}
    //print 'Last logon:'.$timestamp.'|'.date('Y-m-d H:i:s', $timestamp);
    //print '<br>';
    $current_timestamp = time();
    //print 'Current time:'.$current_timestamp.'|'.date('Y-m-d H:i:s',$current_timestamp);
    //print '<br>';
    $allowed_timestamp = $timestamp+($wait_time[$failures]);
    //print 'Allowed logon:'.$allowed_timestamp.'|'.date('Y-m-d H:i:s', $allowed_timestamp).'|'.$wait_time[$failures];
    //print '<hr>';
    $difference = $allowed_timestamp - $current_timestamp;
    //print 'Difference in seconds:'.$difference;
    return $difference;
}

function cpg_bridge_prefill( $bridge = '', $key = '') {
global $BRIDGE,$default_bridge_data;
if ($BRIDGE[$key]) {
    return $BRIDGE[$key];
    } else {
    return $default_bridge_data[$bridge][$key.'_default'];
    }
}

function cpg_submit_button($step, $back = 'true', $columns = '3', $next = 'true')
{
    global $lang_bridgemgr_php,$LINEBREAK, $posted_var;
    $checked = '';

    if ($posted_var['hide_unused_fields'] != 1) {
        $checked = 'checked="checked"';
    }
    $return = '    <tr>'.$LINEBREAK;
    $return .= '        <td colspan="'.$columns.'" class="tablef" align="center">'.$LINEBREAK;
    $return .= '            <table border="0" cellspacing="0" cellpadding="0" width="100%"><tr>'.$LINEBREAK;
    $return .= '            <td align="left">'.$LINEBREAK;
    $return .= '            <input type="hidden" name="hide_unused_fields" id="hide_unused_fields" value="1" class="checkbox" '.$checked.' onclick="toggleUnusedFields(this);" />'.$LINEBREAK;
    $return .= '        </td>'.$LINEBREAK;
    $return .= '        <td align="right">'.$LINEBREAK;
    if ($back == 'true') {
        $return .= '            <input type="button" name="back" value="&laquo;'.$lang_bridgemgr_php['back'].'" class="button" onclick="javascript:history.back()" />'.$LINEBREAK;
    }
    if ($next != 'false') {
        $return .= '            <input type="submit" name="submit" value="'.$lang_bridgemgr_php['next'].'&raquo;" class="button" />'.$LINEBREAK;
    }
    $return .= '            <input type="hidden" name="step" value="'.$step.'" />'.$LINEBREAK;
    $return .= '            </td>';
    $return .= '                </tr></table>';
    $return .= '        </td>'.$LINEBREAK;
    $return .= '    </tr>'.$LINEBREAK;
    return $return;
}

function remote_file_exists ($url)
{
    // currently not used - will have to be looked into: we need a reliable way to check if an url exists, even if we can not use fopen, because it is disabled in php.ini
    /*
       Return error codes:
       1 = Invalid URL host
       2 = Unable to connect to remote host
    */
   $head = "";
   $url_p = parse_url ($url);

   if (isset ($url_p["host"]))
   { $host = $url_p["host"]; }
   else
   { return 1; }

   if (isset ($url_p["path"]))
   { $path = $url_p["path"]; }
   else
   { $path = ""; }

   $fp = fsockopen ($host, 80, $errno, $errstr, 20);
   if (!$fp)
   { return 2; }
   else
   {
       $parse = parse_url($url);
       $host = $parse['host'];

       fputs($fp, 'HEAD '.$url.' HTTP/1.1' . $LINEBREAK);
       fputs($fp, 'HOST: '.$host.$LINEBREAK);
       fputs($fp, 'Connection: close'.$LINEBREAK.$LINEBREAK);
       $headers = '';
       while (!feof ($fp))
       { $headers .= fgets ($fp, 128); }
   }
   fclose ($fp);
   $arr_headers = explode("\n", $headers);
   $return = false;
   if (isset ($arr_headers[0]))
   { $return = strpos ($arr_headers[0], '404') === false; }
   return $return;
}

function cpg_refresh_config_db_values() {
    global $CONFIG;
    // Retrieve DB stored configuration
    $results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_CONFIG']}");
    while ($row = mysql_fetch_array($results)) {
        $CONFIG[$row['name']] = $row['value'];
    } // while
    mysql_free_result($results);
    return $CONFIG;
}

function cpg_is_writable($folder)
{
    $return = 0;
    $file_content = "this is just a test file that hasn't been deleted properly.".$LINEBREAK."It's safe to delete it now";
    if ($fd = @fopen($folder.'/cpgvc_tf.txt', 'w')) {
        @fwrite($fd, $file_content);
        @fclose($fd);
        @unlink($folder.'/cpgvc_tf.txt');
        $return = 1;
    } else {
        $return = -1;
    }
    return $return;
}

///////////// function defintions end /////////////////////////////

//$posted_var['hide_unused_fields'] = 0;//override the posted var for debugging purposes
if ($superCage->post->keyExists('step')) {
    $matches = $superCage->post->getMatched('step', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['step'] = $matches[0];
}

if (GALLERY_ADMIN_MODE) { // gallery admin mode --- start

//////////////// main code start //////////////////////

// Sanitize superglobals
if ($superCage->post->keyExists('hide_unused_fields')) {
    $posted_var['hide_unused_fields'] = $superCage->post->getDigits('hide_unused_fields');
}
if ($superCage->post->keyExists('force_startpage')) {
    $posted_var['force_startpage'] = $superCage->post->getDigits('force_startpage');
}
if ($superCage->post->keyExists('wizard_finished')) {
    $posted_var['wizard_finished'] = $superCage->post->getAlpha('wizard_finished');
}
if ($superCage->post->keyExists('submit')) {
    $posted_var['submit'] = 1;
}
if ($superCage->post->keyExists('short_name')) {
    $matches = $superCage->post->getMatched('short_name', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['short_name'] = $matches[0];
}
if ($superCage->post->keyExists('custom_filename')) {
    $matches = $superCage->post->getMatched('custom_filename', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['custom_filename'] = $matches[0];
}
if ($superCage->post->keyExists('bridge_enable')) {
    $posted_var['bridge_enable'] = $superCage->post->getDigits('bridge_enable');
}
if ($superCage->post->keyExists('clear_unused_db_fields')) {
    $posted_var['clear_unused_db_fields'] = $superCage->post->getDigits('clear_unused_db_fields');
}
if ($superCage->post->keyExists('full_forum_url')) {
    $posted_var['full_forum_url'] = $superCage->post->getEscaped('full_forum_url');
}
if ($superCage->post->keyExists('relative_path_to_config_file')) {
    $posted_var['relative_path_to_config_file'] = $superCage->post->getEscaped('relative_path_to_config_file');
}
if ($superCage->post->keyExists('cookie_prefix')) {
    $matches = $superCage->post->getMatched('cookie_prefix', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['cookie_prefix'] = $matches[0];
}
if ($superCage->post->keyExists('use_post_based_groups')) {
    $posted_var['use_post_based_groups'] = $superCage->post->getDigits('use_post_based_groups');
}
//print_r($posted_var); // uncomment to see the array of post vars

// initialize vars
if (!empty($posted_var['step'])) {
    $step = $posted_var['step'];
} else {
    $step = 'choose_bbs';
}

$next_step = array( // this defines the order of steps
  'choose_bbs' => 'settings_path',
  'settings_path' => 'special_settings',
  'special_settings' => 'finalize',
  'finalize' => 'finalize',
);

$previous_step = array_flip($next_step);


pageheader($lang_bridgemgr_php['title']);

// print 'Current step:'.$step.', previous step:'.$previous_step[$step].', next step:'.$next_step[$step]; // debug output

// Loop through the bridge folder
$foldername = 'bridge';
$dir = opendir($foldername);
$existing_bridge_files = array();
while ($file = readdir($dir)) {
      $extension = ltrim(substr($file,strpos($file,'.inc.php')),'.');
      $bridge_lookup = str_replace('.' . $extension, '', $file);
      if ($bridge_lookup != '' && $bridge_lookup != 'coppermine' && $bridge_lookup != 'udb_base') {
          //include_once $foldername . '/' . $bridge_lookup . '.inc.php';
          $existing_bridge_files[] = $bridge_lookup;
      }
}
closedir($dir);
unset($bridge_lookup);
// Sort the bridge files alphabetically
sort($existing_bridge_files);
// Populate the array $default_bridge_data
foreach ($existing_bridge_files as $bridge_lookup) {
    include_once($foldername . '/' . $bridge_lookup . '.inc.php');
}
unset($existing_bridge_files);
unset($bridge_lookup);


// get the bridge db vars first
$BRIDGE = cpg_get_bridge_db_values();
//print_r($BRIDGE);
//print '<hr>';

switch ($step) {
case "choose_bbs":
$BRIDGE = cpg_get_bridge_db_values();
print '<form name="'.$step.'" id="cpgform" action="'.$CPG_PHP_SELF.'" method="post">';
//print '<input type="hidden" name="hide_unused_fields" value="1" />';
starttable(-1, cpg_fetch_icon('bridge_mgr', 2) . $lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['choose_bbs_app'].'&nbsp;'.cpg_display_help('f=bridging.htm&amp;as=bridge_manager_app_start&amp;ae=bridge_manager_app_end', '800', '450'),2);
foreach($default_bridge_data as $key => $value) {
    print '<tr>'.$LINEBREAK;
    print '    <td class="tableb">'.$LINEBREAK;
    print '        <input type="radio" name="short_name" id="'.$key.'" class="radio" value="'.$key.'" '. ($key == $BRIDGE['short_name'] ? 'checked="checked"' : '') . ' />'.$LINEBREAK;
    print '        <label for="'.$key.'" class="clickable_option">'.$LINEBREAK;
    print '            '.$value['full_name'].$LINEBREAK;
    print '        </label>'.$LINEBREAK;
    print '    </td>'.$LINEBREAK;
    print '    <td class="tableb">'.$LINEBREAK;
    print '        <span class="explanation">'.$LINEBREAK;
    print '            <a href="'.$value['support_url'].'" title="'.$lang_bridgemgr_php['support_url'].'" rel="external">'.$value['support_url'].'</a>'.$LINEBREAK;
    print '        </span>'.$LINEBREAK;
    print '    </td>'.$LINEBREAK;
    print '</tr>'.$LINEBREAK;
} // end foreach

// loop through the pre-made bridges. If there's one in the db that doesn't exist in the bridges, that's our custom theme; prefill the form fields with it.
$prefill = '';
$checked = '';
$custom_bridge_counter_exist = 0;
foreach($default_bridge_data as $key => $value) {
    if ($BRIDGE['short_name'] == $key) {
        $custom_bridge_counter_exist++;
    }
}
print cpg_submit_button($next_step[$step], 'false', '2');
endtable();
print '</form>' . $LINEBREAK;
   break;

case "settings_path":
    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        print '<form name="'.$step.'" id="cpgform" action="'.$CPG_PHP_SELF.'" method="post">';
        starttable(-1, cpg_fetch_icon('bridge_mgr', 2) . $lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['settings_path'].'&nbsp;'.cpg_display_help('f=bridging.htm&amp;as=bridge_manager_path_start&amp;ae=bridge_manager_path_end', '800', '450'), 3);
        $loop_array = array('full_forum_url','relative_path_of_forum_from_webroot','relative_path_to_config_file', 'cookie_prefix');
        $rows_displayed = 0;
        $section_number = 0;
        $folder_icon = cpg_fetch_icon('folder', 0, $lang_bridgemgr_php['browse']);
        foreach($loop_array as $key) {
            $prefill = cpg_bridge_prefill($BRIDGE['short_name'],$key);
            if ($key == 'relative_path_of_forum_from_webroot') {
                $minibrowser = '<a href="javascript:;" onclick="MM_openBrWindow(\'minibrowser.php?startfolder='.rawurlencode($prefill).'&amp;parentform='.rawurlencode($step).'&amp;formelementname='.rawurlencode($key).'\',\''.uniqid(rand()) .'\',\'scrollbars=yes,toolbar=no,status=no,locationbar=no,resizable=yes,width=600,height=400\')">' . $folder_icon . '</a>';
            } else {
                $minibrowser = '';
            }
            $reset_to_default = '';
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == '') {
                $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
                $minibrowser = '';
            } else {
                $disabled = '';
                $rows_displayed++;
                if ($default_bridge_data[$BRIDGE['short_name']][$key.'_default'] != '') {
                    $reset_to_default = '<a href="javascript:;" onclick="document.getElementById(\''.$key.'\').value=\''.$default_bridge_data[$BRIDGE['short_name']][$key.'_default'].'\'">' . cpg_fetch_icon('stop', 0, $lang_bridgemgr_php['reset_to_default']) . '</a>';
                }
            }
            if ($posted_var['hide_unused_fields'] != 1 || $disabled == '')
            {
                print '<tr>'.$LINEBREAK;
                print '    <td class="tableb" width="30%">'.$LINEBREAK;
                print '        '.$lang_bridgemgr_php[$key].':'.$LINEBREAK;
                print '    </td>'.$LINEBREAK;
                print '    <td class="tableb" width="60%" style="overflow:visible">'.$LINEBREAK;
                print '        <input type="text" name="'.$key.'" id="'.$key.'" size="50" class="textinput" style="width:80%" value="'.$prefill.'" '.$disabled.' />'.$minibrowser.$reset_to_default.$LINEBREAK;
                print '    </td>'.$LINEBREAK;
                print '    <td class="tableb" width="10%">'.$LINEBREAK;
                print $display1.$LINEBREAK;
                print '        ';
                print cpg_display_help('f=bridging.htm&amp;as=bridge_manager_path_'.$key.'&amp;ae=bridge_manager_path_'.$key.'_end', '800', '450').'</span>'.$LINEBREAK;
                print $display2.$LINEBREAK;
                print '    </td>'.$LINEBREAK;
                print '</tr>'.$LINEBREAK;
            }
        }
        if ($rows_displayed == 0) {
            print '<tr>';
            print '    <td class="tableh2" colspan="3" align="center">';
            print '        <h2>'.$lang_bridgemgr_php['no_action_needed'].'</h2>';
            print '    </td>';
            print '</tr>';
        }
        print cpg_submit_button($next_step[$step]);
        endtable();
        print '</form>' . $LINEBREAK;
    } // end if not error
   break;

case "special_settings":

    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        print '<form name="'.$step.'" id="cpgform" action="'.$CPG_PHP_SELF.'" method="post">';
        starttable(-1, cpg_fetch_icon('bridge_mgr', 2) . $lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['special_settings'].'&nbsp;'.cpg_display_help('f=bridging.htm&amp;as=bridge_manager_specific_start&amp;ae=bridge_manager_specific_end', '800', '450'), 3);
        $loop_array = array('use_post_based_groups');
        $rows_displayed = 0;
        foreach($loop_array as $key) { // foreach loop_array --- start
            if ($BRIDGE[$key]) {
                $prefill = $BRIDGE[$key];
            } else {
                $prefill = $default_bridge_data[$BRIDGE['short_name']][$key.'_default'];
            }
            //print 'key:'.$key.',prefill:'.$prefill.'<br>';
            //print_r($default_bridge_data[$BRIDGE['short_name']]);
            //if ($default_bridge_data['phpbb']['logout_flag_default'] == true){print '<h1>true</h1>';}else{print '<h1>not true</h1>';}
            $reset_to_default = '';
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == '') {
                $disabled = 'disabled="disabled"';
            } else {
                $disabled = '';
                $rows_displayed++;
            }
            // get the possible options for the value
            //  e.g. 'option_name_used' => 'radio,1,0',
            $option_yes = '';
            $option_no = '';
            $options = explode(',', $default_bridge_data[$BRIDGE['short_name']][$key.'_used']);
            if ($options[0] == 'radio') {$option_yes = $options[1]; $option_no = $options[2];}
            if ($BRIDGE[$key] == $options[1]) {
                $checked_yes = 'checked="checked"';
                $checked_no = '';
            } elseif ($BRIDGE[$key] == $options[2]) {
                $checked_yes = '';
                $checked_no = 'checked="checked"';
            }
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == 'password') {$fieldtype = 'password';} else {$fieldtype = 'text';}
            if ($posted_var['hide_unused_fields'] != 1 || $disabled == '') { // actually display the row? --- start
                if ($options[0] == 'radio') { // radio button --- start
                    print '<tr>'.$LINEBREAK;
                    print '    <td class="tableb">'.$LINEBREAK;
                    print '        '.$lang_bridgemgr_php[$key].':'.$LINEBREAK;
                    print '    </td>'.$LINEBREAK;
                    print '    <td class="tableb">'.$LINEBREAK;
                    print '        <input type="radio" name="'.$key.'" id="'.$key.'_yes" class="radio" value="'.$option_yes.'" '.$disabled.' '.$checked_yes.' />'.$LINEBREAK;
                    print '        <label for="'.$key.'_yes" class="clickable_option">'.$LINEBREAK;
                    print '            '.$lang_bridgemgr_php[$key.'_yes'].$LINEBREAK;
                    print '        </label>&nbsp;'.$LINEBREAK;
                    print '        &nbsp;&nbsp;&nbsp;'.$LINEBREAK;
                    print '        <input type="radio" name="'.$key.'" id="'.$key.'_no" class="radio" value="'.$option_no.'" '.$disabled.' '.$checked_no.' /><label for="'.$key.'_no" class="clickable_option">'.$lang_bridgemgr_php[$key.'_no'].'</label>'.$LINEBREAK;
                    print '    </td>'.$LINEBREAK;
                    print '    <td class="tableb">'.$LINEBREAK;
                    print '        '.cpg_display_help('f=bridging.htm&amp;as=bridge_manager_'.$key.'&amp;ae=bridge_manager_'.$key.'_end', '800', '450').'</span>'.$LINEBREAK;
                    print '    </td>'.$LINEBREAK;
                    print '</tr>'.$LINEBREAK;
                } // radio button --- end
                if ($options[0] == 'mandatory') { // input field --- start
                    print '<tr>'.$LINEBREAK;
                    print '    <td class="tableb">'.$LINEBREAK;
                    print '        '.$lang_bridgemgr_php[$key].':'.$LINEBREAK;
                    print '    </td>'.$LINEBREAK;
                    print '    <td class="tableb">'.$LINEBREAK;
                    print '        <input type="'.$fieldtype.'" name="'.$key.'" id="'.$key.'" class="textinput" value="'.$prefill.'" '.$disabled.' size="30"  style="width:80%" />'.$reset_to_default.$LINEBREAK;
                    print '    </td>'.$LINEBREAK;
                    print '    <td class="tableb">'.$LINEBREAK;
                    print '        <span class="explanation">'.$lang_bridgemgr_php[$key.'_explanation'].'</span>'.$LINEBREAK;
                    print '    </td>'.$LINEBREAK;
                    print '</tr>'.$LINEBREAK;
                } // input field --- end
                if ($options[0] == 'checkbox') { // checkbox --- start
                    print '<tr>'.$LINEBREAK;
                    print '    <td class="tableb" colspan="2">'.$LINEBREAK;
                    print '        <input type="checkbox" name="'.$key.'" id="'.$key.'" class="checkbox" value="1" '.$checked.' />'.$LINEBREAK;
                    print '        <label for="'.$key.'" class="clickable_option">'.$LINEBREAK;
                    print '            '.$lang_bridgemgr_php[$key].$LINEBREAK;
                    print '        </label>&nbsp;'.$LINEBREAK;
                    print '    </td>'.$LINEBREAK;
                    print '    <td class="tableb">'.$LINEBREAK;
                    print '        <span class="explanation">'.$lang_bridgemgr_php[$key.'_explanation'].'</span>'.$LINEBREAK;
                    print '    </td>'.$LINEBREAK;
                    print '</tr>'.$LINEBREAK;
                } // checkbox --- end
            } // actually display the row? --- end
        } // foreach loop_array --- end

        if ($rows_displayed == 0) {
            print '<tr>';
            print '    <td class="tableh2" colspan="3" align="center">';
            print '        <h2>'.$lang_bridgemgr_php['no_action_needed'].'</h2>';
            print '    </td>';
            print '</tr>';
        }
        print cpg_submit_button($next_step[$step]);
        endtable();
        print '</form>' . $LINEBREAK;
    } // end if error
    break;


case "finalize":

    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        $CONFIG = cpg_refresh_config_db_values();

                // sync groups here now :)
                if ($CONFIG['bridge_enable']){
                       include 'bridge/' . $BRIDGE['short_name'] . '.inc.php';
                        $cpg_udb->synchronize_groups();
                } else {
                        // ok, then restore group table
                        cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
                        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                        VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3)");
                        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                        VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3)");
                        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                        VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 3)");
                }
        print '<form name="'.$step.'" id="cpgform" action="'.$CPG_PHP_SELF.'" method="post">';
        echo <<<EOT
    <script type="text/javascript">
    <!--
    function changeSubmitButton() {
        document.finalize.submit.value='{$lang_bridgemgr_php['finish']}';
        document.finalize.step.value='finalize';
        document.finalize.force_startpage.value='1';
    }
    -->
    </script>
EOT;
        starttable(-1, cpg_fetch_icon('bridge_mgr', 2) . $lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['finalize'],2);
        if ($posted_var['submit'] && $CONFIG['bridge_enable'] != 1) {
            print '<tr>';
            print '<td class="tableb" colspan="2">';
            print '<span class="explanation">';
            printf($lang_bridgemgr_php['finalize_explanation'],rtrim($CONFIG['ecards_more_pic_target'], '/').'/bridgemgr.php');
            print '</span>';
            print '</td>';
            print '</tr>';
        }
        if (is_array($BRIDGE)) { // there are entries in the db already --- start
            print '<tr>';
            print '<td class="tableh2" colspan="2">';
            print $lang_bridgemgr_php['your_bridge_settings'];
            print '</td>';
            print '</tr>';
            $mandatory_fields_missing = 0;
            foreach($BRIDGE as $key => $value) {
                if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] != '') {
                    print '<tr>';
                    print '    <td class="tableb" width="50%">';
                    print '        <span class="explanation">'.$lang_bridgemgr_php[$key].':</span>';
                    print '    </td>';
                    print '    <td class="tableb" width="50%">';
                    if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == 'password') {
                        $pw = '';
                        for ($i=1; $i <= strlen($value);$i++) {
                            $pw = $pw.'*';
                        }
                        $value = $pw;
                    }
                    print '        <span class="explanation">'.$value;
                    // check if we really can allow enabling bridging: are all required fields in the db?
                    if (strstr($default_bridge_data[$BRIDGE['short_name']][$key.'_used'], 'not_empty') != false && $value == '') {
                        print ' (<div class="cpg_message_validation">'.$lang_bridgemgr_php['error_must_not_be_empty'].'</div>)';
                        $mandatory_fields_missing++;
                    }
                    $explode = explode(',', $default_bridge_data[$BRIDGE['short_name']][$key.'_used']);
                    if ($explode[0] == radio && ($value != $explode[1] && $value != $explode[2])) {
                        printf(' ('.$lang_bridgemgr_php['error_either_be'].')',$explode[1],$explode[2]);
                        $mandatory_fields_missing++;
                    }
                    //print '<br>';
                    print '</span>';
                    print '    </td>';
                    print '</tr>';
                }
            }
        }  // there are entries in the db already --- end
        if ($BRIDGE['short_name'] != '') {// display the enable/disable option only if there's at least a db entry about the file to bridge with --- start
            print '<tr>';
            print '<td class="tableh2" colspan="2">';
            printf($lang_bridgemgr_php['title_enable'], '<strong>'.$default_bridge_data[$BRIDGE['short_name']]['full_name'].'</strong>');
            print '</td>';
            print '</tr>';
            //print 'bridge enabled:'.$CONFIG['bridge_enable'];
            if ($CONFIG['bridge_enable'] == 1) {
                $checked_yes = 'checked="checked"';
                $checked_no = '';
                $disabled_yes = '';
                $disabled_no = '';
            } else {
                $checked_yes = '';
                $checked_no = 'checked="checked"';
                if ($mandatory_fields_missing != 0) {
                    $disabled_yes = 'disabled="disabled"';
                    $disabled_no = '';
                } else {
                    $disabled_yes = '';
                    $disabled_no = '';
                }
            }
        } // display the enable/disable option only if there's at least a db entry about the file to bridge with --- end
        if ($posted_var['submit'] == '' || $posted_var['wizard_finished'] != '' || $posted_var['force_startpage'] == '1') {
            if ($BRIDGE['short_name'] != '') {// display the enable/disable option only if there's at least a db entry about the file to bridge with --- start
                print '<tr>';
                print '    <td class="tableb" width="50%">';
                print '        <input type="radio" name="bridge_enable" id="bridge_enable_yes" class="radio" value="1" '.$disabled_yes.' '.$checked_yes.' onclick="changeSubmitButton();" /><label for="bridge_enable_yes" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_yes'].'</label>';
                print '    </td>';
                print '    <td class="tableb" width="50%">';
                print '        <input type="radio" name="bridge_enable" id="bridge_enable_no" class="radio" value="0" '.$disabled_no.' '.$checked_no.' onclick="changeSubmitButton();" /><label for="bridge_enable_no" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_no'].'</label>';
                print '    </td>';
                print '</tr>';
            } // display the enable/disable option only if there's at least a db entry about the file to bridge with --- end
            print '<tr>'.$LINEBREAK;
            print '        <td colspan="2" class="tablef" align="center">'.$LINEBREAK;
            print '            <table border="0" cellspacing="0" cellpadding="0" width="100%">'.$LINEBREAK;
            print '                <tr>'.$LINEBREAK;
            print '                    <td align="left">'.$LINEBREAK;
            print '                        <input type="hidden" name="hide_unused_fields" id="hide_unused_fields" value="1" class="checkbox"  />'.$LINEBREAK;
            print '                   </td>'.$LINEBREAK;
            print '                   <td align="right">'.$LINEBREAK;
            print '                        <input type="submit" name="submit" value="'.$lang_bridgemgr_php['start_wizard'].'" class="button" />'.$LINEBREAK;
            print '                        <input type="hidden" name="step" value="choose_bbs" />'.$LINEBREAK;
            print '                        <input type="hidden" name="force_startpage" value="0" />'.$LINEBREAK;
            print '                   </td>'.$LINEBREAK;
            print '                 </tr>'.$LINEBREAK;
            print '             </table>'.$LINEBREAK;
            print '        </td>'.$LINEBREAK;
            print '</tr>'.$LINEBREAK;
        } else {
            print '<tr>';
            print '    <td class="tableb" width="50%">';
            print '        <input type="radio" name="bridge_enable" id="bridge_enable_yes" class="radio" value="1" '.$disabled_yes.' '.$checked_yes.' /><label for="bridge_enable_yes" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_yes'].'</label>';
            print '    </td>';
            print '    <td class="tableb" width="50%">';
            print '        <input type="radio" name="bridge_enable" id="bridge_enable_no" class="radio" value="0" '.$disabled_no.' '.$checked_no.' /><label for="bridge_enable_no" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_no'].'</label>';
            print '    </td>';
            print '</tr>';
            print '<tr>'.$LINEBREAK;
            print '        <td colspan="2" class="tablef" align="center">'.$LINEBREAK;
            print '            <table border="0" cellspacing="0" cellpadding="0" width="100%">'.$LINEBREAK;
            print '                <tr>'.$LINEBREAK;
            print '                    <td align="left">'.$LINEBREAK;
            //print '                        <input type="checkbox" name="clear_unused_db_fields" id="clear_unused_db_fields" value="1" class="checkbox"  checked="checked" />'.$LINEBREAK;
            //print '                        <label for="clear_unused_db_fields" class="clickable_option"><span class="explanation">'.$lang_bridgemgr_php['clear_unused_db_fields'].'</span></label>'.$LINEBREAK;
            print '                   </td>'.$LINEBREAK;
            print '                   <td align="center">'.$LINEBREAK;
            print '                        <input type="button" name="back" value="&laquo;'.$lang_bridgemgr_php['back'].'" class="button" onclick="javascript:history.back()" />'.$LINEBREAK;
            print '                        <input type="submit" name="submit" value="'.$lang_bridgemgr_php['finish'].'" class="button" />'.$LINEBREAK;
            print '                        <input type="hidden" name="step" value="finalize" />'.$LINEBREAK;
            print '                        <input type="hidden" name="wizard_finished" value="finished" />'.$LINEBREAK;
            print '                   </td>'.$LINEBREAK;
            print '                 </tr>'.$LINEBREAK;
            print '             </table>'.$LINEBREAK;
            print '        </td>'.$LINEBREAK;
            print '</tr>'.$LINEBREAK;
        }
        endtable();
        print '</form>';
    } // end if error
    break;
}


print '<br />' . $LINEBREAK;
pagefooter();
} // gallery admin mode --- end
else { // not in gallery admin mode --- start
    if ($CONFIG['bridge_enable'] != 1) {    
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__); 
    }

    // initialize vars
    $step = $posted_var['step'];
    
    pageheader($lang_bridgemgr_php['title']);
    switch ($step) {
    case "attempt_to_disable":
    // check if the wait time is over; if it isn't, send them back
    $results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'");
    if (mysql_num_rows($results)) {
        $row = mysql_fetch_array($results);
    }
    $recovery_logon_timestamp = $row['value'];
    //print $recovery_logon_timestamp;
    $results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'");
    if (mysql_num_rows($results)) {
        $row = mysql_fetch_array($results);
    }
    $recovery_logon_failures = $row['value'];
    $logon_allowed = cpg_check_allowed_emergency_logon($recovery_logon_timestamp,$recovery_logon_failures);
    if ($logon_allowed > 0) {
        // the user is not allowed to logon yet, the wait time has not elapsed yet
        msg_box($lang_bridgemgr_php['recovery_wait_title'], $lang_bridgemgr_php['recovery_wait_content'], $lang_bridgemgr_php['try_again'], $CPG_PHP_SELF);
    } else { // the logon wait time has passed, the user is allowed to try to logon now
        // go through the list of standalone admins and check if we have a match
        $temp_user_table = $CONFIG['TABLE_PREFIX'].'users';

        if ($superCage->post->keyExists('username')) {
            $posted_var['username'] = $superCage->post->getEscaped('username');
        }
        if ($superCage->post->keyExists('password')) {
            $posted_var['password'] = $superCage->post->getEscaped('password');
        }

        $encpassword = md5(addslashes($posted_var['password']));


        $results = cpg_db_query("SELECT user_id, user_name, user_password FROM $temp_user_table WHERE user_name = '" . addslashes($posted_var['username']) . "' AND BINARY user_password = '" . $encpassword . "' AND user_active = 'YES' AND user_group = '1'");
        if (mysql_num_rows($results)) {
            $retrieved_data = mysql_fetch_array($results);
        }
        if ($retrieved_data['user_name'] == $posted_var['username'] && $retrieved_data['user_password'] == $encpassword && $retrieved_data['user_name'] != '' ) {
            // authentication successful
            
            cpg_config_set('bridge_enable', '0');
            
            cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '0' WHERE name = 'recovery_logon_failures'");
            cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'");

            // ok, then restore group table
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
            cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
            VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3)");
            cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
            VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3)");
            cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
            VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 3)");

            if (USER_ID) { //user already logged in
                msg_box($lang_bridgemgr_php['recovery_success_title'], $lang_bridgemgr_php['recovery_success_content'], $lang_bridgemgr_php['goto_bridgemgr'], $CPG_PHP_SELF, 'success');
            } else { // user not logged in yet
                msg_box($lang_bridgemgr_php['recovery_success_title'], $lang_bridgemgr_php['recovery_success_content'].'<br />'.$lang_bridgemgr_php['recovery_success_advice_login'], $lang_bridgemgr_php['goto_login'], "login.php?referer=".$CPG_PHP_SELF, 'success');
            }
        } else {
            // authentication failed
            cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'");
            $results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'");
            if (mysql_num_rows($results)) {
                $row = mysql_fetch_array($results);
            }
            $number_of_failed_attempts = $row['value'] + 1;
            cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '$number_of_failed_attempts' WHERE name = 'recovery_logon_failures'");
            msg_box($lang_bridgemgr_php['recovery_failure_title'], $lang_bridgemgr_php['recovery_failure_content'], $lang_bridgemgr_php['try_again'], $CPG_PHP_SELF, 'error');
        }
    }
    break;
    default:
    // check if the wait time is over; if it isn't, disable the submit button
    $results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'");
    if (mysql_num_rows($results)) {
        $row = mysql_fetch_array($results);
    }
    $recovery_logon_timestamp = $row['value'];
    //print $recovery_logon_timestamp;
    $results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'");
    if (mysql_num_rows($results)) {
        $row = mysql_fetch_array($results);
    }
    $recovery_logon_failures = $row['value'];
    $logon_allowed = cpg_check_allowed_emergency_logon($recovery_logon_timestamp,$recovery_logon_failures);
    if ($logon_allowed < 0) {$logon_allowed = 0;}
    starttable(-1, cpg_fetch_icon('bridge_mgr', 2) . $lang_bridgemgr_php['recovery_title'],2);
        echo <<<EOT
        <form name="disable_integration" id="cpgform" action="{$CPG_PHP_SELF}" method="post">
        <tr>
            <td class="tableb" colspan="2">
                {$lang_bridgemgr_php['recovery_explanation']}
            </td>
        </tr>
        <tr>
              <td class="tableb" width="40%">{$lang_bridgemgr_php['username']}</td>
              <td class="tableb" width="60%"><input type="text" class="textinput" name="username" style="width: 100%" /></td>
        </tr>
        <tr>
            <td class="tableb">{$lang_bridgemgr_php['password']}</td>
            <td class="tableb"><input type="password" class="textinput" name="password" style="width: 100%" /></td>
        </tr>
        <tr>
            <td class="tablef" colspan="2" align="center">
                <input type="submit" name="submit" id="submit" value="{$lang_bridgemgr_php['disable_submit']}" class="button" />
                <input type="hidden" name="step" value="attempt_to_disable" />
            </td>
        </tr>
        <script language="javascript" type="text/javascript">
        <!--
        document.disable_integration.username.focus();
        document.disable_integration.submit.disabled = true;

EOT;
print '        var countDownTime = '.$logon_allowed;
echo <<<EOT

        counter=setTimeout("countDown()", 1000);
        var aktiv = window.setInterval("countDown()",1000);
        var message = '{$lang_bridgemgr_php['wait']}';
        function countDown(){
                countDownTime--;
                if (countDownTime <=0) {
                    message = '{$lang_bridgemgr_php['disable_submit']}';
                    document.getElementById('submit').disabled = false;
                    countDownTime='';
                    clearTimeout(counter);
                    //return;
                }
                document.getElementById('submit').value = message +' '+countDownTime;
        }
        addonload('countDown()');
        -->
        </script>
EOT;
        endtable();
        print '</form>';
    break;
    }
    pagefooter();
} // not in gallery admin mode --- end



//////////////////////// main code end /////////////////////////////////

?>
