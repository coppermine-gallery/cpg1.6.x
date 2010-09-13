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
define('ECARDS_PHP', true);
define('SMILIES_PHP', true);

require('include/init.inc.php');
require('include/smilies.inc.php');

if (!USER_CAN_SEND_ECARDS) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$icon_array['ok'] = cpg_fetch_icon('ok', 1);
$icon_array['ecard'] = cpg_fetch_icon('mail', 2);
$icon_array['preview'] = cpg_fetch_icon('search', 1);
$icon_array['preview_table'] = cpg_fetch_icon('search', 2);

function get_post_var($name, $default = '')
{
    $superCage = Inspekt::makeSuperCage();

    if ($superCage->post->keyExists($name)) {
        return get_magic_quotes_gpc() ? stripslashes($superCage->post->noTags($name)) : $superCage->post->noTags($name);
    } else {
        return $default;
    }
}

$pid = $superCage->get->getInt('pid');
$album = $superCage->get->getInt('album');
$pos = $superCage->get->getInt('pos');

$sender_name = get_post_var('sender_name', USER_NAME ? USER_NAME : (isset($USER['name']) ? $USER['name'] : ''));

if (USER_ID) {
    $USER_DATA = array_merge($USER_DATA, $cpg_udb->get_user_infos(USER_ID));
}

if ($USER_DATA['user_email']) {
    $sender_email = $USER_DATA['user_email'];
    $sender_box = $sender_email;
} else {
    $sender_email = get_post_var('sender_email', $USER['email'] ? $USER['email'] : '');
    $sender_box = "<input type=\"text\" class=\"textinput\" value=\"$sender_email\" name=\"sender_email\" style=\"width: 100%;\" />";
}

$recipient_name = get_post_var('recipient_name');
$recipient_email = get_post_var('recipient_email');
$greetings = get_post_var('greetings');
$message = get_post_var('message');

$sender_email_warning = '';
$recipient_email_warning = '';

// Get picture thumbnail url
$result = cpg_db_query("SELECT url_prefix, filepath, filename, title, caption, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE pid='$pid' $FORBIDDEN_SET");

if (!mysql_num_rows($result)) {
    cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
}

$row = mysql_fetch_assoc($result);

$thumb_pic_url = get_pic_url($row, 'thumb');
$normal_pic_url = get_pic_url($row, 'normal');

if (strpos($normal_pic_url, 'thumb_nopic.png') > 0) {
    $normal_pic_url = get_pic_url($row, 'fullsize');
}

$pic_title = $row['title'];
$pic_caption = $row['caption'];

if (!is_image($row['filename'])) {

    if (!is_flash($row['filename'])) {
    
        // The file is neither image nor flash
        if ($CONFIG['ecard_flash'] != 0) {
            cpg_die(ERROR, $lang_ecard_php['error_not_image_flash'], __FILE__, __LINE__);
        } else {
            cpg_die(ERROR, $lang_ecard_php['error_not_image'], __FILE__, __LINE__);
        }
        
    } elseif ($CONFIG['ecard_flash'] == 0) {
    
        // The file IS flash, but flash ecards are not enabled
        cpg_die(ERROR, $lang_ecard_php['error_not_image'], __FILE__, __LINE__);
    }
}

$gallery_url_prefix = $CONFIG['ecards_more_pic_target']. (substr($CONFIG['ecards_more_pic_target'], -1) == '/' ? '' : '/');

$thumb_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['thumb_width']);

if (is_flash($row['filename'])) {

    $markup_picname = get_pic_url($row, 'fullsize');
    
    if (!stristr($markup_picname, 'http:')) {
        $markup_picname = $gallery_url_prefix . $markup_picname;
    }
    
    $pic_markup = <<<EOT
    <object id="SWFlash"  classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" type="application/x-shockwave-flash" width="{$thumb_size['width']}" height="{$thumb_size['height']}">
        <param name="autostart" value="true" />
        <param name="src" value="{$markup_picname}" />
    </object>
EOT;

} else {

    if (!stristr($normal_pic_url, 'http:')) {
        $normal_pic_url = $gallery_url_prefix . $normal_pic_url;
    }
    
    $pic_markup = '<img src="'.$normal_pic_url.'" alt="" vspace="8" border="0" class="image" />';
}

// Check supplied email address
$valid_sender_email = Inspekt::isEmail($sender_email);
$valid_recipient_email = Inspekt::isEmail($recipient_email);

if (!$valid_sender_email && $superCage->post->keyExists('sender_name')) {
    $sender_email_warning = '<div class="cpg_message_error">' . $lang_ecard_php['invalid_email'] . ' (' . $sender_email . ')</div>';
}

if (!$valid_recipient_email && $superCage->post->keyExists('sender_name')) {
    $recipient_email_warning = '<div class="cpg_message_error">' . $lang_ecard_php['invalid_email'] . ' (' . $recipient_email . ')</div>';
}

$gallery_url_prefix = $CONFIG['ecards_more_pic_target']. (substr($CONFIG['ecards_more_pic_target'], -1) == '/' ? '' : '/');

pageheader($lang_ecard_php['title']);

if ($superCage->post->keyExists('submit')) {
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    // Create and send the e-card
    if ($superCage->post->keyExists('sender_name') && $valid_sender_email && $valid_recipient_email) {
    
        require('include/mailer.inc.php');
    
        if ($CONFIG['make_intermediate'] && max($row['pwidth'], $row['pheight']) > $CONFIG['picture_width']) {
            $n_picname = get_pic_url($row, 'normal');
        } else {
            $n_picname = get_pic_url($row, 'fullsize');
        }
    
        if (!stristr($n_picname, 'http:')) {
            $n_picname = $gallery_url_prefix . $n_picname;
        }
        
        $msg_content = process_smilies($message, $gallery_url_prefix);
    
        $data = array(
            'rn'  => $superCage->post->noTags('recipient_name'),
            'sn'  => $superCage->post->noTags('sender_name'),
            'se'  => $sender_email,
            'p'   => $n_picname,
            'g'   => $greetings,
            'm'   => $message,
            'pid' => $pid,
            'pt'  => $pic_title,
            'pc'  => $pic_caption,
        );
    
        $encoded_data = urlencode(base64_encode(serialize($data)));
    
        $params = array(
            '{LANG_DIR}'                 => $lang_text_dir,
            '{TITLE}'                    => sprintf($lang_ecard_php['ecard_title'], $sender_name),
            '{CHARSET}'                  => $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'],
            '{VIEW_ECARD_TGT}'           => "{$gallery_url_prefix}displayecard.php?data=$encoded_data",
            '{VIEW_ECARD_LNK}'           => $lang_ecard_php['view_ecard'],
            '{VIEW_ECARD_LNK_PLAINTEXT}' => $lang_ecard_php['view_ecard_plaintext'],
            '{PIC_URL}'                  => $n_picname,
            '{URL_PREFIX}'               => $gallery_url_prefix,
            '{GREETINGS}'                => $greetings,
            '{MESSAGE}'                  => bb_decode($msg_content),
            '{PLAINTEXT_MESSAGE}'        => $message,
            '{SENDER_EMAIL}'             => $sender_email,
            '{SENDER_NAME}'              => $sender_name,
            '{VIEW_MORE_TGT}'            => $CONFIG['ecards_more_pic_target'],
            '{VIEW_MORE_LNK}'            => $lang_ecard_php['view_more_pics'],
            '{PID}'                      => $pid,
            '{PIC_TITLE}'                => $pic_title,
            '{PIC_CAPTION}'              => bb_decode($pic_caption),
            '{PIC_MARKUP}'               => $pic_markup,
        );
    
        $message = template_eval($template_ecard, $params);
        $plaintext_message = template_eval($template_ecard_plaintext, $params);
    
        $tempTime = time();
        
        $message .= sprintf($lang_ecard_php['ecards_footer'], $sender_name, $raw_ip, localised_date(-1, $lang_date['comment']));
        $subject = sprintf($lang_ecard_php['ecard_title'], $sender_name);

        $result = cpg_mail($recipient_email, $subject, $message, 'text/html', $sender_name, $sender_email, $plaintext_message);
    
        if (!USER_ID) {
            $USER['name'] = $sender_name;
            $USER['email'] = $sender_email;
        }
    
        if ($result) {
        
            // write ecard log, only if mail was sent
            if ($CONFIG['log_ecards'] == 1) {
                $sender_name = addslashes($sender_name);
                $recipient_name = addslashes($recipient_name);
                cpg_db_query("INSERT INTO {$CONFIG['TABLE_ECARDS']} (sender_name, sender_email, recipient_name, recipient_email, link, date, sender_ip) VALUES ('$sender_name', '$sender_email', '$recipient_name', '$recipient_email', '$encoded_data', '$tempTime', '$raw_ip')");
            }
        
            msg_box($lang_common['information'], $lang_ecard_php['send_success'], $lang_common['continue'], "displayimage.php?album=$album&amp;pid=$pid");
            echo '<br />';
            starttable('100%', $icon_array['preview_table'] . $lang_ecard_php['preview']);
            echo '<tr><td>';
            echo template_eval($template_ecard, $params);
            echo '</td></tr>';
            endtable();
            pagefooter();
            exit;
            
        } else {
            if ($CONFIG['log_mode'] != 0) {
                log_write("Sending an ecard failed (sender name: $sender_name, sender email address: $sender_email, recipient name: $recipient_name, recipient email address: $recipient_email, IP: $raw_ip", CPG_MAIL_LOG);
            }
            cpg_die(ERROR, $lang_ecard_php['send_failed'], __FILE__, __LINE__);
        }
    }

} elseif ($superCage->post->keyExists('preview')) {

    if ($CONFIG['make_intermediate'] && max($row['pwidth'], $row['pheight']) > $CONFIG['picture_width']) {
        $n_picname = get_pic_url($row, 'normal');
    } else {
        $n_picname = get_pic_url($row, 'fullsize');
    }
    
    if (!stristr($n_picname, 'http:')) {
        $n_picname = $gallery_url_prefix . $n_picname;
    }
    
    $msg_content = process_smilies($message, $gallery_url_prefix);

    $data = array(
        'sn'  => $superCage->post->noTags('sender_name'),
        'se'  => $sender_email,
        'p'   => $n_picname,
        'g'   => $greetings,
        'm'   => $message,
        'pid' => $pid,
        'pt'  => $pic_title,
        'pc'  => $pic_caption,
    );

    $encoded_data = urlencode(base64_encode(serialize($data)));

    $params = array(
        '{LANG_DIR}'       => $lang_text_dir,
        '{TITLE}'          => sprintf($lang_ecard_php['ecard_title'], $sender_name),
        '{CHARSET}'        => $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'],
        '{VIEW_ECARD_TGT}' => "{$gallery_url_prefix}displayecard.php?data=$encoded_data",
        '{VIEW_ECARD_LNK}' => $lang_ecard_php['preview_view_ecard'],
        '{PIC_URL}'        => $n_picname,
        '{URL_PREFIX}'     => $gallery_url_prefix,
        '{GREETINGS}'      => $greetings,
        '{MESSAGE}'        => bb_decode($msg_content),
        '{SENDER_EMAIL}'   => $sender_email,
        '{SENDER_NAME}'    => $sender_name,
        '{VIEW_MORE_TGT}'  => $CONFIG['ecards_more_pic_target'],
        '{VIEW_MORE_LNK}'  => $lang_ecard_php['view_more_pics'],
        '{PID}'            => $pid,
        '{PIC_TITLE}'      => $pic_title,
        '{PIC_CAPTION}'    => bb_decode($pic_caption),
        '{PIC_MARKUP}'     => $pic_markup,
    );

    $eccontent = template_eval($template_ecard, $params);
    
    if (preg_match('#<body[^>]*>(.*)</body>#s', $eccontent, $matches)) {
        $eccontent = $matches[1];
    }

    starttable('100%', $icon_array['preview_table'] . $lang_ecard_php['preview']);
    echo '<tr><td>';
    echo $eccontent;
    echo '</td></tr>';
    endtable();
    echo '<br />';   
}

if ($CONFIG['show_bbcode_help']) {
    $captionLabel = '&nbsp;'. cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_bbcode_help_title))).'&amp;t='.urlencode(base64_encode(serialize($lang_bbcode_help))), 470, 245);
}

if ($row['pwidth'] == 0 || $row['pheight'] == 0) {
    $row['pwidth']  = $CONFIG['thumb_width'];
    $row['pheight'] = floor($CONFIG['thumb_width'] * 2 / 3);
}

$smilies = generate_smilies();

echo <<< EOT
<form method="post" name="post" id="cpgform" action="{$CPG_PHP_SELF}?album=$album&amp;pid=$pid">
EOT;

starttable("100%", $icon_array['ecard'] . $lang_ecard_php['title'], 3);

echo <<<EOT
    <tr>
        <td class="tableh2" colspan="2">
            <strong>{$lang_ecard_php['from']}</strong>
        </td>
        <td rowspan="6" align="center" valign="top" class="tableb">
EOT;

if (is_flash($row['filename'])) {

    $n_picname = get_pic_url($row, 'fullsize');
  
    echo <<< EOT
            <object id="SWFlash"  classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" type="application/x-shockwave-flash" width="{$thumb_size['width']}" height="{$thumb_size['height']}">
                <param name="autostart" value="true" />
                <param name="src" value="{$n_picname}" />
            </object>
EOT;

} else {

    echo <<< EOT
            <a href="displayimage.php?pid=$pid">
                <img src="$thumb_pic_url" width="{$thumb_size['width']}" height="{$thumb_size['height']}" alt="" vspace="8" border="0" class="image" />
            </a>
EOT;

}
echo <<<EOT
        </td>
    </tr>
    <tr>
        <td class="tableb" valign="top" width="40%">
            {$lang_ecard_php['your_name']}<br />
        </td>
        <td valign="top" class="tableb" width="60%">
            <input type="text" class="textinput" name="sender_name"  value="$sender_name" style="width: 100%;" /><br />
        </td>
    </tr>
    <tr>
        <td class="tableb" valign="top" width="40%">
            {$lang_ecard_php['your_email']}<br />
        </td>
        <td valign="top" class="tableb" width="60%">
            {$sender_box}
             {$sender_email_warning}
        </td>
    </tr>
    <tr>
        <td class="tableh2" colspan="2">
            <strong>{$lang_ecard_php['to']}</strong>
        </td>
    </tr>
    <tr>
        <td class="tableb" valign="top" width="40%">
            {$lang_ecard_php['rcpt_name']}<br />
        </td>
        <td valign="top" class="tableb" width="60%">
            <input type="text" class="textinput" name="recipient_name"  value="$recipient_name" style="width: 100%;" /><br />
        </td>
    </tr>
    <tr>
        <td class="tableb" valign="top" width="40%">
            {$lang_ecard_php['rcpt_email']}<br />
        </td>
        <td valign="top" class="tableb" width="60%">
            <input type="text" class="textinput" name="recipient_email"  value="$recipient_email" style="width: 100%;" /><br />
            $recipient_email_warning
        </td>
    </tr>
    <tr>
        <td class="tableh2" colspan="3">
            <strong>{$lang_ecard_php['greetings']}</strong>
        </td>
    </tr>
    <tr>
        <td class="tableb" colspan="3">
            <input type="text" class="textinput" name="greetings"  value="$greetings" style="width: 100%;" /><br />
        </td>
    </tr>
    <tr>
        <td class="tableh2" colspan="3">
            <strong>{$lang_ecard_php['message']}$captionLabel</strong>
        </td>
    </tr>
    <tr>
        <td class="tableb" colspan="3" valign="top"><br />
            <textarea name="message" class="textinput" rows="8" cols="40"  onselect="storeCaret_post(this);" onclick="storeCaret_post(this);" onkeyup="storeCaret_post(this);" style="width: 100%;">$message</textarea><br /><br />
        </td>
    </tr>
    <tr>
        <td class="tableb" colspan="3" valign="top">
            $smilies
        </td>
    </tr>
    <tr>
        <td colspan="3" align="center" class="tablef">
            <button type="submit" class="button" name="preview" id="preview" value="{$lang_ecard_php['preview_button']}">{$icon_array['preview']}{$lang_ecard_php['preview_button']}</button>
            &nbsp;&nbsp;
            <button type="submit" class="button" name="submit" id="submit" value="{$lang_ecard_php['submit_button']}">{$icon_array['ok']}{$lang_ecard_php['submit_button']}</button>
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