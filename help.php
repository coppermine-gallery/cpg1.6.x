<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * help.php
 * @since  1.6.04
 */

define('IN_COPPERMINE', true);
define('HELP_PHP', true);
define('ADMIN_PHP', true);
define('PICMGR_PHP', true);
define('GROUPMGR_PHP', true);
define('UPLOAD_PHP', true);
require('include/init.inc.php');

function adjust4remote (&$html, $bURL, $help_lang='en')
{
	// Adjust for remote location of doc files
	$html = str_replace('<a href="docs/', '<a target="_blank" href="'.$bURL, $html);
	$html = str_replace('<img src="docs/', '<img src="'.$bURL, $html);
	$html = str_replace(' src="docs/', ' src="'.$bURL, $html);
}

// see if there is a local copy of the docs
$haslocal = file_exists('docs/README.md');

if ($haslocal) {
    $rURL = 'docs/';
} else {
    // probe remote for URL
    $http = empty($superCage->server->_source['HTTPS']) ? 'http' : 'https';
    $rURL = file_get_contents($http.'://coppermine-gallery.net/docs/?c=1&v='.str_replace('.','',COPPERMINE_VERSION));
}

// set charset
$meta_charset = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

// Get the vars from the url
if ($superCage->get->keyExists('as')) {
    if ($matched = $superCage->get->getMatched('as', "/^[a-zA-Z0-9_\-]*$/")) {
        $anchor_start = $matched[0];
    } else {
        $anchor_start = '';
    }
} else {
    $anchor_start = '';
}
unset($matched);
if ($superCage->get->keyExists('ae')) {
    if ($matched = $superCage->get->getMatched('ae', "/^[a-zA-Z0-9_\-]*$/")) {
        $anchor_end = $matched[0];
    } else {
        $anchor_end = '';
    }
} else {
    $anchor_end = '';
}
unset($matched);
if ($superCage->get->keyExists('close')) {
    $close = $superCage->get->getInt('close');
} else {
    $close = '0';
}
if ($superCage->get->keyExists('h') && preg_match('/^(lang_[a-z0-9_]+)(?:\[([a-z0-9_]+)\])?(?:\[([a-z0-9_]+)\])?$/', $superCage->get->getEscaped('h'), $matches)) {

    if (preg_match('/^lang_plugin_(.*)$/i', $matches[1], $match_plugin)) {
        cpg_load_plugin_language_file($match_plugin[1]);
    }
    if (isset($matches[3])) {
        $header = ${$matches[1]}[$matches[2]][$matches[3]];
    } elseif (isset($matches[2])) {
        $header = ${$matches[1]}[$matches[2]];
    } else {
        $header = ${$matches[1]};
    }
} else {
    $header = '';
}
if ($superCage->get->keyExists('t') && preg_match('/^(lang_[a-z0-9_]+)(?:\[([a-z0-9_]+)\])?(?:\[([a-z0-9_]+)\])?$/', $superCage->get->getEscaped('t'), $matches)) {
    if (preg_match('/^lang_plugin_(.*)$/i', $matches[1], $match_plugin)) {
        cpg_load_plugin_language_file($match_plugin[1]);
    }
    if ($matches[1] == 'lang_tmp_picture_manager') {
        $text = <<< EOT
            <ul>
                <li>{$lang_picmgr_php['explanation1']}</li>
                <li>{$lang_picmgr_php['explanation2']}</li>
            </ul>
EOT;
    } elseif ($matches[1] == 'lang_tmp_upload') {
        $restriction_filesize = sprintf($lang_upload_php['restriction_filesize'], '<strong>' . cpg_format_bytes($CONFIG['max_upl_size'] * 1024) . '</strong>');
        if ($CONFIG['allowed_img_types'] != '') {
            $allowed_img_types = '<li>' . sprintf ($lang_upload_php['allowed_img_types'], $CONFIG['allowed_img_types']) . '</li>';
        } else {
            $allowed_img_types = '';
        }
        if ($CONFIG['allowed_mov_types'] != '') {
            $allowed_mov_types = '<li>' . sprintf ($lang_upload_php['allowed_mov_types'], $CONFIG['allowed_mov_types']) . '</li>';
        } else {
            $allowed_mov_types = '';
        }
        if ($CONFIG['allowed_snd_types'] != '') {
            $allowed_snd_types = '<li>' . sprintf ($lang_upload_php['allowed_snd_types'], $CONFIG['allowed_snd_types']) . '</li>';
        } else {
            $allowed_snd_types = '';
        }
        if ($CONFIG['allowed_doc_types'] != '') {
            $allowed_doc_types = '<li>' . sprintf ($lang_upload_php['allowed_doc_types'], $CONFIG['allowed_doc_types']) . '</li>';
        } else {
            $allowed_doc_types = '';
        }
        $text = <<< EOT
<ul>
    <li>{$lang_upload_php['up_instr_1']}</li>
    <li>{$lang_upload_php['up_instr_2']}</li>
    <li>{$lang_upload_php['up_instr_3']}</li>
    <li>{$lang_upload_php['up_instr_4']}</li>
    <li>{$lang_upload_php['up_instr_5']}</li>
</ul>

<h2>{$lang_upload_php['restrictions']}</h2>
<ul>
    <li>{$restriction_filesize}</li>
    <li>{$lang_upload_php['restriction_zip']}</li>
    <li>{$lang_upload_php['allowed_types']}
        <ul>
            {$allowed_img_types}
            {$allowed_mov_types}
            {$allowed_snd_types}
            {$allowed_doc_types}
        </ul>
    </li>
</ul>
EOT;
    } elseif ($matches[1] == 'lang_groupmgr_php' && isset($matches[2]) && $matches[2] == 'explain_guests_greyed_out_text') {
        $group_name = cpg_db_query("SELECT group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = 3")->result(0);
        $text = sprintf($text, '<em>'.$group_name.'</em>');
    } elseif (isset($matches[3])) {
        $text = ${$matches[1]}[$matches[2]][$matches[3]];
    } elseif (isset($matches[2])) {
        $text = ${$matches[1]}[$matches[2]];
    } else {
        $text = ${$matches[1]};
    }
} else {
    $text = '';
}

// Adjust for remote location of doc files if needed
if (!$haslocal) adjust4remote($text, $rURL);

if ($superCage->get->keyExists('style')) {
    if ($matched = $superCage->get->getMatched('style', "/^[a-zA-Z0-9_\-]*$/")) {
        $style = $matched[0];
    } else {
        $style = '';
    }
} else {
    $style = '';
}
unset($matched);
if ($superCage->get->keyExists('f')) {
    if ($matched = $superCage->get->getMatched('f', "/^([a-zA-Z0-9_\-]){1,}(\.){0,1}([a-zA-Z0-9]){0,}$/")) {
        $file = $matched[0];
    } else {
        $file = 'index.htm';
    }
} else {
    $file = 'index.htm';
}
unset($matched);
// sanitize the file name
if (strrpos($file, '.') != FALSE) {
    $file = substr($file, 0, strrpos($file, '.'));
}
$file = preg_replace('/[^0-9a-zA-Z_-]/', '', $file);
$file = $file . '.htm';

// Determine the language of the user and display the help file in his language if available.
// Fall back to English if the file is not available in his/her language.
// This should be done at a later stage in an i18n table. For now, let's do a straightforward if/then.

// Populate a list of available sub-folders of the docs folder
//		$available_doc_folders_array = form_get_foldercontent('docs/', 'folder', '', array('images', 'js', 'style', '.svn'));

// Query the languages table
$results = cpg_db_query("SELECT lang_id, abbr FROM {$CONFIG['TABLE_LANGUAGE']} WHERE available = 'YES' AND enabled = 'YES'");
while ($row = $results->fetchAssoc()) {
    if ($CONFIG['lang'] == $row['lang_id']) {
        $help_lang = $row['abbr'];
        break;
    } else {
        $help_lang = 'en';
    }
} // while
$results->free();
unset($row);

if ($haslocal) {
    // Make sure that the chosen help file actually exists
    if (file_exists('docs/'.$help_lang.'/'.$file) != TRUE) {
        $help_lang = 'en';
    }

    ob_start();
    @include('docs/'.$help_lang.'/'.$file);
    $string = ob_get_contents();
    ob_end_clean();
} else {
    $string = file_get_contents($rURL.$help_lang.'/'.$file);
    // provide fallback to english
    if (!$string && $help_lang !== 'en') {
    	$help_lang = 'en';
    	$string = file_get_contents($rURL.$help_lang.'/'.$file);
    }
}

$string = strstr($string, '<body>'); // Get rid of the head, as we use a head of our own
$string = str_replace('<body>', '', $string);
$string = str_replace('</body>', '', $string);
$string = str_replace('</html>', '', $string);


// manipulate the string according to settings

if ($anchor_start != '') {
    $pattern = '<a id="' . $anchor_start . '"></a>';
    $string = strstr($string, $pattern);
    //remove the start anchor
    $pattern = "'".$pattern."'si";
    //$string = preg_replace($pattern, "", $string);
}

if ($anchor_end != '') {
    $pattern = '<a id="' . $anchor_end . '"></a>';
    $string2 = strstr($string, $pattern);
    //remove the start anchor
    $pattern = "'".$pattern."'si";
    $string2 = preg_replace($pattern, "", $string2);
    $string = str_replace($string2, '', $string);
    $string = preg_replace($pattern, "", $string);
}

// Fix path for some tags
$string = str_replace('<img src="pics/', '<img src="docs/'.$help_lang.'/images/', $string);
$string = str_replace('<img src="../images/icons/', '<img relativeImagesIconsDir', $string);
$string = str_replace('<img src="../images/', '<img relativeImagesDir', $string);
$string = str_replace('images/', 'docs/'.$help_lang.'/images/', $string);
$string = str_replace('../../docs/'.$help_lang.'/images', 'images', $string);
$string = str_replace('<img relativeImagesIconsDir', '<img src="docs/images/icons/', $string);
$string = str_replace('<img relativeImagesDir', '<img src="docs/images/', $string);
$string = str_replace('<a href="http://', '<a externalLinkTempReplacement', $string); // get external links out of the way
$string = str_replace('<a href="#', '<a internalAnchorLinkTempReplacement', $string); // get links to anchors on this page out of the way
$string = str_replace('<a href="', '<a href="docs/'.$help_lang.'/', $string);
$string = str_replace('<a externalLinkTempReplacement', '<a href="http://', $string); // restore external links
$string = str_replace('<a internalAnchorLinkTempReplacement', '<a href="' . 'docs/'.$help_lang.'/'.$file . '#', $string); // restore links to anchors on this page

// Adjust for remote location of doc files if needed
if (!$haslocal) adjust4remote($string, $rURL);

if ($header != '') {
    if ($CONFIG['charset'] == 'language file') {
        $meta_charset = '<meta http-equiv="Content-Type" content="text/html; charset='.$lang_charset.'" />';
    } else {
        $meta_charset = '<meta http-equiv="Content-Type" content="text/html; charset='.$CONFIG['charset'].'" />';
    }
    $content = '<h1>'.$header.'</h1>';
    $content .= $text;
} else {
    $content = '';
}

echo <<< EOT
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>{$lang_common['help']}</title>
        $meta_charset
        <link rel="stylesheet" href="css/coppermine.css" type="text/css" />
        <link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" type="text/css" />
        <script src="{$rURL}js/jquery.js" type="text/javascript"></script>
        <script src="{$rURL}js/help.js" type="text/javascript"></script>
    </head>
    <body class="nobgimage">
        <div id="cpg_main_block">
            $string
            $content
        </div>
    </body>
</html>

EOT;

//EOF
