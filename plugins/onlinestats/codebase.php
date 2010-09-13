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
if (!defined('PLUGINMGR_PHP')) {
	define('PLUGINMGR_PHP', true);
}
if (!defined('ADMIN_PHP')) {
    define('ADMIN_PHP', true);
}
if (!defined('CORE_PLUGIN')) {
    define('CORE_PLUGIN', true);
}

$icon_array['ok']  = cpg_fetch_icon('ok', 2);
$icon_array['config']  = cpg_fetch_icon('config', 2);

// Add plugin_install action
$thisplugin->add_action('plugin_install','online_install');

// Add page_start action
$thisplugin->add_action('page_start','online_page_start');

// Add plugin_uninstall action
$thisplugin->add_action('plugin_uninstall','online_uninstall');

// Add plugin_cleanup action
$thisplugin->add_action('plugin_cleanup','online_cleanup');

// Add search display action
$thisplugin->add_filter('plugin_block','online_mainpage');

// Add a configure action
$thisplugin->add_action('plugin_configure','online_configure');


function online_configure() {
        global $lang_plugin_php, $CONFIG, $lang_common, $lang_pluginmgr_php, $lang_admin_php, $icon_array;
        $superCage = Inspekt::makeSuperCage();
        if (!defined('ADMIN_PHP')) {
            defined('ADMIN_PHP');
        }
        $action = $superCage->server->getEscaped('REQUEST_URI');
        $matches = $superCage->post->getMatched('main_page_layout', '/^[0-9a-z,\/]{1,}$/' );
        $contentOfTheMainpage_array = explode('/',$matches[0]);
        if (in_array('onlinestats', $contentOfTheMainpage_array) == TRUE){
        	// We have a winner
        }
        
        $icon_array['ok']  = cpg_fetch_icon('ok', 2);
        $icon_array['config']  = cpg_fetch_icon('config', 2);
        if (isset($CONFIG['mod_updates_duration']) != TRUE) {
            $CONFIG['mod_updates_duration'] = 10;
        }
        list($timestamp, $form_token) = getFormToken();

        echo <<< EOT
    <form action="{$action}" method="post" name="onlinestats_configure">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td class="tableb" width="50%">
                    {$lang_plugin_php['onlinestats_config_text']}
                </td>
                <td class="tableb" width="50%">
                    <input size="2" type="text" name="duration" value="{$CONFIG['mod_updates_duration']}" class="textinput" />
                    {$lang_plugin_php['onlinestats_minute']}
                </td>
            </tr>
            <tr>
                <td class="tableb tableb_alternate">
                    {$lang_admin_php['main_page_layout']}
                </td>
                <td class="tableb tableb_alternate">
                    <input type="text" size="50" maxlength="250" class="textinput" style="width:90%" name="main_page_layout" id="main_page_layout"  value="{$CONFIG['main_page_layout']}" />
                </td>
            </tr>
            <tr>
                <td class="tablef">
                </td>
                <td class="tablef">
                    <button type="submit" class="button" name="submit" value="{$lang_common['go']}">{$icon_array['ok']}{$lang_common['go']}</button>
                    <input type="hidden" name="form_token" value="{$form_token}" />
                    <input type="hidden" name="timestamp" value="{$timestamp}" />
                </td>
            </tr>
        </table>
    </form>
EOT;
}

function online_page_start()
{
        global $raw_ip, $CONFIG, $icon_array;

        $CONFIG['TABLE_ONLINE'] = $CONFIG['TABLE_PREFIX']."mod_online";
        $user_id = USER_ID;
        $user_name = USER_NAME;

        if (defined('LOGIN_PHP')){
                cpg_db_query("DELETE FROM {$CONFIG['TABLE_ONLINE']} WHERE user_id = 0 AND user_ip = '$raw_ip'");
                return;
        }

        if (defined('LOGOUT_PHP')){
                cpg_db_query("DELETE FROM {$CONFIG['TABLE_ONLINE']} WHERE user_id = $user_id");
                return;
        }

        cpg_db_query("DELETE FROM {$CONFIG['TABLE_ONLINE']} WHERE last_action < NOW() - INTERVAL {$CONFIG['mod_updates_duration']} MINUTE");



        if ($user_id) {
                cpg_db_query("REPLACE INTO {$CONFIG['TABLE_ONLINE']} (user_id, user_name, user_ip, last_action) VALUES ('$user_id', '$user_name', '$raw_ip', NOW())");

        } else{
                $testarray = explode('.',$raw_ip);
                $teststr = $testarray[0] . '.' . $testarray[1];
                $sel = cpg_db_query("SELECT user_ip FROM {$CONFIG['TABLE_ONLINE']} WHERE user_ip LIKE '$teststr%'");
                $res = mysql_fetch_row($sel);
                $result = $res[0];

                if (mysql_num_rows($sel)){
                        cpg_db_query("UPDATE {$CONFIG['TABLE_ONLINE']} SET last_action = NOW() WHERE user_ip = '$result' LIMIT 1");
                } else {
                        cpg_db_query("INSERT INTO {$CONFIG['TABLE_ONLINE']} (user_id, user_name, user_ip, last_action) VALUES ('$user_id', '$user_name', '$raw_ip', NOW())");
                }
        }
}

function online_mainpage()
{
        global $CONFIG, $cpg_udb, $matches, $lang_plugin_php, $lang_date, $LINEBREAK;
    
        if($matches[1] != 'onlinestats') {
          return $matches;
        }
        
        $num_users = $cpg_udb->get_user_count();

        $result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_ONLINE']}");
        list($num_online) = mysql_fetch_row($result);

        $result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_ONLINE']} WHERE user_id <> 0");
        list($num_reg_online) = mysql_fetch_row($result);
        
        $result = cpg_db_query("SELECT {$cpg_udb->field['user_id']} AS user_id, {$cpg_udb->field['username']} AS user_name FROM {$cpg_udb->usertable} ORDER BY user_id DESC LIMIT 1", $cpg_udb->link_id);
        $newest = mysql_fetch_assoc($result);

        $result = cpg_db_query("SELECT user_id, user_name FROM {$CONFIG['TABLE_ONLINE']} WHERE user_id <> 0");

        $logged_in_array = array();

        while ($row = mysql_fetch_row($result)) {
                $logged_in_array[] = vsprintf('<a href="profile.php?uid=%d">%s</a>', $row);
        }

        $logged_in_names = implode(', ', array_unique($logged_in_array));

        $num_guests = $num_online - $num_reg_online;

        // most users online - TND
        if ($num_online > $CONFIG['record_online_users'])
        {
                $CONFIG['record_online_date'] = localised_date(-1, $lang_plugin_onlinestats_date_fmt);
                $CONFIG['record_online_users'] = $num_online;

                $result = cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$num_online' WHERE name = 'record_online_users'");
                $result = cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = UNIX_TIMESTAMP() WHERE name = 'record_online_date'");
        }

       starttable("100%", cpg_fetch_icon('online', 2) . $lang_plugin_php['onlinestats_name']);
        print '<tr><td class="tableb">';
        if ($num_users == 1) {
            printf($lang_plugin_php['onlinestats_we_have_reg_member'], '<strong>'.$num_users.'</strong>');
        } else {
            printf($lang_plugin_php['onlinestats_we_have_reg_members'], '<strong>'.$num_users.'</strong>');
        }
        echo '.&nbsp;' . $LINEBREAK;
        printf($lang_plugin_php['onlinestats_most_recent'], '<a href="profile.php?uid='.$newest['user_id'].'">'.$newest['user_name'].'</a>');
        echo '.&nbsp;' . $LINEBREAK;
        if ($num_online == 1) {
            printf($lang_plugin_php['onlinestats_is'], '<strong>'.$num_online.'</strong>');
        } else {
            printf($lang_plugin_php['onlinestats_are'], '<strong>'.$num_online.'</strong>');
        }
        print ': ';
        if ($num_reg_online == 1) {
            printf($lang_plugin_php['onlinestats_reg_member'], '<strong>'.$num_reg_online.'</strong>');
        } else {
            printf($lang_plugin_php['onlinestats_reg_members'], '<strong>'.$num_reg_online.'</strong>');
        }
        print ' '.$lang_plugin_php['onlinestats_and'].' ';
        if ($num_guests == 1) {
            printf($lang_plugin_php['onlinestats_guest'], '<strong>'.$num_guests.'</strong>');
        } else {
            printf($lang_plugin_php['onlinestats_guests'], '<strong>'.$num_guests.'</strong>');
        }
        echo '.&nbsp;' . $LINEBREAK;
        printf($lang_plugin_php['onlinestats_record'], '<strong>'.$CONFIG['record_online_users'].'</strong>', localised_date($CONFIG['record_online_date'], $lang_date['lastcom']));
        echo '.&nbsp;' . $LINEBREAK;
        printf($lang_plugin_php['onlinestats_since'], $CONFIG['mod_updates_duration'], $logged_in_names);
        print '.</td></tr>';
        endtable();
        print '<br />';
}

// Install
function online_install() {
        global $CONFIG, $thisplugin;
        $superCage = Inspekt::makeSuperCage();

        if ($superCage->post->keyExists('duration')) {
                require 'include/sql_parse.php';
                $duration = $superCage->post->getInt('duration');

                // create table
                $db_schema = $thisplugin->fullpath . '/schema.sql';
                $sql_query = fread(fopen($db_schema, 'r'), filesize($db_schema));
                $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);

                $sql_query = remove_remarks($sql_query);
                $sql_query = split_sql_file($sql_query, ';');
                $sql_query[] = "INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (name, value) VALUES ('mod_updates_duration', '{$duration}')";

                foreach($sql_query as $q) cpg_db_query($q);
                
                // Add the string "onlinestats" to "the content of the main page" if it doesn't exist
                if (strpos($CONFIG['main_page_layout'], 'onlinestats') === FALSE) {
                    $contentOfTheMainpage = rtrim($CONFIG['main_page_layout'], '/').'/onlinestats';
                    cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$contentOfTheMainpage' WHERE name = 'main_page_layout'"); 
                }

           return true;
    } else {
        return 1;
    }
}

// Uninstall (drop?)
function online_uninstall() {
        global $CONFIG;
        $superCage = Inspekt::makeSuperCage();

        if (!$superCage->post->keyExists('drop')) {
            return 1;
        }
        // Drop the tables
        if ($superCage->post->getInt('drop') == 1) {
            cpg_db_query("DROP TABLE IF EXISTS {$CONFIG['TABLE_ONLINE']}");
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'mod_updates_duration'");
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'record_online_users'");
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'record_online_date'");
        }
        
        // Remove the string "onlinestats" from the config option "content of the main page"
        $contentOfTheMainpage = str_replace('/onlinestats', '', $CONFIG['main_page_layout']);
        $contentOfTheMainpage = str_replace('onlinestats/', '', $contentOfTheMainpage);
        $contentOfTheMainpage = str_replace('onlinestats', '', $contentOfTheMainpage);
        cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$contentOfTheMainpage' WHERE name = 'main_page_layout'");

        return true;
}

// Ask if we want to drop the table
function online_cleanup($action) {
    global $lang_plugin_php, $CONFIG, $lang_common, $icon_array;
    $superCage = Inspekt::makeSuperCage();
    $cleanup = $superCage->server->getEscaped('REQUEST_URI');
    if ($action===1) {
    print <<< EOT
    <form action="{$cleanup}" method="post">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="tableb">
                    {$lang_plugin_php['onlinestats_remove']}
                </td>
                <td class="tableb">
                    <input type="radio" name="drop" id="drop_yes" value="1" />
                    <label for="drop_yes" class="clickable_option">{$lang_common['yes']}</label>
                </td>
                <td class="tableb">
                    <input type="radio" name="drop" id="drop_no" checked="checked" value="0" />
                    <label for="drop_no" class="clickable_option">{$lang_common['no']}</label>
                </td>
                <td class="tableb">
                    <button type="submit" class="button" name="submit" value="{$lang_common['go']}">{$icon_array['ok']}{$lang_common['go']}</button>

                </td>
            </tr>
        </table>
    </form>
EOT;
    }
}
?>