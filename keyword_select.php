<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2021 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * keyword_select.php
 * @since  1.6.10
 */

define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);

require 'include/init.inc.php';

if (!USER_CAN_UPLOAD_PICTURES) {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

pageheader_mini($lang_upload_php['keywords_sel']);

$query = "SELECT keyword FROM {$CONFIG['TABLE_DICT']} ORDER BY keyword";
$result = cpg_db_query($query);

$keywords = array();

while ($row = $result->fetchAssoc()) {
    $keywords[] = $row['keyword'];
}

$total = $result->numRows(true);

$formFieldId = $superCage->get->keyExists('id') ? $superCage->get->getInt('id') : '';

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

//EOF