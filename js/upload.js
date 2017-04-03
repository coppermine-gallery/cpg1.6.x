/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.03
  $HeadURL$
**********************************************/

$(document).ready(function() {
    $('#uploadMethod').change(function() {
        var param = 'method=' + $(this).val();
        if ($("select[name='album']").val()) {
            param += '&album=' + $("select[name='album']").val();
        }
        window.location.href = 'upload.php?' + param;
    });
});