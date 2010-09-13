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
define('MODIFYALB_PHP', true);

include("include/init.inc.php");

if ($superCage->get->keyExists('album')) {
    $CLEAN['album'] = $superCage->get->getInt('album');
} else {
    $CLEAN['album'] = 0;
}

if (!(GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && user_is_allowed(false)))) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

// Type 0 => input
// 1 => yes/no
// 2 => Category
// 3 => Textarea
// 4 => Album thumbnail
// 5 => Album visibility

// add footnote
$notice1 = ' <a href="#notice1" class="">*</a>';
$help = array();
$help['table'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop&amp;ae=album_prop_end&amp;top=1', '600', '400');
$help['related_tasks'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_related_tasks&amp;ae=album_prop_controls_related_tasks_end', '500', '250');
$help['choose_album'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_album_dropdown&amp;ae=album_prop_controls_album_dropdown_end', '500', '250');
$help['album_title'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_album_title&amp;ae=album_prop_controls_album_title_end', '500', '250');
$help['album_category'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_album_category&amp;ae=album_prop_controls_album_category_end', '500', '250');
$help['album_keywords'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_album_keyword&amp;ae=album_prop_controls_album_keyword_end', '500', '250');
$help['album_thumbnail'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_album_thumbnail&amp;ae=album_prop_controls_album_thumbnail_end', '500', '250');
$help['album_can_be_viewed_by'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_album_can_be_viewed_by&amp;ae=album_prop_controls_album_can_be_viewed_by_end', '500', '250');
$help['album_password'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_password_protection&amp;ae=album_prop_controls_password_protection_end&amp', '500', '250');
$help['can_upload'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_visitor_upload&amp;ae=album_prop_controls_visitor_upload_end&amp', '400', '200');
$help['can_post_comments'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_can_post_comment&amp;ae=album_prop_controls_can_post_comment_end&amp', '400', '200');
$help['can_rate'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_can_rate_files&amp;ae=album_prop_controls_can_rate_files_end&amp', '400', '200');
$help['can_moderate'] = '&nbsp;'.cpg_display_help('f=albums.htm&amp;as=album_prop_controls_album_moderation&amp;ae=album_prop_controls_album_moderation_end&amp', '400', '200');

// Define the icons
$icon_array = array(
    'album_properties'   => cpg_fetch_icon('modifyalb', 2),
    'thumbnail'          => cpg_fetch_icon('thumbnails', 1),
    'album_thumbnail'    => cpg_fetch_icon('thumbnails', 2),
    'password'           => cpg_fetch_icon('key_enter', 2),
    'album'              => cpg_fetch_icon('alb_mgr', 2),
    'upload'             => cpg_fetch_icon('upload', 2),
    'move'               => cpg_fetch_icon('move', 1),
    'title'              => cpg_fetch_icon('title', 2),
    'view'               => cpg_fetch_icon('groups_mgr', 2),
    'description'        => cpg_fetch_icon('text_left', 2),
    'keyword'            => cpg_fetch_icon('keyword_mgr', 2),
    'views'              => cpg_fetch_icon('stats', 2),
    'ok'                 => cpg_fetch_icon('ok', 1),
    'category'           => cpg_fetch_icon('category', 1),
    'album_category'     => cpg_fetch_icon('category', 2),
    'file'               => cpg_fetch_icon('file', 2),
    'comment'            => cpg_fetch_icon('comment', 2),
    'rate'               => cpg_fetch_icon('top_rated', 2),
    'blank'              => cpg_fetch_icon('blank', 2),
    'edit_files'         => cpg_fetch_icon('edit', 1),
    'stop'               => cpg_fetch_icon('stop', 0, '', '', 'png', 1),  // Only get the image path and not the embedding <img>-tag
);

$captionLabel = $lang_modifyalb_php['alb_desc'];

if ($CONFIG['show_bbcode_help']) {
    $captionLabel .= '&nbsp;'. cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_bbcode_help_title))).'&amp;t='.urlencode(base64_encode(serialize($lang_bbcode_help))), 470, 245);
}

$data = array($lang_modifyalb_php['general_settings'],
    array($icon_array['title'].$lang_modifyalb_php['alb_title'].$help['album_title'], 'title', 0),
    array($icon_array['album_category'].$lang_modifyalb_php['alb_cat'].$help['album_category'], 'category', 2),
    array($icon_array['description'].$captionLabel, 'description', 3),
    array($icon_array['keyword'].$lang_modifyalb_php['alb_keyword'].$help['album_keywords'], 'keyword', 0),
    array($lang_modifyalb_php['alb_thumb'], 'thumb', 4), 
    $lang_modifyalb_php['alb_perm'],
    array($icon_array['view'].$lang_modifyalb_php['can_view'].$help['album_can_be_viewed_by'], 'visibility', 5),
    array($icon_array['password'].$lang_modifyalb_php['password_protect'].$help['album_password'], 'password_protect', 9),
    array($icon_array['blank'].$lang_modifyalb_php['alb_password'], 'alb_password', 6),
    array($icon_array['blank'].$lang_modifyalb_php['alb_password_hint'], 'alb_password_hint', 7),
    array($icon_array['upload'].$lang_modifyalb_php['can_upload'].$notice1.$help['can_upload'], 'uploads', 1),
    array($icon_array['comment'].$lang_modifyalb_php['can_post_comments'].$notice1.$help['can_post_comments'], 'comments', 1),
    array($icon_array['rate'].$lang_modifyalb_php['can_rate'].$notice1.$help['can_rate'], 'votes', 1),
);

/* TODO: re-enable and test feature when it's clear how it should work (see http://forum.coppermine-gallery.net/index.php/topic,64408.0.html)
if (GALLERY_ADMIN_MODE) {
    $data[] = array($lang_modifyalb_php['can_moderate'].$help['can_moderate'], 'moderator_group', 8);
}
*/

function form_label($text)
{
    echo <<< EOT
    <tr>
        <td class="tableh2" colspan="2">
            <strong>$text</strong>
        </td>
    </tr>

EOT;
}

function form_input($text, $name)
{
    global $ALBUM_DATA, $CONFIG;
    
    $value = $ALBUM_DATA[$name];
    $disabled = '';
    
    if ($name == 'keyword' && !GALLERY_ADMIN_MODE && $CONFIG['allow_user_album_keyword'] != 1) {
        $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
    }
    
    echo <<< EOT
    <tr>
        <td width="40%">
            $text
        </td>
        <td width="60%" valign="top">
            <input type="text" style="width: 98%" name="$name" value="$value" class="textinput" $disabled />
        </td>
    </tr>   

EOT;
}

function form_yes_no($text, $name)
{
    global $ALBUM_DATA, $lang_common;

    if ($name == 'uploads' && USER_ADMIN_MODE) {
        echo "        <input type=\"hidden\" name=\"$name\" value=\"{$ALBUM_DATA['uploads']}\" />";
        return;
    }

    $value = isset($ALBUM_DATA[$name]) ? $ALBUM_DATA[$name] : false;
    $yes_selected = $value == 'YES' ? 'checked="checked"' : '';
    $no_selected = $value == 'NO' ? 'checked="checked"' : '';

    echo <<< EOT
    <tr>
        <td>
            $text
        </td>
        <td valign="top">
            <input type="radio" id="{$name}1" name="$name" value="YES" $yes_selected />
            <label for="{$name}1" class="clickable_option">{$lang_common['yes']}</label>
            &nbsp;&nbsp;
            <input type="radio" id="{$name}0" name="$name" value="NO" $no_selected />
            <label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>
        </td>
    </tr>

EOT;
}

function form_category($text, $name)
{
    global $ALBUM_DATA, $CAT_LIST, $USER_DATA, $lang_modifyalb_php, $CONFIG, $icon_array, $LINEBREAK;

    //check if users are allowed to move their albums
    if (!GALLERY_ADMIN_MODE && $CONFIG['allow_user_move_album'] == 0) {

        //get category name
        $cat_name = $lang_modifyalb_php['user_gal'];

        if ($ALBUM_DATA['category'] != (FIRST_USER_CAT + USER_ID)) {
            $result = cpg_db_query("SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '" . $ALBUM_DATA['category'] . "' LIMIT 1");
            $cat_name = cpg_db_fetch_row($result);
            mysql_free_result($result);
            $cat_name = $cat_name['name'];
        }
        
        echo <<< EOT
    <tr>
        <td>
            $text
        </td>
        <td valign="top">
            <em>{$cat_name}</em>
            <input type="hidden" name="$name" value="{$ALBUM_DATA['category']}" />
        </td>
    </tr>

EOT;
        return;
    }

    $CAT_LIST = array();
    
    //only add 'no category' when user is admin
    if (GALLERY_ADMIN_MODE) {
        $CAT_LIST[] = array(0, $lang_modifyalb_php['no_cat']);
    }
    
    //add user catergory
    $CAT_LIST[] = array((FIRST_USER_CAT + USER_ID), $lang_modifyalb_php['my_gal']);

    get_cat_data();

    echo <<< EOT
    <tr>
        <td>
            $text
        </td>
        <td valign="top">
            {$icon_array['move']}<select name="$name" class="listbox">
EOT;

    foreach ($CAT_LIST as $category) {
        echo '                <option value="' . $category[0] . '"' . ($ALBUM_DATA['category'] == $category[0] ? ' selected="selected"': '') . ">" . $category[1] . '</option>' . $LINEBREAK;
    }

    echo <<< EOT
            </select>
        </td>
    </tr>

EOT;
}

function form_textarea($text, $name)
{
    global $ALBUM_DATA;

    $value = $ALBUM_DATA[$name];

    echo <<< EOT
    <tr>
        <td valign="top">
            $text
        </td>
        <td valign="top">
            <textarea name="$name" rows="5" cols="40" class="textinput" style="width: 98%;">{$ALBUM_DATA['description']}</textarea>
        </td>
    </tr>

EOT;
}

function form_alb_thumb($text, $name)
{
    global $CONFIG, $ALBUM_DATA, $CLEAN, $lang_modifyalb_php, $USER_DATA, $LINEBREAK, $help, $icon_array;

    $cpg_nopic_data = cpg_get_system_thumb('nopic.jpg', $USER_DATA['user_id']);

    $keyword = '';
    
    if ($ALBUM_DATA['keyword']) {
        $keyword = "OR (keywords LIKE '%{$ALBUM_DATA['keyword']}%')";
    }

    $query = "SELECT pid, filepath, filename, url_prefix FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND (aid = '{$CLEAN['album']}' $keyword ) ORDER BY filename";

    $results = cpg_db_query($query);
    
    if (mysql_num_rows($results) == 0) {
    
        echo <<< EOT
    <tr>
        <td valign="top">
            {$text}
        </td>
        <td valign="top">
            <em>{$lang_modifyalb_php['alb_empty']}</em>
            <input type="hidden" name="$name" value="0" />
        </td>
    </tr>

EOT;
        return;
    }

    $thumbs = array(
        0 => $cpg_nopic_data['thumb'],
    );

    $img_list = array(
        0 => $lang_modifyalb_php['last_uploaded'],
        -1 => $lang_modifyalb_php['random_image'],
    );

    while ($picture = mysql_fetch_assoc($results)) {

        $thumb_url = get_pic_url($picture, 'thumb');
        
        $thumbs[$picture['pid']] = $thumb_url;
        
        if ($picture['pid'] == $ALBUM_DATA[$name]) {
            $thumbs[0] = $thumb_url;
        }
        
        $img_list[$picture['pid']] = htmlspecialchars($picture['filename']);
    }
    
    mysql_free_result($results);
    
    $thumbs_json = json_encode($thumbs);
    
    $thumb_cell_height = $CONFIG['thumb_width'] + 17;

    echo <<< EOT
    <tr>
        <td valign="top">
            {$icon_array['album_thumbnail']}{$text}{$help['album_thumbnail']}
        </td>
        <td align="left">
            <img src="{$thumbs[0]}" name="Thumb" class="image" alt="$text" />
            <br />

EOT;

    echo <<< EOT
            <script language="JavaScript" type="text/JavaScript">
                var Pic = $thumbs_json;
            </script>

EOT;

    echo <<< EOT
            <select name="$name" class="listbox" onchange="if(this.options[this.selectedIndex].value) ChangeThumb(this.options[this.selectedIndex].value);" onkeyup="if(this.options[this.selectedIndex].value) ChangeThumb(this.options[this.selectedIndex].value);">

EOT;
    foreach ($img_list as $pid => $pic_name) {
        echo '                <option value="' . $pid . '"' . ($pid == $ALBUM_DATA[$name] ? ' selected="selected"' : '') . '>' . $pic_name . '</option>' . $LINEBREAK;
    }
    
    echo <<< EOT
            </select>
        </td>
    </tr>

EOT;
}

function form_password_protect($text, $name)
{
    global $ALBUM_DATA;
  
    if (!empty($ALBUM_DATA['alb_password'])) {
        $checked = ' checked="checked"';
    } else {
        $checked = '';
    }

    echo <<< EOT
    <tr>
        <td width="40%">
            $text
        </td>
        <td width="60%" valign="top">
            <input id="$name" type="checkbox" name="$name" value="yes"$checked />
        </td>
    </tr>

EOT;
}

function form_password($text, $name)
{
    global $ALBUM_DATA;
  
    $value = $ALBUM_DATA[$name];

    echo <<<EOT
    <tr>
        <td width="40%">
            $text
        </td>
        <td width="60%" valign="top">
            <input type="password" name="$name" class="textinput" size="34" />
        </td>
    </tr>

EOT;
}

function form_password_hint($text, $name)
{
    global $ALBUM_DATA;

    $value = $ALBUM_DATA[$name];

    echo <<< EOT
    <tr>
        <td width="40%">
            $text
        </td>
        <td width="60%" valign="top">
            <input type="text" name="$name" value="$value" class="textinput" size="34" />
        </td>
    </tr>

EOT;
}

function form_visibility($text, $name)
{
    global $CONFIG, $USER_DATA, $ALBUM_DATA, $lang_modifyalb_php, $cpg_udb, $LINEBREAK;

    if (!$CONFIG['allow_private_albums']) {
        echo '        <input type="hidden" name="' . $name . '" value="0" />' . $LINEBREAK;
        return;
    }

    if (GALLERY_ADMIN_MODE) {
    
        $options = array(
            0 => $lang_modifyalb_php['public_alb'],
            FIRST_USER_CAT + USER_ID => $lang_modifyalb_php['me_only'],
        );

        if ($ALBUM_DATA['category'] > FIRST_USER_CAT) {
            
            $owner_name = $cpg_udb->get_user_name($ALBUM_DATA['category'] - FIRST_USER_CAT);

            $options[$ALBUM_DATA['category']] = sprintf($lang_modifyalb_php['owner_only'], $owner_name);
        }
        
        $result = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']}");

        while ($group = mysql_fetch_assoc($result)) {
            $options[$group['group_id']] = sprintf($lang_modifyalb_php['group_only'], $group['group_name']);
        }
        
        mysql_free_result($result);
        
    } else {
    
        $options = array(
            0 => $lang_modifyalb_php['public_alb'],
            FIRST_USER_CAT + USER_ID => $lang_modifyalb_php['me_only'],
        );
        
        $result = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id IN " . USER_GROUP_SET);

        while ($group = mysql_fetch_assoc($result)) {
            $options[$group['group_id']] = sprintf($lang_modifyalb_php['group_only'], $group['group_name']);
        }
        
        mysql_free_result($result);
    }

    echo <<< EOT
    <tr>
        <td>
            $text
        </td>
        <td valign="top">
            <select name="$name" class="listbox">

EOT;

    foreach ($options as $value => $caption) {
        echo '                <option value="' . $value . '"' . ($ALBUM_DATA['visibility'] == $value ? ' selected="selected"' : '') . '>' . $caption . '</option>' . $LINEBREAK;
    }

    echo <<< EOT
            </select>
        </td>
    </tr>

EOT;
}

function form_moderator($text, $name)
{
    global $CONFIG, $ALBUM_DATA, $lang_modifyalb_php, $LINEBREAK;

    $options = array(
        0 => $lang_modifyalb_php['admins_only'],
    );
    
    $result = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id > 1");

    while ($group = mysql_fetch_assoc($result)) {
        $options[$group['group_id']] = sprintf($lang_modifyalb_php['group_only'], $group['group_name']);
    }

    mysql_free_result($result);
    
    echo <<< EOT
    <tr>
        <td>
            $text
        </td>
        <td valign="top">
            <select name="$name" class="listbox">

EOT;

    foreach ($options as $value => $caption) {
        echo '                <option value="' . $value . '"' . ($ALBUM_DATA['moderator_group'] == $value ? ' selected="selected"' : '') . '>' . $caption . '</option>' . $LINEBREAK;
    }

    echo <<< EOT
            </select>
        </td>
    </tr>

EOT;
}

function create_form(&$data)
{
    foreach ($data as $element) {
        if (is_array($element)) {
            switch ($element[2]) {
            case 0:
                form_input($element[0], $element[1]);
                break;
            case 1:
                form_yes_no($element[0], $element[1]);
                break;
            case 2:
                form_category($element[0], $element[1]);
                break;
            case 3:
                form_textarea($element[0], $element[1]);
                break;
            case 4:
                form_alb_thumb($element[0], $element[1]);
                break;
            case 5:
                form_visibility($element[0], $element[1]);
                break;
            case 6:
                form_password($element[0], $element[1]);
                break;
            case 7:
                form_password_hint($element[0], $element[1]);
                break;
            case 8:
                form_moderator($element[0], $element[1]);
                break;
            case 9:
                form_password_protect($element[0], $element[1]);
                break;
            default:
                cpg_die(CRITICAL_ERROR, 'Invalid action for form creation', __FILE__, __LINE__);
            }
        } else {
            form_label($element);
        }
    }
}

function alb_list_box()
{
    global $CONFIG, $CLEAN, $cpg_udb, $CPG_PHP_SELF, $lang_modifyalb_php, $LINEBREAK;
    
    $rowset = array();
    
    if (GALLERY_ADMIN_MODE) {

        $result = cpg_db_query("SELECT a.aid, a.title, c.name FROM {$CONFIG['TABLE_ALBUMS']} AS a INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS c ON a.category = c.cid WHERE a.category < '" . FIRST_USER_CAT . "'");

        while ($row = mysql_fetch_assoc($result)) {
            // Add to multi-dim array for later sorting
            $rowset[] = array(
                'cat'   => $row['name'],
                'aid'   => $row['aid'],
                'title' => $row['title'],
            );
        }
        
        mysql_free_result($result);
        
        //now we need to select the albums without a category
        $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0");

        while ($row = mysql_fetch_assoc($result)) {
            // Add to multi-dim array for later sorting
            $rowset[] = array(
                'cat'   => $lang_modifyalb_php['no_cat'],
                'aid'   => $row['aid'],
                'title' => $row['title'],
            );
        }
        
        mysql_free_result($result);
        
        $sql = $cpg_udb->get_admin_album_list();
        
        $result = cpg_db_query($sql);
        
        while ($row = mysql_fetch_assoc($result)) {
            // Add to multi-dim array for later sorting
            $rowset[] = array(
                'cat'   => $lang_modifyalb_php['user_gal'],
                'aid'   => $row['aid'],
                'title' => $row['title'],
            );  
        }
        
        mysql_free_result($result);
        
    } else {
    
        //Only list the albums owned by the user
        $cat = USER_ID + FIRST_USER_CAT;
        $user_id = USER_ID;
        
        //get albums in "my albums"
        $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat");

        while ($row = mysql_fetch_assoc($result)) {
            // Add to multi-dim array for later sorting
            $rowset[] = array(
                'cat'   => $lang_modifyalb_php['my_gal'],
                'aid'   => $row['aid'],
                'title' => $row['title'],
            );  
        }
        
        mysql_free_result($result);

        //get public albums
        $result = cpg_db_query("SELECT a.aid, a.title, c.name FROM {$CONFIG['TABLE_ALBUMS']} AS a INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS c ON a.category = c.cid WHERE a.owner = '$user_id'");

        while ($row = mysql_fetch_assoc($result)) {
            // Add to multi-dim array for later sorting
            $rowset[] = array(
                'cat'   => $row['name'],
                'aid'   => $row['aid'],
                'title' => $row['title'],
            );  
        }
        
        mysql_free_result($result);
    }
    
    // Sort by category and album title
    $rowset = array_csort($rowset, 'cat', 'title');
    
    if (count($rowset)) {
    
         // Create the nicely sorted and formatted drop down list
        $alb_cat = '';
        $select = "<select name=\"album_listbox\" class=\"listbox\" onchange=\"if(this.options[this.selectedIndex].value) window.location.href='{$CPG_PHP_SELF}?album='+this.options[this.selectedIndex].value;\">" . $LINEBREAK;

        foreach ($rowset as $val) {
            if ($val['cat'] != $alb_cat) {
                if ($alb_cat) {
                    $select .= '</optgroup>' . $LINEBREAK;
                }
                $select .= '<optgroup label="' . $val['cat'] . '">' . $LINEBREAK;
                $alb_cat = $val['cat'];
            }
            $select .= '<option value="' . $val['aid'] . '"' . ($val['aid'] == $CLEAN['album'] ? ' selected="selected"' : '') . '>   ' . $val['title'] . '</option>' . $LINEBREAK;
        }
        
        if ($alb_cat) {
            $select .= '</optgroup>' . $LINEBREAK;
        }

        $select .= '</select>' . $LINEBREAK;
        
        return $select;
    }
}

if (!$CLEAN['album']) {

    if (GALLERY_ADMIN_MODE) {
        $results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1 LIMIT 1");
    } else {
        $results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = " . (FIRST_USER_CAT + USER_ID) . " OR owner = '" . USER_ID . "' LIMIT 1");
    }
    
    if (mysql_num_rows($results) == 0) {
        cpg_die(ERROR, $lang_modifyalb_php['err_no_alb_to_modify'], __FILE__, __LINE__);
    }
    
    $ALBUM_DATA = mysql_fetch_assoc($results);
    
    $CLEAN['album'] = $ALBUM_DATA['aid'];

} else {

    $results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='{$CLEAN['album']}'");

    if (!mysql_num_rows($results)) {
        cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }
    
    $ALBUM_DATA = mysql_fetch_assoc($results);
}

$cat = $ALBUM_DATA['category'];
$actual_cat = $cat;

//////////// main code start ///////////////////

js_include('js/modifyalb.js');

set_js_var('reset_views_confirm', $lang_modifyalb_php['reset_views_confirm']);
set_js_var('cursor_stop', $icon_array['stop']);

pageheader(sprintf($lang_modifyalb_php['upd_alb_n'], $ALBUM_DATA['title']));

$album_lb = alb_list_box();



echo <<< EOT
    <form method="post" name="modifyalbum" action="db_input.php">
    <input type="hidden" name="event" value="album_update" />
    <input type="hidden" name="aid" value="{$CLEAN['album']}" />
EOT;

starttable("100%", cpg_fetch_icon('modifyalb', 1) . $lang_common['album_properties'] . ' - ' . $lang_modifyalb_php['update'].$help['table'], 2, 'cpg_zebra');

echo <<< EOT
    <tr>
        <td class="tableh2">
            <strong>{$lang_modifyalb_php['related_tasks']}</strong>{$help['related_tasks']}
        </td>
        <td class="tableh2" align="center">
            <a href="editpics.php?album={$CLEAN['album']}" class="admin_menu">{$icon_array['edit_files']}{$lang_modifyalb_php['edit_files']}</a>
            &nbsp;&nbsp;-&nbsp;&nbsp;
            <a href="index.php?cat={$ALBUM_DATA['category']}" class="admin_menu">{$icon_array['category']}{$lang_modifyalb_php['parent_category']}</a>
            &nbsp;&nbsp;-&nbsp;&nbsp;
            <a href="thumbnails.php?album={$CLEAN['album']}" class="admin_menu">{$icon_array['thumbnail']}{$lang_modifyalb_php['thumbnail_view']}</a>
        </td>
    </tr>
    <tr>
        <td>
            {$icon_array['album']}{$lang_modifyalb_php['choose_album']}{$help['choose_album']}
        </td>
        <td align="left">
            $album_lb
        </td>
    </tr>

EOT;

create_form($data);

echo <<< EOT
    <tr>
        <td colspan="2" align="left" class="tablef">
            <a name="notice1"></a>
EOT;

if (GALLERY_ADMIN_MODE) {
    printf($lang_modifyalb_php['notice1'], '<a href="groupmgr.php">', '</a>');
} else {
    printf($lang_modifyalb_php['notice1'], '', '');
}
list($timestamp, $form_token) = getFormToken(); 
echo <<< EOT
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center" class="tablef">
            <button type="submit" class="button" name="update_album" value="{$lang_modifyalb_php['update']}">{$icon_array['ok']}{$lang_modifyalb_php['update']}</button>
            <input type="hidden" name="form_token" value="{$form_token}" />
            <input type="hidden" name="timestamp" value="{$timestamp}" />
        </td>
    </tr>

EOT;

endtable();
echo '</form>';

if (GALLERY_ADMIN_MODE) {

    // get the album stats
    $result = cpg_db_query("SELECT SUM(hits) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='{$CLEAN['album']}'");
    $nbEnr = mysql_fetch_array($result);
    $hits = $nbEnr[0];

    if (!$hits) { 
        $hits = 0;
    }

    mysql_free_result($result);

    $result = cpg_db_query("SELECT SUM(votes) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='{$CLEAN['album']}' AND votes > 0");
    $nbEnr = mysql_fetch_array($result);
    $votes = $nbEnr[0];
 
    if (!$votes) { 
        $votes = 0; 
    }

    mysql_free_result($result);

    $result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='{$CLEAN['album']}'");
    $nbEnr = mysql_fetch_array($result);
    $files = $nbEnr[0];

    if (!$files) { 
        $files = 0; 
    }

    mysql_free_result($result);
    
    $result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_COMMENTS']} AS c INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.pid = c.pid WHERE aid='{$CLEAN['album']}'");
    $nbEnr = mysql_fetch_array($result);
    $comments = $nbEnr[0];

    if (!$comments) { 
        $comments = 0; 
    }

    mysql_free_result($result);

    echo <<< EOT
    <br />
    <form action="db_input.php" method="post" name="reset_views_form" onsubmit="return defaultagree(this)">
    <input type="hidden" name="event" value="album_reset" />
    <input type="hidden" name="aid" value="{$CLEAN['album']}" />
EOT;

    // set up the translation strings
    $translation_reset_views     = sprintf($lang_modifyalb_php['reset_views'], '&quot;'.$ALBUM_DATA['title'].'&quot;');
    $translation_reset_rating    = sprintf($lang_modifyalb_php['reset_rating'], '&quot;'.$ALBUM_DATA['title'].'&quot;');
    $translation_delete_comments = sprintf($lang_modifyalb_php['delete_comments'], '&quot;'.$ALBUM_DATA['title'].'&quot;');
    $translation_delete_files    = sprintf($lang_modifyalb_php['delete_files'], '<span style="color:red;font-weight:bold">', '</span>', '&quot;'.$ALBUM_DATA['title'].'&quot;');

    starttable('100%', cpg_fetch_icon('modifyalb', 1) . $lang_common['album_properties'] . ' - ' . $lang_modifyalb_php['reset_album'], 2);
    
    echo <<< EOT
    <tr>
            <td align="left" class="tableb">
                {$icon_array['views']} <strong>$hits</strong> {$lang_modifyalb_php['views']}
            </td>
            <td align="left" class="tableb">
                <input type="checkbox" name="reset_views" id="reset_views" value="1" class="checkbox" />
                <label for="reset_views" class="clickable_option">$translation_reset_views</label>
            </td>
    </tr>
    <tr>
            <td align="left" class="tableb tableb_alternate">
                {$icon_array['rate']} <strong>$votes</strong> {$lang_modifyalb_php['votes']}
            </td>
            <td align="left" class="tableb tableb_alternate">
                <input type="checkbox" name="reset_rating" id="reset_rating" value="1" class="checkbox" />
                <label for="reset_rating" class="clickable_option">$translation_reset_rating</label>
            </td>
    </tr>
    <tr>
            <td align="left" class="tableb">
                {$icon_array['comment']} <strong>$comments</strong> {$lang_modifyalb_php['comments']}
            </td>
            <td align="left" class="tableb">
                <input type="checkbox" name="delete_comments" id="delete_comments" value="1" class="checkbox" />
                <label for="delete_comments" class="clickable_option">$translation_delete_comments</label>
            </td>
    </tr>
    <tr>
            <td align="left" class="tableb tableb_alternate">
                {$icon_array['file']} <strong>$files</strong> {$lang_modifyalb_php['files']}
            </td>
            <td align="left" class="tableb tableb_alternate">
                <input type="checkbox" name="delete_files" id="delete_files" value="1" class="checkbox" />
                <label for="delete_files" class="clickable_option">$translation_delete_files</label>
            </td>
    </tr>
    <tr>
            <td class="tablef" colspan="2" align="center" valign="bottom">
                <button type="submit" class="button cursor_stop" name="reset_submit" value="{$lang_modifyalb_php['submit_reset']}" disabled="disabled" style="cursor:url({$icon_array['stop']}),text;">{$icon_array['ok']}{$lang_modifyalb_php['submit_reset']}</button>
                <input name="agreecheck" id="agreecheck" type="checkbox" onclick="agreesubmit(this)" /><label for="agreecheck" class="clickable_option">{$lang_modifyalb_php['reset_views_confirm']}</label>
            </td>
    </tr>

EOT;
    endtable();
    echo <<< EOT
        <input type="hidden" name="form_token" value="{$form_token}" />
        <input type="hidden" name="timestamp" value="{$timestamp}" />
    </form>

EOT;
}
pagefooter();

?>