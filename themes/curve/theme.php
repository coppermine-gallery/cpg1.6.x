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

?>