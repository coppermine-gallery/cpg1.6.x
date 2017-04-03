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
  $Date$
**********************************************/

 /*
 * Based on:
 *
 * Fullsize
 * Copyright 2009 Drew Wilson
 * www.drewwilson.com
 * This Fullsize jQuery plug-in is dual licensed under the MIT and GPL licenses:
 *		http://www.opensource.org/licenses/mit-license.php
 *		http://www.gnu.org/licenses/gpl.html
 */

(function($){

	$.fn.fullsize = function(options) {

		var defaults = {
			zoomInSpeed: 200,
			zoomOutSpeed: 200,
			fadeInSpeed: 250,
			fadeOutSpeed: 250,
			leftOffset: 0,
			topOffset: 0,
			iconOffset: 8,
			forceTitleBar: false,
			destroy: false,
			start: function(){},
			end: function(){}
		};
		var opts = $.extend(defaults, options);

		// If ESC key pressed, close Fullsize
		$(document).keydown(function(event){
			if (event.keyCode == 27) {
				$("div.fullsize-wrapper").fadeOut(opts.fadeOutSpeed, function(){
					$(this).remove();
				});
				opts.end.call(this);
			}
		});

		return this.each(function(){

			// Remove all Fullsize bound events
			if (opts.destroy == true) {
				$(this).unbind();
			} else {

				// Check to make sure there is a 'longdesc' attribute before we add Fullsize to the Element.
				if ($(this).attr("longdesc")) {

					// Declare the current Image as a variable, and gather some of it's properties.
					var org_image = $(this);
					var img_title = org_image.attr("title");
					var img_src = org_image.attr("longdesc");

					$(this).click(function(){

						opts.start.call(this);

						// If a Fullsize Popup is currently active, we will remove it before creating a new one.
						$("div.fullsize-wrapper").remove();

						// Gather window & scroll positions.
						var win_w = $(window).width();
						var win_h = $(window).height();
						var scrolltop = $(window).scrollTop();
						var scrollleft = $(window).scrollLeft();

						// Setup the Loading DIV 
						if (!$.support.opacity && parseInt($.browser.version.substr(0,1)) < "8") {
							var loading_left = (((win_w - opts.leftOffset) / 2) + scrollleft) - 25;
							var loading_top = (((win_h - opts.topOffset) / 2) + scrolltop) - 25;
						} else {
							var loading_left = (((win_w + opts.leftOffset) / 2) + scrollleft) - 25;
							var loading_top = (((win_h + opts.topOffset) / 2) + scrolltop) - 25;
						}
						var full_loading = $("<div></div>").addClass('fullsize-loading').css({"margin-left":loading_left, "margin-top":loading_top});
						var full_loading_inner = $("<div></div>").addClass('fullsize-loading-inner');
						$(full_loading).prepend(full_loading_inner);
						$("body").prepend(full_loading);

						// Setup the Fullsize Image
						var full_img = new Image();
						$(full_img).load(function(){
							$(this).hide();

							// Determine how to position the Fullsize Image into the center of the page.
							var new_offset = org_image.offset();
							img_w = this.width;
							img_h = this.height;

							// If the Image is bigger than the window, shrink it to fit in the window.
							aspect = img_w / img_h;
							if (((img_w + opts.leftOffset) + 32) > win_w) {
								img_w = (win_w - opts.leftOffset) - 32;
								img_h = img_w / aspect;
							}
							if (((img_h + opts.topOffset) + 36) > win_h) {
								img_h = (win_h - opts.topOffset) - 36;
								img_w = img_h * aspect;
							}

							if (!$.support.opacity && parseInt($.browser.version.substr(0,1)) < "8") {
								var img_left = Math.round((((win_w - opts.leftOffset) - img_w) / 2) + scrollleft);
								var img_top = Math.round((((win_h - opts.topOffset) - img_h) / 2) + scrolltop);
							} else {
								var img_left = Math.round((((win_w + opts.leftOffset) - img_w) / 2) + scrollleft);
								var img_top = Math.round((((win_h + opts.topOffset) - img_h) / 2) + scrolltop);
							}
							if (img_left < 0) {
								img_left = 0;
							}
							if (img_top < 0) {
								img_top = 0;
							}

							$(this).css({"height": org_image.height() + "px", "width":org_image.width() + "px"});
							$("div.fullsize-loading").remove();
							var full_wrap = $("<div></div>").addClass("fullsize-wrapper").css({"display":"none", "margin-top":new_offset.top, "margin-left":new_offset.left});
							$(full_wrap).prepend(this);

							// If there is a 'Title' attribute on the Original Image, display the Title bar.
							if (img_title != "" || opts.forceTitleBar == true) {
								var full_close = $("<a></a>").addClass("fullsize-close");
								var full_title = $("<div></div>").addClass("fullsize-title").css({"max-width":img_w});
								var full_title_text = $("<div></div>").addClass("fullsize-title-text").text(img_title);
								$(full_title).prepend(full_close);
								$(full_title).prepend(full_title_text);
								$(full_wrap).prepend(full_title);
								$("body").prepend(full_wrap);
								if (img_top != 0) {
									img_top = img_top - 12;
								}
							} else {
								$(this).addClass("fullsize-close");
								$("body").prepend(full_wrap);
							}

							// Setup Animations
							$(this).fadeIn(opts.fadeInSpeed).animate({
								height: img_h,
								width: img_w
							}, {queue:false, duration:opts.zoomInSpeed});
							$(full_wrap).fadeIn(opts.fadeInSpeed).animate({
								width: img_w,
								marginTop: img_top,
								marginLeft: img_left
							}, {queue:false, duration:opts.zoomInSpeed});
			
							$(".fullsize-close").click(function(){
								closeFullsize(full_img, full_wrap, org_image, $(this));
							});

						}).attr("src",img_src).addClass("fullsize-image");

					});

					// This function is purposely pulled out of the Image Load function.
					// By doing so the Fullsize Image will now find the exact loacation of the Original Image 
					// when you click the Close button. This way the Fullsize Image will always go back to it's
					// original position, even if you resize the window, and the Original Image changes it's position.
					function closeFullsize(full_img, full_wrap, org_image, ele) {
						var offsets = org_image.offset();
						$(full_img).fadeOut(opts.fadeOutSpeed).animate({
							height: org_image.height(),
							width: org_image.width()
						}, {queue:false, duration:opts.zoomOutSpeed});

						$(full_wrap).fadeOut(opts.fadeOutSpeed).animate({
							width: org_image.width(),
							marginTop: offsets.top,
							marginLeft: offsets.left
						}, {queue:false, duration:opts.zoomOutSpeed, complete: function(){ele.remove();}});

						opts.end.call(this);
					}

				}
			}
		});
	}
})(jQuery);
