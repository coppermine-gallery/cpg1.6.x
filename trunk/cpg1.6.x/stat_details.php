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

// Todo list (stuff the hasn't been implemented yet):
// * overall stats taking AID into account
// * Allow admin to delete single votes and corresponding stats entry (UI partly created and commented out. Tricky stuff in delete.php not even started)
// * Add stats about users, numbers of albums and other things stat lovers constantly request

define('IN_COPPERMINE', true);
define('STAT_DETAILS_PHP', true);
require_once('include/init.inc.php');

// initialize the vars - start
$charset = $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'];
$icon_array['stats'] = cpg_fetch_icon('stats', 1);
$icon_array['os'] = cpg_fetch_icon('client', 1);
$icon_array['browser'] = cpg_fetch_icon('browser', 1);
$icon_array['vote'] = cpg_fetch_icon('top_rated', 1);
$icon_array['hits'] = cpg_fetch_icon('info', 1);
$icon_array['ok'] = cpg_fetch_icon('ok',2);

// initialize the vars - end

// sanitize the GET parameters - start
    //$pid = $_GET['pid'] ? (int)$_GET['pid'] : 0;
    if ($superCage->get->keyExists('pid')){
        $pid = $superCage->get->getInt('pid');
    } else {
        $pid = 0;
    }
    $type_allowed = array('vote','hits','total','blank','users');
    $amount_allowed = array(20,50,100,200);
        $get_type = $superCage->get->getAlpha('type');
    //if (in_array($_GET['type'],$type_allowed) == TRUE) {
    if (in_array($get_type,$type_allowed) == TRUE) {
      //$type = $_GET['type'];
      $type = $get_type;
    } else {
      $type = 'blank';
    }

    if ($type == 'vote') {
        $db_fields = array('sdate', 'ip', 'rating', 'referer', 'browser', 'os', 'uid');
        $icon = array('sdate' => 'calendar', 'ip' => 'ip', 'rating' => 'top_rated', 'referer' => 'web', 'browser' => 'browser', 'os' => 'client', 'uid' => 'my_profile');
    }
    if ($type == 'hits') {
        $db_fields = array('sdate', 'ip', 'uid', 'search_phrase', 'referer', 'browser', 'os');
        $icon = array('sdate' => 'calendar', 'ip' => 'ip', 'uid' => 'my_profile', 'search_phrase' => 'search', 'referer' => 'web', 'browser' => 'browser', 'os' => 'client');
    }

    foreach($db_fields as $value) {
        //$$value = $_GET[$value] ? (int)$_GET[$value] : 0;
        if ($superCage->get->keyExists($value)){
            $$value = $superCage->get->getInt($value);
        } else {
            $$value = 0;
        }
    }

    /*if (isset($_GET['sort'])) {
        if (in_array($_GET['sort'],$db_fields) == TRUE || $_GET['sort'] == 'file') {
            $sort = $_GET['sort'];*/
    if ($superCage->get->keyExists('sort')){
            $get_sort = $superCage->get->getAlpha('sort');
            if (in_array($get_sort,$db_fields) == TRUE || $get_sort == 'file') {
                    $sort = $get_sort;
        } else {
            $sort = 'sdate';
        }
    } else {
        $sort = 'sdate';
    }

    /*if (isset($_GET['dir'])) {
        if ($_GET['dir'] == 'asc') {*/
    if ($superCage->get->keyExists('dir')){
            if ($superCage->get->getAlpha('dir') == 'asc') {
            $dir = 'asc';
        } else {
            $dir = 'desc';
        }
    }

    /*if (isset($_GET['hide_internal'])) {
        if ($_GET['hide_internal'] == '0') {*/
    if ($superCage->get->keyExists('hide_internal')) {
            if ($superCage->get->getInt('hide_internal') == 0) {
            $hide_internal = 0;
        } else {
            $hide_internal = 1;
        }
    } else {
        $hide_internal = 0;
    }

    //if (isset($_GET['date_display'])) {
    if ($superCage->get->keyExists('date_display')) {
            $get_date_display = $superCage->get->getInt('date_display');
        if ($get_date_display == 0) {
            $date_display = 0;
            $date_display_fmt = $lang_date['album'];
        } elseif($get_date_display == 1) {
            $date_display = 1;
            $date_display_fmt = $lang_date['lastcom'];
        } elseif($get_date_display == 2) {
            $date_display = 2;
            $date_display_fmt = $lang_date['log'];
        } elseif($get_date_display == 3) {
            $date_display = 3;
            $date_display_fmt = '%Y-%m-%d %H:%M:%S';
        } else {
            $date_display = 4;
            $date_display_fmt = '%Y-%m-%d';
        }
    } else {
        $date_display = 4;
        $date_display_fmt = '%Y-%m-%d';
    }

    //if ($_GET['mode'] == 'fullscreen') {
    if ($superCage->get->getAlpha('mode') == 'fullscreen'){
        $mode = 'fullscreen';
    } else {
        $mode = 'embedded';
    }

    //if ($_GET['file'] == '1') {
    if ($superCage->get->getInt('file') == 1){
        $file = '1';
    } else {
        $file = '0';
    }

    /*if ($_GET['amount'] == (int)$_GET['amount'] && in_array($_GET['amount'],$amount_allowed) == TRUE) {
        $amount = $_GET['amount'];*/
    $get_amount = $superCage->get->getInt('amount');
    if (in_array($get_amount,$amount_allowed)) {
            $amount = $get_amount;
    } else {
        $amount = 50; // default value for amount of records
    }

    /*if ($_GET['page'] == (int)$_GET['page'] && $_GET['page'] != '') {
        $page = $_GET['page'];*/
    $get_page = $superCage->get->getInt('page');
    if ($get_page) {
        $page = $get_page;
    } else {
        $page = 1;
    }

// sanitize the GET parameters - end

// end the script if we just need a blank page
    if ($type == 'blank') {
        die();
    }

// perform database write queries if needed - start
    if (GALLERY_ADMIN_MODE) {
        $configChangesApplied = '';
        if ($superCage->get->getAlpha('mode') == 'editForm') {
            $get_hit_details = $superCage->get->getInt('hit_details');
            if ($get_hit_details != $CONFIG['hit_details'] && $superCage->get->getEscaped('go') != '') {
                cpg_config_set('hit_details', $get_hit_details);
                $configChangesApplied = $lang_stat_details_php['upd_success'];
            }
            $get_vote_details = $superCage->get->getInt('vote_details');
            if ($get_vote_details != $CONFIG['vote_details'] && $superCage->get->getEscaped('go') != '') {
                cpg_config_set('vote_details', $get_vote_details);
                $configChangesApplied = $lang_stat_details_php['upd_success'];
            }
        }
        if ($superCage->get->getEscaped('emptyhitstats') == TRUE) {
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_HIT_STATS']}");
            $configChangesApplied = $lang_stat_details_php['upd_success'];
        }
        if ($superCage->get->getEscaped('emptyvotestats') == TRUE) {
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_VOTE_STATS']}");
            $configChangesApplied = $lang_stat_details_php['upd_success'];
        }

    }
// perform database write queries if needed - end

// output the header depending on the mode (fullscreen vs embedded) - start
    if ($mode == 'fullscreen') {
        pageheader($lang_stat_details_php['title']);
        // display a menu
        print <<< EOT
              <h1>{$icon_array['stats']}{$lang_stat_details_php['title']}</h1>
              <div class="buttonlist">
                <ul>
                    <li><a href="#os"><span>{$icon_array['os']}{$lang_stat_details_php['stats_by_os']}</span></a></li>
                    <li><a href="#browser"><span>{$icon_array['browser']}{$lang_stat_details_php['stats_by_browser']}</span></a></li>
EOT;
        if (GALLERY_ADMIN_MODE) {
            if ($type != 'hits') {
                print '<li><a href="'.cpgGetScriptNameParams('type').'type=hits#details"><span>'.$icon_array['hits'].$lang_stat_details_php['hits'].'</span></a></li>';
            } else {
                print '<li><a href="#details"><span>'.$icon_array['hits'].$lang_stat_details_php['hits'].'</span></a></li>';
            }
            if ($type != 'vote') {
                print '<li><a href="'.cpgGetScriptNameParams('type').'type=vote#details"><span>'.$icon_array['vote'].$lang_stat_details_php['vote'].'</span></a></li>';
            } else {
                print '<li><a href="#details"><span>'.$icon_array['vote'] . $lang_stat_details_php['vote'].'</span></a></li>';
            }
            if ($type != 'users') {
                //print '<li><a href="'.cpgGetScriptNameParams('type').'type=users" title=""><span>'.$lang_stat_details_php['users'].'</span></a></li>';
            }
            if ($pid != '') {
                print '<li><a href="displayimage.php?pid='.$pid.'"><span>'.$lang_stat_details_php['back_to_intermediate'].'</span></a></li>';
            }
        } // gallery_admin_mode - end
        print <<< EOT
                  </ul>
              </div>
EOT;
        $statsTableWidth = '100%';
    } else { // mode=fullscreen ends, mode=embedded starts
        $statsTableWidth = '-1';
        print  <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">
<head>
    <title>{$CONFIG['gallery_name']} - {$lang_stat_details_php['title']}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=$charset" />
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" href="css/coppermine.css" type="text/css" />
    <link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" type="text/css" />
    <script type="text/javascript" src="js/scripts.js"></script>
</head>
<body class="tableb">
<div class="admin_menu_wrapper">
</div>
EOT;

    print '<div style="clear:left;"></div>'.$LINEBREAK.'</div>';
    } // mode=embedded ends
// output the header depending on the mode (fullscreen vs embedded) - end

// include the stats function - start
require_once('include/stats.inc.php');
// include the stats function - end

// output the stuff the user can see - start
if ($type == 'vote' && $pid != '') { // type == vote start

    $query = "SELECT rating, count(rating) AS totalVotes FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE pid=$pid GROUP BY rating";
    $result = cpg_db_query($query);

    $rateArr = array();

    print $LINEBREAK.'<a name="details"></a>'.$LINEBREAK;
    starttable($statsTableWidth, $lang_stat_details_php['stats'], 3);

    $totalVotesSum = 0;

    while ($row = mysql_fetch_array($result)) {
          $voteArr[$row['rating']] = $row['totalVotes'];
          $totalVotesSum = $totalVotesSum + $row['totalVotes'];
          $loopCounter = 0;
    }
    
    if (defined('THEME_HAS_RATING_GRAPHICS')) {
        $prefix = $THEME_DIR;
    } else {
        $prefix = '';
    }

    for ($i = 1; $i <= $CONFIG['rating_stars_amount']; $i++){
        $voteArr[$i] = isset($voteArr[$i]) ? $voteArr[$i] : 0;
        if ($loop_counter == 0) {
            $row_style_class = 'tableb';
        } else {
            $row_style_class = 'tableb tableb_alternate';
        }
        $loop_counter++;
        if ($loop_counter > 1) {
            $loop_counter = 0;
        }
        //build the rating stars
        $rating_images = '';
        for($i2 = 1; $i2 <= $CONFIG['rating_stars_amount']; $i2++){
            if($i2 <= $i){
                $rating_images .= '<img src="' . $prefix . 'images/rate_full.png" align="left" alt=""/>';
            }else{
                $rating_images .= '<img src="' . $prefix . 'images/rate_empty.png" align="left" alt=""/>';
            }
        }
        echo <<<EOT
        <tr>
            <td class="{$row_style_class}">
                $rating_images
            </td>
            <td class="{$row_style_class}">
EOT;
        print theme_display_bar($voteArr[$i],$totalVotesSum,200,'', '', ' '.$lang_stat_details_php['votes']);
        echo <<<EOT
            </td>
        </tr>

EOT;
      }
  endtable();
  print '<br />' . $LINEBREAK;

  } // type == vote end
  if ($type == 'hits') { // type == hits start
      // do nothing here, as the regular user isn't supposed to see the hit stats
  } // type == hits end
  individualStatsByOS($pid,$type,$statsTableWidth);
  individualStatsByBrowser($pid,$type,$statsTableWidth);
// output the stuff the user can see - end

// output the admin-only stuff - start
if (GALLERY_ADMIN_MODE) { // admin is logged in - start
      print <<< EOT
      <form method="get" action="{$CPG_PHP_SELF}#details" name="editForm" id="cpgform">
      <input type="hidden" name="type" value="{$type}" />
      <input type="hidden" name="pid" value="{$pid}" />
      <input type="hidden" name="sort" value="{$sort}" />
      <input type="hidden" name="dir" value="{$dir}" />
      <input type="hidden" name="mode" value="{$mode}" />
      <input type="hidden" name="page" value="{$page}" />
  <script type="text/javascript">
    <!--//
    function sendForm() {
      document.editForm.submit();
    }

    function sortthetable(sortcriteria,direction) {
      document.editForm.sort.value = sortcriteria;
      document.editForm.dir.value= direction;
      sendForm();
    }

    function confirmDelete() {
      if (document.editForm.reset_selected.checked = true) {
        check = confirm('THIS FEATURE HAS NOT BEEN IMPLEMENTED YET!!!!! {$lang_stat_details_php['reset_votes_individual_confirm']}');
        if (check == true) {
          //document.editForm.submit();
        } else {
          document.editForm.reset_selected.checked = false;
        }
      }
    }
    //-->
  </script>
EOT;
      if ($sort == 'file') {
          $sort = 'pid';
      }

      if ($type == 'vote') {
          $queryTable = $CONFIG['TABLE_VOTE_STATS'];
      } elseif ($type == 'hits') {
          $queryTable = $CONFIG['TABLE_HIT_STATS'];
      }
      if ($pid != '') {
          $queryWhere = 'pid='.$pid;
          $countWhere = 'WHERE pid='.$pid;
      } else {
          $queryWhere = $queryTable . '.pid = ' . $CONFIG['TABLE_PICTURES'] . '.pid';
          $countWhere = '';
          $querySelect = ','.$CONFIG['TABLE_PICTURES'].'.filepath,
                           '.$CONFIG['TABLE_PICTURES'].'.filename,
                           '.$CONFIG['TABLE_PICTURES'].'.pwidth,
                           '.$CONFIG['TABLE_PICTURES'].'.pheight,
                           '.$CONFIG['TABLE_PICTURES'].'.url_prefix';
          $queryFrom = ','.$CONFIG['TABLE_PICTURES'];
      }
      $query = "SELECT COUNT(pid) FROM $queryTable $countWhere";
      $result = cpg_db_query($query);
      $nbEnr = mysql_fetch_array($result);
      $count = $nbEnr[0];
      mysql_free_result($result);

      // Calculation for pagination tabs and query limit
      $numPages = ceil($count/$amount);
      $start = ($page - 1) * $amount;
      if ($start < 0) {
          $start = 0;
      }

      $query = "SELECT {$queryTable}.* $querySelect
                         FROM $queryTable $queryFrom
                         WHERE $queryWhere
                         ORDER BY $sort $dir
                         LIMIT $start, $amount";

      $result = cpg_db_query($query);
      // display the table header - start
      $tableColumns = count($db_fields);
      if ($pid == '') {
          $tableColumns++;
      }
      print '<a name="details"></a>';
      starttable($statsTableWidth, $lang_stat_details_php[$type], $tableColumns + 1);
      print '  <tr>'.$LINEBREAK;
      print '    <td class="tableh2" align="center" valign="bottom">'.$LINEBREAK;
      if ($type == 'vote') {
          print '    <input type="checkbox" name="checkAll" onclick="selectAll(this,\'del\');" class="checkbox" title="'.$lang_common['check_uncheck_all'].'" />'.$LINEBREAK;
      }
      print '    </td>'.$LINEBREAK;
      foreach ($db_fields as $value) {
          $show_column_checked[$value] = ($$value == '1') ? 'checked="checked"' : '';
          print '    <td class="tableh2" valign="top">'.$LINEBREAK;
          print '      <input type="checkbox" name="'.$value.'" value="1" class="checkbox" title="'.$lang_stat_details_php['show_hide'].'" '.$show_column_checked[$value].' onclick="sendForm();" />'.$LINEBREAK;
          //print '      <img src="images/'.$icon[$value].'" border="0" width="16" height="16" alt="" title="'.$lang_stat_details_php[$value].'" />';
          print '      '.cpg_fetch_icon($icon[$value], 0, $lang_stat_details_php[$value]);
          if ($$value == 1) {
              print '<a href="#" onclick="return sortthetable(\''.$value.'\',\'asc\');">';
              print '<img src="images/ascending.png" width="9" height="9" border="0" alt="" title="'.sprintf($lang_stat_details_php['sort_by_xxx'], $value).', '.$lang_stat_details_php['ascending'].'" />';
              print '</a>';
              print '<a href="#" onclick="return sortthetable(\''.$value.'\',\'desc\');">';
              print '<img src="images/descending.png" width="9" height="9" border="0" alt="" title="'.sprintf($lang_stat_details_php['sort_by_xxx'], $lang_stat_details_php[$value]).', '.$lang_stat_details_php['descending'].'" />';
              print '</a>';
          }
          print $LINEBREAK;
          print '    </td>'.$LINEBREAK;
      }
      if ($pid == '') {
          $show_file_column = ($file == '1') ? 'checked="checked"' : '';
          print '    <td class="tableh2" valign="top">'.$LINEBREAK;
          print '      <input type="checkbox" name="file" value="1" class="checkbox" title="'.$lang_stat_details_php['show_hide'].'" '.$lang_common['file'].' onclick="sendForm();" '.$show_file_column.' />'.$LINEBREAK;
          print '      '.cpg_fetch_icon('file', 0, $lang_common['file']);
          if ($file == 1) {
              print '<a href="#" onclick="return sortthetable(\'file\',\'asc\');">';
              print '<img src="images/ascending.png" width="9" height="9" border="0" alt="" title="'.sprintf($lang_stat_details_php['sort_by_xxx'], $lang_common['file']).', '.$lang_stat_details_php['ascending'].'" />';
              print '</a>';
              print '<a href="#" onclick="return sortthetable(\'file\',\'desc\');">';
              print '<img src="images/descending.png" width="9" height="9" border="0" alt="" title="'.sprintf($lang_stat_details_php['sort_by_xxx'], $lang_common['file']).', '.$lang_stat_details_php['descending'].'" />';
              print '</a>';
          }
          print '    </td>'.$LINEBREAK;
      }
      print '  </tr>' . $LINEBREAK;
      // display the table header - end
      if (mysql_num_rows($result) > 0) {
          $loop_counter = 0;
          while ($row = mysql_fetch_array($result)) {
              if ($loop_counter == 0) {
                  $row_style_class = 'tableb';
              } else {
                  $row_style_class = 'tableb tableb_alternate';
              }
              $loop_counter++;
              if ($loop_counter > 1) {
                  $loop_counter = 0;
              }
              $row['sdate'] = strftime($date_display_fmt,localised_timestamp($row['sdate']));
              $is_internal = '';
              $row['referer'] = rawurldecode($row['referer']);
              // is it an internal reference (most should be)?
              $match_coppermine_url = strpos($row['referer'],$CONFIG['ecards_more_pic_target']);
              if ($match_coppermine_url === FALSE) {
                  // make the referer url clickable
                  $row['referer'] = '<a href="'.$row['referer'].'">'.ltrim(ltrim($row['referer'],'http://'),'http%3A%2F%2F').'</a>';
              } else {
                  // make the referer url clickable
                  $row['referer'] = $lang_stat_details_php['internal'].': <a href="'.$row['referer'].'">'.substr($row['referer'],strlen(rtrim($CONFIG['ecards_more_pic_target'],'/'))).'</a>';
                  $is_internal = 1;
              }
              if ($hide_internal == 1 && $is_internal == 1) { // check internals start
              } else {
                  print '  <tr>'.$LINEBREAK;
                  print '    <td class="'.$row_style_class.'" align="center">'.$LINEBREAK;
                  if ($type == 'vote') {
                      print '      <input name="del'.$row['sid'].'" type="checkbox" value="" class="checkbox" />'.$LINEBREAK;
                  }
                  print '    </td>'.$LINEBREAK;
                  foreach($db_fields as $value) {
                      print '    <td class="'.$row_style_class.'">'.$LINEBREAK;
                      if ($$value == 1) {
                          if ($value == 'browser' && array_key_exists($row[$value],$browserArray)) {
                              print '      <img src="images/browser/'.$browserArray[$row[$value]].'" border="0" title="'.$row[$value].'" alt="" />'.$LINEBREAK;
                          } elseif ($value == 'os' && array_key_exists($row[$value],$osArray)) {
                              print '      <img src="images/os/'.$osArray[$row[$value]].'" border="0" title="'.$row[$value].'" alt="" />'.$LINEBREAK;
                          } elseif ($value == 'uid') {
                              if ($row[$value] != 0) {
                                  $user_data = $cpg_udb->get_user_infos($row[$value]);
                                  print '      <a href="profile.php?uid='.$row[$value].'">'.$user_data['user_name'].'</a>'.$LINEBREAK;
                              }  else {
                                  print '      <span title="'.$lang_stat_details_php['guest'].'">-</span>'.$LINEBREAK;
                              }
                          } elseif ($value == 'ip') {
                              print '      '. CPGPluginAPI::filter('ip_information', $row[$value]) . $LINEBREAK;
                          } else {
                              print '      '. $row[$value] . $LINEBREAK;
                          }
                      }
                      print '    </td>'.$LINEBREAK;
                  }
              if ($pid == '') {
                  print '    <td class="'.$row_style_class.'">'.$LINEBREAK;
                  if ($file == 1) {
                      $thumb_url =  get_pic_url($row, 'thumb');
                      if (!is_image($row['filename'])) {
                          $image_info = cpg_getimagesize($thumb_url);
                          $row['pwidth'] = $image_info[0];
                          $row['pheight'] = $image_info[1];
                      }
                      $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['alb_list_thumb_size']);
                      print '      <a href="displayimage.php?pid='.$row['pid'].'"><img src="'.$thumb_url.'" '.$image_size['geom'].' class="image" border="0" alt="" /></a>';
                  }
                  print '    </td>'.$LINEBREAK;
              }
              print '  </tr>'.$LINEBREAK;
              } // check internals end
          }
      }
  // Display pagination
  $record_selector = '&nbsp;&nbsp;-&nbsp;&nbsp;<select name="amount" size="1" onchange="sendForm();" class="listbox">';
  foreach ($amount_allowed as $key) {
      $record_selector .= '<option value="'.$key.'" ';
      if ($amount==$key) {
          $record_selector .= ' selected="selected"';
      }
      $record_selector .= '>'.$key.'</option>'.$LINEBREAK;
  }
  $record_selector .= '</select> '.$lang_stat_details_php['records_per_page'].$LINEBREAK;

  $stats_tmpl = $template_tab_display;
  $stats_tmpl['left_text'] = strtr($stats_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_stat_details_php['records_on_page'] . $record_selector));
  $stats_tmpl['page_link'] = strtr($stats_tmpl['page_link'], array('{LINK}' => cpgGetScriptNameParams('page').'page=%d#details'));
  $tabs = create_tabs($count, $page, $numPages, $stats_tmpl);
  $tableColumnsPlus = $tableColumns +1;
  print <<< EOT
  <tr>
      <td align="right" valign="top" colspan="{$tableColumnsPlus}">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
              <tr>
                  {$tabs}
              </tr>
          </table>
      </td>
  </tr>
EOT;
  // display table footer with options
  $hide_internal_selected = ($hide_internal == '1') ? 'checked="checked"' : '';
  $date_display_0_selected = ($date_display == '0') ? 'selected="selected"' : '';
  $date_display_1_selected = ($date_display == '1') ? 'selected="selected"' : '';
  $date_display_2_selected = ($date_display == '2') ? 'selected="selected"' : '';
  $date_display_3_selected = ($date_display == '3') ? 'selected="selected"' : '';
  $date_display_4_selected = ($date_display == '4') ? 'selected="selected"' : '';
  $localized_time[0] = strftime($lang_date['album'],localised_timestamp(time()));
  $localized_time[1] = strftime($lang_date['lastcom'],localised_timestamp(time()));
  $localized_time[2] = strftime($lang_date['log'],localised_timestamp(time()));
  $localized_time[3] = strftime('%Y-%m-%d %H:%M:%S',localised_timestamp(time()));
  $localized_time[4] = strftime('%Y-%m-%d',localised_timestamp(time()));
  foreach ($amount_allowed as $key) {
  }
  print <<< EOT
  <tr>
      <td class="tablef" align="center" valign="top">
EOT;
  if ($type == 'vote') {
      print '    <input type="checkbox" name="checkAll2" onclick="selectAll(this,\'del\');" class="checkbox" title="'.$lang_common['check_uncheck_all'].'" />'.$LINEBREAK;
  }
  print <<< EOT
      </td>
      <td colspan="{$tableColumns}">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td class="tablef">
EOT;
  if ($type == 'vote') {
  print <<< EOT
              <input type="checkbox" name="reset_selected" id="reset_selected" value="" class="checkbox" title="{$lang_stat_details_php['hide_internal_referers']}" onclick="confirmDelete();" />
              <label for="reset_selected" class="clickable_option">{$lang_stat_details_php['reset_votes_individual']}</label>
EOT;
  }
  print <<< EOT
            </td>
            <td class="tablef" colspan="2" align="right">
              <input type="checkbox" name="hide_internal" id="hide_internal" value="1" class="checkbox" title="{$lang_stat_details_php['hide_internal_referers']}" {$hide_internal_selected} onclick="sendForm();" />
              <label for="hide_internal" class="clickable_option">{$lang_stat_details_php['hide_internal_referers']}</label>
            </td>
          </tr>
          <tr>
            <td class="tablef" colspan="2">
              {$lang_stat_details_php['date_display']}
              <select name="date_display" size="1" onchange="sendForm();" class="listbox">
                <option value="0" {$date_display_0_selected}>
                  {$localized_time[0]}
                </option>
                <option value="1" {$date_display_1_selected}>
                  {$localized_time[1]}
                </option>
                <option value="2" {$date_display_2_selected}>
                  {$localized_time[2]}
                </option>
                <option value="3" {$date_display_3_selected}>
                  {$localized_time[3]}
                </option>
                <option value="4" {$date_display_4_selected}>
                  {$localized_time[4]}
                </option>
              </select>
            </td>
            <td class="tablef" align="right">
              <button type="submit" class="button" name="go" id="detail_submit" value="{$lang_stat_details_php['submit']}">{$icon_array['ok']}{$lang_stat_details_php['submit']}</button>
            </td>
          </tr>
        </table>
      </td>
    </tr>
EOT;
  endtable();
  echo <<< EOT
  </form>
  <br />
  <script type="text/javascript">
    <!--//
        // addonload("show_section('detail_submit')");

        function selectAll(d,box) {
          var f = document.editForm;
          for (i = 0; i < f.length; i++) {
            //alert (f[i].name.indexOf(box));
            if (f[i].type == "checkbox" && f[i].name.indexOf(box) >= 0) {
              if (d.checked) {
                f[i].checked = true;
              } else {
                f[i].checked = false;
              }
            }
          }
          if (d.name == "checkAll") {
              document.getElementsByName('checkAll2')[0].checked = document.getElementsByName('checkAll')[0].checked;
          } else {
              document.getElementsByName('checkAll')[0].checked = document.getElementsByName('checkAll2')[0].checked;
          }
        }
    //-->
  </script>
EOT;

      // Configuration shortcut: enable/disable hit stats here as well as in config
      $yes_selected_hit = $CONFIG['hit_details'] ? 'checked="checked"' : '';
      $no_selected_hit = !$CONFIG['hit_details'] ? 'checked="checked"' : '';
      $yes_selected_vote = $CONFIG['vote_details'] ? 'checked="checked"' : '';
      $no_selected_vote = !$CONFIG['vote_details'] ? 'checked="checked"' : '';
      if (!isset($rating)) {
        $rating = '';
      }
      $help_hit = '&nbsp;'.cpg_display_help('f=configuration.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end&amp;top=1', '600', '400');
      $help_vote = '&nbsp;'.cpg_display_help('f=configuration.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end&amp;top=1', '600', '400');
      print <<< EOT
      <form method="get" name="changestats" id="cpgform" action="{$CPG_PHP_SELF}" onsubmit="return defaultagree(this)">
      <input type="hidden" name="type" value="{$type}" />
      <input type="hidden" name="pid" value="{$pid}" />
      <input type="hidden" name="sort" value="{$sort}" />
      <input type="hidden" name="dir" value="{$dir}" />
      <input type="hidden" name="sdate" value="{$sdate}" />
      <input type="hidden" name="ip" value="{$ip}" />
      <input type="hidden" name="rating" value="{$rating}" />
      <input type="hidden" name="referer" value="{$referer}" />
      <input type="hidden" name="browser" value="{$browser}" />
      <input type="hidden" name="os" value="{$os}" />
      <input type="hidden" name="page" value="{$page}" />
      <input type="hidden" name="mode" value="{$mode}" />
EOT;

    starttable('-2', $lang_stat_details_php['overall_stats_config'], 3);
    if ($type == 'vote' || $type == 'total') {
          print <<< EOT
      <tr>
        <td class="tableb">{$lang_stat_details_php['vote_details']}{$help_vote}</td>
        <td class="tableb">
          <input type="radio" id="vote_details_yes" name="vote_details" value="1"  $yes_selected_vote /><label for="vote_details_yes" class="clickable_option">{$lang_common['yes']}</label>
        </td>
        <td class="tableb">
          <input type="radio" id="vote_details_no" name="vote_details" value="0"  $no_selected_vote /><label for="vote_details_no" class="clickable_option">{$lang_common['no']}</label>
        </td>
      </tr>
EOT;
    }
    if ($type == 'hits' || $type == 'total') {
        print <<< EOT
      <tr>
        <td class="tableb">{$lang_stat_details_php['hit_details']}{$help_hit}</td>
        <td class="tableb">
          <input type="radio" id="hit_details_yes" name="hit_details" value="1"  $yes_selected_hit /><label for="hit_details_yes" class="clickable_option">{$lang_common['yes']}</label>
        </td>
        <td class="tableb">
          <input type="radio" id="hit_details_no" name="hit_details" value="0"  $no_selected_hit /><label for="hit_details_no" class="clickable_option">{$lang_common['no']}</label>
        </td>
      </tr>
EOT;
    }


    if ($type == 'vote' || $type == 'total') {
          print <<< EOT
      <tr>
        <td class="tableb" colspan="3">
            <input name="emptyvotestats" id="emptyvotestats" type="checkbox" onclick="if (this.checked) return confirm('{$lang_stat_details_php['empty_votes_table_confirm']}');" />
            <label for="emptyvotestats" class="clickable_option">{$lang_stat_details_php['empty_votes_table']}</label>
        </td>
      </tr>
EOT;
    }
    if ($type == 'hits' || $type == 'total') {
        print <<< EOT
      <tr>
        <td class="tableb" colspan="3">
            <input name="emptyhitstats" id="emptyhitstats" type="checkbox" onclick="if (this.checked) return confirm('{$lang_stat_details_php['empty_hits_table_confirm']}');" />
            <label for="emptyhitstats" class="clickable_option">{$lang_stat_details_php['empty_hits_table']}</label>
        </td>
      </tr>
EOT;
    }
    print <<< EOT
      <tr>
        <td class="tablef" colspan="3" align="right">
          <button type="submit" class="button" name="go" id="detail_submit" value="{$lang_stat_details_php['submit']}">{$icon_array['ok']}{$lang_stat_details_php['submit']}</button>
        </td>
      </tr>
EOT;

      if ($configChangesApplied != '') {
          print <<< EOT
            <tr>
              <td class="tablef" colspan="3" align="center">
                <h2>{$configChangesApplied}</h2>
              </td>
            </tr>
EOT;
      }
      endtable();
      print '</form>';


} // admin is logged in - end
// output the admin-only stuff - end

// output the footer depending on the mode (fullscreen vs embedded) - start
    if ($mode == 'fullscreen') {
      pagefooter();
    } else {
      print  <<<EOT
</body>
</html>
EOT;
    }
// output the footer depending on the mode (fullscreen vs embedded) - end
?>