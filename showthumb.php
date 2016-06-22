<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
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

function makethumbnail($src_file, $newSize)
{
    global $CONFIG;

    // Checks that file exists and is readable
    if (!filesize($src_file) || !is_readable($src_file)) {
        header("Content-type: image/png");
        readfile(READ_ERROR_ICON);
        exit;
    }

    // find the image size, no size => unknow type
    $imginfo = cpg_getimagesize($src_file);
    if ($imginfo == null) {
        header("Content-type: image/png");
        readfile(UNKNOW_ICON);
        exit;
    }

    // GD can't handle gif images
    if ($imginfo[2] == GIS_GIF && $CONFIG['GIF_support'] == 0) {
        header("Content-type: image/png");
        readfile(GIF_ICON);
        exit;
    }

	// Get the appropriate tool and send the image
	getImageTool();
	$imgObj = new imageObject($src_file);
	$imgObj->send($newSize);
}

$matches = $superCage->get->getMatched('picfile', '/^[0-9A-Za-z~\s\/\\.-_]+$/');

makethumbnail($CONFIG['fullpath'] . $matches[0], $superCage->get->getInt('size'));

//EOF