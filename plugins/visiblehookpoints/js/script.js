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

/* code modified from ColdFusion's cfdump code */
function dBug_toggleRow(source) {
        target=(document.all) ? source.parentElement.cells[1] : source.parentNode.lastChild
        dBug_toggleTarget(target,dBug_toggleSource(source));
}

function dBug_toggleSource(source) {
        if (source.style.fontStyle=='italic') {
                source.style.fontStyle='normal';
                source.title='click to collapse';
                return 'open';
        } else {
                source.style.fontStyle='italic';
                source.title='click to expand';
                return 'closed';
        }
}

function dBug_toggleTarget(target,switchToState) {
        target.style.display=(switchToState=='open') ? '' : 'none';
}

function dBug_toggleTable(source) {
        var switchToState=dBug_toggleSource(source);
        if(document.all) {
                var table=source.parentElement.parentElement;
                for(var i=1;i<table.rows.length;i++) {
                        target=table.rows[i];
                        dBug_toggleTarget(target,switchToState);
                }
        }
        else {
                var table=source.parentNode.parentNode;
                for (var i=1;i<table.childNodes.length;i++) {
                        target=table.childNodes[i];
                        if(target.style) {
                                dBug_toggleTarget(target,switchToState);
                        }
                }
        }
}

function vhp_toggle_cell_parent(cell_id){
    $('.vhp_cell').slideUp('fast');
    $('#vhp_cell_'+cell_id).slideToggle('fast');
}

function vhp_toggle_cell_child(cell_id){
    $('#vhp_cell_'+cell_id).slideToggle('fast');
}




