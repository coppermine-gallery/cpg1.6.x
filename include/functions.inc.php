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

/**
* get_meta_album_set()
*
* Generates a WHERE statement that reflects the meta album
* Incorporates restrictions based on visibility and album passwords
*
* @param integer $cat Category
* @return void
**/
// TODO: add in INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category
// only add when we are at the top level, cat == 0
function get_meta_album_set($cat)
{
    global $CONFIG, $lft, $rgt, $RESTRICTEDWHERE, $FORBIDDEN_SET_DATA, $CURRENT_ALBUM_KEYWORD, $CURRENT_CAT_DEPTH;
    if ($cat == USER_GAL_CAT) {
        $RESTRICTEDWHERE   = "WHERE (category > " . FIRST_USER_CAT;
        $CURRENT_CAT_DEPTH = -1;

    } elseif ($cat > FIRST_USER_CAT) {
        $RESTRICTEDWHERE   = "WHERE (category = $cat";
        $CURRENT_CAT_DEPTH = -1;

    } elseif ($cat > 0) {
        $result = cpg_db_query("SELECT rgt, lft, depth FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = $cat LIMIT 1");
        list($rgt, $lft, $CURRENT_CAT_DEPTH) = mysql_fetch_row($result);
        mysql_free_result($result);
        $RESTRICTEDWHERE = "INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS c2 ON c2.cid = category WHERE (c2.lft BETWEEN $lft AND $rgt";

        if (empty($CURRENT_ALBUM_KEYWORD)) {
            $result = cpg_db_query("SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE lft BETWEEN $lft AND $rgt");
            $categories = array();
            while($row = mysql_fetch_assoc($result)) {
                $categories[] = $row['cid'];
            }
            mysql_free_result($result);
            $categories = implode(', ', $categories);

            $result = cpg_db_query("SELECT keyword FROM {$CONFIG['TABLE_ALBUMS']} WHERE category IN ($categories)");
            if (mysql_num_rows($result) > 0) {
                $CURRENT_ALBUM_KEYWORD = array();
                while($row = mysql_fetch_assoc($result)) {
                    if(!empty($row['keyword'])) {
                        $CURRENT_ALBUM_KEYWORD[] = $row['keyword'];
                    }
                }
            }
            mysql_free_result($result);
        }

    } elseif ($cat < 0) {
        $RESTRICTEDWHERE = "WHERE (r.aid = " . -$cat;

    } else {
        $RESTRICTEDWHERE   = "WHERE (1";
        $CURRENT_CAT_DEPTH = 0;
    }

    if (!empty($CURRENT_ALBUM_KEYWORD)) {
        $RESTRICTEDWHERE .= ") AND (1";
        if(is_array($CURRENT_ALBUM_KEYWORD)) {
            foreach($CURRENT_ALBUM_KEYWORD as $keyword) {
                $RESTRICTEDWHERE .= " OR keywords like '%$keyword%'";
            }
        } else {
            $RESTRICTEDWHERE .= " OR keywords like '%$CURRENT_ALBUM_KEYWORD%'";
        }
    }
    $RESTRICTEDWHERE .= ')';
    if ($FORBIDDEN_SET_DATA) {
        $RESTRICTEDWHERE .= " AND r.aid NOT IN (" . implode(', ', $FORBIDDEN_SET_DATA) . ")";
    }
}


/**
 * user_get_profile()
 *
 * Decode the user profile contained in a cookie
 *
 **/

function user_get_profile()
{
    global $CONFIG, $USER;

    $superCage = Inspekt::makeSuperCage();

    /**
     * TODO: Use the md5 # to verify integrity of cookie string
     * At the time of installation we write a randomly generated secret salt in config.inc
     * This secret salt will be appended to the encoded string and the resulting md5 # of this string will
     * be appended to the encoded string with @ separator
     * e.g. $encoded_string_with_md5 = "asdfkhasdf987we89rfadfjhasdfklj@^@".md5("asdfkhasdf987we89rfadfjhasdfklj".$secret_salt)
     */
    if ($superCage->cookie->keyExists($CONFIG['cookie_name'].'_data')) {
        $USER = @unserialize(@base64_decode($superCage->cookie->getRaw($CONFIG['cookie_name'].'_data')));
        if (isset($USER['lang'])) {
            $USER['lang'] = strtr($USER['lang'], '$/\\:*?"\'<>|`', '____________');
        }
    }

    if (!isset($USER['ID']) || strlen($USER['ID']) != 32) {
        list($usec, $sec) = explode(' ', microtime());
        $seed             = (float) $sec + ((float) $usec * 100000);
        srand($seed);
        $USER = array('ID' => md5(uniqid(rand(), 1)));
    } else {
        $USER['ID'] = addslashes($USER['ID']);
    }

    if (!isset($USER['am'])) {
        $USER['am'] = 1;
    }
}

// Save the user profile in a cookie


/**
 * user_save_profile()
 *
 * Save the user profile in a cookie
 *
 **/

function user_save_profile()
{
    global $CONFIG, $USER;

    /**
     * TODO: Use the md5 # to verify integrity of cookie string
     * At the time of installation we write a randomly generated secret salt in config.inc
     * This secret salt will be appended to the encoded string and the resulting md5 # of this string will
     * be appended to the encoded string with @ separator
     * e.g. $encoded_string_with_md5 = "asdfkhasdf987we89rfadfjhasdfklj@^@".md5("asdfkhasdf987we89rfadfjhasdfklj".$secret_salt)
     */
    $data = base64_encode(serialize($USER));
    setcookie($CONFIG['cookie_name'].'_data', $data, time()+86400*30, $CONFIG['cookie_path']);
}

/**************************************************************************
   Database functions
 **************************************************************************/

// Connect to the database

/**
 * cpg_db_connect()
 *
 * Connect to the database
 **/

function cpg_db_connect()
{
    global $CONFIG;

    $result = @mysql_connect($CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass']);

    if (!$result) {
        return false;
    }

    if (!mysql_select_db($CONFIG['dbname'])) {
        return false;
    }

    if (!empty($CONFIG['dbcharset'])) {
        mysql_query("SET NAMES '{$CONFIG['dbcharset']}'", $result);
    }

    return $result;
}

// Perform a database query

/**
 * cpg_db_query()
 *
 * Perform a database query
 *
 * @param $query
 * @param integer $link_id
 * @return
 **/

function cpg_db_query($query, $use_link_id = 0)
{
    global $CONFIG, $query_stats, $queries;

    if ($use_link_id) {
        $link_id = $use_link_id;
    } else {
        $link_id = $CONFIG['LINK_ID'];
    }

    $query_start = cpgGetMicroTime();
    
    $result = mysql_query($query, $link_id);
    
    $query_end = cpgGetMicroTime();

    if (!isset($CONFIG['debug_mode']) || $CONFIG['debug_mode'] == 1 || $CONFIG['debug_mode'] == 2) {
        $trace = debug_backtrace();
        $last = $trace[0];
        $localfile = str_replace(realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..') . DIRECTORY_SEPARATOR , '', $last['file']);

        $duration      = round(($query_end - $query_start) * 1000);
        $query_stats[] = $duration;
        $queries[]     = "$query [$localfile:{$last['line']}] ({$duration} ms)";
    }

    if (!$result && !defined('UPDATE_PHP')) {
        $trace = debug_backtrace();
        $last = $trace[0];
        $localfile = str_replace(realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..') . DIRECTORY_SEPARATOR , '', $last['file']);
        cpg_db_error("While executing query '$query' in $localfile on line {$last['line']}", $link_id);
    }

    return $result;
}

// Error message if a query failed


/**
 * cpg_db_error()
 *
 * Error message if a query failed
 *
 * @param $the_error
 * @return
 **/

function cpg_db_error($the_error, $link_id)
{
    global $CONFIG, $lang_errors, $LINEBREAK;

    log_write("$the_error the following error was encountered: $LINEBREAK" . mysql_error($link_id), CPG_DATABASE_LOG);
    
    if ($CONFIG['debug_mode'] === '0' || ($CONFIG['debug_mode'] === '2' && !GALLERY_ADMIN_MODE)) {
        cpg_die(CRITICAL_ERROR, $lang_errors['database_query'], __FILE__, __LINE__);
    } else {
        $the_error .= $LINEBREAK . $LINEBREAK . 'mySQL error: ' . mysql_error($link_id) . $LINEBREAK;
        $out        = "<br />" . $lang_errors['database_query'] . ".<br /><br/>
                <form name=\"mysql\" id=\"mysql\"><textarea rows=\"8\" cols=\"60\">" . htmlspecialchars($the_error) . "</textarea></form>";
        cpg_die(CRITICAL_ERROR, $out, __FILE__, __LINE__);
    }
}

// Fetch all rows in an array

/**
 * cpg_db_fetch_rowset()
 *
 * Fetch all rows in an array
 *
 * @param $result
 * @return
 **/

function cpg_db_fetch_rowset($result)
{
    $rowset = array();

    while ( ($row = mysql_fetch_assoc($result)) ) {
        $rowset[] = $row;
    }

    return $rowset;
}

/**
 * cpg_db_fetch_row()
 *
 * Fetch row in an array
 *
 * @param $result
 * @return
 **/

function cpg_db_fetch_row($result)
{
    return mysql_fetch_assoc($result);
}

/**
 * cpg_db_last_insert_id()
 *
 * Get the last inserted id of a query
 *
 * @return integer $id
 **/

function cpg_db_last_insert_id()
{
    return mysql_insert_id();
}

/**************************************************************************
   Sanitization functions
 **************************************************************************/

/**
 * cpgSanitizeUserTextInput()
 *
 * Function to sanitize the data which cannot be directly sanitized with Inspekt
 *
 * @param string $string
 * @return string Return sanitized data
 */
function cpgSanitizeUserTextInput($string)
{
    //TODO: Add some sanitization code
    return $string;
}

/**************************************************************************
   Utilities functions
 **************************************************************************/

// Replacement for the die function

/**
 * cpg_die()
 *
 * Replacement for the die function
 *
 * @param $msg_code
 * @param $msg_text
 * @param $error_file
 * @param $error_line
 * @param boolean $output_buffer
 * @return
 **/

function cpg_die($msg_code, $msg_text,  $error_file, $error_line, $output_buffer = false)
{
    global $lang_common, $lang_errors, $CONFIG, $USER_DATA, $hdr_ip;

    // Three types of error levels: INFORMATION, ERROR, CRITICAL_ERROR.
    // There used to be a clumsy method for error mesages that didn't work well with i18n.
    // Let's add some more logic to this: try to get the translation
    // for the error type from the language file. If that fails, use the hard-coded
    // English string.

    // Record access denied messages to the log
    if ($msg_text == $lang_errors['access_denied'] && $CONFIG['log_mode'] != 0) {
        log_write("Denied privileged access to " . basename($error_file) . " by user {$USER_DATA['user_name']} at IP $hdr_ip", CPG_SECURITY_LOG);
    }
    
    // Record invalid form token messages to the log
    if ($msg_text == $lang_errors['invalid_form_token'] && $CONFIG['log_mode'] != 0) {
        log_write("Invalid form token encountered for " . basename($error_file) . " by user {$USER_DATA['user_name']} at IP $hdr_ip", CPG_SECURITY_LOG);
    }    
    
    if ($msg_code == INFORMATION) {
        //$msg_icon = 'info'; not used anymore?
        $css_class = 'cpg_message_info';
        if ($lang_common['information'] != '') {
            $msg_string = $lang_common['information'];
        } else {
            $msg_string = 'Information';
        }
    } elseif ($msg_code == ERROR) {
        //$msg_icon = 'warning'; not used anymore?
        $css_class = 'cpg_message_warning';
        if ($lang_errors['error'] != '') {
            $msg_string = $lang_errors['error'];
        } else {
            $msg_string = 'Error';
        }
    } elseif ($msg_code == CRITICAL_ERROR) {
        //$msg_icon = 'stop'; not used anymore?
        $css_class = 'cpg_message_error';
        if ($lang_errors['critical_error'] != '') {
            $msg_string = $lang_errors['critical_error'];
        } else {
            $msg_string = 'Critical error';
        }
    }

    // Simple output if theme file is not loaded
    if (!function_exists('pageheader')) {
        echo 'Fatal error :<br />'.$msg_text;
        exit;
    }

    $ob = ob_get_contents();

    if ($ob) {
        ob_end_clean();
    }

    theme_cpg_die($msg_code, $msg_text, $msg_string, $css_class, $error_file, $error_line, $output_buffer, $ob);
    exit;
}


// Display a localised date

/**
 * localised_date()
 *
 * Display a localised date
 *
 * @param integer $timestamp
 * @param $datefmt
 * @return
 **/

function localised_date($timestamp, $datefmt)
{
    global $lang_month, $lang_day_of_week;

    $timestamp = localised_timestamp($timestamp);

    $date = str_replace(array('%a', '%A'), $lang_day_of_week[(int)strftime('%w', $timestamp)], $datefmt);
    $date = str_replace(array('%b', '%B'), $lang_month[(int)strftime('%m', $timestamp)-1], $date);

    return strftime($date, $timestamp);
}

/**
 * localised_timestamp()
 *
 * Display a localised timestamp
 *
 * @return
 **/
function localised_timestamp($timestamp = -1)
{
    global $CONFIG;

    if ($timestamp == -1) {
        $timestamp = time();
    }

    $diff_to_GMT = date("O") / 100;

    $timestamp += ($CONFIG['time_offset'] - $diff_to_GMT) * 3600;

    return $timestamp;
}

// Function to create correct URLs for image name with space or exotic characters

/**
 * path2url()
 *
 * Function to create correct URLs for image name with space or exotic characters
 *
 * @param $path
 * @return
 **/

function path2url($path)
{
    return str_replace("%2F", "/", rawurlencode($path));
}

// Display a 'message box like' table

/**
 * msg_box()
 *
 * Display a 'message box like' table
 *
 * @param $title
 * @param $msg_text
 * @param string $button_text
 * @param string $button_link
 * @param string $width
 * @return
 **/

function msg_box($title, $msg_text, $button_text='', $button_link='', $type = 'info')
{
    if ($type == 'error') {
        $css_class = 'cpg_message_error';
    } elseif ($type == 'warning') {
        $css_class = 'cpg_message_warning';
    } elseif ($type == 'validation') {
        $css_class = 'cpg_message_validation';
    } elseif ($type == 'success') {
        $css_class = 'cpg_message_success';
    } else {
        $css_class = 'cpg_message_info';
    }
    // Call theme function to display message box
    theme_msg_box($title, $msg_text, $css_class, $button_text, $button_link);
}


/**
 * create_tabs()
 *
 * @param $items
 * @param $curr_page
 * @param $total_pages
 * @param $template
 * @return
 **/

function create_tabs($items, $curr_page, $total_pages, $template)
{
    return theme_create_tabs($items, $curr_page, $total_pages, $template);
}

/**
 * Rewritten by Nathan Codding - Feb 6, 2001. Taken from phpBB code
 * - Goes through the given string, and replaces xxxx://yyyy with an HTML <a> tag linking
 *         to that URL
 * - Goes through the given string, and replaces www.xxxx.yyyy[zzzz] with an HTML <a> tag linking
 *         to http://www.xxxx.yyyy[/zzzz]
 * - Goes through the given string, and replaces xxxx@yyyy with an HTML mailto: tag linking
 *                to that email address
 * - Only matches these 2 patterns either after a space, or at the beginning of a line
 *
 * Notes: the email one might get annoying - it's easy to make it more restrictive, though.. maybe
 * have it require something like xxxx@yyyy.zzzz or such. We'll see.
 */

/**
 * make_clickable()
 *
 * @param $text
 * @return
 **/

function make_clickable($text)
{
    $ret = ' '.$text;

    $ret = preg_replace("#([\n ])([a-z]+?)://([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+]+)#i", "\\1<a href=\"\\2://\\3\" rel=\"external\">\\2://\\3</a>", $ret);
    $ret = preg_replace("#([\n ])www\.([a-z0-9\-]+)\.([a-z0-9\-.\~]+)((?:/[a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+]*)?)#i", "\\1<a href=\"http://www.\\2.\\3\\4\" rel=\"external\">www.\\2.\\3\\4</a>", $ret);
    $ret = preg_replace("#([\n ])([a-z0-9\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)?[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $ret);

    return substr($ret, 1);
}

// Allow the use of a limited set of phpBB bb codes in albums and image descriptions
// Taken from phpBB code

/**
 * bb_decode()
 *
 * @param $text
 * @return
 **/

function bb_decode($text)
{
    $text = nl2br($text);

    static $bbcode_tpl   = array();
    static $patterns     = array();
    static $replacements = array();

    // First: If there isn't a "[" and a "]" in the message, don't bother.
    if ((strpos($text, "[") === false || strpos($text, "]") === false)) {
        return $text;
    }

    $text = CPGPluginAPI::filter('bbcode', $text);

    // [b] and [/b] for bolding text.
    $text = str_replace("[b]", '<strong>', $text);
    $text = str_replace("[/b]", '</strong>', $text);

    // [u] and [/u] for underlining text.
    $text = str_replace("[u]", '<u>', $text);
    $text = str_replace("[/u]", '</u>', $text);

    // [i] and [/i] for italicizing text.
    $text = str_replace("[i]", '<em>', $text);
    $text = str_replace("[/i]", '</em>', $text);

    // [s] and [/s] for striking through
    $text = str_replace("[s]", '<del>', $text);
    $text = str_replace("[/s]", '</del>', $text);

    // colours
    $text = preg_replace('/\[color=(\#[0-9A-F]{6}|[a-z]+)\]/', '<span style="color:$1">', $text);
    $text = str_replace("[/color]", '</span>', $text);

    if (!count($bbcode_tpl)) {

        // We do URLs in several different ways..
        $bbcode_tpl['url'] = '<span class="bblink"><a href="{URL}" %s>{DESCRIPTION}</a></span>';

        $bbcode_tpl['url1'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['url']);
        $bbcode_tpl['url1'] = str_replace('{DESCRIPTION}', '\\1\\2', $bbcode_tpl['url1']);

        // [url]xxxx://www.phpbb.com[/url] code..
        $patterns['link'][1]     = '#\[url\]([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/url\]#si';
        $replacements['link'][1] = $bbcode_tpl['url1'];

        $bbcode_tpl['url2'] = str_replace('{URL}', 'http://\\1', $bbcode_tpl['url']);
        $bbcode_tpl['url2'] = str_replace('{DESCRIPTION}', '\\1', $bbcode_tpl['url2']);

        // [url]www.phpbb.com[/url] code.. (no xxxx:// prefix).
        $patterns['link'][2]     = '#\[url\]([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/url\]#si';
        $replacements['link'][2] = $bbcode_tpl['url2'];

        $bbcode_tpl['url3'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['url']);
        $bbcode_tpl['url3'] = str_replace('{DESCRIPTION}', '\\3', $bbcode_tpl['url3']);

        // [url=xxxx://www.phpbb.com]phpBB[/url] code..
        $patterns['link'][3]     = '#\[url=([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\](.*?)\[/url\]#si';
        $replacements['link'][3] = $bbcode_tpl['url3'];

        $bbcode_tpl['url4'] = str_replace('{URL}', 'http://\\1', $bbcode_tpl['url']);
        $bbcode_tpl['url4'] = str_replace('{DESCRIPTION}', '\\2', $bbcode_tpl['url4']);

        // [url=www.phpbb.com]phpBB[/url] code.. (no xxxx:// prefix).
        $patterns['link'][4]     = '#\[url=([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\](.*?)\[/url\]#si';
        $replacements['link'][4] = $bbcode_tpl['url4'];

        $bbcode_tpl['email'] = '<span class="bblink"><a href="mailto:{EMAIL}">{EMAIL}</a></span>';
        $bbcode_tpl['email'] = str_replace('{EMAIL}', '\\1', $bbcode_tpl['email']);

        // [email]user@domain.tld[/email] code..
        $patterns['other'][1]     = '#\[email\]([a-z0-9\-_.]+?@[\w\-]+\.([\w\-\.]+\.)?[\w]+)\[/email\]#si';
        $replacements['other'][1] = $bbcode_tpl['email'];

        // [img]xxxx://www.phpbb.com[/img] code..
        $bbcode_tpl['img'] = '<img src="{URL}" alt="" />';
        $bbcode_tpl['img'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['img']);

        $patterns['other'][2]     = '#\[img\]([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/img\]#si';
        $replacements['other'][2] = $bbcode_tpl['img'];
    }

    $text = check_link_type_and_replace($patterns['link'][1], $replacements['link'][1], $text, 1);
    $text = check_link_type_and_replace($patterns['link'][2], $replacements['link'][2], $text, 2);
    $text = check_link_type_and_replace($patterns['link'][3], $replacements['link'][3], $text, 3);
    $text = check_link_type_and_replace($patterns['link'][4], $replacements['link'][4], $text, 4);

    $text = preg_replace($patterns['other'], $replacements['other'], $text);

    return $text;
}

/**
* check_link_type_and_replace()
*
* Checks if the text contains this pattern and replace it accordingly
*
* @param string $pattern
* @param string $replacement
* @param string $text
* @param integer $stage
*
* @return string $text
*/
function check_link_type_and_replace ($pattern, $replacement, $text, $stage)
{
    $ext_rel = 'rel="external nofollow" class="external"';
    $int_rel = '';

    if (preg_match($pattern, $text, $url) != 0) {

        switch ($stage) {

        case 1:
        case 3:
            $url = $url[1] . $url[2];
            break;

        case 2:
            $url = $url[1];
            break;

        case 4:
            $url = 'http://' . $url[1];
        }

        if (is_link_local($url)) {
            //apply regular formatting
            $replacement_sprintfed = sprintf($replacement, $int_rel);
        } else {
            //add rel attribute to link
            $replacement_sprintfed = sprintf($replacement, $ext_rel);
        }

        $text = preg_replace($pattern, $replacement_sprintfed, $text, 1);
        $text = check_link_type_and_replace($pattern, $replacement, $text, $stage);
    }

    return $text;
}

/**
* is_link_local()
*
* Determines if a URL is local or external. FROM phpBB MOD: prime links (by Ken F. Innes IV)
*
* @param string $url
*
* @return boolean $is_local
*/
function is_link_local($url)
{
    global $CONFIG;

    $subdomain_remove_regex = '#^(http|https)://[^/]+?\.((?:[a-z0-9-]+\.[a-z]+)|localhost/)#i';

    $cpg_url = preg_replace($subdomain_remove_regex, '$1://$2', $CONFIG['site_url']);
    $url     = preg_replace($subdomain_remove_regex, '$1://$2', $url);

    $is_local = (strpos($url, $cpg_url) === 0);

    if (!$is_local) {
        $protocol = substr($url, 0, strpos($url, ':'));
        $is_local = !$protocol || ($protocol && !in_array($protocol, array('http', 'https', 'mailto', 'ftp', 'gopher')));
    }

    return($is_local);
}

/**************************************************************************
   Template functions
 **************************************************************************/

// Load and parse the template.html file

/**
 * load_template()
 *
 * Load and parse the template.html file
 *
 * @return
 **/

function load_template()
{
    global $THEME_DIR, $template_header, $template_footer, $LINEBREAK;

    $template = file_get_contents($THEME_DIR . TEMPLATE_FILE);

    if ($template === FALSE) {
        die("Coppermine critical error:<br />Unable to load template file " . $THEME_DIR . TEMPLATE_FILE . "!");
    }

    $template = CPGPluginAPI::filter('template_html', $template);

    $gallery_pos = strpos($template, '{LANGUAGE_SELECT_FLAGS}');

    if ($gallery_pos) {
        $template    = str_replace('{LANGUAGE_SELECT_FLAGS}', languageSelect('flags'), $template);
    }

    $gallery_pos = strpos($template, '{LANGUAGE_SELECT_LIST}');

    if ($gallery_pos) {
        $template    = str_replace('{LANGUAGE_SELECT_LIST}', languageSelect('list'), $template);
    }

    $gallery_pos = strpos($template, '{THEME_DIR}');
    $template    = str_replace('{THEME_DIR}', $THEME_DIR, $template);

    $gallery_pos = strpos($template, '{THEME_SELECT_LIST}');

    if ($gallery_pos) {
        $template    = str_replace('{THEME_SELECT_LIST}', themeSelect('list'), $template);
    }

    $gallery_pos = strpos($template, '{GALLERY}');

    // Failsafe-option if JAVASCRIPT-token is missing from custom theme
    if (strpos($template, '{JAVASCRIPT}') === FALSE) {
        if (stripos($template, '</head>') !== FALSE) {
            $template = str_ireplace('</head>', '{JAVASCRIPT}' . $LINEBREAK . '</head>', $template);
        } elseif (stripos($template, '<head>') !== FALSE) {
            $template = str_ireplace('<head>',  '<head>' . $LINEBREAK .'{JAVASCRIPT}', $template);
        } elseif (stripos($template, '</title>') !== FALSE) {
            $template = str_ireplace('</title>', '</title>' . $LINEBREAK . '{JAVASCRIPT}', $template);
        }
    }

    if (!strstr($template, '{CREDITS}')) {
        $template = str_replace('{GALLERY}', '{CREDITS}', $template);
    } else {
        $template = str_replace('{GALLERY}', '', $template);
    }

    $template_header = substr($template, 0, $gallery_pos);
    $template_header = str_replace('{META}', '{META}' . CPGPluginAPI::filter('page_meta', ''), $template_header);

    $template_footer = substr($template, $gallery_pos);

    // Filter gallery header and footer
    $template_header = CPGPluginAPI::filter('gallery_header', $template_header);
    $template_footer = CPGPluginAPI::filter('gallery_footer', $template_footer);

    $add_version_info = '<!--Coppermine Photo Gallery ' . COPPERMINE_VERSION . ' (' . COPPERMINE_VERSION_STATUS . ')-->' . $LINEBREAK . '</body>';
    $template_footer  = preg_replace("#</body[^>]*>#", $add_version_info, $template_footer);
}

// Eval a template (substitute vars with values)

/**
 * template_eval()
 *
 * @param $template
 * @param $vars
 * @return
 **/

function template_eval(&$template, &$vars)
{
    return str_replace(array_keys($vars), array_values($vars), $template);
}


// Extract and return block '$block_name' from the template, the block is replaced by $subst

/**
 * template_extract_block()
 *
 * @param $template
 * @param $block_name
 * @param string $subst
 * @return
 **/

function template_extract_block(&$template, $block_name, $subst='')
{
    $pattern = "#<!-- BEGIN $block_name -->(.*?)<!-- END $block_name -->#s";

    if (!preg_match($pattern, $template, $matches)) {
        die('<strong>Template error<strong><br />Failed to find block \'' . $block_name . '\' (' . htmlspecialchars($pattern) . ') in :<br /><pre>' . htmlspecialchars($template) . '</pre>');
    }

    $template = str_replace($matches[0], $subst, $template);

    return $matches[1];
}

/**************************************************************************
   Functions for album/picture management
 **************************************************************************/

// Get the list of albums that the current user can't see

/**
 * get_private_album_set()
 *
 * @param string $aid_str
 * @return
 **/

//TODO: only load restricted albums in the currently viewed category filtering

function get_private_album_set($aid_str="")
{
    if (GALLERY_ADMIN_MODE) {
        return;
    }

    global $CONFIG, $USER_DATA, $FORBIDDEN_SET, $FORBIDDEN_SET_DATA, $lang_errors;;

    $superCage = Inspekt::makeSuperCage();

    $FORBIDDEN_SET_DATA = array();

    if ($USER_DATA['can_see_all_albums']) {
        return;
    }

    //Stuff for Album level passwords
    if ($superCage->cookie->keyExists($CONFIG['cookie_name'] . "_albpw") && empty($aid_str)) {

        //Using getRaw(). The data is sanitized in the foreach running just below
        $tmpStr = $superCage->cookie->getRaw($CONFIG['cookie_name'] . "_albpw");
        $alb_pw = unserialize(stripslashes($tmpStr));

        foreach ($alb_pw as $aid => $value) {
            $aid_str .= (int)$aid . ",";
        }

        $aid_str = substr($aid_str, 0, -1);

        $sql = "SELECT aid, alb_password FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid IN ($aid_str)";

        $albpw_db = array();

        $result = cpg_db_query($sql);

        if (mysql_num_rows($result)) {
            while ( ($data = mysql_fetch_assoc($result)) ) {
                $albpw_db[$data['aid']] = $data['alb_password'];
            }
        }

        $valid = array_intersect($albpw_db, $alb_pw);

        if (is_array($valid)) {
            $aid_str = implode(",", array_keys($valid));
        } else {
            $aid_str = "";
        }
    }

    // restrict the private album set to only those in current cat tree branch

    $RESTRICTEDWHERE = "WHERE (1";

    if (defined('RESTRICTED_PRIV')) {

        if ($superCage->get->keyExists('cat')) {
            $cat = $superCage->get->getInt('cat');
        } else {
            $cat = 0;
        }

        if ($cat == USER_GAL_CAT) {

            $RESTRICTEDWHERE = "WHERE (category > " . FIRST_USER_CAT;

        } elseif ($cat > FIRST_USER_CAT) {

            $RESTRICTEDWHERE = "WHERE (category = $cat";

        } elseif ($cat > 0) {
            //$CURRENT_CAT_DEPTH isn't used
            //$result = cpg_db_query("SELECT rgt, lft, depth FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = $cat LIMIT 1");
            //list($rgt, $lft, $CURRENT_CAT_DEPTH) = mysql_fetch_row($result); 
            
            $result = cpg_db_query("SELECT rgt, lft FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = $cat LIMIT 1");
            if (mysql_num_rows($result) == 0) {
                cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_cat'], __FILE__, __LINE__);
            }
            list($rgt, $lft) = mysql_fetch_row($result);
            mysql_free_result($result);

            $RESTRICTEDWHERE = "INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS c2 ON c2.cid = category
                                    WHERE (c2.lft BETWEEN $lft AND $rgt";
        }
    }

    $sql = "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} $RESTRICTEDWHERE "
            . " AND visibility != 0 AND visibility != " . (FIRST_USER_CAT + USER_ID)
            . " AND visibility NOT IN " . USER_GROUP_SET . ')';

    if (!empty($aid_str)) {
        $sql .= " AND aid NOT IN ($aid_str)";
    }

    $result = cpg_db_query($sql);

    if (mysql_num_rows($result)) {

        while ( ($album = mysql_fetch_assoc($result)) ) {
            $FORBIDDEN_SET_DATA[] = $album['aid'];
        } // while

        $FORBIDDEN_SET = "AND p.aid NOT IN (" . implode(', ', $FORBIDDEN_SET_DATA) . ') ';

    } else {
        $FORBIDDEN_SET_DATA = array();
        $FORBIDDEN_SET      = "";
    }

    mysql_free_result($result);
}

// Generate the thumbnail caption based on admin preference and thumbnail page requirements

/**
 * build_caption()
 *
 * @param array $rowset by reference
 * @param array $must_have
 **/
function build_caption(&$rowset, $must_have = array(), $mode = 'files')
{
    global $CONFIG, $THEME_DIR, $lang_date, $lang_get_pic_data, $cpg_udb;

    foreach ($rowset as $key => $row) {

        $caption = '';

        if ($CONFIG['display_filename']) {
            $caption .= '<span class="thumb_filename">' . $row['filename'] . '</span>';
        }

        if (!empty($row['title'])) {
            $caption .= '<span class="thumb_title">' . $row['title'] . '</span>';
        }

        if ($CONFIG['views_in_thumbview'] || in_array('hits', $must_have)) {
            $views = ($mode == 'albums') ? $row['alb_hits'] : $row['hits'];
            $caption .= '<span class="thumb_title">' . sprintf($lang_get_pic_data['n_views'], $views) . '</span>';
        }

        if ($CONFIG['caption_in_thumbview'] && !empty($row['caption'])) {
            $caption .= '<span class="thumb_caption">' . strip_tags(bb_decode($row['caption'])) . '</span>';
        }

        if ($CONFIG['display_comment_count']) {
            $comments_nr = count_pic_comments($row['pid']);
            if ($comments_nr > 0) {
                $caption .= '<span class="thumb_num_comments">' . sprintf($lang_get_pic_data['n_comments'], $comments_nr) . '</span>';
            }
        }

        if ($CONFIG['display_uploader']) {
            if ($row['owner_id']) {
                $caption .= '<span class="thumb_title"><a href="profile.php?uid=' . $row['owner_id'] . '">' . $cpg_udb->get_user_name($row['owner_id']) . '</a></span>';
            }
        }

        if (in_array('msg_date', $must_have)) {
            $caption .= '<span class="thumb_caption">' . localised_date($row['msg_date'], $lang_date['lastcom']) . '</span>';
        }

        if (in_array('msg_body', $must_have)) {

            $msg_body = strip_tags(bb_decode($row['msg_body'])); // I didn't want to fully bb_decode the message where report to admin isn't available. -donnoman
            $msg_body = utf_strlen($msg_body) > 50 ? utf_substr($msg_body, 0, 50) . '...' : $msg_body;

            if ($CONFIG['enable_smilies']) {
                $msg_body = process_smilies($msg_body);
            }

            if ($row['author_id']) {
                $caption .= '<span class="thumb_caption"><a href="profile.php?uid=' . $row['author_id'] . '">' . $row['msg_author'] . '</a>: ' . $msg_body . '</span>';
            } else {
                $caption .= '<span class="thumb_caption">' . $row['msg_author'] . ': ' . $msg_body . '</span>';
            }
        }

        if (in_array('ctime', $must_have)) {
            $caption .= '<span class="thumb_caption">' . localised_date($row['ctime'], $lang_date['lastup']) . '</span>';
        }

        if (in_array('pic_rating', $must_have)) {

            if (defined('THEME_HAS_RATING_GRAPHICS')) {
                $prefix = $THEME_DIR;
            } else {
                $prefix = '';
            }

            //calculate required amount of stars in picinfo
            $rating        = round(($row['pic_rating'] / 2000) / (5 / $CONFIG['rating_stars_amount']));
            $rating_images = '';

            for ($i = 1; $i <= $CONFIG['rating_stars_amount']; $i++) {

                if ($i <= $rating) {
                    $rating_images .= '<img src="' . $prefix . 'images/rate_full.png" alt="' . $rating . '"/>';
                } else {
                    $rating_images .= '<img src="' . $prefix . 'images/rate_empty.png" alt="' . $rating . '"/>';
                }
            }

            $caption .= '<span class="thumb_caption">' . $rating_images . '<br />' . sprintf($lang_get_pic_data['n_votes'], $row['votes']) . '</span>';
        }

        if (in_array('mtime', $must_have)) {

            $caption .= '<span class="thumb_caption">' . localised_date($row['mtime'], $lang_date['lasthit']);

            if (GALLERY_ADMIN_MODE) {
                $caption .= '<br />' . $row['lasthit_ip'];
            }

            $caption .= '</span>';
        }

        $rowset[$key]['caption_text'] = $caption;
    }

    $rowset = CPGPluginAPI::filter('thumb_caption', $rowset);
}

/*
    To retrieve pictures from the end of an album or meta album, it is more
    efficient to sort from the end of the album and then reverse the result.
    $total is the total number of files in the [meta]album
    $offset is the position we are browsing from
    $row_count is the desired number of pics per page
*/
function get_pic_data_ordering($total, $offset, $row_count)
{
    // Determine if we are over halfway through the album
    if ($offset > $total / 2) {
        
        // If so, switch the sort direction
        $ASC = 'DESC';
        $DESC = 'ASC';
        
        // If we are on the last page, we need a partial result
        if ($offset + $row_count > $total) {
            $row_count = $total - $offset;
            $offset = 0;
        } else {
            $offset = $total - $offset - $row_count;
        }
        
        // Flag so that we know to reverse the results later
        $flipped = true;
        
    } else {
        
        // Else, carry on as usual
        $ASC = 'ASC';
        $DESC = 'DESC';
        $flipped = false;
    }
 
    // Generate the new LIMIT clause
    $limit = ($offset != -1) ? ' LIMIT ' . $offset : '';
    $limit .= ($row_count != -1) ? ' ,' . $row_count : '';
     
    return array($ASC, $DESC, $limit, $flipped);
}

// Retrieve the data for a picture or a set of picture

/**
 * get_pic_data()
 *
 * @param $album
 * @param $count
 * @param $album_name
 * @param integer $limit1
 * @param integer $limit2
 * @param boolean $set_caption
 * @return
 **/

function get_pic_data($album, &$count, &$album_name, $limit1=-1, $limit2=-1, $set_caption = true, $mode = '')
{
    global $USER, $CONFIG, $CURRENT_CAT_NAME, $CURRENT_ALBUM_KEYWORD, $FAVPICS, $FORBIDDEN_SET_DATA, $FORBIDDEN_SET, $USER_DATA;
    global $cat;
    global $lang_common, $lang_meta_album_names, $lang_errors;
    global $RESTRICTEDWHERE;

    static $album_name_keyword = '', $pic_count = null;

    $superCage = Inspekt::makeSuperCage();

    $limit = ($limit1 != -1) ? ' LIMIT ' . $limit1 : '';
    $limit .= ($limit2 != -1) ? ' ,' . $limit2 : '';
    
    if ($mode == 'pidonly') {
        $select_column_list = array('r.pid');

    } elseif ($mode == 'filmstrip') {
        $select_column_list = array(
            'r.pid',
            'r.aid',
            'filepath',
            'filename',
            'url_prefix',
            'pwidth',
            'pheight',
            'filesize',
            'ctime',
            'r.title',
        );

    } else {
        $select_column_list = array(
            'r.pid',
            'r.aid',
            'filepath',
            'filename',
            'url_prefix',
            'pwidth',
            'pheight',
            'filesize',
            'ctime',
            'r.title',
            'r.keywords',
            'r.votes', 
            'pic_rating'
        );

        //if ($CONFIG['views_in_thumbview']) {
            $select_column_list[] = 'hits';
        //}

        //if ($CONFIG['caption_in_thumbview']) {
            $select_column_list[] = 'caption';
        //}

        //if ($CONFIG['display_uploader']) {
            $select_column_list[] = 'r.owner_id';
        //}

        if (GALLERY_ADMIN_MODE) {
            $select_column_list[] = 'pic_raw_ip';
            $select_column_list[] = 'pic_hdr_ip';
        }

        for ($i = 1; $i <= 4; $i++) {
            if ($CONFIG['user_field' . $i . '_name']) {
                $select_column_list[] = 'user' . $i;
            }
        }
    }

    if (count($FORBIDDEN_SET_DATA) > 0) {
        $forbidden_set_string = ' AND aid NOT IN (' . implode(', ', $FORBIDDEN_SET_DATA) . ')';
    } else {
        $forbidden_set_string = '';
    }

    // Keyword
    if (!empty($CURRENT_ALBUM_KEYWORD)) {
        $keyword = "OR (keywords like '%$CURRENT_ALBUM_KEYWORD%' $forbidden_set_string )";
    } else {
        $keyword = '';
    }

    // Regular albums
    if (is_numeric($album)) {

        if (!$album_name_keyword) {
            $album_name_keyword = get_album_name($album);
        }

        $album_name    = $album_name_keyword['title'];
        $album_keyword = addslashes($album_name_keyword['keyword']);

        if (!empty($album_keyword)) {
            $keyword = "OR (keywords like '%$album_keyword%' $forbidden_set_string )";
        } else {
            $keyword = '';
        }

        if (array_key_exists('allowed_albums', $USER_DATA) && is_array($USER_DATA['allowed_albums'])
                && in_array($album, $USER_DATA['allowed_albums'])) {
            $approved = '';
        } else {
            $approved = GALLERY_ADMIN_MODE ? '' : 'AND approved=\'YES\'';
        }

        $approved = GALLERY_ADMIN_MODE ? '' : 'AND approved=\'YES\'';

        // Note: Use a second variable, $pic_count, since $count is passed by reference
        // and having it defined as static in the function may be problematic
        if (is_null($pic_count)) {
            $result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE ((aid='$album' $forbidden_set_string ) $keyword) $approved");
            list($count) = mysql_fetch_row($result);
            mysql_free_result($result);
            $pic_count = $count;
        } else {
            $count = $pic_count;
        }
        
        list($ASC, $DESC, $limit, $flipped) = get_pic_data_ordering($count, $limit1, $limit2);

        $sort_array = array(
            'na' => "filename $ASC",
            'nd' => "filename $DESC",
            'ta' => "title $ASC",
            'td' => "title $DESC",
            'da' => "pid $ASC",
            'dd' => "pid $DESC",
            'pa' => "position $ASC, pid $ASC",
            'pd' => "position $DESC, pid $DESC",
        );
    
        $sort_code  = isset($USER['sort'])? $USER['sort'] : $CONFIG['default_sort_order'];
        $sort_order = isset($sort_array[$sort_code]) ? $sort_array[$sort_code] : $sort_array[$CONFIG['default_sort_order']];
            
        $select_columns = implode(', ', $select_column_list);

        $query = "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} AS r
                    WHERE ((aid = $album $forbidden_set_string ) $keyword)$approved
                    ORDER BY $sort_order
                    $limit";

        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($flipped) {
            $rowset = array_reverse($rowset);
        }
        
        // Set picture caption
        if ($set_caption) {
            if ($CONFIG['display_thumbnail_rating'] == 1) {
                build_caption($rowset, array('pic_rating'));
            } else {
                build_caption($rowset);
            }
        }
        $rowset = CPGPluginAPI::filter('thumb_caption_regular', $rowset);
        return $rowset;
    }
    
    $meta_album_passto = array (
        'album' => $album,
        'limit' => $limit,
        'set_caption' => $set_caption,
    );

    $meta_album_params = CPGPluginAPI::filter('meta_album', $meta_album_passto);

    if (array_key_exists('album_name', $meta_album_params) && $meta_album_params['album_name']) {

        $album_name = $meta_album_params['album_name'];
        $count      = $meta_album_params['count'];
        $rowset     = $meta_album_params['rowset'];

        return $rowset;
    }

    // Meta albums
    switch($album) {

    case 'lastcom': // Latest comments

        if ($cat && $CURRENT_CAT_NAME) {
            $album_name = cpg_fetch_icon('comment', 2) . $album_name = $lang_meta_album_names['lastcom'] . ' - ' . $CURRENT_CAT_NAME;
        } else {
            $album_name = cpg_fetch_icon('comment', 2) . $lang_meta_album_names['lastcom'];
        }

        $query = "SELECT COUNT(*)
                FROM {$CONFIG['TABLE_COMMENTS']} AS c
                INNER JOIN {$CONFIG['TABLE_PICTURES']} AS r ON r.pid = c.pid
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND r.approved = 'YES'
                AND c.approval = 'YES'";

        $result = cpg_db_query($query);

        list($count) = mysql_fetch_row($result);
        mysql_free_result($result);

        list($ASC, $DESC, $limit, $flipped) = get_pic_data_ordering($count, $limit1, $limit2);
        
        $select_column_list[] = 'UNIX_TIMESTAMP(msg_date) AS msg_date';
        $select_column_list[] = 'msg_body';
        $select_column_list[] = 'author_id';
        $select_column_list[] = 'msg_author';
        $select_column_list[] = 'msg_id'; // needed for get_pic_pos()

        $select_columns = implode(', ', $select_column_list);

        $query = "SELECT $select_columns
                FROM {$CONFIG['TABLE_COMMENTS']} AS c
                INNER JOIN {$CONFIG['TABLE_PICTURES']} AS r ON r.pid = c.pid
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND r.approved = 'YES'
                AND c.approval = 'YES'
                ORDER BY msg_id $DESC
                $limit";

        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($flipped) {
            $rowset = array_reverse($rowset);
        }
        
        if ($set_caption) {
            build_caption($rowset, array('msg_body', 'msg_date'));
        }

        $rowset = CPGPluginAPI::filter('thumb_caption_lastcom', $rowset);

        return $rowset;
        break;

    case 'lastcomby': // Latest comments by a specific user

        if (isset($USER['uid'])) {
            $uid = (int) $USER['uid'];
        } else {
            $uid = -1;
        }

        $user_name = get_username($uid);

        if ($cat && $CURRENT_CAT_NAME) {
            $album_name = cpg_fetch_icon('comment', 2) . $album_name = $lang_meta_album_names['lastcom'] . ' - ' . $CURRENT_CAT_NAME . ' - ' . $user_name;
        } else {
            $album_name = cpg_fetch_icon('comment', 2) . $lang_meta_album_names['lastcom'] . ' - ' . $user_name;
        }

        $query = "SELECT COUNT(*)
                FROM {$CONFIG['TABLE_COMMENTS']} AS c
                INNER JOIN {$CONFIG['TABLE_PICTURES']} AS r ON r.pid = c.pid
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND author_id = '$uid'
                AND r.approved = 'YES'
                AND c.approval = 'YES'";

        $result = cpg_db_query($query);

        list($count) = mysql_fetch_row($result);
        mysql_free_result($result);

        list($ASC, $DESC, $limit, $flipped) = get_pic_data_ordering($count, $limit1, $limit2);
        
        $select_column_list[] = 'UNIX_TIMESTAMP(msg_date) AS msg_date';
        $select_column_list[] = 'msg_body';
        $select_column_list[] = 'author_id';
        $select_column_list[] = 'msg_author';
        $select_column_list[] = 'msg_id'; // needed for get_pic_pos()

        $select_columns = implode(', ', $select_column_list);

        $query = "SELECT $select_columns
                FROM {$CONFIG['TABLE_COMMENTS']} AS c
                INNER JOIN {$CONFIG['TABLE_PICTURES']} AS r ON r.pid = c.pid
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND author_id = '$uid'
                AND r.approved = 'YES'
                AND c.approval = 'YES'
                ORDER BY msg_id $DESC
                $limit";

        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($set_caption) {
            build_caption($rowset, array('msg_body', 'msg_date'));
        }

        if ($flipped) {
            $rowset = array_reverse($rowset);
        }
        
        $rowset = CPGPluginAPI::filter('thumb_caption_lastcomby', $rowset);

        return $rowset;
        break;

    case 'lastup': // Latest (most recent) uploads

        if ($cat && $CURRENT_CAT_NAME) {
            $album_name = cpg_fetch_icon('last_uploads', 2) . $lang_meta_album_names['lastup'] . ' - ' . $CURRENT_CAT_NAME;
        } else {
            $album_name = cpg_fetch_icon('last_uploads', 2) . $lang_meta_album_names['lastup'];
        }

        $query = "SELECT COUNT(*)
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'";

        $result = cpg_db_query($query);

        list($count) = mysql_fetch_row($result);
        mysql_free_result($result);

        list($ASC, $DESC, $limit, $flipped) = get_pic_data_ordering($count, $limit1, $limit2);

        $select_columns = implode(', ', $select_column_list);

        $query = "SELECT $select_columns
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                ORDER BY r.pid $DESC $limit";

        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($flipped) {
            $rowset = array_reverse($rowset);
        }
        
        if ($set_caption) {
            build_caption($rowset, array('ctime'));
        }

        $rowset = CPGPluginAPI::filter('thumb_caption_lastup', $rowset);

        return $rowset;
        break;

    case 'lastupby': // Latest (most recent) uploads by a specific user

        if (isset($USER['uid'])) {
            $uid = (int) $USER['uid'];
        } else {
            $uid = -1;
        }

        $user_name = get_username($uid);

        if ($cat && $CURRENT_CAT_NAME) {
            $album_name = cpg_fetch_icon('last_uploads', 2) . $lang_meta_album_names['lastup'] . ' - ' . $CURRENT_CAT_NAME . ' - ' . $user_name;
        } else {
            $album_name = cpg_fetch_icon('last_uploads', 2) . $lang_meta_album_names['lastup'] . ' - ' . $user_name;
        }

        $query = "SELECT COUNT(*)
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND r.owner_id = '$uid'
                AND approved = 'YES'";

        $result = cpg_db_query($query);

        list($count) = mysql_fetch_row($result);
        mysql_free_result($result);

        list($ASC, $DESC, $limit, $flipped) = get_pic_data_ordering($count, $limit1, $limit2);
        
        $select_columns = implode(', ', $select_column_list);

        $query = "SELECT $select_columns
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND r.owner_id = '$uid'
                AND approved = 'YES'
                ORDER BY pid $DESC
                $limit";

        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($flipped) {
            $rowset = array_reverse($rowset);
        }
        
        if ($set_caption) {
            build_caption($rowset, array('ctime'));
        }

        $rowset = CPGPluginAPI::filter('thumb_caption_lastupby', $rowset);

        return $rowset;
        break;

    case 'topn': // Most viewed files

        if ($cat && $CURRENT_CAT_NAME) {
            $album_name = cpg_fetch_icon('most_viewed', 2) . $lang_meta_album_names['topn'] . ' - ' . $CURRENT_CAT_NAME;
        } else {
            $album_name = cpg_fetch_icon('most_viewed', 2) . $lang_meta_album_names['topn'];
        }

        $query = "SELECT COUNT(*)
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                AND hits > 0";

        $result = cpg_db_query($query);

        list($count) = mysql_fetch_row($result);
        mysql_free_result($result);

        list($ASC, $DESC, $limit, $flipped) = get_pic_data_ordering($count, $limit1, $limit2);
        
        $select_columns = implode(', ', $select_column_list);

        $query = "SELECT $select_columns
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                AND hits > 0
                ORDER BY hits $DESC, pid $ASC
                $limit";

        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($flipped) {
            $rowset = array_reverse($rowset);
        }
        
        if ($set_caption) {
            build_caption($rowset, array('hits'));
        }

        $rowset = CPGPluginAPI::filter('thumb_caption_topn', $rowset);

        return $rowset;
        break;

    case 'toprated': // Top rated pictures

        if ($cat && $CURRENT_CAT_NAME) {
            $album_name = cpg_fetch_icon('top_rated', 2) . $lang_meta_album_names['toprated'] . ' - ' . $CURRENT_CAT_NAME;
        } else {
            $album_name = cpg_fetch_icon('top_rated', 2) . $lang_meta_album_names['toprated'];
        }

        $query = "SELECT COUNT(*)
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                AND r.votes >= '{$CONFIG['min_votes_for_rating']}'";

        $result = cpg_db_query($query);

        list($count) = mysql_fetch_row($result);
        mysql_free_result($result);

        list($ASC, $DESC, $limit, $flipped) = get_pic_data_ordering($count, $limit1, $limit2);
        
        $select_columns = implode(', ', $select_column_list);

        $query = "SELECT $select_columns
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                AND r.votes >= '{$CONFIG['min_votes_for_rating']}'
                ORDER BY pic_rating $DESC, r.votes $DESC, pid $DESC
                $limit";

        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($flipped) {
            $rowset = array_reverse($rowset);
        }
        
        if ($set_caption) {
            build_caption($rowset, array('pic_rating'));
        }

        $rowset = CPGPluginAPI::filter('thumb_caption_toprated', $rowset);

        return $rowset;
        break;

    case 'lasthits': // Last viewed files (most recently-viewed files)

        if ($cat && $CURRENT_CAT_NAME) {
            $album_name = cpg_fetch_icon('last_viewed', 2) . $lang_meta_album_names['lasthits'] . ' - ' . $CURRENT_CAT_NAME;
        } else {
            $album_name = cpg_fetch_icon('last_viewed', 2) . $lang_meta_album_names['lasthits'];
        }

        $query = "SELECT COUNT(*)
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                AND hits > 0";

        $result = cpg_db_query($query);

        list($count) = mysql_fetch_row($result);
        mysql_free_result($result);

        list($ASC, $DESC, $limit, $flipped) = get_pic_data_ordering($count, $limit1, $limit2);
        
        $select_column_list[] = 'UNIX_TIMESTAMP(mtime) AS mtime';

        if (GALLERY_ADMIN_MODE) {
            $select_column_list[] = 'lasthit_ip';
        }

        $select_columns = implode(', ', $select_column_list);

        $query = "SELECT $select_columns
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                AND hits > 0
                ORDER BY mtime $DESC, pid $ASC
                $limit";

        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($flipped) {
            $rowset = array_reverse($rowset);
        }
        
        if ($set_caption) {
            build_caption($rowset, array('mtime', 'hits'));
        }

        $rowset = CPGPluginAPI::filter('thumb_caption_lasthits', $rowset);

        return $rowset;
        break;

    case 'random': // Random files

        if ($cat && $CURRENT_CAT_NAME) {
            $album_name = cpg_fetch_icon('random', 2) . $lang_meta_album_names['random'] . ' - ' . $CURRENT_CAT_NAME;
        } else {
            $album_name = cpg_fetch_icon('random', 2) . $lang_meta_album_names['random'];
        }

        $query = "SELECT COUNT(*)
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'";

        $result = cpg_db_query($query);

        list($count) = mysql_fetch_row($result);
        mysql_free_result($result);

        $query = "SELECT pid
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                ORDER BY RAND()
                $limit";

        $result = cpg_db_query($query);

        $pidlist = array();

        while ( ($row = mysql_fetch_assoc($result)) ) {
            $pidlist[] = $row['pid'];
        }
        mysql_free_result($result);

        sort($pidlist);

        $select_columns = implode(', ', $select_column_list);

        $query = "SELECT $select_columns
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                WHERE pid IN (" . implode(', ', $pidlist) . ")";

        $rowset = array();

        // Fire the query if at least one pid is in pidlist array
        if (count($pidlist)) {

            $result = cpg_db_query($query);

            while ( ($row = mysql_fetch_assoc($result)) ) {
                $rowset[-$row['pid']] = $row;
            }

            mysql_free_result($result);
        }

        if ($set_caption) {
            build_caption($rowset);
        }

        $rowset = CPGPluginAPI::filter('thumb_caption_random', $rowset);

        return $rowset;
        break;

    case 'search': // Search results

        if (isset($USER['search']['search'])) {
            $search_string = $USER['search']['search'];
        } else {
            $search_string = '';
        }

        if ($cat && $CURRENT_CAT_NAME) {
            $album_name = cpg_fetch_icon('search', 2) . $lang_meta_album_names['search'] . ' - ' . $CURRENT_CAT_NAME;
        } else {
            $album_name = cpg_fetch_icon('search', 2) . $lang_meta_album_names['search'] . ' - "' . strip_tags($search_string) . '"';
        }

        include 'include/search.inc.php';

        $rowset = CPGPluginAPI::filter('thumb_caption_search', $rowset);

        return $rowset;
        break;

    case 'lastalb': // Last albums to which files have been uploaded

        if ($cat && $CURRENT_CAT_NAME) {
            $album_name = cpg_fetch_icon('last_created', 2) . $lang_meta_album_names['lastalb'] . ' - ' . $CURRENT_CAT_NAME;
        } else {
            $album_name = cpg_fetch_icon('last_created', 2) . $lang_meta_album_names['lastalb'];
        }

        // If $select_column_list includes an 'a.' field, split off into album query and remove from file query
        $select_column_list_files = $select_column_list;
        $select_column_list_albums = array('r.aid', 'a.thumb', 'a.keyword', 'a.alb_hits', 'a.title', 'ctime');
        foreach ($select_column_list_files as $key => $value) {
            if (strpos($value,'a.') === 0) {
                $select_column_list_albums[] = $value;
                unset($select_column_list_files[$key]);
            }
        }
        $select_columns_files = implode(', ', $select_column_list_files);
        $select_columns_albums = str_replace('ctime', 'MAX(ctime) AS ctime', implode(', ', $select_column_list_albums));

        // Keyword-linked files are not included; only native files are checked for last-updated albums
        $query = "SELECT COUNT(*)
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                GROUP BY r.aid";
        $result = cpg_db_query($query);
        $count = mysql_num_rows($result);
        mysql_free_result($result);

        $query = "SELECT $select_columns_albums
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                GROUP BY r.aid
                ORDER BY ctime DESC
                $limit";
        $result = cpg_db_query($query);
        $rowset_aid = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        // For 'lastalb' album, only use approved photos for album thumbnails
        $approved = 'AND approved=\'YES\'';

        $album_thumbs = array();
        foreach ($rowset_aid as $index => $row) {
            if ($row['thumb'] > 0) {
                $album_thumbs[] = $row['thumb'];

            } elseif ($row['thumb'] < 0) {
                // random file from album
                $keyword = ($row['keyword'] ? "OR (keywords like '%".addslashes($row['keyword'])."%' $forbidden_set_string )" : '');
                $query = "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE ((aid = '{$row['aid']}' $forbidden_set_string) $keyword) $approved ORDER BY RAND() LIMIT 0,1";
                $result = cpg_db_query($query);
                list($pid_random) = mysql_fetch_row($result);
                mysql_free_result($result);
                $album_thumbs[] = $pid_random;
                $rowset_aid[$index]['thumb'] = $pid_random;

            } else {  // thumb = 0
                // last uploaded file from album
                $keyword = ($row['keyword'] ? "OR (keywords like '%".addslashes($row['keyword'])."%' $forbidden_set_string )" : '');
                $query = "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE ((aid = '{$row['aid']}' $forbidden_set_string) $keyword) $approved ORDER BY ctime DESC LIMIT 0,1";
                $result = cpg_db_query($query);
                list($pid_lastup) = mysql_fetch_row($result);
                mysql_free_result($result);
                $album_thumbs[] = $pid_lastup;
                $rowset_aid[$index]['thumb'] = $pid_lastup;
            }
        }

        if (!$album_thumbs) {
            $rowset = array();
        } else {
            $album_thumbs_set = implode(',', array_unique($album_thumbs));
            $query = "SELECT $select_columns_files
                    FROM {$CONFIG['TABLE_PICTURES']} AS r
                    WHERE approved = 'YES'
                    AND r.pid IN ($album_thumbs_set)";
            $result = cpg_db_query($query);
            $rowset_pid = cpg_db_fetch_rowset($result);
            mysql_free_result($result);

            $rowset_pid_indexed = array();
            foreach ($rowset_pid as $row) {
                $rowset_pid_indexed[$row['pid']] = $row;
            }
            $rowset = array();
            foreach ($rowset_aid as $row) {
                $rowset[] = is_array($rowset_pid_indexed[$row['thumb']]) ? array_merge($rowset_pid_indexed[$row['thumb']], $row) : $row;
            }

            if ($set_caption) {
                build_caption($rowset, array('ctime'), 'albums');
            }
        }

        $rowset = CPGPluginAPI::filter('thumb_caption_lastalb', $rowset);

        return $rowset;
        break;

    case 'favpics': // Favorite Files

        $album_name = cpg_fetch_icon('favorites', 2) . $lang_meta_album_names['favpics'];

        $rowset = array();

        if (count($FAVPICS) > 0) {

            $favs = implode(', ', $FAVPICS);

            $query = "SELECT COUNT(*)
                            FROM {$CONFIG['TABLE_PICTURES']} AS r
                            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                            $RESTRICTEDWHERE
                            AND approved = 'YES'
                            AND pid IN ($favs)";

            $result = cpg_db_query($query);

            list($count) = mysql_fetch_row($result);
            mysql_free_result($result);

            $select_columns = implode(', ', $select_column_list);

            $query = "SELECT $select_columns
                            FROM {$CONFIG['TABLE_PICTURES']} AS r
                            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                            $RESTRICTEDWHERE
                            AND approved = 'YES'
                            AND pid IN ($favs)
                            ORDER BY pid ASC
                            $limit";

            $result = cpg_db_query($query);
            $rowset = cpg_db_fetch_rowset($result);

            mysql_free_result($result);

            if ($set_caption) {
                build_caption($rowset, array('ctime'));
            }
        }

        $rowset = CPGPluginAPI::filter('thumb_caption_favpics', $rowset);

        return $rowset;
        break;

    case 'datebrowse': // Browsing by uploading date

        // Using getRaw():  The date is sanitized in the called function
        $date = $superCage->get->keyExists('date') ? cpgValidateDate($superCage->get->getRaw('date')) : null;

        $album_name = cpg_fetch_icon('calendar', 2) . $lang_common['date'] . ': ' . $date;

        $rowset = array();

        $query = "SELECT COUNT(*)
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                AND substring(from_unixtime(ctime),1,10) = '" . substr($date, 0, 10) . "'";

        $result = cpg_db_query($query);

        list($count) = mysql_fetch_row($result);
        mysql_free_result($result);

        list($ASC, $DESC, $limit, $flipped) = get_pic_data_ordering($count, $limit1, $limit2);
        
        $select_columns = implode(', ', $select_column_list);

        $query = "SELECT $select_columns
                FROM {$CONFIG['TABLE_PICTURES']} AS r
                INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid
                $RESTRICTEDWHERE
                AND approved = 'YES'
                AND substring(from_unixtime(ctime),1,10) = '" . substr($date, 0, 10) . "'
                ORDER BY pid $ASC
                $limit";

        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($flipped) {
            $rowset = array_reverse($rowset);
        }
        
        if ($set_caption) {
            build_caption($rowset, array('ctime'));
        }

        return $rowset;
        break;
    } // switch
} // function get_pic_data

// Copy of get_pic_data, created to obtain position for the given pid in the given album
function get_pic_pos($album, $pid)
{
    global $USER, $CONFIG, $CURRENT_ALBUM_KEYWORD, $FORBIDDEN_SET_DATA, $USER_DATA;
    global $RESTRICTEDWHERE, $FORBIDDEN_SET;

    //$superCage = Inspekt::makeSuperCage();

    $sort_array = array(
        //'na' => 'filename <',
        //'nd' => 'filename >',
        //'ta' => 'title <',
        //'td' => 'title >',
        'da' => 'pid <',
        'dd' => 'pid >',
        //'pa' => 'position <',
        //'pd' => 'position >',
    );

    $sort_code  = isset($USER['sort'])? $USER['sort'] : $CONFIG['default_sort_order'];

    if (is_numeric($album)) {
        if (isset($sort_array[$sort_code])) {
            $comp_order = $sort_array[$sort_code];
        } else {
            return false;   
        }
    }

    if (count($FORBIDDEN_SET_DATA) > 0) {
        $forbidden_set_string = ' AND aid NOT IN (' . implode(', ', $FORBIDDEN_SET_DATA) . ')';
    } else {
        $forbidden_set_string = '';
    }

    // Keyword
    if (!empty($CURRENT_ALBUM_KEYWORD)) {
        $keyword = "OR (keywords like '%$CURRENT_ALBUM_KEYWORD%' $forbidden_set_string )";
    } else {
        $keyword = '';
    }

    // Regular albums
    if (is_numeric($album)) {

        $album_name_keyword = get_album_name($album);
        //$album_name         = $album_name_keyword['title'];
        $album_keyword      = addslashes($album_name_keyword['keyword']);

        if (!empty($album_keyword)) {
            $keyword = "OR (keywords like '%$album_keyword%' $forbidden_set_string )";
        } else {
            $keyword = '';
        }

        if (array_key_exists('allowed_albums', $USER_DATA) && is_array($USER_DATA['allowed_albums'])
                && in_array($album, $USER_DATA['allowed_albums'])) {
            $approved = '';
        } else {
            $approved = GALLERY_ADMIN_MODE ? '' : 'AND approved=\'YES\'';
        }

        $approved = GALLERY_ADMIN_MODE ? '' : 'AND approved=\'YES\'';

        list($param) = explode(' ', $comp_order);

        $result = cpg_db_query("SELECT filename, title, pid, position FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = $pid");

        $pic = mysql_fetch_assoc($result);

        $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']}
                    WHERE ((aid='$album' $forbidden_set_string ) $keyword) $approved
                    AND $comp_order '{$pic[$param]}'";

        $result = cpg_db_query($query);

        list($pos) = mysql_fetch_row($result);
        mysql_free_result($result);

        return $pos;
    }

    // Meta albums
    switch($album) {

    case 'lastcom': // Latest comments

        $superCage = Inspekt::makeSuperCage();

        $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} AS p
            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid
            INNER JOIN {$CONFIG['TABLE_COMMENTS']} AS c ON c.pid = p.pid
            $RESTRICTEDWHERE
            AND approved = 'YES'
            AND approval = 'YES'
            AND msg_id > ".$superCage->get->getInt('msg_id');

            $result = cpg_db_query($query);

            list($pos) = mysql_fetch_row($result);
            mysql_free_result($result);

        return $pos;
        break;

    case 'lastcomby': // Latest comments by a specific user

        if (isset($USER['uid'])) {
            $uid = (int) $USER['uid'];
        } else {
            $uid = -1;
        }

        $superCage = Inspekt::makeSuperCage();

        $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} AS p
            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid
            INNER JOIN {$CONFIG['TABLE_COMMENTS']} AS c ON c.pid = p.pid
            $RESTRICTEDWHERE
            AND author_id = $uid
            AND approved = 'YES'
            AND approval = 'YES'
            AND msg_id > ".$superCage->get->getInt('msg_id');

            $result = cpg_db_query($query);

            list($pos) = mysql_fetch_row($result);
            mysql_free_result($result);

        return $pos;
        break;

    case 'lastup': // Latest (most recent) uploads

        $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} AS p
            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid
            $RESTRICTEDWHERE
            AND approved = 'YES'
            AND pid > $pid";

            $result = cpg_db_query($query);

            list($pos) = mysql_fetch_row($result);
            mysql_free_result($result);

        return $pos;
        break;

    case 'lastupby': // Latest (most recent) uploads by a specific user

        if (isset($USER['uid'])) {
            $uid = (int) $USER['uid'];
        } else {
            $uid = -1;
        }

        $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} AS p
            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid
            $RESTRICTEDWHERE
            AND p.owner_id = $uid
            AND approved = 'YES'
            AND pid > $pid";

            $result = cpg_db_query($query);

            list($pos) = mysql_fetch_row($result);
            mysql_free_result($result);

        return $pos;
        break;

    case 'topn': // Most viewed files

        $query = "SELECT hits FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = $pid";
        $result = cpg_db_query($query);
        $hits = mysql_result($result, 0);
        mysql_free_result($result);

        $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} AS p
            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid
            $RESTRICTEDWHERE
            AND approved = 'YES'
            AND (hits > $hits
            OR hits = $hits AND pid < $pid)";

            $result = cpg_db_query($query);

            list($pos) = mysql_fetch_row($result);
            mysql_free_result($result);

        return $pos;
        break;

    case 'toprated': // Top rated pictures

        $query = "SELECT pic_rating, votes FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = $pid";
        $result = cpg_db_query($query);
        list($pic_rating, $votes) = mysql_fetch_row($result);
        mysql_free_result($result);

        $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} AS p
            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid
            $RESTRICTEDWHERE
            AND approved = 'YES'
            AND p.votes >= '{$CONFIG['min_votes_for_rating']}'
            AND (pic_rating > $pic_rating
            OR (pic_rating = $pic_rating AND p.votes > $votes)
            OR (pic_rating = $pic_rating AND p.votes = $votes AND pid > $pid))";

            $result = cpg_db_query($query);

            list($pos) = mysql_fetch_row($result);
            mysql_free_result($result);

        return $pos;
        break;

    case 'lasthits': // Last viewed files (most recently-viewed files)

        $query = "SELECT mtime FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = $pid";
        $result = cpg_db_query($query);
        $mtime = mysql_result($result, 0);
        mysql_free_result($result);

        $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} AS p
            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid
            $RESTRICTEDWHERE
            AND approved = 'YES'
            AND mtime > '$mtime'
            OR mtime = '$mtime' AND pid < $pid";

            $result = cpg_db_query($query);

            list($pos) = mysql_fetch_row($result);
            mysql_free_result($result);

        return $pos;
        break;

    case 'search': // Search results
        $superCage = Inspekt::makeSuperCage();

        if (isset($USER['search']['search'])) {
            $search_string = $USER['search']['search'];
        } else {
            $search_string = '';
        }

        $get_pic_pos = true;
        include('include/search.inc.php');

        return $pos;
        break;

    case 'favpics': // Favorite Files

        global $FAVPICS;
        
        if (empty($FAVPICS)) {
            return 0;
        }
        
        $favs = implode(', ', $FAVPICS);
    
        $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} AS p
            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid
            $RESTRICTEDWHERE
            AND approved = 'YES'
            AND pid IN ($favs)
            AND pid < $pid";

            $result = cpg_db_query($query);

            list($pos) = mysql_fetch_row($result);
            mysql_free_result($result);

        return $pos;
        break;

    case 'datebrowse': // Browsing by uploading date

        $superCage = Inspekt::makeSuperCage();
        // Using getRaw():  The date is sanitized in the called function
        $date = $superCage->get->keyExists('date') ? cpgValidateDate($superCage->get->getRaw('date')) : null;

        $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} AS p
            INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid
            $RESTRICTEDWHERE
            AND approved = 'YES'
            AND substring(from_unixtime(ctime),1,10) = '" . substr($date, 0, 10) . "'
            AND pid < $pid";

            $result = cpg_db_query($query);

            list($pos) = mysql_fetch_row($result);
            mysql_free_result($result);

        return $pos;
        break;


    default : // Invalid/custom meta album
        $pos = CPGPluginAPI::filter('meta_album_get_pic_pos', $album);
        if (is_numeric($pos)) {
            return $pos; // Custom meta album
        } else {
            return FALSE; // Invalid meta album
        }

    } // switch
} // function get_pic_pos

// Get the name of an album

/**
 * get_album_name()
 *
 * @param $aid
 * @return
 **/

function get_album_name($aid)
{
    global $CONFIG;
    global $lang_errors;

    $result = cpg_db_query("SELECT title, keyword FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = $aid");

    $count = mysql_num_rows($result);

    if ($count > 0) {
        $row = mysql_fetch_assoc($result);
        mysql_free_result($result);
        return $row;
    } else {
        cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }
} // function get_album_name


// Return the name of a user

/**
 * get_username()
 *
 * @param $uid
 * @return
 **/
function get_username($uid)
{
    global $cpg_udb;

    $uid = (int) $uid;

    if (!$uid) {
        return 'Anonymous';
    } elseif (defined('UDB_INTEGRATION')) {
        return $cpg_udb->get_user_name($uid);
    }
} // function get_username


// Return the ID of a user

/**
 * get_userid()
 *
 * @param $username
 * @return
 **/
function get_userid($username)
{
    global $cpg_udb;

    $username = addslashes($username);

    if (!$username) {
        return 0;
    } elseif (defined('UDB_INTEGRATION')) {
        return $cpg_udb->get_user_id($username);
    }
}

// get number of pending approvals

/**
 * cpg_get_pending_approvals()
 *
 * @return
 **/
function cpg_get_pending_approvals()
{
    global $CONFIG;

    $result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO'");

    list($count) = mysql_fetch_row($result);
    mysql_free_result($result);

    return $count;
}

// Return the total number of comments for a certain picture

/**
 * count_pic_comments()
 *
 * @param $pid
 * @param integer $skip
 * @return
 **/
function count_pic_comments($pid, $skip = 0)
{
    global $CONFIG;

    $sql = "SELECT COUNT(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid = $pid";

    if ($skip) {
        $sql .= " AND msg_id != $skip";
    }

    $result = cpg_db_query($sql);

    list($count) = mysql_fetch_row($result);
    mysql_free_result($result);

    return $count;
}

/******************
/**
 * cpg_determine_client()
 *
 * @param
 * @return $return_array
 **/
function cpg_determine_client()
{
    //Making Cage
    $superCage = Inspekt::makeSuperCage();

    /**
     * Populate the client stats
     */

    // Get the details of user browser, IP, OS, etc
    $server_agent = $superCage->server->getRaw('HTTP_USER_AGENT');

    $os = 'Unknown';
    if (preg_match('#Ubuntu#i', $server_agent)) {
        $os = 'Linux Ubuntu';
    } elseif (preg_match('#Debian#i', $server_agent)) {
        $os = 'Linux Debian';
    } elseif (preg_match('#CentOS#i', $server_agent)) {
        $os = 'Linux CentOS';
    } elseif (preg_match('#Fedora#i', $server_agent)) {
        $os = 'Linux Fedora';
    } elseif (preg_match('#Mandrake#i', $server_agent)) {
        $os = 'Linux Mandrake';
    } elseif (preg_match('#RedHat#i', $server_agent)) {
        $os = 'Linux RedHat';
    } elseif (preg_match('#Suse#i', $server_agent)) {
        $os = 'Linux Suse';
    } elseif (preg_match('#Linux#i', $server_agent)) {
        $os = 'Linux';
    } elseif (preg_match('#Windows NT 5.0#i', $server_agent)) {
        $os = 'Windows 2000';
    } elseif (preg_match('#win98|Windows 98#i', $server_agent)) {
        $os = 'Windows 98';
    } elseif (preg_match('#Windows NT 5\.1#i', $server_agent)) {
        $os = 'Windows XP';
    } elseif (preg_match('#Windows NT 5\.2#i', $server_agent)) {
        $os = 'Windows 2003 Server';
    } elseif (preg_match('#Windows NT 6\.0#i', $server_agent)) {
        $os = 'Windows Vista';
    } elseif (preg_match('#Windows NT 6\.1#i', $server_agent)) {
        $os = 'Windows 7';
    } elseif (preg_match('#Windows CE#i', $server_agent)) {
        $os = 'Windows CE';
    } elseif (preg_match('#Windows#i', $server_agent)) {
        $os = 'Windows';
    } elseif (preg_match('#SunOS#i', $server_agent)) {
        $os = 'Sun OS';
    } elseif (preg_match('#Macintosh#i', $server_agent)) {
        $os = 'Macintosh';
    } elseif (preg_match('#Mac_PowerPC#i', $server_agent)) {
        $os = 'Mac OS';
    } elseif (preg_match('#Mac_PPC#i', $server_agent)) {
        $os = 'Macintosh';
    } elseif (preg_match('#OS/2#i', $server_agent)) {
        $os = 'OS/2';
    } elseif (preg_match('#aix#i', $server_agent)) {
        $os = 'aix';
    } elseif (preg_match('#FreeBSD#i', $server_agent)) {
        $os = 'BSD FreeBSD';
    } elseif (preg_match('#Unix#i', $server_agent)) {
        $os = 'Unix';
    } elseif (preg_match('#iphone#i', $server_agent)) {
        $os = 'iPhone';
    } elseif (preg_match('#Nintendo Wii#i', $server_agent)) {
        $os = 'Nintendo Wii';
    } elseif (preg_match('#PalmOS#i', $server_agent)) {
        $os = 'PalmOS';
    } elseif (preg_match('#Symbian#i', $server_agent)) {
        $os = 'Symbian';
    } elseif (preg_match('#PLAYSTATION 3#i', $server_agent)) {
        $os = 'Playstation 3';
    } elseif (preg_match('#PlayStation Portable#i', $server_agent)) {
        $os = 'Playstation Portable';
    } elseif (preg_match('#Playstation#i', $server_agent)) {
        $os = 'Playstation';
    } elseif (preg_match('#Inferno#i', $server_agent)) {
        $os = 'Inferno';
    } elseif (preg_match('#BeOS#i', $server_agent)) {
        $os = 'beOS';
    }
    
    

    $browser = 'Unknown';
    if (preg_match('#MSIE#i', $server_agent)) {
        if (preg_match('#MSIE 8\.0#i', $server_agent)) {
            $browser = 'IE8';
        } elseif (preg_match('#MSIE 7\.0#i', $server_agent)) {
            $browser = 'IE7';
        } elseif (preg_match('#MSIE 6\.0#i', $server_agent)) {
            $browser = 'IE6';
        } elseif (preg_match('#MSIE 5\.5#i', $server_agent)) {
            $browser = 'IE5.5';
        } elseif (preg_match('#MSIE 5\.0#i', $server_agent)) {
            $browser = 'IE5.0';
        } elseif (preg_match('#MSIE 4\.0#i', $server_agent)) {
            $browser = 'IE4';
        } elseif (preg_match('#MSIE 3\.0#i', $server_agent)) {
            $browser = 'IE3';
        } else {
            $browser = 'IE';
        }
    } elseif (preg_match('#Nitro#i', $server_agent)) {
        $browser = 'Nintendo DS';
    } elseif (preg_match('#Nokia#i', $server_agent)) {
        $browser = 'Nokia';
    } elseif (preg_match('#iPhone#i', $server_agent)) {
        $browser = 'iPhone';
    } elseif (preg_match('#Epiphany#i', $server_agent)) {
        $browser = 'Epiphany';
    } elseif (preg_match('#Flock#i', $server_agent)) {
        $browser = 'Flock';
    } elseif (preg_match('#SeaMonkey#i', $server_agent)) {
        $browser = 'SeaMonkey';
    } elseif (preg_match('#Phoenix#i', $server_agent)) {
        $browser = 'Phoenix';
    } elseif (preg_match('#Firebird#i', $server_agent)) {
        $browser = 'Mozilla Firebird';
    } elseif (preg_match('#NetSurf#i', $server_agent)) {
        $browser = 'NetSurf';
    } elseif (preg_match('#netscape#i', $server_agent)) {
        $browser = 'Netscape';
    } elseif (preg_match('#Chrome#i', $server_agent)) {
        $browser = 'Chrome';
    } elseif (preg_match('#Firefox#i', $server_agent)) {
        $browser = 'Firefox';
    } elseif (preg_match('#Galeon#i', $server_agent)) {
        $browser = 'Galeon';
    } elseif (preg_match('#Camino#i', $server_agent)) {
        $browser = 'Camino';
    } elseif (preg_match('#Konqueror#i', $server_agent)) {
        $browser = 'Konqueror';
    } elseif (preg_match('#Cheshire#i', $server_agent)) {
        $browser = 'AOL';
    } elseif (preg_match('#Safari#i', $server_agent)) {
        $browser = 'Safari';
    } elseif (preg_match('#OmniWeb#i', $server_agent)) {
        $browser = 'OmniWeb';
    } elseif (preg_match('#Opera#i', $server_agent)) {
        $browser = 'Opera';
    } elseif (preg_match('#HTTrack#i', $server_agent)) {
        $browser = 'HTTrack';
    } elseif (preg_match('#OffByOne#i', $server_agent)) {
        $browser = 'Off By One';
    } elseif (preg_match('#amaya#i', $server_agent)) {
        $browser = 'Amaya';
    } elseif (preg_match('#iCab#i', $server_agent)) {
        $browser = 'iCab';
    } elseif (preg_match('#Lynx#i', $server_agent)) {
        $browser = 'Lynx';
    } elseif (preg_match('#Googlebot#i', $server_agent)) {
        $browser = 'Googlebot';
    } elseif (preg_match('#Lycos_Spider#i', $server_agent)) {
        $browser = 'Lycos Spider';
    } elseif (preg_match('#Firefly#i', $server_agent)) {
        $browser = 'Fireball Spider';
    } elseif (preg_match('#Amiga-AWeb#i', $server_agent)) {
        $browser = 'AWeb';
    } elseif (preg_match('#Cyberdog#i', $server_agent)) {
        $browser = 'Cyberdog';
    } elseif (preg_match('#Dillo#i', $server_agent)) {
        $browser = 'Dillo';
    } elseif (preg_match('#DreamPassport#i', $server_agent)) {
        $browser = 'DreamCast';
    } elseif (preg_match('#eCatch#i', $server_agent)) {
        $browser = 'eCatch';
    } elseif (preg_match('#ANTFresco#i', $server_agent)) {
        $browser = 'Fresco';
    } elseif (preg_match('#RSS#i', $server_agent)) {
        $browser = 'RSS';
    } elseif (preg_match('#Avant#i', $server_agent)) {
        $browser = 'Avant';
    } elseif (preg_match('#HotJava#i', $server_agent)) {
        $browser = 'HotJava';
    } elseif (preg_match('#W3C-checklink|W3C_Validator|Jigsaw#i', $server_agent)) {
        $browser = 'W3C';
    } elseif (preg_match('#K-Meleon#i', $server_agent)) {
        $browser = 'K-Meleon';
    } elseif (preg_match('#Iceape#i', $server_agent)) {
        $browser = 'Iceape';
    } elseif (preg_match('#Iceweasel#i', $server_agent)) {
        $browser = 'Iceweasel';
    } elseif (preg_match('#Kazehakase#i', $server_agent)) {
        $browser = 'Kazehakase';
    } elseif (preg_match('#Minefield#i', $server_agent)) {
        $browser = 'Firefox';
    } elseif (preg_match('#Namoroka#i', $server_agent)) {
        $browser = 'Firefox';
    } elseif (preg_match('#MC680x0#i', $server_agent)) {
        $browser = 'Amiga Voyager';
    } elseif (preg_match('#AOL #i', $server_agent)) {
        $browser = 'AOL';
    } elseif (preg_match('#Beonex#i', $server_agent)) {
        $browser = 'Beonex';
    } elseif (preg_match('#BonEcho#i', $server_agent)) {
        $browser = 'Mozilla';
    } elseif (preg_match('#Charon#i', $server_agent)) {
        $browser = 'Charon';
    } elseif (preg_match('#Chimera#i', $server_agent)) {
        $browser = 'Chimera';
    } elseif (preg_match('#Crazy Browser#i', $server_agent)) {
        $browser = 'Crazy Browser';
    } elseif (preg_match('#Fennec#i', $server_agent)) {
        $browser = 'Firefox';
    } elseif (preg_match('#iNet Browser#i', $server_agent)) {
        $browser = 'iNet';
    } elseif (preg_match('#iSonyEricsson#i', $server_agent)) {
        $browser = 'Sony Ericsson';
    } elseif (preg_match('#MAXTHON#i', $server_agent)) {
        $browser = 'Maxthon';
    } elseif (preg_match('#NCSA Mosaic#i', $server_agent)) {
        $browser = 'Mosaic';
    } elseif (preg_match('#NetNewsWire#i', $server_agent)) {
        $browser = 'NetNewsWire';
    } elseif (preg_match('#NetPositive#i', $server_agent)) {
        $browser = 'NetPositive';
    } elseif (preg_match('#Shiira#i', $server_agent)) {
        $browser = 'Shiira';
    } elseif (preg_match('#Shiretoko#i', $server_agent)) {
        $browser = 'Firefox';
    } elseif (preg_match('#Sleipnir#i', $server_agent)) {
        $browser = 'Sleipnir';
    } elseif (preg_match('#Stainless#i', $server_agent)) {
        $browser = 'Stainless';
    } elseif (preg_match('#Sunrise#i', $server_agent)) {
        $browser = 'Sunrise';
    }
    // Information partially taken from http://www.useragentstring.com/

    //Code to get the search string if the referrer is any of the following
    $search_engines = array(
        'google',
        'lycos',
        'yahoo'
    );

    $query_array = array();
    foreach ($search_engines as $engine) {
        if (is_referer_search_engine($engine)) {
            $query_array = get_search_query_terms($engine);
            break;
        }
    }
    $query_terms = is_array($query_array) ? implode(',', $query_array) : '';

    $return_array = array(
        'os' => $os,
        'browser' => $browser,
        'query_terms' => $query_terms
    );

    return $return_array;
}


// Add 1 everytime a picture is viewed.

/**
 * add_hit()
 *
 * @param $pid
 * @return
 **/
function add_hit($pid)
{
    global $CONFIG, $raw_ip;

    if ($CONFIG['count_file_hits']) {
        cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET hits = hits + 1, lasthit_ip = '$raw_ip', mtime = CURRENT_TIMESTAMP WHERE pid = $pid");
    }

    /**
     * Code to record the details of hits for the picture, if the option is set in CONFIG
     */

    if ($CONFIG['hit_details']) {

        // Get the details of user browser, IP, OS, etc
        $client_details = cpg_determine_client();
        $search_phrase = addslashes($client_details['query_terms']);

        //Making Cage
        $superCage = Inspekt::makeSuperCage();

        $time = time();

        //Sanitize the referer
        if ($superCage->server->keyExists('HTTP_REFERER')) {
            $referer = $superCage->server->getEscaped('HTTP_REFERER');
        } else {
            $referer = '';
        }

        $hitUserId = USER_ID;

        // Insert the record in database
        $query = "INSERT INTO {$CONFIG['TABLE_HIT_STATS']} SET"
            ." pid = $pid,"
            ." search_phrase = '$search_phrase',"
            ." Ip   = '$raw_ip',"
            ." sdate = '$time',"
            ." referer='$referer',"
            ." browser = '{$client_details['browser']}',"
            ." os = '{$client_details['os']}',"
            ." uid ='$hitUserId'";
        cpg_db_query($query);
    }
}

/**
 * add_album_hit()
 * Add a hit to the album.
 * @param $pid
 * @return
 **/
function add_album_hit($aid)
{
    global $CONFIG;

    if ($CONFIG['count_album_hits']) {
        $aid = (int) $aid;
        cpg_db_query("UPDATE {$CONFIG['TABLE_ALBUMS']} SET alb_hits = alb_hits + 1 WHERE aid = $aid");
    }
}
/**
 * breadcrumb()
 *
 * Build the breadcrumb navigation
 *
 * @param integer $cat
 * @param string $breadcrumb
 * @param string $BREADCRUMB_TEXT
 * @return
 **/

function breadcrumb($cat, &$breadcrumb, &$BREADCRUMB_TEXT)
{
    global $lang_list_categories, $lang_common;
    global $CONFIG,$CURRENT_ALBUM_DATA, $CURRENT_CAT_NAME;

    $category_array = array();

    // first we build the category path: names and id
    if ($cat != 0) { //Categories other than 0 need to be selected

        if ($cat >= FIRST_USER_CAT) {

            $result = cpg_db_query("SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = " . USER_GAL_CAT);

            $row = mysql_fetch_assoc($result);

            $category_array[] = array(USER_GAL_CAT, $row['name']);

            $user_name = get_username($cat - FIRST_USER_CAT);

            if (!$user_name) {
                $user_name = $lang_common['username_if_blank'];
            }

            $category_array[] = array($cat, $user_name);
            $CURRENT_CAT_NAME = sprintf($lang_list_categories['xx_s_gallery'], $user_name);

            $row['parent'] = 1;

        } else {

            $result = cpg_db_query("SELECT p.cid, p.name FROM {$CONFIG['TABLE_CATEGORIES']} AS c,
                {$CONFIG['TABLE_CATEGORIES']} AS p
                WHERE c.lft BETWEEN p.lft AND p.rgt
                AND c.cid = $cat
                ORDER BY p.lft");

            while ( ($row = mysql_fetch_assoc($result)) ) {
                $category_array[] = array($row['cid'], $row['name']);
                $CURRENT_CAT_NAME = $row['name'];
            }

            mysql_free_result($result);
        }
    }

    $breadcrumb_links = array();
    $BREADCRUMB_TEXTS = array();

    // Add the Home link  to breadcrumb
    $breadcrumb_links[0] = '<a href="index.php">'.$lang_list_categories['home'].'</a>';
    $BREADCRUMB_TEXTS[0] = $lang_list_categories['home'];

    $cat_order = 1;

    foreach ($category_array as $category) {

        $breadcrumb_links[$cat_order] = "<a href=\"index.php?cat={$category[0]}\">{$category[1]}</a>";
        $BREADCRUMB_TEXTS[$cat_order] = $category[1];

        $cat_order += 1;
    }

    //Add Link for album if aid is set
    if (isset($CURRENT_ALBUM_DATA['aid'])) {
        $breadcrumb_links[$cat_order] = "<a href=\"thumbnails.php?album=".$CURRENT_ALBUM_DATA['aid']."\">".$CURRENT_ALBUM_DATA['title']."</a>";
        $BREADCRUMB_TEXTS[$cat_order] = $CURRENT_ALBUM_DATA['title'];
    }

    // Build $breadcrumb,$BREADCRUMB_TEXT from _links and _TEXTS
    theme_breadcrumb($breadcrumb_links, $BREADCRUMB_TEXTS, $breadcrumb, $BREADCRUMB_TEXT);
}  // function breadcrumb


/**************************************************************************

 **************************************************************************/

// Compute image geometry based on max width / height

/**
 * compute_img_size()
 *
 * Compute image geometry based on max, width / height
 *
 * @param integer $width
 * @param integer $height
 * @param integer $max
 * @return array
 **/
function compute_img_size($width, $height, $max, $system_icon = false, $normal = false)
{
    global $CONFIG;

    $thumb_use = $CONFIG['thumb_use'];

    if ($thumb_use == 'ht') {
        $ratio = $height / $max;
    } elseif ($thumb_use == 'wd') {
        $ratio = $width / $max;
    } else {
        $ratio = max($width, $height) / $max;
    }

    if ($ratio > 1) {
        $image_size['reduced'] = true;
    }

    $ratio = max($ratio, 1);

    $image_size['width']  =  (int) ($width / $ratio);
    $image_size['height'] = (int) ($height / $ratio);
    $image_size['whole']  = 'width="' . $image_size['width'] . '" height="' . $image_size['height'] . '"';

    if ($thumb_use == 'ht') {
        $image_size['geom'] = ' height="' . $image_size['height'] . '"';
    } elseif ($thumb_use == 'wd') {
        $image_size['geom'] = 'width="' . $image_size['width'] . '"';

        //thumb cropping
    } elseif ($thumb_use == 'ex') {

        if ($normal == 'normal') {
            $image_size['geom'] = 'width="' . $image_size['width'] . '" height="' . $image_size['height'] . '"';
        } elseif ($normal == 'cat_thumb') {
            $image_size['geom'] = 'width="' . $max . '" height="' . ($CONFIG['thumb_height'] * $max / $CONFIG['thumb_width']) . '"';
        } else {
            $image_size['geom'] = 'width="' . $CONFIG['thumb_width'] . '" height="' . $CONFIG['thumb_height'] . '"';
        }
        //if we have a system icon we override the previous calculation and take 'any' as base for the calc
        if ($system_icon) {
            $image_size['geom'] = 'width="' . $image_size['width'] . '" height="' . $image_size['height'] . '"';
        }

    } else {
        $image_size['geom'] = 'width="' . $image_size['width'] . '" height="' . $image_size['height'] . '"';
    }

    return $image_size;
} // function compute_img_size

// Prints thumbnails of pictures in an album

/**
 * display_thumbnails()
 *
 * Generates data to display thumbnails of pictures in an album
 *
 * @param mixed $album Either the album ID or the meta album name
 * @param integer $cat Either the category ID or album ID if negative
 * @param integer $page Page number to display
 * @param integer $thumbcols
 * @param integer $thumbrows
 * @param boolean $display_tabs
 **/

function display_thumbnails($album, $cat, $page, $thumbcols, $thumbrows, $display_tabs)
{
    global $CONFIG, $USER, $LINEBREAK;
    global $lang_date, $lang_display_thumbnails, $lang_byte_units, $lang_common, $valid_meta_albums;

    $superCage = Inspekt::makeSuperCage();

    $thumb_per_page = $thumbcols * $thumbrows;
    $lower_limit    = ($page - 1) * $thumb_per_page;

    $pic_data = get_pic_data($album, $thumb_count, $album_name, $lower_limit, $thumb_per_page);

    $total_pages = ceil($thumb_count / $thumb_per_page);

    $i = 0;

    if (count($pic_data) > 0) {

        foreach ($pic_data as $key => $row) {

            $i++;

            $pic_title = $lang_common['filename'] . '=' . $row['filename'] . $LINEBREAK .
                $lang_common['filesize'] . '=' . ($row['filesize'] >> 10) . $lang_byte_units[1] . $LINEBREAK .
                $lang_display_thumbnails['dimensions'] . $row['pwidth'] . "x" . $row['pheight'] . $LINEBREAK .
                $lang_display_thumbnails['date_added'] . localised_date($row['ctime'], $lang_date['album']);

                $pic_title = CPGPluginAPI::filter('thumb_html_title', array($pic_title, $row));
                $pic_title = (is_array($pic_title)) ? $pic_title[0] : $pic_title;

            $pic_url = get_pic_url($row, 'thumb');

            if (!is_image($row['filename'])) {
                $image_info     = cpg_getimagesize(urldecode($pic_url));
                $row['pwidth']  = $image_info[0];
                $row['pheight'] = $image_info[1];
            }

            // thumb cropping - if we display a system thumb we calculate the dimension by any and not ex
            if (array_key_exists('system_icon', $row) && ($row['system_icon'] == true)) {
                $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['thumb_width'], true);
            } else {
                $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['thumb_width']);
            }

            $thumb_list[$i]['pos']          = $key < 0 ? $key : $i - 1 + $lower_limit;
            $thumb_list[$i]['pid']          = $row['pid'];
            $thumb_list[$i]['image']        = '<img src="' . $pic_url . '" class="image" ' . $image_size['geom'] . ' border="0" alt="' . $row['filename'] . '" title="' . $pic_title . '" />';
            $thumb_list[$i]['caption']      = bb_decode($row['caption_text']);
            $thumb_list[$i]['admin_menu']   = '';
            $thumb_list[$i]['aid']          = $row['aid'];
            $thumb_list[$i]['pwidth']       = $row['pwidth'];
            $thumb_list[$i]['pheight']      = $row['pheight'];
            // cpg1.5: new thumb fields below
            $thumb_list[$i]['title']        = $row['title'];
            $thumb_list[$i]['description']  = $row['caption'];
            $thumb_list[$i]['filepath']     = $row['filepath'];
            $thumb_list[$i]['filename']     = $row['filename'];
            $thumb_list[$i]['filesize']     = $row['filesize'];
            $thumb_list[$i]['msg_id']       = isset($row['msg_id']) ? $row['msg_id'] : '';   // needed for get_pic_pos()
        }

        // Add a hit to album counter if it is a numeric album
        if (is_numeric($album)) {

            // Create an array to hold the album id for hits (if not created)
            if (!isset($USER['liv_a']) || !is_array($USER['liv_a'])) {
                $USER['liv_a'] = array();
            }

            // Add 1 to album hit counter
            if ((!USER_IS_ADMIN && $CONFIG['count_admin_hits'] == 0 || $CONFIG['count_admin_hits'] == 1) && !in_array($album, $USER['liv_a']) && $superCage->cookie->keyExists($CONFIG['cookie_name'] . '_data')) {

                add_album_hit($album);

                if (count($USER['liv_a']) > 4) {
                    array_shift($USER['liv_a']);
                }

                array_push($USER['liv_a'], $album);
                user_save_profile();
            }
        }

        //Using getRaw(). The date is sanitized in the called function.
        $date = $superCage->get->keyExists('date') ? cpgValidateDate($superCage->get->getRaw('date')) : null;

        theme_display_thumbnails($thumb_list, $thumb_count, $album_name, $album, $cat, $page, $total_pages, is_numeric($album), $display_tabs, 'thumb', $date);

    } elseif (is_numeric($album) || in_array($album, $valid_meta_albums)) {
        theme_no_img_to_display($album_name);
    }
}

 /**
 * cpg_get_system_thumb_list()
 *
 * Return an array containing the system thumbs in a directory

 * @param string $search_folder
 * @return array
 **/
function cpg_get_system_thumb_list($search_folder = 'images/')
{
    global $CONFIG;
    static $thumbs = array();

    $folder = 'images/thumbs/';

    $thumb_pfx =& $CONFIG['thumb_pfx'];

    // If thumb array is empty get list from coppermine 'images' folder
    if ((count($thumbs) == 0) && ($folder == $search_folder)) {

        $dir = opendir($folder);

        while (($file = readdir($dir)) !== false) {

            if (is_file($folder . $file) && strpos($file, $thumb_pfx) === 0) {
                // Store filenames in an array
                $thumbs[] = array('filename' => $file);
            }
        }

        closedir($dir);

        return $thumbs;

    } elseif ($folder == $search_folder) {

        // Search folder is the same as coppermine images folder; just return the array
        return $thumbs;

    } else {

        // Search folder is different; check for files in the given folder
        $results = array();

        foreach ($thumbs as $thumb) {
            if (is_file($search_folder . $thumb['filename'])) {
                $results[] = array('filename' => $thumb['filename']);
            }
        }

        return $results;
    }
}


/**
 * cpg_get_system_thumb()
 *
 * Gets data for system thumbs
 *
 * @param string $filename
 * @param integer $user
 * @return array
 **/

function& cpg_get_system_thumb($filename, $user = 10001)
{
    global $CONFIG;

    // Correct user_id
    if ($user < 10000) {
        $user += 10000;
    }

    if ($user == 10000) {
        $user = 10001;
    }

    // Get image data for thumb
    $picdata = array(
        'filename'   => $filename,
        'filepath'   => $CONFIG['userpics'] . $user . '/',
        'url_prefix' => 0,
    );

    $pic_url = get_pic_url($picdata, 'thumb', true);

    $picdata['thumb'] = $pic_url;

    $image_info = cpg_getimagesize(urldecode($pic_url));

    $picdata['pwidth']  = $image_info[0];
    $picdata['pheight'] = $image_info[1];

    $image_size = compute_img_size($picdata['pwidth'], $picdata['pheight'], $CONFIG['alb_list_thumb_size']);

    $picdata['whole']   = $image_size['whole'];
    $picdata['reduced'] = (isset($image_size['reduced']) && $image_size['reduced']);

    return $picdata;
} // function cpg_get_system_thumb


/**
 * display_film_strip()
 *
 * gets data for thumbnails in an album for the film strip
 *
 * @param integer $album
 * @param integer $cat
 * @param integer $pos
 **/

function display_film_strip($album, $cat, $pos,$ajax_call)
{
    global $CONFIG, $LINEBREAK;
    global $lang_date, $lang_display_thumbnails, $lang_byte_units, $lang_common, $pic_count,$ajax_call,$pos;

    $superCage = Inspekt::makeSuperCage();

    $max_item    = $CONFIG['max_film_strip_items'];
    $thumb_width = $CONFIG['thumb_width'];

    /** set to variable with to javascript*/
    set_js_var('thumb_width', $thumb_width);
    set_js_var('thumb_use', $CONFIG['thumb_use']);

    if ($CONFIG['max_film_strip_items'] % 2 == 0) {
        $max_item  = $CONFIG['max_film_strip_items'] + 1;
        $pic_count = $pic_count + 1;
    }

    $max_item_real = $max_item;

    /** check the thumb_per_page variable valid to query database*/
    if ($pic_count < $max_item_real) {
        $max_item_real = $pic_count;
    }

    /** pass the max_items to the dispalyimage.js file */
    set_js_var('max_item', $max_item_real);

    $max_block_items = $CONFIG['max_film_strip_items'];

    $thumb_per_page = $max_item_real;

    /** assign the varible $l_limit diffen */
    $l_limit = (int) ($max_item_real / 2);
    $l_limit = max(0, $pos - $l_limit);

    /** set $l_limit to last images */
    if ($l_limit > ($pic_count - $max_item_real)) {
        $l_limit = $pic_count - $max_item_real;
    }

    $pic_data = get_pic_data($album, $thumb_count, $album_name, $l_limit, $thumb_per_page, false, 'filmstrip');

    if (count($pic_data) < $max_item) {
        $max_item = count($pic_data);
    }

    $lower_limit = 0;

    if ($ajax_call == 2) {
        $lower_limit = $max_item_real -1;
        $max_item    = 1;
    } elseif ($ajax_call == 1) {
        $lower_limit = 0;
        $max_item    = 1;
    }

    $pic_data = array_slice($pic_data, $lower_limit, $max_item);

    $i = $l_limit;

    set_js_var('count', $pic_count);

    $cat_link  = is_numeric($album) ? '' : '&amp;cat=' . $cat;
    //FIXME: Where does this '$date' come from?
    if (isset($date) && $date != '') {
        $date_link = '&amp;date=' . $date;
    } else {
        $date_link = '';
    }

    if ($superCage->get->getInt('uid')) {
        $uid_link = '&amp;uid=' . $superCage->get->getInt('uid');
    } else {
        $uid_link = '';
    }

    if (count($pic_data) > 0) {

        foreach ($pic_data as $key => $row) {
            //$hi is never used
            //$hi = (($pos == ($i + $lower_limit))  ? '1': '');

            $i++;

            $pic_alt = $row['filename'];

            $pic_title = $lang_common['filename'] . '=' . $row['filename'] . $LINEBREAK .
                $lang_common['filesize'] . '=' . ($row['filesize'] >> 10) . $lang_byte_units[1] . $LINEBREAK .
                $lang_display_thumbnails['dimensions'] . $row['pwidth'] . "x" . $row['pheight'] . $LINEBREAK .
                $lang_display_thumbnails['date_added'] . localised_date($row['ctime'], $lang_date['album']);
                
            $pic_title = CPGPluginAPI::filter('thumb_strip_html_title', array($pic_title, $row));
            $pic_title = (is_array($pic_title)) ? $pic_title[0] : $pic_title;


            $pic_url = get_pic_url($row, 'thumb');

            if (!is_image($row['filename'])) {

                $image_info = cpg_getimagesize(urldecode($pic_url));

                $row['pwidth']  = $image_info[0];
                $row['pheight'] = $image_info[1];
            }

            //thumb cropping
            /*if (array_key_exists('system_icon', $row) && ($row['system_icon'] == true)) {
                $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['thumb_width'], true);
            } else {
                $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['thumb_width']);
            }*/ //'$image_size' is never used

            $p = $i - 1 + $lower_limit;
            $p = ($p < 0 ? 0 : $p);

            $thumb_list[$i]['pos']        = $key < 0 ? $key : $p;
            $thumb_list[$i]['image']      = '<img src="' . $pic_url . '" class="strip_image" border="0" alt="' . $row['filename'] . '" title="' . $pic_title . '" />';
            $thumb_list[$i]['admin_menu'] = '';
            $thumb_list[$i]['pid']        = $row['pid'];
            $thumb_list[$i]['msg_id']     = isset($row['msg_id']) ? $row['msg_id'] : ''; // needed for get_pic_pos()

            $msg_id = isset($row['msg_id']) ? '&amp;msg_id='.$row['msg_id'] : '';
            $page = isset($row['msg_id']) ? '&amp;page='.cpg_get_comment_page_number($row['msg_id']) : '';
            $hash = isset($row['msg_id']) ? '#comment'.$row['msg_id'] : '#top_display_media';

            $target = "displayimage.php?album=$album$cat_link$date_link&amp;pid={$row['pid']}$msg_id$page$uid_link$hash";
        }

        // Get the pos for next and prev links in filmstrip navigation
        $filmstrip_next_pos = $pos + 1;
        $filmstrip_prev_pos = $pos - 1;

        // If next pos is greater then total pics then make it pic_count - 1
        $filmstrip_next_pos = $filmstrip_next_pos >= $pic_count ? $pic_count - 1 : $filmstrip_next_pos;

        // If prev pos is less than 0 then make it 0
        $filmstrip_prev_pos = $filmstrip_prev_pos < 0 ? 0 : $filmstrip_prev_pos;

        //Using getRaw(). The date is sanitized in the called function.
        $date = $superCage->get->keyExists('date') ? cpgValidateDate($superCage->get->getRaw('date')) : null;

        if ($ajax_call == 2 || $ajax_call == 1) {

            $setArray = array(
                'url'        => $pic_url,
                'target'     => $target,
                'alt'        => $pic_alt,
                'title'      => $pic_title,
             );

             header("Content-Type: text/plain");
             echo json_encode($setArray);

        } else {
            return theme_display_film_strip($thumb_list, $thumb_count, $album_name, $album, $cat, $pos, is_numeric($album), 'thumb', $date, $filmstrip_prev_pos, $filmstrip_next_pos, $max_block_items, $thumb_width);
        }

    } else {

        if ($ajax_call == 2 || $ajax_call == 1) {

            $setArray = array(
                'url'        => 'images/stamp.png',
                'target'     => 'images/stamp.png',
                'alt'        => 'stamp.png',
                'title'      => '',
             );

             header("Content-Type: text/plain");
             echo json_encode($setArray);

        } else {
            theme_no_img_to_display($album_name);
        }
    }
}


/**
 * display_slideshow()
 *
 * gets data for thumbnails in an album for the film stript using Ajax call
 *
 * this added by Nuwan Sameera Hettiarachchi
 *
 * @param integer $album
 * @param integer $cat
 * @param integer $pos
 **/
function& display_slideshow($pos, $ajax_show = 0)
{
    global $CONFIG, $album, $pid, $slideshow, $USER;

    $superCage = Inspekt::makeSuperCage();

    $Pic   = array();
    $Pid   = array();
    $Title = array();

    $i = 0;
    $j = 0;

    /** get the pic details by querying database*/
    $pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);

    /** calculate total amount of pic a perticular album */
    if ($ajax_show == 0) {
        set_js_var('Pic_count', $pic_count);
    }
    
    foreach ($pic_data as $picture) {

        if ($CONFIG['thumb_use'] == 'ht' && $picture['pheight'] > $CONFIG['picture_width']) { // The wierd comparision is because only picture_width is stored
            $condition = true;
        } elseif ($CONFIG['thumb_use'] == 'wd' && $picture['pwidth'] > $CONFIG['picture_width']) {
            $condition = true;
        } elseif ($CONFIG['thumb_use'] == 'any' && max($picture['pwidth'], $picture['pheight']) > $CONFIG['picture_width']) {
            $condition = true;
            //thumb cropping
        } elseif ($CONFIG['thumb_use'] == 'ex' && max($picture['pwidth'], $picture['pheight']) > $CONFIG['picture_width']) {
            $condition = true;
        } else {
            $condition = false;
        }

        if (is_image($picture['filename'])) {

            if ($CONFIG['make_intermediate'] && $condition) {
                $picture_url = get_pic_url($picture, 'normal');
            } else {
                $picture_url = get_pic_url($picture, 'fullsize');
            }

            $Pic[$i] = htmlspecialchars($picture_url, ENT_QUOTES);

            /*if ($picture['pid'] == $pid) {
                $j         = $i;
                $start_img = $picture_url;
            }*/ //$j and $start_img are never used
        } else {
            $pic_url = get_pic_url($picture, 'thumb');
            $Pic[$i] = htmlspecialchars($pic_url);
        }

        $Pid[$i]   = $picture['pid'];
        $Title[$i] = $picture['title'] ? $picture['title'] : $picture['filename'];

        $i++;
    }

    /** set variables to jquery.slideshow.js */
    set_js_var('Time', $slideshow);
    set_js_var('Pid', $pid);

    /*if (!$i) {
        $Pic[0] = 'images/thumb_document.jpg';
    }*/

    // Add the hit if slideshow hits are enabled in config
    if ((!USER_IS_ADMIN && $CONFIG['count_admin_hits'] == 0 || $CONFIG['count_admin_hits'] == 1) && $CONFIG['slideshow_hits'] != 0) {
        // Add 1 to hit counter
        if (!in_array($Pid['0'], $USER['liv']) && $superCage->cookie->keyExists($CONFIG['cookie_name'] . '_data')) {

            add_hit($Pid['0']);

            if (count($USER['liv']) > 4) {
                array_shift($USER['liv']);
            }

            array_push($USER['liv'], $Pid['0']);
            user_save_profile();
        }
    }

    /** show slide show on first time*/
    if ($ajax_show == 0) {
        theme_slideshow($Pic['0'], $Title['0']);
    }

    /** now we make a array to encode*/
    $dataArray = array(
        'url' => $Pic['0'],
        'title' => $Title['0'],
        'pid' => $Pid['0'],
    );

    $dataJson = json_encode($dataArray);

    /** send variable to javascript script*/
    if ($ajax_show == 1) {
        header("Content-Type: text/plain");
        echo $dataJson;
    }
}

// Return the url for a picture, allows to have pictures spreaded over multiple servers
/**
 * get_pic_url()
 *
 * Return the url for a picture
 *
 * @param array $pic_row
 * @param string $mode
 * @param boolean $system_pic
 * @return string
 **/

function& get_pic_url(&$pic_row, $mode, $system_pic = false)
{
    global $CONFIG, $THEME_DIR;

    static $pic_prefix = array();
    static $url_prefix = array();

    if (!count($pic_prefix)) {
        $pic_prefix = array(
            'thumb'    => $CONFIG['thumb_pfx'],
            'normal'   => $CONFIG['normal_pfx'],
            'orig'     => $CONFIG['orig_pfx'],
            'fullsize' => '',
        );

        $url_prefix = array(
            0 => $CONFIG['fullpath'],
        );
    }

    $mime_content = cpg_get_type($pic_row['filename']);

    // If $mime_content is empty there will be errors, so only perform the array_merge if $mime_content is actually an array
    if (is_array($mime_content)) {
        $pic_row = array_merge($pic_row, $mime_content);
    }

    $filepathname = null;

    // Code to handle custom thumbnails
    // If fullsize or normal mode use regular file
    if ($mime_content['content'] != 'image' && $mode == 'normal') {
        $mode = 'fullsize';
    } elseif (($mime_content['content'] != 'image' && $mode == 'thumb') || $system_pic) {

        $thumb_extensions = array(
            '.gif',
            '.png',
            '.jpg'
        );

        // Check for user-level custom thumbnails
        // Create custom thumb path and erase extension using filename; Erase filename's extension

        if (array_key_exists('url_prefix', $pic_row)) {
            $custom_thumb_path = $url_prefix[$pic_row['url_prefix']];
        } else {
            $custom_thumb_path = '';
        }

        $custom_thumb_path .= $pic_row['filepath'] . (array_key_exists($mode, $pic_prefix) ? $pic_prefix[$mode] : '');

        $file_base_name = str_replace('.' . $mime_content['extension'], '', basename($pic_row['filename']));

        // Check for file-specific thumbs
        foreach ($thumb_extensions as $extension) {
            if (file_exists($custom_thumb_path . $file_base_name . $extension)) {
                $filepathname = $custom_thumb_path . $file_base_name . $extension;
                break;
            }
        }

        if (!$system_pic) {

            // Check for extension-specific thumbs
            if (is_null($filepathname)) {
                foreach ($thumb_extensions as $extension) {
                    if (file_exists($custom_thumb_path . $mime_content['extension'] . $extension)) {
                        $filepathname = $custom_thumb_path . $mime_content['extension'] . $extension;
                        break;
                    }
                }
            }

            // Check for content-specific thumbs
            if (is_null($filepathname)) {
                foreach ($thumb_extensions as $extension) {
                    if (file_exists($custom_thumb_path . $mime_content['content'] . $extension)) {
                        $filepathname = $custom_thumb_path . $mime_content['content'] . $extension;
                        break;
                    }
                }
            }
        }

        // Use default thumbs
        if (is_null($filepathname)) {

            // Check for default theme- and global-level thumbs
            $thumb_paths[] = $THEME_DIR.'images/';                 // Used for custom theme thumbs
            $thumb_paths[] = 'images/thumbs/';                     // Default Coppermine thumbs

            foreach ($thumb_paths as $default_thumb_path) {
                if (is_dir($default_thumb_path)) {
                    if (!$system_pic) {
                        foreach ($thumb_extensions as $extension) {
                            // Check for extension-specific thumbs
                            if (file_exists($default_thumb_path . $CONFIG['thumb_pfx'] . $mime_content['extension'] . $extension)) {
                                $filepathname = $default_thumb_path . $CONFIG['thumb_pfx'] . $mime_content['extension'] . $extension;
                                //thumb cropping - if we display a system thumb we calculate the dimension by any and not ex
                                $pic_row['system_icon'] = true;
                                break 2;
                            }
                        }
                        foreach ($thumb_extensions as $extension) {
                            // Check for media-specific thumbs (movie,document,audio)
                            if (file_exists($default_thumb_path . $CONFIG['thumb_pfx'] . $mime_content['content'] . $extension)) {
                                $filepathname = $default_thumb_path . $CONFIG['thumb_pfx'] . $mime_content['content'] . $extension;
                                //thumb cropping
                                $pic_row['system_icon'] = true;
                                break 2;
                            }
                        }
                    } else {
                        // Check for file-specific thumbs for system files
                        foreach ($thumb_extensions as $extension) {
                            if (file_exists($default_thumb_path . $CONFIG['thumb_pfx'] . $file_base_name . $extension)) {
                                $filepathname = $default_thumb_path . $CONFIG['thumb_pfx'] . $file_base_name . $extension;
                                //thumb cropping
                                $pic_row['system_icon'] = true;
                                break 2;
                            }
                        } // foreach $thumb_extensions
                    } // else $system_pic
                } // if is_dir($default_thumb_path)
            } // foreach $thumbpaths
        } // if is_null($filepathname)

        if ($filepathname) {
            $filepathname = path2url($filepathname);
        }
    }

    if (is_null($filepathname)) {
        
        $localpath = $pic_row['filepath'] . $pic_prefix[$mode] . $pic_row['filename'];
        
        // Check here that the filename we are going to return exists
        // If it doesn't exist we return a placeholder image
        // We then log the missing file for the admin's attention
        if (file_exists($url_prefix[$pic_row['url_prefix']] . $localpath)) {
            $filepathname = $url_prefix[$pic_row['url_prefix']] . path2url($localpath);
        } else {
            $filepathname = 'images/thumbs/thumb_nopic.png';
            $pic_row['system_icon'] = true;
            if ($CONFIG['log_mode'] != 0) {
                log_write("File {$url_prefix[$pic_row['url_prefix']]}$localpath is missing.");
            }
        }
    }

    // Added hack:  "&& !isset($pic_row['mode'])" thumb_data filter isn't executed for the fullsize image
    if ($mode == 'thumb' && !isset($pic_row['mode'])) {
        $pic_row['url']  = $filepathname;
        $pic_row['mode'] = $mode;

        $pic_row = CPGPluginAPI::filter('thumb_data', $pic_row);
    } elseif ($mode != 'thumb') {
        $pic_row['url']  = $filepathname;
        $pic_row['mode'] = $mode;
    } else {
        $pic_row['url'] = $filepathname;
    }

    $pic_row = CPGPluginAPI::filter('picture_url', $pic_row);

    return $pic_row['url'];
} // function get_pic_url


/**
 * cpg_get_default_lang_var()
 *
 * Return a variable from the default language file
 *
 * @param $language_var_name
 * @param unknown $override_language
 * @return
 **/
function& cpg_get_default_lang_var($language_var_name, $override_language = null)
{
    global $CONFIG;

    if (is_null($override_language)) {
        if (isset($CONFIG['default_lang'])) {
            $language = $CONFIG['default_lang'];
        } else {
            global $$language_var_name;
            return $$language_var_name;
        }
    } else {
        $language = $override_language;
    }

    include('lang/english.php');
    include('lang/'.$language.'.php');

    return $$language_var_name;
} // function cpg_get_default_lang_var

// Returns a variable from the current language file
// If variable doesn't exists gets value from english_us lang file

/**
 * cpg_lang_var()
 *
 * @param $varname
 * @param unknown $index
 * @return
 **/

function& cpg_lang_var($varname, $index = null)
{
    global $$varname;

    $lang_var =& $$varname;

    if (isset($lang_var)) {
        if (!is_null($index) && !isset($lang_var[$index])) {
            include('lang/english.php');
            return $lang_var[$index];
        } elseif (is_null($index)) {
            return $lang_var;
        } else {
            return $lang_var[$index];
        }
    } else {
        include('lang/english.php');
        return $lang_var;
    }
} // function cpg_lang_var


/**
 * cpg_debug_output()
 *
 * defined new debug_output function here in functions.inc.php instead of theme.php with different function names to avoid incompatibilities with users not updating their themes as required. Advanced info is only output if (GALLERY_ADMIN_MODE == TRUE)
 *
 **/

function cpg_debug_output()
{
    global $USER, $USER_DATA, $CONFIG, $cpg_time_start, $query_stats, $queries, $lang_cpg_debug_output, $CPG_PHP_SELF, $superCage, $CPG_PLUGINS, $LINEBREAK;
    if ($CONFIG['performance_timestamp'] == 0 || (date('Y-m-d', $CONFIG['performance_timestamp']) < date('Y-m-d'))) {
        // The metering data in the config table are outdated, let's write fresh values.
        // Currently happens each day. To extend the metering period to a whole week, 
        // use 'Y-m-W' for both date functions above. Use 'Y-m' to extend the period over
        // one month and subsequently 'Y' for an entire year.
        $CONFIG['performance_timestamp'] = time();
        cpg_config_set('performance_timestamp', $CONFIG['performance_timestamp']);
        $CONFIG['performance_page_generation_time'] = 0;
        $CONFIG['performance_page_query_time'] = 0;
        $CONFIG['performance_page_query_count'] = 0;
    }
    $time_end         = cpgGetMicroTime();
    $time             = round(($time_end - $cpg_time_start) * 1000);
    if ($CONFIG['performance_page_generation_time'] < $time) {
        $CONFIG['performance_page_generation_time'] = $time;
        cpg_config_set('performance_page_generation_time', $CONFIG['performance_page_generation_time']);
    }
    $query_count      = count($query_stats);
    $total_query_time = array_sum($query_stats);
    if ($CONFIG['performance_page_query_time'] < $total_query_time) {
        $CONFIG['performance_page_query_time'] = $total_query_time;
        cpg_config_set('performance_page_query_time', $CONFIG['performance_page_query_time']);
    }
    if ($CONFIG['performance_page_query_count'] < $query_count) {
        $CONFIG['performance_page_query_count'] = $query_count;
        cpg_config_set('performance_page_query_count', $CONFIG['performance_page_query_count']);
    }

    $debug_underline   = '&#0010;------------------&#0010;';
    $debug_separate    = '&#0010;==========================&#0010;';
    $debug_toggle_link = $lang_cpg_debug_output['debug_output'] . ': <span class="detail_head_collapsed">'. $lang_cpg_debug_output['show_hide'].'</span>';
    $debug_help = '&nbsp;'. cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_cpg_debug_output['debug_output_explain']))).'&amp;t='.urlencode(base64_encode(serialize($lang_cpg_debug_output['copy_and_paste_instructions']))), 470, 245);
    $debug_phpinfo_link = GALLERY_ADMIN_MODE ? '<a href="phpinfo.php" class="admin_menu">' . cpg_fetch_icon('phpinfo', 1) . $lang_cpg_debug_output['phpinfo'] . '</a> ' : '';

    echo <<< EOT
    <script language="javascript" type="text/javascript">
<!--
        addonload("document.getElementById('debug_output_select_all').style.display = 'inline'");
//-->
        </script>
    <form name="debug" action="{$CPG_PHP_SELF}" id="debug">
EOT;
    starttable('100%', cpg_fetch_icon('bug', 2) . $lang_cpg_debug_output['debug_info'] . $debug_help, 2);
    echo <<< EOT
    <tr>
        <td>
            
        </td>
    </tr>
    <tr>
        <td valign="top" align="left" class="tableb">
            {$debug_phpinfo_link}{$debug_toggle_link}
            <span class="detail_body">
                <button type="button" class="button" name="debug_output_select_all" style="display:none" id="debug_output_select_all" value="{$lang_cpg_debug_output['select_all']}" onclick="HighlightAll('debug.debugtext');">{$lang_cpg_debug_output['select_all']}</button><br />
                <textarea  rows="30" cols="60" class="debug_text" name="debugtext">
EOT;
    echo "USER: ";
    echo $debug_underline;
    print_r($USER);
    echo $debug_separate;
    echo "USER DATA:";
    echo $debug_underline;
    print_r($USER_DATA);
    echo $debug_separate;
    echo "Queries:";
    echo $debug_underline;
    print_r($queries);
    echo $debug_separate;
    echo "GET :";
    echo $debug_underline;
    print_r($superCage->get->_source);
    echo $debug_separate;
    echo "POST :";
    echo $debug_underline;
    print_r($superCage->post->_source);
    echo $debug_separate;
    echo "COOKIE :";
    echo $debug_underline;
    print_r($superCage->cookie->_source);
    echo $debug_separate;

    if ($superCage->cookie->keyExists('PHPSESSID')) {
        echo "SESSION :";
        echo $debug_underline;
        if(!isset($_SESSION)){
            session_id($superCage->cookie->getAlnum('PHPSESSID'));
            session_start();
        }
        print_r($_SESSION);
        echo $debug_separate;
    }

    if (GALLERY_ADMIN_MODE) {

        $table = array();
        echo "VERSION INFO :";
        echo $debug_underline;
        $my_php_version = phpversion();
        if ($my_php_version == '') {
            $my_php_version = PHP_VERSION;
        }
        if (version_compare($my_php_version, '4.3.0', '>=')) {
            $version_comment = 'OK';
        } else {
            $version_comment = 'Your PHP version isn\'t good enough! Minimum requirements: 4.3.0';
        }
        $table[] = array('PHP version', $my_php_version, $version_comment);

        $mySqlVersion = cpg_phpinfo_mysql_version();

        if (version_compare($mySqlVersion, '3.23.23', '>=')) {
            $version_comment = 'OK';
        } else {
            $version_comment = 'Your MySQL version isn\'t good enough! Minimum requirements: 3.23.23';
        }
        $table[] =  array('MySQL version', $mySqlVersion, $version_comment);

        $table[] =  array('Coppermine version', COPPERMINE_VERSION, COPPERMINE_VERSION_STATUS);
        echo cpg_fill_string_array_with_spaces($table, ' ', 'left', 'string');
        unset ($table);
        echo $debug_separate;

        if (function_exists('gd_info') == true) {
            echo 'Module: GD';
            echo $debug_underline;
            $gd_array = gd_info();
            $table = array();
            if (array_key_exists('GD Version' , $gd_array) == TRUE) {
                $table[] = array('Exact version', preg_replace('/[[:alpha:][:space:]()]+/', '', $gd_array['GD Version']));
            }
            foreach ($gd_array as $key => $value) {
                $table[] = array($key,$value);
            }
            echo cpg_fill_string_array_with_spaces($table, ' ', 'left', 'string');
            unset($gd_array);
            unset($table);
            echo $debug_separate;
        } else {
            echo cpg_phpinfo_mod_output('gd', 'text', '|');
        }

        echo 'Key config settings';
        echo $debug_underline;
        $table = array();
        $table[] = array('site_url', $CONFIG['site_url']);
        $table[] = array('charset', $CONFIG['charset']);
        $table[] = array('allow_private_albums', $CONFIG['allow_private_albums']);
        $table[] = array('cookie_name', $CONFIG['cookie_name']);
        $table[] = array('cookie_path', $CONFIG['cookie_path']);
        $table[] = array('impath', $CONFIG['impath']);
        $table[] = array('lang', $CONFIG['lang']);
        $table[] = array('main_page_layout', $CONFIG['main_page_layout']);
        $table[] = array('silly_safe_mode', $CONFIG['silly_safe_mode']);
        $table[] = array('smtp_host', $CONFIG['smtp_host']);
        $table[] = array('theme', $CONFIG['theme']);
        $table[] = array('thumb_method', $CONFIG['thumb_method']);
        echo cpg_fill_string_array_with_spaces($table, ' ', 'left', 'string');
        unset ($table);
        echo $debug_separate;

        echo 'Plugins';
        echo $debug_underline;
        $table = array();
        foreach ($CPG_PLUGINS as $plugin) {
            $table[] = array('Name', $plugin->name);
            $table[] = array('Actions', implode(', ', array_keys($plugin->actions)));
            $table[] = array('Filters', implode(', ', array_keys($plugin->filters)));
            $table[] = array('--------------');
        }
        echo cpg_fill_string_array_with_spaces($table, ' ', 'left', 'string');
        unset ($table);

        echo $debug_separate;
        echo 'Server restrictions';
        echo $debug_underline;
        $table = array();
        $table[] = array('safe_mode', ini_get('safe_mode'));
        $table[] = array('safe_mode_exec_dir', ini_get('safe_mode_exec_dir'));
        $table[] = array('safe_mode_gid', ini_get('safe_mode_gid'));
        $table[] = array('safe_mode_include_dir', ini_get('safe_mode_include_dir'));
        $table[] = array('sql.safe_mode', ini_get('sql.safe_mode'));
        $table[] = array('disable_functions', ini_get('disable_functions'));
        $table[] = array('file_uploads', ini_get('file_uploads'));
        $table[] = array('include_path', ini_get('include_path'));
        $table[] = array('open_basedir', ini_get('open_basedir'));
        $table[] = array('allow_url_fopen', ini_get('allow_url_fopen'));
        $table[] = array('max_execution_time', ini_get('max_execution_time'));
        $table[] = array('max_input_time', ini_get('max_input_time'));
        $table[] = array('upload_max_filesize', ini_get('upload_max_filesize'));
        $table[] = array('post_max_size', ini_get('post_max_size'));
        $table[] = array('memory_limit', ini_get('memory_limit'));
        $table[] = array('suhosin.post.max_vars', ini_get('suhosin.post.max_vars'));
        $table[] = array('suhosin.request.max_vars', ini_get('suhosin.request.max_vars'));
        echo cpg_fill_string_array_with_spaces($table, ' ', 'left', 'string');
        unset ($table);
        echo $LINEBREAK . $debug_separate;
        
        echo 'Page (performance)';
        echo $debug_underline;
        $table = array();
        $table[] = array('Parameter', 'Current', 'Peak');
        if (function_exists('memory_get_peak_usage')) {
            $peak_memory_usage = cpg_format_bytes(memory_get_peak_usage());
        } else {
            $peak_memory_usage = 'n/a';
        }
        $table[] = array('Memory usage', cpg_format_bytes(memory_get_usage()), $peak_memory_usage);
        $table[] = array('Page generation', $time . ' ms', $CONFIG['performance_page_generation_time'] . ' ms');
        $table[] = array('Page query time', $total_query_time . ' ms', $CONFIG['performance_page_query_time'] . ' ms');
        $table[] = array('Page query count', $query_count, $CONFIG['performance_page_query_count']);
        echo cpg_fill_string_array_with_spaces($table, ' ', 'left', 'string');
        unset ($table);
        echo $LINEBREAK . $debug_separate;

    }

    echo <<<EOT
                </textarea>
            </span>
        </td>
    </tr>
    
EOT;

    if ($CONFIG['debug_notice'] != 0) {
        // Maze's error report system
        global $cpgdebugger;
        $report = $cpgdebugger->stop();
        //$debug_notices_icon = cpg_fetch_icon('text_left', 2);
        if (GALLERY_ADMIN_MODE) {
            $notices_help =  $lang_cpg_debug_output['notices_help_admin'];
        } else {
            $notices_help =  $lang_cpg_debug_output['notices_help_non_admin'];
        }
        $notices_help = '&nbsp;' . cpg_display_help('f=empty.htm&amp;base=64&amp;h=' . urlencode(base64_encode(serialize($lang_cpg_debug_output['notices']))) . '&amp;t=' . urlencode(base64_encode(serialize($notices_help))), 470, 245);
        if (is_array($report)) {
            echo <<< EOT
            <tr>
                <td class="tableh2">
                    {$lang_cpg_debug_output['notices']}{$notices_help}
                </td>
            </tr>
EOT;
            $noticesLoopCounter = 0;
            foreach ($report as $file => $errors) {
                if ($noticesLoopCounter/2 == floor($noticesLoopCounter/2)) {
                    $cellstyle = 'tableb tableb_alternate';
                } else {
                    $cellstyle = 'tableb';
                }
                echo <<< EOT
            <tr>
                <td class="{$cellstyle}">
EOT;
                //echo '<strong>' . substr($file, $strstart) . '</strong><ul>'; //$strstart does not exist
                echo '<strong>' . $file . '</strong><ul>';
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo <<< EOT
                    </ul>
                </td>
            </tr>
EOT;
                $noticesLoopCounter++;
            }
        }
    }
    endtable();
    echo '</form>';

} // function cpg_debug_output


/**
 * cpg_phpinfo_mod()
 *
 * phpinfo-related functions:
 *
 * @param $search
 * @return
 **/

function cpg_phpinfo_mod($search)
{
    static $pieces = array();

    if (!$pieces) {

        // this could be done much better with regexpr - anyone who wants to change it: go ahead
        ob_start();
        phpinfo(INFO_MODULES);
        $string    = ob_get_contents();
        //$module    = $string;
        $delimiter = '#cpgdelimiter#';
        ob_end_clean();

        // find out the first occurence of "<h2" and throw the superfluos stuff away
        $string = stristr($string, 'module_' . $search);
        $string = preg_replace('#</table>(.*)#s', '', $string);
        $string = stristr($string, '<tr');
        $string = str_replace('</td>', '|', $string);
        $string = str_replace('</tr>', $delimiter, $string);
        $string = chop(strip_tags($string));
        $pieces = explode($delimiter, $string);
    }

    foreach ($pieces as $key => $val) {
        $bits[$key] = explode('|', $val);
    }

    return $bits;
} // function cpg_phpinfo_mod


/**
 * cpg_phpinfo_mod_output()
 *
 * @param $search
 * @param $output_type
 * @param $separator
 * @return
 **/

function cpg_phpinfo_mod_output($search, $output_type, $separator = ' ')
{
    // first parameter is the module name, second parameter is the way you want your output to look like: table or text
    $pieces = cpg_phpinfo_mod($search);
    $summ   = '';
    $return = '';

    $debug_underline = '&#0010;------------------&#0010;';
    $debug_separate  = '&#0010;==========================&#0010;';

    if ($output_type == 'table') {
        ob_start();
        starttable('100%', 'Module: ' . $search, 2);
        $return .= ob_get_contents();
        ob_end_clean();
    } else {
        $return .= 'Module: ' . $search . $debug_underline;
    }

    foreach ($pieces as $val) {
        if ($output_type == 'table') {
            $return .= '<tr><td>';
        }
        $return .= $val[0];
        if ($output_type == 'table') {
            $return .= '</td><td>';
        } else {
            $return .= $separator;
        }
        if (isset($val[1])) {
            $return .= $val[1];
        }
        if ($output_type == 'table') {
            $return .= '</td></tr>';
        }
        $summ .= $val[0];
    }
    if (!$summ) {
        if ($output_type == 'table') {
            $return .= '<tr><td colspan="2">';
        }
        $return .= 'module doesn\'t exist';
        if ($output_type == 'table') {
            $return .= '</td></tr>';
        }
    }
    if ($output_type == 'table') {
        ob_start();
        endtable();
        $return .= ob_get_contents();
        ob_end_clean();
    } else {
        $return .= $debug_separate;
    }
    return $return;
} // function cpg_phpinfo_mod_output


/**
 * cpg_phpinfo_mysql_version()
 *
 * @return
 **/

function cpg_phpinfo_mysql_version()
{
    $result = cpg_db_query("SELECT VERSION()");

    list($version) = mysql_fetch_row($result);

    return $version;
} // function cpg_phpinfo_mysql_version

function cpg_config_output($key)
{
    global $CONFIG, $LINEBREAK;

    return $key . ': ' . $CONFIG[$key] . $LINEBREAK;
} // function cpg_config_output


// THEME AND LANGUAGE SELECTION

/**
 * languageSelect()
 *
 * @param $parameter
 * @return
 **/

function languageSelect($parameter)
{
    global $CONFIG, $lang_language_selection, $lang_common, $CPG_PHP_SELF, $LINEBREAK;

    $return    = '';

    // get the current language
    //use the default language of the gallery
    //$cpgCurrentLanguage = $CONFIG['lang']; //not used

    // Forget all the nonsense sanitization code that used to reside here - redefine the variable for the base URL using the function that we already have for that purpose
    $cpgChangeUrl = cpgGetScriptNameParams('lang') . 'lang=';

    // Make sure that the language table exists in the first place -
    // return without return value if the table doesn't exist because
    // the upgrade script hasn't been run
    $results = cpg_db_query("SHOW TABLES LIKE '{$CONFIG['TABLE_LANGUAGE']}'");
    if (!mysql_num_rows($results)) {
        return;
    }
    mysql_free_result($results);

    // get list of available languages
    $results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_LANGUAGE']}");
    while ( ($row = mysql_fetch_array($results)) ) {
        if ($row['available'] == 'YES' && $row['enabled'] == 'YES' && file_exists('lang/'.$row['lang_id'].'.php')) {
            $lang_language_data[$row['lang_id']] = $row;
        }
    } // while
    mysql_free_result($results);

    // sort the array by English name
    ksort($lang_language_data);

    $value = strtolower($CONFIG['lang']);

    //start the output
    switch ($parameter) {

    case 'flags':
        $return .= '<div id="cpgChooseFlags" class="inline">';
        $return .= $lang_language_selection['choose_language'] . ': ';
        foreach ($lang_language_data as $language) {
            $return .= $LINEBREAK . '<a href="' . $cpgChangeUrl . $language['lang_id'] . '" rel="nofollow"><img src="images/flags/' . $language['flag'] . '.png" border="0" width="16" height="11" alt="" title="';
            $return .= $language['english_name'];
            if ($language['english_name'] != $language['native_name'] && $language['native_name'] != '') {
                $return .= ' / ' . $language['native_name'] ;
            }
            $return .= '" /></a>' . $LINEBREAK;
        }
        $return .=  '<a href="' . $cpgChangeUrl. 'xxx" rel="nofollow"><img src="images/flags/reset.png" border="0" width="16" height="11" alt="" title="';
        $return .=  $lang_language_selection['reset_language'] . '" /></a>' . $LINEBREAK;
        $return .= '</div>';
        break;

    case 'table':
        $return = 'not yet implemented';
        break;

    default:
        $return .= $LINEBREAK . '<div id="cpgChooseLanguageWrapper">' . $LINEBREAK . '<form name="cpgChooseLanguage" id="cpgChooseLanguage" action="' . $CPG_PHP_SELF . '" method="get" class="inline">' . $LINEBREAK;
        $return .= '<select name="lang" class="listbox_lang" onchange="if (this.options[this.selectedIndex].value) window.location.href=\'' . $cpgChangeUrl . '\' + this.options[this.selectedIndex].value;">' . $LINEBREAK;
        $return .='<option>' . $lang_language_selection['choose_language'] . '</option>' . $LINEBREAK;
        foreach ($lang_language_data as $language) {
            $return .=  '<option value="' . $language['lang_id']  . '" >';
            $return .= $language['english_name'];
            if ($language['english_name'] != $language['native_name'] && $language['native_name'] != '') {
                $return .= ' / ' . $language['native_name'] ;
            }
            $return .= ($value == $language['lang_id'] ? '*' : '');
            $return .= '</option>' . $LINEBREAK;
        }
        $return .=  '<option value="xxx">' . $lang_language_selection['reset_language'] . '</option>' . $LINEBREAK;
        $return .=  '</select>' . $LINEBREAK;
        $return .=  '<noscript>' . $LINEBREAK;
        $return .=  '<input type="submit" name="language_submit" value="' . $lang_common['go'] . '" class="listbox_lang" />&nbsp;'. $LINEBREAK;
        $return .=  '</noscript>' . $LINEBREAK;
        $return .=  '</form>' . $LINEBREAK;
        $return .=  '</div>' . $LINEBREAK;
    } // switch $parameter

    return $return;
} // function languageSelect


/**
 * themeSelect()
 *
 * @param $parameter
 * @return
 **/

function themeSelect($parameter)
{
    global $CONFIG,$lang_theme_selection, $lang_common, $CPG_PHP_SELF, $LINEBREAK;

    $return    = '';
    $cpgCurrentTheme = cpgGetScriptNameParams('theme') . 'theme=';

    // get list of available themes
    $value     = $CONFIG['theme'];
    $theme_dir = 'themes/';

    $dir = opendir($theme_dir);

    while ( ($file = readdir($dir)) ) {
        if (is_dir($theme_dir . $file) && $file != "." && $file != ".." && $file != '.svn' && $file != 'sample') {
            $theme_array[] = $file;
        }
    }
    closedir($dir);

    natcasesort($theme_array);

    $return .= $LINEBREAK . '<div id="cpgChooseThemeWrapper">' . $LINEBREAK . '<form name="cpgChooseTheme" id="cpgChooseTheme" action="' . $CPG_PHP_SELF . '" method="get" class="inline">' . $LINEBREAK;
    $return .= '<select name="theme" class="listbox_lang" onchange="if (this.options[this.selectedIndex].value) window.location.href=\'' . $cpgCurrentTheme . '\' + this.options[this.selectedIndex].value;">' . $LINEBREAK;
    $return .= '<option selected="selected">' . $lang_theme_selection['choose_theme'] . '</option>';

    foreach ($theme_array as $theme) {
        $return .= '<option value="' . $theme . '"'. ($value == $theme ? '  selected="selected"' : '') . '>' . strtr(ucfirst($theme), '_', ' ') . ($value == $theme ? '  *' : '') . '</option>' . $LINEBREAK;
    }

    $return .= '<option value="xxx">' . $lang_theme_selection['reset_theme'] . '</option>' . $LINEBREAK;

    $return .= '</select>' . $LINEBREAK;
    $return .= '<noscript>' . $LINEBREAK;
    $return .= '<input type="submit" name="theme_submit" value="' . $lang_common['go'] . '" class="listbox_lang" />&nbsp;'. $LINEBREAK;
    $return .= '</noscript>' . $LINEBREAK;
    $return .= '</form>' . $LINEBREAK;
    $return .= '</div>' . $LINEBREAK;

    return $return;
} // function themeSelect


/**
 * cpg_alert_dev_version()
 *
 * @return
 **/

function cpg_alert_dev_version()
{
    global $lang_version_alert, $CONFIG, $REFERER;

    $return = '';

    if (COPPERMINE_VERSION_STATUS != 'stable' && COPPERMINE_VERSION_STATUS != 'RC') {
        $return = <<< EOT
        <div class="cpg_message_warning">
        <h2>{$lang_version_alert['version_alert']}</h2>
EOT;
        $return .= sprintf($lang_version_alert['no_stable_version'], COPPERMINE_VERSION, COPPERMINE_VERSION_STATUS);
        $return .= '</div>';
    }

    // check if gallery is offline
    if ($CONFIG['offline'] == 1 && GALLERY_ADMIN_MODE) {
        $return .= <<< EOT
        <div class="cpg_message_validation">
        {$lang_version_alert['gallery_offline']}
        </div>
EOT;
    }

    // display news from coppermine-gallery.net
    if ($CONFIG['display_coppermine_news'] == 1 && GALLERY_ADMIN_MODE) {
        $help_news      = '&nbsp;' . cpg_display_help('f=configuration.htm&amp;as=admin_general_coppermine_news&amp;ae=admin_general_coppermine_news_end&amp;top=1', '600', '300');
        $news_icon      = cpg_fetch_icon('news_show', 2);
        $news_icon_hide = cpg_fetch_icon('news_hide', 1);
        ob_start();
        starttable('100%');
        print <<< EOT
            <tr>
              <td>
                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td class="tableh1">
                      {$news_icon}{$lang_version_alert['coppermine_news']}{$help_news}
                    </td>
                    <td class="tableh1" align="right">
                      <a href="mode.php?what=news&amp;referer={$REFERER}" class="admin_menu">{$news_icon_hide}{$lang_version_alert['hide']}</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tableb" colspan="2">
EOT;
        // Try to retrieve the news directly
        //$result = cpgGetRemoteFileByURL('http://coppermine-gallery.net/cpg15x_news.htm', 'GET', '', '200'); // disabled, see http://forum.coppermine-gallery.net/index.php/topic,65424.msg325573.html#msg325573

        if (strlen($result['body']) < 200) { // retrieving the file failed - let's display it in an iframe then
            print <<< EOT
                      <iframe src="http://coppermine-gallery.net/cpg15x_news.htm" align="left" frameborder="0" scrolling="auto" marginheight="0" marginwidth="0" width="100%" height="100" name="coppermine_news" id="coppermine_news" class="textinput">
                        {$lang_version_alert['no_iframe']}
                      </iframe>
EOT;
        } else { // we have been able to retrieve the remote URL, let's chop the unneeded data and then display it
            unset($result['headers']);
            unset($result['error']);
            // drop everything before the starting body-tag
            //$result['body'] = substr($result['body'], strpos($result['body'], '<body>'));
            $result['body'] = strstr($result['body'], '<body>');
            // drop the starting body tag itself
            $result['body'] = str_replace('<body>', '', $result['body']);
            // drop the ending body tag and everything after it
            $result['body'] = str_replace(strstr($result['body'], '</body>'), '', $result['body']);
            // The result should now contain everything between the body tags - let's print it
            print $result['body'];
        }
        print <<< EOT
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
EOT;
        endtable();
        print '<br />';
        $return .= ob_get_contents();
        ob_end_clean();
    }
    return $return;
} // function cpg_alert_dev_version

/**
 * cpg_display_help()
 *
 * @param string $reference
 * @param string $width
 * @param string $height
 * @return
 **/

function cpg_display_help($reference = 'f=empty.htm', $width = '600', $height = '350', $icon = 'help')
{
    global $CONFIG, $USER, $lang_common;

    if ($reference == '' || $CONFIG['enable_help'] == '0') {
        return;
    }

    if ($CONFIG['enable_help'] == '2' && GALLERY_ADMIN_MODE == false) {
        return;
    }

    $help_theme = $CONFIG['theme'];

    if (isset($USER['theme'])) {
        $help_theme = $USER['theme'];
    }
    
    if($icon != '*' && $icon != '?') {
        $icon = '<img src="images/help.gif" width="13" height="11" border="0" alt="" />';
    }

    $title_help = $lang_common['help'];

    $help_html = '<a class="greybox" href="help.php?' . $reference . '" rel="help.php?css=' . $help_theme . '&amp;' . $reference . '" title="' . $title_help . '">' . $icon . '</a>';

    return $help_html;
} // function cpg_display_help


/**
* Multi-dim array sort, with ability to sort by two and more dimensions
* Coded by Ichier2003, available at php.net
* syntax:
* $array = array_csort($array [, 'col1' [, SORT_FLAG [, SORT_FLAG]]]...);
**/
function array_csort()
{
    $args      = func_get_args();
    $marray    = array_shift($args);
    $msortline = "return(array_multisort(";
    $i         = 0;

    foreach ($args as $arg) {
        $i++;
        if (is_string($arg)) {
            foreach ($marray as $row) {
                $sortarr[$i][] = $row[$arg];
            }
        } else {
            $sortarr[$i] = $arg;
        }
        $msortline .= "\$sortarr[" . $i . "],";
    }

    $msortline .= "\$marray));";

    eval($msortline);

    return $marray;
} // function array_csort


function cpg_get_bridge_db_values()
{
    global $CONFIG;

    // Retrieve DB stored configuration
    $results = cpg_db_query("SELECT name, value FROM {$CONFIG['TABLE_BRIDGE']}");

    while ( ($row = mysql_fetch_assoc($results)) ) {
        $BRIDGE[$row['name']] = $row['value'];
    } // while

    mysql_free_result($results);

    return $BRIDGE;
} // function cpg_get_bridge_db_values


function cpg_get_webroot_path()
{
    global $CPG_PHP_SELF;

    $superCage = Inspekt::makeSuperCage();
    // get the webroot folder out of a given PHP_SELF of any coppermine page

    // what we have: we can say for sure where we are right now: $PHP_SELF (if the server doesn't even have it, there will be problems everywhere anyway)

    // let's make those into an array:
    if ( ($matches = $superCage->server->getMatched('SCRIPT_FILENAME', '/^[a-z,A-Z0-9_-\/\\:.]+$/')) ) {
        $path_from_serverroot[] = $matches[0];
    }
    /*
    $path_from_serverroot[] = $_SERVER["SCRIPT_FILENAME"];
    if (isset($_SERVER["PATH_TRANSLATED"])) {
       $path_from_serverroot[] = $_SERVER["PATH_TRANSLATED"];
    }
    */
    if ( ($matches = $superCage->server->getMatched('PATH_TRANSLATED', '/^[a-z,A-Z0-9_-\/\\:.]+$/')) ) {
        $path_from_serverroot[] = $matches[0];
    }
    //$path_from_serverroot[] = $HTTP_SERVER_VARS["SCRIPT_FILENAME"];
    //$path_from_serverroot[] = $HTTP_SERVER_VARS["PATH_TRANSLATED"];

    // we should be able to tell the current script's filename by removing everything before and including the last slash in $PHP_SELF
    $filename = ltrim(strrchr($CPG_PHP_SELF, '/'), '/');

    // let's eliminate all those vars that don't contain the filename (and replace the funny notation from windows machines)
    foreach ($path_from_serverroot as $key) {
        $key = str_replace('\\', '/', $key); // replace the windows notation
        $key = str_replace('//', '/', $key); // replace duplicate forwardslashes
        if (strstr($key, $filename) != FALSE) { // eliminate all that don't contain the filename
            $path_from_serverroot2[] = $key;
        }
    }

    // remove double entries in the array
    $path_from_serverroot3 = array_unique($path_from_serverroot2);

    // in the best of all worlds, the array is not empty
    if (is_array($path_from_serverroot3)) {
        $counter = 0;
        foreach ($path_from_serverroot3 as $key) {
            // easiest possible solution: $PHP_SELF is contained in the array - if yes, we're lucky (in fact we could have done this before, but I was going to leave room for other checks to be inserted before this one)
            if (strstr($key, $CPG_PHP_SELF) != FALSE) { // eliminate all that don't contain $PHP_SELF
                $path_from_serverroot4[] = $key;
                $counter++;
            }
        }
    } else {
        // we're f***ed: the array is empty, there's no server var we could actually use
        $return = '';
    }

    if ($counter == 1) { //we have only one entry left - we're happy
        $return = $path_from_serverroot4[0];
    } elseif ($counter == 0) { // we're f***ed: the array is empty, there's no server var we could actually use
        $return = '';
    } else { // there is more than one entry, and they differ. For now, let's use the first one. Maybe we could do some advanced checking later
        $return = $path_from_serverroot4[0];
    }

    // strip the content from $PHP_SELF from the $return var and we should (hopefully) have the absolute path to the webroot
    $return = str_replace($CPG_PHP_SELF, '', $return);

    // the return var should at least contain a slash - if it doesn't, add it (although this is more or less wishfull thinking)
    if ($return == '') {
        $return = '/';
    }

    return $return;
} // function cpg_get_webroot_path


/**
 * Function to get the search string if the picture is viewed from google, lycos or yahoo search engine
 */

function get_search_query_terms($engine = 'google')
{
    $superCage = Inspekt::makeSuperCage();

    //Using getRaw(). $referer is sanitized below wherever needed
    $referer     = urldecode($superCage->server->getRaw('HTTP_REFERER'));
    $query_array = array();

    switch ($engine) {

    case 'google':
        // Google query parsing code adapted from Dean Allen's
        // Google Hilite 0.3. http://textism.com
        $query_terms = preg_replace('/^.*q=([^&]+)&?.*$/i', '$1', $referer);
        $query_terms = preg_replace('/\'|"/', '', $query_terms);
        $query_array = preg_split('/[\s,\+\.]+/', $query_terms);
        break;

    case 'lycos':
        $query_terms = preg_replace('/^.*query=([^&]+)&?.*$/i', '$1', $referer);
        $query_terms = preg_replace('/\'|"/', '', $query_terms);
        $query_array = preg_split('/[\s,\+\.]+/', $query_terms);
        break;

    case 'yahoo':
        $query_terms = preg_replace('/^.*p=([^&]+)&?.*$/i', '$1', $referer);
        $query_terms = preg_replace('/\'|"/', '', $query_terms);
        $query_array = preg_split('/[\s,\+\.]+/', $query_terms);
        break;
    } // switch $engine
    return $query_array;
} // function get_search_query_terms


function is_referer_search_engine($engine = 'google')
{
    //$siteurl = get_settings('home');
    $superCage = Inspekt::makeSuperCage();

    //Using getRaw(). $referer is sanitized below wherever needed
    $referer = urldecode($superCage->server->getRaw('HTTP_REFERER'));

    if (!$engine) {
        return 0;
    }

    switch ($engine) {

    case 'google':
        if (preg_match('|^http://(www)?\.?google.*|i', $referer)) {
            return 1;
        }
        break;

    case 'lycos':
        if (preg_match('|^http://search\.lycos.*|i', $referer)) {
            return 1;
        }
        break;

    case 'yahoo':
        if (preg_match('|^http://search\.yahoo.*|i', $referer)) {
            return 1;
        }
        break;
    } // switch $engine
    return 0;
} // end is_referer_search_engine


/**
 * cpg_get_custom_include()
 *
 * @param string $path
 * @return
 **/
function cpg_get_custom_include($path = '')
{
    global $CONFIG, $CPG_PHP_SELF, $REFERER, $CPG_REFERER, $LINEBREAK, $BRIDGE, $USER, $USER_DATA, $THEME_DIR, $ICON_DIR, $FAVPICS, $RESTRICTEDWHERE, $FORBIDDEN_SET_DATA, $CURRENT_ALBUM_KEYWORD, $CURRENT_CAT_DEPTH, $FORBIDDEN_SET, $CURRENT_CAT_NAME, $CPG_PLUGINS, $JS;
    $return = '';

    // check if path is set in config
    if ($path == '') {
        return $return;
    }

    // check if the include file exists
    if (!file_exists($path)) {
        return $return;
    }

    ob_start();
    include($path);
    $return = ob_get_contents();
    ob_end_clean();

    // crude sub-routine to remove the most basic "no-no" stuff from possible includes
    // could need improvement
    $return = str_replace('<html>', '', $return);
    $return = str_replace('<head>', '', $return);
    $return = str_replace('<body>', '', $return);
    $return = str_replace('</html>', '', $return);
    $return = str_replace('</head>', '', $return);
    $return = str_replace('</body>', '', $return);

    return $return;
} // function cpg_get_custom_include


/**
 * filter_content()
 *
 * Replace strings that match badwords with tokens indicating it has been filtered.
 *
 * @param string or array $str
 * @return string or array
 **/
function filter_content($str)
{
    global $lang_bad_words, $CONFIG, $ercp;

    if ($CONFIG['filter_bad_words']) {

        static $ercp = array();

        if (!count($ercp)) {
            foreach ($lang_bad_words as $word) {
                $ercp[] = '/' . ($word[0] == '*' ? '': '\b') . str_replace('*', '', $word) . ($word[(strlen($word)-1)] == '*' ? '': '\b') . '/i';
            }
        }

        if (is_array($str)) {

            $new_str = array();

            foreach ($str as $key => $element) {
                $new_str[$key] = filter_content($element);
            }

            $str = $new_str;

        } else {
            $stripped_str = strip_tags($str);
            $str          = preg_replace($ercp, '(...)', $stripped_str);
        }
    }
    return $str;
} // function filter_content

function utf_strtolower($str)
{
    if (!function_exists('mb_strtolower')) {
        require 'include/mb.inc.php';
    }
    return mb_strtolower($str);
} // function utf_strtolower

function utf_substr($str, $start, $end = null)
{
    if (!function_exists('mb_substr')) {
        require 'include/mb.inc.php';
    }
    return mb_substr($str, $start, $end);
} // function utf_substr

function utf_strlen($str)
{
    if (!function_exists('mb_strlen')) {
        require 'include/mb.inc.php';
    }
    return mb_strlen($str);
} // function utf_strlen

function utf_ucfirst($str)
{
    if (!function_exists('mb_strtoupper')) {
        require 'include/mb.inc.php';
    }
    return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
} // function utf_ucfirst


/*
  This function replaces special UTF characters to their ANSI equivelant for
  correct processing by MySQL, keywords, search, etc. since a bug has been
  found:  http://coppermine-gallery.net/forum/index.php?topic=17366.0
*/
function utf_replace($str)
{
    return preg_replace('#[\xC2\xA0]|[\xE3][\x80][\x80]#', ' ', $str);
} // function utf_replace

function replace_forbidden($str)
{
    static $forbidden_chars;
    if (!is_array($forbidden_chars)) {
        global $CONFIG, $mb_utf8_regex;
        if (function_exists('html_entity_decode')) {
            $chars = html_entity_decode($CONFIG['forbiden_fname_char'], ENT_QUOTES, 'UTF-8');
        } else {
            $chars = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;', '&nbsp;', '&#39;'), array('&', '"', '<', '>', ' ', "'"), $CONFIG['forbiden_fname_char']);
        }
        preg_match_all("#$mb_utf8_regex".'|[\x00-\x7F]#', $chars, $forbidden_chars);
    }
    /**
     * $str may also come from $_POST, in this case, all &, ", etc will get replaced with entities.
     * Replace them back to normal chars so that the str_replace below can work.
     */
    $str = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;'), array('&', '"', '<', '>'), $str);

    $return = str_replace($forbidden_chars[0], '_', $str);

    /**
     * Transliteration
     */
    require_once('include/transliteration.inc.php');
    $return = transliteration_process($return, '_');

    /**
     * Replace special chars
     */
    $return = str_replace('%', '', rawurlencode($return));

    /**
     * Fix the obscure, misdocumented "feature" in Apache that causes the server
     * to process the last "valid" extension in the filename (rar exploit): replace all
     * dots in the filename except the last one with an underscore.
     */
    // This could be concatenated into a more efficient string later, keeping it in three
    // lines for better readability for now.
    $extension = ltrim(substr($return, strrpos($return, '.')), '.');

    $filenameWithoutExtension = str_replace('.' . $extension, '', $return);

    $return = str_replace('.', '_', $filenameWithoutExtension) . '.' . $extension;

    return $return;
} // function replace_forbidden


/**
 * resetDetailHits()
 *
 * Reset the detailed hits stored in hit_stats table for the given pid
 *
 * @param int or array $pid
 **/
function resetDetailHits($pid)
{
    global $CONFIG;

    if (is_array($pid)) {
        if (!count($pid)) {
            return;
        } else {
            $clause = "pid IN (".implode(',', $pid).")";
        }
    } else {
        $clause = "pid = '$pid'";
    }

    cpg_db_query("DELETE FROM {$CONFIG['TABLE_HIT_STATS']} WHERE $clause");
} // function resetDetailHits


/**
 * resetDetailVotes()
 *
 * Reset the detailed votes stored in vote_stats table for the given pid
 *
 * @param int or array $pid
 **/
function resetDetailVotes($pid)
{
    global $CONFIG;

    if (is_array($pid)) {
        if (!count($pid)) {
            return;
        } else {
            $clause = " IN (".implode(',', $pid).")";
        }
    } else {
        $clause = " = '$pid'";
    }

    cpg_db_query("DELETE FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE pid $clause");
    cpg_db_query("DELETE FROM {$CONFIG['TABLE_VOTES']} WHERE pic_id $clause");
} // function resetDetailVotes


/**
* cpgValidateColor()
*
* Validate a string: is a color code in x11 or hex?
*
* Returns the validated color string (hex with a leading #-sign or x11 color-code, or nothing if not valid)
*
* @param string $color
* @return $color
**/
function cpgValidateColor($color)
{
    $x11ColorNames = array('white', 'ivory', 'lightyellow', 'yellow', 'snow', 'floralwhite', 'lemonchiffon', 'cornsilk', 'seashell', 'lavenderblush', 'papayawhip', 'blanchedalmond', 'mistyrose', 'bisque', 'moccasin', 'navajowhite', 'peachpuff', 'gold', 'pink', 'lightpink', 'orange', 'lightsalmon', 'darkorange', 'coral', 'hotpink', 'tomato', 'orangered', 'deeppink', 'fuchsia', 'magenta', 'red', 'oldlace', 'lightgoldenrodyellow', 'linen', 'antiquewhite', 'salmon', 'ghostwhite', 'mintcream', 'whitesmoke', 'beige', 'wheat', 'sandybrown', 'azure', 'honeydew', 'aliceblue', 'khaki', 'lightcoral', 'palegoldenrod', 'violet', 'darksalmon', 'lavender', 'lightcyan', 'burlywood', 'plum', 'gainsboro', 'crimson', 'palevioletred', 'goldenrod', 'orchid', 'thistle', 'lightgrey', 'tan', 'chocolate', 'peru', 'indianred', 'mediumvioletred', 'silver', 'darkkhaki', 'rosybrown', 'mediumorchid', 'darkgoldenrod', 'firebrick', 'powderblue', 'lightsteelblue', 'paleturquoise', 'greenyellow', 'lightblue', 'darkgray', 'brown', 'sienna', 'yellowgreen', 'darkorchid', 'palegreen', 'darkviolet', 'mediumpurple', 'lightgreen', 'darkseagreen', 'saddlebrown', 'darkmagenta', 'darkred', 'blueviolet', 'lightskyblue', 'skyblue', 'gray', 'olive', 'purple', 'maroon', 'aquamarine', 'chartreuse', 'lawngreen', 'mediumslateblue', 'lightslategray', 'slategray', 'olivedrab', 'slateblue', 'dimgray', 'mediumaquamarine', 'cornflowerblue', 'cadetblue', 'darkolivegreen', 'indigo', 'mediumturquoise', 'darkslateblue', 'steelblue', 'royalblue', 'turquoise', 'mediumseagreen', 'limegreen', 'darkslategray', 'seagreen', 'forestgreen', 'lightseagreen', 'dodgerblue', 'midnightblue', 'aqua', 'cyan', 'springgreen', 'lime', 'mediumspringgreen', 'darkturquoise', 'deepskyblue', 'darkcyan', 'teal', 'green', 'darkgreen', 'blue', 'mediumblue', 'darkblue', 'navy', 'black');

    if (in_array(strtolower($color), $x11ColorNames) == TRUE) {
        return $color;
    } else {
        $color = ltrim($color, '#'); // strip a leading #-sign if there is one
        if (preg_match('/^[a-f\d]+$/i', strtolower($color)) == TRUE && strlen($color) <= 6) {
            $color = '#' . strtoupper($color);
            return $color;
        }
    }
} // function cpgValidateColor


/**
* cpgStoreTempMessage()
*
* Store a temporary message to the database to carry over from one page to the other
*
* @param string $message
* @return $message_id
**/
function cpgStoreTempMessage($message)
{
    global $CONFIG;

    $message = urlencode($message);

    // come up with a unique message id
    $message_id = md5(uniqid(mt_rand(), true));

    // write the message to the database
    $user_id = USER_ID;
    $time    = time();

    // Insert the record in database
    $query = "INSERT INTO {$CONFIG['TABLE_TEMP_MESSAGES']} "
                ." SET "
                    ." message_id = '$message_id', "
                    ." user_id = '$user_id', "
                    ." time   = '$time', "
                    ." message = '$message'";
    cpg_db_query($query);
    // return the message_id
    return $message_id;
} // function cpgStoreTempMessage


/**
* cpgFetchTempMessage()
*
* Fetch a temporary message from the database and then delete it.
*
*
*
* @param string $message_id
* @return $message
**/
function cpgFetchTempMessage($message_id)
{
    global $CONFIG;

    //$user_id = USER_ID;
    //$time    = time();
    $message = '';

    // Read the record in database
    $query = "SELECT message FROM {$CONFIG['TABLE_TEMP_MESSAGES']} "
            . " WHERE message_id = '$message_id' LIMIT 1";

    $result = cpg_db_query($query);

    if (mysql_num_rows($result) > 0) {
        $row     = mysql_fetch_row($result);
        $message = urldecode($row[0]);
    }

    mysql_free_result($result);

    // delete the message once fetched
    $query = "DELETE FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE message_id = '$message_id'";
    cpg_db_query($query);

    // return the message
    return $message;
} // function cpgFetchTempMessage


/**
* cpgCleanTempMessage()
*
* Clean up the temporary messages table (garbage collection).
*
* @param string $seconds
* @return void
**/
function cpgCleanTempMessage($seconds = 3600)
{
    global $CONFIG;

    $time = time() - (int) $seconds;
    // delete the messages older than the specified amount
    cpg_db_query("DELETE FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE time < $time");
} // function cpgCleanTempMessage


/**
* cpgRedirectPage()
*
* Redirect to the target page or display an info screen first and then redirect
*
* @param string $targetAddress
* @param string $caption
* @param string $message
* @param string $countdown
* @param string $type (possible values: 'info', 'error', 'warning', 'validation', 'success' -> theme_display_message_block
* @return void
**/
function cpgRedirectPage($targetAddress = '', $caption = '', $message = '', $countdown = 0, $type = 'info')
{
    global $CONFIG, $USER_DATA, $lang_common;

    $logged_in = (USER_ID || (isset($USER_DATA['user_id']) && is_numeric($USER_DATA['user_id'])));
    if (!$logged_in && $CONFIG['allow_unlogged_access'] == 0) {
        // Anonymous access to site is not allowed, so need to redirect to login page
        $targetAddress = 'login.php';
    }

    if ($CONFIG['display_redirection_page'] == 0) {
        $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
        if (strpos($targetAddress, '?') == FALSE) {
            $separator = '?';
        } else {
            $separator = '&';
        }
        header($header_location . $targetAddress . $separator . 'message_id=' . cpgStoreTempMessage($message) . '&message_icon=' . $type . '#cpgMessageBlock');
        pageheader($caption, "<META http-equiv=\"refresh\" content=\"1;url=$targetAddress\">");
        msg_box($caption, $message, $lang_common['continue'], $targetAddress, $type);
        pagefooter();
        exit;
    } else {
        pageheader($caption, "<META http-equiv=\"refresh\" content=\"1;url=$targetAddress\">");
        msg_box($caption, $message, $lang_common['continue'], $targetAddress, $type);
        pagefooter();
        exit;
    }
} // function cpgRedirectPage


/**
* cpgGetScriptNameParams()
*
* Returns the script name and all vars except the ones defined in exception (which could be an array or a var).
* Particularly helpful to create links
*
* @param mixed $exception
* @return $return
**/
function cpgGetScriptNameParams($exception = '')
{
    $superCage = Inspekt::makeSuperCage();

    if (!is_array($exception)) {
        $exception = array(0 => $exception);
    }

    // get the file name first
    $match = $superCage->server->getRaw('SCRIPT_NAME'); // We'll sanitize the script path later

    $filename = ltrim(strrchr($match, '/'), '/'); // Drop everything untill (and including) the last slash, this results in the file name only

    if (!preg_match('/^(([a-zA-Z0-9_\-]){1,})((\.){1,1})(([a-zA-Z]){2,6})+$/', $filename)) { // the naming pattern we check against: an infinite number of lower and upper case alphanumerals plus allowed special chars dash and underscore, then one (and only one!) dot, then between two and 6 alphanumerals in lower or upper case
        $filename = 'index.php'; // If this doesn't match, default to the index page
    }

    $return = $filename . '?';

    // Now get the parameters.
    // WARNING: as this function is meant to just return the URL parameters
    // (minus the one mentioned in $exception), neither the parameter names
    // nor the the values should be sanitized, as we simply don't know here
    // against what we're supposed to sanitize.
    // For now, I have chosen the safe method, sanitizing the parameters.
    // Not sure if this is a bright idea for the future.
    // So, use the parameters returned from this function here with the same
    // caution that applies to anything the user could tamper with.
    // The function is meant to help you generate links (in other words:
    // something the user could come up with by typing them just as well),
    // so don't abuse this function for anything else.
    $matches = $superCage->server->getMatched('QUERY_STRING', '/^[a-zA-Z0-9&=_\/.]+$/');

    if ($matches) {
        $queryString = explode('&', $matches[0]);
    } else {
        $queryString = array();
    }

    foreach ($queryString as $val) {
        list($key, $value) = explode('=', $val);
        if (!in_array($key, $exception)) {
            $return .= $key . "=" . $value . "&amp;";
        }
    }

    return $return;
} // function cpgGetScriptNameParams


/**
 * cpgValidateDate()
 *
 * Returns $date if $date contains a valid date string representation (yyyy-mm-dd). Returns an empty string if not.
 *
 * @param mixed $date
 * @return $return
**/
function cpgValidateDate($date)
{
    if (Inspekt::isDate($date)) {
        return $date;
    } else {
        return '';
    }
} // function cpgValidateDate


/**
 * cpgGetRemoteFileByURL()
 *
 * Returns array that contains content of a file (URL) retrieved by curl, fsockopen or fopen (fallback). Array consists of:
 * $return['headers'] = header array,
 * $return['error'] = error number and messages array (if error)
 * $return['body'] = actual content of the fetched file as string
 *
 * @param mixed $url, $method, $data, $redirect
 * @return array
 **/
function cpgGetRemoteFileByURL($remoteURL, $method = "GET", $redirect = 10, $minLength = '0')
{
    global $lang_get_remote_file_by_url, $LINEBREAK;
    // FSOCK code snippets taken from http://jeenaparadies.net/weblog/2007/jan/get_remote_file
    // Initialize some variables first
    $url = parse_url($remoteURL); // chop the URL into protocol, domain, port, folder, file, parameter
    if (!isset($url['host'])) {
        $url['host'] = '';
    }
    if (!isset($url['scheme'])) {
        $url['scheme'] = '';
    }
    if (!isset($url['port'])) {
        $url['port'] = '';
    }
    $body      = '';
    $headers   = '';
    $error     = '';
    $timeout   = 3;

    // Let's try CURL first
    if (function_exists('curl_init')) { // don't bother to try curl if it isn't there in the first place
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $remoteURL);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
        $body = curl_exec($curl);
        $headers = curl_getinfo($curl);
        curl_close($curl);
        if (strlen($body) < $minLength) {
            // Fetching the data by CURL obviously failed
            $error .= sprintf($lang_get_remote_file_by_url['no_data_returned'], $lang_get_remote_file_by_url['curl']) . '<br />'.$LINEBREAK;
        } else {
            // Fetching the data by CURL was successfull. Let's return the data
            return array("headers" => $headers, "body" => $body);
        }
    } else {
        // Curl is not available
        $error .= $lang_get_remote_file_by_url['curl_not_available'] . '<br />' . $LINEBREAK;
    }
    // Now let's try FSOCKOPEN
    if ($url['host'] != '') {
        $fp = @fsockopen($url['host'], (!empty($url['port']) ? (int)$url['port'] : 80), $errno, $errstr, $timeout);
        if ($fp) { // fsockopen file handle success - start
            $path   = (!empty($url['path']) ? $url['path'] : "/").(!empty($url['query']) ? "?".$url['query'] : "");
            $header = $LINEBREAK . 'Host: '.$url['host'];
            //FIXME: '$data' is not defined anywhere?
            fputs($fp, $method." ".$path." HTTP/1.0".$header.$LINEBREAK.$LINEBREAK.("post" == strtolower($method) ? $data : ""));
            if (!feof($fp)) {
                $scheme = fgets($fp);
                //list(, $code ) = explode(" ", $scheme);
                $headers = explode(" ", $scheme);
                //$headers = array("Scheme" => $scheme);
            }
            while (!feof($fp)) {
                $h = fgets($fp);
                if ($h == "\r\n" OR $h == "\n") {
                    break;
                }

                list($key, $value) = explode(":", $h, 2);

                $key   = strtolower($key);
                $value = trim($value);

                if (isset($headers[$key])) {
                    $headers[$key] .= ',' . trim($value);
                } else {
                    $headers[$key] = trim($value);
                }
            }
            $body = '';
            while ( !feof($fp) ) {
                $body .= fgets($fp);
            }
            fclose($fp);
            if (strlen($body) < $minLength) {
                // Fetching the data by FSOCKOPEN obviously failed
                $error .= sprintf($lang_get_remote_file_by_url['no_data_returned'], $lang_get_remote_file_by_url['fsockopen']) . '<br />' . $LINEBREAK;
            } elseif (in_array('404', $headers) == TRUE) {
                // We got a 404 error
                $error .= sprintf($lang_get_remote_file_by_url['error_number'], '404') . '<br />' . $LINEBREAK;
            } else {
                // Fetching the data by FSOCKOPEN was successfull. Let's return the data
                return array("headers" => $headers, "body" => $body, "error" => $error);
            }
        } else {  // fsockopen file handle failure - start
            $error .= $lang_get_remote_file_by_url['fsockopen'] . ': ';
            $error .= sprintf($lang_get_remote_file_by_url['error_number'], $errno);
            $error .= sprintf($lang_get_remote_file_by_url['error_message'], $errstr);
        }
    } else {
        //$error .= 'No Hostname set. In other words: we\'re trying to retrieve a local file';
    }
    // Finally, try FOPEN
    @ini_set('allow_url_fopen', '1'); // Try to override the existing policy
    if ($url['scheme'] != '') {
        $protocol = $url['scheme'] . '://';
    } else {
        $protocol = '';
    }
    if ($url['port'] != '') {
        $port = ':' . (int) $url['port'];
    } elseif ($url['host'] != '') {
        $port = ':80';
    } else {
        $port = '';
    }

    @ini_set('default_socket_timeout', $timeout);
    $handle = @fopen($protocol . $url['host'] . $port . $url['path'], 'r');
    if ($handle) {
        while (!feof($handle)) {
            $body .= fread($handle, 1024);
        }
        fclose($handle);
        if (strlen($body) < $minLength) {
            $error .= sprintf($lang_get_remote_file_by_url['no_data_returned'], $lang_get_remote_file_by_url['fopen']) . '<br />' . $LINEBREAK;
        } else {
            // Fetching the data by FOPEN was successfull. Let's return the data
            return array("headers" => $headers, "body" => $body, "error" => $error);
        }
    } else { // opening the fopen handle failed as well
        // if the script reaches this stage, all available methods failed, so let's return the error messages and give up
        return array("headers" => $headers, "body" => $body, "error" => $error);
    }
} // function cpgGetRemoteFileByURL


/**
 * user_is_allowed()
 *
 * Check if a user is allowed to edit pictures/albums
 *
 * @return boolean $check_approve
 */
function user_is_allowed($include_upload_permissions = true)
{
    if (GALLERY_ADMIN_MODE) {
        return true;
    }

    $check_approve = false;
    global $USER_DATA, $CONFIG;
    $superCage = Inspekt::makeSuperCage();

    //get albums this user can edit
    if ($superCage->get->keyExists('album')) {
        $album_id = $superCage->get->getInt('album');
    } elseif ($superCage->post->keyExists('aid')) {
        $album_id = $superCage->post->getInt('aid');
    } else {
        //workaround when going straight to modifyalb.php and no album is set in superglobals
        if (defined('MODIFYALB_PHP')) {
            //check if the user has any album available
            $result        = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE owner = " . $USER_DATA['user_id'] . " LIMIT 1");
            $temp_album_id = cpg_db_fetch_row($result);
            $album_id      = $temp_album_id['aid'];
        } else {
            $album_id = 0;
        }

    }

    $result = cpg_db_query("SELECT DISTINCT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE owner = '" . $USER_DATA['user_id'] . "' AND aid='$album_id'");

    $allowed_albums = cpg_db_fetch_rowset($result);

    $cat = $allowed_albums ? $allowed_albums[0]['category'] : '';

    if ($cat != '') {
        $check_approve = true;
    }

    // We should also whether user has upload permission to the current album. but do this only if album id is set
    if ($album_id && $include_upload_permissions) {
        $public_albums = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT . " AND ((uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET." OR alb_password != '')) OR (owner=".USER_ID.")) AND aid=$album_id");
        
        if (count(cpg_db_fetch_rowset($public_albums))) {
            $check_approve = true;
            define('USER_UPLOAD_ALLOWED', 1);
        } else {
            //select albums that don't belong to a category
            $public_albums_no_cat = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0 AND ((uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.")) OR (owner=".USER_ID.")) AND aid=$album_id");
            
            if (count(cpg_db_fetch_rowset($public_albums_no_cat))) {
                $check_approve = true;
                define('USER_UPLOAD_ALLOWED', 1);
            }
        }        
    }

    //check if admin allows editing after closing category
    if ($CONFIG['allow_user_edit_after_cat_close'] == 0) {
        //Disallowed -> Check if album is in such a category
        $result = cpg_db_query("SELECT DISTINCT aid FROM {$CONFIG['TABLE_ALBUMS']} AS alb INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid WHERE alb.owner = '" . $USER_DATA['user_id'] . "' AND alb.aid='$album_id' AND catm.group_id='" . $USER_DATA['group_id'] . "'");

        $allowed_albums = cpg_db_fetch_rowset($result);

        if ($allowed_albums && $allowed_albums[0]['aid'] == '' && $cat != (FIRST_USER_CAT + USER_ID)) {
            $check_approve = false;
        } elseif ($cat == (FIRST_USER_CAT + USER_ID)) {
            $check_approve = true;
        }
    }
    return $check_approve;
} // function user_is_allowed


/**
 * Function to set/output js files to be included.
 *
 * This function sets a js file to be included in the head section of the html (in theme_javascript_head() function).
 * This function should be called before pageheader function since the js files are included in pageheader.
 * If the optional second paramter is passed as true then instead of setting it for later use the html for
 * js file inclusion is returned right away
 *
 * @param string $filename Relative path, from the root of cpg, to the js file
 * @param boolean $inline If true then the html is returned
 * @return mixed Returns the html for js inclusion or null if inline is false
 */
function js_include($filename, $inline = false)
{
    global $JS;

    // Proceed with inclusion only if the file exists
    if (!file_exists($filename)) {
        return;
    }

    // If we need to show the html inline then return the required html
    if ($inline) {
        return '<script type="text/javascript" src="' . $filename . '"></script>';
    } else {
        // Else add the file to js includes array which will later be used in head section
        $JS['includes'][] = $filename;
    }
} // function js_include


/**
 * Function to set a js var from php
 *
 * This function sets a js var in an array. This array is later converted to json string and outputted
 * in the head section of html (in theme_javascript_head function).
 * All variables which are set using this function can be accessed in js using the json object named js_vars.
 *
 * Ex: If you set a variable: set_js_var('myvar', 'myvalue')
 * then you can access it in js using : js_vars.myvar
 *
 * @param string $var Name of the variable by which the value will be accessed in js
 * @param mixed $val Value which can be string, int, array or boolean
 */
function set_js_var($var, $val)
{
    global $JS;

    // Add the variable to global array which will be used in theme_javascript_head() function
    $JS['vars'][$var] = $val;
} // function set_js_var

/**
 * Function to convert php array to json
 *
 * This function is equivalent to PHP 5.2 's json_encode. PHP's native function will be used if the
 * version is greater than equal to 5.2
 *
 * @param array $arr Array which is to be converted to json string
 * @return string json string
 */
if (!function_exists('json_encode')) {

    function json_encode($arr)
    {
        // If the arr is object then gets its variables
        if (is_object($arr)) {
            $arr = get_object_vars($arr);
        }

        $out  = array();
        $keys = array();

        // If arr is array then get its keys
        if (is_array($arr)) {
            $keys = array_keys($arr);
        }

        $numeric = true;

        // Find whether the keys are numeric or not
        if (!empty($keys)) {
            $numeric = (array_values($keys) === array_keys(array_values($keys)));
        }

        foreach ($arr as $key => $val) {
            // If the value is array or object then call json_encode recursively
            if (is_array($val) || is_object($val)) {
                $val = json_encode($val);
            } else {
                // If the value is not numeric and boolean then escape and quote it
                if ((!is_numeric($val) && !is_bool($val))) {
                    // Escape these characters with a backslash:
                    // " \ / \n \r \t \b \f
                    $search  = array('\\', "\n", "\t", "\r", "\b", "\f", '"', '/');
                    $replace = array('\\\\', '\\n', '\\t', '\\r', '\\b', '\\f', '\"', '\/');
                    $val     = str_replace($search, $replace, $val);
                    $val     = '"' . $val . '"';
                }
                if ($val === null) {
                    $val = 'null';
                }
                if (is_bool($val)) {
                    $val = $val ? 'true' : 'false';
                }
            }
            // If key is not numeric then quote it
            if (!$numeric) {
                $val = '"' . $key . '"' . ':' . $val;
            }

            $out[] = $val;
        }

        if (!$numeric) {
            $return = '{' . implode(', ', $out) . '}';
        } else {
            $return = '[' . implode(', ', $out) . ']';
        }

        return $return;
    } // function json_encode
} // if !function_exists(json_encode)


/**
 * function cpg_getimagesize()
 *
 * Try to get the size of an image, this is custom built as some webhosts disable this function or do weird things with it
 *
 * @param string $image
 * @param boolean $force_cpg_function
 * @return array $size
 */
function cpg_getimagesize($image, $force_cpg_function = false)
{
    if (!function_exists('getimagesize') || $force_cpg_function) {
        // custom function borrowed from http://www.wischik.com/lu/programmer/get-image-size.html
        $f = @fopen($image, 'rb');
        if ($f === false) {
            return false;
        }
        fseek($f, 0, SEEK_END);
        $len = ftell($f);
        if ($len < 24) {
            fclose($f);
            return false;
        }
        fseek($f, 0);
        $buf = fread($f, 24);
        if ($buf === false) {
            fclose($f);
            return false;
        }
        if (ord($buf[0]) == 255 && ord($buf[1]) == 216 && ord($buf[2]) == 255 && ord($buf[3]) == 224 && $buf[6] == 'J' && $buf[7] == 'F' && $buf[8] == 'I' && $buf[9] == 'F') {
            $pos = 2;
            while (ord($buf[2]) == 255) {
                if (ord($buf[3]) == 192 || ord($buf[3]) == 193 || ord($buf[3]) == 194 || ord($buf[3]) == 195 || ord($buf[3]) == 201 || ord($buf[3]) == 202 || ord($buf[3]) == 203) {
                    break; // we've found the image frame
                }
                $pos += 2 + (ord($buf[4]) << 8) + ord($buf[5]);
                if ($pos + 12 > $len) {
                    break; // too far
                }
                fseek($f, $pos);
                $buf = $buf[0] . $buf[1] . fread($f, 12);
            }
        }
        fclose($f);

        // GIF:
        if ($buf[0] == 'G' && $buf[1] == 'I' && $buf[2] == 'F') {
            $x    = ord($buf[6]) + (ord($buf[7])<<8);
            $y    = ord($buf[8]) + (ord($buf[9])<<8);
            $type = 1;
        }

        // JPEG:
        if (ord($buf[0]) == 255 && ord($buf[1]) == 216 && ord($buf[2]) == 255) {
            $y    = (ord($buf[7])<<8) + ord($buf[8]);
            $x    = (ord($buf[9])<<8) + ord($buf[10]);
            $type = 2;
        }

        // PNG:
        if (ord($buf[0]) == 0x89 && $buf[1] == 'P' && $buf[2] == 'N' && $buf[3] == 'G' && ord($buf[4]) == 0x0D && ord($buf[5]) == 0x0A && ord($buf[6]) == 0x1A && ord($buf[7]) == 0x0A && $buf[12] == 'I' && $buf[13] == 'H' && $buf[14] == 'D' && $buf[15] == 'R') {
            $x    = (ord($buf[16])<<24) + (ord($buf[17])<<16) + (ord($buf[18])<<8) + (ord($buf[19])<<0);
            $y    = (ord($buf[20])<<24) + (ord($buf[21])<<16) + (ord($buf[22])<<8) + (ord($buf[23])<<0);
            $type = 3;
        }

        // added ! from source line since it doesn't work otherwise
        if (!isset($x, $y, $type)) {
            return false;
        }
        return array($x, $y, $type, 'height="' . $x . '" width="' . $y . '"');
    } else {
        $size = getimagesize($image);
        if (!$size) {
            //false was returned
            return cpg_getimagesize($image, true/*force the use of custom function*/);
        } elseif (!isset($size[0]) || !isset($size[1])) {
            //webhost possibly changed getimagesize functionality
            return cpg_getimagesize($image, true/*force the use of custom function*/);
        } else {
            //function worked as expected, return the results
            return $size;
        }
    }
} // function cpg_getimagesize


function check_rebuild_tree()
{
    global $CONFIG;

    $result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_PREFIX']}categories WHERE lft = 0");

    list($count) = mysql_fetch_row($result);

    mysql_free_result($result);

    if ($count) {
        return rebuild_tree();
    } else {
        return false;
    }
} // function check_rebuild_tree


function rebuild_tree($parent = 0, $left = 0, $depth = 0, $pos = 0)
{
    global $CONFIG;

    // the right value of this node is the left value + 1
    $right = $left + 1;

    if ($CONFIG['categories_alpha_sort'] == 1) {
        $sort_query = 'name';
    } else {
        $sort_query = 'pos';
    }

    $childpos = 0;

    // get all children of this node
    $result = cpg_db_query("SELECT cid FROM {$CONFIG['TABLE_PREFIX']}categories WHERE parent = $parent ORDER BY $sort_query, cid");

    while ($row = mysql_fetch_assoc($result)) {
        // recursive execution of this function for each
        // child of this node
        // $right is the current right value, which is
        // incremented by the rebuild_tree function
        if ($row['cid']) {
            $right = rebuild_tree($row['cid'], $right, $depth + 1, $childpos++);
        }
    }

    // we've got the left value, and now that we've processed
    // the children of this node we also know the right value
    cpg_db_query("UPDATE {$CONFIG['TABLE_PREFIX']}categories SET lft = $left, rgt = $right, depth = $depth, pos = $pos WHERE cid = $parent LIMIT 1");

    // return the right value of this node + 1
    return $right + 1;
} // function rebuild_tree

/**
 * Function to fetch an icon
 *
 *
 * @param string $icon_name: the name of the icon to fetch
 * @param string $title string: to populate the title attribute of the <img>-tag
 * @param string $config_level boolean: If populated, the config option that allows toggling icons on/off will be ignored and the icon will be displayed no matter what
 * @param string $check boolean: If populated, the icon will be checked first if it exists
 * @param string $extension: name of the extension, default being 'png'
 * @param string $type: what should the function return, default (0) being the entire HTML-tag <img>. Specify "1" to make the function return the actual image path only without the embedding HTML tag
 * @return string: the fully populated <img>-tag
 */
function cpg_fetch_icon($icon_name, $config_level = 0, $title = '', $check = '', $extension = 'png', $type = 0)
{
    global $CONFIG, $ICON_DIR;

    if ($CONFIG['enable_menu_icons'] < $config_level) {
        return;
    }

    $return = '';

    // sanitize extension
    if ($extension != 'jpg' && $extension != 'gif') {
        $extension = 'png';
    }

    $relative_path = $ICON_DIR . $icon_name . '.' . $extension;
    // check if file exists

    if ($check != '') {
        if (file_exists($relative_path) != TRUE) {
            return;
        }
    }

    $return .= '<img src="';
    $return .= $relative_path;
    $return .= '" border="0" alt="" ';

    // Add width and height attributes.
    // Actually reading the dimensions would be too time-consuming,
    // so we assume 16 x 16 pixels unless specified otherwise in
    // the custom theme
    if (defined('THEME_HAS_MENU_ICONS')) {
        $return .= 'width="' . THEME_HAS_MENU_ICONS . '" height="' . THEME_HAS_MENU_ICONS . '" ';
    } else {
        $return .= 'width="16" height="16" ';
    }

    if ($title != '') {
        $return .= 'title="' . $title . '" ';
    }

    $return .= 'class="icon" />';
    if ($type == 1) {
        $return = $relative_path;
    }

    return $return;
}

/**
 * Function to convert numbers (floats) into formatted strings
 * Example: cpg_float2decimal(100000) will return the string 100,000 for English and 100.000 for German
 *
 * @param float $float: the value that should be converted
 * @return string: the fully populated string
 */
function cpg_float2decimal($float)
{
    global $lang_decimal_separator;

    $value        = floor($float);
    $decimal_page = ltrim(strstr($float, '.'), '.');

    // initialize some vars start
    $return = '';
    $fit    = 3; // how many digits to use
    $fill   = "0"; // what to fill
    // initialize some vars end

    $remainder = floor($value);

    while ($remainder >= 1000) {
        $chop      = $remainder - (floor($remainder / pow(10, 3)) * pow(10, 3));
        $chop      = sprintf("%'{$fill}{$fit}s", $chop); // fill the chop with leading zeros if needed
        $remainder = floor($remainder / pow(10, 3));
        $return    = $lang_decimal_separator[0] . $chop . $return;
    }

    $return = $remainder . $return;

    if ($decimal_page != 0) {
        $return .= $lang_decimal_separator[1] . $decimal_page;
    }

    return $return;
}

/**
 * Function get the contents of a folder
  *
 * @param string $foldername: the relative path
 * @param string $fileOrFolder: what should be returned: files or sub-folders. Specify 'file' or 'folder'.
 * @param string $validextension: What file extension should be filtered. Specify 'gif' or 'html' or similar.
 * @param array $exception_array: optional: specify values that should not be taken into account.
 * @return array: a list of file names (without extension)
 */
if (!function_exists('form_get_foldercontent')) {
    function form_get_foldercontent ($foldername, $fileOrFolder = 'folder', $validextension = '', $exception_array = array(''))
    {
        $dir = opendir($foldername);

        while ( ($file = readdir($dir)) ) {

            if ($fileOrFolder == 'file') {

                $extension = ltrim(substr($file, strrpos($file, '.')), '.');

                $filenameWithoutExtension = str_replace('.' . $extension, '', $file);

                if (is_file($foldername . $file) && $extension == $validextension && in_array($filenameWithoutExtension, $exception_array) != TRUE) {
                    $return_array[$filenameWithoutExtension] = $filenameWithoutExtension;
                }

            } elseif ($fileOrFolder == 'folder') {
                if ($file != '.' && $file != '..' && in_array($file, $exception_array) != TRUE && is_dir($foldername . $file)) {
                    $return_array[$file] = $file;
                }
            }
        }
        closedir($dir);
        natcasesort($return_array);

        return $return_array;
    }
}

/**
 * Function get a list of available languages
  *
  * @return array: an ascotiative array of language file names (without extension) and language names
 */
if (!function_exists('cpg_get_available_languages')) {
    function cpg_get_available_languages()
    {
        global $CONFIG;
        // Make sure that the language table exists in the first place -
        // return without return value if the table doesn't exist because
        // the upgrade script hasn't been run
        $results = cpg_db_query("SHOW TABLES LIKE '{$CONFIG['TABLE_LANGUAGE']}'");
        if (!mysql_num_rows($results)) {
            // The update script has not been run - use the "old school" language file lookup and return the contents
            $language_array = form_get_foldercontent('lang/', 'file', 'php');
            ksort($language_array);
            return $language_array;
        }
        mysql_free_result($results);
        unset($results);

        // get list of available languages
        $results = cpg_db_query("SELECT lang_id, english_name, native_name, custom_name FROM {$CONFIG['TABLE_LANGUAGE']} WHERE available='YES' AND enabled='YES' ");
        while ( ($row = mysql_fetch_array($results)) ) {
            if (file_exists('lang/' . $row['lang_id'] . '.php')) {
                if ($row['custom_name'] != '') {
                    $language_array[$row['lang_id']] = $row['custom_name'];
                } elseif ($row['english_name'] != '') {
                    $language_array[$row['lang_id']] = $row['english_name'];
                } else {
                    $language_array[$row['lang_id']] = str_replace('_', ' ', ucfirst($row['lang_id']));
                }
                if ($row['native_name'] != '' && $row['native_name'] != $language_array[$row['lang_id']]) {
                    $language_array[$row['lang_id']] .= ' - ' . $row['native_name'];
                }
            }
        } // while
        mysql_free_result($results);

        unset($row);
        if (count($language_array) == 0) {
            unset($language_array);
            $language_array = form_get_foldercontent('lang/', 'file', 'php');
        }
        // sort the array by English name
        ksort($language_array);
        return $language_array;
    }
}

function array_is_associative($array)
{
    if (is_array($array) && ! empty($array)) {
        for ($iterator = count($array) - 1; $iterator; $iterator--) {
            if (!array_key_exists($iterator, $array)) {
                return true;
            }
        }
        return !array_key_exists(0, $array);
    }
    return false;
}

function cpg_config_set($name, $value)
{
    global $CONFIG;

    //$value = addslashes($value);

    if ($CONFIG[$name] === $value) {
        return;
    }

    $sql = "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = '$name'";
    cpg_db_query($sql);

    if ($CONFIG['log_mode'] != 0) {
        log_write("Setting for '$name' changed from '{$CONFIG[$name]}' to '$value' by user " . USER_NAME, CPG_CONFIG_LOG);
    }
    
    $CONFIG[$name] = $value;
}

function cpg_format_bytes($bytes)
{
    global $lang_byte_units, $lang_decimal_separator;
    foreach ($lang_byte_units as $unit) {
        if ($bytes < 1024) {
            break;
        }
        $bytes /= 1024;
    }
    return number_format($bytes, 2, $lang_decimal_separator[1], $lang_decimal_separator[0]) . ' ' . $unit;
}

if (!function_exists('stripos')) {
    function stripos($str, $needle, $offset = 0)
    {
        return strpos(strtolower($str), strtolower($needle), $offset);
    }
}

function cpg_get_type($filename,$filter=null)
{
    global $CONFIG;

    static $FILE_TYPES = array();

    if (!$FILE_TYPES) {

        // Map content types to corresponding user parameters
        $content_types_to_vars = array(
            'image'    => 'allowed_img_types',
            'audio'    => 'allowed_snd_types',
            'movie'    => 'allowed_mov_types',
            'document' => 'allowed_doc_types',
        );

        $result = cpg_db_query('SELECT extension, mime, content, player FROM ' . $CONFIG['TABLE_FILETYPES']);

        $CONFIG['allowed_file_extensions'] = '';

        while ( ($row = mysql_fetch_assoc($result)) ) {
            // Only add types that are in both the database and user defined parameter
            if ($CONFIG[$content_types_to_vars[$row['content']]] == 'ALL' || is_int(strpos('/' . $CONFIG[$content_types_to_vars[$row['content']]] . '/', '/' . $row['extension'] . '/'))) {
                $FILE_TYPES[$row['extension']]      = $row;
                $CONFIG['allowed_file_extensions'] .= '/' . $row['extension'];
            }
        }

        $CONFIG['allowed_file_extensions'] = substr($CONFIG['allowed_file_extensions'], 1);

        mysql_free_result($result);
    }

    if (!is_array($filename)) {
        $filename = explode('.', $filename);
    }

    $EOA            = count($filename) - 1;
    $filename[$EOA] = strtolower($filename[$EOA]);

    if (!is_null($filter) && array_key_exists($filename[$EOA], $FILE_TYPES) && ($FILE_TYPES[$filename[$EOA]]['content'] == $filter)) {
        return $FILE_TYPES[$filename[$EOA]];
    } elseif (is_null($filter) && array_key_exists($filename[$EOA], $FILE_TYPES)) {
        return $FILE_TYPES[$filename[$EOA]];
    } else {
        return null;
    }
}

function is_image(&$file)
{
    return cpg_get_type($file, 'image');
}

function is_movie(&$file)
{
    return cpg_get_type($file, 'movie');
}

function is_audio(&$file)
{
    return cpg_get_type($file, 'audio');
}

function is_document(&$file)
{
    return cpg_get_type($file, 'document');
}

function is_flash(&$file)
{
    return pathinfo($file, PATHINFO_EXTENSION) == 'swf';
}

function is_known_filetype($file)
{
    return is_image($file) || is_movie($file) || is_audio($file) || is_document($file);
}

/**
* Check if a plugin is used to diplay captcha
**/
function captcha_plugin_enabled()
{
    global $CPG_PLUGINS;

    if (!empty($CPG_PLUGINS)) {
        foreach ($CPG_PLUGINS as $plugin) {
            if (isset($plugin->filters['captcha_contact_print'])) {
                return true;
            }
        }
    }
    return false;
}


/**
 * get_cat_data()
 *
 * @param integer $parent
 * @param string $ident
 **/

function get_cat_data()
{
    global $CONFIG, $CAT_LIST, $USER_DATA, $cpg_udb;
    
    if (GALLERY_ADMIN_MODE) {
        $sql = "SELECT rgt, cid, name FROM {$CONFIG['TABLE_CATEGORIES']} ORDER BY lft ASC"; 
    } else {
        $sql = "SELECT rgt, c.cid, name FROM {$CONFIG['TABLE_CATEGORIES']} AS c NATURAL JOIN {$CONFIG['TABLE_CATMAP']} WHERE group_id IN (" . implode(', ', $USER_DATA['groups']) . ") ORDER BY lft ASC";
    }
    $result = cpg_db_query($sql);
    if (mysql_num_rows($result) > 0) {
        $rowset = cpg_db_fetch_rowset($result);
        $right = array(); 
        foreach ($rowset as $subcat) {
            if (count($right) > 0) {
                // check if we should remove a node from the stack
                while ($right && $right[count($right) - 1] < $subcat['rgt']) {
                    array_pop($right);
                }
            }
            $ident = str_repeat('&nbsp;&nbsp;&nbsp;', count($right));
            $right[] = $subcat['rgt']; 
            $CAT_LIST[] = array($subcat['cid'], $ident . $subcat['name']);
            // add user categories
            if ($subcat['cid'] == 1 && GALLERY_ADMIN_MODE) {
                global $cpg_udb;
                $result2 = cpg_db_query("SELECT {$cpg_udb->field['user_id']} AS user_id, {$cpg_udb->field['username']} AS user_name FROM {$cpg_udb->usertable} ORDER BY user_name", $cpg_udb->link_id);
                $rowset2 = cpg_db_fetch_rowset($result2);
                foreach ($rowset2 as $user) {
                    $CAT_LIST[] = array(FIRST_USER_CAT + $user['user_id'], '&nbsp;&nbsp;&nbsp;' . $user['user_name']);
                }
            }
        }
    }
}
// end function get_cat_data


// Returns an html string containing albums for use in a <select> dropdown.
function album_selection_options($selected = 0)
{
    global $CONFIG, $lang_common, $cpg_udb, $LINEBREAK;
    // html string of options to be returned    
    $options = '';
    // Padding to indicate level
    $padding = 8;
    $albums = array();
    // load all albums
    
    if (GALLERY_ADMIN_MODE) {
        $result = cpg_db_query("SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY pos");
    } elseif (USER_ID) {
        $result = cpg_db_query("SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = " . (FIRST_USER_CAT + USER_ID) . " ORDER BY pos");
    }
    
    while ( ($row = mysql_fetch_assoc($result)) ) {
        $albums[$row['category']][$row['aid']] = $row['title'];
    }
    if (!empty($albums[0])) {
        // Albums in no category
        $options .= '<option style="padding-left: 0px; color: black; font-weight: bold" disabled="disabled">' . $lang_common['albums_no_category'] . '</option>';
        foreach ($albums[0] as $aid => $title) {
            $options .= sprintf('<option style="padding-left: %dpx" value="%d"%s>%s</option>'.$LINEBREAK, $padding, $aid, $aid == $selected ? ' selected="selected"' : '', $title);
        }
    }
    // Load all categories
    if (GALLERY_ADMIN_MODE) {
        $result = cpg_db_query("SELECT cid, rgt, name FROM {$CONFIG['TABLE_CATEGORIES']} ORDER BY lft");
    } else {
        $result = cpg_db_query("SELECT cid, rgt, name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = " . USER_GAL_CAT);
    }
    
    $cats = array();
    // Loop through all categories
    while ( ($row = mysql_fetch_assoc($result))) {
        // Determine category hierarchy
        if (count($cats)) {
            while ($cats && $cats[count($cats)-1]['rgt'] < $row['rgt']) {
                array_pop($cats);
            }
        }
        $cats[] = $row;
        // Add this category to the hierarchy
        if ($row['cid'] == USER_GAL_CAT) {
            // User galleries
            $options .= '<option style="padding-left: 0px; color: black; font-weight: bold" disabled="disabled">' . $lang_common['personal_albums'] . '</option>' . $LINEBREAK;

            if (GALLERY_ADMIN_MODE) {
                $result2 = cpg_db_query("SELECT {$cpg_udb->field['user_id']} AS user_id, {$cpg_udb->field['username']} AS user_name "
                    . "FROM {$cpg_udb->usertable} ORDER BY {$cpg_udb->field['username']}", $cpg_udb->link_id);
                $users = cpg_db_fetch_rowset($result2);
                mysql_free_result($result2);
            } else {
                $users = array(array('user_id' => USER_ID, 'user_name' => USER_NAME));
            }
            
            foreach ($users as $user) {
                if (!empty($albums[$user['user_id'] + FIRST_USER_CAT])) {
                    $options .= '<option style="padding-left: ' . $padding . 'px; color: black; font-weight: bold" disabled="disabled">' 
                        . $user['user_name'] . '</option>' . $LINEBREAK;
                    foreach ($albums[$user['user_id'] + FIRST_USER_CAT] as $aid => $title) {
                        $options .= sprintf('<option style="padding-left: %dpx" value="%d"%s>%s</option>' . $LINEBREAK, $padding * 2, $aid, $aid == $selected ? ' selected="selected"' : '', $title);
                    }
                }
            }
            unset($users);
            continue;
        }
        // construct a category hierarchy string breadcrumb style
        $elements = array();
        foreach ($cats as $cat) {
            $elements[] = $cat['name'];
        }
        $heirarchy = implode(' - ', $elements);
        // calculate padding for this level
        $p = (count($elements) - 1) * $padding;
        // albums in the category
        if (!empty($albums[$row['cid']])) {
            // category header
            $options .= '<option style="padding-left: '.$p.'px; color: black; font-weight: bold" disabled="disabled">' . $LINEBREAK
            . $heirarchy . '</option>' . $LINEBREAK;
            
            foreach ($albums[$row['cid']] as $aid => $title) {
                $options .= sprintf('<option style="padding-left: %dpx" value="%d"%s>%s</option>' . $LINEBREAK, $p + $padding, $aid, $aid == $selected ? ' selected="selected"' : '', $title);
            }
        }
    }
    return $options;
}
// end function album_selection_options


/**
* Function used to delete a folder and everything within it except symlinks.
* Does not perform any checks against the path parameter, so only perform
* this function against trusted, validated paths and never against un-sanitized
* user input!
* Function should be performed by admin only, but is not limited to admin. There
* are no particular permission-checks.
* Contains hard-coded English language strings that are meant for debug output only.
* @param $path full-path or relative path to folder
* @return array(success(T)/failure(F), debug output)
*/
function cpg_folder_file_delete($path) 
{
    global $CONFIG;

    if ($CONFIG['debug_notice'] == 0) {
        $output = '';
    } else {
        if ($CONFIG['debug_mode'] == 1) {
            $output = 1;
        } elseif ($CONFIG['debug_mode'] == 2 && defined(GALLERY_ADMIN_MODE)) {
            $output = 1;
        } else {
            $output = '';
        }
    }
    // Perform some validity checks first
    rtrim($path,'/'); // if the path has a trailing slash we remove it here
    if (is_link($path)) { // We don't want to delete symlinks, so let's just return some text
        if ($output != '') {
            return array(false,$path . ' appears to be a symlink - we won\'t delete them for security reasons');
        } else {
            return array(false,'');
        }
    }
    if (!file_exists($path) && !is_dir($path)) {// if the path is not valid
        if ($output != '') {
            return array(false,'Path ' . $path . ' does not exist');
        } else {
            return array(false,'');
        }
    } elseif (!is_readable($path)) {// ... if the path is not readable
        if ($output != '') {
            return array(false,'Path ' . $path . ' is not readable');
        } else {
            return array(false,'');
        }
    }   
    if (is_dir($path)) {
        if (version_compare(PHP_VERSION, '5.0.0') < 0) {
            $entries = array();
            if ( ($handle = opendir($path)) ) {
                while (false !== ($file = readdir($handle))) {
                    $entries[] = $file;
                }
                closedir($handle);
            }
        } else {
            $entries = scandir($path);
            if ($entries === false) {
                $entries = array();
            }
        }
        foreach ($entries as $entry) {
            if ($entry != '.' && $entry != '..') {
                cpg_folder_file_delete($path.'/'.$entry);
            }
        }
        // Delete the folder
        if ($output != '') {
            $result = rmdir($path);
        } else {
            $result = @rmdir($path);
        }
        if ($result == 1) {
            // We have issued the command to delete the folder and everything
            // appears to have gone fine, but we can not be sure if we succeeded,
            // so we'll test if the folder still is there.
            clearstatcache(); // We need to clear the cache before we check if the folder is still there.
            if (is_dir($path)) {
                $debug_output = 'Couldn\'t delete folder ' . $path . '. Review permissions!';
                $success = false;
            } else {
                $debug_output = 'Folder deleted successfully';
                $success = true;
            }
        } else {
            $debug_output = 'Couldn\'t delete folder ' . $path . '. Review permissions!';
            $success = false;
        }
        if ($output != '') {
            return array($success,$debug_output);
        } else {
            return array($success,'');
        }
    } else {
        // Delete the file
        if ($output != '') {
            $result = unlink($path);
        } else {
            $result = @unlink($path);
        }
        if ($result == 1) {
            // We have issued the command to delete the file and everything
            // appears to have gone fine, but we can not be sure if we succeeded,
            // so we'll test if the file still is there.
            clearstatcache(); // We need to clear the cache first.
            if (file_exists($path)) {
                $debug_output = 'Couldn\'t delete file ' . $path . '. Review permissions!';
                $success = false;
            } else {
                $debug_output = 'File deleted successfully';
                $success = true;
            }
        } else {
            $debug_output = 'Couldn\'t delete file ' . $path . '. Review permissions!';
            $success = false;
        }
        if ($output != '') {
            return array($success,$debug_output);
        } else {
            return array($success,'');
        }
    }
}// end function cpg_folder_file_delete

/**
 * Get the form token and timestamp for the current user
 * this is calculated 
 *
 * @return array ($timestamp, $token)
 */
function getFormToken($timestamp = null)
{
    global $raw_ip, $CONFIG;
    $superCage = Inspekt::makeSuperCage();
    
    if($timestamp == null){
        $timestamp = time();
    }

    $token_criteria_array = array(
        'user_id'   => USER_ID,
        'site_tkn'  => $CONFIG['site_token'],
        'timestamp' => $timestamp
    );

    $token_criteria_array = CPGPluginAPI::filter('token_criteria', $token_criteria_array);

    $token_string = '';
    foreach($token_criteria_array as $value) {
        $token_string .= $value;
    }

    $token = md5($token_string);

    return array($timestamp, $token);
}

/**
 * Checks if the form token of a request is valid
 *
 * @return boolean
 */
function checkFormToken()
{
    global $CONFIG;
    $superCage = Inspekt::makeSuperCage();
    
    if ($superCage->post->keyExists('form_token') || $superCage->get->keyExists('form_token')){
        // check if the token is valid
        $received_token = ($superCage->post->keyExists('form_token')) ? $superCage->post->getAlNum('form_token') : $superCage->get->getAlNum('form_token');
        $received_timestamp = ($superCage->post->keyExists('timestamp')) ? $superCage->post->getInt('timestamp') : $superCage->get->getInt('timestamp');
        
        //first check if the timestamp hasn't expired yet
        if( ($received_timestamp + (int)$CONFIG['form_token_lifetime']) < time() ){
            return false;
        }
        
        $token = getFormToken($received_timestamp);
        if ($received_token === $token[1]) {
            return true;
        } else {
            return false;
        }
    }
    return false;
}

/**
 * array_slice with preserve_keys for every php version
 * (see: http://www.php.net/manual/en/function.array-slice.php#70913)
 * 
 *
 * @param array $array Input array
 * @param int $offset Start offset
 * @param int $length Length
 * @param bool $preserve_keys
 * @return array
 */
function array_slice_preserve_keys($array, $offset, $length = null, $preserve_keys = false)
{
    // PHP >= 5.0.2 is able to do this itself
    if((int)str_replace('.', '', phpversion()) >= 502){
        return(array_slice($array, $offset, $length, $preserve_keys));
    }
    
    if(!$preserve_keys){
        return(array_slice($array, $offset, $length));
    }else{
        // prepare input variables
        $result = array();
        $i = 0;
        if($offset < 0){
            $offset = count($array) + $offset;
        }
        if($length > 0){
            $endOffset = $offset + $length;
        }else if($length < 0){
            $endOffset = count($array) + $length;
        }else{
            $endOffset = count($array);
        }
        
        // collect elements
        foreach($array as $key=>$value){
            if($i >= $offset && $i < $endOffset){
                 $result[$key] = $value;
            }
            $i++;
        }
        // return
        return($result);
    }
}

/**
 * memory_get_usage
 * (see comments on http://www.php.net/manual/en/function.memory-get-usage.php)
 * 
 *
 * @return amount of memory allocated to PHP in bytes
 */
if (!function_exists('memory_get_usage')) {
    // Only define function if it doesn't exist
    function memory_get_usage()
    {
        // All of the replacement methods assume that we can use exec, so let's test first if it isn't disabled
        $disabled_function = ini_get('disable_functions');
        if ($disabled_function != '') { // there actually are disabled functions, so let's loop through the list
            $disabled_function_array = explode(',', $disabled_function);
            $loopCounter = 0;
            foreach ($disabled_function_array as $disabled_value) {
                if (stristr($disabled_value, 'exec') != FALSE) {
                    $loopCounter++;
                }
            }
            if ($loopCounter != 0) {
                // exec has been disabled, so we can't use any of the clever surrogates. Return nothing!
                return;
            }
        }
        if (substr(PHP_OS,0,3)=='WIN') { // If we are running on Windows
            $output = array();
            exec( 'tasklist /FI "PID eq ' . getmypid() . '" /FO LIST', $output );
            return preg_replace( '/[^0-9]/', '', $output[5] ) * 1024;
        } else {
            $pid = getmypid();
            $output = array();
            exec("ps -eo%mem,rss,pid | grep $pid", $output);
            $output = explode('  ', $output[0]);
            if ($output != '') {
                return $output[1] * 1024;
            } else {
                unset($output);
                $output = array();
                exec("ps -o rss -p $pid", $output); 
                return $output[1] *1024;
            }
        }
    }
}

function cpg_fillArrayFieldWithSpaces($text, $maxchars, $fillUpOn = 'right') {
  global $CONFIG;
  if (!function_exists('mb_strlen')) {
      require 'include/mb.inc.php';
  }
  $spaceCharsToAdd = $maxchars - mb_strlen($text, $CONFIG['charset']);
  if ($spaceCharsToAdd > 0) {
    for ($i = 1; $i <= $spaceCharsToAdd; $i++) {
      if ($fillUpOn != 'left') {
        $text .= ' ';
      } else {
        $text = ' '.$text;
      }
    }
  }
  return $text;
}

/**
 * cpg_fill_string_array_with_spaces
 * 
 * @param array $table (can be variable or array)
 * @param string $align alignment of the cells (left or right)
 * @param string $return_value desired return value (string or array)
 * @return array or string
 */
function cpg_fill_string_array_with_spaces($table, $separator = '|', $align = 'left', $return_value = 'string') {
    global $CONFIG, $LINEBREAK;
    // Populate the needed function
    if (!function_exists('mb_strlen')) {
        require 'include/mb.inc.php';
    }
    // Sanitize the parameters
    if ($align == 'right') {
        $fillUpOn = 'left';
    } else {
        $fillUpOn = 'right';
    }
    if ($return_value !=  'string' && $return_value != 'array') {
        $return_value = 'string';
    }
    // $table needs to be an associative array
    $max_string_length = array();
    // set default for return value
    if ($return_value == 'array') {
        $return = array();
    } else {
        $return = '';
    }
    // Find the longest string
    foreach ($table as $key) {
        if (is_array($key) != TRUE) {
            $key = array($key);
        }
        $loopCounter = 0;
        foreach ($key as $subkey) {
            $length = mb_strlen($subkey, $CONFIG['charset']);
            if (empty($max_string_length[$loopCounter]) || $length > $max_string_length[$loopCounter]) {
                $max_string_length[$loopCounter] = $length;
            }
            $loopCounter++;
        }
    }
    // Fill the $return array / var
    foreach ($table as $key => $value) {
        if (is_array($value) != TRUE) {
            $value = array($value);
        }
        $loopCounter = 0;
        $temp = '';
        foreach ($value as $subvalue) {
            if ($loopCounter != 0) {
                $temp .= $separator;
            }
            $temp .= cpg_fillArrayFieldWithSpaces($subvalue, $max_string_length[$loopCounter], $fillUpOn) ;
            $loopCounter++;
        }
        if ($return_value == 'array') {
            $return[$key] = $temp;
        } else {
            $return .= $temp . $LINEBREAK;
        }
    }
    return $return;
}


function cpg_get_comment_page_number($msg_id) {
    global $CONFIG;

    $result = cpg_db_query("SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '$msg_id'");
    list($pid) = mysql_fetch_row($result);

    if (!$pid) {
        return false;
    }

    $result = cpg_db_query("SELECT COUNT(msg_id) FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'");
    list($num) = mysql_fetch_row($result);
    $page_count = ceil($num / $CONFIG['comments_per_page']);
    
    $comment_sort_order = ($CONFIG['comments_sort_descending'] == 1) ? 'ASC' : 'DESC'; // we need to count reversed
    $result = cpg_db_query("SELECT msg_id FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid' ORDER BY msg_id $comment_sort_order");
    $i = 0;
    $page = $page_count + 1;
    while ($row = mysql_fetch_assoc($result)) {
        if (($i++ % $CONFIG['comments_per_page']) == 0) {
            $page--;
        }
        if ($row['msg_id'] == $msg_id) {
            break;
        }
    }
    mysql_free_result($result);

    return $page;
}

/**
 * cpg_lang_name2code
 * 
 * @param string $lang_name the name of a language file
 * @return string $return language code (flag name)
 */
function cpg_lang_name2code($lang_name) {
    global $CONFIG;
    if ($lang_name != '') {
        $result = cpg_db_query("SELECT flag, abbr FROM {$CONFIG['TABLE_LANGUAGE']} WHERE lang_id='{$lang_name}' LIMIT 1");
        list($flag, $abbr) = mysql_fetch_row($result);
        mysql_free_result($result);
        if ($abbr != '') {
            return $abbr;
        } elseif ($flag != '') {
            return $flag;
        }  else {
            return FALSE;
        }
    }
}


function cpg_get_guest_token() {
    global $CONFIG, $raw_ip;
    return md5($CONFIG['site_token'] . $raw_ip);
}

/**
 * str_ireplace
 * 
 * PHP4-replacement, taken from the user comments at http://theserverpages.com/php/manual/en/function.str-ireplace.php
 */
if (!function_exists('str_ireplace')) {
    function str_ireplace($search, $replace, $subject) {
        if (is_array($search)) {
            foreach ($search as $word) {
                $words[] = "/" . $word . "/i";
            }
        }
        else {
            $words = "/" . $search . "/i";
        }
        return preg_replace($words, $replace, $subject);
    }
}


// Check if a an album is password protected album and the user has access rights to that album
function cpg_pw_protected_album_access($aid) {
    global $CONFIG, $FORBIDDEN_SET_DATA;

    // Check if the user has already access to the album
    if (!in_array($aid, $FORBIDDEN_SET_DATA)) {
        return 2;
    }

    // Fetch all password protected albums
    $result = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE alb_password != ''");
    while($row = mysql_fetch_assoc($result)) {
        $aid_w_pw[] = $row['aid'];
    }

    // Check if the user has access to the password protected album if he knows the correct password
    if (!in_array($aid, array_diff($FORBIDDEN_SET_DATA, $aid_w_pw))) {
        return 1;
    } else {
        return 0;
    }
}

?>