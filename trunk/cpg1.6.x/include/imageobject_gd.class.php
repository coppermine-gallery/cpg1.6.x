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

class imageObject {
    
    // image resource
    var $imgRes;
    
    // px
    var $height = 0;
    var $width = 0;
    
    // for img height/width tags
    var $string;
    
    // output report or error message
    var $message;
    
    // file + dir
    var $directory;
    var $filename;
    
    // output quality, 0 - 100
    var $quality;
    
    // truecolor available, boolean
    var $truecolor;

    //constructor
    function imageObject($directory, $filename, $previous = null) {

        $this->directory = $directory;
        $this->filename  = $filename;
        $this->previous  = $previous;
        $this->imgRes    = $previous->imgRes;

        if (file_exists($directory . $filename)) {
            
            $this->filesize = round(filesize($directory . $filename) / 1000);
            
            if ($this->filesize > 0) {
                
                $size = cpg_getimagesize($directory . $filename);
                
                if ($size && !$this->imgRes) {
                    $this->imgRes = $this->getimgRes($directory . $filename, $size[2]);
                }
                
                if (function_exists('imagecreatetruecolor')) {
                    $this->truecolor = true;
                }
                
                $this->width  = $size[0];
                $this->height = $size[1];
                $this->string = $size[3];
            }
        }
    }

    // private methods
    function getimgRes($name, $type) {

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

    function createUnique($imgnew) {
        
        $unique_str = 'temp_' . md5(rand(0, 999999)) . '.jpg';
        
        imagejpeg($imgnew, $this->directory . $unique_str, $this->quality);
        imagedestroy($this->imgRes);
        
        // Don't clutter with old images
        @unlink($this->directory . $this->filename);
       
        // Create a new ImageObject
        return new imageObject($this->directory, $unique_str, $imgnew);
    }

    function createImage($new_w, $new_h) {
        
        if (function_exists('imagecreatetruecolor')) {
            $retval = imagecreatetruecolor($new_w, $new_h);
        }
        
        if (!$retval) {
            $retval = imagecreate($new_w, $new_h);
        }
        
        return $retval;
    }

    function cropImage($clipval) {
        
        $cliparray = split(",",$clipval);
        
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

    function rotateImage($angle) {
             
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

    function resizeImage($new_w = 0, $new_h = 0) {
        
        $dst_img = $this->createImage($new_w, $new_h);
        
        $result = imagecopyresampled($dst_img, $this->imgRes, 0, 0, 0, 0, $new_w, $new_h, $this->width, $this->height);
        
        if (!$result) {
            $result = @imagecopyresized($dst_img, $this->imgRes, 0, 0, 0, 0, $new_w, $new_h, $this->width,$this->height);
        }
    
        return $this->createUnique($dst_img);
    }
}
