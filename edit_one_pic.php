<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2021 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * edit_one_pic.php
 * @since  1.6.15
 */

define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);
require 'include/init.inc.php';

js_include('js/edit_one_pic.js');

// Define the icons
$icon_array = array(
    'album_properties' => cpg_fetch_icon('modifyalb', 2),
    'thumbnail_view'   => cpg_fetch_icon('thumbnails', 2),
    'file_info'        => cpg_fetch_icon('info', 2),
    'album'            => cpg_fetch_icon('alb_mgr', 2),
    'move'             => cpg_fetch_icon('move', 2),
    'title'            => cpg_fetch_icon('title', 2),
    'file_name'        => cpg_fetch_icon('filename', 2),
    'description'      => cpg_fetch_icon('text_left', 2),
    'keyword'          => cpg_fetch_icon('keyword_mgr', 2),
    'file_approval'    => cpg_fetch_icon('file_approval', 2),
    'file_approve'     => cpg_fetch_icon('file_approve', 2),
    'file_disapprove'  => cpg_fetch_icon('file_disapprove', 2),
    'exif'             => cpg_fetch_icon('exif_mgr', 2),
    'reset_views'      => cpg_fetch_icon('stats_delete', 2),
    'reset_votes'      => cpg_fetch_icon('blank', 2),
    'delete_comments'  => cpg_fetch_icon('comment_approval', 2),
    'ok'               => cpg_fetch_icon('ok', 2),
);

$superCage = Inspekt::makeSuperCage();
if ($superCage->get->keyExists('id')) {
    $pid = $superCage->get->getInt('id');
} elseif ($superCage->post->keyExists('id')) {
    $pid = $superCage->post->getInt('id');
} else {
    $pid = -1;
}

/* --------------------------------------------------------------------------
 * FUNCTION DEFINITIONS
 * --------------------------------------------------------------------------*/

function process_post_data()
{
    global $CONFIG, $USER_DATA, $lang_errors, $lang_editpics_php, $superCage;

    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }

    $user_album_set = array();
    $result = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = " . (FIRST_USER_CAT + USER_ID) . " OR owner = " . USER_ID . " OR uploads = 'YES'");
    while ($row = $result->fetchAssoc()) {
        $user_album_set[$row['aid']] = 1;
    }
    $result->free();

    $pid = $superCage->post->getInt('id');
    $aid = $superCage->post->getInt('aid');
    $pwidth = $superCage->post->getInt('pwidth');
    $pheight = $superCage->post->getInt('pheight');
    $title = cpgSanitizeUserTextInput($superCage->post->getEscaped('title'));
    $caption = cpgSanitizeUserTextInput($superCage->post->getEscaped('caption'));
    $keywords = cpgSanitizeUserTextInput(utf_replace($superCage->post->getEscaped('keywords')));
    $user1 = cpgSanitizeUserTextInput($superCage->post->getEscaped('user1'));
    $user2 = cpgSanitizeUserTextInput($superCage->post->getEscaped('user2'));
    $user3 = cpgSanitizeUserTextInput($superCage->post->getEscaped('user3'));
    $user4 = cpgSanitizeUserTextInput($superCage->post->getEscaped('user4'));

    $galleryicon = $superCage->post->getInt('galleryicon');
    $isgalleryicon = ($galleryicon == $pid);

    $read_exif    = $superCage->post->keyExists('read_exif') ? $superCage->post->getInt('read_exif') : 0;
    $reset_vcount = $superCage->post->keyExists('reset_vcount') ? $superCage->post->getInt('reset_vcount') : 0;
    $reset_votes  = $superCage->post->keyExists('reset_votes') ? $superCage->post->getInt('reset_votes') : 0;
    $del_comments = $superCage->post->keyExists('del_comments') ? $superCage->post->getInt('del_comments') : 0;

    $result = cpg_db_query("SELECT category, owner_id, url_prefix, filepath, filename, pwidth, pheight, p.aid AS aid FROM {$CONFIG['TABLE_PICTURES']} AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = p.aid WHERE pid = '$pid'");
    if (!$result->numRows()) {
        cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }
    $pic = $result->fetchAssoc(true);

    if (!GALLERY_ADMIN_MODE && (!defined('MODERATOR_MODE') || !MODERATOR_MODE) && !USER_ADMIN_MODE && !user_is_allowed() && !$CONFIG['users_can_edit_pics'] ) {

        if ($pic['category'] != FIRST_USER_CAT + USER_ID) {
            cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
        }

        if (!isset($user_album_set[$aid])) {
            cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
        }
    }

    if (!USER_ID
        || !(GALLERY_ADMIN_MODE
                || ($pic['category'] == FIRST_USER_CAT + USER_ID)
                || ($CONFIG['users_can_edit_pics'] && $pic['owner_id'] == USER_ID)
            )
       ) {
        cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
    }

    $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = '$aid'");
    if (!$result->numRows()) {
        cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }
    $new_alb = $result->fetchAssoc(true);

    cpg_trim_keywords($keywords);

    $update  = "aid = '{$aid}'";

    if (is_movie($pic['filename'])) {
        $update .= ", pwidth = " . $pwidth;
        $update .= ", pheight = " . $pheight;
    }

    $update .= ", title = '{$title}'";
    $update .= ", caption = '{$caption}'";
    $update .= ", keywords = '{$keywords}'";

    if (GALLERY_ADMIN_MODE) {
        $approved = $superCage->post->getAlpha('approved');
        $update .= ", approved = '{$approved}'";
    } elseif (($new_alb['category'] < FIRST_USER_CAT) && ($aid != $pic['aid'])) {
        $approved = $USER_DATA['pub_upl_need_approval'] ? 'NO' : 'YES';
        $update .= ", approved = '{$approved}'";
    } elseif (($new_alb['category'] > FIRST_USER_CAT) && ($aid != $pic['aid']) && ($pic['category'] < FIRST_USER_CAT)) {
        $approved = $USER_DATA['priv_upl_need_approval'] ? 'NO' : 'YES';
        $update .= ", approved = '{$approved}'";
    }

    $update .= ", user1 = '{$user1}'";
    $update .= ", user2 = '{$user2}'";
    $update .= ", user3 = '{$user3}'";
    $update .= ", user4 = '{$user4}'";

    if ($isgalleryicon && $pic['category'] > FIRST_USER_CAT) {
        $sql = "UPDATE {$CONFIG['TABLE_PICTURES']} SET galleryicon = 0 WHERE owner_id = {$pic['owner_id']}";
        cpg_db_query($sql);
        $update .= ", galleryicon = " . $galleryicon;
    }

    if ($reset_vcount) {
        $update .= ", hits = 0";
        resetDetailHits($pid);
    }

    if ($reset_votes) {
        $update .= ", pic_rating = 0, votes = 0";
        resetDetailVotes($pid);
    }

    if ($read_exif) {
        // If "read exif info again" is checked then just delete the entry from the exif table.
        // The new exif information will automatically be read when someone views the image.
        $query = "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE pid = '$pid'";
        cpg_db_query($query);
    }

    if ($del_comments) {
        $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid = '$pid'";
        cpg_db_query($query);
    }

    $query = "UPDATE {$CONFIG['TABLE_PICTURES']} SET $update WHERE pid='$pid' LIMIT 1";
    cpg_db_query($query);

    // Executes after a file update is committed
    CPGPluginAPI::action('after_edit_file', $pid);

    // rename a file
    if ($superCage->post->keyExists('filename')) {
        $post_filename = $superCage->post->getEscaped('filename');
    }

    if ($post_filename != $pic['filename']) {

        if ($CONFIG['make_intermediate'] && cpg_picture_dimension_exceeds_intermediate_limit($pic['pwidth'], $pic['pheight'])) {
            $prefixes = array('fullsize', 'normal', 'thumb');
        } else {
            $prefixes = array('fullsize', 'thumb');
        }

        if ($CONFIG['enable_watermark'] == '1' && ($CONFIG['which_files_to_watermark'] == 'both' || $CONFIG['which_files_to_watermark'] == 'original')) {
            $prefixes[] = 'orig';
        }

        if (!is_image($pic['filename'])) {
            $prefixes = array('fullsize');

            // Check for custom thumbnails
            $mime_content_old = cpg_get_type($pic['filename']);
            $mime_content_new = cpg_get_type(replace_forbidden($post_filename));

            $file_base_name_old = str_replace('.' . $mime_content_old['extension'], '', basename($pic['filename']));

            foreach (array('.gif','.png','.jpg') as $thumb_extension) {
                if (file_exists($CONFIG['fullpath'] . $pic['filepath'] . $CONFIG['thumb_pfx'] . $file_base_name_old . $thumb_extension)) {
                    // Thumbnail found, check if it's the only file using that thumbnail
                    $count = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE filepath = '{$pic['filepath']}' AND filename LIKE '{$file_base_name_old}.%'")->result(0);
                    if ($count == 1) {
                        $prefixes[] = 'thumb';
                        $custom_thumb = TRUE;
                        break;
                    }
                }
            }
        }

        $pic_prefix = array(
            'thumb'    => $CONFIG['thumb_pfx'],
            'normal'   => $CONFIG['normal_pfx'],
            'orig'     => $CONFIG['orig_pfx'],
            'fullsize' => '',
        );

        $files_to_rename = array();

        foreach ($prefixes as $prefix) {

            $oldname = urldecode($CONFIG['fullpath'] . $pic['filepath'] . $pic_prefix[$prefix] . $pic['filename']);
            $filename = replace_forbidden($post_filename);
            $newname = str_replace($pic['filename'], $filename, $oldname);

            if ($custom_thumb == TRUE && $prefix == 'thumb') {
                $oldname = str_replace('.' . $mime_content_old['extension'], $thumb_extension, $oldname);
                $newname = str_replace('.' . $mime_content_new['extension'], $thumb_extension, $newname);
            }

            $old_mime = cpg_get_type($oldname);
            $new_mime = cpg_get_type($newname);

            if (($old_mime['mime'] != $new_mime['mime']) && isset($new_mime['mime'])) {
                cpg_die(CRITICAL_ERROR, sprintf($lang_editpics_php['mime_conv'], $old_mime['mime'], $new_mime['mime']), __FILE__, __LINE__);
            }

            if (!is_known_filetype($newname)) {
                cpg_die(CRITICAL_ERROR, $lang_editpics_php['forb_ext'], __FILE__, __LINE__);
            }

            if (file_exists($newname)) {
                cpg_die(CRITICAL_ERROR, sprintf($lang_editpics_php['file_exists'], $newname), __FILE__, __LINE__);
            }

            if (!file_exists($oldname)) {
                cpg_die(CRITICAL_ERROR, sprintf($lang_editpics_php['src_file_missing'], $oldname), __FILE__, __LINE__);
            }

            // Check if there will be no conflicts before doing anything
            $files_to_rename[] = array(
                'oldname'   => $oldname,
                'filename'  => $filename,
                'newname'   => $newname
            );
        }

        if (count($files_to_rename) > 0) {
            foreach ($files_to_rename as $file) {
                if (rename($file['oldname'], $file['newname'])) {
                    cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET filename = '{$file['filename']}' WHERE pid = '$pid' LIMIT 1");
                } else {
                    cpg_die(CRITICAL_ERROR, sprintf($lang_editpics_php['rename_failed'], $oldname, $newname), __FILE__, __LINE__);
                }
            }
        }
    }
} // end function process_post_data


function form_alb_list_box()
{
    global $CURRENT_PIC;
    global $lang_common, $icon_array;

    $options = album_selection_options($CURRENT_PIC['aid']);
    $icon_warning = cpg_fetch_icon('warning');

    echo <<< EOT

    <tr>
        <td class="tableb" style="white-space: nowrap;" valign="top">
            {$icon_array['album']}{$lang_common['album']}
        </td>
        <td class="tableb" valign="top">
            {$icon_array['move']}
            <select name="aid" id="album" class="listbox">
            $options
            </select>
            <table id="wrapper_permissions" style="display:none; padding-top:6px;" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td>$icon_warning</td>
                    <td style="padding-left:10px;">
                        <div id="note_permissions"></div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

EOT;
} // end function form_alb_list_box


/* --------------------------------------------------------------------------
 * MAIN CODE
 * --------------------------------------------------------------------------*/

if ($superCage->post->keyExists('apply_changes')) {
    process_post_data();
}

$result = cpg_db_query("SELECT *, p.title AS title, p.votes AS votes FROM {$CONFIG['TABLE_PICTURES']} AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = p.aid WHERE pid = '$pid'");

$CURRENT_PIC = $result->fetchAssoc(true);

if (!(GALLERY_ADMIN_MODE || $CURRENT_PIC['category'] == FIRST_USER_CAT + USER_ID || ($CONFIG['users_can_edit_pics'] && $CURRENT_PIC['owner_id'] == USER_ID)) || !USER_ID) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$thumb_url = get_pic_url($CURRENT_PIC, 'thumb');
$thumb_link = 'displayimage.php?pid='.$CURRENT_PIC['pid'];
$filename = htmlspecialchars($CURRENT_PIC['filename']);
$filepath = htmlspecialchars($CURRENT_PIC['filepath']);

$THUMB_ROWSPAN = 7;
if ($CONFIG['user_field1_name'] != '') {
    $THUMB_ROWSPAN++;
}
if ($CONFIG['user_field2_name'] != '') {
    $THUMB_ROWSPAN++;
}
if ($CONFIG['user_field3_name'] != '') {
    $THUMB_ROWSPAN++;
}
if ($CONFIG['user_field4_name'] != '') {
    $THUMB_ROWSPAN++;
}

$public_can_edit_pics = GALLERY_ADMIN_MODE ? 1 : $CONFIG['users_can_edit_pics'];
set_js_var('confirm_move',          $lang_editpics_php['confirm_move']);
set_js_var('note_approve_public',   $lang_editpics_php['note_approve_public']);
set_js_var('note_approve_private',  $lang_editpics_php['note_approve_private']);
set_js_var('note_edit_control',     $lang_editpics_php['note_edit_control']);
set_js_var('public_need_approval',  $USER_DATA['pub_upl_need_approval']);
set_js_var('private_need_approval', $USER_DATA['priv_upl_need_approval']);
set_js_var('public_can_edit_pics',  $public_can_edit_pics);
set_js_var('pic_currently_public',  $CURRENT_PIC['category'] < FIRST_USER_CAT ? 1 : 0);

pageheader($lang_editpics_php['edit_pic']);

if ($superCage->post->keyExists('apply_changes')) {
    starttable('100%', cpg_fetch_icon('info', 2) . $lang_common['information'], 1);
    echo <<< EOT
    <tr>
        <td class="tableb">
            <ul>
                <li style="list-style-image:url(images/icons/ok.png)">{$lang_editpics_php['success_changes']}</li>
            </ul>
        </td>
    </tr>
EOT;
    endtable();
}

echo <<<EOT
<form name="editonepicform" id="cpgform_editonepic" method="post" action="edit_one_pic.php">
<input type="hidden" name="id" value="{$CURRENT_PIC['pid']}" />
EOT;

starttable("100%", cpg_fetch_icon('edit', 2) . $lang_editpics_php['edit_pic'], 3);

if (!is_movie($CURRENT_PIC['filename'])) {
    $pic_info = sprintf($lang_editpics_php['pic_info_str'], $CURRENT_PIC['pwidth'], $CURRENT_PIC['pheight'], ($CURRENT_PIC['filesize'] >> 10), $CURRENT_PIC['hits'], $CURRENT_PIC['votes']);
} else {
    $pic_info = sprintf($lang_editpics_php['pic_info_str'], '<input type="text" name="pwidth" value="'.$CURRENT_PIC['pwidth'].'" size="5" maxlength="5" class="textinput" />', '<input type="text" name="pheight" value="'.$CURRENT_PIC['pheight'].'" size="5" maxlength="5" class="textinput" />', ($CURRENT_PIC['filesize'] >> 10), $CURRENT_PIC['hits'], $CURRENT_PIC['votes']);
}

if (defined('UPLOAD_APPROVAL_MODE')) {
    if ($CURRENT_PIC['owner_id']) {
        $pic_info .= ' - <a href="profile.php?uid=' . $CURRENT_PIC['owner_id'] . '">' . $cpg_udb->get_user_name($CURRENT_PIC['owner_id']) . '</a>';
    }
}

print <<< EOT

    <tr>
        <td class="tableh2" colspan="3">
            <strong>{$filename}</strong>
            &nbsp;&nbsp;-&nbsp;&nbsp;
            <a href="modifyalb.php?album={$CURRENT_PIC['aid']}" class="admin_menu">
                {$icon_array['album_properties']}{$lang_editpics_php['album_properties']}
            </a>
            &nbsp;&nbsp;-&nbsp;&nbsp;
            <a href="thumbnails.php?album={$CURRENT_PIC['aid']}" class="admin_menu">
                {$icon_array['thumbnail_view']}{$lang_editpics_php['thumbnail_view']}
            </a>
        </td>
    </tr>
    <tr>
        <td class="tableb" style="white-space:nowrap;">
            {$icon_array['file_info']}{$lang_editpics_php['pic_info']}
        </td>
        <td class="tableb">
            $pic_info
        </td>
        <td class="tableb" align="center" rowspan="$THUMB_ROWSPAN">
            <a href="$thumb_link">
                <img src="$thumb_url" class="image" border="0" alt="{$CURRENT_PIC['title']}"/>
            </a>
            <br />
        </td>
    </tr>
EOT;

form_alb_list_box();

if ($CONFIG['show_bbcode_help']) {
    $captionLabel = '&nbsp;'. cpg_display_help('f=empty.html&amp;h=lang_bbcode_help_title&amp;t=lang_bbcode_help', 470, 245);
}

$keywords_insert1 = sprintf($lang_common['keywords_insert1'], $lang_common['keyword_separators'][$CONFIG['keyword_separator']]);

print <<<EOT

    <tr>
        <td class="tableb" style="white-space: nowrap;">
            {$icon_array['title']}{$lang_common['title']}
        </td>
        <td width="100%" class="tableb" valign="top">
            <input type="text" style="width: 100%" name="title" maxlength="255" value="{$CURRENT_PIC['title']}" class="textinput" />
        </td>
    </tr>
    <tr>
        <td class="tableb" style="white-space: nowrap;">
            {$icon_array['file_name']}{$lang_common['filename']}
        </td>
        <td width="100%" class="tableb" valign="top">
            <tt>{$CONFIG['site_url']}{$CONFIG['fullpath']}{$filepath}</tt>
            <input type="text" name="filename" maxlength="255" size="40" value="{$CURRENT_PIC['filename']}" class="textinput" />
        </td>
    </tr>
    <tr>
        <td class="tableb" valign="top" style="white-space: nowrap;">
            {$icon_array['description']}{$lang_editpics_php['desc']}$captionLabel
        </td>
        <td class="tableb" valign="top">
            <textarea name="caption" id="caption" rows="1" cols="60" class="elastic textinput" onkeydown="textCounter(this, {$CONFIG['max_img_desc_length']});" onkeyup="textCounter(this, {$CONFIG['max_img_desc_length']});" style="max-height:200px;">{$CURRENT_PIC['caption']}</textarea>
        </td>
    </tr>
    <tr>
        <td class="tableb" style="white-space: nowrap;">
            {$icon_array['keyword']}{$keywords_insert1}<br />
            <a href="keyword_select.php" class="greybox">{$lang_common['keywords_insert2']}</a>
        </td>
        <td width="100%" class="tableb" valign="top">
            <input type="text" style="width: 100%" name="keywords" maxlength="255" value="{$CURRENT_PIC['keywords']}" id="keywords" class="textinput" />
        </td>
    </tr>
EOT;

if (GALLERY_ADMIN_MODE) {

    $checkYes = ($CURRENT_PIC['approved'] == 'YES') ? 'checked="checked"' : '';
    $checkNo = ($CURRENT_PIC['approved'] == 'NO') ? 'checked="checked"' : '';

    echo <<< EOT

    <tr>
        <td class="tableb" style="white-space: nowrap;">
            {$icon_array['file_approval']}{$lang_editpics_php['approval']}
        </td>
        <td width="100%" class="tableb" valign="top">
            <input type="radio" id="approved_yes" name="approved" value="YES" $checkYes />
            <label for="approved_yes" class="clickable_option">{$icon_array['file_approve']}{$lang_editpics_php['approved']}</label>
            &nbsp;&nbsp;
            <input type="radio" id="approved_no" name="approved" value="NO" $checkNo />
            <label for="approved_no" class="clickable_option">{$icon_array['file_disapprove']}{$lang_editpics_php['unapproved']}</label>
        </td>
    </tr>
EOT;
} elseif ($CURRENT_PIC['approved'] == 'NO') {
    echo <<< EOT

    <tr>
        <td class="tableb" style="white-space: nowrap;">
            {$icon_array['file_approval']}{$lang_editpics_php['approval']}
        </td>
        <td width="100%" class="tableb" valign="top">
            {$icon_array['file_disapprove']}{$lang_editpics_php['unapproved']}
        </td>
    </tr>
EOT;
}

if ($CONFIG['user_field1_name'] != '') {

    echo <<< EOT

    <tr>
        <td class="tableb" style="white-space: nowrap;">
            {$CONFIG['user_field1_name']}
        </td>
        <td width="100%" class="tableb" valign="top">
            <input type="text" style="width: 100%" name="user1" maxlength="255" value="{$CURRENT_PIC['user1']}" class="textinput" />
        </td>
    </tr>
EOT;
}

if ($CONFIG['user_field2_name'] != '') {

    echo <<< EOT

    <tr>
        <td class="tableb" style="white-space: nowrap;">
            {$CONFIG['user_field2_name']}
        </td>
        <td width="100%" class="tableb" valign="top">
            <input type="text" style="width: 100%" name="user2" maxlength="255" value="{$CURRENT_PIC['user2']}" class="textinput" />
        </td>
    </tr>
EOT;
}

if ($CONFIG['user_field3_name'] != '') {

    echo <<< EOT

    <tr>
        <td class="tableb" style="white-space: nowrap;">
            {$CONFIG['user_field3_name']}
        </td>
        <td width="100%" class="tableb" valign="top">
            <input type="text" style="width: 100%" name="user3" maxlength="255" value="{$CURRENT_PIC['user3']}" class="textinput" />
        </td>
    </tr>
EOT;
}

if ($CONFIG['user_field4_name'] != '') {

    echo <<< EOT

    <tr>
        <td class="tableb" style="white-space: nowrap;">
            {$CONFIG['user_field4_name']}
        </td>
        <td width="100%" class="tableb" valign="top">
            <input type="text" style="width: 100%" name="user4" maxlength="255" value="{$CURRENT_PIC['user4']}" class="textinput" />
        </td>
    </tr>
EOT;
}

// If this is the users gallery icon then check it
$isgalleryicon_selected = ($CURRENT_PIC['galleryicon']) ? 'checked="checked" ': '';
$isgalleryicon_disabled = ($CURRENT_PIC['category'] < FIRST_USER_CAT) ? 'disabled="disabled" ':'';

print <<<EOT

    <tr>
        <td class="tableb" colspan="3" align="center">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td width="20%" align="center">
                        <input type="checkbox" name="galleryicon" id="galleryicon" {$isgalleryicon_selected}{$isgalleryicon_disabled}value="{$CURRENT_PIC['pid']}" class="checkbox" />
                        <label for="galleryicon">{$lang_editpics_php['gallery_icon']}</label>
                    </td>
                    <td width="20%" align="center">
                        <input type="checkbox" name="read_exif" id="read_exif" value="1" class="checkbox" />
                        <label for="read_exif">{$icon_array['exif']}{$lang_editpics_php['read_exif']}</label>
                    </td>
                    <td width="20%" align="center">
                        <input type="checkbox" name="reset_vcount" id="reset_vcount" value="1" class="checkbox" />
                        <label for="reset_vcount">{$icon_array['reset_views']}{$lang_editpics_php['reset_view_count']} ({$CURRENT_PIC['hits']})</label>
                    </td>
                    <td width="20%" align="center">
                        <input type="checkbox" name="reset_votes" id="reset_votes" value="1" class="checkbox" />
                        <label for="reset_votes">{$icon_array['reset_votes']}{$lang_editpics_php['reset_votes']} ({$CURRENT_PIC['votes']})</label>
                    </td>
                    <td width="20%" align="center">
                        <input type="checkbox" name="del_comments" id="del_comments" value="1" class="checkbox" />
                        <label for="del_comments">{$icon_array['delete_comments']}{$lang_editpics_php['del_comm']}</label>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="3" align="center" class="tablef">
            <button type="submit" class="button" name="apply_changes" value="{$lang_common['apply_changes']}">{$icon_array['ok']}{$lang_common['apply_changes']}</button>
        </td>
    </tr>

EOT;

endtable();
list($timestamp, $form_token) = getFormToken();
echo "<input type=\"hidden\" name=\"form_token\" value=\"{$form_token}\" />
<input type=\"hidden\" name=\"timestamp\" value=\"{$timestamp}\" /></form>";

pagefooter();

//EOF