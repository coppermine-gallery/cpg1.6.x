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
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);

require('include/init.inc.php');

if (!USER_CAN_UPLOAD_PICTURES) {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

pageheader_mini($lang_upload_php['keywords_sel']);

$query = "SELECT keyword FROM {$CONFIG['TABLE_DICT']} ORDER BY keyword";
$result = cpg_db_query($query);

$keywords = array();

while ($row = mysql_fetch_assoc($result)) {
    $keywords[] = $row['keyword'];
}

$total = mysql_num_rows($result);

mysql_free_result($result);

if ($superCage->get->keyExists('id')) {
    $formFieldId = $superCage->get->getInt('id');
}

echo '<form name="keywordform" action="">'.$LINEBREAK;

starttable("100%", $lang_upload_php['keywords_sel'], 3);

$keyword_separator = $CONFIG['keyword_separator'];

if ($total > 0) {

    $options = '';
    
    foreach ($keywords as $keyword) {
        $options .= '              <option value="'.$keyword.'">'.$keyword.'</option>' . $LINEBREAK;
    }
    
    echo <<< EOT
    
    <script type="text/javascript">
    <!--
    var str;

    function CM_select(f)
    {
        new_keyword = f.value;
        var current_keywords = window.parent.document.getElementById('keywords{$formFieldId}').value;
        var substrings = current_keywords.split(new_keyword);
        if (substrings.length <= 1) {
                keyword_separator = (current_keywords.length == 0) ? '' : '$keyword_separator';
                window.parent.document.getElementById('keywords{$formFieldId}').value += keyword_separator + new_keyword;
        }

        return false;
    }

    //-->
    </script>

    <tr>
        <td class="tableb" align="left">
            <select name="keyword" size="20" onchange="CM_select(this);" class="listbox">
                $options
            </select>
        </td>
    </tr>
EOT;

} else {
    
    echo <<< EOT
    <tr>
        <td class="tablef" align="center">
            <a href="#" onclick="parent.parent.GB_hide();" class="admin_menu">{$lang_upload_php['no_keywords']}</a>
        </td>
    </tr>
EOT;
}

if (GALLERY_ADMIN_MODE) {
    echo <<< EOT
    <tr>
        <td class="tablef" align="center">
            <a href="keyword_create_dict.php?referer=keyword_select.php" class="admin_menu">{$lang_upload_php['regenerate_dictionary']}</a>
        </td>
    </tr>
EOT;
}

endtable();

echo '</form>';

pagefooter_mini();

?>