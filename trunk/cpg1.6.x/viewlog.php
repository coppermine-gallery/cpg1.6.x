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

define('IN_COPPERMINE',1);
define('VIEWLOG_PHP',1);

require('include/init.inc.php');

$folder_icon = cpg_fetch_icon('folder', 0);
$delete_all_icon = cpg_fetch_icon('delete', 2);
$delete_this_icon = cpg_fetch_icon('erase', 2);
$view_icon = cpg_fetch_icon('file', 2);

function display_log_list()
{
    global $lang_viewlog_php, $folder_icon, $delete_all_icon, $delete_this_icon, $view_icon, $lang_date;

    $log_list = getloglist('logs/');
    
    if (count($log_list)>0) {
        foreach ($log_list as $log) {
            
            $mtime = localised_date($log['mtime'], $lang_date['log']);
            $filesize = cpg_format_bytes($log['filesize']);
            
            echo <<<EOT
                            <tr>
                                    <td class="tableb">
                                            {$folder_icon}&nbsp;<a href= "viewlog.php?log={$log['logname']}">{$log['logname']}</a>
                                            &nbsp;&nbsp;&nbsp; ( <em>$filesize</em>, {$lang_viewlog_php['last_updated']}: <em>$mtime</em>)
                                    </td>
                            </tr>
EOT;
        }
            echo <<<EOT
                                <tr>
                                        <td class="tableb" align="center">
                                                <button type="button" class="button" name="dall" value="{$lang_viewlog_php['delete_all']}" id="dall" onclick="window.location='viewlog.php?action=dall';">{$delete_all_icon}{$lang_viewlog_php['delete_all']}</button>
                                        </td>
                                </tr>
EOT;
    } else {
        cpg_die(INFORMATION, $lang_viewlog_php['no_logs'], __FILE__, __LINE__);
    }
}

function display_log($logname)
{
    global $lang_viewlog_php, $folder_icon, $delete_all_icon, $delete_this_icon, $view_icon, $LINEBREAK;

    echo <<<EOT
            <tr>
                    <td class="tableb" align="center">
                            <button type="button" class="button" name="dall" value="{$lang_viewlog_php['delete_all']}" id="dall" onclick="window.location='viewlog.php?action=dall';">{$delete_all_icon}{$lang_viewlog_php['delete_all']}</button>
                            <button type="button" class="button" value="{$lang_viewlog_php['view_logs']}" name="back1" id="back1" onclick="window.location='viewlog.php';">{$view_icon}{$lang_viewlog_php['view_logs']}</button>
                            <button type="button" class="button" value="{$lang_viewlog_php['delete_this']}" name="dthis1" id="dthis1" onclick="window.location='viewlog.php?action=dthis&amp;log=$logname';">{$delete_this_icon}{$lang_viewlog_php['delete_this']}</button>
                    </td>
            </tr>
            <tr>
                    <td class="tableb">
                            <ul>
EOT;
  
    $log_array = explode('---' , log_read($logname));

    foreach ($log_array as $log_entry) {
    	if ($log_entry != '' && $log_entry != $LINEBREAK) {
    		echo '<li>' . nl2br(htmlspecialchars(trim($log_entry))) . '</li>' . $LINEBREAK;
    	}
    }
    
    echo <<<EOT
                            </ul>
                    </td>
            </tr>
            <tr>
                    <td class="tableb" align="center">
                            <button class="button" type="button" value="{$lang_viewlog_php['delete_all']}" name="dall2" id="dall2" onclick="window.location='viewlog.php?action=dall';">{$delete_all_icon}{$lang_viewlog_php['delete_all']}</button>
                            <button class="button" type="button" value="{$lang_viewlog_php['view_logs']}" name="back2" id="back2" onclick="window.location='viewlog.php';">{$view_icon}{$lang_viewlog_php['view_logs']}</button>
                            <button class="button" type="button" value="{$lang_viewlog_php['delete_this']}" name="dthis2" id="dthis2" onclick="window.location='viewlog.php?action=dthis&amp;log=$logname';">{$delete_this_icon}{$lang_viewlog_php['delete_this']}</button>
                    </td>
            </tr>

EOT;
}

$log = $superCage->get->getAlpha('log');
$action = $superCage->get->getAlpha('action');

pageheader('Logs :: '.$log);

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

starttable("100%", cpg_fetch_icon('view_logs', 2) . "Logs :: " . $log);

if (isset($action)) {
    if ($action == 'dthis' && isset($log)) {
        log_delete($log);
        unset($log);
    } elseif ($action == 'dall') {
        unset($log);
        log_delete();
    }
}

// If log variable not set or log file's directory is not current directory then display logs list else display log with given name stripping risky characters from it
if (!isset($log) || dirname($log) != '.') {
    display_log_list();
} else {
    display_log($log);
}

endtable();
pagefooter();
?>