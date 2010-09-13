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

/*
Dev note: I had to re-design the versioncheck page to make the code less cluttered. 
As a result, the changes applied by Sander to make this page fit into the new installer 
are gone. Please do not re-introduce those changes: they were bad in the first place. 
Instead, the installer needs to be reviewed. I updated the installer a little bit to make 
sure it doesn't break entirely, however I suggest re-designing the installer without the 
OO-approach: only use OO where it makes sense and if you have no dependencies. 
This is not the case: coppermine has been built the old-school way (without OO), and there 
is little benefit in the OO-tech of the new installer. It doesn't have to be re-built from 
scratch though. 
Further discussion should be led on the dev board. 
Joachim 2008-08-08
*/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// define some vars
$textFileExtensions_array = array(
  'php', 'txt', 'htm', 'html', 'js', 'css', 'sql', 'xml'
);

$imageFileExtensions_array = array(
  'jpg', 'png', 'gif'
);
$subversionRepository = 'http://coppermine.svn.sourceforge.net/viewvc/coppermine/trunk/';
$majorVersion = 'cpg'.str_replace('.' . ltrim(substr(COPPERMINE_VERSION,strrpos(COPPERMINE_VERSION,'.')),'.'), '', COPPERMINE_VERSION).'.x';

$maxLength_array = array();
$maxLength_array['counter'] = strlen($lang_versioncheck_php['counter']);
$maxLength_array['folderfile'] = strlen($lang_versioncheck_php['type']);
$maxLength_array['fullpath'] = strlen($lang_versioncheck_php['path']);
$maxLength_array['exist'] = strlen($lang_versioncheck_php['missing']);
$maxLength_array['readwrite'] = strlen($lang_versioncheck_php['permissions']);
$maxLength_array['version'] = strlen($lang_versioncheck_php['version']);
$maxLength_array['revision'] = strlen($lang_versioncheck_php['revision']);
$maxLength_array['modified'] = strlen($lang_versioncheck_php['modified']);
$maxLength_array['comment'] = strlen($lang_versioncheck_php['comment']);

function cpg_get_path_and_file($string) {
    // check if $string contains delimiter that triggers replacement
    $return['path'] = str_replace(str_replace('/', '', strrchr($string, '/')), '', $string);
    $return['file'] = str_replace('/', '', strrchr($string, '/'));
    if (strstr($return['path'], '.') != FALSE && $return['file'] == '') {
        $return['file'] = $return['path'];
        $return['path'] = '';
    }
    if (strstr($return['file'], '.') == FALSE) {
        $return['path'] = $return['path'].$return['file'];
        $return['file'] = '';
    }
    return $return;
}

function cpg_is_writable($folder){
  global $LINEBREAK, $lang_versioncheck_php;
  // Make sure that there is a trailing slash at the end of the variable $folder
  $folder = rtrim($folder, '/').'/';
  $return = 0;
  $file_content = "this is just a test file that hasn't been deleted properly." . $LINEBREAK . "It's safe to delete it now";
  if ($fd = @fopen($folder.'cpgvc_tf.txt', 'w')) {
      @fwrite($fd, $file_content);
      @fclose($fd);
      @unlink($folder.'cpgvc_tf.txt');
      $return = $lang_versioncheck_php['write'];
  } else {
      $return = $lang_versioncheck_php['read'];
  }
  return $return;
}

if (!function_exists(cpg_fillArrayFieldWithSpaces)) {
	function cpg_fillArrayFieldWithSpaces($text, $maxchars, $fillUpOn = 'right') {
	  global $CONFIG;
      if (!function_exists('mb_strlen')) {
          require 'include/mb.inc.php';
      }
	  $spaceCharsToAdd = $maxchars - mb_strlen($text, $CONFIG['charset']);
	  if ($spaceCharsToAdd > 0) {
	    for ($i = 1; $i <= $spaceCharsToAdd; $i++) {
	      if ($fillUpOn != 'left') {
	        $text .= ' ';
	      } else {
	        $text = ' '.$text;
	      }
	    }
	  }
	  return $text;
	}
}

function cpg_versioncheckDisplayOptions() {
  global $CPG_PHP_SELF, $lang_versioncheck_php, $optionDisplayOutput_array, $THEME_DIR;
  $submit_icon = cpg_fetch_icon('ok', 1);
  $help = ' ' . cpg_display_help('f=upgrading.htm&amp;as=versioncheck_options_start&amp;ae=versioncheck_options_end', '600', '400');
  $help_display_output = ' ' . cpg_display_help('f=upgrading.htm&amp;as=versioncheck_options_display_output&amp;ae=versioncheck_options_display_output_end', '450', '300');
  $help_potential_errors_only = ' ' . cpg_display_help('f=upgrading.htm&amp;as=versioncheck_options_only_show_potential_errors&amp;ae=versioncheck_options_only_show_potential_errors_end', '450', '300');
  $help_hide_images = ' ' . cpg_display_help('f=upgrading.htm&amp;as=versioncheck_options_hide_images&amp;ae=versioncheck_options_hide_images_end', '450', '300');
  $help_no_modified_check = ' ' . cpg_display_help('f=upgrading.htm&amp;as=versioncheck_options_no_modification_check&amp;ae=versioncheck_options_no_modification_check_end', '450', '300');
  $help_no_repository_connect = ' ' . cpg_display_help('f=upgrading.htm&amp;as=versioncheck_options_no_connect_online_repository&amp;ae=versioncheck_options_no_connect_online_repository_end', '450', '300');
  $filter_icon = cpg_fetch_icon('filter', 2);
  print <<< EOT
<script type="text/javascript">
    function form_submit() {
        document.getElementById('submit').value = '';
        document.getElementById('cpg_progress_bar').style.display = 'block';
        document.getElementById('submit').style.display = 'none';
        return true;
    }
</script>
<form name="options" action="{$CPG_PHP_SELF}" method="get" onsubmit="return form_submit();">
<table align="center" width="100%" cellspacing="1" cellpadding="0" class="maintable">
  <tr>
          <td class="tableh2" colspan="2">{$lang_versioncheck_php['options']}{$help}</td>
  </tr>
  <tr>
    <td class="tableb" valign="top">
      {$lang_versioncheck_php['display_output']}{$help_display_output}
    </td>
    <td class="tableb" valign="top">
      <input type="radio" name="output" id="output_screen" value="screen" class="radio" {$optionDisplayOutput_array['screen']} /><label for="output_screen" class="clickable_option">{$lang_versioncheck_php['on_screen']}</label>&nbsp;&nbsp;
      <input type="radio" name="output" id="output_textarea" value="textarea" class="radio" {$optionDisplayOutput_array['textarea']} /><label for="output_textarea" class="clickable_option">{$lang_versioncheck_php['text_only']}</label>
    </td>
  </tr>
  <tr>
    <td class="tableb tableb_alternate" valign="top">
      <label for="errors_only">
        {$filter_icon}{$lang_versioncheck_php['errors_only']}{$help_potential_errors_only}
      </label>
    </td>
    <td class="tableb tableb_alternate" valign="top">
      <input type="checkbox" name="errors_only" id="errors_only" value="1" class="checkbox" {$optionDisplayOutput_array['errors_only']} />
    </td>
  </tr>
  <tr>
    <td class="tableb" valign="top">
      <label for="hide_images">
        {$filter_icon}{$lang_versioncheck_php['hide_images']}{$help_hide_images}
      </label>
    </td>
    <td class="tableb" valign="top">
      <input type="checkbox" name="hide_images" id="hide_images" value="1" class="checkbox" {$optionDisplayOutput_array['hide_images']} />
    </td>
  </tr>
  <tr>
    <td class="tableb tableb_alternate" valign="top">
      <label for="no_modification_check">
        {$filter_icon}{$lang_versioncheck_php['no_modification_check']}{$help_no_modified_check}
      </label>
    </td>
    <td class="tableb tableb_alternate" valign="top">
      <input type="checkbox" name="no_modification_check" id="no_modification_check" value="1" class="checkbox" {$optionDisplayOutput_array['no_modification_check']} />
    </td>
  </tr>
  <tr>
    <td class="tableb" valign="top">
      <label for="do_not_connect_to_online_repository">
        {$lang_versioncheck_php['do_not_connect_to_online_repository']}{$help_no_repository_connect}
      </label>
    </td>
    <td class="tableb" valign="top">
      <input type="checkbox" name="do_not_connect_to_online_repository" id="do_not_connect_to_online_repository" value="1" class="checkbox" {$optionDisplayOutput_array['do_not_connect_to_online_repository']} />
      <label for="do_not_connect_to_online_repository">
          ({$lang_versioncheck_php['online_repository_explain']})
      </label>
    </td>
  </tr>
  <tr>
    <td align="center" class="tablef" colspan="2">
      <span id="cpg_progress_bar" style="display:none">
EOT;
    if (defined('THEME_HAS_PROGRESS_GRAPHICS')) {
        $prefix = $THEME_DIR;
    } else {
        $prefix = '';
        print '                         <img src="' . $prefix . 'images/loader.gif" border="0" alt="" />';
    }
  print <<< EOT
      </span>
      <button type="submit" class="button" name="submit" id="submit" value="1">{$submit_icon}{$lang_versioncheck_php['submit']}</button>
    </td>
  </tr>
</table>
EOT;
  print '</form>';
  print '<br />';
}

function cpg_versioncheckPopulateArray($file_data_array) {
    global $displayOption_array, $textFileExtensions_array, $imageFileExtensions_array, $CONFIG, $maxLength_array, $lang_versioncheck_php, $lang_common;
    $extensionMatrix_array = array(
      'unknown' => 'images/extensions/unknown.png',
      'folder' => 'images/extensions/folder.png',
      'php' => 'images/extensions/php.png',
      'js' => 'images/extensions/js.png',
      'css' => 'images/extensions/css.png',
      'htm' => 'images/extensions/htm.png',
      'html' => 'images/extensions/htm.png',
      'sql' => 'images/extensions/sql.png',
      'ttf' => 'images/extensions/ttf.png',
      'ico' => 'images/extensions/unknown.png',
    );

    $loopCounter = 0;
    //print_r($file_data_array);
    //die;
    foreach ($file_data_array as $file_data_key => $file_data_values) { // start the foreach loop
        // initialize the vars
        if (!isset($file_data_array[$file_data_key]['comment'])) {
            $file_data_array[$file_data_key]['comment'] = '';
        }
        if (!isset($file_data_array[$file_data_key]['txt_revision'])) {
            $file_data_array[$file_data_key]['txt_revision'] = '';
        }
        if (!isset($file_data_array[$file_data_key]['version'])) {
            $file_data_array[$file_data_key]['version'] = '';
        }
        if (!isset($file_data_array[$file_data_key]['local_version'])) {
            $file_data_array[$file_data_key]['local_version'] = '';
        }
        if (!isset($file_data_array[$file_data_key]['revision'])) {
            $file_data_array[$file_data_key]['revision'] = '';
        }
        if (!isset($file_data_array[$file_data_key]['local_revision'])) {
            $file_data_array[$file_data_key]['local_revision'] = '';
        }
        if (!isset($file_data_array[$file_data_key]['txt_folderfile'])) {
            $file_data_array[$file_data_key]['txt_folderfile'] = '';
        }
        
        // Replace the placeholders with actual content --- start
        $file_data_array[$file_data_key]['fullpath'] = str_replace('**fullpath**', rtrim($CONFIG['fullpath'], '/'), $file_data_array[$file_data_key]['fullpath']);
        $file_data_array[$file_data_key]['fullpath'] = str_replace('**userpics**', rtrim($CONFIG['userpics'], '/'), $file_data_array[$file_data_key]['fullpath']);
        // Replace the placeholders with actual content --- end
        // populate the path and file from the fullpath --- start
        $tempArray = cpg_get_path_and_file($file_data_array[$file_data_key]['fullpath']);
        $file_data_array[$file_data_key]['folder'] = $tempArray['path'];
        $file_data_array[$file_data_key]['file'] = $tempArray['file'];
        // populate the path and file from the fullpath --- end
        // determine the number of parent folders --- start
        $file_data_array[$file_data_key]['folderDepth'] = count(explode('/', rtrim($tempArray['path'], '/')));
        if (strlen($file_data_array[$file_data_key]['folder']) > $maxLength_array['folderfile']) {
          $maxLength_array['folderfile'] = strlen($file_data_array[$file_data_key]['folder']);
        }
        // determine the number of parent folders --- end
        // Determine the icon -- start
        if ($file_data_array[$file_data_key]['file'] == '') {
            // we have a folder here --- start
            $file_data_array[$file_data_key]['icon'] = '<img src="'.$extensionMatrix_array['folder'].'" border="0" width="16" height="16" alt="" style="margin-left:'. (16 * ($file_data_array[$file_data_key]['folderDepth'] - 1)) . 'px" />';
            // we have a folder here --- end
        } else {
            // we have a file here --- start
            // determine the extension -- start
            $file_data_array[$file_data_key]['extension'] = ltrim(substr($file_data_array[$file_data_key]['file'],strrpos($file_data_array[$file_data_key]['file'],'.')),'.');
            // determine the extension -- end
            // determine the icon representing the file -- start
            if (array_key_exists($file_data_array[$file_data_key]['extension'],$extensionMatrix_array) == TRUE) {
                $file_data_array[$file_data_key]['icon'] = '<img src="'.$extensionMatrix_array[$file_data_array[$file_data_key]['extension']].'" border="0" width="16" height="16" alt="'.$file_data_array[$file_data_key]['extension'].'" style="margin-left:'. (16 * $file_data_array[$file_data_key]['folderDepth']) . 'px" />';
            } elseif (in_array($file_data_array[$file_data_key]['extension'],$imageFileExtensions_array)) {
                $file_data_array[$file_data_key]['icon'] = '<img src="images/extensions/'.$file_data_array[$file_data_key]['extension'].'.png" border="0" width="16" height="16" alt="'.$file_data_array[$file_data_key]['extension'].'" style="margin-left:'. (16 * $file_data_array[$file_data_key]['folderDepth']) . 'px" />';
            } else {
                $file_data_array[$file_data_key]['icon'] = '<img src="'.$extensionMatrix_array['unknown'].'" border="0" width="16" height="16" alt="'.$file_data_array[$file_data_key]['extension'].'" style="margin-left:'. (16 * $file_data_array[$file_data_key]['folderDepth']) . 'px" />';
            }
            // determine the icon representing the file -- end            
            // we have a file here --- end
        }
        // Determine the icon -- end
        // Is the folder/file actually there --- start
        $file_data_array[$file_data_key]['exists'] = file_exists($file_data_array[$file_data_key]['fullpath']);
        // Is the folder/file actually there --- end
        if ($file_data_array[$file_data_key]['exists'] != 1) { // The folder/file is missing --- start
            if ($file_data_array[$file_data_key]['status'] == 'mandatory') {
              $file_data_array[$file_data_key]['txt_missing'] = $lang_versioncheck_php['mandatory'];
              $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['mandatory_missing'];
              $file_data_array[$file_data_key]['txt_version'] = $lang_versioncheck_php['not_applicable'];
              $file_data_array[$file_data_key]['txt_revision'] = $lang_versioncheck_php['not_applicable'];
            } elseif ($file_data_array[$file_data_key]['status'] == 'remove') {
              $file_data_array[$file_data_key]['txt_missing'] = $lang_versioncheck_php['removed'].' ('.$lang_common['ok'].')';
              $file_data_array[$file_data_key]['txt_version'] = $lang_versioncheck_php['not_applicable'].' ('.$lang_common['ok'].')';
              $file_data_array[$file_data_key]['txt_revision'] = $lang_versioncheck_php['not_applicable'].' ('.$lang_common['ok'].')';
            } else {
              $file_data_array[$file_data_key]['txt_missing'] = $lang_versioncheck_php['optional'];
              $file_data_array[$file_data_key]['txt_version'] = $lang_versioncheck_php['not_applicable'];
              $file_data_array[$file_data_key]['txt_revision'] = $lang_versioncheck_php['not_applicable'];
            }
            if (strlen($file_data_array[$file_data_key]['txt_missing']) > $maxLength_array['exist']) {
              $maxLength_array['exist'] = strlen($file_data_array[$file_data_key]['txt_missing']);
            } // The folder/file is missing --- end
        } else { // The folder/file exists --- start
            if ($file_data_array[$file_data_key]['file'] == '') { 
              // we have a folder here --- start
              $file_data_array[$file_data_key]['txt_folderfile'] = $lang_versioncheck_php['folder'];
              // no version or revision number for folder names
              $file_data_array[$file_data_key]['txt_version'] = $lang_versioncheck_php['not_applicable'].' ('.$lang_common['ok'].')';
              $file_data_array[$file_data_key]['txt_revision'] = $lang_versioncheck_php['not_applicable'].' ('.$lang_common['ok'].')';
              if ($displayOption_array['no_modification_check'] != 1) {
                $file_data_array[$file_data_key]['txt_modified'] = $lang_versioncheck_php['not_applicable'] . ' ('.$lang_common['ok'].')';
              }
              $file_data_array[$file_data_key]['local_version'] = '';
              $file_data_array[$file_data_key]['local_revision'] = '';
              if (is_readable($file_data_values['fullpath']) == TRUE) { // check if the folder is readable/writable --- start
                // Sadly, is_readable doesn't really work on all server setups
                $file_data_array[$file_data_key]['local_readwrite'] = $lang_versioncheck_php['read'];
                $file_data_array[$file_data_key]['local_readwrite'] = cpg_is_writable($file_data_array[$file_data_key]['fullpath']);
                if (is_writable($file_data_values['fullpath']) == TRUE) {
                  $file_data_array[$file_data_key]['local_readwrite'] = $lang_versioncheck_php['write'];
                }
              } // check if the folder is readable/writable --- end
              // we have a folder here --- end
            } else {
                // we have a file here --- start
                $file_data_array[$file_data_key]['txt_folderfile'] = $lang_versioncheck_php['file'];
                if (in_array($file_data_array[$file_data_key]['extension'],$textFileExtensions_array) == TRUE) {
                    // the file is not binary, i.e. it's a text file --- start
                    $handle = @fopen($file_data_array[$file_data_key]['fullpath'], 'r');
                    if ($handle == FALSE) {
                        // We haven't been able to even fopen the file, so the information retrieved by is_readable/is_writable returned nonsense. Let's reset the information accordingly.
                        $file_data_array[$file_data_key]['local_readwrite'] = '--';
                        $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['inaccessible'].'. '.$lang_versioncheck_php['review_permissions'].'. ';
                        //$file_data_array[$file_data_key]['comment'] .= '|'.$file_data_values['fullpath'];
                    } else {
                        // File is readable -- start
                        $blob = '';
                        $blob = @fread($handle, filesize($file_data_array[$file_data_key]['fullpath']));
                        @fclose($handle);
                        $revision_string = '$'.'Revision'.':';
                        $cpg_version_determination = 'Coppermine' . ' ' . 'version:';
                        $blob = str_replace('<?php','',$blob);
                        // Determine the cpg version -- start
                        $file_data_array[$file_data_key]['local_version'] = substr($blob,strpos($blob, $cpg_version_determination)); // chop off the first bit up to the string $cpg_version_determination
                        $double_slash_position = strpos($file_data_array[$file_data_key]['local_version'], '//');
                        if ($double_slash_position) {
                            $file_data_array[$file_data_key]['local_version'] = substr($file_data_array[$file_data_key]['local_version'],0,$double_slash_position);
                        }
                        $file_data_array[$file_data_key]['local_version'] = trim(str_replace($cpg_version_determination, '', $file_data_array[$file_data_key]['local_version']));
                        $file_data_array[$file_data_key]['local_version'] = trim(str_replace('#', '', $file_data_array[$file_data_key]['local_version']));
                        $file_data_array[$file_data_key]['local_version'] = trim(substr($file_data_array[$file_data_key]['local_version'], 0, strpos($file_data_array[$file_data_key]['local_version'], '$')));
                        if (strlen($file_data_array[$file_data_key]['local_version']) > 6) { // Version numbers larger than 6 are not likely at all
                            $file_data_array[$file_data_key]['local_version'] = $lang_versioncheck_php['not_applicable'];
                        }
                        if ($file_data_array[$file_data_key]['version'] != '' && $file_data_array[$file_data_key]['exists'] == 1 && $file_data_array[$file_data_key]['local_version'] != '') {
                            $file_data_array[$file_data_key]['txt_version'] = ' (';
                            $versionCompare = version_compare($file_data_array[$file_data_key]['local_version'],$file_data_array[$file_data_key]['version']);
                            if ($versionCompare == 0) {
                                $file_data_array[$file_data_key]['txt_version'] .= $lang_common['ok'];
                            } elseif($versionCompare == -1) {
                                $file_data_array[$file_data_key]['txt_version'] .= sprintf($lang_versioncheck_php['outdated'],$file_data_array[$file_data_key]['version']);
                                $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_version'].'. ';
                            } else {
                                $file_data_array[$file_data_key]['txt_version'] .= sprintf($lang_versioncheck_php['newer'], $file_data_array[$file_data_key]['version']);
                                $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_dev_version'].'. ';
                            }
                            $file_data_array[$file_data_key]['txt_version'] .= ')';
                        } else {
                            $file_data_array[$file_data_key]['txt_version'] = '';
                        }
                        if ($file_data_array[$file_data_key]['local_version'] != '' && $file_data_array[$file_data_key]['txt_version'] == '') {
                            $file_data_array[$file_data_key]['txt_version'] = ' (?)';
                        }
                        if ($file_data_array[$file_data_key]['version'] == '' && $file_data_array[$file_data_key]['txt_version'] == '') {
                            $file_data_array[$file_data_key]['txt_version'] = $lang_versioncheck_php['not_applicable'].' ('.$lang_common['ok'].')';
                        }
                        if (strlen($file_data_array[$file_data_key]['local_version'] . $file_data_array[$file_data_key]['txt_version']) > $maxLength_array['version']) {
                            $maxLength_array['version'] = strlen($file_data_array[$file_data_key]['local_version'] . $file_data_array[$file_data_key]['txt_version']);
                        }
                        // Determine the cpg version -- end
                        // Determine file revision -- start
                        if ($file_data_array[$file_data_key]['revision'] != '') { // only look the revision up if a revision is given in the XML data
                            $file_data_array[$file_data_key]['local_revision'] = str_replace($revision_string, '', substr($blob,strpos($blob, $revision_string),25));
                            $file_data_array[$file_data_key]['local_revision'] = trim(substr($file_data_array[$file_data_key]['local_revision'], 0, strpos($file_data_array[$file_data_key]['local_revision'], '$')));
                            if (strlen($file_data_array[$file_data_key]['local_revision']) > 5) { // Check validity of revision: more than 5 chars is not expected
                                $file_data_array[$file_data_key]['local_revision']= $lang_versioncheck_php['not_applicable'];
                            }
                            if ($file_data_array[$file_data_key]['local_revision'] != '' && $file_data_array[$file_data_key]['exists'] == 1) {
                              //$file_data_array[$file_data_key]['local_revision'] = $file_data_array[$file_data_key]['revision'];
                              if ($file_data_array[$file_data_key]['local_revision'] == $file_data_array[$file_data_key]['revision']) {
                                $file_data_array[$file_data_key]['txt_revision'] .= ' ('.$lang_common['ok'].')';
                              } elseif($file_data_array[$file_data_key]['local_revision'] < $file_data_array[$file_data_key]['revision']) {
                                $file_data_array[$file_data_key]['txt_revision'] .= ' ('. sprintf($lang_versioncheck_php['outdated'], $file_data_array[$file_data_key]['revision']).')(!)';
                                if ($versionCompare == 0) {
                                  $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_version'].'. ';
                                }
                              } else {
                                $file_data_array[$file_data_key]['txt_revision'] .= ' ('. sprintf($lang_versioncheck_php['newer'], $file_data_array[$file_data_key]['revision']).')(?)';
                                if ($versionCompare == 0) {
                                  $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_dev_version'].'. ';
                                }
                              }
                              //$file_data_array[$file_data_key]['txt_revision'] .= ')';
                            } else {
                              $file_data_array[$file_data_key]['txt_revision'] = '';
                            }
                        } else { // there's no file revision given, so let's output "na"
                            $file_data_array[$file_data_key]['txt_revision'] = $lang_versioncheck_php['not_applicable'].' ('.$lang_common['ok'].')';
                        }
                        // Determine file revision -- end
                        // File is readable -- end
                    }
                    // the file is not binary, i.e. it's a text file --- end
                } else {
                    // the file is binary, i.e. it's an image --- start
                    // binary files don't come with version numbers -- start
                    $file_data_array[$file_data_key]['txt_version'] = $lang_versioncheck_php['not_applicable'].' ('.$lang_common['ok'].')';
                    $file_data_array[$file_data_key]['txt_revision'] = $lang_versioncheck_php['not_applicable'].' ('.$lang_common['ok'].')';
                    // binary files don't come with version numbers -- end
                    // the file is binary, i.e. it's an image --- end
                }
                // check the md5 hashes --- start
                if ($displayOption_array['no_modification_check'] != 1) {
                    // Is the option "no_modification_check" not populated --- start
                    if(function_exists('md5_file')) { // the MD5-function may not exist
                        // Do we have an md5-hash that we could compare against? -- start
                        if ($file_data_array[$file_data_key]['hash'] != '') {
                            // only perform the md5-check if the versions and revisions match anyway - we'd be comparing apples with bananas if we checked the hashes otherwise -- start
                            if ($file_data_array[$file_data_key]['version'] == $file_data_array[$file_data_key]['local_version'] && $file_data_array[$file_data_key]['revision'] == $file_data_array[$file_data_key]['local_revision']) { 
                                $file_data_array[$file_data_key]['local_hash'] = md5_file($file_data_values['fullpath']);
                                if ($file_data_array[$file_data_key]['local_hash'] == $file_data_array[$file_data_key]['hash']) {
                                    $file_data_array[$file_data_key]['unmodified'] = 1;
                                    $file_data_array[$file_data_key]['txt_modified'] = $lang_versioncheck_php['not_modified'] . ' ('.$lang_common['ok'].')';
                                } else {
                                    $file_data_array[$file_data_key]['unmodified'] = 0;
                                    $file_data_array[$file_data_key]['txt_modified'] = $lang_versioncheck_php['modified'].' (!)';
                                    $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_modified'].'. ';
                                }
                            } else {
                                $file_data_array[$file_data_key]['txt_modified'] = $lang_versioncheck_php['not_applicable'];
                            }
                            // only perform the md5-check if the versions and revisions match anyway - we'd be comparing apples with bananas if we checked the hashes otherwise -- end
                        }
                        // Do we have an md5-hash that we could compare against? -- end
                    }
                    // Is the option "no_modification_check" not populated --- end
                }
                // check the md5 hashes --- end                
                if ($file_data_array[$file_data_key]['status'] == 'remove') {
                    // should the file have been removed ? --- start
                        $file_data_array[$file_data_key]['txt_missing'] = $lang_versioncheck_php['existing'];
                        $file_data_array[$file_data_key]['txt_version'] = $lang_versioncheck_php['not_applicable'];
                        $file_data_array[$file_data_key]['txt_revision'] = $lang_versioncheck_php['not_applicable'];
                        if ($displayOption_array['no_modification_check'] != 1) {
                            $file_data_array[$file_data_key]['txt_modified'] = $lang_versioncheck_php['not_applicable'];
                        } else {
                            $file_data_array[$file_data_key]['txt_modified'] = '';
                        }
                        $file_data_array[$file_data_key]['comment'] = $lang_versioncheck_php['review_removed_existing'];
                    // should the file have been removed ? --- end
                }
                // we have a file here --- end
            }
            // The folder/file exists --- end
        }
        // Populate some columns for files that have been successfully removed
        if ($file_data_array[$file_data_key]['status'] == 'remove') {
            // Fill the folder/file status column
            if ($file_data_array[$file_data_key]['txt_folderfile'] == '') {
                $file_data_array[$file_data_key]['txt_folderfile'] = $lang_versioncheck_php['not_applicable'];
            }
            if ($file_data_array[$file_data_key]['txt_modified'] == '' && $displayOption_array['no_modification_check'] != 1) {
                $file_data_array[$file_data_key]['txt_modified'] = $lang_versioncheck_php['not_applicable'] . ' ('.$lang_common['ok'].')';
            }
        }
        $loopCounter++;
        //  Adapt the maxLength array -- start
        if (strlen($file_data_array[$file_data_key]['fullpath']) > $maxLength_array['fullpath']) {
            $maxLength_array['fullpath'] = strlen($file_data_array[$file_data_key]['fullpath']);
        }
        if (strlen($file_data_array[$file_data_key]['txt_folderfile']) > $maxLength_array['folderfile']) {
            $maxLength_array['folderfile'] = strlen($file_data_array[$file_data_key]['txt_folderfile']);
        }
        if (strlen($file_data_array[$file_data_key]['txt_revision']) > $maxLength_array['revision']) {
            $maxLength_array['revision'] = strlen($file_data_array[$file_data_key]['txt_revision']);
        }  
        if (strlen($file_data_array[$file_data_key]['local_revision'] . $file_data_array[$file_data_key]['txt_revision']) > $maxLength_array['revision']) {
          $maxLength_array['revision'] = strlen($file_data_array[$file_data_key]['local_revision'] . $file_data_array[$file_data_key]['txt_revision']);
        }
        if (strlen($lang_versioncheck_php['warning']) > $maxLength_array['comment']) {
            $maxLength_array['comment'] = strlen($lang_versioncheck_php['warning']);
        }
        if (strlen($file_data_array[$file_data_key]['txt_modified']) > $maxLength_array['modified']) {
            $maxLength_array['modified'] = strlen($file_data_array[$file_data_key]['txt_modified']);
        } 
        //  Adapt the maxLength array -- end
    } // end the foreach loop
    return $file_data_array;
} // end function definition "cpg_versioncheckPopulateArray()"

function cpg_versioncheckCreateXml($file_data_array) {
  global $textFileExtensions_array, $lang_versioncheck_php, $displayOption_array, $LINEBREAK;
  $loopCounter = 0;
  print <<< EOT
  <script type="text/javascript">
            document.write('<a href="javascript:HighlightAll(\'versioncheckdisplay.versioncheck_text\')" class="admin_menu">');
            document.write('{$lang_versioncheck_php['select_all']}');
            document.write('</a>');
            document.write('<br />');
  </script>
EOT;
  print '<form name="versioncheckdisplay"><textarea name="versioncheck_text" rows="20" class="textinput debug_text" style="width:98%;font-family:\'Courier New\',Courier,monospace;font-size:9px;height:auto;overflow:auto;">';
  print '<?xml version="1.0" encoding="ISO-8859-1"?>'.$LINEBREAK;
  print '<file_data>'.$LINEBREAK;
  $loopCounter++;
  foreach ($file_data_array as $file_data_key => $file_data_values) {
    print '  <element>'.$LINEBREAK;
    $loopCounter++;
    // populate the path and file from the fullpath
    $tempArray = cpg_get_path_and_file($file_data_values['fullpath']);
    $file_data_array[$file_data_key]['folder'] = $tempArray['path'];
    $file_data_array[$file_data_key]['file'] = $tempArray['file'];
    $file_data_array[$file_data_key]['extension'] = ltrim(substr($file_data_array[$file_data_key]['file'],strrpos($file_data_array[$file_data_key]['file'],'.')),'.');
    print "    <fullpath>".$file_data_values['fullpath']."</fullpath>".$LINEBREAK;
    $loopCounter++;
    if (in_array($file_data_array[$file_data_key]['extension'],$textFileExtensions_array) == TRUE) { // the file is not binary --- start
      $handle = @fopen($file_data_values['fullpath'], 'r');
      $blob = '';
      $blob = @fread($handle, filesize($file_data_values['fullpath']));
      @fclose($handle);
      $revision_string = '$'.'Revision'.':';
      $cpg_version_determination = 'Coppermine' . ' ' . 'version:';
      $blob = str_replace('<?php','',$blob);
      // Determine the cpg version
      $file_data_array[$file_data_key]['version'] = substr($blob,strpos($blob, $cpg_version_determination)); // chop off the first bit up to the string $cpg_version_determination
      $double_slash_position = strpos($file_data_array[$file_data_key]['version'], '//');
      if ($double_slash_position) {
         $file_data_array[$file_data_key]['version'] = substr($file_data_array[$file_data_key]['version'],0,$double_slash_position);
      }
      $file_data_array[$file_data_key]['version'] = trim(str_replace($cpg_version_determination, '', $file_data_array[$file_data_key]['version']));
      $file_data_array[$file_data_key]['version'] = trim(str_replace('#', '', $file_data_array[$file_data_key]['version']));
      $file_data_array[$file_data_key]['version'] = trim(substr($file_data_array[$file_data_key]['version'], 0, strpos($file_data_array[$file_data_key]['version'], '$')));
      if (strlen($file_data_array[$file_data_key]['version']) > 6) {
        $file_data_array[$file_data_key]['version']= $lang_versioncheck_php['not_applicable'];
      }
      // Determine file revision
      $file_data_array[$file_data_key]['revision'] = str_replace($revision_string, '', substr($blob,strpos($blob, $revision_string),25));
      $file_data_array[$file_data_key]['revision'] = trim(substr($file_data_array[$file_data_key]['revision'], 0, strpos($file_data_array[$file_data_key]['revision'], '$')));
      if (strlen($file_data_array[$file_data_key]['revision']) > 6) {
        $file_data_array[$file_data_key]['revision'] = $lang_versioncheck_php['not_applicable'];
      }
    } else { // the file is not binary --- end
        $file_data_array[$file_data_key]['version'] = '';
        $file_data_array[$file_data_key]['revision'] = '';
    }
    if ($file_data_array[$file_data_key]['version'] != '') {
        print "    <version>".$file_data_array[$file_data_key]['version']."</version>".$LINEBREAK;
        $loopCounter++;
    }
    if ($file_data_array[$file_data_key]['revision'] != '') {
        print "    <revision>".$file_data_array[$file_data_key]['revision']."</revision>".$LINEBREAK;
        $loopCounter++;
    }
    if ($file_data_array[$file_data_key]['status'] != '') {
      $status = $file_data_array[$file_data_key]['status'];
    } else {
      $status = 'mandatory';
    }
    print "    <status>".$status."</status>".$LINEBREAK;
    $loopCounter++;
    if ($file_data_array[$file_data_key]['permission'] != '') {
      $permission = $file_data_array[$file_data_key]['permission'];
    } else {
      $permission = 'read';
    }
    if ($file_data_array[$file_data_key]['status'] != 'remove') {
        print "    <permission>".$permission."</permission>".$LINEBREAK;
    }
    $loopCounter++;
    if ($file_data_array[$file_data_key]['file'] != '' && $file_data_array[$file_data_key]['status'] != 'remove' && $file_data_array[$file_data_key]['extension'] != 'xml') {
      $hash = md5_file($file_data_values['fullpath']);
    } else {
      $hash = '';
    }
    if ($hash != '') {
        print "    <hash>".$hash."</hash>".$LINEBREAK;
        $loopCounter++;
    }
    print "  </element>".$LINEBREAK;
    $loopCounter++;
  }
  print '</file_data>'.$LINEBREAK;
  // display formatted footer data
  if ($displayOption_array['output'] == 'textarea' || $displayOption_array['output'] == 'create') {
    print <<< EOT
    </textarea>
    </form>
EOT;
  }
  $loopCounter++;
  return $loopCounter;
} // end function definition "cpg_versioncheckCreateXml()"

function cpg_versioncheckCreateTextOnlyOutput($file_data_array) {
  global $displayOption_array, $file_data_count, $lang_versioncheck_php, $maxLength_array, $imageFileExtensions_array, $LINEBREAK;

    // display formatted header data
    if ($displayOption_array['output'] == 'textarea') {
      echo <<< EOT
      <a href="javascript:HighlightAll('versioncheckdisplay.versioncheck_text')" class="admin_menu">
      {$lang_versioncheck_php['select_all']}
      </a><br />
      
EOT;
      print '<form name="versioncheckdisplay"><textarea name="versioncheck_text" rows="'.($file_data_count + 5).'" cols="60" class="textinput debug_text" style="width:98%;font-family:\'Courier New\',Courier,monospace;font-size:9px;">';
    }

  $loopCounter = 1;
  $textSeparator = '|';
  $caption = '';
  $underline = '';
  $output = '';
  if (strlen($file_data_count) > $maxLength_array['counter']) {
    $maxLength_array['counter'] = strlen($file_data_count);
  }
  // the caption for the table
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['counter'], $maxLength_array['counter']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['type'], $maxLength_array['folderfile']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['path'], $maxLength_array['fullpath']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['missing'], $maxLength_array['exist']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['permissions'], $maxLength_array['readwrite']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['version'], $maxLength_array['version']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['revision'], $maxLength_array['revision']);
  $caption .= $textSeparator;
  if ($displayOption_array['no_modification_check'] != 1) {
      $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['modified'], $maxLength_array['modified']);
      $caption .= $textSeparator;
  }
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['comment'], $maxLength_array['comment']);
  $caption .= $LINEBREAK;
  for ($i = 1; $i <= strlen($caption); $i++) {
    $underline .= '-';
  }
  $underline .= $LINEBREAK;
  // loop through all the elements in $file_data_array (which equals looping thorugh all folders and files) once more and create the textual output
  foreach ($file_data_array as $file_data_values) {
    if (($displayOption_array['errors_only'] == 0) || ($displayOption_array['errors_only'] == 1 && $file_data_values['comment'] != '')) { // only display if corrsponding option is not disabled --- start
        if ($displayOption_array['hide_images'] && in_array($file_data_values['extension'],$imageFileExtensions_array) == TRUE) {// Only display image if corresponding option is not enabled --- start
            // Do nothing
        } else {
            $output .= cpg_fillArrayFieldWithSpaces(ltrim($loopCounter), $maxLength_array['counter'],'left');
            $output .= $textSeparator;
            $output .= cpg_fillArrayFieldWithSpaces($file_data_values['txt_folderfile'], $maxLength_array['folderfile']);
            $output .= $textSeparator;
            $output .= cpg_fillArrayFieldWithSpaces($file_data_values['fullpath'], $maxLength_array['fullpath']);
            $output .= $textSeparator;
            $output .= cpg_fillArrayFieldWithSpaces($file_data_values['txt_missing'], $maxLength_array['exist']);
            $output .= $textSeparator;
            $output .= cpg_fillArrayFieldWithSpaces($file_data_values['local_readwrite'].$file_data_values['txt_readwrite'], $maxLength_array['readwrite']);
            $output .= $textSeparator;
            $output .= cpg_fillArrayFieldWithSpaces($file_data_values['local_version'].$file_data_values['txt_version'], $maxLength_array['version']);
            $output .= $textSeparator;
            $output .= cpg_fillArrayFieldWithSpaces($file_data_values['local_revision'].$file_data_values['txt_revision'], $maxLength_array['revision']);
            $output .= $textSeparator;
            if ($displayOption_array['no_modification_check'] != 1) {
                $output .= cpg_fillArrayFieldWithSpaces($file_data_values['local_modified'].$file_data_values['txt_modified'], $maxLength_array['modified']);
                $output .= $textSeparator;
            }
            if ($file_data_values['comment'] != '') {
                $output .= $lang_versioncheck_php['warning'];
            }
            $output .= $LINEBREAK;
            $loopCounter++;
        } // Only display image if corresponding option is not enabled --- end
    } // only display if corrsponding option is not disabled --- end
  }

  ob_start();
  print $caption;
  print $underline;
  print $output;
    // display formatted footer data
    if ($displayOption_array['output'] == 'textarea') {
      print <<< EOT
      </textarea>
      </form>
EOT;
    }
  $string = ob_get_contents();
  ob_end_clean();
  return $string;
}

function cpg_versioncheckCreateHTMLOutput($file_data_array) {
  global $textFileExtensions_array, $lang_versioncheck_php, $lang_common, $majorVersion, $displayOption_array, $file_data_count, $maxLength_array, $subversionRepository, $imageFileExtensions_array, $LINEBREAK;
  $loopCounter_array = array('total' => 0, 'error' => 0, 'display' => 0);
  if (strlen($file_data_count) > $maxLength_array['counter']) {
    $maxLength_array['counter'] = strlen($file_data_count);
  }
  if (function_exists('cpg_fetch_icon')) {
    $ok_icon = cpg_fetch_icon('ok', 0);
    $cancel_icon = '&nbsp;' . cpg_fetch_icon('cancel', 0);
    $stop_icon = '&nbsp;' . cpg_fetch_icon('stop', 0);
  } else {
    $ok_icon = '('.$lang_common['ok'].')';
    $cancel_icon = ' (?)';
    $stop_icon = ' (!)';
  }
  // the caption for the table
  print <<< EOT
<table align="center" width="100%" cellspacing="1" cellpadding="0" class="maintable">
  <tr>
          <td class="tableh2" colspan="9">{$lang_versioncheck_php['versioncheck_output']}</td>
  </tr>
  <tr>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['path']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['missing']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['permissions']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['version']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['revision']}</th>
EOT;
  if ($displayOption_array['no_modification_check'] != 1) {
    print <<< EOT
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['modified']}</th>
EOT;
  }
  print <<< EOT
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['comment']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['repository_link']}</th>
  </tr>
EOT;
  foreach ($file_data_array as $file_data_values) {
    if ($displayOption_array['hide_images'] && in_array($file_data_values['extension'],$imageFileExtensions_array) == TRUE) {// Only display image if corresponding option is not enabled --- start
        // Do nothing
    } else {
        if (($loopCounter_array['display']/2) == floor($loopCounter_array['display']/2)) {
          $cellstyle = 'tableb tableb_alternate';
        } else {
          $cellstyle = 'tableb';
        }
        if (isset($file_data_values['txt_missing'])) {
            if ($file_data_values['txt_missing'] == $lang_versioncheck_php['removed'].' ('.$lang_common['ok'].')') {
              $file_data_values['link_start'] = '<s>';
              $file_data_values['link_end'] = '</s>';
            } elseif ($file_data_values['txt_missing'] != '') {
              $file_data_values['link_start'] = '<a href="'.$file_data_values['fullpath'].'">';
              $file_data_values['link_end'] = '</a>';
            }
        }
        $important['path'] = '';
        $important['missing'] = '';
        $important['readwrite'] = '';
        $important['version'] = '';
        $important['revision'] = '';
        $important['comment'] = '';
        $important['svn'] = '';
        $important['modified'] = '';
        /*
        if ($displayOption_array['errors_only'] == 0 && $file_data_values['comment'] != '') {
          if ($file_data_values['txt_missing'] == $lang_versioncheck_php['mandatory']) {
            $important['missing'] = ' important';
          }
          if ($file_data_values['txt_missing'] == $lang_versioncheck_php['existing']) {
            $important['missing'] = ' important';
          }
        }
        */
        // spice up the output by replacing plain text with icons --- start
        $file_data_values['txt_missing'] = str_replace('('.$lang_common['ok'].')', $ok_icon, $file_data_values['txt_missing']);
        $file_data_values['txt_version'] = str_replace('('.$lang_common['ok'].')', $ok_icon, $file_data_values['txt_version']);
        $file_data_values['txt_revision'] = str_replace('('.$lang_common['ok'].')', $ok_icon, $file_data_values['txt_revision']);
        $file_data_values['txt_version'] = str_replace('(?)', $cancel_icon, $file_data_values['txt_version']);
        $file_data_values['txt_revision'] = str_replace('(?)', $cancel_icon, $file_data_values['txt_revision']);
        $file_data_values['txt_version'] = str_replace('(!)', $stop_icon, $file_data_values['txt_version']);
        $file_data_values['txt_revision'] = str_replace('(!)', $stop_icon, $file_data_values['txt_revision']);
        $file_data_values['txt_missing'] = str_replace($lang_versioncheck_php['mandatory'], $lang_versioncheck_php['mandatory'] . $stop_icon, $file_data_values['txt_missing']);
        $file_data_values['txt_modified'] = str_replace('('.$lang_common['ok'].')', $ok_icon, $file_data_values['txt_modified']);
        if ($displayOption_array['no_modification_check'] != 1) {
            $file_data_values['txt_modified'] = str_replace('(!)', $cancel_icon, $file_data_values['txt_modified']);
        }
        // spice up the output by replacing plain text with icons --- end
        $loopCounter_array['total']++;
        if (($displayOption_array['errors_only'] == 0) || ($displayOption_array['errors_only'] == 1 && $file_data_values['comment'] != '')) { // only display if corrsponding option is not disabled --- start
          if ($file_data_values['comment'] != '') {
            $loopCounter_array['error']++;
          }
          print <<< EOT
        <tr>
          <td class="{$cellstyle}{$important['path']}" align="left" style="font-size:9px">{$file_data_values['icon']}{$file_data_values['link_start']}{$file_data_values['fullpath']}{$file_data_values['link_end']}</td>
          <td class="{$cellstyle}{$important['missing']}" align="left" style="font-size:9px">{$file_data_values['txt_missing']}</td>
          <td class="{$cellstyle}{$important['readwrite']}" align="left" style="font-size:9px">{$file_data_values['local_readwrite']}{$file_data_values['txt_readwrite']}</td>
          <td class="{$cellstyle}{$important['version']}" align="left" style="font-size:9px">{$file_data_values['local_version']}{$file_data_values['txt_version']}</td>
          <td class="{$cellstyle}{$important['revision']}" align="left" style="font-size:9px">{$file_data_values['local_revision']}{$file_data_values['txt_revision']}</td>
EOT;
          if ($displayOption_array['no_modification_check'] != 1) {
              print <<< EOT
          <td class="{$cellstyle}{$important['modified']}" align="left" style="font-size:9px">{$file_data_values['local_modified']}{$file_data_values['txt_modified']}</td>
EOT;
          }
          print <<< EOT
          <td class="{$cellstyle}{$important['comment']}" align="left" style="font-size:9px">{$file_data_values['comment']}</td>
          <td class="{$cellstyle}{$important['svn']}" align="left" style="font-size:9px"><a href="{$subversionRepository}{$majorVersion}/{$file_data_values['fullpath']}"><img src="images/icons/subversion.png" width="16" height="16" border="0" alt="" title="{$lang_versioncheck_php['browse_corresponding_page_subversion']}" /></a></td>
        </tr>
EOT;
      }
      $loopCounter_array['display']++;
    } // only display if corrsponding option is not disabled --- end
  }
    print $LINEBREAK.'</table>';
    return $loopCounter_array;
}

function cpgVersioncheckConnectRepository() {
    global $displayOption_array, $majorVersion;
    // Perform the repository lookup and xml creation --- start
    //$displayOption_array['do_not_connect_to_online_repository'] = 1;
    $remoteURL = 'http://coppermine-gallery.net/' . str_replace('.', '', $majorVersion) . '.files.xml';
    $localFile = 'include/' . str_replace('.', '', $majorVersion) . '.files.xml';
    $remoteConnectionFailed = '';
    if ($displayOption_array['do_not_connect_to_online_repository'] == 0) { // connect to the online repository --- start
      $result = cpgGetRemoteFileByURL($remoteURL, 'GET','','200');
      if (strlen($result['body']) < 2000) {
        $remoteConnectionFailed = 1;
        $error = $result['error'];
      }
    } // connect to the online repository --- end
    if ($displayOption_array['do_not_connect_to_online_repository'] == 1 || $remoteConnectionFailed == 1) {
      $result = array('body' => file_get_contents($localFile));
    }
    unset($result['headers']); // we should take a look the header data and error messages before dropping them. Well, later maybe ;-)
    unset($result['error']);
    $result = array_shift($result);
    if (function_exists('simplexml_load_string')) {
        $xml = simplexml_load_string($result);
        unset($result);
        $file_data_array = array();
        foreach ($xml as $file) {
           $file_data_array[] = (array) $file;
        }
    } else {
        include_once('include/lib.xml.php');
        $xml = new Xml;
        $file_data_array = $xml->parse($result);
        $file_data_array = array_shift($file_data_array);
    }
    // Perform the repository lookup and xml creation --- end
    return $file_data_array;
}

if (!function_exists('cpgGetRemoteFileByURL')) {  // This function is normally being populated in include/functions.inc.php - let's define it in case it doesn't exist
function cpgGetRemoteFileByURL($remoteURL, $method = "GET", $redirect = 10, $minLength = '0') {
    global $lang_get_remote_file_by_url, $LINEBREAK;
    // FSOCK code snippets taken from http://jeenaparadies.net/weblog/2007/jan/get_remote_file
    $url = parse_url($remoteURL); // chop the URL into protocol, domain, port, folder, file, parameter
    $error = '';
    // Let's try CURL first
    if (function_exists('curl_init') == TRUE) { // don't bother to try curl if it isn't there in the first place
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $remoteURL);
      curl_setopt($curl, CURLOPT_HEADER, 0);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $body = curl_exec($curl);
      $headers = curl_getinfo($curl);
      curl_close($curl);
      if (strlen($body) < $minLength ) {
              // Fetching the data by CURL obviously failed
              $error .= sprintf($lang_get_remote_file_by_url['no_data_returned'], $lang_get_remote_file_by_url['curl']) . '<br />' . $LINEBREAK;
      } else {
              // Fetching the data by CURL was successfull. Let's return the data
              return array("headers" => $headers, "body" => $body);
      }
    } else {
      // Curl is not available
      $error .= $lang_get_remote_file_by_url['curl_not_available'] . '<br />' . $LINEBREAK;
    }
    // Now let's try FSOCKOPEN
    if ($url['host'] != ''){
      $fp = @fsockopen ($url['host'], (!empty($url['port']) ? (int)$url['port'] : 80), $errno, $errstr, 30);
      if ($fp) { // fsockopen file handle success - start
          $path = (!empty($url['path']) ? $url['path'] : "/").(!empty($url['query']) ? "?".$url['query'] : "");
          $header = $LINEBREAK . 'Host: '.$url['host'];
          fputs ($fp, $method." ".$path." HTTP/1.0".$header.$LINEBREAK.$LINEBREAK.("post" == strtolower($method) ? $data : ""));
          if(!feof($fp)) {
            $scheme = fgets($fp);
            //list(, $code ) = explode(" ", $scheme);
            $headers = explode(" ", $scheme);
            //$headers = array("Scheme" => $scheme);
          }
          while ( !feof($fp) ) {
              $h = fgets($fp);
              if($h == "\r\n" OR $h == "\n") {
                break;
              }
              list($key, $value) = explode(":", $h, 2);
              $key = strtolower($key);
              $value = trim($value);
              if(isset($headers[$key])) {
                $headers[$key] .= ','.trim($value);
              } else {
                $headers[$key] = trim($value);
              }
          }
          $body = '';
          while ( !feof($fp) ) {
            $body .= fgets($fp);
          }
          fclose($fp);
          if (strlen($body) < $minLength) {
                // Fetching the data by FSOCKOPEN obviously failed
                $error .= sprintf($lang_get_remote_file_by_url['no_data_returned'], $lang_get_remote_file_by_url['fsockopen']) . '<br />' . $LINEBREAK;
          } elseif (in_array('404', $headers) == TRUE) {
                // We got a 404 error
                $error .= sprintf($lang_get_remote_file_by_url['error_number'], '404') . '<br />' . $LINEBREAK;
          } else {
                // Fetching the data by FSOCKOPEN was successfull. Let's return the data
                return array("headers" => $headers, "body" => $body, "error" => $error);
          }
      } else {  // fsockopen file handle failure - start
              $error .= $lang_get_remote_file_by_url['fsockopen'] . ': ';
              $error .= sprintf($lang_get_remote_file_by_url['error_number'], $errno);
              $error .= sprintf($lang_get_remote_file_by_url['error_message'], $errstr);
      }
    } else {
      //$error .= 'No Hostname set. In other words: we\'re trying to retrieve a local file';
    }
    // Finally, try FOPEN
    @ini_set('allow_url_fopen','1'); // Try to override the existing policy
    if ($url['scheme'] != '') {
      $protocol = $url['scheme'].'://';
    }  else {
      $protocol = '';
    }
    if ($url['port'] != '') {
      $port = ':'.(int)$url['port'];
    }  elseif($url['host'] != '') {
      $port = ':80';
    } else {
      $port = '';
    }
    $handle  = @fopen($protocol.$url['host'].$port.$url['path'], 'r');
    if ($handle) {
      while(!feof($handle)) {
        $body .= fread($handle, 1024);
      }
      fclose($handle);
      if (strlen($body) < $minLength) {
        $error .= sprintf($lang_get_remote_file_by_url['no_data_returned'], $lang_get_remote_file_by_url['fopen']) . '<br />' . $LINEBREAK;
      } else {
        // Fetching the data by FOPEN was successfull. Let's return the data
        return array("headers" => $headers, "body" => $body, "error" => $error);
      }
    } else { // opening the fopen handle failed as well
      // if the script reaches this stage, all available methods failed, so let's return the error messages and give up
      return array("headers" => $headers, "body" => $body, "error" => $error);
    }
}
}

?>
