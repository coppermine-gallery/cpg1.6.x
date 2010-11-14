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
define('DB_INPUT_PHP', true);
define('DISPLAYIMAGE_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');
require('include/mailer.inc.php');
require('include/smilies.inc.php');

/*known issue: code was edited to not count URL in comment character count. However
this resulted in the character count not being respected at all.

With the new code, the long urls don't affect the display of the hyperlinked word.
However, I can't figure out how to make the code respect the max comment word length and max comment length.
Formatted and unformatted words that are longer than the allowed setting do not get truncated. -Thu */

function check_comment(&$str)
{
    global $CONFIG, $lang_bad_words;

    // convert some entities
    $str = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;', '&nbsp;', '&#39;'), array('&', '"', '<', '>', ' ', "'"), $str);

    // if '<' is no start of a tag (e.g. a lower than + equal), convert it to entity to prevent strip_tags() to clip the comment wrongly
    $str = preg_replace("/<([0-9<>=])/", '&lt;\\1', $str);

    // strip tags and cut to max allowed length
    $str = trim(substr(strip_tags($str), 0, $CONFIG['max_com_size']));

    // re convert some entities
    $str = str_replace(array('"', '<', '>', "'"), array('&quot;', '&lt;', '&gt;', '&#39;'), $str);

    if ($CONFIG['filter_bad_words']) {
        $ercp = array();
        foreach ($lang_bad_words as $word) {
            $ercp[] = '/' . ($word[0] == '*' ? '' : '\b') . str_replace('*', '', $word) . ($word[(strlen($word) - 1)] == '*' ? '' : '\b') . '/i';
        }
        $str = preg_replace($ercp, '(...)', $str);
    }

    $com_words = explode(' ', strip_tags(bb_decode($str)));
    $replacements = array();

    foreach ($com_words as $key => $word) {
        if (utf_strlen($word) > $CONFIG['max_com_wlength']) {
            $replacements[] = $word;
        }
    }
    
    $str = str_replace($replacements, '(...)', $str);
}

if (!$superCage->get->keyExists('event') && !$superCage->post->keyExists('event')) {
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
    
    //Check if the form token is valid
} elseif (!checkFormToken()) {
    cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
}

if ($matches = $superCage->post->getMatched('event', '/^[a-z_]+$/')) {
    $event = $matches[0];
} elseif ($matches = $superCage->get->getMatched('event', '/^[a-z_]+$/')) {
    $event = $matches[0];
} else {
    $event = '';
}

switch ($event) {

case 'comment_update':

    if (!(USER_CAN_POST_COMMENTS)) {
        if ($CONFIG['log_mode'] != 0) {
                log_write('Denied privileged access to db_input.php (attempt to update a comment) for user '.$USER_DATA['user_name'].' at ' . $hdr_ip, CPG_SECURITY_LOG);
        }        
        cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }

    $msg_body = $superCage->post->getEscaped('msg_body');
    $msg_id = $superCage->post->getInt('msg_id');
    
    check_comment($msg_body);
    
    if (empty($msg_body)) {
        cpg_die(ERROR, $lang_db_input_php['err_comment_empty'], __FILE__, __LINE__);
    }

    if (GALLERY_ADMIN_MODE) {
        cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body = '$msg_body' WHERE msg_id = '$msg_id'");
    } elseif (USER_ID) {
        if ($CONFIG['comment_approval'] == 1) {
            cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body = '$msg_body', approval = 'NO' WHERE msg_id = '$msg_id' AND author_id ='" . USER_ID . "' LIMIT 1");
        } else {
            cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body = '$msg_body' WHERE msg_id = '$msg_id' AND author_id ='" . USER_ID . "' LIMIT 1");
        }
    } else {
        if ($CONFIG['comment_approval'] != 0) {
            cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body = '$msg_body', approval = 'NO' WHERE msg_id = '$msg_id' AND author_md5_id = '{$USER['ID']}' AND author_id = 0 LIMIT 1");
        } else {
            cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body = '$msg_body' WHERE msg_id = '$msg_id' AND author_md5_id = '{$USER['ID']}' AND author_id = 0 LIMIT 1");
        }
    }

    $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';

    $result = cpg_db_query("SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '$msg_id'");

    if (!mysql_num_rows($result)) {
        mysql_free_result($result);
        cpgRedirectPage('index.php', $lang_common['information'], $lang_db_input_php['com_updated'], 1);
    } else {
        $comment_data = mysql_fetch_assoc($result);
        mysql_free_result($result);
        $redirect = "displayimage.php?pid=" . $comment_data['pid'];
        cpgRedirectPage($redirect, $lang_common['information'], $lang_db_input_php['com_updated'], 1);
    }

    break;

case 'comment':

    if (!(USER_CAN_POST_COMMENTS)) {
        if ($CONFIG['log_mode'] != 0) {
                log_write('Denied privileged access to db_input.php (attempt to post a comment) for user '.$USER_DATA['user_name'].' at ' . $hdr_ip, CPG_SECURITY_LOG);
        }
        cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }
    
    if (($CONFIG['comment_captcha'] == 1) || ($CONFIG['comment_captcha'] == 2 && !USER_ID)) {
        if (!captcha_plugin_enabled()) {
            require("include/captcha.inc.php");
            $matches = $superCage->post->getMatched('confirmCode', '/^[a-zA-Z0-9]+$/');

            if (!$matches[0] || !PhpCaptcha::Validate($matches[0])) {
                if ($CONFIG['log_mode'] != 0) {
                        log_write('Captcha authentication for comment failed for user '.$USER_DATA['user_name'].' at ' . $hdr_ip, CPG_SECURITY_LOG);
                }
                cpg_die(ERROR, $lang_errors['captcha_error'], __FILE__, __LINE__);
            }
        } else {
            CPGPluginAPI::action('captcha_comment_validate', null);
        }
    }

    $spam = 'NO';
    
    $msg_author = $superCage->post->getEscaped('msg_author');
    $msg_body = $superCage->post->getEscaped('msg_body');
    $pid = $superCage->post->getInt('pid');
    
    check_comment($msg_body);
    check_comment($msg_author);
    
    if (empty($msg_author) || empty($msg_body)) {
        cpg_die(ERROR, $lang_db_input_php['empty_name_or_com'], __FILE__, __LINE__);
    }

    $result = cpg_db_query("SELECT comments FROM {$CONFIG['TABLE_PICTURES']} AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = p.aid WHERE pid = $pid");

    if (!mysql_num_rows($result)) {
        cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }

    $album_data = mysql_fetch_assoc($result);
    mysql_free_result($result);

    if ($album_data['comments'] != 'YES') {
        cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }

    if (!$CONFIG['disable_comment_flood_protect']) {
        $result = cpg_db_query("SELECT author_md5_id, author_id FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid = $pid ORDER BY msg_id DESC LIMIT 1");
        if (mysql_num_rows($result)) {
            $last_com_data = mysql_fetch_assoc($result);
            if ((USER_ID && $last_com_data['author_id'] == USER_ID) || (!USER_ID && $last_com_data['author_md5_id'] == $USER['ID'])) {
        if ($CONFIG['log_mode'] != 0) {
                log_write('Attempt to comment-flood (PID: $pid) denied for user '.$USER_DATA['user_name'].' at ' . $hdr_ip, CPG_GLOBAL_LOG);
                }
                cpg_die(ERROR, $lang_db_input_php['no_flood'], __FILE__, __LINE__);
            }
        }
        mysql_free_result($result);
    }
    
    $akismet_approval_needed = 0;
    
    if ($CONFIG['comment_akismet_api_key'] != '') {
    
        require_once('include/akismet.inc.php');
        
        $comment_evaluation_array = array();
        
        if ($superCage->server->keyExists('REMOTE_ADDR')) {
            $comment_evaluation_array['user_ip'] = $superCage->server->getEscaped('REMOTE_ADDR');
        } else {
            $comment_evaluation_array['user_ip'] = '';
        }
        
        if ($superCage->server->keyExists('HTTP_USER_AGENT')) {
            $comment_evaluation_array['user_agent'] = $superCage->server->getEscaped('HTTP_USER_AGENT');
        } else {
            $comment_evaluation_array['user_agent'] = '';
        }
        
        if ($superCage->server->keyExists('HTTP_REFERER')) {
            $comment_evaluation_array['referrer'] = $superCage->server->getEscaped('HTTP_REFERER');;
        } else {
            $comment_evaluation_array['referrer'] = '';
        }
        
        if ($superCage->server->keyExists('REMOTE_PORT')) {
            $comment_evaluation_array['REMOTE_PORT'] = $superCage->server->getEscaped('REMOTE_PORT');
        } else {
            $comment_evaluation_array['REMOTE_PORT'] = '';
        }
        
        if ($superCage->server->keyExists('REQUEST_METHOD')) {
            $comment_evaluation_array['REQUEST_METHOD'] = $superCage->server->getEscaped('REQUEST_METHOD');
        } else {
            $comment_evaluation_array['REQUEST_METHOD'] = '';
        }
        
        $comment_evaluation_array['permalink'] = $CONFIG['site_url'] . 'displayimage.php?pid='.$pid;
        $comment_evaluation_array['comment_type'] = 'comment';
        $comment_evaluation_array['comment_author'] = $msg_author;
        $comment_evaluation_array['comment_author_email'] = '';
        $comment_evaluation_array['comment_author_url'] = '';
        $comment_evaluation_array['comment_content'] = $msg_body;
    }

    if (!USER_ID) { // Anonymous users, we need to use META refresh to save the cookie

        // check that the username the anonymous user entered (including prefix for anonymous comments authors) is not being used by a registered user 
        if ($cpg_udb->get_user_id($CONFIG['comments_anon_pfx'].$msg_author)) {
            cpg_die(ERROR, $lang_db_input_php['com_author_error'], __FILE__, __LINE__);
        }

        // If username for comment is same as default username then display error message
        if ($msg_author == $lang_display_comments['your_name']) {
            cpg_die(ERROR, $lang_display_comments['default_username_message'], __FILE__, __LINE__);
        }
        
        // Perform Akismet check if applicable for guests
        if ($CONFIG['comment_akismet_api_key'] != '') {
        
            $akismet_result = cpg_akismet_submit_data($comment_evaluation_array);
            
            if ($akismet_result == TRUE) { // returns true if Akismet thinks the comment is spam
            
                // Increase the spam counter by one
                $spam_count = $CONFIG['comment_akismet_counter'] + 1;
                cpg_config_set('comment_akismet_counter', $spam_count);
                
                if ($CONFIG['comment_akismet_enable'] == 0) {
                    $akismet_approval_needed = 1; // Temporarily just set comment approval to "on"
                    $spam = 'YES';
                } elseif ($CONFIG['comment_akismet_enable'] == 1) {
                    $redirect = "displayimage.php?pid=$pid";
                    pageheader($lang_display_comments['comment_rejected'], "<meta http-equiv=\"refresh\" content=\"5;url=$redirect\" />");
                    msg_box($lang_db_input_php['info'], $lang_display_comments['comment_rejected'], $lang_common['continue'], $redirect);
                    pagefooter();
                    exit;
                } else {
                    $redirect = "displayimage.php?pid=$pid";
                    pageheader($lang_db_input_php['com_added'], "<meta http-equiv=\"refresh\" content=\"1;url=$redirect\" />");
                    msg_box($lang_db_input_php['info'], $lang_db_input_php['com_added'], $lang_common['continue'], $redirect);
                    pagefooter();
                    exit;
                }
            }
        }

        if ($CONFIG['comment_approval'] != 0 || $akismet_approval_needed == 1) { // comments need approval, set approval status to "no"
            $app = 'NO';
        } else { //comments do not need approval, we can set approval status to "yes"
            $app = 'YES';        
        }

        cpg_db_query("INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval, spam) VALUES ('$pid', '{$CONFIG['comments_anon_pfx']}$msg_author', '$msg_body', NOW(), '{$USER['ID']}', '0', '$raw_ip', '$hdr_ip', '$app', '$spam')");

        $USER['name'] = $msg_author;     

        $redirect = "displayimage.php?pid=$pid";
        
        if ($CONFIG['email_comment_notification']) {
            $mail_body = '<p>' . bb_decode(process_smilies($msg_body, $CONFIG['ecards_more_pic_target'])) . '</p>' . $LINEBREAK .$lang_db_input_php['email_comment_body'] . ' ' . $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/').$redirect;
            cpg_mail('admin', $lang_db_input_php['email_comment_subject'], make_clickable($mail_body));
        }

        pageheader($lang_db_input_php['com_added'], "<meta http-equiv=\"refresh\" content=\"1;url=$redirect\" />");
        msg_box($lang_db_input_php['info'], $lang_db_input_php['com_added'], $lang_common['continue'], $redirect);
        pagefooter();
        exit;

    } else { // Registered users, we can use Location to redirect
   
        // Perform Akismet check if applicable for registered users
        if ($CONFIG['comment_akismet_api_key'] != '' && $CONFIG['comment_akismet_group'] != 1) {
        
            //$comment_evaluation_array['comment_author_email'] = '';// TODO: populate the email address from the user's profile
 
            $akismet_result = cpg_akismet_submit_data($comment_evaluation_array);

            if ($akismet_result == TRUE) { // returns true if Akismet thinks the comment is spam
            
                // Increase the spam counter by one
                $spam_count = $CONFIG['comment_akismet_counter'] + 1;
                cpg_config_set('comment_akismet_counter', $spam_count);

                if ($CONFIG['comment_akismet_enable'] == 0) {
                    $akismet_approval_needed = 1; // Temporarily just set comment approval to "on"
                    $spam = 'YES';
                } elseif ($CONFIG['comment_akismet_enable'] == 1) {
                    $redirect = "displayimage.php?pid=$pid";
                    cpgRedirectPage($redirect, $lang_db_input_php['info'], $lang_display_comments['comment_rejected'], 5);
                } else {
                    $redirect = "displayimage.php?pid=$pid";
                    cpgRedirectPage($redirect, $lang_db_input_php['info'], $lang_db_input_php['com_added'], 1);
                }
            }
        }        
    
        if (($CONFIG['comment_approval'] == 1 && !USER_IS_ADMIN) || $akismet_approval_needed == 1) { // comments need approval, set approval status to "no"
            $app = 'NO';
        } else { //comments do not need approval, we can set approval status to "yes"
            $app = 'YES';
        }

        cpg_db_query("INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval, spam) VALUES ('$pid', '" . addslashes(USER_NAME) . "', '$msg_body', NOW(), '', '" . USER_ID . "', '$raw_ip', '$hdr_ip', '$app', '$spam')");
    
        $redirect = "displayimage.php?pid=$pid";
    
        if ($CONFIG['email_comment_notification'] && !USER_IS_ADMIN ) {
            $mail_body = "<p>" . bb_decode(process_smilies($msg_body, $CONFIG['ecards_more_pic_target'])) . '</p>' . $LINEBREAK .$lang_db_input_php['email_comment_body'] . ' ' . $CONFIG['ecards_more_pic_target'] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') . $redirect;
            cpg_mail('admin', $lang_db_input_php['email_comment_subject'], make_clickable($mail_body));
        }
                
        cpgRedirectPage($redirect, $lang_db_input_php['info'], $lang_db_input_php['com_added'], 1);
    }
    
    break;

case 'album_update':

    if (!(user_is_allowed() || GALLERY_ADMIN_MODE)) {
        if ($CONFIG['log_mode'] != 0) {
                log_write('Denied privileged access to db_input.php (album update) for user '.$USER_DATA['user_name'].' at ' . $hdr_ip, CPG_SECURITY_LOG);
        }
        cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }

    $aid = $superCage->post->getInt('aid');
    $title = $superCage->post->getEscaped('title');
    $category = $superCage->post->getInt('category');
    $description = $superCage->post->getEscaped('description');
    $keyword = $superCage->post->getEscaped('keyword');
    $thumb = $superCage->post->getInt('thumb');
    $visibility = $superCage->post->getInt('visibility');

    $uploads = $superCage->post->getAlpha('uploads') == 'YES' ? 'YES' : 'NO';
    $comments = $superCage->post->getAlpha('comments') == 'YES' ? 'YES' : 'NO';
    $votes = $superCage->post->getAlpha('votes') == 'YES' ? 'YES' : 'NO';

    // Get the old alb_password before update
    $result = cpg_db_query("SELECT alb_password FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = $aid");
    $row = mysql_fetch_assoc($result);
    mysql_free_result($result);
    
    // If there is some value in alb_password then it means album was previously password protected
    if ($row['alb_password']) {
        $old_password = $row['alb_password'];
    } else {
        $old_password = null;
    }
    
    // Get the password only if password_protect checkbox is checked
    if ($superCage->post->keyExists('password_protect')) {
    
        $password = $superCage->post->getEscaped('alb_password');
        $password_hint = $superCage->post->getEscaped('alb_password_hint');

        // We will change or add the password only if it is not empty
        if (trim($password)) {
            $password = md5($password);
        } elseif (!$old_password && !trim($password)) {
            $password = null;
            $password_hint = null;
        } else {
            $password = $old_password;
        }
        
    } else {
        $password = null;
        $password_hint = null;
    }
    
    $visibility = !empty($password) ? FIRST_USER_CAT + USER_ID : $visibility;

    if (!$title) {
        cpg_die(ERROR, $lang_db_input_php['alb_need_title'], __FILE__, __LINE__);
    }

    $query = "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title = '$title', description = '$description', category = $category, thumb = $thumb, comments = '$comments', votes = '$votes', visibility = $visibility, alb_password = '$password', alb_password_hint = '$password_hint', keyword = '$keyword'";
    if (GALLERY_ADMIN_MODE) {
        /* TODO: re-enable and test feature when it's clear how it should work (see http://forum.coppermine-gallery.net/index.php/topic,64408.0.html)
        $moderator_group = $superCage->post->getInt('moderator_group');
        $query .= ", moderator_group = '$moderator_group'";
        */
        $query .= ", uploads = '$uploads'";
    }
    $query .= " WHERE aid = $aid";

    cpg_db_query($query);

    if (!mysql_affected_rows($CONFIG['LINK_ID'])) {
        cpgRedirectPage('modifyalb.php?album=' . $aid, $lang_db_input_php['info'], $lang_db_input_php['no_udp_needed'], 0);
    } else {
        cpgRedirectPage('modifyalb.php?album=' . $aid, $lang_db_input_php['info'], $lang_db_input_php['alb_updated'], 0);
    }

    break;

case 'album_reset':

    if (!GALLERY_ADMIN_MODE) {
        if ($CONFIG['log_mode'] != 0) {
                log_write('Denied privileged access to db_input.php (album reset) for user '.$USER_DATA['user_name'].' at ' . $hdr_ip, CPG_SECURITY_LOG);
        }
        cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }

    $counter_affected_rows = 0;
    
    $aid = $superCage->post->getInt('aid');
    $reset_views = $superCage->post->getInt('reset_views');
    $reset_rating = $superCage->post->getInt('reset_rating');
    $delete_comments = $superCage->post->getInt('delete_comments');
    $delete_files = $superCage->post->getInt('delete_files');

    if ($reset_views) { // if reset_views start
    
        cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET hits = 0 WHERE aid = $aid");
        
        if (mysql_affected_rows($CONFIG['LINK_ID'])) {
            $counter_affected_rows++;
        }
        
        cpg_db_query("DELETE FROM s USING {$CONFIG['TABLE_HIT_STATS']} AS s INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.pid = s.pid WHERE p.aid = $aid");
        
    } // if reset_views end

    if ($reset_rating) { // if reset_rating start
    
        cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET pic_rating = 0, votes = 0 WHERE aid = $aid");
        
        if (mysql_affected_rows($CONFIG['LINK_ID'])) {
            $counter_affected_rows++;
        }
        
        cpg_db_query("DELETE FROM v USING {$CONFIG['TABLE_VOTE_STATS']} AS v INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.pid = v.pid WHERE p.aid = $aid");
        
        cpg_db_query("DELETE FROM v USING {$CONFIG['TABLE_VOTES']} AS v INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.pid = v.pic_id WHERE p.aid = $aid");

    } // if reset_rating end

    if ($delete_files) { // if delete_files start
    
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = $aid");
        
        if (mysql_affected_rows($CONFIG['LINK_ID'])) {
            $counter_affected_rows++;
        }
        
    } // if delete_files end

    if ($counter_affected_rows == 0) {
        cpg_die(INFORMATION, $lang_db_input_php['no_udp_needed'], __FILE__, __LINE__);
    }

    pageheader($lang_db_input_php['alb_updated'], "<meta http-equiv=\"refresh\" content=\"1;url=modifyalb.php?album=$aid\" />");
    msg_box($lang_db_input_php['info'], $lang_db_input_php['alb_updated'], $lang_common['continue'], "modifyalb.php?album=$aid");
    pagefooter();
    exit;
    
    break;

case 'picture':

    if (!USER_CAN_UPLOAD_PICTURES) {
        if ($CONFIG['log_mode'] != 0) {
                log_write('Denied privileged access to db_input.php (upload picture) for user '.$USER_DATA['user_name'].' at ' . $hdr_ip, CPG_SECURITY_LOG);
        }
        cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }

    $album = $superCage->post->getInt('album');
    $title = $superCage->post->getEscaped('title');
    $caption = $superCage->post->getEscaped('caption');
    $keywords = $superCage->post->getEscaped('keywords');
    $user1 = $superCage->post->getEscaped('user1');
    $user2 = $superCage->post->getEscaped('user2');
    $user3 = $superCage->post->getEscaped('user3');
    $user4 = $superCage->post->getEscaped('user4');

    // Check if the album id provided is valid
    if (!(GALLERY_ADMIN_MODE || user_is_allowed())) {
    
        $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = $album AND (uploads = 'YES' OR owner = " . USER_ID . " OR category = " . (USER_ID + FIRST_USER_CAT) . ")");
 
        if (mysql_num_rows($result) == 0) {
            cpg_die(ERROR, $lang_db_input_php['unknown_album'], __FILE__, __LINE__);
        }
        
        $row = mysql_fetch_assoc($result);
        mysql_free_result($result);
        
        $category = $row['category'];
        
    } else {
    
        $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = $album");

        if (mysql_num_rows($result) == 0) {
            cpg_die(ERROR, $lang_db_input_php['unknown_album'], __FILE__, __LINE__);
        }

        $row = mysql_fetch_assoc($result);
        mysql_free_result($result);

        $category = $row['category'];
    }

    // Test if the filename of the temporary uploaded picture is empty
    // getRaw is safe here since this filename is generated by the server
    if ($superCage->files->getRaw("/userpicture/tmp_name") == '') {
        cpg_die(ERROR, $lang_db_input_php['no_pic_uploaded'], __FILE__, __LINE__);
    }

    // Pictures are moved in a directory named 10000 + USER_ID
    if (USER_ID && $CONFIG['silly_safe_mode'] != 1) {
    
        $filepath = $CONFIG['userpics'] . (USER_ID + FIRST_USER_CAT);
        $dest_dir = $CONFIG['fullpath'] . $filepath;
        
        if (!is_dir($dest_dir)) {
        
            mkdir($dest_dir, octdec($CONFIG['default_dir_mode']));
            
            if (!is_dir($dest_dir)) {
                cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_mkdir'], $dest_dir), __FILE__, __LINE__, true);
            }
            
            chmod($dest_dir, octdec($CONFIG['default_dir_mode']));
            
            $fp = fopen($dest_dir . '/index.php', 'w');
            fwrite($fp, ' ');
            fclose($fp);
        }
        
        $dest_dir .= '/';
        $filepath .= '/';
        
    } else {
        $filepath = $CONFIG['userpics'];
        $dest_dir = $CONFIG['fullpath'] . $filepath;
    }

    // Check that target dir is writable
    if (!is_writable($dest_dir)) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['dest_dir_ro'], $dest_dir), __FILE__, __LINE__, true);
    }

    if (get_magic_quotes_gpc()) {
        //Using getRaw() as we have custom sanitization code below
        $picture_name = stripslashes($superCage->files->getRaw("/userpicture/name"));
    } else {
        $picture_name = $superCage->files->getRaw("/userpicture/name");
    }

    // Replace forbidden chars (including white spaces and special chars) with underscores
    $picture_name = replace_forbidden($picture_name);

    // Check that the file uploaded has a valid extension
    if (!preg_match("/(.+)\.(.*?)\Z/", $picture_name, $matches)) {
        $matches[1] = 'invalid_fname';
        $matches[2] = 'xxx';
    }

    if ($matches[2] == '' || !is_known_filetype($matches)) {
        cpg_die(ERROR, $lang_db_input_php['err_invalid_fext'] . ' ' . $CONFIG['allowed_file_extensions'], __FILE__, __LINE__);
    }

    // Create a unique name for the uploaded file
    $nr = 0;
    $picture_name = $matches[1] . '.' . $matches[2];
    
    while (file_exists($dest_dir . $picture_name)) {
        $picture_name = $matches[1] . '~' . $nr++ . '.' . $matches[2];
    }

    $uploaded_pic = $dest_dir . $picture_name;

    CPGPluginAPI::action('upload_html_pre_move', $superCage->files->getRaw("/userpicture/tmp_name"));

    // Move the picture into its final location
    // getRaw is safe here since this filename is generated by the server
    if (!move_uploaded_file($superCage->files->getRaw("/userpicture/tmp_name"), $uploaded_pic)) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_move'], $picture_name, $dest_dir), __FILE__, __LINE__, true);
    }

    // Change file permission
    chmod($uploaded_pic, octdec($CONFIG['default_file_mode']));

    // Get picture information
    // Check that picture file size is lower than the maximum allowed
    if (filesize($uploaded_pic) > ($CONFIG['max_upl_size'] << 10)) {

        @unlink($uploaded_pic);
        cpg_die(ERROR, sprintf($lang_db_input_php['err_imgsize_too_large'], $CONFIG['max_upl_size']), __FILE__, __LINE__);

    } elseif (is_image($picture_name)) {
    
        $imginfo = cpg_getimagesize($uploaded_pic);
        
            
        if ($imginfo == null) {
        
            // getimagesize does not recognize the file as a picture
            @unlink($uploaded_pic);
            cpg_die(ERROR, $lang_db_input_php['err_invalid_img'], __FILE__, __LINE__, true);
           
        } elseif ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && $CONFIG['GIF_support'] == 0) {
        
            // JPEG and PNG only are allowed with GD
            @unlink($uploaded_pic);
            cpg_die(ERROR, $lang_errors['gd_file_type_err'], __FILE__, __LINE__, true);
            
            // Check that picture size (in pixels) is lower than the maximum allowed
        } // Image is ok
    }

    // Upload is ok
    // Create thumbnail and internediate image and add the image into the DB
    $result = add_picture($album, $filepath, $picture_name, 0, $title, $caption, $keywords, $user1, $user2, $user3, $user4, $category, $raw_ip, $hdr_ip, $superCage->post->getInt('width'), $superCage->post->getInt('height'));

    if ($result !== true) {
        @unlink($uploaded_pic);
        cpg_die(CRITICAL_ERROR, isset($result['error']) ? $result['error'] : sprintf($lang_db_input_php['err_insert_pic'], $uploaded_pic) . '<br /><br />' . $ERROR, __FILE__, __LINE__, true);
    } elseif ($PIC_NEED_APPROVAL) {
        pageheader($lang_common['information']);
        msg_box($lang_common['information'], $lang_db_input_php['upload_success'], $lang_common['continue'], 'index.php');

        if ($CONFIG['upl_notify_admin_email']) {
            include_once('include/mailer.inc.php');
            cpg_mail('admin', sprintf($lang_db_input_php['notify_admin_email_subject'], $CONFIG['gallery_name']), make_clickable(sprintf($lang_db_input_php['notify_admin_email_body'], USER_NAME, $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .'editpics.php?mode=upload_approval')));
        }
        pagefooter();
    } else {
        if (cpg_pw_protected_album_access($CURRENT_PIC_DATA['aid']) === 1) {
            $redirect = "thumbnails.php?album=" . $CURRENT_PIC_DATA['aid'];
        } else {
            $redirect = "displayimage.php?pid=" . $CURRENT_PIC_DATA['pid'];
        }
        cpgRedirectPage($redirect, $lang_common['information'], $lang_db_input_php['upl_success'], 1);
    }

    break;

    // Unknown event
default:
    if ($CONFIG['log_mode'] != 0) {
            log_write('Denied privileged access to db_input.php (unknown event) for user '.$USER_DATA['user_name'].' at ' . $hdr_ip, CPG_SECURITY_LOG);
    }
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

?>