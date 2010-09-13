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

Date.format = 'yyyy-mm-dd';
$(function()
{
    $('.date-pick').datePicker()
    $('.date-pick').dpSetPosition($.dpConst.POS_TOP, $.dpConst.POS_RIGHT);

});

$(document).ready(function() {
    $('#submit_lookup').hide();
    $('.formFieldWarning').hide();
})

function checkBanFormSubmit() {
    $('.formFieldWarning').hide();
    var errors = 0;
    // Loop through the email fields and check for validity --- start
    $.each($('.email_field'), function(i,v) {
        if($(v).val() != '' && $(v).val().search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1) {
            $('#'+ v.id +'_warning').show();
            errors++;
        }
    });
    // Loop through the email fields and check for validity --- end
    // Loop through the ip address fields and check for validity --- start
    $.each($('.ip_field'), function(i,v) {
        if($(v).val() != '' && $(v).val().search(/^([1-9][0-9]{0,2})+\.([1-9][0-9]{0,2})+\.([1-9][0-9]{0,2})+\.([1-9][0-9]{0,2})+$/) == -1) {
            $('#'+ v.id +'_warning').show();
            errors++;
        }
    });
    // Loop through the ip address fields and check for validity --- end
    // Loop through the date fields and check for validity --- start
    $.each($('.date-pick'), function(i,v) {
        if($(v).val() != '' && $(v).val().search(/^\d{4}\-\d{2}\-\d{2}$/) == -1) {
            $('#'+ v.id +'_warning').show();
            errors++;
        }
    });
    // Loop through the date fields and check for validity --- end
    if (errors != 0) {
        $('#form_not_submit_top').show();
        $('#form_not_submit_bottom').show();
        return false;
    } else {
        return true;
    }
}


