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
  ********************************************
  This theme has had redundant CORE items removed
**********************************************/

define('THEME_HAS_RATING_GRAPHICS', 1);
define('THEME_HAS_NAVBAR_GRAPHICS', 1);
define('THEME_HAS_NO_SUB_MENU_BUTTONS', 1);
define('THEME_HAS_PROGRESS_GRAPHICS', 1);

// HTML template for template sys_menu spacer
$template_sys_menu_spacer = '|';

// HTML template for template sub_menu
if ($CONFIG['browse_by_date'] != 0) {
    $browsebydatebutton = <<< EOT
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{BROWSEBYDATE_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{BROWSEBYDATE_LNK}" rel="nofollow" class="greybox">{BROWSEBYDATE_LNK}</a>
                                        </td>
EOT;
} else {
    $browsebydatebutton = '';
}
$template_sub_menu = <<< EOT
                        <table cellpadding="0" cellspacing="0" border="0" class="top_menu_bttn">
                                <tr>
                                        <td><img src="themes/eyeball/images/top_menu_left.gif" border="0" alt="" /><br /></td>
                                        <!-- BEGIN custom_link -->
                                                                                <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{CUSTOM_LNK_TGT}" title="{CUSTOM_LNK_TITLE}">{CUSTOM_LNK_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <!-- END custom_link -->
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="index.php" onmouseover="MM_showHideLayers('Menu1','','show')"><img src="themes/eyeball/images/home.gif" border="0" alt="" /><br /></a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{LASTUP_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{LASTUP_LNK}" rel="nofollow">{LASTUP_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{LASTCOM_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{LASTCOM_LNK}" rel="nofollow">{LASTCOM_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{TOPN_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{TOPN_LNK}" rel="nofollow">{TOPN_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{TOPRATED_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{TOPRATED_LNK}" rel="nofollow">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                        <a href="{FAV_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{FAV_LNK}" rel="nofollow">{FAV_LNK}</a>
                                        </td>
                                        $browsebydatebutton
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                         <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{SEARCH_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_right.gif" border="0" alt="" /><br /></td>

                                </tr>
                        </table>
EOT;

// Function for the JavaScript inside the <head>-section
function theme_javascript_head()
{
    global $CONFIG, $JS, $LINEBREAK;
    $return = '';
    // Check if we have any variables being set using set_js_vars function
    $JS['vars']['not_default_theme'] = true;
    if (isset($JS['vars']) && count($JS['vars'])) {
        // Convert the $JS['vars'] array to json object string
        $json_vars = json_encode($JS['vars']);
        // Output the json object
        $return = <<< EOT
<script type="text/javascript">
/* <![CDATA[ */
    var js_vars = $json_vars;
/* ]]> */
</script>

EOT;
    }

    // Check if we have any js includes
    if (isset($JS['includes']) && count($JS['includes'])) {
    	// Bring the jquery core library to the very top of the list 
    	if (in_array('js/jquery-1.3.2.js', $JS['includes']) == TRUE) {
    		$key = array_search('js/jquery-1.3.2.js', $JS['includes']);
    		unset($JS['includes'][$key]);
    		array_unshift($JS['includes'], 'js/jquery-1.3.2.js');
    	}
        $JS['includes'] = CPGPluginAPI::filter('javascript_includes',$JS['includes']);
        // Include all the file which were set using js_include() function
        foreach ($JS['includes'] as $js_file) {
            $return .= '<script type="text/javascript" src="' . $js_file . '"></script>' . $LINEBREAK;
        }
    }

    $return .= <<< EOT

<script language="JavaScript" type="text/javascript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->
</script>
EOT;
    return $return;
}

// Function to start a 'standard' table
function starttable($width = '-1', $title = '', $title_colspan = '1', $zebra_class = '')
{
    global $CONFIG;
    global $table_need_close;

    if ($width == '-1') $width = $CONFIG['picture_table_width'];
    if ($width == '100%') $width = $CONFIG['main_table_width'];
    if ($title) {
        $table_need_close = true;
        echo <<<EOT
<!-- Start standard table title -->
<table align="center" width="$width" cellspacing="0" cellpadding="0" class="maintablea">
        <tr>
                <td>
                        <table width="100%" cellspacing="0" cellpadding="0" class="tableh1a">
                                <tr>
                                        <td class="tableh1a"><img src="themes/eyeball/images/tableh1a_bg_left.gif" alt="" /></td>
                                        <td class="tableh1a" width="100%">$title</td>
                                        <td class="tableh1a"><img src="themes/eyeball/images/tableh1a_bg_right.gif" alt="" /></td>
                                </tr>
                        </table>
                </td>
        </tr>
</table>
<!-- Start standard table -->
<table align="center" width="$width" cellspacing="0" cellpadding="0">
  <tr>
   <td><img src="images/spacer.gif" width="20" height="1" border="0" alt="" /></td>
        <td width="100%"><table width="100%" cellspacing="1" cellpadding="0" class="maintableb $zebra_class">

EOT;
    } else {
        echo <<<EOT

<!-- Start standard table -->
<table align="center" width="$width" cellspacing="0" cellpadding="0" class="maintable $zebra_class">

EOT;
    }
}

function endtable()
{
    global $table_need_close;

    if ($table_need_close) {
        $table_need_close = false;
        echo <<<EOT
        </table>
   </td>
   <td><img src="images/spacer.gif" width="20" height="1" border="0" alt="" /></td>
  </tr>
</table>
<!-- End standard table -->

EOT;
    } else {
        echo <<<EOT
</table>
<!-- End standard table -->

EOT;
    }
}

function theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments, $film_strip)
{
    global $CONFIG, $LINEBREAK;
    
    $superCage = Inspekt::makeSuperCage();

    $spacer = <<<EOT
        <tr>
                <td><img src="themes/eyeball/images/hline_left.gif" alt="" /><br /></td>
                <td width="100%" style="background-image:url(themes/eyeball/images/hline_bg.gif);" align="center"><img src="themes/eyeball/images/hline_blue_ball.gif" alt="" /><br /></td>
                <td><img src="themes/eyeball/images/hline_right.gif" alt="" /><br /></td>
        </tr>

EOT;

    echo '        <img src="images/spacer.gif" width="1" height="25" alt="" /><br />' . $LINEBREAK;
    starttable();
    echo $nav_menu;
    endtable();

    starttable();
    echo $picture;
    endtable();
    if ($CONFIG['display_film_strip'] == 1) {
        echo $film_strip;
    }
    if ($votes) {
        starttable();
        echo $spacer;
        endtable();

        echo $votes;

    }

    $picinfo = $superCage->cookie->keyExists('picinfo') ? $superCage->cookie->getAlpha('picinfo') : ($CONFIG['display_pic_info'] ? 'block' : 'none');
    echo '<div id="picinfo" style="display: ' . $picinfo . ';">' . $LINEBREAK;
    starttable();
    echo $spacer;
    endtable();
    starttable();
    echo $pic_info;
    endtable();
    echo '</div>' . $LINEBREAK;

    if ($comments) {
        starttable();
        echo $spacer;
        endtable();
        echo '<div id="comments">' . $LINEBREAK;
        echo $comments;
        echo '</div>' . $LINEBREAK;
    }
}

?>