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

function ChangeThumb(index)
{
    if (index == -1) {
        index = 0;
    }
    
    document.images.Thumb.src = Pic[index];
}

var checkobj;

function agreesubmit(el){

    checkobj = el;
    
    if (document.all || document.getElementById) {
        for (i = 0; i < checkobj.form.length; i++) {  //hunt down submit button
            var tempobj = checkobj.form.elements[i];
            if (tempobj.type.toLowerCase() == "submit") {
                tempobj.disabled = !checkobj.checked;
                tempobj.style.cursor = (checkobj.checked ? 'pointer' : 'url(' + js_vars.cursor_stop + '),text');
            }
        }
    }
}

function defaultagree(el){

    if (!document.all && !document.getElementById) {
        if (window.checkobj && checkobj.checked) {
            return true;
        } else {
            alert(js_vars.reset_views_confirm);
            return false;
        }
    }
}

// When the document is ready i.e. on page load
$(document).ready(function() {
    // See if password_protect checkbox is checked
    if ($('#password_protect:checked').val() != null) {
        // If password protect checkbox is checked then show the password related fields
        $('#password_protect').parent().parent().next().show();
        $('#password_protect').parent().parent().next().next().show();
    } else {
        // Else hide the password related fields
        $('#password_protect').parent().parent().next().hide();
        $('#password_protect').parent().parent().next().next().hide();
    }
    
    // Bind the onclick event to password protect checkbox
    $('#password_protect').click(function() {
       // Toggle the display of password fields
        $('#password_protect').parent().parent().next().toggle();
        $('#password_protect').parent().parent().next().next().toggle();
    });
});
