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

function adjust_popup()
{
    // Let's build a list of variables that we need to take into account
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    var imageWidth = $("#fullsize_image").width();
    var imageHeight = $("#fullsize_image").height();
    var widthMargin = 16;
    var heightMargin = 30;
    var imageRatio = imageWidth/imageHeight;
    var windowRatio = windowWidth/windowHeight;
    var alertString = 'Window width:' + windowWidth + '\n' + 'Window height:' + windowHeight + '\n' + 'Image width:' + imageWidth + '\n' + 'Image height:' + imageHeight;
    if (imageWidth > windowWidth || imageHeight > windowHeight) {
        // The image is larger than the window, so let's resize the image
        if (imageRatio > windowRatio) { // the image width is the culprit
            imageWidth = windowWidth;
            imageHeight = imageWidth / imageRatio;
        } else { // the image height is the culprit
            imageHeight = windowHeight;
            imageWidth = imageHeight * imageRatio;
        }
        imageWidth = parseInt(imageWidth);
        imageHeight = parseInt(imageHeight);
        $("#fullsize_image").width(imageWidth);
        $("#fullsize_image").height(imageHeight);
        $("#content").width(imageWidth);
        $("#content").height(imageHeight);
        window.resizeTo(imageWidth + widthMargin, imageHeight + heightMargin);
    } else {
        var w, h, fixedW, fixedH, diffW, diffH;
        if (document.documentElement && document.body.clientHeight==0) {     // Catches IE6 and FF in DOCMODE
                fixedW = document.documentElement.clientWidth;
                fixedH = document.documentElement.clientHeight;
                window.resizeTo(fixedW, fixedH);
                diffW = fixedW - document.documentElement.clientWidth;
                diffH = fixedH - document.documentElement.clientHeight;
                w = fixedW + diffW + 16; // Vert Scrollbar Always On in DOCMODE.
                h = fixedH + diffH;
                if (w >= screen.availWidth) h += 16;
        } else if (document.all) {
                fixedW = document.body.clientWidth;
                fixedH = document.body.clientHeight;
                window.resizeTo(fixedW, fixedH);
                diffW = fixedW - document.body.clientWidth;
                diffH = fixedH - document.body.clientHeight;
                w = fixedW + diffW;
                h = fixedH + diffH;
                if (h >= screen.availHeight) w += 16;
                if (w >= screen.availWidth)  h += 16;
        } else {
                fixedW = window.innerWidth;
                fixedH = window.innerHeight;
                window.resizeTo(fixedW, fixedH);
                diffW = fixedW - window.innerWidth;
                diffH = fixedH - window.innerHeight;
                w = fixedW + diffW;
                h = fixedH + diffH;
                if (w >= screen.availWidth)  h += 16;
                if (h >= screen.availHeight) w += 16;
        }
        w = Math.min(w,screen.availWidth);
        h = Math.min(h,screen.availHeight);
        window.resizeTo(w,h);
        window.moveTo((screen.availWidth-w)/2, (screen.availHeight-h)/2);
    }
}

$(document).ready(function() {
    adjust_popup();
})