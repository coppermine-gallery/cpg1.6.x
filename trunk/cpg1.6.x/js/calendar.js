/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
**********************************************/

function sendDate(month, day, year) 
{
    // pad with blank zeros numbers under 10
    month = month < 10 ? '0' + month : month;
    day   = day   < 10 ? '0' + day   : day;

    var date = year + '-' + month + '-' + day;
    
    parent.document.location = 'thumbnails.php?album=datebrowse&date=' + date;
}
