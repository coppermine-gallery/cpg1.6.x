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

function confirmUserDelete() {
	if (document.cpgform2.confirmation.checked = true) {
	  check = confirm(js_vars.lang_really_delete);
	  if (check == true) {
		//document.cpgform2.submit();
	  } else {
		document.cpgform2.confirmation.checked = false;
		document.cpgform2.delete_submit.disabled = true;
		return false;
	  }
	}
}

