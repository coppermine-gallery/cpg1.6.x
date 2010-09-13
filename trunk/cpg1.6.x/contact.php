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
define('CONTACT_PHP', true);

require_once('include/init.inc.php');
require_once('include/mailer.inc.php');

if (USER_ID) {
    $USER_DATA = array_merge($USER_DATA, $cpg_udb->get_user_infos(USER_ID));
}

$icon_array['ok'] = cpg_fetch_icon('ok', 1);

$js_contact['check']['one'] = (!USER_ID && $CONFIG['contact_form_guest_name_field'] == 2) ? true : false;
$js_contact['check']['two'] = (!USER_ID) ? true : false;
$js_contact['check']['three'] = (!USER_ID && $CONFIG['contact_form_guest_email_field'] == 2) ? true : false;
$js_contact['check']['four'] = ($CONFIG['contact_form_subject_field'] == 2) ? true : false;
$js_contact['your_name'] = $lang_contact_php['your_name'];
$js_contact['name_field_invalid'] = $lang_contact_php['name_field_invalid'];
$js_contact['email_field_invalid'] = $lang_contact_php['email_field_invalid'];

set_js_var('contact', $js_contact);

unset($js_contact);

js_include('js/contact.js');



// determine if the visitor is allowed to access
if (!USER_ID) { // visitor is guest
    if ($CONFIG['contact_form_guest_enable'] == 0) {
        cpg_die($lang_common['error'], $lang_errors['access_denied'], __FILE__, __LINE__); //guests are not allowed
    }
} else { // visitor is a registered user
    if ($CONFIG['contact_form_registered_enable'] == 0 && !GALLERY_ADMIN_MODE) {
        cpg_die($lang_common['error'], $lang_errors['access_denied'], __FILE__, __LINE__); //registered users are not allowed
    }
}

// do the stuff here when the form has been submit
if ($superCage->post->keyExists('submit')) {
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    // perform validity checks
    $error = 0;

    $user_name = $superCage->post->getEscaped('sender_name');
    $email_address = $superCage->post->getEscaped('sender_email');
    $subject = $superCage->post->getEscaped('subject');
    $message = addslashes(htmlspecialchars($superCage->post->getRaw('message')));
    $captcha = ($matches = $superCage->post->getMatched('captcha', '/^[a-zA-Z0-9]+$/')) ? $matches[0] : '';

    // sanitize user-input
    $html_message = str_replace('<', '&lt;', $message);

    $expand_array = array();

    // check captcha
    if ((!USER_ID && $CONFIG['contact_form_guest_enable'] == 1) || (USER_ID && $CONFIG['contact_form_registered_enable'] == 1)) {
        if (!captcha_plugin_enabled()) {
            require_once("include/captcha.inc.php");
            if (!PhpCaptcha::Validate($captcha)) {
                $captcha_remark = $lang_errors['captcha_error'];
                $expand_array[] = 'captcha_remark';
                $error++;
            }
        } else {
            CPGPluginAPI::action('captcha_contact_validate', null);
        }
    }
    
    // check email address
    if (!USER_ID && $CONFIG['contact_form_guest_email_field'] == 2) {
        if (!Inspekt::isEmail($email_address)) {
            $expand_array[] = 'email_remark';
            $error++;
        }
    }
    
    // check subject field
    if ($CONFIG['contact_form_subject_field'] >= 2 && $subject == '') {
        $expand_array[] = 'subject_remark';
        $error++;
    }
    
    // check message field
    if ($message == '') {
        $expand_array[] = 'message_remark';
        $error++;
    }
    
    // send the mail if no error occured
    if ($error == 0) {
    
        // compose the email
        $original_subject = $subject;
        if ($subject != '') {
            if ($CONFIG['contact_form_subject_content'] != '') {
                $subject = $CONFIG['contact_form_subject_content'] . ': '. $subject;
            } else {
                $subject = $subject;
            }
        } else {
            if ($CONFIG['contact_form_subject_content'] != '') {
                $subject = $CONFIG['contact_form_subject_content'];
            } else {
                $subject = $lang_contact_php['title'] . ': ' . $CONFIG['site_url']; // We mustn't send an email with an empty subject line, so let's populate it with something that makes sense
            }
        }
        $message_header = sprintf($lang_contact_php['email_headline'], localised_date(-1, $lang_date['scientific']), $CONFIG['ecards_more_pic_target'] . $CPG_PHP_SELF, $raw_ip);

        if ($CONFIG['contact_form_sender_email'] == 0) {
            $sender_email = $CONFIG['gallery_admin_email'];
            $sender_name = $CONFIG['gallery_admin_email'];
        }
        
        if (USER_ID) {
    
            $visitor_status = $lang_contact_php['registered_user'];
            $text_user_name = '"'.$USER_DATA['user_name'].'"';
            $html_user_name = '<a href="'.$CONFIG['ecards_more_pic_target'].'profile.php?uid='.USER_ID.'">'.$USER_DATA['user_name'].'</a>';
          
            if ($USER_DATA['user_email']) {
            
                $email_address = $USER_DATA['user_email'];
                
                if ($CONFIG['contact_form_sender_email'] == 1) {
                    $sender_email = $email_address;
                    $sender_name = $USER_DATA['user_name'];
                }
                
            } else {
                $email_address = $lang_contact_php['unknown'];
                $sender_email = $CONFIG['gallery_admin_email'];
                $sender_name = $CONFIG['gallery_admin_email'];
            }
            
        } else {
        
            $visitor_status = $lang_contact_php['guest'];
          
            if ($user_name == '') {
                $user_name = $lang_contact_php['unknown'];
            }
          
            $text_user_name = '"'.$user_name.'"';
            $html_user_name = '&laquo;'.$user_name.'&raquo;';
            
            if ($email_address == '') {
            
                $email_address = $lang_contact_php['unknown'];
                $sender_email = $CONFIG['gallery_admin_email'];
                $sender_name = $CONFIG['gallery_admin_email'];
                
            } elseif ($CONFIG['contact_form_sender_email'] == 1 && $user_name != '') {
            
                $sender_email = $email_address;
                $sender_name = $user_name;
                
            } else {
            
                $sender_email = $CONFIG['gallery_admin_email'];
                $sender_name = $CONFIG['gallery_admin_email'];
            }
        }
        
        $html_message = $message_header .
                        '<br />' . $LINEBREAK .
                        sprintf($lang_contact_php['user_info'], $visitor_status, $html_user_name, $email_address) .
                        '<br />' . $LINEBREAK .
                        '<div style="border:1px solid black">' .
                        $html_message .
                        '</div>';
        $html_message = nl2br($html_message);

        $message = $message_header .
                   $LINEBREAK .
                   sprintf($lang_contact_php['user_info'], $visitor_status, $text_user_name, $email_address) .
                   $LINEBREAK .
                   $message;

                    if ($superCage->server->testip('REMOTE_ADDR')) {
                        $ip = $superCage->server->getRaw('REMOTE_ADDR');
                    } else {
                        $ip = 'Unknown';
                    }

        if (!cpg_mail($CONFIG['gallery_admin_email'], $subject, $html_message, 'text/html', $sender_name, $sender_email, $message)) {
            if ($CONFIG['log_mode'] != CPG_NO_LOGGING) {
                log_write("Sending an email using the contact form failed (name: $sender_name, email: $sender_email, subject: $original_subject, IP: $ip", CPG_MAIL_LOG);
            }
            cpg_die(ERROR, $lang_contact_php['failed_sending_email'], __FILE__, __LINE__);
        } else { // sending the email has been successfull, redirect the user
            if ($CONFIG['log_mode'] == CPG_LOG_ALL) {
                log_write("Sending email from contact form successful (name: $sender_name, email: $sender_email, subject: $original_subject, IP: $ip", CPG_MAIL_LOG);
            }

            if ( ($matches = $superCage->post->getMatched('referer', '/((\%3C)|<)[^\n]+((\%3E)|>)|(.*http.*)|(.*script.*)/i')) ) {
                $CPG_REFERER = 'index.php';
            } else {
                /**
                 * Using getRaw() since we are checking the referer in the above if condition.
                 */
                $CPG_REFERER = $superCage->post->getRaw('referer');
            }

            cpgRedirectPage($CONFIG['ecards_more_pic_target'].$CPG_REFERER, $lang_common['information'], $lang_contact_php['email_sent']);
        }
    } // beyond this point an error must have happened - let the visitor review his input

} else { // the form has not been submit yet - populate default values

    if (!USER_ID && isset($USER['name'])) {
        $user_name = strtr($USER['name'], $HTML_SUBST);
    } else {
        $user_name = $lang_contact_php['your_name'];
    }
  
    $email_address = '';
    $subject =  '';
    $message =  '';
    $captcha_remark = $lang_contact_php['captcha_field_mandatory'];
}

pageheader($lang_contact_php['title']);
print '<form method="post" action="'.$CPG_PHP_SELF.'" name="contactForm" id="contactForm" onsubmit="return validateContactFormFields();">'.$LINEBREAK;

starttable('100%', cpg_fetch_icon('contact', 2) . $lang_contact_php['title'], 3);

// name field
if (!USER_ID && $CONFIG['contact_form_guest_name_field'] != 0) {
    print <<< EOT
    <tr>
        <td class="tableb" align="right">
            {$lang_contact_php['your_name']}
        </td>
        <td class="tableb">
            <span id="name_wrapper" class="{$highlightFieldCSS}">
                <input type="text" class="textinput" name="sender_name" size="30" maxlength="30" value="{$user_name}" style="width:100%" />
            </span>
        </td>
        <td class="tableb">
            <span id="name_remark" style="display:none">{$lang_contact_php['name_field_mandatory']}</span>
        </td>
    </tr>
EOT;
}

// email field
if (!USER_ID && $CONFIG['contact_form_guest_email_field'] != 0) {

    if (in_array('email_remark', $expand_array)) {
        $email_remark_visibility = 'block';
        $highlightFieldCSS = 'important';
    } else {
        $email_remark_visibility = 'none';
        $highlightFieldCSS = '';
    }
    
    print <<< EOT
    <tr>
        <td class="tableb" align="right">
            {$lang_contact_php['your_email']}
        </td>
        <td class="tableb">
            <span id="email_wrapper" class="{$highlightFieldCSS}">
                <input type="text" class="textinput" name="sender_email" size="30" maxlength="200" value="{$email_address}" style="width:100%" />
            </span>
        </td>
        <td class="tableb">
            <span id="email_remark" style="display:{$email_remark_visibility}">{$lang_contact_php['email_field_mandatory']}</span>
        </td>
    </tr>
EOT;
}

// subject field
if ($CONFIG['contact_form_subject_field'] != 0) {

    if (in_array('subject_remark', $expand_array)) {
        $subject_remark_visibility = 'block';
        $highlightFieldCSS = 'important';
    } else {
        $subject_remark_visibility = 'none';
        $highlightFieldCSS = '';
    }
    
    print <<< EOT
    <tr>
        <td class="tableb" align="right">
            {$lang_contact_php['subject']}
        </td>
        <td class="tableb">
            <span id="subject_wrapper" class="{$highlightFieldCSS}">
                <input type="text" class="textinput" name="subject" size="30" maxlength="200" value="{$subject}" style="width:100%" />
            </span>
        </td>
        <td class="tableb">
            <span id="subject_remark" style="display:{$subject_remark_visibility}">{$lang_contact_php['subject_field_mandatory']}</span>
        </td>
    </tr>
EOT;
}
  
if (in_array('message_remark', $expand_array)) {
    $message_remark_visibility = 'block';
    $highlightFieldCSS = 'important';
} else {
    $message_remark_visibility = 'none';
    $highlightFieldCSS = '';
}
  
print <<< EOT
    <tr>
        <td class="tableb" valign="top" align="right" width="30%">
            {$lang_contact_php['your_message']}
        </td>
        <td class="tableb" valign="top" width="40%">
            <span id="message_wrapper" class="{$highlightFieldCSS}">
                <textarea name="message" cols="50" rows="10" class="textinput">{$message}</textarea>
            </span>
        </td>
        <td class="tableb" width="30%">
            <span id="message_remark" style="display:{$message_remark_visibility}">{$lang_contact_php['message_field_mandatory']}</span>
        </td>
    </tr>
EOT;

// captcha field
if ((!USER_ID && $CONFIG['contact_form_guest_enable'] == 1) || (USER_ID && $CONFIG['contact_form_registered_enable'] == 1)) {

    $captcha_help = cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_common['captcha_help_title']))).'&amp;t='.urlencode(base64_encode(serialize($lang_common['captcha_help']))), 470, 245);

    if (in_array('captcha_remark', $expand_array)) {
        $captcha_remark_visibility = 'block';
        $highlightFieldCSS = 'important';
    } else {
        $captcha_remark_visibility = 'none';
        $highlightFieldCSS = '';
    }
    
    $captcha_print = <<< EOT
    <tr>
        <td class="tableb" valign="top" align="right">
            {$lang_contact_php['confirmation']}&nbsp;{$captcha_help}
        </td>
        <td class="tableb" valign="top">
            <span id="captcha_wrapper" class="{$highlightFieldCSS}">
                <input type="text" class="textinput" name="captcha" size="5" maxlength="5" value="" />
            </span>
            <img src="captcha.php" align="middle" border="0" alt="" />
        </td>
        <td class="tableb">
            <span id="captcha_remark" style="display:{$captcha_remark_visibility}">{$captcha_remark}</span>
        </td>
    </tr>
EOT;
  
    $captcha_print = CPGPluginAPI::filter('captcha_contact_print', $captcha_print);
  
    print $captcha_print;
}

list($timestamp, $form_token) = getFormToken();
// submit button
print <<< EOT
    <tr>
        <td class="tableb" valign="top" align="right">
            <input type="hidden" name="referer" value="$CPG_REFERER" />
            <input type="hidden" name="form_token" value="{$form_token}" />
            <input type="hidden" name="timestamp" value="{$timestamp}" />
        </td>
        <td class="tableb" valign="top" colspan="2">
            <button type="submit" class="button" name="submit" id="submit" value="{$lang_common['go']}">{$icon_array['ok']}{$lang_common['go']}</button>
        </td>
    </tr>
EOT;

endtable();

print '</form>';

pagefooter();

?>