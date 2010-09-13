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
$(document).ready(function() {
    addSortOptions();
});

function addSortOptions(){
    var extra_att = '';
    var sortable = '';
    // Change the separator to '<br />' for vertical stacking
    var separator = '&nbsp;&bull;&nbsp;';
    sortable += '<span class="sortorder_options">';
    sortable += js_vars.sort_vars.sort_title;
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=ta" title="' + js_vars.sort_vars.sort_ta + '"><img src="images/ascending.png" width="9" height="9" border="0" alt="+" /></a>';
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=td" title="' + js_vars.sort_vars.sort_td + '"><img src="images/descending.png" width="9" height="9" border="0" alt="-" /></a>';
    sortable += '</span>';
    sortable += separator;
    
    sortable += '<span class="sortorder_options">';
    sortable += js_vars.sort_vars.sort_name;
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=na" title="' + js_vars.sort_vars.sort_na + '"><img src="images/ascending.png" width="9" height="9" border="0" alt="+" /></a>';
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=nd" title="' + js_vars.sort_vars.sort_nd + '"><img src="images/descending.png" width="9" height="9" border="0" alt="-" /></a>';
    sortable += '</span>';
    sortable += separator;
    
    sortable += '<span class="sortorder_options">';
    sortable += js_vars.sort_vars.sort_date;
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=da" title="' + js_vars.sort_vars.sort_da + '"><img src="images/ascending.png" width="9" height="9" border="0" alt="+" /></a>';
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=dd" title="' + js_vars.sort_vars.sort_dd + '"><img src="images/descending.png" width="9" height="9" border="0" alt="-" /></a>';
    sortable += '</span>';
    sortable += separator;
    
    sortable += '<span class="sortorder_options">';
    sortable += js_vars.sort_vars.sort_position;
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=pa" title="' + js_vars.sort_vars.sort_pa + '"><img src="images/ascending.png" width="9" height="9" border="0" alt="+" /></a>';
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=pd" title="' + js_vars.sort_vars.sort_pd + '"><img src="images/descending.png" width="9" height="9" border="0" alt="-" /></a>';
    sortable += '</span>';
    
    $('#sortorder_cell').append(sortable); 
}