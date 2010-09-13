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

if (!defined('IN_COPPERMINE')) {
    die('Not in Coppermine...');
}

if (isset($bridge_lookup)) {
    $default_bridge_data[$bridge_lookup] = array(
        'full_name' => 'Invision Power Board 2.x',
        'short_name' => 'invisionboard20',
        'support_url' => 'http://forums.invisionpower.com/',
        'full_forum_url_default' => 'http://www.yoursite.com/board',
        'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
        'relative_path_to_config_file_default' => '../board/',
        'relative_path_to_config_file_used' => 'lookfor,conf_global.php',
        'use_post_based_groups_default' => '0',
        'use_post_based_groups_used' => 'radio,1,0',
    );
} else {

    // Switch that allows overriding the bridge manager with hard-coded values
    define('USE_BRIDGEMGR', 1);
    
    require_once 'bridge/udb_base.inc.php';
    
    class cpg_udb extends core_udb
    {
    
        function cpg_udb()
        {
            global $BRIDGE;
            
            if (!USE_BRIDGEMGR) {
                $this->boardurl = 'http://localhost/ipb';
                require_once('../ipb/conf_global.php');
                $this->use_post_based_groups = 0;
            } else {
                require_once($BRIDGE['relative_path_to_config_file'] . '/conf_global.php');
                $this->boardurl = $INFO['board_url'];
                $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
            }
            
            // Database connection settings
            $this->db = array(
                'name'     => $INFO['sql_database'],
                'host'     => $INFO['sql_host'] ? $INFO['sql_host'] : 'localhost',
                'user'     => $INFO['sql_user'],
                'password' => $INFO['sql_pass'],
                'prefix'   => $INFO['sql_tbl_prefix'],
            );
            
            // Board table names
            $this->table = array(
                'users'    => 'members',
                'groups'   => 'groups',
                'sessions' => 'sessions',
            );
    
            // Derived full table names
            $this->usertable     = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
            $this->groupstable   = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
            $this->sessionstable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
            
            // Table field names
            $this->field = array(
                'username'            => 'name', // name of 'username' field in users table
                'user_id'             => 'id', // name of 'id' field in users table
                'password'            => 'member_login_key', // name of 'password' field in users table
                'email'               => 'email', // name of 'email' field in users table
                'regdate'             => 'joined', // name of 'registered' field in users table
                'location'            => "''", // name of 'location' field in users table
                'website'             => "''", // name of 'website' field in users table
                'usertbl_group_id'    => 'mgroup', // name of 'group id' field in users table
                'grouptbl_group_id'   => 'g_id', // name of 'group id' field in groups table
                'grouptbl_group_name' => 'g_title', // name of 'group name' field in groups table
            );
            
            // Pages to redirect to
            $this->page = array(
                'register'        => '/index.php?act=Reg&CODE=00',
                'editusers'       => '/admin.php',
                'edituserprofile' => '/index.php?showuser=',
            );
        
            // Group ids - admin and guest only.
            $this->admingroups = array($INFO['admin_group']);
            $this->guestgroup  = $INFO['guest_group'];
            
            // Connect to db
            $this->connect();
        }
    
        // definition of how to extract id, pass from session cookie
        function session_extraction()
        {
            $superCage = Inspekt::makeSuperCage();
    
            if ($superCage->cookie->keyExists('session_id')) {
    
                $session_id = $superCage->cookie->getEscaped('session_id');
    
                $sql = "SELECT member_id, member_login_key FROM {$this->sessionstable} AS s INNER JOIN {$this->usertable} AS u ON s.member_id = u.id WHERE s.id = '$session_id'";
                
                $result = cpg_db_query($sql, $this->link_id);
                
                if (mysql_num_rows($result)) {
                    $row = mysql_fetch_row($result);
                    return $row;
                }
            } else {
                return false;
            }
        }
        
        // definition of how to extract an id and password hash from a cookie
        function cookie_extraction()
        {
            $superCage = Inspekt::makeSuperCage();
            $id = 0;
            $pass = '';
            
            if ($superCage->cookie->keyExists('member_id') && $superCage->cookie->keyExists('pass_hash')) {
                $id = $superCage->cookie->getInt('member_id');
                $pass = substr($superCage->cookie->getEscaped('pass_hash'), 0, 32);
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
            $this->redirect("/index.php?act=Login&CODE=00");
        }
    
        function logout_page()
        {
            $this->redirect("/index.php?act=Login&CODE=03");
        }
    }
    
    // and go !
    $cpg_udb = new cpg_udb;
}
    