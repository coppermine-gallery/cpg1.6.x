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
define('MINIBROWSER_PHP', true);
define('SEARCHNEW_PHP', true);

require('include/init.inc.php');

// set/define some vars
$scriptfilename = 'minibrowser.php';

// define folder prefix, separator, and regex (to sanitize incoming parameters)
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    // Windows server
    $folder_prefix = '';
    $folder_sep = '\\';
    $folder_regex = '/^([A-Za-z]:){0,1}[0-9A-Za-z\\.\\\\_\\-,&\' ]+$/';
} else {
    // *nix server
    $folder_prefix = '/';
    $folder_sep = '/';
    $folder_regex = '/^[0-9A-Za-z\\.\\/_\\-,&\' ]+$/';
}

$mq = get_magic_quotes_gpc();

if ($superCage->get->keyExists('folder') && ($matches = $superCage->get->getMatched('folder', $folder_regex))) {
    $folder = rawurldecode($mq ? stripslashes($matches[0]) : $matches[0]);
} elseif ($superCage->post->keyExists('folder') && ($matches = $superCage->post->getMatched('folder', $folder_regex))) {
    $folder = rawurldecode($mq ? stripslashes($matches[0]) : $matches[0]);
} else {
    $folder = '';
}

if ($superCage->get->keyExists('startfolder') && ($matches = $superCage->get->getMatched('startfolder', $folder_regex))) {
    $startfolder = rawurldecode($mq ? stripslashes($matches[0]) : $matches[0]);
} elseif ($superCage->post->keyExists('folder') && ($matches = $superCage->post->getMatched('startfolder', $folder_regex))) {
    $startfolder = rawurldecode($mq ? stripslashes($matches[0]) : $matches[0]);
} else {
    $startfolder = '';
}

if (($folder == '') && ($startfolder != '')) {
    $folder = $startfolder;
}

if ($superCage->get->keyExists('hidefolders') && ($matches = $superCage->get->getMatched('hidefolders', $folder_regex))) {
    $hidefolders = rawurldecode($mq ? stripslashes($matches[0]) : $matches[0]);
    $hiddenfolders = explode(',', $hidefolders);
} elseif ($superCage->post->keyExists('hidefolders') && ($matches = $superCage->post->getMatched('hidefolders', $folder_regex))) {
    $hidefolders = rawurldecode($mq ? stripslashes($matches[0]) : $matches[0]);
    $hiddenfolders = explode(',', $hidefolders);
} else {
    $hidefolders = '';
    $hiddenfolders = array('.', '..', '.svn', 'edit', 'Thumbs.db', '.DS_Store', '__MACOSX', '.htaccess', rtrim($CONFIG['userpics'],'/'));
}

if ($superCage->get->keyExists('limitfolder') && $matches = $superCage->get->getMatched('limitfolder', $folder_regex)) {
    $limitfolder = rawurldecode($mq ? stripslashes($matches[0]) : $matches[0]);
} elseif ($superCage->post->keyExists('limitfolder') && $matches = $superCage->post->getMatched('limitfolder', $folder_regex)) {
    $limitfolder = rawurldecode($mq ? stripslashes($matches[0]) : $matches[0]);
} else {
    $limitfolder = '';
}

if ($superCage->get->keyExists('linktarget') && ($matches = $superCage->get->getMatched('linktarget', $folder_regex))) {
    $linktarget = rawurldecode($mq ? stripslashes($matches[0]) : $matches[0]);
} elseif ($superCage->post->keyExists('linktarget') && ($matches = $superCage->post->getMatched('linktarget', $folder_regex))) {
    $linktarget = rawurldecode($mq ? stripslashes($matches[0]) : $matches[0]);
} else {
    $linktarget = '';
}

if ($superCage->get->keyExists('parentform') && ($matches = $superCage->get->getMatched('parentform','/^[0-9A-Za-z\/_.-]+$/'))) {
    $parentform = rawurldecode($matches[0]);
} elseif ($superCage->post->keyExists('parentform') && ($matches = $superCage->post->getMatched('parentform','/^[0-9A-Za-z\/_.-]+$/'))) {
    $parentform = rawurldecode($matches[0]);
} else {
    $parentform = '';
}

if ($superCage->get->keyExists('formelementname') && ($matches = $superCage->get->getMatched('formelementname','/^[0-9A-Za-z\/_.-]+$/'))) {
    $formelementname = rawurldecode($matches[0]);
} elseif ($superCage->post->keyExists('formelementname') && ($matches = $superCage->post->getMatched('formelementname','/^[0-9A-Za-z\/_.-]+$/'))) {
    $formelementname = rawurldecode($matches[0]);
} else {
    $formelementname = '';
}

if ($superCage->get->keyExists('searchnew_php')){
    $searchnew_php = rawurldecode($superCage->get->getInt('searchnew_php'));
} elseif ($superCage->post->keyExists('searchnew_php')){
    $searchnew_php= rawurldecode($superCage->post->getInt('searchnew_php'));
} else {
    $searchnew_php = '0';
}

if ($superCage->get->keyExists('radio')){
    $radio = rawurldecode($superCage->get->getInt('radio'));
} elseif ($superCage->post->keyExists('radio')){
    $radio= rawurldecode($superCage->post->getInt('radio'));
} else {
    $radio = '0';
}

if ($superCage->get->keyExists('no_popup')){
    $no_popup = $superCage->get->getInt('no_popup');
} elseif ($superCage->post->keyExists('no_popup')){
    $no_popup = $superCage->post->getInt('no_popup');
} else {
    $no_popup = 0;
}

$newline = $LINEBREAK;
$title = $CONFIG['gallery_name'] . ': ' . $lang_minibrowser_php['click_to_close'];
$charset = $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'];
echo <<< EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>{$title}</title>
<meta http-equiv="content-type" content="text/html; charset={$charset}" />
<link rel="stylesheet" href="css/coppermine.css" type="text/css" />
<link rel="stylesheet" href="{$THEME_DIR}style.css" type="text/css" />
<script type="text/javascript" src="js/minibrowser.js"></script>

<script type="text/javascript">
function updateParent() {
    opener.document.{$parentform}.{$formelementname}.value = document.childform.cf2.value;
    return false;
}

EOT;
if (!$no_popup){
    echo 'adjust_popup();' . $newline;
}
echo <<< EOT
</script>
</head>
<body class="tableb" scroll="auto" marginwidth="0" marginheight="0">

<form name="childform" id="childform" method="get" action="{$CPG_PHP_SELF}" onsubmit="return updateParent();">

EOT;

starttable(-2, $lang_minibrowser_php['select_directory'], 2);
if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__); 
}

// Remove $base_folder because it doesn't appear necessary and breaks on Windows servers
// $base_folder = rtrim(cpg_get_webroot_path(), $folder_sep).$folder_sep;
$base_folder = '';
$dir = opendir($base_folder . $folder);

// read the folder/file structure we're currently in and put it into an array
$dirCounter = 0;
while($file = readdir($dir)){
    if(is_dir($base_folder.$folder.$file)) {
        if (is_array($hiddenfolders)) {
            if (in_array($file,$hiddenfolders) == false) {
                $foldername[] = $file;
                $dirCounter++;
            }
        } else {
            $foldername[] = $file;
            $dirCounter++;
        }
    } else {
        if (is_array($hiddenfolders)) {
			if (in_array($file,$hiddenfolders) == false) {
				$filename[] = $file;
			}
		} else {
			$filename[] = $file;
		}
    }
}
closedir($dir);

echo '<tr>' . $newline;
echo '<td class="tableh2">' . $newline;
if ($radio != 0) {
    echo '<input type="radio" name="cf1" value="' . $folder . '/" class="radio"  checked="checked" />' . $newline;
}
echo '</td>' . $newline;
echo '<td class="tableh2">' . $newline;
$folder_array = split(rtrim($CONFIG['fullpath'],'/'),ltrim($folder, $folder_sep));
$folder_display = rtrim($CONFIG['fullpath'],'/') . $folder_array[1];
echo '<input type="text" name="cf2" size="50" value="' . $folder_display . '" disabled="disabled" class="tableh2" />&nbsp;' . $newline;
if ($linktarget != '') {
    // determine if we should display a submit button - START BLOCK
    // get the allowed extensions
    $filetypes = array();
    $result = cpg_db_query("SELECT extension FROM {$CONFIG['TABLE_FILETYPES']}");
    while($row = mysql_fetch_row($result)) {
        $filetypes[] = $row[0];
    }
    mysql_free_result($result);
    $filetypes = array_unique($filetypes);
    // loop through the $filename array, get the extensions and check if at least one allowed ending is there
    $allowed_file_counter = 0;
    if (is_array($filename)) {
        foreach ($filename as $value) {
          if(in_array(ltrim(strrchr(strtolower($value),'.'),'.'), $filetypes)) {
              $allowed_file_counter++;
          } // end if in_array
        } // end foreach
    } // end is_array
    if ($allowed_file_counter!=0) {
        echo '<a href="'.$linktarget.'?startdir='.rtrim(str_replace($limitfolder, '',$folder), $folder_sep).'" class="admin_menu" target="_parent">'.cpg_fetch_icon('ok', 2) . $lang_common['ok'].'</a>' . $newline;
    } // determine if we should display a submit button - END BLOCK
} else {
    echo '<input type="submit" name="submit" value="'.$lang_common['ok'].'" class="button" />' . $newline;
}
echo '</td>' . $newline;
echo '</tr>' . $newline;

// display the "up" link if we're not already in the root folder
if (($folder != '') && ($folder != $folder_sep)) {
    $uplink = rtrim($folder, $folder_sep);
    $remove = strrchr($uplink, $folder_sep);
    if ($remove != '') {
        $uplink = str_replace($remove, '', $uplink) . $folder_sep;
    } else {
        $uplink = '';
    }
    if ($limitfolder != $folder) {
        echo '<tr>' . $newline;
        echo '<td class="tableb">' . $newline;
        echo '&nbsp;';
        echo '</td>' . $newline;
        echo '<td class="tableb">' . $newline;
        echo '<img src="images/spacer.gif" width="16" height="16" border="0" alt="" align="left" />' . $newline;
        echo '<a href="'.$CPG_PHP_SELF.'?folder='.rawurlencode($uplink).'&amp;parentform='.rawurlencode($parentform).'&amp;formelementname='.rawurlencode($formelementname).'&amp;no_popup='.$no_popup.'&amp;limitfolder='.$limitfolder.'&amp;linktarget='.$linktarget.'">' . $newline;
        echo '.. '.$lang_minibrowser_php['up'];
        echo '</a>' . $newline;
        echo '</td>' . $newline;
        echo '</tr>' . $newline;
    }
}

if (is_array($foldername)) {
    natcasesort ($foldername);
    foreach($foldername as $key) {
        if ($key != '.' && $key != '..') {
            echo '<tr>' . $newline;
            echo '<td class="tableb">' . $newline;
            if ($radio != 0) {
                echo '<input type="radio" name="cf1" value="'.$folder.rtrim($key, $folder_sep).'/" class="radio" onclick="document.childform.cf2.value=\''.$folder.$key.'\'" />' . $newline;
            }
            echo '</td>' . $newline;
            echo '<td class="tableb">' . $newline;
            // echo '<a href="'.$CPG_PHP_SELF.'?folder='.rawurlencode($folder_sep.ltrim($folder, $folder_sep).$key.$folder_sep).'&amp;parentform='.rawurlencode($parentform).'&amp;formelementname='.rawurlencode($formelementname).'&amp;no_popup='.$no_popup.'&amp;limitfolder='.$limitfolder.'&amp;linktarget='.$linktarget.'">' . $newline;
            echo '<a href="'.$CPG_PHP_SELF.'?folder='.rawurlencode($folder_prefix.ltrim($folder, $folder_sep).$key.$folder_sep).'&amp;parentform='.rawurlencode($parentform).'&amp;formelementname='.rawurlencode($formelementname).'&amp;no_popup='.$no_popup.'&amp;limitfolder='.$limitfolder.'&amp;linktarget='.$linktarget.'">' . $newline;
            echo cpg_fetch_icon('folder', 0, $lang_minibrowser_php['folder']) . $newline;
            echo $key . $newline;
            echo '</a>' . $newline;
            echo '</td>' . $newline;
            echo '</tr>' . $newline;
        }
    }
}

if (is_array($filename)) {
    natcasesort ($filename);
    foreach($filename as $key) {
        echo '<tr>' . $newline;
        echo '<td class="tableb">' . $newline;
        echo '&nbsp;';
        echo '</td>' . $newline;
        echo '<td class="tableb">' . $newline;
        echo '<img src="images/spacer.gif" width="10" height="15" border="0" alt="" align="left" />' . $newline;
        echo $key . $newline;
        echo '</td>' . $newline;
        echo '</tr>' . $newline;
    }
}
if ($searchnew_php == 1 && $dirCounter == 0) {
echo '<tr>' . $newline;
echo '<td class="tablef" colspan="2">' . $newline;
echo $lang_search_new_php['no_folders'] . $newline;
echo '</td>' . $newline;
echo '</tr>' . $newline;
}
endtable();
echo '<input type="hidden" name="parentform" value="'.$parentform.'" />'.$LINEBREAK;
echo '<input type="hidden" name="formelementname" value="'.$formelementname.'" />'.$LINEBREAK;

echo <<< EOT
</form>
</body>
</html>

EOT;
?>
