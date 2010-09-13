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
        'full_name' => 'Simple Machines (SMF) 1.x',
        'short_name' => 'smf10',
        'support_url' => 'http://www.simplemachines.org/',
        'relative_path_to_config_file_default' => '../board/',
        'relative_path_to_config_file_used' => 'lookfor,Settings.php',
        'use_post_based_groups_default' => '0',
        'use_post_based_groups_used' => 'radio,1,0',
    );
} else {

    // Switch that allows overriding the bridge manager with hard-coded values
    define('USE_BRIDGEMGR', 1);

    require_once 'bridge/udb_base.inc.php';

    if (!USE_BRIDGEMGR) {
            require_once('../smf/Settings.php');
            $boardurl = 'http://www.mysite.com/board';
    } else {
            require_once($BRIDGE['relative_path_to_config_file'] . 'Settings.php');
    }


    class cpg_udb extends core_udb {

            function cpg_udb()
            {
                    global $BRIDGE, $CONFIG, $boardurl, $db_prefix, $db_server, $db_name, $db_user, $db_passwd, $cookiename;

                    $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
                    $this->boardurl = $boardurl;
                    $this->multigroups = 1;
                    $this->group_overrride = 1;
                          $this->cookie_name = $cookiename;

                    // Board table names
                    $this->table = array(
                            'users' => 'members',
                            'groups' => 'membergroups',
                            'sessions' => 'sessions'
                    );

                    // Database connection settings
                    $this->db = array(
                            'name' => $db_name,
                            'host' => $db_server ? $db_server : 'localhost',
                            'user' => $db_user,
                            'prefix' => $db_prefix,
                            'password' => $db_passwd
                    );

            // Derived full table names
            if (strpos($db_prefix, '.') === false) {
                $this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
                $this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
                $this->sessionstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
            } else {
                $this->usertable = $this->db['prefix'] . $this->table['users'];
                $this->groupstable = $this->db['prefix'] . $this->table['groups'];
                $this->sessionstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
            }

                    // Table field names
                    $this->field = array(
                            'username' => 'realName', // name of 'username' field in users table
                            'user_id' => 'ID_MEMBER', // name of 'id' field in users table
                            'password' => 'SHA1(CONCAT(passwd, passwordSalt))', // name of the password field in the users table
                            'email' => 'emailAddress', // name of 'email' field in users table
                            'regdate' => 'dateRegistered', // name of 'registered' field in users table
                            'lastvisit' => 'UNIX_TIMESTAMP(lastLogin)', // last time user logged in
                            'active' => 'is_activated', // is user account active?
                            'location' => 'location', // name of 'location' field in users table
                            'website' => 'websiteUrl', // name of 'website' field in users table
                            'usertbl_group_id' => 'ID_GROUP', // name of 'group id' field in users table
                            'grouptbl_group_id' => 'ID_GROUP', // name of 'group id' field in groups table
                            'grouptbl_group_name' => 'groupName', // name of 'group name' field in groups table
                            'postgroup' => 'ID_POST_GROUP', // post group field
                            'additionals' => 'additionalGroups', // additional groups, comma seperated
                    );

                    // Pages to redirect to
                    $this->page = array(
                            'register' => '/index.php?action=register',
                            'editusers' => '/index.php?action=mlist',
                            'edituserprofile' => '/index.php?action=profile;u='
                    );

                    // Group ids - admin and guest only.
                     $this->admingroups = array(1);
                    $this->guestgroup = 3;

                    // Connect to db - or supply a connection id to be used instead of making own connection.
                    $this->connect();
            }


        // definition of how to extract id, name, group from a session cookie
        function session_extraction()
        {
            $superCage = Inspekt::makeSuperCage();

            if ($superCage->cookie->keyExists($this->cookie_name)) {
                
                $data = unserialize($superCage->cookie->getRaw($this->cookie_name));
                
                if (is_numeric($data[0]) && preg_match('/^[A-F0-9]{40}$/i', $data[1])) {
                    return $data;
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

                $data[0] = $row['group_id'] + 100;
                
                $sql = "SELECT {$this->field['postgroup']} AS postgroup, {$this->field['additionals']} AS additionals FROM {$this->usertable} WHERE {$this->field['user_id']} = {$row['id']}";
                $result = cpg_db_query($sql, $this->link_id);
                
                $groupdata = mysql_fetch_assoc($result);
                
                // add in post group
                $data[] = $groupdata['postgroup'] + 100;
                
                //  now add in any additional groups
                if ($groupdata['additionals']) {
                
                    $additionals = explode(',', $groupdata['additionals']);
                    
                    foreach ($additionals as $group) {
                        $data[] = $group + 100;
                    }
                }
                
            } else {
                $data[0] = in_array($row['group_id'] , $this->admingroups) ? 1 : 2;
            }
            
            return $data;
        }
                
            function collect_groups()
            {
                    // Use this version to exclude true post based groups
                    //$sql ="SELECT * FROM {$this->groupstable} WHERE minposts=-1";

                    // Use this version to include all SMF groups
                    $sql ="SELECT * FROM {$this->groupstable}";

                    $result = cpg_db_query($sql, $this->link_id);

                    $udb_groups = array(3 => 'Guests');

                    while ($row = mysql_fetch_assoc($result))
                    {
                            $udb_groups[$row[$this->field['grouptbl_group_id']]+100] = utf_ucfirst(utf_strtolower($row[$this->field['grouptbl_group_name']]));
                    }

                    return $udb_groups;
            }

            function login_page()
            {
                    global $CONFIG;

                            if ($session = $this->_session_load()) {
                                $session['old_url'] = $CONFIG['site_url'] . '?board=redirect';
                                $this->_session_save($session);                         
                            }

                    $this->redirect('/index.php?action=login');
            }

                function _session_load() {
                
                    $superCage = Inspekt::makeSuperCage();

                    if ($superCage->cookie->keyExists('PHPSESSID')) {
                
                        $session_id = $superCage->cookie->getEscaped('PHPSESSID');
                    
                        $sql = "SELECT data FROM {$this->sessionstable} WHERE session_id = '$session_id'";

                        $result = cpg_db_query($sql, $this->link_id);

                        if (mysql_num_rows($result)) {
                        
                            list($data) = mysql_fetch_row($result);
                
                            session_name('CPG');
                            session_start();

                            session_decode($data);

                            $session = $_SESSION;

                            return $session;
                        }
                    }
                        
                    return false;
                }
                
                function _session_save($session) {
                
                    $superCage = Inspekt::makeSuperCage();

                    if ($superCage->cookie->keyExists('PHPSESSID')) {
                
                        $session_id = $superCage->cookie->getEscaped('PHPSESSID');

                        $_SESSION = $session;

                        $data = addslashes(session_encode());

                        $sql = "UPDATE {$this->sessionstable} SET data = '$data' WHERE session_id = '$session_id'";

                        cpg_db_query($sql, $this->link_id);
                    }               
                }
                
                
            function logout_page()
            {
                global $CONFIG;
                
                    if ($session = $this->_session_load()) {
                        $sesc = $session['rand_code'];
                        $session['logout_url'] = $CONFIG['site_url'];
                        $this->_session_save($session); 
                    } else {
                        $sesc = '';
                    }

                $this->redirect('/index.php?action=logout&sesc=' . $sesc);
            }

            function view_users() {}
            function view_profile() {}
    }


    // and go !
    $cpg_udb = new cpg_udb;
}
?>