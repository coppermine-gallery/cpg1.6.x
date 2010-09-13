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
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
**********************************************/

define('IN_COPPERMINE', true);
define('LOGIN_PHP', true);

require('include/init.inc.php');

if (USER_ID) {
    cpg_die(ERROR, $lang_login_php['err_already_logged_in'], __FILE__, __LINE__);
}

if (defined('UDB_INTEGRATION')) {
    $cpg_udb->login_page();
}

if (strpos($CPG_REFERER, "logout.php") !== false) {
    $CPG_REFERER = "index.php";
}

$login_failed   = '';
$cookie_warning = '';

if ($superCage->post->keyExists('submitted')) {
    
    if ($USER_DATA = $cpg_udb->login($superCage->post->getEscaped('username'), $superCage->post->getEscaped('password'), $superCage->post->getInt('remember_me'))) {
        //$referer=preg_replace("'&amp;'","&",$referer);

        // Write the log entry
        if ($CONFIG['log_mode'] == CPG_LOG_ALL) {
            log_write('The user ' . $USER_DATA['user_name'] . ' (user ID ' . $USER_DATA['user_id'] . ") logged in.", CPG_ACCESS_LOG);
        }
        
        // Set the language preference
        $sql = "UPDATE {$CONFIG['TABLE_USERS']} SET user_language = '{$USER['lang']}' WHERE user_id = {$USER_DATA['user_id']}";
        $result = cpg_db_query($sql);

        $cpg_udb->authenticate();
        if (!$USER_DATA['has_admin_access']) {
            unset($USER['am']);
            user_save_profile();
        }

        $redirect = ($CPG_REFERER && (strpos($CPG_REFERER, 'login.php') === false)) ? $CPG_REFERER : 'index.php';
        $pending_approvals = ($USER_DATA['has_admin_access'] && cpg_get_pending_approvals() > 0) ? '<br />'.$lang_gallery_admin_menu['upl_app_title'] : '';
        cpgRedirectPage($redirect, $lang_login_php['login'], sprintf($lang_login_php['welcome'], $USER_DATA['user_name']).$pending_approvals, 3, 'success');
        exit;

    } else {
        // Write the log entry
        log_write("Failed login attempt with Username: " . $superCage->post->getEscaped('username'), CPG_SECURITY_LOG);

        $login_failed = <<<EOT
                  <tr>
                      <td colspan="2" class="tableh2">
                          <div id="cpgMessage" class="cpg_user_message cpg_message_validation">
                              {$lang_login_php['err_login']}
                          </div>
                      </td>
                  </tr>
EOT;

        // get IP address of the person who tried to log in, look it up on the banning table and increase the brute force counter. If the brute force counter has reached a critical limit, set a regular banning record
        $result = cpg_db_query("SELECT ban_id, brute_force FROM {$CONFIG['TABLE_BANNED']} WHERE ip_addr = '$raw_ip' OR ip_addr = '$hdr_ip' LIMIT 1");
        $failed_logon_counter = mysql_fetch_assoc($result);
        mysql_free_result($result);

        $expiry_date = date("Y-m-d H:i:s", mktime(date('H'), date('i') + $CONFIG['login_expiry'], date('s'), date('m'), date('d'), date('Y')));

        if ($failed_logon_counter['brute_force']) {
            $failed_logon_counter['brute_force'] = $failed_logon_counter['brute_force'] - 1;
            $query_string = "UPDATE {$CONFIG['TABLE_BANNED']} SET brute_force = {$failed_logon_counter['brute_force']}, expiry = '$expiry_date' WHERE ban_id = {$failed_logon_counter['ban_id']}";
        } else {
            $failed_logon_counter['brute_force'] = $CONFIG['login_threshold'];
            $query_string = "INSERT INTO {$CONFIG['TABLE_BANNED']} (ip_addr, expiry, brute_force) VALUES ('$raw_ip', '$expiry_date', {$failed_logon_counter['brute_force']})";
        }

        //write the logon counter to the database
        cpg_db_query($query_string);
    }
}

if (!$superCage->cookie->keyExists($CONFIG['cookie_name'] . '_data')) {
    $cookie_warning = <<<EOT
                  <tr>
                      <td colspan="2" align="center" class="tableh2">
                          <span style="color:red"><strong>{$lang_login_php['cookie_warning']}</strong></span>
                      </td>
                  </tr>

EOT;
}

if ($CONFIG['reg_requires_valid_email'] == 1) {
    $send_activation_link = '<br /><a href="send_activation.php" class="topmenu">'.$lang_login_php['send_activation_link'].'</a>';
} else {
    $send_activation_link = '';
}

pageheader($lang_login_php['login']);

if ($superCage->get->getInt('force_login')) {
    msg_box($lang_login_php['force_login_title'], $lang_login_php['force_login']);
}

//$referer = urlencode($referer);
$username_icon = cpg_fetch_icon('my_profile', 2);
$password_icon = cpg_fetch_icon('key_enter', 2);
$ok_icon = cpg_fetch_icon('ok', 2);

echo '<form action="login.php?referer=' . urlencode($CPG_REFERER) . '" method="post" name="loginbox" id="cpgform">';

starttable(-1, cpg_fetch_icon('login', 2) . $lang_login_php['enter_login_pswd'], 2);

//see how users are allowed to login, can be username, email address or both
$login_method = $lang_login_php[$CONFIG['login_method']];

echo <<< EOT
                  $login_failed
                  $cookie_warning
                  <tr>
                      <td class="tableb" width="40%">{$username_icon}{$login_method}</td>
                      <td class="tableb" width="60%"><input type="text" class="textinput" name="username" style="width: 100%" tabindex="1" /></td>
                  </tr>
                  <tr>
                      <td class="tableb">{$password_icon}{$lang_login_php['password']}</td>
                      <td class="tableb"><input type="password" class="textinput" name="password" style="width: 100%" tabindex="2" /></td>
                  </tr>
                  <tr>
                      <td colspan="2" align="center" class="tableb">{$lang_login_php['remember_me']} <input name="remember_me" type="checkbox" class="checkbox" value="1" tabindex="3" /></td>
                  </tr>
                  <tr>
                      <td align="center" class="tablef">
                          <a href="forgot_passwd.php" class="topmenu">{$lang_login_php['forgot_password_link']}</a>
                          $send_activation_link
                      </td>
                      <td align="left" class="tablef">
                        <!--<input name="submitted" type="submit" class="button" value="{$lang_login_php['login']}" tabindex="4" />-->
                        <button type="submit" class="button" name="submitted" value="{$lang_common['ok']}"  tabindex="4">{$ok_icon}{$lang_common['ok']}</button>
                      </td>
                  </tr>

EOT;

endtable();

echo <<< EOT

</form>
<script language="javascript" type="text/javascript">
<!--
document.loginbox.username.focus();
-->
</script>
EOT;

pagefooter();

?>