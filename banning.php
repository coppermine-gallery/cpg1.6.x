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
define('BANNING_PHP', true);
define('CALENDAR_PHP', true);
define('USERMGR_PHP', true);

require('include/init.inc.php');
require('include/sql_parse.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

js_include('js/date.js');
js_include('js/jquery.datePicker.js');
js_include('js/banning.js');

// Variable initialization
$icon_array = array(
    'calendar'        => cpg_fetch_icon('calendar', 0),
    'calendar_delete' => cpg_fetch_icon('calendar_delete', 0),
    'edit'            => cpg_fetch_icon('edit', 0),
    'delete'          => cpg_fetch_icon('delete', 0),
    'add'             => cpg_fetch_icon('add', 0),
    'go'              => cpg_fetch_icon('right', 0),
    'ok'              => cpg_fetch_icon('ok', 0),
);

$items_per_page = 25;

$help_array = array(
    'tab'           => '&nbsp;' . cpg_display_help('f=banning.htm&amp;as=banning_page_statistics&amp;ae=banning_page_statistics_end', '450', '300'),
    'bridge'        => '&nbsp;' . cpg_display_help('f=banning.htm&amp;as=banning_bridged&amp;ae=banning_bridged_end', '450', '300'),
    'global'        => '&nbsp;' . cpg_display_help('f=banning.htm&amp;as=banning&amp;ae=banning_end', '600', '800'),
    'ip_lookup'     => '&nbsp;' . cpg_display_help('f=banning.htm&amp;as=banning_page_lookup_ip_address&amp;ae=banning_page_lookup_ip_address_end', '450', '300'),
    'user_name'     => '&nbsp;' . cpg_display_help('f=banning.htm&amp;as=banning_page_user_name&amp;ae=banning_page_user_name_end', '450', '300'),
    'email_address' => '&nbsp;' . cpg_display_help('f=banning.htm&amp;as=banning_page_email_address&amp;ae=banning_page_email_address_end', '450', '300'),
    'ip_address'    => '&nbsp;' . cpg_display_help('f=banning.htm&amp;as=banning_page_ip_address&amp;ae=banning_page_ip_address_end', '450', '300'),
    'expiration'    => '&nbsp;' . cpg_display_help('f=banning.htm&amp;as=banning_page_expiration&amp;ae=banning_page_expiration_end', '450', '300'),
);

$sort_codes = array(
    'ban_a'       => 'ban_id ASC',
    'ban_d'       => 'ban_id DESC',
    'user_name_a' => 'user_name ASC',
    'user_name_d' => 'user_name DESC',
    'email_a'     => 'email ASC',
    'email_d'     => 'email DESC',
    'ip_a'        => 'ip_addr ASC',
    'ip_d'        => 'ip_addr DESC',
    'expiry_a'    => 'expiry ASC',
    'expiry_d'    => 'expiry DESC',
);

$sort_translation = array(
    'ban_a'       => $lang_banning_php['ban_id'].' '.$lang_banning_php['ascending'],
    'ban_d'       => $lang_banning_php['ban_id'].' '.$lang_banning_php['descending'],
    'user_name_a' => $lang_banning_php['user_name'].' '.$lang_banning_php['ascending'],
    'user_name_d' => $lang_banning_php['user_name'].' '.$lang_banning_php['descending'],
    'email_a'     => $lang_banning_php['email_address'].' '.$lang_banning_php['ascending'],
    'email_d'     => $lang_banning_php['email_address'].' '.$lang_banning_php['descending'],
    'ip_a'        => $lang_banning_php['ip_address'].' '.$lang_banning_php['ascending'],
    'ip_d'        => $lang_banning_php['ip_address'].' '.$lang_banning_php['descending'],
    'expiry_a'    => $lang_banning_php['expiry_date'].' '.$lang_banning_php['ascending'],
    'expiry_d'    => $lang_banning_php['expiry_date'].' '.$lang_banning_php['descending'],    
);

$sort        = 'ban_id ASC';
$sort_string = $sort_translation['ban_a'];

if ($superCage->get->keyExists('sort')) {
    $match = $superCage->get->getEscaped('sort'); // Doesn't hurt not to sanitize further - we're comparing against a defined array and drop the result if it doesn't match.
    if (array_key_exists($match, $sort_codes)) {
        $sort        = $sort_codes[$match];
        $sort_string = $sort_translation[$match];
    }
    unset($match);
}

$result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_BANNED']} WHERE brute_force = 0");

list($totalBanCount) = mysql_fetch_row($result);
mysql_free_result($result);

$total_pages = ceil($totalBanCount / $items_per_page);

// Processing of GET parameter "page"
if ($superCage->get->keyExists('page')) {
    if ($superCage->get->getInt('page') > 0 && $superCage->get->getInt('page') <= $total_pages) {
        $page = $superCage->get->getInt('page');
    } else {
        $page = 1;
    }
} else {
    $page = 1;
}

$limit = 'LIMIT '. (($page - 1) * $items_per_page) . ', ' . $items_per_page;

foreach ($sort_codes as $sort_header => $sort_query) {
    if ($sort_query != $sort) {
        $header_output[$sort_header] = '<a href="'.$CPG_PHP_SELF.'?page='.$page.'&amp;sort='.$sort_header.'#ban_users">';
        if (ltrim(strrchr($sort_header, '_'), '_') == 'a') {
            $header_output[$sort_header] .= '<img src="images/ascending.png" width="9" height="9" border="0" alt="" title="'. $lang_banning_php['sort_by'] . ': ' . $sort_translation[$sort_header].'" />';
        } else {
            $header_output[$sort_header] .= '<img src="images/descending.png" width="9" height="9" border="0" alt="" title="'. $lang_banning_php['sort_by'] . ': ' . $sort_translation[$sort_header].'" />';
        }
        $header_output[$sort_header] .= '</a>';
    } else {
        $header_output[$sort_header] = '<img src="images/spacer.gif" width="9" height="9" border="0" alt="" title="" />';
    }
}

$comm_id = 0;

$banning_tab_array = $template_tab_display;

$banning_tab_array['left_text'] = strtr($banning_tab_array['left_text'], array('{LEFT_TEXT}' => $lang_banning_php['records_on_page'] . ', ' . $lang_banning_php['sorted_by'] . ' ' . $sort_string . $help_array['tab']));
$banning_tab_array['page_link'] = strtr($banning_tab_array['page_link'], array('{LINK}' => 'banning.php?sort=' . $sort . '&amp;page=%d' . '#ban_users'));

$tabs = <<< EOT

<table border="0" cellspacing="0" cellpadding="0" class="maintable" width="100%">
    <tr>
EOT;

$tabs .= create_tabs($totalBanCount, $page, $total_pages, $banning_tab_array);

$tabs .= <<< EOT
    </tr>
</table>
EOT;

/**
 * create_banlist()
 *
 * @return
 **/
function create_banlist()
{
    global $CONFIG, $lang_banning_php, $lang_usermgr_php, $lang_common, $lang_date, $CPG_PHP_SELF, $icon_array, $sort, $limit, $header_output, $help_array; //$PHP_SELF,

    $result = cpg_db_query("SELECT *, UNIX_TIMESTAMP(expiry) AS expiry FROM {$CONFIG['TABLE_BANNED']} WHERE brute_force = 0 ORDER BY $sort $limit");

    $count = mysql_num_rows($result);

    echo <<< EOT
        <tr>
            <th align="center" class="tableh2">
                {$lang_banning_php['ban_id']}
                {$header_output['ban_a']}
                {$header_output['ban_d']}
            </th>
            <th align="center" class="tableh2">
                {$lang_common['delete']}
            </th>
            <th align="center" class="tableh2">
                {$lang_banning_php['user_name']}
                {$help_array['user_name']}
                {$header_output['user_name_a']}
                {$header_output['user_name_d']}
            </th>
            <th align="center" class="tableh2">
                {$lang_banning_php['email_address']}
                {$help_array['email_address']}
                {$header_output['email_a']}
                {$header_output['email_d']}
            </th>
            <th align="center" class="tableh2">
                {$lang_banning_php['ip_address']}
                {$help_array['ip_address']}
                {$header_output['ip_a']}
                {$header_output['ip_d']}
            </th>
            <th align="center" class="tableh2">
                {$lang_banning_php['expires']}
                {$help_array['expiration']}
                {$header_output['expiry_a']}
                {$header_output['expiry_d']}
            </th>
        </tr>
EOT;
    if ($count > 0) {

        $row_counter  = 0;
       
        while ( ($row = mysql_fetch_assoc($result)) ) {
            if ($row['user_id']) {
                $username     = get_username($row['user_id']);
                $view_profile = '<a href="profile.php?uid=' . $row['user_id'] . '">' . cpg_fetch_icon('my_profile', 0, $lang_usermgr_php['view_profile']) . '</a>';
            } elseif ($row['user_name']) {
                $username     = $row['user_name'];
                $view_profile = '';
            } else {
                $username     = '';
                $view_profile = '';
            }
			$row['ip_detail'] = CPGPluginAPI::filter('ip_information', $row['ip_addr']);

            $expired = '';
            if ($row['expiry']) {
                $expiry = date('Y-m-d', $row['expiry']);
                if (date('Y-m-d H:i:s', $row['expiry']) < date('Y-m-d H:i:s')) {
                    $expired = $lang_banning_php['expired'];
                }
            } else {
                $expiry = '';
            }
            echo <<< EOT
                <tr>
                    <td class="{$row_style_class}" align="center" valign="top">
                        <input type="hidden" name="ban_id[]" id="ban_id_{$row['ban_id']}" value="{$row['ban_id']}" />
                        {$row['ban_id']}
                    </td>
                    <td class="{$row_style_class}" align="right" valign="top">
                        {$expired}
                        <input type="checkbox" class="checkbox" name="select_{$row['ban_id']}" id="select_{$row['ban_id']}" value="1" />
                    </td>
                    <td class="{$row_style_class}" valign="top">
                        <input type="text" class="textinput" style="width: 100%" name="user_name_{$row['ban_id']}" id="user_name_{$row['ban_id']}" value="{$username}" />
                        {$view_profile}
                        <input type="hidden" name="user_id_{$row['ban_id']}" id="user_id_{$row['ban_id']}" value="{$row['user_id']}" />
                    </td>
                    <td class="{$row_style_class}" valign="top">
                        <input type="text" class="textinput email_field" style="width: 100%" name="email_{$row['ban_id']}" id="email_{$row['ban_id']}" value="{$row['email']}" />
                        <div id="email_{$row['ban_id']}_warning" class="cpg_message_validation formFieldWarning" style="display:none;">{$lang_banning_php['email_field_invalid']}</div>
                    </td>
                    <td class="{$row_style_class}" valign="top">
                        <input type="text" class="textinput ip_field" style="width: 80%" size="15" maxlength="15" name="ip_addr_{$row['ban_id']}" id="ip_addr_{$row['ban_id']}" value="{$row['ip_addr']}" />{$row['ip_detail']}
                        <div id="ip_addr_{$row['ban_id']}_warning" class="cpg_message_validation formFieldWarning" style="display:none;">{$lang_banning_php['ip_address_field_invalid']}</div>
                    </td>
                    <td class="{$row_style_class}" valign="top">
                        <input type="text" class="textinput date-pick" style="width:80%" size="10" maxlength="10" name="expiration_{$row['ban_id']}" id="expiration_{$row['ban_id']}" value="{$expiry}"  title="{$lang_banning_php['select_date']}" />
                        <div id="expiration_{$row['ban_id']}_warning" class="cpg_message_validation formFieldWarning" style="display:none;">{$lang_banning_php['expiry_field_invalid']}</div>
                    </td>
                </tr>
EOT;
            $row_counter++;
        }
    }
    mysql_free_result($result);
}

// Processing of form data --- start
if ($superCage->post->keyExists('submit')) {
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    $result = cpg_db_query("SELECT *, UNIX_TIMESTAMP(expiry) AS expiry FROM {$CONFIG['TABLE_BANNED']} WHERE brute_force = 0 ORDER BY $sort $limit");

    $count = mysql_num_rows($result);

    $action_output = '';

    while ($row = mysql_fetch_assoc($result)) {
        $ban_database[$row['ban_id']]['user_id']   = $row['user_id'];
        $ban_database[$row['ban_id']]['user_name'] = $row['user_name'];
        $ban_database[$row['ban_id']]['email']     = $row['email'];
        $ban_database[$row['ban_id']]['ip_addr']   = $row['ip_addr'];
        $ban_database[$row['ban_id']]['expiry']    = $row['expiry'];
    }
    mysql_free_result($result);

    $posted_ban_id_array = $superCage->post->getAlnum('ban_id');

    foreach ($posted_ban_id_array as $posted_ban_id) {

        // Sanitize the data --- start
        $post_user_name  = $superCage->post->getEscaped('user_name_'.$posted_ban_id);
        $post_temp_array = $superCage->post->getMatched('email_'.$posted_ban_id, '/^([a-zA-Z0-9]((\.|\-|\_){0,1}[a-zA-Z0-9]){0,})@([a-zA-Z]((\.|\-){0,1}[a-zA-Z0-9]){0,})\.([a-zA-Z]{2,4})$/');
        $post_email      = $post_temp_array[0];
        $post_temp_array = $superCage->post->getMatched('ip_addr_'.$posted_ban_id, '/^\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b$/');
        $post_ip         = $post_temp_array[0];
        $post_temp_array = $superCage->post->getMatched('expiration_'.$posted_ban_id, '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/');
        
        list($year, $month, $day) = explode('-', $post_temp_array[0]);

        if (checkdate($month, $day, $year)) {
            $post_date      = $post_temp_array[0];
            $post_date     .= ' 00:00:00';
            $post_timestamp = "'" . $post_date . "'";
        } else {
            unset($post_date);
            $post_timestamp = 'NULL';
        }
        unset($post_temp_array);
        // Sanitize the data --- end
        // Plausibility control - make sure that some fool doesn't ban himself --- start
        if ($post_user_name == USER_NAME) {
            // Someone tried to ban himself by username.
            $action_output .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_banning_php['error_admin_ban'] . ' ' . $lang_banning_php['skipping'] . '</li>';
            $post_user_name = ''; // Clear the record
        }
        if ($post_ip != '') { // Only perform the IP address check if an IP address has been submit --- start
            if ($post_ip == $REMOTE_ADDR || $post_ip == $superCage->server->getRaw("REMOTE_ADDR") || ($superCage->env->getRaw("REMOTE_ADDR") && $post_ip == $superCage->post->getRaw("REMOTE_ADDR"))) {
                // Someone tried to ban himself by IP address.
                $action_output .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_banning_php['error_admin_ban'] . ' ' . $lang_banning_php['skipping'] . '</li>';
                $post_ip        = ''; // Clear the record
            }
            if ($post_ip == $SERVER_ADDR || $post_ip == $superCage->server->getRaw("SERVER_ADDR") || $post_ip == $superCage->env->getRaw("SERVER_ADDR")) {
                // Someone tried to ban the server's IP address.
                $action_output .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_banning_php['error_server_ban'] . ' ' . $lang_banning_php['skipping'] . '</li>';
                $post_ip        = ''; // Clear the record
            }
        } // Only perform the IP address check if an IP address has been submit --- end
        // Plausibility control - make sure that some fool doesn't ban himself --- end
        if ($superCage->post->getInt('select_'.$posted_ban_id) == 1 || ($post_user_name == '' && $post_email == '' && $post_ip == '')) { // Delete the record --- start
            // Load the record set that we're going to delete into memory
            unset($delete_ban_record_array);
            $delete_ban_record_array = array();
            
            $result = cpg_db_query("SELECT null FROM {$CONFIG['TABLE_BANNED']} WHERE ban_id = '$posted_ban_id' LIMIT 1");
            if (mysql_num_rows($result)) {
                // Delete the actual ban record
                cpg_db_query("DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE ban_id = $posted_ban_id");
                $action_output .= '<li style="list-style-image:url(images/icons/ok.png)">' . sprintf($lang_banning_php['ban_record_x_deleted'], $posted_ban_id) . '</li>';
            }
            mysql_free_result($result);
        } // Delete the record --- end
        // Write the changes into the database --- start
        // Determine wether there has actually been a change --- start
        $change = 0;
        if ($ban_database[$posted_ban_id]['user_name'] != $post_user_name) {
            $change++;
        }
        if ($ban_database[$posted_ban_id]['email'] != $post_email) {
            $change++;
        }
        if ($ban_database[$posted_ban_id]['ip_addr'] != $post_ip) {
            $change++;
        }
        if ($ban_database[$posted_ban_id]['expiry'] != '' && $post_date != '') {
            if (date('Y-m-d H:i:s', $ban_database[$posted_ban_id]['expiry']) != $post_date) {
                $change++;
            }
        }
        if ($ban_database[$posted_ban_id]['expiry'] == '' && $post_date != '') {
            $change++;
        }
        if ($ban_database[$posted_ban_id]['expiry'] != '' && $post_date == '') {
            $change++;
        }
        if ($post_user_name == '' && $post_email == '' && $post_ip == '') {
            $change = 0; // Don't write back records that have been deleted by emptying all relevant input fields - we have taken care of them already and emptied them before.
        }
        if ($change != 0) { 
            // There has been an actual change of the database record - let's write it back --- start
            // Look up if the given user name matches a user id --- start
            $post_user_id = get_userid($post_user_name);
            if ($post_user_id == 0) {
                $post_user_id = 'NULL';
            } 
            // Look up if the given user name matches a user id --- end
            if ($post_ip == '') {// NULL the if address if empty
                $post_ip = 'NULL';
            } else {
                $post_ip = "'" . $post_ip . "'"; // Wrap the IP address into single quotes if populated
            }
            cpg_db_query("UPDATE {$CONFIG['TABLE_BANNED']} SET user_id={$post_user_id}, user_name='{$post_user_name}', email='{$post_email}', ip_addr={$post_ip}, expiry={$post_timestamp} WHERE ban_id='{$posted_ban_id}' LIMIT 1");
            $action_output .= '<li style="list-style-image:url(images/icons/ok.png)">' . sprintf($lang_banning_php['ban_record_x_updated'], $posted_ban_id) .'</li>';
            // There has been an actual change of the database record - let's write it back --- end
        }
        // Determine whether there has actually been a change --- end
        // Write the changes into the database --- end
    } // end foreach loop
    // Now let's take care of new ban records
    // Sanitize the new record data --- start
    $post_user_name  = $superCage->post->getEscaped('add_user_name');
    $post_temp_array = $superCage->post->getMatched('add_email', '/^([a-zA-Z0-9]((\.|\-|\_){0,1}[a-zA-Z0-9]){0,})@([a-zA-Z]((\.|\-){0,1}[a-zA-Z0-9]){0,})\.([a-zA-Z]{2,4})$/');
    $post_email      = $post_temp_array[0];
    $post_temp_array = $superCage->post->getMatched('add_ip', '/^\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b$/');
    $post_ip         = $post_temp_array[0];
    $post_temp_array = $superCage->post->getMatched('add_expires', '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/');

    list($year, $month, $day) = explode('-', $post_temp_array[0]);

    if (checkdate($month, $day, $year)) {
        $post_date      = $post_temp_array[0];
        $post_date     .= ' 00:00:00';
        $post_timestamp = "'" . $post_date . "'";
    } else {
        unset($post_date);
        $post_timestamp = 'NULL';
    }
    $post_delete_comment = $superCage->post->getInt('delete_comment');
    $post_comment_id     = $superCage->post->getInt('comment_id');
    unset($post_temp_array);
    // Sanitize the new record data --- end
    // Plausibility control - make sure that some fool doesn't ban himself --- start
    if ($post_user_name == USER_NAME) {
        // Someone tried to ban himself by username.
        $action_output .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_banning_php['error_admin_ban'] . ' ' . $lang_banning_php['skipping'] . '</li>';
        $post_user_name = ''; // Clear the record
    }
    if ($post_ip != '') { // Only perform the IP address check if an IP address has been submit --- start
        if ($post_ip == $REMOTE_ADDR || $post_ip == $superCage->server->getRaw("REMOTE_ADDR") || ($superCage->env->getRaw("REMOTE_ADDR") && $post_ip == $superCage->post->getRaw("REMOTE_ADDR"))) {
            // Someone tried to ban himself by IP address.
            $action_output .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_banning_php['error_admin_ban'] . ' ' . $lang_banning_php['skipping'] . '</li>';
            $post_ip        = ''; // Clear the record
        }
        if ($post_ip == $SERVER_ADDR || $post_ip == $superCage->server->getRaw("SERVER_ADDR") || $post_ip == $superCage->env->getRaw("SERVER_ADDR")) {
            // Someone tried to ban the server's IP address.
            $action_output .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_banning_php['error_server_ban'] . ' ' . $lang_banning_php['skipping'] . '</li>';
            $post_ip        = ''; // Clear the record
        }
    } // Only perform the IP address check if an IP address has been submit --- end
    // Plausibility control - make sure that some fool doesn't ban himself --- end
    // Double record control - make sure that the record doesn't already exist in the database --- start
    if ($post_user_name != '') {
        if (mysql_num_rows(cpg_db_query("SELECT user_name FROM {$CONFIG['TABLE_BANNED']} WHERE user_name = '{$post_user_name}' AND brute_force = 0 LIMIT 1"))) {
            $action_output .= '<li style="list-style-image:url(images/icons/stop.png)">' . sprintf($lang_banning_php['ban_record_x_already_exists'], $post_user_name) . ' ' . $lang_banning_php['skipping'] . '</li>';
            $post_user_name = '';
        }
    }
    if ($post_email != '') {
        if (mysql_num_rows(cpg_db_query("SELECT email FROM {$CONFIG['TABLE_BANNED']} WHERE email = '{$post_email}' AND brute_force = 0 LIMIT 1"))) {
            $action_output .= '<li style="list-style-image:url(images/icons/stop.png)">' . sprintf($lang_banning_php['ban_record_x_already_exists'], $post_email) . ' ' . $lang_banning_php['skipping'] . '</li>';
            $post_email     = '';
        }
    }
    if ($post_ip != '') {
        if (mysql_num_rows(cpg_db_query("SELECT ip_addr FROM {$CONFIG['TABLE_BANNED']} WHERE ip_addr = '{$post_ip}' AND brute_force = 0 LIMIT 1"))) {
            $action_output .= '<li style="list-style-image:url(images/icons/stop.png)">' . sprintf($lang_banning_php['ban_record_x_already_exists'], $post_ip) . ' ' . $lang_banning_php['skipping'] . '</li>';
            $post_ip        = '';
        }
    } 
    // Double record control - make sure that the record doesn't already exist in the database --- end    
    // Write the new record into the database --- start
    // Determine wether form data for a new ban has been submit --- start
    if ($post_user_name != '' || $post_email != '' || $post_ip != '') {
        // Form fields for a new database record have been submit - let's create a new record --- start
        // Look up if the given user name matches a user id --- start
        $post_user_id = get_userid($post_user_name);
        if ($post_user_id == 0) {
            $post_user_id = 'NULL';
        } 
        // Look up if the given user name matches a user id --- end
        if ($post_ip == '') {// NULL the if address if empty
            $post_ip = 'NULL';
        } else {
            $post_ip = "'" . $post_ip . "'"; // Wrap the IP address into single quotes if populated
        }
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_BANNED']} (user_id, user_name, email, ip_addr, expiry) VALUES ({$post_user_id}, '{$post_user_name}', '{$post_email}', {$post_ip}, {$post_timestamp})");
        $action_output .= '<li style="list-style-image:url(images/icons/ok.png)">' . $lang_banning_php['new_ban_record_created'] . '.</li>';
        if ($superCage->post->keyExists('delete_comment') && $superCage->post->keyExists('comment_id')) {
            $delete_what = $superCage->post->getInt('delete_comment');
            if ($delete_what == 1) { // delete the current comment only
                $comm_id = $superCage->post->getInt('comment_id');
                
                cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = $comm_id");
                $nb_com_del = mysql_affected_rows();
                
                $action_output .= '<li style="list-style-image:url(images/icons/ok.png)">' . sprintf($lang_banning_php['comment_deleted'], $nb_com_del, $post_user_name) . '.</li>';
            } elseif ($delete_what == 2) { //delete all comments by this author

                cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = $post_user_id");
                $nb_com_del = mysql_affected_rows();

                if ($nb_com_del != 0 && $post_user_name != '') {
                    $action_output .= '<li style="list-style-image:url(images/icons/ok.png)">' . sprintf($lang_banning_php['comment_deleted'], $nb_com_del, $post_user_name) . '.</li>';
                } 
            } //no need for an "else" - we don't delete a comment if else, i.e. if "none" has been selected
        }
        // Form fields for a new database record have been submit - let's create a new record --- end
    }
    // Determine wether form data for a new ban has been submit --- end
    // Write the new record into the database --- end    
}
// Processing of form data --- end

// Initialisze vars
$see_all_comments = '';
$checked_single   = 'disabled="disabled"';
$checked_all      = 'checked="checked"';
$checked_none     = '';
$new_ban_user_id  = '';

//check if there is a ban_user parameter in the URL that we have to ban
if ($superCage->get->keyExists('ban_user') && $superCage->get->getInt('ban_user') != "") {

    $new_ban_user_id = $superCage->get->getInt('ban_user');

    $sql = "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$new_ban_user_id' LIMIT 1";

    $result = cpg_db_query($sql);
    if (!mysql_num_rows($result)) {
        $comm_info['msg_author'] = '';
    } else {
        $user_data = mysql_fetch_assoc($result);
        
        $comm_info['msg_author'] = $user_data['user_name'];
        
        unset($user_data);
    }
    mysql_free_result($result);
} else {
    $comm_info = array(
        'msg_id' => 0,
        'msg_author' => '',
        'msg_ip' => '',
    );
}

//check if there is a delete_comment_id parameter in the URL that we have to ban
if ($superCage->get->keyExists('delete_comment_id') && $superCage->get->getInt('delete_comment_id') != "") {
    //get info on user
    $comm_id = $superCage->get->getInt('delete_comment_id');
    //check if there is a comment who's creator we have to ban
    $comm_info = mysql_fetch_assoc(cpg_db_query("SELECT msg_author, msg_hdr_ip, msg_raw_ip FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = $comm_id"));

    $comm_info['msg_ip'] = ($comm_info['msg_hdr_ip'] == '') ? $comm_info['msg_hdr_ip'] : $comm_info['msg_raw_ip'];

    $checked_single = 'checked="checked"';
    $checked_none   = '';
    if (!$new_ban_user_id) { // comment has been made by a guest, so there is no point in populating the username field
        $comm_info['msg_author'] = '';
        $checked_all             = 'disabled="disabled"';
        $see_all_comments        = '';
    } else { // coment has been made by a registered user
        $checked_all      = '';
        $see_all_comments = '(<a href="thumbnails.php?album=lastcomby&amp;uid=' . $new_ban_user_id . '">' . $lang_banning_php['view'] . '</a>)';
    }
}

pageheader($lang_banning_php['title'], '<link rel="stylesheet" href="css/date_picker.css" type="text/css" />');

if ($CONFIG['bridge_enable'] != 0) {
    starttable('100%', cpg_fetch_icon('warning', 2) . $lang_common['information'] . $help_array['bridge'], 1);
    print <<< EOT
    <tr>
        <td class="tableb">
            {$lang_banning_php['no_banning_when_bridged']}
        </td>
    </tr>
EOT;
    endtable();
    print '<br />';
}
print <<< EOT
<form action="{$CPG_PHP_SELF}?sort={$sort}&amp;page={$page}#ban_users" method="post" name="banlist" id="banlist" onsubmit="return checkBanFormSubmit();">
<a name="ban_users"></a>
EOT;
starttable('100%', cpg_fetch_icon('ban_user', 2) . $lang_banning_php['title'] . $help_array['global'], 6, 'cpg_zebra');
// Output the results of the queries
if (!empty($action_output)) {
    print <<< EOT
    <tr>
        <td colspan="6">
            <ul>
                {$action_output}
            </ul>
        </td>
    </tr>
EOT;
}
print <<< EOT
    <tr>
        <td colspan="6">
            {$tabs}
            <div id="form_not_submit_top" class="cpg_message_warning formFieldWarning" style="display:none;">
                {$lang_banning_php['form_not_submit']}
            </div>
        </td>
    </tr>
EOT;
create_banlist();

echo <<<EOT
    <tr>
        <td class="tablef" valign="top" align="right" rowspan="2" colspan="2">
            {$lang_banning_php['add_new']}:
        </td>
        <td class="tablef" valign="top">
            <input type="text" class="textinput" style="width: 100%" name="add_user_name" id="add_user_name" value="{$comm_info['msg_author']}" title="{$lang_banning_php['user_name']}" />
        </td>
        <td class="tablef" valign="top">
            <input type="text" class="textinput email_field" style="width: 100%" name="add_email" id="add_email" value="" title="{$lang_banning_php['email_address']}" />
            <div id="add_email_warning" class="cpg_message_validation formFieldWarning" style="display:none;">{$lang_banning_php['email_field_invalid']}</div>
        </td>
        <td class="tablef" valign="top">
            <input type="text" class="textinput ip_field" style="width: 100%" name="add_ip" id="add_ip" value="{$comm_info['msg_ip']}" size="15" maxlength="15" title="{$lang_banning_php['ip_address']}" />
            <div id="add_ip_warning" class="cpg_message_validation formFieldWarning" style="display:none;">{$lang_banning_php['ip_address_field_invalid']}</div>
        </td>
        <td class="tablef" valign="top">
            <input type="text" class="textinput date-pick"  style="width: 80%" name="add_expires" id="add_expires" value="" size="10" maxlength="10" title="{$lang_banning_php['select_date']}" />
            <div id="add_expires_warning" class="cpg_message_validation formFieldWarning" style="display:none;">{$lang_banning_php['expiry_field_invalid']}</div>
        </td>
    </tr>
    <tr>
        <td class="tablef" valign="middle" colspan="4">
            {$lang_banning_php['delete_comments']}: 
            <input type="radio" id="single" name="delete_comment" value="1" {$checked_single} /><label for="single" class="clickable_option">{$lang_banning_php['current']}</label>&nbsp;&nbsp;
            <input type="radio" id="all" name="delete_comment" value="2" {$checked_all} /><label for="all" class="clickable_option">{$lang_banning_php['all']}</label> {$see_all_comments}&nbsp;&nbsp;
            <input type="radio" id="none" name="delete_comment" value="0" {$checked_none} /><label for="none" class="clickable_option">{$lang_banning_php['none']}</label>
            <input type="hidden" name="comment_id" value="{$comm_id}"/>
        </td>    
    </tr>
    <tr>
        <td class="tablef" align="center" valign="middle" colspan="6">
            <button type="submit" class="button" name="submit" id="submit" value="{$lang_common['ok']}">{$icon_array['ok']}{$lang_common['ok']}</button>
            <div id="form_not_submit_bottom" class="cpg_message_warning formFieldWarning" style="display:none;">
                {$lang_banning_php['form_not_submit']}
            </div>
        </td>
    </tr>
EOT;
print <<< EOT
    <tr>
        <td colspan="6">
            {$tabs}
        </td>
    </tr>
EOT;
endtable();
list($timestamp, $form_token) = getFormToken();
print '<input type="hidden" name="form_token" value="' . $form_token . '" />';
print '<input type="hidden" name="timestamp" value="' . $timestamp . '" />';
print <<< EOT
</form>
<br />
<form action="http://ws.arin.net/whois/" method="get" name="lookup" id="cpgform2" target="_blank">
EOT;

starttable('-2','','','');
print <<< EOT
    <tr>
        <td class="tableh2">
            <strong>{$lang_banning_php['lookup_ip']}</strong>{$help_array['ip_lookup']}
        </td>
        <td class="tableb">
            <input type="text" class="textinput" size="20" name="queryinput" value="{$comm_info['msg_ip']}" maxlength="15" />
        </td>
        <td class="tableb">
            <button type="submit" class="button" name="submit" id="submit_lookup" value="{$lang_common['ok']}" style="display:block">{$icon_array['go']}{$lang_common['ok']}</button>
        </td>
    </tr>
EOT;
endtable();
print '</form>' . $LINEBREAK;

pagefooter();

?>