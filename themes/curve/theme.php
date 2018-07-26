<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * themes/curve/theme.php
 * @since  1.6.04
 */

/**  This theme has had redundant CORE items removed **/

define('THEME_HAS_PROGRESS_GRAPHICS', 1);
define('THEME_HAS_FILM_STRIP_GRAPHICS', 1);


/******************************************************************************
** Section <<<assemble_template_buttons>>> - START
******************************************************************************/
// Creates buttons from a template using an array of tokens
// this function is used in this file it needs to be declared before being called.
function assemble_template_buttons($template_buttons,$buttons)
{
    global $openulid;

    $counter=0;
    $output='';

    foreach ($buttons as $button) {

        if (isset($button[4]) && !isset($button[7])) {
            $spacer=$button[4];
        } else {
            $spacer='';
        }

        if (isset($button[6])) {
            $ico=$button[6];
        } else {
            $ico='';
        }

        $params = array(
            '{SPACER}'     => $spacer,
            '{BLOCK_ID}'   => $button[3],
            '{HREF_TGT}'   => $button[2],
            '{HREF_TITLE}' => $button[1],
            '{HREF_LNK}'   => $button[0],
            '{HREF_ATTRIBUTES}'   => $button[5],
            '{HREF_ICO}'   => $ico,
            );

        if (isset($openulid)) {
            $params['{OPEN_BLOCK_ID}'] = $openulid;
        }

        if (isset($button[7])) {
            $dropdown_template = add_dropdown_structure($button[7], $button[3]);
            $output.=template_eval($dropdown_template, $params);
        } else {
            $output.=template_eval($template_buttons, $params);
        }
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
function addbutton(&$menu,$href_lnk,$href_title,$href_tgt,$block_id,$spacer,$href_attrib='',$ico='',$ddtype='')
{
    $menu[]=array($href_lnk,$href_title,$href_tgt,$block_id,$spacer,$href_attrib,$ico,$ddtype);
}
/******************************************************************************
** Section <<<addbutton>>> - END
******************************************************************************/


/******************************************************************************
** Section <<<add_dropdown_structure>>> - START
******************************************************************************/
// Replaces standard template with dropdown template.
function add_dropdown_structure($type, $blockid){
    global $openulid;
    switch ($type) {
        case 'standaloneli':
            return '
                        <!-- BEGIN {BLOCK_ID} -->
                        <li>
                            <a href="{HREF_TGT}" title="{HREF_TITLE}"  class="firstlevel" {HREF_ATTRIBUTES}><span class="firstlevel">{HREF_ICO}{HREF_LNK}</span></a>
                        </li>
                        <!-- END {BLOCK_ID} -->';

        case 'openul':
            $openulid = $blockid;
            return '
                        <!-- BEGIN {BLOCK_ID} -->
                        <li>
                            <a href="{HREF_TGT}" title="{HREF_TITLE}" class="firstlevel" {HREF_ATTRIBUTES}><span class="firstlevel">{HREF_ICO}{HREF_LNK}</span></a>
                            <ul>';

        case 'innerli':
            return '
                                <!-- BEGIN {BLOCK_ID} -->
                                <li>
                                    <a href="{HREF_TGT}" title="{HREF_TITLE}" {HREF_ATTRIBUTES}><span>{HREF_ICO}{HREF_LNK}</span></a>
                                </li>
                                <!-- END {BLOCK_ID} -->';

        case 'closeul':
            return '
                                <!-- BEGIN {BLOCK_ID} -->
                                <li>
                                    <a href="{HREF_TGT}" title="{HREF_TITLE}" {HREF_ATTRIBUTES}><span>{HREF_ICO}{HREF_LNK}</span></a>
                                </li>
                                <!-- END {BLOCK_ID} -->
                            </ul>
                        </li>
                        <!-- END {OPEN_BLOCK_ID} -->';
    }
}
/******************************************************************************
** Section <<<$add_dropdown_structure>>> - END
******************************************************************************/


/******************************************************************************
** Section <<<$template_sys_menu>>> - START
******************************************************************************/
// HTML template for sys_menu
$template_sys_menu = <<<EOT
<ul class="dropmenu">
          {BUTTONS}
</ul>
EOT;
/******************************************************************************
** Section <<<$template_sys_menu>>> - END
******************************************************************************/


/******************************************************************************
** Section <<<$template_sub_menu>>> - START
******************************************************************************/
// HTML template for sub_menu
$template_sub_menu = $template_sys_menu;
/******************************************************************************
** Section <<<$template_sub_menu>>> - END
******************************************************************************/


/******************************************************************************
** Section <<<THEME_HAS_NO_SYS_MENU_BUTTONS>>> - START
******************************************************************************/
if (!defined('THEME_HAS_NO_SYS_MENU_BUTTONS')) {

  // HTML template for template sys_menu spacer

  $template_sys_menu_spacer = '';

  // HTML template for template sys_menu buttons

  $template_sys_menu_button = <<<EOT
    <!-- BEGIN {BLOCK_ID} -->
    <li>
        <a href="{HREF_TGT}" title="{HREF_TITLE}" class="firstlevel" {HREF_ATTRIBUTES}><span class="firstlevel">{HREF_ICO}{HREF_LNK}</span></a>
    </li>
    <!-- END {BLOCK_ID} -->
EOT;

    // {HREF_LNK}{HREF_TITLE}{HREF_TGT}{BLOCK_ID}{SPACER}{HREF_ATTRIBUTES}
    addbutton($sys_menu_buttons,'{HOME_LNK}','{HOME_TITLE}','{HOME_TGT}','home',$template_sys_menu_spacer,'','{HOME_ICO}','openul');
    addbutton($sys_menu_buttons,'{CONTACT_LNK}','{CONTACT_TITLE}','{CONTACT_TGT}','contact',$template_sys_menu_spacer,'','{CONTACT_ICO}','innerli');
    addbutton($sys_menu_buttons,'{SIDEBAR_LNK}','{SIDEBAR_TITLE}','{SIDEBAR_TGT}','sidebar',$template_sys_menu_spacer,'','{SIDEBAR_ICO}','innerli');
    addbutton($sys_menu_buttons,'{MY_PROF_LNK}','{MY_PROF_TITLE}','{MY_PROF_TGT}','my_profile',$template_sys_menu_spacer,'','{MY_PROF_ICO}','innerli');
    addbutton($sys_menu_buttons,'{MEMBERLIST_LNK}','{MEMBERLIST_TITLE}','{MEMBERLIST_TGT}','allow_memberlist',$template_sys_menu_spacer,'','{MEMBERLIST_ICO}','closeul');
    addbutton($sys_menu_buttons,'{MY_GAL_LNK}','{MY_GAL_TITLE}','{MY_GAL_TGT}','my_gallery',$template_sys_menu_spacer,'','{MY_GAL_ICO}','openul');
    addbutton($sys_menu_buttons,'{USR_MODE_LNK}','{USR_MODE_TITLE}','{USR_MODE_TGT}','leave_admin_mode',$template_sys_menu_spacer,'','{USR_MODE_ICO}','innerli');
    addbutton($sys_menu_buttons,'{ADM_MODE_LNK}','{ADM_MODE_TITLE}','{ADM_MODE_TGT}','enter_admin_mode',$template_sys_menu_spacer,'','{ADM_MODE_ICO}','closeul');
    if (array_key_exists('allowed_albums', $USER_DATA) && is_array($USER_DATA['allowed_albums']) && count($USER_DATA['allowed_albums'])) {
        addbutton($sys_menu_buttons,'{UPL_APP_LNK}','{UPL_APP_TITLE}','{UPL_APP_TGT}','upload_approval',$template_sys_menu_spacer,'','{UPL_APP_ICO}','standaloneli');
    }
    addbutton($sys_menu_buttons,'{UPL_PIC_LNK}','{UPL_PIC_TITLE}','{UPL_PIC_TGT}','upload_pic',$template_sys_menu_spacer,'','{UPL_PIC_ICO}','standaloneli');
    addbutton($sys_menu_buttons,'{REGISTER_LNK}','{REGISTER_TITLE}','{REGISTER_TGT}','register',$template_sys_menu_spacer,'','{REGISTER_ICO}','standaloneli');
    addbutton($sys_menu_buttons,'{LOGIN_LNK}','{LOGIN_TITLE}','{LOGIN_TGT}','login','','','{LOGIN_ICO}','standaloneli');
    addbutton($sys_menu_buttons,'{LOGOUT_LNK}','{LOGOUT_TITLE}','{LOGOUT_TGT}','logout','','','{LOGOUT_ICO}','standaloneli');
    // Login and Logout don't have a spacer as only one is shown, and either would be the last option.

  $sys_menu_buttons = CPGPluginAPI::filter('sys_menu',$sys_menu_buttons);
  $params = array('{BUTTONS}' => assemble_template_buttons($template_sys_menu_button,$sys_menu_buttons));
  $template_sys_menu = template_eval($template_sys_menu,$params);
}
/******************************************************************************
** Section <<<THEME_HAS_NO_SYS_MENU_BUTTONS>>> - END
******************************************************************************/


/******************************************************************************
** Section <<<THEME_HAS_NO_SUB_MENU_BUTTONS>>> - START
******************************************************************************/
if (!defined('THEME_HAS_NO_SUB_MENU_BUTTONS')) {

    // HTML template for template sub_menu spacer

    $template_sub_menu_spacer = $template_sys_menu_spacer;

    // HTML template for template sub_menu buttons

    $template_sub_menu_button = <<<EOT
    <!-- BEGIN {BLOCK_ID} -->
    <li>
        <a href="{HREF_TGT}" title="{HREF_TITLE}" class="firstlevel" {HREF_ATTRIBUTES}><span class="firstlevel">{HREF_ICO}{HREF_LNK}</span></a>
    </li>
    <!-- END {BLOCK_ID} -->
EOT;

    // HTML template for template sub_menu buttons

    // {HREF_LNK}{HREF_TITLE}{HREF_TGT}{BLOCK_ID}{SPACER}{HREF_ATTRIBUTES}
    addbutton($sub_menu_buttons,'{CUSTOM_LNK_LNK}','{CUSTOM_LNK_TITLE}','{CUSTOM_LNK_TGT}','custom_link',$template_sub_menu_spacer,'','{CUSTOM_LNK_ICO}','standaloneli');
    addbutton($sub_menu_buttons,'{ALB_LIST_LNK}','{ALB_LIST_TITLE}','{ALB_LIST_TGT}','album_list',$template_sub_menu_spacer,'','{ALB_LIST_ICO}','openul');
    addbutton($sub_menu_buttons,'{LASTUP_LNK}','{LASTUP_TITLE}','{LASTUP_TGT}','lastup',$template_sub_menu_spacer,'rel="nofollow"','{LASTUP_ICO}','innerli');
    addbutton($sub_menu_buttons,'{LASTCOM_LNK}','{LASTCOM_TITLE}','{LASTCOM_TGT}','lastcom',$template_sub_menu_spacer,'rel="nofollow"','{LASTCOM_ICO}','innerli');
    addbutton($sub_menu_buttons,'{TOPN_LNK}','{TOPN_TITLE}','{TOPN_TGT}','topn',$template_sub_menu_spacer,'rel="nofollow"','{TOPN_ICO}','innerli');
    addbutton($sub_menu_buttons,'{TOPRATED_LNK}','{TOPRATED_TITLE}','{TOPRATED_TGT}','toprated',$template_sub_menu_spacer,'rel="nofollow"','{TOPRATED_ICO}','innerli');
    if ($CONFIG['browse_by_date'] != 0) {
        addbutton($sub_menu_buttons, '{BROWSEBYDATE_LNK}', '{BROWSEBYDATE_TITLE}', '{BROWSEBYDATE_TGT}', 'browse_by_date', $template_sub_menu_spacer, 'rel="nofollow" class="greybox"','{BROWSEBYDATE_ICO}','innerli');
    }
    addbutton($sub_menu_buttons,'{FAV_LNK}','{FAV_TITLE}','{FAV_TGT}','favpics',$template_sub_menu_spacer,'rel="nofollow"','{FAV_ICO}','closeul');
    addbutton($sub_menu_buttons,'{SEARCH_LNK}','{SEARCH_TITLE}','{SEARCH_TGT}','search','','','{SEARCH_ICO}','standaloneli');

    $sub_menu_buttons = CPGPluginAPI::filter('sub_menu',$sub_menu_buttons);
    $params = array('{BUTTONS}' => assemble_template_buttons($template_sub_menu_button,$sub_menu_buttons));
    $template_sub_menu = template_eval($template_sub_menu,$params);
}
/******************************************************************************
** Section <<<THEME_HAS_NO_SUB_MENU_BUTTONS>>> - END
******************************************************************************/


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
                <td class="" colspan="$title_colspan">
                    <div class="cpg_starttable_outer">
                        <div class="cpg_starttable_inner">
                            $title
                        </div>
                    </div>
                </td>
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
                if ($user_albums->numRows() > 0) {
                    $upload_allowed = true;
                } else {
                    $upload_allowed = false;
                }
            }

            if (!$upload_allowed) {
                $query = "SELECT null FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " AND uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.") AND aid = '$album'";
                $public_albums = cpg_db_query($query);

                if ($public_albums->numRows() > 0) {
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

    if (!USER_CAN_CREATE_ALBUMS || !USER_ID) {
        template_extract_block($template_sys_menu, 'my_gallery');
    }

    if (USER_CAN_CREATE_ALBUMS && USER_ID) { // block 'my_profile' has already been removed for guests
        template_extract_block($template_sys_menu, 'my_profile');
    }

    if (!USER_CAN_UPLOAD_PICTURES && (!USER_CAN_CREATE_ALBUMS || !USER_ID)) {
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
        '{CUSTOM_LNK_ICO}' => cpg_fetch_icon('online', 1),
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
//EOF