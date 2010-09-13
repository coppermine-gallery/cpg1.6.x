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

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

if (isset($bridge_lookup)) {
    return;
}

class core_udb {

    function connect($id = '')
    {
        global $CONFIG;

        // Define whether we can join tables or not in SQL queries (same host & same db or user)
        $this->can_join_tables = ($this->db['host'] == $CONFIG['dbserver'] && ($this->db['name'] == $CONFIG['dbname'] || $this->db['user'] == $CONFIG['dbuser']));

        if ($id){
            $this->link_id = $id;
        } else {
            // Connect to udb database if necessary
            if (!$this->can_join_tables) {
                $this->link_id = mysql_connect($this->db['host'], $this->db['user'], $this->db['password']);
                if (!$this->link_id) {
                    die("<strong>Coppermine critical error</strong>:<br />Unable to connect to UDB database !<br /><br />MySQL said: <strong>" . mysql_error() . "</strong>");
                }
                mysql_select_db ($this->db['name'], $this->link_id);
            } else {
                $this->link_id = 0;
            }
        }
    }
    // end function connect

    function authenticate()
    {
        global $USER_DATA;

        if (!($auth = $this->session_extraction()) && !($auth = $this->cookie_extraction()) && !($auth = $this->post_extraction())) {
            $this->load_guest_data();
        } else {
            list ($id, $cookie_pass) = $auth;
            $f = $this->field;

            if (isset($this->usergroupstable)){
                $sql = "SELECT u.{$f['user_id']} AS id, u.{$f['username']} AS username, {$f['password']} AS password, ug.{$f['usertbl_group_id']} AS group_id "
                        . "FROM {$this->usertable} AS u, {$this->usergroupstable} AS ug "
                        . "WHERE u.{$f['user_id']}=ug.{$f['user_id']} AND u.{$f['user_id']}='$id'";
            } else {
                $sql = "SELECT u.{$f['user_id']} AS id, u.{$f['username']} AS username, {$f['password']} AS password, u.{$f['usertbl_group_id']} AS group_id "
                        . "FROM {$this->usertable} AS u LEFT JOIN {$this->groupstable} AS g ON u.{$f['usertbl_group_id']}=g.{$f['grouptbl_group_id']} "
                        . "WHERE u.{$f['user_id']}='$id'";
            }

            $result = cpg_db_query($sql, $this->link_id);

            if (mysql_num_rows($result)){
                $row = mysql_fetch_assoc($result);
                mysql_free_result($result);

                $db_pass = $this->udb_hash_db($row['password']);
                if ($db_pass === $cookie_pass) {
                    $this->load_user_data($row);
                } else {
                    $this->load_guest_data();
                }
            } else {
                $this->load_guest_data();
            }
        }

        $user_group_set = '(' . implode(',', $USER_DATA['groups']) . ')';

        $USER_DATA = array_merge($USER_DATA, $this->get_user_data($USER_DATA['groups'][0], $USER_DATA['groups'], $this->guestgroup));

        if ($this->use_post_based_groups){
            $USER_DATA['has_admin_access'] = (in_array($USER_DATA['groups'][0] - 100,$this->admingroups)) ? 1 : 0;
        } else {
            $USER_DATA['has_admin_access'] = ($USER_DATA['groups'][0] == 1) ? 1 : 0;
        }

        $USER_DATA['can_see_all_albums'] = $USER_DATA['has_admin_access'];

        // avoids a template error
        if (!$USER_DATA['user_id']) { 
            $USER_DATA['can_create_albums'] = 0;
        }

        // For error checking
        $CONFIG['TABLE_USERS'] = '**ERROR**';

        define('USER_ID', $USER_DATA['user_id']);
        define('USER_NAME', addslashes($USER_DATA['user_name']));
        define('USER_GROUP', $USER_DATA['group_name']);
        define('USER_GROUP_SET', $user_group_set);
        define('USER_IS_ADMIN', $USER_DATA['has_admin_access']);
        define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
        define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
        define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
        define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
        define('USER_CAN_CREATE_ALBUMS', ((int)$USER_DATA['can_create_albums'] || (int)$USER_DATA['can_create_public_albums']));
        define('USER_CAN_CREATE_PRIVATE_ALBUMS', (int)$USER_DATA['can_create_albums']);
        define('USER_CAN_CREATE_PUBLIC_ALBUMS', (int)$USER_DATA['can_create_public_albums']);
        define('USER_ACCESS_LEVEL', (int)$USER_DATA['access_level']);

        $this->session_update();
    }
    // end function authenticate

    function load_guest_data()
    {
        global $USER_DATA, $CONFIG;

        $USER_DATA['user_id'] = 0;
        $USER_DATA['user_name'] = 'Guest';
        $USER_DATA['groups'][0] = $this->use_post_based_groups ? ($this->guestgroup + 100) : 3;
        $USER_DATA['group_quota'] = 1;
        $USER_DATA['can_rate_pictures'] = 0;
        $USER_DATA['can_send_ecards'] = 0;
        $USER_DATA['can_post_comments'] = 0;
        $USER_DATA['can_upload_pictures'] = 0;
        $USER_DATA['can_create_albums'] = 0;
        $USER_DATA['pub_upl_need_approval'] = 1;
        $USER_DATA['priv_upl_need_approval'] = 1;
        $USER_DATA['access_level'] = $CONFIG['allow_unlogged_access'];
    }
    // end function load_guest_data

    function load_user_data($row)
    {
        global $USER_DATA;

        $USER_DATA['user_id'] = $row['id'];
        $USER_DATA['user_name'] = $row['username'];

        //changed to "row['group_id']" $group_id = $row[($this->usergroupstable)?$this->field['usertbl_group_id']:$this->field['grouptbl_group_id']];

        if  ($this->multigroups){
            $USER_DATA['groups'] = $this->get_groups($row);
        } else {
            if ($this->use_post_based_groups){
                $USER_DATA['groups'] = array(0 => $row['group_id']);
            } else {
                $USER_DATA['groups'] = array(0 => (in_array($row['group_id'], $this->admingroups)) ? 1 : 2);
            }
        }
    }
    // end function load_user_data

    /*
     * Prototype function needed for Mambo *maybe others*
     * Keeps the session alive
     */
    function session_update() {}

    function get_user_count()
    {
        global $CONFIG;
        static $user_count = 0;

        if (!$user_count) {
            $result = cpg_db_query("SELECT count(*) FROM {$this->usertable} WHERE 1", $this->link_id);
            $nbEnr = mysql_fetch_array($result);
            $user_count = $nbEnr[0];
            mysql_free_result($result);
        }

        return $user_count;
    }
    // end function get_user_count

    function get_users($options = array())
    {
        global $CONFIG;

        // Copy UDB fields and config variables (just to make it easier to read)
        $f =& $this->field;
        $C =& $CONFIG;

        // Sort codes
        $sort_codes = array('name_a' => 'user_name ASC',
                            'name_d' => 'user_name DESC',
                            'group_a' => 'group_name ASC',
                            'group_d' => 'group_name DESC',
                            'reg_a' => 'user_regdate ASC',
                            'reg_d' => 'user_regdate DESC',
                            'pic_a' => 'pic_count ASC',
                            'pic_d' => 'pic_count DESC',
                            'disku_a' => 'disk_usage ASC',
                            'disku_d' => 'disk_usage DESC',
                            'lv_a' => 'user_lastvisit ASC',
                            'lv_d' => 'user_lastvisit DESC',
                           );

        // Fix the group id, if bridging is enabled
        if ($CONFIG['bridge_enable']) {
            $f['usertbl_group_id'] .= '+100';
        }

        // Build WHERE clause, if this is a username search
        if ($options['search']) {
            $options['search'] = 'WHERE u.'.$f['username'].' LIKE "%'.$options['search'].'%" ';
        }

        // Build SQL table, should work with all bridges
        $sql = "SELECT {$f['user_id']} AS user_id, {$f['username']} AS user_name, {$f['email']} AS user_email, {$f['regdate']} AS user_regdate, {$f['lastvisit']} AS user_lastvisit, {$f['active']} AS user_active, "
               . "COUNT(pid) AS pic_count, ROUND(SUM(total_filesize)/1024) AS disk_usage, group_name, group_quota "
               . "FROM {$this->usertable} AS u "
               . "INNER JOIN {$C['TABLE_USERGROUPS']} AS g ON u.{$f['usertbl_group_id']} = g.group_id "
               . "LEFT JOIN {$C['TABLE_PICTURES']} AS p ON p.owner_id = u.{$f['user_id']} "
               . $options['search']
               . "GROUP BY user_id " . "ORDER BY " . $sort_codes[$options['sort']] . " "
               . "LIMIT {$options['lower_limit']}, {$options['users_per_page']};";

        $result = cpg_db_query($sql, $this->link_id);

        // If no records, return empty value
        if (!$result) {
            return array();
        }

        // Extract user list to an array
        while ($user = mysql_fetch_assoc($result)) {
            $userlist[] = $user;
        }

        return $userlist;
    }
    // end function get_users

    function get_groups($row) {}

    // Retrieve the name of a user
    function get_user_name($uid)
    {
        static $cache = array();
        
        if (!isset($cache[$uid])) {
        
            $sql = "SELECT {$this->field['username']} as user_name FROM {$this->usertable} WHERE {$this->field['user_id']} = '$uid'";
            $result = cpg_db_query($sql, $this->link_id);

            if (mysql_num_rows($result)) {
                $row = mysql_fetch_assoc($result);
                mysql_free_result($result);
                $cache[$uid] = $row['user_name'];
            } else {
                $cache[$uid] = '';
            }           
        }

        return $cache[$uid];
    }
    // end function get_user_name

    // Retrieve the id of a user
    function get_user_id($username)
    {
        $username = addslashes($username);
        $sql = "SELECT {$this->field['user_id']} AS user_id FROM {$this->usertable} WHERE {$this->field['username']}  = '$username'";
        $result = cpg_db_query($sql, $this->link_id);

        if (mysql_num_rows($result)) {
            $row = mysql_fetch_array($result);
            mysql_free_result($result);
            return $row['user_id'];
        } else {
            return '';
        }
    }
    // end function get_user_id

    // Perform database queries to calculate user's privileges based on group membership
    function get_user_data($pri_group, $groups, $default_group_id = 3)
    {

        //Parameters :
        //                $pri_group (scalar) :         Group ID number of the user's 'main' group. This is the group that will be
        //                                                                                        the user's profile display. ($USER_DATA['group_id'])
        //
        //                $groups (array) :                        List of group ids of all the groups that the user is a member of. IF this list
        //                                                                                        does not include the $pri_group, it will be added.
        //
        //                $default_group_id (scalar) :         The group used as a fall-back if no valid group ids are specified.
        //                                                                                                        If this group also does not exist then CPG will abort with a critical
        //                                                                                                        error.
        //
        // Returns an array containing most of the data to put into in $USER_DATA.

        global $CONFIG;

        foreach ($groups as $key => $val) {
            if (!is_numeric($val)) {
                unset ($groups[$key]);
            }
        }
        if (!in_array($pri_group, $groups)) {
            array_push($groups, $pri_group);
        }

        $result = cpg_db_query("SELECT MAX(group_quota) AS disk_max, MIN(group_quota) AS disk_min, "
                        . "MAX(can_rate_pictures) AS can_rate_pictures, MAX(can_send_ecards) AS can_send_ecards, "
                        . "MAX(can_post_comments) AS can_post_comments, MAX(can_upload_pictures) AS can_upload_pictures, " 
                        . "MAX(can_create_albums) AS can_create_albums, " 
                        . "MAX(has_admin_access) AS has_admin_access, "
                        . "MAX(access_level) AS access_level, "
                        . "MIN(pub_upl_need_approval) AS pub_upl_need_approval, MIN( priv_upl_need_approval) AS  priv_upl_need_approval "
                        . "FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id in (" .  implode(",", $groups). ")");

        if (mysql_num_rows($result)) {
            $USER_DATA = mysql_fetch_assoc($result);
            $result = cpg_db_query("SELECT group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id= " . $pri_group);
            $temp_arr = mysql_fetch_assoc($result);
            $USER_DATA["group_name"] = $temp_arr["group_name"];
        } else {
            $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = $default_group_id");
            if (!mysql_num_rows($result)) {
                $this->synchronize_groups();
                die('<strong>Coppermine critical error</strong>:<br />The group table does not contain the Anonymous group !');
            }
            $USER_DATA = mysql_fetch_assoc($result);
        }
        mysql_free_result($result);

        $result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_CATMAP']} WHERE group_id in (" .  implode(",", $groups). ")");
        if (mysql_result($result, 0) > 0) {
            $USER_DATA['can_create_public_albums'] = 1;
        } else {
            $USER_DATA['can_create_public_albums'] = 0;
        }
        mysql_free_result($result);

        $USER_DATA["group_quota"] = ($USER_DATA["disk_min"])?$USER_DATA["disk_max"]:0;
        $USER_DATA['can_see_all_albums'] = $USER_DATA['has_admin_access'];
        $USER_DATA["group_id"] = $pri_group;
        $USER_DATA['groups'] = $groups;
        if (get_magic_quotes_gpc() == 0) {
            $USER_DATA['group_name'] = mysql_escape_string($USER_DATA['group_name']);
        }
        return($USER_DATA);
    }
    // end function get_user_data

    // Redirect
    function redirect($target)
    {
        header('Location: '. $this->boardurl . $target);
        exit;
    }
    // end function redirect

    // Register
    function register_page()
    {
        $this->redirect($this->page['register']);
    }
    // end function register_page

    // View users
    function view_users()
    {
        $this->redirect($this->page['editusers']);
    }
    // end function view_users

    // Edit users
    function edit_users()
    {
        $this->redirect($this->page['editusers']);
    }
    // end function edit_users

    // View user profile
    function view_profile($uid)
    {
        $this->redirect($this->page['edituserprofile'].($uid ? $uid : USER_ID));
    }
    // end function view_profile

    // Edit user profile
    function edit_profile($uid)
    {
        $this->redirect($this->page['edituserprofile'].$uid);
    }
    // end function edit_profile

    // Get user information
    function get_user_infos($uid)
    {
        global $lang_register_php;

        $sql = "SELECT *, {$this->field['username']} AS user_name, "
                . "{$this->field['email']} AS user_email, "
                . "{$this->field['regdate']} AS user_regdate, "
                . "{$this->field['location']} AS user_location, "
                . "{$this->field['website']} AS user_website "
            . "FROM  {$this->usertable} WHERE {$this->field['user_id']} = '$uid'";
        $result = cpg_db_query($sql, $this->link_id);
        if (!mysql_num_rows($result)) {
            cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);
        }
        $user_data = mysql_fetch_array($result);
        if (!isset($user_data['group_name'])) {
            $user_data['group_name'] = '';
        }
        if (!isset($user_data['user_profile1'])) {
            $user_data['user_profile1'] = '';
        }
        if (!isset($user_data['user_profile2'])) {
            $user_data['user_profile2'] = '';
        }
        if (!isset($user_data['user_profile3'])) {
            $user_data['user_profile3'] = '';
        }
        if (!isset($user_data['user_profile4'])) {
            $user_data['user_profile4'] = '';
        }
        if (!isset($user_data['user_profile5'])) {
            $user_data['user_profile5'] = '';
        }
        if (!isset($user_data['user_profile6'])) {
            $user_data['user_profile6'] = '';
        }
        mysql_free_result($result);

        return $user_data;
    }
    // end function get_user_infos

    // Query used to list users
    function list_users_query(&$user_count)
    {
        global $CONFIG, $FORBIDDEN_SET, $PAGE, $cpg_show_private_album;

        $f =& $this->field;

        if (!$cpg_show_private_album && $FORBIDDEN_SET != "") {
            // $forbidden_with_icon = "$FORBIDDEN_SET or p.galleryicon=p.pid";
            $forbidden_with_icon = "$FORBIDDEN_SET";
            $forbidden = "$FORBIDDEN_SET";
        } else {
            $forbidden_with_icon = '';
            $forbidden = '';
        }

        // Get the total number of users with albums
        $sql  = "SELECT NULL "
                . "FROM {$CONFIG['TABLE_ALBUMS']} AS p "
                . " INNER JOIN {$CONFIG['TABLE_PICTURES']} AS pics ON pics.aid = p.aid "
                . "WHERE ( category > " . FIRST_USER_CAT . " $forbidden) "
                . "GROUP BY category;";
        $result = cpg_db_query($sql);
        $user_count = mysql_num_rows($result);

        if ($user_count == 0) {
            return false;
        }

        mysql_free_result($result);

        $users_per_page = $CONFIG['thumbcols'] * $CONFIG['thumbrows'];
        $totalPages = ceil($user_count / $users_per_page);
        if ($PAGE > $totalPages) $PAGE = 1;
        $lower_limit = ($PAGE-1) * $users_per_page;

        if ($this->can_join_tables) {
            $sql  = "SELECT {$f['user_id']} AS user_id,"
                        . "{$f['username']} AS user_name,"
                        . "COUNT(DISTINCT a.aid) AS alb_count,"
                        . "COUNT(DISTINCT pid) AS pic_count,"
                        . "MAX(pid) AS thumb_pid, "
                        . "MAX(galleryicon) AS gallery_pid "
                    . "FROM {$CONFIG['TABLE_ALBUMS']} AS a "
                        . "INNER JOIN {$this->usertable} AS u ON u.{$f['user_id']} = a.category - " . FIRST_USER_CAT . " "
                        . "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid "
                    . "WHERE ((isnull(approved) or approved='YES') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY user_id "
                    . "ORDER BY category "
                    . "LIMIT $lower_limit, $users_per_page ";
            $result = cpg_db_query($sql);
            while ($row = mysql_fetch_array($result)) {
                $users[] = $row;
            }
            mysql_free_result($result);

        } else {
            // This is the way we collect the data without a direct join to the forum's user table
            // This query determines which users we need to collect usernames of - ie just those which have albums with pics
            // and are on the page we are looking at
            $sql  = "SELECT category - 10000 AS user_id "
                    . "FROM {$CONFIG['TABLE_ALBUMS']} AS a "
                        . "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid "
                    . "WHERE ((ISNULL(approved) OR approved='YES') "
                        . "AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon "
                    . "GROUP BY category "
                    . "LIMIT $lower_limit, $users_per_page ";
            $result = cpg_db_query($sql);
            $user_ids = array();
            while ($row = mysql_fetch_array($result)) {
                $user_ids[] = $row['user_id'];
            }
            mysql_free_result($result);

            $userlist = implode(',', $user_ids);

            // This query collects an array of user_id -> username mappings for the user ids collected above
            $result = cpg_db_query("SELECT {$this->field['user_id']} AS user_id, {$this->field['username']} AS user_name "
                        . "FROM {$this->usertable} WHERE {$this->field['user_id']} IN ($userlist)", $this->link_id);

            $userdata = array();
            while ($row = mysql_fetch_array($result)) {
                $userdata[$row['user_id']] = $row['user_name'];
            }
            mysql_free_result($result);

            // This is the main query, similar to the one in the join implementation above but without the join to the user table
            // We use the pic's owner_id field as the user_id instead of using category - 10000 as the user_id
            $sql  = "SELECT owner_id AS user_id,"
                        . "COUNT(DISTINCT a.aid) AS alb_count,"
                        . "COUNT(DISTINCT pid) AS pic_count,"
                        . "MAX(pid) AS thumb_pid, "
                        . "MAX(galleryicon) AS gallery_pid "
                    . "FROM {$CONFIG['TABLE_ALBUMS']} AS a "
                        . "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid "
                    . "WHERE ((ISNULL(approved) OR approved='YES') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon "
                    . "GROUP BY user_id "
                    . "ORDER BY category "
                    . "LIMIT $lower_limit, $users_per_page ";
            $result = cpg_db_query($sql);

            // Here we associate the username with the album details.
            while ($row = mysql_fetch_array($result)) {
                $users[] = array_merge($row, array('user_name' => $userdata[$row['user_id']]));
            }
            mysql_free_result($result);
        }
        return $users;
    }
    // end function list_users_query


    // Group table synchronization
    function synchronize_groups()
    {
        global $CONFIG ;

        if ($this->use_post_based_groups){
            if ($this->group_overrride){
                $udb_groups = $this->collect_groups();
            } else {
                $sql = "SELECT * FROM {$this->groupstable} WHERE {$this->field['grouptbl_group_name']} <> ''";
                $result = cpg_db_query($sql, $this->link_id);

                $udb_groups = array();
                while ($row = mysql_fetch_assoc($result)) {
                    $udb_groups[$row[$this->field['grouptbl_group_id']]+100] = $row[$this->field['grouptbl_group_name']];
                }
            }
        } else {
            $udb_groups = array(1 =>'Administrators', 2=> 'Registered', 3=>'Guests');
        }

        $result = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
        while ($row = mysql_fetch_array($result)) {
            $cpg_groups[$row['group_id']] = $row['group_name'];
        }
        mysql_free_result($result);

        // Scan Coppermine groups that need to be deleted
        foreach($cpg_groups as $c_group_id => $c_group_name) {
            if ((!isset($udb_groups[$c_group_id]))) {
                cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . $c_group_id . "' LIMIT 1");
                unset($cpg_groups[$c_group_id]);
            }
        }

        // Scan udb groups that need to be created inside Coppermine table
        foreach($udb_groups as $i_group_id => $i_group_name) {
            if ((!isset($cpg_groups[$i_group_id]))) {
                // add admin info
                $admin_access = in_array($i_group_id-100, $this->admingroups) ? '1' : '0';
                cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) "
                    . "VALUES ('$i_group_id', '" . addslashes($i_group_name) . "', '$admin_access')");
                $cpg_groups[$i_group_id] = $i_group_name;
            }
        }

        // Update Group names
        foreach($udb_groups as $i_group_id => $i_group_name) {
            if ($cpg_groups[$i_group_id] != $i_group_name) {
                cpg_db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '" . addslashes($i_group_name)
                    . "' WHERE group_id = '$i_group_id' LIMIT 1");
            }
        }
        // fix admin group
        if (!$this->use_post_based_groups) {
            cpg_db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1' LIMIT 1");
        }

    }
    // end function synchronize_groups

    // Retrieve the album list used in gallery admin mode
    function get_admin_album_list()
    {
        global $CONFIG;

        if ($this->can_join_tables) {
            $sql = "SELECT aid, CONCAT('(', {$this->field['username']}, ') ', a.title) AS title "
                . "FROM {$CONFIG['TABLE_ALBUMS']} AS a "
                    . "INNER JOIN {$this->usertable} AS u "
                        . "ON category = (" . FIRST_USER_CAT . " + {$this->field['user_id']}) "
                . "ORDER BY title";
        } else {
            $sql = "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', title), CONCAT(' ', title)) AS title "
                . "FROM {$CONFIG['TABLE_ALBUMS']} "
                . "ORDER BY title";
        }
        return $sql;
    }
    // end function get_admin_album_list

    function util_filloptions()
    {
        global $lang_util_php, $CONFIG;

        echo '&nbsp;&nbsp;&nbsp;&nbsp;<select size="1" name="albumid" class="listbox"><option value="0">'
            . $lang_util_php['all_albums'] . '</option>';

        echo album_selection_options();

        echo '</select> (3)';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '<button type="submit" class="button" name="submit" id="submit" value="' . $lang_util_php['submit_form'] . '">'
            . $lang_util_php['submit_form'] . ' ' . cpg_fetch_icon('ok', 2) . '</button> (4)';
    }
    // end function util_filloptions

    // Taken from Mambo (com_registration.php)
    function make_password()
    {
        $makepass="";
        $salt = "abchefghjkmnpqrstuvwxyz0123456789";
        srand((double)microtime()*1000000);
        $i = 0;
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($salt, $num, 1);
            $makepass = $makepass . $tmp;
            $i++;
        }
        return ($makepass);
    }
    // end function make_password


    function session_extraction() {
        return false;
    }
    // end function session_extraction

    function cookie_extraction() {
        return false;
    }
    // end function cookie_extraction

    /**
     * Function to extract auth info from POST
     * This is a special case used only on upload page (swfupload)
     * @return mixed Array with id and pass hash or false
     */
    function post_extraction() 
    {
        // Get the super cage instance
        $superCage = Inspekt::makeSuperCage();
        // We will extract the auth info from post only on upload page.
        if (defined('UPLOAD_PHP') && ($superCage->post->keyExists('process') || $superCage->post->keyExists('plugin_process'))) {
            // Get the user id and password hash from post
            $user = unserialize(base64_decode($superCage->post->getRaw('user')));
            if (is_array($user)) {
                return array((int)$user['user_id'], $user['pass_hash']);
            }
        }
        return false;
    }
    // end function post_extraction

    // Simple login by specified username and pass.
    // Used for xp publisher login
    // Needs override for any BBS that is more complex than straight md5(password)
    function login( $username = null, $password = null, $remember = false ) 
    {

        $encpassword = md5($password);

        // Check for user in users table
        $sql =  "SELECT {$this->field['user_id']} AS user_id, {$this->field['username']} AS user_name "
            . "FROM {$this->usertable} "
            . "WHERE {$this->field['username']} = '$username' AND BINARY {$this->field['password']} = '$encpassword'";
        $results = cpg_db_query($sql);
        if (mysql_num_rows($results)) {
            $USER_DATA = mysql_fetch_assoc($results);
            mysql_free_result($results);
            return $USER_DATA;
        } else {
            return false;
        }
    }
    // end function login

    function adv_sort($a, $b)
    {
        if ($this->sortdir == 'ASC') {
            return strcmp($a[$this->sortfield], $b[$this->sortfield]);
        } else {
            return strcmp($b[$this->sortfield], $a[$this->sortfield]);
        }
    }
    // end function adv_sort

    function get_user_pass($user_id) 
    {
        $sql =  "SELECT {$this->field['user_id']} AS user_id, {$this->field['password']} AS pass_hash "
            . "FROM {$this->usertable} "
            . "WHERE {$this->field['user_id']} = '$user_id'";
        $result = cpg_db_query($sql, $this->link_id);
        if (mysql_num_rows($result)) {
            $row = cpg_db_fetch_row($result);
            return array('user_id' => $row['user_id'], 'pass_hash' => $row['pass_hash']);
        } else {
            return array();
        }
    }
    // end function get_user_pass
}
// end class core_udb
?>
