<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2014 Coppermine Dev Team
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
define('KEYWORDMGR_PHP', true);
define('SEARCH_PHP', true);

require('include/init.inc.php');

//Die if not admin_mode
if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$icon_array['ok'] = cpg_fetch_icon('ok', 1);
list($timestamp, $form_token) = getFormToken();

pageheader($lang_keywordmgr_php['title']);

echo '<form name="keywordForm" id="cpgform" action="keywordmgr.php?page=changeword" method="post">';

starttable("100%", cpg_fetch_icon('keyword_mgr', 2) . $lang_keywordmgr_php['title'], 3);

echo <<<EOT
    <tr>
        <td class="tablef"><strong>{$lang_common['edit']}</strong></td>
        <td class="tablef"><strong>{$lang_common['delete']}</strong></td>
        <td class="tablef"><strong>{$lang_keywordmgr_php['search']}</strong></td>
    </tr>
EOT;

$page = '';  // initialize

if ($superCage->get->keyExists('page')) {
    $page = $superCage->get->getAlpha('page');
} elseif ($superCage->post->keyExists('page')) {
    $page = $superCage->post->getAlpha('page');
}

$keysep = $CONFIG['keyword_separator'];

switch ($page) {

default:
case 'display':

    $result = cpg_db_query("SELECT keywords FROM {$CONFIG['TABLE_PICTURES']}");

    if (!mysql_num_rows($result)) {
        cpg_die(ERROR, $lang_errors['non_exist_ap']);
    }

    $edit_icon   = cpg_fetch_icon('edit', 2);
    $delete_icon = cpg_fetch_icon('delete', 2);
    $search_icon = cpg_fetch_icon('search', 2);

    // Find unique keywords
    $total_array = array();
    $lowercase_word_array = array();

    $i = 0;

    while (list($keywords) = mysql_fetch_row($result)) {

        $array = explode($keysep, html_entity_decode($keywords));

        foreach ($array as $word) {

            if ($word == '.' || $word == '' || $word == ' ' || $word == $keysep ) {
                continue;
            }

            $word_escaped    = htmlspecialchars($word);
            $word_param      = urlencode($word);
            $word_label      = addslashes($word_escaped);
            $lowercase_word  = addslashes(utf_strtolower($word_escaped));
            $confirm_delete  = sprintf($lang_keywordmgr_php['confirm_delete'], '&quot;' . $word_label . '&quot;');
            $title           = sprintf($lang_keywordmgr_php['keyword_del'], '&quot;' . $word_escaped . '&quot;');
            $search_link     = sprintf($lang_keywordmgr_php['keyword_test_search'], '&quot;' . $word_escaped . '&quot;');

            $word = <<<EOT

    <tr>
        <td class="tableb">
            <input type="radio" class="radio" name="keywordEdit" value="$lowercase_word" onclick="document.keywordForm.newword.value='$word_label'" id="keyword{$i}" />
            <label for="keyword{$i}" class="clickable_option" title="{$lang_common['edit']} &quot;{$word_escaped}&quot;">
                 $edit_icon $word_escaped
            </label>
        </td>
        <td class="tableb">
            <a href="keywordmgr.php?page=delete&amp;remove=$word_param&amp;form_token={$form_token}&amp;timestamp={$timestamp}" onclick="return confirm('$confirm_delete')" title="$title">
                $delete_icon $word_escaped
            </a>
        </td>
        <td class="tableb">
            <a href="thumbnails.php?album=search&amp;keywords=on&amp;search=$word_param" target="_blank">
                $search_icon $search_link
            </a>
        </td>
    </tr>
EOT;
            if (!in_array($lowercase_word, $lowercase_word_array)) {
                $total_array[] = $word;
                $lowercase_word_array[] = $lowercase_word;
            }

            $i++;
        }
    }

    sort($total_array);

    echo implode("\n", $total_array);

    unset($total_array);

    echo <<< EOT

    <tr>
        <td colspan="5" class="tablef" align="center">
            <input type="text" name="newword" />
            <button type="submit" class="button" name="keyword_submit" value="{$lang_keywordmgr_php['change_keyword']}">{$icon_array['ok']}{$lang_keywordmgr_php['change_keyword']}</button>
        </td>
    </tr>

EOT;

    break;

case 'changeword':
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    if ($superCage->get->keyExists('keywordEdit')) {
        $request_keywordEdit = $superCage->get->getEscaped('keywordEdit');
    } elseif ($superCage->post->keyExists('keywordEdit')) {
        $request_keywordEdit = $superCage->post->getEscaped('keywordEdit');
    }

    if ($superCage->get->keyExists('newword')) {
        $request_newword = $superCage->get->getEscaped('newword');
    } elseif ($superCage->post->keyExists('newword')) {
        $request_newword = $superCage->post->getEscaped('newword');
    }

    if ($request_keywordEdit && $request_newword) {

        $keywordEdit = $request_keywordEdit;

        $query = "SELECT pid, keywords FROM {$CONFIG['TABLE_PICTURES']} WHERE CONCAT('$keysep', `keywords`, '$keysep') LIKE '%{$keysep}{$keywordEdit}{$keysep}%'";

        $result = cpg_db_query($query);

        while (list($id, $keywords) = mysql_fetch_row($result)) {

            $array_new = array();

            $array_old = explode($keysep, trim(html_entity_decode($keywords)));

            foreach ($array_old as $word) {

                // convert old to new if it's the same word
                if (utf_strtolower(Inspekt::getEscaped($word)) == utf_strtolower($keywordEdit)) {
                    echo $word = html_entity_decode($request_newword);
                } elseif (utf_strtolower(addslashes(Inspekt::getEscaped($word))) == utf_strtolower($keywordEdit)) { // needed to detect previously added keywords with spare slashes
                    $word = html_entity_decode($request_newword);
                }

                // rebuild array to reprocess it
                $array_new[] = Inspekt::getEscaped(trim($word));
            }

            $keywords = implode($keysep, $array_new);

            $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET keywords = '$keywords' WHERE pid = $id";
        }
    }

    $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET keywords = TRIM(REPLACE(keywords, '{$keysep}{$keysep}', '{$keysep}'))";
    $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET keywords = '' WHERE keywords = '{$keysep}'";

    foreach ($newquerys as $query) {
        $result = cpg_db_query($query);
    }

    header("Location: keywordmgr.php?page=display");

    break;

case 'delete':
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    if ($superCage->get->keyExists('remove')) {
        $remove = $superCage->get->getEscaped('remove');
    } elseif ($superCage->post->keyExists('remove')) {
        $remove = $superCage->post->getEscaped('remove');
    }

    $query = "SELECT pid, keywords FROM {$CONFIG['TABLE_PICTURES']} WHERE CONCAT('$keysep', keywords, '$keysep') LIKE '%{$keysep}{$remove}{$keysep}%'";

    $result = cpg_db_query($query);

    while (list($id, $keywords) = mysql_fetch_row($result)) {

        $array_new = array();
        $array_old = explode($keysep, trim(html_entity_decode($keywords)));

        foreach ($array_old as $word) {

            // convert old to new if it's the same word
            if (utf_strtolower(Inspekt::getEscaped($word)) == utf_strtolower($remove)) {
                $word = '';
            }

            // rebuild array to reprocess it
            $array_new[] = Inspekt::getEscaped(trim($word));
        }

        $keywords = implode($keysep, $array_new);

        $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET keywords = '$keywords' WHERE pid = $id";
    }

    $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET keywords = TRIM(REPLACE(keywords, '{$keysep}{$keysep}', '{$keysep}'))";
    $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET keywords = '' WHERE keywords = '{$keysep}'";

    foreach ($newquerys as $query) {
        $result = cpg_db_query($query);
    }

    header("Location: keywordmgr.php?page=display");

    break;
}

endtable();

echo "<input type=\"hidden\" name=\"form_token\" value=\"{$form_token}\" />
<input type=\"hidden\" name=\"timestamp\" value=\"{$timestamp}\" /></form>";

if ($CONFIG['clickable_keyword_search'] != 0) {
    include('include/keyword.inc.php');
}

pagefooter();

?>