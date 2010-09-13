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
    if (field.value.length > maxlimit) // if too long...trim it!
        field.value = field.value.substring(0, maxlimit);
}

function selectAll(d,box) {
    var f = document.editForm;
    for (i = 0; i < f.length; i++) {
        if (f[i].type == "checkbox" && f[i].name.indexOf(box) >= 0) {
            if (d.checked) {
                f[i].checked = true;
            } else {
                f[i].checked = false;
            }
        }
    }
}