<?php
/**************************
  Coppermine Photo Gallery
 **************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

 ************************************
  Coppermine version: 1.6.03
  $HeadURL$
 ************************************/

// Confirm we are in Coppermine and set the language blocks.
define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);
define('DB_INPUT_PHP', true);
define('ADMIN_PHP', true);

// Call basic functions, etc.
require('include/init.inc.php');
require('include/picmgmt.inc.php');

// Check to see if user can upload pictures.  Quit with an error if user cannot.
if (!USER_CAN_UPLOAD_PICTURES && !USER_CAN_CREATE_ALBUMS) {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

// Globalize $CONFIG
global $CONFIG, $USER, $lang_upload_php, $upload_form, $max_file_size;

// Set up an array of choices for the upload method
$upload_choices = array(
//    'swfupload'   => $lang_upload_php['upload_swf'],
//    'html_single' => $lang_upload_php['upload_single'],
);
// Filter upload choices to allow plugins to add upload methods
$upload_choices = CPGPluginAPI::filter('upload_options', $upload_choices);

// Complain if there is no upload method
if (!$upload_choices) {
    cpg_die(ERROR, $lang_upload_php['err_no_method'], __FILE__, __LINE__);
}

// Default upload method set by the gallery administrator
$upload_form = $CONFIG['upload_mechanism'];

// Populate Icon array
$icon_array = array();
$icon_array['continue'] = cpg_fetch_icon('right', 2);
$icon_array['ok'] = cpg_fetch_icon('ok', 0);
$icon_array['cancel'] = cpg_fetch_icon('cancel', 2);
$icon_array['upload'] = cpg_fetch_icon('upload', 2);
$icon_array['info'] = cpg_fetch_icon('info', 2);

if ($superCage->get->keyExists('html5')) {
    $upload_form = 'upload_h5a';
} elseif ($superCage->get->keyExists('single')) {
	// If we have "single" key in GET then we will force the upload form mechanism to single file upload
	// This acts as a fallback if js or flash is disabled
    $upload_form = 'upload_sgl';
} elseif ($CONFIG['allow_user_upload_choice'] && $superCage->get->keyExists('method')) {
    // pull in upload method from GET parameter 'method'
    $matches = $superCage->get->getMatched('method','/^[0-9A-Za-z_]+$/');
    $upload_form = $matches[0];
    $USER['upload_method'] = $upload_form;
} elseif ($superCage->post->keyExists('method')) {
    // pull in upload method from POST parameter 'method'
    $matches = $superCage->post->getMatched('method','/^[0-9A-Za-z_]+$/');
    $upload_form = $matches[0];
} elseif ($CONFIG['allow_user_upload_choice'] && isset($USER['upload_method'])) {
    $upload_form = $USER['upload_method'];
}

// Confirm that upload method chosen is one of the available choices
if (!in_array($upload_form, array_keys($upload_choices))) {
    // Try gallery default upload method
    $upload_form = $CONFIG['upload_mechanism'];
    if (!in_array($upload_form, array_keys($upload_choices))) {
        $upload_form = 'upload_h5a';
    }
    unset($USER['upload_method']);
}

js_include('js/upload.js');

//___________________________________Function Block_______________________________________

// The text box form input function. Takes the text label for the box, the input name, the maximum length for text boxes,
// and the number of iterations.
function text_box_input($text, $name, $max_length, $iterations, $default='')
{

    global $CONFIG, $LINEBREAK;

    $ordinal = '';

    if (($text == '') and ($iterations == '')) {
        echo '        <input type="hidden" name="' . $name . '" value="' . $default . '" />' . $LINEBREAK;
        return;
    }

    // Begin loop
    for ($counter=0; $counter<$iterations; $counter++) {

    // Create a numbering system when necessary.
    if ($text == '') {
        $cardinal = $counter + 1;
        $ordinal = "".$cardinal.". ";
    }

    // Create a text box.
    echo <<<EOT
        <tr>
            <td width="40%" class="tableb">
                        $text  $ordinal
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="$name" maxlength="$max_length" value="$default" class="textinput" id="$name" />
                </td>
        </tr>

EOT;
    }
}

// The file input function. Takes the label, field name, and number of iterations as arguments.
function file_input($text, $name, $iterations)
{

    $ordinal = '';

    // Begin loop
    for ($counter=0; $counter<$iterations; $counter++) {

    // Create a numbering system when necessary.
    if ($text == '') {
        $cardinal = $counter + 1;
        $ordinal = "".$cardinal.". ";
    }

    // Create the file input box.
    echo <<<EOT
        <tr>
            <td class="tableb">
                        $text  $ordinal
        </td>
        <td class="tableb" valign="top">
                        <input type="file" name="$name" size="40" class="listbox" />
                </td>
        </tr>

EOT;
    }
}

// The function for text areas on forms. Takes the label, field name, and maximum length as arguments.
function text_area_input($text, $name, $max_length,$default='')
{

    // Create the text area.
    echo <<<EOT
        <tr>
                <td class="tableb" valign="top">
                        $text
                </td>
                <td class="tableb" valign="top">
                        <textarea name="$name" rows="5" cols="40" class="textinput" style="width: 100%;" onKeyDown="textCounter(this, $max_length);" onKeyUp="textCounter(this, $max_length);">$default</textarea>
                </td>
        </tr>
EOT;
}


// The hidden form input function. Takes the hidden input field name and value.
function hidden_input($name, $value)
{
        echo <<<EOT
        <tr>
            <td colspan="2">
                   <input type="hidden" name="$name" value="$value" />
            </td>
        </tr>

EOT;
}


// The form label creation function. Takes a non-array element form $data as its argument.
function form_label($text)
{
    echo <<<EOT
        <tr>
                <td class="tableh2" colspan="2">
                        <strong>$text</strong>
                </td>
        </tr>

EOT;
}


// Creates the album list drop down
function form_alb_list_box($text, $name)
{
    global $lang_common;

    $superCage = Inspekt::makeSuperCage();

    if ($superCage->get->keyExists('album')) {
        $sel_album = $superCage->get->getInt('album');
    } elseif ($superCage->post->keyExists('album')) {
        $sel_album = $superCage->post->getInt('album');
    } else {
        $sel_album = 0;
    }
    $options = album_selection_options($sel_album);
    $only_empty_albums = only_empty_albums_button();

    echo <<<EOT
    <tr>
      <td class="tableb tableb_alternate" width="50">
        {$text}
      </td>
      <td class="tableb tableb_alternate" valign="top">
        <select name="{$name}" class="listbox">
          <option value="">{$lang_common['select_album']}</option>
          {$options}
        </select>
        {$only_empty_albums}
      </td>
    </tr>

EOT;
}


// Creates Javascript verification code and opening form tags
// $path --> path to the form action script
function open_form($path)
{
    global $upload_form;

    $on_submit = '';
    if ('swfupload' == $upload_form) {
        $on_submit = 'onsubmit="cpgUploadToggleProgressBar();"';
    }

    echo <<<EOT
    <script language="javascript" type="text/javascript">
    function textCounter(field, maxlimit) {
            if (field.value.length > maxlimit) // if too long...trim it!
            field.value = field.value.substring(0, maxlimit);
    }
    </script>
    <form name="cpgform" id="cpgform" method="post" action="$path" enctype="multipart/form-data" $on_submit>
EOT;
}


// The close form function creates the submit button and the closing tags.
function close_form($button_value, $progress=0, $icon='ok')
{
    // Pull the language array into the function.
    global $lang_upload_php, $THEME_DIR, $icon_array;

    // Create the submit button and close the form.
    echo <<<EOT
      <tr>
        <td colspan="2" align="center" class="tablef">
          <span id="cpg_progress_bar" style="display:none">
EOT;
    if ($progress == 1) {
        if (defined('THEME_HAS_PROGRESS_GRAPHICS')) {
            $prefix = $THEME_DIR;
        } else {
            $prefix = '';
        }
        echo '            <img src="' . $prefix . 'images/loader.gif" border="0" alt="" title="' . $lang_upload_php['please_wait'] . '" />';
    }
    echo <<<EOT
          </span>
          <span id="cpg_upload_button" style="display:block">
            <button type="submit" value="{$button_value}" class="button">{$icon_array[$icon]}{$button_value}</button>
          </span>
        </td>
      </tr>
EOT;
}


// Function to set the allowed file extensions string as required by swfupload
// This function is currently not being used.
function set_allowed_file_extensions_swf()
{
    global $CONFIG;
    $allowed_types = '';
    $allowed_img_types = explode('/', $CONFIG['allowed_img_types']);
    if (count($allowed_img_types)) {
        $allowed_types = '*.' . implode(';*.', $allowed_img_types) . ';';
    }

    $allowed_mov_types = explode('/', $CONFIG['allowed_mov_types']);
    if (count($allowed_mov_types)) {
        $allowed_types .= '*.' . implode(';*.', $allowed_mov_types) . ';';
    }

    $allowed_snd_types = explode('/', $CONFIG['allowed_snd_types']);
    if (count($allowed_snd_types)) {
        $allowed_types .= '*.' . implode(';*.', $allowed_snd_types) . ';';
    }

    $allowed_doc_types = explode('/', $CONFIG['allowed_doc_types']);
    if (count($allowed_doc_types)) {
        $allowed_types .= '*.' . implode(';*.', $allowed_doc_types) . ';';
    }

    set_js_var('allowed_file_types', $allowed_types);
}


//################################# MAIN CODE BLOCK ##################################################

// Check whether we are getting album id through _GET or _POST
if ($superCage->get->keyExists('album')) {
    $sel_album = $superCage->get->getInt('album');
} elseif ($superCage->post->keyExists('album')) {
    $sel_album = $superCage->post->getInt('album');
} else {
    $sel_album = 0;
}

// Get public and private albums, and set maximum individual file size.

if (GALLERY_ADMIN_MODE) {
    $public_albums = cpg_db_query("SELECT aid, title, cid, name FROM {$CONFIG['TABLE_ALBUMS']} INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT);
    //select albums that don't belong to a category
    $public_albums_no_cat = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0");
} else {
    $public_albums = cpg_db_query("SELECT aid, title, cid, name FROM {$CONFIG['TABLE_ALBUMS']} INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT . " AND ((uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET." OR alb_password != '')) OR (owner=".USER_ID."))");
    //select albums that don't belong to a category
    $public_albums_no_cat = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0 AND ((uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET." OR alb_password != '')) OR (owner=".USER_ID."))");
}


if ($public_albums->numRows()) {
    $public_albums_list = cpg_db_fetch_rowset($public_albums);
} else {
    $public_albums_list = array();
}

//do the same for non-categorized albums
if ($public_albums_no_cat->numRows()) {
    $public_albums_list_no_cat = cpg_db_fetch_rowset($public_albums_no_cat);
} else {
    $public_albums_list_no_cat = array();
}

//merge the 2 album arrays
$public_albums_list = array_merge($public_albums_list, $public_albums_list_no_cat);


if (USER_ID) {
    $user_albums = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' ORDER BY title");
    if ($user_albums->numRows()) {
        $user_albums_list = cpg_db_fetch_rowset($user_albums);
    } else {
        $user_albums_list = array();
    }
} else {
    $user_albums_list = array();
}

if (!count($public_albums_list) && !count($user_albums_list)) {
    // there's no album where the user is allowed to upload to
    if (USER_CAN_CREATE_ALBUMS) {
        cpg_die (ERROR, $lang_upload_php['err_no_alb_uploadables'].'<br />&nbsp;<br /><a href="albmgr.php" title="'.$lang_user_admin_menu['albmgr_title'].'" class="admin_menu">'.$lang_user_admin_menu['albmgr_lnk'].'</a>', __FILE__, __LINE__);
    } else {
        cpg_die (ERROR, $lang_upload_php['err_no_alb_uploadables'], __FILE__, __LINE__);
    }
}

// Assign maximum file size for browser controls.
$max_file_size = $CONFIG['max_upl_size'] * 1024;

// If no form inputs to process, create the upload forms using the upload congfiguration.
if (!$superCage->post->keyExists('process') && !$superCage->post->keyExists('plugin_process')) {

    $upload_select = '';
    if ($CONFIG['allow_user_upload_choice']) {
        // allow user to choose upload method
        $upload_select .= '&nbsp;&nbsp;&nbsp;';

        $upload_select .= '<select name="method" id="uploadMethod" class="listbox" title="' . $lang_upload_php['choose_method'] . '">';

        foreach ($upload_choices as $key => $label) {
            $upload_select .= '<option value="' . $key . '"'
                . ($key == $upload_form ? ' selected="selected"' : '')
                . '>' . $label . '</option>';
        }
        $upload_select .= '</select>' . '&nbsp;'
            . cpg_display_help('f=configuration.htm&amp;as=admin_upload_mechanism&amp;ae=admin_upload_mechanism_end', '450', '300');
    }

    // Call active plugins for alternate upload forms
    CPGPluginAPI::action('upload_form',array($upload_form,$upload_select));

    // Do some cleanup in the edit directory.
    spring_cleaning('./'.$CONFIG['fullpath'].'edit',CPG_HOUR);

	if ($USER_DATA['pub_upl_need_approval'] == 1 || $USER_DATA['priv_upl_need_approval'] == 1) {
		echo '<div id="admin_approval" style="display: none;">';
		msg_box($lang_common['information'], $lang_db_input_php['upload_success']);
		echo '</div>';
	}

	$upload_help = cpg_display_help('f=empty.htm&amp;h=lang_upload_php[title]&amp;t=lang_tmp_upload',470,245);

    $upload_table_header = <<<EOT
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td>
                {$icon_array['upload']}{$lang_upload_php['title']} {$upload_help}
            </td>
            <td style="text-align:right">
                <span id="upload_method_selector">
                    {$upload_select}
                </span>
            </td>
        </tr>
    </table>
EOT;

    pagefooter();


// Process a plugin's form submission
} elseif ($superCage->post->keyExists('plugin_process')) {

    // Call active plugins for alternate upload forms
    CPGPluginAPI::action('upload_process',$upload_form);
}

//EOF