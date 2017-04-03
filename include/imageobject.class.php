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

class ImageTool {

	// image information
	protected $imginfo;

	// needed actions to correctly orient an image based on its current orientation
	// array(<rotate angle>, <mirror>)
	protected $orientAction = array(
		1 => array(0, false),
		2 => array(0, true),
		3 => array(180, false),
		4 => array(180, true),
		5 => array(-90, true),
		6 => array(-90, false),
		7 => array(90, true),
		8 => array(90, false)
	);

	// Calculate watermark position
	protected function get_wm_position ($destW, $destH, $wmW, $wmH)
	{
		global $CONFIG;

		$pos = $CONFIG['where_put_watermark'];
		$posx = $posy = $m = 2;		// 2 pixel margin
		if ($pos == 'northwest') {
		} else if ($pos == 'northeast') {
			$posx = $destW - $wmW - $m;
		} else if ($pos == 'southwest') {
			$posy = $destH - $wmH - $m;
		} else if ($pos == 'southeast') {
			$posx = $destW - $wmW - $m;
			$posy = $destH - $wmH - $m;
		} else if ($pos == 'center') {
			$posx = ($destW/2) - ($wmW/2);
			$posy = ($destH/2) - ($wmH/2);
		}

		return array($posx, $posy);
	}

}
//EOF