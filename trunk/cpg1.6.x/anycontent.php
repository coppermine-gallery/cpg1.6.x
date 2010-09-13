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

/**
* This file gets included in index.php if you set the option on the configuration panel: "content of the main page".
* It can be used to display any content from any program, it is to be edited according to one's tastes.
*/

if (!defined('IN_COPPERMINE')) {
    die('Not in Coppermine...');
}

starttable("100%", $lang_index_php['welcome']);

echo <<< EOT
    <tr>
        <td class="tableb">
            Here is text in the "anycontent" block.<br />
            Edit the file "anycontent.php" in your Coppermine folder to change what is shown here.<br />
            To show this block on your gallery, go to the configuration panel under "Album List View", then "content of the main page".
        </td>
    </tr>

EOT;

endtable();

?>