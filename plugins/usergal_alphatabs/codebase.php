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
if (!defined('CORE_PLUGIN')) {
    define('CORE_PLUGIN', true);
}
$superCage = Inspekt::makeSuperCage();

if ($superCage->get->keyExists('cat') && $superCage->get->getInt('cat') == USER_GAL_CAT){
    
    if ($superCage->get->keyExists('letter')) {
        $thisplugin->add_action('page_start','bridge_extender');
    }

    function makejumpbox(){
        global $lang_plugin_php;
        starttable('100%', $lang_plugin_php['usergal_alphatabs_jump_by_username'], 26);
        echo '<tr>';
        foreach (range('A', 'Z') as $letter){
            echo '<td width="'.(100/26).'%" align="center"><a href="index.php?cat=1&letter='.$letter.'"> '.$letter.' </a></td>';
        }
        echo '</tr>';
        endtable();
    }

    function theme_display_thumbnails(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $page, $total_pages, $sort_options, $display_tabs, $mode = 'thumb', $date='')
    {
        global $CONFIG, $CURRENT_ALBUM_DATA;
        global $template_thumb_view_title_row,$template_fav_thumb_view_title_row, $lang_thumb_view, $lang_common, $template_tab_display, $template_thumbnail_view, $lang_album_list, $lang_errors;

        $superCage = Inspekt::makeSuperCage();

        static $header = '';
        static $thumb_cell = '';
        static $empty_cell = '';
        static $row_separator = '';
        static $footer = '';
        static $tabs = '';
        static $spacer = '';

        if ($header == '') {
            $thumb_cell = template_extract_block($template_thumbnail_view, 'thumb_cell');
            $tabs = template_extract_block($template_thumbnail_view, 'tabs');
            $header = template_extract_block($template_thumbnail_view, 'header');
            $empty_cell = template_extract_block($template_thumbnail_view, 'empty_cell');
            $row_separator = template_extract_block($template_thumbnail_view, 'row_separator');
            $footer = template_extract_block($template_thumbnail_view, 'footer');
            $spacer = template_extract_block($template_thumbnail_view, 'spacer');
        }

        $cat_link = is_numeric($aid) ? '' : '&amp;cat=' . $cat;
        $date_link = $date=='' ? '' : '&amp;date=' . $date;
        if ($superCage->get->getInt('uid')) {
          $uid_link = '&amp;uid=' . $superCage->get->getInt('uid');
        } else {
          $uid_link = '';
        }

        $album_types = array(
            'albums' => array('lastalb')
        );
        $album_types = CPGPluginAPI::filter('theme_thumbnails_album_types', $album_types);

        $theme_thumb_tab_tmpl = $template_tab_display;

        if ($mode == 'thumb') {
            $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => in_array($aid, $album_types['albums']) ? $lang_album_list['album_on_page'] : $lang_thumb_view['pic_on_page']));
            $theme_thumb_tab_tmpl['page_link'] = strtr($theme_thumb_tab_tmpl['page_link'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . $date_link . $uid_link . '&amp;page=%d'));
        } else {
            // start of modified section
            $pl =  $superCage->get->getAlpha('letter') ? ('&amp;letter=' . $superCage->get->getAlpha('letter')) : '';
            $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_thumb_view['user_on_page']));
            $theme_thumb_tab_tmpl['page_link'] = strtr($theme_thumb_tab_tmpl['page_link'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d' . $pl));
            // end of modified section
        }

        $thumbcols = $CONFIG['thumbcols'];
        $cell_width = ceil(100 / $CONFIG['thumbcols']) . '%';

        $tabs_html = $display_tabs ? create_tabs($nbThumb, $page, $total_pages, $theme_thumb_tab_tmpl) : '';

        if (!GALLERY_ADMIN_MODE && stripos($template_thumb_view_title_row, 'admin_buttons') !== false) {
            template_extract_block($template_thumb_view_title_row, 'admin_buttons');
        }
        // The sort order options are not available for meta albums
        if ($sort_options) {
            if (GALLERY_ADMIN_MODE) {
                $param = array(
                    '{ALBUM_ID}'   => $aid,
                    '{CAT_ID}'     => ($cat > 0 ? $cat : $CURRENT_ALBUM_DATA['category']),
                    '{MODIFY_LNK}'     => $lang_common['album_properties'],
                    '{MODIFY_ICO}'     => cpg_fetch_icon('modifyalb', 1),
                    '{PARENT_CAT_LNK}' => $lang_common['parent_category'],
                    '{PARENT_CAT_ICO}' => cpg_fetch_icon('category', 1),
                    '{EDIT_PICS_LNK}'  => $lang_common['edit_files'],
                    '{EDIT_PICS_ICO}'  => cpg_fetch_icon('edit', 1),
                    '{ALBUM_MGR_LNK}'  => $lang_common['album_manager'],
                    '{ALBUM_MGR_ICO}'  => cpg_fetch_icon('alb_mgr', 1),
                );
            } else {
                $param = array();
            }
            $param['{ALBUM_NAME}'] = $album_name;
            // Plugin Filter: allow plugin to modify or add tags to process
            $param = CPGPluginAPI::filter('theme_thumbnails_title', $param);
            $title = template_eval($template_thumb_view_title_row, $param);
        } elseif ($aid == 'favpics' && $CONFIG['enable_zipdownload'] > 0) { //Lots of stuff can be added here later
            $param = array(
                '{ALBUM_ID}'   => $aid,
                '{ALBUM_NAME}' => $album_name,
                '{DOWNLOAD_ZIP}' => cpg_fetch_icon ('zip', 2) . $lang_thumb_view['download_zip'],
            );
            // Plugin Filter: allow plugin to modify or add tags to process
            $param = CPGPluginAPI::filter('theme_thumbnails_title', $param);        
            $title = template_eval($template_fav_thumb_view_title_row, $param);
        } else {
            $title = $album_name;
        }

        CPGPluginAPI::action('theme_thumbnails_wrapper_start', null);

        if ($mode == 'thumb') {
            starttable('100%', $title, $thumbcols);
        } else {
            makejumpbox();
            starttable('100%');
        }

        echo $header;

        $i = 0;
        global $thumb;  // make $thumb accessible to plugins
        foreach($thumb_list as $thumb) {
            $i++;
            if ($mode == 'thumb') {
                if (in_array($aid, $album_types['albums'])) {
                    $params = array(
                        '{CELL_WIDTH}' => $cell_width,
                        '{LINK_TGT}'   => "thumbnails.php?album={$thumb['aid']}",
                        '{THUMB}'      => $thumb['image'],
                        '{CAPTION}'    => $thumb['caption'],
                        '{ADMIN_MENU}' => $thumb['admin_menu'],
                    );
                } else {
                    // determine if thumbnail link targets should open in a pop-up
                    if ($CONFIG['thumbnail_to_fullsize'] == 1) { // code for full-size pop-up
                        if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
                           $target = 'javascript:;" onclick="alert(\''.sprintf($lang_errors['login_needed'],'','','','').'\');';
                        } elseif (USER_ID && USER_ACCESS_LEVEL <= 2) {
                            $target = 'javascript:;" onclick="alert(\''.sprintf($lang_errors['access_intermediate_only'],'','','','').'\');';
                        } else {
                           $target = 'javascript:;" onclick="MM_openBrWindow(\'displayimage.php?pid=' . $thumb['pid'] . '&fullsize=1\',\'' . uniqid(rand()) . '\',\'scrollbars=yes,toolbar=no,status=no,resizable=yes,width=' . ((int)$thumb['pwidth']+(int)$CONFIG['fullsize_padding_x']) .  ',height=' .   ((int)$thumb['pheight']+(int)$CONFIG['fullsize_padding_y']). '\');';
                        }
                    } elseif ($aid == 'random') {
                        $target = "displayimage.php?pid={$thumb['pid']}$uid_link#top_display_media";
                    } elseif ($aid == 'lastcom' || $aid == 'lastcomby') {
                        $page = cpg_get_comment_page_number($thumb['msg_id']);
                        $page = (is_numeric($page)) ? "&amp;page=$page" : '';
                        $target = "displayimage.php?album=$aid$cat_link$date_link&amp;pid={$thumb['pid']}$uid_link&amp;msg_id={$thumb['msg_id']}$page#comment{$thumb['msg_id']}";
                    } else {
                        $target = "displayimage.php?album=$aid$cat_link$date_link&amp;pid={$thumb['pid']}$uid_link#top_display_media";
                    }
                    $params = array(
                        '{CELL_WIDTH}' => $cell_width,
                        '{LINK_TGT}'   => $target,
                        '{THUMB}'      => $thumb['image'],
                        '{CAPTION}'    => $thumb['caption'],
                        '{ADMIN_MENU}' => $thumb['admin_menu'],
                    );
                }

            } else {  // mode != 'thumb'

                // Used for mode = 'user' from list_users() in index.php
                $params = array(
                    '{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}'   => "index.php?cat={$thumb['cat']}",
                    '{THUMB}'      => $thumb['image'],
                    '{CAPTION}'    => $thumb['caption'],
                    '{ADMIN_MENU}' => '',
                );

            }

            // Plugin Filter: allow plugin to modify or add tags to process
            $params = CPGPluginAPI::filter('theme_display_thumbnails_params', $params);
            echo template_eval($thumb_cell, $params);

            if ((($i % $thumbcols) == 0) && ($i < count($thumb_list))) {
                echo $row_separator;
            }
        } // foreach $thumb

        unset($thumb);  // unset $thumb to avoid conflicting with global

        for (;($i % $thumbcols); $i++) {
            echo $empty_cell;
        }
        $footer = CPGPluginAPI::filter('theme_thumbnails_footer', $footer); 
        echo $footer;

        if ($display_tabs) {
            $params = array(
                '{THUMB_COLS}' => $thumbcols,
                '{TABS}'       => $tabs_html,
            );
            echo template_eval($tabs, $params);
        }

        endtable();
        CPGPluginAPI::action('theme_thumbnails_wrapper_end', null);
        echo $spacer;
    }

    function bridge_extender()
    {
        global $cpg_udb;
    
        eval('
        
        class new_udb_class extends '. get_class($cpg_udb) . ' {
    
            function new_udb_class() {}
    
    function list_users_query(&$user_count)
    {
        global $CONFIG, $FORBIDDEN_SET, $PAGE;
        $superCage = Inspekt::makeSuperCage();
        $getLetter = $superCage->get->getAlpha("letter");

        $f =& $this->field;

        if ($FORBIDDEN_SET != "") {
            $forbidden_with_icon = "AND (1 $FORBIDDEN_SET or p.galleryicon=p.pid)";
            $forbidden = "AND (1 $FORBIDDEN_SET)";
        } else {
            $forbidden_with_icon = "";
            $forbidden = "";
        }

        // Get the total number of users with albums
        $sql  = "SELECT NULL ";
        $sql .= "FROM {$CONFIG[\'TABLE_ALBUMS\']} AS p ";
        $sql .= " INNER JOIN {$CONFIG[\'TABLE_PICTURES\']} AS pics ON pics.aid = p.aid ";
        $sql .= " INNER JOIN ".$this->usertable." AS u ON p.owner = u.{$f[\'user_id\']} ";
        $sql .= "WHERE ( category > " . FIRST_USER_CAT . " $forbidden) ";
        if ($l = $getLetter) $sql .= "AND UPPER({$f[\'username\']}) LIKE \'$l%\' ";
        $sql .= "GROUP BY category;";
        $result = cpg_db_query($sql);
        $user_count = mysql_num_rows($result);

        if ($user_count == 0) {
            return false;
        }

        mysql_free_result($result);

        $users_per_page = $CONFIG[\'thumbcols\'] * $CONFIG[\'thumbrows\'];
        $totalPages = ceil($user_count / $users_per_page);
        if ($PAGE > $totalPages) $PAGE = 1;
        $lower_limit = ($PAGE-1) * $users_per_page;

        if ($this->can_join_tables){
            
            $sql  = "SELECT {$f[\'user_id\']} as user_id,";
            $sql .= "{$f[\'username\']} as user_name,";
            $sql .= "COUNT(DISTINCT a.aid) as alb_count,";
            $sql .= "COUNT(DISTINCT pid) as pic_count,";
            $sql .= "MAX(pid) as thumb_pid, ";
            $sql .= "MAX(galleryicon) as gallery_pid ";
            $sql .= "FROM {$CONFIG[\'TABLE_ALBUMS\']} AS a ";
            $sql .= "INNER JOIN {$this->usertable} as u on u.{$f[\'user_id\']} = a.category - " . FIRST_USER_CAT . " ";
            $sql .= "INNER JOIN {$CONFIG[\'TABLE_PICTURES\']} AS p ON p.aid = a.aid ";
            $sql .= "WHERE ((isnull(approved) or approved=\'YES\') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon ";
            if ($l = $getLetter) $sql .= "AND UPPER({$f[\'username\']}) LIKE \'$l%\' ";
            $sql .= "GROUP BY category ";
            $sql .= "ORDER BY category ";
            $sql .= "LIMIT $lower_limit, $users_per_page ";
    
    
            $result = cpg_db_query($sql);
    
            while ($row = mysql_fetch_array($result)) {
                $users[] = $row;
            }
            mysql_free_result($result);
            
        } else {
            // This is the way we collect the data without a direct join to the forums user table

            // This query determines which users we need to collect usernames of - ie just those which have albums with pics
            // and are on the page we are looking at
            $sql  = "SELECT category - 10000 as user_id ";
            $sql .= "FROM {$CONFIG[\'TABLE_ALBUMS\']} AS a ";
            $sql .= "INNER JOIN {$CONFIG[\'TABLE_PICTURES\']} AS p ON p.aid = a.aid ";
            $sql .= "WHERE ((isnull(approved) or approved=\"YES\") ";
            $sql .= "AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY category ";
            $sql .= "LIMIT $lower_limit, $users_per_page ";
    
            $result = cpg_db_query($sql);
            
            $user_ids = array();
            
            while ($row = mysql_fetch_array($result)) {
                $user_ids[] = $row["user_id"];
            }
            mysql_free_result($result);
            
            $userlist = implode(",", $user_ids);
            
            // This query collects an array of user_id -> username mappings for the user ids collected above 
            $sql = "SELECT {$this->field[\'user_id\']} AS user_id, {$this->field[\'username\']} AS user_name FROM {$this->usertable} WHERE {$this->field[\'user_id\']} IN ($userlist)";
            if ($l = $getLetter) $sql .= " AND UPPER({$f[\'username\']}) LIKE \'$l%\' ";
            $result = cpg_db_query($sql, $this->link_id);
        
            $userdata = array();
            
            while ($row = mysql_fetch_array($result)) {
                $userdata[$row["user_id"]] = $row["user_name"];
            }
            
            mysql_free_result($result);
            
            // This is the main query, similar to the one in the join implementation above but without the join to the user table
            // We use the pics owner_id field as the user_id instead of using category - 10000 as the user_id
            $sql  = "SELECT owner_id as user_id,";
            $sql .= "COUNT(DISTINCT a.aid) as alb_count,";
            $sql .= "COUNT(DISTINCT pid) as pic_count,";
            $sql .= "MAX(pid) as thumb_pid, ";
            $sql .= "MAX(galleryicon) as gallery_pid ";
            $sql .= "FROM {$CONFIG[\'TABLE_ALBUMS\']} AS a ";
            $sql .= "INNER JOIN {$CONFIG[\'TABLE_PICTURES\']} AS p ON p.aid = a.aid ";
            $sql .= "WHERE ((isnull(approved) or approved=\'YES\') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY category ";
            $sql .= "ORDER BY category ";
    
            $result = cpg_db_query($sql);
            
            // Here we associate the username with the album details.
            while ($row = mysql_fetch_array($result)) {
                if (strtolower($userdata[$row["user_id"]]{0}) == strtolower($getLetter)) $users[] = array_merge($row, array("user_name" => $userdata[$row["user_id"]]));
            }
            
            mysql_free_result($result);
        }

        return $users;
    }
}
        ');
    
        $vars = get_object_vars($cpg_udb);
        $cpg_udb = new new_udb_class;
        foreach ($vars as $name => $value) $cpg_udb->$name = $value;
    }


}
?>