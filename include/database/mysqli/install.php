<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2015 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

function dbcheck_mysqli ()
{
	return true;
}

global $mysqli_connection;          // (mysqli_connection) connection to the db
global $mysqli_connected;
$mysqli_connected = false;   // (bool) connected to the db?
function checkMysqliConnection()
{
    global $config, $language;
    // we only need 1 connection
    if (isset($GLOBALS['mysqli_connected']) && $GLOBALS['mysqli_connected']) {
        return true;
    } else {
        if (isset($config['db_name'])) {
            $db_name = $config['db_name'];
        } else {
            $db_name = '';
        }

       // check for mysqli support of PHP
        if (!function_exists('mysqli_connect')) {
            $GLOBALS['error'] = $language['no_mysqli_support'];
            return false;

        // try to connect with given auth parameters
        } elseif (! $connect_id = @mysqli_connect($config['db_host'],
                $config['db_user'], $config['db_password']))
        {
            $GLOBALS['error'] = $language['no_mysqli_conn'] . '<br />'
                . $language['mysqli_error'] . mysqli_error();
            return false;

        // if a database is specified, try to select it.
        } elseif ($db_name != '') {
            if ( !mysqli_select_db($connect_id, $db_name)) {
                $GLOBALS['error'] = sprintf($language['mysqli_wrong_db'], $db_name);
                return false;
            }
        }
        // set our connection id
        $GLOBALS['mysqli_connection'] = $connect_id;
        $GLOBALS['mysqli_connected'] = true;
        return true;
    }
}

/* html_mysqli_start()
 *
 * prints page with basic mysqli config
 */
function html_mysqli_start()
{
    global $language, $step, $mysqli_connected, $config, $icon;

    $step_next = $step + 1;
    echo <<<EOT
      <form action="install.php?step={$step_next}" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
          {$language['sect_mysqli_info']}<br />
          </td>
         </tr>
         <tr>
          <td colspan="2">&nbsp;</td>
         </tr>

EOT;
    if ($mysqli_connected) {
        echo <<<EOT
        <tr>
            <td></td>
            <td align="left"><div class="cpg_message_success">{$language['mysqli_succ']}</div></td>
        </tr>

EOT;
    }
    $db_host     = isset($config['db_host']) && $mysqli_connected ? $config['db_host'] : 'localhost';
    $db_user     = isset($config['db_user']) && $mysqli_connected ? $config['db_user'] : '';
    $db_password = isset($config['db_password']) && $mysqli_connected ? $config['db_password'] : '';
    echo <<<EOT
         <tr>
          <td align="right">{$language['mysqli_host']}</td>
          <td><input type="text" class="textinput" name="db_host" value="$db_host" /></td>
         </tr>
         <tr>
          <td align="right">{$language['mysqli_username']}</td>
          <td><input type="text" class="textinput" name="db_user" value="$db_user" /></td>
         </tr>
         <tr>
          <td align="right">{$language['mysqli_password']}</td>
          <td><input type="password" name="db_password" value="$db_password" /></td>
         </tr>
         <tr>
         <td colspan="2" align="center">
            <button type="submit" class="button" name="update_check_connection" value="{$language['mysqli_test_connection']}">{$icon['test']}{$language['mysqli_test_connection']}</button>
          </td>
         </tr>

EOT;
    if ($mysqli_connected) {
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

function html_mysqli_select_db()
{
    global $language, $step, $config, $icon;

    $step_next = $step + 1;
    $dbs = getMysqliDbs();
    if (!$dbs) {
        $dbs = '<input type="text" class="textinput" name="db_name" value="' . $config['db_name'] . '" />';
    }
    $db_prefix = isset($config['db_prefix']) ? $config['db_prefix'] : 'cpg16x_';
    echo <<<EOT
      <form action="install.php?step={$step_next}" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
              {$language['sect_mysqli_sel_db']}<br />
          </td>
         </tr>
         <tr>
          <td align="right">{$language['mysqli_db_name']}</td>
          <td>$dbs</td>
         </tr>
         <tr>
          <td></td>
          <td>{$language['or']}</td>
         </tr>
         <tr>
          <td align="right">{$language['mysqli_create_db']}</td>
          <td>
              <input type="text" class="textinput" name="new_db_name" />
              <button type="submit" class="button" name="update_create_db" value="{$language['mysqli_create_btn']}">{$icon['add']}{$language['mysqli_create_btn']}</button>
          </td>
         </tr>
         <tr>
         <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
          <td align="right">{$language['mysqli_tbl_pref']}</td>
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

function getMysqliDbs()
{
    // Get a connection with the db
    if (!checkMysqliConnection()) {
        return false;
    }
    global $config;
    // get a list of db's
    if ($db_list = @mysqli_query($GLOBALS['mysqli_connection'], 'SHOW DATABASES')) {
        // create dropdown box
        $db_select = '<select name="db_name" class="listbox" size="1">';
        while ($row = mysqli_fetch_object($db_list)) {
            $db = $row->Database;
            if (in_array($db, array('information_schema', 'mysqli', 'test'))) {
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
        //$GLOBALS['error'] = $language['mysqli_no_sel_dbs'] . '<br />' . $language['mysqli_error'] . '<br />' . mysqli_error($GLOBALS['mysqli_connection']);
        return false;
    }
}

/*
* createMysqliDb()
*
* Tries to create CPG database.
* If users doesn't have permission, it returns false.
*
* @return bool
*/
function createMysqliDb($db_name)
{
    global $language;
    // Get a connection with the db
    if (!checkMysqliConnection()) {
        return false;
    }
    $query = 'CREATE DATABASE ' . $db_name;
    // try to create new db
    if (!mysqli_query($GLOBALS['mysqli_connection'], $query)) {
        $GLOBALS['error'] = $language['mysqli_no_create_db'] . '<br />'
            . $language['mysqli_error'] . '<br />' . mysqli_error($GLOBALS['mysqli_connection']);
        return false;
    } else {
        setTmpConfig('db_name', $db_name);
    }
    return true;
}

global $language;
$language['mysqli_create_btn'] = 'Create';
$language['mysqli_create_db'] = 'Create new MySQLi database';
$language['mysqli_db_name'] = 'MySQLi database name';
$language['mysqli_error'] = 'MySQLi error: ';
$language['mysqli_host'] = 'MySQLi host<br />(localhost is usually OK)';
$language['mysqli_username'] = 'MySQLi username';
$language['mysqli_password'] = 'MySQLi password';
$language['mysqli_no_create_db'] = 'Could not create MySQLi database.';
$language['mysqli_no_sel_dbs'] = 'Could not retrieve available MySQLi databases';
$language['mysqli_succ'] = 'Successful connection with database';
$language['mysqli_tbl_pref'] = 'MySQLi table prefix';
$language['mysqli_test_connection'] = 'Test connection';
$language['mysqli_wrong_db'] = 'MySQLi could not locate a database called \'%s\' please check the value entered for this';
$language['no_mysqli_conn'] = 'Could not create a MySQLi connection, please check the MySQLi details entered';
$language['no_mysqli_support'] = 'PHP does not have MySQLi support enabled.';
$language['sect_mysqli_info'] = 'This section requires information on how to access your MySQLi database.<br />If you don\'t know how to fill them, check with your webhost support.';
$language['sect_mysqli_sel_db'] = 'Here you have to choose which database you want to use for Coppermine.<br />If your MySQLi account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (don\'t use dots though), but keeping the default prefix is recommended.';
$language['title_mysqli_db_sel'] = 'MySQLi database selection';
$language['title_mysqli_pop'] = 'Creating database structure';
$language['title_mysqli_user'] = 'MySQLi user authentication';

if (!function_exists('cpg_db_escape_string')) {

	function cpg_db_escape_string ($str)
	{
		return mysqli_real_escape_string($GLOBALS['mysqli_connection'], $str);
	}

	function cpg_db_query ($sql)
	{
		return mysqli_query($GLOBALS['mysqli_connection'], $sql);
	}

	function cpg_db_getError ()
	{
		return mysqli_error($GLOBALS['mysqli_connection']);
	}

}