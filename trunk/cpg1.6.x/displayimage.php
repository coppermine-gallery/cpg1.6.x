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
define('DISPLAYIMAGE_PHP', true);
define('SMILIES_PHP', true);
define('INDEX_PHP', true);

require('include/init.inc.php');

if (!USER_ID && ($CONFIG['allow_unlogged_access'] <= 1)) {

    $redirect = 'login.php';

    if ($matches = $superCage->server->getMatched('QUERY_STRING', '/^[a-zA-Z0-9&=_\/.-]+$/')) {
        $redirect .= '?force_login=1&referer='.urlencode('displayimage.php?'.$matches[0]);
    }

    header("Location: $redirect");
    exit();
}

if (USER_ID && (USER_ACCESS_LEVEL <= 1)) {
    cpg_die(ERROR, ((USER_ACCESS_LEVEL == 1) ? $lang_errors['access_thumbnail_only'] : $lang_errors['access_none']));
}

if (!$superCage->get->keyExists('slideshow')) {
    js_include('js/displayimage.js');   
}

if ($CONFIG['enable_smilies']) {
    include("include/smilies.inc.php");
}

$breadcrumb = '';
$breadcrumb_text = '';
$cat_data = array();

if ($CONFIG['read_exif_data']) {
    include("include/exif_php.inc.php");
}

if ($CONFIG['read_iptc_data']) {
    include("include/iptc.inc.php");
}

/**
 * Local functions definition
 */

// Sanitize the data - to fix the XSS vulnerability - Aditya
function sanitize_data(&$value, $key)
{
    if (is_array($value)) {
        array_walk($value, 'sanitize_data');
    } else {
        // sanitize against sql/html injection; trim any nongraphical non-ASCII character:
        $value = trim(htmlentities(strip_tags(trim($value, "\x7f..\xff\x0..\x1f")), ENT_QUOTES));
    }
}

function html_picture_menu()
{
    global $lang_display_image_php, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $CONFIG;
    
    if ((USER_ADMIN_MODE && $CURRENT_ALBUM_DATA['category'] == FIRST_USER_CAT + USER_ID) || ($CONFIG['users_can_edit_pics'] && $CURRENT_PIC_DATA['owner_id'] == USER_ID && USER_ID != 0) || GALLERY_ADMIN_MODE) {

        $delete_icon = cpg_fetch_icon('delete', 1);
        $edit_icon   = cpg_fetch_icon('edit', 1);
        $rotate_icon = cpg_fetch_icon('rotate_ccw', 1); 
        
        list($timestamp, $form_token) = getFormToken();
        $picmenu = <<< EOT
    <div class="buttonlist align_right">
		<ul>
			<li><a href="javascript:;" onclick="return MM_openBrWindow('pic_editor.php?id={$CURRENT_PIC_DATA['pid']}','Crop_Picture','scrollbars=yes,toolbar=no,status=yes,resizable=yes')"><span>{$rotate_icon}{$lang_display_image_php['crop_pic']}</span></a></li>
			<li><a href="edit_one_pic.php?id={$CURRENT_PIC_DATA['pid']}&amp;what=picture"><span>{$edit_icon}{$lang_display_image_php['edit_pic']}</span></a></li>
			<li><a href="delete.php?id={$CURRENT_PIC_DATA['pid']}&amp;what=picture&amp;form_token={$form_token}&amp;timestamp={$timestamp}" onclick="return confirm('{$lang_display_image_php['confirm_del']}'); return false; "><span class="last">{$delete_icon}{$lang_display_image_php['del_pic']}</span></a></li>
		</ul>
	</div>
EOT;

    } else {
        $picmenu = '';
    }

    return $picmenu;
}

// Display picture information
function html_picinfo()
{
    global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $THEME_DIR, $FAVPICS, $REFERER, $CPG_PHP_SELF;
    global $album, $lang_picinfo, $lang_display_image_php, $lang_byte_units, $lang_common, $lang_date, $cpg_udb;

    if ($CURRENT_PIC_DATA['owner_id']) {
        $owner_link = '<a href="profile.php?uid=' . $CURRENT_PIC_DATA['owner_id'] . '">' . $cpg_udb->get_user_name($CURRENT_PIC_DATA['owner_id']) . '</a> ';
    } else {
        $owner_link = '';
    }

    if (GALLERY_ADMIN_MODE && $CURRENT_PIC_DATA['pic_raw_ip']) {
        if ($CURRENT_PIC_DATA['pic_hdr_ip']) {
            $ipinfo = ' (' . $CURRENT_PIC_DATA['pic_hdr_ip'] . '[' . $CURRENT_PIC_DATA['pic_raw_ip'] . ']) / ';
        } else {
            $ipinfo = ' (' . $CURRENT_PIC_DATA['pic_raw_ip'] . ') / ';
        }
    } else {
        if ($owner_link) {
            $ipinfo = '/ ';
        } else {
            $ipinfo = '';
        }
    }

    $info[$lang_common['filename']] = htmlspecialchars($CURRENT_PIC_DATA['filename']);
    $info[$lang_picinfo['Album name']] = '<span class="alblink">' . $owner_link . $ipinfo . '<a href="thumbnails.php?album=' . $CURRENT_PIC_DATA['aid'] . '">' . $CURRENT_ALBUM_DATA['title'] . '</a></span>';
    
    $votedetailsunhidetoggle_onload_added = false;
    
    if ($CURRENT_PIC_DATA['votes'] > 0) {
    
        if (defined('THEME_HAS_RATING_GRAPHICS')) {
            $prefix = $THEME_DIR;
        } else {
            $prefix = '';
        }
        
        if (GALLERY_ADMIN_MODE) {
            $width = 800;
            $height = 700;
        } else {
            $width = 400;
            $height = 250;
        }
        
        if ($CONFIG['vote_details'] == 1) {
            $stat_link = "stat_details.php?type=vote&amp;pid={$CURRENT_PIC_DATA['pid']}&amp;sort=sdate&amp;dir=&amp;sdate=1&amp;ip=1&amp;rating=1&amp;referer=0&amp;browser=0&amp;os=0&amp;uid=1";
            $detailsLink_votes = '(<a href="' . $stat_link . '" class="greybox">' . $lang_picinfo['show_details'] . '</a>)';
        } else {
            $detailsLink_votes = '';
        }
        
        //calculate required amount of stars in picinfo
        $i = 1;
        $rating = round(($CURRENT_PIC_DATA['pic_rating'] / 2000) / (5 / $CONFIG['rating_stars_amount']));
        $rating_images = '';
 
        while ($i <= $CONFIG['rating_stars_amount']) {

            if ($i <= $rating) {
                $rating_images .= '<img src="' . $prefix . 'images/rate_full.png" align="left" alt="' . $rating . '"/>';
            } else {
                $rating_images .= '<img src="' . $prefix . 'images/rate_empty.png" align="left" alt="' . $rating . '"/>';
            }
            
            $i++;
        }
        
        $info[sprintf($lang_picinfo['Rating'], $CURRENT_PIC_DATA['votes'])] = $rating_images . $detailsLink_votes;
    }

    if ($CURRENT_PIC_DATA['keywords'] != '') {
        if ($CONFIG['keyword_separator'] == ' ') {
            $info[$lang_common['keywords']] = '<span class="alblink">' 
                . preg_replace("/([^{$CONFIG['keyword_separator']}]+)/"
                        , '<a href="thumbnails.php?album=search&amp;keywords=on&amp;search=$1">$1</a>'
                        , $CURRENT_PIC_DATA['keywords'])
                . '</span>';
        } else {
            $keyword_links = '';
            foreach (explode($CONFIG['keyword_separator'], $CURRENT_PIC_DATA['keywords']) as $keyword) {
                $keyword_links .= ($keyword_links ? ' '.$CONFIG['keyword_separator'].' ' : '')
                        . '<a href="thumbnails.php?album=search&amp;keywords=on&amp;search='
                        . str_replace(' ', '+', $keyword)
                        . '">' . $keyword . '</a>';
            }
            $info[$lang_common['keywords']] = '<span class="alblink">' 
                . $keyword_links
                . '</span>';
        }
    }

    for ($i = 1; $i <= 4; $i++) {
        if ($CONFIG['user_field' . $i . '_name']) {
            if ($CURRENT_PIC_DATA['user' . $i] != "") {
                $info[$CONFIG['user_field' . $i . '_name']] = make_clickable($CURRENT_PIC_DATA['user' . $i]);
            }
        }
    }

    $info[$lang_common['filesize']] = ($CURRENT_PIC_DATA['filesize'] > 10240 ? ($CURRENT_PIC_DATA['filesize'] >> 10) . '&nbsp;' . $lang_byte_units[1] : $CURRENT_PIC_DATA['filesize'] . '&nbsp;' . $lang_byte_units[0]);
    $info[$lang_common['filesize']] = '<span dir="ltr">' . $info[$lang_common['filesize']] . '</span>';
    $info[$lang_picinfo['Date Added']] = localised_date($CURRENT_PIC_DATA['ctime'], $lang_date['lastup']);
    $info[$lang_picinfo['Dimensions']] = sprintf($lang_display_image_php['size'], $CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight']);
    $info[$lang_picinfo['Displayed']] = sprintf($lang_display_image_php['views'], $CURRENT_PIC_DATA['hits']);

    if ($CURRENT_PIC_DATA['hits'] && $CONFIG['hit_details'] && GALLERY_ADMIN_MODE) {
        $stat_link = "stat_details.php?type=hits&amp;pid={$CURRENT_PIC_DATA['pid']}&amp;sort=sdate&amp;dir=&amp;sdate=1&amp;ip=1&amp;search_phrase=0&amp;referer=0&amp;browser=1&amp;os=1";
        $info[$lang_picinfo['Displayed']] .= ' (<a href="' . $stat_link . '" class="greybox">' . $lang_picinfo['show_details'] . '</a>)';
    }

    $path_to_pic = $CONFIG['fullpath'] . $CURRENT_PIC_DATA['filepath'] . $CURRENT_PIC_DATA['filename'];
    $path_to_orig_pic = $CONFIG['fullpath'] . $CURRENT_PIC_DATA['filepath'] . $CONFIG['orig_pfx'] . $CURRENT_PIC_DATA['filename'];

    // Read the iptc and EXIF data from original pic (if watermarked)
    $metadata_path = file_exists($path_to_orig_pic) ? $path_to_orig_pic : $path_to_pic;
    
    if ($CONFIG['read_exif_data']) {
    
        $exif = exif_parse_file($metadata_path, $CURRENT_PIC_DATA['pid']);
    
        if (is_array($exif)) {
            array_walk($exif, 'sanitize_data');
            $info = array_merge($info, $exif);
        }
    }
    
    // Read the iptc data
    if ($CONFIG['read_iptc_data']) {
          
        $iptc = get_IPTC($metadata_path);
    
        if (is_array($iptc)) {
        
            array_walk($iptc, 'sanitize_data');
            
            if (!empty($iptc['Title'])) {
                $info[$lang_picinfo['iptcTitle']] = $iptc['Title'];
            }
            
            if (!empty($iptc['Copyright'])) {
                $info[$lang_picinfo['iptcCopyright']] = $iptc['Copyright'];
            }
            
            if (!empty($iptc['Keywords'])) {
                $info[$lang_picinfo['iptcKeywords']] = implode(' ', $iptc['Keywords']);
            }
            
            if (!empty($iptc['Category'])) {
                $info[$lang_picinfo['iptcCategory']] = $iptc['Category'];
            }
            
            if (!empty($iptc['SubCategories'])) {
                $info[$lang_picinfo['iptcSubCategories']] = implode(' ', $iptc['SubCategories']);
            }
        }
    }
    
    // Create the absolute URL for display in info
    $info[$lang_picinfo['URL']] = '<a href="' . $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .basename($CPG_PHP_SELF) . "?pid={$CURRENT_PIC_DATA['pid']}" . '" >' . $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') . basename($CPG_PHP_SELF) . "?pid={$CURRENT_PIC_DATA['pid']}" . '</a>';

    // Create the add to fav link
    $ref = $REFERER ? "&amp;referer=$REFERER" : '';
    
    if (!in_array($CURRENT_PIC_DATA['pid'], $FAVPICS)) {
        $info[$lang_picinfo['addFavPhrase']] = "<a href=\"addfav.php?pid=" . $CURRENT_PIC_DATA['pid'] . $ref . "\" >" . $lang_picinfo['addFav'] . '</a>';
    } else {
        $info[$lang_picinfo['addFavPhrase']] = "<a href=\"addfav.php?pid=" . $CURRENT_PIC_DATA['pid']  . $ref . "\" >" . $lang_picinfo['remFav'] . '</a>';
    }

    /**
     * Filter file information
     */
    $info = CPGPluginAPI::filter('file_info', $info);

    return theme_html_picinfo($info);
}

/** Main code  */
$pos = $superCage->get->getInt('pos');

/** Hack added by tarique to prevent incorrect picture being seen on last view or last uploaded */

$pid = $superCage->get->getInt('pid');
$cat = $superCage->get->getInt('cat');

/** TODO: Add the code to handle date parameter  */
//$date = $superCage->get->getInt('cat');
if ($superCage->get->testAlpha('album')) {
    $album = $superCage->get->getAlpha('album');
} else {
    $album = $superCage->get->getInt('album');
}

/** get ajax call to thumb photo slideshow*/
$ajax_show = $superCage->get->getInt('ajax_show');

/** get AJAX call to run filmstrip */
$ajax_call = $superCage->get->getInt('ajax_call');

// attempt to fix topn images for keyworded albums
if ($cat < 0) {
    $result = cpg_db_query("SELECT category, title, aid, keyword, description, alb_password_hint FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='" . (- $cat) . "'");
    if (mysql_num_rows($result) > 0) {
        $CURRENT_ALBUM_DATA = mysql_fetch_assoc($result);
        $CURRENT_ALBUM_KEYWORD = $CURRENT_ALBUM_DATA['keyword'];
    }
    mysql_free_result($result);
}

get_meta_album_set($cat);

if (!$superCage->get->keyExists('fullsize') && ($pos < 0 || $pid > 0)) {

    $pid = ($pos < 0) ? -$pos : $pid;
    
    if (!$album) {
        
        $result = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE pid='$pid' $FORBIDDEN_SET LIMIT 1");

        if (mysql_num_rows($result) == 0) {
            // show password prompt if the file is in a password protected album and the user has access rights to that album
            $aid = mysql_result(cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1"), 0);
            if (cpg_pw_protected_album_access($aid) === 1) {
                $redirect = "thumbnails.php?album=".$aid;
                header("Location: $redirect");
            } else {
                cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
            }
        }

        $row = mysql_fetch_assoc($result);
        mysql_free_result($result);
    }

    $album = (!$album) ? $row['aid'] : $album;
    
    // attempt to determine the position directly
    $pos = get_pic_pos($album, $pid);
    
    if ($pos === FALSE) {
    
        $pic_data = get_pic_data($album, $pic_count, $album_name, -1, -1, false);
        
        for ($pos = 0; $pic_data[$pos]['pid'] != $pid && $pos < $pic_count; $pos++);
        
        reset($pic_data);
        
        $CURRENT_PIC_DATA = $pic_data[$pos];
    
    } else {
    
        // load current pic details
        $pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
        $CURRENT_PIC_DATA = $pic_data[0];
  
        // load prev, next, start and end for the navbar
        if ($pos > 0) {
            $prev = get_pic_data($album, $pic_count, $album_name, $pos - 1, 1, false, 'pidonly');
            $pic_data[$pos - 1] = $prev[0];
        }
  
        if ($pos < ($pic_count -1)) {
            $next = get_pic_data($album, $pic_count, $album_name, $pos + 1, 1, false, 'pidonly');
            $pic_data[$pos + 1] = $next[0];
        }

        $start = get_pic_data($album, $pic_count, $album_name, 0, 1, false, 'pidonly');
        $pic_data[0] = $start[0];
     
        $end = get_pic_data($album, $pic_count, $album_name, $pic_count - 1, 1, false, 'pidonly');
        $pic_data[$pic_count - 1] = $end[0];
    }
} elseif (isset($pos) && is_numeric($pos)) {
    //$pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
    //We must get all the data here as well, otherwise the prev/next breaks.
    $pic_data = get_pic_data($album, $pic_count, $album_name, -1, -1, false);
 
    if ($pic_count == 0) {
        cpg_die(INFORMATION, $lang_errors['no_img_to_display'], __FILE__, __LINE__);
    } elseif (count($pic_data) == 0 && $pos >= $pic_count) {
        $pos = $pic_count - 1;
        $human_pos = $pos + 1;
        $pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
    }
 
    $CURRENT_PIC_DATA = $pic_data[$pos];
}

if (!$superCage->get->keyExists('fullsize') && !$superCage->get->keyExists('ajax_show') && !count($CURRENT_PIC_DATA)) {
    cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
}

/** add the assign variable work with jSlideshow */
set_js_var('position', $pos);
set_js_var('album', $album);
set_js_var('cat', $cat);
if ($superCage->get->keyExists('msg_id')) {
    set_js_var('msg_id', $superCage->get->getInt('msg_id'));
    set_js_var('page', $superCage->get->getInt('page'));
}



/** if slideshow is has a key or ajax_show has a key then run jquery.slideshow.js */
if ($superCage->get->keyExists('slideshow') || $superCage->get->keyExists('ajax_show')) {
    js_include('js/jquery.slideshow.js');
}

/** If we have film_strip key in GET then it means this is an ajax call for filmstrip */
if ($superCage->get->keyExists('film_strip')) {
    echo display_film_strip($album, (isset($cat) ? $cat : 0), $pos, true);
    exit;
}

/** if there is value for ajax_show key in GET then it means this is an ajax call to display sideshow. */
if ($superCage->get->keyExists('ajax_show')) {  
    display_slideshow($pos, $ajax_show);
    exit;
}

// Retrieve data for the current album
if (isset($CURRENT_PIC_DATA)) {

    $ref_album = (is_numeric($album) ? $album : $CURRENT_PIC_DATA['aid']);

    $result = cpg_db_query("SELECT title, comments, votes, category, aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='{$ref_album}' LIMIT 1");

    if (!mysql_num_rows($result)) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_errors['pic_in_invalid_album'], $CURRENT_PIC_DATA['aid']), __FILE__, __LINE__);
    }
    
    $CURRENT_ALBUM_DATA = mysql_fetch_assoc($result);
    mysql_free_result($result);
    
    if (is_numeric($album)) {
        $cat = - $album;
        $actual_cat = $CURRENT_ALBUM_DATA['category'];
        breadcrumb($actual_cat, $breadcrumb, $breadcrumb_text);
        $cat = - $album;
    } else {
        $actual_cat = $CURRENT_ALBUM_DATA['category'];
        breadcrumb($actual_cat, $breadcrumb, $breadcrumb_text);
    }
}
    
if ($superCage->get->keyExists('fullsize')) {

    theme_display_fullsize_pic();

} elseif ($superCage->get->keyExists('slideshow')) {

    $slideshow = $superCage->get->getInt('slideshow');
    set_js_var('run_slideshow', 'true'); 
    display_slideshow($pos);
    
} else {

    if (!$pos && !$pid) {
        cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }
    
    $picture_title = $CURRENT_PIC_DATA['title'] ? $CURRENT_PIC_DATA['title'] : strtr(preg_replace("/(.+)\..*?\Z/", "\\1", htmlspecialchars($CURRENT_PIC_DATA['filename'])), "_", " ");

    $nav_menu = theme_html_img_nav_menu();
    $picture = theme_html_picture();
    $votes = theme_html_rating_box();
    $pic_info = html_picinfo();
    $comments = theme_html_comments($CURRENT_PIC_DATA['pid']);
    
    $meta_keywords = '';
    
    if ($CURRENT_PIC_DATA['keywords']) {
        $meta_keywords .= '<meta name="keywords" content="' . str_replace($CONFIG['keyword_separator'], ',', $CURRENT_PIC_DATA['keywords']) . '" />' . $LINEBREAK;
    }

    // Tell robots to ignore meta albums
    if (!is_numeric($album)) {
        $meta_keywords .= '<meta name="robots" content="noindex, nofollow" />' . $LINEBREAK;
    }

    $meta_keywords .= $meta_nav;
    
    // Display Filmstrip if the album is not search -- commented out due to thread ID 64312
    //if ($album != 'search') {
        $film_strip = display_film_strip($album, (isset($cat) ? $cat : 0), $pos, true);
    //}

    // Set the picture id for use in js
    set_js_var('picture_id', $CURRENT_PIC_DATA['pid']);
    pageheader($album_name . ' - ' . $picture_title, $meta_keywords, false);
    
    // Display Breadcrumbs
    if ($breadcrumb && strpos($CONFIG['main_page_layout'], 'breadcrumb') !== false) {
        theme_display_breadcrumb($breadcrumb, $cat_data);
    }

    CPGPluginAPI::filter('post_breadcrumb', null);
    
    theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments, $film_strip);

    pagefooter();
}

?>