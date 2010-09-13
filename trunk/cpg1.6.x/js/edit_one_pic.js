/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

function textCounter(field, maxlimit) {
    if (field.value.length > maxlimit) {
        // too long, so trim it
        field.value = field.value.substring(0, maxlimit);
    }
}


function checkPermissions(album, html) {
    var is_public  = ($('#public_albums').val().split(',').indexOf(album) != -1);
    var is_private = ($('#private_albums').val().split(',').indexOf(album) != -1);
    var public_need_approval   = (js_vars.public_need_approval == 1);
    var private_need_approval  = (js_vars.private_need_approval == 1);
    var users_cannot_edit_pics = (js_vars.public_can_edit_pics == 0);
    var pic_currently_public   = (js_vars.pic_currently_public == 1);
    var note = '';
    var linebreak = html ? '<br />' : "\n";
    if (is_public) {
        if (public_need_approval) {
            note = js_vars.note_approve_public;
        }
        if (users_cannot_edit_pics) {
            note += (note ? linebreak : '') + js_vars.note_edit_control;
        }
    } else if (is_private && private_need_approval && pic_currently_public) {
        note = js_vars.note_approve_private;
    }
    return note;
}


$(document).ready(function() {
    $('.elastic').elastic();
	$('#album').change(function() {
        var sel_album = $(this).val();
        var note = checkPermissions(sel_album, true);
        $('#note_permissions').html(note)
        if (note) {
            $('#wrapper_permissions').fadeIn('slow');
        } else {
            $('#wrapper_permissions').hide();            
        }
    });
    $('#cpgform_editonepic').submit(function() {
        var sel_album = $('#album').val();
        var note = checkPermissions(sel_album, false);
        if (note) {
            return confirm(note + "\n\n" + js_vars.confirm_move);
        }
        return true;
    });
});