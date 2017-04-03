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
  Coppermine version: 1.6.03
  $HeadURL$
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

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

    //String containing all the available exif tags.
    $exif_info = "AFFocusPosition|Adapter|ColorMode|ColorSpace|ComponentsConfiguration|CompressedBitsPerPixel|Contrast|CustomerRender|DateTimeOriginal|DateTimedigitized|DigitalZoom|DigitalZoomRatio|ExifImageHeight|ExifImageWidth|ExifInteroperabilityOffset|ExifOffset|ExifVersion|ExposureBiasValue|ExposureMode|ExposureProgram|ExposureTime|FNumber|FileSource|Flash|FlashPixVersion|FlashSetting|FocalLength|FocusMode|GainControl|IFD1Offset|ISOSelection|ISOSetting|ISOSpeedRatings|ImageAdjustment|ImageDescription|ImageSharpening|LightSource|Make|ManualFocusDistance|MaxApertureValue|MeteringMode|Model|NoiseReduction|Orientation|Quality|ResolutionUnit|Saturation|SceneCaptureMode|SceneType|Sharpness|Software|WhiteBalance|YCbCrPositioning|xResolution|yResolution";
    $exif_names = explode("|", $exif_info);

    //Check if we have the data of the said file in the table
    $result = cpg_db_query("SELECT exifData FROM {$CONFIG['TABLE_EXIF']} WHERE pid = $pid");
    if ($result->numRows() > 0) {
        $row = $result->fetchAssoc(true);
        $exif = unserialize($row['exifData']);

        // Convert old EXIF data style to new one
        if (array_key_exists('Errors', $exif)) {
            $exif = cpg_exif_strip_data($exif, $exif_names);
            cpg_db_query("UPDATE {$CONFIG['TABLE_EXIF']} SET exifData = '".addslashes(serialize($exif))."' WHERE pid = '$pid'");
        }
    } else { // No data in the table - read it from the image file
        $exifRawData = read_exif_data_raw($filename, 0);

        $exif = cpg_exif_strip_data($exifRawData, $exif_names);

        // Insert it into table for future reference
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_EXIF']} (pid, exifData) VALUES ($pid, '".addslashes(serialize($exif))."')");
    }

    $exifParsed = array();
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

//EOF