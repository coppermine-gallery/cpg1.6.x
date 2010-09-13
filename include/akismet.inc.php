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

$akismet_config['akismet_user_agent'] = 'Coppermine Photo Gallery ' . COPPERMINE_VERSION . ' | akismet.inc.php/1.0';
$akismet_config['akismet_host'] = 'rest.akismet.com';
$akismet_config['akismet_version'] = '1.1';
$akismet_config['key'] = $CONFIG['comment_akismet_api_key'];
$akismet_config['blog'] = $CONFIG['site_url'];

function cpg_akismet_send($argument_array = '', $host = '', $url = '') {
    global $akismet_config, $LINEBREAK;
    if (!(is_array($argument_array)) || $host == '' || $url == '') { 
        return FALSE; 
    }
    $content = '';
    foreach ($argument_array as $key => $val) {
        $content .= $key . '=' . rawurlencode(stripslashes($val)) . '&';
    }
    $request = 'POST ' . $url .' HTTP/1.0' . $LINEBREAK
             . 'Host: ' . $host . $LINEBREAK
             . 'Content-Type: application/x-www-form-urlencoded' . $LINEBREAK
             . 'User-Agent: ' . $akismet_config['akismet_user_agent'] . $LINEBREAK
             . 'Content-Length: ' . strlen($content) . $LINEBREAK . $LINEBREAK
             . $content . $LINEBREAK;
    $port = 80;
    unset($response);
    $fh = fsockopen($host, $port, $errno, $errstr, 3);
    if ($fh != FALSE) {
        @fwrite($fh, $request);
        while (!(feof($fh))) {
            $response .= fgets($fh, 1160); 
        }
        @fclose( $fh );
        $response = explode($LINEBREAK . $LINEBREAK, $response, 2);
    }
    return $response;
}

function cpg_akismet_verify_key() {
    global $akismet_config;
    $argument_array = array('key' => $akismet_config['key'], 'blog' => $akismet_config['blog']);
    $host = $akismet_config['akismet_host'];
    $url = 'http://' . $host . '/' . $akismet_config['akismet_version'] . '/verify-key';
    $valid  = cpg_akismet_send($argument_array, $host, $url);
    if ($valid[1] == 'valid') { 
        return TRUE;  
    } else {
        return $valid; 
    }
}

function cpg_akismet_submit_data($variable_array, $type = '') {
    global $akismet_config;
    $result = cpg_akismet_verify_key();
    if ($result != TRUE) { 
        return FALSE; 
    }
    if ($type == 'ham') {
        $submit_type = 'submit-ham';
    } elseif ($type == 'spam') {
        $submit_type = 'submit-spam';
    } else {
        $submit_type = 'comment-check';
    }
    $variable_array['blog'] = $akismet_config['blog'];
    $host = $akismet_config['key'] . '.' . $akismet_config['akismet_host'];
    $url = 'http://' . $host . '/' . $akismet_config['akismet_version'] . '/' . $submit_type;
    $result = cpg_akismet_send($variable_array, $host, $url);
    // Akismet sends the a lower-case string "true" back, not to be confused with a boolean!
    // We convert this to a boolean return value.
    if ($result[1] == 'true') { 
        return TRUE; 
    } else {
        return FALSE;  
    }
}

?>