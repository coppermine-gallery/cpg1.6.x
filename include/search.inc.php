<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2021 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * include/search.inc.php
 * @since  1.6.10
 */

defined('IN_COPPERMINE') or die('Not in Coppermine...');

// encoding match for workaround

$multibyte_charset = 'utf-8, big5, shift_jis, euc-kr, gb2312';

$charset = $CONFIG['charset'] == 'language file' ? $GLOBALS['lang_charset'] : $CONFIG['charset'];

$sort_array = array('na' => 'filename ASC , pid ASC', 'nd' => 'filename DESC , pid ASC', 'ta'=>'title ASC , pid ASC', 'td'=>'title DESC , pid ASC', 'da' => 'pid ASC', 'dd' => 'pid DESC', 'pa' => 'position ASC , pid ASC', 'pd' => 'position DESC , pid ASC');
$sort_code = isset($USER['sort'])? $USER['sort'] : $CONFIG['default_sort_order'];
$sort_order = isset($sort_array[$sort_code]) ? $sort_array[$sort_code] : $sort_array[$CONFIG['default_sort_order']];

$allowed = array('title', 'caption', 'keywords', 'filename', 'pic_raw_ip', 'pic_hdr_ip', 'user1', 'user2', 'user3', 'user4');

global $cpg_udb;
// Use actual column name for search by owner name
if ($cpg_udb->can_join_tables && isset($USER['search']['params']['owner_name'])) {
    $USER['search']['params'][$cpg_udb->field['username']] = true;
    $allowed[] = $cpg_udb->field['username'];
}

$mb_charset = stristr($multibyte_charset, $charset);

$search_string = str_replace('&quot;', '"', $search_string);
$search_string = str_replace('\'', '"', $search_string);
$search_string = preg_replace('/&.*;/i', '', $search_string);
$search_string = Inspekt::getEscaped($search_string);

if (!$mb_charset) {
    $search_string = preg_replace('/[^0-9a-z %]/i', '', $search_string);
}

if (!isset($USER['search']['params'])) {
	$USER['search']['params']['title'] = $USER['search']['params']['caption'] = $USER['search']['params']['keywords'] = $USER['search']['params']['filename'] = 1;
	$USER['search']['params']['newer_than'] = $USER['search']['params']['older_than'] = '';
}
if (!isset($USER['search']['params']['newer_than'])) $USER['search']['params']['newer_than'] = '';
if (!isset($USER['search']['params']['older_than'])) $USER['search']['params']['older_than'] = '';

if ($superCage->get->keyExists('album') && $superCage->get->getAlpha('album') == 'search') {
    $search_params = $USER['search'];
} else {
    //put all original $_POST vars in $search_params, don't know if this could be used???
    $search_params = $superCage->post->_source;
}

if (!isset($search_params['params']['type'])) $search_params['params']['type'] = 'AND';

$type = $search_params['params']['type'] == 'OR' ? " OR " : " AND ";

if (isset($search_params['params']['pic_raw_ip'])) $search_params['params']['pic_hdr_ip']  = $search_params['params']['pic_raw_ip'];

$sql = '';

if ($search_string && isset($search_params['params'])) {
        $sections = array();
        $albcat_terms = array(); // For Album & Category Title Search: populated as needed
        if ($search_params['params']['type'] == 'regex') {
                $fields = array();
                $search_string = preg_replace('/[^\w\+\*\?\{\,\}\|\(\)\\\^\$\[\]\:\<\>\-\.]/','',$search_string);
                $search_string = addslashes($search_string);
                if ($superCage->get->keyExists('album_title') || $superCage->get->keyExists('category_title')) $albcat_terms[] = " REGEXP '$search_string'";
                foreach ($search_params['params'] as $param => $value) {
                        if (in_array($param, $allowed)) $fields[] = "$param REGEXP '$search_string'";
                        else list($fields) = CPGPluginAPI::filter('custom_search_param', array($fields, $param, "REGEXP '$search_string'", 'REGEXP'));
                }
                $sql .= count($fields) ? ('((' . implode(' OR ', $fields) . '))') : '';
         } else {
                $search_string = strtr($search_string, array('_' => '\_', '%' => '\%', '*' => '%'));

                $split_search = explode('"',$search_string);
                foreach ($split_search as $index => $string) {
                        if (($index & 1) && strlen($string)) {
                                $fields = array();
                                if ($superCage->get->keyExists('album_title') || $superCage->get->keyExists('category_title')) $albcat_terms[] = " LIKE '%$string%'";
                                foreach ($search_params['params'] as $param => $value) {
                                        if (in_array($param, $allowed)) $fields[] = "$param LIKE '%$string%'";
                                        else list($fields) = CPGPluginAPI::filter('custom_search_param', array($fields, $param, "LIKE '%$string%'", trim($type)));
                                }
                                $sections[] = count($fields) ? '(' . implode(' OR ', $fields) . ')' : '';
                        } elseif (strlen($string)) {
                                $words = explode(' ', $string);
                                foreach ($words as $word) {
                                        if (strlen($word)) {
                                                $word = addslashes($word);
                                                $fields = array();
                                                if ($superCage->get->keyExists('album_title') || $superCage->get->keyExists('category_title')) $albcat_terms[] = " LIKE '%$word%'";
                                                foreach ($search_params['params'] as $param => $value) {
                                                        if (in_array($param, $allowed)) $fields[] = ($param == 'title' ? 'p.title' : $param)." LIKE '%$word%'";
                                                        else list($fields) = CPGPluginAPI::filter('custom_search_param', array($fields, $param, "LIKE '%$word%'", trim($type)));
                                                }
                                                $sections[] = count($fields) ? '(' . implode(' OR ', $fields) . ')' : '';
                                        }
                                }
                        }
                }

                $sql .= count($sections) ? '(' . implode($type, $sections) . ')' : '0';
        }

        // Add to allowed array after initial processing, to allow for custom processing
        $allowed = CPGPluginAPI::filter('custom_search_params_allowed', $allowed);

        $join_addl_tables = '';
        if ($cpg_udb->can_join_tables) {
            $join_addl_tables = CPGPluginAPI::filter('custom_search_query_join', $join_addl_tables);
        }

        $sql .= Inspekt::isInt($USER['search']['params']['newer_than']) ? ' AND ( ctime > '.time().' - '.( $USER['search']['params']['newer_than'] * 60*60*24).')' : '';
        $sql .= Inspekt::isInt($USER['search']['params']['older_than']) ? ' AND ( ctime < '.time().' - '.( $USER['search']['params']['older_than'] * 60*60*24).')' : '';
        $sql .=  " AND approved = 'YES' $FORBIDDEN_SET";

        if ($superCage->get->keyExists('album_title')) {
                $album_query = "SELECT aid, title, description FROM `{$CONFIG['TABLE_ALBUMS']}` AS p"
                        ." WHERE (`title` " . implode(" $type `title` ",$albcat_terms) . ") $FORBIDDEN_SET";
                $result = cpg_db_query($album_query);
                if ($result->numRows() > 0) {
                        starttable('100%', $lang_meta_album_names['album_search'],2);
                        while ($alb = $result->fetchAssoc()) {
                                $thumb_query = "SELECT filepath, filename, url_prefix, pwidth, pheight "
                                        ." FROM `{$CONFIG['TABLE_PICTURES']}` "
                                        ." WHERE (`aid` = '{$alb['aid']}') "
                                        ." AND approved = 'YES' "
                                        ." ORDER BY `pid` DESC";
                                $thumb_result = cpg_db_query($thumb_query);
                                $thumb = $thumb_result->fetchAssoc(true);
                                // TODO: query above only pulls in last_pid in each album, not correct album thumb as set by user

                                $thumb_url = get_pic_url($thumb, 'thumb');
                                $thumb_size = compute_img_size($thumb['pwidth'], $thumb['pheight'], $CONFIG['alb_list_thumb_size'], true, 'cat_thumb');
                                ?>
                                <tr>
                                  <td colspan="3" height="1" valign="top" class="tableh2">
                                    <span class="alblink"><a href="<?php printf("thumbnails.php?album=%u", $alb['aid']); ?>"><?php echo $alb['title'] ?></a></span>
                                  </td>
                                </tr>
                                <tr>
                                        <td colspan="3">
                                                <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                                        </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="<?php printf("thumbnails.php?album=%u", $alb['aid']); ?> ">
                                        <img src="<?php echo $thumb_url?>"  class="image" <?php echo $thumb_size['geom'] ?> border="0" alt="<?php echo $thumb['filename'] ?>">
                                    </a>
                                  </td>
                                  <td width="100%" valign=top>
                                    <?php if ($alb['description'] == "") { echo '&nbsp;'; } else { echo $alb['description']; } ?>
                                  </td>
                                </tr>
                                <?php
                        }
                        endtable();
                        echo '<br/>';
                }
                $result->free();
        }

        if ($superCage->get->keyExists('category_title')) {
                $category_query = "SELECT cid, name FROM `{$CONFIG['TABLE_CATEGORIES']}` WHERE (`name` " . implode(" $type `name` ",$albcat_terms) . ')';
                $result = cpg_db_query($category_query);
                if ($result->numRows() > 0) {
                        starttable('100%', $lang_meta_album_names['category_search'],2);
                        while ($cat = $result->fetchAssoc()) {
                                $album_q = "SELECT aid, title FROM `{$CONFIG['TABLE_ALBUMS']}` AS p WHERE (`category` = '{$cat['cid']}') $FORBIDDEN_SET ORDER BY `aid` DESC LIMIT 1";
                                $album_r = cpg_db_query($album_q);
                                $album = $album_r->fetchArray(true);

                                // TODO: This is weird.  It seems to pull in the largest aid's thumb for the category image?
                                $thumb_query = "SELECT filepath, filename, url_prefix, pwidth, pheight "
                                        ." FROM `{$CONFIG['TABLE_PICTURES']}` "
                                        ." WHERE (`aid` = '{$album['aid']}') "
                                        ." AND approved = 'YES' "
                                        ." ORDER BY `pid` DESC";
                                $thumb_result = cpg_db_query($thumb_query);
                                $thumb = $thumb_result->fetchAssoc(true);
                                $thumb_url = get_pic_url($thumb, 'thumb');
                                $thumb_size = compute_img_size($thumb['pwidth'], $thumb['pheight'], $CONFIG['alb_list_thumb_size'], true, 'cat_thumb');

                                ?>
                                <tr>
                                  <td colspan="3" height="1" valign="top" class="tableh2">
                                    <span class="alblink"><a href="<?php printf("index.php?cat=%u", $cat['cid']); ?>"><?php echo $cat['name'] ?></a></span>
                                  </td>
                                </tr>
                                <tr>
                                        <td colspan="3">
                                                <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                                        </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="<?php printf("thumbnails.php?album=%u", $album['aid']); ?> ">
                                        <img src="<?php echo $thumb_url?>"  class="image" <?php echo $thumb_size['geom'] ?> border="0" alt="<?php echo $thumb['filename'] ?>"><br/>
                                        <?php if ($album['title'] == "") { echo '&nbsp;'; } else { printf("<a href='thumbnails.php?album=%u'>{$album['title']}</a>", $album['aid']); } ?>
                                    </a>
                                  </td>
                                </tr>
                                <?php

                        }
                        endtable();
                        echo '<br/>';
                }
                $result->free();
        }

        // Make sure they selected some parameter other than album/category
        $other = 0;
        foreach ($search_params['params'] as $param => $value) {
            if (in_array($param, $allowed)) {
                $other = 1;
            }
        }


        if (!$other) {
            $sql = '0';
        }

        $join_user_table = $cpg_udb->can_join_tables ? "LEFT JOIN {$cpg_udb->usertable} AS u ON p.owner_id = u.{$cpg_udb->field['user_id']}" : "";
        $user_column = $cpg_udb->can_join_tables ? ", u.{$cpg_udb->field['username']} AS owner_name" : "";
        if (defined('DISPLAYIMAGE_PHP') && $get_pic_pos == true) {

            $sort_order_parts = explode(" ", $sort_order);
            $criteria = $sort_order_parts[0];
            $direction = $sort_order_parts[1];

            $pid = $superCage->get->getInt('pid');

            $query = "SELECT $criteria FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = $pid";
            $result = cpg_db_query($query);
            $criteria_pid = $result->result(0, 0, true);

            if ($direction == "ASC") {
                $direction = "<";
            } elseif ($direction == "DESC") {
                $direction = ">";
            } else {
                $direction = "";
            }

            $sort_order = "$criteria $direction '$criteria_pid' OR $criteria = '$criteria_pid' AND p.pid < $pid";

            $query = "SELECT COUNT(DISTINCT p.pid) FROM {$CONFIG['TABLE_PICTURES']} AS p
                $join_user_table
                $join_addl_tables
                WHERE $sql
                AND ($sort_order)";

                $result = cpg_db_query($query);

                list($pos) = $result->fetchRow(true);

        } else {

            $query = "SELECT DISTINCT p.*{$user_column} FROM {$CONFIG['TABLE_PICTURES']} AS p
            $join_user_table
            $join_addl_tables
            WHERE " . $sql;

            $temp = str_replace("SELECT DISTINCT p.*{$user_column}", 'SELECT COUNT(DISTINCT p.pid)', $query);
            $result = cpg_db_query($temp);
            $row = $result->fetchRow(true);
            $count = $row[0];

            $query .= " ORDER BY $sort_order $limit";
            $result = cpg_db_query($query);
            $rowset = cpg_db_fetch_rowset($result, true);

            if ($set_caption) {
                build_caption($rowset);
            }

        }

}
//EOF