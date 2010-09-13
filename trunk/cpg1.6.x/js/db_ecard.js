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

function check(state){
    jQuery.each($("input[name='eid[]']"), function(){
        $(this).attr('checked', state);
    });
}

function agreesubmit(){
    $("input[type='submit'][name='delete']").attr('disabled', ($('#agreecheck').attr('checked')) ? false : true);
}

function defaultagree(){
    if ($('#agreecheck').attr('checked'))
        return true;
    else{
        alert(js_vars.ecards_delete_confirm);
        return false;
    }
}