/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

/* Greybox Redux
 * Required: http://jquery.com/
 * Written by: John Resig
 * Based on code by: 4mir Salihefendic (http://amix.dk)
 * License: LGPL (read more in LGPL.txt)
 */

var GB_DONE = false;
var GB_HEIGHT = 400;
var GB_WIDTH = 600;

function GB_show(caption, url, height, width) {
  GB_HEIGHT = height || 400;
  GB_WIDTH = width || 600;
  if(!GB_DONE) {
    $(document.body)
      .append("<div id=\"GB_overlay\"></div><div id=\"GB_window\"><div id=\"GB_caption\" class=\"tableh1\"></div>"
        + "<img src=\""+js_vars.icon_close_path+"\" alt=\"\" title=\""+js_vars.lang_close+"\"/></div>");
    $("#GB_window img").click(GB_hide);
    $("#GB_overlay").click(GB_hide);
    $(window).resize(GB_position);
    $(window).scroll(GB_position);
    GB_DONE = true;
  }

  $("#GB_frame").remove();
  $("#GB_window").append("<iframe id=\"GB_frame\" src=\""+url+"\"></iframe>");

  $("#GB_caption").html(caption);
  $("#GB_overlay").show();
  GB_position();

  if(GB_ANIMATION)
    $("#GB_window").slideDown("slow");
  else
    $("#GB_window").show();
}

function GB_hide() {
  $("#GB_window,#GB_overlay").hide();
}

function GB_position()
{
    var de = document.documentElement;
    var h = self.innerHeight || (de&&de.clientHeight) || document.body.clientHeight;
    var w = self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth;
    var iebody=(document.compatMode && document.compatMode != "BackCompat")? document.documentElement : document.body;
    var dsocleft=document.all? iebody.scrollLeft : pageXOffset;
    var dsoctop=document.all? iebody.scrollTop : pageYOffset;
    
    var height = h < GB_HEIGHT ? h - 32 : GB_HEIGHT;
    var top = (h - height)/2 + dsoctop;
    
    $("#GB_window").css({width:GB_WIDTH+"px",height:height+"px",
      left: ((w - GB_WIDTH)/2)+"px", top: top+"px" });
    $("#GB_frame").css("height",height - 32 +"px");
    $("#GB_overlay").css({height:h, top:dsoctop + "px", width:w});
}
