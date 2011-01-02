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
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$

**********************************************/

 /***************************************************************/
 /* PhpCaptcha                                                  */
 /* Copyright  2005 Edward Eliot - http://www.ejeliot.com/     */
 /* This class is Freeware, however please retain this          */
 /* copyright notice when using                                 */
 /* Last Updated: 26th November 2005                            */
 /***************************************************************/

if (!defined('IN_COPPERMINE')) {
    die('Not in Coppermine...');
}

   // start a PHP session - this class uses sessions to store the generated
   // code. Comment out if you are calling already from your application
   $session_name = session_name();
   if ($superCage->cookie->keyExists($session_name)) {
       session_id($superCage->cookie->getAlnum($session_name));
   }

   session_start();

   class PhpCaptcha {
      var $oImage;
      var $aFonts;
      var $iWidth;
      var $iHeight;
      var $iNumChars;
      var $iNumLines;
      var $iSpacing;
      var $bCharShadow;
      var $sOwnerText;
      var $aCharSet;
      var $sBackgroundImage;
      var $sCode;

      function PhpCaptcha(
         $aFonts, // array of TypeType fonts to use - specify full path
         $iWidth = 200, // width of image
         $iHeight = 50, // height of image
         $iNumChars = 5, // number of characters to draw
         $iNumLines = 70, // number of noise lines to draw
         $bCharShadow = false, // add shadow to generated characters to further obscure code
         $sOwnerText = '', // add owner text to bottom of CAPTCHA, usually your site address
         $aCharSet = array(), // array of characters to select from - if blank uses upper case A - Z
         $sBackgroundImage = '' // background image to use - if blank creates image with white background
      ) {
         // get parameters
         $this->aFonts = $aFonts;
         $this->iWidth = $iWidth;
         $this->iHeight = $iHeight;
         $this->iNumChars = $iNumChars;
         $this->iNumLines = $iNumLines;
         $this->bCharShadow = $bCharShadow;
         $this->sOwnerText = $sOwnerText;
         $this->aCharSet = $aCharSet;
         $this->sBackgroundImage = $sBackgroundImage;

         // calculate spacing between characters based on width of image
         $this->iSpacing = (int)($this->iWidth / $this->iNumChars);
      }

      function DrawLines() {
         for ($i = 0; $i < $this->iNumLines; $i++) {
            $iRandColour = rand(100, 250);
            $iLineColour = imagecolorallocate($this->oImage, $iRandColour, $iRandColour, $iRandColour);
            imageline($this->oImage, rand(0, $this->iWidth), rand(0, $this->iHeight), rand(0, $this->iWidth), rand(0, $this->iHeight), $iLineColour);
         }
      }

      function DrawOwnerText() {
         $iBlack = imagecolorallocate($this->oImage, 0, 0, 0);
         $iOwnerTextHeight = imagefontheight(2);
         $iLineHeight = $this->iHeight - $iOwnerTextHeight - 4;

         imageline($this->oImage, 0, $iLineHeight, $this->iWidth, $iLineHeight, $iBlack);
         imagestring($this->oImage, 2, 3, $this->iHeight - $iOwnerTextHeight - 3, $this->sOwnerText, $iBlack);

         $this->iHeight = $this->iHeight - $iOwnerTextHeight - 5;
      }

      function GenerateCode() {
         // reset code
         $this->sCode = '';

         // loop through and generate the code letter by letter
         for ($i = 0; $i < $this->iNumChars; $i++) {
            if (count($this->aCharSet) > 0) {
               // select random character and add to code string
               $this->sCode .= $this->aCharSet[array_rand($this->aCharSet)];
            } else {
               // select random character and add to code string
               $this->sCode .= chr(rand(65, 90));
            }
         }

         // save code in session variable
         $_SESSION['php_captcha'] = md5(strtoupper($this->sCode));
      }

      function DrawCharacters() {
         // loop through and write out selected number of characters
         for ($i = 0; $i < strlen($this->sCode); $i++) {
            // select random font
            $sCurrentFont = $this->aFonts[array_rand($this->aFonts)];

            // select random greyscale colour
            $iRandColour = rand(0, 100);
            $iTextColour = imagecolorallocate($this->oImage, $iRandColour, $iRandColour, $iRandColour);

            if ($this->bCharShadow) {
               // shadow colour
               $iRandColour = rand(0, 100);
               $iShadowColour = imagecolorallocate($this->oImage, $iRandColour, $iRandColour, $iRandColour);
            }

            // select random font size
            $iFontSize = rand(16, 25);

            // select random angle
            $iAngle = rand(-30, 30);

            // get dimensions of character in selected font and text size
            $aCharDetails = imageftbbox($iFontSize, $iAngle, $sCurrentFont, $this->sCode[$i]);

            // calculate character starting coordinates
            $iX = $this->iSpacing / 4 + $i * $this->iSpacing;
            $iCharHeight = $aCharDetails[2] - $aCharDetails[5];
            $iY = $this->iHeight / 2 + $iCharHeight / 4;

            // write text to image
            imagefttext($this->oImage, $iFontSize, $iAngle, $iX, $iY, $iTextColour, $sCurrentFont, $this->sCode[$i]);

            if ($this->bCharShadow) {
               $iOffsetAngle = rand(-30, 30);

               $iRandOffsetX = rand(-5, 5);
               $iRandOffsetY = rand(-5, 5);

               imagefttext($this->oImage, $iFontSize, $iOffsetAngle, $iX + $iRandOffsetX, $iY + $iRandOffsetY, $iShadowColour, $sCurrentFont, $this->sCode[$i]);
            }
         }
      }

      function Create($sFilename = '') {
         // check for required gd functions
         if (!function_exists('imagecreate') || !function_exists('imagejpeg') || ($this->sBackgroundImage != '' && !function_exists('imagecreatetruecolor'))) {
            return false;
         }
         // get background image if specified and copy to CAPTCHA
         if ($this->sBackgroundImage != '') {
            // create new image
            $this->oImage = imagecreatetruecolor($this->iWidth, $this->iHeight);

            // create background image
            $oBackgroundImage = imagecreatefromjpeg($this->sBackgroundImage);

            // copy background image
            imagecopy($this->oImage, $oBackgroundImage, 0, 0, 0, 0, $this->iWidth, $this->iHeight);

            // free memory used to create background image
            imagedestroy($oBackgroundImage);
         } else {
            // create new image
            $this->oImage = imagecreate($this->iWidth, $this->iHeight);
         }

         // allocate white background colour
         imagecolorallocate($this->oImage, 255, 255, 255);

         // check for owner text
         if ($this->sOwnerText != '') {
            $this->DrawOwnerText();
         }

         // check for background image before drawing lines
         if ($this->sBackgroundImage == '') {
            $this->DrawLines();
         }

         $this->GenerateCode();
         $this->DrawCharacters();

         // write out image to file or browser
         if ($sFilename != '') {
            // write stream to file
            imagejpeg($this->oImage, $sFilename);
         } else {
            // tell browser that data is jpeg
            header('Content-type: image/jpeg');

            // write stream to browser
            imagejpeg($this->oImage);
         }

         // free memory used in creating image
         imagedestroy($this->oImage);

         return true;
      }

      // call this method statically
      function Validate($sUserCode) {
         if (md5(strtoupper($sUserCode)) == $_SESSION['php_captcha']) {
            // clear to prevent re-use
            $_SESSION['php_captcha'] = '';

            return true;
         }

         return false;
      }
   }
?>