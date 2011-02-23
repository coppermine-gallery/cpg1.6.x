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

// ------------------------------------------------------------------------- //
// This theme has all CORE items that are available.                         //
// Do NOT copy the entire contents of this theme into your custom theme,     //
// but only the sections you want to see changed - this will make ugrading   //
// easier and results in slightly better performance as well.                //
// The individual sections are marked accordingly with                       //
      /***********************************
      ** Section <<<SECTIONNAME>>> - START
      ***********************************/
      // actual code here
      /***********************************
      ** Section <<<SECTIONNAME>>> - END
      ***********************************/
// Copy the whole section into your custom theme, then modify it as you see  //
// fit.                                                                      //
// ------------------------------------------------------------------------- //


// The following terms can be defined in theme.php
// ('THEME_HAS_RATING_GRAPHICS', 1) : The location for the ratings graphics will
//    be directed to the themes images folder.
//('THEME_HAS_NAVBAR_GRAPHICS', 1); : The location for the navbar graphics will
//    be directed to the themes images folder.
//    Back to thumbnails   : images/navbar/thumbnails.png
//    Picture Information  : images/navbar/info.png
//    Slideshow            : images/navbar/slideshow.png
//    Report to admin      : images/navbar/report.png
//    Ecard                : images/navbar/ecard.png
//    Previous             : images/navbar/prev.png
//    Next                 : images/navbar/next.png
// ('THEME_HAS_FILM_STRIP_GRAPHIC', 1) : The location for the film strip graphics will
//    be directed to the themes images folder.
//    tile                 : images/tile.gif
// ('THEME_HAS_FILM_STRIP_GRAPHICS', 1) : The location for the film strip graphics will
//    be directed to the themes images folder.
//    tile on the top      : images/tile1.gif
//    tile on the bottom   : images/tile2.gif
//  ('THEME_HAS_NO_SYS_MENU_BUTTONS', 1) : When present the system won't attempt to replace {BUTTONS} in the SYS_MENU template
//    The entire block needs to be present like in Coppermine 1.3 themes
//  ('THEME_HAS_NO_SUB_MENU_BUTTONS', 1) When present the system won't attempt to replace {BUTTONS} in the SUB_MENU template
//    The entire block needs to be present like in Coppermine 1.3 themes
define('THEME_HAS_PROGRESS_GRAPHICS', 1);

/******************************************************************************
** Section <<<assemble_template_buttons>>> - START
******************************************************************************/
// Creates buttons from a template using an array of tokens
// this function is used in this file it needs to be declared before being called.
function assemble_template_buttons($template_buttons,$buttons) 
{
    $counter=0;
    $output='';

    foreach ($buttons as $button)  {
        if (isset($button[4])) {
            $spacer=$button[4];
        } else {
            $spacer='';
        }

        $params = array(
            '{SPACER}'     => $spacer,
            '{BLOCK_ID}'   => $button[3],
            '{HREF_TGT}'   => $button[2],
            '{HREF_TITLE}' => $button[1],
            '{HREF_LNK}'   => $button[0],
            '{HREF_ATTRIBUTES}'   => $button[5]
            );
        $output.=template_eval($template_buttons, $params);
    }
    return $output;
}
/******************************************************************************
** Section <<<assemble_template_buttons>>> - END
******************************************************************************/




/******************************************************************************
** Section <<<addbutton>>> - START
******************************************************************************/
// Creates an array of tokens to be used with function assemble_template_buttons
// this function is used in this file it needs to be declared before being called.
function addbutton(&$menu,$href_lnk,$href_title,$href_tgt,$block_id,$spacer,$href_attrib='') 
{
    $menu[]=array($href_lnk,$href_title,$href_tgt,$block_id,$spacer,$href_attrib);
}
/******************************************************************************
** Section <<<addbutton>>> - END
******************************************************************************/




/******************************************************************************
** Section <<<$template_sys_menu>>> - START
******************************************************************************/
// HTML template for sys_menu
$template_sys_menu = <<<EOT
          {BUTTONS}
EOT;
/******************************************************************************
** Section <<<$template_sys_menu>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_sub_menu>>> - START
******************************************************************************/
// HTML template for sub_menu
$template_sub_menu = $template_sys_menu;


if (!defined('THEME_HAS_NO_SYS_MENU_BUTTONS')) {

  // HTML template for template sys_menu spacer

  $template_sys_menu_spacer = '<img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />';

  // HTML template for template sys_menu buttons

  $template_sys_menu_button = <<<EOT
  <!-- BEGIN {BLOCK_ID} -->
        <a href="{HREF_TGT}" title="{HREF_TITLE}" {HREF_ATTRIBUTES}>{HREF_LNK}</a> {SPACER}
  <!-- END {BLOCK_ID} -->
EOT;

  // HTML template for template sys_menu buttons

    // {HREF_LNK}{HREF_TITLE}{HREF_TGT}{BLOCK_ID}{SPACER}{HREF_ATTRIBUTES}
    addbutton($sys_menu_buttons,'{HOME_LNK}','{HOME_TITLE}','{HOME_TGT}','home',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{CONTACT_LNK}','{CONTACT_TITLE}','{CONTACT_TGT}','contact',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{MY_GAL_LNK}','{MY_GAL_TITLE}','{MY_GAL_TGT}','my_gallery',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{MEMBERLIST_LNK}','{MEMBERLIST_TITLE}','{MEMBERLIST_TGT}','allow_memberlist',$template_sys_menu_spacer);
    if (array_key_exists('allowed_albums', $USER_DATA) && is_array($USER_DATA['allowed_albums']) && count($USER_DATA['allowed_albums'])) {
      addbutton($sys_menu_buttons,'{UPL_APP_LNK}','{UPL_APP_TITLE}','{UPL_APP_TGT}','upload_approval',$template_sys_menu_spacer);
    }
    addbutton($sys_menu_buttons,'{MY_PROF_LNK}','{MY_PROF_TITLE}','{MY_PROF_TGT}','my_profile',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{ADM_MODE_LNK}','{ADM_MODE_TITLE}','{ADM_MODE_TGT}','enter_admin_mode',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{USR_MODE_LNK}','{USR_MODE_TITLE}','{USR_MODE_TGT}','leave_admin_mode',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{SIDEBAR_LNK}','{SIDEBAR_TITLE}','{SIDEBAR_TGT}','sidebar',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{UPL_PIC_LNK}','{UPL_PIC_TITLE}','{UPL_PIC_TGT}','upload_pic',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{REGISTER_LNK}','{REGISTER_TITLE}','{REGISTER_TGT}','register',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{LOGIN_LNK}','{LOGIN_TITLE}','{LOGIN_TGT}','login','');
    addbutton($sys_menu_buttons,'{LOGOUT_LNK}','{LOGOUT_TITLE}','{LOGOUT_TGT}','logout','');
    // Login and Logout don't have a spacer as only one is shown, and either would be the last option.



  $sys_menu_buttons = CPGPluginAPI::filter('sys_menu',$sys_menu_buttons);
  $params = array('{BUTTONS}' => assemble_template_buttons($template_sys_menu_button,$sys_menu_buttons));
  $template_sys_menu = template_eval($template_sys_menu,$params);
}
/******************************************************************************
** Section <<<$template_sub_menu>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<THEME_HAS_NO_SUB_MENU_BUTTONS>>> - START
******************************************************************************/
if (!defined('THEME_HAS_NO_SUB_MENU_BUTTONS')) {

    // HTML template for template sub_menu spacer

    $template_sub_menu_spacer = $template_sys_menu_spacer;

    // HTML template for template sub_menu buttons

    $template_sub_menu_button = $template_sys_menu_button;

    // HTML template for template sub_menu buttons

    // {HREF_LNK}{HREF_TITLE}{HREF_TGT}{BLOCK_ID}{SPACER}{HREF_ATTRIBUTES}
    addbutton($sub_menu_buttons,'{CUSTOM_LNK_LNK}','{CUSTOM_LNK_TITLE}','{CUSTOM_LNK_TGT}','custom_link',$template_sub_menu_spacer);
    addbutton($sub_menu_buttons,'{ALB_LIST_LNK}','{ALB_LIST_TITLE}','{ALB_LIST_TGT}','album_list',$template_sub_menu_spacer);
    addbutton($sub_menu_buttons,'{LASTUP_LNK}','{LASTUP_TITLE}','{LASTUP_TGT}','lastup',$template_sub_menu_spacer,'rel="nofollow"');
    addbutton($sub_menu_buttons,'{LASTCOM_LNK}','{LASTCOM_TITLE}','{LASTCOM_TGT}','lastcom',$template_sub_menu_spacer,'rel="nofollow"');
    addbutton($sub_menu_buttons,'{TOPN_LNK}','{TOPN_TITLE}','{TOPN_TGT}','topn',$template_sub_menu_spacer,'rel="nofollow"');
    addbutton($sub_menu_buttons,'{TOPRATED_LNK}','{TOPRATED_TITLE}','{TOPRATED_TGT}','toprated',$template_sub_menu_spacer,'rel="nofollow"');
    addbutton($sub_menu_buttons,'{FAV_LNK}','{FAV_TITLE}','{FAV_TGT}','favpics',$template_sub_menu_spacer,'rel="nofollow"');
    if ($CONFIG['browse_by_date'] != 0) {
        addbutton($sub_menu_buttons, '{BROWSEBYDATE_LNK}', '{BROWSEBYDATE_TITLE}', '{BROWSEBYDATE_TGT}', 'browse_by_date', $template_sub_menu_spacer, 'rel="nofollow" class="greybox"');
    }
    addbutton($sub_menu_buttons,'{SEARCH_LNK}','{SEARCH_TITLE}','{SEARCH_TGT}','search','');


    $sub_menu_buttons = CPGPluginAPI::filter('sub_menu',$sub_menu_buttons);
    $params = array('{BUTTONS}' => assemble_template_buttons($template_sub_menu_button,$sub_menu_buttons));
    $template_sub_menu = template_eval($template_sub_menu,$params);
}
/******************************************************************************
** Section <<<THEME_HAS_NO_SUB_MENU_BUTTONS>>> - END
******************************************************************************/


/******************************************************************************
** Section <<<$template_gallery_admin_menu>>> - START
******************************************************************************/
// HTML template for gallery admin menu
$template_gallery_admin_menu = <<<EOT

        <div class="admin_menu_wrapper">
            <!-- BEGIN admin_approval -->
                <div class="admin_menu admin_float" id="admin_menu_anim"><a href="editpics.php?mode=upload_approval" title="{UPL_APP_TITLE}">{UPL_APP_ICO}{UPL_APP_LNK}</a></div>
            <!-- END admin_approval -->
            <!-- BEGIN config -->
                <div class="admin_menu admin_float"><a href="admin.php" title="{ADMIN_TITLE}">{ADMIN_ICO}{ADMIN_LNK}</a></div>
            <!-- END config -->
            <!-- BEGIN catmgr -->
                <div class="admin_menu admin_float"><a href="catmgr.php" title="{CATEGORIES_TITLE}">{CATEGORIES_ICO}{CATEGORIES_LNK}</a></div>
            <!-- END catmgr -->
            <!-- BEGIN albmgr -->
                <div class="admin_menu admin_float"><a href="albmgr.php{CATL}" title="{ALBUMS_TITLE}">{ALBUMS_ICO}{ALBUMS_LNK}</a></div>
            <!-- END albmgr -->
            <!-- BEGIN picmgr -->
                <div class="admin_menu admin_float"><a href="picmgr.php" title="{PICTURES_TITLE}">{PICTURES_ICO}{PICTURES_LNK}</a></div>
            <!-- end picmgr -->
            <!-- BEGIN groupmgr -->
                <div class="admin_menu admin_float"><a href="groupmgr.php" title="{GROUPS_TITLE}">{GROUPS_ICO}{GROUPS_LNK}</a></div>
            <!-- END groupmgr -->
            <!-- BEGIN usermgr -->
                <div class="admin_menu admin_float"><a href="usermgr.php" title="{USERS_TITLE}">{USERS_ICO}{USERS_LNK}</a></div>
            <!-- END usermgr -->
            <!-- BEGIN banmgr -->
                <div class="admin_menu admin_float"><a href="banning.php" title="{BAN_TITLE}">{BAN_ICO}{BAN_LNK}</a></div>
            <!-- END banmgr -->
            <!-- BEGIN admin_profile -->
                <div class="admin_menu admin_float"><a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}">{MY_PROF_ICO}{MY_PROF_LNK}</a></div>
            <!-- END admin_profile -->
            <!-- BEGIN review_comments -->
                <div class="admin_menu admin_float"><a href="reviewcom.php" title="{COMMENTS_TITLE}">{COMMENTS_ICO}{COMMENTS_LNK}</a></div>
            <!-- END review_comments -->
            <!-- BEGIN log_ecards -->
                <div class="admin_menu admin_float"><a href="db_ecard.php" title="{DB_ECARD_TITLE}">{DB_ECARD_ICO}{DB_ECARD_LNK}</a></div>
            <!-- END log_ecards -->
            <!-- BEGIN batch_add -->
                <div class="admin_menu admin_float"><a href="searchnew.php" title="{SEARCHNEW_TITLE}">{SEARCHNEW_ICO}{SEARCHNEW_LNK}</a></div>
            <!-- END batch_add -->
            <!-- BEGIN admin_tools -->
                <div class="admin_menu admin_float"><a href="util.php?t={TIME_STAMP}#admin_tools" title="{UTIL_TITLE}">{UTIL_ICO}{UTIL_LNK}</a></div>
            <!-- END admin_tools -->
            <!-- BEGIN keyword_manager -->
                <div class="admin_menu admin_float"><a href="keywordmgr.php" title="{KEYWORDMGR_TITLE}">{KEYWORDMGR_ICO}{KEYWORDMGR_LNK}</a></div>
            <!-- END keyword_manager -->
            <!-- BEGIN exif_manager -->
                <div class="admin_menu admin_float"><a href="exifmgr.php" title="{EXIFMGR_TITLE}">{EXIFMGR_ICO}{EXIFMGR_LNK}</a></div>
            <!-- END exif_manager -->
            <!-- BEGIN plugin_manager -->
                <div class="admin_menu admin_float"><a href="pluginmgr.php" title="{PLUGINMGR_TITLE}">{PLUGINMGR_ICO}{PLUGINMGR_LNK}</a></div>
            <!-- END plugin_manager -->
            <!-- BEGIN bridge_manager -->
                <div class="admin_menu admin_float"><a href="bridgemgr.php" title="{BRIDGEMGR_TITLE}">{BRIDGEMGR_ICO}{BRIDGEMGR_LNK}</a></div>
            <!-- END bridge_manager -->
            <!-- BEGIN view_log_files -->
                <div class="admin_menu admin_float"><a href="viewlog.php" title="{VIEW_LOG_FILES_TITLE}">{VIEW_LOG_FILES_ICO}{VIEW_LOG_FILES_LNK}</a></div>
            <!-- END view_log_files -->
            <!-- BEGIN overall_stats -->
                <div class="admin_menu admin_float"><a href="stat_details.php?type=hits&amp;sort=sdate&amp;dir=&amp;sdate=1&amp;ip=1&amp;search_phrase=0&amp;referer=0&amp;browser=1&amp;os=1&amp;mode=fullscreen&amp;page=1&amp;amount=50" title="{OVERALL_STATS_TITLE}">{OVERALL_STATS_ICO}{OVERALL_STATS_LNK}</a></div>
            <!-- END overall_stats -->
            <!-- BEGIN check_versions -->
                <div class="admin_menu admin_float"><a href="versioncheck.php" title="{CHECK_VERSIONS_TITLE}">{CHECK_VERSIONS_ICO}{CHECK_VERSIONS_LNK}</a></div>
            <!-- END check_versions -->
            <!-- BEGIN update_database -->
                <div class="admin_menu admin_float"><a href="update.php" title="{UPDATE_DATABASE_TITLE}">{UPDATE_DATABASE_ICO}{UPDATE_DATABASE_LNK}</a></div>
            <!-- END update_database -->
            <!-- BEGIN php_info -->
                <div class="admin_menu admin_float"><a href="phpinfo.php" title="{PHPINFO_TITLE}">{PHPINFO_ICO}{PHPINFO_LNK}</a></div>
            <!-- END php_info -->
            <!-- BEGIN show_news -->
                <div class="admin_menu admin_float"><a href="mode.php?what=news&amp;referer=$REFERER" title="{SHOWNEWS_TITLE}">{SHOWNEWS_ICO}{SHOWNEWS_LNK}</a></div>
            <!-- END show_news -->
            <!-- BEGIN documentation -->
                <div class="admin_menu admin_float"><a href="{DOCUMENTATION_HREF}" title="{DOCUMENTATION_TITLE}">{DOCUMENTATION_ICO}{DOCUMENTATION_LNK}</a></div>
            <!-- END documentation -->
            <div style="clear:left;">
            </div>
        </div>

EOT;
/******************************************************************************
** Section <<<$template_gallery_admin_menu>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_user_admin_menu>>> - START
******************************************************************************/
// HTML template for user admin menu
$template_user_admin_menu = <<<EOT

                <div align="center">
                <table cellpadding="0" cellspacing="1">
                        <tr>
                                <td class="admin_menu"><a href="albmgr.php" title="{ALBMGR_TITLE}">{ALBUMS_ICO}{ALBMGR_LNK}</a></td>
                                <td class="admin_menu"><a href="modifyalb.php" title="{MODIFYALB_TITLE}">{MODIFYALB_ICO}{MODIFYALB_LNK}</a></td>
                                <td class="admin_menu"><a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}">{MY_PROF_ICO}{MY_PROF_LNK}</a></td>
                                <td class="admin_menu"><a href="picmgr.php" title="{PICTURES_TITLE}">{PICTURES_ICO}{PICTURES_LNK}</a></td>
                        </tr>
                </table>
                </div>

EOT;
/******************************************************************************
** Section <<<$template_user_admin_menu>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_cat_list>>> - START
******************************************************************************/
// HTML template for the category list
$template_cat_list = <<<EOT
<!-- BEGIN header -->
        <tr>
                <td class="tableh1" width="80%" align="left">{CATEGORY}</td>
                <td class="tableh1" width="10%" align="center">{ALBUMS}</td>
                <td class="tableh1" width="10%" align="center">{PICTURES}</td>
        </tr>
<!-- END header -->
<!-- BEGIN catrow_noalb -->
        <tr>
                <td class="catrow_noalb" colspan="3"><table border="0"><tr><td align="left">{CAT_THUMB}</td><td align="left"><span class="catlink">{CAT_TITLE}</span>{CAT_DESC}</td></tr></table></td>
        </tr>
<!-- END catrow_noalb -->
<!-- BEGIN catrow -->
        <tr>
                <td class="catrow" align="left"><table border="0"><tr><td>{CAT_THUMB}</td><td><span class="catlink">{CAT_TITLE}</span>{CAT_DESC}</td></tr></table></td>
                <td class="catrow" align="center">{ALB_COUNT}</td>
                <td class="catrow" align="center">{PIC_COUNT}</td>
        </tr>
        <tr>
            <td class="tableb tableb_alternate" colspan="3">{CAT_ALBUMS}</td>
        </tr>
<!-- END catrow -->
<!-- BEGIN footer -->
        <tr>
                <td colspan="3" class="tableh1" align="center"><span class="statlink">{STATISTICS}</span></td>
        </tr>
<!-- END footer -->
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="7" border="" alt="" /><br />
<!-- END spacer -->

EOT;
/******************************************************************************
** Section <<<$template_cat_list>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_breadcrumb>>> - START
******************************************************************************/
// HTML template for the breadcrumb
$template_breadcrumb = <<<EOT
<!-- BEGIN breadcrumb -->
        <tr>
            <td colspan="3" align="left" class="tableh1">
                <span class="statlink">{BREADCRUMB}</span>
            </td>
        </tr>
<!-- END breadcrumb -->
<!-- BEGIN breadcrumb_user_gal -->
        <tr>
            <td colspan="3" class="tableh1">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td align="left"><span class="statlink">{BREADCRUMB}</span></td>
                        <td align="right"><span class="statlink">{STATISTICS}</span></td>
                    </tr>
                </table>
            </td>
        </tr>
<!-- END breadcrumb_user_gal -->

EOT;
/******************************************************************************
** Section <<<$template_breadcrumb>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_album_list>>> - START
******************************************************************************/
// HTML template for the album list
$template_album_list = <<<EOT

<!-- BEGIN stat_row -->
        <tr>
                <td colspan="{COLUMNS}" class="tableh1" align="center"><span class="statlink">{STATISTICS}</span></td>
        </tr>
<!-- END stat_row -->
<!-- BEGIN header -->
        <tr class="tableb tableb_alternate">
<!-- END header -->
<!-- BEGIN album_cell -->
        <td width="{COL_WIDTH}%" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
                <td colspan="3" height="1" align="left" valign="top" class="tableh2">
                        <span class="alblink"><a href="{ALB_LINK_TGT}">{ALBUM_TITLE}</a></span>
                </td>
        </tr>
        <tr>
                <td colspan="3">
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                </td>
        </tr>
        <tr>
                <td align="center" valign="middle" class="thumbnails">
                        <img src="images/spacer.gif" width="{THUMB_CELL_WIDTH}" height="1" style="margin-top: 0px; margin-bottom: 0px; border: none;" alt="" /><br />
                        <a href="{ALB_LINK_TGT}" class="albums">{ALB_LINK_PIC}<br /></a>
                </td>
                <td>
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" />
                </td>
                <td width="100%" valign="top" align="left" class="tableb tableb_alternate">
                        {ADMIN_MENU}
                        <p>{ALB_DESC}</p>
                        <p class="album_stat">{ALB_INFOS}<br />{ALB_HITS}</p>
                </td>
        </tr>
        </table>
        </td>
<!-- END album_cell -->
<!-- BEGIN empty_cell -->
        <td width="{COL_WIDTH}%" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
                <td height="1" valign="top" class="tableh2">
                        &nbsp;
                </td>
        </tr>
        <tr>
                <td>
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                </td>
        </tr>
        <tr>
                <td width="100%" valign="top" class="tableb tableb_alternate">
                    <div class="thumbnails" style="background-color:transparent"><img src="images/spacer.gif" width="1" height="1" border="0" class="image" style="border:0;margin-top:1px;margin-bottom:0" alt="" /></div>
                </td>
        </tr>
        </table>
        </td>
<!-- END empty_cell -->
<!-- BEGIN row_separator -->
        </tr>
        <tr class="tableb tableb_alternate">
<!-- END row_separator -->
<!-- BEGIN footer -->
        </tr>
<!-- END footer -->
<!-- BEGIN tabs -->
        <tr>
                <td colspan="{COLUMNS}" style="padding: 0px;">
                        <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                       {TABS}
                                </tr>
                        </table>
                </td>
        </tr>
<!-- END tabs -->
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="7" border="" alt="" /><br />
<!-- END spacer -->

EOT;
/******************************************************************************
** Section <<<$template_album_list>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_film_strip>>> - START
******************************************************************************/
// HTML template for filmstrip display
$template_film_strip = <<<EOT

        <tr>
          <td valign="top" class="filmstrip_background" style="background-image: url({TILE1});"><img src="{TILE1}" alt="" border="0" /></td>
        </tr>
        <tr>
          <td valign="bottom" class="thumbnails filmstrip_background" align="center" style="{THUMB_TD_STYLE}">
            <table width="100%" cellspacing="0" cellpadding="3" border="0">
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
         <td valign="top" class="filmstrip_background" style="background-image: url({TILE2});"><img src="{TILE2}" alt="" border="0" /></td>
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
** Section <<<$template_album_list_cat>>> - START
******************************************************************************/
// HTML template for the album list
$template_album_list_cat = <<<EOT

<!-- BEGIN c_stat_row -->
        <tr>
                <td colspan="{COLUMNS}" class="tableh1" align="center"><span class="statlink">{STATISTICS}</span></td>
        </tr>
<!-- END c_stat_row -->
<!-- BEGIN c_header -->
        <tr class="tableb tableb_alternate">
<!-- END c_header -->
<!-- BEGIN c_album_cell -->
        <td width="{COL_WIDTH}%" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
                <td colspan="3" height="1" valign="top" class="tableh2">
                        <span class="alblink"><a href="{ALB_LINK_TGT}">{ALBUM_TITLE}</a></span>
                </td>
        </tr>
        <tr>
                <td colspan="3">
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                </td>
        </tr>
        <tr>
                <td align="center" valign="middle" class="thumbnails">
                        <img src="images/spacer.gif" width="{THUMB_CELL_WIDTH}" height="1" style="margin-top: 0px; margin-bottom: 0px; border: none;" alt="" /><br />
                        <a href="{ALB_LINK_TGT}" class="albums">{ALB_LINK_PIC}<br /></a>
                </td>
                <td>
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" />
                </td>
                <td width="100%" valign="top" class="tableb tableb_alternate">
                        {ADMIN_MENU}
                        <p>{ALB_DESC}</p>
                        <p class="album_stat">{ALB_INFOS}<br />{ALB_HITS}</p>
                </td>
        </tr>
        </table>
        </td>
<!-- END c_album_cell -->
<!-- BEGIN c_empty_cell -->
        <td width="{COL_WIDTH}%" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0" >
        <tr>
                <td height="1" valign="top" class="tableh2">
                        &nbsp;
                </td>
        </tr>
        <tr>
                <td>
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                </td>
        </tr>
        <tr>
                <td width="100%" valign="top" class="tableb tableb_alternate" >
                      <div class="thumbnails" style="background-color:transparent"><img src="images/spacer.gif" width="1" height="1" border="0" class="image" style="border:0;margin-top:1px;margin-bottom:0" alt="" /></div>
                </td>
        </tr>
        </table>
        </td>
<!-- END c_empty_cell -->
<!-- BEGIN c_row_separator -->
        </tr>
        <tr class="tableb tableb_alternate">
<!-- END c_row_separator -->
<!-- BEGIN c_footer -->
        </tr>
<!-- END c_footer -->
<!-- BEGIN c_tabs -->
        <tr>
                <td colspan="{COLUMNS}" style="padding: 0px;">
                        <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                       {TABS}
                                </tr>
                        </table>
                </td>
        </tr>
<!-- END c_tabs -->
<!-- BEGIN c_spacer -->
        <img src="images/spacer.gif" width="1" height="7" border="" alt="" /><br />
<!-- END c_spacer -->

EOT;
/******************************************************************************
** Section <<<$template_album_list_cat>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_album_admin_menu>>> - START
******************************************************************************/
// HTML template for the ALBUM admin menu displayed in the album list
$template_album_admin_menu = <<<EOT
        <div class="buttonlist align_right">
                <ul>
                        <li>
                                <a href="delete.php?id={ALBUM_ID}&amp;what=album&amp;form_token={FORM_TOKEN}&amp;timestamp={TIMESTAMP}" class="adm_menu" onclick="return confirm('{CONFIRM_DELETE}');"><span>{DELETE}</span></a>
                        </li>
                        <li>
                                <a href="modifyalb.php?album={ALBUM_ID}" class="adm_menu"><span>{MODIFY}</span></a>
                        </li>
                        <li>
                                <a href="editpics.php?album={ALBUM_ID}" class="adm_menu"><span class="last">{EDIT_PICS}</span></a>
                        </li>
                </ul>
        </div>
        <div class="clearer"></div>

EOT;
/******************************************************************************
** Section <<<$template_album_admin_menu>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_thumb_view_title_row>>> - START
******************************************************************************/
// HTML template for title row of the thumbnail view (album title + sort options)
$template_thumb_view_title_row = <<<EOT

        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td style="width:60%;vertical-align:top" class="statlink">
                    <h2>{ALBUM_NAME}</h2>
                </td>
                <td style="text-align:right;">
<!-- BEGIN admin_buttons -->
                    <a href="modifyalb.php?album={ALBUM_ID}" class="admin_menu" title="{MODIFY_LNK}">{MODIFY_ICO}</a>
                    &nbsp;&nbsp;
                    <a href="index.php?cat={CAT_ID}" class="admin_menu" title="{PARENT_CAT_LNK}">{PARENT_CAT_ICO}</a>
                    &nbsp;&nbsp;
                    <a href="editpics.php?album={ALBUM_ID}" class="admin_menu" title="{EDIT_PICS_LNK}">{EDIT_PICS_ICO}</a>
                    &nbsp;&nbsp;
                    <a href="albmgr.php?cat={CAT_ID}" class="admin_menu" title="{ALBUM_MGR_LNK}">{ALBUM_MGR_ICO}</a>
<!-- END admin_buttons -->
                </td>
                <td style="text-align:right;" class="sortorder_cell" id="sortorder_cell">
                    <!-- Use JavaScript to display the sorting options only to humans, but hide them from search engines to avoid double-content indexing (js/thumbnails.js) -->
                </td>
            </tr>
        </table>

EOT;
/******************************************************************************
** Section <<<$template_thumb_view_title_row>>> - END
******************************************************************************/




/******************************************************************************
** Section <<<$template_fav_thumb_view_title_row>>> - START
******************************************************************************/
// HTML template for title row of the fav thumbnail view (album title + download)
$template_fav_thumb_view_title_row = <<<EOT

                        <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td width="100%" class="statlink"><h2>{ALBUM_NAME}</h2></td>
                                <td><img src="images/spacer.gif" width="1" border="0" alt="" /></td>
                                <td class="sortorder_cell">
                                        <table cellpadding="0" cellspacing="0">
                                                <tr>
                                                        <td class="sortorder_options"><span class="statlink"><a href="zipdownload.php">{DOWNLOAD_ZIP}</a></span></td>
                                                </tr>
                                                </table>
                                </td>
                        </tr>
                        </table>

EOT;
/******************************************************************************
** Section <<<$template_fav_thumb_view_title_row>>> - END
******************************************************************************/




/******************************************************************************
** Section <<<$template_thumbnail_view>>> - START
******************************************************************************/

// HTML template for thumbnails display
$template_thumbnail_view = <<<EOT

<!-- BEGIN header -->
        <tr>
<!-- END header -->
<!-- BEGIN thumb_cell -->
        <td valign="top" class="thumbnails" width ="{CELL_WIDTH}" align="center">
                <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td align="center">
                                        <a href="{LINK_TGT}">{THUMB}<br /></a>
                                        {CAPTION}
                                        {ADMIN_MENU}
                                </td>
                        </tr>
                </table>
        </td>
<!-- END thumb_cell -->
<!-- BEGIN empty_cell -->
                <td valign="top" class="thumbnails" align="center">&nbsp;</td>
<!-- END empty_cell -->
<!-- BEGIN row_separator -->
        </tr>
        <tr>
<!-- END row_separator -->
<!-- BEGIN footer -->
        </tr>
<!-- END footer -->
<!-- BEGIN tabs -->
        <tr>
                <td colspan="{THUMB_COLS}" style="padding: 0px;">
                        <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                       {TABS}
                                </tr>
                        </table>
                </td>
        </tr>
<!-- END tabs -->
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="7" border="" alt="" /><br />
<!-- END spacer -->

EOT;
/******************************************************************************
** Section <<<$template_thumbnail_view>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_no_img_to_display>>> - START
******************************************************************************/
// HTML template for the thumbnail view when there is no picture to show
$template_no_img_to_display = <<<EOT
        <tr>
                <td class="tableb tableb_alternate" height="200" align="center">
                        <span class="cpg_user_message">{TEXT}</span>
                </td>
        </tr>
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="7" border="" alt="" /><br />
<!-- END spacer -->

EOT;
/******************************************************************************
** Section <<<$template_no_img_to_display>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_user_list_info_box>>> - START
******************************************************************************/
// HTML template for the USER info box in the user list view
$template_user_list_info_box = <<<EOT

        <table cellspacing="1" cellpadding="0" border="0" width="100%" class="user_thumb_infobox">
                <tr>
                        <th><a href="profile.php?uid={USER_ID}">{USER_NAME}</a></th>
                </tr>
                <tr>
                        <td>{ALBUMS}</td>
                </tr>
                <tr>
                        <td>{PICTURES}</td>
                </tr>
        </table>

EOT;
/******************************************************************************
** Section <<<$template_user_list_info_box>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_img_navbar>>> - START
******************************************************************************/
// HTML template for the image navigation bar
$template_img_navbar = <<<EOT

        <tr>
                <td align="center" valign="middle" class="navmenu" width="48"><a href="{THUMB_TGT}" class="navmenu_pic" title="{THUMB_TITLE}"><img src="{LOCATION}images/navbar/thumbnails.png" align="middle" border="0" alt="{THUMB_TITLE}" /></a></td>
<!-- BEGIN pic_info_button -->
                <!-- button will be added by displayimage.js -->
                <td id="pic_info_button" align="center" valign="middle" class="navmenu" width="48"></td>
<!-- END pic_info_button -->
<!-- BEGIN slideshow_button -->
                <!-- button will be added by displayimage.js -->
                <td id="slideshow_button" align="center" valign="middle" class="navmenu" width="48"></td>
<!-- END slideshow_button -->
                <td align="center" valign="middle" class="navmenu" width="100%">{PIC_POS}</td>
<!-- BEGIN report_file_button -->
                <td align="center" valign="middle" class="navmenu" width="48"><a href="{REPORT_TGT}" class="navmenu_pic" title="{REPORT_TITLE}" rel="nofollow"><img src="{LOCATION}images/navbar/report.png" border="0" align="middle" alt="{REPORT_TITLE}" /></a></td>
<!-- END report_file_button -->
<!-- BEGIN ecard_button -->
                <td align="center" valign="middle" class="navmenu" width="48"><a href="{ECARD_TGT}" class="navmenu_pic" title="{ECARD_TITLE}" rel="nofollow"><img src="{LOCATION}images/navbar/ecard.png"  border="0" align="middle" alt="{ECARD_TITLE}" /></a></td>
<!-- END ecard_button -->
<!-- BEGIN nav_start -->
                <td align="center" valign="middle" class="navmenu" width="48"><a href="{START_TGT}" class="navmenu_pic" title="{START_TITLE}"><img src="{LOCATION}images/navbar/{START_IMAGE}" border="0" align="middle" alt="{START_TITLE}" /></a></td>
<!-- END nav_start -->
<!-- BEGIN nav_prev -->
                <td align="center" valign="middle" class="navmenu" width="48"><a href="{PREV_TGT}" class="navmenu_pic" title="{PREV_TITLE}"><img src="{LOCATION}images/navbar/{PREV_IMAGE}" border="0" align="middle" alt="{PREV_TITLE}" /></a></td>
<!-- END nav_prev -->
<!-- BEGIN nav_next -->
                <td align="center" valign="middle" class="navmenu" width="48"><a href="{NEXT_TGT}" class="navmenu_pic" title="{NEXT_TITLE}"><img src="{LOCATION}images/navbar/{NEXT_IMAGE}" border="0" align="middle" alt="{NEXT_TITLE}" /></a></td>
<!-- END nav_next -->
<!-- BEGIN nav_end -->
                <td align="center" valign="middle" class="navmenu" width="48"><a href="{END_TGT}" class="navmenu_pic" title="{END_TITLE}"><img src="{LOCATION}images/navbar/{END_IMAGE}" border="0" align="middle" alt="{END_TITLE}" /></a></td>
<!-- END nav_end -->

        </tr>

EOT;
/******************************************************************************
** Section <<<$template_img_navbar>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_display_media>>> - START
******************************************************************************/
// HTML template for intermediate image display
$template_display_media = <<<EOT
        <tr>
                <td align="center" class="display_media" nowrap="nowrap">
                        <table width="100%" cellspacing="2" cellpadding="0">
                                <tr>
                                        <td align="center" style="{SLIDESHOW_STYLE}">
                                                {IMAGE}
                                        </td>
                                </tr>
                        </table>
                </td>
            </tr>
            <tr>
                <td>
                        <table width="100%" cellspacing="2" cellpadding="0" class="tableb tableb_alternate">
                                        <tr>
                                                <td align="center">
                                                        {ADMIN_MENU}
                                                </td>
                                        </tr>
                        </table>


<!-- BEGIN img_desc -->
                        <table cellpadding="0" cellspacing="0" class="tableb tableb_alternate" width="100%">
<!-- BEGIN title -->
                                <tr>
                                        <td class="tableb tableb_alternate"><h1 class="pic_title">
                                                {TITLE}
                                        </h1></td>
                                </tr>
<!-- END title -->
<!-- BEGIN caption -->
                                <tr>
                                        <td class="tableb tableb_alternate"><h2 class="pic_caption">
                                                {CAPTION}
                                        </h2></td>
                                </tr>
<!-- END caption -->
                        </table>
<!-- END img_desc -->
                </td>
        </tr>

EOT;
/******************************************************************************
** Section <<<$template_display_media>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_image_rating>>> - START
******************************************************************************/
// HTML template for the image rating box
$template_image_rating = <<<EOT
<table align="center" width="{WIDTH}" cellspacing="1" cellpadding="0" class="maintable">
    <tr>
        <td colspan="6" class="tableh2" id="voting_title"><strong>{TITLE}</strong> {VOTES}</td>
    </tr>
    <tr id="rating_stars">
        <td class="tableb" id="star_rating"></td>
    </tr>
    <tr class="noscript">
      <td class="tableb" colspan="6" align="center">
        <noscript>
           {JS_WARNING}
        </noscript>
      </td>
    </tr>
</table>
EOT;
/******************************************************************************
** Section <<<$template_image_rating>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_image_rating_oldstyle>>> - START
******************************************************************************/
// HTML template for the image rating box (old-style)
$template_image_rating_oldstyle = <<<EOT
<table align="center" width="{WIDTH}" cellspacing="1" cellpadding="0" class="maintable">
    <tr>
        <td colspan="6" class="tableh2" id="voting_title"><strong>{TITLE}</strong> {VOTES}</td>
    </tr>
    <tr id="rating_stars">
        <td class="tableb" id="star_rating">
            <table width="100%">
                <tr>
                    {RATING_IMAGES}
                </tr>
            </table>
        </td>
    </tr>
</table>
EOT;
/******************************************************************************
** Section <<<$template_image_rating_oldstyle>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_image_comments>>> - START
******************************************************************************/
// HTML template for the display of comments
$template_image_comments = <<<EOT
<table align="center" width="{WIDTH}" cellspacing="1" cellpadding="0" class="maintable" border="0">
    <tr>
        <td>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="tableh2" nowrap="nowrap">
                        <strong>{MSG_AUTHOR_LNK}</strong>
                        <a name="comment{MSG_ID}"></a>&nbsp;
<!-- BEGIN ipinfo -->
                        ({IP})
<!-- END ipinfo -->
                    </td>
                    <td class="tableh2" align="right" width="100%">
<!-- BEGIN report_comment_button -->
                        <a href="report_file.php?pid={PID}&amp;msg_id={MSG_ID}&amp;what=comment" title="{REPORT_COMMENT_TITLE}">{REPORT_COMMENT_ICON}</a>
<!-- END report_comment_button -->
<!-- BEGIN pending approval -->
                        {PENDING_APPROVAL}
<!-- END pending approval -->
<!-- BEGIN buttons -->
                        <script type="text/javascript">
                            document.write('<a href="javascript:;" onclick="blocking(\'cbody{MSG_ID}\',\'\', \'block\'); blocking(\'cedit{MSG_ID}\',\'\', \'block\'); return false;" title="{EDIT_TITLE}">{EDIT_ICON}</a>');
                        </script>
                        <a href="delete.php?msg_id={MSG_ID}&amp;what=comment&amp;form_token={FORM_TOKEN}&amp;timestamp={TIMESTAMP}" onclick="return confirm('{CONFIRM_DELETE}');" title="{DELETE_TITLE}">{DELETE_ICON}</a>
<!-- END buttons -->
                    </td>
                    <td class="tableh2" align="right" nowrap="nowrap">
                        <span class="comment_date">[{MSG_DATE}]</span>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="tableb tableb_alternate">
            <div id="cbody{MSG_ID}" style="display:block">
                {MSG_BODY}
            </div>
            <div id="cedit{MSG_ID}" style="display:none">
<!-- BEGIN edit_box_smilies -->
                <form name="f{MSG_ID}" id="f{MSG_ID}" method="post" action="db_input.php">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td valign="top">
                                <input type="hidden" name="event" value="comment_update" />
                                <input type="hidden" name="msg_id" value="{MSG_ID}" />
                            </td>
                        </tr>
                        <tr>
                            <td width="80%">
                                <textarea cols="40" rows="2" class="textinput" name="msg_body" onselect="storeCaret_f{MSG_ID}(this);" onclick="storeCaret_f{MSG_ID}(this);" onkeyup="storeCaret_f{MSG_ID}(this);" style="width: 100%;">{MSG_BODY_RAW}</textarea>
                            </td>
                            <td class="tableb tableb_alternate"></td>
                            <td>
                                <input type="submit" class="button" name="submit" value="{OK}" />
                                <input type="hidden" name="form_token" value="{FORM_TOKEN}" />
                                <input type="hidden" name="timestamp" value="{TIMESTAMP}" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <img src="images/spacer.gif" width="1" height="2" border="0" alt="" />
                                <br />
                            </td>
                        </tr>
                    </table>
                </form>
                {SMILIES}
<!-- END edit_box_smilies -->
<!-- BEGIN edit_box_no_smilies -->
                <form name="f{MSG_ID}" id="f{MSG_ID}" method="POST" action="db_input.php">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>    
                                <input type="hidden" name="event" value="comment_update" />
                                <input type="hidden" name="msg_id" value="{MSG_ID}" />
                            </td>
                        </tr>
                        <tr>
                            <td width="100%">
                                <textarea cols="40" rows="2" class="textinput" name="msg_body" style="width: 100%;">{MSG_BODY_RAW}</textarea>
                            </td>
                            <td class="tableb tableb_alternate"></td>
                            <td>
                                <input type="submit" class="button" name="submit" value="{OK}" />
                                <input type="hidden" name="form_token" value="{FORM_TOKEN}" />
                                <input type="hidden" name="timestamp" value="{TIMESTAMP}" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <img src="images/spacer.gif" width="1" height="2" border="0" alt="" />
                                <br />
                            </td>
                        </tr>
                    </table>
                </form>
<!-- END edit_box_no_smilies -->
            </div>
        </td>
    </tr>
</table>
EOT;
/******************************************************************************
** Section <<<$template_image_comments>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_add_your_comment>>> - START
******************************************************************************/
$template_add_your_comment = <<<EOT
        <form method="post" name="post" id="post" action="db_input.php">
                <table align="center" width="{WIDTH}" cellspacing="1" cellpadding="0" class="maintable">
                        <tr>
                                        <td width="100%" class="tableh2">{ADD_YOUR_COMMENT}{HELP_ICON}</td>
                        </tr>
                        <tr>
                <td colspan="1">
                        <table width="100%" cellpadding="0" cellspacing="0">

<!-- BEGIN user_name_input -->
                                                        <tr>
                               <td class="tableb tableb_alternate">
                                        {NAME}
                                </td>
                                <td class="tableb tableb_alternate">
                                        <input type="text" class="textinput" name="msg_author" size="10" maxlength="20" value="{USER_NAME}" onclick="if (this.value == '{DEFAULT_USERNAME}') this.value = '';" onkeyup="if (this.value == '{DEFAULT_USERNAME}') this.value = '';" />
                                </td>
<!-- END user_name_input -->
<!-- BEGIN input_box_smilies -->
                                <td class="tableb tableb_alternate">
                                {COMMENT}
                                </td>
                                <td width="100%" class="tableb tableb_alternate">
                                <input type="text" class="textinput" id="message" name="msg_body" onselect="storeCaret_post(this);" onclick="storeCaret_post(this);" onkeyup="storeCaret_post(this);" maxlength="{MAX_COM_LENGTH}" style="width: 100%;" />
                                </td>
<!-- END input_box_smilies -->
<!-- BEGIN input_box_no_smilies -->
                                <td class="tableb tableb_alternate">
                                {COMMENT}
                                </td>
                                <td width="100%" class="tableb tableb_alternate">
                                <input type="text" class="textinput" id="message" name="msg_body"  maxlength="{MAX_COM_LENGTH}" style="width: 100%;" />
                                </td>
<!-- END input_box_no_smilies -->
<!-- BEGIN submit -->
                                <td class="tableb tableb_alternate">
                                <input type="hidden" name="event" value="comment" />
                                <input type="hidden" name="pid" value="{PIC_ID}" />
                                <button type="submit" class="button" name="submit" value="{OK}"  onclick="return notDefaultUsername(this.form, '{DEFAULT_USERNAME}', '{DEFAULT_USERNAME_MESSAGE}');">{OK_ICON}{OK}</button>
                                <input type="hidden" name="form_token" value="{FORM_TOKEN}" />
                                <input type="hidden" name="timestamp" value="{TIMESTAMP}" />
                                </td>
<!-- END submit -->
                                                        </tr>
<!-- BEGIN comment_captcha -->
                                                        <tr>
                                <td class="tableb tableb_alternate" colspan="3">
                                  {CONFIRM}
                                </td>
                                <td class="tableb tableb_alternate" colspan="2">
                                  <input type="text" name="confirmCode" size="5" maxlength="5" class="textinput" />
                                  <img src="captcha.php" align="middle" border="0" alt="" />
                                </td>
                                                        </tr>
<!-- END comment_captcha -->
                        </table>
                </td>
        </tr>
<!-- BEGIN smilies -->
        <tr>
                <td width="100%" class="tableb tableb_alternate">
                        {SMILIES}
                </td>
        </tr>
<!-- END smilies -->
<!-- BEGIN login_to_comment -->
        <tr>
                                <td class="tableb tableb_alternate" colspan="2">
                                  {LOGIN_TO_COMMENT}
                                </td>
        </tr>
<!-- END login_to_comment -->
                </table>
        </form>
EOT;
/******************************************************************************
** Section <<<$template_add_your_comment>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_cpg_die>>> - START
******************************************************************************/
// HTML template used by the cpg_die function
$template_cpg_die = <<<EOT
                    <div class="{CSS_CLASS}">
                        <h2>{HEADER_TXT}</h2>
                        <span class="cpg_user_message">{MESSAGE}</span>
<!-- BEGIN file_line -->
                        <br />
                        <br />
                        {FILE_TXT}{FILE} - {LINE_TXT}{LINE}
<!-- END file_line -->
<!-- BEGIN output_buffer -->
                        <br />
                        <br />
                        <div align="left">
                                {OUTPUT_BUFFER}
                        </div>
<!-- END output_buffer -->
                        <br /><br />
                    </div>

EOT;
/******************************************************************************
** Section <<<$template_cpg_die>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_msg_box>>> - START
******************************************************************************/
// HTML template used by the msg_box function
$template_msg_box = <<<EOT

        <div class="{CLASS}">
            <span class="cpg_user_message">{MESSAGE}</span>
<!-- BEGIN button -->
            <br />&nbsp;
            <br />
            <span class="admin_menu">
                    <a href="{LINK}">{TEXT}</a>
            </span>
<!-- END button -->
        </div>
EOT;
/******************************************************************************
** Section <<<$template_msg_box>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_ecard>>> - START
******************************************************************************/
// HTML template for e-cards
$template_ecard = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{LANG_DIR}">
<head>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
<title>{TITLE}</title>
</head>
<body bgcolor="#FFFFFF" text="#0F5475" link="#0F5475" vlink="#0F5475" alink="#0F5475">
<br />
<p align="center"><a href="{VIEW_ECARD_TGT}">{VIEW_ECARD_LNK}</a></p>
<table border="0" cellspacing="0" cellpadding="1" align="center">
  <tr>
    <td bgcolor="#000000">
      <table border="0" cellspacing="0" cellpadding="10" bgcolor="#ffffff">
        <tr>
          <td valign="top">
           <a href="{VIEW_MORE_TGT}displayimage.php?pid={PID}">{PIC_MARKUP}</a>
                                         <br />
                                         <div align="center">
                                                 <h2>{PIC_TITLE}</h2>
                                         </div>

          </td>
          <td valign="top" width="300">
            <div align="right"><img src="{URL_PREFIX}images/stamp.gif" border="0" alt="" /></div>
            <br />
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:2.0em;font-weight:bold;">{GREETINGS}</span>
            <br />
            <br />
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;font-weight:bold;">{MESSAGE}</span>
            <br />
            <br />
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;font-weight:bold;">{SENDER_NAME}</span>
            (<a href="mailto:{SENDER_EMAIL}"><span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-weight:bold;">{SENDER_EMAIL}</span></a>)
          </td>
        </tr>
                <tr>
                        <td colspan="2">
                                {PIC_CAPTION}
                        </td>
                </tr>
      </table>
    </td>
  </tr>
</table>
<p align="center"><a href="{VIEW_MORE_TGT}">{VIEW_MORE_LNK}</a></p>
</body>
</html>
EOT;
/******************************************************************************
** Section <<<$template_ecard>>> - END
******************************************************************************/




/******************************************************************************
** Section <<<$template_ecard_plaintext>>> - START
******************************************************************************/
// plain-text template for e-cards (as fallback for clients that can't display html-formatted mails)
$template_ecard_plaintext = <<<EOT
{TITLE}
=========================================

{VIEW_ECARD_LNK_PLAINTEXT}:
{VIEW_ECARD_TGT}

{GREETINGS}


{PLAINTEXT_MESSAGE}

{SENDER_NAME} ({SENDER_EMAIL})

-----------------------------------------
{VIEW_MORE_LNK}:
{VIEW_MORE_TGT}
EOT;
/******************************************************************************
** Section <<<$template_ecard_plaintext>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_report>>> - START
******************************************************************************/
// HTML template for report
$template_report = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{LANG_DIR}">
<head>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
<title>{TITLE}</title>
</head>
<body bgcolor="#FFFFFF" text="#0F5475" link="#0F5475" vlink="#0F5475" alink="#0F5475">
<br />
<p align="center"><a href="{VIEW_REPORT_TGT}">{VIEW_REPORT_LNK}</a></p>
<table border="0" cellspacing="0" cellpadding="1" align="center">
  <tr>
    <td bgcolor="#000000">
      <table border="0" cellspacing="0" cellpadding="10" bgcolor="#ffffff">
        <tr>
          <td valign="top">
           <a href="{PIC_TGT}"><img src="{PIC_URL}" border="1" alt="" /></a><br />
          </td>
          <td valign="top" width="200">
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:2.0em;font-weight:bold;">{SUBJECT}</span>
            <br />
                                                <br />
                                                {REASON}
            <p>
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{MESSAGE}</span>
            </p>
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_NAME}</span>
            (<a href="mailto:{SENDER_EMAIL}"><span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_EMAIL}</span></a>)
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p align="center"><a href="{VIEW_MORE_TGT}">{VIEW_MORE_LNK}</a></p>
</body>
</html>
EOT;
/******************************************************************************
** Section <<<$template_report>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_report_plaintext>>> - START
******************************************************************************/
// plain-text template for reports (as fallback for clients that can't display html-formatted mails)
$template_report_plaintext = <<<EOT
{TITLE}
=========================================

{VIEW_REPORT_LNK_PLAINTEXT}:
{VIEW_REPORT_TGT}


{SUBJECT}

{REASON}

{PLAINTEXT_MESSAGE}

{SENDER_NAME} ({SENDER_EMAIL})

-----------------------------------------
{VIEW_MORE_LNK}:
{VIEW_MORE_TGT}
EOT;
/******************************************************************************
** Section <<<$template_report_plaintext>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_report_comment>>> - START
******************************************************************************/
// HTML template for displaying a reported comment
$template_report_comment = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{LANG_DIR}">
<head>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
<title>{TITLE}</title>
</head>
<body bgcolor="#FFFFFF" text="#0F5475" link="#0F5475" vlink="#0F5475" alink="#0F5475">
<br />
<p align="center"><a href="{VIEW_REPORT_TGT}">{VIEW_REPORT_LNK}</a></p>
<table border="0" cellspacing="0" cellpadding="1" align="center">
  <tr>
    <td bgcolor="#000000">
      <table border="0" cellspacing="0" cellpadding="10" bgcolor="#FFFFFF">
        <tr>
          <td valign="top">
           {COMMENT}
           <p align="center"><a href="{COMMENT_TGT}">{COMMENT_LNK}</a></p>
          </td>
        </tr>
        <tr>
          <td valign="top">
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:2.0em;font-weight:bold;">{SUBJECT}</span></strong>
                                                <br />
              {REASON}
            <br />
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{MESSAGE}</span>
            <br />
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_NAME}</span>
            (<a href="mailto:{SENDER_EMAIL}"><span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_EMAIL}</span></a>)
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p align="center"><a href="{VIEW_MORE_TGT}">{VIEW_MORE_LNK}</a></p>
</body>
</html>
EOT;
/******************************************************************************
** Section <<<$template_report_comment>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_report_comment_email>>> - START
******************************************************************************/
// plain-text template for reports (as fallback for clients that can't display html-formatted mails)
$template_report_comment_email = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{LANG_DIR}">
<head>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
<title>{TITLE}</title>
</head>
<body bgcolor="#FFFFFF" text="#0F5475" link="#0F5475" vlink="#0F5475" alink="#0F5475">
<p><a href="{VIEW_REPORT_TGT}">{VIEW_COMMENT_LNK}</a></p>
                <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:2.0em;font-weight:bold;">{SUBJECT}</span>
                <br />
                        {REASON}
                <br />
                <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{MESSAGE}</span>
                <br />
                <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_NAME}</span>
                (<a href="mailto:{SENDER_EMAIL}"><span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_EMAIL}</span></a>)
<p><a href="{VIEW_MORE_TGT}">{VIEW_MORE_LNK}</a></p>
</body>
</html>
EOT;
/******************************************************************************
** Section <<<$template_report_comment_email>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_zipfile_plaintext>>> - START
******************************************************************************/
// plain-text template for readme file that is being added to zipdownload
$template_zipfile_plaintext = <<<EOT
{USERNAME}:
=========================================
{GAL_NAME} - {GAL_DESCRIPTION}
{GAL_URL}
=========================================
{DATE}
=========================================
{COPYRIGHTS}

EOT;
/******************************************************************************
** Section <<<template_zipfile_plaintext>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_tab_display>>> - START
******************************************************************************/
// Template used for tabbed display
$template_tab_display = array(
    'left_text'         => '<td width="100%%" align="left" valign="middle" class="tableh1" style="white-space: nowrap">{LEFT_TEXT}</td>' . $LINEBREAK,
    'tab_header'        => '',
    'tab_trailer'       => '',
    'active_tab'        => '<td align="center" valign="middle" class="tableb tableb_alternate">%d</td>',
    'inactive_tab'      => '<td align="center" valign="middle" class="navmenu"><a href="{LINK}">%d</a></td>' . $LINEBREAK,
    'nav_tab'           => '<td align="center" valign="middle" class="navmenu"><a href="{LINK}">%s</a></td>' . $LINEBREAK,
    'nav_tab_nolink'    => '<td align="center" valign="middle" class="navmenu">%s</td>' . $LINEBREAK,
    'allpages_dropdown' => '<td align="center" valign="middle" style="white-space: nowrap; padding-right: 10px;" class="navmenu">%s</td>' . $LINEBREAK,
    'page_gap'          => '<td align="center" valign="middle" class="navmenu">-</td>' . $LINEBREAK,
    'tab_spacer'        => '<td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>' . $LINEBREAK,
    'page_link'         => '{LINK}',
);
/******************************************************************************
** Section <<<$template_tab_display>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_vanity>>> - START
******************************************************************************/
// Template used for Vanity Footer
$template_vanity = <<<EOT
<div id="vanity">
      <a id="v_php" href="http://www.php.net/" rel="external"></a>
      <a id="v_mysql" href="http://www.mysql.com/" rel="external"></a>
      <a id="v_xhtml" href="http://validator.w3.org/check/referer" rel="external"></a>
      <a id="v_css" href="http://jigsaw.w3.org/css-validator/check/referer" rel="external"></a>
</div>
EOT;
/******************************************************************************
** Section <<<$template_vanity>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<pageheader>>> - START
******************************************************************************/
function pageheader($section, $meta = '')
{
    global $CONFIG, $THEME_DIR;
    global $template_header, $lang_charset, $lang_text_dir;

    $custom_header = cpg_get_custom_include($CONFIG['custom_header_path']);

    $charset = ($CONFIG['charset'] == 'language file') ? $lang_charset : $CONFIG['charset'];

    header('P3P: CP="CAO DSP COR CURa ADMa DEVa OUR IND PHY ONL UNI COM NAV INT DEM PRE"');
    header("Content-Type: text/html; charset=$charset");
    user_save_profile();

    $template_vars = array(
        '{LANG_DIR}' => $lang_text_dir,
        '{TITLE}' => theme_page_title($section),
        '{CHARSET}' => $charset,
        '{META}' => $meta,
        '{GAL_NAME}' => $CONFIG['gallery_name'],
        '{GAL_DESCRIPTION}' => $CONFIG['gallery_description'],
        '{SYS_MENU}' => theme_main_menu('sys_menu'),
        '{SUB_MENU}' => theme_main_menu('sub_menu'),
        '{ADMIN_MENU}' => theme_admin_mode_menu(),
        '{CUSTOM_HEADER}' => $custom_header,
        '{JAVASCRIPT}' => theme_javascript_head(),
        '{MESSAGE_BLOCK}' => theme_display_message_block(),
    );
    
    $template_vars = CPGPluginAPI::filter('theme_pageheader_params', $template_vars);
    echo template_eval($template_header, $template_vars);

    // Show various admin messages
    adminmessages();
}
/******************************************************************************
** Section <<<pageheader>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<pageheader_mini>>> - START
******************************************************************************/
function pageheader_mini($section, $javascript=false)
{
    global $CONFIG;
    global $lang_charset, $lang_text_dir;

    $custom_header = cpg_get_custom_include($CONFIG['custom_header_path']);

    $charset = ($CONFIG['charset'] == 'language file') ? $lang_charset : $CONFIG['charset'];

    header('P3P: CP="CAO DSP COR CURa ADMa DEVa OUR IND PHY ONL UNI COM NAV INT DEM PRE"');
    header("Content-Type: text/html; charset=$charset");
    user_save_profile();

    if ($javascript) {
        $js = theme_javascript_head();
    } else {
        $js = '';
    }

    echo <<< EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="$lang_text_dir">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=$charset" />
        <meta http-equiv="Pragma" content="no-cache" />
        <title>$section</title>
        <link rel="stylesheet" href="css/coppermine.css" type="text/css" />
        <link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" />
        $js
    </head>
    <body>

EOT;
}
/******************************************************************************
** Section <<<pageheader_mini>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<pagefooter>>> - START
******************************************************************************/
// Function for writing a pagefooter
function pagefooter()
{
    //global $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_SERVER_VARS;
    global $USER, $USER_DATA, $CONFIG, $time_start, $query_stats, $queries;
    global $template_footer;

    $custom_footer = cpg_get_custom_include($CONFIG['custom_footer_path']);

    if ($CONFIG['debug_mode']==1 || ($CONFIG['debug_mode']==2 && GALLERY_ADMIN_MODE)) {
        cpg_debug_output();
    }

    $template_vars = array(
        '{GAL_NAME}' => $CONFIG['gallery_name'],
        '{GAL_DESCRIPTION}' => $CONFIG['gallery_description'],
        '{SYS_MENU}' => theme_main_menu('sys_menu'),
        '{SUB_MENU}' => theme_main_menu('sub_menu'),
        '{ADMIN_MENU}' => theme_admin_mode_menu(),
        '{CUSTOM_HEADER}' => $custom_header,
        '{JAVASCRIPT}' => theme_javascript_head(),
        '{CUSTOM_FOOTER}' => $custom_footer,
        '{VANITY}' => (defined('THEME_IS_XHTML10_TRANSITIONAL')) ? theme_vanity() : '',
        '{CREDITS}' => theme_credits(),
    );

    echo template_eval($template_footer, $template_vars);
}
/******************************************************************************
** Section <<<pagefooter>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<pagefooter_mini>>> - START
******************************************************************************/
function pagefooter_mini()
{
    echo <<< EOT

    </body>
</html>

EOT;
}
/******************************************************************************
** Section <<<pagefooter_mini>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_javascript_head>>> - START
******************************************************************************/
// Function for the JavaScript inside the <head>-section
function theme_javascript_head()
{
    global $JS, $LINEBREAK;

    $return = '';
    
    // Check if we have any variables being set using set_js_vars function
    if (!empty($JS['vars'])) {
        // Convert the $JS['vars'] array to json object string
        $json_vars = json_encode($JS['vars']);
        // Output the json object
        $return = <<< EOT
<script type="text/javascript">
/* <![CDATA[ */
    var js_vars = $json_vars;
/* ]]> */
</script>

EOT;
    }

    // Check if we have any js includes
    if (!empty($JS['includes'])) {
        // Bring the jquery core library to the very top of the list 
        if (in_array('js/jquery-1.4.2.js', $JS['includes']) == TRUE) {
            $key = array_search('js/jquery-1.4.2.js', $JS['includes']);
            unset($JS['includes'][$key]);
            array_unshift($JS['includes'], 'js/jquery-1.4.2.js');
        }
        $JS['includes'] = CPGPluginAPI::filter('javascript_includes',$JS['includes']);
        // Include all the files which were set using js_include() function
        foreach ($JS['includes'] as $js_file) {
            $return .= js_include($js_file, true) . $LINEBREAK;
        }
    }
    
    return $return;
}
/******************************************************************************
** Section <<<theme_javascript_head>>> - END
******************************************************************************/




/******************************************************************************
** Section <<<theme_cpg_die>>> - START
******************************************************************************/
// Function for showing error messages
function theme_cpg_die($msg_code, $msg_text, $msg_string, $css_class = 'cpg_message_info', $error_file, $error_line, $output_buffer, $ob)
{
    global $CONFIG, $lang_cpg_die, $template_cpg_die;

    $params = array(
            '{MESSAGE}' => $msg_text,
            '{FILE_TXT}' => $lang_cpg_die['file'],
            '{FILE}' => $error_file,
            '{LINE_TXT}' => $lang_cpg_die['line'],
            '{LINE}' => $error_line,
            '{OUTPUT_BUFFER}' => $ob,
            '{HEADER_TXT}' => $msg_string,
            '{CSS_CLASS}' => $css_class,
    );

    if (!($CONFIG['debug_mode'] == 1 || ($CONFIG['debug_mode'] == 2 && GALLERY_ADMIN_MODE))) {
        template_extract_block($template_cpg_die, 'file_line');
    }
    template_extract_block($template_cpg_die, 'output_buffer');

    pageheader($msg_string);
    echo "<!-- cpg_die -->";
    echo template_eval($template_cpg_die, $params);
    pagefooter();
}
/******************************************************************************
** Section <<<theme_cpg_die>>> - END
******************************************************************************/




/******************************************************************************
** Section <<<theme_breadcrumb>>> - START
******************************************************************************/
// Function for building the breadcrumb
// Inputs:  $breadcrumb_links, $BREADCRUMB_TEXTS
// Outputs: $breadcrumb, $BREADCRUMB_TEXT
function theme_breadcrumb($breadcrumb_links, $BREADCRUMB_TEXTS, &$breadcrumb, &$BREADCRUMB_TEXT)
{
    $breadcrumb = '';
    $BREADCRUMB_TEXT = '';
    foreach ($breadcrumb_links as $breadcrumb_link) {
        $breadcrumb .= ' > ' . $breadcrumb_link;
    }
    foreach ($BREADCRUMB_TEXTS as $BREADCRUMB_TEXT_elt) {
        $BREADCRUMB_TEXT .= ' > ' . $BREADCRUMB_TEXT_elt;
    }
    // We remove the first ' > '
    $breadcrumb = substr_replace($breadcrumb,'', 0, 3);
    $BREADCRUMB_TEXT = substr_replace($BREADCRUMB_TEXT,'', 0, 3);
}
/******************************************************************************
** Section <<<theme_breadcrumb>>> - END
******************************************************************************/




/******************************************************************************
** Section <<<theme_msg_box>>> - START
******************************************************************************/
// Function for displaying a message-box-like table
function theme_msg_box($title, $msg_text, $css_class = 'cpg_message_info', $button_text, $button_link)
{
    global $template_msg_box;

    if (!$button_text && stripos($template_msg_box, 'button') != false) {
        template_extract_block($template_msg_box, 'button');
    }
    $params = array(
            '{MESSAGE}' => $msg_text,
            '{LINK}' => $button_link,
            '{TEXT}' => $button_text,
            '{CLASS}' => $css_class
    );

    echo template_eval($template_msg_box, $params);
}
/******************************************************************************
** Section <<<theme_msg_box>>> - END
******************************************************************************/




/******************************************************************************
** Section <<<theme_create_tabs>>> - START
******************************************************************************/
// Function for creating tabs showing multiple pages
function theme_create_tabs($items, $curr_page, $total_pages, $template)
{
    // Tabs do not take into account $lang_text_dir for RTL languages
    global $CONFIG, $lang_create_tabs;

    // Gallery Configuration setting for maximum number of tabs to display
    $maxTab = $CONFIG['max_tabs'];

    if ($total_pages == '') {
        $total_pages = $curr_page;
    }

    if (array_key_exists('page_link',$template)) {
        // Pass through links to tabs with links
        $template['nav_tab']      = strtr($template['nav_tab'], array('{LINK}' => $template['page_link']));
        $template['inactive_tab'] = strtr($template['inactive_tab'], array('{LINK}' => $template['page_link']));
    }

    // Left text, usually shows statistics
    $tabs = sprintf($template['left_text'], $items, $total_pages);
    if (($total_pages == 1)) {
        return $tabs;
    }

    // Header for tabs
    $tabs .= $template['tab_header'];

    if ($CONFIG['tabs_dropdown']) {
        // Dropdown list for all pages
        $tabs_dropdown_js = <<< EOT
            <span id="tabs_dropdown_span"></span>
            <script type="text/javascript"><!--
                $('#tabs_dropdown_span').html('{$lang_create_tabs['jump_to_page']} <select id="tabs_dropdown_select" onchange="if (this.options[this.selectedIndex].value != -1) { window.location.href = this.options[this.selectedIndex].value; }"><\/select>');
                for (page = 1; page <= $total_pages; page++) {
                    var page_link = '{$template['page_link']}';
                    var selected = '';
                    if (page == $curr_page) {
                        selected = ' selected="selected"';
                    }
                    $('#tabs_dropdown_select').append('<option value="' + page_link.replace( /%d/, page ) + '"' + selected + '>' + page + '<\/option>');
                }
         --></script>
EOT;
        $tabs .= sprintf($template['allpages_dropdown'], $tabs_dropdown_js);
    }

    // Calculate which pages to show on tabs, limited by the maximum number of tabs (set on Gallery Configuration panel)
    if ($total_pages > $maxTab) {
        $start = max(2, $curr_page - floor(($maxTab - 2) / 2));
        $start = min($start, $total_pages - $maxTab + 2);
        $end = $start + $maxTab - 3;
    } else {
        $start = 2;
        $end = $total_pages - 1;
    }

    // Previous page tab
    if ($curr_page != ($start - 1)) {
        $tabs .= sprintf($template['nav_tab'], $curr_page-1, cpg_fetch_icon('tab_left',0,$lang_create_tabs['previous']));
    } else {
        // A previous tab with link is not needed.
        // If you want to show a disabled previous tab,
        //   create an image 'left_inactive.png', put it into themes/YOUR_THEME/images/icons/,
        //   then uncomment the line below.
        // $tabs .= sprintf($template['nav_tab_nolink'], cpg_fetch_icon('left_inactive',0,$lang_create_tabs['previous']));
    }

    // Page 1 tab
    if ($curr_page == 1) {
        $tabs .= sprintf($template['active_tab'], 1);
    } else {
        $tabs .= sprintf($template['inactive_tab'], 1, 1);
    }

    // Gap between page 1 and middle block of tabs
    if ($start > 2) {
        $tabs .= $template['page_gap'];
    }
    $page_gap = ($template['page_gap'] != '');

    // Middle block of tabs
    for ($page = $start ; $page <= $end; $page++) {
        if (!$page_gap || ($page_gap && ($page != $start))) {
            $tabs .= $template['tab_spacer'];
        }
        if ($page == $curr_page) {
            $tabs .= sprintf($template['active_tab'], $page);
        } else {
            $tabs .= sprintf($template['inactive_tab'], $page, $page);
        }
    }

    // Gap between middle block of tabs and last page
    if ($end < $total_pages - 1) {
        $tabs .= $template['page_gap'];
    }

    // Last page tab
    if (!$page_gap) {
        $tabs .= $template['tab_spacer'];
    }
    if ($total_pages > 1) {
        if ($curr_page == $total_pages) {
            $tabs .= sprintf($template['active_tab'], $total_pages);
        } else {
            $tabs .= sprintf($template['inactive_tab'], $total_pages, $total_pages);
        }
    }

    // Next page tab
    if ($curr_page != $total_pages) {
        $tabs .= sprintf($template['nav_tab'], $curr_page + 1, cpg_fetch_icon('tab_right',0,$lang_create_tabs['next']));
    } else {
        // A next tab with link is not needed.
        // If you want to show a disabled next tab,
        //   create an image 'right_inactive.png', put it into themes/YOUR_THEME/images/icons/,
        //   then uncomment the line below.
        // $tabs .= sprintf($template['nav_tab_nolink'], cpg_fetch_icon('right_inactive',0,$lang_create_tabs['next']));
    }

    // Trailer for tabs
    $tabs .= $template['tab_trailer'];

    return $tabs;
}
/******************************************************************************
** Section <<<theme_create_tabs>>> - END
******************************************************************************/


/******************************************************************************
** Section <<<theme_credits>>> - START
******************************************************************************/

/******************************************************************************
// Function for the credits-section
In previous versions of Coppermine the "Powered by Coppermine" used to be
obfuscated to make it hard for non-coders to remove the tag. The reason behind
this was an additional license add-on that disallowed users to change the line.
The dev team has reviewed this policy for cpg1.5.x and decided that end users
ARE allowed to change or remove the line in legal terms.
HOWEVER: We have a forum policy for the support board instead: support will
only be given for galleries that show the "Powered by Coppermine" tag
unobfuscated.
Before removing the credits, please consider this as well:
Coppermine is free software, the dev team ASKS you to keep the footer intact.
We're convinced that you should give credit where credit is due. So please think
twice before you decide to remove the tag.
******************************************************************************/
function theme_credits() {
    $return = <<< EOT

<div class="footer" align="center" style="padding:10px;display:block;visibility:visible; font-family: Verdana,Arial,sans-serif;">Powered by <a href="http://coppermine-gallery.net/" title="Coppermine Photo Gallery" rel="external">Coppermine Photo Gallery</a></div>
EOT;
    return $return;
}
/******************************************************************************
** Section <<<theme_credits>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<starttable>>> - START
******************************************************************************/
// Function to start a 'standard' table
function starttable($width = '-1', $title = '', $title_colspan = '1', $zebra_class = '', $return = false)
{
    global $CONFIG;

    if ($width == '-1') $width = $CONFIG['picture_table_width'];
    if ($width == '100%') $width = $CONFIG['main_table_width'];
    $text = <<<EOT

<!-- Start standard table -->
<table align="center" width="$width" cellspacing="1" cellpadding="0" class="maintable $zebra_class">

EOT;
    if ($title) {
        $text .= <<<EOT
        <tr>
                <td class="tableh1" colspan="$title_colspan">$title</td>
        </tr>

EOT;
    }
    if (!$return) {
        echo $text;
    } else {
        return $text;
    }
}
/******************************************************************************
** Section <<<starttable>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<endtable>>> - START
******************************************************************************/
function endtable($return = false)
{
    $text = <<<EOT
</table>
<!-- End standard table -->

EOT;
    if (!$return) {
        echo $text;
    } else {
        return $text;
    }
}
/******************************************************************************
** Section <<<endtable>>> - END
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



/******************************************************************************
** Section <<<theme_admin_mode_menu>>> - START
******************************************************************************/
function theme_admin_mode_menu()
{
    global $cat;
    global $lang_gallery_admin_menu, $lang_user_admin_menu, $lang_cat_list, $lang_common;
    global $template_gallery_admin_menu, $template_user_admin_menu;
    global $CONFIG;
    global $THEME_DIR;

    $cat_l = isset($cat) ? "?cat=$cat" : '';

    static $admin_menu = '';

    // Populate the admin menu only if empty to avoid template errors
    if ($admin_menu == '') {

        $admin_menu = '<!-- -->';  // set in case an error occurs here; otherwise, theme_cpg_die will call this function and crash

        if (GALLERY_ADMIN_MODE) {

            if ($CONFIG['log_ecards'] == 0) {
                template_extract_block($template_gallery_admin_menu, 'log_ecards');
            }

            if (cpg_get_pending_approvals() == 0) {
                 template_extract_block($template_gallery_admin_menu, 'admin_approval');
            }

            // Determine the documentation target
            $available_doc_folders_array = form_get_foldercontent('docs/', 'folder', '', array('images', 'js', 'style', '.svn'));
            // Query the languages table
            $help_lang = '';
            $results = cpg_db_query("SELECT lang_id, abbr FROM {$CONFIG['TABLE_LANGUAGE']} WHERE available='YES' AND enabled='YES'");
            while ($row = mysql_fetch_array($results)) {
                if ($CONFIG['lang'] == $row['lang_id']) {
                    $help_lang = $row['abbr'];
                }
            } // while
            mysql_free_result($results);
            unset($row);
            if ($help_lang == '') {
                $help_lang = 'en';
            }

            // do the docs exist on the webserver?
            if (file_exists('docs/'.$help_lang.'/index.htm') == true) {
                $documentation_href = 'docs/'.$help_lang.'/index.htm';
            } else {
                $documentation_href = 'http://documentation.coppermine-gallery.net/';
            }

            if (!$CONFIG['enable_plugins']) {
                template_extract_block($template_gallery_admin_menu, 'plugin_manager');
            }
            if (!$CONFIG['log_mode']) {
                template_extract_block($template_gallery_admin_menu, 'view_log_files');
            }
            if (!$CONFIG['hit_details']) {
                template_extract_block($template_gallery_admin_menu, 'overall_stats');
            }
            if (!$CONFIG['clickable_keyword_search']) {
                template_extract_block($template_gallery_admin_menu, 'keyword_manager');
            }
            if (!$CONFIG['read_exif_data']) {
                template_extract_block($template_gallery_admin_menu, 'exif_manager');
            }
            if ($CONFIG['display_coppermine_news'] != 0) {
                template_extract_block($template_gallery_admin_menu, 'show_news');
            }
            if ($CONFIG['bridge_enable'] != 0) {
                template_extract_block($template_gallery_admin_menu, 'banmgr');
                template_extract_block($template_gallery_admin_menu, 'admin_profile');
            }

            $param = array('{CATL}' => $cat_l,
                '{UPL_APP_TITLE}' => $lang_gallery_admin_menu['upl_app_title'],
                '{UPL_APP_LNK}' => $lang_gallery_admin_menu['upl_app_lnk'],
                '{UPL_APP_ICO}' => cpg_fetch_icon('file_approval', 1),
                '{ADMIN_TITLE}' => $lang_gallery_admin_menu['admin_title'],
                '{ADMIN_LNK}' => $lang_gallery_admin_menu['admin_lnk'],
                '{ADMIN_ICO}' => cpg_fetch_icon('config', 1),
                '{ALBUMS_TITLE}' => $lang_gallery_admin_menu['albums_title'],
                '{ALBUMS_LNK}' => $lang_gallery_admin_menu['albums_lnk'],
                '{ALBUMS_ICO}' => cpg_fetch_icon('alb_mgr', 1),
                '{CATEGORIES_TITLE}' => $lang_gallery_admin_menu['categories_title'],
                '{CATEGORIES_LNK}' => $lang_gallery_admin_menu['categories_lnk'],
                '{CATEGORIES_ICO}' => cpg_fetch_icon('cat_mgr', 1),
                '{USERS_TITLE}' => $lang_gallery_admin_menu['users_title'],
                '{USERS_LNK}' => $lang_gallery_admin_menu['users_lnk'],
                '{USERS_ICO}' => cpg_fetch_icon('user_mgr', 1),
                '{GROUPS_TITLE}' => $lang_gallery_admin_menu['groups_title'],
                '{GROUPS_LNK}' => $lang_gallery_admin_menu['groups_lnk'],
                '{GROUPS_ICO}' => cpg_fetch_icon('groups_mgr', 1),
                '{COMMENTS_TITLE}' => $lang_gallery_admin_menu['comments_title'],
                '{COMMENTS_LNK}' => $lang_gallery_admin_menu['comments_lnk'],
                '{COMMENTS_ICO}' => cpg_fetch_icon('comment_approval', 1),
                '{SEARCHNEW_TITLE}' => $lang_gallery_admin_menu['searchnew_title'],
                '{SEARCHNEW_LNK}' => $lang_gallery_admin_menu['searchnew_lnk'],
                '{SEARCHNEW_ICO}' => cpg_fetch_icon('searchnew', 1),
                '{FILES_TITLE}' => $lang_cat_list['pictures'],
                '{FILES_LNK}' => $lang_cat_list['pictures'],
                '{FILES_ICO}' => cpg_fetch_icon('searchnew', 1),
                '{INFO_TITLE}' => $lang_common['information'],
                '{INFO_LNK}' => $lang_common['information'],
                '{INFO_ICO}' => cpg_fetch_icon('info', 1),
                '{MY_PROF_TITLE}' => $lang_user_admin_menu['my_prof_title'],
                '{MY_PROF_LNK}' => $lang_user_admin_menu['my_prof_lnk'],
                '{MY_PROF_ICO}' => cpg_fetch_icon('my_profile', 1),
                '{UTIL_TITLE}' => $lang_gallery_admin_menu['util_title'],
                '{UTIL_LNK}' => $lang_gallery_admin_menu['util_lnk'],
                '{UTIL_ICO}' => cpg_fetch_icon('util', 1),
                '{BAN_TITLE}' => $lang_gallery_admin_menu['ban_title'],
                '{BAN_LNK}' => $lang_gallery_admin_menu['ban_lnk'],
                '{BAN_ICO}' => cpg_fetch_icon('ban_user', 1),
                '{DB_ECARD_TITLE}' => $lang_gallery_admin_menu['db_ecard_title'],
                '{DB_ECARD_LNK}' => $lang_gallery_admin_menu['db_ecard_lnk'],
                '{DB_ECARD_ICO}' => cpg_fetch_icon('ecard_review', 1),
                '{PICTURES_TITLE}' => $lang_gallery_admin_menu['pictures_title'],
                '{PICTURES_LNK}' => $lang_gallery_admin_menu['pictures_lnk'],
                '{PICTURES_ICO}' => cpg_fetch_icon('picture_sort', 1),
                '{DOCUMENTATION_HREF}' => $documentation_href,
                '{DOCUMENTATION_TITLE}' => $lang_gallery_admin_menu['documentation_title'],
                '{DOCUMENTATION_LNK}' => $lang_gallery_admin_menu['documentation_lnk'],
                '{DOCUMENTATION_ICO}' => cpg_fetch_icon('documentation', 1),
                '{PLUGINMGR_TITLE}' => $lang_gallery_admin_menu['pluginmgr_title'],
                '{PLUGINMGR_LNK}' => $lang_gallery_admin_menu['pluginmgr_lnk'],
                '{PLUGINMGR_ICO}' => cpg_fetch_icon('plugin_mgr', 1),
                '{BRIDGEMGR_TITLE}' => $lang_gallery_admin_menu['bridgemgr_title'],
                '{BRIDGEMGR_LNK}' => $lang_gallery_admin_menu['bridgemgr_lnk'],
                '{BRIDGEMGR_ICO}' => cpg_fetch_icon('bridge_mgr', 1),
                '{PHPINFO_TITLE}' => $lang_gallery_admin_menu['phpinfo_title'],
                '{PHPINFO_LNK}' => $lang_gallery_admin_menu['phpinfo_lnk'],
                '{PHPINFO_ICO}' => cpg_fetch_icon('phpinfo', 1),
                '{UPDATE_DATABASE_TITLE}' => $lang_gallery_admin_menu['update_database_title'],
                '{UPDATE_DATABASE_LNK}' => $lang_gallery_admin_menu['update_database_lnk'],
                '{UPDATE_DATABASE_ICO}' => cpg_fetch_icon('update_database', 1),
                '{VIEW_LOG_FILES_TITLE}' => $lang_gallery_admin_menu['view_log_files_title'],
                '{VIEW_LOG_FILES_LNK}' => $lang_gallery_admin_menu['view_log_files_lnk'],
                '{VIEW_LOG_FILES_ICO}' => cpg_fetch_icon('view_logs', 1),
                '{CHECK_VERSIONS_TITLE}' => $lang_gallery_admin_menu['check_versions_title'],
                '{CHECK_VERSIONS_LNK}' => $lang_gallery_admin_menu['check_versions_lnk'],
                '{CHECK_VERSIONS_ICO}' => cpg_fetch_icon('check_versions', 1),
                '{OVERALL_STATS_TITLE}' => $lang_gallery_admin_menu['overall_stats_title'],
                '{OVERALL_STATS_LNK}' => $lang_gallery_admin_menu['overall_stats_lnk'],
                '{OVERALL_STATS_ICO}' => cpg_fetch_icon('stats', 1),
                '{KEYWORDMGR_TITLE}' => $lang_gallery_admin_menu['keywordmgr_title'],
                '{KEYWORDMGR_LNK}' => $lang_gallery_admin_menu['keywordmgr_lnk'],
                '{KEYWORDMGR_ICO}' => cpg_fetch_icon('keyword_mgr', 1),
                '{EXIFMGR_TITLE}' => $lang_gallery_admin_menu['exifmgr_title'],
                '{EXIFMGR_LNK}' => $lang_gallery_admin_menu['exifmgr_lnk'],
                '{EXIFMGR_ICO}' => cpg_fetch_icon('exif_mgr', 1),
                '{SHOWNEWS_TITLE}' => $lang_gallery_admin_menu['shownews_title'],
                '{SHOWNEWS_LNK}' => $lang_gallery_admin_menu['shownews_lnk'],
                '{SHOWNEWS_ICO}' => cpg_fetch_icon('news_show', 1),
                '{TIME_STAMP}' => date('His').trim(floor(rand(0, 1000))),
                );

            $html = template_eval($template_gallery_admin_menu, $param);
            // $html.= cpg_alert_dev_version();
        } elseif (USER_ADMIN_MODE) {
            $param = array('{ALBMGR_TITLE}' => $lang_user_admin_menu['albmgr_title'],
                '{ALBMGR_LNK}' => $lang_user_admin_menu['albmgr_lnk'],
                '{ALBUMS_ICO}' => cpg_fetch_icon('alb_mgr', 1),
                '{MODIFYALB_TITLE}' => $lang_user_admin_menu['modifyalb_title'],
                '{MODIFYALB_LNK}' => $lang_user_admin_menu['modifyalb_lnk'],
                '{MODIFYALB_ICO}' => cpg_fetch_icon('modifyalb', 1),
                '{MY_PROF_TITLE}' => $lang_user_admin_menu['my_prof_title'],
                '{MY_PROF_LNK}' => $lang_user_admin_menu['my_prof_lnk'],
                '{MY_PROF_ICO}' => cpg_fetch_icon('my_profile', 1),
                '{PICTURES_TITLE}' => $lang_gallery_admin_menu['pictures_title'],
                '{PICTURES_LNK}' => $lang_gallery_admin_menu['pictures_lnk'],
                '{PICTURES_ICO}' => cpg_fetch_icon('picture_sort', 1),
                );

            $html = template_eval($template_user_admin_menu, $param);
        } else {
            $html = '';
        }

        $admin_menu = CPGPluginAPI::filter('admin_menu',$html);
    }

    return $admin_menu;
}
/******************************************************************************
** Section <<<theme_admin_mode_menu>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_display_message_block>>> - START
******************************************************************************/
/******************************************************************************
// Function for the theme_display_message_block
The message block (not to be confused with the admin menu) will display message carried over from one page to the other.
It's advisable not to change it unless you really know what you're doing.
This function composes the individual sections of the block.
******************************************************************************/
function theme_display_message_block() {
    global $lang_gallery_admin_menu, $lang_common, $CONFIG, $message_id;

    $superCage = Inspekt::makeSuperCage();
    $return = '';
    $message_id = '';
    $message_icon = '';
    $message_style = '';

    if ($superCage->get->keyExists('message_id')) {
      $message_id = $superCage->get->getEscaped('message_id');
    }

    if ($superCage->get->keyExists('message_icon')) {
        $message_icon = $superCage->get->getAlpha('message_icon');
    }

    if ($message_icon == 'error') {
        $message_style = 'cpg_message_error';
    } elseif ($message_icon == 'warning') {
        $message_style = 'cpg_message_warning';
    } elseif ($message_icon == 'validation') {
        $message_style = 'cpg_message_validation';
    } elseif ($message_icon == 'success') {
        $message_style = 'cpg_message_success';
    } else {
        $message_style = 'cpg_message_info';
    }

    if ($message_id != '') {
        $tempMessage = cpgFetchTempMessage($message_id);
        if ($tempMessage != '') {
            $return .= '<a name="cpgMessageBlock"></a>';
            $return .= <<< EOT
            <div id="cpgMessage" class="cpg_user_message {$message_style}">
              {$tempMessage}
            </div>
EOT;
        }
    }
    if (GALLERY_ADMIN_MODE) {
        cpgCleanTempMessage(); // garbage collection: when the admin is logged in, old messages that failed to display for whatever reason are being removed to keep the temp_messages table clean
        $return .= cpg_alert_dev_version();
        // $return .= cpg_display_rss(); //add RSS feed from coppermine-gallery.net later
    } else { // not in admin mode
        //$return = '';
    }
    return $return;
}
/******************************************************************************
** Section <<<theme_display_message_block>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_display_cat_list>>> - START
******************************************************************************/
function theme_display_cat_list($breadcrumb, &$cat_data, $statistics)
{
    global $template_cat_list, $lang_cat_list;
    if (count($cat_data) > 0) {
        starttable('100%');
        $template = template_extract_block($template_cat_list, 'header');
        $params = array(
                '{CATEGORY}' => $lang_cat_list['category'],
                '{ALBUMS}' => $lang_cat_list['albums'],
                '{PICTURES}' => $lang_cat_list['pictures'],
        );
        echo template_eval($template, $params);
    }

    $template_noalb = template_extract_block($template_cat_list, 'catrow_noalb');
    $template = template_extract_block($template_cat_list, 'catrow');
    foreach($cat_data as $category) {
        if (!isset($category['cat_thumb'])) { $category['cat_thumb'] = ''; }
        if (count($category) == 3) {
            $params = array(
                    '{CAT_TITLE}' => $category[0],
                    '{CAT_THUMB}' => $category['cat_thumb'],
                    '{CAT_DESC}' => $category[1],
            );
            echo template_eval($template_noalb, $params);
        } elseif (isset($category['cat_albums']) && ($category['cat_albums'] != '')) {
            $params = array(
                    '{CAT_TITLE}' => $category[0],
                    '{CAT_THUMB}' => $category['cat_thumb'],
                    '{CAT_DESC}' => $category[1],
                    '{CAT_ALBUMS}' => $category['cat_albums'],
                    '{ALB_COUNT}' => cpg_float2decimal($category[2]),
                    '{PIC_COUNT}' => cpg_float2decimal($category[3]),
            );
            echo template_eval($template, $params);
        } else {
            $params = array(
                    '{CAT_TITLE}' => $category[0],
                    '{CAT_THUMB}' => $category['cat_thumb'],
                    '{CAT_DESC}' => $category[1],
                    '{CAT_ALBUMS}' => '',
                    '{ALB_COUNT}' => cpg_float2decimal($category[2]),
                    '{PIC_COUNT}' => cpg_float2decimal($category[3]),
            );
            echo template_eval($template, $params);
        }
    }

    if ($statistics && count($cat_data) > 0) {
        $template = template_extract_block($template_cat_list, 'footer');
        $params = array('{STATISTICS}' => $statistics);
        echo template_eval($template, $params);
    }


    if (count($cat_data) > 0)
          endtable();
        echo template_extract_block($template_cat_list, 'spacer');
}
/******************************************************************************
** Section <<<theme_display_cat_list>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_display_breadcrumb>>> - START
******************************************************************************/
function theme_display_breadcrumb($breadcrumb, &$cat_data)
{
    /**
     * ** added breadcrumb as a seperate element
     */
    global $template_breadcrumb, $lang_breadcrumb;

    starttable('100%');
    if ($breadcrumb) {
        $template = template_extract_block($template_breadcrumb, 'breadcrumb');
        $params = array(
                '{BREADCRUMB}' => $breadcrumb,
        );
        echo template_eval($template, $params);
    }
        endtable();
}
/******************************************************************************
** Section <<<theme_display_breadcrumb>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_display_album_list>>> - START
******************************************************************************/
function theme_display_album_list(&$alb_list, $nbAlb, $cat, $page, $total_pages)
{

    global $CONFIG, $STATS_IN_ALB_LIST, $statistics, $template_tab_display, $template_album_list, $lang_album_list;

    $theme_alb_list_tab_tmpl = $template_tab_display;

    $theme_alb_list_tab_tmpl['left_text'] = strtr($theme_alb_list_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_album_list['album_on_page']));
    $theme_alb_list_tab_tmpl['page_link'] = strtr($theme_alb_list_tab_tmpl['page_link'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));

    $tabs = create_tabs($nbAlb, $page, $total_pages, $theme_alb_list_tab_tmpl);

    $album_cell = template_extract_block($template_album_list, 'album_cell');
    $empty_cell = template_extract_block($template_album_list, 'empty_cell');
    $tabs_row = template_extract_block($template_album_list, 'tabs');
    $stat_row = template_extract_block($template_album_list, 'stat_row');
    $spacer = template_extract_block($template_album_list, 'spacer');
    $header = template_extract_block($template_album_list, 'header');
    $footer = template_extract_block($template_album_list, 'footer');
    $rows_separator = template_extract_block($template_album_list, 'row_separator');

    $count = 0;

    $columns = $CONFIG['album_list_cols'];
    $column_width = ceil(100 / $columns);
    $thumb_cell_width = $CONFIG['alb_list_thumb_size'] + 2;

    starttable('100%');

    if ($STATS_IN_ALB_LIST) {
        $params = array('{STATISTICS}' => $statistics,
            '{COLUMNS}' => $columns,
            );
        echo template_eval($stat_row, $params);
    }

    echo $header;

    if (is_array($alb_list)) {
        foreach($alb_list as $album) {
            $count ++;

            $params = array('{COL_WIDTH}' => $column_width,
                '{ALBUM_TITLE}' => $album['album_title'],
                '{THUMB_CELL_WIDTH}' => $thumb_cell_width,
                '{ALB_LINK_TGT}' => "thumbnails.php?album={$album['aid']}",
                '{ALB_LINK_PIC}' => $album['thumb_pic'],
                '{ADMIN_MENU}' => $album['album_adm_menu'],
                '{ALB_DESC}' => $album['album_desc'],
                '{ALB_INFOS}' => $album['album_info'],
                '{ALB_HITS}' => $album['alb_hits'],
                );

            echo template_eval($album_cell, $params);

            if ($count % $columns == 0 && $count < count($alb_list)) {
                echo $rows_separator;
            }
        }
    }

    $params = array('{COL_WIDTH}' => $column_width,
          '{SPACER}' => $thumb_cell_width
          );
    $empty_cell = template_eval($empty_cell, $params);

    while ($count++ % $columns != 0) {
        echo $empty_cell;
    }

    echo $footer;
    // Tab display
    $params = array('{COLUMNS}' => $columns,
        '{TABS}' => $tabs,
        );
    echo template_eval($tabs_row, $params);

    endtable();

    echo $spacer;
}
/******************************************************************************
** Section <<<theme_display_album_list>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_display_album_list_cat>>> - START
******************************************************************************/
// Function to display first level Albums of a category
function theme_display_album_list_cat(&$alb_list, $nbAlb, $cat, $page, $total_pages)
{
    global $CONFIG, $STATS_IN_ALB_LIST, $statistics, $template_tab_display, $template_album_list_cat, $lang_album_list;
    if (!$CONFIG['first_level']) {
        return;
    }

    $theme_alb_list_tab_tmpl = $template_tab_display;

    $theme_alb_list_tab_tmpl['left_text'] = strtr($theme_alb_list_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_album_list['album_on_page']));
    $theme_alb_list_tab_tmpl['page_link'] = strtr($theme_alb_list_tab_tmpl['page_link'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));

    $tabs = create_tabs($nbAlb, $page, $total_pages, $theme_alb_list_tab_tmpl);
    // echo $template_album_list_cat;
    $template_album_list_cat1 = $template_album_list_cat;
    $album_cell = template_extract_block($template_album_list_cat1, 'c_album_cell');
    $empty_cell = template_extract_block($template_album_list_cat1, 'c_empty_cell');
    $tabs_row = template_extract_block($template_album_list_cat1, 'c_tabs');
    $stat_row = template_extract_block($template_album_list_cat1, 'c_stat_row');
    $spacer = template_extract_block($template_album_list_cat1, 'c_spacer');
    $header = template_extract_block($template_album_list_cat1, 'c_header');
    $footer = template_extract_block($template_album_list_cat1, 'c_footer');
    $rows_separator = template_extract_block($template_album_list_cat1, 'c_row_separator');

    $count = 0;

    $columns = $CONFIG['album_list_cols'];
    $column_width = ceil(100 / $columns);
    $thumb_cell_width = $CONFIG['alb_list_thumb_size'] + 2;

    starttable('100%');

    if ($STATS_IN_ALB_LIST) {
        $params = array('{STATISTICS}' => $statistics,
            '{COLUMNS}' => $columns,
            );
        echo template_eval($stat_row, $params);
    }

    echo $header;

    if (is_array($alb_list)) {
        foreach($alb_list as $album) {
            $count ++;

            $params = array('{COL_WIDTH}' => $column_width,
                '{ALBUM_TITLE}' => $album['album_title'],
                '{THUMB_CELL_WIDTH}' => $thumb_cell_width,
                '{ALB_LINK_TGT}' => "thumbnails.php?album={$album['aid']}",
                '{ALB_LINK_PIC}' => $album['thumb_pic'],
                '{ADMIN_MENU}' => $album['album_adm_menu'],
                '{ALB_DESC}' => $album['album_desc'],
                '{ALB_INFOS}' => $album['album_info'],
                '{ALB_HITS}' => $album['alb_hits'],
                );

            echo template_eval($album_cell, $params);

            if ($count % $columns == 0 && $count < count($alb_list)) {
                echo $rows_separator;
            }
        }
    }

    $params = array('{COL_WIDTH}' => $column_width,
          '{SPACER}' => $thumb_cell_width
          );
    $empty_cell = template_eval($empty_cell, $params);

    while ($count++ % $columns != 0) {
        echo $empty_cell;
    }

    echo $footer;
    // Tab display
    $params = array('{COLUMNS}' => $columns,
        '{TABS}' => $tabs,
        );
    echo template_eval($tabs_row, $params);

    endtable();

    echo $spacer;
}
/******************************************************************************
** Section <<<theme_display_album_list_cat>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_display_thumbnails>>> - START
******************************************************************************/
function theme_display_thumbnails(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $page, $total_pages, $sort_options, $display_tabs, $mode = 'thumb', $date='')
{
    global $CONFIG, $CURRENT_ALBUM_DATA;
    global $template_thumb_view_title_row,$template_fav_thumb_view_title_row, $lang_thumb_view, $lang_common, $template_tab_display, $template_thumbnail_view, $lang_album_list, $lang_errors;

    $superCage = Inspekt::makeSuperCage();

    static $header = '';
    static $thumb_cell = '';
    static $empty_cell = '';
    static $row_separator = '';
    static $footer = '';
    static $tabs = '';
    static $spacer = '';

    if ($header == '') {
        $thumb_cell = template_extract_block($template_thumbnail_view, 'thumb_cell');
        $tabs = template_extract_block($template_thumbnail_view, 'tabs');
        $header = template_extract_block($template_thumbnail_view, 'header');
        $empty_cell = template_extract_block($template_thumbnail_view, 'empty_cell');
        $row_separator = template_extract_block($template_thumbnail_view, 'row_separator');
        $footer = template_extract_block($template_thumbnail_view, 'footer');
        $spacer = template_extract_block($template_thumbnail_view, 'spacer');
    }

    $cat_link = is_numeric($aid) ? '' : '&amp;cat=' . $cat;
    $date_link = $date=='' ? '' : '&amp;date=' . $date;
    if ($superCage->get->getInt('uid')) {
      $uid_link = '&amp;uid=' . $superCage->get->getInt('uid');
    } else {
      $uid_link = '';
    }

    $album_types = array(
        'albums' => array('lastalb')
    );
    $album_types = CPGPluginAPI::filter('theme_thumbnails_album_types', $album_types);

    $theme_thumb_tab_tmpl = $template_tab_display;

    if ($mode == 'thumb') {
        $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => in_array($aid, $album_types['albums']) ? $lang_album_list['album_on_page'] : $lang_thumb_view['pic_on_page']));
        $theme_thumb_tab_tmpl['page_link'] = strtr($theme_thumb_tab_tmpl['page_link'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . $date_link . $uid_link . '&amp;page=%d'));
    } else {
        $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_thumb_view['user_on_page']));
        $theme_thumb_tab_tmpl['page_link'] = strtr($theme_thumb_tab_tmpl['page_link'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
    }

    $thumbcols = $CONFIG['thumbcols'];
    $cell_width = ceil(100 / $CONFIG['thumbcols']) . '%';

    $tabs_html = $display_tabs ? create_tabs($nbThumb, $page, $total_pages, $theme_thumb_tab_tmpl) : '';

    if (!GALLERY_ADMIN_MODE && stripos($template_thumb_view_title_row, 'admin_buttons') !== false) {
        template_extract_block($template_thumb_view_title_row, 'admin_buttons');
    }
    // The sort order options are not available for meta albums
    if ($sort_options) {
        if (GALLERY_ADMIN_MODE) {
            $param = array(
                '{ALBUM_ID}'   => $aid,
                '{CAT_ID}'     => ($cat > 0 ? $cat : $CURRENT_ALBUM_DATA['category']),
                '{MODIFY_LNK}'     => $lang_common['album_properties'],
                '{MODIFY_ICO}'     => cpg_fetch_icon('modifyalb', 1),
                '{PARENT_CAT_LNK}' => $lang_common['parent_category'],
                '{PARENT_CAT_ICO}' => cpg_fetch_icon('category', 1),
                '{EDIT_PICS_LNK}'  => $lang_common['edit_files'],
                '{EDIT_PICS_ICO}'  => cpg_fetch_icon('edit', 1),
                '{ALBUM_MGR_LNK}'  => $lang_common['album_manager'],
                '{ALBUM_MGR_ICO}'  => cpg_fetch_icon('alb_mgr', 1),
            );
        } else {
            $param = array();
        }
        $param['{ALBUM_NAME}'] = $album_name;
        // Plugin Filter: allow plugin to modify or add tags to process
        $param = CPGPluginAPI::filter('theme_thumbnails_title', $param);
        $title = template_eval($template_thumb_view_title_row, $param);
    } elseif ($aid == 'favpics' && $CONFIG['enable_zipdownload'] > 0) { //Lots of stuff can be added here later
        $param = array(
            '{ALBUM_ID}'   => $aid,
            '{ALBUM_NAME}' => $album_name,
            '{DOWNLOAD_ZIP}' => cpg_fetch_icon ('zip', 2) . $lang_thumb_view['download_zip'],
        );
        // Plugin Filter: allow plugin to modify or add tags to process
        $param = CPGPluginAPI::filter('theme_thumbnails_title', $param);        
        $title = template_eval($template_fav_thumb_view_title_row, $param);
    } else {
        $title = $album_name;
    }

    CPGPluginAPI::action('theme_thumbnails_wrapper_start', null);

    if ($mode == 'thumb') {
        starttable('100%', $title, $thumbcols);
    } else {
        starttable('100%');
    }

    echo $header;

    $i = 0;
    global $thumb;  // make $thumb accessible to plugins
    foreach($thumb_list as $thumb) {
        $i++;
        if ($mode == 'thumb') {
            if (in_array($aid, $album_types['albums'])) {
                $params = array(
                    '{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}'   => "thumbnails.php?album={$thumb['aid']}",
                    '{THUMB}'      => $thumb['image'],
                    '{CAPTION}'    => $thumb['caption'],
                    '{ADMIN_MENU}' => $thumb['admin_menu'],
                );
            } else {
                // determine if thumbnail link targets should open in a pop-up
                if ($CONFIG['thumbnail_to_fullsize'] == 1) { // code for full-size pop-up
                    if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
                       $target = 'javascript:;" onclick="alert(\''.sprintf($lang_errors['login_needed'],'','','','').'\');';
                    } elseif (USER_ID && USER_ACCESS_LEVEL <= 2) {
                        $target = 'javascript:;" onclick="alert(\''.sprintf($lang_errors['access_intermediate_only'],'','','','').'\');';
                    } else {
                       $target = 'javascript:;" onclick="MM_openBrWindow(\'displayimage.php?pid=' . $thumb['pid'] . '&fullsize=1\',\'' . uniqid(rand()) . '\',\'scrollbars=yes,toolbar=no,status=no,resizable=yes,width=' . ((int)$thumb['pwidth']+(int)$CONFIG['fullsize_padding_x']) .  ',height=' .   ((int)$thumb['pheight']+(int)$CONFIG['fullsize_padding_y']). '\');';
                    }
                } elseif ($aid == 'random') {
                    $target = "displayimage.php?pid={$thumb['pid']}$uid_link#top_display_media";
                } elseif ($aid == 'lastcom' || $aid == 'lastcomby') {
                    $page = cpg_get_comment_page_number($thumb['msg_id']);
                    $page = (is_numeric($page)) ? "&amp;page=$page" : '';
                    $target = "displayimage.php?album=$aid$cat_link$date_link&amp;pid={$thumb['pid']}$uid_link&amp;msg_id={$thumb['msg_id']}$page#comment{$thumb['msg_id']}";
                } else {
                    $target = "displayimage.php?album=$aid$cat_link$date_link&amp;pid={$thumb['pid']}$uid_link#top_display_media";
                }
                $params = array(
                    '{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}'   => $target,
                    '{THUMB}'      => $thumb['image'],
                    '{CAPTION}'    => $thumb['caption'],
                    '{ADMIN_MENU}' => $thumb['admin_menu'],
                );
            }

        } else {  // mode != 'thumb'

            // Used for mode = 'user' from list_users() in index.php
            $params = array(
                '{CELL_WIDTH}' => $cell_width,
                '{LINK_TGT}'   => "index.php?cat={$thumb['cat']}",
                '{THUMB}'      => $thumb['image'],
                '{CAPTION}'    => $thumb['caption'],
                '{ADMIN_MENU}' => '',
            );

        }

        // Plugin Filter: allow plugin to modify or add tags to process
        $params = CPGPluginAPI::filter('theme_display_thumbnails_params', $params);
        echo template_eval($thumb_cell, $params);

        if ((($i % $thumbcols) == 0) && ($i < count($thumb_list))) {
            echo $row_separator;
        }
    } // foreach $thumb

    unset($thumb);  // unset $thumb to avoid conflicting with global

    for (;($i % $thumbcols); $i++) {
        echo $empty_cell;
    }
    $footer = CPGPluginAPI::filter('theme_thumbnails_footer', $footer); 
    echo $footer;

    if ($display_tabs) {
        $params = array(
            '{THUMB_COLS}' => $thumbcols,
            '{TABS}'       => $tabs_html,
        );
        echo template_eval($tabs, $params);
    }

    endtable();
    CPGPluginAPI::action('theme_thumbnails_wrapper_end', null);
    echo $spacer;
}
/******************************************************************************
** Section <<<theme_display_thumbnails>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_display_film_strip>>> - START
******************************************************************************/
// Function to display the film strip
function theme_display_film_strip(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $pos, $sort_options, $mode = 'thumb', $date='', $filmstrip_prev_pos, $filmstrip_next_pos,$max_block_items,$thumb_width)
{
    global $CONFIG, $THEME_DIR;
    global $template_film_strip, $lang_film_strip, $lang_common, $pic_count,$mar_pic;

    $superCage = Inspekt::makeSuperCage();

    static $template = '';
    static $thumb_cell = '';
    static $empty_cell = '';
    static $spacer = '';

    if ((!$template)) {
        $template = $template_film_strip;
        $thumb_cell = str_replace('<td', '<td align="center"', template_extract_block($template, 'thumb_cell')); // center thumbnails
        $empty_cell = template_extract_block($template, 'empty_cell');
    }

    $cat_link = is_numeric($aid) ? '' : '&amp;cat=' . $cat;
    $date_link = $date=='' ? '' : '&amp;date=' . $date;

    if ($superCage->get->getInt('uid')) {
        $uid_link = '&amp;uid=' . $superCage->get->getInt('uid');
    } else {
        $uid_link = '';
    }

    $i = 0;
    $thumb_strip = '';
    foreach($thumb_list as $thumb) {
        $i++;
        if ($mode == 'thumb') {
            if ($thumb['pos'] == $pos && !$superCage->get->keyExists('film_strip')) {
                $thumb['image'] = str_replace('class="image"', 'class="image middlethumb"', $thumb['image']);
            }
            // determine if thumbnail link targets should open in a pop-up
            if ($CONFIG['thumbnail_to_fullsize'] == 1) { // code for full-size pop-up
                if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
                    $target = 'javascript:;" onclick="alert(\''.sprintf($lang_errors['login_needed'],'','','','').'\');';
                } elseif (USER_ID && USER_ACCESS_LEVEL <= 2) {
                    $target = 'javascript:;" onclick="alert(\''.sprintf($lang_errors['access_intermediate_only'],'','','','').'\');';
                } else {
                    $target = 'javascript:;" onclick="MM_openBrWindow(\'displayimage.php?pid=' . $thumb['pid'] . '&fullsize=1\',\'' . uniqid(rand()) . '\',\'scrollbars=yes,toolbar=no,status=no,resizable=yes,width=' . ((int)$thumb['pwidth']+(int)$CONFIG['fullsize_padding_x']) .  ',height=' .   ((int)$thumb['pheight']+(int)$CONFIG['fullsize_padding_y']). '\');';
                }
            } elseif ($aid == 'lastcom' || $aid == 'lastcomby') {
                $page = cpg_get_comment_page_number($thumb['msg_id']);
                $page = (is_numeric($page)) ? "&amp;page=$page" : '';
                $target = "displayimage.php?album=$aid$cat_link$date_link&amp;pid={$thumb['pid']}$uid_link&amp;msg_id={$thumb['msg_id']}$page#comment{$thumb['msg_id']}";
            } else {
                $target = "displayimage.php?album=$aid$cat_link$date_link&amp;pid={$thumb['pid']}$uid_link#top_display_media";
            }
            $params = array(
                '{LINK_TGT}' => $target,
                '{THUMB}' => $thumb['image'],
                '{ONE_WIDTH}'  => "width:".$thumb_width."px; float: left" ,
                );
        } else {
            $params = array(
                '{LINK_TGT}' => "index.php?cat={$thumb['cat']}",
                '{THUMB}' => $thumb['image'],
                '{ONE_WIDTH}'  => "width:".$thumb_width."px; float: left" ,
                );
        }
        $thumb_strip .= template_eval($thumb_cell, $params);
    }

    if (defined('THEME_HAS_FILM_STRIP_GRAPHICS')) {
        $tile1 = $THEME_DIR . 'images/tile1.gif';
        $tile2 = $THEME_DIR . 'images/tile2.gif';
    } elseif (defined('THEME_HAS_FILM_STRIP_GRAPHIC')) {
        $tile1=$tile2=$THEME_DIR . 'images/tile.gif';
    } else {
        $tile1=$tile2= 'images/tile.gif';
    }

    if (defined('THEME_HAS_NAVBAR_GRAPHICS')) {
        $location = $THEME_DIR;
    } else {
        $location= '';
    }
    $max_itme_width_ul = $max_block_items;
    if(($max_block_items%2)==0){
        $max_itme_width_ul = $max_block_items +1;
    }
    $set_width_to_film = "width:".($max_block_items*($thumb_width+4))."px; position:relative;";

    $params = array('{THUMB_STRIP}' => $thumb_strip,
        '{COLS}' => $i,
        '{TILE1}' => $tile1,
        '{TILE2}' => $tile2,
        '{SET_WIDTH}'  => $set_width_to_film,
        );

    ob_start();
    echo '<div id="filmstrip">';
    starttable($CONFIG['picture_table_width']);
    echo template_eval($template, $params);
    endtable();
    echo '</div>';
    $film_strip = ob_get_contents();
    ob_end_clean();

    return $film_strip;
}
/******************************************************************************
** Section <<<theme_display_film_strip>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_no_img_to_display>>> - START
******************************************************************************/
function theme_no_img_to_display($album_name)
{
    global $lang_errors, $template_no_img_to_display;

    static $template = '';
    static $spacer;

    if ((!$template)) {
        $template = $template_no_img_to_display;
        $spacer = template_extract_block($template, 'spacer');
    }

    $params = array('{TEXT}' => $lang_errors['no_img_to_display']);
    starttable('100%', $album_name);
    echo template_eval($template, $params);
    endtable();
}
/******************************************************************************
** Section <<<theme_no_img_to_display>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_display_image>>> - START
******************************************************************************/
function theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments, $film_strip)
{
    global $CONFIG, $LINEBREAK;

    $superCage = Inspekt::makeSuperCage();

    $width = $CONFIG['picture_table_width'];

    echo '<a name="top_display_media"></a>'; // set the navbar-anchor
    starttable();
    echo $nav_menu;
    endtable();

    starttable();
    echo $picture;
    endtable();
    if ($CONFIG['display_film_strip'] == 1) {
        echo $film_strip;
    }


    echo $votes;

    $picinfo = $superCage->cookie->keyExists('picinfo') ? $superCage->cookie->getAlpha('picinfo') : ($CONFIG['display_pic_info'] ? 'block' : 'none');
    echo $LINEBREAK . '<div id="picinfo" style="display: '.$picinfo.';">' . $LINEBREAK;
    starttable();
    echo $pic_info;
    endtable();
    echo '</div>' . $LINEBREAK;

    echo '<a name="comments_top"></a>';
    echo '<div id="comments">' . $LINEBREAK;
        echo $comments;
        echo '</div>' . $LINEBREAK;

}
/******************************************************************************
** Section <<<theme_display_image>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_html_picinfo>>> - START
******************************************************************************/
function theme_html_picinfo(&$info)
{
    global $lang_picinfo, $CONFIG, $CURRENT_PIC_DATA, $LINEBREAK;

    if ($CONFIG['picinfo_movie_download_link']) {
        $path_to_pic = $CONFIG['fullpath'] . $CURRENT_PIC_DATA['filepath'] . $CURRENT_PIC_DATA['filename'];
        $mime_content = cpg_get_type($CURRENT_PIC_DATA['filename']);
        if ($mime_content['content']=='movie') {
            $info[$lang_picinfo['download_URL']] = '<a href="' . $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') . $path_to_pic.'">'. $lang_picinfo['movie_player'] .'</a>';
        }
    }

    $html = '';
    $html .= '        <tr><td colspan="2" class="tableh2">'.$lang_picinfo['title'].'</td></tr>' . $LINEBREAK;
    $template = '        <tr><td class="tableb tableb_alternate" valign="top" >%s:</td><td class="tableb tableb_alternate">%s</td></tr>' . $LINEBREAK;
    foreach ($info as $key => $value) {
        $html .= sprintf($template, $key, $value);
    }

    return $html;
}
/******************************************************************************
** Section <<<theme_html_picinfo>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_html_picture>>> - START
******************************************************************************/
// Displays a picture
function theme_html_picture()
{
    global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $USER, $LINEBREAK;
    global $album, $lang_date, $template_display_media;
    global $lang_display_image_php, $lang_picinfo, $lang_common, $lang_errors;

    $superCage = Inspekt::makeSuperCage();

    $pid = $CURRENT_PIC_DATA['pid'];
    $pic_title = '';

    if (!isset($USER['liv']) || !is_array($USER['liv'])) {
        $USER['liv'] = array();
    }
    // Add 1 to hit counter
    if ((!USER_IS_ADMIN && $CONFIG['count_admin_hits'] == 0 || $CONFIG['count_admin_hits'] == 1) && !in_array($pid, $USER['liv']) && $superCage->cookie->keyExists($CONFIG['cookie_name'] . '_data')) {
        add_hit($pid);
        if (count($USER['liv']) > 4) array_shift($USER['liv']);
        array_push($USER['liv'], $pid);
    }

    if ($CURRENT_PIC_DATA['title'] != '') {
        $pic_title .= $CURRENT_PIC_DATA['title'] . $LINEBREAK;
    }
    if ($CURRENT_PIC_DATA['caption'] != '') {
        $pic_title .= $CURRENT_PIC_DATA['caption'] . $LINEBREAK;
    }
    if ($CURRENT_PIC_DATA['keywords'] != '') {
        $pic_title .= $lang_common['keywords'] . ": " . $CURRENT_PIC_DATA['keywords'];
    }

    if (!$CURRENT_PIC_DATA['title'] && !$CURRENT_PIC_DATA['caption']) {
        template_extract_block($template_display_media, 'img_desc');
    } else {
        if (!$CURRENT_PIC_DATA['title']) {
            template_extract_block($template_display_media, 'title');
        }
        if (!$CURRENT_PIC_DATA['caption']) {
            template_extract_block($template_display_media, 'caption');
        }
    }

    $CURRENT_PIC_DATA['menu'] = html_picture_menu(); //((USER_ADMIN_MODE && $CURRENT_ALBUM_DATA['category'] == FIRST_USER_CAT + USER_ID) || ($CONFIG['users_can_edit_pics'] && $CURRENT_PIC_DATA['owner_id'] == USER_ID && USER_ID != 0) || GALLERY_ADMIN_MODE) ? html_picture_menu($pid) : '';

    $image_size = array();

    // The weird comparision is because only picture_width is stored
    $resize_method = $CONFIG['picture_use'] == "thumb" ? ($CONFIG['thumb_use'] == "ex" ? "any" : $CONFIG['thumb_use']) : $CONFIG['picture_use'];
    if ($resize_method == 'ht' && $CURRENT_PIC_DATA['pheight'] > $CONFIG['picture_width']) {
        $use_intermediate = true;
    } elseif ($resize_method == 'wd' && $CURRENT_PIC_DATA['pwidth'] > $CONFIG['picture_width']) {
        $use_intermediate = true;
    } elseif ($resize_method == 'any' && max($CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight']) > $CONFIG['picture_width']) {
        $use_intermediate = true;
    } else {
        $use_intermediate = false;
    }

    if ($CONFIG['make_intermediate'] && $use_intermediate) {
        $picture_url = get_pic_url($CURRENT_PIC_DATA, 'normal');
    } else {
        $picture_url = get_pic_url($CURRENT_PIC_DATA, 'fullsize');
    }

    list($image_size['width'], $image_size['height'], , $image_size['geom']) = cpg_getimagesize(urldecode($picture_url));

    $pic_title = '';
    $mime_content = cpg_get_type($CURRENT_PIC_DATA['filename']);

    if ($mime_content['content']=='movie' || $mime_content['content']=='audio') {

        if ($CURRENT_PIC_DATA['pwidth']==0 || $CURRENT_PIC_DATA['pheight']==0) {
            $resize_method = $CONFIG['picture_use'] == "thumb" ? ($CONFIG['thumb_use'] == "ex" ? "any" : $CONFIG['thumb_use']) : $CONFIG['picture_use'];
            if ($resize_method == 'ht') {
                $pwidth = $CONFIG['picture_width']*4/3;
                $pheight = $CONFIG['picture_width'];
            } else { 
                $pwidth = $CONFIG['picture_width'];
                $pheight = $CONFIG['picture_width']*3/4;
            }

            $CURRENT_PIC_DATA['pwidth']  = $pwidth; // Default width

            // Set default height; if file is a movie
            if ($mime_content['content']=='movie') {
                $CURRENT_PIC_DATA['pheight'] = $pheight; // Default height
            }
        }

        $ctrl_offset['mov']=15;
        $ctrl_offset['wmv']=45;
        $ctrl_offset['swf']=0;
        $ctrl_offset['rm']=0;
        $ctrl_offset_default=45;
        $ctrl_height = (isset($ctrl_offset[$mime_content['extension']]))?($ctrl_offset[$mime_content['extension']]):$ctrl_offset_default;
        $image_size['whole']='width="'.$CURRENT_PIC_DATA['pwidth'].'" height="'.($CURRENT_PIC_DATA['pheight']+$ctrl_height).'"';
    }

    if ($mime_content['content']=='image') {
        if ($CURRENT_PIC_DATA['mode'] != 'fullsize') {
            $winsizeX = $CURRENT_PIC_DATA['pwidth'] + $CONFIG['fullsize_padding_x'];  //the +'s are the mysterious FF and IE paddings
            $winsizeY = $CURRENT_PIC_DATA['pheight'] + $CONFIG['fullsize_padding_y']; //the +'s are the mysterious FF and IE paddings
            if ($CONFIG['transparent_overlay'] == 1) {
                $pic_html = "<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td background=\"" . $picture_url . "\" width=\"{$image_size['width']}\" height=\"{$image_size['height']}\" class=\"image\">";
                $pic_html_href_close = '</a>' . $LINEBREAK;
                if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
                    if ($CONFIG['allow_user_registration'] == 0) {
                        $pic_html_href_close = '';
                    } else {
                        $pic_html .= '<a href="javascript:;" onclick="alert(\''.sprintf($lang_errors['login_needed'],'','','','').'\');">';
                    }
                } elseif (USER_ID && USER_ACCESS_LEVEL <= 2) {
                    $pic_html .= '<a href="javascript:;" onclick="alert(\''.sprintf($lang_errors['access_intermediate_only'],'','','','').'\');">';
                } else {
                    $pic_html .= "<a href=\"javascript:;\" onclick=\"MM_openBrWindow('displayimage.php?pid=$pid&amp;fullsize=1','" . uniqid(rand()) . "','scrollbars=yes,toolbar=no,status=no,resizable=yes,width=$winsizeX,height=$winsizeY')\">";
                }
                $pic_title = $lang_display_image_php['view_fs'] . $LINEBREAK . '==============' . $LINEBREAK . $pic_title;
                $pic_html .= "<img src=\"images/image.gif?id=".floor(rand()*1000+rand())."\" width=\"{$image_size['width']}\" height=\"{$image_size['height']}\"  border=\"0\" alt=\"{$lang_display_image_php['view_fs']}\" /><br />";
                $pic_html .= $pic_html_href_close . '</td></tr></table>';
                //PLUGIN FILTER
                $pic_html = CPGPluginAPI::filter('html_image_reduced_overlay', $pic_html);
            } else {
                $pic_html_href_close = '</a>' . $LINEBREAK;
                if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
                    if ($CONFIG['allow_user_registration'] == 0) {
                        $pic_html = $pic_html_href_close = '';
                    } else {
                        $pic_html = '<a href="javascript:;" onclick="alert(\''.sprintf($lang_errors['login_needed'],'','','','').'\');">';
                    }
                } elseif (USER_ID && USER_ACCESS_LEVEL <= 2) {
                    $pic_html = '<a href="javascript:;" onclick="alert(\''.sprintf($lang_errors['access_intermediate_only'],'','','','').'\');">';
                } else {
                    $pic_html = "<a href=\"javascript:;\" onclick=\"MM_openBrWindow('displayimage.php?pid=$pid&amp;fullsize=1','" . uniqid(rand()) . "','scrollbars=yes,toolbar=no,status=no,resizable=yes,width=$winsizeX,height=$winsizeY')\">";
                }
                $pic_title = $lang_display_image_php['view_fs'] . $LINEBREAK . '==============' . $LINEBREAK . $pic_title;
                $pic_html .= "<img src=\"" . $picture_url . "\" {$image_size['geom']} class=\"image\" border=\"0\" alt=\"{$lang_display_image_php['view_fs']}\" /><br />";
                $pic_html .= $pic_html_href_close;
                //PLUGIN FILTER
                $pic_html = CPGPluginAPI::filter('html_image_reduced', $pic_html);
            }
        } else {
            if ($CONFIG['transparent_overlay'] == 1) {
                $pic_html = "<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td background=\"" . $picture_url . "\" width=\"{$CURRENT_PIC_DATA['pwidth']}\" height=\"{$CURRENT_PIC_DATA['pheight']}\" class=\"image\">";
                $pic_html .= "<img src=\"images/image.gif?id=".floor(rand()*1000+rand())."\" width={$CURRENT_PIC_DATA['pwidth']} height={$CURRENT_PIC_DATA['pheight']} border=\"0\" alt=\"\" /><br />" . $LINEBREAK;
                $pic_html .= "</td></tr></table>";
                //PLUGIN FILTER
                $pic_html = CPGPluginAPI::filter('html_image_overlay', $pic_html);
            } else {
                $pic_html = "<img src=\"" . $picture_url . "\" {$image_size['geom']} class=\"image\" border=\"0\" alt=\"\" /><br />" . $LINEBREAK;
                //PLUGIN FILTER
                $pic_html = CPGPluginAPI::filter('html_image', $pic_html);
            }
        }
    } elseif ($mime_content['content']=='document') {
        $pic_thumb_url = get_pic_url($CURRENT_PIC_DATA,'thumb');
        $pic_html = "<a href=\"{$picture_url}\" target=\"_blank\" class=\"document_link\"><img src=\"".$pic_thumb_url."\" border=\"0\" class=\"image\" /></a><br />" . $LINEBREAK;
        //PLUGIN FILTER
        $pic_html = CPGPluginAPI::filter('html_document', $pic_html);
    } else {
        $autostart = ($CONFIG['media_autostart']) ? ('true'):('false');

        if ($mime_content['player'] == 'HTMLA') {
            $pic_html  = '<audio controls="true" src="' . $picture_url . '" autostart="' . $autostart . '"></audio>';
        } elseif ($mime_content['player'] == 'HTMLV') {
            $pic_html  = '<video controls="true" src="' . $picture_url . '" autostart="' . $autostart . '"' . $image_size['whole'] . '></video>';
        } else {

            $players['WMP'] = array('id' => 'MediaPlayer',
                                    //'clsid' => 'classid="clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95" ',
                                    'clsid' => '',
                                    'codebase' => 'codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" ',
                                    'mime' => 'type="application/x-mplayer2" ',
                                   );
            $players['DIVX'] = array('id' => 'DivX',
                                    'clsid' => 'classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616"',
                                    'codebase' => 'codebase="http://go.divx.com/plugin/DivXBrowserPlugin.cab"',
                                    'mime' => 'type="video/divx"'
                                   );
            $players['RMP'] = array('id' => 'RealPlayer',
                                    'clsid' => 'classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" ',
                                    'codebase' => '',
                                    'mime' => 'type="audio/x-pn-realaudio-plugin" '
                                   );
            $players['QT']  = array('id' => 'QuickTime',
                                    'clsid' => 'classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" ',
                                    'codebase' => 'codebase="http://www.apple.com/qtactivex/qtplugin.cab" ',
                                    'mime' => 'type="video/x-quicktime" '
                                   );
            $players['SWF'] = array('id' => 'SWFlash',
                                    'clsid' => ' classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" ',
                                    'codebase' => '',
                                    'mime' => 'type="application/x-shockwave-flash" ',
                                    'data' => 'data="'.$picture_url.'" '
                                   );
            $players['UNK'] = array('id' => 'DefaultPlayer',
                                    'clsid' => '',
                                    'codebase' => '',
                                    'mime' => ''
                                   );

            $player = $players[$mime_content['player']];

            if (!$player) {
                $player = 'UNK';
            }

            $pic_html  = '<object id="'.$player['id'].'" '.$player['data'].$player['clsid'].$player['codebase'].$player['mime'].$image_size['whole'].'>';
            $pic_html .= "<param name=\"autostart\" value=\"$autostart\" /><param name=\"src\" value=\"". $picture_url . "\" />";
            $pic_html .= '</object><br />' . $LINEBREAK;
        }

        //PLUGIN FILTER
        $pic_html = CPGPluginAPI::filter('html_other_media', $pic_html);
    }

    $CURRENT_PIC_DATA['html'] = $pic_html;
    $CURRENT_PIC_DATA['header'] = '';
    $CURRENT_PIC_DATA['footer'] = '';

    $CURRENT_PIC_DATA = CPGPluginAPI::filter('file_data',$CURRENT_PIC_DATA);

    $params = array('{CELL_HEIGHT}' => '100',
        '{IMAGE}' => $CURRENT_PIC_DATA['header'].$CURRENT_PIC_DATA['html'].$CURRENT_PIC_DATA['footer'],
        '{ADMIN_MENU}' => $CURRENT_PIC_DATA['menu'],
        '{TITLE}' => bb_decode($CURRENT_PIC_DATA['title']),
        '{CAPTION}' => bb_decode($CURRENT_PIC_DATA['caption']),
        );

    return template_eval($template_display_media, $params);
}
/******************************************************************************
** Section <<<theme_html_picture>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_html_img_nav_menu>>> - START
******************************************************************************/
function theme_html_img_nav_menu() {
    global $CONFIG, $CURRENT_PIC_DATA, $meta_nav, $THEME_DIR, $CPG_PHP_SELF, $LINEBREAK; //$PHP_SELF,
    global $album, $cat, $pos, $pic_count, $pic_data, $lang_img_nav_bar, $lang_text_dir, $template_img_navbar;

    $superCage = Inspekt::makeSuperCage();

    $template_img_navbar = CPGPluginAPI::filter('theme_img_navbar', $template_img_navbar);

    $cat_link = is_numeric($album) ? '' : '&amp;cat=' . $cat;
    //$date_link = $_GET['date']=='' ? '' : '&date=' . cpgValidateDate($_GET['date']);

    if ($superCage->get->keyExists('date')) {
      //date will be validated
      $date_link = '&date=' . cpgValidateDate($superCage->get->getRaw('date'));
    } else {
      $date_link = '';
    }

    //$uid_link = is_numeric($_GET['uid']) ? '&amp;uid=' . $_GET['uid'] : '';
    if ($superCage->get->getInt('uid')) {
        $uid_link = '&amp;uid=' . $superCage->get->getInt('uid');
    } else {
        $uid_link = '';
    }

    $human_pos = $pos + 1;
    $page = ceil(($pos + 1) / ($CONFIG['thumbrows'] * $CONFIG['thumbcols']));
    $pid = $CURRENT_PIC_DATA['pid'];

    if ($pos > 0) {
        $start = 0;
        //$start_tgt = "{$_SERVER['PHP_SELF']}?album=$album$cat_link&amp;pos=$start"; // Abbas - added pid in URL instead of pos
        $start_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link&amp;pid={$pic_data[$start]['pid']}";
        $start_title = $lang_img_nav_bar['go_album_start'];
        $meta_nav .= "<link rel=\"start\" href=\"$start_tgt\" title=\"$start_title\" />" . $LINEBREAK;
        $start_image = (($lang_text_dir == 'ltr') ? 'start.png' : 'end.png');

        $prev = $pos - 1;
        //$prev_tgt = "{$_SERVER['PHP_SELF']}?album=$album$cat_link&amp;pos=$prev$uid_link";// Abbas - added pid in URL instead of pos
        if ($album == 'lastcom' || $album == 'lastcomby') {
            $page = cpg_get_comment_page_number($pic_data[$prev]['msg_id']);
            $page = (is_numeric($page)) ? "&amp;page=$page" : '';
            $prev_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link&amp;pid={$pic_data[$prev]['pid']}$uid_link&amp;msg_id={$pic_data[$prev]['msg_id']}$page#comment{$pic_data[$prev]['msg_id']}";
            $start_tgt .= "$uid_link&amp;msg_id={$pic_data[$start]['msg_id']}$page#comment{$pic_data[$start]['msg_id']}";
        } else {
            $prev_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link&amp;pid={$pic_data[$prev]['pid']}$uid_link#top_display_media";
            $start_tgt .= "$uid_link#top_display_media";
        }
        $prev_title = $lang_img_nav_bar['prev_title'];
        $meta_nav .= "<link rel=\"prev\" href=\"$prev_tgt\" title=\"$prev_title\" />" . $LINEBREAK;
        $prev_image = (($lang_text_dir == 'ltr') ? 'prev.png' : 'next.png');
    } else {
        // on first image, so no previous button/link
        $prev_tgt = "javascript:;";
        $prev_title = "";
        $prev_image = (($lang_text_dir == 'ltr') ? 'prev_inactive.png' : 'next_inactive.png');
        $start_tgt = "javascript:;";
        $start_title = "";
        $start_image = (($lang_text_dir == 'ltr') ? 'start_inactive.png' : 'end_inactive.png');
    }

    if ($pos < ($pic_count -1)) {
        $end = $pic_count - 1;
        //$end_tgt = "{$_SERVER['PHP_SELF']}?album=$album$cat_link&amp;pos=$end";// Abbas - added pid in URL instead of pos
        $end_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link&amp;pid={$pic_data[$end]['pid']}";
        $end_title = $lang_img_nav_bar['go_album_end'];
        $meta_nav .= "<link rel=\"last\" href=\"$end_tgt\" title=\"$end_title\" />" . $LINEBREAK;
        $end_image = (($lang_text_dir == 'ltr') ? 'end.png' : 'start.png');

        $next = $pos + 1;
        //$next_tgt = "{$_SERVER['PHP_SELF']}?album=$album$cat_link&amp;pos=$next$uid_link";// Abbas - added pid in URL instead of pos
        if ($album == 'lastcom' || $album == 'lastcomby') {
            $page = cpg_get_comment_page_number($pic_data[$next]['msg_id']);
            $page = (is_numeric($page)) ? "&amp;page=$page" : '';
            $next_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link&amp;pid={$pic_data[$next]['pid']}$uid_link&amp;msg_id={$pic_data[$next]['msg_id']}$page#comment{$pic_data[$next]['msg_id']}";
            $end_tgt .= "$uid_link&amp;msg_id={$pic_data[$end]['msg_id']}$page#comment{$pic_data[$end]['msg_id']}";
        } else {
            $next_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link&amp;pid={$pic_data[$next]['pid']}$uid_link#top_display_media";
            $end_tgt .= "$uid_link#top_display_media";
        }
        $next_title = $lang_img_nav_bar['next_title'];
        $meta_nav .= "<link rel=\"next\" href=\"$next_tgt\" title=\"$next_title\"/>" . $LINEBREAK;
        $next_image = (($lang_text_dir == 'ltr') ? 'next.png' : 'prev.png');
    } else {
        // on last image, so no next button/link
        $next_tgt = "javascript:;";
        $next_title = "";
        $next_image = (($lang_text_dir == 'ltr') ? 'next_inactive.png' : 'prev_inactive.png');
        $end_tgt = "javascript:;";
        $end_title = "";
        $end_image = (($lang_text_dir == 'ltr') ? 'end_inactive.png' : 'start_inactive.png');
    }

    if (USER_CAN_SEND_ECARDS) {
        $ecard_tgt = "ecard.php?album=$album$cat_link$date_link&amp;pid=$pid&amp;pos=$pos";
        $ecard_title = $lang_img_nav_bar['ecard_title'];
    } else {
        template_extract_block($template_img_navbar, 'ecard_button'); // added to remove button if cannot send ecard
        /*
        $ecard_tgt = "javascript:alert('" . addslashes($lang_img_nav_bar['ecard_disabled_msg']) . "');";
        $ecard_title = $lang_img_nav_bar['ecard_disabled'];
        */
    }

    // report to moderator buttons
    $report_tgt = '';
    if (($CONFIG['report_post']==1) && (USER_CAN_SEND_ECARDS)) {
        $report_tgt = "report_file.php?album=$album$cat_link$date_link&amp;pid=$pid&amp;pos=$pos";
    } else { 
        // remove button if report toggle is off
        template_extract_block($template_img_navbar, 'report_file_button');
    }

    $thumb_tgt = "thumbnails.php?album=$album$cat_link$date_link&amp;page=$page$uid_link";
    $meta_nav .= "<link rel=\"up\" href=\"$thumb_tgt\" title=\"".$lang_img_nav_bar['thumb_title']."\"/>" . $LINEBREAK;

    // needed when viewing slideshow of meta albums lastcom/lastcomby
    $msg_id = ($album == 'lastcom' || $album == 'lastcomby') ? "&amp;msg_id={$pic_data[$pos]['msg_id']}&amp;page=$page" : '';

    $slideshow_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link$uid_link&amp;pid=$pid$msg_id&amp;slideshow=".$CONFIG['slideshow_interval'].'#top_display_media';

    // if set, this will override the default slideshow button to be inserted by displayimage.js
    $slideshow_btn = '';
    // if set, this will override the default pic_info button to be inserted by displayimage.js
    $pic_info_btn = '';

    $pic_pos = sprintf($lang_img_nav_bar['pic_pos'], $human_pos, $pic_count);

    if (defined('THEME_HAS_NAVBAR_GRAPHICS')) {
        $location = $THEME_DIR;
    } else {
        $location = '';
    }
    // add javascript vars
    $js_buttons = array(
        'pic_info_title'  => $lang_img_nav_bar['pic_info_title'],
        'pic_info_btn'    => $pic_info_btn,
        'slideshow_tgt'   => $slideshow_tgt,
        'slideshow_title' => $lang_img_nav_bar['slideshow_title'],
        'slideshow_btn'   => $slideshow_btn,
        'loc' => $location,
    );
    set_js_var('buttons', $js_buttons);

    $params = array(
        '{THUMB_TGT}' => $thumb_tgt,
        '{THUMB_TITLE}' => $lang_img_nav_bar['thumb_title'],
        '{PIC_POS}' => $pic_pos,
        '{ECARD_TGT}' => $ecard_tgt,
        '{ECARD_TITLE}' => $ecard_title,
        '{START_TGT}' => $start_tgt,
        '{START_TITLE}' => $start_title,
        '{START_IMAGE}' => $start_image,
        '{PREV_TGT}' => $prev_tgt,
        '{PREV_TITLE}' => $prev_title,
        '{PREV_IMAGE}' => $prev_image,
        '{NEXT_TGT}' => $next_tgt,
        '{NEXT_TITLE}' => $next_title,
        '{NEXT_IMAGE}' => $next_image,
        '{END_TGT}' => $end_tgt,
        '{END_TITLE}' => $end_title,
        '{END_IMAGE}' => $end_image,
        '{REPORT_TGT}' => $report_tgt,
        '{REPORT_TITLE}' => $lang_img_nav_bar['report_title'],
        '{LOCATION}' => $location,
    );

    return template_eval($template_img_navbar, $params);
}
/******************************************************************************
** Section <<<theme_html_img_nav_menu>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_html_rating_box>>> - START
******************************************************************************/
function theme_html_rating_box()
{
    global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $THEME_DIR, $USER_DATA, $USER, $LINEBREAK;
    global $template_image_rating, $template_image_rating_oldstyle, $lang_rate_pic;

    if (!(USER_CAN_RATE_PICTURES && $CURRENT_ALBUM_DATA['votes'] == 'YES')) {
        return '';
    } else {
        //check if the users already voted or if this user is the owner
        $user_md5_id = USER_ID ? md5(USER_ID) : $USER['ID'];
        $result = cpg_db_query("SELECT pic_id FROM {$CONFIG['TABLE_VOTES']} WHERE pic_id={$CURRENT_PIC_DATA['pid']} AND user_md5_id='$user_md5_id'");

        $user_can_vote = 'false';
        if ($CURRENT_PIC_DATA['owner_id'] == $USER_DATA['user_id'] && $USER_DATA['user_id'] != 0 && ($CONFIG['rate_own_files'] == 0 || $CONFIG['rate_own_files'] == 2 && !USER_IS_ADMIN)) {
            // user is owner
            $rate_title = $lang_rate_pic['forbidden'];
        } elseif (!mysql_num_rows($result)) {
            // user hasn't voted yet, show voting things
            $rate_title = $lang_rate_pic['rate_this_pic'];
            $user_can_vote = 'true';
        } else {
            //user has voted
            $rate_title = $lang_rate_pic['already_voted'];
        }
        $rating_stars_amount = ($CONFIG['old_style_rating']) ? 5 : $CONFIG['rating_stars_amount'];
        $votes = $CURRENT_PIC_DATA['votes'] ? sprintf($lang_rate_pic['rating'], round(($CURRENT_PIC_DATA['pic_rating'] / 2000) / (5/$rating_stars_amount), 1), $rating_stars_amount, $CURRENT_PIC_DATA['votes']) : $lang_rate_pic['no_votes'];
        $pid = $CURRENT_PIC_DATA['pid'];

        if (defined('THEME_HAS_RATING_GRAPHICS')) {
            $location= $THEME_DIR;
        } else {
            $location= '';
        }

        $superCage = Inspekt::makeSuperCage();

        $params = array(
            '{TITLE}'      => $rate_title,
            '{VOTES}'      => $votes,
            '{LOCATION}'   => $location,
            '{WIDTH}'      => $CONFIG['picture_table_width'],
        );

        if ($CONFIG['old_style_rating']) {
            // use old-style rating
            $start_td = '<td class="tableb" width="17%" align="center">';
            $end_td = '</td>';
            $empty_star = '<img style="cursor:pointer" id="' . $pid . '_0" title="0" src="' . $location . 'images/rate_empty.png" alt="' . $lang_rate_pic['rubbish'] . '" onclick="rate(this)" />';
            $rating_images = $start_td . $empty_star . $empty_star . $empty_star . $empty_star . $empty_star . $end_td . $LINEBREAK;

            $empty_star = '<img style="cursor:pointer" id="' . $pid . '_1" title="1" src="' . $location . 'images/rate_empty.png" alt="' . $lang_rate_pic['poor'] . '" onclick="rate(this)" />';
            $full_star = '<img style="cursor:pointer" id="' . $pid . '_1" title="1" src="' . $location . 'images/rate_full.png" alt="' . $lang_rate_pic['poor'] . '" onclick="rate(this)" />';
            $rating_images .= $start_td . $full_star . $empty_star . $empty_star . $empty_star . $empty_star . $end_td . $LINEBREAK;

            $empty_star = '<img style="cursor:pointer" id="' . $pid . '_2" title="2" src="' . $location . 'images/rate_empty.png" alt="' . $lang_rate_pic['fair'] . '" onclick="rate(this)" />';
            $full_star = '<img style="cursor:pointer" id="' . $pid . '_2" title="2" src="' . $location . 'images/rate_full.png" alt="' . $lang_rate_pic['fair'] . '" onclick="rate(this)" />';
            $rating_images .= $start_td . $full_star . $full_star . $empty_star . $empty_star . $empty_star . $end_td . $LINEBREAK;

            $empty_star = '<img style="cursor:pointer" id="' . $pid . '_3" title="3" src="' . $location . 'images/rate_empty.png" alt="' . $lang_rate_pic['good'] . '" onclick="rate(this)" />';
            $full_star = '<img style="cursor:pointer" id="' . $pid . '_3" title="3" src="' . $location . 'images/rate_full.png" alt="' . $lang_rate_pic['good'] . '" onclick="rate(this)" />';
            $rating_images .= $start_td . $full_star . $full_star . $full_star . $empty_star . $empty_star . $end_td . $LINEBREAK;

            $empty_star = '<img style="cursor:pointer" id="' . $pid . '_4" title="4" src="' . $location . 'images/rate_empty.png" alt="' . $lang_rate_pic['excellent'] . '" onclick="rate(this)" />';
            $full_star = '<img style="cursor:pointer" id="' . $pid . '_4" title="4" src="' . $location . 'images/rate_full.png" alt="' . $lang_rate_pic['excellent'] . '" onclick="rate(this)" />';
            $rating_images .= $start_td . $full_star . $full_star . $full_star . $full_star . $empty_star . $end_td . $LINEBREAK;

            $full_star = '<img style="cursor:pointer" id="' . $pid . '_5" title="5" src="' . $location . 'images/rate_full.png" alt="' . $lang_rate_pic['great'] . '" onclick="rate(this)" />';
            $rating_images .= $start_td . $full_star . $full_star . $full_star . $full_star . $full_star . $end_td . $LINEBREAK;

            set_js_var('stars_amount', 'fallback');
            set_js_var('lang_rate_pic', $rate_title);
            $params['{RATING_IMAGES}'] = $rating_images;
            $template_rating = $template_image_rating_oldstyle;

        } else {
            //use new rating
            set_js_var('stars_amount', $rating_stars_amount);
            set_js_var('lang_rate_pic', $lang_rate_pic['rollover_to_rate']);
            $params['{JS_WARNING}'] = $lang_rate_pic['js_warning'];
            $template_rating = $template_image_rating;
        }
        set_js_var('rating', round(($CURRENT_PIC_DATA['pic_rating'] / 2000) / (5/$rating_stars_amount), 0));
        set_js_var('theme_dir', $location);
        set_js_var('can_vote', $user_can_vote);
        list($timestamp, $form_token) = getFormToken();
        set_js_var('form_token', $form_token);
        set_js_var('timestamp', $timestamp);

        return template_eval($template_rating, $params);
    }
}
/******************************************************************************
** Section <<<theme_html_rating_box>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_html_comments>>> - START
******************************************************************************/
// Displays comments for a specific picture
function theme_html_comments($pid)
{
    global $CONFIG, $USER, $CURRENT_ALBUM_DATA, $lang_date, $HTML_SUBST;
    global $template_image_comments, $template_add_your_comment, $lang_display_comments, $lang_common, $REFERER, $lang_bbcode_help_title, $lang_bbcode_help;

    $superCage = Inspekt::makeSuperCage();
    $template_add_your_comment = CPGPluginAPI::filter('theme_add_comment', $template_add_your_comment);
    $template_image_comments = CPGPluginAPI::filter('theme_edit_comment', $template_image_comments);

    list($timestamp, $form_token) = getFormToken();

    $html = '';

    //report to moderator buttons
    if (!(($CONFIG['report_post']==1) && (USER_CAN_SEND_ECARDS))) {
        template_extract_block($template_image_comments, 'report_comment_button');
    }

    if (!$CONFIG['enable_smilies']) {
        $tmpl_comment_edit_box = template_extract_block($template_image_comments, 'edit_box_no_smilies', '{EDIT}');
        template_extract_block($template_image_comments, 'edit_box_smilies');
        template_extract_block($template_add_your_comment, 'input_box_smilies');
    } else {
        $tmpl_comment_edit_box = template_extract_block($template_image_comments, 'edit_box_smilies', '{EDIT}');
        template_extract_block($template_image_comments, 'edit_box_no_smilies');
        template_extract_block($template_add_your_comment, 'input_box_no_smilies');
    }


    $tmpl_comments_buttons = template_extract_block($template_image_comments, 'buttons', '{BUTTONS}');
    $tmpl_comments_ipinfo = template_extract_block($template_image_comments, 'ipinfo', '{IPINFO}');

    if ($CONFIG['comments_sort_descending'] == 1) {
        $comment_sort_order = 'DESC';
    } else {
        $comment_sort_order = 'ASC';
    }

    $result = cpg_db_query("SELECT COUNT(msg_id) FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'");
    list($num) = mysql_fetch_row($result);

    if ($num) {

        $limit = $CONFIG['comments_per_page'];
        $max = ceil($num/$limit);

        if ($superCage->get->keyExists('page')) {
            $page = $superCage->get->getInt('page');
            $page = min($page, $max);
            $page = max(0, $page);
        } else if ($CONFIG['comments_sort_descending'] == 1) {
            $page = 1;
        } else {
            $page = $max;
        }

        $start = max(0, $num - (($max-($page-1))*$limit));

        ob_start();
        echo '<br />';
        starttable();

        
        echo '<tr><td class="tableh2"><div style="float: left">'.$lang_display_comments['comment'].' '.sprintf($lang_display_comments['comment_x_to_y_of_z'], ($start+1), min($num, $start+$limit), $num).'</div>';
        echo '<div style="float: right">'.$lang_display_comments['page'].': ';
        $links = array();

        for ($i = 1; $i <= $max; $i++){
            if ($i < 5 || ($i > $max - 5) || (($i > $page -5) && ($i < $page + 5))){
                $links[$i]= '<a href="displayimage.php?pid=' . $pid . '&amp;page='.$i.'#comments_top">'.$i.'</a>';
            }
        }

        $links[$page] = "<b>$page</b>";
        echo implode(' - ', $links);
        echo '</div></td></tr>';

        endtable();
        echo '<br />';
        $html .= ($tabs = ob_get_clean());

        $result = cpg_db_query("SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, author_md5_id, msg_raw_ip, msg_hdr_ip, pid, approval FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid' ORDER BY msg_id $comment_sort_order LIMIT $start, $limit");

        while ($row = mysql_fetch_assoc($result)) { // while-loop start
            $user_can_edit = (GALLERY_ADMIN_MODE) || (USER_ID && USER_ID == $row['author_id'] && USER_CAN_POST_COMMENTS) || (!USER_ID && USER_CAN_POST_COMMENTS && ($USER['ID'] == $row['author_md5_id']));
            if (($user_can_edit != '' && $CONFIG['comment_user_edit'] != 0) || (GALLERY_ADMIN_MODE)) {
                $comment_buttons = $tmpl_comments_buttons;
                $comment_edit_box = $tmpl_comment_edit_box;
            } else {
                $comment_buttons = '';
                $comment_edit_box = '';
            }
            $comment_ipinfo = ($row['msg_raw_ip'] && GALLERY_ADMIN_MODE)?$tmpl_comments_ipinfo : '';
            $hide_comment = 0;

            // comment approval
            $pending_approval = '';
            if (USER_IS_ADMIN) {
                //display the selector approve/disapprove
                if ($row['approval'] == 'NO') {
                    $pending_approval = cpg_fetch_icon('comment_disapprove_disabled', 0) . '<a href="reviewcom.php?pos=-{PID}&amp;msg_id={MSG_ID}&amp;form_token={FORM_TOKEN}&amp;timestamp={TIMESTAMP}&amp;what=approve" title="' . $lang_display_comments['approve'] . '">' . cpg_fetch_icon('comment_approve', 0) . '</a>';
                } else {
                    $pending_approval = '<a href="reviewcom.php?pos=-{PID}&amp;msg_id={MSG_ID}&amp;form_token={FORM_TOKEN}&amp;timestamp={TIMESTAMP}&amp;what=disapprove" title="' . $lang_display_comments['disapprove'] . '">' . cpg_fetch_icon('comment_disapprove', 0) . '</a>' . cpg_fetch_icon('comment_approve_disabled', 0);
                }
            } else { // user or guest is logged in - start
                if ($row['approval'] == 'NO') { // the comment is not approved - start
                    if ($user_can_edit) { // the comment comes from the current visitor, display it with a warning that it needs admin approval
                        $pending_approval = cpg_fetch_icon('comment_approval', 0, $lang_display_comments['pending_approval']);
                    } else { // the comment comes from someone else - don't display it at all
                        if ($CONFIG['comment_placeholder'] == 0) {
                            $hide_comment = 1;
                        } else {
                            $row['msg_author'] = $lang_display_comments['unapproved_comment'];
                            $row['msg_body'] = $lang_display_comments['pending_approval_message'];
                            $row['author_id'] = 0;
                        }
                    }
                } // the comment is not approved - end
            } // user or guest is logged in - end

            if ($CONFIG['enable_smilies']) {
                $comment_body = process_smilies(make_clickable($row['msg_body']));
                $smilies = generate_smilies("f{$row['msg_id']}", 'msg_body');
            } else {
                $comment_body = make_clickable($row['msg_body']);
                $smilies = '';
            }

            // wrap the comment into italics if it isn't approved
            if ($row['approval'] == 'NO') {
                $comment_body = '<em>'.$comment_body.'</em>';
                $row['msg_author'] = $row['msg_author'];
            }

            list($row['ip_detail']) = CPGPluginAPI::filter('ip_information', array('', $row['msg_hdr_ip']));
            $ip = $row['msg_hdr_ip']. $row['ip_detail'];
            if ($row['msg_hdr_ip'] != $row['msg_raw_ip']) {
                list($row['ip_detail']) = CPGPluginAPI::filter('ip_information', array('', $row['msg_raw_ip']));
                $ip .= ' [' . $row['msg_raw_ip'] . $row['ip_detail'] . ']';
            }

            list($timestamp, $form_token) = getFormToken();
            $params = array('{EDIT}' => &$comment_edit_box,
                '{BUTTONS}' => &$comment_buttons,
                '{IPINFO}' => &$comment_ipinfo,
                '{PENDING_APPROVAL}' => &$pending_approval,
                '{FORM_TOKEN}' => $form_token,
                '{TIMESTAMP}' => $timestamp,
                );

            $template = template_eval($template_image_comments, $params);

            if ($row['author_id'] == 0) {
                $profile_lnk = stripslashes($row['msg_author']);
            } else {
                $profile_lnk = '<a href="profile.php?uid='.$row['author_id'].'">'.stripslashes($row['msg_author']).'</a>';
            }

            $params = array('{MSG_AUTHOR_LNK}' => $profile_lnk,
                '{MSG_AUTHOR}' => $row['msg_author'],
                '{MSG_ID}' => $row['msg_id'],
                '{PID}' => $row['pid'],
                '{EDIT_TITLE}' => &$lang_display_comments['edit_title'],
                '{DELETE_TITLE}' => &$lang_display_comments['delete_title'],
                '{DELETE_ICON}' => cpg_fetch_icon('delete', 0),
                '{EDIT_ICON}' => cpg_fetch_icon('edit', 0),
                '{CONFIRM_DELETE}' => &$lang_display_comments['confirm_delete'],
                '{MSG_DATE}' => localised_date($row['msg_date'], $lang_date['comment']),
                '{MSG_BODY}' => bb_decode($comment_body),
                '{MSG_BODY_RAW}' => $row['msg_body'],
                '{OK}' => &$lang_common['ok'],
                '{SMILIES}' => $smilies,
                '{IP}' => $ip,
                '{REPORT_COMMENT_TITLE}' => &$lang_display_comments['report_comment_title'],
                '{REPORT_COMMENT_ICON}' => cpg_fetch_icon('report', 0),
                '{WIDTH}' => $CONFIG['picture_table_width'],
                '{FORM_TOKEN}' => $form_token,
                '{TIMESTAMP}' => $timestamp,
                );

            if ($hide_comment != 1) {
                $html .= template_eval($template, $params);
            }
        } // while-loop end

        $html .= $tabs;
    }
    if (USER_CAN_POST_COMMENTS && $CURRENT_ALBUM_DATA['comments'] == 'YES') {
        if (USER_ID) {
            $user_name_input = '<tr><td colspan="2"><input type="hidden" name="msg_author" value="' . stripslashes(USER_NAME) . '" /></td>';
            template_extract_block($template_add_your_comment, 'user_name_input', $user_name_input);
            $user_name = '';
        } else {
            if (isset($USER['name'])) {
              $user_name = strtr($USER['name'], $HTML_SUBST);
            } else {
              $user_name = $lang_display_comments['your_name'];
            }
        }

        if (($CONFIG['comment_captcha'] == 0) || ($CONFIG['comment_captcha'] == 2 && USER_ID)) {
            template_extract_block($template_add_your_comment, 'comment_captcha');
        } else {
            $template_add_your_comment = CPGPluginAPI::filter('captcha_comment_print', $template_add_your_comment);
        }

        if ($CONFIG['show_bbcode_help']) {
            $captionLabel = '&nbsp;'. cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_bbcode_help_title))).'&amp;t='.urlencode(base64_encode(serialize($lang_bbcode_help))),470,245);
        }

        list($timestamp, $form_token) = getFormToken();
        $params = array('{ADD_YOUR_COMMENT}' => $lang_display_comments['add_your_comment'],
            // Modified Name and comment field
            '{NAME}' => $lang_display_comments['name'],
            '{COMMENT}' => $lang_display_comments['comment'],
            '{CONFIRM}' => $lang_common['confirm'].'&nbsp;'. cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_common['captcha_help_title']))).'&amp;t='.urlencode(base64_encode(serialize($lang_common['captcha_help']))),470,245),
            '{PIC_ID}' => $pid,
            '{USER_NAME}' => $user_name,
            '{MAX_COM_LENGTH}' => $CONFIG['max_com_size'],
            '{OK}' => $lang_common['ok'],
            '{OK_ICON}' => cpg_fetch_icon('ok', 1),
            '{DEFAULT_USERNAME}' => $lang_display_comments['your_name'],
            '{DEFAULT_USERNAME_MESSAGE}' => $lang_display_comments['default_username_message'],
            '{SMILIES}' => '',
            '{WIDTH}' => $CONFIG['picture_table_width'],
            '{HELP_ICON}' => $captionLabel,
            '{FORM_TOKEN}' => $form_token,
            '{TIMESTAMP}' => $timestamp,
            );

        if ($CONFIG['enable_smilies']) {
            $params['{SMILIES}'] = generate_smilies();
        } else {
            template_extract_block($template_add_your_comment, 'smilies');
        }

        template_extract_block($template_add_your_comment, 'login_to_comment');
        if ($CONFIG['comments_sort_descending'] == 1) {
            $html = '<br />'.template_eval($template_add_your_comment, $params).$html;
        } else {
            $html .= template_eval($template_add_your_comment, $params);
        }
    } else { // user can not post comments
        if ($CONFIG['comment_promote_registration'] == 1 && $CURRENT_ALBUM_DATA['comments'] == 'YES') {
            template_extract_block($template_add_your_comment, 'user_name_input');
            if ($CONFIG['enable_smilies'] == 1) {
                template_extract_block($template_add_your_comment, 'input_box_smilies');
            } else {
                template_extract_block($template_add_your_comment, 'input_box_no_smilies');
            }
            template_extract_block($template_add_your_comment, 'comment_captcha');
            template_extract_block($template_add_your_comment, 'smilies');
            template_extract_block($template_add_your_comment, 'submit');
            $params = array('{ADD_YOUR_COMMENT}' => $lang_display_comments['add_your_comment'],
                '{WIDTH}' => $CONFIG['picture_table_width'],
                '{LOGIN_TO_COMMENT}' => sprintf($lang_display_comments['log_in_to_comment'], '<a href="login.php?referer='.$REFERER.'">', '</a>'),
                '{HELP_ICON}' => '',
                );
            if ($CONFIG['comments_sort_descending'] == 1) {
                $html = '<br />'.template_eval($template_add_your_comment, $params).$html;
            } else {
                $html .= template_eval($template_add_your_comment, $params);
            }
        }
    }

    return $html;
}
/******************************************************************************
** Section <<<theme_html_comments>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_slideshow>>> - START
******************************************************************************/
function theme_slideshow($start_img,$title)
{
    global $CONFIG, $lang_display_image_php, $template_display_media, $lang_common, $album, $pid, $slideshow;
    global $cat, $date, $THEME_DIR;

    pageheader($lang_display_image_php['slideshow']);
    template_extract_block($template_display_media, 'img_desc', $start_slideshow);

    /** set styles to slideshow background */
    $setDimentionW= $CONFIG['picture_width'] + 100;
    $setDimentionH= $CONFIG['picture_width'] + 10;

    if (defined('THEME_HAS_PROGRESS_GRAPHICS')) {
        $prefix = $THEME_DIR;
    } else {
        $prefix = '';
    }

    $params = array(
        '{SLIDESHOW_STYLE}' => 'width:' .$setDimentionW. 'px; height: '.$setDimentionH.'px; position: relative;' ,
        '{IMAGE}' => '<img id="showImage" src="' . $start_img . '" class="image" alt="" border="" /><br />',
        '{ADMIN_MENU}' => '',
        '{LOADER_ICON_PATH}' => $prefix . 'images/loader.gif',
    );

    echo '<a name="top_display_media"></a>';
    starttable();
    echo <<<EOT
        <tr class="noscript">
            <td align="center" class="tableh2">
              <noscript>
                  {$lang_common['javascript_needed']}
              </noscript>
            </td>
        </tr>
        <tr>
            <td align="center" class="navmenu" style="white-space: nowrap;">
                <div id="title">{$title}</div>
            </td>
        </tr>
EOT;
    endtable();

    starttable();
    echo template_eval($template_display_media, $params);
    endtable();

    starttable();
    echo <<<EOT
        <tr>
                <td align="center" id="back-to" class="navmenu" >
                        <a class="navmenu" style="cursor:pointer">{$lang_display_image_php['stop_slideshow']}</a>
                </td>
        </tr>

EOT;
    endtable();
    pagefooter();
}
/******************************************************************************
** Section <<<theme_slideshow>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_display_fullsize_pic>>> - START
******************************************************************************/
// Display the full size image
function theme_display_fullsize_pic()
{
    global $CONFIG, $THEME_DIR, $FORBIDDEN_SET, $LINEBREAK, $pid;
    global $lang_errors, $lang_fullsize_popup, $lang_charset;

    $superCage = Inspekt::makeSuperCage();

    if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
        printf($lang_errors['login_needed'],'','','','');
        die();
    } elseif (USER_ID && USER_ACCESS_LEVEL <= 2) {
        printf($lang_errors['access_intermediate_only'],'','','','');
        die();
    }
    if ($superCage->get->keyExists('picfile')) {
        if (!GALLERY_ADMIN_MODE) {
            cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
        }
        //$picfile = $_GET['picfile'];
        //$picfile = $superCage->get->getPath('picfile'); // doesn't work with HTML entities
        $matches = $superCage->get->getMatched('picfile', '/^[0-9A-Za-z\/_.-]+$/');
        $picfile = $matches[0];
        $picname = $CONFIG['fullpath'] . $picfile;
        $imagesize = @getimagesize($picname);
        $imagedata = array('name' => $picfile, 'path' => path2url($picname), 'geometry' => $imagesize[3]);
    } elseif ($pid) {
        $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} AS p " . "WHERE pid='$pid' $FORBIDDEN_SET";
        $result = cpg_db_query($sql);
        if (!mysql_num_rows($result)) {
            cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }
        $row = mysql_fetch_assoc($result);
        $pic_url = get_pic_url($row, 'fullsize');
        $geom = 'width="' . $row['pwidth'] . '" height="' . $row['pheight'] . '"';
        $imagedata = array('name' => $row['filename'], 'path' => $pic_url, 'geometry' => $geom);
    }
    if ((!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) || (USER_ID && USER_ACCESS_LEVEL <= 2)) {
        // adjust the size of the window if we don't have to catter for a full-size pop-up, but only a text message
        $row['pwidth'] = 200;
        $row['pheight'] = 100;
    }

    $charset = ($CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset']);
    $fullsize_html = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=$charset" />
        <title>{$CONFIG['gallery_name']}: {$lang_fullsize_popup['click_to_close']}</title>
        <style type="text/css">
            body { margin: 0; padding: 0; background-color: gray; }
            img { margin:0; padding:0; border:0; }
            #content { margin:0 auto; padding:0; border:0; }
            table { border:0; width:{$row['pwidth']}px; height:{$row['pheight']}px; border-collapse:collapse}
            td { vertical-align: middle; text-align:center; }
        </style>

        <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="js/jquery.dimensions.pack.js"></script>
        <script type="text/javascript" src="js/displayimage.fullsize.js"></script>
    </head>
    <body style="margin:0px; padding:0px; background-color: gray;">

EOT;
    if ($CONFIG['transparent_overlay'] == 1) {
        $fullsize_html .= <<<EOT
        <table cellpadding="0" cellspacing="0" align="center" style="padding:0px;">
            <tr>

EOT;
        $fullsize_html .=  '<td align="center" valign="middle" background="' . htmlspecialchars($imagedata['path']) . '" ' . $imagedata['geometry'] . ' class="image">';
        $fullsize_html .=  '<div id="content">';
        $fullsize_html .=  '<a href="javascript: window.close()" style="border:none"><img src="images/image.gif?id='
                . floor(rand()*1000+rand())
                . '&amp;fullsize=yes" '
                . $imagedata['geometry']
                . ' alt="'
                . htmlspecialchars($imagedata['name'])
                . '" title="'
                . htmlspecialchars($imagedata['name'])
                . $LINEBREAK . $lang_fullsize_popup['click_to_close']
                . '" /></a><br />' . $LINEBREAK;
        $fullsize_html .=  <<<EOT
                    </div>
                </td>
            </tr>
        </table>

EOT;
    } else {
        $fullsize_html .=  '        <div id="content">'.$LINEBREAK;
        $fullsize_html .=  '<a href="javascript: window.close()"><img src="'
        . htmlspecialchars($imagedata['path']) . '" '
        . $imagedata['geometry']
        . ' id="fullsize_image" alt="'
        . htmlspecialchars($imagedata['name'])
        . '" title="'
        . htmlspecialchars($imagedata['name'])
        . $LINEBREAK . $lang_fullsize_popup['click_to_close']
        . '" /></a><br />' . $LINEBREAK
        . '        </div>'.$LINEBREAK;
    }
    $fullsize_html .= <<<EOT
  </body>
</html>

EOT;

    $fullsize_html = CPGPluginAPI::filter('fullsize_html', $fullsize_html);
    echo $fullsize_html;
}
/******************************************************************************
** Section <<<theme_display_fullsize_pic>>> - END
******************************************************************************/




/******************************************************************************
** Section <<<theme_vanity>>> - START
******************************************************************************/
function theme_vanity()
{
    global $THEME_DIR, $template_vanity ;

    if (defined('THEME_HAS_VANITY_GRAPHICS')) {
        $location= $THEME_DIR;
    } else {
        $location= '';
    }

    $params = array('{LOCATION}' => $location);

    return template_eval($template_vanity, $params);
}
/******************************************************************************
** Section <<<theme_vanity>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_display_bar>>> - START
******************************************************************************/
/**
* theme_display_bar()
*
* Display a bar graph. 
* For a list of possible valid color names, look up the function definition of 
* cpgValidateColor in include/functions.inc.php
*
* @param float $actualValue
* @param float $maxValue
* @param string $textColor // color code or hex value
* @param string $textShadowColor // color code or hex value
* @param string $textUnit // text to show up after value (e.g. % or kB)
* @param string $leftBar // color code or hex value or path to background image
* @param string $rightBar // color code or hex value or path to background image
* @return string $return
**/
function theme_display_bar(
                       $actualValue = 0,
                       $maxValue = '100',
                       $maxBarSizeInPixels = '400',
                       $textColor = 'black',
                       $textShadowColor = '',
                       $textUnit = '',
                       $leftBar = 'red',
                       $rightBar = ''
                       ) 
{
    global $lang_errors;
    // Validate parameters
    if ($maxValue == 0 || $maxValue == '') {
        $maxValue = $actualValue;
    }
    // Initialize some vars:
    $return = '';
    $cell1Width = (($maxValue != 0) ? floor(100 * $actualValue/$maxValue): 0);
    $cell2Width = 100 - $cell1Width;
    // compose the output string
    $return .= '<table border="0" cellspacing="0" cellpadding="0" width="'.$maxBarSizeInPixels.'">';
    $return .= '<tr>';
    $return .= '<td width="'.$cell1Width.'%" style="';
    if ($leftBar != '') {
        $leftBarColor = cpgValidateColor($leftBar);
        if ($leftBarColor != '') {
            $return .= 'background-color:'.$leftBarColor.';';
        } else {
            $return .= 'background-image:url('.$leftBar.');';
        }
    }
    $return .= '">';
    $return .= '<img src="images/spacer.gif" width="1" height="16" border="0" alt="" align="left" />';
    if ($textShadowColor != '') {
        $textShadowColor = cpgValidateColor($textShadowColor);
        $return .= '<div style="position:absolute;display:block;color:'.$textShadowColor.';padding-top:1px;padding-left:1px;height:16px;';
        $return .= '">';
        $return .= $actualValue;
        $return .= $textUnit;
        $return .= '</div>';
    }
    $return .= '<div style="position:absolute;display:block;';
    if ($textColor != '') {
        $textColor = cpgValidateColor($textColor);
        $return .= 'color:'.$textColor;
    }
    $return .= '">';
    $return .= $actualValue;
    $return .= $textUnit;
    $return .= '</div>';
    $return .= '</td>';
    $return .= '<td width="'.$cell2Width.'%" style="';
    if ($rightBar != '') {
        $rightBarColor = cpgValidateColor($rightBar);
        if ($leftBarColor != '') {
            $return .= 'background-color:'.$rightBarColor.';';
        } else {
            $return .= 'background-image:url('.$rightBar.');';
        }
    }
    $return .= '">';
    $return .= '<img src="images/spacer.gif" width="1" height="16" border="0" alt="" align="left" />';
    $return .= '</td>';
    $return .= '</tr>';
    $return .= '</table>';
    return $return;
}
/******************************************************************************
** Section <<<theme_display_bar>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<theme_page_title>>> - START
******************************************************************************/
// Creates the title tag for each page
// For the sake of search engine friendliness, the dynamic part $section should come first
function theme_page_title($section) 
{
    global $CONFIG;
    $return = strip_tags(bb_decode($section)) . ' - ' . $CONFIG['gallery_name'];
    return $return;
}
/******************************************************************************
** Section <<<theme_page_title>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<$template_sidebar>>> - START
******************************************************************************/
// HTML template for sidebar
$template_sidebar = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{LANG_DIR}">
<head>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
<title>{TITLE}</title>
<script src="js/jquery-1.4.2.js" type="text/javascript"></script>
<script src="js/jquery.treeview.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $("#tree").treeview({
            collapsed: true,
            unique: true,
            animated: "slow",
            persist: "location",
        });
    })
</script>
<link rel="stylesheet" href="css/coppermine.css" type="text/css" />
<link rel="stylesheet" href="css/treeview.css" type="text/css" />
</head>
<body>
{SIDEBAR_CONTENT}
<form method="GET" action="thumbnails.php" target="_content">
  <input type="hidden" name="album" value="search" />
  <input type="hidden" name="title" value="on" />
  <input type="hidden" name="caption" value="on" />
  <input type="hidden" name="keywords" value="on" />
  <input type="hidden" name="filename" value="on" />
  <div id="SidebarSearchWrapper" style="margin: 1px 1px;float: left;">
    <input id="sidebarSearchField" type="text" name="search" class="textinput" />
    <button type="submit" class="button" name="sidebarSearchButton" id="sidebarSearchButton" value="{SEARCH_TITLE}">{SEARCH_ICON}</button>
    <a href="sidebar.php" target="_self">{REFRESH_ICON}</a>
  </div>
</form>
</body>
</html>
EOT;
/******************************************************************************
** Section <<<$template_sidebar>>> - END
******************************************************************************/



/******************************************************************************
** Section <<<adminmessages>>> - START
******************************************************************************/
// Function to display messages which are shown only to admin
function adminmessages()
{
    global $register_globals_flag, $lang_errors;
    // If user is not admin (and in admin mode), then return
    if (!GALLERY_ADMIN_MODE) {
        return;
    }

    // If register_globals is On, then show the warning message.
    if ($register_globals_flag == true) {
        msg_box($lang_errors['register_globals_title'], $lang_errors['register_globals_warning'] . ' ' . cpg_display_help('f=install.htm&amp;as=install_server_config_register_globals&amp;ae=install_server_config_register_globals_end&amp;top=1', '800', '600'), '', '', 'warning');
    }
}
/******************************************************************************
** Section <<<adminmessages>>> - END
******************************************************************************/

?>
