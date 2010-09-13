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
        'full_name' => 'XMB 1.9',
        'short_name' => 'xmb',
        'support_url' => 'http://www.xmbforum.com/',
        'full_forum_url_default' => 'http://www.yoursite.com/board',
        'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
        'relative_path_to_config_file_default' => '../board/',
        'relative_path_to_config_file_used' => 'lookfor,config.php',
        'use_post_based_groups_default' => '0',
        'use_post_based_groups_used' => 'radio,1,0',
    );
} else {

    // Switch that allows overriding the bridge manager with hard-coded values
    define('USE_BRIDGEMGR', 1);

    require_once 'bridge/udb_base.inc.php';

    class cpg_udb extends core_udb {

        function cpg_udb()
        {
            global $BRIDGE;
            
            if (!USE_BRIDGEMGR) { // the vars that are used when bridgemgr is disabled

                // URL of your board
                $this->boardurl = 'http://localhost/XMB';

                // local path to your board's config file
                require_once('../XMB/config.php');

                $this->use_post_based_groups = 1;

            } else { // the vars from the bridgemgr
                $this->boardurl = $BRIDGE['full_forum_url'];
                require_once($BRIDGE['relative_path_to_config_file'] . 'config.php');
                $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
            }
            
            // multiple groups are not actually supported, but need this set due to the unusual group implementation in XMB.
            $this->multigroups = 1;
            $this->group_overrride = 1;
            
            // Database connection settings
            $this->db = array(
                'name' => $dbname,
                'host' => $dbhost,
                'user' => $dbuser,
                'password' => $dbpw,
                'prefix' =>$tablepre
            );
            
            // Board table names
            $this->table = array(
                'users' => 'members',
                'groups' => 'ranks',
            );

            // Derived full table names
            $this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
            $this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
            
            // Table field names
            $this->field = array(
                'username' => 'username', // name of 'username' field in users table
                'user_id' => 'uid', // name of 'id' field in users table
                'password' => 'password', // name of 'password' field in users table
                'email' => 'email', // name of 'email' field in users table
                'regdate' => 'regdate', // name of 'registered' field in users table
                'location' => 'location', // name of 'location' field in users table
                'website' => 'site', // name of 'website' field in users table
                'usertbl_group_id' => 'status', // name of 'group id' field in users table
                'grouptbl_group_id' => 'title', // name of 'group id' field in groups table
                'grouptbl_group_name' => 'title', // name of 'group name' field in groups table
            );
            
            // Pages to redirect to
            $this->page = array(
                'register' => '/register.php',
                'editusers' => '/misc.php?action=list',
                'edituserprofile' => '/member.php?action=viewpro&member='
            );
            
            // Group ids
            $this->admingroups = array(8,9);
            $this->guestgroup = 3;
                    
            // Connect to db
            $this->connect();
        }

        function collect_groups()
        {
            $sql = "SELECT * FROM {$this->groupstable}";
        
            $result = cpg_db_query($sql, $this->link_id);
        
            // XMB has no guest group in groups table, so adding one here
            $udb_groups = array(3=>'Guests');
        
            while ($row = mysql_fetch_assoc($result))
            {
                $udb_groups[$row['id']+100] = utf_ucfirst(utf_strtolower($row[$this->field['grouptbl_group_name']]));
            }
            return $udb_groups;
        }
        
        function get_groups($row)
        {       
            $id = $row['id'];
            
            $sql = "SELECT id FROM {$this->groupstable}, {$this->usertable} WHERE {$this->field['usertbl_group_id']} = {$this->field['grouptbl_group_id']} AND {$this->field['user_id']}='$id'";

            $result = cpg_db_query($sql, $this->link_id);
            
            if (mysql_num_rows($result)){
                $row = mysql_fetch_row($result);
                if ($this->use_post_based_groups){
                    $row = array($row[0] + 100);
                } else {
                    if (in_array($row[0], $this->admingroups)){
                        $row = array(1);
                    } else {
                        $row = array(2);
                    }
                }
                return $row;
            } else {
                return false;
            }
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

            $f['usertbl_group_id'] = 'id';

            // Fix the group id, if bridging is enabled
            if ($CONFIG['bridge_enable']) {
                $f['usertbl_group_id'] .= '+100';
            }
            
            // Build WHERE clause, if this is a username search
            if ($options['search']) {
                $options['search'] = 'WHERE u.'.$f['username'].' LIKE "'.$options['search'].'" ';
            }

            // Build SQL table, should work with all bridges
            $sql = "SELECT {$f['user_id']} as user_id, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, lastvisit as user_lastvisit, '' as user_active, ".
                   "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_name, group_quota ".
                   "FROM {$this->usertable} AS u ".
                   "INNER JOIN {$this->groupstable} AS rank ON u.status = rank.title ".   
                   " INNER JOIN {$C['TABLE_USERGROUPS']} AS g ".
                   "ON  g.group_id = rank.{$f['usertbl_group_id']} LEFT JOIN {$C['TABLE_PICTURES']} AS p ON p.owner_id = u.{$f['user_id']} ".
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
        
        // definition of how to extract id, name, group from a session cookie
        function session_extraction()
        {
            $superCage = Inspekt::makeSuperCage();
            //if (isset($_COOKIE['xmbpw']) && isset($_COOKIE['xmbuser'])){
            //  return array($this->get_user_id($_COOKIE['xmbuser']), $_COOKIE['xmbpw']);
            if ($superCage->cookie->keyExists('xmbpw') && $superCage->cookie->keyExists('xmbuser')){
                return array($this->get_user_id($superCage->cookie->getRaw('xmbuser'), $superCage->cookie->getRaw('xmbpw')));
            } else {
                return false;
            }
        }
        
        // definition of how to extract an id and password hash from a cookie
        function cookie_extraction()
        {
            return false;
        }
        
        // definition of actions required to convert a password from user database form to cookie form
        function udb_hash_db($password)
        {
            return $password;
        }
        
        // Login
        function login_page()
        {
            $this->redirect('/misc.php?action=login');
        }

        // Logout
        function logout_page()
        {
            $this->redirect('/misc.php?action=logout');
        }
        
            // View users
        function view_users()
        {
        }
        
        // View user profile
        function view_profile($uid)
        {
        }
            // Edit user profile
        function edit_profile($uid)
        {
            $this->redirect($this->page['edituserprofile'].$this->get_user_name($uid));
        }
    }

    // and go !
    $cpg_udb = new cpg_udb;
}
?>