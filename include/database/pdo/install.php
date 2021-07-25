<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2021 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * include/database/pdo/install.php
 * @since  1.6.13
 */

function dbcheck_pdo ($sub=null)
{
	global $language, $lang_update_php;

	if (!isset($language)) $language = $lang_update_php;
	if (phpversion('PDO')) { return true; }
	else { return $language['not_available']; }
}

global $pdo_connection;          // (PDO_connection) connection to the db
global $pdo_connected;
global $dbase_connected;
$pdo_connected = false;   // (bool) connected to the db?
function checkPdoConnection ($sub=null)
{
    global $config, $language, $error;
    $sub = $sub ?: 'mysql';
    if (isset($GLOBALS['pdo_connected']) && $GLOBALS['pdo_connected']) {
        return true;
    } else {
    	try {
        	$connect_id = new PDO("{$sub}:host=" . $config['db_host'] . (isset($config['db_name']) ? (';dbname='.$config['db_name']) :''), $config['db_user'], $config['db_password']);
    		$GLOBALS['pdo_connection'] = $connect_id;
    		$GLOBALS['pdo_connected'] = true;
    		$GLOBALS['dbase_connected'] = true;
		} catch (PDOException $e) {
			$error = $e->getMessage();
		}
    }
    return $error ? false : true;
}

function html_pdo_select_db ($sub=null)
{
    global $language, $step, $config, $icon;

    $sub = $sub ?: 'mysql';
    $step_next = $step + 1;
    $dbs = getPdoMysqlDbs();
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

function getPdoMysqlDbs()
{
    // Get a connection with the db
    if (!checkPdoConnection()) {
        return false;
    }
    global $config;
    // get a list of db's
    if ($db_list = @$GLOBALS['pdo_connection']->query('SHOW DATABASES')) {
        // create dropdown box
        $db_select = '<select name="db_name" class="listbox" size="1">';
        while ($row = $db_list->fetch()) {
            $db = $row['Database'];
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
* createPdoDb()
*
* Tries to create CPG database.
* If users doesn't have permission, it returns false.
*
* @return bool
*/
function createPdoDb($db_name)
{
    global $language;
    // Get a connection with the db
    if (!checkPdoConnection()) {
        return false;
    }
    $query = 'CREATE DATABASE ' . $db_name;
    // try to create new db

	$err = '';
    try {
        $GLOBALS['pdo_connection']->exec($query)
        or $err = print_r($GLOBALS['pdo_connection']->errorInfo(), true);
    }
    catch (PDOException $e) {
        $err = "DB ERROR: " . $e->getMessage();
    }

    if ($err) {
        $GLOBALS['error'] = $language['dbase_no_create_db'] . '<br />'
            . $language['dbase_error'] . '<br />' . $err;
        return false;
    } else {
        setTmpConfig('db_name', $db_name);
    }
    return true;
}

if (!function_exists('cpg_db_escape_string')) {

	function cpg_db_escape_string ($str)
	{
		return trim($GLOBALS['pdo_connection']->quote($str), '\'');
	}

	function cpg_db_query ($sql)
	{
		return $GLOBALS['pdo_connection']->query($sql);
	}

	function cpg_db_getError ()
	{
		$err = $GLOBALS['pdo_connection']->errorInfo();
		return $err[2];
	}

}
