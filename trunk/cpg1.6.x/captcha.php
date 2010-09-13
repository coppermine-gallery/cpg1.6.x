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

define("IN_COPPERMINE", true);
require("include/init.inc.php");
require("include/captcha.inc.php");

/**
 * Fonts to create the captcha image
 */
$aFonts = array('images/fonts/acidic.ttf', 'images/fonts/hurryup.ttf');

// create new image
$oPhpCaptcha = new PhpCaptcha($aFonts, 150, 30, 5, 20, false);
$oPhpCaptcha->Create();
?>