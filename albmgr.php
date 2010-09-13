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

// TODO: title tags contain hardcoded English instead of lang vars.

define('IN_COPPERMINE', true);
define('ALBMGR_PHP', true);
require('include/init.inc.php');

set_js_var('lang_edit', $lang_common['edit']);
js_include('js/jquery.sort.js');
js_include('js/albmgr.js');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$icon_array = array();
$icon_array['ok']         = cpg_fetch_icon('ok', 1);
$icon_array['cancel']     = cpg_fetch_icon('cancel', 1);
$icon_array['up']         = cpg_fetch_icon('up', 0);
$icon_array['upup']       = cpg_fetch_icon('upup', 0);
$icon_array['down']       = cpg_fetch_icon('down', 0);
$icon_array['downdown']   = cpg_fetch_icon('downdown', 0);
$icon_array['new']        = cpg_fetch_icon('add', 1);
$icon_array['delete']     = cpg_fetch_icon('delete', 0);
$icon_array['edit']       = cpg_fetch_icon('edit', 1);
$icon_array['modifyalb']  = cpg_fetch_icon('modifyalb', 1);
$icon_array['edit_files'] = cpg_fetch_icon('edit', 1);
$icon_array['thumbnail']  = cpg_fetch_icon('thumbnails', 1);
$icon_array['blank']      = cpg_fetch_icon('blank', 1);


/**
 * alb_get_subcat_data()
 *
 * @param integer $parent
 * @param string $ident
 **/
function alb_get_subcat_data($parent, $ident = '')
{
    global $CONFIG, $CAT_LIST, $USER_DATA;

    // select cats where the users can change the albums
    foreach ($USER_DATA['groups'] as $group) {
        $groups .= "group_id = '$group' OR ";
    }
    $groups .= "0";

    $result = cpg_db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent' AND cid != 1 ORDER BY pos");

    if (mysql_num_rows($result) > 0) {
        $rowset = cpg_db_fetch_rowset($result);
        foreach ($rowset as $subcat) {
            if (!GALLERY_ADMIN_MODE) {
                $check_group = cpg_db_query("SELECT group_id FROM {$CONFIG['TABLE_CATMAP']} WHERE ($groups) AND cid = ".$subcat['cid']);
                $check_group_rowset = cpg_db_fetch_rowset($check_group);
                if ($check_group_rowset) {
                    $CAT_LIST[] = array($subcat['cid'], $ident . $subcat['name']);
                }
            } else {
                $CAT_LIST[] = array($subcat['cid'], $ident . $subcat['name']);
            }
            alb_get_subcat_data($subcat['cid'], $ident . '&nbsp;&nbsp;&nbsp;');
        }
    }
}


list($timestamp, $form_token) = getFormToken(); 

// Set the message variables for the javascript file
// confirm album modifications
set_js_var('confirm_modifs', $lang_albmgr_php['confirm_modifs']);  
// confirm album delete
set_js_var("confirm_delete", $lang_albmgr_php['confirm_delete1'] . "\n" . $lang_albmgr_php['confirm_delete2']);
// alert when try to delete album without an album selected
set_js_var('dontDelete', $lang_albmgr_php['select_first']);
// confirm category change when there are unsaved changes
set_js_var('category_change', $lang_albmgr_php['category_change']);
// confirm page change when there are unsaved changes
set_js_var('page_change', $lang_albmgr_php['page_change']);
// form token & timestamp
set_js_var('form_token', $form_token);
set_js_var('timestamp', $timestamp);

// get the category value
if ($superCage->get->keyExists('cat')) {
    $cat = $superCage->get->getInt('cat');
} else {
    $cat = 0;
}
if ($cat == 1) {
    $cat = 0;
}
if (!GALLERY_ADMIN_MODE && USER_ADMIN_MODE) {
    if ($cat == 0) {
        if (USER_CAN_CREATE_PRIVATE_ALBUMS) {
            $cat = USER_ID + FIRST_USER_CAT;
        } else {
            // user is only allowed to create public albums - get first category the user is allowed to create albums in
            $result = cpg_db_query("SELECT cm.cid FROM {$CONFIG['TABLE_CATMAP']} AS cm INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS c ON cm.cid = c.cid WHERE cm.group_id in (" .  implode(",", $USER_DATA['groups']). ") ORDER BY pos LIMIT 1");
            $cat = mysql_result($result, 0);
            mysql_free_result($result);
        }
    }
    // only list the albums owned by the user
    $user_id = USER_ID;
}
// set the cat value
set_js_var('category', $cat);

pageheader($lang_albmgr_php['title']);
    echo <<< EOT
        <form name="album_menu" id="cpg_form_album" method="post" action="delete.php?what=albmgr">
            <input type="hidden" name="form_token" value="{$form_token}" />
            <input type="hidden" name="timestamp" value="{$timestamp}" />

EOT;

starttable('100%', cpg_fetch_icon('alb_mgr', 2).$lang_albmgr_php['title'].'&nbsp;'.cpg_display_help('f=albums.htm&amp;as=albmgr&amp;ae=albmgr_end&amp;top=1', '600', '400'), 1, '');
    echo <<< EOT
        <tr class="noscript">
            <td class="tableh2">
                <noscript>
                    {$lang_common['javascript_needed']}
                </noscript>
            </td>
        </tr>
    <tr>
        <td>
EOT;
    
if (GALLERY_ADMIN_MODE) {
    $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat ORDER BY pos ASC");
} elseif (USER_ADMIN_MODE) {
    // $cat and $user_id set above
    $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat AND owner = $user_id ORDER BY pos ASC");
} else {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

$rowset = cpg_db_fetch_rowset($result);
$i = 100;
$sort_order = '';

if (count($rowset) > 0) {
    foreach ($rowset as $album) {
        $sort_order .= $album['aid'] . '@' . ($i++) . ',';
    }
}

if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {
    $CAT_LIST = array();
    if (USER_CAN_CREATE_PRIVATE_ALBUMS) {
        $CAT_LIST[] = array(FIRST_USER_CAT + USER_ID, $lang_albmgr_php['my_gallery']);
    }
    //only add 'no category' when user is admin
    if (GALLERY_ADMIN_MODE) {
        $CAT_LIST[] = array(0, $lang_albmgr_php['no_category']);
    }
    alb_get_subcat_data(0, '');

    echo <<< EOT
            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td class="tableh2">
                        <strong>{$lang_albmgr_php['select_category']}</strong>
                        &nbsp;
                        <select name="cat" class="listbox">

EOT;
    foreach ($CAT_LIST as $category) {
        echo '          <option value="' . $category[0] . '"' . ($cat == $category[0] ? ' selected="selected"': '') . ">" . $category[1] . '</option>' . $LINEBREAK;
    }
    echo <<< EOT
                        </select>
                        <input type="hidden" id="sort_order" name="sort_order" value="{$sort_order}" />
                        <input type="hidden" id="album_order" name="album_order" value="" />
                        <input type="hidden" name="category" value="{$cat}" />
                    </td>
                </tr>
            </table>

EOT;
}

    echo <<< EOT
        </td>
    </tr>
    <tr>
        <td class="tableb"> 
            <div id="sort">
EOT;

if (count($rowset) > 0) { 

    echo '              <table id="album_sort" cellspacing="0" cellpadding="0" border="0">';

    foreach ($rowset as $album) {
        $title = stripslashes($album['title']);
        echo <<< EOT
                <tr id="sort-{$album['aid']}">
                    <td class="dragHandle"></td>
                    <td class="album_text" width="96%"><span class="albumName">{$title}</span><span class="editAlbum">{$icon_array['edit']}{$lang_common['edit']}</span></td>
                </tr>
EOT;
    }

    echo '          </table>';
}

    echo <<< EOT
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <table class="tableb album_operate" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td id="control">
      
EOT;
// Only show move-buttons when admin or in user's private category.
// Sorting is also prevented in delete.php when user doesn't have the rights.
if (GALLERY_ADMIN_MODE || ($cat == USER_ID + FIRST_USER_CAT)) {
    
    if (defined('THEME_HAS_PROGRESS_GRAPHICS')) {
        $prefix = $THEME_DIR;
    } else {
        $prefix = '';
    }   
    
    echo <<< EOT
                        <button type="button" id="upup_click" name="upup_click" class="button" value="{$lang_common['move_top']}" disabled="disabled" title="{$lang_common['move_top']}">{$icon_array['upup']}</button>
                        <button type="button" id="up_click" name="up_click" class="button" value="{$lang_common['move_up']}" disabled="disabled" title="{$lang_common['move_up']}">{$icon_array['up']}</button>
                        <button type="button" id="down_click" name="down_click" class="button" value="{$lang_common['move_down']}" disabled="disabled" title="{$lang_common['move_down']}">{$icon_array['down']}</button>
                        <button type="button" id="downdown_click" name="downdown_click" class="button" value="{$lang_common['move_bottom']}" disabled="disabled" title="{$lang_common['move_bottom']}">{$icon_array['downdown']}</button>
EOT;

} 
    //we still need to show buttons to add/edit albums
    echo <<< EOT
                        <button type="button" id="delete_album" name="delete_album" class="button" value="{$lang_albmgr_php['delete_album']}" disabled="disabled" title="{$lang_albmgr_php['delete_album']}">{$icon_array['delete']}</button>
                        &nbsp;&nbsp;&nbsp;
                        <button type="button" id="modify_album" name="modify_album" class="button" value="{$lang_common['album_properties']}" disabled="disabled">{$icon_array['modifyalb']}{$lang_common['album_properties']}</button>
                        <button type="button" id="editfiles_album" name="editfiles_album" class="button" value="{$lang_common['edit_files']}" disabled="disabled">{$icon_array['edit_files']}{$lang_common['edit_files']}</button>
                        <button type="button" id="thumbnail_album" name="thumbnail_album" class="button" value="{$lang_common['thumbnail_view']}" disabled="disabled">{$icon_array['thumbnail']}{$lang_common['thumbnail_view']}</button>
                        &nbsp;&nbsp;&nbsp;
                        <button type="button" id="add_new_album" name="add_new_album" class="button" value="{$lang_albmgr_php['new_album']}">{$icon_array['new']}{$lang_albmgr_php['new_album']}</button>
                        <img id="loading" class="icon" src="{$prefix}images/loader.gif" style="margin-left: 10px; display: none;" alt="" />
                        <input type="text" id="add-name" name="add-name" size="27" maxlength="80" class="textinput" value="" onkeypress="return Sort.disableEnterKey(event)" style="display: none;" />
                        <button type="submit" id="addEvent" class="button" name="addEvent" value="{$lang_common['ok']}" style="display: none;">{$icon_array['ok']}{$lang_common['ok']}</button>
                        <button type="button" id="cancelEvent" name="cancelEvent" class="button add_cancel close" value="{$lang_albmgr_php['cancel']}" style="display: none;">{$icon_array['cancel']}{$lang_albmgr_php['cancel']}</button>
                        <input type="text" id="edit-name" name="edit-name" size="27" maxlength="80" class="textinput" value="" onkeypress="return Sort.disableEnterKey(event)" style="display: none;" />
                        <button type="submit" id="updateEvent" class="button" name="updateEvent" value="{$lang_common['ok']}" style="display: none;">{$icon_array['ok']}{$lang_common['ok']}</button>
                        <button type="button" id="updateCancel" name="updateCancel" class="button album_cancel close" value="{$lang_albmgr_php['cancel']}" style="display: none;">{$icon_array['cancel']}{$lang_albmgr_php['cancel']}</button>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td class="tableb">
            <button type="submit" class="button" name="apply" id="apply" value="{$lang_common['apply_changes']}" style="display:none;">{$icon_array['ok']}{$lang_common['apply_changes']}</button>
            <div id="submit_reminder" class="cpg_message_warning" style="display: none;">
                {$lang_albmgr_php['submit_reminder']}
            </div>
        </td>
    </tr>

EOT;
    
endtable();
echo '</form>';
pagefooter();

?>