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
define('THUMBNAILS_PHP', true);
define('INDEX_PHP', true);

require('include/init.inc.php');
include('include/archive.php');

if ($CONFIG['enable_zipdownload'] < 1) {
    //someone has entered the url manually, while the admin has disabled zipdownload
    pageheader($lang_errors['error']);
    starttable('-2', cpg_fetch_icon('stop', 2) . $lang_errors['error']);
    print <<<EOT
    <tr>
            <td align="center" class="tableb">
          {$lang_errors['perm_denied']}
          </td>
    </tr>
EOT;
    endtable();
    pagefooter();
} else {
    // zipdownload allowed, go ahead...
    $filelist = array();
    
    if (count($FAVPICS) > 0) {
        if ($CONFIG['enable_zipdownload'] == 2) {
            $params = array(
                '{GAL_NAME}' => $CONFIG['gallery_name'],
                '{GAL_DESCRIPTION}' => $CONFIG['gallery_description'],
                '{GAL_URL}' => $CONFIG['ecards_more_pic_target'].'thumbnails.php?album=favpics',
                '{USERNAME}' => sprintf($lang_thumb_view['zipdownload_username'], USER_NAME),
                '{DATE}' => localised_date(-1, $lang_date['comment']),
                '{COPYRIGHTS}' => $lang_thumb_view['zipdownload_copyright'],
            );
            $plaintext_message = template_eval($template_zipfile_plaintext, $params);
            // Garbage collection: get rid of existing readme file
            spring_cleaning('./'.$CONFIG['fullpath'].'edit', CPG_HOUR);
            // Create a unique file name
            $readme_filename = 'readme_' . time() . '.txt';
            // Create the temporary readme file
            if ($fd = @fopen($CONFIG['fullpath'].'edit/'.$readme_filename, 'wb')) {
                @fwrite($fd, $plaintext_message);
                @fclose($fd);
                // Add the plain text file to the file list
                $filelist[] = 'edit/'.$readme_filename;
            } else {
                // Something went wrong while creating the readme file.
                // We'll continue anyway.
            }
        }
                
        $favs = implode(', ', $FAVPICS);

        $result = cpg_db_query("SELECT filepath, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND pid IN ($favs)");
        $rowset = cpg_db_fetch_rowset($result);
        
        foreach ($rowset as $key => $row) {
                $filelist[] = $rowset[$key]['filepath'].$rowset[$key]['filename'];
        }
    }
    
    $filename = 'edit/pictures-' . uniqid() . '.zip';
    $zip = new zip_file($filename);
    
    $options = array(
        'basedir'    => "./{$CONFIG['fullpath']}",
        'recurse'    => 0,
        'storepaths' => 0,
    );
   
    $zip->set_options($options);
    $zip->add_files($filelist);
    $zip->create_archive();

    if ($CONFIG['enable_zipdownload'] == 2) {
        @unlink($CONFIG['fullpath'].'edit/'.$readme_filename);
    }
    
    ob_end_clean();
    
    header('Location: ' . $CONFIG['site_url'] . $CONFIG['fullpath'] . $filename);
}

?>