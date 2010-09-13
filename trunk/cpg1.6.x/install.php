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

########################
####Install Main Code###
########################
define('IN_COPPERMINE', true);
define('INSTALL_PHP', true);
define('VERSIONCHECK_PHP', true);

define('INFORMATION', 1);
define('ERROR', 2);
define('CRITICAL_ERROR', 3);

//Define installation steps
define('STEP_INIT_AND_LANG', 1);
define('STEP_VERSIONCHECK', 2);
define('STEP_FOLDER_PERMISSIONS', 3);
define('STEP_SELECT_IMG_PROC', 4);
define('STEP_TEST_IMG_PROC', 5);
define('STEP_DB_INFO', 6);
define('STEP_DB_SELECT', 7);
define('STEP_DB_INIT', 8);
define('STEP_SET_ADMIN', 9);
define('STEP_FINALISE', 10);

// Set global vars
$LINEBREAK = "\r\n"; // For compatibility both on Windows as well as *nix

// Set required versions
$required_php_version = '4.3.0';
$required_mysql_version = '3.23.23';

// Set the parameters that normally get populated by the option form
$displayOption_array = array(
    'errors_only' => 1,
    'do_not_connect_to_online_repository' => 1,
);

// Populate the $CONFIG vars if they are empty
$CONFIG = array(
    'fullpath' => 'albums/',
    'userpics' => 'userpics/',
);

if (!defined('COPPERMINE_VERSION')) { // we need to define the constant COPPERMINE_VERSION that normally get's populated by include/init.inc.php, as we check the repository against that version number
    $handle = @fopen('include/init.inc.php', 'r');
    if ($handle == FALSE) {
        $page_title = 'Could not fopen';
        html_header();
        echo 'Could not read the file inlucde/init.inc.php for reading. Make sure it exists and is readable, then try again.';
        html_footer();
        die;
    }
    $found = 0;
    while (!feof($handle) && $found != 1) {
        $buffer = fgets($handle, 4096);
        if (strpos($buffer, "define('COPPERMINE_VERSION', '") === FALSE) {
            $found = 0;
        } else {
            $found = 1;
            $version_number = trim(str_replace("');", '', str_replace("define('COPPERMINE_VERSION', '", '', $buffer)));
        }
    }
    @fclose($handle);
    if ($version_number != '' && version_compare($version_number, '1.5', '>') == TRUE) {
        define('COPPERMINE_VERSION', $version_number);
    } else {
        $page_title = 'Could not determine version number';
        html_header();
        echo 'Could not extract the Coppermine version number from the file inlucde/init.inc.php. Please download a fresh copy of the Coppermine package.';
        html_footer();
        die;
    }
}
// include Inspekt for sanitization
$incp = get_include_path().PATH_SEPARATOR.dirname(__FILE__).PATH_SEPARATOR.dirname(__FILE__).DIRECTORY_SEPARATOR.'include';
set_include_path($incp);
require_once "include/inspekt.php";
$superCage = Inspekt::makeSuperCage();

//load language
$config = array(); // (array) temp config
$config_file['temporary'] = 'include/config.tmp.php';
$config_file['permanent'] = 'include/config.inc.php';
$error = ''; // (string) holds errors
$temp_data; // holds various data
$page_title = ''; // (string) holds the title of the current installation step

// Check if install has already been done, else load temporary config.
loadTempConfig();

//load language
$language = getLanguage();  // (array) holds the language
$icon = array();
$icon['submit'] = '<img src="images/icons/right.png" border="0" alt="" width="16" height="16" class="icon" />';
$icon['lang'] = '<img src="images/icons/babelfish.png" border="0" alt="" width="16" height="16" class="icon" />';
$icon['test'] = '<img src="images/icons/reload.png" border="0" alt="" width="16" height="16" class="icon" />';
$icon['retry'] = '<img src="images/icons/left.png" border="0" alt="" width="16" height="16" class="icon" />';
$icon['add'] = '<img src="images/icons/add.png" border="0" alt="" width="16" height="16" class="icon" />';


// get installation step
if ($superCage->get->keyExists('step') && is_array($config['steps_done']) 
        &&  in_array($superCage->get->getInt('step'), $config['steps_done'])) 
{
    $step = $superCage->get->getInt('step');
} else {
    if (isset($config['step'])) {
        $step = $config['step'];
    } else {
        $step = STEP_INIT_AND_LANG;
    }
}

// check if we have an update instead of a next step request
if ($superCage->post->keyExists('update_lang')) {
    $step = STEP_INIT_AND_LANG;
}
if ($superCage->post->keyExists('update_im_path')) {
    $step = STEP_SELECT_IMG_PROC;
}
if ($superCage->post->keyExists('update_check_connection')) {
    $step = STEP_DB_INFO;
}
if ($superCage->post->keyExists('update_create_db')) {
    $step = STEP_DB_SELECT;
}

// if installation is done, only show last page
if (isset($config['install_finished'])) {
    $step = STEP_FINALISE;
}


setTmpConfig('steps_done', $step, true);
// check if the installer has already been run succefully
if ($error != '') {
    html_header();
    html_installer_locked();
    html_footer();
    exit;
}

// check if we have new user input and put it in the temp config
if ($superCage->post->keyExists('thumb_method')) {
    setTmpConfig('thumb_method', $superCage->post->getAlnum('thumb_method'));
}
if ($superCage->post->keyExists('im_path') && 
    $superCage->post->getPath('im_path') != 
            (dirname($superCage->server->getPath('SCRIPT_FILENAME') . DIRECTORY_SEPARATOR))) 
{
    $im_path = $superCage->post->getPath('im_path');
    $im_path = str_replace('\\', '/', $im_path);
    if (!preg_match('|[/\\\\]\Z|', $im_path)) {
        $im_path .= '/';
    }
    setTmpConfig('im_path', $im_path);
}

switch($step) {
    case STEP_INIT_AND_LANG:     // Initialisation & natural language selection
        //write a coockie to check in the next step
        setcookie('cpg_install_cookie_check', 'passed', time() + 3600);
        
        $page_title = $language['title_welcome'];
        html_header();
        html_welcome();
        html_footer();
        break;
        
    case STEP_VERSIONCHECK:     // Are all mandatory files there
        // Here we also do an extensive version check of php/mysql + check of javascript/cookies/register_globals
        // the cookie for this check is inserted in the previous step!
        // javascript is tested by altering a hidden form element in the previous step.
        
        //PHP VERSION CHECK
        $php_version = phpversion();
        if (version_compare($required_php_version, $php_version, '>=')) {
            //check if php_version is actualy a version number
            if ($php_version == '') {
                //version could not be detected, show corresponding error
                $error .= sprintf($language['version_undetected'], 'PHP', $required_php_version) . '<br />';
            } else {
                //user is using incompatible php version
                $error .= sprintf($language['version_incompatible'], $php_version, 'PHP', $required_php_version) . '<br />';
            }
        }
        //MySQL VERSION CHECK
        ob_start();
        phpinfo();
        $php_info = ob_get_clean();
        $php_info = stristr($php_info, 'Client API version');
        preg_match('%([1-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})%', $php_info, $matches);
        // preg_match('%<tr><td class="e">Client API version </td><td class="v">([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})%', $php_info, $matches);
        $mysql_version = $matches[1];
        if (version_compare($required_mysql_version, $mysql_version, '>=')) {
            //check if php_version is actualy a version number
            if ($mysql_version == '') {
                //version could not be detected, show corresponding error
                $error .= sprintf($language['version_undetected'], 'MySQL', $required_mysql_version) . '<br />';
            } else {
                //user is using incompatible php version
                $error .= sprintf($language['version_incompatible'], $mysql_version, 'MySQL', $required_mysql_version) . '<br />';
            }
        }
        //COOKIE CHECK
        if ($superCage->cookie->getAlpha('cpg_install_cookie_check') != 'passed') {
            //no cookie found, you're in trouble now :)
            $error .= $language['no_cookie'] . '<br />';
        }
        //JAVASCRIPT CHECK
        if ($superCage->post->getAlpha('javascript_check') != 'passed' && !$config['javascript_test_passed']) {
            //javascripts seems to be disabled, send them the message...
            $error .= $language['no_javascript'] . '<br />';
        } else {
            $config['javascript_test_passed'] = true;
        }
        //REGISTER_GLOBALS CHECK
        if (ini_get('register_globals')) {
            //register_globals is turned on, please turn it of.
            $error .= $language['register_globals_detected'];
            $error .= '[<a href="docs/en/install.htm#install_server_config_register_globals">' . $language['more'] . '</a>]';
            $error .= '<br />';
        }
        
        $page_title = $language['title_file_check'];
        html_header();
        if ($error != '') {
            html_error(false /*false to not include a button*/);
        }
        
        //use versioncheck to check file versions
        require_once('include/versioncheck.inc.php');
        
        $lang_versioncheck_php = $language['versioncheck'];
        
        
        // TODO: need to deal with connection failing and skip this step (and maybe allow a retry)

        // Connect to the repository and populate the array with data from the XML file
        $file_data_array = cpgVersioncheckConnectRepository($displayOption_array);

        $file_data_array = cpg_versioncheckPopulateArray($file_data_array);
        //$file_data_array = cpg_versioncheckPopulateArray($file_data_array, $displayOption_array, $textFileExtensions_array, $imageFileExtensions_array, $CONFIG, $maxLength_array, $lang_versioncheck_php);
        $file_data_count = count($file_data_array);
        // Print the results
        $outputResult = cpg_versioncheckCreateHTMLOutput($file_data_array, $textFileExtensions_array, $lang_versioncheck_php, $majorVersion, $displayOption_array);
        $versioncheck_output = sprintf($lang_versioncheck_php['files_folder_processed'], $outputResult['display'], $outputResult['total'], $outputResult['error']);

        // TODO: end

        html_content($versioncheck_output); 
        html_footer();
        setTmpConfig('step', STEP_FOLDER_PERMISSIONS);
        break;
        
    case STEP_FOLDER_PERMISSIONS:     // Check if the folder permissions are set up properly
        $page_title = $language['title_dir_check'];
        if (!checkPermissions()) {
            // not all permissions were set correctly, or folder doesn't exist
            html_header();
            html_error();
            html_content($language['perm_not_ok']);  // show all checked folders?
            html_footer();
        } else {
            // permissions are set alright, continue
            html_header();
            html_content($language['perm_ok']);  // show all checked folders?
            html_footer();
            setTmpConfig('step', STEP_SELECT_IMG_PROC);
        }
        break;
        
    case STEP_SELECT_IMG_PROC:     // Check available image processors & let user choose
        $page_title = $language['title_imp'];
        $supported_processors = array('gd1' => 'GD1', 'gd2' => "GD2", 'im' => 'ImageMagick');
        $image_processors = checkImageProcessor();
        html_header();
        if ($error != '') {
            html_error();
        } 
        if( !($error != '' && !isset($image_processors['gd2']) && !isset($image_processors['gd1'])) ) {
            setTmpConfig('step', STEP_TEST_IMG_PROC);
        }
            $content = $language['im_packages'] . '<br />';
        $imp_list = '<select name="thumb_method" class="listbox" size="1">';
        if (isset($image_processors['gd2'])) {
            // gd2 is avilable, add it to the list
            $imp_list .= '<option value="gd2">GD2</option>';
            $content .= '<strong>GDlib</strong> Version 2. <br />';
            $selected = 'gd2';
        } elseif (isset($image_processors['gd1'])) {
            // gd1 is avilable, add it to the list
            $imp_list .= '<option value="gd">GD</option>';
            $content .= '<strong>GDlib</strong> Version 1. <br />';
            $selected = 'gd1';
        }
        // check configuration options of im_path
        if (isset($image_processors['im'])) {
            // im is available, add it to the list
            $path = str_replace(array('.exe', '"'), '',$image_processors['im']['path']);
            $path = substr($path, 0, (strlen($path) - 7));
            $imp_list .= '<option value="im">ImageMagick</option>';
            $content .= '<strong>ImageMagick</strong> Version ' . substr($image_processors['im']['version'], 20, 7) . '(at: ' . $path .')';
            if($error == ''){
                $selected = 'im';
            }
            $im_not_found = '';
        } else {
            $im_not_found = '<br /><fieldset style="width:90%" title="ImageMagick">' . $language['im_not_found'] .'</fieldset>';
        }
        // check configuration options
        if (isset($config['thumb_method'])) $selected = $config['thumb_method'];
        $imp_list .= '</select>';
        $imp_list = str_replace($selected . '"', $selected . '" selected="selected"', $imp_list);
        
        // if no image library is found, tell the user so, and select gd2
        if (!isset($selected)) {
            $content .= '<br /><fieldset style="width:90%" title="GD">' . $language['no_gd'] . '</fieldset><br />' . $im_not_found;
        } else {
            $content .= '<br />' . $language['installer_selected'] . ' \'' . $supported_processors[$selected] . '\'<br />' . $imp_list . $im_not_found;
        }
        
        // add IM path box
        if (isset($config['im_path']) 
                && $superCage->post->getPath('im_path') != 
                    (dirname($superCage->server->getPath('SCRIPT_FILENAME') . DIRECTORY_SEPARATOR))) 
        {
            $path = $config['im_path'];
        }
        $content .= '<br />' . $language['im_path'] 
            . '<br /><input type="text" class="textinput" name="im_path" value="' 
            . $path . '" /><button type="submit" class="button" name="update_im_path" value="' 
            . $language['check_path'] . '">' 
            . $icon['test'] . $language['check_path'] . '</button>';
        
        html_content($content);
        html_footer();
        break;
        
    case STEP_TEST_IMG_PROC:     // Check if the image library information has been set up properly - display some basic test images created with the image library selected
        $page_title = $language['title_imp_test'];
        html_header();
        $content = '<center>' . testImageProcessor() . '</center>';
        if ($error != '') {
            html_error();
        } else {
            setTmpConfig('step', STEP_DB_INFO);
        }
        html_content($content);
        html_footer();
        break;
        
    case STEP_DB_INFO:     // Ask user for mysql host, username and password, try to establish a connection using that info
        $page_title = $language['title_mysql_user'];
        // check if we are trying to test the connection
        if ($superCage->post->keyExists('update_check_connection') 
                || (isset($config['db_host']) && $superCage->post->keyExists('db_host'))) 
        {
            // here we do not use the setTmpConfig funtion, as this function always writes the new file
            // and it will be written in the third step...
            $config['db_host'] = $superCage->post->getRaw('db_host');
            $config['db_user'] = $superCage->post->getRaw('db_user');
            setTmpConfig('db_password', $superCage->post->getRaw('db_password'));
            
            // test the connection
            checkSqlConnection(); 
        }
        html_header();
        if ($error != '') {
            html_error();
        } else {
            if (isset($config['db_password'])) {
                setTmpConfig('step', STEP_DB_SELECT);
            }
        }
        html_mysql_start();
        html_footer();
        break;
        
    case STEP_DB_SELECT:     // Ask the user if he wants to use an existing db or if he wants the installer to create a new database. Try to perform the selected choice. Ask for the table prefix
        $page_title = $language['title_mysql_db_sel'];
        // save the db data from previous step
        if ($superCage->post->keyExists('db_host')  && !isset($config['db_populated'])) {
            // here we do not use the setTmpConfig function, as this function always writes the new file
            // and it will be written in the third step...
            $config['db_host'] = $superCage->post->getRaw('db_host');
            $config['db_user'] = $superCage->post->getRaw('db_user');
            setTmpConfig('db_password', $superCage->post->getRaw('db_password'));
            if ($error != '') {
                $error .= '<br />' . sprintf($language['please_go_back'], '<a href="install.php?step=' . ($step - 1) . '">', '</a>');
            }
        } elseif ($superCage->post->keyExists('update_create_db') 
                && trim($superCage->post->getRaw('new_db_name')) != '') 
        {
            // try to create a new database.
            createMysqlDb(trim($superCage->post->getRaw('new_db_name'))); // no /\:*?"<>|.
            // save table prefix
            setTmpConfig('db_prefix', $superCage->post->getRaw('db_prefix')); // no /\:*?"<>|.
        }
        checkSqlConnection(); 
        html_header();
        if ($error != '') {
            html_error();
        } else {
            html_mysql_select_db();
            setTmpConfig('step', STEP_DB_INIT);
        }
        html_footer();
        break;
        
    case STEP_DB_INIT:     // save db_prefix/_name and finally create the tables
        $page_title = $language['title_mysql_pop'];
        // save the db data from previous step
        if ($superCage->post->keyExists('db_name') && !isset($config['db_populated'])) {
            setTmpConfig('db_name', $superCage->post->getRaw('db_name'));
            setTmpConfig('db_prefix', $superCage->post->getRaw('db_prefix'));
        }
        // populate db if not done yet
        $set_populated = false;
        if (!isset($config['db_populated']) && isset($config['db_name'])) {
            $msg = $language['db_populating'];
            if (populateMysqlDb()) {
                $set_populated = true;
            }
        } elseif (!isset($config['db_populated']) && !isset($config['db_name'])) {
            $msg = sprintf($language['not_here_yet'], '<strong><a href="install.php?step=7">', '</a></strong>');
        }

        if (isset($config['db_populated'])) {
            html_header();
            if ($error != '') {
                html_error();
            }
            $temp_data = '<tr><td><br /><br />' . $language['db_alr_populated'] 
                . '<br /><br /></td></tr>';
            html_content($language['db_populating']);
            html_footer();
            setTmpConfig('step', STEP_SET_ADMIN);
        } else {
            if ($set_populated) {
                // this is a lock to see if the db has been created yet 
                setTmpConfig('db_populated', 'done'); 
                setTmpConfig('step', STEP_SET_ADMIN);
            }
            html_header();
            if ($error != '') {
                html_error();
            }
            html_content($msg);
            html_footer();
            break;
        }
        break;
        
    case STEP_SET_ADMIN:     // Ask for coppermine admin username, password and email address
        $page_title = $language['title_admin'];
        if ($superCage->post->keyExists('admin_username')) {
            // check validity of admin details
            $admin_username = $superCage->post->getMatched('admin_username', '/\A\w*\Z/');
            if ($admin_username[0] == '' || !$admin_username) {
                // admin username not correct
                $error .= $language['user_err'] . '<br />';
            } else {
                setTmpConfig('admin_username', $admin_username[0]);
            }
            
            // we need a db connection to use getEscaped()
            checkSqlConnection();
            
            $admin_password = $superCage->post->getEscaped('admin_password');
            $admin_password_verif = $superCage->post->getEscaped('admin_password_verif');
            if ($admin_password != $admin_password_verif || $admin_password == '') {
                // admin password not correct
                $error .= $language['pass_err'] . '<br />';
            } else {
                setTmpConfig('admin_password', $superCage->post->getEscaped('admin_password'));
            }
            $email = $superCage->post->getMatched('admin_email', '/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i');
            $ver_email = $superCage->post->getMatched('admin_email_verif', '/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i');
            if ($email[0] != $ver_email[0] || $email[0] == '') {
                // admin email not correct
                $error .= $language['email_no_match'] . '<br />';
            } else {
                setTmpConfig('admin_email', $email[0]);
            }       
        }
        
        if (isset($config['admin_username']) && isset($config['admin_password']) && isset($config['admin_email']) && !isset($config['install_finished'])) {
            // create admin
            if (createAdmin()) {
                // add finished flag to config
                setTmpConfig('install_finished', 'done');
                // redirect to last page
                header('Location: install.php?step=' . ($step + 1));
                exit;
            }
        }
        html_header();
        if ($error != '') {
            html_error();
        } else {
            if (isset($config['admin_username'])) setTmpConfig('step', STEP_FINALISE);
        }
        html_admin();
        html_footer();
        break;

    case STEP_FINALISE:    // Finally check if everything is set up properly and tell the user so
        // write real config file
        writeConfig();
        
        $page_title = $language['title_finished'];
        html_header();
        if ($error != '') {
            html_error();
        }
        html_finish();
        html_footer();
        
        // delete temp config + created test images!!
        $files_to_remove = array(
            'albums/combined_generated.jpg',
            'albums/giftest_generated.gif',
            'albums/giftest_generated.jpg',
            'albums/jpgtest_generated.jpg',
            'albums/pngtest_generated.jpg',
            'albums/pngtest_generated.png',
            'albums/scaled_generated.jpg',
            'albums/texttest_generated.jpg',
            'include/config.tmp.php',           
        );
        foreach($files_to_remove as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
        
        break;  
}

########################
####Install Templates###
########################

/* html_header()
 * 
 * prints the header
 */
function html_header() 
{
    global $language;

    echo <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache" />
<title>Coppermine - {$language['installation']}</title>
<link rel="stylesheet" href="css/installer.css" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
 <div align="center">
  <div>
  <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
    <tr>
      <td valign="top" style="background-color:#EFEFEF"><img src="images/coppermine-logo.png" width="260" height="60" border="0" alt="" /><br />
      </td>
    </tr>
  </table>

EOT;

    html_stepper();
}
// end function html_header


/* html_footer()
 * 
 * prints the footer
 */
function html_footer() 
{
    echo <<<EOT
  </div>
 </div>
</body>
</html>
<noscript><plaintext>

EOT;
}
// end function html_footer


/* html_stepper()
 * 
 * prints current installation step with links to the next ones
 */
function html_stepper() 
{
    global $config, $page_title, $step, $language;
    
    $old_install = sprintf($language['old_install'],'<a href="install_classic.php">','</a>'); //can be removed if old installer is not needed anymore
    $stepper = '';
    $tpl_step_done = '<td class="stepper_d" onMouseOver="this.className=\'stepper_do\'" onMouseOut="this.className=\'stepper_d\'" onclick="document.location=\'install.php?step=%s\'"><a href="install.php?step=%s" title="Step: %s">%s</a></td>';
    $tpl_step_current = '<td class="stepper_c"><span title="Step: %s">%s</span></td>';
    $tpl_step_notyet = '<td class="stepper_n"><span title="Step: %s">%s</span></td>';
    for($i = 1; $i < 11; $i++) {
        if ($i == $step) {
            $stepper .= sprintf($tpl_step_current, $i, $i);
        } elseif (is_array($config['steps_done']) && in_array($i, $config['steps_done'])) {
            $stepper .= sprintf($tpl_step_done, $i, $i, $i, $i);
        } else {
            $stepper .= sprintf($tpl_step_notyet, $i, $i);
        }
    }
print <<< EOT
    <table class="stepper_table">
        <tr>
            <td>{$stepper}</td>
        </tr>
    </table>
    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
      <tr>
       <td class="tableh1" colspan="2"><h2>{$page_title}</h2>
       </td>
      </tr>
       <tr>
       <td class="tableb" valign="top">{$old_install}
      </td>
    </tr>
    </table>
EOT;
}

/* html_installer_locked()
 * 
 * prints the error when the installer is locked
 */
function html_installer_locked() 
{
    global $language, $error, $icon;
    
print <<< EOT
      <form action="index.php" style="margin:0px;padding:0px" name="cpgform" id="cpgform">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableh1" colspan="2"><h2>{$language['installer_locked']}</h2>
          </td>
         </tr>
         <tr>
          <td class="tableh2" colspan="2"><h3 class="error">{$language['error']}</h3>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2">{$error}
          </td>
         </tr>
         <tr>
          <td colspan="2" align="center" class="tableb">
            <button type="submit" class="button" name="submit" value="{$language['go_to_main']}">{$language['go_to_main']}{$icon['submit']}</button>
          </td>
         </tr>
        </table>
      </form>
EOT;
}

/* html_welcome()
 * 
 * prints the welcome message at the start of installation + language selection
 */
function html_welcome() 
{
    global $language, $error, $icon;
    
    if (!setTmpConfig('step', STEP_VERSIONCHECK)) {
        $next_step = STEP_INIT_AND_LANG;
    } else {
        $next_step = STEP_VERSIONCHECK;
    }
    print <<< EOT
      &nbsp;<br />
      <form action="install.php?step={$next_step}" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableh1" colspan="2">
            <h2>{$language['license']}</h2>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2">
            {$language['license_info']}
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2">
            <iframe src="docs/en/copyrights.htm?hide_nav=1" width="100%" height="300" name="license">
            {$language['cpg_info_frames']}</a>.
            </iframe>
          </td>
         </tr>
       </table>
       &nbsp;<br />
       <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
EOT;
    if ($error != '') {
        print <<< EOT
         <tr>
          <td class="tableh2" colspan="2" align="left"><span class="error">{$language['error']}</span>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2">{$language['error_need_corr']}<br /><strong>{$error}</strong>
          </td>
         </tr>
EOT;
    }
    $getLangSelect = getLangSelect();
    print <<< EOT
         <tr>
          <td class="tableh1" colspan="2"><strong>{$language['select_lang']}</strong>
          </td>
         </tr>
         <tr>
          <td class="tableb" align="center" colspan="2">
              {$getLangSelect}
              <button type="submit" class="button" name="update_lang" value="{$language['change_lang']}">{$icon['lang']}{$language['change_lang']}</button>
          </td>
         </tr>
        <tr>
          <td colspan="2" align="center" class="tableh2"><br />
            <button type="submit" class="button" name="submit" value="{$language['lets_go']}">{$language['lets_go']}{$icon['submit']}</button>
          </td>
         </tr>
    </table>
    <input type="hidden" name="javascript_check" value="failed" />
  </form>
  <!-- This code will check if javascript is enabled -->
      <script type="text/javascript">
      <!--
        document.forms[0][3].value = "passed";
      -->
      </script>
EOT;
}

/* html_content()
 * 
 * prints standard page with variable content
 */
function html_content($content) 
{
    global $language, $step, $temp_data, $icon;
    
    $step_next = $step + 1;
    echo <<<EOT
      <form action="install.php?step={$step_next}" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">{$content}<br /><br /></td>
         </tr>

EOT;
    if ($temp_data != '') {
        echo $temp_data;
    }
    echo <<<EOT
         <tr>
          <td colspan="2" align="center" class="tableh2"><br />
            <button type="submit" class="button" name="submit" value="{$language['continue']}">{$language['continue']}{$icon['submit']}</button>
          </td>
         </tr>
        </table>
      </form>   

EOT;
}
// end function html_content


/* html_error()
 * 
 * prints error message
 *
 * @param boolean $button
 */
function html_error($button = true) 
{
    global $language, $step, $error, $icon;
    
    print <<< EOT
      <form action="install.php?step={$step}" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableh2" colspan="2" align="left"><span class="error">{$language['error']}</span>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2">{$language['error_need_corr']}<br /><strong>{$error}</strong>
          </td>
         </tr>
EOT;
          if ($button) {
            print <<< EOT
            <tr>
              <td colspan="2" align="center" class="tableh2">
                  <button type="submit" class="button" name="try_again" value="{$language['try_again']}">{$icon['retry']}{$language['try_again']}</button>
              </td>
            </tr>
EOT;
          }  
          print <<< EOT
        </table>
     </form>    
EOT;
}

/* html_mysql_start()
 * 
 * prints page with basic MySql config
 */
function html_mysql_start() 
{
    global $language, $step, $mysql_connected, $config, $icon;

    $step_next = $step + 1;
    echo <<<EOT
      <form action="install.php?step={$step_next}" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
          {$language['sect_mysql_info']}<br />
          </td>
         </tr>
         <tr>
          <td colspan="2">&nbsp;</td>
         </tr>

EOT;
    if ($mysql_connected) {
        echo <<<EOT
        <tr>
            <td></td>
            <td align="left"><div class="cpg_message_success">{$language['mysql_succ']}</div></td>
        </tr>   

EOT;
    }
    $db_host     = isset($config['db_host']) ? $config['db_host'] : 'localhost';
    $db_user     = isset($config['db_user']) ? $config['db_user'] : '';
    $db_password = isset($config['db_password']) ? $config['db_password'] : '';
    echo <<<EOT
         <tr>
          <td align="right">{$language['mysql_host']}</td>
          <td><input type="text" class="textinput" name="db_host" value="$db_host" /></td>
         </tr>
         <tr>
          <td align="right">{$language['mysql_username']}</td>
          <td><input type="text" class="textinput" name="db_user" value="$db_user" /></td>
         </tr>
         <tr>
          <td align="right">{$language['mysql_password']}</td>
          <td><input type="password" name="db_password" value="$db_password" /></td>
         </tr>
         <tr>
         <td colspan="2" align="center">
            <button type="submit" class="button" name="update_check_connection" value="{$language['mysql_test_connection']}">{$icon['test']}{$language['mysql_test_connection']}</button>
          </td>
         </tr>

EOT;
    if ($mysql_connected) {
        echo <<<EOT
        <tr>
          <td colspan="2" align="center" class="tableh2">
            <button type="submit" class="button" name="submit" value="{$language['continue']}">{$language['continue']}{$icon['submit']}</button>
          </td>
         </tr>  

EOT;
    } else {
        echo <<<EOT
        <tr>
          <td colspan="2" align="center" class="tableh2">&nbsp;<br /></td>
        </tr>

EOT;
    }
    echo <<<EOT

        </table>
      </form>   

EOT;
}
// end function html_mysql_start


/* html_mysql_select_db()
 * 
 * prints page for db selection
 */
function html_mysql_select_db() 
{
    global $language, $step, $config, $icon;

    $step_next = $step + 1;
    $dbs = getMysqlDbs();
    if (!$dbs) {
        $dbs = '<input type="text" class="textinput" name="db_name" value="' . $config['db_name'] . '" />';
    }
    $db_prefix = isset($config['db_prefix']) ? $config['db_prefix'] : 'cpg15x_';
    echo <<<EOT
      <form action="install.php?step={$step_next}" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
              {$language['sect_mysql_sel_db']}<br />
          </td>
         </tr>
         <tr>
          <td align="right">{$language['mysql_db_name']}</td>
          <td>$dbs</td>
         </tr>
         <tr>
          <td></td>
          <td>{$language['or']}</td>
         </tr>
         <tr>
          <td align="right">{$language['mysql_create_db']}</td>
          <td>
              <input type="text" class="textinput" name="new_db_name" />
              <button type="submit" class="button" name="update_create_db" value="{$language['mysql_create_btn']}">{$icon['add']}{$language['mysql_create_btn']}</button>
          </td>
         </tr>
         <tr>
         <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
          <td align="right">{$language['mysql_tbl_pref']}</td>
          <td>
              <input type="text" class="textinput" name="db_prefix" value="$db_prefix" />
          </td>
         </tr>
         <tr>
          <td colspan="2" align="center" class="tableh2">
            <button type="submit" class="button" name="submit" value="{$language['populate_db']}">{$icon['submit']}{$language['populate_db']}</button>
          </td>
         </tr>
        </table>
      </form>   

EOT;
}
// end function html_mysql_select_db


/* html_admin()
 * 
 * prints page for admin details
 */
function html_admin() 
{
    global $language, $step, $icon;

    $admin_username = isset($config['admin_username']) ? $config['admin_username'] : '';
    $admin_password = isset($config['admin_password']) ? $config['admin_password'] : '';
    // TODO: check verify field in $config to see if checked against password
    $admin_password_verify = isset($config['admin_password']) ? $config['admin_password'] : '';
    $admin_email = isset($config['admin_email']) ? $config['admin_email'] : '';
    // TODO: ditto above
    $admin_email_verify = isset($config['admin_email']) ? $config['admin_email'] : '';
    echo <<<EOT
      <form action="install.php?step=$step" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
          {$language['sect_create_adm']}<br />
          </td>
         </tr>
         <tr>
          <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
          <td align="right">{$language['username']}</td>
          <td><input type="text" class="textinput" name="admin_username" value="$admin_username"  /></td>
         </tr>
         <tr>
          <td align="right">{$language['password']}</td>
          <td><input type="password" name="admin_password" value="$admin_password" /></td>
         </tr>
          <tr>
          <td align="right">{$language['password_verif']}</td>
          <td><input type="password" name="admin_password_verif" value="$admin_password_verify" /></td>
         </tr>
         <tr>
          <td align="right">{$language['email']}</td>
          <td><input type="text" class="textinput" name="admin_email" value="$admin_email" /></td>
         </tr>
          <tr>
          <td align="right">{$language['email_verif']}</td>
          <td><input type="text" class="textinput" name="admin_email_verif" value="$admin_email_verify" /></td>
         </tr>
         <tr>
         <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
          <td colspan="2" align="center" class="tableh2">
            <button type="submit" class="button" name="submit" value="{$language['continue']}">{$language['continue']}{$icon['submit']}</button>
          </td>
         </tr>
        </table>
      </form>   

EOT;
}
// end function html_admin


/* html_finish()
 * 
 * prints last page of installer
 */
function html_finish() 
{
    global $language;

    echo <<<EOT
      <form action="index.php" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
          {$language['ready_to_roll']}<br />
          </td>
         </tr>
         <tr>
         <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
          <td colspan="2" align="center" class="tableh2">
            <input type="submit" value="{$language['finish']}" /><br />
          </td>
         </tr>
        </table>
      </form>   

EOT;
}
// end function html_finish


############################
#####CPGInstall functions###
############################

/* loadTempConfig()
*
* Check if install has already been done, else load temporary config.
* if the unserialize doesn't work, it will be tried again for 10 times before showing an error
*
* @param int $rp
*/
function loadTempConfig($rp=0) 
{
    global $config, $config_file;
    if (file_exists($config_file['permanent'])) {
        $GLOBALS['language'] = getLanguage();
        $GLOBALS['error'] = '<h3>'.$GLOBALS['language']['already_succ'].'</h3>'.$GLOBALS['language']['already_succ_explain'];
        return false;
    } else {
        // read the temporary file
        if (file_exists($config_file['temporary'])) {
            include($config_file['temporary']);
            $GLOBALS['config'] = $install_config;
        } else {
            $GLOBALS['config'] = array();
        }
    }
}

/* setTmpConfig()
 * 
 * Adds a value to the temp config
 *
 * @param string $key
 * @param string $value
 * @param bool $isarray
 *
 * @return bool
 */
function setTmpConfig($key, $value, $isarray = false) 
{
    global $language;
    if (!$isarray) {
        $GLOBALS['config'][$key] = $value;
    } else {
        $GLOBALS['config'][$key][] = $value;
        $GLOBALS['config'][$key] = array_unique($GLOBALS['config'][$key]);
    }
    if (!createTempConfig()) {
        // can't write temp config, set error
        $GLOBALS['error'] .= '<br />' . $language['tmp_conf_error'];
        return false;
    }
    return true;
}

/*
* createTempConfig()
*
* Creates a temporary config file or appends new config vars.
*
* @return bool $success
*/
function createTempConfig() 
{
    global $language, $config, $config_file, $LINEBREAK;
    if ($handle = @fopen($config_file['temporary'], 'w')) {
        //$config = serialize($config);
        //create php array in config
        $fconfig = '<?php' . $LINEBREAK . arrayToString($config, '$install_config') . $LINEBREAK . '?>';
        fwrite($handle, $fconfig);
        fclose($handle);
        return true;
    } else {
        // could not write tmp config, add error
        $GLOBALS['error'] = sprintf($language['cant_write_tmp_conf'], $config_file['temporary']) . ' ' . $language['review_permissions'];
        return false;
    }
}

/*
* arrayToString()
*
* Creates a text version of an array
*
* @param array $array
* @param string $array_name
* @param string $indent
*
* @return string $array_string
*/
function arrayToString($array, $array_name, $indent = '') 
{
    global $LINEBREAK;
    if (is_array($array)) {
        if ($indent == '') {
            $array_string = $indent . $array_name . " = array(" . $LINEBREAK;
        } else {
            $array_string = $indent . "'" .  $array_name . "' => array(" . $LINEBREAK;
        }
        
        foreach($array as $key => $value) {
            if (is_array($value)) {
                $array_string .= arrayToString($value, $key, $indent . '     ');
            } else {
                $array_string .= $indent . "        '$key' => '$value'," . $LINEBREAK;
            }
        }
        if ($indent == '') {
            $array_string .= ');' . $LINEBREAK;
        } else {
            $array_string .= $indent . '),' . $LINEBREAK;
        }
    } else {
        return $array;
    }
    
    return $array_string;
}

/*
* getLanguage()
*
* Tries to find the default lang of the user
*
* @return array $language
*/
function getLanguage() 
{
    global $config, $language;
    
    $superCage = Inspekt::makeSuperCage();
    
    // try to find the users language if we don't have one defined yet
    if (!isset($config['lang'])) {
        include_once('include/select_lang.inc.php');
        setTmpConfig('lang', $USER['lang']);
        loadTempConfig();
    }

    // change default language
    if ($lang = $superCage->post->getMatched('lang_list', '/^[a-z0-9_-]+$/i')) {
        setTmpConfig('lang', $lang[0]);
        loadTempConfig();
    } 
    if ($language == '') {
        include('lang/english.php');
        $lang_en = $lang_install;
        $lang_en_versioncheck = $lang_versioncheck_php;
        if (isset($config['lang']) && file_exists('lang/' . $config['lang'] . '.php')) {
            // include this lang
            include('lang/' . $config['lang'] . '.php');
        }
        // provide fallback
        $language = array_merge($lang_en, $lang_install);
        $language['versioncheck'] = isset($lang_versioncheck_php) ? $lang_versioncheck_php : $lang_en_versioncheck;
    }
    return $language;
}

/*
* getLangSelect()
*
* Returns a select box to choose the default labguage
*
* @return string $lang_select
*/
function getLangSelect() 
{
    global $config, $LINEBREAK;
    
    $dir = opendir('lang/');
    $available_languages = array();
    while ($file = readdir($dir)) {
        $extension = ltrim(substr($file,strrpos($file,'.')),'.');
        $filenameWithoutExtension = str_replace('.' . 'php', '', $file);
        if (is_file('lang/' . $file) && $extension == 'php') {
            $available_languages[] = ucfirst($filenameWithoutExtension);
        }
    }
    closedir($dir);
    natcasesort($available_languages);
    
    $lang_select = '<select name="lang_list" class="listbox" size="1">' . $LINEBREAK;
    foreach($available_languages as $key => $language) {
        $lang_select .= "                       <option " . ((strtolower($config['lang']) == strtolower($language)) ? 'selected="selected"' : '') . " value=\"" . strtolower($language). "\">{$language}</option>" . $LINEBREAK;
    }
    $lang_select .= '               </select>';
    
    return $lang_select;
}

/*
* checkPermissions()
*
* Checks if all folders have the right permissions and exist
*
* @return bool $peCheck
*/
function checkPermissions() 
{
    global $config, $language;
    
    $peCheck = true;
    // If another dir has to be added, you can define as many possible permissions as you want, 
    // but if it only has to be a directory, then use the $only_folders array (will only be checked on existence)
    // Always add the maximum required permission as the first item as the installer will try to chmod the files to that value.
    $files_to_check = array(
        './albums'  => array('777', '755'),
        './albums/userpics' => array('777', '755'),
        './albums/edit'     => array('777', '755'),
        './include' => array('777', '755'),

    );

    // clear the file status cache to make sure we are reading the most recent info of the file.
    clearstatcache();
    
    // start creating table with results
    $temp_data = "<tr><td align=\"center\"><table><tr><td><strong>{$language['directory']}</strong></td><td width=\"10%\"><strong>{$language['status']}</strong></td></tr>";
    foreach($files_to_check as $folder => $perm) {
        // check folder existence
        if (!is_dir($folder)) {
            $peCheck = false;
            $GLOBALS['error'] .= sprintf($language['subdir_called'], $folder) . '<br />';
            $temp_data .= "<tr><td>$folder</td><td><div class=\"cpg_message_error\">{$language['not_exist']}</div></td></tr>";
        } else {
            // try to create a file in the folder
            $test_file = $folder . '/testwritability';
            $file_handle = @fopen($test_file, 'w');
            $mode = substr(sprintf('%o', fileperms($folder)), -3);
            if (!$file_handle) {
                //file could not be created, try to modify the mode
                if (@chmod($folder, (int)("0" . $perm[0]))) {
                    // we have changed the mode, jippie :)
                    clearstatcache();
                    $mode = substr(sprintf('%o', fileperms($folder)), -3);
                    // again try to write a file to the folder
                    $file_handle2 = @fopen($test_file, 'w');
                    if (!$file_handle2) {
                        // not working, admin will have to check this by hand, add error
                        $peCheck = false;
                        $possible_modes_left = implode(' '.$language['or'].' ',array_diff($perm,array($mode)));
                        $GLOBALS['error'] .= sprintf($language['perm_error'], $folder, $mode) . ' ' . $possible_modes_left . '.<br />';
                        $temp_data .= "<tr><td>$folder</td><td><div class=\"cpg_message_error\">{$language['not_writable']}</div></td></tr>";
                    } else {
                        //close handle and remove file
                        fclose($file_handle2);
                        unlink($test_file);
                        $temp_data .= "<tr><td>$folder</td><td><div class=\"cpg_message_success\">{$language['writable']}</div></td></tr>";
                    }
                } else {
                    // could not change mode, add error.
                    $peCheck = false;
                    $possible_modes_left = implode(' '.$language['or'].' ',array_diff($perm,array($mode)));
                    $GLOBALS['error'] .= sprintf($language['perm_error'], $folder, $mode) . ' ' . $possible_modes_left . '.<br />';

                    $temp_data .= "<tr><td>$folder</td><td><div class=\"cpg_message_error\">{$language['not_writable']}</div></tr>";
                }
            } else {
                //close file handle and remove file
                fclose($file_handle);
                unlink($test_file);
                $temp_data .= "<tr><td>$folder</td><td><div class=\"cpg_message_success\">{$language['writable']}</div></td></tr>";
            }
        }   
    }

    $temp_data .= '</table></td></tr>';
    $GLOBALS['temp_data'] = $temp_data;
    return $peCheck;
}

/*
* checkImageProcessor()
*
* Checks which image processors are available and tries to find IM.
*
* @return array $imagesProcessors
*/
function checkImageProcessor() 
{
    if ($im = getIM()) {
        $imagesProcessors['im'] = $im;
    }
    $gd = getGDVersion();
    switch($gd) {
        case 1:
            // check basic functionality
            if (checkBasicGD(1)) {
                $imagesProcessors['gd1'] = 'installed';
            }
            break;
        case 2:
            // check basic functionality
            if (checkBasicGD()) {
                $imagesProcessors['gd2'] = 'installed';
            }
            break;
        default:
            break;
    }
    return $imagesProcessors;
}

/*
* testImageProcessor()
*
* Extensive test on the image processor of choise
*
* @return string $results
*/
function testImageProcessor() 
{
    global $config;
    
    //check which library to use
    switch($config['thumb_method']) {
        case 'gd1':
            $image_processor = new GDtest(1);
            break;
        case 'gd2':
            $image_processor = new GDtest(2);
            break;
        case 'im':
            $image_processor = new IMtest($config['im_path']);
            break;
        default:
            $image_processor = new GDtest(2);
            break;
    }
    $results = createImageTestResult($image_processor->testReadWrite());
    $results .= createImageTestResult($image_processor->testCombineImage());
    $results .= createImageTestResult($image_processor->testTextOnImage());
    $results .= createImageTestResult($image_processor->testScale());
    
    return $results;
}


/**
* getGDVersion()
*
* Get which version of GD is installed, if any. 
* Returns the version (1 or 2) of the GD extension.
* 
* @return int $version
*/
function getGDVersion() 
{
    // check if gd is loaded
    if (!extension_loaded('gd')) {
        $version = 0; 
    } else {
        // Use the gd_info() function if possible.
        if (function_exists('gd_info')) {
            $ver_info = gd_info();
            preg_match('/\d/', $ver_info['GD Version'], $match);
            $version = $match[0];
        } else {
            // get available gd functions to determine the version
            $gd_functions = get_extension_funcs('gd');
            if (in_array('imagecreatetruecolor', $gd_functions)) {
                $version = 2;
            } elseif (in_array('imagecreate', $gd_functions)) {
                $version = 1;
            } else {
                $version = 0;
            }
        }
    }
    return $version;
} 

/*
* checkBasicGD()
*
* Some basic testing if GD is working correctly.
*
* @param int $gd_version
*
* @return bool
*/
function checkBasicGD($gd_version = 2) 
{
    if ($gd_version == 1) {
        $im = imagecreate(1, 1);
        $tst_image = "albums/gd1.jpg";
        imagejpeg($im, $tst_image);
        $size = cpgGetimagesize($tst_image);
        @unlink($tst_image);
        if ($size[2] == 2) {
            return true;
        } else {
            return false;
        }
    } else {
        $im = imagecreatetruecolor(1, 1);
        $tst_image = "albums/gd2.jpg";
        imagejpeg($im, $tst_image);
        $size = cpgGetimagesize($tst_image);
        @unlink($tst_image);
        if ($size[2] == 2) {
            return true;
        } else {
            return false;
        }   
    }
}

/*
* getIM()
*
* Some basic testing if IM is installed & working correctly.
*
* @return array $im
*/
function getIM() 
{
    global $config, $language;
    
    $im_paths = array(
        '/imagemagick/convert',
        '/imagemagick/bin/convert',
        '/local/bin/convert',
        '/local/bin/imagemagick/convert',
        '/local/bin/imagemagick/bin/convert',
        '/usr/local/convert',
        '/usr/local/bin/convert',
        '/usr/local/bin/imagemagick/convert',
        '/usr/local/bin/imagemagick/bin/convert',
        '/usr/bin/convert',
        'C:/Program Files/ImageMagick/convert.exe',
        'C:/ImageMagick/convert.exe',
        '/usr/bin/imagemagick/convert',
        '/usr/bin/imagemagick/bin/convert',
        '/usr/sbin/convert',
        '/bin/convert',
        '/bin/imagemagick/convert',
        '/bin/imagemagick/bin/convert',
        'convert'
        );
    // add trailing slash if necessary
    if (!empty($config['im_path']) && !preg_match('|[/\\\\]\Z|', $config['im_path'])) {
        $config['im_path'] .= '/';
    }
    // add user defined path to paths array
    if (!empty($config['im_path'])) {
        // add unix version
        $im_paths[] = $config['im_path'] . 'convert';
        // add windows version
        $im_paths[] = '"' . $config['im_path'] . 'convert.exe"';
        // both versions are added so we can't make mistakes on finding which OS is used.
    }
    
    // check if IM is on default path
    foreach ($im_paths as $key => $path) {
        if (stristr($path, ':/')) {
            $path = '"' . $path . '"';
        }
        $command = "$path --version";
        // execute an im command to test if it is working
        @exec($command, $exec_output, $exec_retval);
        $version = @$exec_output[0] . @$exec_output[1];

        if ($version != '') {
            // IM is found and working.
            // check for spaces in the path (we don't want those...)
            if (preg_match('/ /', $path)) {
                $path = str_replace(array('.exe', '"'), '',$path);
                $path = substr($path, 0, (strlen($path) - 7));
                $GLOBALS['error'] = sprintf($language['im_path_space'], $path);
                return false;
            }
            // do a real image conversion check
            $tst_image = "albums/userpics/im.gif";
            exec ("$path images/coppermine-logo.png $tst_image", $output, $result);
            $size = cpgGetimagesize($tst_image);
            @unlink($tst_image);
            $im_installed = ($size[2] == 1);
            // convert tool found, but did not work as expected
            if (!$im_installed) {
                $GLOBALS['error'] = sprintf($language['im_no_convert_ex'], $path);
                return false;
            }
            // convert tool returned errors, add them to our error list
            if ($result && count($output)) {
                $GLOBALS['error'] = $language['conv_said'] . '<br /></pre>';
                foreach($output as $line) {
                    $GLOBALS['error'] .= htmlspecialchars($line);
                }
                $GLOBALS['error'] .= "</pre>";
                return false;
            }
            
            // all went fine, return version info
            $im = array(
                'version' => $version, 
                'path' => $path
            );
            return $im;
            break;
        }
    }
    return false;
    
}


/*
* checkSqlConnection()
*
* Tests if we can create a MySql connection
*
* @return bool
*/
$mysql_connection;          // (mysql_connection) connection to the db
$mysql_connected = false;   // (bool) connected to the db?
function checkSqlConnection() 
{
    global $config, $language;
    // we only need 1 connection
    if ($GLOBALS['mysql_connected']) {
        return true;
    } else {
        if (isset($config['db_name'])) {
            $db_name = $config['db_name'];
        } else {
            $db_name = '';
        }

       // check for MySql support of PHP
        if (!function_exists('mysql_connect')) {
            $GLOBALS['error'] = $language['no_mysql_support'];
            return false;

        // try to connect with given auth parameters
        } elseif (! $connect_id = @mysql_connect($config['db_host'], 
                $config['db_user'], $config['db_password'])) 
        {
            $GLOBALS['error'] = $language['no_mysql_conn'] . '<br />' 
                . $language['mysql_error'] . mysql_error();
            return false;

        // if a database is specified, try to select it.
        } elseif ($db_name != '') {
            if ( !mysql_select_db($db_name, $connect_id)) {
                $GLOBALS['error'] = sprintf($language['mysql_wrong_db'], $db_name);
                return false;
            }
        }
        // set our connection id
        $GLOBALS['mysql_connection'] = $connect_id;
        $GLOBALS['mysql_connected'] = true;
        return true;
    }
}

/*
* getMysqlDbs()
*
* Gets all available mysql databases to create coppermine in.
* If users doesn't have permission, it returns false.
*
* @return string $db_select
*/
function getMysqlDbs() 
{
    // Get a connection with the db
    if (!checkSqlConnection()) {
        return false;
    }
    // get a list of db's
    if ($db_list = @mysql_list_dbs($GLOBALS['mysql_connection'])) {
        // create dropdown box
        $db_select = '<select name="db_name" class="listbox" size="1">';
        while ($row = mysql_fetch_object($db_list)) {
            $db = $row->Database;
            if (in_array($db, array('information_schema', 'mysql', 'test'))) {
                continue;
            }
            if (isset($config['db_name']) && $db == $config['db_name']) {
                $sel = ' selected="selected"'; 
            } else { 
                $sel = '';
            }
            $db_select .= '<option name="' . $db . '"' . $sel . ' >' . $db . '</option>';
        }
        $db_select .= '</select>';
        return $db_select;
    } else {
        // probably no permission to do this.
        //$GLOBALS['error'] = $language['mysql_no_sel_dbs'] . '<br />' . $language['mysql_error'] . '<br />' . mysql_error($GLOBALS['mysql_connection']);
        return false;
    }
}

/*
* createMysqlDb()
*
* Tries to create CPG database.
* If users doesn't have permission, it returns false.
*
* @return bool
*/
function createMysqlDb($db_name) 
{
    global $language;
    // Get a connection with the db
    if (!checkSqlConnection()) {
        return false;
    }
    $query = 'CREATE DATABASE ' . $db_name;
    // try to create new db
    if (!mysql_query($query, $GLOBALS['mysql_connection'])) {
        $GLOBALS['error'] = $language['mysql_no_create_db'] . '<br />' 
            . $language['mysql_error'] . '<br />' . mysql_error($GLOBALS['mysql_connection']);
        return false;
    } else {
        setTmpConfig('db_name', $db_name);
    }
    return true;
}

/*
* populateMysqlDb()
*
* Executes sql file commands in db
*
* @return bool
*/
function populateMysqlDb() 
{
    global $config, $language;
    
    // define some vars so we can easily find them at the top and change if needed.
    $db_schema = "sql/schema.sql";
    $db_basic = "sql/basic.sql";
    
    // check if all config values are present.
    if (!isset($config['thumb_method'])) { 
        $GLOBALS['error'] = $language['no_thumb_method'];
        return false;
    }
    if (@get_magic_quotes_runtime()) {
        set_magic_quotes_runtime(0);
    }
    // Get a connection with the db.
    if (!checkSqlConnection()) {
        return false;
    }
    // Check if we can read the db_schema file
    if (($sch_open = fopen($db_schema, 'r')) === FALSE) {
        $GLOBALS['error'] = sprintf($language['sql_file_not_found'], $db_schema);
        return false;
    } else {
        $sql_query = fread($sch_open, filesize($db_schema));
        // Check if we can read the db_basic file
        if (($bas_open = fopen($db_basic, 'r')) === FALSE) {
            $GLOBALS['error'] = sprintf($language['sql_file_not_found'], $db_basic);
            return false;
        } else {
            $sql_query .= fread($bas_open, filesize($db_basic));
        }
    }
    // Create our fantastic cage object
    $superCage = Inspekt::makeSuperCage();
    require_once('include/sql_parse.php');
    // Get gallery directory
    $possibilities = array('REDIRECT_URL', 'PHP_SELF', 'SCRIPT_URL', 'SCRIPT_NAME','SCRIPT_FILENAME');
    foreach ($possibilities as $test) {
        if ($matches = $superCage->server->getMatched($test, '/([^\/]+\.php)$/')) {
            $CPG_PHP_SELF = $superCage->server->getEscaped($test);
            break;
        }
    }
    
    $gallery_dir = strtr(dirname($CPG_PHP_SELF), '\\', '/');
    if ($gallery_dir == '.') {
        $gallery_dir = '';
    }

    $protocol = $superCage->server->keyExists('HTTPS') ? 'https' : 'http';
    $gallery_url_prefix = $protocol . '://' . $superCage->server->getEscaped('HTTP_HOST') 
        . $gallery_dir . (substr($gallery_dir, -1) == '/' ? '' : '/');

    // Set configuration values for image package
    $sql_query .= "REPLACE INTO CPG_config VALUES ('thumb_method', '{$config['thumb_method']}');\n";
    if ($config['im_path']) {
        $sql_query .= "REPLACE INTO CPG_config VALUES ('impath', '{$config['im_path']}');\n";
    }
    $sql_query .= "REPLACE INTO CPG_config VALUES ('ecards_more_pic_target', '$gallery_url_prefix');\n";

    // Enable silly_safe_mode if test has shown it is not configured properly
    if (checkSillySafeMode()) {
        $sql_query .= "REPLACE INTO CPG_config VALUES ('silly_safe_mode', '1');\n";
    }
    // Test write permissions for main dir
    if (!is_writable('.')) {
        $sql_query .= "REPLACE INTO CPG_config VALUES ('default_dir_mode', '0777');\n";
        $sql_query .= "REPLACE INTO CPG_config VALUES ('default_file_mode', '0666');\n";
    }
    // Update table prefix
    $sql_query = preg_replace('/CPG_/', $config['db_prefix'], $sql_query);

    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');
    
    $GLOBALS['temp_data'] .= '<tr><td>';
    foreach($sql_query as $q) {
        $is_table = false;
        //check if we are creating a table so we can add it to the output
        if (preg_match('/(CREATE TABLE IF NOT EXISTS `?|CREATE TABLE `?)([\w]*)`?/i', $q, $table_match)) {
            $table = $table_match[2];
            $is_table = true;
        }
        if (! mysql_query($q, $GLOBALS['mysql_connection'])) {
            $GLOBALS['error'] = $language['mysql_error'] . mysql_error($GLOBALS['mysql_connection']) 
                . ' ' . $language['on_q'] . " '$q'";
            if ($is_table) {
                $GLOBALS['temp_data'] .= "<br />" . sprintf($language['create_table'], $table) 
                    . '&nbsp;&nbsp;&nbsp;&nbsp;' . $language['status'] . ':... ' . $language['nok'];
            }
            return false;
        } else {
            if ($is_table) {
                $GLOBALS['temp_data'] .= "<br />" . sprintf($language['create_table'], $table)
                    . '&nbsp;&nbsp;&nbsp;&nbsp;' . $language['status'] . ':... ' . $language['ok'];
            }
        }
    }
    $GLOBALS['temp_data'] .= '<br /><br /></td></tr>';
    return true;
}

/*
* createAdmin()
*
* Creates the Coppermine admin.
*
* @return bool
*/
function createAdmin() 
{
    global $config, $language;
    
    if (!isset($config['admin_username']) || $config['admin_username'] == '') { $GLOBALS['error'] = $language['no_admin_username'];     return false;}
    if (!isset($config['admin_password']) || $config['admin_password'] == '') { $GLOBALS['error'] = $language['no_admin_password'];     return false;}
    if (!isset($config['admin_email']) || $config['admin_email'] == '')  { $GLOBALS['error'] = $language['no_admin_email'];     return false;}
    
    // Insert the admin account
    $sql_query .= "INSERT INTO {$config['db_prefix']}users "
        . "(user_group, user_active, user_name, user_password, user_lastvisit, "
        . " user_regdate, user_group_list, user_email, user_profile1, user_profile2, user_profile3, "
        . " user_profile4, user_profile5, user_profile6, user_actkey ) "
        . "VALUES "
        . "(1, 'YES', '{$config['admin_username']}', "
        . " md5('{$config['admin_password']}'), NOW(), NOW(), '', "
        . " '{$config['admin_email']}', '', '', '', '', '', '', '');\n";

    // Set gallery admin mail
    $sql_query .= "REPLACE INTO CPG_config VALUES ('gallery_admin_email', '{$config['admin_email']}');\n";

// Update table prefix
    $sql_query = preg_replace('/CPG_/', $config['db_prefix'], $sql_query);

    require_once('include/sql_parse.php');
    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');
    // Get a connection with the db.
    if (!checkSqlConnection()) {
        return false;
    }
    foreach($sql_query as $q) {
        if (! mysql_query($q, $GLOBALS['mysql_connection'])) {
            $GLOBALS['error'] = $language['mysql_error'] . mysql_error($GLOBALS['mysql_connection']) . ' ' . $language['on_q'] . " '$q'";
            return false;
        }
    }
    return true;
}


/*
* checkSillySafeMode()
*
* Test if safe mode is misconfigured
*
* @return bool
*/
function checkSillySafeMode() 
{
    $test_file = "albums/userpics/dummy/dummy.txt";
    @mkdir(dirname($test_file), 0755);
    $fd = @fopen($test_file, 'w');
    if (!$fd) {
        @rmdir(dirname($test_file));
        return true;
    }
    fclose($fd);
    @unlink($test_file);
    @rmdir(dirname($test_file));
    return false;
}

/*
* finalCheck()
*
* Check if everything is configured correctly
*
* @return array $results
*/
function writeConfig() 
{
    global $config, $language;
    
    // this is used to prevent screwing up the color coding in my editor.
    $end_php_tag = '?>';
    $config = <<<EOT
<?php
// Coppermine configuration file
// MySQL configuration
\$CONFIG['dbserver'] =                         '{$config['db_host']}';        // Your database server
\$CONFIG['dbuser'] =                         '{$config['db_user']}';        // Your mysql username
\$CONFIG['dbpass'] =                         '{$config['db_password']}';                // Your mysql password
\$CONFIG['dbname'] =                         '{$config['db_name']}';        // Your mysql database name


// MySQL TABLE NAMES PREFIX
\$CONFIG['TABLE_PREFIX'] =                '{$config['db_prefix']}';
$end_php_tag
EOT;
    //write config file to disk
    if ($fd = @fopen('include/config.inc.php', 'wb')) {
        fwrite($fd, $config);
        fclose($fd);
    } else {
        $GLOBALS['error'] = '<hr /><br />' . $language['unable_write_config'] . '<br />';
    }
}

/*
 * function createImageTestResult()
 *
 * Creates a table to show the results of a test
 *
 * @param array $results
 *
 * @return string $tables
 */
function createImageTestResult($results) 
{
    global $config, $language;
    
    $tables = '';

    foreach($results as $test_title => $test_result) {
        if (isset($test_result['error'])) {
            //there was an error, show this to the user
            $result_error_tpl = <<<EOT
    <table>
        <tr>
            <th colspan="3" align="left">{$language[$test_title]}</th>
        </tr>
        <tr>
            <td>{$language[$test_result['error']]}</td>
            <td>{$language['generated_image']}</td>
            <td>{$language['reference_image']}</td>
        </tr>
    </table>
    <br />
EOT;
            $tables .= $result_error_tpl;
            $GLOBALS['error'] = $language['imp_test_error'];
        } else {
            //all went as it had to, put info on template
            $generated_size = cpgGetimagesize($test_result['created']);
            $generated_size = $generated_size[0] . 'x' . $generated_size[1];
            $reference_size = cpgGetimagesize($test_result['original']);
            $reference_size = $reference_size[0] . 'x' . $reference_size[1];
            $result_ok_tpl = <<<EOT
    <table>
        <tr>
            <th colspan="2" align="left">{$language[$test_title]}</th>
        </tr>
        <tr>
            <td width="200px"><img src="{$test_result['created']}" /></td>
            <td><img src="{$test_result['original']}" /></td>
        </tr>
        <tr>
            <td>{$language['generated_image']}</td>
            <td>{$language['reference_image']}</td>
        </tr>
        <tr>
            <td>$generated_size {$language['pixels']}</td>
            <td>$reference_size {$language['pixels']}</td>
        </tr>
    </table>
    <br />
EOT;
            $tables .= $result_ok_tpl;
        }
    }
    
    return $tables;
}   

/*
 * function cpgGetimagesize()
 *
 * Try to get the size of an image, this is custom built as some webhosts disable this function or do weird things with it
 *
 * @param string $image
 * @param boolean $force_cpg_function
 *
 * @return array $size
 */
function cpgGetimagesize($image, $force_cpg_function = false) 
{
    if (!function_exists('getimagesize') || $force_cpg_function) {  
        //custom function borrowed from http://www.wischik.com/lu/programmer/get-image-size.html
        $f = @fopen($image, 'rb'); 
        if ($f === false) {
            return false;
        } 
        fseek($f, 0, SEEK_END); 
        $len = ftell($f);
        if ($len < 24) {
            fclose($f); 
            return false;
        }
        fseek($f, 0); 
        $buf = fread($f, 24);
        if ($buf === false) {
            fclose($f); 
            return false;
        }
        if (ord($buf[0]) == 255 && ord($buf[1]) == 216 && ord($buf[2]) == 255 && ord($buf[3]) == 224 && $buf[6] == 'J' && $buf[7] == 'F' && $buf[8] == 'I' && $buf[9] == 'F') { 
            $pos=2; 
            while (ord($buf[2]) == 255) {
                if (ord($buf[3]) == 192 || ord($buf[3]) == 193 || ord($buf[3]) == 194 || ord($buf[3]) == 195 || ord($buf[3]) == 201 || ord($buf[3]) == 202 || ord($buf[3]) == 203) {
                    break; // we've found the image frame
                }
                $pos += 2 + (ord($buf[4]) << 8) + ord($buf[5]);
                if ($pos+12>$len) {
                    break; // too far
                }
                fseek($f,$pos); 
                $buf = $buf[0] . $buf[1] . fread($f,12);
            }
        }
        fclose($f);
    
        // GIF:
        if ($buf[0] == 'G' && $buf[1] == 'I' && $buf[2] == 'F') {
            $x = ord($buf[6]) + (ord($buf[7])<<8);
            $y = ord($buf[8]) + (ord($buf[9])<<8);
            $type = 1;
        }
    
        // JPEG:
        if (ord($buf[0]) == 255 && ord($buf[1]) == 216 && ord($buf[2]) == 255) { 
            $y = (ord($buf[7])<<8) + ord($buf[8]);
            $x = (ord($buf[9])<<8) + ord($buf[10]);
            $type = 2;
        }
    
        // PNG:
        if (ord($buf[0]) == 0x89 && $buf[1] == 'P' && $buf[2] == 'N' && $buf[3] == 'G' && ord($buf[4]) == 0x0D && ord($buf[5]) == 0x0A && ord($buf[6]) == 0x1A && ord($buf[7]) == 0x0A && $buf[12] == 'I' && $buf[13] == 'H' && $buf[14] == 'D' && $buf[15] == 'R') {
            $x = (ord($buf[16])<<24) + (ord($buf[17])<<16) + (ord($buf[18])<<8) + (ord($buf[19])<<0);
            $y = (ord($buf[20])<<24) + (ord($buf[21])<<16) + (ord($buf[22])<<8) + (ord($buf[23])<<0);
            $type = 3;
        }
    
        if (!isset($x, $y, $type)) {
            return false;
        }
        return array($x, $y, $type, 'height="' . $x . '" width="' . $y . '"');
    } else {
        $size = @getimagesize($image);
        if (!$size) {
            //false was returned
            return cpgGetimagesize($image, true/*force the use of custom function*/);
        }elseif (!isset($size[0]) || !isset($size[1])) {
            //webhost possibly changed getimagesize functionality
            return cpgGetimagesize($image, true/*force the use of custom function*/);
        }else {
            //function worked as expected, return the results
            return $size;
        }
    }

}

########################
###### GDtest Class ####
########################
class GDtest
{
    var $version = 1; //version of the GD lib to use
    var $image_path = 'albums/'; //path to store temp images
    
    /*
     * function GDtest()
     *
     * Initializes the class with the version of GD to use.
     *
     * @param int $version
     * @param string $image_path
     */
    function GDtest($version = 1, $image_path = '')
    {
        $this->version = $version;
        if ($image_path != '') {
            $this->image_path = $image_path;
        }
    }
    
    /*
     * function testRead()
     *
     * Do basic tests on reading and writing file formats
     *
     * @return array $results
     */
    function testReadWrite()
    {
        //create gif test image
        $test_gif = imagecreatefromgif ('images/install/giftest.gif');
        if (!$test_gif) {
            //put error in array
            $results['read_gif'] = array(
                    'error'     => 'read_error',
                );
        } else {
            if (imagegif ($test_gif, $this->image_path . 'giftest_generated.gif')) {
                //put results in array
                $results['read_gif'] = array(
                    'original'  => 'images/install/giftest.gif',
                    'created'   => $this->image_path . 'giftest_generated.gif',
                );
            }else {
                //put error in array
                $results['read_gif'] = array(
                    'error'     => 'write_error',
                );
            }
        }
        @imagedestroy($test_gif);
        
        //create png test image
        $test_png = imagecreatefrompng('images/install/pngtest.png');
        if (!$test_png) {
            //put error in array
                $results['read_png'] = array(
                    'error'     => 'read_error',
                );
        } else {
            if (imagepng($test_png, $this->image_path . 'pngtest_generated.png')) {
                //put results in array
                $results['read_png'] = array(
                    'original'  => 'images/install/pngtest.png',
                    'created'   => $this->image_path . 'pngtest_generated.png'
                );
            } else {
                //put error in array
                $results['read_png'] = array(
                    'error'     => 'write_error',
                );
                
            }
        }
        @imagedestroy($test_png);
        
        //create jpg test image
        $test_jpg = imagecreatefromjpeg('images/install/jpgtest.jpg');
        if (!$test_jpg) {
            //put error in array
                $results['read_jpg'] = array(
                    'error'     => 'read_error',
                );
        } else {
            if (imagejpeg($test_jpg, $this->image_path . 'jpgtest_generated.jpg')) {
                //put results in array
                $results['read_jpg'] = array(
                    'original'  => 'images/install/jpgtest.jpg',
                    'created'   => $this->image_path . 'jpgtest_generated.jpg',
                );
            }else {
                //put error in array
                $results['read_jpg'] = array(
                    'error'     => 'write_error',
                );
                
            }
        }
        @imagedestroy($test_jpg);
        
        return $results;
    }
    
    /*
     * function testCombineImage()
     *
     * test combining of images
     *
     * @return array $results
     */
    function testCombineImage()
    {
        $source_a = imagecreatefromjpeg('images/install/jpgtest.jpg');
        $source_b = imagecreatefromgif ('images/install/combine_b.gif');
        imagecopymerge($source_a, $source_b, 66, 1, 0, 0, imagesx($source_b), imagesy($source_b), 100);
        
        if (imagejpeg($source_a, $this->image_path . 'combined_generated.jpg')) {
            //put results in array
            $results['combine'] = array(
                'original'  => 'images/install/combined.jpg',
                'created'   => $this->image_path . 'combined_generated.jpg',
            );
        }else {
            //put error in array
            $results['combine'] = array(
                'error'     => 'write_error',
            );
        }
        @imagedestroy($source_a);
        @imagedestroy($source_b);
        
        return $results;
    }
    
    /*
     * function testTextOnImage()
     *
     * test adding text to images
     *
     * @return array $results
     */
    function testTextOnImage()
    {
        $text = '2008 © Susanna Thornton';
        $font = 'images/fonts/LiberationSans-Regular.ttf';
        $source = imagecreatefromjpeg('images/install/jpgtest.jpg');
        $front_color = imagecolorallocate($source, 255, 255, 255);
        
        imagettftext($source, 9/*size*/, 0/*angle*/, 55/*left*/, 110/*top*/, $front_color/*color*/, $font, $text);
        if (imagejpeg($source, $this->image_path . 'texttest_generated.jpg')) {
            //put results in array
            $results['text'] = array(
                'original'  => 'images/install/texttest.jpg',
                'created'   => $this->image_path . 'texttest_generated.jpg',
            );
        }else {
            //put error in array
            $results['text'] = array(
                'error'     => 'write_error',
            );
        }
        @imagedestroy($source_a);
        
        return $results;
    }
    
    /*
     * function testScale()
     *
     * test scaling of images
     *
     * @return array $results
     */
     function testScale()
    {
        $image = imagecreatefromjpeg('images/install/jpgtest.jpg');
        if ($this->version == 2) {
            $generated = @imagecreatetruecolor(100, 57);
        } else {
            $generated = imagecreate(100, 57);
        }
        $final = @imagecopyresampled($generated, $image, 0, 0, 0, 0, 100, 57, 200, 113);
        if (!$final) {
            $final = @imagecopyresized($generated, $image, 0, 0, 0, 0, 100, 57, 200, 113);
        }
        imagejpeg($generated, $this->image_path . 'scaled_generated.jpg');
        
        if ($final) {
            //put results in array
            $results['scale'] = array(
                'original'  => 'images/install/scaled.jpg',
                'created'   => $this->image_path . 'scaled_generated.jpg',
            );
        } else {
            //put error in array
            $results['scale'] = array(
                'error'     => 'scale_error',
            );
        }
        
        return $results;
     }
    
}

########################
###### IMtest Class ####
########################
class IMtest
{
    var $image_path = 'albums/'; //path to store temp images
    var $IMpath = ''; //path to imageMagick
    var $CPGpath = ''; //path to root cpg folder
    
    /*
     * function IMtest()
     *
     * Initializes the class.
     *
     * @param string $IMpath
     * @param string $image_path
     */
    function IMtest($IMpath, $image_path = '')
    {
        // add trailing slash if necessary
        if (!empty($IMpath) && !preg_match('|[/\\\\]\Z|', $IMpath)) {
            $IMpath .= '/';
        }
        $this->IMpath = $IMpath . 'convert';
        if ($image_path != '') {
            $this->image_path = $image_path;
        }
        $this->CPGpath = realpath('./');
        $this->CPGpath = str_replace('\\', '/', $this->CPGpath);
    }
    
    /*
     * function createImagePath()
     *
     * Creates the path to the images, $dest is to tell
     * if we are using the destination path 
     *
     * @param string $image_path
     * @param boolean $dest
     *
     * @return string $path
     */
    function createImagePath($image_path, $dest = false)
    {
        if ($dest) {
            $path = $this->image_path . $image_path;
        } else {
            $path = $image_path;
        }
        return $path;
    }
    
    /*
     * function testRead()
     *
     * Do basic tests on reading and writing file formats
     *
     * @return array $results
     */
    function testReadWrite()
    {
        $output = array();
        
        //create gif test image
        $gif_command = '' . $this->IMpath . ' ' . $this->createImagePath('images/install/giftest.gif') 
            . ' ' . $this->createImagePath('giftest_generated.jpg', true);
        exec($gif_command, $output, $retval);
        if ($retval) {
            //an error occured, add to array
            $results['read_gif'] = array(
                    'error'     => 'read_error',
                );
        } else {
            //all went fine
            $results['read_gif'] = array(
                    'original'  => 'images/install/giftest.gif',
                    'created'   => $this->image_path . 'giftest_generated.jpg',
                );
        }
        
        //create png test image
        $png_command = $this->IMpath . ' ' . $this->createImagePath('images/install/pngtest.png') 
            . ' ' . $this->createImagePath('pngtest_generated.jpg', true);
        exec($png_command, $output, $retval);
        
        if ($retval) {
            //an error occured, add to array
            $results['read_png'] = array(
                    'error'     => 'read_error',
                );
        } else {
            //all went fine
            $results['read_png'] = array(
                    'original'  => 'images/install/pngtest.png',
                    'created'   => $this->image_path . 'pngtest_generated.jpg',
                );
        }
        
        //create jpg test image
        $jpg_command = $this->IMpath . ' ' . $this->createImagePath('images/install/jpgtest.jpg') 
            . ' ' . $this->createImagePath('jpgtest_generated.jpg', true);
        exec($jpg_command, $output, $retval);
        
        if ($retval) {
            //an error occured, add to array
            $results['read_jpg'] = array(
                    'error'     => 'read_error',
                );
        } else {
            //all went fine
            $results['read_jpg'] = array(
                    'original'  => 'images/install/jpgtest.jpg',
                    'created'   => $this->image_path . 'jpgtest_generated.jpg',
                );
        }

        return $results;
    }
    
    /*
     * function testCombineImage()
     *
     * test combining of images
     *
     * @return array $results
     */
    function testCombineImage()
    {
        $source_a = 'images/install/jpgtest.jpg';
        $source_b = 'images/install/combine_b.gif';
        
        $combine_command = $this->IMpath . ' ' . $this->createImagePath($source_a) 
            . ' ' . $this->createImagePath($source_b) . ' -geometry +66+1   -composite   ' 
            . $this->createImagePath('combined_generated.jpg', true);
        
        exec($combine_command, $output, $retval);   
        if ($retval) {
            //an error occured, add to array
            $results['combine'] = array(
                    'error'     => 'combine_error',
                );
        } else {
            //all went fine
            $results['combine'] = array(
                    'original'  => 'images/install/combined.jpg',
                    'created'   => $this->image_path . 'combined_generated.jpg',
                );
        }
        
        return $results;
    }
    
    /*
     * function testTextOnImage()
     *
     * test adding text to images
     *
     * @return array $results
     */
    function testTextOnImage()
    {
        $text = '2008 � Susanna Thornton';
        $font = 'images/fonts/LiberationSans-Regular.ttf';
        $source = 'images/install/jpgtest.jpg';
        
        $text_command = '' . $this->IMpath . ' ' . $this->createImagePath($source) 
            . ' -fill white -font ' . $font . ' -pointsize 12 -draw "text  50,110 \'' 
            . $text . '\'" ' . $this->createImagePath('texttest_generated.jpg', true);  
        
        exec($text_command, $output, $retval);
        if ($retval) {
            //an error occured, add to array
            $results['text'] = array(
                    'error'     => 'text_error',
                );
        } else {
            //all went fine
            $results['text'] = array(
                    'original'  => 'images/install/texttest.jpg',
                    'created'   => $this->image_path . 'texttest_generated.jpg',
                );
        }

        return $results;
    }
    
    /*
     * function testScale()
     *
     * test scaling of images
     *
     * @return array $results
     */
    function testScale()
    {  
        $scale_command = $this->IMpath . ' -geometry 100x57 ' 
            . $this->createImagePath('images/install/jpgtest.jpg') . ' ' 
            . $this->createImagePath('scaled_generated.jpg', true);
        exec($scale_command, $output, $retval);
        
        if ($retval) {
            //put error in array
            $results['scale'] = array(
                'error'     => 'scale_error',
            );
        } else {
            //put results in array
            $results['scale'] = array(
                'original'  => 'images/install/scaled.jpg',
                'created'   => $this->image_path . 'scaled_generated.jpg',
            );
        }
        
        return $results;
    }
    
}

?>
