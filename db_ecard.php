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
define('DB_ECARD_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

// get the url vars
function cpgGetUrlVars($exception)
{
    global $CPG_PHP_SELF, $eid;
    
    $cpgGetUrl = $CPG_PHP_SELF . '?';
    
    foreach ($eid as $key => $value) {
        if ($key != $exception) {
            $cpgGetUrl .= $key . '=' . $value . '&';
        }
    }
    
    return $cpgGetUrl;
}

if ($superCage->get->keyExists('sort')) {
    $sort = $superCage->get->getAlpha('sort');
} elseif ($superCage->post->keyExists('sort')) {
    $sort = $superCage->post->getAlpha('sort');
} else {
    $sort = '';
}

if ($superCage->get->keyExists('start')) {
    $start = $superCage->get->getInt('start');
} elseif ($superCage->post->KeyExists('start')) {
    $start = $superCage->post->getInt('start');
} else {
    $start= '';
}

if ($superCage->get->keyExists('count')) {
    $count = $superCage->get->getInt('count');
} elseif ($superCage->post->keyExists('count')) {
    $count = $superCage->post->getInt('count');
} else {
    $count = '';
}

//set default values
$selectOptions = array(25, 50, 75, 100);
$sortBy = 'eid';
$sortDirection = 'DESC';
$sortText = $lang_db_ecard_php['ecard_by_date'];
$sortDirectionText = $lang_db_ecard_php['ecard_descending'];

$startFrom = ($start) ? $start : 0;
$countTo = ($count) ? $count : $selectOptions[0];

$tabOutput = '';

//delete selected ecards
if ($superCage->get->keyExists('eid')) {
    $eid = $superCage->get->getInt('eid');
} elseif ($superCage->post->keyExists('eid')) {
    $eid = $superCage->post->getInt('eid');
} else {
    $eid = array();
}

if ($eid) {
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    foreach ($eid as $key) {
        $query = "DELETE FROM {$CONFIG['TABLE_ECARDS']} WHERE eid = $key";
        cpg_db_query($query);
    }
}

switch ($sort) {

case 'snd':
    $sortBy = 'sender_name';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_name'];
    break;

case 'sna':
    $sortBy = 'sender_name';
    $sortDirection = 'ASC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_name'];
    break;

case 'sed':
    $sortBy = 'sender_email';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_email'];
    break;
    
case 'sea':
    $sortBy = 'sender_email';
    $sortDirection = 'ASC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_email'];
    break;

case 'id':
    $sortBy = 'sender_ip';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_ip'];
    break;

case 'ia':
    $sortBy = 'sender_ip';
    $sortDirection = 'ASC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_ip'];
    break;

case 'rnd':
    $sortBy = 'recipient_name';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_recipient_name'];
    break;

case 'rna':
    $sortBy = 'recipient_name';
    $sortDirection = 'ASC';
    $sortText = $lang_db_ecard_php['ecard_by_recipient_name'];
    break;

case 'red':
    $sortBy = 'recipient_email';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_recipient_email'];
    break;

case 'rea':
    $sortBy = 'recipient_email';
    $sortDirection = 'ASC';
    $sortText = $lang_db_ecard_php['ecard_by_recipient_email'];
    break;

case 'da':
    $sortBy = 'date';
    $sortDirection = 'ASC';
    break;
}

if ($sortDirection == 'ASC') {
    $sortDirectionText = $lang_db_ecard_php['ecard_ascending'];
}

// determine the total number of entries
$result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_ECARDS']}");
list($totalEcards) = mysql_fetch_row($result);
mysql_free_result($result);

if ($totalEcards == 0) {
    cpg_die(INFORMATION, $lang_errors['ecards_empty'], __FILE__, __LINE__, false);
}

set_js_var('ecards_delete_confirm', $lang_db_ecard_php['ecards_delete_confirm']);
js_include('js/db_ecard.js');

pageheader($lang_db_ecard_php['title']);

$formTarget = cpgGetUrlVars('count');

print '<form method="post" name="ecardselect" id="cpgform" action="'.$formTarget.'" onsubmit="return defaultagree(this)">';

// create tabbed display (non-coppermine standard); maybe this could be changed later using the coppermine standard method

// step 1: calculate the number of pages
$pageTotal = ceil($totalEcards / $countTo);

// step 2: get the current url without 'start' and 'count'
$urlWithoutStart = $CPG_PHP_SELF."?";

foreach ($eid as $key => $value) {
    if ($key != 'start' && $key != 'count') {
        $urlWithoutStart .= $key . "=" . $value . "&";
    }
}

//step 3: loop through the pages & create the links
for ($page = 1; $page <= $pageTotal; $page++) {

    if ($page != $startFrom / $countTo + 1) {
        $tabOutput .= '<a href="' . $urlWithoutStart . 'start=' . ($page - 1) * $countTo . '&amp;count=' . $countTo . '">';
    } else {
        $currentPage = $page;
        $currentStart = ($page - 1) * $countTo + 1;
        $currentEnd = $currentStart + $countTo - 1;
        if ($currentEnd > $totalEcards) {
            $currentEnd = $totalEcards;
        }
    }
    
    $tabOutput .= $page;

    if ($page != $startFrom / $countTo + 1) {
        $tabOutput .= '</a>';
    }

    $tabOutput .= '&nbsp;';
}

$maxPage = $page - 1;

$help = '&nbsp;'.cpg_display_help('f=admin_menu.htm&amp;as=ecard_log&amp;ae=ecard_log_end&amp;top=1', '830', '400');

$tableHeader1 = $lang_db_ecard_php['title']." (".$lang_db_ecard_php['ecard_sorted']." ".$sortText.", ".$sortDirectionText.")" . $help;

starttable('100%', cpg_fetch_icon('ecard_review', 2) . $tableHeader1, 3);

print '<tr><td class="tableb">';
printf($lang_db_ecard_php['ecard_number'], $currentStart, $currentEnd, $totalEcards);
print '</td><td class="tableb">';

if ($maxPage > 1) {
    print $lang_db_ecard_php['ecard_goto_page'] . ' ';
    print $tabOutput;
}

print '</td><td align="right" class="tableb">';
print $lang_db_ecard_php['ecard_records_per_page'];
print '  <select onchange="if(this.options[this.selectedIndex].value) window.location.href=\''.$formTarget.'count=\'+this.options[this.selectedIndex].value;"  name="count" class="listbox">';

foreach ($selectOptions as $key) {
    print '   <option value="'.$key.'" ';
    if ($key == $countTo) {
        print 'selected="selected"';
    }
    print '>'.$key.'</option>';
}

print '  </select>';
print '</td></tr>';
endtable();

print '<br />';

$urlWithoutSort = cpgGetUrlVars('sort');

starttable('100%');

print <<< EOT
    <tr>
        <th class="tableh1" align="left" valign="bottom" rowspan="2"></th>
        <th class="tableh1" colspan="3" align="left" valign="bottom">{$lang_db_ecard_php['ecard_sender']}</th>
        <th class="tableh1" colspan="2" align="left" valign="bottom">{$lang_db_ecard_php['ecard_recipient']}</th>
        <th class="tableh1" rowspan="2" align="left" valign="bottom">{$lang_db_ecard_php['ecard_date']}
            <a href="{$urlWithoutSort}sort=da">
                <img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_ascending']}" />
            </a>
            &nbsp;
            <a href="{$urlWithoutSort}sort=dd">
                <img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_descending']}" />
            </a>
        </th>
        <th class="tableh1" rowspan="2" align="left" valign="bottom"></th>
    </tr>
    <tr>
        <th class="tableh1" align="left" valign="bottom">{$lang_db_ecard_php['ecard_name']}
            <a href="{$urlWithoutSort}sort=sna">
                <img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_ascending']}" />
            </a>
            &nbsp;
            <a href="{$urlWithoutSort}sort=snd">
                <img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_descending']}" />
            </a>
        </th>
        <th class="tableh1" align="left" valign="bottom">{$lang_db_ecard_php['ecard_email']}
            <a href="{$urlWithoutSort}sort=sea">
                <img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_ascending']}" />
            </a>
            &nbsp;
            <a href="{$urlWithoutSort}sort=sed">
                <img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_descending']}" />
            </a>
        </th>
        <th class="tableh1" align="left" valign="bottom">{$lang_db_ecard_php['ecard_ip']}
            <a href="{$urlWithoutSort}sort=ia">
                <img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_ascending']}" />
            </a>
            &nbsp;
            <a href="{$urlWithoutSort}sort=id">
                <img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_descending']}" />
            </a>
        </th>    
        <th class="tableh1" align="left" valign="bottom">{$lang_db_ecard_php['ecard_name']}
            <a href="{$urlWithoutSort}sort=rna">
                <img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_ascending']}" />
            </a>
            &nbsp;
            <a href="{$urlWithoutSort}sort=rnd">
                <img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_descending']}" />
            </a>
        </th>
        <th class="tableh1" align="left" valign="bottom">{$lang_db_ecard_php['ecard_email']}
            <a href="{$urlWithoutSort}sort=rea">
                <img src="images/ascending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_ascending']}" />
            </a>
            &nbsp;
            <a href="{$urlWithoutSort}sort=red">
                <img src="images/descending.png" width="9" height="9" border="0" alt="" title="{$lang_db_ecard_php['ecard_descending']}" />
            </a>
        </th>
    </tr>

EOT;

$tempClass = 'tableb';
$ecard_review_icon = cpg_fetch_icon('ecard_review', 0, $lang_db_ecard_php['ecard_display']);

$result = cpg_db_query("SELECT eid, sender_name, sender_email, recipient_name, recipient_email, link, date, sender_ip FROM {$CONFIG['TABLE_ECARDS']} ORDER BY $sortBy $sortDirection LIMIT $startFrom, $countTo");

while ($line = mysql_fetch_assoc($result)) {

    $date = strftime($lang_date['lastcom'], $line['date']);
	$line['ip_detail'] = CPGPluginAPI::filter('ip_information', $line['sender_ip']);
        
    echo <<< EOT
    <tr>
        <td class="$tempClass" align="center">
            <input type="checkbox" name="eid[]" value="{$line['eid']}" id="eidselector" class="checkbox" />
        </td>
        <td class="$tempClass">
            <span class="thumb_caption">{$line['sender_name']}</span>
        </td>
        <td class="$tempClass">
            <span class="thumb_caption">
                <a href="mailto:{$line['sender_email']}">{$line['sender_email']}</a>
            </span>
        </td>
        <td class="$tempClass">
            <span class="thumb_caption">
                <a href="http://ws.arin.net/cgi-bin/whois.pl?queryinput={$line['sender_ip']}">{$line['sender_ip']}</a>{$line['ip_detail']}
            </span>
        </td>
        <td class="$tempClass">
            <span class="thumb_caption">{$line['recipient_name']}</span>
        </td>
        <td class="$tempClass">
            <span class="thumb_caption">
                <a href="mailto:{$line['recipient_email']}">{$line['recipient_email']}</a>
            </span>
        </td>
        <td class="$tempClass">
            <span class="thumb_caption">$date</span>
        </td>
        <td class="$tempClass" align="center">
            <span class="thumb_caption">
                <a href="displayecard.php?data={$line['link']}">$ecard_review_icon</a>
            </span>
        </td>
    </tr>
EOT;

    if ($tempClass == 'tableb') {
        $tempClass = 'tableh2';
    } else {
        $tempClass = 'tableb';
    }
}

mysql_free_result($result);

echo <<< EOT

    <tr>
        <td class="tableh1" align="center"></td>
        <td colspan="3" class="tableh1">
            <input type="button" name="CheckAll" class="button" value="{$lang_db_ecard_php['check_all']}" onclick="check(true)" />
            &nbsp;
            <input type="button" name="UnCheckAll" class="button" value="{$lang_db_ecard_php['uncheck_all']}" onclick="check(false)" />
        </td>
        <td colspan="4" class="tableh1" align="left">
            <input type="submit" class="button" name="delete" value="{$lang_db_ecard_php['ecards_delete_selected']}" disabled="disabled" />
            &nbsp;
            <input name="agreecheck" id="agreecheck" type="checkbox" onclick="agreesubmit()" />
            <label for="agreecheck" class="clickable_option">{$lang_db_ecard_php['ecards_delete_sure']}</label>
        </td>
    </tr>

EOT;

endtable();

list($timestamp, $form_token) = getFormToken();
print '<input type="hidden" name="form_token" value="'.$form_token.'" />
<input type="hidden" name="timestamp" value="'.$timestamp.'" />
</form>' . $LINEBREAK;

pagefooter();

?>