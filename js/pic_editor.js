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

/****************************************************************************
DHTML library from DHTMLCentral.com
*    Copyright (C) 2001 Thomas Brattli 2001
*    This script was released at DHTMLCentral.com
*    Visit for more great scripts!
*    This may be used and changed freely as long as this msg is intact!
*    We will also appreciate any links you could give us.
*
*    Made by Thomas Brattli 2001
***************************************************************************/
//Browsercheck (needed) ***************
function lib_bwcheck(){
    this.ver=navigator.appVersion
    this.agent=navigator.userAgent
    this.dom=document.getElementById?1:0
    this.opera5=this.agent.indexOf("Opera 5")>-1
    this.ie5=(this.ver.indexOf("MSIE 5")>-1 && this.dom && !this.opera5)?1:0;
    this.ie6=(this.ver.indexOf("MSIE 6")>-1 && this.dom && !this.opera5)?1:0;
    this.ie4=(document.all && !this.dom && !this.opera5)?1:0;
    this.ie=this.ie4||this.ie5||this.ie6
    this.mac=this.agent.indexOf("Mac")>-1
    this.ns6=(this.dom && parseInt(this.ver) >= 5) ?1:0;
    this.ns4=(document.layers && !this.dom)?1:0;
    this.bw=(this.ie6||this.ie5||this.ie4||this.ns4||this.ns6||this.opera5)
    return this
}
bw=new lib_bwcheck() //Browsercheck object

//Debug function ******************
function lib_message(txt){alert(txt); return false}

//Lib objects   ********************
function lib_obj(obj,nest){
    if(!bw.bw) return lib_message('Old browser')
        nest=(!nest) ? "":'document.'+nest+'.'
    this.evnt=bw.dom? document.getElementById(obj):
    bw.ie4?document.all[obj]:bw.ns4?eval(nest+"document.layers." +obj):0;
    if(!this.evnt) return lib_message('The layer does not exist ('+obj+')'
    +'- \nIf your using Netscape please check the nesting of your tags!')
    this.css=bw.dom||bw.ie4?this.evnt.style:this.evnt;
    this.ref=bw.dom||bw.ie4?document:this.css.document;
    this.x=parseInt(this.css.left)||this.css.pixelLeft||this.evnt.offsetLeft||0;
    this.y=parseInt(this.css.top)||this.css.pixelTop||this.evnt.offsetTop||0
    this.w=this.evnt.offsetWidth||this.css.clip.width||
    this.ref.width||this.css.pixelWidth||0;
    this.h=this.evnt.offsetHeight||this.css.clip.height||
    this.ref.height||this.css.pixelHeight||0
    this.c=0 //Clip values
    if((bw.dom || bw.ie4) && this.css.clip) {
        this.c=this.css.clip; this.c=this.c.slice(5,this.c.length-1);
        this.c=this.c.split(' ');
        for(var i=0;i<4;i++){this.c[i]=parseInt(this.c[i])}
    }
    this.ct=this.css.clip.top||this.c[0]||0;
    this.cr=this.css.clip.right||this.c[1]||this.w||0
    this.cb=this.css.clip.bottom||this.c[2]||this.h||0;
    this.cl=this.css.clip.left||this.c[3]||0
    this.obj = obj + "Object"; eval(this.obj + "=this")
    return this
}

//Moving object to **************
lib_obj.prototype.moveIt = function(x,y){
    this.x=x;this.y=y; this.css.left=x+"px";this.css.top=y+"px";
}

//Moving object by ***************
lib_obj.prototype.moveBy = function(x,y){
    this.css.left=this.x+=x; this.css.top=this.y+=y
}

//Showing object ************
lib_obj.prototype.showIt = function(){this.css.visibility="visible"}

//Hiding object **********
lib_obj.prototype.hideIt = function(){this.css.visibility="hidden"}

//Changing backgroundcolor ***************
lib_obj.prototype.bg = function(color){
    if(bw.opera) this.css.background=color
    else if(bw.dom || bw.ie4) this.css.backgroundColor=color
    else if(bw.ns4) this.css.bgColor=color
}

//Writing content to object ***
lib_obj.prototype.writeIt = function(text,startHTML,endHTML){
    if(bw.ns4){
    if(!startHTML){startHTML=""; endHTML=""}
        this.ref.open("text/html");
    this.ref.write(startHTML+text+endHTML);
    this.ref.close()
    }else this.evnt.innerHTML=text
}

//Clipping object to ******
lib_obj.prototype.clipTo = function(t,r,b,l,setwidth){
    this.ct=t; this.cr=r; this.cb=b; this.cl=l
    if(bw.ns4){
    this.css.clip.top=t;this.css.clip.right=r
    this.css.clip.bottom=b;this.css.clip.left=l
    }else{
    if(t<0)t=0;if(r<0)r=0;if(b<0)b=0;if(b<0)b=0
    this.css.clip="rect("+t+"px"+","+r+"px"+","+b+"px"+","+l+"px"+")";
    if(setwidth){this.css.pixelWidth=this.css.width=r+"px";
    this.css.pixelHeight=this.css.height=b+"px"}
    }
}

//Clipping object by ******
lib_obj.prototype.clipBy = function(t,r,b,l,setwidth){
    this.clipTo(this.ct+t,this.cr+r,this.cb+b,this.cl+l,setwidth)
}

//Clip animation ************
lib_obj.prototype.clipIt = function(t,r,b,l,step,fn,wh){
    tstep=Math.max(Math.max(Math.abs((t-this.ct)/step),Math.abs((r-this.cr)/step)),
    Math.max(Math.abs((b-this.cb)/step),Math.abs((l-this.cl)/step)))
    if(!this.clipactive){
    this.clipactive=true; if(!wh) wh=0; if(!fn) fn=0
    this.clip(t,r,b,l,(t-this.ct)/tstep,(r-this.cr)/tstep,
        (b-this.cb)/tstep,(l-this.cl)/tstep,tstep,0, fn,wh)
    }
}
lib_obj.prototype.clip = function(t,r,b,l,ts,rs,bs,ls,tstep,astep,fn,wh){
    if(astep<tstep){
    if(wh) eval(wh);
    astep++
    this.clipBy(ts,rs,bs,ls,1);
    setTimeout(this.obj+".clip("+t+","+r+","+b+","+l+","+ts+","+rs+","
        +bs+","+ls+","+tstep+","+astep+",'"+fn+"','"+wh+"')",50)
    }else{
    this.clipactive=false; this.clipTo(t,r,b,l,1);
    if(fn) eval(fn)
    }
}

//Slide animation ***********
lib_obj.prototype.slideIt = function(endx,endy,inc,speed,fn,wh){
    if(!this.slideactive){
        var distx = endx - this.x;
        var disty = endy - this.y
        var num = Math.sqrt(Math.pow(distx,2)+Math.pow(disty,2))/inc
        var dx = distx/num; var dy = disty/num
        this.slideactive = 1;
        if(!wh) wh=0; if(!fn) fn=0
        this.slide(dx,dy,endx,endy,speed,fn,wh)
    }
}
lib_obj.prototype.slide = function(dx,dy,endx,endy,speed,fn,wh) {
    if(this.slideactive&&
        (Math.floor(Math.abs(dx))<Math.floor(Math.abs(endx-this.x))||
        Math.floor(Math.abs(dy))<Math.floor(Math.abs(endy-this.y)))){
        this.moveBy(dx,dy);
        if(wh) eval(wh)
        setTimeout(this.obj+".slide("+dx+","+dy+","+endx+","+endy+","+speed+",'"+fn+"','"+wh+"')",speed)
        }else{
        this.slideactive = 0;
        this.moveIt(endx,endy);
        if(fn) eval(fn)
    }
}

//Circle animation ****************
lib_obj.prototype.circleIt = function(rad,ainc,a,enda,xc,yc,speed,fn) {
    if((Math.abs(ainc)<Math.abs(enda-a))) {
    a += ainc
    var x = xc + rad*Math.cos(a*Math.PI/180)
    var y = yc - rad*Math.sin(a*Math.PI/180)
    this.moveIt(x,y)
    setTimeout(this.obj+".circleIt("+rad+","+ainc+","+a+","+enda+","
        +xc+","+yc+","+speed+",'"+fn+"')",speed)
    }else if(fn&&fn!="undefined") eval(fn)
}

//Document size object ********
function lib_doc_size(){
    this.x=0;this.x2=bw.ie && document.body.offsetWidth-20||innerWidth||0;
    this.y=0;this.y2=bw.ie && document.body.offsetHeight-5||innerHeight||0;
    if(!this.x2||!this.y2) return message(js_vars.error_document_size)
    this.x50=this.x2/2;this.y50=this.y2/2;
    return this;
}

//Drag drop functions start *******************
dd_is_active=0; dd_obj=0; dd_mobj=0
function lib_dd(){
    dd_is_active=1
    if(bw.ns4){
    document.captureEvents(Event.MOUSEMOVE|Event.MOUSEDOWN|Event.MOUSEUP)
    }
    document.onmousemove=lib_dd_move;
    document.onmousedown=lib_dd_down
    document.onmouseup=lib_dd_up
}
lib_obj.prototype.dragdrop = function(obj){
    if(!dd_is_active) lib_dd()
    this.evnt.onmouseover=new Function("lib_dd_over("+this.obj+")")
    this.evnt.onmouseout=new Function("dd_mobj=0")
    if(obj) this.ddobj=obj
}
lib_obj.prototype.nodragdrop = function(){
    this.evnt.onmouseover=""; this.evnt.onmouseout=""
    dd_obj=0; dd_mobj=0
}
//Drag drop event functions
function lib_dd_over(obj){dd_mobj=obj}
function lib_dd_up(e){dd_obj=0}

var MouseX = 0;
var MouseY = 0;

function lib_dd_down(e){ //Mousedown

if(dd_mobj){
    x=(bw.ns4 || bw.ns6)?e.pageX:event.x||event.clientX
    y=(bw.ns4 || bw.ns6)?e.pageY:event.y||event.clientY
    dd_obj=dd_mobj
    dd_obj.clX=x-dd_obj.x
    dd_obj.clY=y-dd_obj.y
    }

}
function lib_dd_move(e,y,rresize){ //Mousemove
    x=(bw.ns4 || bw.ns6)?e.pageX:event.x||event.clientX
    y=(bw.ns4 || bw.ns6)?e.pageY:event.y||event.clientY
    if(dd_obj){
    nx=x-dd_obj.clX; ny=y-dd_obj.clY
    if(dd_obj.ddobj) dd_obj.ddobj.moveIt(nx,ny)
    else dd_obj.moveIt(nx,ny)
    }
    if(!bw.ns4) return false
}
//Drag drop functions end *************

// page functions
function resetClip(){
    newleft = (screen.width - js_vars.width)/2;
    if (newleft<0)newleft = 0;
    objimg.moveIt(newleft,100);
    objimg.clipTo(0, js_vars.width, js_vars.height,0,1);
    objlefttop.moveIt(newleft-2,97);
    objrightbottom.moveIt(newleft+js_vars.width-23,100+js_vars.height-23);
    document.mainform.clipval.value = "";
    }
function libinit(){
    page=new lib_doc_size();

    objlefttop=new lib_obj('lefttopdiv');
    objlefttop.dragdrop();

    objrightbottom=new lib_obj('rightbottomdiv');
    objrightbottom.dragdrop();

    objimg=new lib_obj('imgdiv');

    resetClip();
    }

function showPreview(){
if (objlefttop.y < objimg.y+2 ){
        objlefttop.y = objimg.y+2 ;
    objlefttop.moveIt(objlefttop.x, objimg.y);
}
if (objlefttop.x < objimg.x ){
        objlefttop.x = objimg.x ;
    objlefttop.moveIt(objimg.x, objlefttop.y );
}

objimg.clipTo(objlefttop.y-objimg.y+2, objrightbottom.x-objimg.x+23 , objrightbottom.y-objimg.y+23, objlefttop.x-objimg.x+2,1);
document.mainform.clipval.value = objimg.ct + ',' + objimg.cr + ',' + objimg.cb + ',' + objimg.cl;
}

function showCorners(check){
if (check.checked){
    objlefttop.showIt();
    objrightbottom.showIt();
     }else{
    objlefttop.hideIt();
    objrightbottom.hideIt();
    resetClip();
     }
}