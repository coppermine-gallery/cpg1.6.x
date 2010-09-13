<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
**********************************************/

// ------------------------------------------------------------------------- //
// This theme has had all redundant CORE items removed                           //
// ------------------------------------------------------------------------- //

define('THEME_HAS_RATING_GRAPHICS', 1);
define('THEME_HAS_PROGRESS_GRAPHICS', 1);

// HTML template for sys_menu
$template_sys_menu = <<<EOT
  <div class="topmenu">
          <table border="0" cellpadding="0" cellspacing="0">
                  <tr>
  {BUTTONS}
                  </tr>
          </table>
  </div>
EOT;

// HTML template for template sys_menu buttons
$template_sys_menu_button = <<<EOT
<!-- BEGIN {BLOCK_ID} -->
  <td><img src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
  <td><img src="themes/rainy_day/images/button1_r1_c1.gif" width="5" height="25" border="0" alt="" /></td>
  <td style="background-image:url(themes/rainy_day/images/button1_r1_c2.gif)">
          <a href="{HREF_TGT}" title="{HREF_TITLE}">{HREF_LNK}</a>
  </td>
  <td><img src="themes/rainy_day/images/button1_r1_c3.gif" width="5" height="25" border="0" alt="" /></td>
<!-- END {BLOCK_ID} -->
EOT;

?>