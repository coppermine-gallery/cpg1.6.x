/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
**********************************************/

/* Demo Note:  This demo uses a FileProgress class that handles the UI for displaying the file name and percent complete.
The FileProgress class is not part of SWFUpload.
*/

/* **********************
   Event Handlers
   These are my custom event handlers to make my
   web application behave the way I went when SWFUpload
   completes different tasks.  These aren't part of the SWFUpload
   package.  They are part of my application.  Without these none
   of the actions SWFUpload makes will show up in my application.
   ********************** */
function fileQueued(file) {
    try {
        // We will put the album id in post params of swfu object
        swfu.addPostParam('album', $("select[name='album']").val());
        var progress = new FileProgress(file, this.customSettings.progressTarget);
        progress.setStatus(js_vars.lang_upload_swf_php.status_pending);
        progress.toggleCancel(true, this);
    } catch (ex) {
        this.debug(ex);
    }

}

function fileQueueError(file, errorCode, message) {
    try {
        if (errorCode === SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED) {
            // Modified
            alert(js_vars.lang_upload_swf_php.queue_limit + "\n" + (message == 0 ? js_vars.lang_upload_swf_php.upload_limit_1 : sprintf(js_vars.lang_upload_swf_php.upload_limit_2, message)));
            return;
        }

        var progress = new FileProgress(file, this.customSettings.progressTarget);
        progress.setError();
        progress.toggleCancel(false);

        switch (errorCode) {
        case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
            progress.setStatus(js_vars.lang_upload_swf_php.status_too_big);
            // Below is the debug statement and we need not apply i18n to it
            this.debug("Error Code: File too big, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
            break;
        case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:
            progress.setStatus(js_vars.lang_upload_swf_php.status_zero_byte);
            this.debug("Error Code: Zero byte file, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
            break;
        case SWFUpload.QUEUE_ERROR.INVALID_FILETYPE:
            progress.setStatus(js_vars.lang_upload_swf_php.status_invalid_type);
            this.debug("Error Code: Invalid File Type, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
            break;
        default:
            if (file !== null) {
                progress.setStatus(js_vars.lang_upload_swf_php.status_unhandled);
            }
            this.debug("Error Code: " + errorCode + ", File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
            break;
        }
    } catch (ex) {
        this.debug(ex);
    }
}

function fileDialogComplete(numFilesSelected, numFilesQueued) {
    try {
        if (numFilesSelected > 0) {
            document.getElementById(this.customSettings.cancelButtonId).disabled = false;
        }
        
        /* I want auto start the upload and I can do that here */
        this.startUpload();
    } catch (ex)  {
        this.debug(ex);
    }
}

function uploadStart(file) {
    try {
        /* I don't want to do any file validation or anything,  I'll just update the UI and
        return true to indicate that the upload should start.
        It's important to update the UI here because in Linux no uploadProgress events are called. The best
        we can do is say we are uploading.
         */
        var progress = new FileProgress(file, this.customSettings.progressTarget);
        progress.setStatus(js_vars.lang_upload_swf_php.status_uploading);
        progress.toggleCancel(true, this);
    }
    catch (ex) {}
    
    return true;
}

function uploadProgress(file, bytesLoaded, bytesTotal) {
    try {
        var percent = Math.ceil((bytesLoaded / bytesTotal) * 100);

        var progress = new FileProgress(file, this.customSettings.progressTarget);
        progress.setProgress(percent);
        progress.setStatus(js_vars.lang_upload_swf_php.status_uploading);
    } catch (ex) {
        this.debug(ex);
    }
}

function uploadSuccess(file, serverData) {
    try {
        var progress = new FileProgress(file, this.customSettings.progressTarget);
        if (serverData.substring(0, 7) == 'success') {
            // We have a successful upload. Mark the flag accordingly.
            notify_upload = true;
            
            progress.setComplete();
            progress.setStatus(js_vars.lang_upload_swf_php.status_complete);
            // Add
            $('#upload_count').text(1 * $('#upload_count').text() + 1);
            addImage(js_vars.site_url + '/' + serverData.substring(9));
        } else {
            progress.setError();
            progress.setStatus(js_vars.lang_upload_swf_php.status_failed);
            // First check if we have '|' character in serverData or not
            if (serverData.indexOf('|') != -1) {
                var resArr = serverData.split('|');
                alert(resArr[1]);
                if (resArr[2] == 1) {
                    // Stop further uploading. Something critical happened
                    swfu.cancelQueue();
                }
            } else {
                // If there is no | character then it means something went wrong on server side
                // Alert the returned serverData (which will usually be some php error) as it is
                alert(strip_tags(serverData));
            }
        }
        progress.toggleCancel(false);
        // If we have more than one uploads then enable to continue button, show the admin approval message and disable the selection of another album
        if (1 * $('#upload_count').text() > 0) {
            $('#button_continue').show();

            if (serverData.substring(7, 8) == '1') {
                $('#admin_approval').slideDown();
            }

            var listbox_selected_value = $("select[name='album']").val();
            var listbox_selected_text = $("select[name='album'] :selected").text();
            $("select[name='album']").children().remove().end().append('<option value="' + listbox_selected_value + '" selected="selected">' + listbox_selected_text + '</option>');
        }
    } catch (ex) {
        this.debug(ex);
    }
}

function uploadError(file, errorCode, message) {
    try {
        var progress = new FileProgress(file, this.customSettings.progressTarget);
        progress.setError();
        progress.toggleCancel(false);

        switch (errorCode) {
        case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
            progress.setStatus(js_vars.lang_upload_swf_php.status_upload_error + message);
            this.debug("Error Code: HTTP Error, File name: " + file.name + ", Message: " + message);
            break;
        case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
            progress.setStatus(js_vars.lang_upload_swf_php.status_failed);
            this.debug("Error Code: Upload Failed, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
            break;
        case SWFUpload.UPLOAD_ERROR.IO_ERROR:
            progress.setStatus(js_vars.lang_upload_swf_php.status_server_error);
            this.debug("Error Code: IO Error, File name: " + file.name + ", Message: " + message);
            break;
        case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
            progress.setStatus(js_vars.lang_upload_swf_php.status_security_error);
            this.debug("Error Code: Security Error, File name: " + file.name + ", Message: " + message);
            break;
        case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
            progress.setStatus(js_vars.lang_upload_swf_php.status_upload_limit);
            this.debug("Error Code: Upload Limit Exceeded, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
            break;
        case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
            progress.setStatus(js_vars.lang_upload_swf_php.status_validation_failed);
            this.debug("Error Code: File Validation Failed, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
            break;
        case SWFUpload.UPLOAD_ERROR.FILE_CANCELLED:
            // If there aren't any files left (they were all cancelled) disable the cancel button
            if (this.getStats().files_queued === 0) {
                document.getElementById(this.customSettings.cancelButtonId).disabled = true;
            }
            progress.setStatus(js_vars.lang_upload_swf_php.status_cancelled);
            progress.setCancelled();
            break;
        case SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED:
            progress.setStatus(js_vars.lang_upload_swf_php.status_stopped);
            break;
        default:
            progress.setStatus(js_vars.lang_upload_swf_php.status_unhandled + ": " + errorCode);
            this.debug("Error Code: " + errorCode + ", File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
            break;
        }
    } catch (ex) {
        this.debug(ex);
    }
}

function uploadComplete(file) {
    if (this.getStats().files_queued === 0) {
        document.getElementById(this.customSettings.cancelButtonId).disabled = true;
        
        // Send notification request only if atleast one successful upload is there
        if (notify_upload) {
            $.post('notifyupload.php', {
                album: $("select[name='album']").val()
            });
            
            // Rest the variable as users can again try to upload without reloading page
            notify_upload = false;
        }
    }
}

// This event comes from the Queue Plugin
function queueComplete(numFilesUploaded) {
}


function addImage(src) {
    var newImg = document.createElement("img");
    newImg.style.margin = "5px";

    $('#uploadedThumbnails').append(newImg);
    $(newImg).fadeTo(1, 0);

    newImg.onload = function () {
        $(newImg).fadeTo(10000, 100);
    };
    newImg.src = src;
}

function swfUploadPreLoad() {
    var self = this;
    var loading = function () {
        $("#divLoadingContent").show();

        var longLoad = function () {
            $("#divLoadingContent").hide();
            $("#divLongLoading").show();
        };
        this.customSettings.loadingTimeout = setTimeout(function () {
                longLoad.call(self)
            },
            15 * 1000
        );
    };
    
    this.customSettings.loadingTimeout = setTimeout(function () {
            loading.call(self);
        },
        1*1000
    );
}
function swfUploadLoaded() {
    var self = this;
    clearTimeout(this.customSettings.loadingTimeout);
    $("#divLoadingContent").hide();
    $("#divLongLoading").hide();
    $("#divAlternateContent").hide();
    
    $("#button_cancel").click(function () { self.cancelQueue(); });
    
    // If some album is preselected then set browse button enabled
    if ($("select[name='album']").val()) {
        this.setButtonDisabled(false);
        // Set the button style to enabled
        this.setButtonTextStyle(button_enabled_style);
    }

}
   
function swfUploadLoadFailed() {
    clearTimeout(this.customSettings.loadingTimeout);
    $("#divLoadingContent").hide();
    $("#divLongLoading").hide();
    $("#divAlternateContent").show();
}

function swfDebugHandler(message) {
    if (this.settings.debug) {
        var exceptionMessage, exceptionValues = [];

        // Check for an exception object and print it nicely
        if (typeof message === "object" && typeof message.name === "string" && typeof message.message === "string") {
                for (var key in message) {
                        if (message.hasOwnProperty(key)) {
                                exceptionValues.push(key + ": " + message[key]);
                        }
                }
                exceptionMessage = exceptionValues.join("\n") || "";
                exceptionValues = exceptionMessage.split("\n");
                exceptionMessage = "EXCEPTION: " + exceptionValues.join("\nEXCEPTION: ");
                swfWriteDebug(exceptionMessage);
        } else {
                swfWriteDebug(message);
        }
    }
}

function swfWriteDebug(message) {
    var console;
    try {
        console = $('textarea[name=debugtext]');
        console.append(message + "\n");
        console.scrollTop(console.attr('scrollHeight') - console.attr('clientHeight'));
    } catch (ex) {
        alert("Exception: " + ex.name + " Message: " + ex.message);
    }
}

/**
 * We are overriding core FileProgress' setError function here
 * This was done so that progress block does not disappear when error occurs.
 */
FileProgress.prototype.setError = function () {
    this.fileProgressElement.className = "progressContainer red";
    this.fileProgressElement.childNodes[3].className = "progressBarError";
    this.fileProgressElement.childNodes[3].style.width = "";

    var oSelf = this;
    /*
    this.setTimer(setTimeout(function () {
        oSelf.disappear();
    }, 5000));*/
};