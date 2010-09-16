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
define('REGISTER_PHP', true);

require('include/init.inc.php');
require('include/mailer.inc.php');

if (!$CONFIG['allow_user_registration']) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

if (defined('UDB_INTEGRATION')) {
    $cpg_udb->register_page();
}

js_include('js/register.js');

$icon_array = array(
    'ok'       => cpg_fetch_icon('ok', 0),
    'username' => cpg_fetch_icon('my_profile', 2),
    'password' => cpg_fetch_icon('key_enter', 2),
    'email'    => cpg_fetch_icon('contact', 2),
    'blank'    => cpg_fetch_icon('blank', 2),
);

/*****************************
* function definitions start *
*****************************/

/**
* display_disclaimer()
*
* Display the disclaimer
*
* @param void
* @return void
**/
function display_disclaimer()
{
    global $CONFIG, $CPG_PHP_SELF, $lang_register_php, $icon_array;

    echo <<< EOT
        <form name="cpgform" id="cpgform" method="post" action="$CPG_PHP_SELF">

EOT;

    starttable(-1, cpg_fetch_icon('add_user', 2) . $lang_register_php['term_cond']);

    echo <<< EOT
    <tr>
        <td class="tableb" style="padding: 10px;">

EOT;
    echo str_replace('{SITE_NAME}', $CONFIG['gallery_name'], $lang_register_php['disclamer']);

    echo <<< EOT
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center" class="tablef">
            <button type="submit" class="button" name="agree" id="agree" value="{$lang_register_php['i_agree']}">{$icon_array['ok']}{$lang_register_php['i_agree']}</button>
        </td>
    </tr>

EOT;
    endtable();
    print '</form>';
}

/**
* input_user_info()
*
* Display the form fields
*
* @param string $errors
* @return void
**/
function input_user_info($errors = '')
{
    global $CONFIG, $CPG_PHP_SELF, $lang_register_php, $lang_common, $icon_array;

    $superCage = Inspekt::makeSuperCage();

    echo <<<EOT
    <form name="cpgform" id="cpgform" method="post" action="$CPG_PHP_SELF" onsubmit="return checkRegisterFormSubmit();">

EOT;

    starttable(-1, cpg_fetch_icon('add_user', 2) . $lang_register_php['enter_info'], 2);

    echo <<< EOT
    <tr>
        <td class="tableb" colspan="2">
            <div id="form_not_submit_top" class="formFieldWarning" style="display:none;">
                {$lang_register_php['form_not_submit']}
            </div>
        </td>
    </tr>

EOT;

    $inline_disclaimer = str_replace('{SITE_NAME}', $CONFIG['gallery_name'], $lang_register_php['disclamer']);

    $form_data = array(
        array('label', $lang_register_php['required_info']),
        array('input', 'username', $icon_array['username'] . $lang_register_php['username'], 25),
        !empty($CONFIG['global_registration_pw']) ? array('password', 'global_registration_pw', $icon_array['password'] . $lang_register_php['global_registration_pw'], 25) : '',
        array('password', 'password', $icon_array['password'] . $lang_register_php['password']),
        array('password', 'password_verification', $icon_array['password'] . $lang_register_php['password_again']),
        array('input', 'email', $icon_array['email'] . $lang_register_php['email'], 255),
        array('label', $lang_register_php['optional_info'])
    );
    $optional_data = 0;
    if ($CONFIG['user_profile1_name'] != '') {
        $form_data[] = array('input', 'user_profile1', $icon_array['blank'] . $CONFIG['user_profile1_name'], 255);
        $optional_data++;
    }
    if ($CONFIG['user_profile2_name'] != '') {
        $form_data[] = array('input', 'user_profile2', $icon_array['blank'] . $CONFIG['user_profile2_name'], 255);
        $optional_data++;
    }
    if ($CONFIG['user_profile3_name'] != '') {
        $form_data[] = array('input', 'user_profile3', $icon_array['blank'] . $CONFIG['user_profile3_name'], 255);
        $optional_data++;
    }
    if ($CONFIG['user_profile4_name'] != '') {
        $form_data[] = array('input', 'user_profile4', $icon_array['blank'] . $CONFIG['user_profile4_name'], 255);
        $optional_data++;
    }
    if ($CONFIG['user_profile5_name'] != '') {
        $form_data[] = array('input', 'user_profile5', $icon_array['blank'] . $CONFIG['user_profile5_name'], 255);
        $optional_data++;
    }
    if ($CONFIG['user_profile6_name'] != '') {
        $form_data[] = array('textarea', 'user_profile6', $icon_array['blank'] . $CONFIG['user_profile6_name'], 255);
        $optional_data++;
    }
    if ($optional_data == 0) {
        $form_data = array_slice($form_data, 0, count($form_data)-1);
    }

    $form_data = CPGPluginAPI::filter('register_form_create', $form_data);
    
    if ($CONFIG['user_registration_disclaimer'] == 2) {
        $form_data[] = array('label', $lang_register_php['term_cond']);
        $form_data[] = array('checkbox', 'agree', $inline_disclaimer, $lang_register_php['i_agree'], 1);
    } else {
        $form_data[] = array('hidden', 'agree', 1);
    }

    $loopCounter = 0;
    
    foreach ($form_data as $element) {
    
        if (empty($element)) {
            continue;
        }
      
        if ($loopCounter / 2 == floor($loopCounter / 2)) {
            $row_style = 'tableb';
        } else {
            $row_style = 'tableb tableb_alternate';
        }
      
        $loopCounter++;
      
        switch ($element[0]) {
      
        case 'label':
        
              echo <<< EOT
    <tr>
        <td colspan="2" class="tableh2">
            {$element[1]}
        </td>
    </tr>

EOT;
            break;

        case 'input':
         
            if ($superCage->post->keyExists($element[1])) {
                $value = $superCage->post->getEscaped($element[1]);
            } else {
                $value = '';
            }
            
            if (isset($lang_register_php[$element[1].'_warning1'])) {
                $warning1 = '<div id="'.$element[1].'_warning1" class="cpg_message_validation formFieldWarning" style="display:none;">' . $lang_register_php[$element[1].'_warning1'] . '</div>';
            } else {
                $warning1 = '';
            }
            
            if (isset($lang_register_php[$element[1].'_warning2']) == TRUE) {
                $warning2 = '<div id="'.$element[1].'_warning2" class="cpg_message_validation formFieldWarning" style="display:none;">' . $lang_register_php[$element[1].'_warning2'] . '</div>';
            } else {
                $warning2 = '';
            }
            
            if ($element[2]) {
            
                echo <<< EOT
    <tr>
        <td width="40%" class="{$row_style}">
            {$element[2]}
        </td>
        <td width="60%" class="{$row_style}" valign="top">
            <input type="text" style="width: 100%" name="{$element[1]}" id="{$element[1]}" maxlength="{$element[3]}" value="$value" class="textinput" />
            {$warning1}
            {$warning2}
        </td>
    </tr>

EOT;
            }
            
            break;

        case 'radio':
          
            // added the radio option for possible future use. The array definition would have to look like this:
            // array('radio', 'user_var', 'Text label', 'option 1','option 2'),
            // enabling this option requires changes in profile.php and usermgr.php as well
         
            if ($superCage->post->keyExists($element[1])) {
                $value = $superCage->post->getAlnum($element[1]);
            } else {
                $value = '';
            }
                
            if ($element[2]) {
            
                echo <<< EOT
    <tr>
        <td width="40%" class="{$row_style}"  height="25">
            {$element[2]}
        </td>
        <td width="60%" class="{$row_style}" valign="top">
            <input type="radio" name="{$element[1]}" id="{$element[1]}1" value="{$element[3]}" class="radio" />
            <label for="{$element[1]}1" class="clickable_option">{$element[3]}</label>
            <input type="radio" name="{$element[1]}" id="{$element[1]}2" value="{$element[4]}" class="radio" />
            <label for="{$element[1]}2" class="clickable_option">{$element[4]}</label>
        </td>
    </tr>

EOT;
            }
            
            break;

        case 'checkbox':
          
            // added the checkbox option for possible future use. The array definition would have to look like this:
            // array('checkbox', 'user_var', 'preceeding text', 'Text label', 'value', 'Number of columns', 'attribute'),
            // enabling this option requires changes in profile.php and usermgr.php as well
            // Number of columns can be 1 or 2, default is 1.
            // Attribute can be anything that you want to pass to the <input>-tag, e.g. the parameter 'checked="checked"'.
            // or an event handler.

            if ($superCage->post->keyExists($element[1])) {
                $value = $superCage->post->getAlnum($element[1]);
            } else {
                $value = '';
            }
            
            if ($element[3]) {
            
                if ($element[5] == 2) {
                    echo <<<EOT
    <tr>
        <td width="40%" class="{$row_style}">
            {$element[2]}
        </td>
        <td width="60%" class="{$row_style}" valign="top">
            <input type="checkbox" name="{$element[1]}" id="{$element[1]}" value="{$element[4]}" class="checkbox" {$element[6]} />
            <label for="{$element[1]}" class="clickable_option">{$element[3]}</label>
        </td>
    </tr>

EOT;
                } else {
                    echo <<<EOT
    <tr>
        <td class="{$row_style}" colspan="2">
            {$element[2]}
            <br />
            <input type="checkbox" name="{$element[1]}" id="{$element[1]}" value="{$element[4]}" class="checkbox" />
            <label for="{$element[1]}" class="clickable_option">{$element[3]}</label>
        </td>
    </tr>

EOT;
                }
            }

            break;

        case 'textarea':

            if ($superCage->post->keyExists($element[1])) {
                $value = $superCage->post->getEscaped($element[1]);
            } else {
                $value = '';
            }
              
            if ($element[2]) {
            
                echo <<< EOT
    <tr>
        <td width="40%" class="{$row_style}">
            {$element[2]}
        </td>
        <td width="60%" class="{$row_style}" valign="top">
            <textarea name="{$element[1]}" rows="7" cols="60" class="textinput" style="width:100%">$value</textarea>
        </td>
    </tr>


EOT;
            }
            break;

        case 'password':
          
            if (isset($lang_register_php[$element[1].'_warning1'])) {
                $warning1 = '<div id="'.$element[1].'_warning1" class="cpg_message_validation formFieldWarning" style="display:none;">' . $lang_register_php[$element[1].'_warning1'] . '</div>';
            } else {
                $warning1 = '';
            }
              
            if (isset($lang_register_php[$element[1].'_warning2'])) {
                $warning2 = '<div id="'.$element[1].'_warning2" class="cpg_message_validation formFieldWarning" style="display:none;">' . $lang_register_php[$element[1].'_warning2'] . '</div>';
            } else {
                $warning2 = '';
            }
                          
            echo <<< EOT
    <tr>
        <td width="40%" class="{$row_style}">
            {$element[2]}
        </td>
        <td width="60%" class="{$row_style}" valign="top">
            <input type="password" style="width: 100%" name="{$element[1]}" id="{$element[1]}" value="" class="textinput" />
            {$warning1}
            {$warning2}
        </td>
    </tr>

EOT;

            break;

        case 'hidden':
        
            echo <<< EOT
    <tr>
        <td colspan="2" class="{$row_style}">
            <input type="hidden" name="{$element[1]}" id="{$element[1]}" value="{$element[2]}" />
        </td>
    </tr>

EOT;

            break;

        default:
            cpg_die(CRITICAL_ERROR, 'Invalid action for form creation ' . $element[0], __FILE__, __LINE__);
        }
    }

    if ($errors) {
    
        echo <<< EOT
    <tr>
        <td colspan="2" class="tableh2">
            {$lang_register_php['error']}
        </td>
    </tr>
    <tr>
        <td colspan="2" class="tablef">
                <ul>$errors</ul>
        </td>
    </tr>

EOT;
    }

    // captcha code
    if ($CONFIG['registration_captcha'] != 0) {
    
        $help = cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_common['captcha_help_title']))).'&amp;t='.urlencode(base64_encode(serialize($lang_common['captcha_help']))), 470, 245);

        $captcha_print = <<< EOT
    <tr>
        <td align="right" class="tablef">
            {$lang_common['confirm']}&nbsp;{$help}
        </td>
        <td class="tablef">
            <input type="text" name="confirmCode" id="confirmCode" size="5" maxlength="5" class="textinput" />
            <img src="captcha.php" align="middle" border="0" alt="" />
        </td>
    </tr>
EOT;

        $captcha_print = CPGPluginAPI::filter('captcha_register_print', $captcha_print);
        echo $captcha_print;
    }

    echo <<< EOT
    <tr>
        <td colspan="2" align="center" class="tablef">
            <button type="submit" class="button" name="submit" id="submit" value="{$lang_register_php['submit']}">{$icon_array['ok']}{$lang_register_php['submit']}</button>
        </td>
    </tr>
    <tr>
        <td class="tablef" colspan="2">
            <div id="form_not_submit_bottom" class="formFieldWarning" style="display:none;">
                {$lang_register_php['form_not_submit']}
            </div>
        </td>
    </tr>

EOT;
    endtable();
    print '</form>';
}

/**
* get_post_var()
*
* Check the posted data
*
* @param array $var
* @return array $var
**/
function get_post_var($var)
{
    global $lang_errors;

    $superCage = Inspekt::makeSuperCage();

    if (!$superCage->post->keyExists($var) || !trim($superCage->post->getEscaped($var))) {
        cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'] . " ($var)", __FILE__, __LINE__);
    }
    
    return $superCage->post->getEscaped($var);
}

function check_user_info(&$error)
{
    global $CONFIG;
    global $lang_register_php, $lang_common, $lang_register_approve_email;
    global $lang_register_user_login, $lang_errors;

    $superCage = Inspekt::makeSuperCage();

    $user_name = trim(get_post_var('username'));
    $password = trim(get_post_var('password'));
    $password_again = trim(get_post_var('password_verification'));
    $email = trim(get_post_var('email'));
    $profile1 = $superCage->post->getEscaped('user_profile1');
    $profile2 = $superCage->post->getEscaped('user_profile2');
    $profile3 = $superCage->post->getEscaped('user_profile3');
    $profile4 = $superCage->post->getEscaped('user_profile4');
    $profile5 = $superCage->post->getEscaped('user_profile5');
    $profile6 = $superCage->post->getEscaped('user_profile6');
    $agree_disclaimer = $superCage->post->getEscaped('agree');
    $captcha_confirmation = $superCage->post->getEscaped('confirmCode');

    $sql = "SELECT null FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '$user_name'";
    $result = cpg_db_query($sql);

    if (mysql_num_rows($result)) {
        $error = '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['err_user_exists'] . '</li>';
        return false;
    }
    
    mysql_free_result($result);

    if (utf_strlen($user_name) < 2) {
        $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['username_warning2'] . '</li>';
    }
    
    if (!empty($CONFIG['global_registration_pw'])) {
    
        $global_registration_pw = get_post_var('global_registration_pw');
      
        if ($global_registration_pw != $CONFIG['global_registration_pw']) {
            $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['err_global_pw'] . '</li>';
        } elseif ($password == $CONFIG['global_registration_pw']) {
            $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['err_global_pass_same'] . '</li>';
        }
    }

    if (utf_strlen($password) < 2) {
        $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['password_warning1'] . '</li>';
    }
    
    if ($password == $user_name) {
        $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['password_warning2'] . '</li>';
    }
    
    if ($password != $password_again) {
        $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['password_verification_warning1'] . '</li>';
    }
    
    if (!Inspekt::isEmail($email)) {
        $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['email_warning2'] . '</li>';
    }
    
    if ($CONFIG['user_registration_disclaimer'] == 2 && $agree_disclaimer != 1) {
        $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['err_disclaimer'] . '</li>';
    }
    
    // Perform the ban check against email address and username
    $result = cpg_db_query("SELECT null FROM {$CONFIG['TABLE_BANNED']} WHERE user_name = '$user_name' AND brute_force = 0 LIMIT 1");

    if (mysql_num_rows($result)) {
        $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['user_name_banned'] . '</li>';
    }

    mysql_free_result($result);
    
    $result = cpg_db_query("SELECT null FROM {$CONFIG['TABLE_BANNED']} WHERE email = '$email' AND brute_force = 0 LIMIT 1");

    if (mysql_num_rows($result)) {
        $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['email_address_banned'] . '</li>';
    }

    mysql_free_result($result);
    
    // check captcha
    if ($CONFIG['registration_captcha'] != 0) {
    
        if (!captcha_plugin_enabled()) {
            require("include/captcha.inc.php");
            if (!PhpCaptcha::Validate($captcha_confirmation)) {
                $error .= '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_errors['captcha_error'] . '</li>';
            }
        } else {
            $error = CPGPluginAPI::filter('captcha_register_validate', $error);
        }
    }
    
    if (!$CONFIG['allow_duplicate_emails_addr']) {
    
        $sql = "SELECT null FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '$email'";
        $result = cpg_db_query($sql);

        if (mysql_num_rows($result)) {
            $error = '<li style="list-style-image:url(images/icons/stop.png)">' . $lang_register_php['err_duplicate_email'] . '</li>';
        }

        mysql_free_result($result);
    }

    if ($error != '') {
        return false;
    }
    
    if ($CONFIG['reg_requires_valid_email'] || $CONFIG['admin_activation']) {
        $active = 'NO';
        list($usec, $sec) = explode(' ', microtime());
        $seed = (float) $sec + ((float) $usec * 100000);
        srand($seed);
        $act_key = md5(uniqid(rand(), 1));
    } else {
        $active = 'YES';
        $act_key = '';
    }

    $encpassword = md5($password);
    
    $user_language = $CONFIG['lang'];

    $sql = "INSERT INTO {$CONFIG['TABLE_USERS']} (user_regdate, user_active, user_actkey, user_name, user_password, user_email, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6, user_language) VALUES (NOW(), '$active', '$act_key', '$user_name', '$encpassword', '$email', '$profile1', '$profile2', '$profile3', '$profile4', '$profile5', '$profile6', '$user_language')";
    $result = cpg_db_query($sql);
    $user_array = array();
    $user_array['user_id'] = mysql_insert_id();
    $user_array['user_name'] = $user_name;
    $user_array['user_email'] = $email;
    $user_array['user_active'] = $active;
    CPGPluginAPI::filter('register_form_submit', $user_array);

    if ($CONFIG['log_mode']) {
        log_write('New user "'.$user_name.'" registered', CPG_ACCESS_LOG);
    }
    
    // Create a personal album if corresponding option is enabled
    if ($CONFIG['personal_album_on_registration'] == 1) {

        $catid = mysql_insert_id() + FIRST_USER_CAT;
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_ALBUMS']} (`title`, `category`) VALUES ('$user_name', $catid)");
    }

    // Registrations must be activated/verified by the user clicking a link in an email
    if ($CONFIG['reg_requires_valid_email']) {
        // Mail the user the activation/verification link
        $act_link = rtrim($CONFIG['site_url'], '/') . '/register.php?activate=' . $act_key;

        $template_vars = array(
            '{SITE_NAME}' => $CONFIG['gallery_name'],
            '{USER_NAME}' => $user_name,
            '{ACT_LINK}'  => $act_link,
        );

        if (!cpg_mail($email, sprintf($lang_register_php['confirm_email_subject'], $CONFIG['gallery_name']), nl2br(strtr($lang_register_php['confirm_email'], $template_vars)))) {
            cpg_die(CRITICAL_ERROR, $lang_register_php['failed_sending_email'], __FILE__, __LINE__);
        }
        msg_box($lang_register_php['information'], $lang_register_php['thank_you'], $lang_common['continue'], 'index.php');
    } else {
        if ($CONFIG['admin_activation']) {
            // We need admin activation only
            msg_box($lang_register_php['information'], $lang_register_php['thank_you_admin_activation'], $lang_common['continue'], 'index.php');
        } else {
            // No activation required, account is ready for login
            msg_box($lang_register_php['information'], $lang_register_php['acct_active'], $lang_common['continue'], 'index.php');
        }
    }

    // email notification or actication link to admin
    if ($CONFIG['reg_notify_admin_email'] || ($CONFIG['admin_activation'] && !$CONFIG['reg_requires_valid_email'])) {
        if (UDB_INTEGRATION == 'coppermine') {
            // get default language in which to inform the admins
            $result = cpg_db_query("SELECT user_id, user_email, user_language FROM {$CONFIG['TABLE_USERS']} WHERE user_group = 1");
            while ( ($row = mysql_fetch_assoc($result)) ) {
                if (!empty($row['user_email'])) {
                    $admins[$row['user_id']] = array('email' => $row['user_email'], 'lang' => $row['user_language']);
                }
            }
        } else {
            //@todo: is it possible to get the language from bridged installs?
            $admins[] = array('email' => $CONFIG['gallery_admin_email'], 'lang' => 'english');
        }
        foreach($admins as $admin) {
            //check if the admin language is available
            if (file_exists("lang/{$admin['lang']}.php")) {
                $lang_register_php_def = cpg_get_default_lang_var('lang_register_php', $admin['lang']);
                $lang_register_approve_email_def = cpg_get_default_lang_var('lang_register_approve_email', $admin['lang']);
            } else {
                $lang_register_php_def = cpg_get_default_lang_var('lang_register_php');
                $lang_register_approve_email_def = cpg_get_default_lang_var('lang_register_approve_email');
            }
            
    
            // if the admin has to activate the login, give them the link to do so; but only if users don't have to verify their email address 
            if ($CONFIG['admin_activation'] && !$CONFIG['reg_requires_valid_email']) {
    
                $act_link = rtrim($CONFIG['site_url'], '/') . '/register.php?activate=' . $act_key;
    
                $template_vars = array(
                    '{SITE_NAME}' => $CONFIG['gallery_name'],
                    '{USER_NAME}' => $user_name,
                    '{ACT_LINK}' => $act_link,
                );

                cpg_mail($admin['email'], sprintf($lang_register_php_def['notify_admin_request_email_subject'], $CONFIG['gallery_name']), nl2br(strtr($lang_register_approve_email_def, $template_vars)));
    
            } elseif ($CONFIG['reg_notify_admin_email']) {
            
                // otherwise, email is for information only
                cpg_mail($admin['email'], sprintf($lang_register_php_def['notify_admin_email_subject'], $CONFIG['gallery_name']), sprintf($lang_register_php_def['notify_admin_email_body'], $user_name));
            }
        }
    }

    return true;
}

/***************************
* function definitions end *
***************************/




/***************************
* main code start          *
***************************/

// Activate pending registration
if ($superCage->get->keyExists('activate')) {

    $act_key = $superCage->get->getAlnum('activate');
    
    if (strlen($act_key) != 32) {
        cpg_die(ERROR, $lang_register_php['acct_act_failed'], __FILE__, __LINE__);
    }

    $sql = "SELECT user_active, user_email, user_email_valid, user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_actkey = '$act_key' LIMIT 1";
    $result = cpg_db_query($sql);

    if (!mysql_num_rows($result)) {
        cpg_die(ERROR, $lang_register_php['acct_act_failed'], __FILE__, __LINE__);
    }
    
    $row = mysql_fetch_assoc($result);
    mysql_free_result($result);

    if ($row['user_active'] == 'YES') {
        cpg_die(ERROR, $lang_register_php['acct_already_act'], __FILE__, __LINE__);
    }

    pageheader($lang_register_php['page_title']);

    if ($CONFIG['reg_requires_valid_email'] && !$CONFIG['admin_activation']) {
         // activate user (by user)
        $sql = "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'YES' WHERE user_actkey = '$act_key' LIMIT 1";
        $user_status = 'active_user';
    } elseif ($CONFIG['admin_activation'] && !$CONFIG['reg_requires_valid_email']) {
        // activate user (by admin)
        $sql = "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'YES' WHERE user_actkey = '$act_key' LIMIT 1";
        $user_status = 'active_admin';
    } else {
        if ($row['user_email_valid'] == 'YES') {
            // activate user (by admin)
            $sql = "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'YES' WHERE user_actkey = '$act_key' LIMIT 1";
            $user_status = 'active_admin';
        } else {
            // email validated by user, send activation link to admin
            $sql = "UPDATE {$CONFIG['TABLE_USERS']} SET user_email_valid = 'YES' WHERE user_actkey = '$act_key' LIMIT 1";
            $user_status = 'valid';
        }
    }
    cpg_db_query($sql);
    CPGPluginAPI::filter('register_user_activation', $act_key);

    //after admin approves, user receives email notification
    if ($user_status == 'active_admin') {
    
        msg_box($lang_register_php['information'], $lang_register_php['acct_active_admin_activation'], $lang_common['continue'], 'index.php');

        $template_vars = array(
            '{SITE_LINK}' => $CONFIG['site_url'],
            '{USER_NAME}' => $row['user_name'],
            '{SITE_NAME}' => $CONFIG['gallery_name'],
        );
        
        cpg_mail($row['user_email'], sprintf($lang_register_php['notify_user_email_subject'], $CONFIG['gallery_name']), nl2br(strtr($lang_register_php['activated_email'], $template_vars)));

    } elseif ($user_status == 'valid') {
        // send activation link to admin

        msg_box($lang_register_php['information'], $lang_register_php['thank_you_admin_activation'], $lang_common['continue'], 'index.php');

        if (UDB_INTEGRATION == 'coppermine') {
            // get default language in which to inform the admins
            $result = cpg_db_query("SELECT user_id, user_email, user_language FROM {$CONFIG['TABLE_USERS']} WHERE user_group = 1");
            while ( ($row = mysql_fetch_assoc($result)) ) {
                if (!empty($row['user_email'])) {
                    $admins[$row['user_id']] = array('email' => $row['user_email'], 'lang' => $row['user_language']);
                }
            }
        } else {
            //@todo: is it possible to get the language from bridged installs?
            $admins[] = array('email' => $CONFIG['gallery_admin_email'], 'lang' => 'english');
        }
        foreach($admins as $admin) {
            //check if the admin language is available
            if (file_exists("lang/{$admin['lang']}.php")) {
                $lang_register_php_def = cpg_get_default_lang_var('lang_register_php', $admin['lang']);
                $lang_register_approve_email_def = cpg_get_default_lang_var('lang_register_approve_email', $admin['lang']);
            } else {
                $lang_register_php_def = cpg_get_default_lang_var('lang_register_php');
                $lang_register_approve_email_def = cpg_get_default_lang_var('lang_register_approve_email');
            }
    
            $act_link = rtrim($CONFIG['site_url'], '/') . '/register.php?activate=' . $act_key;

            $template_vars = array(
                '{SITE_NAME}' => $CONFIG['gallery_name'],
                '{USER_NAME}' => $row['user_name'],
                '{ACT_LINK}' => $act_link,
            );

            cpg_mail($admin['email'], sprintf($lang_register_php_def['notify_admin_request_email_subject'], $CONFIG['gallery_name']), nl2br(strtr($lang_register_approve_email_def, $template_vars)));
        }
    } else {
        //user self-activated, gets message box that account was activated
        msg_box($lang_register_php['information'], $lang_register_php['acct_active'], $lang_common['continue'], 'index.php');
    }

} else {

    pageheader($lang_register_php['page_title']);
  
    if ($CONFIG['user_registration_disclaimer'] == 1 && !$superCage->post->keyExists('submit') && !$superCage->post->keyExists('agree')) {

        // display the disclaimer page
        display_disclaimer();

    } else {

        if (!$superCage->post->keyExists('submit')) {
            input_user_info();
        } else {
            if (!check_user_info($errors)) {
                input_user_info($errors);
            }
        }
    }
}

pagefooter();

?>