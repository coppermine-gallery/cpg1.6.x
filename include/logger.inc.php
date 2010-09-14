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

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// Initiate defines
define('CPG_SECURITY_LOG', 'security');
define('CPG_GLOBAL_LOG', 'global');
define('CPG_DATABASE_LOG', 'database');
define('CPG_ACCESS_LOG', 'access');
define('CPG_ERROR_LOG', 'error');
define('CPG_CONFIG_LOG', 'config');
define('CPG_MAIL_LOG', 'mail');

define('CPG_LOG_ALL',2);
define('CPG_LOG_NORMAL',1);
define('CPG_NO_LOGGING',0);

define('CPG_WEEK',604800);
define('CPG_DAY',86400);
define('CPG_HOUR',3600);

// Writes log text to the log file
function log_write($text, $log = null)
{
    global $LINEBREAK, $lang_date;

    if (isset($CONFIG['log_mode']) && $CONFIG['log_mode'] == CPG_NO_LOGGING)  {
        return false;
    }
        
    if (is_null($log)) {
        $log = CPG_GLOBAL_LOG;
    }

    $log = 'logs/' . $log . '.log.php';

    if (!file_exists($log)) {
        $log_header = implode('', file('include/log_header.inc.php'));
    } else {
        $log_header = '';
    }

    if (!isset($lang_date['log'])) {
        $lang_date['log'] = '%Y-%m-%d %H:%M:%S';
    }
    
    $fp = fopen($log, 'a');
    fwrite($fp, $log_header);
    fwrite($fp, localised_date(-1, $lang_date['log']) . ' - ' . $text . $LINEBREAK . '---' . $LINEBREAK);
    fclose($fp);
}


// Reads log text from a log file
function log_read($log = null) {

    if (is_null($log)) {
        $log = CPG_GLOBAL_LOG;
    }

    $log = 'logs/' . $log . '.log.php';
    
    $contents = file_get_contents($log);
    
    return substr($contents, strpos($contents, '?>') + 2);
}


// Deletes a log file
function log_delete( $log = null ) {
        if (is_null($log)) {
                $log_list = getloglist('logs/');
                foreach ($log_list as $log) {
                        unlink('logs/'.$log['filename']);
                }
        } else {
                       unlink('logs/'.$log.'.log.php');
        }
        header('Location: viewlog.php');
}


// Returns all the log files in the log directory
function& getloglist($folder)
{
    global $CONFIG;
    
    $file_array = array();

    $dir = opendir($folder);
    while (($file = readdir($dir)) !== FALSE) {
        if (is_file($folder . $file) && $file != 'log_header.inc.php') {
            $file_array[$file] = array(
                'filename' => $file,
                'logname'  => str_replace('.log.php', '', $file),
                'filesize' => filesize($folder . $file),
                'mtime'    => filemtime($folder . $file),
            );
        }
    }
    closedir($dir);

    ksort($file_array);
    
    return $file_array;
}


// The function spring_cleaning is a garbage collection routine used to purge a directory of old files.
function& spring_cleaning($directory_path, $cache_time = CPG_HOUR, $exclusion_list = array('index.html', 'index.php', 'index.htm', 'no_FTP-uploads_into_this_folder!.txt')) {
    global $CONFIG;
    //Storage the deleted files
    $deleted_list = array();
    //First we get the transitory directory handle.
    $directory_handle = opendir($directory_path);
    // Exit if the directory cannot be opened.
    if(!$directory_handle) {
        return; // Return.
    }
    // Now let's read through the directory contents.
    while (!(($file = readdir($directory_handle)) === false)) {
            // Avoid deleting the index page of the directory.
            if (in_array($file,$exclusion_list)) {
                // This is the index file, so we move on.
                continue;
            }
            $dir_path = $directory_path."/".$file;
            if (is_dir($dir_path)) {
                // This is a directory, so we move on.
                continue;
            }
            // We find out when the file was last accessed.
            $access_time = filemtime($dir_path); // fileatime() returned incorrect value on Windows
            // We find out the current time.
            $current_time = time();
            // We calculate the the delete time. We will delete anything older than $cache_time.
            $delete_time = $current_time - $access_time;
            // Now we compare the two.
            if ($delete_time >= $cache_time) {
                    // The file is old. We delete it.
                    $deleted_list[] = $dir_path; // Store the name of the file getting deleted
                    unlink($dir_path);
            }
    }
    // Don't forget to close the directory.
    closedir($directory_handle);
    // For logging purposes
    if ($CONFIG['log_mode']) {
        for ($i = 0; $i < count($deleted_list); $i++) {
            log_write('Garbage collection deleted ' . $deleted_list[$i], CPG_GLOBAL_LOG);
        }
    }
    return $deleted_list;
}

?>
