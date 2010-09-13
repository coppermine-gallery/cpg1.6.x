
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

// define('SKIP_AUTHENTICATION', true);
// If you don't remember the admin account data you're prompted for when running this file in your browser, umcomment the line above by removing the two slashes in front of it, upload that file to your webserver, run it in your browser. After successfully having run it, remember to restore the two slashes you removed and replace the "unsecure" version on your webserver with the "secure" version (the one that contains the double slashes).

define('IN_COPPERMINE', true);
define('UPDATE_PHP', true);

if (!defined('SKIP_AUTHENTICATION')) { // try to include init.inc.php to get the "regular" coppermine user interface
    $error_reporting = error_reporting(E_ERROR); // silence all error reports but fatal ones
    ob_start(); // turn output buffering on - if including the regular coppermine files breaks, we can make sure that the output doesn't break the subsequent code
    include_once('include/init.inc.php');
    $output = ob_get_clean();
    error_reporting($error_reporting); // set error reporting level back to how it used to be
    //echo $output; // For troubleshooting purposes, echo $output
}
session_start();
set_magic_quotes_runtime(0);

if (!function_exists('cpgGetMicroTime')) {
function cpgGetMicroTime()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
}

if (!function_exists('cpg_folder_file_delete')) {
function cpg_folder_file_delete($path, $output = '') {
    // Perform some validity checks first
    rtrim($path,'/'); // if the path has a trailing slash we remove it here
    if (is_link($path)) { // We don't want to delete symlinks, so let's just return some text
        if ($output != '') {
            return $path . ' appears to be a symlink - we won\'t delete them for security reasons';
        } else {
            return;
        }
    }
    if (!file_exists($path) && !is_dir($path)) {// if the path is not valid
        if ($output != '') {
            return 'Path ' . $path . ' does not exist';
        } else {
            return;
        }
    } elseif (!is_readable($path)) {// ... if the path is not readable
        if ($output != '') {
            return 'Path ' . $path . ' is not readable';
        } else {
            return;
        }
    }
    if (is_dir($path)) {
        if (version_compare(PHP_VERSION, '5.0.0') < 0) {
            $entries = array();
            if ($handle = opendir($path)) {
                while (false !== ($file = readdir($handle))) {
                    $entries[] = $file;
                }
                closedir($handle);
            }
        } else {
            $entries = scandir($path);
            if ($entries === false) {
                $entries = array();
            }
        }
        foreach ($entries as $entry) {
            if ($entry != '.' && $entry != '..') {
                cpg_folder_file_delete($path.'/'.$entry);
            }
        }
        // Delete the folder
        if ($output != '') {
            $result = rmdir($path);
        } else {
            $result = @rmdir($path);
        }
        if ($output != '') {
            if ($result == 1) {
                // We have issued the command to delete the folder and everything
                // appears to have gone fine, but we can not be sure if we succeeded,
                // so we'll test if the folder still is there.
                clearstatcache(); // We need to clear the cache before we check if the folder is still there.
                if (is_dir($path)) {
                    return 'Couldn\'t delete folder ' . $path . '. Review permissions!';
                } else {
                    return 'Folder deleted successfully';
                }
            } else {
                return 'Couldn\'t delete folder ' . $path . '. Review permissions!';
            }
        } else {
            return;
        }
    } else {
        // Delete the file
        if ($output != '') {
            $result = unlink($path);
        } else {
            $result = @unlink($path);
        }
        if ($output != '') {
            if ($result == 1) {
                // We have issued the command to delete the file and everything
                // appears to have gone fine, but we can not be sure if we succeeded,
                // so we'll test if the file still is there.
                clearstatcache(); // We need to clear the cache first.
                if (file_exists($path)) {
                    return 'Couldn\'t delete file ' . $path . '. Review permissions!';
                } else {
                    return 'File deleted successfully';
                }
            } else {
                return 'Couldn\'t delete file ' . $path . '. Review permissions!';
            }
        } else {
            return;
        }
    }
}
}

set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__).PATH_SEPARATOR.dirname(__FILE__).DIRECTORY_SEPARATOR.'include');

require_once('include/inspekt.php');
require_once('include/sql_parse.php');
require_once('include/config.inc.php');
require_once('include/functions.inc.php');

// The default values
$errors = '';
$notes  = '';


$DFLT = array(
    'cfg_d' => 'include', // The config file dir
    'cfg_f' => 'include/config.inc.php', // The config file name
    'alb_d' => 'albums', // The album dir
    'upl_d' => 'userpics', // The uploaded pic dir
);

$superCage = Inspekt::makeSuperCage();

// If including includes/init.inc.php has worked as expected, the constants should be populated, so let's check that first
if (!defined('SKIP_AUTHENTICATION') && defined('COPPERMINE_VERSION') && GALLERY_ADMIN_MODE) {
    $_SESSION['auth'] = true;
} else { // we need to populate the language array "manually"
    $lang_common['ok'] = 'OK';
    $lang_update_php = array(
      'title' => 'Updater', // cpg1.5
      'welcome_updater' => 'Welcome to Coppermine update', // cpg1.5
      'could_not_authenticate' => 'Could not authenticate you', // cpg1.5
      'provide_admin_account' => 'Please provide your coppermine admin account details or your mySQL account data', // cpg1.5
      'try_again' => 'Try again', // cpg1.5
      'mysql_connect_error' => 'Could not create a mySQL connection', // cpg1.5
      'mysql_database_error' => 'mySQL could not locate a database called %s', // cpg1.5
      'mysql_said' => 'MySQL said', // cpg1.5
      'check_config_file' => 'Please check the SQL values in %s', // cpg1.5
      'performing_database_updates' => 'Performing Database Updates', // cpg1.5
      'already_done' => 'Already Done', // cpg1.5
      'password_encryption' => 'Encryption of passwords', // cpg1.5
      'alb_password_encryption' => 'Encryption of album passwords', // cpg1.5
      'category_tree' => 'Category tree', // cpg1.5
      'authentication_needed' => 'Authentication needed', // cpg1.5
      'username' => 'Username', // cpg1.5
      'password' => 'Password', // cpg1.5
      'update_completed' => 'Update completed', // cpg1.5
      'check_versions' => 'It\'s recommended to %scheck your file versions%s if you just upgraded from an older version of coppermine', // cpg1.5 // Leave the %s untouched when translating - it wraps the link
      'start_page' => 'If you didn\'t (or you don\'t want to check), you can go to %syour gallery\'s start page%s', // cpg1.5 // Leave the %s untouched when translating - it wraps the link
      'errors_encountered' => 'The following errors were encountered and need to be corrected first', // cpg1.5
      'delete_file' => 'Delete %s', // cpg1.5
      'could_not_delete' => 'Could not delete due to missing permissions. Delete the file manually!', // cpg1.5
    );
}

if (!function_exists('cpg_display_help')) {
    $help = '&nbsp;'.cpg_display_help('f=upgrading.htm&amp;as=updater&amp;ae=updater_end&amp;top=1', '650', '500');
} else {
    $help = '&nbsp;<a href="docs/en/upgrading.htm?hide_nav=1#updater" class="greybox"><img src="images/help.gif" border="0" width="13" height="11" alt="" /></a>';
}

// ---------------------------- AUTHENTICATION --------------------------- //
// SKIP_AUTHENTICATION is a constant that can be defined for users who can't retrieve any kind of password
if (!defined('SKIP_AUTHENTICATION') && !$_SESSION['auth']) {
    html_header($lang_update_php['title']);
    if (!$superCage->post->keyExists('method')) {
        //first try to connect to the db to see if we can authenticate the admin
        test_sql_connection();
        if ($errors != '') {
            //we could not establish an sql connection, so update can't be done (and user can't be autenticated)
            html_error($errors);
        } else {
            //echo a box for admin autentication
            html_auth_box('admin');
        }
    } elseif ($superCage->post->getAlpha('method') == 'admin') {
        //try to autenticate the admin
        test_sql_connection();
        $user = $superCage->post->getEscaped('user');
        $pass = $superCage->post->getEscaped('pass');
        $pass2 = md5($pass);
        $sql = "SELECT user_active FROM {$CONFIG['TABLE_PREFIX']}users WHERE user_group = 1 AND user_name = '$user' AND (user_password = '$pass' OR user_password = '$pass2')";
        $result = @mysql_query($sql);
        if (!@mysql_num_rows($result)) {
            //not authenticated, try mysql account details
            html_auth_box('MySQL');
        } else {
            //authenticated, do the update
            $_SESSION['auth'] = true;
            start_update();
        }
    } else {
        //try to autenticate via MySQL details (in configuration)
        if ($superCage->post->getEscaped('user')  == $CONFIG['dbuser'] && $superCage->post->getEscaped('pass') == $CONFIG['dbpass']) {
            //authenticated, do the update
            $_SESSION['auth'] = true;
            start_update();
        } else {
            //no go, try again
            html_error($lang_update_php['could_not_authenticate'] . ' -  <a href="update.php">' . $lang_update_php['try_again'] .'</a>');
        }
    }
    html_footer();
} else {
    html_header($lang_update_php['title']);
    $_SESSION['auth'] = true;
    start_update();
    html_footer();
}

// function definitions --- start
// ------------------------- HTML OUTPUT FUNCTIONS ------------------------- //

function html_header($title, $charset = 'iso8859-1')
{
    if (function_exists('pageheader') && defined('COPPERMINE_VERSION') && GALLERY_ADMIN_MODE) {
        pageheader($title);
    } else {
        echo <<< EOT
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>{$title}</title>
    <meta http-equiv="Content-Type" content="text/html; charset={$charset}" />
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" href="css/installer.css" type="text/css" />
</head>
<body>
<img class="logo" src="images/coppermine-logo.png" border="0" alt="" />

EOT;
    }
}

function html_error($error_msg = '')
{
    global $lang_update_php, $help;

    echo <<< EOT
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
        <td class="tableh1" colspan="2"><h2>{$lang_update_php['welcome_updater']}{$help}</h2>
        </td>
       </tr>

EOT;
    if ($error_msg) {
        echo <<< EOT
       <tr>
        <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
        </td>
       </tr>
       <tr>
        <td class="tableh2" colspan="2">
            {$lang_update_php['errors_encountered']}:<br />
        </td>
       </tr>
       <tr>
        <td class="tableh2" colspan="2">
            {$error_msg}
        </td>
       </tr>

EOT;
    }

    echo <<< EOT
       </tr>
      </table>

EOT;
}


function html_install_success($notes)
{
    global $DFLT, $lang_update_php;
    //Coppermine is now upgraded and ready to roll.
    echo '&nbsp;<br />';
    echo '<div class="maintable"><h2 class="tableh1">' . $lang_update_php['update_completed'] . '</h2>';
    echo '<p class="tableh2">';
    printf($lang_update_php['check_versions'], '<a href="versioncheck.php">', '</a>');
    echo '. ';
    printf($lang_update_php['start_page'], '<a href="index.php">', '</a>');
    echo '.</p></div>';
}

function html_footer()
{
    if (function_exists('pagefooter') && defined('COPPERMINE_VERSION') && GALLERY_ADMIN_MODE) {
        pagefooter();
    } else {
        echo <<< EOT
</body>
</html>

EOT;
    }
}

function html_auth_box($method)
{
    global $lang_update_php, $lang_common, $help;

    $superCage = Inspekt::makeSuperCage();

    if ($superCage->get->keyExists('debug')) {
        $debug_mode = '?debug';
    } else {
        $debug_mode = '';
    }

    if (function_exists('cpg_fetch_icon')) {
        $update_icon   = cpg_fetch_icon('update_database', 2);
        $ok_icon       = cpg_fetch_icon('ok', 2);
        $login_icon    = cpg_fetch_icon('login', 2);
        $username_icon = cpg_fetch_icon('my_profile', 2);
        $password_icon = cpg_fetch_icon('key_enter', 2);
    } else {
        $update_icon   = '';
        $ok_icon       = '';
        $login_icon    = '';
        $username_icon = '';
        $password_icon = '';
    }

    echo <<< EOT
        <form name="cpgform" id="cpgform" method="post" action="update.php{$debug_mode}">
        <table border="0" cellspacing="0" cellpadding="0" class="maintable">
            <tr>
                <td class="tableh1" colspan="2">
                    <h1>{$update_icon}{$lang_update_php['welcome_updater']}{$help}</h1>
                </td>
            </tr>
            <tr>
                <td class="tableh2" colspan="2">
                    <h2>{$login_icon}{$lang_update_php['authentication_needed']}</h2>
                </td>
            </tr>
            <tr>
                <td class="tableh2" colspan="2">

EOT;
    if ($method == 'MySQL') {
        echo $lang_update_php['could_not_authenticate']. '. <a href="update.php">' . $lang_update_php['try_again'] . '</a>';
    } else {
        echo $lang_update_php['provide_admin_account'];
    }

    echo <<< EOT
                </td>
            </tr>
            <tr>
                <td class="tableb">
                    {$username_icon}{$lang_update_php['username']}:
                </td>
                <td class="tableb">
                    <input type="text" name="user" size="30" class="textinput" />
                </td>
            </tr>
            <tr>
                <td class="tableb">
                    {$password_icon}{$lang_update_php['password']}:
                </td>
                <td class="tableb">
                    <input type="password" name="pass" size="30" class="textinput"  />
                </td>
            </tr>
            <tr>
                <td class="tableb" colspan="2" align="center">
                    <input type="hidden" name="method" value="{$method}" />
                    <!--<input type="submit" name="submit" value="Login" class="button"  />-->
                    <button type="submit" class="button" name="submit" value="{$lang_common['ok']}">{$ok_icon}{$lang_common['ok']}</button>
                </td>
            </tr>
        </table>

        </form>
        <script language="javascript" type="text/javascript">
            <!--
            document.cpgform.user.focus();
            -->
        </script>

EOT;
}

// --------------------------------- MAIN CODE ----------------------------- //
function start_update()
{
    global $errors, $notes, $lang_update_php, $LINEBREAK;
    global $update_icon, $ok_icon, $already_done_icon, $error_icon, $file_system_icon;

    // The updater
    //html_header($lang_update_php['title']);
    test_sql_connection();

    if (function_exists('cpg_fetch_icon')) {
        $update_icon       = cpg_fetch_icon('update_database', 2);
        $ok_icon           = cpg_fetch_icon('ok', 2);
        $already_done_icon = cpg_fetch_icon('info', 2);
        $error_icon        = cpg_fetch_icon('stop', 2);
        $file_system_icon  = cpg_fetch_icon('hdd', 2);
    } else {
        $update_icon       = '';
        $ok_icon           = '';
        $already_done_icon = '';
        $error_icon        = '';
        $file_system_icon  = '';
    }

    if ($errors == '') {
        echo '        <table border="0" cellspacing="0" cellpadding="0" class="maintable">' . $LINEBREAK;
        update_tables();
        update_files();
        echo '        </table>' . $LINEBREAK;
    } else {
        html_error($errors);
    }

    if ($errors == '') {
        html_install_success($notes);
        session_destroy();
    } else {
        html_error($errors);
    }
    //html_footer();
}

// Return an array containing config values specified in the array
function cpg_get_config_value($config_name)
{
    global $CONFIG;

    $result = mysql_query("SELECT value FROM ".$CONFIG['TABLE_PREFIX']."config WHERE name='".$config_name."' LIMIT 1");
    $row = mysql_fetch_row($result);

    return $row[0];
}

// ----------------------------- TEST FUNCTIONS ---------------------------- //
function test_sql_connection()
{
    global $errors, $CONFIG, $lang_update_php;

    if (! $connect_id = @mysql_connect($CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass'])) {
        $errors .= '<hr />';
        $errors .= $lang_update_php['mysql_connect_error'] . '. ';
        $errors .= sprintf($lang_update_php['check_config_file'] . '. ', 'include/config.inc.php');
        $errors .= '<br />';
        $errors .= $lang_update_php['mysql_said'] . ': ' . mysql_error();
    } elseif (! mysql_select_db($CONFIG['dbname'], $connect_id)) {
        $errors .= '<hr />';
        $errors .= sprintf($lang_update_php['mysql_database_error'] . '. ', $CONFIG['dbname']);
        $errors .= sprintf($lang_update_php['check_config_file'] . '. ', 'include/config.inc.php');
    } else {
        $CONFIG['LINK_ID'] = $connect_id;
    }
}



// ------------------------- SQL QUERIES TO CREATE TABLES ------------------ //
function update_tables()
{
    global $errors, $CONFIG, $lang_update_php, $lang_common, $LINEBREAK, $help;
    global $update_icon, $ok_icon, $already_done_icon, $error_icon, $file_system_icon;

    $loopCounter = 0;
    $cellStyle = '';
    $superCage = Inspekt::makeSuperCage();

    $db_update = 'sql/update.sql';
    $sql_query = fread(fopen($db_update, 'r'), filesize($db_update));
    // Update table prefix
    $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);

    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');
    $sql_query = array_map('trim', $sql_query);

    echo <<< EOT
            <tr>
                <td class="tableh1" colspan="2">
                    {$update_icon}{$lang_update_php['performing_database_updates']}{$help}
                </td>
            </tr>

EOT;

    foreach ($sql_query as $q) {

        $cellStyle = ($loopCounter / 2 == floor($loopCounter / 2)) ? 'tableb' : 'tableb tableb_alternate';
        $loopCounter++;
        echo '<tr>' . $LINEBREAK . '    <td width="80%" class="' . $cellStyle . '">' . $q;

        /**
         * Determining if the Alter Table actually made a change
         * to properly reflect it's status on the update page.
         */
        if (strpos(strtolower($q), 'alter table') !== false) {

            $query = explode(' ', $q);

            $result = mysql_query("DESCRIBE " . $query[2]);

            $description = array();

            while ($row = mysql_fetch_row($result)) {
                $description[] = $row;
            }

            $result = @mysql_query($q);
            $affected = mysql_affected_rows();
            $warnings = mysql_query('SHOW WARNINGS');

            $result = mysql_query("DESCRIBE " . $query[2]);

            $description2 = array();

            while ($row = mysql_fetch_row($result)) {
                $description2[] = $row;
            }

            if ($description == $description2) {
                $affected = 0;
            }

        } else {
            $result = @mysql_query($q);
            $affected = mysql_affected_rows();
            $warnings = mysql_query('SHOW WARNINGS;');
        }

        if ($superCage->get->keyExists('debug')) {
            echo '<hr />Debug output:<br />';
            if ($affected > -1) {
                echo "Rows Affected: ".$affected.". ";
            }
            if ($warnings) {
                while ($warning = mysql_fetch_row($warnings)) {
                    if ($warning[0] != '') {
                        $warning_text = 'MySQL said: ';
                    } else {
                        $warning_text = '';
                    }
                    echo $warning_text.'<tt class="code">'.$warning[0]. ' ('.$warning[1].') '.$warning[2].'</tt><br />';
                }
            }
        }
        echo '</td>'.$LINEBREAK; // end the table cell that contains the output
        if ($result && $affected) {
            echo '    <td width="20%" class="'.$cellStyle.' updatesOK">' . $ok_icon . $lang_common['ok'] . '</td>'.$LINEBREAK;
        } else {
            echo '    <td width="20%" class="'.$cellStyle.' updatesFail">' . $already_done_icon . $lang_update_php['already_done'] . '</td>'.$LINEBREAK;
        }
        echo '</tr>' . $LINEBREAK;
    } // end foreach loop

    // Check password encryption and perform the conversion if applicable
    $cellStyle = ($loopCounter / 2 == floor($loopCounter / 2)) ? 'tableb' : 'tableb tableb_alternate';
    $loopCounter++;
    echo <<< EOT
            <tr>
                <td class="{$cellStyle}">
                    {$lang_update_php['password_encryption']}:
                </td>

EOT;
    $CONFIG['enable_encrypted_passwords'] = cpg_get_config_value('enable_encrypted_passwords');
    if ($CONFIG['enable_encrypted_passwords'] != '1') {
        echo <<< EOT
                <td class="{$cellStyle} updatesOK">
                    {$ok_icon}{$lang_common['ok']}
                </td>
            </tr>

EOT;
        $result = mysql_query("update {$CONFIG['TABLE_PREFIX']}users set user_password=md5(user_password);");
        if ($CONFIG['enable_encrypted_passwords'] === '0') {
            $result = mysql_query("update {$CONFIG['TABLE_PREFIX']}config set value = '1' WHERE name = 'enable_encrypted_passwords'");
        } else {
            $result = mysql_query("INSERT INTO {$CONFIG['TABLE_PREFIX']}config ( `name` , `value` ) VALUES ('enable_encrypted_passwords', '1')");
        }
    } else {
        echo <<< EOT
                <td class="{$cellStyle} updatesFail">
                    {$already_done_icon}{$lang_update_php['already_done']}
                </td>
            </tr>

EOT;
    }

    // Check album password encryption and perform the conversion if applicable
    $cellStyle = ($loopCounter / 2 == floor($loopCounter / 2)) ? 'tableb' : 'tableb tableb_alternate';
    $loopCounter++;
    echo <<< EOT
            <tr>
                <td class="{$cellStyle}">
                    {$lang_update_php['alb_password_encryption']}:
                </td>

EOT;
    $CONFIG['enable_encrypted_alb_passwords'] = cpg_get_config_value('enable_encrypted_alb_passwords');
    if ($CONFIG['enable_encrypted_alb_passwords'] != 1) {
        echo <<< EOT
                <td class="{$cellStyle} updatesOK">
                    {$ok_icon}{$lang_common['ok']}
                </td>
            </tr>

EOT;
        // Encrypt the album password but only for those albums which have a password assigned.
        $result = mysql_query("update {$CONFIG['TABLE_PREFIX']}albums set alb_password=md5(alb_password) WHERE alb_password IS NOT NULL AND alb_password != '';");

        if ($CONFIG['enable_encrypted_alb_passwords'] != NULL) {
            $result = mysql_query("update {$CONFIG['TABLE_PREFIX']}config set value = 1 WHERE name = 'enable_encrypted_alb_passwords'");
        } else {
            $result = mysql_query("INSERT INTO {$CONFIG['TABLE_PREFIX']}config ( `name` , `value` ) VALUES ('enable_encrypted_alb_passwords', '1')");
        }
    } else {
        echo <<< EOT
                <td class="{$cellStyle} updatesFail">
                    {$already_done_icon}{$lang_update_php['already_done']}
                </td>
            </tr>

EOT;
    }

    // Check category tree modifications
    $cellStyle = ($loopCounter / 2 == floor($loopCounter / 2)) ? 'tableb' : 'tableb tableb_alternate';
    $loopCounter++;
    echo <<< EOT
            <tr>
                <td class="{$cellStyle}">
                    {$lang_update_php['category_tree']}:
                </td>

EOT;

    if (check_rebuild_tree()) {
        echo <<< EOT
                <td class="{$cellStyle} updatesOK">
                    {$ok_icon}{$lang_common['ok']}
                </td>
            </tr>

EOT;
    } else {
        echo <<< EOT
                <td class="{$cellStyle} updatesFail">
                    {$already_done_icon}{$lang_update_php['already_done']}
                </td>
            </tr>

EOT;
    }

}

function update_files()
{
    global $lang_update_php, $file_system_icon;

    echo <<< EOT
            <tr>
                <td class="tableh1" colspan="2">
                    {$file_system_icon}{$lang_update_php['performing_file_updates']}
                </td>
            </tr>

EOT;
    delete_files();
    update_system_thumbs();
}

function delete_files()
{
    global $lang_update_php, $lang_common, $ok_icon, $already_done_icon, $error_icon;

    // Attempt to delete outdated files
    $delete_file_array = array(
        'charsetmgr.php',
        'config.php',
        'editOnePic.php',
        'faq.php',
        'image_processor.php',
        'picEditor.php',
        'relocate_server.php',
        'scripts.js',
        'bridge/phpbb22.inc.php',
        'bridge/punbb.inc.php',
        'bridge/smf.inc.php',
        'bridge/vbulletin.inc.php',
        'bridge/vbulletin23.inc.php',
        'bridge/vbulletin3gamma.inc.php',
        'bridge/woltlab21.inc.php',
        'bridge/yabbse.inc.php',
        'albums/edit/index.htm',
        'docs/COPYING',
        'docs/faq.htm',
        'docs/faq_de.htm',
        'docs/faq_fr.htm',
        'docs/index_es.htm',
        'docs/index_fr.htm',
        'docs/README.html',
        'docs/showdoc.php',
        'docs/tester-README.txt',
        'docs/theme.htm',
        'docs/translation.htm',
        'docs/de/theme_upgrade_13x-14x.htm',
        'docs/de/images/plugin_manager.gif',
        'docs/de/tutorial/cpg1.5_plugin_hello_world_2-1.zip',
        'docs/de/tutorial/cpg1.5_plugin_hello_world_2-2-1.zip',
        'docs/de/tutorial/matching_theme/index.htm',
        'docs/de/tutorial/matching_theme/screenshot_missing_menu.png',
        'docs/de/tutorial/matching_theme/',
        'docs/de/tutorial/',
        'docs/en/theme_upgrade_13x-14x.htm',
        'docs/en/images/plugin_manager.gif',
        'docs/en/tutorial/cpg1.5_plugin_hello_world_2-1.zip',
        'docs/en/tutorial/cpg1.5_plugin_hello_world_2-2-1.zip',
        'docs/en/tutorial/matching_theme/index.htm',
        'docs/en/tutorial/matching_theme/screenshot_missing_menu.png',
        'docs/en/tutorial/matching_theme/',
        'docs/en/tutorial/',
        'docs/es/tutorial/cpg1.5_plugin_hello_world_2-1.zip',
        'docs/es/tutorial/cpg1.5_plugin_hello_world_2-2-1.zip',
        'docs/es/tutorial/matching_theme/index.htm',
        'docs/es/tutorial/matching_theme/screenshot_missing_menu.png',
        'docs/es/tutorial/matching_theme/',
        'docs/es/tutorial/',
        'docs/fr/theme_upgrade_13x-14x.htm',
        'docs/fr/tutorial/cpg1.5_plugin_hello_world_2-1.zip',
        'docs/fr/tutorial/cpg1.5_plugin_hello_world_2-2-1.zip',
        'docs/fr/tutorial/matching_theme/index.htm',
        'docs/fr/tutorial/matching_theme/screenshot_missing_menu.png',
        'docs/fr/tutorial/matching_theme/',
        'docs/fr/tutorial/',
        'docs/nl/theme_upgrade_13x-14x.htm',
        'docs/nl/images/plugin_manager.gif',
        'docs/nl/tutorial/cpg1.5_plugin_hello_world_2-1.zip',
        'docs/nl/tutorial/cpg1.5_plugin_hello_world_2-2-1.zip',
        'docs/nl/tutorial/matching_theme/index.htm',
        'docs/nl/tutorial/matching_theme/screenshot_missing_menu.png',
        'docs/nl/tutorial/matching_theme/',
        'docs/nl/tutorial/',
        'docs/pics/',
        'docs/theme/',
        'images/smiles/icon_arrow.gif',
        'images/smiles/icon_biggrin.gif',
        'images/smiles/icon_confused.gif',
        'images/smiles/icon_cool.gif',
        'images/smiles/icon_cry.gif',
        'images/smiles/icon_eek.gif',
        'images/smiles/icon_evil.gif',
        'images/smiles/icon_exclaim.gif',
        'images/smiles/icon_frown.gif',
        'images/smiles/icon_idea.gif',
        'images/smiles/icon_lol.gif',
        'images/smiles/icon_mad.gif',
        'images/smiles/icon_mrgreen.gif',
        'images/smiles/icon_neutral.gif',
        'images/smiles/icon_question.gif',
        'images/smiles/icon_razz.gif',
        'images/smiles/icon_redface.gif',
        'images/smiles/icon_rolleyes.gif',
        'images/smiles/icon_sad.gif',
        'images/smiles/icon_smile.gif',
        'images/smiles/icon_surprised.gif',
        'images/smiles/icon_twisted.gif',
        'images/smiles/icon_wink.gif',
        'include/imageObjectGD.class.php',
        'include/imageObjectIM.class.php',
        'include/index.html',
    );

    // Check if the file exists in the first place
    $loopCounter = 0;
    foreach ($delete_file_array as $delete_file) {
        $cellStyle = ($loopCounter / 2 == floor($loopCounter / 2)) ? 'tableb' : 'tableb tableb_alternate';
        $delete_output = sprintf($lang_update_php['delete_file'], '&laquo;<tt>'.$delete_file.'</tt>&raquo;');
        echo <<< EOT
            <tr>
                <td class="{$cellStyle}">
                    {$delete_output}
                </td>

EOT;
        if (!file_exists($delete_file)) {
            $result_output = $already_done_icon . $lang_update_php['already_done'];
        } else {
            list($delete_result,$debug_output) = cpg_folder_file_delete($delete_file);
            if ($delete_result == TRUE ) {
                $result_output = $ok_icon . $lang_common['ok'];
            } else {
                $result_output = $error_icon . $lang_update_php['could_not_delete'];
            }
        }
        echo <<< EOT
                <td class="{$cellStyle}">
                    {$result_output}
                </td>
            </tr>

EOT;
        $loopCounter++;
    } // foreach $delete_file
}

function update_system_thumbs()
{
    global $CONFIG, $lang_update_php, $lang_common, $ok_icon, $already_done_icon, $error_icon;

    $results = mysql_query("SELECT * FROM {$CONFIG['TABLE_PREFIX']}config;");
    while ($row = mysql_fetch_array($results)) {
        $CONFIG[$row['name']] = $row['value'];
    } // while
    mysql_free_result($results);

    // Code to rename system thumbs in images folder
    $default_thumb_pfx = 'thumb_';
    if ($default_thumb_pfx != $CONFIG['thumb_pfx']) {
        $THEME_DIR = 'themes/' . $CONFIG['theme'] . '/';
        $folders = array('images/thumbs/', $THEME_DIR.'images/');
        $loopCounter = 0;
        foreach ($folders as $folder) {
            $thumbs = cpg_get_system_thumb_list($folder);
            foreach ($thumbs as $thumb) {
                $cellStyle = ($loopCounter / 2 == floor($loopCounter / 2)) ? 'tableb' : 'tableb tableb_alternate';
                $rename_file_from = $folder . $thumb['filename'];
                $rename_file_to   = $folder . str_replace($default_thumb_pfx, $CONFIG['thumb_pfx'], $thumb['filename']);
                $rename_output    = sprintf($lang_update_php['rename_file'], '&laquo;<tt>'.$rename_file_from.'</tt>&raquo;', '&laquo;<tt>'.$rename_file_to.'</tt>&raquo;');
                echo <<< EOT
            <tr>
                <td class="{$cellStyle}">
                    {$rename_output}
                </td>

EOT;
                if (file_exists($rename_file_to)) {
                    $result_output = $already_done_icon . $lang_update_php['already_done'];
                    echo <<< EOT
                <td class="{$cellStyle}">
                    {$result_output}
                </td>
            </tr>

EOT;
                    $loopCounter++;
                    if ($rename_file_from == $rename_file_to) {
                        continue;
                    }
                    $cellStyle = ($loopCounter / 2 == floor($loopCounter / 2)) ? 'tableb' : 'tableb tableb_alternate';
                    $delete_file = $rename_file_from;
                    $delete_output = sprintf($lang_update_php['delete_file'], '&laquo;<tt>'.$delete_file.'</tt>&raquo;');
                    echo <<< EOT
            <tr>
                <td class="{$cellStyle}">
                    {$delete_output}
                </td>

EOT;
                    if (!file_exists($delete_file)) {
                        $result_output = $already_done_icon . $lang_update_php['already_done'];
                    } else {
                        list($delete_result,$debug_output) = cpg_folder_file_delete($delete_file);
                        if ($delete_result == TRUE ) {
                            $result_output = $ok_icon . $lang_common['ok'];
                        } else {
                            $result_output = $error_icon . $lang_update_php['could_not_delete'];
                        }
                    }
                    echo <<< EOT
                <td class="{$cellStyle}">
                    {$result_output}
                </td>
            </tr>

EOT;
                    $loopCounter++;
                    continue;

                } else {
                    $rename_result = @rename($rename_file_from, $rename_file_to);
                    if ($rename_result == TRUE ) {
                        $result_output = $ok_icon . $lang_common['ok'];
                    } else {
                        $result_output = $error_icon . $lang_update_php['could_not_rename'];
                    }
                }
                echo <<< EOT
                <td class="{$cellStyle}">
                    {$result_output}
                </td>
            </tr>

EOT;
                $loopCounter++;
            } // foreach $thumbs
        } // foreach $folders
    } // if different thumb_pfx

    /*
    // Unnecessary for 1.5 since these thumbs are included with the system thumbs above
    // If old images for nopic.jpg and private.jpg exist, delete the new ones
    if (file_exists('images/nopic.jpg')) {
        cpg_folder_file_delete('images/thumb_nopic.jpg');
        @rename('images/nopic.jpg', 'images/' . $CONFIG['thumb_pfx'] . 'nopic.jpg');
    }
    if (file_exists('images/private.jpg')) {
        cpg_folder_file_delete('images/thumb_private.jpg');
        @rename('images/private.jpg', 'images/' . $CONFIG['thumb_pfx'] . 'private.jpg');
    }
    */
}

// function definitions --- end
?>
