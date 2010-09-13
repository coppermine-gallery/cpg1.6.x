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

define('IN_COPPERMINE', true);
define('DB_ECARD_PHP', true);
define('ECARDS_PHP', true);
define('SMILIES_PHP', true);

require('include/init.inc.php');
require('include/smilies.inc.php');

if (!$superCage->get->keyExists('data')) {
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

/**
 * Clean up GPC and other Globals here
 */
$tmpData['data'] = @unserialize(@base64_decode($superCage->get->getRaw('data')));

if (!is_array($tmpData['data'])) {
    $CLEAN['data'] = mysql_real_escape_string($tmpData['data']);
} else {
    // Remove HTML tags as we can't trust what we receive
    foreach ($tmpData['data'] as $key => $value) {
        $CLEAN['data'][$key] = $value;
        if ($key == 'pid') {
            $CLEAN['data'][$key] = (int) $CLEAN['data'][$key];
        } else {
            $CLEAN['data'][$key] = htmlspecialchars($CLEAN['data'][$key]);
        }
    }
}

// attempt to obtain full link from db if ecard logging enabled and min 12 chars of data is provided and only 1 match
if ((!is_array($CLEAN['data'])) && $CONFIG['log_ecards'] && (strlen($CLEAN['data']) > 12)) {

    $result = cpg_db_query("SELECT link FROM {$CONFIG['TABLE_ECARDS']} WHERE link LIKE '{$CLEAN['data']}%'");

    if (mysql_num_rows($result) === 1) {
        $row = mysql_fetch_assoc($result);
        $CLEAN['data']= @unserialize(@base64_decode($row['link']));
    }

    mysql_free_result($result);
}

if (is_array($CLEAN['data'])) {

    // Remove HTML tags as we can't trust what we receive
    //foreach($CLEAN['data'] as $key => $value) $CLEAN['data'][$key] = html_entity_decode(strtr($value, $HTML_SUBST));

    // get the dimensions
    $result = cpg_db_query("SELECT pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '{$CLEAN['data']['pid']}'");

    if (!mysql_num_rows($result)) {
        cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }
    
    $row = mysql_fetch_assoc($result);
    mysql_free_result($result);
    
    if ($row['pwidth'] != 0 && $row['pheight'] != 0) {
        $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['picture_width'], 'normal');
        $dimensions = $image_size['geom'];
    } else {
        $dimensions = '';
    }
    
    if (is_flash($CLEAN['data']['p'])) {
    
        $pic_markup = <<<EOT
        <object id="SWFlash" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" type="application/x-shockwave-flash" {$dimensions}>
            <param name="autostart" value="true" />
            <param name="src" value="{$CLEAN['data']['p']}" />
        </object>
EOT;

    } else {
        $pic_markup = '<img src="'.$CLEAN['data']['p'].'" '.$dimensions.' alt="" vspace="8" border="0" class="image" />';
    }
    
    // Load template parameters
    $params = array(
        '{LANG_DIR}'       => $lang_text_dir,
        '{TITLE}'          => sprintf($lang_ecard_php['ecard_title'], $CLEAN['data']['sn']),
        '{CHARSET}'        => $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'],
        '{VIEW_ECARD_TGT}' => '',
        '{VIEW_ECARD_LNK}' => '',
        '{PIC_URL}'        => $CLEAN['data']['p'],
        '{URL_PREFIX}'     => '',
        '{GREETINGS}'      => $CLEAN['data']['g'],
        '{MESSAGE}'        => bb_decode(process_smilies($CLEAN['data']['m'])),
        '{SENDER_EMAIL}'   => $CLEAN['data']['se'],
        '{SENDER_NAME}'    => $CLEAN['data']['sn'],
        '{VIEW_MORE_TGT}'  => $CONFIG['ecards_more_pic_target'],
        '{VIEW_MORE_LNK}'  => $lang_ecard_php['view_more_pics'],
        '{PID}'            => $CLEAN['data']['pid'],
        '{PIC_TITLE}'      => $CLEAN['data']['pt'],
        '{PIC_CAPTION}'    => bb_decode($CLEAN['data']['pc']),
        '{PIC_MARKUP}'     => $pic_markup,
    );
    
    // Parse template
    echo template_eval($template_ecard, $params);

} else {
    cpg_die(CRITICAL_ERROR, $lang_db_ecard_php['invalid_data'], __FILE__, __LINE__);
}

?>
