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
define('PICMGR_PHP', true);

require('include/init.inc.php');

/** sort the piture manager**/
js_include('js/jquery.sort.js');
js_include('js/albmgr.js');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$icon_array = array();
$icon_array['ok']        = cpg_fetch_icon('ok', 0);
$icon_array['up']        = cpg_fetch_icon('up', 1);
$icon_array['down']      = cpg_fetch_icon('down', 1);
$icon_array['upup']      = cpg_fetch_icon('upup', 1);
$icon_array['downdown']  = cpg_fetch_icon('downdown', 1);
$icon_array['thumbnail'] = cpg_fetch_icon('thumbnails', 1);

// set js variable to changes albums
set_js_var('change_album', $lang_picmgr_php['change_album']);
set_js_var('confirm_modifs', $lang_picmgr_php['confirm_modifs']);

if ($CONFIG['default_sort_order'] != 'pa' && $CONFIG['default_sort_order'] != 'pd') {
    $help_picture_manager = <<< EOT
            <ul>
                <li>{$lang_picmgr_php['explanation1']}</li>
                <li>{$lang_picmgr_php['explanation2']}</li>
            </ul>
EOT;
    $help_picture_manager = '&nbsp;'. cpg_display_help('f=empty.html&amp;base=64&amp;h=' . urlencode(base64_encode(serialize($lang_picmgr_php['explanation_header'] . ':&nbsp;'))) . '&amp;t=' . urlencode(base64_encode(serialize($help_picture_manager))), 500, 300);
 } else {
    $help_picture_manager = '';
 }

pageheader($lang_picmgr_php['pic_mgr']);

echo <<< EOT

<form name="picture_menu" id="cpgformPic" method="post" action="delete.php?what=picmgr" >
EOT;

starttable("100%", cpg_fetch_icon('picture_sort', 2) . $lang_picmgr_php['pic_mgr'].$help_picture_manager, 1);

$aid = ($superCage->get->keyExists('aid')) ? $superCage->get->getInt('aid') : 0;

if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {
    $result = cpg_db_query("SELECT aid, pid, filepath, filename, title, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = $aid ORDER BY position ASC, pid");
    $rowset = cpg_db_fetch_rowset($result);
} else {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}
$i=100;
$sort_order = '';

$button_hidden = '';
if (count ($rowset) > 0) {
    foreach ($rowset as $picture){
        $sort_order .= $picture['pid'].'@'.($i++).',';
    }
} else {
    $button_hidden = 'display:none;';
}

echo <<< EOT
        <tr class="noscript">
            <td colspan="2" class="tableh2">
                <noscript>
                    {$lang_common['javascript_needed']}
                </noscript>
            </td>
        </tr>
    <tr>
        <td class="tableh2" valign="top" >
           <input type="hidden" name="album_id" value="{$aid}" />
           <input type="hidden" id="sort_order" name="sort_order" value="{$sort_order}" />
           <input type="hidden" id="picture_order" name="picture_order" value="" />  

EOT;

if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {

    $options = album_selection_options($aid);
    
    echo <<<EOT
            <select name="aid" class="listbox">
                <option value="0">{$lang_common['select_album']}</option>
                $options
            </select>
            <button type="button" id="thumbnail_view1" name="thumbnail_view1" class="button thumbnail_view" style="float:right;{$button_hidden}" value="{$lang_common['thumbnail_view']}">{$icon_array['thumbnail']}{$lang_common['thumbnail_view']}</button>
        </td>
    </tr>
    <tr>
        <td>
    
EOT;
}

/** create a table to sort the picture*/  
echo <<< EOT
            <div id="sort">
                <table id="pic_sort" cellspacing="0" cellpadding="0" border="0" width=100%>

EOT;
$i   =   100;
$lb  =   '';
$j   =   1;
    if (count($rowset) > 0) {
        foreach ($rowset as $picture){
            $get_photo_name = $picture['title'];
            $picname = $CONFIG['fullpath'] . $picture['filepath'] . $picture['filename'];
            $pic_url = urlencode($picture['filename']);
            $pic_fname = basename($picture['filename']);
            $pic_dirname = dirname($picname);
            $thumb_file = dirname($picname) . '/' . $CONFIG['thumb_pfx'] . $pic_fname;
            $img = '';
            if (file_exists($thumb_file)) {
                $thumb_info = cpg_getimagesize($picname);
                $thumb_size = compute_img_size($thumb_info[0], $thumb_info[1], 48);
                $img = '<img src="' . path2url($thumb_file) . '" ' . $thumb_size['geom'] . ' class="thumbnail" border="0" alt="" title="'.$get_photo_name.'" />';
            } elseif (is_image($picname)) {
                $img = '<img src="showthumb.php?picfile=' . $pic_url . '&amp;size=48" class="thumbnail" border="0" alt="" title="'.$get_photo_name.'" />';
            } else {
                $file['filepath'] = $pic_dirname.'/';
                $file['filename'] = $pic_fname;
                $filepathname = get_pic_url($file,'thumb');
                $img = '<img src="'.$filepathname.'" class="thumbnail" width="48" border="0" alt="" title="'.$get_photo_name.'" />';
            }
            $unique_id = uniqid(rand());
            $pic_title = $picture['title'] ? "<strong>{$picture['title']}</strong><br />\n" : '';
            $lb .= <<< EOT
            <tr id="sort-{$picture['pid']}">
                <td class="dragHandle"></td>
                <td valign="middle">
                    $pic_title
                    <pre class="filepath"><a href="javascript:;" onclick="MM_openBrWindow('{$CONFIG['site_url']}{$CONFIG['fullpath']}{$picture['filepath']}{$picture['filename']}', '{$unique_id}', 'scrollbars=yes,toolbar=no,status=no,resizable=yes,width={$picture['pwidth']},height={$picture['pheight']}');">{$CONFIG['fullpath']}{$picture['filepath']}{$picture['filename']}</a></pre>
                </td>
                <td valign="middle" align="right" class="pic_thumbnail">
                    <a href="displayimage.php?pid={$picture['pid']}">{$img}</a>
                </td>
            </tr>
EOT;
            $j++;
        }
    } else if ($aid != 0) {
        $lb = '<tr><td>'.$lang_errors['no_img_to_display'].'</td></tr>';
    }

    echo $lb;

    echo <<< EOT
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td class="tableb">
            <button type="button" id="pic_upup" name="pic_upup" class="button" value="{$lang_common['move_top']}" style="{$button_hidden}" disabled="disabled">{$icon_array['upup']}{$lang_common['move_top']}</button>
            <button type="button" id="pic_up" name="pic_up" class="button" value="{$lang_common['move_up']}" style="{$button_hidden}" disabled="disabled">{$icon_array['up']}{$lang_common['move_up']}</button>
            <button type="button" id="pic_down" name="pic_down" class="button" value="{$lang_common['move_down']}" style="{$button_hidden}" disabled="disabled">{$icon_array['down']}{$lang_common['move_down']}</button>
            <button type="button" id="pic_downdown" name="pic_downdown" class="button" value="{$lang_common['move_bottom']}" style="{$button_hidden}" disabled="disabled">{$icon_array['downdown']}{$lang_common['move_bottom']}</button>
            <button type="button" id="thumbnail_view2" name="thumbnail_view2" class="button thumbnail_view" style="float:right;{$button_hidden}" value="{$lang_common['thumbnail_view']}">{$icon_array['thumbnail']}{$lang_common['thumbnail_view']}</button>
        </td>
    </tr>
    <tr>
        <td class="tableb">
            <button type="submit" class="button" name="apply" id="apply" value="{$lang_common['apply_changes']}" style="display:none;">{$icon_array['ok']}{$lang_common['apply_changes']}</button>
            <div id="submit_reminder" class="cpg_message_warning" style="display: none;">
                {$lang_picmgr_php['submit_reminder']}
            </div>
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
