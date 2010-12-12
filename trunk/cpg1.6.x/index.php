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

/**
* Unless this is true most things wont work - protection against direct execution of inc files
*/
define('IN_COPPERMINE', true);

define('INDEX_PHP', true);
define('RESTRICTED_PRIV', true);

require('include/init.inc.php');

/**
 * Clean up GPC and other Globals here
 */
if ($superCage->get->keyExists('page')) {
    $page = $superCage->get->getInt('page');
}

if ($superCage->get->keyExists('cat')) {
    $cat = $superCage->get->getInt('cat');
}

$tmpFile = ''; // initialize

if ($superCage->get->keyExists('file')) {
    /**
     * There can be only alphanumerals in a plugin's folder name. There mustn't be any dots or other special
     * chars in it.
     * The only exception is the hypen (-) and underscore (_)
     * Examples for folder names: "myplugin" = OK, "my_plugin" = OK, "my plugin" = BAD, "m&uuml;_plugin" = BAD
     * Files the plugin is meant to include can only contain one single dot that separates the actual filename
     * from the php-extension
     * Same restrictions apply as for the folder name (only alphanumerals, hyphen and underscore)
     */

    if ($matched = $superCage->get->getMatched('file', "/^([a-zA-Z0-9_\-]+)(\/{0,1}?)([a-zA-Z0-9_\-]+)$/")) {
        $tmpFile = $matched[0];
    }
}

if ($tmpFile != 'codebase' && $tmpFile != 'configuration') {
    $file = $tmpFile;
} else {
    $file = '';
}

if ($file) {
    $path = './plugins/'.$file.'.php';
    $file = false;

    // Don't include the codebase and credits files
    if (file_exists($path)) {
        // Check if the plugin is installed
        $path_parts = pathinfo($tmpFile);
        foreach($CPG_PLUGINS as $key => $value) {
            if ($value->fullpath == './plugins/'.$path_parts['dirname']) {
                // Include the code from the plugin
                include_once($path);
                $file = true;
                break;
            }
        }
    }
} else {
    $file = false;
}

if (!$file) {

    if (!USER_ID && $CONFIG['allow_unlogged_access'] == 0) {
        // Anonymous access to site is not allowed, so need to redirect to login page
        // First try to set cookie so login page doesn't show 'cookie_warning' even when no problem
        $data = base64_encode(serialize($USER));
        setcookie($CONFIG['cookie_name'].'_data', $data, time()+86400*30, $CONFIG['cookie_path']);
        // Now redirect to login page
        $redirect = 'login.php';
        header("Location: $redirect");
        exit();
    }

    if ($CONFIG['enable_smilies']) {
        include("include/smilies.inc.php");
    }
}


/**
* Local functions definition
*/

/**
 * html_albummenu2()
 *
 * This function draws the links for moderator menu of Albums
 *
 * @param integer $id ID of the album for which the links are being drawn
 * @return string The evaluated template block with links
 **/
function html_albummenu2($id)
{
    global $lang_album_admin_menu;

    /**
     * This template variable can be defined in theme.php of respective theme.
     * This is done here for simplicity.
     */
    $template_album_moderator_menu = <<<EOT
        <div class="buttonlist align_right">
                <ul>
                        <li>
                                <a href="editpics.php?album={ALBUM_ID}"><span class="last">{EDIT_PICS}</span></a>
                        </li>
                </ul>
        </div>
        <div class="clearer"></div>
EOT;


    static $template = '';

    if ($template == '') {
        $params = array(
            '{EDIT_PICS}' => cpg_fetch_icon('edit', 1) . $lang_album_admin_menu['edit_pics'],
            );

        $template = template_eval($template_album_moderator_menu, $params);
    }

    $params = array(
        '{ALBUM_ID}' => $id,
    );

    return template_eval($template, $params);
}


/**
 * html_albummenu()
 *
 * This function draws the links for admin menu of Albums
 *
 * @param integer $id ID of the album for which the links are being drawn
 * @return string The evaluated template block with links
 **/
function html_albummenu($id)
{
    global $template_album_admin_menu, $lang_album_admin_menu;

    static $template = '';

    if ($template == '') {
        list($timestamp, $form_token) = getFormToken();
        $params = array(
            '{CONFIRM_DELETE}' => $lang_album_admin_menu['confirm_delete'],
            '{DELETE}' => cpg_fetch_icon('delete', 1) . $lang_album_admin_menu['delete'],
            '{MODIFY}' => cpg_fetch_icon('modifyalb', 1) . $lang_album_admin_menu['modify'],
            '{EDIT_PICS}' => cpg_fetch_icon('edit', 1) . $lang_album_admin_menu['edit_pics'],
            '{FORM_TOKEN}' => $form_token,
            '{TIMESTAMP}' => $timestamp
        );

        $template = template_eval($template_album_admin_menu, $params);
    }

    $params = array(
        '{ALBUM_ID}' => $id,
    );

    return template_eval($template, $params);
}

/**
 * html_albummenu3()
 *
 * This function draws the links for admin menu of Albums when pics can't be edited
 *
 * @param integer $id ID of the album for which the links are being drawn
 * @return string The evaluated template block with links
 **/
function html_albummenu3($id)
{
    global $lang_album_admin_menu;
  
    /**
     * This template variable can be defined in theme.php of respective theme.
     * This is done here for simplicity.
     */
    $template_album_admin_no_pic_edit_menu = <<<EOT
        <div class="buttonlist align_right">
                <ul>
                        <li>
                                <a href="delete.php?id={ALBUM_ID}&amp;what=album&amp;form_token={FORM_TOKEN}&amp;timestamp={TIMESTAMP}" onclick="return confirm('{CONFIRM_DELETE}');"><span>{DELETE}</span></a>
                        </li>
                        <li>
                                <a href="modifyalb.php?album={ALBUM_ID}"><span>{MODIFY}</span></a>
                        </li>
                </ul>
        </div>
        <div class="clearer"></div>
EOT;
  
    static $template = '';

    if ($template == '') {
        list($timestamp, $form_token) = getFormToken();
        $params = array(
            '{CONFIRM_DELETE}' => $lang_album_admin_menu['confirm_delete'],
            '{DELETE}' => cpg_fetch_icon('delete', 1) . $lang_album_admin_menu['delete'],
            '{MODIFY}' => cpg_fetch_icon('modifyalb', 1) . $lang_album_admin_menu['modify'],
            '{FORM_TOKEN}' => $form_token,
            '{TIMESTAMP}' => $timestamp
        );

        $template = template_eval($template_album_admin_no_pic_edit_menu, $params);
    }

    $params = array(
        '{ALBUM_ID}' => $id,
    );

    return template_eval($template, $params);
}

/**
 * get_subcat_data()
 *
 * Get the data about the sub categories which are going to be shown on the index page, this function is called recursively
 *
 * @param integer $parent Parent Category
 * @param array $cat_data
 * @return void
 **/
function get_subcat_data(&$cat_data)
{
    global $CONFIG, $HIDE_USER_CAT, $cpg_show_private_album;
    global $lft, $rgt, $RESTRICTEDWHERE, $CURRENT_CAT_DEPTH, $FORBIDDEN_SET_DATA, $PAGE;

    $indent = "</td><td><img src=\"images/spacer.gif\" width=\"20\" height=\"1\" border=\"0\" alt=\"\" /></td><td>";

    // TODO: support private album icon data
    // just ignore the restriction and let the display code handle things

    // there can be no subcategories in user galleries, so don't even bother
    if ($CURRENT_CAT_DEPTH == -1) {
        return false;
    }

    $categories     = array();
    $user_galleries = array();
         
    // collect info about the user galleries category
    $result = cpg_db_query("SELECT name, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = " . USER_GAL_CAT);
    
    $row = mysql_fetch_assoc($result);
    mysql_free_result($result);
    
    $user_galleries['details'] = array(
        'name'        => $row['name'],
        'description' => $row['description'],
        'thumb'       => $row['thumb'],
        'level'       => 1,
    );

    // collect stats for albums in the user galleries category
    // all we need here is the total number of albums and pictures
    $sql = "SELECT COUNT(DISTINCT(p.aid)) AS alb_count, COUNT(*) AS pic_count
        FROM {$CONFIG['TABLE_ALBUMS']} AS a
        INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid
        WHERE a.category > " . FIRST_USER_CAT . "
        AND approved = 'YES'";
        
    if ($FORBIDDEN_SET_DATA) {
        $sql .= 'AND a.aid NOT IN (' . implode(', ', $FORBIDDEN_SET_DATA) . ')';
    }

    $result = cpg_db_query($sql);
    
    $row = mysql_fetch_assoc($result);
    mysql_free_result($result);
    
    $user_galleries['details']['alb_count']      = $row['alb_count'];
    $user_galleries['subalbums'][0]['pic_count'] = $row['pic_count'];
    
    //TODO: optimize this for when first level album thumbs are disabled
    // all we need then is a count

    // collect info about all normal categories
    // restrict to 'subcat_level' categories deeper than current depth
    $sql = "SELECT name, description, cid, thumb, depth, lft
        FROM {$CONFIG['TABLE_CATEGORIES']} AS c
        WHERE depth BETWEEN $CURRENT_CAT_DEPTH + 1 AND $CURRENT_CAT_DEPTH + {$CONFIG['subcat_level']}";

    // if we are in a category, restrict info to children
    if ($rgt) {
        $sql .= "\nAND lft BETWEEN $lft AND $rgt";
    }

    $sql .= "\nORDER BY c.lft";

    $result = cpg_db_query($sql);

    while ( ($row = mysql_fetch_assoc($result)) ) {

        if ($row['cid'] == 1) {
        
            if (!empty($user_galleries)) {
                $categories[$row['cid']] = $user_galleries;
            }
            
            continue;
        }

        $categories[$row['cid']]['details'] = array(
            'name'        => $row['name'],
            'description' => $row['description'],
            'thumb'       => $row['thumb'],
            'level'       => $row['depth'],
            'alb_count'   => 0,
        );
    } // while

    mysql_free_result($result);
    
    // collect album counts for categories that are visible
    $sql = "SELECT category, COUNT(*) AS num
        FROM {$CONFIG['TABLE_ALBUMS']} AS a
        INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category
        WHERE depth BETWEEN $CURRENT_CAT_DEPTH + 1 AND $CURRENT_CAT_DEPTH + {$CONFIG['subcat_level']}";

    // if we are in a category, restrict info to children
    if ($rgt) {
        $sql .= "\nAND lft BETWEEN $lft AND $rgt";
    }

    if (!$CONFIG['show_private'] && $FORBIDDEN_SET_DATA) {
        $sql .= ' AND a.aid NOT IN (' . implode(', ', $FORBIDDEN_SET_DATA) . ')';
    }
    
    // we don't care about the order
    $sql .= "\nGROUP BY category ORDER BY NULL";

    $result = cpg_db_query($sql);

    while ( ($row = mysql_fetch_assoc($result)) ) {
        $categories[$row['category']]['details']['alb_count'] = $row['num'];
    }

    mysql_free_result($result);
    
    // collect album info
    $sql = "SELECT title, r.description, keyword, category, aid, alb_hits, visibility, r.thumb, r.owner
        FROM {$CONFIG['TABLE_CATEGORIES']} AS c
        INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.category = c.cid
        WHERE c.depth BETWEEN $CURRENT_CAT_DEPTH + 1 AND $CURRENT_CAT_DEPTH + {$CONFIG['subcat_level']}";

    // if we are in a cat only get info for albums in that cat
    if ($rgt) {
        $sql .= "\nAND lft BETWEEN $lft AND $rgt";
    }

    $sql .= "\nORDER BY r.pos, r.aid";
     
    $result = cpg_db_query($sql);

    while ( ($row = mysql_fetch_assoc($result)) ) {

        if (!$CONFIG['show_private'] && in_array($row['aid'], $FORBIDDEN_SET_DATA)) {
            continue;
        }
        
        $categories[$row['category']]['subalbums'][$row['aid']] = array(
            'aid'         => $row['aid'],
            'title'       => $row['title'],
            'description' => $row['description'],
            'keyword'     => $row['keyword'],
            'alb_hits'    => $row['alb_hits'],
            'category'    => $row['category'],
            'visibility'  => $row['visibility'],
            'thumb'       => $row['thumb'],
            'pic_count'   => 0,
            'owner'       => $row['owner'],
        );
    } // while

    mysql_free_result($result);

    // album stats for regular albums
    $sql = "SELECT c.cid, r.aid, COUNT(pid) AS pic_count, MAX(pid) AS last_pid, MAX(ctime) AS last_upload
        FROM {$CONFIG['TABLE_CATEGORIES']} AS c
        INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.category = c.cid
        INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = r.aid
        $RESTRICTEDWHERE
        AND approved = 'YES'
        AND c.depth BETWEEN $CURRENT_CAT_DEPTH + 1 AND $CURRENT_CAT_DEPTH + {$CONFIG['subcat_level']}
        GROUP BY r.aid
        ORDER BY NULL";

    $result = cpg_db_query($sql);

    while ( ($row = mysql_fetch_assoc($result)) ) {
        $categories[$row['cid']]['subalbums'][$row['aid']]['pic_count']   = $row['pic_count'];
        $categories[$row['cid']]['subalbums'][$row['aid']]['last_pid']    = $row['last_pid'];
        $categories[$row['cid']]['subalbums'][$row['aid']]['last_upload'] = $row['last_upload'];
    }

    mysql_free_result($result);

    foreach ($categories as $cid => $cat) {

        $level = $cat['details']['level'] - $CURRENT_CAT_DEPTH;

        if ($level == 0) { 
            continue;
        }

        $album_count = $cat['details']['alb_count'];

        $pic_count = 0;

        if (!empty($cat['subalbums'])) {
            foreach ($cat['subalbums'] as $alb) {
                $pic_count += $alb['pic_count'];
            }
        } // if

        if (!empty($cat['subalbums'])) {
            $cat['subalbums'] = array_slice_preserve_keys($cat['subalbums'], 0, $CONFIG['albums_per_page'], true);
        }

        $cat['details']['description'] = preg_replace("/<br.*?>[\r\n]*/i", '<br />', bb_decode($cat['details']['description']));

        if ($cid == USER_GAL_CAT) {

 
            if ($pic_count) {
                //ob_start();
                //list_users(); 
                //$users = ob_get_clean();
                $link = str_repeat($indent, $level - 1) . "<a href=\"index.php?cat={$cid}\">{$cat['details']['name']}</a>";
                $users         = '';
                $cat_data[]    = array($link, str_repeat($indent, $level-1) . $cat['details']['description'], $album_count, $pic_count, 'cat_albums' => $users);
                $HIDE_USER_CAT = 0;
            } else {
                $HIDE_USER_CAT = 1;
            }

        } else {

            if ($cat['details']['thumb'] > 0) {
                $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE pid = {$cat['details']['thumb']} $FORBIDDEN_SET";
                $result = cpg_db_query($sql);
                if (mysql_num_rows($result)) {
                    $picture = mysql_fetch_assoc($result);
                    mysql_free_result($result);
                    $pic_url = get_pic_url($picture, 'thumb');
                    if (!is_image($picture['filename'])) {
                        $image_info = getimagesize(urldecode($pic_url));
                        $picture['pwidth'] = $image_info[0];
                        $picture['pheight'] = $image_info[1];
                    }
                    $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
                    $user_thumb = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"\" />";
                    $user_thumb = "<a href=\"index.php?cat={$cid}\">" . $user_thumb . "</a>";
                } else {
                    $user_thumb = "";
                }
            } else {
                $user_thumb = "";
            }

            $link = "<a href=\"index.php?cat={$cid}\">{$cat['details']['name']}</a>";
            $user_thumb = str_repeat($indent, $level-1) . $user_thumb;
            if ($pic_count == 0 && $album_count == 0) {
                $user_thumb = str_repeat($indent, $level-1);
                $cat_data[] = array($link, $cat['details']['description'], 'cat_thumb' => $user_thumb);
            } else {
                // Check if you need to show subcat_level
                if ($level < $CONFIG['subcat_level']) {
                    $cat_albums = list_cat_albums($cid, $cat);
                } else {
                    $cat_albums = '';
                }
                $cat_data[] = array($link, $cat['details']['description'], $album_count, $pic_count, 'cat_albums' => $cat_albums, 'cat_thumb' => $user_thumb);
            }

        } // else CID != USER_GAL_CAT

    } // foreach categories

} // function get_subcat_data


/**
 * get_cat_list()
 *
 *  List all categories
 *
 * @param string $breadcrumb
 * @param array $cat_data
 * @param string $statistics
 * @return void
 **/
function get_cat_list(&$breadcrumb, &$cat_data, &$statistics)
{
    global $CONFIG, $BREADCRUMB_TEXT, $STATS_IN_ALB_LIST, $FORBIDDEN_SET;
    global $HIDE_USER_CAT, $cpg_show_private_album;
    global $cat;
    global $lang_list_categories;
    // Build the breadcrumb
    breadcrumb($cat, $breadcrumb, $BREADCRUMB_TEXT);
    // Build the category list
    $cat_data = array();

    get_subcat_data($cat_data);

    $album_filter = '';
    $pic_filter = '';
    $cat = (int) $cat;
    if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
        $album_filter = ' ' . str_replace('p.', 'a.', $FORBIDDEN_SET);
        $pic_filter = $FORBIDDEN_SET;
    }
    // Gather gallery statistics - start
    if ($CONFIG['display_stats_on_index'] != 0) {
        if ($cat == 0) {
            $result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE 1 " . $album_filter);
            $nbEnr = mysql_fetch_row($result);
            $album_count = $nbEnr[0];
            mysql_free_result($result);

            $sql = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']}";

            if ($pic_filter) {
                $sql .= " AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = p.aid WHERE approved = 'YES' $pic_filter";
            } else {
                $sql .= " WHERE approved = 'YES'";
            }

            $result = cpg_db_query($sql);
            $nbEnr = mysql_fetch_row($result);
            $picture_count = $nbEnr[0];
            mysql_free_result($result);

            $sql = "SELECT COUNT(*) FROM {$CONFIG['TABLE_COMMENTS']}";
            
            if ($pic_filter) {
                $sql .= " AS c INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.pid = c.pid INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = p.aid WHERE 1 $pic_filter";
            }
            
            if ($CONFIG['comment_approval']) {
                if ($pic_filter) {
                    $sql .= " AND approval = 'YES'";
                } else {
                    $sql .= " WHERE approval = 'YES'";
                }
            }
            
            $result = cpg_db_query($sql);
            $nbEnr = mysql_fetch_row($result);
            $comment_count = $nbEnr[0];
            mysql_free_result($result);

            $sql = "SELECT COUNT(*) FROM {$CONFIG['TABLE_CATEGORIES']}";
            $result = cpg_db_query($sql);
            $nbEnr = mysql_fetch_row($result);
            $cat_count = $nbEnr[0] - $HIDE_USER_CAT;
            mysql_free_result($result);

            $sql = "SELECT SUM(hits) FROM {$CONFIG['TABLE_PICTURES']}";

            if ($pic_filter) {
                $sql .= " AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = p.aid WHERE approved = 'YES' $pic_filter";
            } else {
                $sql .= " WHERE approved = 'YES'";
            }
            
            $result = cpg_db_query($sql);
            $nbEnr = mysql_fetch_row($result);
            $hit_count = (int)$nbEnr[0];
            mysql_free_result($result);

            if (count($cat_data)) {
                $statistics = strtr($lang_list_categories['stat1'], array(
                    '[pictures]' => '<strong>' . cpg_float2decimal($picture_count) . '</strong>',
                    '[albums]'   => '<strong>' . cpg_float2decimal($album_count) . '</strong>',
                    '[cat]'      => '<strong>' . cpg_float2decimal($cat_count) . '</strong>',
                    '[comments]' => '<strong>' . cpg_float2decimal($comment_count) . '</strong>',
                    '[views]'    => '<strong>' . cpg_float2decimal($hit_count) . '</strong>',
                    ));
            } else {
                $STATS_IN_ALB_LIST = true;
                $statistics = strtr($lang_list_categories['stat3'], array(
                    '[pictures]' => '<strong>' . cpg_float2decimal($picture_count) . '</strong>',
                    '[albums]' => '<strong>' . cpg_float2decimal($album_count) . '</strong>',
                    '[comments]' => '<strong>' . cpg_float2decimal($comment_count) . '</strong>',
                    '[views]' => '<strong>' . cpg_float2decimal($hit_count) . '</strong>',
                    ));
            }
        } else {
            $statistics = '';
        }
    } else { // Gather gallery statistics - end
        $statistics = '';
    }
}

/**
* list_users()
*
* Get a list of users galleries
*/
function list_users()
{
    global $CONFIG, $PAGE;
    global $lang_list_users, $template_user_list_info_box, $cpg_udb;

    $user_count = 0;
    $rowset = $cpg_udb->list_users_query($user_count);

    if (!$rowset) {
        msg_box($lang_list_users['user_list'], $lang_list_users['no_user_gal'], '', '', 'info');
        return;
    }

    $user_per_page = $CONFIG['thumbcols'] * $CONFIG['thumbrows'];
    $totalPages    = ceil($user_count / $user_per_page);

    $user_list = array();
    foreach ($rowset as $user) {
        $cpg_nopic_data   = cpg_get_system_thumb('nopic.jpg', $user['user_id']);
        $user_thumb       = '<img src="' . $cpg_nopic_data['thumb'] . '" ' . $cpg_nopic_data['whole'] . ' class="image" border="0" alt="" />';
        $user_pic_count   = $user['pic_count'];
        $user_thumb_pid   = $user['gallery_pid'] ? $user['gallery_pid'] : $user['thumb_pid'];
        $user_album_count = $user['alb_count'];

        if ($user_pic_count) {
            $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='$user_thumb_pid' AND approved='YES'";
            $result = cpg_db_query($sql);
            if (mysql_num_rows($result)) {
                $picture = mysql_fetch_assoc($result);
                mysql_free_result($result);
                $pic_url = get_pic_url($picture, 'thumb');
                if (!is_image($picture['filename'])) {
                    $image_info = cpg_getimagesize(urldecode($pic_url));
                    $picture['pwidth']  = $image_info[0];
                    $picture['pheight'] = $image_info[1];
                }
                //thumb cropping
                //$image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
                if (array_key_exists('system_icon', $picture) && ($picture['system_icon'] == true)) {
                    $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size'], true, 'cat_thumb');
                } else {
                    $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size'], false, 'cat_thumb');
                }

                $user_thumb = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"\" />";
            }
        }

        $albums_txt = sprintf($lang_list_users['n_albums'], $user_album_count);
        $pictures_txt = sprintf($lang_list_users['n_pics'], $user_pic_count);

        $params = CPGPluginAPI::filter('user_caption_params', array(
            '{USER_NAME}' => $user['user_name'],
            '{USER_ID}'   => $user['user_id'],
            '{ALBUMS}'    => $albums_txt,
            '{PICTURES}'  => $pictures_txt,
            ));

        $caption = template_eval($template_user_list_info_box, $params);

        $user_list[] = array(
            'cat'     => FIRST_USER_CAT + $user['user_id'],
            'image'   => $user_thumb,
            'caption' => $caption,
        );
    }
    theme_display_thumbnails($user_list, $user_count, '', '', 1, $PAGE, $totalPages, false, true, 'user');
}
// End list_users()


/**
* list_albums()
*
* Get a list of albums
*/
function list_albums()
{
    global $CONFIG, $USER_DATA, $PAGE, $lang_date, $FORBIDDEN_SET, $FORBIDDEN_SET_DATA;
    global $cat;
    global $lang_list_albums, $cpg_show_private_album;

    $alb_per_page = $CONFIG['albums_per_page'];
    $album_filter = '';
    //unused code {SaWey}
    /*
    $maxTab = $CONFIG['max_tabs'];
    $pic_filter = '';
    $pic_subquery = '';
    */

    if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
        $album_filter = ' ' . str_replace('p.', 'a.', $FORBIDDEN_SET);
        //unused code {SaWey}
        //$pic_filter = ' ' . $FORBIDDEN_SET;
    }

    if (USER_ADMIN_MODE && $cat == (USER_ID + FIRST_USER_CAT)) {
        $result = cpg_db_query("SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE owner = '" . $USER_DATA['user_id'] . "' " . $album_filter);
    } else {
        $result = cpg_db_query("SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '$cat' " . $album_filter);
    }
    $nbEnr = mysql_fetch_row($result);
    $nbAlb = $nbEnr[0];
    mysql_free_result($result);

    if (!$nbAlb) {
        return;
    }

    $totalPages = ceil($nbAlb / $alb_per_page);

    if ($PAGE > $totalPages) { 
        $PAGE = 1;
    }
    $lower_limit = ($PAGE-1) * $alb_per_page;
    $upper_limit = min($nbAlb, $PAGE * $alb_per_page);
    $limit = "LIMIT " . $lower_limit . "," . ($upper_limit - $lower_limit);

    if (USER_ADMIN_MODE && $cat == (USER_ID + FIRST_USER_CAT)) {
        $sql = 'SELECT a.aid, a.title, a.description, a.thumb, category, visibility, a.owner, a.keyword, filepath, ' . 'filename, url_prefix, pwidth, pheight ' . 'FROM ' . $CONFIG['TABLE_ALBUMS'] . ' as a ' . 'LEFT JOIN ' . $CONFIG['TABLE_PICTURES'] . ' as p ' . 'ON a.thumb=p.pid ' . 'WHERE a.owner=' . $USER_DATA['user_id'] . $album_filter . ' ORDER BY a.category DESC , a.pos ' . $limit;
        $alb_thumbs_q = cpg_db_query($sql);
        $alb_thumbs = cpg_db_fetch_rowset($alb_thumbs_q);
        mysql_free_result($alb_thumbs_q);

        //query for the category names
        $cat_name_sql = "SELECT CONCAT(a.title, '" . $lang_list_albums['from_category'] . "<i>', c.name, '</i>') AS cat_name FROM " . $CONFIG['TABLE_ALBUMS'] . " AS a LEFT JOIN " . $CONFIG['TABLE_CATEGORIES'] . " AS c ON a.category=c.cid WHERE a.owner=" . $USER_DATA['user_id'] . " ORDER BY a.category DESC , a.pos " . $limit;
        $cat_name_q = cpg_db_query($cat_name_sql);
        $cat_names = cpg_db_fetch_rowset($cat_name_q);
        mysql_free_result($cat_name_q);

        //replace names in $alb_thumbs array
        foreach ($alb_thumbs as $key => $value) {
            if ($cat_names[$key]['cat_name'] != '') {
                $alb_thumbs[$key]['title'] = $cat_names[$key]['cat_name'];
            }
        }
    } else {
        $sql = 'SELECT a.aid, a.title, a.description, a.thumb, a.keyword, category, visibility, filepath, filename, url_prefix, pwidth, pheight, a.owner ' 
            . ' FROM ' . $CONFIG['TABLE_ALBUMS'] . ' as a ' 
            . ' LEFT JOIN ' . $CONFIG['TABLE_PICTURES'] . ' as p ' . 'ON a.thumb=p.pid ' 
            . ' WHERE a.category=' . $cat . $album_filter 
            . ' ORDER BY a.pos, a.aid ' . $limit;
        $alb_thumbs_q = cpg_db_query($sql);
        $alb_thumbs = cpg_db_fetch_rowset($alb_thumbs_q);
        mysql_free_result($alb_thumbs_q);
    }

    $disp_album_count = count($alb_thumbs);

    //This query will fetch album stats and keywords for the albums
    $sql = "SELECT a.aid, count( p.pid ) AS pic_count, max( p.pid ) AS last_pid, max( p.ctime ) AS last_upload, a.keyword, a.alb_hits"
            ." FROM {$CONFIG['TABLE_ALBUMS']} AS a "
            ." LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON a.aid = p.aid AND p.approved = 'YES' "
            ." WHERE a.category = $cat $album_filter GROUP BY a.aid ORDER BY a.pos, a.aid $limit";
    $alb_stats_q = cpg_db_query($sql);
    $alb_stats = cpg_db_fetch_rowset($alb_stats_q);
    mysql_free_result($alb_stats_q);

    $approved = 'AND approved=\'YES\'';
    $forbidden_set_string = ((count($FORBIDDEN_SET_DATA) > 0) ? ' AND aid NOT IN (' . implode(', ', $FORBIDDEN_SET_DATA) . ')' : '');

    foreach ($alb_stats as $key => $value) {
        $cross_ref[$value['aid']] = &$alb_stats[$key];
        if ($CONFIG['link_pic_count'] == 1) {
            if (!empty($value['keyword'])) {
                $keyword = ($value['keyword'] ? "AND (keywords like '%".addslashes($value['keyword'])."%' $forbidden_set_string )" : '');
                $query = "SELECT count(pid) AS link_pic_count, max(pid) AS link_last_pid "
                        ." FROM {$CONFIG['TABLE_PICTURES']} "
                        ." WHERE ((aid != '{$value['aid']}' $forbidden_set_string) $keyword) $approved";
                $result = cpg_db_query($query);
                $link_stat = mysql_fetch_assoc($result);
                mysql_free_result($result);
                $alb_stats[$key]['link_pic_count'] = $link_stat['link_pic_count'];
                $alb_stats[$key]['last_pid'] = ($alb_stats[$key]['last_pid'] > $link_stat['link_last_pid']) ? $alb_stats[$key]['last_pid'] : $link_stat['link_last_pid'];
            }
        }
    }

    for ($alb_idx = 0; $alb_idx < $disp_album_count; $alb_idx++) {
        $alb_thumb = &$alb_thumbs[$alb_idx];
        $aid = $alb_thumb['aid'];

        if (isset($cross_ref[$aid])) {
            $alb_stat = $cross_ref[$aid];
            $count = $alb_stat['pic_count'];
            $alb_hits = $alb_stat['alb_hits'];
        } else {
            $alb_stat = array();
            $count = 0;
            $alb_hits = 0;
        }
        // Inserts a thumbnail if the album contains 1 or more images
        //unused code {SaWey}
        //$visibility = $alb_thumb['visibility'];
        $keyword = ($alb_thumb['keyword'] ? "OR (keywords like '%".addslashes($alb_thumb['keyword'])."%' $forbidden_set_string )" : '');
        if (!in_array($aid, $FORBIDDEN_SET_DATA) || $CONFIG['allow_private_albums'] == 0) {
            if ($count > 0 || !empty($alb_stats[$alb_idx]['link_pic_count'])) {
                if (!empty($alb_thumb['filename'])) {
                    $picture = &$alb_thumb;
                } elseif ($alb_thumb['thumb'] < 0) {
                    $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " 
                        . "FROM {$CONFIG['TABLE_PICTURES']} "
                        . "WHERE ((aid = '{$alb_thumb['aid']}' $forbidden_set_string) $keyword) $approved "
                        . "ORDER BY RAND() LIMIT 0,1";
                    $result = cpg_db_query($sql);
                    $picture = mysql_fetch_assoc($result);
                    mysql_free_result($result);
                } else {
                    $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " 
                        . "FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='{$alb_stat['last_pid']}'";
                    $result = cpg_db_query($sql);
                    $picture = mysql_fetch_assoc($result);
                    mysql_free_result($result);
                }

                $pic_url = get_pic_url($picture, 'thumb');
                if (!is_image($picture['filename'])) {
                    $image_info = cpg_getimagesize(urldecode($pic_url));
                    $picture['pwidth'] = $image_info[0];
                    $picture['pheight'] = $image_info[1];
                }
                //thumb cropping
                //$image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
                if (array_key_exists('system_icon', $picture) && ($picture['system_icon'] == true)) {
                    $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size'], true, 'cat_thumb');
                } else {
                    $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size'], false, 'cat_thumb');
                }

                $alb_list[$alb_idx]['thumb_pic'] = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$picture['filename']}\" />";
            } else { // Inserts an empty thumbnail if the album contains 0 images
                // $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
                $cpg_nopic_data = cpg_get_system_thumb('nopic.jpg', $alb_thumb['category']);
                $alb_list[$alb_idx]['thumb_pic'] = '<img src="' . $cpg_nopic_data['thumb'] . '" ' . $cpg_nopic_data['whole'] . ' class="image" border="0" alt="" />';
            }
        } elseif ($CONFIG['show_private']) {
            // $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
            $cpg_privatepic_data = cpg_get_system_thumb('private.jpg', $alb_thumb['category']);
            $alb_list[$alb_idx]['thumb_pic'] = '<img src="' . $cpg_privatepic_data['thumb'] . '" ' . $cpg_privatepic_data['whole'] . ' class="image" border="0" alt="" />';
        }
        // Prepare everything
        if (!in_array($aid, $FORBIDDEN_SET_DATA) || $CONFIG['allow_private_albums'] == 0) {
            $last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lang_date['lastup']) : '';
            $link_pic_count = !empty($alb_stat['link_pic_count']) ? $alb_stat['link_pic_count'] : 0;
            $alb_list[$alb_idx]['aid'] = $alb_thumb['aid'];
            $alb_list[$alb_idx]['album_title'] = $alb_thumb['title'];
            $alb_list[$alb_idx]['album_desc'] = bb_decode($alb_thumb['description']);
            $alb_list[$alb_idx]['pic_count'] = $count;
            $alb_list[$alb_idx]['last_upl'] = $last_upload_date;
            $alb_list[$alb_idx]['link_pic_count'] = $link_pic_count;
            $alb_list[$alb_idx]['alb_hits'] = sprintf($lang_list_albums['alb_hits'], $alb_hits);
            $alb_list[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($CONFIG['link_pic_count'] && $link_pic_count > 0 ) ? sprintf(", {$lang_list_albums['n_link_pictures']},  {$lang_list_albums['total_pictures']}", $link_pic_count, $count + $link_pic_count) : "");
            $alb_list[$alb_idx]['album_adm_menu'] = album_adm_menu($alb_thumb['aid'], $cat, $alb_thumb['owner']);
        } elseif ($CONFIG['show_private']) { // uncomment this else block to show private album description
            $last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lang_date['lastup']) : '';
            $link_pic_count = !empty($alb_stat['link_pic_count']) ? $alb_stat['link_pic_count'] : 0;
            $alb_list[$alb_idx]['aid'] = $alb_thumb['aid'];
            $alb_list[$alb_idx]['album_title'] = $alb_thumb['title'];
            $alb_list[$alb_idx]['album_desc'] = bb_decode($alb_thumb['description']);
            $alb_list[$alb_idx]['pic_count'] = $count;
            $alb_list[$alb_idx]['last_upl'] = $last_upload_date;
            $alb_list[$alb_idx]['link_pic_count'] = $link_pic_count;
            $alb_list[$alb_idx]['alb_hits'] = sprintf($lang_list_albums['alb_hits'], $alb_hits);
            $alb_list[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($CONFIG['link_pic_count'] && $link_pic_count > 0 ) ? sprintf(", {$lang_list_albums['n_link_pictures']},   {$lang_list_albums['total_pictures']}", $link_pic_count, $count + $link_pic_count) : "");
            $alb_list[$alb_idx]['album_adm_menu'] = album_adm_menu($alb_thumb['aid'], $cat, $alb_thumb['owner']);
        }
    }

    theme_display_album_list($alb_list, $nbAlb, $cat, $PAGE, $totalPages);
}


/**
* album_adm_menu()
*
* This has been added to keep the list_albums() function clean.
*
* @param integer $aid Album id
* @param integer $cat Category id
*
* @return html_albummenu($aid) Administration menu
*/
function album_adm_menu($aid, $cat, $owner)
{
    global $CONFIG, $USER_DATA, $lang_album_admin_menu;

    //check if user is allowed to edit album
    if (USER_ADMIN_MODE) {
        //check if it is the user's gallery
        if ($cat == USER_ID + FIRST_USER_CAT) {
            return html_albummenu($aid);
        }
        
        if ($owner == USER_ID) {
            //check if admin allows editing after closing category
            if ($CONFIG['allow_user_edit_after_cat_close'] == 0) {
                //Disallowed -> Check if albums is in such a category
                $result = cpg_db_query("SELECT DISTINCT alb.category FROM {$CONFIG['TABLE_ALBUMS']} AS alb INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid WHERE alb.owner = '" . $USER_DATA['user_id'] . "' AND alb.aid='$aid' AND catm.group_id='" . $USER_DATA['group_id'] . "'");
                $allowed_albums = cpg_db_fetch_rowset($result);
                if (!$allowed_albums || ($allowed_albums[0]['category'] == '')) {
                    return "<strong>" . $lang_album_admin_menu['cat_locked'] . "</strong>";
                }
            }
            if (!$CONFIG['users_can_edit_pics']) {
                //return menu without edit pics button
                return html_albummenu3($aid);
            } else {
                //return whole menu
                return html_albummenu($aid);
            }  
        } else {
            return '';
        }
    } elseif (GALLERY_ADMIN_MODE) {
        return html_albummenu($aid);
    } elseif (in_array($aid, $USER_DATA['allowed_albums'])) {
        //check for moderator rights
        return html_albummenu2($aid);
    } else {
        return '';
    }
} // function album_adm_menu


/**
* list_cat_albums()
*
* This has been added to list the albums in a category, used for showing first level albums, largely a repetition of code elsewhere
* Redone for a cleaner approach
* @param integer $cat Category id for which albums are needed
*/
function list_cat_albums($cat, $catdata)
{
    global $CONFIG, $lang_date, $FORBIDDEN_SET_DATA;
    global $lang_list_albums;

    $PAGE = 1;

    if ($cat == 0) {
        return '';
    }

    $cat_owner_id = ($cat > 10000)?(10000 - $cat):(10001);
    $cpg_nopic_data = cpg_get_system_thumb('nopic.jpg', $cat_owner_id);
    $cpg_privatepic_data = cpg_get_system_thumb('private.jpg', $cat_owner_id);

    $alb_per_page = $CONFIG['albums_per_page'];
    
    //unused code {SaWey}
    /*$maxTab = $CONFIG['max_tabs'];

    $album_filter = '';
    $pic_filter = '';

    if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
        $album_filter = ' and ' . str_replace('p.', 'a.', $FORBIDDEN_SET);
        $pic_filter = ' and ' . $FORBIDDEN_SET;
    }*/

    $nbAlb = $catdata['details']['alb_count'];

    if ($nbAlb == 0) {
        return;
    }

    $totalPages = ceil($nbAlb / $alb_per_page);

    $alb_list = array();

    foreach ($catdata['subalbums'] as $aid => $album) {

        $approved = ' AND approved=\'YES\'';
        $forbidden_set_string = ((count($FORBIDDEN_SET_DATA) > 0) ? ' AND aid NOT IN (' . implode(', ', $FORBIDDEN_SET_DATA) . ')' : '');
        $keyword = ($album['keyword'] ? "AND (keywords like '%".addslashes($album['keyword'])."%' $forbidden_set_string)" : '');
        if ($CONFIG['link_pic_count'] == 1) {

            if (!empty($album['keyword'])) {
                $query = "SELECT count(pid) AS link_pic_count, max(pid) AS link_last_pid "
                        ." FROM {$CONFIG['TABLE_PICTURES']} "
                        ." WHERE ((aid != '$aid' $forbidden_set_string) $keyword) $approved";
                $result = cpg_db_query($query);
                $link_stat = mysql_fetch_assoc($result);
                mysql_free_result($result);
                $album['link_pic_count'] = $link_stat['link_pic_count'];
                $album['last_pid'] = !empty($album['last_pid']) && ($album['last_pid'] > $link_stat['link_last_pid']) ? $album['last_pid'] : $link_stat['link_last_pid'];
            }
        }

        // Inserts a thumbnail if the album contains 1 or more images
        //unused code {SaWey}
        //$visibility = $album['visibility'];
        if (!in_array($aid, $FORBIDDEN_SET_DATA) || $CONFIG['allow_private_albums'] == 0) { //test for visibility
            if ($album['pic_count'] > 0  || !empty($album['link_pic_count'])) { 
                // Inserts a thumbnail if the album contains 1 or more images
                if ($album['thumb'] > 0) {
                    $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " 
                            ." FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='{$album['thumb']}'";
                    $result = cpg_db_query($sql);
                    $picture = mysql_fetch_assoc($result);
                    mysql_free_result($result);
                } elseif ($album['thumb'] < 0) {
                    $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " 
                        . "FROM {$CONFIG['TABLE_PICTURES']} WHERE ((aid = '$aid' $forbidden_set_string) $keyword) $approved "
                        . "ORDER BY RAND() LIMIT 0,1";
                    $result = cpg_db_query($sql);
                    $picture = mysql_fetch_assoc($result);
                    mysql_free_result($result);
                } else {
                    $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " 
                        . "FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='{$album['last_pid']}'";
                    $result = cpg_db_query($sql);
                    $picture = mysql_fetch_assoc($result);
                    mysql_free_result($result);
                }
                $pic_url = get_pic_url($picture, 'thumb');
                if (!is_image($picture['filename'])) {
                    $image_info = cpg_getimagesize(urldecode($pic_url));
                    $picture['pwidth'] = $image_info[0];
                    $picture['pheight'] = $image_info[1];
                }
                //thumb cropping
                if (array_key_exists('system_icon', $picture) && ($picture['system_icon'] == true)) {
                    $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size'], true, 'cat_thumb');
                } else {
                    $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size'], false, 'cat_thumb');
                }

                $alb_list[$aid]['thumb_pic'] = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$picture['filename']}\" />";
            } else { // Inserts an empty thumbnail if the album contains 0 images
                // $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
                $alb_list[$aid]['thumb_pic'] = '<img src="' . $cpg_nopic_data['thumb'] . '" ' . $cpg_nopic_data['whole'] . ' class="image" border="0" alt="" />';
            }
        } elseif ($CONFIG['show_private']) {
            // $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
            $alb_list[$aid]['thumb_pic'] = '<img src="' . $cpg_privatepic_data['thumb'] . '" ' . $cpg_privatepic_data['whole'] . ' class="image" border="0" alt="" />';
        }
        // Prepare everything
        if (!in_array($aid, $FORBIDDEN_SET_DATA) || $CONFIG['allow_private_albums'] == 0) {
            $last_upload_date = $album['pic_count'] ? localised_date($album['last_upload'], $lang_date['lastup']) : '';
            $link_pic_count = !empty($album['link_pic_count']) ? $album['link_pic_count'] : 0;
            $alb_list[$aid]['aid'] = $aid;
            $alb_list[$aid]['album_title'] = $album['title'];
            $alb_list[$aid]['album_desc'] = bb_decode($album['description']);
            $alb_list[$aid]['pic_count'] = $album['pic_count'];
            $alb_list[$aid]['last_upl'] = $last_upload_date;
            $alb_list[$aid]['alb_hits'] = sprintf($lang_list_albums['alb_hits'], $album['alb_hits']);
            $alb_list[$aid]['album_info'] = sprintf($lang_list_albums['n_pictures'], $album['pic_count']) . ($album['pic_count'] ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($CONFIG['link_pic_count'] && $link_pic_count > 0)  ? sprintf(", {$lang_list_albums['n_link_pictures']}, {$lang_list_albums['total_pictures']}", $link_pic_count, $album['pic_count'] + $link_pic_count) : "");
            $alb_list[$aid]['album_adm_menu'] = album_adm_menu($aid, $cat, $album['owner']);
        } elseif ($CONFIG['show_private']) { // show private album description
            $last_upload_date = $album['pic_count'] ? localised_date($album['last_upload'], $lang_date['lastup']) : '';
            $link_pic_count = !empty($album['link_pic_count']) ? $album['link_pic_count'] : 0;
            $alb_list[$aid]['aid'] = $aid;
            $alb_list[$aid]['album_title'] = $album['title'];
            $alb_list[$aid]['album_desc'] = bb_decode($album['description']);
            $alb_list[$aid]['pic_count'] = $album['pic_count'];
            $alb_list[$aid]['last_upl'] = $last_upload_date;
            $alb_list[$aid]['alb_hits'] = sprintf($lang_list_albums['alb_hits'], $album['alb_hits']);
            $alb_list[$aid]['album_info'] = sprintf($lang_list_albums['n_pictures'], $album['pic_count']) . ($album['pic_count'] ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($CONFIG['link_pic_count'] && $link_pic_count > 0 )? sprintf(", {$lang_list_albums['n_link_pictures']}, {$lang_list_albums['total_pictures']}", $link_pic_count, $album['pic_count'] + $link_pic_count) : "");
            $alb_list[$aid]['album_adm_menu'] = album_adm_menu($aid, $cat, $album['owner']);
        }
    }
    ob_start();
    theme_display_album_list_cat($alb_list, $nbAlb, $cat, $PAGE, $totalPages);
    $cat_albums = ob_get_contents();
    ob_end_clean();
    return $cat_albums;

} // function list_cat_albums


//
// Main code
//
if (!$file) {

    /**
    * See if $page has been passed in GET
    */
    if (isset($page)) {
        $PAGE = max($page, 1);
    } else {
        $PAGE = 1;
    }

    // Gather data for categories
    $breadcrumb        = '';
    $cat_data          = array();
    $statistics        = '';
    $STATS_IN_ALB_LIST = false;

    $cpg_show_private_album = $CONFIG['allow_private_albums'] ? $CONFIG['show_private'] : true;

    if (isset($cat)) {
        get_meta_album_set($cat);
    } else {
        get_meta_album_set(0);
    }

    get_cat_list($breadcrumb, $cat_data, $statistics);

    pageheader($BREADCRUMB_TEXT ? $BREADCRUMB_TEXT : $lang_index_php['welcome']);

    $elements = explode('/', $CONFIG['main_page_layout']);
    $elements = CPGPluginAPI::filter('main_page_layout', $elements);

    /**
     * Loop through the $elements array to build the page using the parameters
     * set in the config
     */
    foreach ($elements as $element) {
        if (preg_match("/(\w+),*(\d+)*/", $element, $matches)) {
            if (!isset($matches[2])) { // added to fix notice about undefined index
                $matches[2] = 0;
            }

            $matches = CPGPluginAPI::filter('plugin_block', $matches);

            if (is_array($matches)) {
                switch ($matches[1]) {
                case 'breadcrumb':
                    // Added breadcrumb as a separate listable block from config
                    if (($breadcrumb != '' || count($cat_data) > 0) && $cat != 0) {
                        theme_display_breadcrumb($breadcrumb, $cat_data);
                    }
                    break;

                case 'catlist':
                    if ($breadcrumb != '' || count($cat_data) > 0) {
                        theme_display_cat_list($breadcrumb, $cat_data, $statistics);
                    }
                    if (isset($cat) && $cat == USER_GAL_CAT) {
                        list_users();
                    }
                    break;

                case 'alblist':
                    list_albums();
                    break;

                case 'anycontent':
                    if ($cat == 0) {
                        ob_start();
                        /**
                         * Any php code or HTML can be put in this file and will be displayed
                         */
                        include('anycontent.php');
                        $anycontent = CPGPluginAPI::filter('anycontent', ob_get_contents());
                        ob_end_clean();
                        echo $anycontent;
                    }
                    break;
                
                default:
                    // all meta albums caught here
                    display_thumbnails($matches[1], $cat, 1, $CONFIG['thumbcols'], max(1, $matches[2]), false);
                    break;
                }
            }
        }
    }

    pagefooter();
}

?>