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

// todo: search option.

define('IN_COPPERMINE', true);
define('REVIEWCOM_PHP', true);

require('include/init.inc.php');
include("include/smilies.inc.php");

if ($CONFIG['comment_akismet_api_key'] != '') {
    require_once('include/akismet.inc.php');
}

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

//set_js_var('lang_confirm_delete', $lang_reviewcom_php['n_confirm_delete']);

js_include('js/reviewcom.js');

// initialize some variables
$start = '';
$count = '';
$sort = '';
$single_picture = '';
$nb_com_yes = '';
$nb_com_no = '';
$flag_conf_change = '';
$akismet_ham_array = array();
$default_action_with_selected = array('do_nothing' => '', 'delete' => '', 'approve' => 'checked="checked"', 'disapprove' => '');
$icon_array = array();
$icon_array['ok'] = cpg_fetch_icon('ok',2);
$icon_array['help'] = cpg_fetch_icon('help',2);
$icon_array['info'] = cpg_fetch_icon('info',2);
$icon_array['stop'] = cpg_fetch_icon('stop',2);
$icon_array['cancel'] = cpg_fetch_icon('cancel',2);

// Change config options if applicable
if ($superCage->post->keyExists('is_submit')) {
        //Check if the form token is valid
        if(!checkFormToken()){
            cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
        }
        if ($superCage->post->keyExists('approval_only')) {
           $approval_only = 1;
        } else {
           $approval_only = 0;
        }
        if ($approval_only != $CONFIG['display_comment_approval_only']) {
            // the user wants to see the option changed - let's write it to the database
            cpg_config_set('display_comment_approval_only', $approval_only);
            $flag_conf_change = 1;
        }
}

// we have made sure that an admin is logged in - let's check for GET parameters if the admin is trying to approve things from the intermediate image view
$get_data_rejected = 0;
$single_approval_array = array('pos' => $superCage->get->getInt('pos'), 'msg_id' => $superCage->get->getInt('msg_id'), 'what' => $superCage->get->getAlpha('what'));

foreach ($single_approval_array as $value) {
    if (!$value) {
        $get_data_rejected++;
    }
}
// We have gathered enough data for a basic check - let's only perform the rest of the individual approval if everthying is OK, i.e. all previous critieria have been met.
if ($get_data_rejected==0) { // individual approval start

    //Check if the form token is valid
    if (!checkFormToken()) {
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    
    pageheader($lang_reviewcom_php['title']);

    // Normally, we could trust this input, as only the admin should have gotten that far.
    // Anyway, let's perform some more testing, it won't hurt performance-wise, but should be more secure - maybe the admin has followed a made-up link that led him here.
    // Some of those checks could be performed more elegantly using regex - contributions would be welcome.

    if (floor($single_approval_array['pos']) != $single_approval_array['pos']) {
      $get_data_rejected++;
    }
    if (abs($single_approval_array['pos']) == $single_approval_array['pos']) {
      $get_data_rejected++;
    }
    if (floor($single_approval_array['msg_id']) != $single_approval_array['msg_id']) {
      $get_data_rejected++;
    }
    if (abs($single_approval_array['msg_id']) != $single_approval_array['msg_id']) {
      $get_data_rejected++;
    }
    if ($single_approval_array['what'] != 'approve' && $single_approval_array['what'] != 'disapprove') {
      $get_data_rejected++;
    }

    // Perform the lookup

    $result = cpg_db_query("
                        SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date)
                        AS msg_date, approval, spam, author_id, {$CONFIG['TABLE_COMMENTS']}.pid
                        AS pid, aid, filepath, filename, url_prefix, pwidth, pheight
                        FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']}
                        WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid
                        AND {$CONFIG['TABLE_COMMENTS']}.msg_id = {$single_approval_array['msg_id']}
                        LIMIT 1
                        ");
    while ($row = mysql_fetch_array($result)) {
        if ($row['pid'] != abs($single_approval_array['pos'])) {
            $get_data_rejected++;
        }
        $thumb_url =  get_pic_url($row, 'thumb');
        if (!is_image($row['filename'])) {
            $image_info = cpg_getimagesize($thumb_url);
            $row['pwidth'] = $image_info[0];
            $row['pheight'] = $image_info[1];
        }
        $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['alb_list_thumb_size']);
        $thumb_link = 'displayimage.php?pos=' . - $row['pid'];
        $msg_date = localised_date($row['msg_date'], $lang_date['scientific']);
        $msg_body = bb_decode(process_smilies($row['msg_body']));
        // build a link to the author's profile if applicable
        if ($row['author_id'] != 0) {
            $profile_link_start = '<a href="profile.php?uid='.$row['author_id'].'">';
            $profile_link_end = '</a>';
        } else {
            $profile_link_start = '';
            $profile_link_end = '';
        }
        $msg_author = $row['msg_author'];
    }

    // if all verifications have passed, execute the change and output the result; else, display an error message
    if ($get_data_rejected == 0) {
        if ($single_approval_array['what'] == 'approve') {
            $query_approval = 'YES';
            $title = $lang_reviewcom_php['comment_approved'];
        } else {
            $query_approval = 'NO';
            $title = $lang_reviewcom_php['comment_unapproved'];
        }
        cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = '{$query_approval}' WHERE msg_id = {$single_approval_array['msg_id']}");
        starttable('-2', $title, 2);
        print <<< EOT
        <tr>
            <td class="tableb">{$lang_reviewcom_php['user_name']}</td>
            <td class="tableb">{$profile_link_start}{$msg_author}{$profile_link_end}</td>
        </tr>
        <tr>
            <td class="tableb tableb_alternate">{$lang_reviewcom_php['date']}</td>
            <td class="tableb tableb_alternate">{$msg_date}</td>
        </tr>
        <tr>
            <td class="tableb">{$lang_reviewcom_php['comment']}</td>
            <td class="tableb">{$msg_body}</td>
        </tr>
        <tr>
            <td class="tableb tableb_alternate">{$lang_reviewcom_php['file']}</td>
            <td class="tableb tableb_alternate"><a href="$thumb_link"><img src="$thumb_url" {$image_size['geom']} class="image" border="0" alt="" /></a></td>
        </tr>
        <tr>
            <td class="tablef" colspan="2" align="center"><a href="$thumb_link#comment{$single_approval_array['msg_id']}" class="admin_menu">{$lang_common['continue']}</a></td>
        </tr>
EOT;
        endtable();
    } else { // verification not passed
        cpg_die(ERROR, $lang_errors['non_exist_comment'], __FILE__, __LINE__);
    }
    pagefooter();
} else { // individual approval end, mass-approval start


if ($CONFIG['display_comment_approval_only'] == 1) {
    $comment_approval_only_checked = 'checked="checked"';
} else {
    $comment_approval_only_checked = '';
}

// Get the hidden field that contains all message IDs that are being
// handled by the form that was just submit.
if ($superCage->post->keyExists('total_message_id_collector')) {
    $total_message_id_submit = $superCage->post->getMatched('total_message_id_collector', '/^[0-9\/|]+$/');
    $total_message_id_array = explode('|' , rtrim($total_message_id_submit[0],'|'));
    sort($total_message_id_array);
    // Now loop through that array to check wether an individual approval change has been submit.
    $approved_yes_set = '';
    $approved_no_set = '';
    foreach ($total_message_id_array as $message_id_check) {
        if ($superCage->post->getInt('status_approved_yes'.$message_id_check) != '') {
            $approved_yes_set .= $superCage->post->getInt('status_approved_yes'.$message_id_check) . ',';
            if ($superCage->post->getInt('spam'.$message_id_check) == 'YES') {
                // A comment that Akismet has detected as SPAM has been approved by the admin. Let's put the ID into the ham array
                $akismet_ham_array[] = $message_id_check;
            }
        }
        if ($superCage->post->getInt('status_approved_no'.$message_id_check) != '') {
            $approved_no_set .= $superCage->post->getInt('status_approved_no'.$message_id_check) . ',';
        }
    }
    $approved_yes_set = rtrim($approved_yes_set, ',');
    $approved_no_set = rtrim($approved_no_set, ',');
    $nb_com_yes = 0;
    $nb_com_no = 0;
    if ($approved_yes_set != '') {
        cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = 'YES' WHERE msg_id IN ($approved_yes_set)");
        $nb_com_yes = mysql_affected_rows();
    }
    if ($approved_no_set != '') {
        cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = 'NO' WHERE msg_id IN ($approved_no_set)");
        $nb_com_no = mysql_affected_rows();
    }
}

$nb_com_del = 0;
//if (isset($_POST['cid_array'])) { // have any checkboxes been ticked?
if ($superCage->post->keyExists('cid_array')) {
    $cid_array = $superCage->post->getEscaped('cid_array');
    $cid_set = '';
    foreach ($cid_array as $cid) {
        $cid_set .= ($cid_set == '') ? '(' . $cid : ', ' . $cid;
        if ($superCage->post->getAlpha('with_selected') == 'approve' && $superCage->post->getInt('spam'.$cid) == 'YES') {
            $akismet_ham_array[] = $cid;
        }
    }
    $cid_set .= ')';
    
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    if($superCage->post->getAlpha('with_selected') == 'delete') {
        // Delete selected comments if form is posted
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id IN $cid_set");
        $nb_com_del = mysql_affected_rows();
    } elseif ($superCage->post->getAlpha('with_selected') == 'approve') {
        cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = 'YES' WHERE msg_id IN $cid_set");
        $nb_com_yes = mysql_affected_rows();
    } elseif ($superCage->post->getAlpha('with_selected') == 'disapprove') {
        cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = 'NO' WHERE msg_id IN $cid_set");
        $nb_com_no = mysql_affected_rows();
    }
}

// Submit ham samples back to akismet
if ($CONFIG['comment_akismet_api_key'] != '' && $CONFIG['comment_akismet_enable'] == 0) {
    foreach ($akismet_ham_array as $key) {
        $result = cpg_db_query("SELECT pid, msg_author, msg_body, msg_hdr_ip FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$key' LIMIT 1");
        $comment_data = mysql_fetch_array($result);
        $akismet_result = cpg_akismet_submit_data($comment_evaluation_array, 'ham');
    }
}

$result = cpg_db_query("SELECT count(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE 1");
$nbEnr = mysql_fetch_array($result);
$comment_count = $nbEnr[0];

if (!$comment_count) {
    cpg_die(INFORMATION , $lang_reviewcom_php['no_comment'], __FILE__, __LINE__);
}

//$start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
if ($superCage->get->keyExists('start')) {
    $start = $superCage->get->getInt('start');
} else {
    $start = 0;
}
//$count = isset($_GET['count']) ? $_GET['count'] : 25;
if ($superCage->get->keyExists('count')) {
    $count = $superCage->get->getInt('count');
} else {
    $count = 25;
}
$next_target = $CPG_PHP_SELF . '?start=' . ($start + $count) . '&amp;count=' . $count;
$prev_target = $CPG_PHP_SELF . '?start=' . max(0, $start - $count) . '&amp;count=' . $count;
$s50 = $count == 50 ? 'selected' : '';
$s75 = $count == 75 ? 'selected' : '';
$s100 = $count == 100 ? 'selected' : '';
//$single_picture = isset($_GET['pid']) ? (int)$_GET['pid'] : '';
if ($superCage->get->keyExists('pid')) {
    $single_picture = $superCage->get->getInt('pid');
} else {
    $single_picture = '';
}

if ($start + $count < $comment_count) {
    $next_link = '<a href="'.$next_target.'" class="button">'.cpg_fetch_icon('rightright', 0, $lang_reviewcom_php['see_next']).'</a>';
} else {
    $next_link = '';
}

if ($start > 0) {
    $prev_link = '<a href="'.$prev_target.'" class="button">'.cpg_fetch_icon('leftleft', 0,$lang_reviewcom_php['see_prev']).'</a>&nbsp;&nbsp;';
} else {
    $prev_link = '';
}

pageheader($lang_reviewcom_php['title']);
echo <<<EOT
<script type="text/javascript" language="javascript">
<!--
function checkBeforeSubmit() {
    // Are there any comments scheduled for deletion?
    var f = document.editForm;
    var counter = 0;
    for (i = 0; i < f.length; i++) {
        if (f[i].type == "checkbox" && f[i].name.indexOf('cid_array') >= 0 && f[i].checked == true) {
            counter++;
        }
    }
    if (counter > 0) {
        // at least one checkbox has been ticked
        if (document.getElementById('delete_selected').checked == true) {
            // the ticked items are scheduled for deletion
            return confirm("{$lang_reviewcom_php['n_confirm_delete']}");
        }
    }
}

-->
</script>
EOT;
echo <<<EOT

    <form action="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=$sort&amp;pid=$single_picture" method="post" name="editForm" id="cpgform2" onsubmit="return checkBeforeSubmit();">
    <input type="hidden" name="is_submit" value="1" />
EOT;

$msg_txt = '';
if ($nb_com_del > 0) {
    $msg_txt .= '                          <li style="list-style-image:url(images/icons/ok.png)">'.sprintf($lang_reviewcom_php['n_comm_del'], $nb_com_del).'</li>'.$LINEBREAK;
}
if ($nb_com_yes > 0) {
    $msg_txt .= '                          <li style="list-style-image:url(images/icons/ok.png)">'.sprintf($lang_reviewcom_php['n_comm_appr'], $nb_com_yes).'</li>'.$LINEBREAK;
}
if ($nb_com_no > 0) {
    $msg_txt .= '                          <li style="list-style-image:url(images/icons/ok.png)">'.sprintf($lang_reviewcom_php['n_comm_unappr'], $nb_com_no).'</li>'.$LINEBREAK;
}
if ($flag_conf_change != '') {
    $msg_txt .= '                          <li style="list-style-image:url(images/icons/ok.png)">'.$lang_reviewcom_php['configuration_changed'].'</li>'.$LINEBREAK;
}


if ($msg_txt != '') {
    starttable('100%', $lang_common['status'], 9);
    echo <<<EOT
        <tr>
                <td class="tableh2" colspan="9" align="left">
                        <ul>
                            $msg_txt
                        </ul>
                </td>
        </tr>
EOT;
    endtable();
}

$help_approval_only = '&nbsp;'.cpg_display_help('f=configuration.htm&amp;as=admin_comment_display_comment_approval_only_start&amp;ae=admin_comment_display_comment_approval_only_end&amp;top=1', '600', '400');
$help = '&nbsp;'.cpg_display_help('f=comments.htm&amp;as=comments_review&amp;ae=comments_review_end&amp;top=1', '800', '400');
$icon = cpg_fetch_icon('comment_approval',2);
$reviewcom_table_header = <<<EOT
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td>
                        {$icon}{$lang_reviewcom_php['title']}
                        {$help}
                    </td>
                    <td class="sortorder_options" align="center">
                        <input type="checkbox" name="approval_only" id="approval_only" class="checkbox" title="{$lang_reviewcom_php['only_approval']}" {$comment_approval_only_checked} value="1" />
                        <label for="approval_only" class="clickable_option">{$lang_reviewcom_php['only_approval']}</label>
                        {$help_approval_only}
                    </td>
                    <td align="center">
                        {$prev_link}
                        {$next_link}
                    </td>
                    <td class="sortorder_options" align="right">
                        {$lang_reviewcom_php['n_comm_disp']}
                        <select onchange="if(this.options[this.selectedIndex].value) window.location.href='{$CPG_PHP_SELF}?start=$start&amp;count='+this.options[this.selectedIndex].value;"  name="count" class="listbox">
                                <option value="25">25</option>
                                <option value="50" $s50>50</option>
                                <option value="75" $s75>75</option>
                                <option value="100" $s100>100</option>
                        </select>
                    </td>
                </tr>
            </table>
EOT;

starttable('100%', $reviewcom_table_header, 9);

echo <<< EOT
        <tr class="noscript">
            <td class="tableh2" colspan="9">
                <noscript>
                    {$lang_common['javascript_needed']}
                </noscript>
            </td>
        </tr>
EOT;

    if ($CONFIG['comment_akismet_api_key'] != '') {
        $akismet_row_heading = <<< EOT
            {$lang_reviewcom_php['akismet']}
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=akismet_a"><img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['akismet_a']}" /></a>
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=akismet_d"><img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['akismet_d']}" /></a>
EOT;
    } else {
        $akismet_row_heading = '';
    }

    echo <<<EOT
        <tr>
          <td class="tableh1" valign="middle" align="center">
          </td>
          <td class="tableh1" valign="middle" align="center">
            <input type="checkbox" name="checkAll" onclick="selectAll('cpgform2');" class="checkbox" title="{$lang_common['check_uncheck_all']}" />
          </td>
          <td class="tableh1 sortorder_options" valign="middle" align="center">
            {$lang_reviewcom_php['approval']}
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=approval_a"><img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['approval_a']}" /></a>
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=approval_d"><img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['approval_d']}" /></a>
          </td>
          <td class="tableh1 sortorder_options" valign="middle" align="center">
            {$akismet_row_heading}
          </td>
          <td class="tableh1 sortorder_options" valign="middle" align="center">
            {$lang_reviewcom_php['user_name']}
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=name_a"><img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['name_a']}" /></a>
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=name_d"><img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['name_d']}" /></a>
          </td>
          <td class="tableh1 sortorder_options" valign="middle" align="center">
            {$lang_reviewcom_php['ip_address']}
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=ip_a"><img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['ip_a']}" /></a>
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=ip_d"><img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['ip_d']}" /></a>
          </td>
          <td class="tableh1 sortorder_options" valign="middle" align="center">
            {$lang_reviewcom_php['date']}
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=date_a"><img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['date_a']}" /></a>
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=date_d"><img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['date_d']}" /></a>
          </td>
          <td class="tableh1 sortorder_options" valign="middle" align="center">
            {$lang_reviewcom_php['comment']}
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=comment_a"><img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['comment_a']}" /></a>
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=comment_d"><img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['comment_d']}" /></a>
          </td>
          <td class="tableh1 sortorder_options" valign="middle" align="center">
            {$lang_reviewcom_php['file']}
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=file_a"><img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['file_a']}" /></a>
            <a href="{$CPG_PHP_SELF}?start=$start&amp;count=$count&amp;sort=file_d"><img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['file_d']}" /></a>
          </td>
        </tr>

EOT;

$sort_codes = array('name_a' => 'msg_author ASC',
    'name_d' => 'msg_author DESC',
    'date_a' => 'msg_id ASC',
    'date_d' => 'msg_id DESC',
    'comment_a' => 'msg_body ASC',
    'comment_d' => 'msg_body DESC',
    'file_a' => 'pid ASC',
    'file_d' => 'pid DESC',
    'approval_a' => 'approval ASC',
    'approval_d' => 'approval DESC',
    'ip_a' => 'msg_raw_ip ASC',
    'ip_d' => 'msg_raw_ip DESC',
    'akismet_a' => 'spam ASC',
    'akismet_d' => 'spam DESC',
);
// sort by date descending if no other sorting order is given
//$sort = (!isset($_GET['sort']) || !isset($sort_codes[$_GET['sort']])) ? 'date_d' : $_GET['sort'];
if ($superCage->get->keyExists('sort')) {
    $get_sort = $superCage->get->getEscaped('sort');
}
if (!isset($get_sort) || !isset($sort_codes[$get_sort])) {
    $sort = 'date_d';
} else {
    $sort = $get_sort;
}
if ($CONFIG['display_comment_approval_only'] == 1) {
    $only_comments_needing_approval = "AND approval='NO'";
} else {
    $only_comments_needing_approval = '';
}

$result = cpg_db_query("
                        SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date)
                        AS msg_date, approval, spam, msg_raw_ip, msg_hdr_ip, author_id, {$CONFIG['TABLE_COMMENTS']}.pid
                        AS pid, aid, filepath, filename, url_prefix, pwidth, pheight
                        FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']}
                        WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid {$only_comments_needing_approval}
                        ORDER BY {$sort_codes[$sort]}
                        LIMIT $start, $count
                        ");

$rowcounter = 0;
$totalMessageIdCollector = '';
$loopCounter = 0;

while ($row = mysql_fetch_array($result)) {
    $loopCounter++;
    $thumb_url =  get_pic_url($row, 'thumb');
    if (!is_image($row['filename'])) {
        $image_info = cpg_getimagesize($thumb_url);
        $row['pwidth'] = $image_info[0];
        $row['pheight'] = $image_info[1];
    }
    $totalMessageIdCollector .= $row['msg_id'].'|';
    $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['alb_list_thumb_size']);
    $thumb_link = 'displayimage.php?pos=' . - $row['pid'];
    $msg_date = localised_date($row['msg_date'], $lang_date['scientific']);
    $msg_body = bb_decode(process_smilies($row['msg_body']));
    if ($row['approval'] == 'YES') {
        $comment_approval_status = '<input name="approved'.$row['msg_id'].'" id="approved'.$row['msg_id'].'yes" type="radio" value="1" checked="checked" onchange="approveCommentEnable('.$row['msg_id'].');" /><label for="approved'.$row['msg_id'].'yes" class="clickable_option">' . $lang_common['yes'].'</label><br />' . $LINEBREAK;
        $comment_approval_status .= '<input name="approved'.$row['msg_id'].'" id="approved'.$row['msg_id'].'no" type="radio" value="0" onchange="approveCommentEnable('.$row['msg_id'].');" /><label for="approved'.$row['msg_id'].'no" class="clickable_option">' .$lang_common['no'].'</label>';
        $checkbox_status = '';
    } else {
        $comment_approval_status = '<input name="approved'.$row['msg_id'].'" id="approved'.$row['msg_id'].'yes" type="radio" value="1" onchange="approveCommentEnable('.$row['msg_id'].');" /><label for="approved'.$row['msg_id'].'yes" class="clickable_option">' .$lang_common['yes'].'</label><br />' . $LINEBREAK;
        $comment_approval_status .= '<input name="approved'.$row['msg_id'].'" id="approved'.$row['msg_id'].'no" type="radio" value="0" checked="checked" onchange="approveCommentEnable('.$row['msg_id'].');" /><label for="approved'.$row['msg_id'].'no" class="clickable_option">' .$lang_common['no'].'</label>';
        if ($row['spam'] == 'YES') {
            $checkbox_status = 'checked="checked"';
            $default_action_with_selected['do_nothing'] = 'checked="checked"';
            $default_action_with_selected['delete'] = '';
            $default_action_with_selected['approve'] = '';
            $default_action_with_selected['disapprove'] = '';
        } else {
            $checkbox_status = '';
        }
    }
    $comment_approval_status .= '<input type="hidden" name="status_approved_yes'.$row['msg_id'].'" id="status_approved_yes'.$row['msg_id'].'" value="" />';
    $comment_approval_status .= '<input type="hidden" name="status_approved_no'.$row['msg_id'].'" id="status_approved_no'.$row['msg_id'].'" value="" />';
    if ($CONFIG['comment_akismet_api_key'] != '') {
        if ($row['spam'] == 'YES') {
            $akismet_status = cpg_fetch_icon('ignore', 0, $lang_reviewcom_php['is_spam']);
        } else {
            $akismet_status = cpg_fetch_icon('ok', 0, $lang_reviewcom_php['is_not_spam']);
        }
    } else {
        $akismet_status = '';
    }
    $spam_field = '<input type="hidden" name="spam'.$row['msg_id'].'" id="spam'.$row['msg_id'].'" value="' . $row['spam'] . '" />';
    //get link to ban and delete
    if ($row['author_id'] == 0) {
        //$ban_and_delete = '<a href="banning.php?delete_comment_id=' . $row['msg_id'] . '">' . $lang_reviewcom_php['ban_and_delete'] . '</a>';
        $ban_and_delete = '';
    } else {
        $ban_and_delete = '<a href="banning.php?ban_user=' . $row['author_id'] . '&amp;delete_comment_id=' . $row['msg_id'] . '" title="' . $lang_reviewcom_php['ban_and_delete'] . '">' . cpg_fetch_icon('ban_user_comment', 0) . '</a>';
    }
    $rowcounter++;
    if ($rowcounter >=2 ) { //let the row colors alternate, for now they are the same
        $rowcounter = 0;
        $tableclass = 'tableb'; // change to "tableh2" or similar for alternation
    } else {
        $tableclass = 'tableb tableb_alternate';
    }
    // build a link to the author's profile if applicable
    if ($row['author_id'] != 0) {
        $profile_link_start = '<a href="profile.php?uid='.$row['author_id'].'">';
        $profile_link_end = '</a>';
    } else {
        $profile_link_start = '';
        $profile_link_end = '';
    }
    // Create the output of the IP address
    list($row['ip_detail']) = CPGPluginAPI::filter('ip_information', array('', $row['msg_raw_ip']));
    $ip_address_output = $row['msg_raw_ip'] . $row['ip_detail'];
    if ($row['msg_raw_ip'] != $row['msg_hdr_ip']) {
        list($row['ip_detail']) = CPGPluginAPI::filter('ip_information', array('', $row['msg_hdr_ip']));
        $ip_address_output .= '<br />' . $row['msg_hdr_ip'] . $row['ip_detail'];
    }
    // output the table rows
    echo <<<EOT
        <tr>
            <td class="$tableclass" valign="top" align="center">
                {$loopCounter}
            </td>
            <td class="$tableclass" valign="top" align="center">
                <input name="cid_array[]" id="check{$row['msg_id']}" type="checkbox" value="{$row['msg_id']}" {$checkbox_status} />
            </td>
            <td class="$tableclass" valign="top" align="left">
                {$comment_approval_status}
            </td>
            <td class="$tableclass" valign="top" align="center">
                {$akismet_status}
                {$spam_field}
            </td>
            <td class="$tableclass" valign="top">$profile_link_start{$row['msg_author']}$profile_link_end $ban_and_delete</td>
            <td class="$tableclass" valign="top">{$ip_address_output}</td>
            <td class="$tableclass" valign="top">{$msg_date}</td>
            <td class="$tableclass" valign="top">
                {$msg_body}
            </td>
            <td class="$tableclass" align="center">
                <a href="$thumb_link"><img src="$thumb_url" {$image_size['geom']} class="image" border="0" alt="" title="$thumb_url" /></a>
            </td>
        </tr>

EOT;
}

mysql_free_result($result);



// output the table footer
echo <<<EOT
        <tr>
            <td class="tablef" valign="middle" align="center">
            </td>
            <td class="tablef" valign="middle" align="center">
                <input type="checkbox" name="checkAll2" onclick="selectAll('cpgform2');" class="checkbox" title="{$lang_common['check_uncheck_all']}" />
            </td>
            <td class="tablef" valign="middle" align="left">
                {$lang_reviewcom_php['with_selected']}:</td> 
            <td colspan="4" class="tablef" valign="middle" align="left"> 
              <input name="with_selected" id="do_nothing" type="radio" value="do_nothing" {$default_action_with_selected['do_nothing']} />
              <label for="do_nothing">{$lang_reviewcom_php['do_nothing']}</label>
                &nbsp;
                <input name="with_selected" id="delete_selected" type="radio" value="delete" {$default_action_with_selected['delete']} />
                <label for="delete_selected">{$lang_reviewcom_php['delete']}</label>
                &nbsp;
                <input name="with_selected" id="approve_selected" type="radio" value="approve" {$default_action_with_selected['approve']} />
                <label for="approve_selected">{$lang_reviewcom_php['approve']}</label>
                &nbsp;
                <input name="with_selected" id="disapprove_selected" type="radio" value="disapprove" {$default_action_with_selected['disapprove']} />
                <label for="disapprove_selected">{$lang_reviewcom_php['disapprove']}</label>
            </td>
            <td colspan="2" align="center" class="tablef">
                <input type="hidden" name="total_message_id_collector" value="{$totalMessageIdCollector}" />
                <button type="submit" class="button" name="save_changes" id="save_changes" value="{$lang_reviewcom_php['save_changes']}">{$icon_array['ok']}{$lang_reviewcom_php['save_changes']}</button>
                </td>
        </tr>

EOT;
endtable();
list($timestamp, $form_token) = getFormToken();	
echo "<input type=\"hidden\" name=\"form_token\" value=\"{$form_token}\" />
     <input type=\"hidden\" name=\"timestamp\" value=\"{$timestamp}\" /></form>";    

if ($CONFIG['comment_akismet_api_key'] != '') {
    print '<br /><a name="akismet"></a>';
    starttable('-2', $icon_array['info'] . $lang_reviewcom_php['akismet'], 2);
    print <<< EOT
    <tr>
        <td class="tableb" colspan="2">
EOT;
    print sprintf($lang_reviewcom_php['akismet_count'].'.', '<strong>' . cpg_float2decimal($CONFIG['comment_akismet_counter']) . '</strong>');
    print <<< EOT
        </td>
    </tr>
EOT;
    $test_text = sprintf($lang_reviewcom_php['akismet_test_result'], '<strong>' . $CONFIG['comment_akismet_api_key'] . '</strong>');
    $result = cpg_akismet_verify_key();
    if (stripos($result[0], '404 Not Found') != FALSE) {
        $test_result = $icon_array['cancel'] . $lang_reviewcom_php['not_found'];
        $test_error = $result[0];
    } elseif (stripos($result[1], 'Error') != FALSE) {
        $test_result = $icon_array['stop'] . $lang_reviewcom_php['unknown_error'];
        $test_error = $result[1];
    } elseif ($result == TRUE) {
        $test_result = $icon_array['ok'] . $lang_common['ok'];
        $test_error = '';
    } elseif (stripos($result[0], 'Empty "blog" value') != FALSE) {
        $test_result = $icon_array['stop'] . $lang_reviewcom_php['missing_gallery_url'];
        $test_error = '';
    } elseif ($result[1] == 'invalid') {
        $test_result = $icon_array['stop'] . $lang_reviewcom_php['invalid'];
        $test_error = '';
    } elseif (isset($result) == FALSE) {
        $test_result = $icon_array['cancel'] . $lang_reviewcom_php['unable_to_connect'];
        $test_error = $result[0].$LINEBREAK.$result[1];
    } else {
        $test_result = $icon_array['stop'] . $lang_reviewcom_php['unknown_error'];
        $test_error = $result[0].$LINEBREAK.$result[1];
    }
    print <<< EOT
    <tr>
        <td class="tableb tableb_alternate" valign="top">
            {$test_text}
        </td>
        <td class="tableb tableb_alternate" valign="top">
            {$test_result}
        </td>
    </tr>
EOT;
    if ($test_error != '') {
        $test_error = strip_tags($test_error);
        print <<< EOT
    <tr>
        <td class="tableb tableb_alternate" valign="top" colspan="2">
            {$lang_reviewcom_php['error_message']}<br />
            <textarea cols="100" rows="5" class="textinput">{$test_error}</textarea>
        </td>
        </td>
    </tr>
EOT;
    }
    endtable();
}

pagefooter();
} // mass approval end
?>