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

/*
    The category manager needs to be able to work with hundreds of categories
    without hitting the PHP memory limit. The way it does this is to delay
    populating the dropdown boxes until they are actually clicked on.
    
    It loads the list of categories using javascript from the main selector
    at the bottom of the screen. All other selectors contain only the current
    parent category until clicked on.
    
    This means the page is much smaller and is usable with lots of categories.
    
    Without this, the dropdown boxes grow exponentially as each category has the
    option to be moved into all other categories.
    
    If you make major changes to this page, please test with 200-300 categories
    nested several levels deep.
*/

define('IN_COPPERMINE', true);
define('CATMGR_PHP', true);

require('include/init.inc.php');

set_js_var('lang_confirm_delete', $lang_catmgr_php['confirm_delete']);

list($timestamp, $form_token) = getFormToken();

set_js_var('form_token', $form_token);
set_js_var('timestamp', $timestamp);

js_include('js/catmgr.js');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$CAT_LIST = array(
    0 => array(
        'cid' => 0,
        'cat_count' => 0,
    ),
);

$icon_array['submit'] = cpg_fetch_icon('ok', 1);

function get_subcat_data($parent, $ident = '')
{
    global $CONFIG, $CAT_LIST;

    $sql = "SELECT rgt, cid, parent, name, pos FROM {$CONFIG['TABLE_CATEGORIES']} ORDER BY lft ASC"; 
    $result = cpg_db_query($sql);

    if (mysql_num_rows($result) > 0) {
        $rowset = cpg_db_fetch_rowset($result);
        
        $right = array(); 
        
        foreach ($rowset as $subcat) {
        
            if (count($right) > 0) {
            
                // check if we should remove a node from the stack
                while ($right && $right[count($right) - 1]['rgt'] < $subcat['rgt']) {
                    $prev = array_pop($right);
                    $last_index = $prev_cid = $prev['cid'];
                }
            }
                
            $ident = str_repeat('&nbsp;&nbsp;&nbsp;', count($right));
            $right[] = $subcat; 
               
            if ($subcat['pos'] > 0) {
            
                $CAT_LIST[$subcat['cid']] = array(
                    'cid'       => $subcat['cid'],
                    'parent'    => $subcat['parent'],
                    'pos'       => $subcat['pos'],
                    'prev'      => $prev_cid,
                    'cat_count' => 0,
                    'name'      => $ident . $subcat['name'],
                );
                
                $CAT_LIST[$last_index]['next'] = $subcat['cid'];
                
            } else {
            
                $CAT_LIST[$subcat['cid']] = array(
                    'cid'       => $subcat['cid'],
                    'parent'    => $subcat['parent'],
                    'pos'       => $subcat['pos'],
                    'cat_count' => 0,
                    'name'      => $ident . $subcat['name'],
                );
            }
            
            $CAT_LIST[$subcat['parent']]['cat_count']++;
        }
    }
}

function cat_list_box($cid, &$parent, $on_change_refresh = true)
{
    global $lang_catmgr_php, $CAT_LIST, $LINEBREAK;

    $lb = '';

    if ($on_change_refresh) {

        $lb .= '<select name="parent" onmouseover="setbuild(this, '. (int) $parent['cid'] . ', ' . $cid . ')" onchange="updateParent(this, ' . $cid . ')" class="listbox">';

        if ($parent['cid'] == 0) {
            $lb .= '<option value="0" selected="selected">' . $lang_catmgr_php['no_category'] . '</option>';
        } else {
            $lb .= '<option value="' . $parent['cid'] .  '" selected="selected">' . $parent['name'] . '</option>';
        }

        $lb .= '</select>';

    } else {

        $lb .= '<select name="parent" id="build_source" class="listbox">' . $LINEBREAK;

        $lb .= '    <option value="0"' . ($parent == 0 ? ' selected="selected"': '') . '>' . $lang_catmgr_php['no_category'] . '</option>' . $LINEBREAK;

        foreach ($CAT_LIST as $category) {
            if ($category['cid'] > 1 && $category['cid'] != $cid) {
                $lb .= '    <option value="' . $category['cid'] . '"' . ($parent == $category['cid'] ? '" selected="selected"': '') . ">" . $category['name'] . '</option>' . $LINEBREAK;
            }
        }
        
        $lb .= '</select>';
    }

    return $lb;
}

/**
 * usergroup_list_box()
 *
 * @param integer $cid
 *
 * @return string $usergroup_listbox
 **/
function usergroup_list_box($cid)
{
    global $CONFIG, $LINEBREAK;
    
    //get the category info from the db
    $sql = "SELECT ug.group_name AS name, ug.group_id AS id, catm.group_id AS catm_gid FROM {$CONFIG['TABLE_USERGROUPS']} AS ug LEFT JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON catm.group_id = ug.group_id AND catm.cid = $cid";
    $result = cpg_db_query($sql);
    $rowset = cpg_db_fetch_rowset($result);
    
    //put the values in an array for ease of use and clean code for now
    foreach ($rowset as $row) {
        $groups[$row['id']]['name'] = $row['name'];
        if ($row['catm_gid'] != null) {
            $groups[$row['id']]['selected'] = 'true';
        } else {
            $groups[$row['id']]['selected'] = 'false';
        }
    }
    
    //create listbox
    $usergroup_listbox = '<select name="user_groups[]" class="listbox" multiple="multiple">' . $LINEBREAK;
    
    //loop through all groups
    foreach ($groups as $id => $values) {
        //make sure the administrator group isn't listed here.
        if ($id != 1) {
            $usergroup_listbox .= '    <option value="' . $id . '"' . ($values['selected'] == 'true'? 'selected="selected"' : '') . ' >' . $values['name'] . '</option>' . $LINEBREAK;
        }
    }
    
    $usergroup_listbox .= '</select>' . $LINEBREAK;
    
    //return listbox
    return $usergroup_listbox;
}

function form_alb_thumb()
{
    global $CONFIG, $lang_catmgr_php, $lang_modifyalb_php, $current_category, $cid, $USER_DATA;
    
    $results = cpg_db_query("SELECT pid, filepath, filename, url_prefix FROM {$CONFIG['TABLE_PICTURES']} AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = p.aid WHERE a.category = $cid AND approved = 'YES' ORDER BY filename");

    if (mysql_num_rows($results) == 0) {
    
        echo <<<EOT

        <tr>
                <td class="tableb" valign="top">
                        {$lang_modifyalb_php['alb_thumb']}
                </td>
                <td class="tableb" valign="top">
                        <i>{$lang_modifyalb_php['alb_empty']}</i>
                        <input type="hidden" name="thumb" value="0" />
                </td>
        </tr>

EOT;
        return;
    }
    
    $cpg_nopic_data = cpg_get_system_thumb('nopic.jpg', $USER_DATA['user_id']);
    $initial_thumb_url = $cpg_nopic_data['thumb']; //'images/nopic.jpg';

    echo <<< EOT
    
<script language="JavaScript" type="text/JavaScript">
var Pic = new Array()

Pic[0] = '$initial_thumb_url'

EOT;

    $img_list = array(0 => $lang_modifyalb_php['last_uploaded']);
    
    while ($picture = mysql_fetch_assoc($results)) {
    
        $thumb_url = get_pic_url($picture, 'thumb');
        
        echo "Pic[{$picture['pid']}] = '" . $thumb_url . "'\n";
        
        if ($picture['pid'] == $current_category['thumb']) {
            $initial_thumb_url = $thumb_url;
        }
        
        $img_list[$picture['pid']] = htmlspecialchars($picture['filename']);
    } // while
    
    echo <<< EOT

</script>

EOT;

    $thumb_cell_height = $CONFIG['thumb_width'] + 17;

    echo <<<EOT
        <tr>
                <td class="tableb" valign="top">
                        {$lang_catmgr_php['cat_thumb']}
                </td>
                <td class="tableb" align="center">
                        <table cellspacing="0" cellpadding="5" border="0">
                                <tr>
                                        <td width="$thumb_cell_height" height="$thumb_cell_height" align="center"><img src="$initial_thumb_url" name='Thumb' class='image' /><br /></td>
                                </tr>
                        </table>
                        <select name="thumb" class="listbox" onchange="if(this.options[this.selectedIndex].value) ChangeThumb(this.options[this.selectedIndex].value);" onKeyUp="if(this.options[this.selectedIndex].value) ChangeThumb(this.options[this.selectedIndex].value);">

EOT;

    foreach ($img_list as $pid => $pic_name) {
        echo '                            <option value="' . $pid . '"' . (!empty($current_category['thumb']) && $pid == $current_category['thumb'] ? ' selected':'') . '>' . $pic_name . '</option>' . $LINEBREAK;
    }
    
    echo <<<EOT
                        </select>
                </td>
        </tr>

EOT;
}

function display_cat_list()
{
    global $CAT_LIST, $CONFIG, $lang_catmgr_php, $lang_common, $CPG_PHP_SELF, $LINEBREAK;
    
    $CAT_LIST3 = $CAT_LIST;

    $loop_counter = 0;
    
    list($timestamp, $form_token) = getFormToken();
    $form_token = "&amp;form_token={$form_token}&amp;timestamp={$timestamp}";
    

    foreach ($CAT_LIST3 as $key => $category) {
    
        if ($category['cid'] == 0) {
            continue;
        }
          
        if ($loop_counter == 0) {
            $row_style_class = 'tableb';
        } else {
            $row_style_class = 'tableb tableb_alternate';
        }
        
        $loop_counter++;

        if ($loop_counter > 1) {
            $loop_counter = 0;
        }

        echo '        <tr>' . $LINEBREAK;
        echo '                <td class="'.$row_style_class.'" width="80%"><strong>' . $category['name'] . '</strong></td>' . $LINEBREAK;

        if ($category['pos'] > 0 && $CONFIG['categories_alpha_sort'] != 1) {
            echo '                <td class="'.$row_style_class.'" width="4%"><a href="' . $CPG_PHP_SELF . '?op=movetop&amp;cid1=' . $category['cid'] . '&amp;pos1=' . ($category['pos']) . $form_token . '" class="rounded_menu"><span>' . cpg_fetch_icon('upup', 0, $lang_common['move_top']) . '</span></a></td>' . $LINEBREAK;
            echo '                <td class="'.$row_style_class.'" width="4%"><a href="' . $CPG_PHP_SELF . '?op=move&amp;cid1=' . $category['cid'] . '&amp;pos1=' . ($category['pos']-1) . '&amp;cid2=' . $category['prev'] . '&amp;pos2=' . ($category['pos']) . $form_token . '" class="rounded_menu"><span>' . cpg_fetch_icon('up', 0, $lang_common['move_up']) . '</span></a></td>' . $LINEBREAK;
        } else {
            echo '                <td class="'.$row_style_class.'" width="4%">' . '&nbsp;' . '</td>' . $LINEBREAK;
            echo '                <td class="'.$row_style_class.'" width="4%">' . '&nbsp;' . '</td>' . $LINEBREAK;
        }

        if ($category['pos'] < $CAT_LIST[$category['parent']]['cat_count']-1  && $CONFIG['categories_alpha_sort'] != 1) {
            echo '                <td class="'.$row_style_class.'" width="4%"><a href="' . $CPG_PHP_SELF . '?op=move&amp;cid1=' . $category['cid'] . '&amp;pos1=' . ($category['pos'] + 1) . '&amp;cid2=' . $category['next'] . '&amp;pos2=' . ($category['pos']) . $form_token . '" class="rounded_menu"><span>' . cpg_fetch_icon('down', 0, $lang_common['move_down']) . '</span></a></td>' . $LINEBREAK;
            echo '                <td class="'.$row_style_class.'" width="4%"><a href="' . $CPG_PHP_SELF . '?op=movebottom&amp;cid1=' . $category['cid'] . '&amp;pos1=' . ($category['pos']) . $form_token . '" class="rounded_menu"><span>' . cpg_fetch_icon('downdown', 0, $lang_common['move_bottom']) . '</span></a></td>' . $LINEBREAK;
        } else {
            echo '                <td class="'.$row_style_class.'" width="4%">' . '&nbsp;' . '</td>' . $LINEBREAK;
            echo '                <td class="'.$row_style_class.'" width="4%">' . '&nbsp;' . '</td>' . $LINEBREAK;
        }

        if ($category['cid'] != 1) {
            echo '                <td class="'.$row_style_class.'" width="4%"><a href="' . $CPG_PHP_SELF . '?op=deletecat&amp;cid=' . $category['cid'] . $form_token . '" onclick="return confirmDel(\'' . addslashes(str_replace('&nbsp;', '', $category['name'])) . '\')" class="rounded_menu"><span>' . cpg_fetch_icon('delete', 0, $lang_common['delete']) . '</span></a></td>' . $LINEBREAK;
        } else {
            echo '                <td class="'.$row_style_class.'" width="4%">' . '&nbsp;' . '</td>' . $LINEBREAK;
        }

        echo '                <td class="'.$row_style_class.'" width="4%">' . '<a href="' . $CPG_PHP_SELF . '?op=editcat&amp;cid=' . $category['cid'] . $form_token . '" class="rounded_menu"><span>' . cpg_fetch_icon('edit', 0, $lang_common['edit']) . '</span></a></td>' . $LINEBREAK;
        echo '                <td class="'.$row_style_class.'" width="4%">' . $LINEBREAK . cat_list_box($category['cid'], $CAT_LIST3[$category['parent']]) . $LINEBREAK . '</td>' . $LINEBREAK;
        echo '        </tr>' . $LINEBREAK;
    }
}

function verify_children($parent, $cid)
{
    global $CONFIG, $children;

    $sql = "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = $parent";
    $result = cpg_db_query($sql);

    if (($cat_count = mysql_num_rows($result)) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $children[] = $row['cid'];
            verify_children($row['cid'], $cid);
        }
    }

    return false;
}

if ($superCage->post->keyExists('update_config')) {
     //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
    
    $value = $superCage->post->getInt('categories_alpha_sort');
    
    cpg_config_set('categories_alpha_sort', $value);
    
    rebuild_tree();
}

if ($superCage->get->keyExists('op')) {
    $op = $superCage->get->getAlpha('op');
    
    //Check if the form token is valid
    if(!checkFormToken()){
        cpg_die(ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
    }
} else {
    $op = '';
}


$current_category = array(
    'cid'         => 0,
    'name'        => '',
    'parent'      => 0,
    'description' => '',
);


switch ($op) {

case 'move':

    if (!$superCage->get->keyExists('cid1') || !$superCage->get->keyExists('cid2') || !$superCage->get->keyExists('pos1') || !$superCage->get->keyExists('pos2')) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'move'), __FILE__, __LINE__);
    }

    $cid1 = $superCage->get->getInt('cid1');
    $cid2 = $superCage->get->getInt('cid2');
    $pos1 = $superCage->get->getInt('pos1');
    $pos2 = $superCage->get->getInt('pos2');

    cpg_db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos = $pos1, lft = 0 WHERE cid = $cid1");
    cpg_db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos = $pos2, lft = 0 WHERE cid = $cid2");

    break;

case 'movetop':

    if (!$superCage->get->keyExists('cid1') || !$superCage->get->keyExists('pos1')) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'movetop'), __FILE__, __LINE__);
    }

    $cid1 = $superCage->get->getInt('cid1'); // cat to move to top
    $pos1 = $superCage->get->getInt('pos1'); // current pos for cat

    get_subcat_data(0);

    $cid_array = array();

    foreach ($CAT_LIST as $iCat) {
        $cid_array[$iCat['cid']] = $iCat;
    }

    $CAT_LIST = array();

    $iCID = $cid1;
    $iPos = $pos1;

    while ($iPos > 0) {

        $jPos = $iPos - 1;
        $jCID = isset($cid_array[$iCID]) && array_key_exists('prev', $cid_array[$iCID]) ? $cid_array[$iCID]['prev'] : 0;

        cpg_db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos = $jPos, lft = 0 WHERE cid = $cid1");
        cpg_db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos = $iPos, lft = 0 WHERE cid = $jCID");

        $iCID = $jCID;
        $iPos = $jPos;
    }
    
    break;

case 'movebottom':

    if (!$superCage->get->keyExists('cid1') || !$superCage->get->keyExists('pos1')) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'movebottom'), __FILE__, __LINE__);
    }

    $cid1 = $superCage->get->getInt('cid1'); // cat to move to bottom
    $pos1 = $superCage->get->getInt('pos1'); // current pos for cat

    get_subcat_data(0);

    $cid_array = array();

    foreach ($CAT_LIST as $iCat) {
        $cid_array[$iCat['cid']] = $iCat;
    }

    $CAT_LIST = array();

    $iCID = $cid1;
    $iPos = $pos1;

    $cat_count = $cid_array[$cid_array[$cid1]['parent']]['cat_count'];

    while ($iPos < $cat_count - 1) {

        $jPos = $iPos + 1;
        $jCID = isset($cid_array[$iCID]) && array_key_exists('next', $cid_array[$iCID]) ? $cid_array[$iCID]['next'] : 0;

        cpg_db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos = $jPos, lft = 0 WHERE cid = $cid1");
        cpg_db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos = $iPos, lft = 0 WHERE cid = $jCID");

        $iCID = $jCID;
        $iPos = $jPos;
    }

    break;

case 'setparent':

    if (!$superCage->get->keyExists('cid') || !$superCage->get->keyExists('parent')) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'setparent'), __FILE__, __LINE__);
    }

    $cid = $superCage->get->getInt('cid');
    $parent = $superCage->get->getInt('parent');

    $children = array();

    verify_children($cid, $cid);

    if (!in_array($parent, $children)) {
        cpg_db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent = $parent, pos = -1, lft = 0 WHERE cid = $cid");
    } else {
        cpg_die(ERROR, "You cannot move a category into its own child", __FILE__, __LINE__);
    }
    
    break;

case 'editcat':

    if (!$superCage->get->keyExists('cid')) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'editcat'), __FILE__, __LINE__);
    }

    $cid = $superCage->get->getInt('cid');
    
    $result = cpg_db_query("SELECT cid, name, parent, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = $cid");

    if (!mysql_num_rows($result)) {
        cpg_die(ERROR, $lang_catmgr_php['unknown_cat'], __FILE__, __LINE__);
    }
    
    $current_category = mysql_fetch_assoc($result);
    
    break;

case 'updatecat':

    if (!$superCage->post->keyExists('cid') || !$superCage->post->keyExists('parent') || !$superCage->post->keyExists('name') || !$superCage->post->keyExists('description')) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'updatecat'), __FILE__, __LINE__);
    }

    if ($superCage->post->keyExists('name')) {
        $name = $superCage->post->getEscaped('name');
        $name = trim($name);
    } 
    
    if (empty($name)){
        $name = '&lt;???&gt;';
        break;
    }

    $cid    = $superCage->post->getInt('cid');
    $parent = $superCage->post->getInt('parent');
    $thumb  = $superCage->post->getInt('thumb');
 
    $description = $superCage->post->getEscaped('description');

    $children = array();
    
    verify_children($cid, $cid);

    if (!in_array($parent, $children)) {
        cpg_db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent = $parent, name = '$name', description = '$description', thumb = $thumb, lft = 0 WHERE cid = $cid");
    } else {
        cpg_db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET name = '$name', description = '$description', thumb = $thumb, lft = 0 WHERE cid = $cid");
    }
            
    //insert in categorymap
    //first delete all of this category in categorymap
    cpg_db_query("DELETE FROM {$CONFIG['TABLE_CATMAP']} WHERE cid = $cid");
    
    //then add the new ones
    if ($superCage->post->keyExists('user_groups')) {
        foreach ($superCage->post->getInt('user_groups') as $key) {
            cpg_db_query("INSERT INTO {$CONFIG['TABLE_CATMAP']} (cid, group_id) VALUES ($cid, $key)");
        }
    }
    
    break;

case 'createcat':
    if (!$superCage->post->keyExists('parent') || !$superCage->post->keyExists('name') || !$superCage->post->keyExists('description')) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'createcat'), __FILE__, __LINE__);
    }

    if ($superCage->post->keyExists('name')) {
        $name = $superCage->post->getEscaped('name');
        $name = trim($name);
    } 

    if (empty($name)) {
        $name = '&lt;???&gt;';
        break;
    }

    $parent = $superCage->post->getInt('parent');

    $description = $superCage->post->getEscaped('description');

    cpg_db_query("INSERT INTO {$CONFIG['TABLE_CATEGORIES']} (pos, parent, name, description) VALUES (10000, $parent, '$name', '$description')");
    
    //insert in categorymap
    $cid = cpg_db_last_insert_id();
    
    if ($superCage->post->keyExists('user_groups')) {
        foreach ($superCage->post->getInt('user_groups') as $key) {
            cpg_db_query("INSERT INTO {$CONFIG['TABLE_CATMAP']} (cid, group_id) VALUES ($cid, $key)");
        }
    }
    
    break;

case 'deletecat':

    if (!$superCage->get->keyExists('cid')) {
        cpg_die(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'deletecat'), __FILE__, __LINE__);
    }

    $cid = $superCage->get->getInt('cid');

    if ($cid == 1) {
        cpg_die(ERROR, $lang_catmgr_php['usergal_cat_ro'], __FILE__, __LINE__);
    }
    
    $result = cpg_db_query("SELECT parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = $cid");
    
    if (!mysql_num_rows($result)) {
        cpg_die(ERROR, $lang_catmgr_php['unknown_cat'], __FILE__, __LINE__);
    }
    
    $del_category = mysql_fetch_assoc($result);
    $parent = $del_category['parent'];
    
    cpg_db_query("UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent = $parent, lft = 0 WHERE parent = $cid");
    cpg_db_query("UPDATE {$CONFIG['TABLE_ALBUMS']} SET category = $parent WHERE category = $cid");
    cpg_db_query("DELETE FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = $cid");
    
    //delete from categorymap
    cpg_db_query("DELETE FROM {$CONFIG['TABLE_CATMAP']} WHERE cid = $cid");

    break;
}

if ($op) {
    check_rebuild_tree();
}

get_subcat_data(0);

pageheader($lang_catmgr_php['manage_cat']);

starttable('100%', cpg_fetch_icon('cat_mgr', 2) . $lang_catmgr_php['category'] . '&nbsp;' . cpg_display_help('f=categories.htm&amp;as=cat_cp&amp;ae=cat_cp_end&amp;top=1', '800', '600'),1);

echo <<< EOT
    <tr>
        <td class="tableb">
EOT;

starttable('100%');
// configure sort category alphabetically
$yes_selected = $CONFIG['categories_alpha_sort'] ? 'checked="checked"' : '';
$no_selected = !$CONFIG['categories_alpha_sort'] ? 'checked="checked"' : '';

$help = '&nbsp;' . cpg_display_help('f=configuration.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end&amp;top=1', '600', '250');

echo <<<EOT
        <tr>
            <td class="tablef" colspan="8">
                        <form name="catsortconfig" action="$CPG_PHP_SELF" method="post">
                        {$lang_catmgr_php['categories_alpha_sort']}
                        {$help}
                        &nbsp;&nbsp;
                        <input type="radio" id="categories_alpha_sort1" name="categories_alpha_sort" value="1"  onclick="checkFormSubmit()" $yes_selected />
                        <label for="categories_alpha_sort1" class="clickable_option">{$lang_common['yes']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="categories_alpha_sort0" name="categories_alpha_sort" value="0"  onclick="checkFormSubmit()" $no_selected />
                        <label for="categories_alpha_sort0" class="clickable_option">{$lang_common['no']}</label>
                        &nbsp;&nbsp;
                        <input type="hidden" name="update_config" value="{$lang_catmgr_php['save_cfg']}" class="button" />
                        <input type="hidden" name="form_token" value="{$form_token}" />
                        <input type="hidden" name="timestamp" value="{$timestamp}" />
                        </form>
                </td>
        </tr>
EOT;
endtable();

echo <<< EOT
        </td>
    </tr>
    <tr>
        <td class="tableb">
EOT;


starttable('100%');

$help = '&nbsp;' . cpg_display_help('f=categories.htm&amp;as=cat_cp_page_controls_categories&amp;ae=cat_cp_page_controls_categories_end&amp;top=1', '800', '600');

$icon = cpg_fetch_icon('cat_mgr', 2);

echo <<<EOT
        <tr>
                <th class="tableh1"><span class="statlink">{$lang_catmgr_php['manage_cat']}</span>$help</th>
                <th colspan="6" class="tableh1" align="center"><strong><span class="statlink">{$lang_catmgr_php['operations']}</span></strong></th>
                <th class="tableh1" align="center"><strong><span class="statlink">{$lang_catmgr_php['move_into']}</span></strong></th>
        </tr>
        
EOT;

display_cat_list();

endtable();

$op = $current_category['cid'] ? 'updatecat' : 'createcat';

echo <<< EOT
        </td>
    </tr>
    <tr>
        <td class="tableb">
            <form method="post" action="catmgr.php?op=$op">
EOT;

$help_update_create = '&nbsp;' . cpg_display_help('f=categories.htm&amp;as=cat_cp_page_controls_create&amp;ae=cat_cp_page_controls_create_end&amp;top=1', '800', '600');

starttable('100%', $lang_catmgr_php['update_create'] . $help_update_create, 2);

$lb = cat_list_box($current_category['cid'], $current_category['parent'], false);

$ug_lb = usergroup_list_box($current_category['cid']);

$description_help = '&nbsp;' . cpg_display_help('f=categories.htm&amp;as=cat_album_create&amp;ae=cat_album_create_end&amp;top=1', '600', '250');

$albumCreateHelp = '&nbsp;' . cpg_display_help('f=categories.htm&amp;as=cat_album_create&amp;ae=cat_album_create_end&amp;top=1', '600', '250');

echo <<<EOT
        
        <tr>
            <td width="40%" class="tableb">
                {$lang_catmgr_php['parent_cat']}
            </td>
            <td width="60%" class="tableb" valign="top">
                $lb
            </td>
        </tr>
        <tr>
            <td width="40%" class="tableb">
                {$lang_catmgr_php['group_create_alb']}{$albumCreateHelp}
            </td>
            <td width="60%" class="tableb" valign="top">
                $ug_lb
            </td>
        </tr>
        <tr>
            <td width="40%" class="tableb">
                {$lang_catmgr_php['cat_title']}
            </td>
            <td width="60%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="name" value="{$current_category['name']}" class="textinput" />
            </td>
        </tr>
        <tr>
            <td class="tableb" valign="top">
                {$lang_catmgr_php['cat_desc']}$description_help
            </td>
            <td class="tableb" valign="top">
                <textarea name="description" rows="5" cols="40" style="width: 100%;" class="textinput">{$current_category['description']}</textarea>
            </td>
        </tr>
EOT;

$op = $superCage->get->getAlpha('op');

if ($op == 'editcat') {
    form_alb_thumb();
}

echo <<<EOT
        <tr>
            <td colspan="2" align="center" class="tablef">
                <button type="submit" class="button" name="cat_submit" value="{$lang_catmgr_php['update_create']}">{$icon_array['submit']}{$lang_catmgr_php['update_create']}</button>
                <input type="hidden" name="form_token" value="{$form_token}" />
                <input type="hidden" name="timestamp" value="{$timestamp}" />
                <input type="hidden" name="cid" value ="{$current_category['cid']}" />
            </td>
        </tr>

EOT;

endtable();

echo <<< EOT
            </form>
        </td>
    </tr>
EOT;

endtable();

pagefooter();

?>
