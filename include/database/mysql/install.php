<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.03
  $HeadURL$
**********************************************/

function dbcheck_mysql ()
{
	global $language, $lang_update_php;

	if (!isset($language)) $language = $lang_update_php;
	if (!function_exists('mysql_connect')) return $language['not_available'];
	$vers = mysql_get_client_info();
	if ($vers[0] < 4) return $language['version_too_old'];
	return true;
}

global $mysql_connection;          // (mysql_connection) connection to the db
global $mysql_connected;
global $dbase_connected;
$mysql_connected = false;   // (bool) connected to the db?
function checkMysqlConnection()
{
    global $config, $language;
    // we only need 1 connection
    if (isset($GLOBALS['mysql_connected']) && $GLOBALS['mysql_connected']) {
        return true;
    } else {
        if (isset($config['db_name'])) {
            $db_name = $config['db_name'];
        } else {
            $db_name = '';
        }

       // check for MySql support of PHP
        if (!function_exists('mysql_connect')) {
            $GLOBALS['error'] = sprintf($language['no_dbase_support'], 'MySQL');
            return false;

        // try to connect with given auth parameters
        } elseif (! $connect_id = @mysql_connect($config['db_host'],
                $config['db_user'], $config['db_password']))
        {
            $GLOBALS['error'] = sprintf($language['no_dbase_conn'], 'MySQL', 'MySQL') . '<br />'
                . $language['dbase_error'] . mysql_error();
            return false;

        // if a database is specified, try to select it.
        } elseif ($db_name != '') {
            if ( !mysql_select_db($db_name, $connect_id)) {
                $GLOBALS['error'] = sprintf($language['dbase_wrong_db'], $db_name);
                return false;
            }
        }
        // set our connection id
        $GLOBALS['mysql_connection'] = $connect_id;
        $GLOBALS['mysql_connected'] = true;
        $GLOBALS['dbase_connected'] = true;
        return true;
    }
}

/* html_mysql_start()
 *
 * prints page with basic mysql config
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
          {$language['sect_dbase_info']}<br />
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
            <td align="left"><div class="cpg_message_success">{$language['dbase_succ']}</div></td>
        </tr>

EOT;
    }
    $db_host     = isset($config['db_host']) && $mysql_connected ? $config['db_host'] : 'localhost';
    $db_user     = isset($config['db_user']) && $mysql_connected ? $config['db_user'] : '';
    $db_password = isset($config['db_password']) && $mysql_connected ? $config['db_password'] : '';
    echo <<<EOT
         <tr>
          <td align="right">{$language['dbase_host']}</td>
          <td><input type="text" class="textinput" name="db_host" value="$db_host" /></td>
         </tr>
         <tr>
          <td align="right">{$language['dbase_username']}</td>
          <td><input type="text" class="textinput" name="db_user" value="$db_user" /></td>
         </tr>
         <tr>
          <td align="right">{$language['dbase_password']}</td>
          <td><input type="password" name="db_password" value="$db_password" /></td>
         </tr>
         <tr>
         <td colspan="2" align="center">
            <button type="submit" class="button" name="update_check_connection" value="{$language['dbase_test_connection']}">{$icon['test']}{$language['dbase_test_connection']}</button>
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

function html_mysql_select_db()
{
    global $language, $step, $config, $icon;

    $step_next = $step + 1;
    $dbs = getMysqlDbs();
    if (!$dbs) {
        $dbs = '<input type="text" class="textinput" name="db_name" value="' . $config['db_name'] . '" />';
    }
    $db_prefix = isset($config['db_prefix']) ? $config['db_prefix'] : 'cpg16x_';
    echo <<<EOT
      <form action="install.php?step={$step_next}" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
              {$language['sect_dbase_sel_db']}<br />
          </td>
         </tr>
         <tr>
          <td align="right">{$language['dbase_db_name']}</td>
          <td>$dbs</td>
         </tr>
         <tr>
          <td></td>
          <td>{$language['or']}</td>
         </tr>
         <tr>
          <td align="right">{$language['dbase_create_db']}</td>
          <td>
              <input type="text" class="textinput" name="new_db_name" />
              <button type="submit" class="button" name="update_create_db" value="{$language['dbase_create_btn']}">{$icon['add']}{$language['dbase_create_btn']}</button>
          </td>
         </tr>
         <tr>
         <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
          <td align="right">{$language['dbase_tbl_pref']}</td>
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

function getMysqlDbs()
{
    // Get a connection with the db
    if (!checkMysqlConnection()) {
        return false;
    }
    global $config;
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
        $GLOBALS['error'] = $language['dbase_no_create_db'] . '<br />'
            . $language['dbase_error'] . '<br />' . mysql_error($GLOBALS['mysql_connection']);
        return false;
    } else {
        setTmpConfig('db_name', $db_name);
    }
    return true;
}


if (!function_exists('cpg_db_escape_string')) {	// Avoid errors when all install files are included together

	function cpg_db_escape_string ($str)
	{
		return mysql_real_escape_string($str, $GLOBALS['mysql_connection']);
	}

	function cpg_db_query ($sql)
	{
		return mysql_query($sql, $GLOBALS['mysql_connection']);
	}

	function cpg_db_getError ()
	{
		return mysql_error($GLOBALS['mysql_connection']);
	}

}
