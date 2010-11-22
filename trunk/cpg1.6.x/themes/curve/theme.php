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
  ********************************************
  This theme has had redundant CORE items removed
**********************************************/

define('THEME_HAS_PROGRESS_GRAPHICS', 1);
define('THEME_HAS_FILM_STRIP_GRAPHICS', 1);

// HTML template for template  sub menu buttons
$template_sys_menu_button = $template_sub_menu_button = <<<EOT
<!-- BEGIN {BLOCK_ID} -->
    <li>
        <a href="{HREF_TGT}" title="{HREF_TITLE}" class="firstlevel"><span class="firstlevel">{HREF_LNK}</span></a>
    </li>
<!-- END {BLOCK_ID} -->
EOT;

// HTML template for sys menu
$template_sys_menu = <<<EOT

<ul class="dropmenu">
<!-- BEGIN home -->
                <li>
                    <a href="{HOME_TGT}" title="{HOME_TITLE}" class="firstlevel"><span class="firstlevel">{HOME_ICO}{HOME_LNK}</span></a>
                    <ul>
                    <!-- BEGIN contact -->
                                <li>
                                    <a href="{CONTACT_TGT}" title="{CONTACT_TITLE}"><span>{CONTACT_ICO}{CONTACT_LNK}</span></a>
                                </li>
                    <!-- END contact --> 
                    <!-- BEGIN sidebar -->
                                    <li>
                                        <a href="{SIDEBAR_TGT}" title="{SIDEBAR_TITLE}"><span>{SIDEBAR_ICO}{SIDEBAR_LNK}</span></a>
                                    </li>
                    <!-- END sidebar -->
                    <!-- BEGIN my_profile -->
                                    <li>
                                        <a href="{MY_PROF_TGT}" title="{MY_PROF_LNK}"><span>{MY_PROF_ICO}{MY_PROF_LNK}</span></a>
                                    </li>
                    <!-- END my_profile -->
                    </ul>
                </li>
<!-- BEGIN allow_memberlist -->
                                    <!--
                                    <li>
                                        <a href="{MEMBERLIST_TGT}" title="{MEMBERLIST_TITLE}"><span>{MEMBERLIST_ICO}{MEMBERLIST_LNK}</span></a>
                                    </li>
                                    -->
<!-- END allow_memberlist -->

<!-- END home -->
<!-- BEGIN my_gallery -->
                <li>
                    <a href="{MY_GAL_TGT}" title="{MY_GAL_TITLE}" class="firstlevel"><span class="firstlevel">{MY_GAL_ICO}{MY_GAL_LNK}</span></a>
                    <ul>
                    <!-- BEGIN allow_memberlist -->
                                    <li>
                                        <a href="{MEMBERLIST_TGT}" title="{MEMBERLIST_TITLE}"><span>{MEMBERLIST_ICO}{MEMBERLIST_LNK}</span></a>
                                    </li>
                    <!-- END allow_memberlist -->
                    <!-- BEGIN enter_admin_mode -->
                                    <li>
                                    <a href="{ADM_MODE_TGT}" title="{ADM_MODE_TITLE}"><span>{ADM_MODE_ICO}{ADM_MODE_LNK}</span></a>
                                    </li>
                    <!-- END enter_admin_mode -->
                    <!-- BEGIN leave_admin_mode -->
                                    <li>
                                        <a href="{USR_MODE_TGT}" title="{USR_MODE_TITLE}"><span>{USR_MODE_ICO}{USR_MODE_LNK}</span></a>
                                    </li>
                    <!-- END leave_admin_mode -->
                    </ul>
                </li>
<!-- END my_gallery -->
<!-- BEGIN upload_pic -->
                <li>
                    <a href="{UPL_PIC_TGT}" title="{UPL_PIC_TITLE}" class="firstlevel"><span class="firstlevel">{UPL_PIC_ICO}{UPL_PIC_LNK}</span></a>
                </li>
<!-- END upload_pic -->
<!-- BEGIN register -->
                <li>
                    <a href="{REGISTER_TGT}" title="{REGISTER_TITLE}" class="firstlevel"><span class="firstlevel">{REGISTER_ICO}{REGISTER_LNK}</span></a>
                </li>
<!-- END register -->
<!-- BEGIN login -->
                <li>
                    <a href="{LOGIN_TGT}" title="{LOGIN_LNK}" class="firstlevel"><span class="firstlevel">{LOGIN_ICO}{LOGIN_LNK}</span></a>
                </li>
<!-- END login -->
<!-- BEGIN logout -->
                <li>
                    <a href="{LOGOUT_TGT}" title="{LOGOUT_LNK}" class="firstlevel"><span class="firstlevel">{LOGOUT_ICO}{LOGOUT_LNK}</span></a>
                </li>
<!-- END logout -->
</ul>

EOT;


// HTML template for sub menu
if ($CONFIG['browse_by_date'] != 0) {
    $browsebydatebutton = <<< EOT
                        <li>
                            <a href="{BROWSEBYDATE_TGT}" title="{BROWSEBYDATE_TITLE}" rel="nofollow" class="greybox"><span>{BROWSEBYDATE_ICO}{BROWSEBYDATE_LNK}</span></a>
                        </li>
EOT;
} else {
    $browsebydatebutton = '';
}
$template_sub_menu = <<<EOT

<ul class="dropmenu">
<!-- BEGIN custom_link -->
                <li>
                    <a href="{CUSTOM_LNK_TGT}" title="{CUSTOM_LNK_TITLE}" class="firstlevel"><span class="firstlevel">{CUSTOM_LNK_LNK}</span></a>
                </li>
<!-- END custom_link -->
<!-- BEGIN album_list -->
                <li>
                    <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}" class="firstlevel"><span class="firstlevel">{ALB_LIST_ICO}{ALB_LIST_LNK}</span></a>
                    <ul>
<!-- BEGIN lastup -->
                        <li>
                            <a href="{LASTUP_TGT}" title="{LASTUP_LNK}" rel="nofollow"><span>{LASTUP_ICO}{LASTUP_LNK}</span></a>
                        </li>
<!-- END lastup -->
<!-- BEGIN lastcom -->
                        <li>
                            <a href="{LASTCOM_TGT}" title="{LASTCOM_LNK}" rel="nofollow" ><span>{LASTCOM_ICO}{LASTCOM_LNK}</span></a>
                        </li>
<!-- END lastcom -->
<!-- BEGIN topn -->
                        <li>
                            <a href="{TOPN_TGT}" title="{TOPN_LNK}" rel="nofollow"><span>{TOPN_ICO}{TOPN_LNK}</span></a>
                        </li>
<!-- END topn -->
<!-- BEGIN toprated -->
                        <li>
                            <a href="{TOPRATED_TGT}" title="{TOPRATED_LNK}" rel="nofollow"><span>{TOPRATED_ICO}{TOPRATED_LNK}</span></a>
                        </li>
<!-- END toprated -->
<!-- BEGIN favpics -->
                        <li>
                            <a href="{FAV_TGT}" title="{FAV_LNK}" rel="nofollow"><span>{FAV_ICO}{FAV_LNK}</span></a>
                        </li>
<!-- END favpics -->
<!-- BEGIN browse_by_date -->
                        $browsebydatebutton
<!-- END browse_by_date -->
                    </ul>
                </li>
<!-- END album_list -->
<!-- BEGIN search -->
                <li>
                    <a href="{SEARCH_TGT}" title="{SEARCH_LNK}" class="firstlevel"><span class="firstlevel">{SEARCH_ICO}{SEARCH_LNK}</span></a>
                </li>
<!-- END search -->
</ul>
                
EOT;

// HTML template for gallery admin menu
$template_gallery_admin_menu = <<<EOT
                            <ul class="dropmenu">
                                <li>
                                    <a href="#" title="{FILES_TITLE}" class="firstlevel"><span class="firstlevel">{FILES_ICO}{FILES_LNK}</span></a>
                                    <ul>
                                    <!-- BEGIN admin_approval -->
                                        <li><a href="editpics.php?mode=upload_approval" title="{UPL_APP_TITLE}" class="admin_menu_anim"><span>{UPL_APP_ICO}{UPL_APP_LNK}</span></a></li>
                                    <!-- END admin_approval -->
                                    <!-- BEGIN catmgr -->
                                        <li><a href="catmgr.php" title="{CATEGORIES_TITLE}"><span>{CATEGORIES_ICO}{CATEGORIES_LNK}</span></a></li>
                                    <!-- END catmgr -->
                                    <!-- BEGIN albmgr -->
                                        <li><a href="albmgr.php{CATL}" title="{ALBUMS_TITLE}"><span>{ALBUMS_ICO}{ALBUMS_LNK}</span></a></li>
                                    <!-- END albmgr -->
                                    <!-- BEGIN picmgr -->
                                        <li><a href="picmgr.php" title="{PICTURES_TITLE}"><span>{PICTURES_ICO}{PICTURES_LNK}</span></a></li>
                                    <!-- end picmgr -->
                                    <!-- BEGIN batch_add -->
                                        <li><a href="searchnew.php" title="{SEARCHNEW_TITLE}"><span>{SEARCHNEW_ICO}{SEARCHNEW_LNK}</span></a></li>
                                    <!-- END batch_add -->
                                    <!-- BEGIN admin_tools -->
                                        <li><a href="util.php?t={TIME_STAMP}#admin_tools" title="{UTIL_TITLE}"><span>{UTIL_ICO}{UTIL_LNK}</span></a></li>
                                    <!-- END admin_tools -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="firstlevel" title="{INFO_TITLE}"><span class="firstlevel">{INFO_ICO}{INFO_LNK}</span></a>
                                    <ul>
                                    <!-- BEGIN review_comments -->
                                        <li><a href="reviewcom.php" title="{COMMENTS_TITLE}"><span>{COMMENTS_ICO}{COMMENTS_LNK}</span></a></li>
                                    <!-- END review_comments -->
                                    <!-- BEGIN log_ecards -->
                                        <li><a href="db_ecard.php" title="{DB_ECARD_TITLE}"><span>{DB_ECARD_ICO}{DB_ECARD_LNK}</span></a></li>
                                    <!-- END log_ecards -->
                                    <!-- BEGIN view_log_files -->
                                        <li><a href="viewlog.php" title="{VIEW_LOG_FILES_TITLE}"><span>{VIEW_LOG_FILES_ICO}{VIEW_LOG_FILES_LNK}</span></a></li>
                                    <!-- END view_log_files -->
                                    <!-- BEGIN overall_stats -->
                                        <li><a href="stat_details.php?type=hits&amp;sort=sdate&amp;dir=&amp;sdate=1&amp;ip=1&amp;search_phrase=0&amp;referer=0&amp;browser=1&amp;os=1&amp;mode=fullscreen&amp;page=1&amp;amount=50" title="{OVERALL_STATS_TITLE}" ><span>{OVERALL_STATS_ICO}{OVERALL_STATS_LNK}</span></a></li>
                                    <!-- END overall_stats -->
                                    <!-- BEGIN check_versions -->
                                        <li><a href="versioncheck.php" title="{CHECK_VERSIONS_TITLE}"><span>{CHECK_VERSIONS_ICO}{CHECK_VERSIONS_LNK}</span></a></li>
                                    <!-- END check_versions -->
                                    <!-- BEGIN php_info -->
                                        <li><a href="phpinfo.php" title="{PHPINFO_TITLE}"><span>{PHPINFO_ICO}{PHPINFO_LNK}</span></a></li>
                                    <!-- END php_info -->
                                    <!-- BEGIN show_news -->
                                        <li><a href="mode.php?what=news&amp;referer=$REFERER" title="{SHOWNEWS_TITLE}"><span>{SHOWNEWS_ICO}{SHOWNEWS_LNK}</span></a></li>
                                    <!-- END show_news -->
                                    <!-- BEGIN documentation -->
                                        <li><a href="{DOCUMENTATION_HREF}" title="{DOCUMENTATION_TITLE}"><span>{DOCUMENTATION_ICO}{DOCUMENTATION_LNK}</span></a></li>
                                    <!-- END documentation -->
                                    </ul>
                                </li>
                            <!-- BEGIN config -->
                                <li>
                                    <a href="admin.php" title="{ADMIN_TITLE}" class="firstlevel"><span class="firstlevel">{ADMIN_ICO}{ADMIN_LNK}</span></a>
                                    <ul>
                                    <!-- BEGIN keyword_manager -->
                                        <li><a href="keywordmgr.php" title="{KEYWORDMGR_TITLE}"><span>{KEYWORDMGR_ICO}{KEYWORDMGR_LNK}</span></a></li>
                                    <!-- END keyword_manager -->
                                    <!-- BEGIN exif_manager -->
                                        <li><a href="exifmgr.php" title="{EXIFMGR_TITLE}"><span>{EXIFMGR_ICO}{EXIFMGR_LNK}</span></a></li>
                                    <!-- END exif_manager -->
                                    <!-- BEGIN plugin_manager -->
                                        <li><a href="pluginmgr.php" title="{PLUGINMGR_TITLE}"><span>{PLUGINMGR_ICO}{PLUGINMGR_LNK}</span></a></li>
                                    <!-- END plugin_manager -->
                                    <!-- BEGIN bridge_manager -->
                                        <li><a href="bridgemgr.php" title="{BRIDGEMGR_TITLE}"><span>{BRIDGEMGR_ICO}{BRIDGEMGR_LNK}</span></a></li>
                                    <!-- END bridge_manager -->
                                    <!-- BEGIN update_database -->
                                        <li><a href="update.php" title="{UPDATE_DATABASE_TITLE}"><span>{UPDATE_DATABASE_ICO}{UPDATE_DATABASE_LNK}</span></a></li>
                                    <!-- END update_database -->
                                    </ul>
                                </li>
                            <!-- END config -->
                            <!-- BEGIN usermgr -->
                                <li>
                                    <a href="usermgr.php" title="{USERS_TITLE}" class="firstlevel"><span class="firstlevel">{USERS_ICO}{USERS_LNK}</span></a>
                                    <ul>
                                    <!-- BEGIN banmgr -->
                                        <li><a href="banning.php" title="{BAN_TITLE}"><span>{BAN_ICO}{BAN_LNK}</span></a></li>
                                    <!-- END banmgr -->
                                    <!-- BEGIN groupmgr -->
                                        <li><a href="groupmgr.php" title="{GROUPS_TITLE}"><span>{GROUPS_ICO}{GROUPS_LNK}</span></a></li>
                                    <!-- END groupmgr -->
                                    <!-- BEGIN admin_profile -->
                                        <li><a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}"><span>{MY_PROF_ICO}{MY_PROF_LNK}</span></a></li>
                                    <!-- END admin_profile -->
                                    </ul>
                                </li>
                            <!-- END usermgr -->
                            </ul>
                            
EOT;

// HTML template for user admin menu
$template_user_admin_menu = <<<EOT
                            <ul class="dropmenu">
                                <li>
                                    <a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}" class="firstlevel"><span class="firstlevel">{MY_PROF_ICO}{MY_PROF_LNK}</span></a>
                                    <ul>
                                        <li><a href="albmgr.php" title="{ALBMGR_TITLE}"><span>{ALBUMS_ICO}{ALBMGR_LNK}</span></a></li>
                                        <li><a href="modifyalb.php" title="{MODIFYALB_TITLE}"><span>{MODIFYALB_ICO}{MODIFYALB_LNK}</span></a></li>
                                        <li><a href="picmgr.php" title="{PICTURES_TITLE}"><span>{PICTURES_ICO}{PICTURES_LNK}</span></a></li>
                                    </ul>
                                </li>
                            </ul>

EOT;

// Function to start a 'standard' table
function starttable($width = '-1', $title = '', $title_colspan = '1', $zebra_class = '')
{
    global $CONFIG;

    if ($width == '-1') $width = $CONFIG['picture_table_width'];
    if ($width == '100%') $width = $CONFIG['main_table_width'];
    echo <<<EOT

<!-- Start standard table -->
<table align="center" width="$width" cellspacing="1" cellpadding="0" class="maintable $zebra_class">

EOT;
    if ($title) {
        echo <<<EOT
        <tr>
                <td class="" colspan="$title_colspan">
                    <div class="cpg_starttable_outer">
                        <div class="cpg_starttable_inner">
                            $title
                        </div>
                    </div>
                </td>
        </tr>

EOT;
    } else {
    }
}

/******************************************************************************
** Section <<<$template_film_strip>>> - START
******************************************************************************/
// HTML template for filmstrip display
$template_film_strip = <<<EOT

        <tr>
          <td style="background-image: url({TILE1});background-repeat:repeat-x;"><img src="images/spacer.gif" width="1" height="28" alt="" border="0" /></td>
        </tr>
        <tr>
          <td valign="bottom" class="thumbnails filmstrip_background" align="center" style="{THUMB_TD_STYLE}">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                   <td width="50%" class="prev_strip"></td>
                     <td valign="bottom"  style="{THUMB_TD_STYLE}">
                       <div id="film" style="{SET_WIDTH}"><table class="tape" ><tr>{THUMB_STRIP}</tr></table></div>
                     </td>
                   <td width="50%" align="right" class="next_strip"></td>
                </tr>
            </table>
          </td>
        </tr>
        <tr>
         <td style="background-image: url({TILE2});background-repeat:repeat-x;"><img src="images/spacer.gif" width="1" height="28" alt="" border="0" /></td>
        </tr>
<!-- BEGIN thumb_cell -->
                <td class="thumb" >
                  <a href="{LINK_TGT}" class="thumbLink" style="{ONE_WIDTH}">{THUMB}</a>
                </td>
<!-- END thumb_cell -->
<!-- BEGIN empty_cell -->
                <td valign="top" align="center" >&nbsp;</td>
<!-- END empty_cell -->

EOT;
/******************************************************************************
** Section <<<$template_film_strip>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_breadcrumb>>> - START
******************************************************************************/
// HTML template for the breadcrumb
$template_breadcrumb = <<<EOT
<!-- BEGIN breadcrumb -->
        <tr>
            <td colspan="3" align="left">
                <div class="cpg_starttable_outer">
                    <div class="cpg_starttable_inner">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td class="statlink">
                                    {BREADCRUMB}
                                </td>
                                <td class="statlink">
                                    <img src="images/spacer.gif" width="1" height="25" border="0" alt="" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
<!-- END breadcrumb -->
<!-- BEGIN breadcrumb_user_gal -->
        <tr>
            <td colspan="3" align="left">
                <div class="cpg_starttable_outer">
                    <div class="cpg_starttable_inner">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td class="statlink">
                                    {BREADCRUMB}
                                </td>
                                <td class="statlink">
                                    {STATISTICS}
                                </td>
                                <td class="statlink">
                                    <img src="images/spacer.gif" width="1" height="25" border="0" alt="" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
<!-- END breadcrumb_user_gal -->

EOT;
/******************************************************************************
** Section <<<$template_breadcrumb>>> - END
******************************************************************************/


/******************************************************************************
** Section <<<theme_main_menu>>> - START
******************************************************************************/
function theme_main_menu($which)
{
    global $AUTHORIZED, $CONFIG, $album, $actual_cat, $cat, $REFERER, $CPG_PHP_SELF;
    global $lang_main_menu, $template_sys_menu, $template_sub_menu, $lang_gallery_admin_menu;

    static $sys_menu = '', $sub_menu = '';
    if ($$which != '') {
        return $$which;
    }

    //Check whether user has permission to upload file to the current album if any
    $upload_allowed = false;
    if (isset($album) && is_numeric($album)) {
        if (GALLERY_ADMIN_MODE) {
            $upload_allowed = true;
        } else {
            if (USER_ID) {
                $query = "SELECT null FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' AND aid = '$album'";
                $user_albums = cpg_db_query($query);
                if (mysql_num_rows($user_albums)) {
                    $upload_allowed = true;
                } else {
                    $upload_allowed = false;
                }
            }

            if (!$upload_allowed) {
                $query = "SELECT null FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " AND uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.") AND aid = '$album'";
                $public_albums = cpg_db_query($query);

                if (mysql_num_rows($public_albums)) {
                    $upload_allowed = true;
                } else {
                    $upload_allowed = false;
                }
            }
        }
    }

    $album_l = isset($album) ? "?album=$album" : '';
    $album_12 = ($upload_allowed) ? "?album=$album" : '';
    $cat_l = (isset($actual_cat))? "?cat=$actual_cat" : (isset($cat) ? "?cat=$cat" : '?cat=0');
    $cat_l2 = isset($cat) ? "&amp;cat=$cat" : '';
    $my_gallery_id = FIRST_USER_CAT + USER_ID;

  if ($which == 'sys_menu' ) {
    if (USER_ID) { // visitor is logged in
        template_extract_block($template_sys_menu, 'login');
        if ($CONFIG['contact_form_registered_enable'] == 0) {
          template_extract_block($template_sys_menu, 'contact');
        }
        if ($CONFIG['display_sidebar_user'] != 2) {
          template_extract_block($template_sys_menu, 'sidebar');
        }
        
        list($timestamp, $form_token) = getFormToken();
        
    } else { // visitor is not logged in
        if ($CONFIG['contact_form_guest_enable'] == 0) {
          template_extract_block($template_sys_menu, 'contact');
        }
        if ($CONFIG['display_sidebar_guest'] != 2) {
          template_extract_block($template_sys_menu, 'sidebar');
        }
        template_extract_block($template_sys_menu, 'logout');
        template_extract_block($template_sys_menu, 'my_profile');
        
        $timestamp = $form_token = '';
    }

    if (!USER_IS_ADMIN) {
        template_extract_block($template_sys_menu, 'enter_admin_mode');
        template_extract_block($template_sys_menu, 'leave_admin_mode');
    } else {
        if (GALLERY_ADMIN_MODE) {
            template_extract_block($template_sys_menu, 'enter_admin_mode');
        } else {
            template_extract_block($template_sys_menu, 'leave_admin_mode');
        }
    }

    if (!USER_CAN_CREATE_ALBUMS) {
        template_extract_block($template_sys_menu, 'my_gallery');
    }

    if (USER_CAN_CREATE_ALBUMS && USER_ID) { // block 'my_profile' has already been removed for guests
        template_extract_block($template_sys_menu, 'my_profile');
    }

    if (!USER_CAN_UPLOAD_PICTURES && !USER_CAN_CREATE_ALBUMS) {
        template_extract_block($template_sys_menu, 'upload_pic');
    }

    if (USER_ID || !$CONFIG['allow_user_registration']) {
        template_extract_block($template_sys_menu, 'register');
    }

    if (!USER_ID || !$CONFIG['allow_memberlist']) {
        template_extract_block($template_sys_menu, 'allow_memberlist');
    }

    // Remove drop-down menu, if empty
    $template_sys_menu = preg_replace('/<ul>[\s]+<\/ul>/Usi', '', $template_sys_menu);

    $param = array(
        '{HOME_TGT}' => $CONFIG['home_target'],
        '{HOME_ICO}' => cpg_fetch_icon('home', 1),
        '{HOME_TITLE}' => $lang_main_menu['home_title'],
        '{HOME_LNK}' => $lang_main_menu['home_lnk'],
        '{CONTACT_TGT}' => "contact.php",
        '{CONTACT_ICO}' => cpg_fetch_icon('contact', 1),
        '{CONTACT_TITLE}' => sprintf($lang_main_menu['contact_title'], $CONFIG['gallery_name']),
        '{CONTACT_LNK}' => $lang_main_menu['contact_lnk'],
        '{MY_GAL_TGT}' => "index.php?cat=$my_gallery_id",
        '{MY_GAL_ICO}' => cpg_fetch_icon('my_gallery', 1),
        '{MY_GAL_TITLE}' => $lang_main_menu['my_gal_title'],
        '{MY_GAL_LNK}' => $lang_main_menu['my_gal_lnk'],
        '{MEMBERLIST_TGT}' => "usermgr.php",
        '{MEMBERLIST_ICO}' => cpg_fetch_icon('memberlist', 1),
        '{MEMBERLIST_TITLE}' => $lang_main_menu['memberlist_title'],
        '{MEMBERLIST_LNK}' => $lang_main_menu['memberlist_lnk'],
        '{MY_PROF_TGT}' => "profile.php?op=edit_profile",
        '{MY_PROF_ICO}' => cpg_fetch_icon('my_profile', 1),
        '{MY_PROF_TITLE}' => $lang_main_menu['my_prof_title'],
        '{MY_PROF_LNK}' => $lang_main_menu['my_prof_lnk'],
        '{ADM_MODE_TGT}' => "mode.php?admin_mode=1&amp;referer=$REFERER",
        '{ADM_MODE_ICO}' => cpg_fetch_icon('admin_mode_on', 1),
        '{ADM_MODE_TITLE}' => $lang_main_menu['adm_mode_title'],
        '{ADM_MODE_LNK}' => $lang_main_menu['adm_mode_lnk'],
        '{USR_MODE_TGT}' => "mode.php?admin_mode=0&amp;referer=$REFERER",
        '{USR_MODE_ICO}' => cpg_fetch_icon('admin_mode_off', 1),
        '{USR_MODE_TITLE}' => $lang_main_menu['usr_mode_title'],
        '{USR_MODE_LNK}' => $lang_main_menu['usr_mode_lnk'],
        '{SIDEBAR_TGT}' => "sidebar.php?action=install",
        '{SIDEBAR_TITLE}' => $lang_main_menu['sidebar_title'],
        '{SIDEBAR_LNK}' => $lang_main_menu['sidebar_lnk'],
        '{SIDEBAR_ICO}' => cpg_fetch_icon('sidebar', 1),
        '{UPL_PIC_TGT}' => "upload.php$album_12",
        '{UPL_PIC_TITLE}' => $lang_main_menu['upload_pic_title'],
        '{UPL_PIC_LNK}' => $lang_main_menu['upload_pic_lnk'],
        '{UPL_PIC_ICO}' => cpg_fetch_icon('upload', 1),
        '{REGISTER_TGT}' => "register.php",
        '{REGISTER_TITLE}' => $lang_main_menu['register_title'],
        '{REGISTER_LNK}' => $lang_main_menu['register_lnk'],
        '{REGISTER_ICO}' => cpg_fetch_icon('add_user', 1),
        '{LOGIN_TGT}' => "login.php",
        '{LOGIN_TITLE}' => $lang_main_menu['login_title'],
        '{LOGIN_LNK}' => $lang_main_menu['login_lnk'],
        '{LOGIN_ICO}' => cpg_fetch_icon('login', 1),
        '{LOGOUT_TGT}' => "logout.php?form_token=$form_token&amp;timestamp=$timestamp&amp;referer=$REFERER",
        '{LOGOUT_TITLE}' => $lang_main_menu['logout_title'],
        '{LOGOUT_LNK}' => $lang_main_menu['logout_lnk'] . " [" . stripslashes(USER_NAME) . "]",
        '{LOGOUT_ICO}' => cpg_fetch_icon('logout', 1),
        '{UPL_APP_LNK}' => $lang_gallery_admin_menu['upl_app_lnk'],
        '{UPL_APP_TGT}' => "editpics.php?mode=upload_approval",
        '{UPL_APP_TITLE}' => $lang_gallery_admin_menu['upl_app_lnk'],
        '{UPL_APP_ICO}' => cpg_fetch_icon('file_approval', 1),
        );

        if ($CPG_PHP_SELF != 'login.php' && strpos($REFERER, 'login.php') === FALSE) {
            $param['{LOGIN_TGT}'] .= "?referer=$REFERER";
        }

        if ($CPG_PHP_SELF != 'contact.php' && strpos($REFERER, 'contact.php') === FALSE) {
            $param['{CONTACT_TGT}'] .= "?referer=$REFERER";
        }

        $sys_menu = template_eval($template_sys_menu, $param);
  } else {

    if (!$CONFIG['custom_lnk_url']) {
        template_extract_block($template_sub_menu, 'custom_link');
    }

    $param = array(
        '{ALB_LIST_TGT}' => "index.php$cat_l",
        '{ALB_LIST_TITLE}' => $lang_main_menu['alb_list_title'],
        '{ALB_LIST_LNK}' => $lang_main_menu['alb_list_lnk'],
        '{ALB_LIST_ICO}' => cpg_fetch_icon('alb_mgr', 1),
        '{CUSTOM_LNK_TGT}' => $CONFIG['custom_lnk_url'],
        '{CUSTOM_LNK_TITLE}' => $CONFIG['custom_lnk_name'],
        '{CUSTOM_LNK_LNK}' => $CONFIG['custom_lnk_name'],
        '{CUSTOM_ICO}' => cpg_fetch_icon('online', 1),
        '{LASTUP_TGT}' => "thumbnails.php?album=lastup$cat_l2",
        '{LASTUP_TITLE}' => $lang_main_menu['lastup_title'],
        '{LASTUP_LNK}' => $lang_main_menu['lastup_lnk'],
        '{LASTUP_ICO}' => cpg_fetch_icon('last_uploads', 1),
        '{LASTCOM_TGT}' => "thumbnails.php?album=lastcom$cat_l2",
        '{LASTCOM_TITLE}' => $lang_main_menu['lastcom_title'],
        '{LASTCOM_LNK}' => $lang_main_menu['lastcom_lnk'],
        '{LASTCOM_ICO}' => cpg_fetch_icon('comment', 1),
        '{TOPN_TGT}' => "thumbnails.php?album=topn$cat_l2",
        '{TOPN_TITLE}' => $lang_main_menu['topn_title'],
        '{TOPN_LNK}' => $lang_main_menu['topn_lnk'],
        '{TOPN_ICO}' => cpg_fetch_icon('most_viewed', 1),
        '{TOPRATED_TGT}' => "thumbnails.php?album=toprated$cat_l2",
        '{TOPRATED_TITLE}' => $lang_main_menu['toprated_title'],
        '{TOPRATED_LNK}' => $lang_main_menu['toprated_lnk'],
        '{TOPRATED_ICO}' => cpg_fetch_icon('top_rated', 1),
        '{FAV_TGT}' => "thumbnails.php?album=favpics",
        '{FAV_TITLE}' => $lang_main_menu['fav_title'],
        '{FAV_LNK}' => $lang_main_menu['fav_lnk'],
        '{FAV_ICO}' => cpg_fetch_icon('favorites', 1),
        '{BROWSEBYDATE_TGT}' => 'calendar.php',
        '{BROWSEBYDATE_LNK}' => $lang_main_menu['browse_by_date_lnk'],
        '{BROWSEBYDATE_TITLE}' => $lang_main_menu['browse_by_date_title'],
        '{BROWSEBYDATE_ICO}' => cpg_fetch_icon('calendar', 1),
        '{SEARCH_TGT}' => "search.php",
        '{SEARCH_TITLE}' => $lang_main_menu['search_title'],
        '{SEARCH_LNK}' => $lang_main_menu['search_lnk'],
        '{SEARCH_ICO}' => cpg_fetch_icon('search', 1),
        '{UPL_APP_LNK}' => $lang_gallery_admin_menu['upl_app_lnk'],
        '{UPL_APP_TGT}' => "editpics.php?mode=upload_approval",
        '{UPL_APP_TITLE}' => $lang_gallery_admin_menu['upl_app_lnk'],
        '{UPL_APP_ICO}' => cpg_fetch_icon('file_approval', 1),
        );
    $sub_menu = template_eval($template_sub_menu, $param);
  }

    return $$which;
}
/******************************************************************************
** Section <<<theme_main_menu>>> - END
******************************************************************************/

?>