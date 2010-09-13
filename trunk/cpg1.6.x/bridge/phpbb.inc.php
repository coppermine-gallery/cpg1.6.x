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
    $default_bridge_data[$bridge_lookup] = array(
        'full_name' => 'phpBB versions prior to 2.0.18',
        'short_name' => 'phpbb20',
        'support_url' => 'http://www.phpbb.com/',
        'full_forum_url_default' => 'http://www.yoursite.com/board',
        'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
        'relative_path_to_config_file_default' => '../board/',
        'relative_path_to_config_file_used' => 'lookfor,config.php',
        'use_post_based_groups_default' => '0',
        'use_post_based_groups_used' => 'radio,1,0',
        'cookie_prefix_default' => 'phpbb2mysql',
        'cookie_prefix_used' => 'cookie',
    );
} else {

    // Switch that allows overriding the bridge manager with hard-coded values
    define('USE_BRIDGEMGR', 1);

    require_once 'bridge/udb_base.inc.php';

    class cpg_udb extends core_udb {

        function cpg_udb()
        {
            global $BRIDGE;
            
            if (!USE_BRIDGEMGR) {
                $this->boardurl = 'http://www.yousite.com/phpBB2';
                require_once('../phpBB2/config.php');

            } else {
                $this->boardurl = $BRIDGE['full_forum_url'];
                require_once($BRIDGE['relative_path_to_config_file'] . 'config.php');
                $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
            }
            
            $this->multigroups = 1;
            
            // Database connection settings
            $this->db = array(
                'name' => $dbname,
                'host' => $dbhost ? $dbhost : 'localhost',
                'user' => $dbuser,
                'password' => $dbpasswd,
                'prefix' =>$table_prefix
            );
            
            // Board table names
            $this->table = array(
                'users' => 'users',
                'groups' => 'groups',
                'sessions' => 'sessions',
                'usergroups' => 'user_group'
            );

            // Derived full table names
            $this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
            $this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
            $this->sessionstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
            $this->usergroupstable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['usergroups'];
            
            // Table field names
            $this->field = array(
                'username' => 'username', // name of 'username' field in users table
                'user_id' => 'user_id', // name of 'id' field in users table
                'password' => 'user_password', // name of 'password' field in users table
                'email' => 'user_email', // name of 'email' field in users table
                'regdate' => 'user_regdate', // name of 'registered' field in users table
                'active' => 'user_active', // is user account active?
                'lastvisit' => 'user_lastvisit', // name of 'location' field in users table
                'location' => 'user_from', // name of 'location' field in users table
                'website' => 'user_website', // name of 'website' field in users table
                'usertbl_group_id' => 'group_id', // name of 'group id' field in users table
                'grouptbl_group_id' => 'group_id', // name of 'group id' field in groups table
                'grouptbl_group_name' => 'group_name' // name of 'group name' field in groups table
            );
            
            // Pages to redirect to
            $this->page = array(
                'register' => '/ucp.php?mode=register',
                'editusers' => '/memberlist.php',
                'edituserprofile' => "/memberlist.php?mode=viewprofile&u=",
            );
            
            // Group ids - admin and guest only.
            $this->admingroups = array(2);
            $this->guestgroup = 3;
            
            // Use a special function to collect groups for cpg groups table
            $this->group_overrride = 1;
            
            // Cookie settings - used in following functions only
            $this->cookie_name = $BRIDGE['cookie_prefix'];
            
            // Connect to db
            $this->connect();
        }

        function collect_groups()
        {
            $sql ="SELECT * FROM {$this->groupstable} WHERE group_single_user = 0";
        
            $result = cpg_db_query($sql, $this->link_id);
            
            $udb_groups = array(102 =>'Administrators', 2=> 'Registered', 3=>'Guests');
                
            while ($row = mysql_fetch_assoc($result))
            {
                $udb_groups[$row[$this->field['grouptbl_group_id']]+100] = utf_ucfirst(utf_strtolower($row[$this->field['grouptbl_group_name']]));
            }

            return $udb_groups;
            
        }
        // definition of how to extract id, name, group from a session cookie
        function session_extraction()
        {
            $superCage = Inspekt::makeSuperCage();
            //if (isset($_COOKIE[$this->cookie_name . '_sid'])) {           
            //  $session_id = addslashes($_COOKIE[$this->cookie_name . '_sid']);
            if ($superCage->cookie->keyExists($this->cookie_name . '_sid')) {           
                $session_id = $superCage->cookie->getEscaped($this->cookie_name . '_sid');

                $sql = "SELECT u.{$this->field['user_id']} AS user_id, u.{$this->field['password']} AS password FROM {$this->usertable} AS u, {$this->sessionstable} AS s WHERE u.{$this->field['user_id']}=s.session_user_id AND s.session_id = '$session_id' AND u.user_id > 0";
                
                $result = cpg_db_query($sql, $this->link_id);

                if (mysql_num_rows($result)){
                    $row = mysql_fetch_array($result);
                    return $row;
                } else {
                    return false;
                }
            }
        }
        
        // Get groups of which user is member
        function get_groups($row)
        {
            if ($this->use_post_based_groups){

                $sql = "SELECT ug.{$this->field['usertbl_group_id']}+100 AS group_id FROM {$this->usertable} AS u, {$this->usergroupstable} AS ug, {$this->groupstable} as g WHERE u.{$this->field['user_id']}=ug.{$this->field['user_id']} AND u.{$this->field['user_id']}='{$row['id']}' AND g.{$this->field['grouptbl_group_id']} = ug.{$this->field['grouptbl_group_id']}";

                $result = cpg_db_query($sql, $this->link_id);

                while ($row = mysql_fetch_array($result)) {
                    $data[] = $row['group_id'];
                }
            } else {
                $data[0] = in_array($row[$this->field['usertbl_group_id']] , $this->admingroups) ? 1 : 2;
            }
            
            return $data;
        }
        
        // definition of how to extract an id and password hash from a cookie
        function cookie_extraction()
        {
            $superCage = Inspekt::makeSuperCage();
            $id = 0;
            $pass = '';

            //if (isset($_COOKIE[$this->cookie_name.'_data'])){
            //  $sessiondata = unserialize($_COOKIE[$this->cookie_name.'_data']);
            if ($superCage->cookie->keyExists($this->cookie_name.'_data')){
                $sessiondata = unserialize($superCage->cookie->getRaw($this->cookie_name.'_data'));
                $id = $sessiondata['userid'] > 1 ? intval($sessiondata['userid']) : 0;
                $pass = (isset($sessiondata['autologinid'])) ? addslashes($sessiondata['autologinid']) : '';
            }
            
            return ($id) ? array($id, $pass) : false;
        }
        
        // definition of actions required to convert a password from user database form to cookie form
        function udb_hash_db($password)
        {
            return $password; // unused
        }

        function login_page()
        {
            global $CONFIG;
            
            $cpg = parse_url($CONFIG['site_url']);
            $bb = parse_url($this->boardurl);
            $levels = count(explode('/', $bb['path'])) - 1;
            $redirect = str_repeat('..', $levels) . rtrim($cpg['path'], '/') . '/';

            $this->redirect("/login.php?redirect=$redirect");
        }

        function logout_page()
        {
            global $CONFIG;
            
            $cpg = parse_url($CONFIG['site_url']);
            $bb = parse_url($this->boardurl);
            $levels = count(explode('/', $bb['path'])) - 1;
            $redirect = str_repeat('../', $levels) . trim($cpg['path'], '/') . '/';
            
            $this->redirect("/login.php?logout=true&redirect=$redirect");
        }

        function view_users() {}
        function view_profile() {}
        
        
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
            
            if (in_array($options['sort'], array('group_a', 'group_d', 'pic_a', 'pic_d', 'disku_a', 'disku_d'))){
                
                $sort = '';
                list($this->sortfield, $this->sortdir) = explode(' ', $sort_codes[$options['sort']]);
                $this->adv_sort = true;
                
            } else {
                
                $sort = "ORDER BY " . $sort_codes[$options['sort']];
                $this->adv_sort = false;
            }

            // Build WHERE clause, if this is a username search
            if ($options['search']) {
                $options['search'] = 'AND u.'.$f['username'].' LIKE "'.$options['search'].'" ';
            }

            $sql = "SELECT group_id, group_name, group_quota FROM {$C['TABLE_USERGROUPS']}";

            $result = cpg_db_query($sql);
            
            $groups = array();
        
            while ($row = mysql_fetch_assoc($result)) {
                $groups[$row['group_id']] = $row;
            }
            
            $sql ="SELECT group_id FROM {$this->groupstable} WHERE group_single_user = 0";
        
            $result = cpg_db_query($sql, $this->link_id);
            $udb_groups = array();
            
            while ($row = mysql_fetch_assoc($result)) {
                $udb_groups[] = $row['group_id'];
            }


            $sql = "SELECT u.{$f['user_id']} as user_id, MIN(ug.{$f['grouptbl_group_id']}) AS user_group, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, {$f['lastvisit']} as user_lastvisit, '' as user_active, 0 as pic_count, 0 as disk_usage ".
                   "FROM {$this->usertable} AS u ".
                   "INNER JOIN {$this->usergroupstable} AS ug ON u.{$this->field['user_id']}=ug.{$this->field['user_id']}    ".   
                   "WHERE u.{$f['user_id']} > 0 " . $options['search'].
                   "GROUP BY ug.{$f['user_id']} " . $sort .
                   " LIMIT {$options['lower_limit']}, {$options['users_per_page']};";

            $result = cpg_db_query($sql, $this->link_id);
            
            // If no records, return empty value
            if (!mysql_num_rows($result)) {
                return array();
            }

            // Extract user list to an array
            while ($user = mysql_fetch_assoc($result)) {
                
                $gid = 2;

                if ($this->use_post_based_groups){
                    if (in_array($user['user_group'], $udb_groups)){
                        $gid = $user['user_group'] + 100;
            
                    } elseif (in_array($user['user_group'], $this->admingroups)){
                        $gid = 102;
                    }
                } else {
                    if (in_array($user['user_group'], $this->admingroups)){
                        $gid = 1;
                    }
                }

                $userlist[$user['user_id']] = array_merge($user, $groups[$gid]);
                $users[] = $user['user_id'];
            }
            
            $user_list_string = implode(', ', $users);
            
            $sql = "SELECT owner_id, COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage FROM {$C['TABLE_PICTURES']} WHERE owner_id IN ($user_list_string) GROUP BY owner_id";

            $result = cpg_db_query($sql);


            while ($owner = mysql_fetch_assoc($result)) {
                $userlist[$owner['owner_id']] = array_merge($userlist[$owner['owner_id']], $owner);
            }

            if ($this->adv_sort) usort($userlist, array('cpg_udb', 'adv_sort'));

            return $userlist;
        }
        
        function adv_sort($a, $b)
        {
            if ($this->sortdir == 'ASC'){
                return strcmp($a[$this->sortfield], $b[$this->sortfield]);
             } else {
                return strcmp($b[$this->sortfield], $a[$this->sortfield]);
            }
        }
    }

    // and go !
    $cpg_udb = new cpg_udb;
}
?>