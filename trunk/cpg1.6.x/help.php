<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Coppermine Dev Team
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
define('HELP_PHP', true);
require('include/init.inc.php');

// set charset
$meta_charset = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

// Get the vars from the url
if ($superCage->get->keyExists('as')) {
    if ($matched = $superCage->get->getMatched('as', "/^[a-zA-Z0-9_\-]*$/")) {
        $anchor_start = $matched[0];
    } else {
        $anchor_start = '';
    }
} else {
    $anchor_start = '';
}
unset($matched);
if ($superCage->get->keyExists('ae')) {
    if ($matched = $superCage->get->getMatched('ae', "/^[a-zA-Z0-9_\-]*$/")) {
        $anchor_end = $matched[0];
    } else {
        $anchor_end = '';
    }
} else {
    $anchor_end = '';
}
unset($matched);
if ($superCage->get->keyExists('close')) {
    $close = $superCage->get->getInt('close');
} else {
    $close = '0';
}
if ($superCage->get->keyExists('base')) {
    $base = $superCage->get->getInt('base');
    if ($CONFIG['charset'] == 'language file') {
        $meta_charset = '<meta http-equiv="Content-Type" content="text/html; charset='.$lang_charset.'" />';
    } else {
        $meta_charset = '<meta http-equiv="Content-Type" content="text/html; charset='.$CONFIG['charset'].'" />';
    }
} else {
    $base = '';
}
if ($superCage->get->keyExists('h')) {
    $header = $superCage->get->getEscaped('h');
} else {
    $header = '';
}
if ($superCage->get->keyExists('t')) {
    $text = $superCage->get->getEscaped('t');
} else {
    $text = '';
}

if ($superCage->get->keyExists('style')) {
    if ($matched = $superCage->get->getMatched('style', "/^[a-zA-Z0-9_\-]*$/")) {
        $style = $matched[0];
    } else {
        $style = '';
    }
} else {
    $style = '';
}
unset($matched);
if ($superCage->get->keyExists('f')) {
    if ($matched = $superCage->get->getMatched('f', "/^([a-zA-Z0-9_\-]){1,}(\.){0,1}([a-zA-Z0-9]){0,}$/")) {
        $file = $matched[0];
    } else {
        $file = 'index.htm';
    }
} else {
    $file = 'index.htm';
}
unset($matched);
// sanitize the file name
if (strrpos($file, '.') != FALSE) {
    $file = substr($file, 0, strrpos($file, '.'));
}
$file = preg_replace('/[^0-9a-zA-Z_-]/', '', $file);
$file = $file . '.htm';

if ($base != '') {
    // content of header and text have been base64-encoded - decode it now
    $header = @unserialize(@base64_decode($header));
    $text = @unserialize(@base64_decode($text));
}

if ($close != 1) {
    //$close_link = '<br />&nbsp;<br /><div align="center"><a href="#" class="admin_menu" onclick="window.close();">'.$lang_common['close'].'</a><br />&nbsp;</div>';
}

// Determine the language of the user and display the help file in his language if available. 
// Fall back to English if the file is not available in his/her language.
// This should be done at a later stage in an i18n table. For now, let's do a straightforward if/then.

// Populate a list of available sub-folders of the docs folder
$available_doc_folders_array = form_get_foldercontent('docs/', 'folder', '', array('images', 'js', 'style', '.svn'));

// Query the languages table
$results = cpg_db_query("SELECT lang_id, abbr FROM {$CONFIG['TABLE_LANGUAGE']} WHERE available = 'YES' AND enabled = 'YES'");
while ($row = mysql_fetch_assoc($results)) {
    if ($CONFIG['lang'] == $row['lang_id']) {
        $help_lang = $row['abbr'];
        break;
    } else {
        $help_lang = 'en';
    }
} // whilemysql_free_result($results);
unset($row);

// Make sure that the chosen help file actually exists
if (file_exists('docs/'.$help_lang.'/'.$file) != TRUE) {
    $help_lang = 'en';
}

ob_start();
@include('docs/'.$help_lang.'/'.$file);
$string = ob_get_contents();
ob_end_clean();

$string = strstr($string, '<body>'); // Get rid of the head, as we use a head of our own
$string = str_replace('<body>', '', $string);
$string = str_replace('</body>', '', $string);
$string = str_replace('</html>', '', $string);


// manipulate the string according to settings

if ($anchor_start != '') {
    $pattern = '<a name="' . $anchor_start . '"></a>';
    $string = strstr($string, $pattern);
    //remove the start anchor
    $pattern = "'".$pattern."'si";
    //$string = preg_replace($pattern, "", $string);
}

if ($anchor_end != '') {
    $pattern = '<a name="' . $anchor_end . '"></a>';
    $string2 = strstr($string, $pattern);
    //remove the start anchor
    $pattern = "'".$pattern."'si";
    $string2 = preg_replace($pattern, "", $string2);
    $string = str_replace($string2, '', $string);
    $string = preg_replace($pattern, "", $string);
}

// Fix path for some tags
$string = str_replace('<img src="pics/', '<img src="docs/'.$help_lang.'/images/', $string);
$string = str_replace('<img src="../images/icons/', '<img relativeImagesIconsDir', $string);
$string = str_replace('images/', 'docs/'.$help_lang.'/images/', $string);
$string = str_replace('<img relativeImagesIconsDir', '<img src="docs/images/icons/', $string);
$string = str_replace('<a href="http://', '<a externalLinkTempReplacement', $string); // get external links out of the way
$string = str_replace('<a href="#', '<a internalAnchorLinkTempReplacement', $string); // get links to anchors on this page out of the way
$string = str_replace('<a href="', '<a href="docs/'.$help_lang.'/', $string);
$string = str_replace('<a externalLinkTempReplacement', '<a href="http://', $string); // restore external links
$string = str_replace('<a internalAnchorLinkTempReplacement', '<a href="' . 'docs/'.$help_lang.'/'.$file . '#', $string); // restore links to anchors on this page


if ($header != '') {
    $content = '<h1>'.$header.'</h1>';
    $content .= $text;
} else {
    $content = '';
}

echo <<< EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
    <head>
        <title>{$lang_common['help']}</title>
        $meta_charset
        <link rel="stylesheet" href="css/coppermine.css" type="text/css" />
        <link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" type="text/css" />
        <script src="docs/js/jquery.js" type="text/javascript"></script>
        <script src="docs/js/help.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="cpg_main_block">
            $string
            $content
            $close_link
        </div>
    </body>
</html>

EOT;

?>