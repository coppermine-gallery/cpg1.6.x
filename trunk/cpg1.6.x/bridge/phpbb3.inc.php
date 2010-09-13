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
        'full_name' => 'phpBB version 3',
        'short_name' => 'phpbb3',
        'support_url' => 'http://www.phpbb.com/',
        'full_forum_url_default' => 'http://www.yoursite.com/board',
        'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
        'relative_path_to_config_file_default' => '../board/',
        'relative_path_to_config_file_used' => 'lookfor,config.php',
        'use_post_based_groups_default' => '0',
        'use_post_based_groups_used' => 'radio,1,0',
        'cookie_prefix_default' => '',
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
            
            if (!USE_BRIDGEMGR) { // the vars that are used when bridgemgr is disabled

                // URL of your punbb
                $this->boardurl = 'http://localhost/phpBB2';

                // local path to your punbb config file
                require_once('../phpBB2/config.php');

            } else { // the vars from the bridgemgr
                $this->boardurl = $BRIDGE['full_forum_url'];
                require_once($BRIDGE['relative_path_to_config_file'] . 'config.php');
                $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
            }
            
            $this->multigroups = 1;
            
            // Database connection settings
            $this->db = array(
                'name'     => $dbname,
                'host'     => $dbhost ? $dbhost : 'localhost',
                'user'     => $dbuser,
                'password' => $dbpasswd,
                'prefix'   => $table_prefix
            );
            
            // Board table names
            $this->table = array(
                'users'      => 'users',
                'groups'     => 'groups',
                'sessions'   => 'sessions',
                'usergroups' => 'user_group',
            );

            // Derived full table names
            $this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
            $this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
            $this->sessionstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
            $this->usergroupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['usergroups'];
           
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

            // Group ids
            $this->admingroups = array(5);
            $this->guestgroup = 1;
            
            // Cookie settings - used in following functions only
            $this->cookie_name = $BRIDGE['cookie_prefix'];
            
            // Connect to db
            $this->connect();
        }

        // definition of how to extract id, name, group from a session cookie
        function session_extraction()
        {
            $superCage = Inspekt::makeSuperCage();

            if ($superCage->cookie->keyExists($this->cookie_name . '_sid')) {
                
                $this->session_id = $superCage->cookie->getEscaped($this->cookie_name . '_sid');
                
                $sql = "SELECT user_id, user_password, group_id FROM {$this->sessionstable} INNER JOIN {$this->usertable} ON session_user_id = user_id WHERE session_id = '{$this->session_id}'";
                
                $result = cpg_db_query($sql, $this->link_id);
                
                if (mysql_num_rows($result)){
                    $row = mysql_fetch_array($result);
                    $this->primary_group = array_pop($row);
                    return $row['user_id'] == 1 ? false : $row;
                } else {
                    return false;
                }
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
            return $password; // unused
        }

    	// Get groups of which user is member
    	function get_groups($row)
    	{
    		$data = array();

    		if ($this->use_post_based_groups) {
    		    
    		    $data[] = $this->primary_group + 100;
    		    
    		    $sql = "SELECT group_id FROM {$this->usergroupstable} WHERE user_id = {$row['id']}";
    		    $result = cpg_db_query($sql, $this->link_id);
    		    
    		    while ($group = mysql_fetch_assoc($result)) {
        		    $data[] = $group['group_id'] + 100;
    		    }
    
                $data = array_unique($data);
                
    		} else {
    			$data[0] = (in_array($this->primary_group, $this->admingroups)) ? 1 : 2;
    		}
    		
    		return $data;
    	}
    	        
        function login_page()
        {
            global $CONFIG;
            
            $redirect = urlencode($CONFIG['site_url']);
            $this->redirect("/ucp.php?mode=login&redirect=$redirect");
        }

        function logout_page()
        {
            global $CONFIG;
            
            $redirect = urlencode($CONFIG['site_url']);
            $this->redirect("/ucp.php?mode=logout&redirect=$redirect&sid=" . $this->session_id);
        }
       
        function view_users()
        {
            $this->redirect($this->page['editusers']);
        }
        
        function get_users($options = array())
        {
        }
        
        function view_profile($uid)
        {
        }
    }

    // and go !
    $cpg_udb = new cpg_udb;
}
?>