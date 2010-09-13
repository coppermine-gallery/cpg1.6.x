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
    'full_name' => 'Phorum 5',
    'short_name' => 'phorum',
    'support_url' => 'http://www.phorum.org/',
    'full_forum_url_default' => '',
    'full_forum_url_used' => '',
    'relative_path_to_config_file_default' => '../phorum/',
    'relative_path_to_config_file_used' => 'lookfor,common.php',
    'use_post_based_groups_default' => '0',
    'use_post_based_groups_used' => 'radio,1,0',
    );
} else {

    // Switch that allows overriding the bridge manager with hard-coded values
    define('USE_BRIDGEMGR', 1);

    require_once 'bridge/udb_base.inc.php';

    $dir = getcwd();

    chdir($BRIDGE['relative_path_to_config_file']);

    if (!USE_BRIDGEMGR) {
        require_once('../phorum/common.php');
    } else {
        require_once($BRIDGE['relative_path_to_config_file'] . 'common.php');
    }

    chdir($dir);

    class cpg_udb extends core_udb {

        function cpg_udb()
        {
            global $BRIDGE, $CONFIG, $PHORUM;

            $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
            $this->boardurl = $PHORUM['http_path'];
            $this->multigroups = 1;
            $this->group_overrride = 1;

            // Board table names
            $this->table = array(
                'users' => 'users',
                'groups' => 'groups',
                'usergroups' => 'user_group_xref'
            );
        
            // Database connection settings
            $this->db = array(
                'name' => $PHORUM['DBCONFIG']['name'],
                'host' => $PHORUM['DBCONFIG']['server'],
                'user' => $PHORUM['DBCONFIG']['user'],
                'password' => $PHORUM['DBCONFIG']['password'],
                'prefix' =>$PHORUM['DBCONFIG']['table_prefix'] . '_'
            );
            
            // Derived full table names
            $this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
            $this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
            $this->usergroupstable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['usergroups'];
            
            // Table field names
            $this->field = array(
                'username' => 'username', // name of 'username' field in users table
                'user_id' => 'user_id', // name of 'id' field in users table
                'password' => 'password', // name of the password field in the users table
                'email' => 'email', // name of 'email' field in users table
                'regdate' => 'date_added', // name of 'registered' field in users table
                'lastvisit' => 'date_last_active', // last time user logged in
                'active' => 'active', // is user account active?
                'location' => "''", // name of 'location' field in users table
                'website' => "''", // name of 'website' field in users table
                'usertbl_group_id' => 'NOT_USED', // name of 'group id' field in users table
                'grouptbl_group_id' => 'group_id', // name of 'group id' field in groups table
                'grouptbl_group_name' => 'name' // name of 'group name' field in groups table
            );
            
            // Pages to redirect to
            $this->page = array(
                'register' => '/register.php?1',
                'editusers' => '/admin.php?module=users',
                'edituserprofile' => '/profile.php?1,',
            );
            
            // Group ids - admin and guest only.
            $this->admingroups = array(1);
            $this->guestgroup = 3;
            
            // Connect to db - or supply a connection id to be used instead of making own connection.
            $this->connect();
        }

        // Probably not a good idea to override this, come up with a better way later.
        function authenticate()
        {
            global $PHORUM,  $USER_DATA;
            
            if (!$PHORUM['user']['user_id']){
               $this->load_guest_data();
            } else {
                $this->load_user_data(array('id' => $PHORUM['user']['user_id'], 'username' => $PHORUM['user']['username']));
            
            
            $USER_DATA['groups'] = array();
            
            if ($PHORUM['user']['admin']){
                $USER_DATA['groups'][] = 1;
            } else {
                $USER_DATA['groups'][] = 2;
            }   
            
            if ($this->use_post_based_groups){
                foreach ($PHORUM['user']['groups'] as $group){
                    $USER_DATA['groups'][] = $group + 100;
                }
            }
            }
            $user_group_set = '(' . implode(',', $USER_DATA['groups']) . ')';
            
            $USER_DATA = array_merge($USER_DATA, $this->get_user_data($USER_DATA['groups'][0], $USER_DATA['groups'], $this->guestgroup));

            $USER_DATA['has_admin_access'] =  (int) $PHORUM['user']['admin'];
            
            $USER_DATA['can_see_all_albums'] = $USER_DATA['has_admin_access'];
            
            // avoids a template error
            if (!$USER_DATA['user_id']) $USER_DATA['can_create_albums'] = 0;
            
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
            define('USER_CAN_CREATE_ALBUMS', (int)$USER_DATA['can_create_albums']);
            define('USER_ACCESS_LEVEL', (int)$USER_DATA['access_level']);

            
            $this->session_update();
        }
        
        function collect_groups()
        {
            $sql ="SELECT * FROM {$this->groupstable}";
        
            $result = cpg_db_query($sql, $this->link_id);
            
            $udb_groups = array(1=>'Administrators', 2=>'Registered', 3 => 'Guests');
                
            while ($row = mysql_fetch_assoc($result))
            {
                $udb_groups[$row[$this->field['grouptbl_group_id']]+100] = utf_ucfirst(utf_strtolower($row[$this->field['grouptbl_group_name']]));
            }

            return $udb_groups;
        }
        
        function login_page()
        {
            global $CONFIG;
            
            $this->redirect('/login.php');
        }

        function logout_page()
        {
            global $CONFIG;

            $this->redirect('/login.php,logout=1');
        }

        //function view_users() {}
        function view_profile() {}
    }


    // and go !
    $cpg_udb = new cpg_udb;
}
?>