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

// embedded images
function cornerleft()
  {
    header("Content-type: image/gif");
    header("Content-length: 290");
    echo base64_decode(
'R0lGODlhGQAZAMQAAP///+zu8d3h5tXb4dbW1s/V3czU2sXN1c'.
'PK0cPExMHCw7y+wLW1tbC2va6yuKurrJmZmf///wAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BA'.
'UUABEALAAAAAAZABkAAAWfICCOZGmeaHoqysI8CZG4sEzHSZ6I'.
'CeJEEULg8AsOi0IgULRACgoNIOEZDQoGyoiIAUwECkUvuBvAZk'.
'UPI1F6ZBuyS0Ds6RxbzXCR0C4Ol+FKPAdVQmtGb4BxTVJ0jHiJ'.
'W2R8f4mBAGmFSAGIlXFzdlOPnXpffqKjcoNunYBMTqeskRFesL'.
'GXh6yVPKG5ugBCtb08vbYJxKjGx5ByyokhADs='.
'');
}
function cornerright()
  {
    header("Content-type: image/gif");
    header("Content-length: 292");
    echo base64_decode(
'R0lGODlhGQAZAMQAAP///+zv8t3h5tXc5NbW1s/V3dHS08XN1c'.
'PK0cLDw8HCw7y+wLW1ta+0u66yuKurrJmZmf///wAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BA'.
'UUABEALAAAAAAZABkAAAWhYCSOZGlGCQCc7JmubSy+skzX5xAY'.
'Km4OAsLNJyrsIo8eMaJTiBhKH9AgciyiNSM10jgMZc2qFtuaih'.
'qF4JelPR+OSVg54Iw4jIknuWTmprdWeyNtXG9bXWsjYXZ4YjuC'.
'fWgCh2lCe4RdR4VwZIt3AXmMoHpyTAOUk2d/Z1elAQRVb7B2sm'.
'cILwm5CQYJDwwLu72/wb7ALyrIycrLzM3OyyEAOw=='.
'');
}

define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

define('IMG_DIR', $CONFIG['fullpath'].'edit/');
// image calls
if ($superCage->get->keyExists('img')) {
    if ($superCage->get->getAlpha('img') == "left") {
        cornerleft();
        exit;
    } elseif ($superCage->get->getAlpha('img') == "right") {
        cornerright();
        exit;
    }
}

if ($superCage->get->keyExists('id')) {
    $pid = $superCage->get->getInt('id');
} elseif ($superCage->post->keyExists('id')) {
    $pid = $superCage->post->getInt('id');
} else {
    cpg_die(ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

if ($pid > 0) {

    $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '$pid'");
    $CURRENT_PIC = mysql_fetch_assoc($result);
    mysql_free_result($result);

    $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = '{$CURRENT_PIC['aid']}'");
    $CURRENT_ALBUM = mysql_fetch_assoc($result);
    mysql_free_result($result);
        
} else {
    cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__); 
}

if (!(GALLERY_ADMIN_MODE || ($CONFIG['users_can_edit_pics'] && $CURRENT_PIC['owner_id'] == USER_ID) || ($CURRENT_ALBUM['category'] == FIRST_USER_CAT + USER_ID)) || !USER_ID) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

//Garbage collection run at an probability of 25% and delete all files older than one hour
if (rand(1,100) < 25){
        $d = opendir(IMG_DIR);
        while ($file = readdir($d)){
                if (is_file(IMG_DIR.$file) && ((time() - filemtime(IMG_DIR.$file))/60) > 60 && $file !="index.php" && $file !="no_FTP-uploads_into_this_folder!.txt"){
                    @unlink(IMG_DIR.$file);
                }

        }
}

//Include the proper class for image Object
if ($CONFIG['thumb_method']=="gd2"){
    require("include/imageobject_gd.class.php");
}elseif ($CONFIG['thumb_method']=="im"){
    require("include/imageobject_im.class.php");
}else{
    die ($lang_editpics_php['error_editor_class']);
}

//////////////////////////////////Main script//////////////////////////////////////
// PREVENTING CACHING
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                                                     // always modified
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");                          // HTTP/1.0

// PAGE INIT
if (!$img_dir) $img_dir = IMG_DIR;


//if ($_GET['id']){
if ($superCage->get->getInt('id')) {
   //Copy the Image file to the editing directory
   if (copy($CONFIG['fullpath'].$CURRENT_PIC['filepath'].$CURRENT_PIC['filename'],$img_dir.$CURRENT_PIC['filename']))
   $newimage = $CURRENT_PIC['filename'];
}else if(!isset($newimage)){
   //$newimage = $_POST['newimage'];
   $matches = $superCage->post->getMatched('newimage','/^[0-9A-Za-z\/_.\-~]+$/');
   $newimage = $matches[0];
}

   if ($newimage){
      $imgObj = new imageObject($img_dir,$newimage);
      /*if ($_POST['quality']){
         $imgObj->quality = $_POST['quality'];
      }*/
      if ($superCage->post->keyExists('quality')) {
         $imgObj->quality = $superCage->post->getInt('quality');
      }  

      if ($imgObj->imgRes){
          /*if ($_POST['clipval'] && $_POST['cropping']==true){
             $imgObj = $imgObj->cropImage($_POST['clipval']);
          }*/
          if ($superCage->post->getEscaped('clipval') && $superCage->post->getEscaped('cropping') == true) {
             $imgObj = $imgObj->cropImage($superCage->post->getEscaped('clipval'));
          }

          /*if ($_POST['angle']<>0){
             $imgObj = $imgObj->rotateImage($_POST['angle']);
          }*/
          if ($superCage->post->getInt('angle') <> 0) {
             $imgObj = $imgObj->rotateImage($superCage->post->getInt('angle'));
          }


      }
      $newimage = $imgObj->filename;
   }//newimage

   //if(isset($_POST["save"])) {
   if ($superCage->post->keyExists('save')) {

        $width=$imgObj->width;
        $height=$imgObj->height;
        $normal = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['normal_pfx'] . $CURRENT_PIC['filename'];
        $thumbnail = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['thumb_pfx'] . $CURRENT_PIC['filename'];
        $filesize = @filesize($img_dir.$newimage);

        //Full image replace
        copy($img_dir.$newimage,$CONFIG['fullpath'].$CURRENT_PIC['filepath'].$CURRENT_PIC['filename'])   ;

        // Normal image resized and replace, use the CPG resize method instead of the object resizeImage
        // as using the object resizeImage will make the final display of image to be a thumbnail in the editor

        if (max($width, $height) > $CONFIG['picture_width'] && $CONFIG['make_intermediate']) {
            resize_image($img_dir.$newimage, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
        } else {
            @unlink($normal);
        }

        //thumbnail resized and replace
        resize_image($img_dir.$newimage, $thumbnail, $CONFIG['thumb_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
        $total_filesize = $filesize + (file_exists($normal) ? filesize($normal) : 0) + filesize($thumbnail);

        //Update the image size in the DB
        cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']}
                      SET pheight = $height,
                          pwidth = $width,
                          filesize = $filesize,
                          total_filesize = $total_filesize
                      WHERE pid = '$pid'");

        $message = sprintf($lang_editpics_php['success_picture'], '<a href="#" onclick="self.close();">', '</a>');

   }

   //if(isset($_POST["save_thumb"])) {
     if ($superCage->post->keyExists('save_thumb')) {
        $width=$imgObj->width;
        $height=$imgObj->height;
            $normal = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['normal_pfx'] . $CURRENT_PIC['filename'];
            $thumbnail = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['thumb_pfx'] . $CURRENT_PIC['filename'];
            $currentPic = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CURRENT_PIC['filename'];

        //Calculate the thumbnail dimensions
        if ($CONFIG['thumb_use'] == 'ht') {
            $ratio = $height / $CONFIG['thumb_width'] ;
        } elseif ($CONFIG['thumb_use'] == 'wd') {
            $ratio = $width / $CONFIG['thumb_width'] ;
        } else {
            $ratio = max($width, $height) / $CONFIG['thumb_width'] ;
        }
        $ratio = max($ratio, 1.0);
        $dstWidth = (int)($width / $ratio);
        $dstHeight = (int)($height / $ratio);
        //$imgObj->quality = (int)($_POST['quality']);
        $imgObj->quality = $superCage->post->getInt('quality');
        $imgObj = $imgObj->resizeImage($dstWidth,$dstHeight);
        $newimage = $imgObj->filename;

        copy($img_dir.$newimage,$CONFIG['fullpath'].$CURRENT_PIC['filepath'].$CONFIG['thumb_pfx'].$CURRENT_PIC['filename'])   ;

        $total_filesize = filesize($currentPic) + (file_exists($normal) ? filesize($normal) : 0) + filesize($thumbnail);

        //Update the image size in the DB
        cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = $total_filesize WHERE pid = '$pid'");


        $message = sprintf($lang_editpics_php['success_thumb'], '<a href="#" onclick="self.close();">', '</a>');

   }
// Convert the array to json object string
$js_vars['width'] = $imgObj->width;
$js_vars['height'] = $imgObj->height;
$js_vars['error_document_size'] = $lang_editpics_php['error_document_size'];
$json_vars = json_encode($js_vars);
// Output the json object
$json_script = "<script type=\"text/javascript\">var js_vars = eval('($json_vars)');</script>" . $LINEBREAK;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <meta http-equiv="imagetoolbar" content="no" />
  <meta http-equiv="content-type" content="text/html; charset=<?php echo $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'] ?>" />
    <title><?php echo $lang_editpics_php['crop_title'] ?></title>
    <?php if($imgObj){
    echo $json_script;
    ?>
    <script type="text/javascript" src="js/pic_editor.js"></script>
    <script src="js/jquery-1.4.2.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
<?php }?>
    <style type="text/css">
    #lefttopdiv{
    position:absolute;
    background-image:url(<?php echo $CPG_PHP_SELF ?>?img=left);
    left:0px;
    top:100px;
    height:25px;
    width:25px;
    z-index:8;
    cursor:move;
    visibility:hidden;
    }
    #rightbottomdiv{
    position:absolute;
    background-image:url(<?php echo $CPG_PHP_SELF ?>?img=right);
    left:0px;
    top:225px;
    height:25px;
    width:25px;
    z-index:9;
    cursor:move;
    visibility:hidden;
    }
    #imgdiv{
    position:absolute;
    top:100px;
    width:<?php echo $imgObj->width?>px;
    height:<?php echo $imgObj->height?>px;
    text-align:center;
    margin-left:auto;
    margin-right:auto;
    z-index:0;
    <?php 
        if (!$imgObj->imgRes) {
            echo 'visibility:hidden;' . $LINEBREAK;
        }
    ?>
    }
    </style>
    <link rel="stylesheet" href="css/coppermine.css" type="text/css" />
    <link rel="stylesheet" href="themes/<?php echo $CONFIG['theme'];?>/style.css" type="text/css" />
</head>

<body>
<?php if ($imgObj) print "<script type=\"text/javascript\">addonload('libinit()');</script>";?>

<form name="mainform" id="cpgform" method="post" enctype="multipart/form-data" action="pic_editor.php">

<input type="hidden" name="clipval" value="" />
<input type="hidden" name="newimage" value="<?php print $newimage ; ?>" />
<input type="hidden" name="img_dir" value="<?php print $img_dir ; ?>" />
<?php
if ($superCage->get->keyExists('id')) {
        $get_id = $superCage->get->getInt('id');
    } else {
        $get_id = $superCage->post->getInt('id');
    }
?>
<input type="hidden" name="id" value="<?php print ($get_id); ?>" />

<?php starttable("100%", $lang_editpics_php['crop_title'], 3); ?>
<tr>
<td>
<table border="0" cellspacing="2" cellpadding="2" class="maintableb" width="100%" >
  <tr>
<?php if ($CONFIG['thumb_method']=='im' ||($CONFIG['thumb_method']=='gd2' && function_exists('imagerotate'))){ ?>


   <td>
      <select name="angle" class="listbox">
        <option value="0" selected="selected"><?php print $lang_editpics_php['rotate']; ?></option>
        <option value="90">-90&#176;</option>
        <option value="180">180&#176;</option>
        <option value="270">+90&#176;</option>
      </select>
   </td>
<?php } ?>
   <!--
   <td >
    <input valign="bottom" type="checkbox" class="checkbox" name="mirror" id="mirror" value="true" />
    <label for="mirror" class="clickable_option">
      <?php print $lang_editpics_php['mirror']; ?>
    </label>
    </td>




   <td>
       <select name="rescale" class="listbox">
         <option value=""><?php print $lang_editpics_php['scale']; ?></option>
<?php
for ($i=0.1;$i<=2.01;$i=$i+0.01) {
print '         <option value="'.$i.'">';
print $i*100;
print '%</option>';
print $LINEBREAK;
}
?>
       </select>
   </td>
   <td>
     <?php print $lang_editpics_php['or'];  ?>
   </td>
   <td>
       <select name="widthheight" class="listbox" >
           <option value="width"><?php print $lang_editpics_php['new_width'];  ?></option>
           <option value="height"><?php print $lang_editpics_php['new_height'];  ?></option>
       </select>
   </td>
   <td>
       <input type="text" size="3" name="newsize" id="newsize" class="textinput" /> px
   </td>
   -->
   <td>
     <input type="checkbox" class="checkbox" name="cropping" id="cropping" value="true" onclick="showCorners(this)" />
     <label for="cropping" class="clickable_option">
       <?php print $lang_editpics_php['enable_clipping'];  ?>
     </label>
   </td>
   <td title="Less quality creates a smaller file, default is 80%" >
        <select id="quality" name="quality" class="listbox" >
        <option value="<?php print $CONFIG['jpeg_qual']; ?>" selected="selected"><?php print $lang_editpics_php['jpeg_quality'];  ?></option>
        <?php
        for ( $counter = 10; $counter <= 100; $counter += 5) {
            $selected = ($imgObj->quality == $counter) ? 'selected="selected" ' : '';
            echo "<option value=\"$counter\" $selected>$counter</option>";
        }
        ?>
        </select>
   </td>
   <td><input type="submit" name="submit" class="button" value=" <?php echo $lang_editpics_php['preview'] ?> " /></td>
   <td><input type="submit" name="save" class="button" value=" <?php echo $lang_editpics_php['save'] ?> " /></td>
   <td><input type="submit" name="save_thumb" class="button" value=" <?php echo $lang_editpics_php['save_thumb'] ?> " /></td>
 </tr>
</table>
</td>
</tr>
<?php endtable(); ?>

<div id="lefttopdiv" onclick="showPreview(); return false;">
</div>

<div id="rightbottomdiv" onclick="showPreview(); return false;">
</div>

<?php if ($message){ ?>
<h1 align=center><?php echo $message?></h1>
<?php } ?>

<div id="imgdiv">
<?php if ($imgObj){ ?>
<img src="<?php echo $imgObj->directory.$imgObj->filename?>?<?php echo rand(); ?>" <?php echo $imgObj->string; ?> style="vertical-align: middle;" alt="" />
<?php } ?>
</div>
</form>
</body>
</html>