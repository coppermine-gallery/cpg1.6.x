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


    //constructor
    public function __construct ($directory, $filename, $previous = null)
    {
        $this->directory = $directory;
        $this->filename  = $filename;
        $this->previous  = $previous;

        if (file_exists($directory.$filename)) {

            $this->filesize = round(filesize($directory . $filename) / 1000);

            if ($this->filesize > 0) {

                $this->imginfo = cpg_getimagesize($directory . $filename);

                // For IM we don't need an Image Resource (work directly on file :)
                if ($this->imginfo && !$this->imgRes) {
                    $this->imgRes = true;
                }

                $this->width  = $this->imginfo[0];
                $this->height = $this->imginfo[1];
                $this->string = $this->imginfo[3];
            }
        }
    }


	public function __toString ()
	{
		if (file_exists($this->directory.$this->filename)) {
			readfile($this->directory.$this->filename);
		}
	}


    public function cropImage ($clipval)
    {

        global $CONFIG;

        $superCage = Inspekt::makeSuperCage();

        $cliparray = explode(",",$clipval);

        foreach($cliparray as $value) {
            if (!is_numeric($value)) return $this;
        }

        $clip_top = $cliparray[0];
        $clip_right = $cliparray[1];
        $clip_bottom = $cliparray[2];
        $clip_left = $cliparray[3];

        $new_w = $clip_right - $clip_left;
        $new_h = $clip_bottom - $clip_top;

        $imgFile = escapeshellarg("$this->directory$this->filename");
        $output = array();

        /*
        * Hack for working with ImageMagick on Windows even if IM is installed in C:\Program Files.
        * Also the options for -crop should not have space in between them.
        * By Aditya Mooley <aditya@sanisoft.com>
        */

        if ($superCage->env->getMatched('OS', '/win/i')) {
            $imgFile = str_replace("'","\"" , $imgFile);
            $cmd = "\"".str_replace("\\","/", $CONFIG['impath'])."convert\" -quality {$this->quality} {$CONFIG['im_options']} -crop {$new_w}x{$new_h}+{$clip_left}+{$clip_top} ".str_replace("\\","/" ,$imgFile )." ".str_replace("\\","/" ,$imgFile );
            exec(escapeshellcmd("\"$cmd\""), $output, $retval);
        } else {
            $cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -crop {$new_w}x{$new_h}+{$clip_left}+{$clip_top} $imgFile $imgFile";
            exec(escapeshellcmd($cmd), $output, $retval);
        }

        // TODO: check for errors in execution etc

        // Call the constructor again to repopulate the dimensions etc
        $this->__construct($this->directory, $this->filename);

        return $this;
    }


    public function rotateImage ($angle)
    {
        global $CONFIG;

        $superCage = Inspekt::makeSuperCage();

        $imgFile = escapeshellarg("$this->directory$this->filename");
        $output = array();

        /*
        * Hack for working with ImageMagick on Windows even if IM is installed in C:\Program Files.
        * By Aditya Mooley <aditya@sanisoft.com>
        */

        if ($superCage->env->getMatched('OS', '/win/i')) {
            $imgFile = str_replace("'","\"" ,$imgFile );
            $cmd = "\"".str_replace("\\","/", $CONFIG['impath'])."convert\" -quality {$this->quality} {$CONFIG['im_options']} -rotate $angle ".str_replace("\\","/" ,$imgFile )." ".str_replace("\\","/" ,$imgFile );
            exec("\"$cmd\"", $output, $retval);
        } else {
            $cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -rotate $angle $imgFile $imgFile";
            exec($cmd, $output, $retval);
        }

        // TODO: check for errors in execution etc

        // Call the constructor again to repopulate the dimensions etc
        $this->__construct($this->directory, $this->filename);

        return $this;
    }


    public function resizeImage ($new_w = 0, $new_h = 0)
    {
        global $CONFIG;

        $superCage = Inspekt::makeSuperCage();

        $imgFile = escapeshellarg("$this->directory$this->filename");

        $output = array();

        /*
        * Hack for working with ImageMagick on Windows even if IM is installed in C:\Program Files.
        * By Aditya Mooley <aditya@sanisoft.com>
        */

        if ($superCage->env->getMatched('OS', '/win/i')) {
            $imgFile = str_replace("'","\"" ,$imgFile );
            $cmd = "\"".str_replace("\\","/", $CONFIG['impath'])."convert\" -quality {$this->quality} {$CONFIG['im_options']} -geometry {$new_w}x{$new_h} ".str_replace("\\","/" ,$imgFile )." ".str_replace("\\","/" ,$imgFile );
            exec("\"$cmd\"", $output, $retval);
        } else {
            $cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -geometry {$new_w}x{$new_h} $imgFile $imgFile";
            exec($cmd, $output, $retval);
        }

        // TODO: check for errors in execution etc

        // Call the constructor again to repopulate the dimensions etc
        $this->__construct($this->directory, $this->filename);

        return $this;
    }


	public function orientImage ($from)
	{
        global $CONFIG;

		$src_file = $this->directory.$this->filename;
        $output = array();

		if (preg_match('#[A-Z]:|\\\\#Ai', __FILE__)) {
			$cur_dir = dirname(__FILE__);
			$src_file = '"' . $cur_dir . '\\' . strtr($src_file, '/', '\\') . '"';
		} else {
			$src_file = escapeshellarg($src_file);
		}

        $cmd = "{$CONFIG['impath']}convert $src_file -auto-orient $src_file";
        exec($cmd, $output, $retval);
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

			if (preg_match('#[A-Z]:|\\\\#Ai', __FILE__)) {
				$cur_dir = dirname(__FILE__);
				$src_file = '"' . $cur_dir . '\\' . strtr($src_file, '/', '\\') . '"';
			} else {
				$src_file = escapeshellarg($src_file);
			}

			header('Content-type: image/' . $imageType);
			passthru("{$CONFIG['impath']}convert -quality $CONFIG[jpeg_qual] -antialias -geometry {$destWidth}x{$destHeight} $src_file -");
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
				//cropping parameters for ImageMagick
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
		} else {
			$unsharp_mask = "";
		}

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