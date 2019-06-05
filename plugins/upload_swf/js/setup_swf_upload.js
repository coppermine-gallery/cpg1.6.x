/**************************
  Coppermine Photo Gallery
 **************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

 ************************************
  Coppermine version: 1.6.03
  $HeadURL$
 ************************************/

var swfu;
var button_enabled_style = '.browse {font-family: Arial,Helvetica,sans-serif; color: #333333;}';
var button_disabled_style = '.browse {font-family: Arial,Helvetica,sans-serif; color: #CCCCCC;}';
var button_enabled_text = '<span class="browse">' + js_vars.lang_upload_swf_php.browse + '</span>';
var button_disabled_text = '<span class="browse"> ' + js_vars.lang_upload_swf_php.browse + ' </span>';	// must be (slightly) different than enabled text
var notify_upload = false; // Flag to be used for sending notification request

SWFUpload.onload = function () {
	var settings = {
		flash_url : "plugins/upload_swf/js/swfupload/swfupload.swf",
		upload_url: "uniload.php",		// Relative to current script
		post_params: {"timestamp" : js_vars.timestamp, "form_token" : js_vars.form_token, "method" : "upload_swf" },
		file_size_limit : js_vars.max_upl_size + " KB",
		file_types : "*.*",		//js_vars.allowed_file_types,
		file_types_description : js_vars.lang_upload_swf_php.all_files,
		custom_settings : {
			progressTarget : "upload_progress",
			cancelButtonId : "button_cancel"
		},
		debug: js_vars.debug,
		debug_handler: swfDebugHandler,

		// Button settings
		button_width: "130",
		button_height: "20",
		button_image_url: "plugins/upload_swf/images/browse_swf.png",
		button_placeholder_id: "browse_button_place_holder",
		button_text: button_disabled_text,
		button_text_style: button_disabled_style,
		button_text_left_padding: 30,
		// By default browse button will be disabled. It will get enabled when some album is chosen
		button_disabled : true,

		// The event handler functions are defined in handlers.js
		file_queued_handler : fileQueued,
		file_queue_error_handler : fileQueueError,
		//file_dialog_start_handler : fileDialogStart,
		file_dialog_complete_handler : fileDialogComplete,
		upload_start_handler : uploadStart,
		upload_progress_handler : uploadProgress,
		upload_error_handler : uploadError,
		upload_success_handler : uploadSuccess,
		upload_complete_handler : uploadComplete,
		queue_complete_handler : queueComplete,		// Queue plugin event
		swfupload_loaded_handler : swfUploadLoaded,
		// SWFObject settings
		minimum_flash_version : "9.0.28",
		swfupload_pre_load_handler : swfUploadPreLoad,
		swfupload_load_failed_handler : swfUploadLoadFailed
	};

	swfu = new SWFUpload(settings);

	// Bind a change event on album drop down
	$("select[name='swf_album']").change(function() {
		// Enable the browse button only if some album is selected
		// console.log(swfu);
		if ($(this).val()) {
			swfu.setButtonTextStyle(button_enabled_style);
			swfu.setButtonDisabled(false);
			swfu.setButtonText(button_enabled_text);
		} else {
			// If no album is selected then disable the browse button
			// Set the button style to disabled
			swfu.setButtonTextStyle(button_disabled_style);
			swfu.setButtonDisabled(true);
			swfu.setButtonText(button_disabled_text);
		}
	});
}

function continue_upload() {
	if (js_vars.user_id > 0 || js_vars.allow_guests_enter_file_details == 1) {
		window.location = js_vars.site_url + '/editpics.php?album=' + $("select[name='swf_album']").val() + '&newer_than=' + js_vars.timestamp;
	} else {
		window.location = js_vars.site_url + '/thumbnails.php?album=' + $("select[name='swf_album']").val();
	}
	return false;
}