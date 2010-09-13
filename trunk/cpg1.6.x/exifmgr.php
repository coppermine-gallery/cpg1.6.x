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
define('DISPLAYIMAGE_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

// Initialize some variables
$icon_array = array(
    'ok' => cpg_fetch_icon('ok', 0),
);

$output_message = '';

pageheader($lang_picinfo['ManageExifDisplay']);

//String containing all the available exif tags.
$exif_info = "AFFocusPosition|Adapter|ColorMode|ColorSpace|ComponentsConfiguration|CompressedBitsPerPixel|Contrast|CustomerRender|DateTimeOriginal|DateTimedigitized|DigitalZoom|DigitalZoomRatio|ExifImageHeight|ExifImageWidth|ExifInteroperabilityOffset|ExifOffset|ExifVersion|ExposureBiasValue|ExposureMode|ExposureProgram|ExposureTime|FNumber|FileSource|Flash|FlashPixVersion|FlashSetting|FocalLength|FocusMode|GainControl|IFD1Offset|ISOSelection|ISOSetting|ISOSpeedRatings|ImageAdjustment|ImageDescription|ImageSharpening|LightSource|Make|ManualFocusDistance|MaxApertureValue|MeteringMode|Model|NoiseReduction|Orientation|Quality|ResolutionUnit|Saturation|SceneCaptureMode|SceneType|Sharpness|Software|WhiteBalance|YCbCrPositioning|xResolution|yResolution";

$exifRawData = explode("|", $exif_info);

// The form has been submit --- start
if ($superCage->post->keyExists('save')) {

    $str = "";

    $exif_tags = $superCage->post->getEscaped('exif_tags');

    foreach ($exifRawData as $val) {
        if (in_array($val, $exif_tags)) {
            $str .= "1|";
        } else {
            $str .= "0|";
        }
    }

    //Remove the last pipe from the string.
    $selectedExifTags = trim($str, '|');

    cpg_config_set('show_which_exif', $selectedExifTags);
    
    $output_message = $lang_picinfo['success'];
}  
// The form has been submit --- end

$exifCurrentData = explode("|", $CONFIG['show_which_exif']);

// Main code starts here
echo <<< EOT
    <form method="post" action="" name="editForm" id="cpgform">
    <input type="hidden" name="save" value="save" />
EOT;

$exif_help = '&nbsp;' . cpg_display_help('f=exif.htm&amp;as=exif&amp;ae=exif_end', '640', '450');

starttable('100%', cpg_fetch_icon('exif_mgr', 2) . $lang_picinfo['ManageExifDisplay'] . $exif_help, 2);

echo <<< EOT
    <tr>
        <td class="tableh2">
            <span class="cpg_user_message">{$output_message}</span>
        </td>
        <td class="tableh2" align="center">
            <input type="checkbox" name="checkAll" onclick="selectAll('cpgform');" class="checkbox" title="{$lang_common['check_uncheck_all']}" />
        </td>
    </tr>

EOT;

$loopCounter = 0;

foreach ($exifRawData as $key => $val) {
  
    $checked = $exifCurrentData[$key] == 1 ? 'checked="checked"' : '';

    if (($loopCounter / 2) == floor($loopCounter / 2)) {
        $style = 'tableb';
    } else {
        $style = 'tableb tableb_alternate';
    }
    
    $loopCounter++;

    echo <<< EOT
    <tr>
        <td class="$style">{$lang_picinfo[$val]}</td>
        <td class="$style" align="center">
            <input type="checkbox" name="exif_tags[]" value="$val" $checked class="checkbox" />
        </td>
    </tr>

EOT;

}

echo <<< EOT
    <tr>
        <td class="tablef" align="center">
            <button type="submit" class="button" name="submit" id="submit" value="{$lang_common['apply_changes']}">{$icon_array['ok']}{$lang_common['apply_changes']}</button>
        </td>
        <td class="tablef" align="center">
            <input type="checkbox" name="checkAll2" onclick="selectAll('cpgform');" class="checkbox" title="{$lang_common['check_uncheck_all']}" />
        </td>
    </tr>

EOT;

endtable();

echo <<< EOT
    </form>
EOT;

pagefooter();

?>