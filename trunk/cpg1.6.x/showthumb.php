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

define('IN_COPPERMINE', true);
define('SHOWTHUMB_PHP', true);

require("include/init.inc.php");

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

define("GIS_GIF", 1);
define("GIS_JPG", 2);
define("GIS_PNG", 3);

define("UNKNOW_ICON", 'images/batch/unknown.png');
define("GIF_ICON", 'images/batch/gif.png');
define("READ_ERROR_ICON", 'images/batch/file_broken.png');

function makethumbnail($src_file, $newSize, $method)
{
    global $CONFIG;

    $content_type = array(
        GIS_GIF => 'gif',
        GIS_JPG => 'jpeg',
        GIS_PNG => 'png',
    );
    
    // Checks that file exists and is readable
    if (!filesize($src_file) || !is_readable($src_file)) {
        header("Content-type: image/png");
        fpassthru(fopen(READ_ERROR_ICON, 'rb'));
        exit;
    }
    
    // find the image size, no size => unknow type
    $imginfo = cpg_getimagesize($src_file);
    if ($imginfo == null) {
        header("Content-type: image/png");
        fpassthru(fopen(UNKNOW_ICON, 'rb'));
        exit;
    }
    
    // GD can't handle gif images
    //if ($imginfo[2] == GIS_GIF && ($method == 'gd1' || $method == 'gd2')) {
    if ($imginfo[2] == GIS_GIF && $CONFIG['GIF_support'] == 0) {
        header("Content-type: image/png");
        fpassthru(fopen(GIF_ICON, 'rb'));
        exit;
    }
    
    // height/width
    $srcWidth = $imginfo[0];
    $srcHeight = $imginfo[1];

    $ratio = max($srcWidth, $srcHeight) / $newSize;
    $ratio = max($ratio, 1.0);
    $destWidth = (int)($srcWidth / $ratio);
    $destHeight = (int)($srcHeight / $ratio);
    
    // Choose method for thumb creation
    switch ($method) {
    
    case "im":
    
        if (preg_match("#[A-Z]:|\\\\#Ai", __FILE__)) {
            $cur_dir = dirname(__FILE__);
            $src_file = '"' . $cur_dir . '\\' . strtr($src_file, '/', '\\') . '"';
        } else {
            $src_file = escapeshellarg($src_file);
        }
        
        header("Content-type: image/" . ($content_type[$imginfo[2]]));
        passthru("{$CONFIG['impath']}convert -quality $CONFIG[jpeg_qual] -antialias -geometry {$destWidth}x{$destHeight} $src_file -");

        break;

    case "gd2":
    
        if ($imginfo[2] == GIS_GIF && $CONFIG['GIF_support'] == 1) {
            $src_img = imagecreatefromgif($src_file);
        } elseif ($imginfo[2] == GIS_JPG) {
            $src_img = imagecreatefromjpeg($src_file);
        } else {
            $src_img = imagecreatefrompng($src_file);
        }
        
        if ($imginfo[2] == GIS_GIF) {
            $dst_img = imagecreate($destWidth, $destHeight);
        } else {
            $dst_img = imagecreatetruecolor($destWidth, $destHeight);
        }
        
        imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);

        header("Content-type: image/jpeg");

        imagejpeg($dst_img);
        imagedestroy($src_img);
        imagedestroy($dst_img);

        break;
    }
}

$matches = $superCage->get->getMatched('picfile', '/^[0-9A-Za-z\/\\\\_.-\s]+$/');

makethumbnail($CONFIG['fullpath'] . $matches[0], $superCage->get->getInt('size'), $CONFIG['thumb_method']);

?>