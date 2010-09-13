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

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');
//////////////////// Variables //////////////////////////////
// used texts
$txt['bigger'] = ">";
$txt['smaller'] = "<";
$txt['up'] = "^";
$txt['down'] = "v";
$txt['closewindow'] = "Close window";


$result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '$pid'");
$CURRENT_PIC = mysql_fetch_array($result);
mysql_free_result($result);
$pic_url = get_pic_url($CURRENT_PIC,'fullsize');



echo <<<cropUIjs
<script language="javascript" type="text/javascript" src="dhtmlLib.js"></script>
<script language="javascript" type="text/javascript">
<!--

function libinit(){
        obj=new lib_obj('cropDiv')
        obj.dragdrop()
        objImg =new lib_obj('imgDiv')
        //alert (objImg.x + "-" + objImg.y);
        obj.moveIt(objImg.x,objImg.y)
}

function cropCheck(crA){
  //alert (obj.x + "-" + obj.y);
  if (((obj.x + obj.cr) <= ({$CURRENT_PIC['pwidth']}+objImg.x))&&((obj.y + obj.cb) <= ({$CURRENT_PIC['pheight']}+objImg.y))&&(obj.x > objImg.x)&&(obj.y > objImg.y)){
    cropX = obj.x - objImg.x;
    cropY = obj.y - objImg.y;
    var url = 'cropAction.php?pop=1&x='+cropX+'&y='+cropY+'&h='+obj.cb+'&w='+obj.cr+'&id={$pid}' ;
    if (crA == 'pre'){
      window.open(url,'prevWin','width='+obj.cr+',height='+obj.cb);
    }else if(crA == 'final') {
      url = url+'&final=1';
      window.open(url,'prevWin','width='+obj.cr+',height='+(obj.cb));
    }else if(crA == 'asThumb') {

        thumb_use = "{$CONFIG['thumb_use']}"
        thumb_width = {$CONFIG['thumb_width']}

        if ( thumb_use== "ht") {
                ratio = obj.cb / thumb_width ;
        } else if (thumb_use == "wd") {
                ratio = obj.cr / thumb_width ;
        } else {
                ratio = Math.max(obj.cb, obj.cr) / thumb_width ;
        }

        ratio = Math.max(ratio, 1.0);
        destWidth = (obj.cr / ratio);
        destHeight = (obj.cb / ratio);

      url = url+'&asThumb=1';
      window.open(url,'prevWin','width='+destWidth+',height='+destHeight);
      }
    } else {
     alert('{$lang_editpics_php['sel_on_img']}');
    }
  }


function stopZoom() {
  loop = false;
  clearTimeout(zoomtimer);
}

function cropZoom(dir) {
  loop = true;
  zoomtimer = null;
  direction = dir;
  if (loop == true) {
    if (direction == "in") {
      if ((obj.cr > 60 )){
        cW = obj.cr - 1;
        cH = obj.cb ;
        obj.clipTo(0,cW,cH,0,1);
      }
    } else if (direction == "out") {
      if ((obj.cr < ({$CURRENT_PIC['pwidth']}-5))){
        cW = obj.cr + 1;
        cH = obj.cb ;
        obj.clipTo(0,cW,cH,0,1);
      }
    } else if (direction == "down") {
      if ((obj.cb < ({$CURRENT_PIC['pheight']}-5) )){
        cW = obj.cr ;
        cH = obj.cb + 1;
        obj.clipTo(0,cW,cH,0,1);
      }
    } else if (direction == "up") {
      if ((obj.cb > 60 )){
        cW = obj.cr ;
        cH = obj.cb - 1;
        obj.clipTo(0,cW,cH,0,1);
      }
    }
    zoomtimer = setTimeout("cropZoom(direction)", 10);
  }
}

addonload('libinit()');
// -->
</script>
<style>

#cropDiv{
        position:absolute;
        left:10px;
        top:10px;
        width:60px;
        height:60px;
        z-index:2;
        background-image: url(images/spacer.gif);
}

#imgDiv{
        position:relative;
}
</style>
cropUIjs;

starttable("100%",$lang_editpics_php['crop_title'], 3);
echo <<<EOT
<tr><td>
<table cellspacing="0" cellpadding="5" border="0" align="center">
<tr><td>
<table cellspacing="0" cellpadding="5" border="0" align="center">
<tr><td align="center" valign="top"><div id="imgDiv"><img src="$pic_url" /></div></td></tr>
</table>
<table border="0">
<tr>
<td align="right">
    <input type="button" name="Submit2" value="{$lang_editpics_php['save_thumb']}" onclick="cropCheck('asThumb');" class="button" />
    <input type="button" name="Submit2" value="{$lang_editpics_php['save']}" onclick="cropCheck('final');" class="button" />
    <input type="button" name="Submit2" value="{$lang_editpics_php['preview']}" onclick="cropCheck('pre');" class="button" />
    <input type="button" name="Submit3" value="{$txt['smaller']}" onMouseDown="cropZoom('in');" onMouseUp="stopZoom();" class="button" />
    <input type="button" name="Submit3" value="{$txt['up']}" onMouseDown="cropZoom('up');" onMouseUp="stopZoom();" class="button" />
    <input type="button" name="Submit3" value="{$txt['down']}" onMouseDown="cropZoom('down');" onMouseUp="stopZoom();" class="button" />
    <input type="button" name="Submit4" value="{$txt['bigger']}" onMouseDown="cropZoom('out');" onMouseUp="stopZoom();" class="button" />
</td>
</tr>
  </form>
</table>
</td></tr>
</table>
</td></tr>
</table>

<div id="cropDiv">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #000000">
<tr>
      <td><img src="images/spacer.gif" border="0" alt="" /></td>
    </tr>
  </table>
</div>
EOT;
?>