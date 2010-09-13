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
define('FORGOT_PASSWD_PHP', true);

require('include/init.inc.php');
include_once('include/mailer.inc.php');

if (USER_ID) {
    cpg_die(ERROR, $lang_forgot_passwd_php['err_already_logged_in'], __FILE__, __LINE__);
}

$lookup_failed = '';

/**
 * Clean up GPC and other Globals here
 */
if ($superCage->post->keyExists('email') && $superCage->post->testEmail('email')) {
    $CLEAN['email'] = $superCage->post->testEmail('email');
}

if ($superCage->get->keyExists('key')) {
    $CLEAN['key'] = $superCage->get->getEscaped('key');
}

if ($superCage->get->keyExists('id')) {
    $CLEAN['id'] = $superCage->get->getEscaped('id');
}

//END CLEANUP

if (isset($CLEAN['email'])) {
    //$CLEAN['email'] = addslashes($_POST['email']);

    $sql = "SELECT user_id, user_group, user_active, user_name, user_password, user_email FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '{$CLEAN['email']}' AND user_active = 'YES'";

    $results = cpg_db_query($sql);
    
    if (mysql_num_rows($results)) { // something has been found start

        $USER_DATA = mysql_fetch_assoc($results);

        // check if we have an admin account (with empty email address)
        if ($USER_DATA['user_email'] == '') {

            // the password is empty. Is the current user the gallery admin?
            if ($USER_DATA['user_group'] == 1) {
                $USER_DATA['user_email'] = $CONFIG['gallery_admin_email'];
            } else {
                cpg_die(CRITICAL_ERROR, $lang_forgot_passwd_php['failed_sending_email'], __FILE__, __LINE__); //not the gallery admin account
            }
        }

        $randkey = $cpg_udb->generateId();

        // Session life = 1hour - session life (5 minutes)
        $session_life = time() - (CPG_MINUTE * 55);

        $sql = "INSERT INTO {$cpg_udb->sessionstable} (session_id, user_id, time, remember) VALUES ('" . md5($randkey . $USER_DATA['user_id']) . "', 0, $session_life, 0)";

        cpg_db_query($sql);

        $template_vars = array(
            '{VERIFY_LINK}' => $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .'forgot_passwd.php?key='.$randkey.'&id='.$USER_DATA['user_id'],
            '{SITE_NAME}' => $CONFIG['gallery_name'],
        );

        // send the email
        if (!cpg_mail($USER_DATA['user_email'], sprintf($lang_forgot_passwd_php['account_verify_subject'], $CONFIG['gallery_name']), nl2br(strtr($lang_forgot_passwd_php['account_verify_email'], $template_vars)))) {

            cpg_die(CRITICAL_ERROR, $lang_forgot_passwd_php['failed_sending_email'], __FILE__, __LINE__);
        }

        // output the message
        pageheader($lang_forgot_passwd_php['forgot_passwd'], "<META http-equiv=\"refresh\" content=\"3;url=index.php\">");
        $referer = 'index.php';
        msg_box($lang_forgot_passwd_php['forgot_passwd'], sprintf($lang_forgot_passwd_php['verify_email_sent'], $USER_DATA['user_email']), $lang_common['continue'], $referer);
        $USER_DATA['user_password'] = '***********';
        pagefooter();
        exit;
        // something has been found end
    } else {
        $lookup_failed = <<<EOT
                  <tr>
                          <td colspan="2" align="center" class="tableh2">
                        <span style="color:red;font-weight:bold;">{$lang_forgot_passwd_php['err_unk_user']}</span>
                        </td>
                  </tr>

EOT;
    }
} elseif (isset($CLEAN['key']) && isset($CLEAN['id'])) {
    /*$randkey = addslashes($_GET['key']);
    $user_id = addslashes($_GET['id']);*/

    $sql = "SELECT null FROM {$cpg_udb->sessionstable} WHERE session_id = '" . md5($CLEAN['key'] . $CLEAN['id']) . "'";

    $result = cpg_db_query($sql);

    if (!mysql_num_rows($result)) {
        cpg_die($lang_forgot_passwd_php['forgot_passwd'], $lang_forgot_passwd_php['illegal_session']);
    }

    mysql_free_result($result);

    $sql = "SELECT {$cpg_udb->field['username']}, {$cpg_udb->field['email']} FROM {$cpg_udb->usertable} WHERE {$cpg_udb->field['user_id']} = {$CLEAN['id']}";

    $result = cpg_db_query($sql);

    if (!mysql_num_rows($result)) {
        cpg_die($lang_forgot_passwd_php['forgot_passwd'], $lang_forgot_passwd_php['err_unk_user']);
    }

    $row = mysql_fetch_assoc($result);
    mysql_free_result($sql);

    // Reset Password
    $new_password = $cpg_udb->make_password();

    $password = md5($new_password);

    $sql =  "UPDATE {$cpg_udb->usertable} SET {$cpg_udb->field['password']} = '$password' WHERE {$cpg_udb->field['email']} = '{$row['user_email']}'";
    cpg_db_query($sql);

    $template_vars = array(
        '{USER_NAME}' => $row['user_name'],
        '{PASSWORD}'  => $new_password,
        '{SITE_LINK}' => $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .'login.php',
        '{SITE_NAME}' => $CONFIG['gallery_name'],
    );
    // send the password
    if (!cpg_mail($row['user_email'],
        sprintf($lang_forgot_passwd_php['passwd_reset_subject'], $CONFIG['gallery_name']), nl2br(strtr($lang_forgot_passwd_php['reset_email'], $template_vars)))) {

        cpg_die(CRITICAL_ERROR, $lang_forgot_passwd_php['failed_sending_email'], __FILE__, __LINE__);
    }

    $sql = "DELETE FROM {$cpg_udb->sessionstable} WHERE session_id = '" . md5($CLEAN['key'] . $CLEAN['id']) . "'";
    cpg_db_query($sql);

    // output the message
    pageheader($lang_forgot_passwd_php['forgot_passwd'], "<META http-equiv=\"refresh\" content=\"3;url=login.php\">");
    $referer = 'login.php';
    msg_box($lang_forgot_passwd_php['forgot_passwd'], sprintf($lang_forgot_passwd_php['email_sent'], $row['user_email']), $lang_common['continue'], $referer);
    $USER_DATA['user_password'] = '***********';
    pagefooter();
    exit;
}

pageheader($lang_forgot_passwd_php['forgot_passwd']);

echo '<form action="forgot_passwd.php" method="post" name="passwordreminder" id="cpgform">';

$email_icon = cpg_fetch_icon('mail', 2);
$ok_icon    = cpg_fetch_icon('ok', 2);

starttable('-1', cpg_fetch_icon('key_enter', 2) . $lang_forgot_passwd_php['forgot_passwd'], 2);

echo <<< EOT
            $lookup_failed
                 <tr>
                        <td class="tableb" width="40%">{$email_icon}{$lang_forgot_passwd_php['enter_email']}</td>
                        <td class="tableb" width="60%"><input type="text" class="textinput" name="email" style="width: 100%" /></td>

                  </tr>
                  <tr>
                        <td colspan="2" align="center" class="tablef">
                            <script language="javascript" type="text/javascript">
                            <!--
                            document.passwordreminder.email.focus();
                            -->
                            </script>
                            <!--<input name="submitted" type="submit" class="button" value="{$lang_forgot_passwd_php['submit']}" />-->
                            <button type="submit" class="button" name="submitted" value="{$lang_common['ok']}"  tabindex="4">{$ok_icon}{$lang_common['ok']}</button>
                        </td>
                  </tr>

EOT;
endtable();
echo '</form>';

pagefooter();

?>