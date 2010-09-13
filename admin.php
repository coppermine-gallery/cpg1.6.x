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
define('ADMIN_PHP', true);

require_once('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

// define some vars that need to exist in JS
set_js_var('lang_warning_dont_submit', $lang_admin_php['warning_dont_submit']);
set_js_var('lang_reset_to_default', $lang_admin_php['reset_to_default']);
set_js_var('lang_no_change_needed', $lang_admin_php['no_change_needed']);
set_js_var('display_reset_boxes', $CONFIG['display_reset_boxes_in_config']);


// Include the JS for admin.php
js_include('js/jquery.spinbutton.js');
js_include('js/admin.js');

$admin_data_array  = $CONFIG;
$optionLoopCounter = 0;

$submit_icon  = cpg_fetch_icon('ok', 1);
$factory_icon = cpg_fetch_icon('delete', 1);

require_once('include/admin.inc.php'); // populate the array for the admin data (could later be done using an XML file)

// Filter upload choices to allow plugins to add upload methods
$config_data['user_settings']['upload_mechanism']['options'] = CPGPluginAPI::filter('upload_options', $config_data['user_settings']['upload_mechanism']['options']);

// loop through the config sections and populate the array that determines what sections to expand/collapse
$collapseSections_array = array(); // By default, all sections should be hidden. Let's populate the array first with all existing sections and then later remove the ones that are supposed to be expanded by default
foreach ($config_data as $key => $value) {
    $collapseSections_array[] = $key;
}

$userMessage = ''; //The message that the will be displayed if something went wrong or to tell the user that we had success

$problemFields_array = array(); // we'll add field-wrapper-IDs to this array to visualize that something went wrong. Onload we'll assign the class "important" to the boxes that correspond to the array data

if ($superCage->post->keyExists('restore_config')) { // user has chosen to factory-reset the config --- start
    // first we check if the form token is valid
    if (!checkFormToken()) {
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
	if ($superCage->post->keyExists('really_restore') && $superCage->post->getInt('really_restore') == '1') {
		foreach ($config_data as $section => $values) {
			foreach ($values as $name => $value) {
				if (!empty($value['preserve_when_resetting'])) {
					continue;
				}
				if (isset($value['default_value'])) {               
					cpg_config_set($name, $value['default_value']);
				}
			}
		}
	} else {
		cpg_die(ERROR, $lang_errors['captcha_error'], __FILE__, __LINE__);
	}

    cpgRedirectPage($CPG_PHP_SELF, cpg_fetch_icon('warning', 2) . $lang_common['information'], $lang_admin_php['restore_success']);
}  // user has chosen to factory-reset the config --- end

if ($superCage->post->keyExists('update_config')) {
    // first we check if the form token is valid
    if (!checkFormToken()) {
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
}

foreach ($config_data as $config_section_key => $config_section_value) { // Loop through the config fields to check posted values for validity -- start
    foreach ($config_section_value as $adminDataKey => $adminDataValue) {
        if (isset($adminDataValue['force_config']) && $adminDataValue['force_config']) {
            if (isset($CONFIG[$adminDataKey . '_config'])) {
                $CONFIG[$adminDataKey] = $CONFIG[$adminDataKey . '_config'];
            }
        }
        if ($superCage->post->keyExists('update_config')) {
            $evaluate_value = $superCage->post->getEscaped($adminDataKey);
        } else {
            $evaluate_value = $CONFIG[$adminDataKey];
        }
        // We need to cater for the fact that checkboxes that haven't been ticked are not being submit
        if ($adminDataValue['type'] == 'checkbox' && !$evaluate_value) {
            $evaluate_value = '0';
        }
        if ($adminDataValue['type'] == 'checkbox' && !$CONFIG[$adminDataKey]) {
            $CONFIG[$adminDataKey] = '0';
        }
        // the data for 'select_multiple' is an array. Let's concatenate it into a single value
        if ($adminDataValue['type'] == 'select_multiple') {
            if (is_array($evaluate_value)) {
                $temp = '';
                for ($i = 0; $i <= end($evaluate_value); $i++) {
                    if (in_array($i, $evaluate_value) == TRUE) {
                        $temp .= '1';
                    } else {
                        $temp .= '0';
                    }
                    $temp .= '|';
                }
                unset($evaluate_value);
                $evaluate_value = rtrim($temp, '|');
                unset($temp);
            }
        }
        // regex check
        if ((isset($adminDataValue['regex']) && $adminDataValue['regex'] != '') || (isset($adminDataValue['regex_not']) && $adminDataValue['regex_not'] != '')) {
            if ((isset($adminDataValue['regex']) && $adminDataValue['regex'] != '' && preg_match('#' . $adminDataValue['regex'] . '#i', $evaluate_value) == FALSE) || (isset($adminDataValue['regex_not']) && $adminDataValue['regex_not'] != '' && preg_match('#' . $adminDataValue['regex_not'] . '#i', $evaluate_value) == TRUE)) {
                $userMessage    .= '<li style="list-style-image:url(images/icons/stop.png)">'.sprintf($lang_admin_php['config_setting_invalid'], '<a class="direct_config_link" href="#'.$adminDataKey.'">'.$lang_admin_php[$adminDataKey].'</a>').'</li>'.$LINEBREAK;
                $regexValidation = '0';
            } else { // regex validation successful -- start
                $regexValidation = '1';
            } // regex validation successful -- end
        } else { // no regex settings available - set validation var to successful anyway
            $regexValidation = '1';
        }
        if ( (isset($adminDataValue['min']) || isset($adminDataValue['min']) ) && $regexValidation == '1') { // Only perform the additional validation if the regex is green so far
            if (isset($adminDataValue['min']) && $evaluate_value < $adminDataValue['min'] ) {
                $regexValidation = '0';
            }
            if (isset($adminDataValue['max']) && $evaluate_value > $adminDataValue['max'] ) {
                $regexValidation = '0';
            }
        }
        // If validation failed, set things right
        if ($regexValidation == '0') {
            $admin_data_array[$adminDataKey] = $evaluate_value; // replace the stuff in the form field with the improper input, so the user can see and correct his error
            if (in_array($adminDataKey, $problemFields_array) != TRUE) {
                $problemFields_array[] = $adminDataKey;
            }
            if (in_array($config_section_key, $collapseSections_array) == TRUE) {
                unset($collapseSections_array[array_search($config_section_key, $collapseSections_array)]);
            }
        }

        if ( $superCage->post->keyExists('update_config') && ($regexValidation == '1') && ($evaluate_value != $CONFIG[$adminDataKey]) && ($CONFIG[$adminDataKey] !== stripslashes($evaluate_value)) ) {

            // A space cannot be stored in the config table since the value field is VARCHAR, so %20 is used instead.
            if (($adminDataKey == 'keyword_separator') && ($evaluate_value == ' ')) { 
                $evaluate_value = '%20';
            }
            //  finally, all criteria have been met - let's write the updated data to the database
            cpg_config_set($adminDataKey, $evaluate_value);

            // perform special tasks -- start
            // Code to rename system thumbs in images folder
            $old_thumb_pfx =& $CONFIG['thumb_pfx'];
            $matches       = $superCage->post->getMatched('thumb_pfx', '/^[0-9A-Za-z_-]+$/');
            $thumb_pfx     = $matches[0];

            if ($old_thumb_pfx != $thumb_pfx) {
                $folders = array('images/', $THEME_DIR.'images/');
                foreach ($folders as $folder) {
                    $thumbs = cpg_get_system_thumb_list($folder);
                    foreach ($thumbs as $thumb) {
                        @rename($folder.$thumb['filename'],
                                $folder.str_replace($old_thumb_pfx, $thumb_pfx, $thumb['filename']));
                    }
                }
            }
            // perform special tasks -- end

            // update configuration variables
            $admin_data_array[$adminDataKey] = stripslashes($evaluate_value);
            $CONFIG[$adminDataKey]           = stripslashes($evaluate_value);
            if (isset($adminDataValue['force_config']) && $adminDataValue['force_config']) {
                $admin_data_array[$adminDataKey . '_config'] = stripslashes($evaluate_value);
                $CONFIG[$adminDataKey . '_config'] = stripslashes($evaluate_value);
            }

            $userMessage .= '<li style="list-style-image:url(images/icons/ok.png)">'.sprintf($lang_admin_php['config_setting_ok'], $lang_admin_php[$adminDataKey]).'</li>'.$LINEBREAK;
        }
    } // inner foreach loop -- end
} // Loop through the config fields to check posted values for validity -- end
if ($userMessage != '') {
    $userMessage = '<ul>'.$LINEBREAK.$userMessage.'</ul>'.$LINEBREAK;
}
//print_r($evaluation_array);
if ($superCage->post->keyExists('update_config') > 0 && $userMessage == '') {
    $userMessage = $lang_admin_php['upd_not_needed'];
}

// put the current date into the lang string
$tzinfo = &$config_data['general_settings']['time_offset']['end_description'];
$tzinfo = sprintf($tzinfo, localised_date(-1, $lang_date['comment']));

//pageheader($lang_admin_php['title']);
/*
// section to test new regex stuff - uncomment temporarily if needed
$string = 'http://localhost/foo/';
$regex = '^'
                  .'(http://){1,1}' // leading 'http://' is mandatory - no support for https yet
                  .'(([0-9a-z_!~*\'().&=+$%-]+: ){0,1}' //password, separated with a colon
                  .'[0-9a-z_!~*\'().&=+$%-]+@){0,1}' //username, separated with an @
                  .'(([0-9]{1,3}\.){3}[0-9]{1,3}' // IP- 199.194.52.184
                  .'|' // allows either IP or domain or localhost
                  .'('
                  .'([0-9a-z_!~*\'()-]+\.)*' // tertiary domain(s)- www.
                  .'([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]\.' // second level domain
                  .'[a-z]{2,6}' // first level domain- .com or .museum
                  .')'
                  .'|'
                  .'localhost'
                  .')' // end of domain / IP address
                  .'(:[0-9]{1,4}){0,1}' // port number- :80
                  .'[/]{1,1}' // trailing slash after domain-part of URL
                  .'('
                  .'([0-9a-zA-Z_!~.()-])+/{1}'
                  .'){0,}'
                  .'$';
echo preg_match('#' . $regex . '#i', $string);
echo '<br />';
echo $string;
die;
*/
//introduced admin page to capture all output in a variable
//so the pageheader function can be called later and the required js be added.
$admin_page = '';

if ($userMessage != '') {
    ob_start();
    starttable('100%', cpg_fetch_icon('info', 2) . $lang_common['information'], 1);

    echo <<< EOT
    <tr>
        <td class="tableb">
          {$userMessage}
        </td>
    </tr>
EOT;
    endtable();
    
    $admin_page .= ob_get_contents();
    ob_end_clean();
    
    $admin_page .= '<br />'.$LINEBREAK;
}

$signature = 'Coppermine Photo Gallery ' . COPPERMINE_VERSION . ' ('. COPPERMINE_VERSION_STATUS . ')';

$tabindexCounter      = 1;
$numberOfConfigFields = count($CONFIG);
$javascriptOutput = '';

$admin_page .= '<form action="'.$CPG_PHP_SELF.'" method="post" name="cpgform" id="cpgform" onsubmit="return deleteUnneededFields();">';
ob_start();
starttable('100%', cpg_fetch_icon('config', 2) . $lang_admin_php['title'] . ' - ' . $signature, 2);
$admin_page .= ob_get_contents();
ob_end_clean();
if ($superCage->get->keyExists('restore')) {
	$admin_page .= <<< EOT
    <tr>
        <td class="tableb">
			<div class="cpg_message_validation">
				{$lang_admin_php['restore_cfg_confirm']}
			</div>
        </td>
        <td class="tableb">
			<input type="checkbox" name="really_restore" id="really_restore" value="1" class="checkbox" /><label for="really_restore" class="cliackable_option">{$lang_common['yes']}
        </td>
    </tr>
	<tr>
        <td class="tablef" colspan="2">
			<button type="submit" class="button" name="restore_config" value="{$lang_admin_php['restore_cfg']}">{$factory_icon}{$lang_admin_php['restore_cfg']}</button>
        </td>
    </tr>
EOT;
} else { // "Regular" config page --- start
	$admin_page .= <<< EOT
    <tr>
        <td class="tableh2" colspan="2">
            <button type="button" class="button detail_expand_all" name="expandalltop" id="expandalltop" onclick="return false">
                <img src="images/tree/plus.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['expand_all']}" />
                {$lang_admin_php['expand_all']}
            </button>
            <button type="button" class="button detail_collapse_all" name="collapsealltop" id="collapsealltop" style="display:none;" onclick="return false">
                <img src="images/tree/minus.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['collapse_all']}" />
                {$lang_admin_php['collapse_all']}
            </button>
            <button type="button" class="button detail_toggle_all" name="togglealltop" id="togglealltop" onclick="return false">
                <img src="images/tree/toggle.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['toggle_all']}" />
                {$lang_admin_php['toggle_all']}
            </button>
        </td>
    </tr>
EOT;
	
	//array which holds all info needed to check the default state, will be passed to js
	//we don't use a custom attribute to ensure XHTML valid output
	$js_default_values = array();

	$sectionLoopCounter = 0;
	foreach ($config_data as $config_section_key => $config_section_value) { // start foreach-loop through the config sections
		if ($sectionLoopCounter/2 == floor($sectionLoopCounter/2)) {
			$tableRowStyle = 'tableb';
		} else {
			$tableRowStyle = 'tableb tableb_alternate';
		}
		$admin_page .= <<< EOT
          <tr>
            <td class="{$tableRowStyle}" colspan="2">
                    <span class="detail_head_collapsed">
                        {$lang_admin_php[$config_section_key]}
                    </span>

                <div id="section{$sectionLoopCounter}" class="detail_body">
                    <table align="center" width="100%" cellspacing="1" cellpadding="0" class="maintable" border="0">
EOT;
		$withinSectionLoopCounter = 0;
		foreach ($config_section_value as $key => $value) {
			if (isset($value['force_config']) && $value['force_config']) {
				if (isset($admin_data_array[$key.'_config'])) {
					$admin_data_array[$key] = $admin_data_array[$key.'_config'];
				}
			}
			if ($withinSectionLoopCounter/2 == floor($withinSectionLoopCounter/2)) {
				$cellStyle = 'tableb ';
			} else {
				$cellStyle = 'tableb tableb_alternate ';
			}

			if (isset($value['only_display_if']) && $value['only_display_if'] != $CONFIG[$key]) {  // change the type if a "one-way-setting" is in place
				$value['type'] = 'hidden';
			}
			if (isset($value['only_display_if_not']) && $value['only_display_if_not'] == $CONFIG[$key]) {  // change the type if a "one-way-setting" is in place
				$value['type'] = 'hidden';
			}
			// hide entries labeled as "hidden" completely
			if ($value['type'] == 'hidden') {
				$visibility = ' style="display:none;"';
				$withinSectionLoopCounter++; // increase the counter, as the hidden row should not be taken into account for style alternation
			} else {
				$visibility = '';
			}
			if ($value['type'] == 'checkbox') {
				$labelWrapperStart = '<label for="'.$key.'">';
				$labelWrapperEnd   = '</label>';
			} else {
				$labelWrapperStart = '';
				$labelWrapperEnd   = '';
			}
			if (!empty($value['warning'])) { // set warning text
				$warningText  = $value['warning'];
				$warningPopUp = cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_admin_php[$key]))).'&amp;t='.urlencode(base64_encode(serialize(htmlspecialchars($value['warning'])))), 500, 250, '*');
			} else {
				$warningText  = '';
				$warningPopUp = '';
			}

			if (empty($value['additional_description'])) {
				$value['additional_description'] = '';
			}

			if (empty($value['end_description'])) {
				$value['end_description'] = '';
			}

			$admin_page .= <<< EOT

                <tr{$visibility}>
                  <td class="{$cellStyle}" style="vertical-align:top;" width="50%">
                    <a name="{$key}"></a>
                    {$labelWrapperStart}{$lang_admin_php[$key]} {$value['additional_description']}{$warningPopUp}{$labelWrapperEnd}
                  </td>
                  <td class="{$cellStyle}" style="vertical-align:top;" width="40%">
EOT;
			// grey out the field if not applicable because bridging is enabled
			//if ($value['bridged'] == 'hide') { //
			if ($CONFIG['bridge_enable'] != 0 && !empty($value['bridged']) && $value['bridged'] == 'hide') { //
				$readonly_text    = ' readonly="readonly" title="'.$lang_admin_php['bbs_disabled'].'"';
				$readonly_message = ' '.$lang_admin_php['bbs_disabled'];
				$readonly_radio   = ' disabled="disabled" title="'.$lang_admin_php['bbs_disabled'].'"';
			} else {
				$readonly_text    = '';
				$readonly_message = '';
				$readonly_radio   = '';
			}
			if (!empty($value['width'])) { // set width if option is set in array
				$widthOption = ' style="width:'.$value['width'].'"';
			} else {
				$widthOption = ' style="width:90%"';
			}
			if (!empty($value['size'])) { // set width if option is set in array
				$sizeOption = ' size="'.$value['size'].'"';
			} else {
				$sizeOption = '';
			}
			if (!empty($value['maxlength'])) { // set width if option is set in array
				$maxlengthOption = ' maxlength="'.$value['maxlength'].'"';
			} else {
				$maxlengthOption = '';
			}
			if (in_array($key, $problemFields_array) == TRUE) {
				$highlightFieldCSS = ' important';
			} else {
				$highlightFieldCSS = '';
			}
			if (isset($value['min']) && ($value['min'] != '' || $value['max'] != '')) { // apply class spinbutton if applicable
				$spinbuttonOption = ' spin-button';
				$javascriptOutput .= '  $("#'.$key.'").SpinButton({';
				if ($value['min'] != '') {
					$javascriptOutput .= 'min: '.$value['min'];
					if ($value['max'] != '') {
						$javascriptOutput .= ',';
					}
				}
				if ($value['max'] != '') {
					$javascriptOutput .= 'max: '.$value['max'];
				}
				if (isset($value['step']) && $value['step'] != '') {
					$javascriptOutput .= ', step: '.$value['step'];
				}
				$javascriptOutput .= '});' . $LINEBREAK;
			} else {
				$spinbuttonOption = '';
			}

			// Different types of fields --- start
			if ($value['type'] == 'textfield') { // TEXTFIELD
				$js_default_values['textfield'][] = array('key' => $key, 'warning' => $warningText);
				
				$admin_page .= '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><input type="text" class="textinput'.$spinbuttonOption.'"'.$widthOption.$sizeOption.$maxlengthOption.'  name="'.$key.'" id="'.$key.'" value="'.$admin_data_array[$key].'"'.$readonly_text.' tabindex="'.$tabindexCounter.'" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'" />'.$readonly_message.'</span>';

			} elseif ($value['type'] == 'password') { // PASSWORD
				$js_default_values['password'][] = array('key' => $key, 'warning' => $warningText);
				
				$admin_page .= '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><input type="password" class="textinput" maxlength="255"'.$widthOption.$sizeOption.$maxlengthOption.' name="'.$key.'" id="'.$key.'" value="'.$admin_data_array[$key].'"'.$readonly_text.' tabindex="'.$tabindexCounter.'" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'" />'.$readonly_message.'</span>';

			} elseif ($value['type'] == 'checkbox') { // CHECKBOX
				$js_default_values['checkbox'][] = array('key' => $key, 'warning' => $warningText);
				
				$checked = '';
				if ($admin_data_array[$key] == 1) {
					$checked = ' checked="checked"';
				}
				$admin_page .= '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><input type="checkbox" name="'.$key.'" id="'.$key.'" value="1" class="checkbox"'.$checked.$readonly_radio.' tabindex="'.$tabindexCounter.'" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'" />'.$readonly_message.'</span>';

			} elseif ($value['type'] == 'radio') { //RADIO
				$optionLoopCounter = 0;
				$admin_page .= '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'">'; // wrap the radio-buttons set into a container box
				foreach ($value['options'] as $option) { // loop through the options array
					$js_default_values['radio'][] = array('key' => $key.$optionLoopCounter, 'warning' => $warningText);
					
					$checked = '';
					if ($admin_data_array[$key] == $optionLoopCounter) {
						$checked = ' checked="checked"';
					}
					$admin_page .= '<input type="radio" name="'.$key.'" id="'.$key.$optionLoopCounter.'" value="'.$optionLoopCounter.'" class="radio"'.$checked.$readonly_radio.' tabindex="'.$tabindexCounter.'" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'" /><label for="'.$key.$optionLoopCounter.'" class="clickable_option">'.$option.'</label>&nbsp;';
					if (!empty($value['linebreak'])) {
						$admin_page .= $value['linebreak'];
					}
					$optionLoopCounter++;
					$tabindexCounter++;
				}
				$admin_page .= $readonly_message.'</span>';

			} elseif ($value['type'] == 'hidden') { //HIDDEN
				$admin_page .= '<input type="hidden"  name="'.$key.'" value="'.$admin_data_array[$key].'" />';

			} elseif ($value['type'] == 'select_function') { //SELECT_FUNCTION
				// not implemented (yet)

			} elseif ($value['type'] == 'select_multiple') { //SELECT_MULTIPLE
				$optionLoopCounter  = 0;
				$option_value_array = explode("|", $admin_data_array[$key]);
				if (count($value['options']) > 10) {
					$maxSize = 10;
				} else {
					$maxSize = count($value['options']);
				}
				$admin_page .= '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><select name="'.$key.'[]" id="'.$key.'" class="listbox" size="'.$maxSize.'" '.$readonly_radio.' tabindex="'.$tabindexCounter.'" multiple="multiple" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'">'.$LINEBREAK;
				foreach ($value['options'] as $option_value) { // loop through the options array
					$admin_data_array[$key] = (int)$admin_data_array[$key];
					if (array_key_exists($optionLoopCounter, $option_value_array) && ($option_value_array[$optionLoopCounter] == 1)) {
						$selected = ' selected="selected"';
					} else {
						$selected = '';
					}
					$admin_page .= '                      <option value="'.$optionLoopCounter.'"'.$selected.'>'.ucfirst($option_value);
					$admin_page .= '</option>'.$LINEBREAK;
					$optionLoopCounter++;
				}
				$admin_page .= '</select>'.$readonly_message.'</span><br />'.$LINEBREAK;

			} elseif ($value['type'] == 'select') { //SELECT
				$js_default_values['select'][] = array('key' => $key, 'warning' => $warningText, 'count' => count($value['options']));

				$optionLoopCounter = 0;
				$associativeArray  = array_is_associative($value['options']);
				$admin_page .= '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><select name="'.$key.'" id="'.$key.'" class="listbox" size="1" '.$readonly_radio.' tabindex="'.$tabindexCounter.'" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'">';
				foreach ($value['options'] as $option_key => $option_value) { // loop through the options array
					if ($associativeArray == TRUE) {
						if ($admin_data_array[$key] == $option_key) {
							$selected = ' selected="selected"';
						} else {
							$selected = '';
						}
						$admin_page .= '<option value="'.$option_key.'"'.$selected.'>'.$option_value;
					} else {
						if ($admin_data_array[$key] == $option_value) {
							$selected = ' selected="selected"';
						} else {
							$selected = '';
						}
						$admin_page .= '<option value="'.$option_value.'"'.$selected.'>'.ucfirst($option_value);
					}
					$admin_page .= '</option>';
					$optionLoopCounter++;
				}
				$admin_page .= '</select>'.$readonly_message.'</span>';
			}
			$admin_page .= '&nbsp;'.$value['end_description'];
			// Different types of fields --- end

			$helpIcon = '';
			if ($value['help_link'] != '' && $admin_data_array['enable_help'] != 0) {
				$helpIcon = cpg_display_help($value['help_link']);
			}
			$resetCheckbox     = '';
			$defaultValueField = '';
			if ($CONFIG['display_reset_boxes_in_config'] == 1) { // display of reset checkboxes is enabled --- start
				if (isset($value['default_value'])) { // we have a default value
					if ($value['default_value'] == $admin_data_array[$key]) { 
						// the default value equals the current config setting - hide the "reset to default" checkbox
						$resetCheckbox = '<input type="checkbox" name="reset_default_'.$key.'" id="reset_default_'.$key.'" value="'.$value['default_value'].'" class="checkbox" checked="checked" title="'.$lang_admin_php['reset_to_default'].'" onclick="resetToDefault(\''.$key.'\', \''.$value['type'].'\', \''.($optionLoopCounter - 1).'\');" style="display:none;" />';
					} else {
						// the current config setting is different than the default - show the "reset to default" checkbox
						$resetCheckbox = '<input type="checkbox" name="reset_default_'.$key.'" id="reset_default_'.$key.'" value="'.$value['default_value'].'" class="checkbox" title="'.$lang_admin_php['reset_to_default'].'" onclick="resetToDefault(\''.$key.'\', \''.$value['type'].'\', \''.($optionLoopCounter - 1).'\');" />';
					}
				} else { // we don't have a default value
					$resetCheckbox = '<input type="hidden" name="reset_default_'.$key.'" id="reset_default_'.$key.'" value="'.$admin_data_array[$key].'"  />';
				}
				$resetCheckbox = '<span class="deleteOnSubmit">' . $resetCheckbox . '</span>';
				$resetCheckbox = str_replace("'", "\'", $resetCheckbox);
				$admin_page .= <<< EOT
                  </td>
                  <td class="{$cellStyle}" style="vertical-align:top;" width="5%">
                    <script type="text/javascript">
                        document.write('{$resetCheckbox}');
                    </script>
                  </td>
                  <td class="{$cellStyle}" style="vertical-align:top;" width="5%">
                    {$helpIcon}
                  </td>
                </tr>
EOT;
			} else { // display of reset checkboxes is enabled --- end
				$admin_page .= <<< EOT
                  </td>
                  <td class="{$cellStyle}" style="vertical-align:top;" width="5%"  colspan="2">
                    {$helpIcon}
                  </td>
                </tr>
EOT;
			}
			$withinSectionLoopCounter++;
			$tabindexCounter++;
		}
		$admin_page .= <<< EOT
                    </table>
                </div>
            </td>
          </tr>
EOT;
		$sectionLoopCounter++;
	} // foreach-loop through the config sections
} // "Regular" config page --- start
set_js_var('default_values_check', $js_default_values);
pageheader($lang_admin_php['title']);
echo $admin_page;
if ($superCage->get->keyExists('restore') != TRUE) {
echo <<<EOT
          <tr>
            <td align="left" class="tablef" colspan="2">
                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td width="33%">
                            <button type="button" class="button detail_expand_all" name="expandallbottom" id="expandallbottom" onclick="return false">
                                <img src="images/tree/plus.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['expand_all']}" />
                                {$lang_admin_php['expand_all']}
                            </button>
                            <button type="button" class="button detail_collapse_all" name="collapseallbottom" id="collapseallbottom" style="display:none;" onclick="return false">
                                <img src="images/tree/minus.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['collapse_all']}" />
                                {$lang_admin_php['collapse_all']}
                            </button>
                            <button type="button" class="button detail_toggle_all" name="toggleallbottom" id="toggleallbottom" onclick="return false">
                                <img src="images/tree/toggle.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['toggle_all']}" />
                                {$lang_admin_php['toggle_all']}
                            </button>
                        </td>
                        <td width="67%" align="center">
                            <button type="submit" class="button" name="update_config" value="{$lang_admin_php['save_cfg']}">{$submit_icon}{$lang_admin_php['save_cfg']}</button>
                        </td>
                    </tr>
                </table>
            </td>
          </tr>
EOT;
}
endtable();
echo '<br />';


list($timestamp, $form_token) = getFormToken();
echo <<< EOT
<input type="hidden" name="form_token" value="{$form_token}" />
<input type="hidden" name="timestamp" value="{$timestamp}" />
</form>

EOT;

if ($javascriptOutput != '') {
    echo <<< EOT
<script type="text/javascript">
    $(document).ready(function() {
    
        {$javascriptOutput}
    });
</script>
EOT;
}
pagefooter();

?>
