<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2021 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * include/picmgmt.php
 * @since  1.6.10
 */

defined('IN_COPPERMINE') or die('Not in Coppermine...');

if ($CONFIG['read_iptc_data'] ){
    include 'include/iptc.inc.php';
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

        if ($CONFIG['read_iptc_data']) {
            // read IPTC data
            $iptc = get_IPTC($image);
            if (is_array($iptc) && !$title && !$caption && !$keywords) {  //if any of those 3 are filled out we don't want to override them, they may be blank on purpose.
                $title = (isset($iptc['Headline'])) ? trim($iptc['Headline']) : $title;
                $caption = (isset($iptc['Caption'])) ? trim($iptc['Caption']) : $caption;
                $keywords = (isset($iptc['Keywords'])) ? implode($CONFIG['keyword_separator'], $iptc['Keywords']) : $keywords;
            }
        }

		if (isset($CONFIG['autorient']) && $CONFIG['autorient'] == 1) {
			if (function_exists('exif_read_data')) {	// try for the EXIF php extension
				$exif = @exif_read_data(realpath($image));
				$ort = $exif && isset($exif['Orientation']) ? $exif['Orientation'] : 0;
			} else {	// otherwise use Exifer
				include 'exif.php';
				$exif = read_exif_data_raw(realpath($image),0);
				$ort = isset($exif['IFD0']['Orientation']) ? (int)$exif['IFD0']['Orientation'] : 0;
			}
			if ($ort > 1) {
				getImageTool();
				$imgObj = new imageObject(dirname($image).'/', basename($image));
				$imgObj->orientImage($ort);
			}
		}

        $imagesize = cpg_getimagesize($image);

        // resize picture if it's bigger than the max width or height for uploaded pictures
        if (max($imagesize[0], $imagesize[1]) > $CONFIG['max_upl_width_height']) {
            if ((USER_IS_ADMIN && $CONFIG['auto_resize'] == 1) || (!USER_IS_ADMIN && $CONFIG['auto_resize'] > 0)) {
                $resize_method = $CONFIG['picture_use'] == "thumb" ? ($CONFIG['thumb_use'] == "ex" ? "any" : $CONFIG['thumb_use']) : $CONFIG['picture_use'];
                resize_image($image, $image, $CONFIG['max_upl_width_height'], $resize_method, 'false');
                $imagesize = cpg_getimagesize($image);
            } elseif (USER_IS_ADMIN) {
                // skip resizing for admin
                $picture_original_size = true;
            } else {
                @unlink($uploaded_pic);
                $msg = sprintf($lang_db_input_php['err_fsize_too_large'], $CONFIG['max_upl_width_height'], $CONFIG['max_upl_width_height']);
                return array('error' => $msg, 'halt_upload' => 1);
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

        if (!file_exists($thumb)) {
            // create thumbnail
            if (($result = resize_image($work_image, $thumb, $CONFIG['thumb_width'], $CONFIG['thumb_use'], "false", 1)) !== true) {
                return $result;
            }
        }

        if ($CONFIG['make_intermediate'] && cpg_picture_dimension_exceeds_intermediate_limit($imagesize[0], $imagesize[1]) && !file_exists($normal)) {
            // create intermediate sized picture
            $resize_method = $CONFIG['picture_use'] == "thumb" ? ($CONFIG['thumb_use'] == "ex" ? "any" : $CONFIG['thumb_use']) : $CONFIG['picture_use'];
            $watermark = ($CONFIG['enable_watermark'] == '1' && ($CONFIG['which_files_to_watermark'] == 'both' || $CONFIG['which_files_to_watermark'] == 'resized')) ? 'true' : 'false';
            if (($result = resize_image($work_image, $normal, $CONFIG['picture_width'], $resize_method, $watermark)) !== true) {
                return $result;
            }
        }

        // watermark full sized picture
        if ($CONFIG['enable_watermark'] == '1' && ($CONFIG['which_files_to_watermark'] == 'both' || $CONFIG['which_files_to_watermark'] == 'original')) {
            $wm_max_upl_width_height = $picture_original_size ? max($imagesize[0], $imagesize[1]) : $CONFIG['max_upl_width_height']; // use max aspect of original image if it hasn't been resized earlier
            if (($result = resize_image($work_image, $image, $wm_max_upl_width_height, 'any', 'true')) !== true) {
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
        $record = $result->fetchArray(true);
        $total_space_used = $record[0];

        if ((($total_space_used + $total_filesize)>>10) > $USER_DATA['group_quota'] ) {
            @unlink($image);
            if (is_image($image)) {
                @unlink($normal);
                @unlink($thumb);
            }
            $msg = $lang_errors['quota_exceeded'] . '<br />&nbsp;<br />' . strtr($lang_errors['quota_exceeded_details'], array('[quota]' => ($USER_DATA['group_quota']), '[space]' => ($total_space_used >> 10)));
            return array('error' => $msg, 'halt_upload' => 1);
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
        $query = "INSERT INTO {$CONFIG['TABLE_PICTURES']} (aid, filepath, filename, filesize, total_filesize, pwidth, pheight, ctime, owner_id, title, caption, keywords, approved, user1, user2, user3, user4, pic_raw_ip, pic_hdr_ip, position, guest_token) VALUES ('{$CURRENT_PIC_DATA['aid']}', '" . addslashes($CURRENT_PIC_DATA['filepath']) . "', '" . addslashes($CURRENT_PIC_DATA['filename']) . "', '{$CURRENT_PIC_DATA['filesize']}', '{$CURRENT_PIC_DATA['total_filesize']}', '{$CURRENT_PIC_DATA['pwidth']}', '{$CURRENT_PIC_DATA['pheight']}', '" . time() . "', '{$CURRENT_PIC_DATA['owner_id']}', '', '', '', '{$CURRENT_PIC_DATA['approved']}', '{$CURRENT_PIC_DATA['user1']}', '{$CURRENT_PIC_DATA['user2']}', '{$CURRENT_PIC_DATA['user3']}', '{$CURRENT_PIC_DATA['user4']}', '{$CURRENT_PIC_DATA['pic_raw_ip']}', '{$CURRENT_PIC_DATA['pic_hdr_ip']}', '{$CURRENT_PIC_DATA['position']}', '{$CURRENT_PIC_DATA['guest_token']}')";
    }
    $result = cpg_db_query($query);

    // Put the pid in current_pic_data and call the plugin filter for file data success
    $CURRENT_PIC_DATA['pid'] = cpg_db_last_insert_id();
    CPGPluginAPI::action('add_file_data_success', $CURRENT_PIC_DATA);

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
function resize_image($src_file, $dest_file, $new_size, $thumb_use, $watermark="false", $sharpen=0, $media_type="false")
{
	$dirn = dirname($src_file) . '/';
	$filn = basename($src_file);
	getImageTool();
	$imgObj = new imageObject($dirn, $filn);
	return $imgObj->resize_added_image($dest_file, $new_size, $thumb_use, $watermark, $sharpen, $media_type);
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
            return $img;
        }
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

//EOF