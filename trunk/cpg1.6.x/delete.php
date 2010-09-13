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
define('DELETE_PHP', true);
define('ALBMGR_PHP', true);

require('include/init.inc.php');

/**
 * Local functions definition
 */

$header_printed = false;
$need_caption = false;
$icon_array['ok'] = cpg_fetch_icon('ok', 1);

function output_table_header()
{
    global $header_printed, $need_caption, $lang_delete_php;

    $header_printed = true;
    $need_caption = true;

    echo <<<EOT
<tr>
    <td class="tableh2"><strong>{$lang_delete_php['npic']}</strong></td>
    <td class="tableh2" align="center"><strong>{$lang_delete_php['fs_pic']}</strong></td>
    <td class="tableh2" align="center"><strong>{$lang_delete_php['ns_pic']}</strong></td>
    <td class="tableh2" align="center"><strong>{$lang_delete_php['orig_pic']}</strong></td>
    <td class="tableh2" align="center"><strong>{$lang_delete_php['thumb_pic']}</strong></td>
    <td class="tableh2" align="center"><strong>{$lang_delete_php['comment']}</strong></td>
    <td class="tableh2" align="center"><strong>{$lang_delete_php['im_in_alb']}</strong></td>
</tr>
EOT;
}

function delete_picture($pid, $tablecellstyle = 'tableb')
{
    global $CONFIG, $header_printed, $lang_errors, $lang_delete_php, $LINEBREAK;

    if (!$header_printed) {
        output_table_header();
    }
    
    $green = cpg_fetch_icon('ok', 0, $lang_delete_php['del_success']);
    $red   = cpg_fetch_icon('stop', 0, $lang_delete_php['err_del']);

    // We will be selecting pid in the query as we need it in $pic array for the plugin filter
    if (GALLERY_ADMIN_MODE) {

        $query = "SELECT pid, aid, filepath, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid'";
        $result = cpg_db_query($query);

        if (!mysql_num_rows($result)) {
            cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }

        $pic = mysql_fetch_assoc($result);

    } else {
    
        $query = "SELECT pid, p.aid, category, filepath, filename, owner_id FROM {$CONFIG['TABLE_PICTURES']} AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = p.aid WHERE pid='$pid'";
        $result = cpg_db_query($query);

        if (!mysql_num_rows($result)) {
            cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }
        
        $pic = mysql_fetch_assoc($result);
        
        if (!($pic['category'] == FIRST_USER_CAT + USER_ID || ($CONFIG['users_can_edit_pics'] && $pic['owner_id'] == USER_ID)) || !USER_ID) {
            cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
        }
    }

    mysql_free_result($result);
    
    $aid = $pic['aid'];
    $dir = $CONFIG['fullpath'] . $pic['filepath'];
    $file = $pic['filename'];

    if (!is_writable($dir)) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_errors['directory_ro'], htmlspecialchars($dir)), __FILE__, __LINE__);
    }
    
    // Plugin filter to be called before deleting a file
    CPGPluginAPI::filter('before_delete_file', $pic);
    
    echo '<tr>';
    echo "<td class=\"".$tablecellstyle."\">" . htmlspecialchars($file) . "</td>";

    $files = array($dir . $file, $dir . $CONFIG['normal_pfx'] . $file, $dir . $CONFIG['orig_pfx'] . $file, $dir . $CONFIG['thumb_pfx'] . $file);

    // Check for custom thumbnails for non-images
    if (!is_image($file)) {
        $mime_content = cpg_get_type($file);
        $file_base_name = str_replace('.' . $mime_content['extension'], '', basename($file));

        foreach (array('.gif','.png','.jpg') as $thumb_extension) {
            if (file_exists($dir . $CONFIG['thumb_pfx'] . $file_base_name . $thumb_extension)) {
                // Thumbnail found, check if it's the only file using that thumbnail
                $count = mysql_result(cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE filepath = '{$pic['filepath']}' AND filename LIKE '{$file_base_name}.%'"), 0);
                if ($count == 1) {
                    unset($files[count($files)-1]);
                    $files[] = $dir . $CONFIG['thumb_pfx'] . $file_base_name . $thumb_extension;
                    break;
                }
            }
        }
    }

    foreach ($files as $currFile) {
    
        echo "<td class=\"".$tablecellstyle."\" align=\"center\">";
        
        if (is_file($currFile)) {
            if (@unlink($currFile)) {
                echo $green;
            } else {
                echo $red;
            }
        } else {
            echo "&nbsp;";
        }
        
        echo "</td>";
    }

    $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'";
    cpg_db_query($query);

    echo "<td class=\"".$tablecellstyle."\" align=\"center\">";

    if (mysql_affected_rows($CONFIG['LINK_ID']) > 0) {
        echo $green;
    } else {
        echo "&nbsp;";
    }
    
    echo "</td>";
            
    $query = "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE pid = $pid";
    cpg_db_query($query);

    $query = "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1";
    cpg_db_query($query);
    
    echo "<td class=\"".$tablecellstyle."\" align=\"center\">";
    
    if (mysql_affected_rows($CONFIG['LINK_ID']) > 0) {
        echo $green;
    } else {
        echo $red;
    }
    
    echo '</td>';
    echo '</tr>' . $LINEBREAK;
    
    // Plugin filter to be called after a file is deleted
    CPGPluginAPI::filter('after_delete_file', $pic);
    
    return $aid;
}

function delete_album($aid)
{
    global $CONFIG, $lang_errors, $lang_delete_php, $LINEBREAK;

    $return = '';

    $query = "SELECT title, category, owner FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid ='$aid'";
    $result = cpg_db_query($query);

    if (!mysql_num_rows($result)) {
        cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }

    $album_data = mysql_fetch_assoc($result);

    mysql_free_result($result);
    
    if (!GALLERY_ADMIN_MODE) {
        if ($album_data['category'] != FIRST_USER_CAT + USER_ID && $album_data['owner'] != USER_ID) {
            cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
        }
    }

    $query = "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$aid'";
    $result = cpg_db_query($query);

    // Delete all files
    $loopCounter = 0;

    while ($pic = mysql_fetch_assoc($result)) {
    
        if ($loopCounter / 2 == floor($loopCounter / 2)) {
            $tablecellstyle = 'tableb';
        } else {
            $tablecellstyle = 'tableb tableb_alternate';
        }
        
        ob_start();
        delete_picture($pic['pid'], $tablecellstyle);
        $return .= ob_get_contents();
        $loopCounter++;
        ob_end_clean();
    }
    
    mysql_free_result($result);
    
    // Delete album
    $query = "DELETE FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$aid'";
    cpg_db_query($query);
    
    if (mysql_affected_rows($CONFIG['LINK_ID']) > 0) {
        $return .= "<tr><td colspan=\"6\" class=\"tableb\">" . sprintf($lang_delete_php['alb_del_success'], $album_data['title']) . '</td></tr>' . $LINEBREAK;
    }
    
    return $return;
}

function delete_user($key) {

    global $CONFIG, $lang_delete_php;
    
    $superCage = Inspekt::makeSuperCage();
    
    $result = cpg_db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'");
    
    print '<tr>';
    
    if (!mysql_num_rows($result)) {
        print '<td class="tableb">'.$lang_delete_php['err_unknown_user'].'</td>';
    } else {
    
        $user_data = mysql_fetch_assoc($result);
        
        print '<td class="tableb">';
        // First delete the albums
        $result2 = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + $key) . "'");
        $user_alb_counter = 0;
        
        while ($album = mysql_fetch_assoc($result2)) {
            starttable('100%');
            print delete_album($album['aid']);
            endtable();
            $user_alb_counter++;
        } // while
        
        mysql_free_result($result2);
        
        starttable('100%');
        
        print '<tr>';
        
        // Then anonymize comments posted by the user
        $comment_result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '$key'");
        $comment_counter = mysql_fetch_row($comment_result);
        mysql_free_result($comment_result);
    
        print '<td class="tableb" width="25%">';
    
        if ($superCage->get->keyExists('delete_comments')) {
            $delete_comments_choice = $superCage->get->getAlpha('delete_comments');
        } elseif ($superCage->post->keyExists('delete_comments')) {
            $delete_comments_choice = $superCage->post->getAlpha('delete_comments');
        }
    
        if ($delete_comments_choice == 'yes') {
        
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '$key'");
    
            if ($comment_counter[0] > 0) {
                print cpg_fetch_icon('ok', 0).' ';
            }
    
            printf($lang_delete_php['deleted_comments'], $comment_counter[0]);
    
        } else {
    
            cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET author_id = 0, msg_author = '' WHERE author_id = '$key'");
    
            if ($comment_counter[0] > 0) {
                print cpg_fetch_icon('ok', 0).' ';
            }
    
            printf($lang_delete_php['anonymized_comments'], $comment_counter[0]);
        }
    
        print '</td>';
    
        // Do the same for pictures uploaded in public albums
        $publ_upload_result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '$key'");
        $publ_upload_counter = mysql_fetch_row($publ_upload_result);
        mysql_free_result($publ_upload_result);
    
        print '<td class="tableb" width="25%">';
    
        if ($superCage->get->keyExists('delete_files')) {
            $delete_files_choice = $superCage->get->getAlpha('delete_files');
        } elseif ($superCage->post->keyExists('delete_files')) {
            $delete_files_choice = $superCage->post->getAlpha('delete_files');
        }
    
        if ($delete_files_choice == 'yes') {
    
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '$key'");
    
            if ($publ_upload_counter[0] > 0) {
                print cpg_fetch_icon('ok', 0).' ';
            }
    
            printf($lang_delete_php['deleted_uploads'], $publ_upload_counter[0]);
    
        } else {
    
            cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_id = 0 WHERE owner_id = '$key'");
    
            if ($publ_upload_counter[0] > 0) {
                print cpg_fetch_icon('ok', 0).' ';
            }
    
            printf($lang_delete_php['anonymized_uploads'], $publ_upload_counter[0]);
        }
        
        print '</td>';
        
        // Finally delete the user
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");
    
        // Clear any bans
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE user_id = '$key'");
    
        // Clear any favourites
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_FAVPICS']} WHERE user_id = '$key'");
        
        print '<td class="tableb" width="50%">';
        print '<strong>';
        print cpg_fetch_icon('ok', 0).' ';
        printf($lang_delete_php['user_deleted'], '&laquo;'.$user_data['user_name'].'&raquo;');
        print '</strong>';
        print '</td>';
        print '</tr>';
        endtable();
        print '</td>';
    }
    mysql_free_result($result);
    print '</tr>';
}

/**
 * Album manager functions
 */

function parse_select_option($value)
{
    return preg_split("/@/", $value, -1, PREG_SPLIT_NO_EMPTY);
}

function parse_orig_sort_order($value)
{
    if (!preg_match("/(\d+)@(\d+)/", $value, $matches)) {
        return false;
    }
    
    return array(
        'aid' => (int) $matches[1],
        'pos' => (int) $matches[2],
    );
}

function parse_list($value)
{
    return preg_split("/,/", $value, -1, PREG_SPLIT_NO_EMPTY);
}

/**************************************************************************
* Picture manager functions
**************************************************************************/

function parse_pic_select_option($value)
{
    global $HTML_SUBST;

    if (!preg_match("/.+?no=(\d+),picture_nm='(.+?)',picture_sort=(\d+),action=(\d)/", $value, $matches)) {
        return false;
    }

    /**
    * TODO: Picture name - Ideal case for using KSES. For now doing complete strip_tags
    */
        
    return array(
        'picture_no'   => (int) $matches[1],
        'picture_nm'   => strip_tags($matches[2]),
        'picture_sort' => (int) $matches[3],
        'action'       => (int) $matches[4],
    );
}

function parse_pic_orig_sort_order($value)
{
    if (!preg_match("/(\d+)@(\d+)/", $value, $matches)) {
        return false;
    }

    return array(
        'pid' => (int) $matches[1],
        'pos' => (int) $matches[2],
    );
}

function parse_pic_list($value)
{
    return preg_split("/,/", $value, -1, PREG_SPLIT_NO_EMPTY);
}

function jsCheckFormToken(){
    global $lang_common, $lang_errors;
    //Check if the form token is valid
    if(!checkFormToken()){
        $dataArray = array(
            'message' => 'false',
            'title'   => $lang_common['error'],
            'description' => $lang_errors['invalid_form_token']
        );
        
        header("Content-Type: text/plain");
        echo json_encode($dataArray);
        exit;
    }
}

/**
 * Main code starts here
 */

if ($superCage->get->keyExists('what')) {
    $what = $superCage->get->getAlpha('what');
} elseif ($superCage->post->keyExists('what')) {
    $what = $superCage->post->getAlpha('what');
} else {
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

switch ($what) {

case 'albmgr':

    if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
        cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
    }
    
    if (!GALLERY_ADMIN_MODE) {
    
        //restrict to allowed categories of user
        //first get allowed categories
        
        $group_id = $USER_DATA['group_id'];
        $result = cpg_db_query("SELECT DISTINCT cid FROM {$CONFIG['TABLE_CATMAP']} WHERE group_id = $group_id");
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);
        
        //add allowed categories to the restriction
        if (USER_CAN_CREATE_PRIVATE_ALBUMS) {
            $restrict = "AND (category = '" . (FIRST_USER_CAT + USER_ID) . "'";
        } else {
            $restrict = "AND (0";
        }
        
        foreach ($rowset as $key => $value) {
            $restrict .= " OR category = '" . $value['cid'] . "'";
        }
        
        $restrict .= ")";  
              
    } else {
        $restrict = '';
    }

    $returnOutput = ''; // the var that will later be shown as a result of the action performed
    $returnOutput .= '<table border="0" cellspacing="0" cellpadding="0" width="100%">';

    $sort_list_matched = $superCage->post->getMatched('sort_order', '/^[0-9@,]+$/');
    $orig_sort_order = parse_pic_list($sort_list_matched[0]);
    foreach ($orig_sort_order as $album) {
        $alb = parse_pic_orig_sort_order($album);
        $sort_array[$i] = $alb['aid'];
        if (count($alb) == 2) {
            $query = "UPDATE {$CONFIG['TABLE_ALBUMS']} SET pos = '{$alb['pos']}' WHERE aid = '{$alb['pid']}' $restrict LIMIT 1";
            cpg_db_query($query);
        } else {
            cpg_die(CRITICAL_ERROR, sprintf($lang_delete_php['err_invalid_data'], $sort_list_matched[0]), __FILE__, __LINE__);
        }
    }

    //prevent sorting of the albums if not admin or in own album
    $sorted_list = $superCage->post->getMatched('sort_order', '/^[0-9@,]+$/');

    //getting the category to redirect to album manager 
    $category = $superCage->get->getInt('cat');
    
    //get the action
    $op = $superCage->get->getAlpha('op');
      
    //get the position
    $position = $superCage->get->getInt('position');  
    
    //get the album name
    $get_album_name = trim($superCage->get->getEscaped('name'));
    
    //add the new album name to database
    if ($op == 'add') {
        jsCheckFormToken();
        
        $user_id = USER_ID;
        
        if (!empty($get_album_name)) {
            //add the album to database
            $query = "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos, description, owner) VALUES ('$category', '$get_album_name', 'NO', '{$position}', '', '$user_id')";
            cpg_db_query($query);
    
            //get the aid of added the albums
            $getAid = mysql_insert_id($CONFIG['LINK_ID']);
    
            $dataArray = array(
                'message' => 'true',
                'newAid'  => $getAid,
            );
        } else {
            $dataArray = array(
                'message' => 'false',
                'title'  => $lang_errors['error'],
                'description' => $lang_albmgr_php['alb_need_name']
            );
        }
        
        header("Content-Type: text/plain");
        echo json_encode($dataArray);
    }
    
    //get the updated album name
    $get_updated_album_name = $superCage->get->getEscaped('updatedname');
    
    //get the aid which user edited
    $aid_updated = $superCage->get->getInt('aid');
    
    //update album name when user save changes
    if ($op == 'update') {
        jsCheckFormToken();
        
        if (!empty($get_updated_album_name)) {
            $query = "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title = '{$get_updated_album_name}' WHERE aid = '{$aid_updated}' $restrict LIMIT 1";
            cpg_db_query($query);
            
            $dataArray = array(
                'message' => 'true',
            );
        } else {
            $dataArray = array(
                'message' => 'false',
                'title'  => $lang_errors['error'],
                'description' => $lang_albmgr_php['alb_need_name']
            );
        }
        
        header("Content-Type: text/plain");
        echo json_encode($dataArray);
    }   
    
    //get the aid to going to delete album
    $deleted_id = $superCage->get->getInt('deleteAid');
    
    //delete the album which user click
    if ($op == 'delete') {
        //Check if the form token is valid
        if(!checkFormToken()){
            $returnOutput = '<div class="cpg_message_validation"><h2>' 
                            . $lang_common['error'] . '</h2>' . $lang_errors['invalid_form_token'] . '</div>';
        }else{
        
            //delete commnets and photos
            $returnOutput .= delete_album($deleted_id);
            
            $result = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '{$category}' ORDER BY pos ASC");
            $rowset = cpg_db_fetch_rowset($result); 
    
            $i = 100;
            
            foreach ($rowset as $key => $set_value) {
                $query = "UPDATE {$CONFIG['TABLE_ALBUMS']} SET pos = '{$i}' WHERE aid = '{$set_value['aid']}' $restrict LIMIT 1";
                cpg_db_query($query);
                $i++;
            }
            
            $returnOutput .= '</table>';
        }
        
        //redirect to the album manager
        cpgRedirectPage('albmgr.php?cat='.$category, $lang_common['information'], $returnOutput); // redirect the user
    }

    // save sorted list here
    if ($superCage->post->keyExists('category')) {
        //get the category value
        $category = $superCage->post->getInt('category');

        $result = cpg_db_query("SELECT aid, pos, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '{$category}' ORDER BY pos ASC");
        $rowset = cpg_db_fetch_rowset($result);  

        if ($superCage->post->keyExists('album_order')) {
            //Check if the form token is valid
            if(!checkFormToken()){
                cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
            }
            // Used to get the aid, cast to integer for query
            $get_rows = $superCage->post->getEscaped('album_order');

            $action = '';
            $assign_position = '';
            $sucess = '';
            $sort_rows = parse_pic_list($get_rows);

            foreach ($sort_rows as $key => $option_value) {
                $option_value = (int)$option_value;
                if ($option_value == $rowset[$key]['aid']) {
                    continue;
                }
                $returnOutput .= "<tr><td colspan=\"6\" class=\"tableb\">"
                        . $lang_delete_php['updating_album'] . $option_value . ' ' . $lang_thumb_view['position'] . ' ' . $rowset[$key]['pos']
                        . '</td></tr>' . $LINEBREAK;
                $query = "UPDATE {$CONFIG['TABLE_ALBUMS']} SET pos = '{$rowset[$key]['pos']}' WHERE aid = '{$option_value}' $restrict LIMIT 1";
                cpg_db_query($query);
            }
        } 

        $returnOutput .= '</table>';
        cpgRedirectPage('albmgr.php?cat='.$category, $lang_common['information'], $returnOutput); // redirect the user
    }

    break;

case 'picmgr':

    if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
        cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
    }

    if (!GALLERY_ADMIN_MODE) {
        //$restrict = "AND category = '".(FIRST_USER_CAT + USER_ID)."'";
        $restrict = '';
    } else {
        $restrict = '';
    }
    $returnOutput = '<table border="0" cellspacing="0" cellpadding="0" width="100%">';
  
    $sort_list_matched = $superCage->post->getMatched('sort_order', '/^[0-9@,]+$/');
    $orig_sort_order = parse_pic_list($sort_list_matched[0]);
    foreach ($orig_sort_order as $picture) {
        $pic = parse_pic_orig_sort_order($picture);
        $sort_array[$i] = $pic['aid'];
        if (count($pic) == 2) {
            $query = "UPDATE {$CONFIG['TABLE_PICTURES']} SET position = '{$pic['pos']}' WHERE pid = '{$pic['pid']}' $restrict LIMIT 1";
            cpg_db_query($query);
        } else {
            cpg_die(CRITICAL_ERROR, sprintf($lang_delete_php['err_invalid_data'], $sort_list_matched[0]), __FILE__, __LINE__);
        }
    }

    $album_id = $superCage->post->getInt('album_id');
    $result = cpg_db_query("SELECT aid, pid, filename, title, position FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '$album_id' ORDER BY position ASC, pid");
    $rowset = cpg_db_fetch_rowset($result);
    mysql_free_result($result);

    if ($superCage->post->keyExists('picture_order')) {
        //Check if the form token is valid
        if(!checkFormToken()){
            cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
        }
        //get the sorted order - cast to int below
        $get_rows = $superCage->post->getEscaped('picture_order');
        $sort_rows = parse_pic_list($get_rows);

        $returnOutput .= '<tr><td colspan="6"><ul>';

        $update_count = 0;
        foreach ($sort_rows as $key => $option_value) {
            $option_value = (int)$option_value;
            if ($option_value == $rowset[$key]['pid']) {
                continue;
            }
            //update the new position
            $returnOutput .= '<li>' . sprintf($lang_delete_php['moved_picture_to_position'],$option_value, $rowset[$key]['position']) . '</li>';
            $query = "UPDATE {$CONFIG['TABLE_PICTURES']} SET position = '{$rowset[$key]['position']}' WHERE pid = '{$option_value}' $restrict LIMIT 1";
            cpg_db_query($query);
            $update_count++;
        }
        if ($update_count == 0) {
            $returnOutput .= '<li>' . $lang_albmgr_php['no_change'] . '</li>';
        }
        $returnOutput .= '</ul></td></tr>' . $LINEBREAK;
    } 

    if ($need_caption) {
        ob_start();
        output_caption();
        $returnOutput .= ob_get_contents();
        ob_end_clean();
    }
    
    $returnOutput .= '</table>';
    cpgRedirectPage('picmgr.php?aid='.$album_id, $lang_common['information'], $returnOutput); // redirect the user
  
    break;

case 'comment':
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    $msg_id = $superCage->get->getInt('msg_id');

    $result = cpg_db_query("SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '$msg_id'");

    if (!mysql_num_rows($result)) {
        cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_comment'], __FILE__, __LINE__);
    } else {
        $comment_data = mysql_fetch_assoc($result);
    }

    mysql_free_result($result);
    
    if (GALLERY_ADMIN_MODE) {
        $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '$msg_id'";
    } elseif (USER_ID) {
        $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '$msg_id' AND author_id = " . USER_ID;
    } else {
        $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '$msg_id' AND author_md5_id = '{$USER['ID']}' AND author_id = 0";
    }
    
    $result = cpg_db_query($query);

    $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
    $redirect = "displayimage.php?pid=" . $comment_data['pid'];
    header($header_location . $redirect);

    pageheader($lang_common['information'], "<META http-equiv=\"refresh\" content=\"1;url=$redirect\">");
    msg_box($lang_common['information'], $lang_delete_php['comment_deleted'], $icon_array['ok'] . $lang_common['continue'], $redirect);
    pagefooter();

    break;

case 'picture':
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    $pid = $superCage->get->getInt('id');

    pageheader($lang_delete_php['del_pic']);

    starttable("100%", $lang_delete_php['del_pic'], 7);
    output_table_header();
    $tablecellstyle = 'tableb';
    $aid = delete_picture($pid, $tablecellstyle);
    echo '<tr><td colspan="7" class="tablef" align="center">' . $LINEBREAK;
    echo '<div class="admin_menu"><a href="thumbnails.php?album='.$aid.'">'.$icon_array['ok'] . $lang_common['continue'].'</a></div>' . $LINEBREAK;
    echo '</td></tr>' . $LINEBREAK;
    endtable();

    pagefooter();

    break;

case 'album':
    if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
        cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
    }
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }

    $aid = $superCage->get->getInt('id');

    pageheader($lang_delete_php['del_alb']);
    starttable("100%", $lang_delete_php['del_alb'], 7);

    print delete_album($aid);

    echo '<tr><td colspan="7" class="tablef" align="center">' . $LINEBREAK;
    echo '<span class="admin_menu"><a href="index.php">'.$icon_array['ok'] . $lang_common['continue'].'</a></span>' . $LINEBREAK;
    echo '</td></tr>';
    endtable();

    pagefooter();

    break;

case 'user':

    if (UDB_INTEGRATION != 'coppermine') {
        cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }

    $matches = $superCage->get->getMatched('id', '/^[u0-9,]+$/');
    $user_id = str_replace('u', '', $matches[0]);
    $users_scheduled_for_action = explode(',', $user_id);

    if (GALLERY_ADMIN_MODE) { // admin mode start
    
        if ($user_id == USER_ID) { // make sure that the admin doesn't delete his own account
            cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
        }
        //Check if the form token is valid
        if(!checkFormToken()){
            cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
        }

        if ($superCage->get->keyExists('action') && ($matches = $superCage->get->getMatched('action', '/^[a-z_]+$/'))) {
            $user_action = $matches[0];
        } elseif ($superCage->post->keyExists('action') && ($matches = $superCage->post->getMatched('action', '/^[a-z_]+$/'))) {
            $user_action = $matches[0];
        } else {
            $user_action = '';
        }
        
        switch ($user_action) {

        case 'delete':
        
            pageheader($lang_delete_php['del_user']);
            
            starttable("100%", $lang_delete_php['del_user'], 6);
            
            foreach ($users_scheduled_for_action as $key) {
                delete_user($key);
            }
            
            echo '<tr><td colspan="6" class="tablef" align="center">' . $LINEBREAK;
            echo '<a href="usermgr.php" class="admin_menu">'.$icon_array['ok'] . $lang_common['continue'].'</a>' . $LINEBREAK;
            echo '</td></tr>';
            
            endtable();
            
            pagefooter();
            
            break; // end case "delete"
            
        case 'activate':
        
            pageheader($lang_delete_php['activate_user']);

            starttable("100%", $lang_delete_php['activate_user'], 2);

            print '<tr>' . $LINEBREAK;
            print '<td class="tableh2"><strong>'.$lang_delete_php['username'].'</strong></td>' . $LINEBREAK;
            print '<td class="tableh2"><strong>'.$lang_delete_php['status'].'</strong></td>' . $LINEBREAK;
            print '</tr>' . $LINEBREAK;

            foreach ($users_scheduled_for_action as $key) {
            
                $result = cpg_db_query("SELECT user_name, user_active FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");

                if (!mysql_num_rows($result)) {
                    print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                } else {
                
                    $user_data = mysql_fetch_assoc($result);
                    
                    print '<tr>';
                    print '<td class="tableb"><strong>';
                    print $user_data['user_name'];
                    print '</strong></td>';
                    print '<td class="tableb">';
                    
                    if ($user_data['user_active'] == 'YES') {
                        // user is already active
                        print $lang_delete_php['user_already_active'];
                    } else {
                        // activate this user
                        cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'YES' WHERE user_id = '$key'");
                        print $lang_delete_php['activated'];
                    }
                    
                    print '</strong></td>';
                }
                mysql_free_result($result);
                
            } // foreach --- end
            
            echo '<tr><td colspan="2" class="tablef" align="center">' . $LINEBREAK;
            echo '<a href="usermgr.php" class="admin_menu">'.$icon_array['ok'] . $lang_common['continue'].'</a>' . $LINEBREAK;
            echo '</td></tr>';
            endtable();
            
            pagefooter();
            
            break; // end case "activate"
            
        case 'deactivate':
        
            pageheader($lang_delete_php['deactivate_user']);
            
            starttable("100%", $lang_delete_php['deactivate_user'], 2);
            
            print '<tr>' . $LINEBREAK;
            print '<td class="tableh2"><strong>'.$lang_delete_php['username'].'</strong></td>' . $LINEBREAK;
            print '<td class="tableh2"><strong>'.$lang_delete_php['status'].'</strong></td>' . $LINEBREAK;
            print '</tr>' . $LINEBREAK;

            foreach ($users_scheduled_for_action as $key) {
            
                $result = cpg_db_query("SELECT user_name, user_active FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");

                if (!mysql_num_rows($result)) {
                    print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                } else {

                    $user_data = mysql_fetch_assoc($result);

                    print '<tr>';
                    print '<td class="tableb"><strong>';
                    print $user_data['user_name'];
                    print '</strong></td>';
                    print '<td class="tableb">';
                    
                    if ($user_data['user_active'] == 'NO') {
                        // user is already inactive
                        print $lang_delete_php['user_already_inactive'];
                    } else {
                        // deactivate this user
                        cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'NO' WHERE user_id = '$key'");
                        print $lang_delete_php['deactivated'];
                    }
                    
                    print '</strong></td>';
                }
                
                mysql_free_result($result);
            } // foreach --- end
            
            echo '<tr><td colspan="2" class="tablef" align="center">' . $LINEBREAK;
            echo '<a href="usermgr.php" class="admin_menu">'.$icon_array['ok'] . $lang_common['continue'].'</a>' . $LINEBREAK;
            echo '</td></tr>';
            endtable();
            
            pagefooter();
            
            break; // end case "deactivate"
            
        case 'reset_password':
            pageheader($lang_delete_php['reset_password']);
            
            starttable("100%", $lang_delete_php['reset_password'], 2);
            
            print '<tr>' . $LINEBREAK;
            print '<td class="tableh2"><strong>'.$lang_delete_php['username'].'</strong></td>' . $LINEBREAK;
            print '<td class="tableh2"><strong>'.$lang_delete_php['status'].'</strong></td>' . $LINEBREAK;
            print '</tr>' . $LINEBREAK;

            foreach ($users_scheduled_for_action as $key) {
            
                $result = cpg_db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");

                if (!mysql_num_rows($result)) {
                    print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                } else {

                    $user_data = mysql_fetch_assoc($result);

                    print '<tr>';
                    print '<td class="tableb"><strong>';
                    print $user_data['user_name'];
                    print '</strong></td>';
                    print '<td class="tableb">';
                    
                    // set this user's password
                    $new_password = md5($superCage->get->getEscaped('new_password'));
 
                    cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_password = '$new_password' WHERE user_id = '$key'");

                    printf($lang_delete_php['password_reset'], '&laquo;'.$superCage->get->getEscaped('new_password').'&raquo;');
                    print '</strong></td>';
                }

                mysql_free_result($result);
            } // foreach --- end

            echo '<tr><td colspan="2" class="tablef" align="center">' . $LINEBREAK;
            echo '<a href="usermgr.php" class="admin_menu">'.$icon_array['ok'] . $lang_common['continue'].'</a>' . $LINEBREAK;
            echo '</td></tr>';
            endtable();
            
            pagefooter();
            
            break; // end case "reset_password"
            
        case 'change_group':
        
            pageheader($lang_delete_php['change_group']);
            
            starttable("100%", $lang_delete_php['change_group'], 2);
            
            print '<tr>' . $LINEBREAK;
            print '<td class="tableh2"><strong>'.$lang_delete_php['username'].'</strong></td>' . $LINEBREAK;
            print '<td class="tableh2"><strong>'.$lang_delete_php['status'].'</strong></td>' . $LINEBREAK;
            print '</tr>' . $LINEBREAK;
            
            $result_group = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']}");

            if (!mysql_num_rows($result_group)) {
                cpg_die(CRITICAL_ERROR, $lang_delete_php['err_empty_groups'], __FILE__, __LINE__);
            }

            while ($row = mysql_fetch_assoc($result_group)) {
                $group_label[$row['group_id']] = $row['group_name'];
            } // while

            foreach ($users_scheduled_for_action as $key) {
            
                $result = cpg_db_query("SELECT user_name, user_group FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");

                if (!mysql_num_rows($result)) {
                    print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                } else {

                    $user_data = mysql_fetch_assoc($result);

                    print '<tr>';
                    print '<td class="tableb"><strong>';
                    print $user_data['user_name'];
                    print '</strong></td>';
                    print '<td class="tableb">';
                    
                    // set this user's group
                    $group = $superCage->get->getInt('group');

                    cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '$group' WHERE user_id = '$key'");

                    printf($lang_delete_php['change_group_to_group'], '&laquo;'.$group_label[$user_data['user_group']].'&raquo;', '&laquo;'.$group_label[$group].'&raquo;');
                    print '</strong></td>';
                }

                mysql_free_result($result);
            } // foreach --- end

            echo '<tr><td colspan="2" class="tablef" align="center">' . $LINEBREAK;
            echo '<a href="usermgr.php" class="admin_menu">'.$icon_array['ok'] . $lang_common['continue'].'</a>' . $LINEBREAK;
            echo '</td></tr>';
            endtable();
            
            pagefooter();

            break; // end case "change_group"

        case 'add_group':
        
            pageheader($lang_delete_php['add_group']);
            
            starttable("100%", $lang_delete_php['add_group'], 2);
            
            print '<tr>' . $LINEBREAK;
            print '<td class="tableh2"><strong>'.$lang_delete_php['username'].'</strong></td>' . $LINEBREAK;
            print '<td class="tableh2"><strong>'.$lang_delete_php['status'].'</strong></td>' . $LINEBREAK;
            print '</tr>' . $LINEBREAK;

            $result_group = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']}");

            if (!mysql_num_rows($result_group)) {
                cpg_die(CRITICAL_ERROR, $lang_delete_php['err_empty_groups'], __FILE__, __LINE__);
            }

            while ($row = mysql_fetch_assoc($result_group)) {
                $group_label[$row['group_id']] = $row['group_name'];
            } // while

            foreach ($users_scheduled_for_action as $key) {
            
                $result = cpg_db_query("SELECT user_name, user_group FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");

                if (!mysql_num_rows($result)) {
                    print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                } else {

                    $user_data = mysql_fetch_assoc($result);

                    print '<tr>';
                    print '<td class="tableb"><strong>';
                    print $user_data['user_name'];
                    print '</strong></td>';
                    print '<td class="tableb">';
                    
                    // check group membership of this particular user
                    $sql = "SELECT user_group_list FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'";
                    $result_user = cpg_db_query($sql);

                    if (!mysql_num_rows($result_user)) {
                        print $lang_delete_php['err_unknown_user'];
                        continue;
                    }
                    
                    $user_group_data = mysql_fetch_assoc($result_user);
                    mysql_free_result($result_user);
                    
                    $user_group = explode(',', $user_group_data['user_group_list']);
                    
                    $new_group = $superCage->get->getInt('group');
                    
                    if (!in_array($new_group, $user_group)) {
                        $user_group[] = $new_group;
                    }
                    
                    $group_output = '';
                    $new_group_query = '';
                    
                    foreach ($user_group as $group) {
                        if ($group != '') {
                            $group_output .= '&laquo;'.$group_label[$group].'&raquo;, ';
                            $new_group_query .= $group.',';
                        }
                    }
                    
                    $group_output = trim(trim($group_output), ',');
                    $new_group_query = trim($new_group_query, ',');
                    
                    // set this user's group
                    cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_group_list = '$new_group_query' WHERE user_id = '$key'");

                    printf($lang_delete_php['add_group_to_group'], '&laquo;'.$user_data['user_name'].'&raquo;', '&laquo;'.$group_label[$new_group].'&raquo;', '&laquo;'.$group_label[$user_data['user_group']].'&raquo;', $group_output);
                    print '</strong></td>';
                }
                
                mysql_free_result($result);
            } // foreach --- end
            
            echo '<tr><td colspan="2" class="tablef" align="center">' . $LINEBREAK;
            echo '<a href="usermgr.php" class="admin_menu">'.$icon_array['ok'] . $lang_common['continue'].'</a>' . $LINEBREAK;
            echo '</td></tr>';
            endtable();
            
            pagefooter();
            
            break; // end case "add_group"
            
        default:
            cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
            break;
        }
        
    } else { // admin mode end, user mode start
    
        if ($superCage->get->keyExists('action') && ($matches = $superCage->get->getMatched('action', '/^[a-z_]+$/'))) {
            $user_action = $matches[0];
        } elseif ($superCage->post->keyExists('action') && ($matches = $superCage->post->getMatched('action', '/^[a-z_]+$/'))) {
            $user_action = $matches[0];
        } else {
            $user_action = '';
        }
        
        switch ($user_action) {
        
        case 'delete':
            //Check if the form token is valid
            if(!checkFormToken()){
                cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
            }
            pageheader($lang_delete_php['del_user']);

            starttable("100%", $lang_delete_php['del_user'], 6);

            foreach ($users_scheduled_for_action as $key) {
            
                if ($key != USER_ID) { // a user can only delete his own account
                    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
                }
                
                delete_user($key);
            }
            
            echo '<tr><td colspan="6" class="tablef" align="center">' . $LINEBREAK;
            echo '<a href="index.php"  class="admin_menu">'.$icon_array['ok'] . $lang_common['continue'].'</a>' . $LINEBREAK;
            echo '</td></tr>';
            endtable();
            
            pagefooter();
            
            break; // end case "delete"
            
        default:
            cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
            break;
        }
    } // user mode end

    break;

// Unknown command
default:
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

?>