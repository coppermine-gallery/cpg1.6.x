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

addonload("show_section('expand_all_top')");
addonload("show_section('expand_all_bottom')");

function cpgReplaceTextFieldValue(fieldname, value) {
}  

function form_submit() {
    document.getElementById('cpg_form_error_message_enable_one').style.display = 'none';
    document.getElementById('cpg_form_error_message_not_available').style.display = 'none';
    document.getElementById('cpg_form_error_message_not_enabled').style.display = 'none';
    var enableCounter = 0;
    for (var i=0; i < document.cpgform.is_default.length; i++) {
         if (document.cpgform.is_default[i].checked){
            var chosenDefaultId = document.cpgform.is_default[i].value;
         }
         if (document.getElementById('enable_' + document.cpgform.is_default[i].value).checked == true) {
            enableCounter++;
         }
    }
    if (enableCounter == 0) {
        document.getElementById('cpg_form_error_message_enable_one').style.display = 'block';
        return false;
    }
    if (document.getElementById('available_' + chosenDefaultId).value == 'NO') {
        document.getElementById('cpg_form_error_message_not_available').style.display = 'block';
        return false;
    }
    if (document.getElementById('enable_' + chosenDefaultId).checked == false) {
        document.getElementById('cpg_form_error_message_not_enabled').style.display = 'block';
        return false;
    }
    return true;
}

function toggleExpandCollpaseButtons(action) 
{
    for (var i = 0; i <= document.getElementById('loopCounter').value; i++) {
        if (action == 'collapse') {
            document.getElementById('translator_' + i).style.display = 'none';
        } else {
            document.getElementById('translator_' + i).style.display = 'block';
        }
    }
}

