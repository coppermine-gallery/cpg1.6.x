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

if (!defined('IN_COPPERMINE')) {
    die('Not in Coppermine...');
}

// Format: array(regex to find in lang or user agent header, lang filename minus .php)

$available_languages = array(
    array('af|afrikaans', 'afrikaans'),
    array('ar([-_][[:alpha:]]{2})?|arabic', 'arabic'),
    array('be|belarusian', 'belarusian'),
    array('bg|bulgarian', 'bulgarian'),
    array('ca|catalan', 'catalan'),
    array('cs|czech', 'czech'),
    array('da|danish', 'danish'),
    array('de([-_][[:alpha:]]{2})?|german', 'german'),
    array('el|greek', 'greek'),
    array('en[-_]gb', 'english_gb'),
    array('en([-_][[:alpha:]]{2})?|english', 'english'),
    array('es([-_][[:alpha:]]{2})?|spanish', 'spanish'),
    array('et|estonian', 'estonian'),
    array('fa|farsi', 'farsi'),
    array('fi|finnish', 'finnish'),
    array('fr([-_][[:alpha:]]{2})?|french', 'french'),
    array('gl|galician', 'galician'),
    array('he|hebrew', 'hebrew'),
    array('hi|hindi', 'hindi'),
    array('hr|croatian', 'croatian'),
    array('hu|hungarian', 'hungarian'),
    array('id|indonesian', 'indonesian'),
    array('is|icelandic', 'icelandic'),
    array('it|italian', 'italian'),
    array('ja|japanese', 'japanese'),
    array('ko|korean', 'korean'),
    array('ka|georgian', 'georgian'),
    array('kk|kazakh', 'kazakh'),
    array('ls|slovenian', 'slovenian'),
    array('lt|lithuanian', 'lithuanian'),
    array('lu|luxembourgish', 'luxembourgish'),
    array('lv|latvian', 'latvian'),
    array('ms|malay', 'malay'),
    array('nl([-_][[:alpha:]]{2})?|dutch', 'dutch'),
    array('no|norwegian', 'norwegian'),
    array('pl|polish', 'polish'),
    array('pt[-_]br|brazilian portuguese', 'brazilian_portuguese'),
    array('pt([-_][[:alpha:]]{2})?|portuguese', 'portuguese'),
    array('ro|romanian', 'romanian'),
    array('ru|russian', 'russian'),
    array('sk|slovak', 'slovak'),
    array('sl|slovenian', 'slovenian'),
    array('sq|albanian', 'albanian'),
    array('sr|serbian', 'serbian'),
    array('sv|swedish', 'swedish'),
    array('th|thai', 'thai'),
    array('tr|turkish', 'turkish'),
    array('uk|ukrainian', 'ukrainian'),
    array('zh[-_]tw|chinese traditional', 'chinese_big5'),
    array('zh|chinese simplified', 'chinese_gb'),
);

function lang_detect_q($available_languages)
{
    $superCage = Inspekt::makeSuperCage();

    // We can use the getRaw method here because the data is not used directly
    $HTTP_ACCEPT_LANGUAGE = $superCage->server->getRaw('HTTP_ACCEPT_LANGUAGE');
    $HTTP_USER_AGENT = $superCage->server->getRaw('HTTP_USER_AGENT');
    
    if (!empty($HTTP_ACCEPT_LANGUAGE)) {
        $language_tokens = explode(',', $HTTP_ACCEPT_LANGUAGE);
        // loop through each Accept-Language token and find quality level (i.e. q=0.8)
        $lang_tag = $quality_tag = array();
        foreach ($language_tokens as $language_token ) {
            // explodes on ;q
            $q_explode = explode(';q=', $language_token);
            // if no q factor in token default q value = 1
            $q = isset($q_explode[1]) ? $q_explode[1] : 1;
            // add language_tag and quality_tag to array
            $lang_tag[]    = $q_explode[0];
            $quality_tag[] = $q;
        }
        // sorts array on key in reverse order (higher quality first)
        // array_multisort was too slow
        arsort($quality_tag);
        // loop throuh every quality_tag array
        foreach ($quality_tag as $q_key => $q_val) {
            // loop through each available_languages 
            foreach ($available_languages as $language) {
                if (preg_match('#^(?:'. $language[0] .')#i', $lang_tag[$q_key])) {
                    // exit function on first match.
                    return $language[1];
                }
            }
        }

        // if Accept-Language not present in the client's http header, we try the User-Agent string
    } elseif (!empty($HTTP_USER_AGENT)) {      
        // once again, loop through each available_languages 
        foreach ($available_languages as $language) {
            if (preg_match('#[(,; [](?:'. $language[0] .')[]),;]#i', $HTTP_USER_AGENT)) {
                // exit function on first match.
                return $language[1];
            }
        }
    }
    // if nothing found --> exit function with false (or default language value if necessary)
    return false;
}

$lang = lang_detect_q($available_languages);

unset($available_languages);

// If we catched a valid language, configure it
if ($lang) {
    $USER['lang'] = $lang;
}
