function sgl_form_check (frm) {
	if (!frm.Filedata.value) {
		alert(js_vars['choose_file']);
		return false;
	}
	// if supported, check size
	if (window.FileReader) {
		file = frm.Filedata.files[0];
		if (file.size > js_vars['maxfilesize']) {
			alert(js_vars['too_large']);
			return false;
		}
	}
	if (!frm.album.value) {
		alert(js_vars['sel_album']);
		return false;
	}
	return true;
}

function textCounter(field, maxlimit) {
	if (field.value.length > maxlimit) // if too long...trim it!
	field.value = field.value.substring(0, maxlimit);
}
