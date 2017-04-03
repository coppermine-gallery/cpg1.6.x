/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.03
  $HeadURL$
**********************************************/

function init_utils(){
	jQuery.each($("div[id$='_wrapper']"), function(){
		$(this).css('display', 'none');
	});
	jQuery.each($("input[type='radio'][name='action']"), function(){
		$(this).change(function(){
			jQuery.each($("input[type='radio'][name='action']"), function(){
				$('#' + this.getAttribute('id') + '_wrapper').css('display', (this.checked) ? 'block' : 'none');
			});
		});
	});
	jQuery.each($("input[type='checkbox'][class='clr-val']"), function(){
		$(this).change(function(){
			$(this).next().next().css('display', (this.checked) ? 'none' : 'inline-block');
		});
	});
}

addonload('init_utils()');