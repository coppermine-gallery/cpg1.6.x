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

define('IN_COPPERMINE', true);
define('SEND_ACTIVATION_PHP', true);
define('REGISTER_PHP', true);

require('include/init.inc.php');

include_once('include/mailer.inc.php');

if (USER_ID) {
    cpg_die(ERROR, $lang_send_activation_php['err_already_logged_in'], __FILE__, __LINE__);
}

if ($CONFIG['reg_requires_valid_email'] == 0) {
    cpg_die(ERROR, $lang_send_activation_php['activation_not_required']);
}

$lookup_failed = '';

if ($superCage->post->KeyExists('email') && $superCage->post->testEmail('email')) {

    $emailaddress = $superCage->post->testEmail('email');

    $sql = "SELECT user_id, user_group, user_active, user_name, user_email, user_actkey FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '$emailaddress' AND user_active = 'NO'";
    $results = cpg_db_query($sql);
    
    if (mysql_num_rows($results)) { // something has been found start
    
        $USER_DATA = mysql_fetch_assoc($results);

        $act_link = rtrim($CONFIG['site_url'], '/') . '/register.php?activate=' . $USER_DATA['user_actkey'];

        $template_vars = array(
            '{SITE_NAME}' => $CONFIG['gallery_name'],
            '{USER_NAME}' => $USER_DATA['user_name'],
            '{ACT_LINK}' => $act_link,
        );
        
        if (!cpg_mail($USER_DATA['user_email'], sprintf($lang_register_php['confirm_email_subject'], $CONFIG['gallery_name']), nl2br(strtr($lang_register_php['confirm_email'], $template_vars)))) {
            cpg_die(CRITICAL_ERROR, $lang_register_php['failed_sending_email'], __FILE__, __LINE__);
        }

        // output the message
        pageheader($lang_send_activation_php['resend_act_link'], "<META http-equiv=\"refresh\" content=\"3;url=index.php\">");
        $referer = 'index.php';
        msg_box($lang_send_activation_php['resend_act_link'], sprintf($lang_send_activation_php['activation_email_sent'], $USER_DATA['user_email']), $lang_common['continue'], $referer);
        pagefooter();
        exit;
        // something has been found end
    } else {
        $lookup_failed = <<<EOT
                  <tr>
                      <td colspan="2" align="center" class="tableh2">
                          <span style="color:red"><strong>{$lang_send_activation_php['err_unk_user']}</strong></span>
                      </td>
                  </tr>

EOT;
    }
}

pageheader($lang_send_activation_php['resend_act_link']);

echo '<form action="send_activation.php" method="post" name="activationlink" id="cpgform">';

starttable(-1, $lang_send_activation_php['resend_act_link'], 2);

echo <<< EOT
            $lookup_failed
                 <tr>
                     <td class="tableb" width="40%">{$lang_send_activation_php['enter_email']}</td>
                     <td class="tableb" width="60%"><input type="text" class="textinput" name="email" style="width: 100%" /></td>
                 </tr>
                 <tr>
                     <td colspan="2" align="center" class="tablef">
                         <script language="javascript" type="text/javascript">
                         <!--
                             document.activationlink.email.focus();
                         -->
                         </script>
                         <input name="submitted" type="submit" class="button" value="{$lang_send_activation_php['submit']}" />
                     </td>
                 </tr>
EOT;

endtable();
echo '</form>';

pagefooter();

?>