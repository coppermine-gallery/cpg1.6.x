<?php
/************************
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
 ********************************************/

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
	protected $srcPath;

	// output quality, 0 - 100
	var $quality;

	//constructor
	public function __construct ($directory, $filename, $previous = null)
	{
		$this->directory = $directory;
		$this->filename  = $filename;
		$this->srcPath = realpath($directory . $filename);
		$this->previous  = $previous;
		$this->truecolor = true;

		if (file_exists($this->srcPath)) {

			$this->filesize = round(filesize($this->srcPath) / 1000);

			if ($this->filesize > 0) {

				$this->imginfo = cpg_getimagesize($this->srcPath);

				if ($this->imginfo && !$this->imgRes) {
					$this->imgRes = new Imagick($this->srcPath);
				}

				$this->width  = $this->imginfo[0];
				$this->height = $this->imginfo[1];
				$this->string = $this->imginfo[3];
			}
		}
	}

	//destructor
	public function __destruct ()
	{
		if ($this->imgRes) {
			$this->imgRes->clear();
			$this->imgRes->destroy();
		}
	}


	public function __toString ()
	{
		if ($this->imgRes) {
			echo $this->imgRes->getImageBlob();
		}
	}


	public function cropImage ($clipval)
	{
		global $CONFIG;

		$cliparray = explode(',', $clipval);

		foreach($cliparray as $value) {
			if (!is_numeric($value)) return $this;
		}

		$clip_top = $cliparray[0];
		$clip_right = $cliparray[1];
		$clip_bottom = $cliparray[2];
		$clip_left = $cliparray[3];

		$new_w = $clip_right - $clip_left;
		$new_h = $clip_bottom - $clip_top;

		$this->imgRes->cropImage($new_w, $new_h, $clip_left, $clip_top);
		$this->imgRes->writeImage($this->srcPath);

		// Clear current resources
		$this->imgRes->clear();

		// Call the constructor again to repopulate the dimensions etc
		$this->__construct($this->directory, $this->filename);

		return $this;
	}


	public function rotateImage ($angle)
	{
		$this->imgRes->rotateImage(new ImagickPixel(), $angle);
		$this->imgRes->writeImage($this->srcPath);

		// Clear current resources
		$this->imgRes->clear();

		// Call the constructor again to repopulate the dimensions etc
		$this->__construct($this->directory, $this->filename);

		return $this;
	}


	public function resizeImage ($new_w = 0, $new_h = 0)
	{
		$fit = ($new_w === 0 || $new_h === 0) ? 1 : 0;
		$this->imgRes->resizeImage($new_w, $new_h, Imagick::FILTER_LANCZOS, 1/*, $fit*/);
		$this->imgRes->writeImage($this->srcPath);

		// Clear current resources
		$this->imgRes->clear();

		// Call the constructor again to repopulate the dimensions etc
		$this->__construct($this->directory, $this->filename);

		return $this;
	}


	public function orientImage ($from)
	{
		$oAct = $this->orientAction[$from];
		if ($oAct[0] !==  0) $this->imgRes->rotateimage("#000", -$oAct[0]); 
		if ($oAct[1]) $this->imgRes->flopImage();

		$this->imgRes->setImageOrientation(Imagick::ORIENTATION_TOPLEFT);
		$this->imgRes->writeImage($this->srcPath);

		// Clear current resources
		$this->imgRes->clear();
	}


	public function saveImage ($destPath, $type='jpg')
	{
		$this->imgRes->writeImage("{$type}:{$destPath}");
	}


	public function send ($maxS=0, $type='jpeg')
	{
		if ($type) {
			$this->imgRes->setImageFormat($type);
		}
		if ($maxS) {
			if ($this->width > $this->height) {
				$this->imgRes->resizeImage($maxS, 0, Imagick::FILTER_LANCZOS, 1);
			} else {
				$this->imgRes->resizeImage(0, $maxS, Imagick::FILTER_LANCZOS, 1);
			}
		}
		
		header('Content-type: image/' . $this->imgRes->getImageFormat());
		echo $this->imgRes->getImageBlob();
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

		list($sharpen) = CPGPluginAPI::filter('image_sharpen', array($sharpen, $new_size));

		$crop = 0; // initialize

		if ($thumb_use == 'ex') {	// if cropping
			$thb_width = $CONFIG['thumb_width'];
			$thb_height = $CONFIG['thumb_height'];

			if ($new_size == $thb_width) {
				$crop = 1;
				$this->imgRes->cropThumbnailImage($thb_width, $thb_height);
			} else {
				$ratio = max($this->width, $this->height) / $new_size;
			}

		} elseif ($thumb_use == 'wd') {
			// resize method width
			$ratio = $this->width / $new_size;
		} elseif ($thumb_use == 'ht') {
			// resize method height
			$ratio = $this->height / $new_size;
		} else { // resize method any
			$ratio = max($this->width, $this->height) / $new_size;
		}

		$ratio = max($ratio, 1.0);
		if ($thumb_use == 'orig') {
			$ratio = 1.0;
		}

		if ($crop != 1) {
			$destWidth = (int)($this->width / $ratio);
			$destHeight = (int)($this->height / $ratio);
			$this->imgRes->resizeImage($destWidth, $destHeight, Imagick::FILTER_LANCZOS, 1);
		}

		if ($sharpen==1 && $CONFIG['enable_unsharp']==1) {
			$this->imgRes->sharpenImage(0, $CONFIG['unsharp_amount']/100);
		}

		if ($media_type != "false") {
			// if a manual thumb gets generated we watermark the thumb with the media type
			// we now need to get the absolute path to the thumb watermark files
			$path_parts = pathinfo($CONFIG['watermark_file']);
			$CONFIG['watermark_file'] = $path_parts["dirname"]."/wm_".$media_type.".png";
		}

		if ($watermark == "true" || $media_type != "false") {

			$wm_res = new Imagick($CONFIG['watermark_file']);

			// do we need to resize the watermark to fit onto the intermediate?
			$wm_normal = (int)$CONFIG['reduce_watermark'];
			if ($wm_normal > $destWidth ) {
				$wm_res->scaleImage($destWidth - 10, 0);
			}

			// set the watermark transparency
			$wm_res->evaluateImage(Imagick::EVALUATE_DIVIDE, 100 / $CONFIG['watermark_transparency'], Imagick::CHANNEL_ALPHA);	//setImageOpacity(0.4);

			// where is the watermark displayed...
			list($src_x, $src_y) = $this->get_wm_position($destWidth, $destHeight, $wm_res->getImageWidth(), $wm_res->getImageHeight());

			// now we apply the watermark
			$this->imgRes->compositeImage($wm_res, Imagick::COMPOSITE_OVER, $src_x, $src_y);
			$wm_res->clear();
			$wm_res->destroy();

		}

/*
		if (true) {		// maybe configure as an option
			$orientation = $this->imgRes->getImageOrientation();

			switch ($orientation) {
				case Imagick::ORIENTATION_BOTTOMRIGHT:
					$this->imgRes->rotateimage("#000", 180); // rotate 180 degrees
				break;

				case Imagick::ORIENTATION_RIGHTTOP:
					$this->imgRes->rotateimage("#000", 90); // rotate 90 degrees CW
				break;

				case Imagick::ORIENTATION_LEFTBOTTOM:
					$this->imgRes->rotateimage("#000", -90); // rotate 90 degrees CCW
				break;
			}

			$this->imgRes->setImageOrientation(Imagick::ORIENTATION_TOPLEFT);
		}
*/

		// Save the image to the destination
		$this->imgRes->writeImage($dest_file);

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