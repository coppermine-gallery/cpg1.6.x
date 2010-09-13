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

if (isset($bridge_lookup)) {
    $default_bridge_data[$bridge_lookup] = array(
        'full_name' => 'Xoops 2.0',
        'short_name' => 'xoops',
        'support_url' => 'http://www.xoops.org/',
        'full_forum_url_default' => 'http://www.yoursite.com/board',
        'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
        'relative_path_to_config_file_default' => '../board/',
        'relative_path_to_config_file_used' => 'lookfor,mainfile.php',
        'use_post_based_groups_default' => '0',
        'use_post_based_groups_used' => 'radio,1,0',
    );
} else {

    // Switch that allows overriding the bridge manager with hard-coded values
    define('USE_BRIDGEMGR', 1);

    require_once 'bridge/udb_base.inc.php';

    if (!USE_BRIDGEMGR) {
        require_once('../xoops/mainfile.php');
    } else {
        require_once($BRIDGE['relative_path_to_config_file'] . 'mainfile.php');
    }

    //print_r($_SESSION);
    //print_r($xoopsDB);

    // reset to cpg db
    mysql_select_db($CONFIG['dbname']);

    class cpg_udb extends core_udb {

        function cpg_udb()
        {
            global $BRIDGE, $xoopsDB;

            $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
            
            $this->boardurl =  XOOPS_URL;
            $this->multigroups = 1;
            $this->group_overrride = 0;

            // Board table names
            $this->table = array(
                'users' => 'users',
                'groups' => 'groups',
                'usergroups' => 'groups_users_link'
            );

            // Database connection settings
            $this->db = array(
                'name' => XOOPS_DB_NAME,
                'prefix' =>XOOPS_DB_PREFIX . '_',
                'host' =>XOOPS_DB_HOST,
                'user' => XOOPS_DB_USER
            );
            
            // Derived full table names
            $this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
            $this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
            $this->usergroupstable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['usergroups'];
            
            // Table field names
            $this->field = array(
                'username' => 'uname', // name of 'username' field in users table
                'user_id' => 'uid', // name of 'id' field in users table
                'password' => 'pass', // name of the password field in the users table
                'email' => 'email', // name of 'email' field in users table
                'regdate' => 'user_regdate', // name of 'registered' field in users table
                'lastvisit' => 'last_login', // last time user logged in
                'active' => "''", // is user account active?
                'location' => "''", // name of 'location' field in users table
                'website' => 'url', // name of 'website' field in users table
                'usertbl_group_id' => 'uid', // name of 'group id' field in users table
                'grouptbl_group_id' => 'groupid', // name of 'group id' field in groups table
                'grouptbl_group_name' => 'name' // name of 'group name' field in groups table
            );
            
            // Pages to redirect to
            $this->page = array(
                'register' => '/register.php',
                'editusers' => '/index.php?action=mlist',
                'edituserprofile' => '/userinfo.php?uid='
            );
            
            // Group ids - admin and guest only.
            $this->admingroups = array(XOOPS_GROUP_ADMIN);
            $this->guestgroup = XOOPS_GROUP_ANONYMOUS;
            
            // Connect to db - or supply a connection id to be used instead of making own connection.
            $this->connect($xoopsDB->conn);
        }
        
        function get_groups($row)
        {
            if ($this->use_post_based_groups){
               //$groups = $_SESSION['xoopsUserGroups'];
                //foreach ($groups as $a => &$b) $b += 100;
                $groups = array();
                foreach ($_SESSION['xoopsUserGroups'] as $a => $b) $groups[$a] = $b + 100;
                return $groups;
            }
            return array($_SESSION['xoopsUserGroups'][0]);
        }
        
        // definition of how to extract id, name, group from a session cookie
        function session_extraction()
        {
            return array($_SESSION['xoopsUserId'], 'fudge');
        }
        
        // definition of how to extract an id and password hash from a cookie
        function cookie_extraction()
        {
            return false; //unused
        }
        
        // definition of actions required to convert a password from user database form to cookie form
        function udb_hash_db($password)
        {
            return 'fudge';
        }
        
        function login_page()
        {
            global $CONFIG;
            
            $parts = parse_url($CONFIG['site_url']);
            $path = $parts['path'];
            $this->redirect("/user.php?xoops_redirect=$path");
        }

        function logout_page()
        {
            global $CONFIG;
            
            $parts = parse_url($CONFIG['site_url']);
            $path = $parts['path'];
            $this->redirect("/user.php?op=logout&xoops_redirect=$path");
        }
        
        function view_users()
        {

        }
        
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
                $options['search'] = 'WHERE u.'.$f['username'].' LIKE "'.$options['search'].'" ';
            }

            // Build SQL table, should work with all bridges
            $sql = "SELECT u.{$f['user_id']} as user_id, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, {$f['lastvisit']} as user_lastvisit, '' as user_active, ".
                   "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_name, group_quota ".
                   "FROM {$this->usertable} AS u ".
                   "INNER JOIN {$this->usergroupstable} AS ug ON u.uid = ug.uid ".   
                   " INNER JOIN {$C['TABLE_USERGROUPS']} AS g ".
                   "ON  g.group_id = ug.{$f['grouptbl_group_id']} LEFT JOIN {$C['TABLE_PICTURES']} AS p ON p.owner_id = u.{$f['user_id']} ".
                   $options['search'].
                   "GROUP BY user_id " . "ORDER BY " . $sort_codes[$options['sort']] . " ".
                   "LIMIT {$options['lower_limit']}, {$options['users_per_page']};";

            $result = cpg_db_query($sql);
            
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


    }


    // and go !
    $cpg_udb = new cpg_udb;
}
?>