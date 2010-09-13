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
        'full_name' => 'vBulletin 3.0',
        'short_name' => 'vbulletin30',
        'support_url' => 'http://www.vbulletin.com/',
        'full_forum_url_default' => 'http://www.yoursite.com/board',
        'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
        'relative_path_to_config_file_default' => '../board/',
        'relative_path_to_config_file_used' => 'lookfor,includes/config.php',
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
            
            if (!USE_BRIDGEMGR) {
                $this->boardurl = 'http://www.yousite.com/vb3';
                require_once('../vb3/includes/config.php');

            } else {
                $this->boardurl = $BRIDGE['full_forum_url'];
                require_once($BRIDGE['relative_path_to_config_file'] . 'includes/config.php');
                $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
            }
            
            $this->multigroups = 1;
            
            // Database connection settings
            
            if (isset($config['Database']['dbname']))
            {
              // Running on vBulletin 3.5.x
                $this->db = array(
                    'name' => $config['Database']['dbname'],
                    'host' => $config['MasterServer']['servername'] ? $config['MasterServer']['servername'] : 'localhost',
                    'user' => $config['MasterServer']['username'],
                    'password' => $config['MasterServer']['password'],
                    'prefix' => $config['Database']['tableprefix']
                );
            } else {
              // Running on vBulletin 3.0.x
                $this->db = array(
                    'name' => $dbname,
                    'host' => $servername ? $servername : 'localhost',
                    'user' => $dbusername,
                    'password' => $dbpassword,
                    'prefix' =>$tableprefix
                );
            }
            
            // Board table names
            $this->table = array(
                'users' => 'user',
                'groups' => 'usergroup',
                'sessions' => 'session'
            );

            // Derived full table names
            $this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
            $this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
            $this->sessionstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
            
            // Table field names
            $this->field = array(
                'username' => 'username', // name of 'username' field in users table
                'user_id' => 'userid', // name of 'id' field in users table
                'password' => 'password', // name of 'password' field in users table
                'email' => 'email', // name of 'email' field in users table
                'regdate' => 'joindate', // name of 'registered' field in users table
                'location' => "''", // name of 'location' field in users table
                'website' => 'homepage', // name of 'website' field in users table
                'usertbl_group_id' => 'usergroupid', // name of 'group id' field in users table
                'grouptbl_group_id' => 'usergroupid', // name of 'group id' field in groups table
                'grouptbl_group_name' => 'title' // name of 'group name' field in groups table
            );
            
            // Pages to redirect to
            $this->page = array(
                'register' => '/register.php',
                'editusers' => '/memberlist.php',
                'edituserprofile' => "/member.php?u=",
            );
            
            // Group ids - admin and guest only.
            $this->admingroups = array(6);
            $this->guestgroup = 1;
            
            // Use a special function to collect groups for cpg groups table
            $this->group_overrride = 0;
            
            // Cookie settings - used in following functions only
            if (isset($config['Misc']['cookieprefix']))
            {
              // get cookieprefix from vb3.5.x
              $this->cookie_name = $config['Misc']['cookieprefix'];
            } else {
              // get cookieprefix from vb3.0.x
              $this->cookie_name = $cookieprefix;
            }
            
            // Connect to db
            $this->connect();
        }

        // definition of how to extract id, name, group from a session cookie
        function session_extraction()
        {
            $superCage = Inspekt::makeSuperCage();
    		if ($superCage->cookie->keyExists($this->cookie_name . 'sessionhash')) {
    		    $session_id = $superCage->cookie->getEscaped($this->cookie_name . 'sessionhash');
    		} elseif ($superCage->cookie->keyExists($this->cookie_name . '_sessionhash')) {
    		    $session_id = $superCage->cookie->getEscaped($this->cookie_name . '_sessionhash');
    		}
            
            $sql = "SELECT u.{$this->field['user_id']}, u.{$this->field['password']}, u.{$this->field['grouptbl_group_id']}+100 AS usergroupid FROM {$this->usertable} AS u, {$this->sessionstable} AS s WHERE s.{$this->field['user_id']}=u.{$this->field['user_id']} AND s.sessionhash='$session_id'";
            
            $result = cpg_db_query($sql, $this->link_id);
            
            if (mysql_num_rows($result)){
                $row = mysql_fetch_array($result);
                return $row;
            } else {
                return false;
            }
        }
        
        // Get groups of which user is member
        function get_groups($row)
        {
            $data[0] = in_array($row['group_id'] - 100, $this->admingroups) ? 1 : 2;
            
            if ($this->use_post_based_groups){
                $sql = "SELECT g.{$this->field['usertbl_group_id']}+100 AS group_id, u.* FROM {$this->usertable} AS u, {$this->groupstable} as g WHERE g.{$this->field['grouptbl_group_id']} = u.{$this->field['usertbl_group_id']} AND u.{$this->field['user_id']} = '{$row['id']}'";

                $result = cpg_db_query($sql, $this->link_id);
            
                $row = mysql_fetch_array($result);
                
                $data[0] = $row['group_id'];
                
                if ($row['membergroupids']){
                    $groups = explode(',', $row['membergroupids']);
                    foreach ($groups as $id => $group){
                        $data[] = $group+100;
                    }   
                }
            }
            
            return $data;
        }
        
        // definition of how to extract an id and password hash from a cookie
        function cookie_extraction()
        {
            return false;
        }
        
        // definition of actions required to convert a password from user database form to cookie form
        function udb_hash_db($password)
        {
            return $password; // unused
        }

        function login_page()
        {
            $this->redirect("/index.php");
        }

        function logout_page()
        {
            $this->redirect("/login.php?do=logout&u=".USER_ID);
        }
    }

    // and go !
    $cpg_udb = new cpg_udb;
}
?>