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

function checkFormSubmit()
{
	document.catsortconfig.submit()
}

function ChangeThumb(index)
{
        document.images.Thumb.src = Pic[index]
}

function confirmDel(catName)
{
    return confirm(js_vars.lang_confirm_delete + " (" + catName + ") ?");
}

function build(target, category, thiscat)
{
    if (target.length > 1) {
        return;
    }
    pos = target.options[0];
    source = document.getElementById('build_source');
    var oListFragment = document.createDocumentFragment();
    for (var i = 0; i < source.length; i++){
        option = source.options[i];
        if (option.value == thiscat) {
            continue;
        } else if (option.value == category){
            target.insertBefore(oListFragment, target.options[0]);
            var oListFragment = document.createDocumentFragment();
            target.selectedIndex = i;
        } else {
            child = option.cloneNode(true);
            child.value = option.value;
            child.text = option.text;
            oListFragment.appendChild(child);
        }
    }
    target.appendChild(oListFragment);
    target.focus();
}

function setbuild(obj, cid, thiscat)
{
    var func = function () { build(obj, cid, thiscat) }
    
    if (typeof(document.onbeforeactivate) == 'undefined') {
        obj.onfocus = func;
    } else {
        obj.onbeforeactivate = func;
    }
}

function updateParent(obj, cid)
{
    if (obj.options[obj.selectedIndex].value) {
        window.location.href = 'catmgr.php?op=setparent&cid=' + cid + '&parent=' + obj.options[obj.selectedIndex].value + '&form_token=' + js_vars.form_token + '&timestamp=' + js_vars.timestamp;
    }
}
	