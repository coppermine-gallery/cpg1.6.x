/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2023 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * js/banning.js
 * @since  1.6.22
 */

Date.format = 'yyyy-mm-dd';
$(function()
{
    $('.date-pick').datePicker();
    $('.date-pick').dpSetPosition($.dpConst.POS_TOP, $.dpConst.POS_RIGHT);

});

$(document).ready(function() {
    $('#submit_lookup').hide();
    $('.formFieldWarning').hide();
});

function checkBanFormSubmit() {
    $('.formFieldWarning').hide();
    var errors = 0;
    // Loop through the email fields and check for validity --- start
    $.each($('.email_field'), function(i,v) {
        if ($(v).val() != '' && $(v).val().search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1) {
            $('#'+ v.id +'_warning').show();
            errors++;
        }
    });
    // Loop through the email fields and check for validity --- end
    // Loop through the ip address fields and check for validity --- start
    let ipv4_regex = /^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:\.(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/;
	let ipv6_regex = /^(?:(?:[a-fA-F\d]{1,4}:){7}(?:[a-fA-F\d]{1,4}|:)|(?:[a-fA-F\d]{1,4}:){6}(?:(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:\\.(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}|:[a-fA-F\d]{1,4}|:)|(?:[a-fA-F\d]{1,4}:){5}(?::(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:\\.(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}|(?::[a-fA-F\d]{1,4}){1,2}|:)|(?:[a-fA-F\d]{1,4}:){4}(?:(?::[a-fA-F\d]{1,4}){0,1}:(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:\\.(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}|(?::[a-fA-F\d]{1,4}){1,3}|:)|(?:[a-fA-F\d]{1,4}:){3}(?:(?::[a-fA-F\d]{1,4}){0,2}:(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:\\.(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}|(?::[a-fA-F\d]{1,4}){1,4}|:)|(?:[a-fA-F\d]{1,4}:){2}(?:(?::[a-fA-F\d]{1,4}){0,3}:(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:\\.(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}|(?::[a-fA-F\d]{1,4}){1,5}|:)|(?:[a-fA-F\d]{1,4}:){1}(?:(?::[a-fA-F\d]{1,4}){0,4}:(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:\\.(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}|(?::[a-fA-F\d]{1,4}){1,6}|:)|(?::(?:(?::[a-fA-F\d]{1,4}){0,5}:(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:\\.(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}|(?::[a-fA-F\d]{1,4}){1,7}|:)))(?:%[0-9a-zA-Z]{1,})?$/;
    let ipv64_regex = /^.*:(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:\.(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/;
    $.each($('.ip_field'), function(i,v) {
    	let ipv = $(v).val();
        if (ipv != '' && !ipv4_regex.test(ipv) && !ipv6_regex.test(ipv) && !ipv64_regex.test(ipv)) {
            $('#'+ v.id +'_warning').show();
            errors++;
        }
    });
    // Loop through the ip address fields and check for validity --- end
    // Loop through the date fields and check for validity --- start
    $.each($('.date-pick'), function(i,v) {
        if ($(v).val() != '' && $(v).val().search(/^\d{4}\-\d{2}\-\d{2}$/) == -1) {
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


