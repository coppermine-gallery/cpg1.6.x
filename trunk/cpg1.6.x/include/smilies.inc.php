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
// CODE IN THIS MODULE IS TAKEN FROM phpBB                                   //
// ------------------------------------------------------------------------- //

function get_smilies_table1()
{
    global $lang_smilies_inc_php;

    $smilies_process = array(
        array(':!:', 'exclaim.gif', $lang_smilies_inc_php['Exclamation']),
        array(':?:', 'question.gif', $lang_smilies_inc_php['Question']),
        array(':D', 'biggrin.gif', $lang_smilies_inc_php['Very Happy']),
        array(':-D', 'biggrin.gif', $lang_smilies_inc_php['Very Happy']),
        array(':grin:', 'biggrin.gif', $lang_smilies_inc_php['Very Happy']),
        array(':)', 'smile.gif', $lang_smilies_inc_php['Smile']),
        array(':-)', 'smile.gif', $lang_smilies_inc_php['Smile']),
        array(':smile:', 'smile.gif', $lang_smilies_inc_php['Smile']),
        array(':(', 'sad.gif', $lang_smilies_inc_php['Sad']),
        array(':-(', 'sad.gif', $lang_smilies_inc_php['Sad']),
        array(':sad:', 'sad.gif', $lang_smilies_inc_php['Sad']),
        array(':o', 'surprised.gif', $lang_smilies_inc_php['Surprised']),
        array(':-o', 'surprised.gif', $lang_smilies_inc_php['Surprised']),
        array(':eek:', 'surprised.gif', $lang_smilies_inc_php['Surprised']),
        array(':shock:', 'eek.gif', $lang_smilies_inc_php['Shocked']),
        array(':?', 'confused.gif', $lang_smilies_inc_php['Confused']),
        array(':-?', 'confused.gif', $lang_smilies_inc_php['Confused']),
        array(':???:', 'confused.gif', $lang_smilies_inc_php['Confused']),
        array('8)', 'cool.gif', $lang_smilies_inc_php['Cool']),
        array('8-)', 'cool.gif', $lang_smilies_inc_php['Cool']),
        array(':cool:', 'cool.gif', $lang_smilies_inc_php['Cool']),
        array(':lol:', 'lol.gif', $lang_smilies_inc_php['Laughing']),
        array(':x', 'mad.gif', $lang_smilies_inc_php['Mad']),
        array(':-x', 'mad.gif', $lang_smilies_inc_php['Mad']),
        array(':mad:', 'mad.gif', $lang_smilies_inc_php['Mad']),
        array(':P', 'razz.gif', $lang_smilies_inc_php['Razz']),
        array(':-P', 'razz.gif', $lang_smilies_inc_php['Razz']),
        array(':razz:', 'razz.gif', $lang_smilies_inc_php['Razz']),
        array(':oops:', 'redface.gif', $lang_smilies_inc_php['Embarrassed']),
        array(':cry:', 'cry.gif', $lang_smilies_inc_php['Crying or Very sad']),
        array(':evil:', 'evil.gif', $lang_smilies_inc_php['Evil or Very Mad']),
        array(':twisted:', 'twisted.gif', $lang_smilies_inc_php['Twisted Evil']),
        array(':roll:', 'rolleyes.gif', $lang_smilies_inc_php['Rolling Eyes']),
        array(':wink:', 'wink.gif', $lang_smilies_inc_php['Wink']),
        array(';)', 'wink.gif', $lang_smilies_inc_php['Wink']),
        array(';-)', 'wink.gif', $lang_smilies_inc_php['Wink']),
        array(':idea:', 'idea.gif', $lang_smilies_inc_php['Idea']),
        array(':arrow:', 'arrow.gif', $lang_smilies_inc_php['Arrow']),
        array(':|', 'neutral.gif', $lang_smilies_inc_php['Neutral']),
        array(':-|', 'neutral.gif', $lang_smilies_inc_php['Neutral']),
        array(':neutral:', 'neutral.gif', $lang_smilies_inc_php['Neutral']),
        array(':mrgreen:', 'mrgreen.gif', $lang_smilies_inc_php['Mr. Green'])
        );

    $smilies_process = CPGPluginAPI::filter('smilies_process',$smilies_process);
    return $smilies_process;
}

function get_smilies_table2()
{
    global $lang_smilies_inc_php;

    $smilies_display = array(
        array(':lol:', 'lol.gif', $lang_smilies_inc_php['Laughing']),
        array(':-P', 'razz.gif', $lang_smilies_inc_php['Razz']),
        array(':-D', 'biggrin.gif', $lang_smilies_inc_php['Very Happy']),
        array(':-)', 'smile.gif', $lang_smilies_inc_php['Smile']),
        array(':-|', 'neutral.gif', $lang_smilies_inc_php['Neutral']),
        array(':-(', 'sad.gif', $lang_smilies_inc_php['Sad']),
        array(':cry:', 'cry.gif', $lang_smilies_inc_php['Crying or Very sad']),
        array('8-)', 'cool.gif', $lang_smilies_inc_php['Cool']),
        array(':-o', 'surprised.gif', $lang_smilies_inc_php['Surprised']),
        array(':-?', 'confused.gif', $lang_smilies_inc_php['Confused']),
        array(':oops:', 'redface.gif', $lang_smilies_inc_php['Embarrassed']),
        array(':shock:', 'eek.gif', $lang_smilies_inc_php['Shocked']),
        array(':-x', 'mad.gif', $lang_smilies_inc_php['Mad']),
        array(':roll:', 'rolleyes.gif', $lang_smilies_inc_php['Rolling Eyes']),
        array(';-)', 'wink.gif', $lang_smilies_inc_php['Wink']),
        array(':idea:', 'idea.gif', $lang_smilies_inc_php['Idea']),
        array(':!:', 'exclaim.gif', $lang_smilies_inc_php['Exclamation']),
        array(':?:', 'question.gif', $lang_smilies_inc_php['Question'])
        );

    $smilies_display = CPGPluginAPI::filter('smilies_display',$smilies_display);
    return $smilies_display;
}
// Smilies code ... would this be better tagged on to the end of bbcode.php?
// Probably so and I'll move it before B2

function process_smilies($message, $url_prefix = '')
{
    static $orig, $repl;

    if (!isset($orig)) {
        global $db, $board_config,$THEME_DIR;
        $orig = $repl = array();

        $smilies = get_smilies_table1();

        $paths = array($THEME_DIR.'/smiles/', 'images/smiles/');

        for ($i = 0; $i < count($smilies); $i++) {
            $orig[] = "/(?<=.\W|\W.|^\W)" . preg_quote($smilies[$i][0], "/") . "(?=.\W|\W.|\W$)/";
            $smile_path = (file_exists($paths[0].$smilies[$i][1]))?($paths[0]):($paths[1]);
            $repl[] = '<img src="' . $url_prefix . $smile_path . ($smilies[$i][1]) . '" alt="' . ($smilies[$i][2]) . '"  />';
        }
    }

    if (count($orig)) {
        $message = preg_replace($orig, $repl, ' ' . $message . ' ');
        $message = substr($message, 1, -1);
    }
    return $message;
}

// Fill smiley templates (or just the variables) with smileys
// Either in a window or inline

function generate_smilies($form = 'post', $field = 'message')
{
    global $THEME_DIR, $LINEBREAK;
    $smilies = get_smilies_table2();
    $paths = array($THEME_DIR.'/smiles/', 'images/smiles/');

    if (function_exists('theme_generate_smilies')) {
        $html = theme_generate_smilies($smilies, $form);
    } else {

        $html = '<table width="100%" border="0" cellspacing="0" cellpadding="0">' . $LINEBREAK . '        <tr align="center" valign="middle">' . $LINEBREAK;

        foreach ($smilies as $smiley) {
            $smile_path = (file_exists($paths[0].$smiley[1]))?($paths[0]):($paths[1]);
            $caption = $smiley[2] . " " . $smiley[0];
            if (file_exists('images/smiles/' . $smiley[1]) == TRUE) {
				$html .= '                <td width="5%"><img src="images/smiles/' . $smiley[1] . '" alt="' . $caption . '" border="0" style="cursor:pointer;" title="' . $caption . '" onclick="javascript:emot' . $form . '(\'' . $smiley[0] . '\')" /></td>' . $LINEBREAK;
			}
        }

        $html .= '        </tr>' . $LINEBREAK . '</table>' . $LINEBREAK;
    }

    $html .= <<<EOT

<script language="JavaScript" type="text/javascript">
<!--
function emot$form(text) {
        text = ' ' + text + ' ';
        if (document.$form.$field.createTextRange && document.$form.$field.caretPos) {
                var caretPos = document.$form.$field.caretPos;
                caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
                document.$form.$field.focus();
        } else {
                document.$form.$field.value  += text;
                document.$form.$field.focus();
        }
}

function storeCaret_$form(textEl) {
        if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}
//-->

EOT;
    $html .= '</script>' . $LINEBREAK;
    return $html;
}

?>