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

$base = array(
  // Note: to save memory plain ASCII mappings have been left out.
  0x80 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
  0x90 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
  0xA0 => ' ', '!', 'C/', 'PS', '$?', 'Y=', '|', 'SS', '"', '(c)', 'a', '<<', '!', '', '(r)', '-',
  0xB0 => 'deg', '+-', '2', '3', '\'', 'u', 'P', '*', ',', '1', 'o', '>>', '1/4', '1/2', '3/4', '?',
  0xC0 => 'A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I',
  0xD0 => 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'x', 'O', 'U', 'U', 'U', 'U', 'U', 'Th', 'ss',
  0xE0 => 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i',
  0xF0 => 'd', 'n', 'o', 'o', 'o', 'o', 'o', '/', 'o', 'u', 'u', 'u', 'u', 'y', 'th', 'y',
);

// Overrides for Danish input.
$variant['da'] = array(
  0xC5 => 'Aa',
  0xD8 => 'Oe',
  0xE5 => 'aa',
  0xF8 => 'oe',
);

// Overrides for German input.
$variant['de'] = array(
  0xC4 => 'Ae',
  0xD6 => 'Oe',
  0xDC => 'Ue',
  0xE4 => 'ae',
  0xF6 => 'oe',
  0xFC => 'ue',
  0xDF => 'ss',
);
