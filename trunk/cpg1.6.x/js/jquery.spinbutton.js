/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

/* 
 * Spinbox plugin for jQuery
 * http://www.softwareunity.com/jquery/JQuerySpinBtn/
 *
 * Adds bells and whistles to any ordinary textbox to
 * make it look and feel like a SpinBox Control.
 *
 * Copyright (c) 2006-2010 Software Unity Ltd
 * Dual licensed under the MIT and GPL licenses:
 * http://www.softwareunity.com/jquery/MIT-LICENSE.txt
 * http://www.softwareunity.com/jquery/GPL-LICENSE.txt
 *
 * Originally written by George Adamson, Software Unity (george.jquery@softwareunity.com) August 2006.
 * Modifications made by Mark Gibson, (mgibson@designlinks.net) September 2006.
 * Rewritten and enhanced by George Adamson, Software Unity (george.jquery@softwareunity.com) October 2009.
 *
 * Tested in IE6, Opera9, Firefox 3.5.3
 * v1.0  11 Aug 2006 - George Adamson	- First release
 * v1.1     Aug 2006 - George Adamson	- Minor enhancements
 * v1.2  27 Sep 2006 - Mark Gibson		- Major enhancements
 * v1.3a 28 Sep 2006 - George Adamson	- Minor enhancements
 * v2.0	 20 Oct 2009 - George Adamson	- Major refactor with breaking changes to options.
 
 Sample usage:
 
	// Create group of settings to initialise spinbutton(s). (Optional)
	var myOptions = {
		min: 0,							// Set lower limit or null for no limit.
		max: 100,						// Set upper limit or null for no limit.
		step: 0.5,						// Set increment size.
		spinboxClass: "mySpinBoxClass",	// CSS class to style the spinbutton. (Class also specifies url of the up/down button image.)
		upClass: "mySpinUpClass",		// CSS class for style when mouse over up button.
		downClass: "mySpinDnClass"		// CSS class for style when mouse over down button.
	}
 
	jQuery(document).ready(function($){

		// Initialise INPUT elements as SpinBoxes: (passing options if desired)
		$("INPUT.spinbox").spinbox(myOptions);

	});
 
 */

(function($){

$.fn.spinbox = function(options){

	// Tidy up when spinbox('destroy') is called:
	if( options && typeof(options)==="String" && options==="destroy" )
		return this.unbind(".spinbox")
			.removeClass(options.spinboxClass)
			.removeClass(options.upClass).removeClass(options.downClass)
			.removeClass(options.upHoverClass).removeClass(options.downHoverClass)
			.removeData("spinboxMin").removeData("spinboxMax").removeData("spinboxReset")
			.removeData("spinboxStep").removeData("spinboxBigStep")
	;


	// Apply specified options or defaults:
	var undefined;		
	options = $.extend( {}, $.fn.spinbox.defaults, options );


	// Store min, max & reset values for each element: (Reset defaults to element's initial value if option undefined)
	this.each(function(){

		var $box	= $(this),
			min		= classData( "spinboxMin", this ),
			max		= classData( "spinboxMax", this ),
			step	= classData( "spinboxStep", this ),
			bigStep	= classData( "spinboxBigStep", this ),
			reset	= classData( "spinboxReset", this ),
			scale	= classData( "spinboxScale", this );	// AKA: Number of decimal places.

		if( min===undefined )	min		= firstNum( $box.attr("min"), options.min );
		if( max===undefined )	max		= firstNum( $box.attr("max"), options.max );
		if( !step )				step	= firstNum( $box.attr("step"), options.step );
		if( !bigStep )			bigStep	= firstNum( $box.attr("bigStep"), options.bigStep );
		if( reset===undefined )	reset	= firstNum( options.reset, $box.val(), min, max );
		if( scale===undefined )	scale	= $box.data("spinboxScale"); scale = ( scale || isNum(scale) ) ? scale : options.scale;

		// When scale option is true, auto derive the number of decimalPlaces to round to:
		if( scale === true ) scale = ( step.toString().split(".")[1] || "" ).length;

		$box.data( "spinboxMin", min );
		$box.data( "spinboxMax", max );
		$box.data( "spinboxStep", step );
		$box.data( "spinboxBigStep", bigStep );
		$box.data( "spinboxReset", reset );
		$box.data( "spinboxScale", scale );

	});


	return this.each(function(){

		// Flags used while mouse is being moved or pressed:
		var hoverUp, hoverDown, delayId, repeatId;
		var $box = $(this);

		// Bind event handlers for the spinbox:
		$box.bind("mousemove.spinbox",function(e){

			// Change css class when mouse is over an up/down button:
			var $box	= $(this);			
			var offset	= $box.offset();		// Calculate element left & top;
			var middle	= $box.height() / 2;	// Calculate midpoint between top and bottom of element;
			var hover	= ( e.pageX > offset.left + $box.width() - options.buttonWidth );
			hoverUp		= hover && ( e.pageY <= offset.top + middle );
			hoverDown	= hover && ( e.pageY >  offset.top + middle );

			$box.toggleClass( options.upHoverClass, hoverUp )
				.toggleClass( options.downHoverClass, hoverDown );
			// TODO: Stop autorepeat when mouse moves away from button?

		})

		.bind("mouseout.spinbox",function(){

			// Reset up/down buttons to their normal state when mouse moves away:
			stopAutorepeat();
			$(this).removeClass( [ options.upClass, options.downClass, options.upHoverClass, options.downHoverClass ].join(" ") );
			hoverUp = hoverDown = null;

		})

		.bind("mousedown.spinbox",function(e){

			// Update the spinbox value and set up autorepeat to start after a short delay:
			if( hoverUp || hoverDown ){

				$(this).toggleClass( options.upClass, hoverUp ).toggleClass( options.downClass, hoverDown );
				adjustValue.apply( this, [e] );
				startAutorepeat(this,e);

			};
		})

		.bind("mouseup.spinbox", function(e){
			stopAutorepeat();
			$(this).removeClass(options.upClass).removeClass(options.downClass);
		})

		//.bind("dblclick", function(e) {
		//	if ($.browser.msie)
		//		adjustValue.apply( this, [e, options.step, 1] );
		//})

		.bind("keydown.spinbox",function(e){

			// Filter key press by allowable options.keys if specified:
			if( !options.keys ||
				$.grep(options.keys, function(key){
					return key === e.keyCode || ( key instanceof RegExp && key.test( String.fromCharCode(e.keyCode) ) );
				}).length ){

				// Define arry key codes and decide whether to use options.bigStep when Shift is pressed:
				var $box	= $(this);
				var key		= { up:38, down:40, pageUp:33, pageDown:34 };
				var bigStep	= $box.data("spinboxBigStep");
				var step	= e.shiftKey ? bigStep : $box.data("spinboxStep");

				// Respond to up/down arrow keys and pageUp/pageDown:
				switch(e.keyCode){
					case key.up: adjustValue.apply( this, [e, step, 1] );  break;
					case key.down: adjustValue.apply( this, [e, step, -1] ); break;
					case key.pageUp: adjustValue.apply( this, [e, bigStep, 1] );  break;
					case key.pageDown: adjustValue.apply( this, [e, bigStep, -1] ); break;
				};
			}
			else
				// Cancel event if keys filter was specified but pressed key is not on the list:
				return !options.keys;
		})

		.bind("change.spinbox", function(e){
			adjustValue.apply( this, [e,0] );
		})

		.addClass(options.spinboxClass);



		// React to mousewheel if desired:
		if( options.mousewheel ){

			$(this).bind("mousewheel.spinbox DOMMouseScroll.spinbox", function(e){

				var step = e.shiftKey ? $(this).data("spinboxBigStep") : $(this).data("spinboxStep");

				// Respond to mouse wheel: (Allow for IE/Opera e.wheelDelta and W3C e.detail)
				if ( e.detail < 0 || e.wheelDelta >= 120 )
					adjustValue.apply( this, [e, step, 1] );
				else if ( e.detail > 0 || e.wheelDelta <= -120 )
					adjustValue.apply( this, [e, step, -1] );

				return false;
			});

		}


		// Initialise the current value, ensuring it is within min/max etc:
		adjustValue.apply( this, [$.Event(),0] );



		// Helper called in response to click or mousewheel etc to apply step change:
		function adjustValue(e,step,direction){

			var $box	= $(this); if( options.ignore && $box.is(options.ignore) ) return;
			step		= firstNum( step, $box.data("spinboxStep"), 1 );
			direction	= direction || (hoverDown ? -1 : 1);
			var oldVal	= $box.val();
			var val		= firstNum( oldVal, $box.data("spinboxReset"), 0 );
			var min		= firstNum( $box.data("spinboxMin") );
			var max		= firstNum( $box.data("spinboxMax") );
			var data	= [val,step,min,max,direction,oldVal,options];

			if( direction > 0 ) val = options.increment.apply( this,data ); else
			if( direction < 0 ) val = options.decrement.apply( this,data );
			if( isNum($box.data("spinboxScale")) && options.round ) val = options.round(val,$box.data("spinboxScale"));
			if( isNum(min) ) val = Math.max(val,min);
			if( isNum(max) ) val = Math.min(val,max);

			var data	= [val,step,min,max,direction,oldVal,options];
			if( val != oldVal && $box.triggerHandler("beforeSpin",data) !== false ){
				$box.val(val);
				if( options.change ) $box.trigger("change",data);
				$box.triggerHandler("spin",data);
			};
		};


		// Helper to begin autorepeat when mouse is held down:
		function startAutorepeat(elem,e){
			stopAutorepeat();
			// Start timer for initial delay:
			delayId = window.setTimeout(function(){
				adjustValue.apply( elem, [e] );
				// Start timer for repeating:
				repeatId = window.setInterval(function(){
					adjustValue.apply( elem, [e] );
				},options.repeat);
			},options.delay);
		};

		// Helper to end autorepeat when mouse is released:
		function stopAutorepeat(){
			window.clearTimeout(delayId);
			window.clearInterval(repeatId);
		};

	});

};



// Helper functions:

	// More reliable alternative to isNaN and isFinite:
	function isNum(num){
		return !isNaN(parseFloat(num))
	}

	// Helper to return the first parameter that is a valid number:
	function firstNum(args){
		for( var i=0; i<arguments.length; i++ ){
			if( isNum(arguments[i]) ) return Number( parseFloat(arguments[i]) );
		};
		return;
	};

	// Helper to extract settings stored in css class attribute string: (Eg: when class="spinbox spinboxStep0.5")
	function classData(attr,elem){

		var classes	= $(elem||this).attr("class"),
			match	= new RegExp( "(\\b" + attr + ")(\\S*)" ).exec(classes),
			lookupBoolean = { "true":true, "True":true, "false":false, "False":false };

		// Convert "True" or "False" string to boolean:
		if( match && match.length >= 3 && lookupBoolean[match[3]] !== undefined )
			match[3] = lookupBoolean[ match[3] ];

		return	!match ? undefined :			// attr not found in class string.
				match.length >= 3 ? match[2] :	// Specific value.
				null;							// attr specified but value deliberately blank.
	};





$.fn.spinbox.defaults = {
	min				: 0,						// Lower limit or null.
	max				: null,						// Upper limit or null.
	step			: 1,						// Size of standard increment.
	bigStep			: 10,						// Size of increment when Shift key is held down or when pageUp/pagedown is pressed.
	keys			: [ /[0-9]/,9,13,8,46,33,34,37,38,39,40,109,188,190 ],	// Array of regular expressions and/or char codes to restrict key input. Default: 0-9, Tab, Enter, Backspace, Delete, PageUp, PageDown, Left, Up, Right, Down, Minus, Comma, Dot.
	ignore			: "[readonly],[disabled]",	// Spinbox will not respond on elements matching this CSS selector.
	spinboxClass	: 'spinbox-active',			// Added to element when spinbox is initialised. Typically used to apply button image through css.
	upClass			: 'spinbox-up',				// Added to element while mouse is depressed on the Up button.
	downClass		: 'spinbox-down',			// Added to element while mouse is depressed on the Down button.
	upHoverClass	: 'spinbox-up-hover',		// Added to element while mouse is over the Up button.
	downHoverClass	: 'spinbox-down-hover',		// Added to element while mouse is over the Down button.
	mousewheel		: true,						// When true, spinbox will react to mousehweel.
	change			: true,						// When true, spinbox will trigger change event as it spins. (Otherwise change event is fired in the same ways as any normal textbox)
	increment		: function(val,step,min,max,options){ return val + step; },	// Custom function to calculate the value increment.
	decrement		: function(val,step,min,max,options){ return val - step; },	// Custom function to calculate the value decrement.
	reset			: null,						// Value used when element value is invalid. Specify null to default to element's initial value;
	delay			: 500,						// Initial delay before auto-repeat when mouse button held down. (Milliseconds)
	repeat			: 100,						// Interval between auto-repeats when mouse button held down. (Milliseconds)
	buttonWidth		: 20,						// Width of the button sprite image (so we can decide when mouse is over it).
	scale			: true,						// Specify number of DP, or true to auto derive from options.step (Eg: when step is 0.125 then DP will be 3)
	round			: function round(num,dp) {	// Specify your own decimalPlaces rounding function if you don't like this default one.
		return Math.round( num * Math.pow(10,dp) ) / Math.pow(10,dp);
	}
};

})(jQuery);