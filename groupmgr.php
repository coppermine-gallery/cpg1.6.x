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
define('GROUPMGR_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$icon_array = array();
$icon_array['ok'] = cpg_fetch_icon('ok', 0);
$icon_array['add'] = cpg_fetch_icon('add', 0);
$icon_array['delete'] = cpg_fetch_icon('delete', 0);

$cpg_udb->synchronize_groups();

function display_group_list()
{
    global $CONFIG, $LINEBREAK, $custom_group_counter;
    global $lang_groupmgr_php, $lang_byte_units, $lang_common;
    $row_counter = 0;
    $table_start = '<table border="0" cellspacing="0" cellpadding="0" style="white-space:nowrap;font-size:90%;">'.$LINEBREAK;
    $table_end = '</table>'.$LINEBREAK;
    $tr_start = '<tr>'.$LINEBREAK;
    $tr_end = '</tr>'.$LINEBREAK;
    $td_start = '<td>'.$LINEBREAK;
    $td_end = '</td>'.$LINEBREAK;
    //$approval_needed = ', admin approval needed';
    //$approval_not_needed = ', visible instantly';
    $default_group_names = array(
        '1' => 'Administrators',
        '2' => 'Registered',
        '3' => 'Anonymous',
    );

    $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1 ORDER BY group_id");
    if (!mysql_num_rows($result)) {
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
        VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3)");
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
        VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3)");
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
        VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 3)");
        cpg_die(CRITICAL_ERROR, $lang_groupmgr_php['error_group_empty'], __FILE__, __LINE__);
    }

    $field_list = array('can_rate_pictures', 'can_send_ecards', 'can_post_comments', 'can_upload_pictures', 'pub_upl_need_approval', 'can_create_albums', 'priv_upl_need_approval');
    $custom_group_counter = 0;
    $access_levels = array(
        0 => $lang_groupmgr_php['none'],
        1 => $lang_groupmgr_php['thumbnail_only'],
        2 => $lang_groupmgr_php['thumbnail_intermediate'],
        3 => $lang_groupmgr_php['thumbnail_intermediate_full']
    );

    while ($group = mysql_fetch_assoc($result)) {
        $group['group_name'] = $group['group_name'];
        $row_counter++;
        if ($row_counter == 1) {
            $table_background = 'tableb';
        } else {
            $table_background = 'tableb tableb_alternate';
            $row_counter = 0;
        }

        if ($group['group_id'] > 3 && UDB_INTEGRATION == 'coppermine') {
            $custom_group_counter++;
            echo <<< EOT
        <tr>
                <td class="$table_background" align="center" valign="top" style="padding-left: 1px; padding-right: 1px" >
                        <input type="checkbox" name="delete_group[]" value="{$group['group_id']}" class="checkbox" />
                </td>

EOT;
        } else {
            echo <<< EOT
        <tr>
                <td class="$table_background" >
                        &nbsp;
                </td>

EOT;
        }
        // disable row if applicable
        if ($group['group_id'] == 3 && $CONFIG['allow_unlogged_access'] == 0) {
            $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
            $explain_greyedout = '&nbsp;'.cpg_display_help('f=empty.htm&amp;base=64&h='.urlencode(base64_encode(serialize($lang_groupmgr_php['explain_greyed_out_title']))).'&amp;t='.urlencode(base64_encode(serialize(sprintf($lang_groupmgr_php['explain_guests_greyed_out_text'], '<em>'.$group['group_name'].'</em>')))), '450', '300');
        } else {
            $disabled = '';
            $explain_greyedout = '';
        }
        echo <<< EOT
                <td class="$table_background" align="left" valign="top" style="white-space:nowrap">
                        <input type="hidden" name="group_id[]" value="{$group['group_id']}" />
                        <input type="text" name="group_name_{$group['group_id']}" value="{$group['group_name']}" class="textinput" size="18" style="font-size:80%;" />
                        $explain_greyedout
EOT;
        // show reset option if applicable
        if (UDB_INTEGRATION == 'coppermine' && isset($default_group_names[$group['group_id']])) {
            if ($group['group_name'] != $default_group_names[$group['group_id']] && $default_group_names[$group['group_id']] != '') {
                // we have a group here that doesn't have the default name
                //print '<img src="images/flags/reset.gif" width="16" height="11" border="0" alt="" title="'.sprintf($lang_groupmgr_php['reset_to_default'], $default_group_names[$group['group_id']]).'" style="cursor:pointer" onclick="document.groupmanager.group_name_'.$group['group_id'].'.value=\''.$default_group_names[$group['group_id']].'\'" />';
                print '<a href="javascript:;" onclick="document.groupmanager.group_name_'.$group['group_id'].'.value=\''.$default_group_names[$group['group_id']].'\'">';
                print cpg_fetch_icon('stop', 0, sprintf($lang_groupmgr_php['reset_to_default'], $default_group_names[$group['group_id']]));
                print '</a>';
            }
        }
        
        list($timestamp, $form_token) = getFormToken();
        $assignedGroupsHelp = cpg_display_help('f=groups.htm&amp;as=group_cp_assigned&amp;ae=group_cp_assigned_end', '450', '300');
        echo <<< EOT
                        <br />
                        {$lang_groupmgr_php['disk_quota']}: <input type="text" name="group_quota_{$group['group_id']}" value="{$group['group_quota']}" size="5" class="textinput" $disabled /> {$lang_byte_units[1]}
                <br /><br /><a href="usermgr.php?op=group_alb_access&amp;gid={$group['group_id']}&amp;form_token=$form_token&amp;timestamp=$timestamp" class="admin_menu">{$lang_groupmgr_php['group_assigned_album']}</a> {$assignedGroupsHelp}
                                                                </td>
                <td class="$table_background" align="left" valign="top">
EOT;
        foreach ($field_list as $field_name) {
            $value = $group[$field_name];
            $yes_selected = ($value == 1) ? 'checked="checked"' : '';
            $no_selected = ($value == 0) ? 'checked="checked"' : '';
            
            if ($field_name == 'can_rate_pictures') {
                echo $table_start.$tr_start.$td_start.$lang_groupmgr_php['rating'].$td_end;
            } elseif ($field_name == 'can_send_ecards') {
                echo $tr_start.$td_start.$lang_groupmgr_php['ecards'].$td_end;
            } elseif ($field_name == 'can_post_comments') {
                echo $tr_start.$td_start.$lang_groupmgr_php['comments'].$td_end;
            } elseif ($field_name == 'can_upload_pictures') {
                echo $table_start.$tr_start.$td_start.$lang_groupmgr_php['allowed'].$td_end;
            } elseif ($field_name == 'pub_upl_need_approval') {
                echo $tr_start.$td_start.$lang_groupmgr_php['approval'].$td_end;
            } elseif ($field_name == 'can_create_albums') {
                echo $table_start.$tr_start.$td_start.$lang_groupmgr_php['allowed'].$td_end;
            } elseif ($field_name == 'priv_upl_need_approval') {
                echo $tr_start.$td_start.$lang_groupmgr_php['approval'].$td_end;
            }
            
            if ($group['group_id'] == 3 && $CONFIG['allow_unlogged_access'] == 0) {
                $disabled_yes = 'disabled="disabled"';
                $disabled_no = 'disabled="disabled"';
            } else {
                $disabled_yes = '';
                $disabled_no = '';
            }
            
            echo <<< EOT
            $td_start
            <input type="radio" id="{$field_name}_{$group['group_id']}1" name="{$field_name}_{$group['group_id']}" value="1" $yes_selected $disabled_yes /><label for="{$field_name}_{$group['group_id']}1" class="clickable_option">{$lang_common['yes']}</label>
            $td_end
            $td_start
                        <input type="radio" id="{$field_name}_{$group['group_id']}0" name="{$field_name}_{$group['group_id']}" value="0" $no_selected $disabled_no /><label for="{$field_name}_{$group['group_id']}0" class="clickable_option">{$lang_common['no']}</label>
                        $td_end
                        $tr_end

EOT;
            if ($field_name== 'can_post_comments' || $field_name== 'pub_upl_need_approval') { 
                echo $table_end . "</td><td class=\"$table_background\" align=\"left\" valign=\"top\">";
            } else {
                echo "<!--<br />-->";
            }
        }  // foreach ($field_list as $field_name)

        echo $table_end . "</td><td class=\"$table_background\" align=\"left\" valign=\"top\">";

        // Option for access level for group
        echo $table_start;
        if ($group['group_id'] == 3) {
            $group['access_level'] = $CONFIG['allow_unlogged_access'];
        }
        foreach ($access_levels as $al_value => $al_label) {
            $selected = (($group['access_level'] == $al_value) ? 'checked="checked"' : '');
            echo $tr_start . $td_start;
            echo <<<EOT
            <input type="radio" id="access_level_{$group['group_id']}{$al_value}" name="access_level_{$group['group_id']}" value="{$al_value}" $selected /><label for="access_level_{$group['group_id']}{$al_value}" class="clickable_option">{$al_label}</label>
EOT;
            echo $td_end . $tr_end;
        }
        echo $table_end;

         echo "</td>";

         echo <<< EOT
        </tr>

EOT;
    } // while
    mysql_free_result($result);
}

function get_post_var($var)
{
    global $lang_errors;
    $superCage = Inspekt::makeSuperCage();

    if (!$superCage->post->keyExists($var)) {
        cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'] . " ($var)", __FILE__, __LINE__);
    }
    return $superCage->post->getInt($var);
}

function process_post_data()
{
    global $CONFIG, $lang_errors;
    $superCage = Inspekt::makeSuperCage();
    
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }

    $field_list = array('group_name', 'group_quota', 'can_rate_pictures', 'can_send_ecards', 'can_post_comments', 'can_upload_pictures', 'pub_upl_need_approval', 'can_create_albums', 'priv_upl_need_approval', 'access_level');

    $group_id_array = get_post_var('group_id');
    $guests_disabled = ($CONFIG['allow_unlogged_access'] == 0);
    foreach ($group_id_array as $key => $group_id) {

        // For guest/anonymous group, update the configuration setting 'allow_unlogged_access'
        if ($group_id == 3) {
            cpg_config_set('allow_unlogged_access', $superCage->post->getInt('access_level_' . $group_id));
        }
        // For the guest/anonymous group, don't update the database if the settings were disabled
        if (($group_id == 3) && $guests_disabled) {
            continue;
        }
        $set_statement = '';
        foreach ($field_list as $field) {
            if ($field == 'group_name') {
                $set_statement .= $field . "='" . $superCage->post->getEscaped($field . '_' . $group_id) . "',";
            } else {
                $set_statement .= $field . "='" . $superCage->post->getInt($field . '_' . $group_id) . "',";
            }
        }
        $set_statement = substr($set_statement, 0, -1);
        cpg_db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET $set_statement WHERE group_id = '$group_id' LIMIT 1");
    }
}

if ($superCage->post->keyExists('del_sel') && $superCage->post->keyExists('delete_group')) {
    $delete_group_arr = $superCage->post->getInt('delete_group');
    if (is_array($delete_group_arr)) {
        foreach ($delete_group_arr as $group_id) {
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . (int)$group_id . "' LIMIT 1");
            cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '2' WHERE user_group = '" . (int)$group_id . "'");
        }
    }
} elseif ($superCage->post->keyExists('new_group')) {
    cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_name) VALUES ('')");
} elseif ($superCage->post->keyExists('apply_modifs')) {
    process_post_data();
}

pageheader($lang_groupmgr_php['title']);
echo <<<EOT

<script language="javascript" type="text/javascript">
<!--//<![CDATA[
function confirmDel()
{
    return confirm("{$lang_groupmgr_php['confirm_del']}");
}

addonload("show_section('checkAll')");
addonload("show_section('checkAll2')");
//]]>-->
</script>

<form method="post" action="$CPG_PHP_SELF" name="groupmanager" id="cpgform">
EOT;


$help_group = '&nbsp;'.cpg_display_help('f=groups.htm&amp;as=group_cp_names&amp;ae=group_cp_names_end&amp;top=1', '700', '500');
$help_permissions = '&nbsp;'.cpg_display_help('f=groups.htm&amp;as=group_cp_permissions&amp;ae=group_cp_permissions_end&amp;top=1', '500', '200');
$help_public = '&nbsp;'.cpg_display_help('f=groups.htm&amp;as=group_cp_public&amp;ae=group_cp_public_end&amp;top=1', '500', '200');
$help_personal = '&nbsp;'.cpg_display_help('f=groups.htm&amp;as=group_cp_personal&amp;ae=group_cp_personal_end&amp;top=1', '500', '200');
$help_access_level = '&nbsp;'.cpg_display_help('f=groups.htm&amp;as=group_cp_access_level&amp;ae=group_cp_access_level_end&amp;top=1', '700', '400');
starttable('100%', cpg_fetch_icon('groups_mgr', 2).$lang_groupmgr_php['group_manager']. '&nbsp;' . cpg_display_help('f=groups.htm&amp;as=group_cp&amp;ae=group_cp_end&amp;top=1', '700', '500'), 6);
echo <<<EOT

        <tr style="white-space:nowrap">
                <th class="tableh1"><input type="checkbox" name="checkAll" id="checkAll" onclick="selectAll('cpgform');" class="checkbox" title="{$lang_common['check_uncheck_all']}" style="display:none" /></th>
                <th class="tableh1"><span class="statlink">{$lang_groupmgr_php['group_name']}</span>$help_group</th>
                <th class="tableh1"><span class="statlink">{$lang_groupmgr_php['permissions']}</span>$help_permissions</th>
                <th class="tableh1"><span class="statlink">{$lang_groupmgr_php['public_albums']}</span> $help_public</th>
                <th class="tableh1"><span class="statlink">{$lang_groupmgr_php['personal_gallery']}</span>$help_personal</th>
                <th class="tableh1"><span class="statlink">{$lang_groupmgr_php['access_level']}</span>$help_access_level</th>
        </tr>

EOT;

display_group_list();

if (UDB_INTEGRATION != 'coppermine') {
    echo <<<EOT
        <tr>
            <td colspan="14" align="center" class="tablef">
                        <button type="submit" class="button" name="apply_modifs" id="apply_modifs" value="{$lang_common['apply_changes']}">{$icon_array['ok']}{$lang_common['apply_changes']}</button>
                        &nbsp;&nbsp;&nbsp;
                </td>
        </tr>

EOT;
} else {
    echo <<<EOT
        <tr>
            <td class="tablef"><input type="checkbox" name="checkAll2" id="checkAll2" onclick="selectAll('cpgform');" class="checkbox" title="{$lang_common['check_uncheck_all']}" style="display:none" /></td>
            <td colspan="13" align="center" class="tablef">
                        <button type="submit" class="button" name="apply_modifs" id="apply_modifs" value="{$lang_common['apply_changes']}">{$icon_array['ok']}{$lang_common['apply_changes']}</button>&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="button" name="new_group" id="new_group" value="{$lang_groupmgr_php['create_new_group']}">{$icon_array['add']}{$lang_groupmgr_php['create_new_group']}</button>
                        &nbsp;&nbsp;&nbsp;
EOT;
    if ($custom_group_counter > 0) {
        print '                        <button type="submit" class="button" name="del_sel" id="del_sel" value="'.$lang_groupmgr_php['del_groups'].'" onclick="return confirmDel()">'.$icon_array['delete'].$lang_groupmgr_php['del_groups'].'</button>';
    }
    echo <<<EOT
                </td>

        </tr>

EOT;
}
endtable();
list($timestamp, $form_token) = getFormToken();	
echo <<< EOT
<input type="hidden" name="form_token" value="{$form_token}" />
<input type="hidden" name="timestamp" value="{$timestamp}" />
</form>
EOT;
pagefooter();

?>