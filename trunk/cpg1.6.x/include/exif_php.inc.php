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

if (!defined('IN_COPPERMINE')) {
    die('Not in Coppermine...');
}

require("include/exif.php");

function exif_parse_file($filename, $pid)
{
    global $CONFIG, $lang_picinfo;

    if (!is_readable($filename)) {
        return false;
    }
    
    $size = cpg_getimagesize($filename);

    if ($size[2] != 2) {
        return false; // Not a JPEG file
    }

    //Check if we have the data of the said file in the table
    $sql = "SELECT exifData FROM {$CONFIG['TABLE_EXIF']} WHERE pid = $pid";

    $result = cpg_db_query($sql);

    if (mysql_num_rows($result) > 0) {

        $row = mysql_fetch_assoc($result);
        mysql_free_result($result);
        $exifRawData = unserialize($row['exifData']);
        
    } else { // No data in the table - read it from the image file
    
        $exifRawData = read_exif_data_raw($filename, 0);

        // Insert it into table for future reference
        $sql = "INSERT INTO {$CONFIG['TABLE_EXIF']} (pid, exifData) VALUES ($pid, '".addslashes(serialize($exifRawData))."')";
        $result = cpg_db_query($sql);
    }

    $exif = array();

    if (is_array($exifRawData['IFD0'])) {
        $exif = array_merge($exif, $exifRawData['IFD0']);
    }
    
    if (is_array($exifRawData['SubIFD'])) {
        $exif = array_merge($exif, $exifRawData['SubIFD']);
    }
    
    if (is_array($exifRawData['SubIFD']['MakerNote'])) {
        $exif = array_merge($exif, $exifRawData['SubIFD']['MakerNote']);
    }

    if (isset($exifRawData['IFD1OffSet'])) {
        $exif['IFD1OffSet'] = $exifRawData['IFD1OffSet'];
    }
    
    $exifParsed = array();

    //String containing all the available exif tags.
    $exif_info = "AFFocusPosition|Adapter|ColorMode|ColorSpace|ComponentsConfiguration|CompressedBitsPerPixel|Contrast|CustomerRender|DateTimeOriginal|DateTimedigitized|DigitalZoom|DigitalZoomRatio|ExifImageHeight|ExifImageWidth|ExifInteroperabilityOffset|ExifOffset|ExifVersion|ExposureBiasValue|ExposureMode|ExposureProgram|ExposureTime|FNumber|FileSource|Flash|FlashPixVersion|FlashSetting|FocalLength|FocusMode|GainControl|IFD1Offset|ISOSelection|ISOSetting|ISOSpeedRatings|ImageAdjustment|ImageDescription|ImageSharpening|LightSource|Make|ManualFocusDistance|MaxApertureValue|MeteringMode|Model|NoiseReduction|Orientation|Quality|ResolutionUnit|Saturation|SceneCaptureMode|SceneType|Sharpness|Software|WhiteBalance|YCbCrPositioning|xResolution|yResolution";
    $exif_names = explode("|", $exif_info);
    
    $exifCurrentData = array_keys(array_filter(explode("|", $CONFIG['show_which_exif'])));
    
    foreach ($exifCurrentData as $i) { 
        $name = $exif_names[$i];
        if (isset($exif[$name])) {
            $exifParsed[$lang_picinfo[$name]] = $exif[$name];
        }
    }

    ksort($exifParsed);

    return $exifParsed;
}

?>