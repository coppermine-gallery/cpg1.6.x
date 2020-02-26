<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2020 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * update.php
 * @since  1.6.08
 */

// define('SKIP_AUTHENTICATION', true);
// If you don't remember the admin account data you're prompted for when running this file in your browser, umcomment the line above by removing the two slashes in front of it, upload that file to your webserver, run it in your browser. After successfully having run it, remember to restore the two slashes you removed and replace the "unsecure" version on your webserver with the "secure" version (the one that contains the double slashes).

define('IN_COPPERMINE', true);
define('UPDATE_PHP', true);

if (!defined('SKIP_AUTHENTICATION')) { // try to include init.inc.php to get the "regular" coppermine user interface
    $error_reporting = error_reporting(E_ERROR); // silence all error reports but fatal ones
    ob_start(); // turn output buffering on - if including the regular coppermine files breaks, we can make sure that the output doesn't break the subsequent code
    include_once 'include/init.inc.php';
    $output = ob_get_clean();
    error_reporting($error_reporting); // set error reporting level back to how it used to be
    //echo $output; // For troubleshooting purposes, echo $output
}
session_start();

if (!function_exists('cpgGetMicroTime')) {
function cpgGetMicroTime()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
}

set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__).PATH_SEPARATOR.dirname(__FILE__).DIRECTORY_SEPARATOR.'include');

require_once 'include/inspekt.php';
require_once 'include/sql_parse.php';
require_once 'include/config.inc.php';
require_once 'include/functions.inc.php';

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
} else { // we need to populate the language array
    require 'lang/english.php';
}

if (!function_exists('cpg_display_help')) {
    $help = '&nbsp;'.cpg_display_help('f=upgrading.htm&amp;as=updater&amp;ae=updater_end&amp;top=1', '650', '500');
} else {
    $help = '&nbsp;<a href="docs/en/upgrading.htm?hide_nav=1#updater" class="greybox"><img src="images/help.gif" border="0" width="13" height="11" alt="" /></a>';
}

// --------------------- SELECT NEW DATABASE ACCESS METHOD --------------------- //
// if a different dbase method is selected, we have to change the config and reload
// the page to get to the correct dbase class
if ($superCage->post->keyExists('action') && $superCage->post->getAlpha('action') == 'dbselect') {
	set_config_dbtype($superCage->post->getRaw('db_type'));
	if ($errors) {
		html_error($errors);
	} else {
		header('Location: update.php?dbswitch=1');
	}
	exit;
}
if ($superCage->get->keyExists('dbswitch') && $superCage->get->getInt('dbswitch')) {
	define('SKIP_AUTHENTICATION', true);
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

        // Check if column 'user_password_salt' exists in user table
        $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PREFIX']}users LIMIT 1");
        $row = $result->fetchAssoc(true); 
        $col_user_password_salt_exists = isset($row['user_password_salt']) ? true : false;

        if ($col_user_password_salt_exists) {
            require 'include/passwordhash.inc.php';
            $sql = "SELECT user_password, user_password_salt, user_password_hash_algorithm, user_password_iterations FROM {$CONFIG['TABLE_PREFIX']}users WHERE user_group = 1 AND user_name = '$user'";
            $result = cpg_db_query($sql);
            $password_params = $result->fetchAssoc(true);
        }

        if (!$col_user_password_salt_exists || !$password_params['user_password_salt']) {
            $sql = "SELECT user_active FROM {$CONFIG['TABLE_PREFIX']}users WHERE user_group = 1 AND user_name = '$user' AND (user_password = '$pass' OR user_password = '".md5($pass)."')";
            $result = cpg_db_query($sql);
            if (!$result->numRows()) {
                //not authenticated, try mysql account details
                html_auth_box('MySQL');
                die();
            }
        } elseif (!cpg_password_validate($pass, $password_params)) {
            //not authenticated, try mysql account details
            html_auth_box('MySQL');
            die();
        }
        //authenticated, do the update
        $_SESSION['auth'] = true;
        start_update();
    } else {
        //try to autenticate via MySQL details (in configuration)
        if ($superCage->post->getEscaped('user') == $CONFIG['dbuser'] && $superCage->post->getEscaped('pass') == $CONFIG['dbpass']) {
            //authenticated, do the update
            $_SESSION['auth'] = true;
            start_update();
        } else {
            //no go, try again
            html_error($lang_update_php['could_not_authenticate'] . ' - <a href="update.php">' . $lang_update_php['try_again'] .'</a>');
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
        echo $lang_update_php['could_not_authenticate']. '. '.sprintf($lang_update_php['provide_admin_account_dbase'], $CONFIG['dbname']).'. <a href="update.php">' . $lang_update_php['try_again'] . '</a>.';
    } else {
        echo $lang_update_php['provide_admin_account_cpg'].'.';
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

function html_dbase_select ()
{
	global $lang_update_php, $lang_common, $help;

	$superCage = Inspekt::makeSuperCage();

	require_once 'include/dbselect.inc.php';
	$dbselect = new DbaseSelect(array('mysqli'=>'MYSQLI'.$lang_update_php['recommended'],'pdo:mysql'=>'PDO:MYSQL','mysql'=>'MYSQL'.$lang_update_php['current_nr']));

	if (function_exists('cpg_fetch_icon')) {
		$ok_icon       = cpg_fetch_icon('ok', 2);
	} else {        $update_icon   = '';
		$ok_icon       = '';
}

	echo <<<EOT
	<form action="update.php" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
		<table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
			<tr>
				<td class="tableb" colspan="2">
					{$lang_update_php['newDbMethod']}<br />
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td style="text-align:right;width:50%">Database Type</td>
				<td><select name="db_type">{$dbselect->options()}</select></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center" class="tableh2">
					<button type="submit" class="button" name="submit" value="{$lang_common['continue']}">{$lang_common['continue']}{$ok_icon}</button>
				</td>
			</tr>
		</table>
		<input type="hidden" name="action" value="dbselect" />
	</form>
EOT;
}


// --------------------------------- MAIN CODE ----------------------------- //
function start_update()
{
    global $errors, $notes, $lang_update_php, $LINEBREAK;
    global $update_icon, $ok_icon, $already_done_icon, $error_icon, $file_system_icon;

	if (!check_db_type()) return;

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
        echo '        <table border="0" cellspacing="0" cellpadding="0" class="maintable" width="100%">' . $LINEBREAK;
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

    $result = cpg_db_query("SELECT value FROM ".$CONFIG['TABLE_PREFIX']."config WHERE name='".$config_name."' LIMIT 1");
    $row = $result->fetchRow(true);

    return $row[0];
}

// ----------------------------- TEST FUNCTIONS ---------------------------- //
function check_db_type ()
{
	global $CONFIG;

	if (!isset($CONFIG['dbtype']) || $CONFIG['dbtype'] == 'mysql') {
		html_dbase_select();
		return false;
	}

	return true;
}

function test_sql_connection()
{
    global $errors, $CONFIG, $CPGDB, $lang_update_php;

	if (!isset($CPGDB)) {
		list($db_ext, $db_sub) = explode(':', $CONFIG['dbtype'].':');
		$db_ext = $db_ext ?: 'mysql';
		require 'include/database/'.$db_ext.'/dbase.inc.php';
		$CPGDB = new CPG_Dbase($CONFIG);
	}

	if (!$CPGDB->isConnected()) {
        $errors .= '<hr />';
        $errors .= sprintf($lang_update_php['dbase_database_error'], $CONFIG['dbname']) . '. ';
        $errors .= sprintf($lang_update_php['check_config_file'] . '. ', 'include/config.inc.php');
        $errors .= '<br />';
        $errors .= sprintf($lang_update_php['dbase_said'], $CPGDB->db_type) . ': ' . $CPGDB->getError();
	}
}


// ------------------------- SQL QUERIES TO CREATE TABLES ------------------ //
function update_tables()
{
    global $errors, $CONFIG, $CPGDB, $lang_update_php, $lang_common, $LINEBREAK, $help;
    global $update_icon, $ok_icon, $already_done_icon, $error_icon, $file_system_icon;

    $loopCounter = 0;
    $cellStyle = '';
    $okerrs = array(1060,1061,1062);
    $superCage = Inspekt::makeSuperCage();

    $db_update = 'sql/update.sql';
    $sql_query = fread(fopen($db_update, 'r'), filesize($db_update));
    // Update table prefix
    $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);
    //$sql_query = str_replace('{FIRST_USER_CAT}', FIRST_USER_CAT, $sql_query);

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

	// Have to relax the sql modes for mysql 5.7 so it won't fail with zero dates, etc.
	cpg_db_query("SET SESSION sql_mode = ''");

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

            $result = cpg_db_query("DESCRIBE " . $query[2]);

            $description = array();

            while ($row = $result->fetchRow()) {
                $description[] = $row;
            }
            $result->free();

            $result = @cpg_db_query($q);
            if (!$result) {
            	$errno = $CPGDB->getError(true);
            	if (!in_array($errno, $okerrs)) {
            		table_complain($cellStyle);
            		continue;
            	}
            }
            $affected = $CPGDB->affectedRows();
            $warnings = cpg_db_query('SHOW WARNINGS');

            $result = cpg_db_query("DESCRIBE " . $query[2]);

            $description2 = array();

            while ($row = $result->fetchRow()) {
                $description2[] = $row;
            }
            $result->free();

            if ($description == $description2) {
                $affected = 0;
            }

        } else {
            $result = @cpg_db_query($q);
            if (!$result) {
            	$errno = $CPGDB->getError(true);
            	if (!in_array($errno, $okerrs)) {
            		table_complain($cellStyle);
            		continue;
            	}
            }
            $affected = $CPGDB->affectedRows();
            $warnings = cpg_db_query('SHOW WARNINGS;');
        }

        if ($superCage->get->keyExists('debug')) {
            echo '<hr />Debug output:<br />';
            if ($affected > -1) {
                echo "Rows Affected: ".$affected.". ";
            }
            if ($warnings) {
                while ($warning = $warnings->fetchRow()) {
                    if ($warning[0] != '') {
                        $warning_text = 'MySQL said: ';
                    } else {
                        $warning_text = '';
                    }
                    echo $warning_text.'<tt class="code">'.$warning[0]. ' ('.$warning[1].') '.$warning[2].'</tt><br />';
                }
                $warnings->free();
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
        $result = cpg_db_query("update {$CONFIG['TABLE_PREFIX']}users set user_password=md5(user_password);");
        if ($CONFIG['enable_encrypted_passwords'] === '0') {
            $result = cpg_db_query("update {$CONFIG['TABLE_PREFIX']}config set value = '1' WHERE name = 'enable_encrypted_passwords'");
        } else {
            $result = cpg_db_query("INSERT INTO {$CONFIG['TABLE_PREFIX']}config ( `name` , `value` ) VALUES ('enable_encrypted_passwords', '1')");
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
        $result = cpg_db_query("update {$CONFIG['TABLE_PREFIX']}albums set alb_password=md5(alb_password) WHERE alb_password IS NOT NULL AND alb_password != '';");

        if ($CONFIG['enable_encrypted_alb_passwords'] != NULL) {
            $result = cpg_db_query("update {$CONFIG['TABLE_PREFIX']}config set value = 1 WHERE name = 'enable_encrypted_alb_passwords'");
        } else {
            $result = cpg_db_query("INSERT INTO {$CONFIG['TABLE_PREFIX']}config ( `name` , `value` ) VALUES ('enable_encrypted_alb_passwords', '1')");
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

	// Check for enabled v1.6 core upload plugin(s)
    $cellStyle = ($loopCounter / 2 == floor($loopCounter / 2)) ? 'tableb' : 'tableb tableb_alternate';
    $loopCounter++;
    $result = cpg_db_query("SELECT path FROM {$CONFIG['TABLE_PREFIX']}plugins WHERE path LIKE 'upload____'");
    $plgs = cpg_db_fetch_rowset($result, true);
    $upc = 0;
    foreach ($plgs as $plg) {
    	if (in_array(substr($plg['path'], 6), array('_h5a','_swf','_sgl'))) {
    		//echo $plg['path'];
    		$upc++;
    	}
    }
    echo <<<EOT
            <tr>
                <td class="{$cellStyle}">
                    {$lang_update_php['core_upload_plugs']}:
                </td>

EOT;
	if ($upc) {
        echo <<< EOT
                <td class="{$cellStyle} updatesFail">
                    {$already_done_icon}{$lang_update_php['already_done']}
                </td>
            </tr>

EOT;
	} else {
		// Pre-install the core upload plugins
		cpg_db_query("INSERT INTO {$CONFIG['TABLE_PREFIX']}plugins (name, path, priority) VALUES ('CoreH5A Upload', 'upload_h5a', 0), ('CoreSWF Upload', 'upload_swf', 1), ('CoreSGL Upload', 'upload_sgl', 2)");
		// And set the default mechanism to 'upload_h5a'
		cpg_db_query("UPDATE {$CONFIG['TABLE_PREFIX']}config SET value='upload_h5a' WHERE name='upload_mechanism'");

		// employ any existing html5upload configurations
    	$result = cpg_db_query("SELECT name,value FROM {$CONFIG['TABLE_PREFIX']}config WHERE name LIKE 'html5upload_config%'");
		$cfgs = cpg_db_fetch_rowset($result, true);
		foreach ($cfgs as $cfg) {
			$cfgn = 'upload_h5a' . substr($cfg['name'], 18);
			$cfgv = cpg_db_escape_string($cfg['value']);
			cpg_db_query("INSERT INTO {$CONFIG['TABLE_PREFIX']}config VALUES ('{$cfgn}', '{$cfgv}')");
		}
	}

	// if there were no html5upload configs, set a default one
	if (!isset($cfgs) || !$cfgs) {
		cpg_db_query("INSERT INTO {$CONFIG['TABLE_PREFIX']}config VALUES ('upload_h5a', 'a:11:{s:10:\"concurrent\";i:3;s:8:\"upldsize\";i:0;s:8:\"autoedit\";i:1;s:8:\"acptmime\";s:7:\"image/*\";s:8:\"enabtitl\";i:0;s:8:\"enabdesc\";i:0;s:8:\"enabkeys\";i:1;s:8:\"enabusr1\";i:0;s:8:\"enabusr2\";i:0;s:8:\"enabusr3\";i:0;s:8:\"enabusr4\";i:0;}')");
	}

	echo <<< EOT
			<td class="{$cellStyle} updatesOK">
				{$ok_icon}{$lang_common['ok']}
			</td>
		</tr>

EOT;
}

function table_complain ($cs)
{
	global $errors, $CONFIG, $CPGDB, $lang_update_php, $lang_common, $LINEBREAK, $help;
	echo '<br /><p style="color:red">', $CPGDB->getError(), '</p></td><td class="'.$cs.'"></td></tr>', $LINEBREAK;
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
        'js/jquery-1.3.2.js',
        'logs/log_header.inc.php',
        'include/log_header.inc.php',
        'js/setup_swf_upload.js',
        'js/swfupload',
        'docs/en/uploading_xp-publisher.htm',
        'xp_publish.php',
        'install_classic.php',
        'include/cpg15x.files.xml'
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

    $results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PREFIX']}config;");
    while ($row = $results->fetchAssoc()) {
        $CONFIG[$row['name']] = $row['value'];
    } // while
    $results->free();

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
}

function set_config_dbtype ($db_type)
{
	global $lang_update_php, $errors;
	include 'include/config.inc.php';
	$CONFIG['dbtype'] = $db_type;
	$config = <<<EOT
<?php
// Coppermine configuration file
// Database configuration
\$CONFIG['dbtype'] =      '{$CONFIG['dbtype']}';			// Your database type
\$CONFIG['dbserver'] =    '{$CONFIG['dbserver']}';			// Your database server
\$CONFIG['dbuser'] =      '{$CONFIG['dbuser']}';			// Your database username
\$CONFIG['dbpass'] =      '{$CONFIG['dbpass']}';			// Your database password
\$CONFIG['dbname'] =      '{$CONFIG['dbname']}';			// Your database name

// DATABASE TABLE NAMES PREFIX
\$CONFIG['TABLE_PREFIX'] =         '{$CONFIG['TABLE_PREFIX']}';
EOT;
    //write config file to disk
    if ($fd = @fopen('include/config.inc.php', 'wb')) {
        fwrite($fd, $config);
        fclose($fd);
    } else {
        $errors .= '<hr /><br />' . $lang_update_php['unable_write_config'] . '<br />';
    }
}
// function definitions --- end
//EOF