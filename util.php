<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2020 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * util.php
 * @since  1.6.09
 */

/*
TODO:
update filesize in db when thumbs are updated
change use of string 'true' and 'false' to booleans for resize_image parameter
add checks for is_image() to functions that only apply to images
remove extract() from refresh_db()
*/

define('IN_COPPERMINE', true);
define('UTIL_PHP', true);

require 'include/init.inc.php';
require 'include/picmgmt.inc.php';
require 'include/tool.class.php';

if (!GALLERY_ADMIN_MODE) {
	cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$icon_array = array(
	'back' => cpg_fetch_icon('leftleft', 2),
	'util' => cpg_fetch_icon('util', 2)
);

js_include('js/util.js');
$bottomScript = '';

$css = '<style>
/* Styles for the admin tools. */
.toolwrap {
	padding: 1em;
	padding-left: 3em;
	display: none;
}
#toolpdsp, #toolmsgs {
	margin-bottom: 1em;
}
#toolpdsp img {
	vertical-align: middle;
	cursor: pointer;
}
#toolprgb {
	width: 50%;
	margin: 0 0 0 6px;
	border: 1px solid #BBB;
	display: inline-block;
	border-radius: 3px;
	background-image: url("images/indeterm.gif");
}
#toolprog {
	width: 0;
	padding: 2px 0;
	white-space: nowrap;
	background-color: #AAD7FD;
}
</style>';
pageheader($lang_util_php['title'], $css);

if ($superCage->post->keyExists('action') && $matches = $superCage->post->getMatched('action', '/^[A-Za-z0-9_]+$/')) {
	$action = $matches[0];
} elseif ($superCage->get->keyExists('action') && $matches = $superCage->get->getMatched('action', '/^[A-Za-z0-9_]+$/')) {
	$action = $matches[0];
} else {
	$action = '';
}

if ($action && file_exists('tools/'.$action.'/'.$action.'.php')) {
	$bt_style = '';
	$tobj = AdminTool::getTool($action);
	if ($tobj) {
		if ($tobj->progressive) {
			$stpbut = '<img src="images/icons/stop.png" title="Cancel" alt="" onclick="_toolAbort=true" />';
			echo '<div id="toolpdsp">'.$stpbut.'<div id="toolprgb" class="progrbar"><div id="toolprog"><span>&nbsp;'.$tobj->procWords().'</span></div></div></div><div id="toolmsgs"></div>';
			$jsn = json_encode($superCage->post->_source);
			$bottomScript .= 'processTool('.$tobj->total().','.$jsn.');';
			$bt_style = ' style="display:none"';
		} else {
			echo $tobj->action() . '<br>&nbsp;<br>';
		}
	}
	echo '<div id="backtool"'.$bt_style.'><a href="util.php?t=' . date('His') . floor(rand(0, 1000)) . '#admin_tools" class="admin_menu">' . $icon_array['back'] . ' ' . $lang_util_php['back'] . '</a></div>';
} else {
	$help = '&nbsp;'.cpg_display_help('f=admin-tools.htm&amp;as=admin_tools&amp;ae=admin_tools_end&amp;top=1', '600', '400');

	print '<br><form name="cpgform" id="cpgform" action="util.php?t=' . date('His') . floor(rand(0, 1000)) . '#admin_tools" method="post">';
	print '<a name="admin_tools"></a>';

	starttable('100%', $icon_array['util'] . $lang_util_php['title'] . $help, 1);
	$toolsdir = scandir('tools');
	foreach ($toolsdir as $tool) {
		if ($tool[0] != '.' && is_dir('tools/'.$tool)) {
			$tobj = AdminTool::getTool($tool);
			if ($tobj) {
				echo '<tr><td class="tableh2"><input type="radio" name="action" value="'.$tool.'" id="'.$tool.'" class="nobg" /><label for="'.$tool.'" class="clickable_option">'.$tobj->describe().'</label></td></tr>';
				echo'<tr><td class="tableb"><div id="'.$tool.'_wrapper" class="toolwrap"></div></td></tr>';
			}
		}
	}
	endtable();

	$help_select = '&nbsp;' . cpg_display_help('f=admin-tools.htm&amp;as=admin_tools_usage&amp;ae=admin_tools_usage_end&amp;top=1', '600', '400');

	starttable('100%', $lang_common['select_album'] . $help_select);
	echo '<tr><td class="tablef"><br>';
	$cpg_udb->util_filloptions();
	echo '<br></td></tr>';
	endtable();

	list($timestamp, $form_token) = getFormToken();	
	echo <<<EOT
	<input type="hidden" name="form_token" value="{$form_token}" />
	<input type="hidden" name="timestamp" value="{$timestamp}" />
	</form>
EOT;
}

if ($bottomScript) {
	echo '<script>'.$bottomScript.'</script>';
}

pagefooter();
//EOF