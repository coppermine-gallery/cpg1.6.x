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

require_once 'imageobject.class.php';

class imageObject extends ImageTool {

    // image resource
    var $imgRes;

    // px
    var $height = 0;
    var $width = 0;

    // for img height/width tags
    var $string;

    // output report or error message
    protected $message;

    // file + dir
    var $directory;
    var $filename;

    // output quality, 0 - 100
    var $quality;

    // truecolor available, boolean
    protected $truecolor;

    //constructor
    public function __construct ($directory, $filename, $previous = null)
    {
        $this->directory = $directory;
        $this->filename  = $filename;
        $this->previous  = $previous;
        $this->imgRes    = $previous->imgRes;

        if (file_exists($directory . $filename)) {

            $this->filesize = round(filesize($directory . $filename) / 1000);

            if ($this->filesize > 0) {

                $this->imginfo = cpg_getimagesize($directory . $filename);

                if ($this->imginfo && !$this->imgRes) {
                    $this->imgRes = $this->getimgRes($directory . $filename, $this->imginfo[2]);
                }

                if (function_exists('imagecreatetruecolor')) {
                    $this->truecolor = true;
                }

                $this->width  = $this->imginfo[0];
                $this->height = $this->imginfo[1];
                $this->string = $this->imginfo[3];
            }
        }
    }


    // private methods
    private function getimgRes ($name, $type)
    {
        switch ($type) {

        case 1:
            $im = imagecreatefromgif($name);
            break;

        case 2:
            $im = imagecreatefromjpeg($name);
            break;

        case 3:
            $im = imagecreatefrompng($name);
            break;
        }

        return $im;
    }


    private function createUnique ($imgnew)
    {
        $unique_str = 'temp_' . md5(rand(0, 999999)) . '.jpg';

        imagejpeg($imgnew, $this->directory . $unique_str, $this->quality);
        imagedestroy($this->imgRes);

        // Don't clutter with old images
        @unlink($this->directory . $this->filename);

        // Create a new ImageObject
        return new imageObject($this->directory, $unique_str, $imgnew);
    }


    private function createImage ($new_w, $new_h)
    {
        if (function_exists('imagecreatetruecolor')) {
            $retval = imagecreatetruecolor($new_w, $new_h);
        }

        if (!$retval) {
            $retval = imagecreate($new_w, $new_h);
        }

        return $retval;
    }


    public function cropImage ($clipval)
    {
        $cliparray = explode(",",$clipval);

        $clip_top = $cliparray[0];
        $clip_right = $cliparray[1];
        $clip_bottom = $cliparray[2];
        $clip_left = $cliparray[3];

        $new_w = $clip_right - $clip_left;
        $new_h = $clip_bottom - $clip_top;

        $dst_img = $this->createImage($new_w, $new_h);

        $result = imagecopyresampled($dst_img, $this->imgRes, 0, 0, $clip_left, $clip_top, $new_w, $new_h, $new_w, $new_h);

        if (!$result) {
            $result = imagecopyresized($dst_img, $this->imgRes, 0, 0, $clip_left, $clip_top, $new_w, $new_h, $new_w, $new_h);
        }

        return $this->createUnique($dst_img);
    }


    public function rotateImage ($angle)
    {
        if ($angle == 180){
            $dst_img = imagerotate($this->imgRes, $angle, 0);
        } else {
            $width = imagesx($this->imgRes);
            $height = imagesy($this->imgRes);

            if ($width > $height) {
                $size = $width;
            } else {
                $size = $height;
            }

            $dst_img = $this->createImage($size, $size);
            imagecopy($dst_img, $this->imgRes, 0, 0, 0, 0, $width, $height);
            $dst_img = imagerotate($dst_img, $angle, 0);
            $this->imgRes = $dst_img;
            $dst_img = $this->createImage($height, $width);

            if ((($angle == 90) && ($width > $height)) || (($angle == 270) && ($width < $height))) {
                imagecopy($dst_img, $this->imgRes, 0, 0, 0, 0, $size, $size);
            }

            if ((($angle == 270) && ($width > $height)) || (($angle == 90) && ($width < $height))){
                imagecopy($dst_img, $this->imgRes, 0, 0, $size - $height, $size - $width, $size, $size);
            }
        }

        return $this->createUnique($dst_img);
    }


    public function resizeImage ($new_w = 0, $new_h = 0)
    {
        $dst_img = $this->createImage($new_w, $new_h);

        $result = imagecopyresampled($dst_img, $this->imgRes, 0, 0, 0, 0, $new_w, $new_h, $this->width, $this->height);

        if (!$result) {
            $result = @imagecopyresized($dst_img, $this->imgRes, 0, 0, 0, 0, $new_w, $new_h, $this->width,$this->height);
        }

        return $this->createUnique($dst_img);
    }


	private function _mirrorImage ($img)
	{
		$width = imagesx ($img);
		$height = imagesy ($img);

		$src_x = $width -1;
		$src_y = 0;
		$src_width = -$width;
		$src_height = $height;

		$imgdest = imagecreatetruecolor($width, $height);

		if (imagecopyresampled($imgdest, $img, 0, 0, $src_x, $src_y, $width, $height, $src_width, $src_height)) {
			return $imgdest;
		}

		return $img;
	}


	public function orientImage ($from=1)
	{
		$dest = $this->directory . $this->filename;

		$oAct = $this->orientAction[$from];
		if ($oAct[0] !==  0) $this->imgRes = imagerotate($this->imgRes, $oAct[0], 0); 
		if ($oAct[1]) $this->imgRes = $this->_mirrorImage($this->imgRes);

		switch ($this->imginfo[2])
		{
			case 1:
				imagegif($this->imgRes, $dest);
				break;
			case 2:
				imagejpeg($this->imgRes, $dest, 95);
				break;
			case 3:
				imagepng($this->imgRes, $dest, 0);
				break;
		}
	}


	public function send ($maxS=0, $type='jpeg')
	{
		global $CONFIG;

		$content_type = array(
			GIS_GIF => 'gif',
			GIS_JPG => 'jpeg',
			GIS_PNG => 'png',
		);

		$imageType = $content_type[$this->imginfo[2]];

		$src_file = $this->directory.$this->filename;

		if ($maxS) {
			$srcWidth = $this->width;
			$srcHeight = $this->height;

			$ratio = max($srcWidth, $srcHeight) / $maxS;
			$ratio = max($ratio, 1.0);
			$destWidth = (int)($srcWidth / $ratio);
			$destHeight = (int)($srcHeight / $ratio);

			if ($this->imginfo[2] == GIS_GIF && $CONFIG['GIF_support'] == 1) {
				$src_img = imagecreatefromgif($src_file);
			} elseif ($this->imginfo[2] == GIS_JPG) {
				$src_img = imagecreatefromjpeg($src_file);
			} else {
				$src_img = imagecreatefrompng($src_file);
			}

			if ($this->imginfo[2] == GIS_GIF) {
				$dst_img = imagecreate($destWidth, $destHeight);
			} else {
				$dst_img = imagecreatetruecolor($destWidth, $destHeight);
			}

			imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);

			header("Content-type: image/jpeg");
			imagejpeg($dst_img);

			imagedestroy($src_img);
			imagedestroy($dst_img);
		} else {
			header('Content-type: image/' . $imageType);
			readfile($src_file);
		}
	}


	/**
	* resize_added_image()
	*
	* Create a file containing a resized image
	*
	* @param  $dest_file the destination file
	* @param  $new_size the size of the square within which the new image must fit
	* @param  $method the method used for image resizing
	* @return 'true' in case of success
	*/
	public function resize_added_image ($dest_file, $new_size, $thumb_use, $watermark="false", $sharpen=0, $media_type="false")
	{
		global $CONFIG, $ERROR;
		global $lang_errors;

		$src_file = $this->directory . $this->filename;

		list($sharpen) = CPGPluginAPI::filter('image_sharpen', array($sharpen, $new_size));

		//Make Cage
		$superCage = Inspekt::makeSuperCage();

		$imginfo = cpg_getimagesize($src_file);
		if ($imginfo == null) {
			return false;
		}
		// GD can only handle JPG & PNG images
		if ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && $CONFIG['GIF_support'] == 0) {
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
				// cropping parameters for GD2
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
			$xOffset = 0;
			$yOffset = 0;
		}

		if (!function_exists('imagecreatefromjpeg')) {
			return array('error' => 'PHP running on your server does not support the GD image library, check with your webhost if ImageMagick is installed', 'halt_upload' => 1);
		}
		if (!function_exists('imagecreatetruecolor')) {
			return array('error' => 'PHP running on your server does not support GD version 2.x', 'halt_upload' => 1);
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

		// Set mode of uploaded picture
		@chmod($dest_file, octdec($CONFIG['default_file_mode'])); //silence the output in case chmod is disabled
		// We check that the image is valid
		$imginfo = cpg_getimagesize($dest_file);
		if ($imginfo == null) {
			$ERROR = $lang_errors['resize_failed'];
			@unlink($dest_file);
			//return false;
			return array('error' => $ERROR);
		} else {
			return true;
		}
	}

}
//EOF