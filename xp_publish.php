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

// ------------------------------------------------------------------------- //
// Coppermine Windows XP Web Publishing Wizard Client                        //
// Based on the article posted by Sebastian Delmont                          //
// http://www.zonageek.com/code/misc/wizards/                                //
// ------------------------------------------------------------------------- //
// Other information can be found on Microsoft web site                      //
// ------------------------------------------------------------------------- //
// Original implementation comes from Gallery                                //
// http://gallery.menalto.com                                                //
// ------------------------------------------------------------------------- //

// Declare we are in Coppermine.
define('IN_COPPERMINE', true);

// Set the language block.
define('XP_PUBLISH_PHP', true);

// Activate more language block sets.
define('LOGIN_PHP', true);
define('DB_INPUT_PHP', true);
define('ALBMGR_PHP', true);


// Call necessaryy files and subroutines.
require('include/init.inc.php');
require('include/picmgmt.inc.php');

if ($CONFIG['enable_menu_icons'] == 2) {
	$icon_array['xp'] = '<img src="./images/os/winxp.png" border="0" width="16" height="16" alt="" class="icon" />';
}

// Set the log file path.
define('LOGFILE', 'xp_publish.log');
// ------------------------------------------------------------------------- //

// HTML template for the login screen
$template_login = <<<EOT
        <p><strong>{ENTER_LOGIN_PSWD}</strong></p>
        <form method="post" name="cpgform" id="login" action="{POST_ACTION}">
            <table border="0" cellpadding="0" cellspasing="0">
                <tr>
                        <td>{USERNAME}:&nbsp;</td>
                        <td><input type="text" name="username" value="" maxlength="25" /></td>
                </tr>
                <tr>
                        <td>{PASSWORD}:&nbsp;</td>
                        <td><input type="password" name="password" value="" maxlength="25" /></td>
            </tr>
            </table>
        </form>
EOT;

// HTML template for a successful login
$template_login_success = <<< EOT
        <p>{WELCOME}</p>
        <form method="post" name="cpgform2" id="dummy" action="{POST_ACTION}">
                <input type="hidden" name="dummy_val" value="1" />
        </form>
<script language="javascript" type="text/javascript">
dummy.submit();
</script>
EOT;
// HTML template for an unsuccessful login
$template_login_failure = <<< EOT
        <p>{ERROR}</p>
        <form method="post" name="cpgform2" id="dummy" action="{POST_ACTION}">
                <input type="hidden" name="dummy_val" value="1" />
        </form>
EOT;

// HTML template for the select destination/create new album screen
$template_select_album = <<<EOT
        <p>{WELCOME}</p>
        <br />
<!-- BEGIN no_album -->
        <p>{NO_ALBUM}</p>
<!-- END no_album -->
   <table border="0" cellpadding="0" cellspasing="0">
<!-- BEGIN existing_albums -->
        <tr>
                <td colspan="2"><strong>{UPLOAD}</strong></td>
        </tr>
        <form name="cpgform3" id="selform">
    <tr>
                <td>{ALBUM}: &nbsp;</td>
                <td><select id="album" name="album">{SELECT_ALBUM}</select></td>
        </tr>
        </form>
        <tr>
                <td>&nbsp;</td>
        </tr>
<!-- END existing_albums -->
<!-- BEGIN create_album -->
        <form method="post" name="createAlb" id="createAlb" action="{POST_ACTION}">
        <tr>
                <td colspan="2"><strong>{CREATE_NEW}</strong></td>
        </tr>
    <tr>
                <td>{ALBUM}: &nbsp;</td>
                <td><input type="text" id="newAlbName" name="new_alb_name" value="" maxlength="255" /></td>
        </tr>
<!-- BEGIN select_category -->
        <tr>
                <td>{CATEGORY}: &nbsp;</td>
                <td><select name="cat">{SELECT_CATEGORY}</select></td>
        </tr>
<!-- END select_category -->
        </form>
<!-- END create_album -->
        </table>

EOT;
// HTML template for a successful album creation
$template_create_album = <<<EOT
        <p>{NEW_ALB_CREATED}</p>
        <p>{CONTINUE}</p>
        <form name="selform" id="selform">
                <input type="hidden" id="album" name="album" value ="{ALBUM_ID}" />
        </form>

EOT;
// ------------------------------------------------------------------------- //

// Simple die function (replace the cpg_die function that can't be used inside the wizard)
function simple_die($msg_code, $msg_text, $error_file, $error_line, $output_buffer = false)
{
    global $CONFIG, $lang_cpg_die;

    $msg = $lang_cpg_die[$msg_code] . ': ' . $msg_text;

    if (!$CONFIG['debug_mode']) {
        $msg .= '(' . $lang_cpg_die['file'] . ': ' . $error_file . ' / ' . $lang_cpg_die['line'] . ': ' . $error_line . ')';
    }

    echo $msg;
    // If debug mode is active, write the output into a log file
    if (!$CONFIG['debug_mode']) {
        $ob = ob_get_contents();
        fwrite(fopen(LOGFILE, 'w'), $ob);
    }

    exit;
}
// Quote a string in order to make a valid JavaScript string
function javascript_string($str)
{
    // replace \ with \\ and then ' with \'.
    $str = str_replace('\\', '\\\\', $str);
    $str = str_replace('\'', '\\\'', $str);

    return $str;
}

// Return the HTML code for the album list select box
function html_album_list(&$alb_count)
{
    global $CONFIG, $LINEBREAK;

    if (USER_IS_ADMIN) {
        $public_albums = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title");
        if (mysql_num_rows($public_albums)) {
            $public_albums_list = cpg_db_fetch_rowset($public_albums);
        } else {
            $public_albums_list = array();
        }
    } else {
        $public_albums_list = array();
    }

    if (USER_ID) {
        $user_albums = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' ORDER BY title");
        if (mysql_num_rows($user_albums)) {
            $user_albums_list = cpg_db_fetch_rowset($user_albums);
        } else {
            $user_albums_list = array();
        }
    } else {
        $user_albums_list = array();
    }

    $alb_count = count($public_albums_list) + count($user_albums_list);

    $html = $LINEBREAK;
    foreach($user_albums_list as $album) {
        $html .= '                        <option value="' . $album['aid'] . '">* ' . $album['title'] . '</option>' . $LINEBREAK;
    }
    foreach($public_albums_list as $album) {
        $html .= '                        <option value="' . $album['aid'] . '">' . $album['title'] . '</option>' . $LINEBREAK;
    }

    return $html;
}
// Return the HTML code for the category list select box
function html_cat_list()
{
    global $CONFIG, $CAT_LIST;
    global $lang_albmgr_php;

    $CAT_LIST = array();
    if (USER_CAN_CREATE_ALBUMS) $CAT_LIST[] = array(FIRST_USER_CAT + USER_ID, $lang_albmgr_php['my_gallery']);
    $CAT_LIST[] = array(0, $lang_albmgr_php['no_category']);

    get_cat_data();

    $html = $LINEBREAK;
    foreach($CAT_LIST as $category) {
        $html .= '                        <option value="' . $category[0] . '">' . $category[1] . '</option>' . $LINEBREAK;
    }

    return $html;
}

// Display information on how to use/install the wizard client
function display_instructions()
{
    //global $PHP_SELF;
    global $lang_xp_publish_required, $lang_xp_publish_client, $lang_xp_publish_select, $lang_xp_publish_testing, $lang_xp_publish_notes, $lang_xp_publish_flood, $lang_xp_publish_php, $icon_array;
    global $CONFIG, $lang_charset, $lang_common, $lang_errors;

    $publish_help = '&nbsp;'.cpg_display_help('f=uploading_xp-publisher.htm&amp;as=xp&amp;ae=xp_end', '600', '600');
    //$requirements_help = '&nbsp;'.cpg_display_help('f=uploading_xp-publisher.htm&amp;as=xp&amp;ae=xp_end', '600', '600');
    $install_help = '&nbsp;'.cpg_display_help('f=uploading_xp-publisher.htm&amp;as=xp_publish_setup&amp;ae=xp_publish_setup_end', '450', '400');
    $usage_help = '&nbsp;'.cpg_display_help('f=uploading_xp-publisher.htm&amp;as=xp_publish_upload&amp;ae=xp_publish_upload_end', '600', '450');
    $ok_icon = cpg_fetch_icon('ok', 0);
    $stop_icon = cpg_fetch_icon('stop', 0);
    $warning_icon = cpg_fetch_icon('warning', 0);
    pageheader($CONFIG['gallery_name'] . ' &bull; ' . $lang_xp_publish_php['title']);
    starttable('100%' , $icon_array['xp'] . $lang_xp_publish_php['client_header'] . $publish_help, 1);
    print <<< EOT
    <tr>
        <td class="tableh2">
            <h2>{$lang_xp_publish_php['requirements']}</h2>
        </td>
    </tr>
    <tr>
        <td class="tableb">
            <ul>
                <li>
                    {$lang_xp_publish_php['windows_xp']}<br />
                    <div id="xp_vista" style="display:none">{$ok_icon}{$lang_common['ok']} - {$lang_xp_publish_php['windows_xp']}</div>
                    <div id="other_os" style="display:none">{$stop_icon}{$lang_xp_publish_php['no_windows_xp']}</div>
                    <div id="no_os_detection" style="display:block">{$warning_icon}{$lang_xp_publish_php['no_os_detect']}</div>
                </li>
                <li>
                    {$lang_xp_publish_php['requirement_ie']}<br />
                    <div id="ie" style="display:none">{$ok_icon}{$lang_common['ok']} - {$lang_xp_publish_php['requirement_ie']}</div>
                    <div id="other_browser" style="display:none">{$stop_icon}{$lang_xp_publish_php['no_ie']}</div>
                    <div id="no_browser_detection" style="display:block">{$warning_icon}{$lang_xp_publish_php['no_browser_detect']}</div>
                </li>
EOT;
    if (GALLERY_ADMIN_MODE) {
        print <<< EOT
                <li>{$lang_xp_publish_php['requirement_http_upload']}</li>
EOT;
        if ($CONFIG['gallery_name'] == '') {
            print '<li>'.$stop_icon.$lang_xp_publish_php['no_gallery_name'].'</li>';
        }
        if ($CONFIG['gallery_description'] == '') {
            print '<li>'.$stop_icon.$lang_xp_publish_php['no_gallery_description'].'</li>';
        }
    }
    if (!USER_CAN_UPLOAD_PICTURES && !USER_CAN_CREATE_ALBUMS) {
        print <<< EOT
                <li>{$lang_xp_publish_php['requirement_permissions']}</li>
EOT;
    }
    if (!USER_ID) {
        print <<< EOT
                <li>{$lang_xp_publish_php['requirement_login']}</li>
EOT;
    }
    print <<< EOT
            </ul>
        </td>
    </tr>
    <tr>
        <td class="tableh2">
            <h2>{$lang_xp_publish_php['howto_install']}{$install_help}</h2>
        </td>
    </tr>
    <tr>
        <td class="tableb">
            <ul>
                <li>
EOT;
    printf($lang_xp_publish_php['install_right_click'],'<a href="'.$CPG_PHP_SELF.'?cmd=send_reg">'.cpg_fetch_icon('download',0), '</a>');
    print <<< EOT
                </li>
                <li>{$lang_xp_publish_php['install_save']}</li>
                <li>{$lang_xp_publish_php['install_execute']}</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="tableh2">
            <h2>{$lang_xp_publish_php['usage']}{$usage_help}</h2>
        </td>
    </tr>
    <tr>
        <td class="tableb">
            <ul>
                <li>{$lang_xp_publish_php['select_files']}</li>
                <li>{$lang_xp_publish_php['display_tasks']}</li>
                <li>{$lang_xp_publish_php['publish_on_the_web']}</li>
                <li>{$lang_xp_publish_php['confirm_selection']}, {$lang_xp_publish_php['next']}</li>
                <li>{$lang_xp_publish_php['select_service']}</li>
                <li>{$lang_xp_publish_php['enter_login']}</li>
                <li>{$lang_xp_publish_php['select_album']}, {$lang_xp_publish_php['next']}</li>
                <li>{$lang_xp_publish_php['upload_starts']}</li>
                <li>{$lang_xp_publish_php['upload_completed']}</li>
            </ul>
        </td>
    </tr>
EOT;
    endtable();
    print <<< EOT
<script type="text/javascript">
function os_browser_detection() {
  // browser detection.
  // Usually, browser detection is buggy and should not be used. However, the sidebar works only in mainstream browsers anyway and requires JavaScript, so we can be pretty sure that the user has it enabled if this is supposed to work in the first place.
   var detection_success = 0;
   if (navigator.userAgent.indexOf('Firefox') != -1 || navigator.userAgent.indexOf('Netscape') != -1 || navigator.userAgent.indexOf('Konqueror') != -1 || navigator.userAgent.indexOf('Gecko') != -1) {
       document.getElementById('ie').style.display = 'none';
       document.getElementById('other_browser').style.display = 'block';
       document.getElementById('no_browser_detection').style.display = 'none';
       detection_success = 1;
   }
   if (navigator.userAgent.indexOf('Opera') != -1) {
       document.getElementById('ie').style.display = 'none';
       document.getElementById('other_browser').style.display = 'block';
       document.getElementById('detecting').style.display = 'none';
       detection_success = 1;
   }
   if (navigator.userAgent.indexOf('MSIE') != -1) {
       document.getElementById('ie').style.display = 'block';
       document.getElementById('other_browser').style.display = 'none';
       document.getElementById('no_browser_detection').style.display = 'none';
       detection_success = 1;
   }
   if (navigator.userAgent.indexOf('Windows NT 6.1') != -1 || navigator.userAgent.indexOf('Windows NT 6.0') != -1 || navigator.userAgent.indexOf('Windows NT 5.2') != -1 || navigator.userAgent.indexOf('Windows NT 5.1') != -1) {
       document.getElementById('xp_vista').style.display = 'block';
       document.getElementById('other_os').style.display = 'none';
       document.getElementById('no_os_detection').style.display = 'none';
       detection_success = 1;
   }
   if (navigator.userAgent.indexOf('Windows NT 5.0') != -1 || navigator.userAgent.indexOf('Windows NT 4.0') != -1 || navigator.userAgent.indexOf('Windows 9') != -1 || navigator.userAgent.indexOf('Windows CE') != -1 || navigator.userAgent.indexOf('Mac') != -1 || navigator.userAgent.indexOf('Linux') != -1) {
       document.getElementById('xp_vista').style.display = 'none';
       document.getElementById('other_os').style.display = 'block';
       document.getElementById('no_os_detection').style.display = 'none';
       detection_success = 1;
   }
}


self.onload = os_browser_detection();
</script>
EOT;
    pagefooter();

}

// Output page header
function output_header()
{
    global $CONFIG;
    global $lang_charset, $lang_text_dir, $lang_xp_publish_php;

    if ($CONFIG['charset'] == 'language file') {
        $language = $lang_charset;
    } else {
        $language = $CONFIG['charset'];
    }
    print <<< EOT
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<title>{$lang_xp_publish_php['title']}</title>
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset={$language}" />
<style type="text/css">
<!--
body {
        font-family : Verdana, Arial, Helvetica, sans-serif;
        font-size: 11px;
        background : #FFFFFF ;
        color : Black;
        margin: 20px;
        border: 1px solid #000000;
}

td {
        font-size: 12px;
        padding-top: 5px;
        padding-bottom: 0px;
}

h1{
        font-weight: bold;
        font-size: 16px;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        text-decoration: none;
        line-height : 120%;
        color : #0E72A4;
}

h2 {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 14px;
        color: #0E72A4;
}

h3 {
        font-weight: bold;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 12px;
}

p {
        font-family : Verdana, Arial, Helvetica, sans-serif;
        font-size: 11px;
        margin: 10px 10px 0px 0px;
}

ul {
        margin-left: 5px;
        margin-right: 0px;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 0px;
}

li {
        margin-left: 10px;
        margin-top: 4px;
        margin-bottom: 4px;
        padding: 0px;
        list-style-position: outside;
        list-style-type: disc;
}

form {
        display: inline;
}

input {
        width: 200px;
}

-->
</style>
</head>
<body>
EOT;
    print '<h1><a href="'.$CONFIG['site_url'].'">'. $CONFIG['gallery_name'] .'</a>';
    if ($CONFIG['gallery_description'] != '') {
        print ' &bull; ' . $CONFIG['gallery_description'];
    }
    print '</h1>';
    print '<h2>'. $lang_xp_publish_php['title'] . '</h2>';
}

// Output page footer
function output_footer()
{
    global $WIZARD_BUTTONS, $ONBACK_SCRIPT, $ONNEXT_SCRIPT;
    global $CONFIG; //$PHP_SELF,
    $site_url = trim($CONFIG['site_url'], '/') . '/';
    $gallery_name_javascript = javascript_string($CONFIG['gallery_name']);
    $gallery_description_javascript = javascript_string($CONFIG['gallery_description']);

    print <<< EOT

<div id="content"></div>

<script language="javascript" type="text/javascript">
function create_alb() {
        if (createAlb.newAlbName.value == ''){
                return false;
        } else {
                createAlb.submit();
        }
}

function create_alb_or_use_existing() {
        if (createAlb.newAlbName.value == ''){
                startUpload();
        } else {
                createAlb.submit();
        }
}

function startUpload() {
        var xml = window.external.Property('TransferManifest');
        var files = xml.selectNodes('transfermanifest/filelist/file');

        for (i = 0; i < files.length; i++) {
                var postTag = xml.createNode(1, 'post', '');
                postTag.setAttribute('href', '{$site_url}{$CPG_PHP_SELF}?cmd=add_picture&album=' + selform.album.value);
                postTag.setAttribute('name', 'userpicture');

                var dataTag = xml.createNode(1, 'formdata', '');
                dataTag.setAttribute('name', 'MAX_FILE_SIZE');
                dataTag.text = '10000000';
                postTag.appendChild(dataTag);

                files.item(i).appendChild(postTag);
        }

        var uploadTag = xml.createNode(1, 'uploadinfo', '');
        uploadTag.setAttribute('friendlyname', '{$gallery_name_javascript}');
        var htmluiTag = xml.createNode(1, 'htmlui', '');
        htmluiTag.text = '{$site_url}';
        uploadTag.appendChild(htmluiTag);

        xml.documentElement.appendChild(uploadTag);

        window.external.Property('TransferManifest')=xml;
        window.external.SetWizardButtons(true,true,true);
        content.innerHtml=xml;
        window.external.FinalNext();
}

function OnBack() {
        {$ONBACK_SCRIPT}
        window.external.SetWizardButtons(false,true,false);
}

function OnNext() {
        {$ONNEXT_SCRIPT}
}

function OnCancel() {
}

function window.onload() {
        window.external.SetHeaderText('{$gallery_name_javascript}','{$gallery_description_javascript}');
        window.external.SetWizardButtons({$WIZARD_BUTTONS});
}
</script>
</body>
</html>
EOT;
}

// Send the file needed to register the service under Windows XP
function send_reg_file()
{
    global $CONFIG, $CPG_PHP_SELF, $LINEBREAK; //, $PHP_SELF;
  $superCage = Inspekt::makeSuperCage();

    header("Content-Type: application/octet-stream");
    $time_stamp = time();
    header("Content-Disposition: attachment; filename=cpg_".$time_stamp.".reg");
    // Come up with gallery name and description in iso8859-1 and utf-8
    if ($CONFIG['charset'] == 'utf-8') {
    } else {
    }
    $name_iso = '';
    $description_iso = '';
    $name_utf = '';
    $description_utf = '';

    $lines[] = 'Windows Registry Editor Version 5.00';
    $lines[] = '[HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Explorer\PublishingWizard\PublishingWizard\Providers\\'. utf8_decode($CONFIG['gallery_name']) .']';
    $lines[] = '"displayname"="' . $CONFIG['gallery_name'] . '"';
    $lines[] = '"description"="' . $CONFIG['gallery_description'] . '"';
    $lines[] = '"href"="' . trim($CONFIG['site_url'], '/') . '/' . $CPG_PHP_SELF . '?cmd=publish"';
    $lines[] = '"icon"="' . trim($CONFIG['site_url'], '/') . '/' . 'favicon.ico"';
    $lines[] = '[HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Explorer\PublishingWizard\InternetPhotoprinting\providers\\' . utf8_decode($CONFIG['gallery_name'] .']');
    print join($LINEBREAK, $lines);
    print $LINEBREAK;
    exit;
}

// Display the login page
function form_login()
{
    //global $PHP_SELF;
    global $ONNEXT_SCRIPT, $ONBACK_SCRIPT, $WIZARD_BUTTONS;
    global $template_login;
    global $lang_login_php, $lang_xp_publish_php, $cpg_udb;
    global $CONFIG, $CPG_PHP_SELF;


    if (!method_exists($cpg_udb,'login')) {
        echo '<p>' . $lang_xp_publish_php['need_login'] . '</p>';
        $ONNEXT_SCRIPT = '';
        $ONBACK_SCRIPT = 'window.external.FinalBack();';
        $WIZARD_BUTTONS = 'false,false,false';
        return;
    }

    $params = array('{POST_ACTION}' => trim($CONFIG['site_url'], '/') . '/' . $CPG_PHP_SELF . '?cmd=publish',
        '{ENTER_LOGIN_PSWD}' => $lang_login_php['enter_login_pswd'],
        '{USERNAME}' => $lang_login_php['username'],
        '{PASSWORD}' => $lang_login_php['password'],
        );

    echo template_eval($template_login, $params);

    $ONNEXT_SCRIPT = 'login.submit();';
    $ONBACK_SCRIPT = 'window.external.FinalBack();';
    $WIZARD_BUTTONS = 'true,true,false';
}

// Process login information
function process_login()
{
    global $CONFIG, $USER, $CPG_PHP_SELF; //$PHP_SELF,
    global $ONNEXT_SCRIPT, $ONBACK_SCRIPT, $WIZARD_BUTTONS;
    global $template_login_success, $template_login_failure,$template_login;
    global $lang_login_php, $cpg_udb;
  $superCage = Inspekt::makeSuperCage();

    $tt = 'worked';

  //sanitizing the login/pass
  $username = $superCage->post->getMatched('username', '/^[0-9A-Za-z\/_]+$/');
  $username = $username[1];
  $password = $superCage->post->getMatched('password', '/^[0-9A-Za-z\/_]+$/');
  $password = $password[1];
//  if ( $USER_DATA = $cpg_udb->login(addslashes($_POST['username']), addslashes($_POST['password'])) ) {
    if ( $USER_DATA = $cpg_udb->login(addslashes($username), addslashes($password)) ) {

        $USER['am'] = 1;
        user_save_profile();

        $params = array('{WELCOME}' => sprintf($lang_login_php['welcome'], USER_NAME),
            '{POST_ACTION}' => trim($CONFIG['site_url'], '/') . '/' . $CPG_PHP_SELF . '?cmd=publish',
            );

        echo template_eval($template_login_success, $params);
    } else {
        $params = array('{ERROR}' => $lang_login_php['err_login'],
            '{POST_ACTION}' => trim($CONFIG['site_url'], '/') . '/' . $CPG_PHP_SELF . '?cmd=publish',
            );


        echo template_eval($template_login_failure, $params);
    }

    $ONNEXT_SCRIPT = 'dummy.submit();';
    $ONBACK_SCRIPT = 'dummy.submit();';
    $WIZARD_BUTTONS = 'true,true,false';
}

// Display the form that allows to choose/create the destination album
function form_publish()
{
    global $CONFIG, $CAT_LIST; //, $PHP_SELF;
    global $ONNEXT_SCRIPT, $ONBACK_SCRIPT, $WIZARD_BUTTONS;
    global $template_select_album;
    global $lang_xp_publish_php, $lang_common;

    $alb_count = 0;
    $html_album_list = html_album_list($alb_count);
    $html_cat_list = html_cat_list();

    if (!(USER_CAN_CREATE_ALBUMS || USER_IS_ADMIN)) {
        template_extract_block($template_select_album, 'existing_albums');
        template_extract_block($template_select_album, 'create_album');

        $params = array('{WELCOME}' => sprintf($lang_xp_publish_php['welcome'], USER_NAME),
            '{NO_ALBUM}' => $lang_xp_publish_php['no_alb'],
            );

        echo template_eval($template_select_album, $params);

        $WIZARD_BUTTONS = "false,false,false";
    } elseif (!$alb_count) {
        template_extract_block($template_select_album, 'no_album');
        template_extract_block($template_select_album, 'existing_albums');

        if (!USER_IS_ADMIN) template_extract_block($template_select_album, 'select_category');

        $params = array('{WELCOME}' => sprintf($lang_xp_publish_php['welcome'], USER_NAME),
            '{CREATE_NEW}' => $lang_xp_publish_php['create_new'],
            '{ALBUM}' => $lang_common['album'],
            '{CATEGORY}' => $lang_xp_publish_php['category'],
            '{SELECT_CATEGORY}' => $html_cat_list,
            '{POST_ACTION}' => trim($CONFIG['site_url'], '/') . '/' . $CPG_PHP_SELF . '?cmd=create_album',
            );

        echo template_eval($template_select_album, $params);

        $ONNEXT_SCRIPT = 'create_alb();';
        $ONBACK_SCRIPT = 'window.external.FinalBack();';
        $WIZARD_BUTTONS = 'true,true,false';
    } else {
        template_extract_block($template_select_album, 'no_album');

        if (!USER_IS_ADMIN) template_extract_block($template_select_album, 'select_category');

        $params = array('{WELCOME}' => sprintf($lang_xp_publish_php['welcome'], USER_NAME),
            '{UPLOAD}' => $lang_xp_publish_php['upload'],
            '{ALBUM}' => $lang_common['album'],
            '{SELECT_ALBUM}' => $html_album_list,
            '{CATEGORY}' => $lang_xp_publish_php['category'],
            '{SELECT_CATEGORY}' => $html_cat_list,
            '{CREATE_NEW}' => $lang_xp_publish_php['create_new'],
            '{POST_ACTION}' => trim($CONFIG['site_url'], '/') . '/' . $CPG_PHP_SELF . '?cmd=create_album',
            );

        echo template_eval($template_select_album, $params);

        $ONNEXT_SCRIPT = 'create_alb_or_use_existing();';
        $ONBACK_SCRIPT = 'window.external.FinalBack();';
        $WIZARD_BUTTONS = 'true,true,false';
    }
}

// Create a new album where pictures will be uploaded
function create_album()
{
    global $CONFIG;
    global $ONNEXT_SCRIPT, $ONBACK_SCRIPT, $WIZARD_BUTTONS;
    global $template_create_album;
    global $lang_errors, $lang_xp_publish_php;
    $superCage = Inspekt::makeSuperCage();

    if (!(USER_CAN_CREATE_ALBUMS || USER_IS_ADMIN)) simple_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

    if (USER_IS_ADMIN) {
  //  $category = (int)$_POST['cat'];
        $category = $superCage->post->getInt('cat');
    } else {
        $category = FIRST_USER_CAT + USER_ID;
    }

//  $query = "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos) VALUES ('$category', '" . addslashes($_POST['new_alb_name']) . "', 'NO',  '0')";
    $query = "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos, description) VALUES ('$category', '" . $superCage->post->getEscaped('new_alb_name') . "', 'NO',  '0', '')";
    cpg_db_query($query);

  $new_alb_name = $superCage->post->getMatched('new_alb_name', '/^[0-9A-Za-z\/_]+$/');
  $new_alb_name = $new_alb_name[1];
//  $params = array('{NEW_ALB_CREATED}' => sprintf($lang_xp_publish_php['new_alb_created'], $_POST['new_alb_name']),
    $params = array('{NEW_ALB_CREATED}' => sprintf($lang_xp_publish_php['new_alb_created'], $new_alb_name),
        '{CONTINUE}' => $lang_xp_publish_php['continue'],
        '{ALBUM_ID}' => mysql_insert_id($CONFIG['LINK_ID']),
        );

    echo template_eval($template_create_album, $params);

    $ONNEXT_SCRIPT = 'startUpload();';
    $ONBACK_SCRIPT = 'window.external.FinalBack();';
    $WIZARD_BUTTONS = 'true,true,true';
}

// Add a picture
function process_picture()
{
    global $CONFIG, $IMG_TYPES;
    global $lang_db_input_php, $lang_errors;
    $superCage = Inspekt::makeSuperCage();

    @unlink(LOGFILE);

    if (!USER_ID || !USER_CAN_UPLOAD_PICTURES) simple_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

    //$album = (int)$_GET['album'];
    $album = $superCage->get->getInt('album');
    $title = '';
    $caption = '';
    $keywords = '';
    $user1 = '';
    $user2 = '';
    $user3 = '';
    $user4 = '';
    $position = 0;
    // Check if the album id provided is valid
    if (!USER_IS_ADMIN) {
        $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album' and category = '" . (USER_ID + FIRST_USER_CAT) . "'");
        if (mysql_num_rows($result) == 0) simple_die(ERROR, $lang_db_input_php['unknown_album'], __FILE__, __LINE__);
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        $category = $row['category'];
    } else {
        $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'");
        if (mysql_num_rows($result) == 0) simple_die(ERROR, $lang_db_input_php['unknown_album'], __FILE__, __LINE__);
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        $category = $row['category'];
    }

    // Get position
    $result = cpg_db_query("SELECT position FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$album' order by position desc");
    if (mysql_num_rows($result) == 0) {
             $position = 100;
    } else {
             $row = mysql_fetch_array($result);
             mysql_free_result($result);
                     if ($row['position']) {
                     $position = $row['position'];
                             $position++;
                                         }
    }


    // Test if the filename of the temporary uploaded picture is empty
//  if ($_FILES['userpicture']['tmp_name'] == '') simple_die(ERROR, $lang_db_input_php['no_pic_uploaded'], __FILE__, __LINE__);
  if ($superCage->files->getRaw('/userpicture/tmp_name') == '') simple_die(ERROR, $lang_db_input_php['no_pic_uploaded'], __FILE__, __LINE__);
    // Create destination directory for pictures
    if (USER_ID && $CONFIG['silly_safe_mode'] != 1) {
        if (USER_IS_ADMIN && ($category != (USER_ID + FIRST_USER_CAT))) {
            $filepath = 'wpw-' . date("Ymd");
        } else {
            $filepath = $CONFIG['userpics'] . (USER_ID + FIRST_USER_CAT);
        }
        $dest_dir = $CONFIG['fullpath'] . $filepath;
        if (!is_dir($dest_dir)) {
            mkdir($dest_dir, octdec($CONFIG['default_dir_mode']));
            if (!is_dir($dest_dir)) simple_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_mkdir'], $dest_dir), __FILE__, __LINE__, true);
            chmod($dest_dir, octdec($CONFIG['default_dir_mode']));
            $fp = fopen($dest_dir . '/index.php', 'w');
            fwrite($fp, ' ');
            fclose($fp);
        }
        $dest_dir .= '/';
        $filepath .= '/';
    } else {
        $filepath = $CONFIG['userpics'];
        $dest_dir = $CONFIG['fullpath'] . $filepath;
    }
    // Check that target dir is writable
    if (!is_writable($dest_dir)) simple_die(CRITICAL_ERROR, sprintf($lang_db_input_php['dest_dir_ro'], $dest_dir), __FILE__, __LINE__, true);

    $matches = array();

    //if (get_magic_quotes_gpc()) $_FILES['userpicture']['name'] = stripslashes($_FILES['userpicture']['name']);
    //using getRaw as it will be sanitized in the code below in the preg_match. {SaWey}
     $filename = $superCage->files->getRaw('/userpicture/name');
     if (get_magic_quotes_gpc()){
        $filename = stripslashes($filename); 
     }
    // Replace forbidden chars with underscores
    //$picture_name = replace_forbidden($_FILES['userpicture']['name']);
    $picture_name = replace_forbidden($filename);
    // Check that the file uploaded has a valid extension
    if (!preg_match("/(.+)\.(.*?)\Z/", $picture_name, $matches)) {
        $matches[1] = 'invalid_fname';
        $matches[2] = 'xxx';
    }

    if ($matches[2] == '' || !is_known_filetype($matches)) {
        simple_die(ERROR, sprintf($lang_db_input_php['err_invalid_fext'], $CONFIG['allowed_file_extensions']), __FILE__, __LINE__);
    }

    // Create a unique name for the uploaded file
    $nr = 0;
    $picture_name = $matches[1] . '.' . $matches[2];
    while (file_exists($dest_dir . $picture_name)) {
        $picture_name = $matches[1] . '~' . $nr++ . '.' . $matches[2];
    }
    $uploaded_pic = $dest_dir . $picture_name;
    // Move the picture into its final location
    if (!move_uploaded_file($superCage->files->getRaw('/userpicture/tmp_name'), $uploaded_pic))
        simple_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_move'], $picture_name, $dest_dir), __FILE__, __LINE__, true);
    // Change file permission
    chmod($uploaded_pic, octdec($CONFIG['default_file_mode']));

    // Check file size. Delete if it is excessive.
    if (filesize($uploaded_pic) > ($CONFIG['max_upl_size'] << 10)) {
        @unlink($uploaded_pic);
        simple_die(ERROR, sprintf($lang_db_input_php['err_imgsize_too_large'], $CONFIG['max_upl_size']), __FILE__, __LINE__);
    } elseif (is_image($picture_name)) {

        // Get picture information
        $imginfo = getimagesize($uploaded_pic);

        // cpg_getimagesize does not recognize the file as a picture
        if ($imginfo == null) {
            @unlink($uploaded_pic);
            simple_die(ERROR, $lang_db_input_php['err_invalid_img'], __FILE__, __LINE__, true);
        }

        // JPEG and PNG only are allowed with GD
        //if ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && ($CONFIG['thumb_method'] == 'gd1' || $CONFIG['thumb_method'] == 'gd2')) {
        if ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && $CONFIG['GIF_support'] == 0) {
            @unlink($uploaded_pic);
            simple_die(ERROR, $lang_errors['gd_file_type_err'], __FILE__, __LINE__, true);
        }

        // Check that picture size (in pixels) is lower than the maximum allowed
        if (max($imginfo[0], $imginfo[1]) > $CONFIG['max_upl_width_height']) {
            if ((USER_IS_ADMIN && $CONFIG['auto_resize'] == 1) || (!USER_IS_ADMIN && $CONFIG['auto_resize'] > 0)) //($CONFIG['auto_resize']==1)
            {
              //resize_image($uploaded_pic, $uploaded_pic, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], $imginfo[0] > $CONFIG['max_upl_width_height'] ? 'wd' : 'ht');
              resize_image($uploaded_pic, $uploaded_pic, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
            }
            else
            {
              @unlink($uploaded_pic);
              simple_die(ERROR, sprintf($lang_db_input_php['err_fsize_too_large'], $CONFIG['max_upl_width_height'], $CONFIG['max_upl_width_height']), __FILE__, __LINE__);
            }
        }

    }

    // Create thumbnail and internediate image and add the image into the DB
    $result = add_picture($album, $filepath, $picture_name, $position, $title, $caption, $keywords, $user1, $user2, $user3, $user4, $category);

    if ($result !== true) {
        @unlink($uploaded_pic);
        simple_die(CRITICAL_ERROR, (isset($result['error'])) ? $result['error'] : sprintf($lang_db_input_php['err_insert_pic'], $uploaded_pic) . '<br /><br />' . $ERROR, __FILE__, __LINE__, true);
    } else {
        echo ("SUCCESS");
        exit;
    }

}
// ------------------------------------------------------------------------- //
if (USER_IS_ADMIN && !GALLERY_ADMIN_MODE) {
    $USER['am'] = 1;
    user_save_profile();
}

//$cmd = empty($_GET['cmd']) ? '' : $_GET['cmd'];
if ($superCage->get->keyExists('cmd')){
  //no need to do a sanitization here, as this var is only used in the switch statement,
  //and it has a default operation if no match is found. {SaWey}
  $cmd = $superCage->get->getRaw('cmd');
} else{
  $cmd = '';
}

if (!USER_ID && $cmd && $cmd != 'send_reg') $cmd = 'login';
//if (!empty($_POST['username'])) $cmd = 'process_login';
if ($superCage->post->keyExists('username')) $cmd = 'process_login';

switch ($cmd) {
    case 'login' :
        output_header();
        form_login();
        output_footer();
        break;

    case 'process_login' :
        output_header();
        process_login();
        output_footer();
        break;

    case 'publish' :
        output_header();
        form_publish();
        output_footer();
        break;

    case 'create_album' :
        output_header();
        create_album();
        output_footer();
        break;

    case 'add_picture' :
        process_picture();
        break;

    case 'send_reg' :
        send_reg_file();
        break;

    default:
        display_instructions();
} // switch

?>