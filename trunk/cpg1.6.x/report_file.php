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
define('REPORT_FILE_PHP', true);

require('include/init.inc.php');
require('include/mailer.inc.php');

if ((!$CONFIG['report_post']==1) || (!USER_CAN_SEND_ECARDS)) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$icon_array['ok'] = cpg_fetch_icon('ok', 1);
$icon_array['report'] = cpg_fetch_icon('report', 2);

if ($CONFIG['enable_smilies']) {
    include("include/smilies.inc.php");
}

function get_post_var($name, $default = '')
{
    $superCage = Inspekt::makeSuperCage();
    if ($superCage->post->keyExists($name)) {
        return get_magic_quotes_gpc() ? stripslashes_deep($superCage->post->noTags($name)) : $superCage->post->noTags($name);
    } else {
        return $default;
    }
}

$pid = $superCage->get->getInt('pid');
$cid = $superCage->get->getInt('msg_id');
$what = $superCage->get->getAlpha('what');

$type = $lang_report_php['type_file'];
$template = $template_report;

$sender_name = get_post_var('sender_name', USER_NAME ? USER_NAME : (isset($USER['name']) ? $USER['name'] : ''));
if (defined('UDB_INTEGRATION')AND USER_ID) {
    $USER_DATA = array_merge($USER_DATA,$cpg_udb->get_user_infos(USER_ID));
}

if ($USER_DATA['user_email']) {
    $sender_email = $USER_DATA['user_email'];
    $sender_box = $sender_email;
    $sender_name = $USER_DATA['user_name'];
    $sender_name_box = $sender_name;
} else {
    $sender_email = get_post_var('sender_email',$USER['email'] ? $USER['email'] : '');
    $sender_box = "<input type=\"text\" class=\"textinput\" value=\"$sender_email\" name=\"sender_email\" style=\"width: 100%;\" />";
    $sender_name = get_post_var('sender_name',$USER['name'] ? $USER['name'] : '');
    $sender_name_box = "<input type=\"text\" class=\"textinput\" value=\"$sender_name\" name=\"sender_name\" style=\"width: 100%;\" />";
}

$subject = get_post_var('subject');
$message = get_post_var('message');
$sender_email_warning = '';
$form_action="$CPG_PHP_SELF?pid=$pid";

// Get picture thumbnail url
$result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} p WHERE pid='$pid' $FORBIDDEN_SET");
if (!mysql_num_rows($result)) {
    cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
}

$row = mysql_fetch_array($result);
$thumb_pic_url = get_pic_url($row, 'thumb');

if ($what == 'comment') {
    $result = cpg_db_query("SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, author_md5_id, msg_raw_ip, msg_hdr_ip, approval FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$cid' AND approval = 'YES' AND pid='$pid'");
    if (!mysql_num_rows($result)) {
        cpg_die(ERROR, $lang_errors['non_exist_comment'], __FILE__, __LINE__);
    }

    $row = mysql_fetch_array($result);
    $comment = bb_decode($row['msg_body']);
    if ($CONFIG['enable_smilies']) {
        $comment = process_smilies($comment);
    }

    $msg_author = $row['msg_author'];
    $comment_field_name = sprintf($lang_report_php['comment_field_name'], $msg_author);
    $type = $lang_report_php['type_comment'];
    $template = $template_report_comment_email;
    $form_action ="$CPG_PHP_SELF?pid=$pid&amp;msg_id=$cid&amp;what=comment";

    //template_extract_block($template_report_form, 'reason_missing'); //need help to toggle off reason(missing) since doesn't apply to comments
} else {
    //template_extract_block($template_report_form, 'display_comment'); //need help remove comment preview when reporting picture
}

// Check supplied email address
$valid_sender_email = Inspekt::isEmail($sender_email);
$invalid_email = '<div class="cpg_message_error">' . $lang_report_php['invalid_email'] . '</div>';

if (!$valid_sender_email && $superCage->post->keyExists('subject')) {
    $sender_email_warning = $invalid_email;
}

// Create and send the e-card
if ($superCage->post->keyExists('subject') && $valid_sender_email) {
    $gallery_url_prefix = $CONFIG['ecards_more_pic_target']. (substr($CONFIG['ecards_more_pic_target'], -1) == '/' ? '' : '/');
    if ($CONFIG['make_intermediate'] && max($row['pwidth'], $row['pheight']) > $CONFIG['picture_width']) {
        $n_picname = get_pic_url($row, 'normal');
    } else {
        $n_picname = get_pic_url($row, 'fullsize');
    }

    if (!stristr($n_picname, 'http:')) {
        $n_picname = $gallery_url_prefix . $n_picname;
    }
    //output list of reasons checkmarked
    $reasons = $lang_report_php['reasons_list_heading'] . $LINEBREAK;
    if ($superCage->post->keyExists('reason')) {
        foreach(get_post_var('reason') as $value) {
            $value = $lang_report_php["$value"];
            $reason_list .= "$value, ";
        }
    } else {
        $reasons .= "{$lang_report_php['no_reason_given']}";
    }

    $reason_list = substr($reason_list, 0, -2); //remove trailing comma and space
    $reasons .= $reason_list;
    $msg_content = nl2br(strip_tags($message));

    $data = array(
        'sn' => $sender_name,
        'se' => $sender_email,
        'p' => $n_picname,
        'su' => $subject,
        'm' => $message,
        'r' => $reasons,
        'c' => $comment,
        'cid' => $cid,
        'pid' => $pid,
        't' => $what,
        );

    $encoded_data = urlencode(base64_encode(serialize($data)));

    $params = array('{LANG_DIR}' => $lang_text_dir,
        '{TITLE}' => sprintf($lang_report_php['report_subject'], $sender_name, $type),
        '{CHARSET}' => $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'],
        '{VIEW_REPORT_TGT}' => "{$gallery_url_prefix}displayreport.php?data=$encoded_data",
        '{VIEW_REPORT_LNK}' => $lang_report_php['view_report'],
        '{VIEW_REPORT_LNK_PLAINTEXT}' => $lang_report_php['view_report_plaintext'],
        '{PIC_URL}' => $n_picname,
        '{URL_PREFIX}' => $gallery_url_prefix,
        '{PIC_TGT}' => "{$CONFIG['ecards_more_pic_target']}displayimage.php?pid=" . $pid,
        '{SUBJECT}' => $subject,
        '{MESSAGE}' => $msg_content,
        '{PLAINTEXT_MESSAGE}' => $message,
        '{SENDER_EMAIL}' => $sender_email,
        '{SENDER_NAME}' => $sender_name,
        '{VIEW_MORE_TGT}' => $CONFIG['ecards_more_pic_target'],
        '{VIEW_MORE_LNK}' => $lang_report_php['view_more_pics'],
        '{REASON}' => $reasons,
        '{COMMENT}' => $comment,
        '{COMMENT_ID}' => $cid,
        '{VIEW_COMMENT_LNK}' => $lang_report_php['view_comment'],
        '{COMMENT_TGT}' => "{$CONFIG['ecards_more_pic_target']}displayimage.php?pid=$pid#comment$cid",
        '{PID}' => $pid,
        );

    $message = template_eval($template, $params);
    $plaintext_message = template_eval($template_report_plaintext, $params);

    $tempTime = time();
    $message .= sprintf($lang_report_php['report_footer'], $sender_name, $raw_ip, localised_date(-1,$lang_date['comment']));
    $subject = sprintf($lang_report_php['report_subject'], $sender_name, $type);

    $result = cpg_mail('admin', $subject, $message, 'text/html', $sender_name, $sender_email, $plaintext_message);

    /*//write log
    if ($CONFIG['log_ecards'] == 1) {
        $result_log = cpg_db_query("INSERT INTO {$CONFIG['TABLE_ECARDS']} (sender_name, sender_email, recipient_name, recipient_email, link, date, sender_ip) VALUES ('$sender_name', '$sender_email', '$recipient_name', '$recipient_email',   '$encoded_data', '$tempTime', '$raw_ip')");
    }*/

    if (!USER_ID) {
        $USER['name'] = $sender_name;
        $USER['email'] = $sender_email;
    }

    if ($result) {
        pageheader($lang_report_php['title'], "<meta http-equiv=\"refresh\" content=\"3;url=displayimage.php?pid={$pid}\" />");
        msg_box($lang_cpg_die[INFORMATION], $lang_report_php['send_success'], $lang_common['continue'], "displayimage.php?pid={$pid}");
        pagefooter();
        exit;
    } else {
        cpg_die(ERROR, $lang_report_php['send_failed'], __FILE__, __LINE__);
    }
}

if ($superCage->post->keyExists('submit')) {
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
}
pageheader($lang_report_php['title']);
echo <<< EOT
<form method="post" name="post" id="cpgform" action="$form_action">
EOT;
starttable("100%", $icon_array['report'] . $lang_report_php['title'], 3);

echo <<<EOT
        <tr>
                <td class="tableh2" colspan="2"><strong>{$lang_report_php['from']}</strong></td>
<!-- BEGIN display_thumbnail -->
                <td rowspan="6" align="center" valign="top" class="tableb">
                        <img src="$thumb_pic_url" alt="" vspace="8" border="0" class="image" /><br />
                </td>
<!-- END display_thumbnail -->
        </tr>
        <tr>
                <td class="tableb" valign="top" width="40%">
                        {$lang_report_php['your_name']}<br />
                </td>
                <td valign="top" class="tableb" width="60%">
                        {$sender_name_box}
                </td>
        </tr>
        <tr>
                <td class="tableb" valign="top" width="40%">
                        {$lang_report_php['your_email']}<br />
                </td>
                <td valign="top" class="tableb" width="60%">
                        {$sender_box}
                        {$sender_email_warning}
                </td>
        </tr>
        <tr>
                <td class="tableh2" colspan="2"><strong>{$lang_report_php['to']}</strong></td>
        </tr>
        <tr>
                <td class="tableb" valign="top" width="40%" colspan="2">
                        {$lang_report_php['administrator']}<br />
                </td>
        </tr>

                <tr>
                <td class="tableh2" colspan="3"><strong>{$lang_report_php['refers_to']}:</strong></td>
        </tr>
        <tr>
                <td class="tableb" colspan="3">
                    <a href="{$CONFIG['ecards_more_pic_target']}displayimage.php?pid={$pid}">
                    {$CONFIG['ecards_more_pic_target']}displayimage.php?pid={$pid}</a>
                </td>
        </tr>
<!-- BEGIN display_comment -->
                                <tr>
                <td class="tableh2" valign="top" width="40%" colspan="3"><strong>$comment_field_name</strong></td>
                                </tr>
        <tr>
                <td class="tableb" valign="top" width="40%" colspan="3">
           $comment<br />
                </td>
        </tr>
<!-- END display_comment -->
        <tr>
                <td class="tableh2" colspan="3"><strong>{$lang_report_php['subject']}</strong></td>
        </tr>
        <tr>
                <td class="tableb" colspan="3">
                                                                                <input type="text" class="textinput" name="subject"  value="$subject" style="width: 100%;" /><br />
                </td>
        </tr>
        <tr>
                <td class="tableh2" colspan="3"><strong>{$lang_report_php['reason']}</strong></td>
        </tr>
        <tr>
                <td class="tableb" colspan="3">
                    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        </tr>
        <tr>
<!-- BEGIN reason_obscene -->
            <td>
                <input value="obscene" type="checkbox" name="reason[]" id="obscene" />
                <label for="obscene" class="clickable_option">{$lang_report_php['obscene']}</label>
            </td>
<!-- END reason_obscene -->
<!-- BEGIN reason_offensive -->
            <td>
                <input value="offensive" type="checkbox" name="reason[]" id="offensive" />
                <label for="offensive" class="clickable_option">{$lang_report_php['offensive']}</label>
            </td>
<!-- END reason_offensive -->

<!-- BEGIN reason_misplaced -->
            <td>
                <input value="misplaced" type="checkbox" name="reason[]" id="misplaced" />
                <label for="misplaced" class="clickable_option">{$lang_report_php['misplaced']}</label>
            </td>
<!-- END reason_misplaced -->
<!-- BEGIN reason_missing -->
            <td>
                <input value="missing" type="checkbox" name="reason[]" id="missing" />
                <label for="missing" class="clickable_option">{$lang_report_php['missing']}</label>
            </td>
<!-- END reason_missing -->
<!-- BEGIN reason_issue -->
            <td>
                <input value="issue" type="checkbox" name="reason[]" id="issue" />
                <label for="issue" class="clickable_option">{$lang_report_php['issue']}</label>
            </td>
<!-- END reason_issue -->
<!-- BEGIN reason_other -->
            <td>
                <input value="other" type="checkbox" name="reason[]" id="other" />
                <label for="other" class="clickable_option">{$lang_report_php['other']}</label>
            </td>
<!-- END reason_other -->
        </tr>
    </table>
    </td>
        </tr>
        <tr>
                <td class="tableh2" colspan="3"><strong>{$lang_report_php['message']}</strong></td>
        </tr>
        <tr>
                <td class="tableb" colspan="3" valign="top">
                    <textarea name="message" class="textinput" rows="8" cols="40" onselect="storeCaret_post(this);" onclick="storeCaret_post(this);" onkeyup="storeCaret_post(this);" style="width: 100%;">$message</textarea><br /><br />
                </td>
        </tr>
        <tr>
                <td colspan="3" align="center" class="tablef">
						<button type="submit" class="button" name="submit" id="submit" value="{$lang_report_php['title']}">{$icon_array['ok']}{$lang_report_php['title']}</button>
                </td>
        </tr>
EOT;

endtable();

list($timestamp, $form_token) = getFormToken();
echo <<< EOT
<input type="hidden" name="form_token" value="{$form_token}" />
<input type="hidden" name="timestamp" value="{$timestamp}" />
</form>

EOT;

pagefooter();

?>
