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

/*
TODO:
update filesize in db when thumbs are updated
change use of string 'true' and 'false' to booleans for resize_image parameter
autorefresh detection of more images to process is incorrect, would lead to an additional refresh in some cases
add checks for is_image() to functions that only apply to images
remove extract() from refresh_db()
*/

define('IN_COPPERMINE', true);
define('UTIL_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$defpicnum = 25; // Default number of pictures to process at a time when rebuilding thumbs or normals:
$dayolder  = 365; // Default number of days for deleting files older than xxx days {Frantz}

$icon_array = array(
    'continue'   => cpg_fetch_icon('right', 2),
    'back'       => cpg_fetch_icon('leftleft', 2),
    'delete_all' => cpg_fetch_icon('delete', 2),
    'ok'         => cpg_fetch_icon('ok', 2),
	'stop'       => cpg_fetch_icon('stop', 2),
	'cancel'     => cpg_fetch_icon('cancel', 2),
	'info'       => cpg_fetch_icon('info', 2),
	'util'       => cpg_fetch_icon('util', 2),
);

js_include('js/util.js');
pageheader($lang_util_php['title']);

// 'action name (for the $_REQUEST)' => array('function name','title for main page','description/options for main page')

if ($CONFIG['make_intermediate'] == 1) {
    $intermediate_create_string = $lang_util_php['enabled'];
} else {
    $intermediate_create_string = $lang_util_php['disabled'];
}

// Set up labels for keyword separator conversion
$keyword_select = $LINEBREAK . '                <select size="1" name="%s" class="listbox">';
foreach ($lang_common['keyword_separators'] as $key_value=>$key_label) {
    $keyword_select .= '<option value="' . htmlentities($key_value) . '">' . $key_label . '</option>';  
}
$keyword_select .= '</select>' . $LINEBREAK . '                ';
$keyword_from_to = sprintf(
                        $lang_util_php['keyword_from_to'],
                        sprintf($keyword_select,'keyword_from'),
                        sprintf($keyword_select,'keyword_to')
                    );
$keyword_set = $lang_util_php['keyword_set'];
$replace_options = array_merge($lang_common['keyword_separators'],$lang_util_php['keyword_replace_values']);
$replace_select = $LINEBREAK . '                <select size="1" name="%s" class="listbox">';
foreach ($replace_options as $key_value=>$key_label) {
    $replace_select .= '<option value="' . htmlentities($key_value) . '">' . $key_label . '</option>';  
}
$replace_select .= '</select>' . $LINEBREAK . '                ';
$keyword_replace1 = sprintf(
                        $lang_util_php['keyword_replace_before'],
                        sprintf($replace_select,'keyword_replace1_from'),
                        sprintf($replace_select,'keyword_replace1_to')
                    );
$keyword_replace2 = sprintf(
                        $lang_util_php['keyword_replace_after'],
                        sprintf($replace_select,'keyword_replace2_from'),
                        sprintf($replace_select,'keyword_replace2_to')
                    );
// $lang_util_php['keyword_replace_values']
// $lang_common['keyword_separators']

// Set up array of admin tools to choose
$tasks = array(

    'update_thumbs' => array(
        'update_thumbs',
        $lang_util_php['update'],'
                <strong>' . $lang_util_php['update_what'] . ' (2):</strong><br />
                <input type="radio" name="updatetype" id="updatetype1" value="0" class="nobg" /><label for="updatetype1" class="clickable_option">'.$lang_util_php['update_thumb'].'</label><br />
                <input type="radio" name="updatetype" id="updatetype2" value="1" class="nobg" /><label for="updatetype2" class="clickable_option">'.$lang_util_php['update_pic'].'</label><br />
                <input type="radio" name="updatetype" id="updatetype3" value="2" class="nobg" /><label for="updatetype3" class="clickable_option">'.$lang_util_php['update_both'].'</label><br />
                <input type="radio" name="updatetype" id="updatetype5" value="4" class="nobg" /><label for="updatetype5" class="clickable_option">'.$lang_util_php['update_full'].'</label><br />
                <input type="radio" name="updatetype" id="updatetype4" value="3" checked="checked" class="nobg" /><label for="updatetype4" class="clickable_option">'.$lang_util_php['update_full_normal'].'</label><br />
                <input type="radio" name="updatetype" id="updatetype6" value="5" class="nobg" /><label for="updatetype6" class="clickable_option">'.$lang_util_php['update_full_normal_thumb'].'</label><hr />
                '. $lang_util_php['update_number'] . ' <input type="text" name="numpics" value="'.$defpicnum.'" size="5" class="textinput" /> '.$lang_util_php['update_option'].'<br />
                <input type="checkbox" name="autorefresh" id="autorefresh" checked="checked" value="1" class="checkbox" /><label for="autorefresh">'.$lang_util_php['autorefresh'].'</label><br />'
    ),

    'filename_to_title' => array(
        'filename_to_title',
        $lang_util_php['filename_title'],'
                <strong>' . $lang_util_php['filename_how'] . ' (2):</strong><br />
                <input type="radio" name="parsemode" id="parsemode1" value="0" checked="checked" class="nobg" /><label for="parsemode1" class="clickable_option">' . $lang_util_php['filename_remove'] . '</label><br />
                <input type="radio" name="parsemode" id="parsemode2" value="1" class="nobg" /><label for="parsemode2" class="clickable_option">' . $lang_util_php['filename_euro'] . '</label><br />
                <input type="radio" name="parsemode" id="parsemode3" value="2" class="nobg" /><label for="parsemode3" class="clickable_option">' . $lang_util_php['filename_us'] . '</label><br />
                <input type="radio" name="parsemode" id="parsemode4" value="3" class="nobg" /><label for="parsemode4" class="clickable_option">' . $lang_util_php['filename_time'] . '</label><br />
                <br />
                <input type="checkbox" name="notitle" checked="checked" value="1" class="nobg" />' . $lang_util_php['notitle']
    ),

    'del_titles' => array(
        'del_titles',
        $lang_util_php['delete_title'],
        $lang_util_php['delete_title_explanation']
    ),

    'del_orig' => array(
        'del_orig',
        $lang_util_php['delete_original'],
        $lang_util_php['delete_original_explanation']
    ),

    'del_norm' => array(
        'del_norm',
        $lang_util_php['delete_intermediate'],'
                ' . $lang_util_php['delete_intermediate_explanation1'] . '<br />
                '. $lang_util_php['delete_intermediate_explanation2'] . '<br />
                '. sprintf($lang_util_php['delete_intermediate_check'], $intermediate_create_string)
    ),

    'del_old' => array(
        'del_old',
        $lang_util_php['delete_old'],'
                ' . $lang_util_php['delete_old_explanation'] . '<br />
                <span style="color:red">' . $lang_util_php['delete_old_warning'] . '</span><br />
                '. sprintf($lang_util_php['older_than'],'<input type="text" name="day_number" value="'.$dayolder.'" size="5" class="textinput"/>')
    ),


    'del_orphans' => array(
        'del_orphans',
        $lang_util_php['delete_orphans'],
        $lang_util_php['delete_orphans_explanation']
    ),

    'deletebackup_img' => array(
        'deletebackup_img',
        $lang_util_php['delete_back'],
        $lang_util_php['delete_back_explanation']
    ),

    'refresh_db' => array(
        'refresh_db',
        $lang_util_php['refresh_db'],'
                ' . $lang_util_php['refresh_db'] . '<br />
                '. $lang_util_php['update_number'] . '<input type="text" name="refresh_numpics" value="'.$defpicnum.'" size="5" class="textinput" /><br />
                '. $lang_util_php['update_option']
    ),

    'reset_views' => array(
        'reset_views',
        $lang_util_php['reset_views'],
        $lang_util_php['reset_views_explanation']
    ),

    'keyword_convert' => array(
        'keyword_convert', 
        $lang_util_php['keyword_convert'],'
                <strong>' . $keyword_from_to . ' (2)</strong><br />
                <input type="checkbox" name="keyword_set" checked="checked" value="1" class="nobg" />' . $keyword_set . '<br />
                <input type="checkbox" name="keyword_replace1" value="1" class="nobg" />' . $keyword_replace1 . '<br />
                <input type="checkbox" name="keyword_replace2" value="1" class="nobg" />' . $keyword_replace2 . '<br />
                <br />
                '. $lang_util_php['keyword_explanation']
    ),
);

if ($superCage->post->keyExists('action') && $matches = $superCage->post->getMatched('action', '/^[A-Za-z_]+$/')) {
    $action = $matches[0];
} elseif ($superCage->get->keyExists('action')&& $matches = $superCage->get->getMatched('action', '/^[A-Za-z_]+$/')) {
    $action = $matches[0];
} else {
    $action = '';
}

if (array_key_exists($action, $tasks)) {
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    call_user_func($action);
    echo '<br /><a href="util.php?t=' . date('His') . floor(rand(0, 1000)) . '#admin_tools" class="admin_menu">' . $icon_array['back'] . ' ' . $lang_util_php['back'] . '</a>';

} else {

    $help = '&nbsp;'.cpg_display_help('f=admin-tools.htm&amp;as=admin_tools&amp;ae=admin_tools_end&amp;top=1', '600', '400');


    print '<br /><form name="cpgform" id="cpgform" action="util.php?t=' . date('His') . floor(rand(0, 1000)) . '#admin_tools" method="post">';
    print '<a name="admin_tools"></a>';

    starttable('100%', $icon_array['util'] . $lang_util_php['title'] . $help, 1);

    $loopCounter = 0;

    foreach ($tasks as $task) {

        list($name, $title, $options) = $task;

        print '  <tr>'.$LINEBREAK;
        print '    <td class="tableh2">'.$LINEBREAK;
        
        if ($name) {
            print '      <input type="radio" name="action" value="'.$name.'" id="'.$name.'" class="nobg" /><label for="'.$name.'" class="clickable_option">'.$title.'</label>'.$LINEBREAK;
        } else {
            print '      '.$title;
        }
        
        print '    </td>'.$LINEBREAK;
        print '  </tr>'.$LINEBREAK;
        print '  <tr>'.$LINEBREAK;
        print '    <td>'.$LINEBREAK;
        print '      <div id="'.$name.'_wrapper">'.$LINEBREAK;
        print '        '.$LINEBREAK;
        
        starttable('100%', '', 2);
        
        print '          <tr>'.$LINEBREAK;
        print '            <td class="tableb">'.$LINEBREAK;
        print '            </td>'.$LINEBREAK;
        print '            <td class="tableb">'.$LINEBREAK;
        print $options;
        print '            </td>'.$LINEBREAK;
        print '          </tr>'.$LINEBREAK;
        print '        '.$LINEBREAK;
        
        endtable();
        
        print '      </div>'.$LINEBREAK;
        print '    </td>'.$LINEBREAK;
        print '  </tr>'.$LINEBREAK;
        
        $loopCounter++;
    }
    
    endtable();
    
    $help_select = '&nbsp;' . cpg_display_help('f=admin-tools.htm&amp;as=admin_tools_usage&amp;ae=admin_tools_usage_end&amp;top=1', '600', '400');

    starttable('100%', $lang_common['select_album'] . $help_select);

    echo '<tr><td class="tablef"><br />';
    $cpg_udb->util_filloptions();
    echo '<br /></td></tr>';
    endtable();
   
    list($timestamp, $form_token) = getFormToken();	
    echo <<< EOT
	<input type="hidden" name="form_token" value="{$form_token}" />
    <input type="hidden" name="timestamp" value="{$timestamp}" />
	</form>
EOT;
}

function del_titles()
{
    global $CONFIG, $lang_util_php;

    $superCage = Inspekt::makeSuperCage();

    if ($superCage->post->keyExists('albumid')) {
        $albumid = $superCage->post->getInt('albumid');
    } else {
        $albumid = 0;
    }

    $albstr = $albumid ? "WHERE aid = $albumid" : '';

    echo "<h2>{$lang_util_php['delete_wait']}</h2>";

    cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '' $albstr");

    echo $lang_util_php['titles_deleted'] . '<br />';
}

function filename_to_title()
{
    global $CONFIG, $lang_util_php;

    $superCage = Inspekt::makeSuperCage();

    if ($superCage->post->keyExists('albumid')) {
        $albumid = $superCage->post->getInt('albumid');
    } else {
        $albumid = 0;
    }

    // only apply for items with empty titles (Frantz)
    if ($superCage->post->getInt('notitle') == 1) {
        $albstr = $albumid ? " WHERE aid = $albumid AND title = ''" : "WHERE title = ''";
    } else {
        $albstr = $albumid ? " WHERE aid = $albumid " : '';   
    }

    $parsemode = $superCage->post->getInt('parsemode');

    $result = cpg_db_query("SELECT pid, filename FROM {$CONFIG['TABLE_PICTURES']} $albstr");

    echo "<h2>{$lang_util_php['titles_wait']}</h2>";

    $file_count = 0;
    
    while ($row = mysql_fetch_assoc($result)) {

        $filename = $row['filename'];
        $pid = $row['pid'];
        
        // //////////////////////////////////////////
        // ADD YOUR OWN PARSEMODES HERE //
        // /////////////////////////////////////////
        $pattern = "/(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.+)/";

        switch ($parsemode){

        case 0: // REMOVE EXTENSION AND REPLACE _ WITH SPACES
            $newtitle = preg_replace('/\.\w+$/i', '', $filename);
            $newtitle = str_replace(array("%20","_"), " ", $newtitle);
            break;
            
        case 1: // CHANGE 2003_11_23_13_20_20.jpg TO 23/11/2003 13:20
            $newtitle = str_replace("%20", " ", $filename);
            $replacement = "$5/$3/$1 $7:$9";
            $newtitle = preg_replace($pattern, $replacement, $newtitle);
            break;
            
        case 2: // CHANGE 2003_11_23_13_20_20.jpg TO 11/23/2003 13:20
            $newtitle = str_replace("%20", " ", $filename);
            $replacement = "$3/$5/$1 $7:$9";
            $newtitle = preg_replace($pattern, $replacement, $newtitle);
            break;
            
        case 3: // CHANGE 2003_11_23_13_20_20.jpg TO 13:20
            $newtitle = str_replace("%20", " ", $filename);
            $replacement = "$7:$9";
            $newtitle = preg_replace($pattern, $replacement, $newtitle);
            break;
            
        } // end switch

        cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '" . addslashes($newtitle). "' WHERE pid = $pid");

        $file_count++;
        
        echo "{$lang_util_php['file']} : <strong>$filename</strong> {$lang_util_php['title_set_to']} : <strong>$newtitle</strong><br />" . $LINEBREAK;

    } // end while
    
    echo '<br />' . $LINEBREAK . sprintf($lang_util_php['titles_updated'], $file_count) . '<br />' . $LINEBREAK;
}

function update_thumbs()
{
    global $CONFIG, $lang_util_php, $icon_array;

    $superCage = Inspekt::makeSuperCage();

    if ($superCage->post->keyExists('albumid')) {
        $albumid = $superCage->post->getInt('albumid');
    } elseif ($superCage->get->keyExists('albumid')) {
        $albumid = $superCage->get->getInt('albumid');
    } else {
        $albumid = 0;
    }

    $albstr = $albumid ? "WHERE aid = $albumid" : '';

    if ($superCage->post->keyExists('autorefresh')) {
        $autorefresh = $superCage->post->getInt('autorefresh');
    } elseif ($superCage->get->keyExists('autorefresh')) {
        $autorefresh = $superCage->get->getInt('autorefresh');
    }

    if ($superCage->post->keyExists('updatetype')) {
        $updatetype = $superCage->post->getInt('updatetype');
    } elseif ($superCage->get->keyExists('updatetype')) {
        $updatetype = $superCage->get->getInt('updatetype');
    }

    if ($superCage->post->keyExists('numpics')) {
        $numpics = $superCage->post->getInt('numpics');
    } elseif ($superCage->get->keyExists('numpics')) {
        $numpics = $superCage->get->getInt('numpics');
    }

    if ($superCage->post->keyExists('startpic')) {
        $startpic = $superCage->post->getInt('startpic');
    } elseif ($superCage->get->keyExists('startpic')) {
        $startpic = $superCage->get->getInt('startpic');
    } else {
        $startpic = 0;
    }

    print '<a name="admin_tool_thumb_update"></a>';

    starttable('100%', $icon_array['util'] . $lang_util_php['thumbs_wait']);

    $result = cpg_db_query("SELECT pid, filepath, filename FROM {$CONFIG['TABLE_PICTURES']} $albstr LIMIT $startpic, $numpics");
    $count = mysql_num_rows($result);
    $loopCounter = 0;

    while ($row = mysql_fetch_assoc($result)) {
    
        if (is_image($row['filename'])) { // the file is an image --- end
 
            $loopCounter++;
            
            if ($loopCounter / 2 == floor($loopCounter / 2)) {
                $tablestyle = 'tableb tableb_alternate';
            } else {
                $tablestyle = 'tableb';
            }
            
            $image = $CONFIG['fullpath'] . $row['filepath'] . $row['filename'];
            $normal = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['normal_pfx'] . $row['filename'];
            $thumb = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['thumb_pfx'] . $row['filename'];
            $orig = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['orig_pfx'] . $row['filename'];

            if (file_exists($orig)) {
                $work_image = $orig;
                $orig_true = true;
            } else {
                $work_image = $image;
                $orig_true = false;
            }

            $imagesize = cpg_getimagesize($work_image);
            
            if ($updatetype == 0 || $updatetype == 2 || $updatetype == 5) {
                if (resize_image($work_image, $thumb, $CONFIG['thumb_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use'], "false", 1)) {
                    echo '<tr><td class="'.$tablestyle.'">' . $icon_array['ok'] . '<tt>' . $thumb .'</tt> '. $lang_util_php['updated_successfully'] . '</td></tr>';
                } else {
                    echo '<tr><td class="'.$tablestyle.'">' . $icon_array['stop'] . $lang_util_php['error_create'] . ': <tt>' . $thumb.'</tt></td></tr>';
                }
            }

            if ($updatetype == 1 || $updatetype == 2 || $updatetype == 3 || $updatetype == 5) {
                ($CONFIG['enable_watermark'] == '1' && $CONFIG['which_files_to_watermark'] == 'both' || $CONFIG['which_files_to_watermark'] == 'resized') ? $watermark = "true" : $watermark = "false";
                if (max($imagesize[0], $imagesize[1]) > $CONFIG['picture_width'] && $CONFIG['make_intermediate']) {
                    if (resize_image($work_image, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use'], $watermark)) {
                        echo '<tr><td class="'.$tablestyle.'">' . $icon_array['ok'] . '<tt>' . $normal . "</tt> " . $lang_util_php['updated_successfully'] . '!</td></tr>';
                    } else {
                        echo '<tr><td class="'.$tablestyle.'">' . $icon_array['stop'] . $lang_util_php['error_create'] . ': <tt>' . $normal . '</tt></td></tr>';
                    }
                }
            }

            if ($updatetype == 3 || $updatetype == 4 || $updatetype == 5) {
                ($CONFIG['thumb_use'] == "ex") ? $resize_method = "any" : $resize_method = $CONFIG['thumb_use'];

                if (((USER_IS_ADMIN && $CONFIG['auto_resize'] == 1) || (!USER_IS_ADMIN && $CONFIG['auto_resize'] > 0)) && max($imagesize[0], $imagesize[1]) > $CONFIG['max_upl_width_height']) {
                    $max_size_size = $CONFIG['max_upl_width_height'];
                } else {
                    $resize_method = "orig";
                    $max_size_size = max($imagesize[0], $imagesize[1]);
                }

                if ($orig_true == false) {
                    if (copy($image, $orig)) {
                        if ($CONFIG['enable_watermark'] == '1' && $CONFIG['which_files_to_watermark'] == 'both' || $CONFIG['which_files_to_watermark'] == 'original') {
                            if (resize_image($work_image, $image, $max_size_size, $CONFIG['thumb_method'], $resize_method, 'true')) {
                                echo '<tr><td class="'.$tablestyle.'">' . $icon_array['ok'] . '<tt>' . $image . "</tt> " . $lang_util_php['updated_successfully'] . '!' . '</td></tr>';
                            } else {
                                echo '<tr><td class="'.$tablestyle.'">' . $icon_array['stop'] . $lang_util_php['error_create'] . ': <tt>' . $image . '</tt></td></tr>';
                            }
                        }
                    }
                } else {
                    if ($CONFIG['enable_watermark'] == '1' && $CONFIG['which_files_to_watermark'] == 'both' || $CONFIG['which_files_to_watermark'] == 'original') {
                        if (resize_image($work_image, $image, $max_size_size, $CONFIG['thumb_method'], $resize_method, 'true')) {
                            echo '<tr><td class="'.$tablestyle.'">' . $icon_array['ok'] . '<tt>' . $image . "</tt> " . $lang_util_php['updated_successfully'] . '!' . '</td></tr>';
                        } else {
                            echo '<tr><td class="'.$tablestyle.'">' . $icon_array['stop'] . $lang_util_php['error_create'] . ': <tt>' . $image . '</tt></td></tr>';
                        }
                    } else {
                        if (((USER_IS_ADMIN && $CONFIG['auto_resize'] == 1) || (!USER_IS_ADMIN && $CONFIG['auto_resize'] > 0)) && max($imagesize[0], $imagesize[1]) > $CONFIG['max_upl_width_height']) {
                            if (resize_image($work_image, $image, $max_size_size, $CONFIG['thumb_method'], $resize_method, 'false')) {
                                echo '<tr><td class="'.$tablestyle.'">' . $icon_array['ok'] . '<tt>' . $image . "</tt> " . $lang_util_php['updated_successfully'] . '!' . '</td></tr>';
                            } else {
                                echo '<tr><td class="'.$tablestyle.'">' . $icon_array['stop'] . $lang_util_php['error_create'] . ': <tt>' . $image . '</tt></td></tr>';
                            }
                        } elseif (copy($orig, $image)) {
                            echo '<tr><td class="'.$tablestyle.'">' . $icon_array['ok'] . '<tt>' . $orig . "</tt> " . $lang_util_php['updated_successfully'] . '!' . '</td></tr>';
                        } else {
                            echo '<tr><td class="'.$tablestyle.'">' . $icon_array['stop'] . $lang_util_php['error_create'] . ': <tt>' . $image . '</tt></td></tr>';
                        }
                    }
                }
            }

            $imagesize = cpg_getimagesize($image);

            $query_up = "UPDATE {$CONFIG['TABLE_PICTURES']} SET pwidth = '{$imagesize[0]}', pheight = '{$imagesize[1]}' WHERE pid = {$row['pid']}";
            cpg_db_query($query_up);

        } else { // the file is an image --- end
            echo '<tr><td class="'.$tablestyle.'">' . $icon_array['cancel'] . sprintf($lang_util_php['no_image'], '<tt>' . $row['filepath'] . $row['filename'] . '</tt>') . '</td></tr>';
        }
    }

    if ($count == $numpics) {

        $startpic += $numpics;
        
        list($timestamp, $form_token) = getFormToken();
        
        if ($autorefresh) {
            echo <<< EOT
            <meta http-equiv="refresh" content="1; URL=util.php?numpics={$numpics}&startpic={$startpic}&albumid={$albumid}&autorefresh={$autorefresh}&action=update_thumbs&updatetype={$updatetype}&form_token={$form_token}&timestamp={$timestamp}#admin_tool_thumb_update">
EOT;
        } else {
            	
            print <<< EOT
            <tr>
                <td class="tablef">
                    <form action="util.php#admin_tool_thumb_update" method="post">
                        <input type="hidden" name="action" value="update_thumbs" />
                        <input type="hidden" name="numpics" value="{$numpics}" />
                        <input type="hidden" name="startpic" value="{$startpic}" />
                        <input type="hidden" name="updatetype" value="{$updatetype}" />
                        <input type="hidden" name="albumid" value="{$albumid}" />
                        <input type="hidden" name="autorefresh" value="{$autorefresh}" />
                        <button type="submit" class="button" name="submit" id="submit" value="{$lang_util_php['continue']}">{$lang_util_php['continue']} {$icon_array['continue']}</button>
                    	<input type="hidden" name="form_token" value="{$form_token}" />
                    	<input type="hidden" name="timestamp" value="{$timestamp}" />
                    </form>
                </td>
            </tr>
EOT;
        }
    } else {
        echo '<tr><td class="tablef">' . $lang_util_php['finished'] . '</td></tr>';
    }
    endtable();
}

function deletebackup_img()
{
    global $CONFIG, $lang_util_php;
    
    $superCage = Inspekt::makeSuperCage();
    
    if ($superCage->post->keyExists('albumid')) {
        $albumid = $superCage->post->getInt('albumid');
    } else {
        $albumid = 0;
    }

    $albstr = $albumid ? "WHERE aid = $albumid" : '';

    $result = cpg_db_query("SELECT filepath, filename FROM {$CONFIG['TABLE_PICTURES']} $albstr");

    while ( ($row = mysql_fetch_assoc($result)) ) {
    
        $back = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['orig_pfx'] . $row['filename'];

        if (file_exists($back)) {
            if (unlink($back)) {
                printf($lang_util_php['del_orig'], $back);
            } else {
                printf($lang_util_php['del_error'], $back);
            }
        } else {
            printf($lang_util_php['error_not_found'], $back);
        }
        
        echo '<br />';
    }

    mysql_free_result($result);
}

function del_orig()
{
    global $CONFIG, $lang_util_php;

    $superCage = Inspekt::makeSuperCage();
 
    if ($superCage->post->keyExists('albumid')) {
        $albumid = $superCage->post->getInt('albumid');
    } else {
        $albumid = 0;
    }
 
    $albstr = $albumid ? "WHERE aid = $albumid" : '';

    echo "<h2>{$lang_util_php['replace_wait']}</h2>";

    $result = cpg_db_query("SELECT pid, filepath, filename FROM {$CONFIG['TABLE_PICTURES']} $albstr");
 
    while ($row = mysql_fetch_assoc($result)) {

        $pid = $row['pid'];
        $image = $CONFIG['fullpath'] . $row['filepath'] . $row['filename'];
        $normal = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['normal_pfx'] . $row['filename'];
        $thumb = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['thumb_pfx'] . $row['filename'];

        if (file_exists($normal)) {
        
            $deleted = unlink($image);
            $renamed = rename($normal, $image);
            
            if ($deleted && $renamed) {
            
                $imagesize = cpg_getimagesize($image); // dimensions
                $image_filesize = filesize($image); // bytes
                $total_filesize = $image_filesize + filesize($thumb);
                        
                cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize = '$image_filesize', total_filesize = '$total_filesize', pwidth = '{$imagesize[0]}', pheight = '{$imagesize[1]}' WHERE pid = $pid");

                printf($lang_util_php['main_success'], $normal);
                
            } elseif (!$renamed) {
                printf($lang_util_php['error_rename'], $normal, $image);
            } else {
                printf($lang_util_php['error_deleting'], $image);
            }
            
        } else {
            printf($lang_util_php['error_not_found'], $normal);
        }
        
        echo '<br />';
    }

    mysql_free_result($result);
}

function del_norm()
{
    global $CONFIG, $lang_util_php;

    $superCage = Inspekt::makeSuperCage();

    if ($superCage->post->keyExists('albumid')) {
        $albumid = $superCage->post->getInt('albumid');
    } else {
        $albumid = 0;
    }

    $albstr = ($albumid) ? "WHERE aid = $albumid" : '';

    echo "<h2>{$lang_util_php['deleting_intermediates']}</h2>";

    $result = cpg_db_query("SELECT pid, filepath, filename FROM {$CONFIG['TABLE_PICTURES']} $albstr");

    while ($row = mysql_fetch_assoc($result)) {

        $pid = $row['pid'];
        $image = $CONFIG['fullpath'] . $row['filepath'] . $row['filename'];
        $normal = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['normal_pfx'] . $row['filename'];
        $thumb = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['thumb_pfx'] . $row['filename'];

        if (file_exists($normal)) {
        
            if (unlink($normal)) {
            
                $total_filesize = filesize($image) + filesize($thumb);
                
                cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = '$total_filesize' WHERE pid = $pid");

                printf($lang_util_php['del_intermediate'], $normal);
            } else {
                printf($lang_util_php['del_error'], $normal);
            }
        } else {
            printf($lang_util_php['error_not_found'], $normal);
        }
        
        echo '<br />';
    }
    
    mysql_free_result($result);
}

function del_orphans()
{
    global $CONFIG, $lang_util_php, $lang_common, $icon_array;

    $superCage = Inspekt::makeSuperCage();

    $count = 0;

    echo "<h2>{$lang_util_php['searching_orphans']}</h2>";

    if ($superCage->get->keyExists('single')) {
        $single = $superCage->get->getInt('single');
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = $single");
    }

    $result = cpg_db_query("SELECT c.pid, msg_id, msg_body FROM {$CONFIG['TABLE_COMMENTS']} AS c LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.pid = c.pid WHERE p.pid IS NULL");

    while ($row = mysql_fetch_assoc($result)) {
    
        $pid = $row['pid'];
        $msg_id = $row['msg_id'];
        $msg_body = $row['msg_body'];

        if ($superCage->post->keyExists('del')) {
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = $msg_id");
        } else {
            echo "{$lang_util_php['comment']} $msg_body {$lang_util_php['nonexist']} $pid - <a href=\"util.php?action=del_orphans&amp;single=$msg_id\">{$lang_common['delete']}</a><br />";
        }
    }
    
    if (!$superCage->post->keyExists('del')) {
    
        $count = mysql_num_rows($result);
        
        echo "<br /><br />$count {$lang_util_php['orphan_comment']}<br /><br />";
        
        list($timestamp, $form_token) = getFormToken();
        if ($count > 1) {
            echo <<< EOT
                <form name="cpgform3" id="cpgform3" action="util.php" method="post">
                        <input type="hidden" name="action" value="del_orphans" />
                        <input type="hidden" name="del" value="all" />
                        {$lang_util_php['delete_all_orphans']}
                        <button type="submit" class="button" name="submit" id="submit" value="{$lang_util_php['delete_all']}">{$lang_util_php['delete_all']} {$icon_array['delete_all']}</button>
                		<input type="hidden" name="form_token" value="{$form_token}" />
                		<input type="hidden" name="timestamp" value="{$timestamp}" />
                </form>
EOT;
        }
    }
    
    mysql_free_result($result);
}

function del_old()
{
    global $CONFIG, $lang_util_php;
    
    $superCage = Inspekt::makeSuperCage();

    $days = $superCage->post->getInt('day_number');
    
    $start = time() - ($days * 60 * 60 * 24);

    $delete_counter = 0;

    if ($superCage->post->keyExists('albumid')) {
        $albumid = $superCage->post->getInt('albumid');
    } else {
        $albumid = 0;
    }

    $albstr = $albumid ? "AND aid = $albumid" : '';

    echo "<h2>{$lang_util_php['deleting_old']}</h2>";

    $result = cpg_db_query("SELECT pid, filepath, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE ctime <= $start $albstr");
 
    while ($row = mysql_fetch_assoc($result)) {
    
        $pid = $row['pid'];
        $image = $CONFIG['fullpath'] . $row['filepath'] . $row['filename'];
        $normal = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['normal_pfx'] . $row['filename'];
        $thumb = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['thumb_pfx'] . $row['filename'];
  
        if (file_exists($normal)) {

            if (unlink($normal)) {
                printf($lang_util_php['del_intermediate'], $normal);
            } else {
                printf($lang_util_php['del_error'], $normal);
            }
  
        } else {
            printf($lang_util_php['error_not_found'], $normal);
        }
        
        echo '<br />';
        
        if (file_exists($image)) {

            if (unlink($image)) {
                printf($lang_util_php['del_orig'], $image);
            } else {
                printf($lang_util_php['del_error'], $image);
            }
  
        } else {
            printf($lang_util_php['error_not_found'], $image);
        }
        
        echo '<br />';
        
        if (file_exists($thumb)) {

            if (unlink($thumb)) {
                printf($lang_util_php['del_thumb'], $thumb);
            } else {
                printf($lang_util_php['del_error'], $thumb);
            }
  
        } else {
            printf($lang_util_php['error_not_found'], '&laquo;'.$thumb.'&raquo;');
        }
      
        echo '<br />';
      
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = $pid");
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid = $pid");
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE pid = $pid");

        $delete_counter++;
    }
    
    mysql_free_result($result);
    
    printf($lang_util_php['affected_records'], $delete_counter);
}

function reset_views()
{
    global $CONFIG, $lang_util_php;

    $superCage = Inspekt::makeSuperCage();

    if ($superCage->post->keyExists('albumid')) {
        $albumid = $superCage->post->getInt('albumid');
    } else {
        $albumid = 0;
    }
    
    $albstr = $albumid ? "WHERE aid = $albumid" : '';

    cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET hits = 0 $albstr");
    
    echo $lang_util_php['reset_success'];
}

function refresh_db()
{
    global $CONFIG, $lang_util_php, $lang_common;

    $superCage = Inspekt::makeSuperCage();

    if ($superCage->post->keyExists('albumid')) {
        $albumid = $superCage->post->getInt('albumid');
    } else {
        $albumid = 0;
    }

    $albstr = ($albumid) ? "WHERE aid = $albumid" : '';

    $numpics = $superCage->post->getInt('refresh_numpics');

    if ($superCage->post->keyExists('refresh_startpic')) {
        $startpic = $superCage->post->getInt('refresh_startpic');
    } else {
        $startpic = 0;
    }

    starttable('100%', $lang_util_php['update_result'], 3);

    echo "<tr><th class=\"tableh2\">{$lang_util_php['file']}</th><th class=\"tableh2\">{$lang_util_php['problem']}</th><th class=\"tableh2\">{$lang_util_php['status']}</th></tr>";

    $outcome = 'none';
    
    $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr ORDER BY pid ASC LIMIT $startpic, $numpics");
    $count = mysql_num_rows($result);
    $found = 0;

    while ($row = mysql_fetch_assoc($result)) {

        extract($row, EXTR_PREFIX_ALL, "db");
        unset($prob);

        $full_pic_url = $CONFIG['fullpath'] . $db_filepath . $db_filename;
        $thumb_url = $CONFIG['fullpath'] . $db_filepath . $CONFIG['thumb_pfx'] . $db_filename;
        $normal_url = $CONFIG['fullpath'] . $db_filepath . $CONFIG['normal_pfx'] . $db_filename;
        $url = '<a href="' . $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') ."displayimage.php?pos=-$db_pid" . '" target="_blank">' . "$db_title ($db_pid)" . '</a>';

        if (file_exists($full_pic_url)) {

            $filesize = filesize($full_pic_url);
            $dimensions = cpg_getimagesize($full_pic_url);

            if ($filesize) {

                $thumb_filesize = filesize($thumb_url);
                $normal_filesize = filesize($normal_url);
                $total_filesize = $filesize + $thumb_filesize + $normal_filesize;

                if ($total_filesize <> $db_total_filesize) {

                    $prob .= "{$lang_util_php['incorrect_filesize']}<br />{$lang_util_php['database']}{$db_total_filesize}{$lang_util_php['bytes']}<br />{$lang_util_php['actual']}{$total_filesize}{$lang_util_php['bytes']}<br />";
                    cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = '$total_filesize' WHERE pid = '$db_pid' LIMIT 1");
                    $outcome = $lang_util_php['updated'];
                }

                if ($filesize <> $db_filesize) {

                    $prob .= "{$lang_util_php['incorrect_filesize']}<br />{$lang_util_php['database']}{$db_filesize}{$lang_util_php['bytes']}<br />{$lang_util_php['actual']}{$filesize}{$lang_util_php['bytes']}<br />";
                    cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize = '$filesize' WHERE pid = '$db_pid' LIMIT 1");
                    $outcome = $lang_util_php['updated'];
                }
                
            } else {
                    $prob .= $lang_util_php['filesize_error'] . '<br />';
                    $outcome = $lang_util_php['skipped'];
            }

            if ($dimensions) {
            
                if ($dimensions[0] <> $db_pwidth || $dimensions[1] <> $db_pheight) {

                    $prob .= "{$lang_util_php['incorect_dimension']}<br />{$lang_util_php['database']}{$db_pwidth}x{$db_pheight}<br />{$lang_util_php['actual']}{$dimensions[0]}x{$dimensions[1]}<br />";
                    cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET pwidth = '{$dimensions[0]}', pheight = '{$dimensions[1]}' WHERE pid = '$db_pid' LIMIT 1");
                    $outcome = $lang_util_php['updated'];
                }
                
            } else {
                $prob .= $lang_util_php['dimension_error'] . '<br />';
                $outcome = $lang_util_php['skipped'];
            }
            
        } else {
            $prob .= sprintf($lang_util_php['fullpic_error'], $full_pic_url) . '<br />';
            $outcome = $lang_util_php['cannot_fix'];
        }

        if ($prob) {
            echo "<tr><td class=\"tableb\">$url</td><td class=\"tableb\">$prob</td><td class=\"tableb\">$outcome</td></tr>";
        } else {
            echo "<tr><td class=\"tableb\">$url</td><td class=\"tableb\">{$lang_util_php['no_prob_detect']}</td><td class=\"tableb\">{$lang_common['ok']}</td></tr>";
        }
    }

    endtable();

    if ($outcome == 'none') {
        echo $lang_util_php['no_prob_found'];
    }
    
    if ($count == $numpics) {
    
        $startpic += $numpics;
        
        list($timestamp, $form_token) = getFormToken();
        echo <<< EOT
                    <form name="cpgform4" id="cpgform4" action="util.php" method="post">
                            <input type="hidden" name="action" value="refresh_db" />
                            <input type="hidden" name="refresh_numpics" value="$numpics" />
                            <input type="hidden" name="refresh_startpic" value="$startpic" />
                            <input type="hidden" name="albumid" value="$albumid" />
                            <button type="submit" class="button" name="submit" id="submit" value="{$lang_util_php['continue']}">{$lang_util_php['continue']} {$icon_array['continue']}</button>
                            <input type="hidden" name="form_token" value="{$form_token}" />
                            <input type="hidden" name="timestamp" value="{$timestamp}" />
                    </form>
EOT;
    }
    
    mysql_free_result($result);
}


function keyword_convert()
{
    global $CONFIG, $lang_common, $lang_util_php, $icon_array;

    $superCage = Inspekt::makeSuperCage();
    $set_config    = $superCage->post->keyExists('keyword_set') ? $superCage->post->getInt('keyword_set') : 0;
    $replace_from  = $superCage->post->keyExists('keyword_from') ? html_entity_decode($superCage->post->getEscaped('keyword_from')) : '';
    $replace_to    = $superCage->post->keyExists('keyword_to') ? html_entity_decode($superCage->post->getEscaped('keyword_to')) : '';
    $replace1      = $superCage->post->keyExists('keyword_replace1') ? $superCage->post->getInt('keyword_replace1') : 0;
    $replace1_from = $superCage->post->keyExists('keyword_replace1_from') ? html_entity_decode($superCage->post->getEscaped('keyword_replace1_from')) : '';
    $replace1_to   = $superCage->post->keyExists('keyword_replace1_to') ? html_entity_decode($superCage->post->getEscaped('keyword_replace1_to')) : '';
    $replace2      = $superCage->post->keyExists('keyword_replace2') ? $superCage->post->getInt('keyword_replace2') : 0;
    $replace2_from = $superCage->post->keyExists('keyword_replace2_from') ? html_entity_decode($superCage->post->getEscaped('keyword_replace2_from')) : '';
    $replace2_to   = $superCage->post->keyExists('keyword_replace2_to') ? html_entity_decode($superCage->post->getEscaped('keyword_replace2_to')) : '';

    starttable('100%', $icon_array['info'] . ' ' . $lang_util_php['keyword_convert'], 1);
    echo '    <tr><td><br />' . $LINEBREAK;
    $replace_options = array_merge($lang_common['keyword_separators'],$lang_util_php['keyword_replace_values']);
    if ($replace1 && strlen($replace1_from) && strlen($replace1_to) && ($replace1_from != $replace1_to)) {
        $sql = "UPDATE `{$CONFIG['TABLE_PICTURES']}` SET keywords = REPLACE(keywords, '$replace1_from', '$replace1_to')";
        cpg_db_query($sql);
        echo '        '
            . sprintf($lang_util_php['keyword_replace_before'],
                '<strong>' . $replace_options[$replace1_from] . '</strong>',
                '<strong>' . $replace_options[$replace1_to] . '</strong>')
            . ': ' . $lang_common['done'] . '<br /><br />' . $LINEBREAK;
    }
    if (strlen($replace_from) && strlen($replace_to) && ($replace_from != $replace_to)) {
        $sql = "UPDATE `{$CONFIG['TABLE_PICTURES']}` SET keywords = REPLACE(keywords, '$replace_from', '$replace_to')";
        cpg_db_query($sql);
        echo '        '
            . sprintf($lang_util_php['keyword_from_to'],
                '<strong>' . $replace_options[$replace_from] . '</strong>',
                '<strong>' . $replace_options[$replace_to] . '</strong>')
            . ': ' . $lang_common['done'] . '<br /><br />' . $LINEBREAK;
    }
    if ($replace2 && strlen($replace2_from) && strlen($replace2_to) && ($replace2_from != $replace2_to)) {
        $sql = "UPDATE `{$CONFIG['TABLE_PICTURES']}` SET keywords = REPLACE(keywords, '$replace2_from', '$replace2_to')";
        cpg_db_query($sql);
        echo '        '
            . sprintf($lang_util_php['keyword_replace_after'],
                '<strong>' . $replace_options[$replace2_from] . '</strong>',
                '<strong>' . $replace_options[$replace2_to] . '</strong>')
            . ': ' . $lang_common['done'] . '<br /><br />' . $LINEBREAK;
    }
    if ($set_config) {
        cpg_config_set('keyword_separator', $replace_to);
        echo "{$lang_util_php['keyword_set']} (<strong>" 
            . $lang_common['keyword_separators'][$replace_to]
            . '</strong>): ' . $lang_common['done'] . '<br /><br />' . $LINEBREAK;
    }

    echo "    </td></tr>";
    endtable();
}

pagefooter();

?>