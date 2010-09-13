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
define('SEARCH_PHP', true);

require('include/init.inc.php');

if (!USER_ID && $CONFIG['allow_unlogged_access'] == 0) {
    $redirect = 'login.php';
    header("Location: $redirect");
    exit();
}

$icon_array['search'] = cpg_fetch_icon('search', 2);

pageheader($lang_search_php['title']);
$text = '';
$text .= <<< EOT

<form method="get" action="thumbnails.php" name="searchcpg" id="cpgform3">
EOT;

$text .= starttable('100%', $icon_array['search'] . $lang_search_php['title'], 1, '', true);

$ip = GALLERY_ADMIN_MODE ? '
        <tr>
                <td>
                        <input type="checkbox" name="pic_raw_ip" class="checkbox" id="pic_raw_ip" /><label for="pic_raw_ip" class="clickable_option">'.$lang_search_php['ip_address'].'</label>
                </td>
        </tr>' :
        '<tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
        </tr>';

$customs = '';

foreach (range(1, 4) as $i) {

    $value = $CONFIG["user_field{$i}_name"];
    
    if (!$value) {
        continue;
    }

    $customs .= <<< EOT
                                        <tr>
                                                <td>
                                                    <input type="checkbox" name="user$i" id="user$i" class="checkbox" /><label for="user$i" class="clickable_option">$value</label>
                                                </td>
                                        </tr>

EOT;
}

$text .= <<< EOT
        <tr>
            <td class="tableb" align="center">
                <input type="text" style="width: 80%" name="search" maxlength="255" value="" class="textinput" />
				<button type="submit" class="button" name="submit" id="submit" value="{$lang_search_php['submit_search']}">{$icon_array['search']}{$lang_search_php['submit_search']}</button>
                <input type="hidden" name="album" value="search" />
            </td>
        </tr>
                <tr>
                        <td class="tableb">
                                <table align="center" width="60%">
                                        <tr>
                                                <td class="tableh2">{$lang_search_php['imgfields']}:</td>
                                                <td align="center" class="tableh2">{$lang_search_php['age']}:</td>
                                        </tr>
                                        <tr>
                                                <td><input type="checkbox" name="title" id="title" class="checkbox" checked="checked" /><label for="title" class="clickable_option">{$lang_common['title']}</label></td>
                                                <td align="right">{$lang_search_php['newer_than']} <input type="text" name="newer_than" size="3" maxlength="4" class="textinput" /> {$lang_search_php['days']}</td>
                                        </tr>
                                        <tr>
                                                <td><input type="checkbox" name="caption" id="caption" class="checkbox" checked="checked" /><label for="caption" class="clickable_option">{$lang_common['caption']}</label></td>
                                                <td align="right">{$lang_search_php['older_than']} <input type="text" name="older_than" size="3" maxlength="4" class="textinput" /> {$lang_search_php['days']}</td>
                                        </tr>
                                        <tr>
                                                <td><input type="checkbox" name="keywords" id="keywords" class="checkbox" checked="checked" /><label for="keywords" class="clickable_option">{$lang_common['keywords']}</label></td>
                                                <td>&nbsp;</td>

                                        </tr>
                                        <tr>
                                                <td><input type="checkbox" name="filename" id="filename" class="checkbox" /><label for="filename" class="clickable_option">{$lang_common['filename']}</label></td>
                                                <td align="right">
                                                                    <select name="type" class="listbox">
                                                                        <option value="AND" selected="selected">{$lang_search_php['all_words']}</option>
                                                                        <option value="OR">{$lang_search_php['any_words']}</option>
                                                                        <option value="regex">{$lang_search_php['regex']}</option>
                                                                    </select>
                                                </td>
                                        </tr>
$customs
$ip
                                        <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                        </tr>

                                        <tr>
                                                <td class="tableh2">{$lang_search_php['albcatfields']}:</td>
                                                <td class="tableh2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                                <td><input type="checkbox" name="album_title" id="album_title" class="checkbox" /><label for="album_title" class="clickable_option">{$lang_search_php['album_title']}</label></td>
                                                <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                                <td><input type="checkbox" name="category_title" id="category_title" class="checkbox" /><label for="category_title" class="clickable_option">{$lang_search_php['category_title']}</label></td>
                                                <td>&nbsp;</td>
                                        </tr>
                                </table>
                        </td>
                </tr>
EOT;


$text .= endtable(true);
$text .= '</form>';

$text = CPGPluginAPI::filter('search_form', $text);
echo $text;

if ($CONFIG['clickable_keyword_search'] != 0) {
    include('include/keyword.inc.php');
}

echo <<< EOT
      <script language="javascript" type="text/javascript">
      <!--
      document.searchcpg.search.focus();
      -->
      </script>
EOT;

pagefooter();

?>