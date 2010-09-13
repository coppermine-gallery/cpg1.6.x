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
        'full_name' => 'Mambo server',
        'short_name' => 'mambo',
        'support_url' => 'http://www.mamboserver.com/',
        'full_forum_url_default' => 'http://www.yoursite.com/board',
        'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
        'relative_path_to_config_file_default' => '../board/',
        'relative_path_to_config_file_used' => 'lookfor,configuration.php',
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
    
                $this->boardurl = 'http://localhost/mambo';
                include('../mambo/configuration.php');
                include('../mambo/includes/version.php');
    
            } else {
                include($BRIDGE['relative_path_to_config_file'] . 'configuration.php');
                include($BRIDGE['relative_path_to_config_file'] . 'includes/version.php');
                $this->boardurl = $mosConfig_live_site;
                $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
            }
            
            $this->mambo_version = $_VERSION;
    
            $this->multigroups = 0;
    
            $this->group_overrride = !$this->use_post_based_groups;
    
            // Database connection settings
            $this->db = array(
                'name'     => $mosConfig_db,
                'host'     => $mosConfig_host ? $mosConfig_host : 'localhost',
                'user'     => $mosConfig_user,
                'password' => $mosConfig_password,
                'prefix'   => $mosConfig_dbprefix,
            );
            
            // Board table names
            $this->table = array(
                'users'    => 'users',
                'groups'   => 'core_acl_aro_groups',
                'sessions' => 'session',
            );
    
            // Derived full table names
            $this->usertable     = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
            $this->groupstable   = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
            $this->sessionstable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
            
            // Table field names
            $this->field = array(
                'username'            => 'username', // name of 'username' field in users table
                'user_id'             => 'id', // name of 'id' field in users table
                'password'            => 'password', // name of 'password' field in users table
                'email'               => 'email', // name of 'email' field in users table
                'regdate'             => 'UNIX_TIMESTAMP(registerDate)', // name of 'registered' field in users table
                'lastvisit'           => 'UNIX_TIMESTAMP(lastvisitDate)', // last time user logged in
                'active'              => '1-block', // is user account active?
                'location'            => "''", // name of 'location' field in users table
                'website'             => "''", // name of 'website' field in users table
                'usertbl_group_id'    => 'gid', // name of 'group id' field in users table
                'grouptbl_group_id'   => 'group_id', // name of 'group id' field in groups table
                'grouptbl_group_name' => 'name', // name of 'group name' field in groups table
            );
            
            // Pages to redirect to
            $this->page = array(
                'register'        => '/index.php?option=com_registration&task=register',
                'editusers'       => '/administrator/index.php',
                'edituserprofile' => '/index.php?option=com_user&task=UserDetails',
            );
    
            // Group ids - admin and guest only.
            $this->admingroups = array(24, 25);
            $this->guestgroup  = 1;
            
            // Connect to db
            $this->connect();
            
            // Delete old sessions
            $past = time() - $mosConfig_lifetime;
            
            $sql = "DELETE FROM {$this->sessionstable} WHERE time < $past";
            cpg_db_query($sql, $this->link_id);
        }
    
        function session_update()
        {
            $sql = 'update '.$this->sessionstable.' set time="'.time().'" '.
                   'where session_id=md5("'.$this->session_id.'");';
            $result = cpg_db_query($sql, $this->link_id);
        }
        
        function collect_groups()
        {
            $sql ="SELECT * FROM {$this->groupstable}";
        
            $result = cpg_db_query($sql, $this->link_id);
            
            $udb_groups = array(1 => 'Guests');
                
            while ($row = mysql_fetch_assoc($result)) {
                $udb_groups[$row[$this->field['grouptbl_group_id']] + 100] = utf_ucfirst(utf_strtolower($row[$this->field['grouptbl_group_name']]));
            }
            
            return $udb_groups;
        }
        
        // definition of how to extract an id and password hash from a cookie
        function cookie_extraction()
        {
            global $CONFIG, $raw_ip;
            
            $superCage = Inspekt::makeSuperCage();
    
            // Default anonymous values
            $id = 0;
            $pass = '';
            $f = $this->field;
            $mambo_version =& $this->mambo_version;
    
            //$sessioncookie = $_COOKIE['sessioncookie'];
            $sessioncookie = $superCage->cookie->getRaw('sessioncookie');
            
            // 4.5.1 and 4.5.2 compatibility
            if (($mambo_version->RELEASE == '4.5' && $mambo_version->DEV_LEVEL != '1.0.9') && $sessioncookie) {
                //$sessioncookie .= $_SERVER['REMOTE_ADDR'];
                $sessioncookie .= $raw_ip;
            }
    
            //$usercookie = $_COOKIE['usercookie'];
            $usercookie = $superCage->cookie->getRaw('usercookie');
            $result = false;
    
            // Query database for session, if cookie exists
            if ($sessioncookie) {
    
                $sql =  'select userid from '.$this->sessionstable.' where session_id=md5("'.$sessioncookie.'");';
                $result = cpg_db_query($sql, $this->link_id);
            }
    
            // If session exists, check if user exists
            if (mysql_num_rows($result)) {
    
                $row = mysql_fetch_assoc($result);
                mysql_free_result($result);
    
                $row['userid'] = (int) $row['userid'];
    
                $sql =  'select id, password ';
                $sql .= 'from '.$this->usertable.' ';
                $sql .= 'where id='.$row['userid'];
    
                $result = cpg_db_query($sql, $this->link_id);
    
                // If user exists, use the current session
                if ($result) {
                    $row = mysql_fetch_assoc($result);
                    mysql_free_result($result);
    
                    $pass = $row['password'];
                    $id = (int) $row['id'];
                    $this->session_id = $sessioncookie;
    
                    // If the user doesn't exist, use default guest credentials
                }
    
                // No session exists, so create a session and check for remember me cookie
            } else {
    
                $this->create_session();
    
                // remember me cookie exists; login with user creditials
                if ($usercookie) {
                    $username = (isset($usercookie['username'])) ? addslashes($usercookie['username']) : '';
                    $password = (isset($usercookie['password'])) ? addslashes($usercookie['password']) : '';
    
                    // Grab id from Mambo database, if a cookie exists
                    if ($username) {
                        $sql =  'select u.'.$f['user_id'].' as id, u.'.$f['password'].' as password, u.'.
                                $f['username'].' as username, u.'.$f['usertbl_group_id'].' as usertbl_group_id, '.
                                'g.'.$f['grouptbl_group_id'].' as grouptbl_group_id, g.'.$f['grouptbl_group_name'].' as grouptbl_group_name ';
                        $sql .= 'from '.$this->usertable.' as u ';
                        $sql .= 'inner join '.$this->groupstable.' as g ';
                        $sql .= 'on gid=group_id ';
                        $sql .= 'where u.'.$f['username'].'="'.$username.'" and u.'.$f['password'].'="'.$password.'" and u.block=0;';
    
                        $result = cpg_db_query($sql, $this->link_id);
                        
                        // the user exists; finalize login procedures
                        if ($result) {
                        
                            $row = mysql_fetch_assoc($result);
                            mysql_free_result($result);
    
                            $gid = 1;
                            
                            if ($this->is_group_child_of($row['grouptbl_group_name'], 'Registered') ||
                                $this->is_group_child_of($row['grouptbl_group_name'], 'Administrator')) {
                                
                                $gid = 2;
                            }
                            
                            // update session information in session table
                            $sql =  'update '.$this->sessionstable.' set '.
                                    'userid='.$row['id'].
                                    ',username="'.$row['username'].'"'.
                                    ',guest=0 '.
                                    ',gid='.$gid.' '.
                                    ',usertype="'.$row['grouptbl_group_name'].'" '.
                                    'where session_id=md5("'.$this->session_id.'");';
                            
                            cpg_db_query($sql, $this->link_id);
                            
                            // update last visit date
                            $currentDate = date("Y-m-d\TH:i:s");
                            $sql = 'update '.$this->usertable.' set '.
                                   'lastvisitDate="'.$currentDate.'" '.
                                   'where id='.$row['id'];
                            
                            cpg_db_query($sql, $this->link_id);
                            
                            $pass = $password;
                            $id = $row['id'];
                        }
                    }
                }
            }
    
            return ($id) ? array($id, $pass) : false;
        }
    
        function login($username = null, $password = null)
        {
    
            $this->create_session();
    
            if (is_null($username) || is_null($password)) {
                return false;
            }
    
            // Grab id from Mambo database, if a cookie exists
            if ($username) {
                $sql =  'select u.'.$f['user_id'].' as id, u.'.$f['password'].' as password, u.'.
                        $f['username'].' as username, u.'.$f['usertbl_group_id'].' as usertbl_group_id, '.
                        'g.'.$f['grouptbl_group_id'].' as grouptbl_group_id, g.'.$f['grouptbl_group_name'].' as grouptbl_group_name ';
                $sql .= 'from '.$this->usertable.' as u ';
                $sql .= 'inner join '.$this->groupstable.' as g ';
                $sql .= 'on gid=group_id ';
                $sql .= 'where u.'.$f['username'].'="'.$username.'" and u.'.$f['password'].'="'.$password.'" and u.block=0;';
    
                $result = cpg_db_query($sql, $this->link_id);
                        
                // the user exists; finalize login procedures
                if ($result) {
                        
                    $row = mysql_fetch_assoc($result);
                    mysql_free_result($result);
    
                    $gid = 1;
                            
                    if ($this->is_group_child_of($row['grouptbl_group_name'], 'Registered') ||
                        $this->is_group_child_of($row['grouptbl_group_name'], 'Administrator')) {
                                
                        $gid = 2;
                    }
                            
                    // update session information in session table
                    $sql =  'update '.$this->sessionstable.' set '.
                            'userid='.$row['id'].
                            ',username="'.$row['username'].'"'.
                            ',guest=0 '.
                            ',gid='.$gid.' '.
                            ',usertype="'.$row['grouptbl_group_name'].'" '.
                            'where session_id=md5("'.$this->session_id.'");';
                            
                    cpg_db_query($sql, $this->link_id);
                            
                    // update last visit date
                    $currentDate = date("Y-m-d\TH:i:s");
                    $sql = 'update '.$this->usertable.' set '.
                           'lastvisitDate="'.$currentDate.'" '.
                           'where id='.$row['id'];
                            
                    cpg_db_query($sql, $this->link_id);
                            
                    $pass = $password;
                    $id = $row['id'];
                }
            }
        }
    
        /** create a guest session */
        function create_session()
        {
            global $raw_ip;
            
            // alias the Mambo version object
            $mambo_version =& $this->mambo_version;
    
            // start session
            $this->session_id = $this->generateId();
            $sessioncookie = $this->session_id;
    
            // 4.5.1 and 4.5.2 compatibility
            if ($mambo_version->RELEASE == '4.5' && $mambo_version->DEV_LEVEL != '1.0.9') {
                //$this->session_id .= $_SERVER['REMOTE_ADDR'];
                $this->session_id .= $raw_ip;
            }
    
            $sql =  'insert into '.$this->sessionstable.' (session_id, username, guest, time, gid) values ';
            $sql .= '("'.md5($this->session_id).'", "", 1, "'.time().'",0)';
    
            // insert the guest session
            cpg_db_query($sql);
    
            // set the session cookie
            setcookie("sessioncookie", $sessioncookie, time() + 43200, "/");
        }
    
        /** taken from Mambo session class */
        function generateId()
        {    
            $failsafe = 20;
            $randnum = 0;
            
            while ($failsafe--) {
                $randnum = md5(uniqid(microtime(), 1));
                if ($randnum != "") {
                    $sql = "SELECT session_id FROM {$this->sessionstable} WHERE session_id=MD5('$randnum')";
                    if (!$result = cpg_db_query($sql, $this->link_id)) {
                        break;
                    }
                }
            }
            return $randnum;
        }
    
        /** taken from Mambo acl api class */
        /*======================================================================*\
            Function:    has_group_parent
            Purpose:    Checks whether the 'source' group is a child of the 'target'
        \*======================================================================*/
        function is_group_child_of($grp_src, $grp_tgt, $group_type = 'ARO')
        {   
            $table = &$this->groupstable;
    
            if (is_int($grp_src) && is_int($grp_tgt)) {
                $sql = "SELECT COUNT(*)".
                      "\nFROM $table AS g1".
                      "\nLEFT JOIN $table AS g2 ON g1.lft > g2.lft AND g1.lft < g2.rgt".
                      "\nWHERE g1.group_id=$grp_src AND g2.group_id=$grp_tgt";
            } else if (is_string($grp_src) && is_string($grp_tgt)) {
                $sql = "SELECT COUNT(*)".
                      "\nFROM $table AS g1".
                      "\nLEFT JOIN $table AS g2 ON g1.lft > g2.lft AND g1.lft < g2.rgt".
                      "\nWHERE g1.name='$grp_src' AND g2.name='$grp_tgt'";
            } else if (is_int($grp_src) && is_string($grp_tgt)) {
                $sql = "SELECT COUNT(*)".
                      "\nFROM $table AS g1".
                      "\nLEFT JOIN $table AS g2 ON g1.lft > g2.lft AND g1.lft < g2.rgt".
                      "\nWHERE g1.group_id='$grp_src' AND g2.name='$grp_tgt'";
            } else {
                $sql = "SELECT COUNT(*)".
                      "\nFROM $table AS g1".
                      "\nLEFT JOIN $table AS g2 ON g1.lft > g2.lft AND g1.lft < g2.rgt".
                      "\nWHERE g1.name=$grp_src AND g2.group_id='$grp_tgt'";
            }
            
            $result = cpg_db_query($sql, $this->link_id);
            $count = mysql_num_rows($result);
            
            if ($count) {
                mysql_free_result($result);
            }
            
            return ($count > 0);
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
            global $CONFIG;
            $this->redirect("/index.php?option=logout");
        }
        
        function edit_profile()
        {
            $this->redirect("/index.php?option=com_user&task=UserDetails&Itemid=21");
        }
    
        function view_users()
        {
        }
        
        function view_profile()
        {
        }
        
        function session_extraction($cookie_id)
        {
        }
    }
    
    // and go !
    $cpg_udb = new cpg_udb;
}
?>