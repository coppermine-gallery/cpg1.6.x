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

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

if($CONFIG['read_iptc_data'] ){
    include("include/iptc.inc.php");
}

// Add a picture to an album
function add_picture($aid, $filepath, $filename, $position = 0, $title = '', $caption = '', $keywords = '', $user1 = '', $user2 = '', $user3 = '', $user4 = '', $category = 0, $raw_ip = '', $hdr_ip = '', $iwidth = 0, $iheight = 0)
{
    global $CONFIG, $USER_DATA, $PIC_NEED_APPROVAL, $CURRENT_PIC_DATA;
    global $lang_errors, $lang_db_input_php;

    $image = $CONFIG['fullpath'] . $filepath . $filename;
    $normal = $CONFIG['fullpath'] . $filepath . $CONFIG['normal_pfx'] . $filename;
    $thumb = $CONFIG['fullpath'] . $filepath . $CONFIG['thumb_pfx'] . $filename;
    $orig = $CONFIG['fullpath'] . $filepath . $CONFIG['orig_pfx'] . $filename;
    // $mini = $CONFIG['fullpath'] . $filepath . $CONFIG['mini_pfx'] . $filename;
    $work_image = $image;


    if (!is_known_filetype($image)) {
        return array('error' => $lang_db_input_php['err_invalid_fext'] . ' ' . $CONFIG['allowed_file_extensions'], 'halt_upload' => 0);
    } elseif (is_image($filename)) {

        $imagesize = cpg_getimagesize($image);

        // resize picture if it's bigger than the max width or height for uploaded pictures 
        if (max($imagesize[0], $imagesize[1]) > $CONFIG['max_upl_width_height']) {
            if ((USER_IS_ADMIN && $CONFIG['auto_resize'] == 1) || (!USER_IS_ADMIN && $CONFIG['auto_resize'] > 0)) {
                resize_image($image, $image, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], 'any', 'false'); // hard-coded 'any' according to configuration string 'Max width or height for uploaded pictures'
                $imagesize = cpg_getimagesize($image);
            } else {
                @unlink($uploaded_pic);
                cpg_die(ERROR, sprintf($lang_db_input_php['err_fsize_too_large'], $CONFIG['max_upl_width_height'], $CONFIG['max_upl_width_height']), __FILE__, __LINE__);
            }
        }

        // create backup of full sized picture if watermark is enabled for full sized pictures
        if (!file_exists($orig) && $CONFIG['enable_watermark'] == '1' && ($CONFIG['which_files_to_watermark'] == 'both' || $CONFIG['which_files_to_watermark'] == 'original'))  {
            if (!copy($image, $orig)) {
                return false;
            } else {
                $work_image = $orig;
            }
        }

        if ($CONFIG['read_iptc_data']) {
            // read IPTC data
            $iptc = get_IPTC($image);
            if (is_array($iptc) && !$title && !$caption && !$keywords) {  //if any of those 3 are filled out we don't want to override them, they may be blank on purpose.
                $title = (isset($iptc['Title'])) ? $iptc['Title'] : $title;
                $caption = (isset($iptc['Caption'])) ? $iptc['Caption'] : $caption;
                $keywords = (isset($iptc['Keywords'])) ? implode($CONFIG['keyword_separator'], $iptc['Keywords']) : $keywords;
            }
        }

        if (!file_exists($thumb)) {
            // create thumbnail
            if (($result = resize_image($work_image, $thumb, $CONFIG['thumb_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use'], "false", 1)) !== true) {
                return $result;
            }
        }

        // determine resize method for intermediate sized pictures
        $resize_method = $CONFIG['picture_use'] == "thumb" ? ($CONFIG['thumb_use'] == "ex" ? "any" : $CONFIG['thumb_use']) : $CONFIG['picture_use'];

        if (max($imagesize[0], $imagesize[1]) > $CONFIG['picture_width'] && $CONFIG['make_intermediate'] && !file_exists($normal)) {
            if ($CONFIG['enable_watermark'] == '1' && ($CONFIG['which_files_to_watermark'] == 'both' || $CONFIG['which_files_to_watermark'] == 'resized')) {
                // create intermediate sized picture with watermark
                if (($result = resize_image($work_image, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method'], $resize_method, "true")) !== true) {
                    return $result;
                }
            } else {
                // create intermediate sized picture without watermark
                if (($result = resize_image($work_image, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method'], $resize_method, "false")) !== true) {
                    return $result;
                }
            }
        }

        // watermark full sized picture
        if ($CONFIG['enable_watermark'] == '1' && ($CONFIG['which_files_to_watermark'] == 'both' || $CONFIG['which_files_to_watermark'] == 'original')) {
            if (($result = resize_image($work_image, $image, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], 'any', 'true')) !== true) {
                return $result;
            }
        }
    } else {
        $imagesize[0] = $iwidth;
        $imagesize[1] = $iheight;
    }

    clearstatcache();
    
    $image_filesize = filesize($image);
    $total_filesize = is_image($filename) ? ($image_filesize + (file_exists($normal) ? filesize($normal) : 0) + filesize($thumb)) : ($image_filesize);


    // Test if disk quota exceeded
    if (!GALLERY_ADMIN_MODE && $USER_DATA['group_quota'] && $category == FIRST_USER_CAT + USER_ID) {
        $result = cpg_db_query("SELECT sum(total_filesize) FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE  {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND category = '" . (FIRST_USER_CAT + USER_ID) . "'");
        $record = mysql_fetch_array($result);
        $total_space_used = $record[0];
        mysql_free_result($result);

        if ((($total_space_used + $total_filesize)>>10) > $USER_DATA['group_quota'] ) {
            @unlink($image);
            if (is_image($image)) {
                @unlink($normal);
                @unlink($thumb);
            }
            $msg = $lang_errors['quota_exceeded'] . '<br />&nbsp;<br />' . strtr($lang_errors['quota_exceeded_details'], array('[quota]' => ($USER_DATA['group_quota']),
                '[space]' => ($total_space_used >> 10)));
            return array('error' => $msg, 'halt_upload' => 1);
            //cpg_die(ERROR, $msg, __FILE__, __LINE__);
        }
    }
    // Test if picture requires approval
    if (GALLERY_ADMIN_MODE) {
        $approved = 'YES';
    } elseif (!$USER_DATA['priv_upl_need_approval'] && $category == FIRST_USER_CAT + USER_ID) {
        $approved = 'YES';
    } elseif (!$USER_DATA['pub_upl_need_approval'] && $category < FIRST_USER_CAT) {
        $approved = 'YES';
    } else {
        $approved = 'NO';
    }
    $PIC_NEED_APPROVAL = ($approved == 'NO');
    
    // User ID is recorded when in admin mode
    $user_id  = USER_ID;

    // Populate Array to pass to plugins, then to SQL
    $CURRENT_PIC_DATA['aid'] = $aid;
    $CURRENT_PIC_DATA['filepath'] = $filepath;
    $CURRENT_PIC_DATA['filename'] = $filename;
    $CURRENT_PIC_DATA['filesize'] = $image_filesize;
    $CURRENT_PIC_DATA['total_filesize'] = $total_filesize;
    $CURRENT_PIC_DATA['pwidth'] = $imagesize[0];
    $CURRENT_PIC_DATA['pheight'] = $imagesize[1];
    $CURRENT_PIC_DATA['owner_id'] = $user_id;
    $CURRENT_PIC_DATA['title'] = $title;
    $CURRENT_PIC_DATA['caption'] = $caption;
    $CURRENT_PIC_DATA['keywords'] = $keywords;
    $CURRENT_PIC_DATA['approved'] = $approved;
    $CURRENT_PIC_DATA['user1'] = $user1;
    $CURRENT_PIC_DATA['user2'] = $user2;
    $CURRENT_PIC_DATA['user3'] = $user3;
    $CURRENT_PIC_DATA['user4'] = $user4;
    $CURRENT_PIC_DATA['pic_raw_ip'] = $raw_ip;
    $CURRENT_PIC_DATA['pic_hdr_ip'] = $hdr_ip;
    $CURRENT_PIC_DATA['position'] = $position;
    $CURRENT_PIC_DATA['guest_token'] = USER_ID == 0 ? cpg_get_guest_token() : '';
    $CURRENT_PIC_DATA = CPGPluginAPI::filter('add_file_data', $CURRENT_PIC_DATA);

    if (USER_ID > 0 || $CONFIG['allow_guests_enter_file_details'] == 1) {
        $query = "INSERT INTO {$CONFIG['TABLE_PICTURES']} (aid, filepath, filename, filesize, total_filesize, pwidth, pheight, ctime, owner_id, title, caption, keywords, approved, user1, user2, user3, user4, pic_raw_ip, pic_hdr_ip, position, guest_token) VALUES ('{$CURRENT_PIC_DATA['aid']}', '" . addslashes($CURRENT_PIC_DATA['filepath']) . "', '" . addslashes($CURRENT_PIC_DATA['filename']) . "', '{$CURRENT_PIC_DATA['filesize']}', '{$CURRENT_PIC_DATA['total_filesize']}', '{$CURRENT_PIC_DATA['pwidth']}', '{$CURRENT_PIC_DATA['pheight']}', '" . time() . "', '{$CURRENT_PIC_DATA['owner_id']}', '{$CURRENT_PIC_DATA['title']}', '{$CURRENT_PIC_DATA['caption']}', '{$CURRENT_PIC_DATA['keywords']}', '{$CURRENT_PIC_DATA['approved']}', '{$CURRENT_PIC_DATA['user1']}', '{$CURRENT_PIC_DATA['user2']}', '{$CURRENT_PIC_DATA['user3']}', '{$CURRENT_PIC_DATA['user4']}', '{$CURRENT_PIC_DATA['pic_raw_ip']}', '{$CURRENT_PIC_DATA['pic_hdr_ip']}', '{$CURRENT_PIC_DATA['position']}', '{$CURRENT_PIC_DATA['guest_token']}')";
    } else  {
        $query = "INSERT INTO {$CONFIG['TABLE_PICTURES']} (aid, filepath, filename, filesize, total_filesize, pwidth, pheight, ctime, owner_id, approved, pic_raw_ip, pic_hdr_ip, position, guest_token) VALUES ('{$CURRENT_PIC_DATA['aid']}', '" . addslashes($CURRENT_PIC_DATA['filepath']) . "', '" . addslashes($CURRENT_PIC_DATA['filename']) . "', '{$CURRENT_PIC_DATA['filesize']}', '{$CURRENT_PIC_DATA['total_filesize']}', '{$CURRENT_PIC_DATA['pwidth']}', '{$CURRENT_PIC_DATA['pheight']}', '" . time() . "', '{$CURRENT_PIC_DATA['owner_id']}', '{$CURRENT_PIC_DATA['approved']}', '{$CURRENT_PIC_DATA['pic_raw_ip']}', '{$CURRENT_PIC_DATA['pic_hdr_ip']}', '{$CURRENT_PIC_DATA['position']}', '{$CURRENT_PIC_DATA['guest_token']}')";
    }
    $result = cpg_db_query($query);
    
    // Put the pid in current_pic_data and call the plugin filter for file data success
    $CURRENT_PIC_DATA['pid'] = mysql_insert_id($CONFIG['LINK_ID']);
    CPGPluginAPI::filter('add_file_data_success',$CURRENT_PIC_DATA);
    
    //return $result;
    return true;
}

define("GIS_GIF", 1);
define("GIS_JPG", 2);
define("GIS_PNG", 3);

// Add 'edit' directory if it doesn't exist
// Set access to read+write only
if (!is_dir($CONFIG['fullpath'].'edit')) {
    $cpg_umask = umask(0);
    @mkdir($CONFIG['fullpath'].'edit',0777);
    umask($cpg_umask);
    unset($cpg_umask);
}

/**
* resize_image()
*
* Create a file containing a resized image
*
* @param  $src_file the source file
* @param  $dest_file the destination file
* @param  $new_size the size of the square within which the new image must fit
* @param  $method the method used for image resizing
* @return 'true' in case of success
*/
function resize_image($src_file, $dest_file, $new_size, $method, $thumb_use, $watermark="false", $sharpen=0, $media_type="false")
{
    global $CONFIG, $ERROR;
    global $lang_errors;

    $sharpen = CPGPluginAPI::filter('image_sharpen', array($sharpen, $new_size));
    $sharpen = $sharpen[0];

    //Make Cage
    $superCage = Inspekt::makeSuperCage();

    $imginfo = getimagesize($src_file);
    if ($imginfo == null) {
        return false;
    }
    // GD can only handle JPG & PNG images
    if ($imginfo[2] != GIS_JPG && $imageinfo[2] != GIS_PNG && $CONFIG['GIF_support'] == 0) {
        $ERROR = $lang_errors['gd_file_type_err'];
        //return false;
        return array('error' => $ERROR);
    }
    // height/width
    $srcWidth = $imginfo[0];
    $srcHeight = $imginfo[1];

    $crop = 0; // initialize
    // if cropping is enabled calculate cropping parameters
    if ($thumb_use == 'ex') {
        $thb_width = $CONFIG['thumb_width'];
        $thb_height = $CONFIG['thumb_height'];


        if ($new_size==$thb_width) {
            $crop = 1;
            switch ($CONFIG['thumb_method']) {
                //cropping parameters for image magick
                case "im" :
                    $resize_commands="";
                    if ($srcWidth/$srcHeight > $thb_width/$thb_height) {
                        $resize_commands .= "-resize x".$thb_height;
                        $resized_w = ($thb_height/$srcHeight) * $srcWidth;
                        $resize_commands .= " -crop ".$thb_width."x".$thb_height."+".round(($resized_w - $thb_width)/2)."+0";
                    } else {
                        $resize_commands .= "-resize ".$thb_width;
                        $resized_h = ($thb_width/$srcWidth) * $srcHeight;
                        $resize_commands .= " -crop ".$thb_width."x".$thb_height."+0+".round(($resized_h - $thb_height)/2);
                    }
                    break;

                // cropping parameters for GD2
                default :
                    if($srcHeight < $srcWidth) {
                        $ratio = (double)($srcHeight / $thb_height);
                        $cpyWidth = round($thb_width * $ratio);
                        if ($cpyWidth > $srcWidth) {
                            $ratio = (double)($srcWidth / $thb_width);
                            $cpyWidth = $srcWidth;
                            $cpyHeight = round($thb_height * $ratio);
                            $xOffset = 0;
                            $yOffset = round(($srcHeight - $cpyHeight) / 2);
                        } else {
                            $cpyHeight = $srcHeight;
                            $xOffset = round(($srcWidth - $cpyWidth) / 2);
                            $yOffset = 0;
                        }

                    } else {
                        $ratio = (double)($srcWidth / $thb_width);
                        $cpyHeight = round($thb_height * $ratio);
                        if ($cpyHeight > $srcHeight) {
                            $ratio = (double)($srcHeight / $thb_height);
                            $cpyHeight = $srcHeight;
                            $cpyWidth = round($thb_width * $ratio);
                            $xOffset = round(($srcWidth - $cpyWidth) / 2);
                            $yOffset = 0;
                        } else {
                            $cpyWidth = $srcWidth;
                            $xOffset = 0;
                            $yOffset = round(($srcHeight - $cpyHeight) / 2);
                        }
                    }

                    $destWidth = $thb_width;
                    $destHeight = $thb_height;
                    $srcWidth = $cpyWidth;
                    $srcHeight = $cpyHeight;
                    break;
            }
        } else {
            $ratio = max($srcWidth, $srcHeight) / $new_size;
        }

    } elseif ($thumb_use == 'wd') { 
        // resize method width
        $ratio = $srcWidth / $new_size;
    } elseif ($thumb_use == 'ht') { 
        // resize method height
        $ratio = $srcHeight / $new_size;
    } else { // resize method any
        $ratio = max($srcWidth, $srcHeight) / $new_size;
    }
    $ratio = max($ratio, 1.0);
    if ($thumb_use == 'orig') {
        $ratio = 1.0;
    }
    if ($crop != 1) {
        $destWidth = (int)($srcWidth / $ratio);
        $destHeight = (int)($srcHeight / $ratio);
        $resize_commands = "-geometry ".$destWidth."x".$destHeight;
        $xOffset = 0;
        $yOffset = 0;
    }
    // Method for thumbnails creation
    switch ($method) {
        case "im" :
            if (preg_match("#[A-Z]:|\\\\#Ai", __FILE__)) {
                // get the basedir, remove '/include'
                $cur_dir = substr(dirname(__FILE__), 0, -8);
                $src_file = '"' . $cur_dir . '\\' . strtr($src_file, '/', '\\') . '"';
                $im_dest_file = str_replace('%', '%%', ('"' . $cur_dir . '\\' . strtr($dest_file, '/', '\\') . '"'));
            } else {
                $src_file = escapeshellarg($src_file);
                $im_dest_file = str_replace('%', '%%', escapeshellarg($dest_file));
            }

            $output = array();
            /*
             * Hack for working with ImageMagick on Windows even if IM is installed in C:\Program Files.
             * By Aditya Mooley <aditya@sanisoft.com>
             */
            if ($sharpen==1 && $CONFIG['enable_unsharp']==1) {
            $unsharp_mask = " -unsharp ".$CONFIG['unsharp_radius']."x".sqrt($CONFIG['unsharp_radius'])."+".($CONFIG['unsharp_amount']/100)."+".($CONFIG['unsharp_threshold']/100)." ";
             }
            else $unsharp_mask = "";

            if ($superCage->env->getMatched('OS', '/win/i')) {
                $cmd = "\"".str_replace("\\","/", $CONFIG['impath'])."convert\" -quality {$CONFIG['jpeg_qual']} {$CONFIG['im_options']} ".$resize_commands." ".$unsharp_mask." ".str_replace("\\","/" ,$src_file )." ".str_replace("\\","/" ,$im_dest_file );
                exec ("\"$cmd\"", $output, $retval);
            } else {
                $cmd = "{$CONFIG['impath']}convert -quality {$CONFIG['jpeg_qual']} {$CONFIG['im_options']} ".$resize_commands." ".$unsharp_mask." $src_file $im_dest_file";
                exec ($cmd, $output, $retval);
            }

            if ($media_type != "false") {
                //if a manual thumb gets generated we watermark the thumb with the media type
                //we now need to get the absolute path to the thumb watermark files
                $path_parts = pathinfo($CONFIG['watermark_file']);
                $CONFIG['watermark_file'] = $path_parts["dirname"]."/wm_".$media_type.".png";
            }

            if ($watermark == "true" || $media_type != "false") {

                //do we need to resize the watermark to fit onto the intermediate?
                $wm_normal = (int)$CONFIG['reduce_watermark'];
                if ($wm_normal > $destWidth ) {
                    $wm_resize = (int)(($destWidth / $wm_normal) * 100);
                    //we have to create a temporary, downsized watermark file in the edit folder
                    //temp path for small wm
                    $path_to_tmp_wm = './'.$CONFIG['fullpath'].'edit/temp_wm.png';

                    if ($superCage->env->getMatched('OS', '/win/i')) {
                        $cmd = "\"".str_replace("\\","/", $CONFIG['impath'])."convert\" -resize ".$wm_resize."% ".str_replace("\\","/" ,$CONFIG['watermark_file'] )." ".str_replace("\\","/" ,$path_to_tmp_wm );
                        exec ("\"$cmd\"", $output, $retval);
                    } else {
                        $cmd = "{$CONFIG['impath']}convert -resize $wm_resize% {$CONFIG['watermark_file']} $path_to_tmp_wm";
                        exec ($cmd, $output, $retval);
                    }
                    $wm_file = $path_to_tmp_wm; //set the path to the wm file to the temp one
                } else {
                    $wm_file = $CONFIG['watermark_file']; //if no downsize... we take the orig watermark
                }

                // now we apply the watermark
                if ($superCage->env->getMatched('OS', '/win/i')) {
                    $cmd = "\"".str_replace("\\","/", $CONFIG['impath'])."composite\" -dissolve {$CONFIG['watermark_transparency']} -gravity {$CONFIG['where_put_watermark']} \"$wm_file\" ".str_replace("\\","/" ,$im_dest_file )." ".str_replace("\\","/" ,$im_dest_file );
                    exec ("\"$cmd\"", $output, $retval);
                } else {
                    $cmd = "{$CONFIG['impath']}composite -dissolve {$CONFIG['watermark_transparency']} -gravity {$CONFIG['where_put_watermark']} $wm_file $im_dest_file $im_dest_file";
                    exec ($cmd, $output, $retval);
                }
            }

            if ($retval) {
                $ERROR = "Error executing ImageMagick - Return value: $retval";
                if ($CONFIG['debug_mode']) {
                    // Re-execute the command with the backtick operator in order to get all outputs
                    // will not work is safe mode is enabled
                    $output = `$cmd 2>&1`;
                    $ERROR .= "<br /><br /><div align=\"left\">Cmd line : <br /><span style=\"font-size:120%\">" . nl2br(htmlspecialchars($cmd)) . "</span></div>";
                    $ERROR .= "<br /><br /><div align=\"left\">The convert program said:<br /><span style=\"font-size:120%\">";
                    $ERROR .= nl2br(htmlspecialchars($output));
                    $ERROR .= "</span></div>";
                }
                @unlink($dest_file);
                return array('error' => $ERROR);
            }
            break;

        case "gd1" :
            if (!function_exists('imagecreatefromjpeg')) {
                return array('error' => 'PHP running on your server does not support the GD image library, check with your webhost if ImageMagick is installed', 'halt_upload' => 1);
            }
            if ($imginfo[2] == GIS_JPG)
                $src_img = imagecreatefromjpeg($src_file);
            else
                $src_img = imagecreatefrompng($src_file);
            if (!$src_img) {
                $ERROR = $lang_errors['invalid_image'];
                return array('error' => $ERROR);
            }
            $dst_img = imagecreate($destWidth, $destHeight);
            imagecopyresized($dst_img, $src_img, 0, 0, $xOffset, $yOffset, (int)$destWidth, (int)$destHeight, $srcWidth, $srcHeight);
                        touch($dest_file);
            $fh=fopen($dest_file,'w');
            fclose($fh);
            imagejpeg($dst_img, $dest_file, $CONFIG['jpeg_qual']);
            imagedestroy($src_img);
            imagedestroy($dst_img);
            break;

        case "gd2" :
            if (!function_exists('imagecreatefromjpeg')) {
                return array('error' => 'PHP running on your server does not support the GD image library, check with your webhost if ImageMagick is installed', 'halt_upload' => 1);
            }
            if (!function_exists('imagecreatetruecolor')) {
                return array('error' => 'PHP running on your server does not support GD version 2.x, please switch to GD version 1.x on the admin page', 'halt_upload' => 1);
            }
            if ($imginfo[2] == GIS_GIF && $CONFIG['GIF_support'] == 1)
                $src_img = imagecreatefromgif($src_file);
            elseif ($imginfo[2] == GIS_JPG)
                $src_img = imagecreatefromjpeg($src_file);
            else
                $src_img = imagecreatefrompng($src_file);
            if (!$src_img) {
                $ERROR = $lang_errors['invalid_image'];
                //return false;
                return array('error' => $ERROR);
            }
            if ($imginfo[2] == GIS_GIF) {
                $dst_img = imagecreate($destWidth, $destHeight);
            } else {
                $dst_img = imagecreatetruecolor($destWidth, $destHeight);
                if ($imginfo[2] == GIS_PNG) {
                    imagealphablending($dst_img, false);
                }
            }
            imagecopyresampled($dst_img, $src_img, 0, 0, $xOffset, $yOffset, (int)$destWidth, (int)$destHeight, $srcWidth, $srcHeight);
            touch($dest_file);
            $fh=fopen($dest_file,'w');
            fclose($fh);

            //sharpen the thumb
            if ($sharpen==1 && $CONFIG['enable_unsharp']==1) {
                UnsharpMask($dst_img, $CONFIG['unsharp_amount'], $CONFIG['unsharp_radius'], $CONFIG['unsharp_threshold']);
            }

            if ($media_type != "false") {
                //if a manual thumb gets generated we watermark the thumb with the media type
                //we now need to get the absolute path to the thumb watermark files
                $path_parts = pathinfo($CONFIG['watermark_file']);
                $CONFIG['watermark_file'] = $path_parts["dirname"]."/wm_".$media_type.".png";
            }

            if ($watermark == "true" || $media_type != "false") {
                //shrink watermark on intermediate images -> If I had known that this is that �%&# with the transparency preserve... grrr
                $wm_normal = (int)$CONFIG['reduce_watermark'];
                if ($wm_normal > $destWidth ) {
                    $wm_resize = $destWidth / $wm_normal;
                    //load the original, huge sized logo (the one we want to size down)
                    $temp_logoImage = ImageCreateFromPNG($CONFIG['watermark_file']);
                    //get it's size
                    $temp_logoW = ImageSX($temp_logoImage);
                    $temp_logoH = ImageSY($temp_logoImage);

                    //calculate new size
                    $logoW = (int)($temp_logoW * $wm_resize);
                    $logoH = (int)($temp_logoH * $wm_resize);
                    //we create a new, resized logo
                    $logoImage = imagecreatetruecolor($logoW, $logoH);

                    //just to be sure that transparency gets preserved
                    imagealphablending($logoImage, FALSE);
                    imagealphablending($temp_logoImage, TRUE);

                    //now copy and resize the big one into the temp resized img
                    imagecopyresampled($logoImage, $temp_logoImage, 0, 0, 0, 0, (int)$logoW, (int)$logoH, $temp_logoW, $temp_logoH);

                    //we do not need the temp (huge) watermark anymore
                    imagedestroy($temp_logoImage);

                } else { // shrink not enabled or no intermediate...
                    $logoImage = ImageCreateFromPNG($CONFIG['watermark_file']);
                    $logoW = ImageSX($logoImage);
                    $logoH = ImageSY($logoImage);
                }

                //where is the watermark displayed...
                $pos = $CONFIG['where_put_watermark'];
                if ($pos == "northwest") {
                    $src_x = 5;
                    $src_y = 5;
                } else if ($pos == "northeast") {
                    $src_x = $destWidth - ($logoW + 5);
                    $src_y = 5;
                } else if ($pos == "southwest") {
                    $src_x = 5;
                    $src_y = $destHeight - ($logoH + 5);
                } else if ($pos == "southeast") {
                    $src_x = $destWidth - ($logoW + 5);
                    $src_y = $destHeight - ($logoH + 5);
                } else if ($pos == "center") {
                    $src_x = ($destWidth/2) - ($logoW/2);
                    $src_y = ($destHeight/2) - ($logoH/2);
                }

                imagealphablending($dst_img, TRUE);
                imagecolortransparent($logoImage, imagecolorat($logoImage, $CONFIG['watermark_transparency_featherx'], $CONFIG['watermark_transparency_feathery']));
                ImageCopy($dst_img,$logoImage,$src_x,$src_y,0,0,$logoW,$logoH);
            }

            if ($imginfo[2] == GIS_PNG) {
                imagesavealpha($dst_img, true);
                imagepng($dst_img, $dest_file, round((100 - $CONFIG['jpeg_qual']) / 10));
            } else {
                imagejpeg($dst_img, $dest_file, $CONFIG['jpeg_qual']);
            }
            imagedestroy($src_img);
            imagedestroy($dst_img);
            break;
    }
    // Set mode of uploaded picture
    @chmod($dest_file, octdec($CONFIG['default_file_mode'])); //silence the output in case chmod is disabled
    // We check that the image is valid
    $imginfo = getimagesize($dest_file);
    if ($imginfo == null) {
        $ERROR = $lang_errors['resize_failed'];
        @unlink($dest_file);
        //return false;
        return array('error' => $ERROR);
    } else {
        return true;
    }
}

//function to sharpen images using GD2
function UnsharpMask($img, $amount, $radius, $threshold)        {
////////////////////////////////////////////////////////////////////////////////////////////////
////
////                  p h p U n s h a r p M a s k
////
////        Unsharp mask algorithm by Torstein H�nsi 2003.
////                 thoensi_at_netcom_dot_no.
////                   Please leave this notice.
////
///////////////////////////////////////////////////////////////////////////////////////////////
        if ($amount > 500)        $amount = 500;
        $amount = $amount * 0.016;
        if ($radius > 50)        $radius = 50;
        $radius = $radius * 2;
        if ($threshold > 255)        $threshold = 255;

        $radius = abs(round($radius));         // Only integers make sense.
        if ($radius == 0) {
                return $img; imagedestroy($img); break;                }
        $w = imagesx($img); $h = imagesy($img);
        $imgCanvas = imagecreatetruecolor($w, $h);
        $imgCanvas2 = imagecreatetruecolor($w, $h);
        $imgBlur = imagecreatetruecolor($w, $h);
        $imgBlur2 = imagecreatetruecolor($w, $h);
        imagecopy ($imgCanvas, $img, 0, 0, 0, 0, $w, $h);
        imagecopy ($imgCanvas2, $img, 0, 0, 0, 0, $w, $h);

        for ($i = 0; $i < $radius; $i++)        {
                imagecopy ($imgBlur, $imgCanvas, 0, 0, 1, 1, $w - 1, $h - 1); // up left
                imagecopymerge ($imgBlur, $imgCanvas, 1, 1, 0, 0, $w, $h, 50); // down right
                imagecopymerge ($imgBlur, $imgCanvas, 0, 1, 1, 0, $w - 1, $h, 33.33333); // down left
                imagecopymerge ($imgBlur, $imgCanvas, 1, 0, 0, 1, $w, $h - 1, 25); // up right
                imagecopymerge ($imgBlur, $imgCanvas, 0, 0, 1, 0, $w - 1, $h, 33.33333); // left
                imagecopymerge ($imgBlur, $imgCanvas, 1, 0, 0, 0, $w, $h, 25); // right
                imagecopymerge ($imgBlur, $imgCanvas, 0, 0, 0, 1, $w, $h - 1, 20 ); // up
                imagecopymerge ($imgBlur, $imgCanvas, 0, 1, 0, 0, $w, $h, 16.666667); // down
                imagecopymerge ($imgBlur, $imgCanvas, 0, 0, 0, 0, $w, $h, 50); // center
                imagecopy ($imgCanvas, $imgBlur, 0, 0, 0, 0, $w, $h);

                imagecopy ($imgBlur2, $imgCanvas2, 0, 0, 0, 0, $w, $h);
                imagecopymerge ($imgBlur2, $imgCanvas2, 0, 0, 0, 0, $w, $h, 50);
                imagecopymerge ($imgBlur2, $imgCanvas2, 0, 0, 0, 0, $w, $h, 33.33333);
                imagecopymerge ($imgBlur2, $imgCanvas2, 0, 0, 0, 0, $w, $h, 25);
                imagecopymerge ($imgBlur2, $imgCanvas2, 0, 0, 0, 0, $w, $h, 33.33333);
                imagecopymerge ($imgBlur2, $imgCanvas2, 0, 0, 0, 0, $w, $h, 25);
                imagecopymerge ($imgBlur2, $imgCanvas2, 0, 0, 0, 0, $w, $h, 20 );
                imagecopymerge ($imgBlur2, $imgCanvas2, 0, 0, 0, 0, $w, $h, 16.666667);
                imagecopymerge ($imgBlur2, $imgCanvas2, 0, 0, 0, 0, $w, $h, 50);
                imagecopy ($imgCanvas2, $imgBlur2, 0, 0, 0, 0, $w, $h);

                }

        for ($x = 0; $x < $w; $x++)        { // each row
                for ($y = 0; $y < $h; $y++)        { // each pixel

                        $rgbOrig = ImageColorAt($imgCanvas2, $x, $y);
                        $rOrig = (($rgbOrig >> 16) & 0xFF);
                        $gOrig = (($rgbOrig >> 8) & 0xFF);
                        $bOrig = ($rgbOrig & 0xFF);

                        $rgbBlur = ImageColorAt($imgCanvas, $x, $y);

                        $rBlur = (($rgbBlur >> 16) & 0xFF);
                        $gBlur = (($rgbBlur >> 8) & 0xFF);
                        $bBlur = ($rgbBlur & 0xFF);

                        $rNew = (abs($rOrig - $rBlur) >= $threshold)
                                ? max(0, min(255, ($amount * ($rOrig - $rBlur)) + $rOrig))
                                : $rOrig;
                        $gNew = (abs($gOrig - $gBlur) >= $threshold)
                                ? max(0, min(255, ($amount * ($gOrig - $gBlur)) + $gOrig))
                                : $gOrig;
                        $bNew = (abs($bOrig - $bBlur) >= $threshold)
                                ? max(0, min(255, ($amount * ($bOrig - $bBlur)) + $bOrig))
                                : $bOrig;



                        if (($rOrig != $rNew) || ($gOrig != $gNew) || ($bOrig != $bNew)) {
                                    $pixCol = ImageColorAllocate($img, $rNew, $gNew, $bNew);
                                    ImageSetPixel($img, $x, $y, $pixCol);
                                }
}
                }

        imagedestroy($imgCanvas);
        imagedestroy($imgCanvas2);
        imagedestroy($imgBlur);
        imagedestroy($imgBlur2);

        return $img;
        }

?>