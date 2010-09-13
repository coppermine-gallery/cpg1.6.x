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
        'full_name' => 'PunBB v1.1.5',
        'short_name' => 'punbb115',
        'support_url' => 'http://www.punbb.org/',
        'full_forum_url_default' => 'http://www.yoursite.com/board',
        'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
        'relative_path_to_config_file_default' => '../board/',
        'relative_path_to_config_file_used' => 'lookfor,config.php',
        'use_post_based_groups_default' => '0',
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
                $this->boardurl = 'http://www.yoursite.com/punbb';

                // local path to your punbb config file
                require_once('../punbb/config.php');

            } else { // the vars from the bridgemgr
                $this->boardurl = $BRIDGE['full_forum_url'];
                require_once($BRIDGE['relative_path_to_config_file'] . 'config.php');
                $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
            }
            
            $this->multigroups = 0;
            $this->group_overrride = 0;
            
            // Database connection settings
            $this->db = array(
                'name' => $db_name,
                'host' => $db_host,
                'user' => $db_username,
                'password' => $db_password,
                'prefix' =>$db_prefix
            );
            
            // Board table names
            $this->table = array(
                'users' => 'users',
            );

            // Derived full table names
            $this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
            
            // Table field names
            $this->field = array(
                'username' => 'username', // name of 'username' field in users table
                'user_id' => 'id', // name of 'id' field in users table
                'password' => 'password', // name of 'password' field in users table
                'email' => 'email', // name of 'email' field in users table
                'regdate' => 'registered', // name of 'registered' field in users table
                'location' => 'location', // name of 'location' field in users table
                'website' => 'url', // name of 'website' field in users table
                'usertbl_group_id' => 'status', // name of 'group id' field in users table
            );
            
            // Pages to redirect to
            $this->page = array(
                'register' => '/register.php',
                'editusers' => '/userlist.php',
                'edituserprofile' => "/profile.php?id="
            );
            
            // Group ids
            $this->admingroups = array(2);
            $this->guestgroup = -1;
            
            // Cookie settings - used in following functions only
            $this->cookie_name = $cookie_name;
            
            // Connect to db
            $this->connect();
        }
            
        // definition of how to extract id, name, group from a session cookie
        function session_extraction()
        {
            $superCage = Inspekt::makeSuperCage();
            $row = false; //array('id' => 0, 'username' => 'Guest', 'status' => -1);
            
            //if (isset($_COOKIE[$this->cookie_name])) {
            //  list($username, $pass_hash) = unserialize($_COOKIE[$this->cookie_name]);
            if ($superCage->cookie->keyExists($this->cookie_name)) {
                list($username, $pass_hash) = unserialize($superCage->cookie->getRaw($this->cookie_name));
                if (strcasecmp($username, 'Guest'))
                {
                    $result = cpg_db_query("SELECT id, username, status+100 AS status FROM {$this->usertable} WHERE username = '$username' AND password = '$pass_hash'", $this->link_id);
                    $row = mysql_fetch_assoc($result);
                }
            }
            
            return $row;
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
            global $CONFIG;
            
            $this->redirect('/login.php?action=in&redir='.$CONFIG['site_url']);
        }

        // Logout
        function logout_page()
        {
            global $CONFIG;

            $this->redirect('/login.php?action=out&id='.USER_ID.'&redir='.$CONFIG['site_url']);
        }
    }

    // and go !
    $cpg_udb = new cpg_udb;
}
?>