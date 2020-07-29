<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2020 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * lang_check.php
 * @since  1.6.09
 */
define('IN_COPPERMINE', true);

define('SMILIES_PHP', true);
define('ALBMGR_PHP', true);
define('BANNING_PHP', true);
define('BRIDGEMGR_PHP', true);
define('CALENDAR_PHP', true);
define('CATMGR_PHP', true);
define('CONTACT_PHP', true);
define('ADMIN_PHP', true);
define('DB_ECARD_PHP', true);
define('DB_INPUT_PHP', true);
define('DELETE_PHP', true);
define('DISPLAYIMAGE_PHP', true);
define('ECARDS_PHP', true);
define('REPORT_FILE_PHP', true);
define('EDITPICS_PHP', true);
define('FORGOT_PASSWD_PHP', true);
define('GROUPMGR_PHP', true);
define('INDEX_PHP', true);
define('INSTALL_PHP', true);
define('KEYWORDMGR_PHP', true);
define('LANGMGR_PHP', true);
define('LOGIN_PHP', true);
define('LOGOUT_PHP', true);
define('MINIBROWSER_PHP', true);
define('MODE_PHP', true);
define('MODIFYALB_PHP', true);
define('PHPINFO_PHP', true);
define('PICMGR_PHP', true);
define('PLUGINMGR_PHP', true);
define('RATEPIC_PHP', true);
define('REGISTER_PHP', true);
define('PROFILE_PHP', true);
define('REVIEWCOM_PHP', true);
define('SIDEBAR_PHP', true);
define('SEARCH_PHP', true);
define('SEARCHNEW_PHP', true);
define('SEND_ACTIVATION_PHP', true);
define('STAT_DETAILS_PHP', true);
define('UPLOAD_PHP', true);
define('UPLOAD_H5A', true);
define('USERMGR_PHP', true);
define('UPDATE_PHP', true);
define('UTIL_PHP', true);
define('VERSIONCHECK_PHP', true);
define('VIEWLOG_PHP', true);

class Lang
{
	public $vars;

	public function __construct ($lang='english.php')
	{
		require "lang/{$lang}";
		$this->vars = get_defined_vars();
	}
}

$lngSel = $_GET['lang'];

$lray = array_fill_keys(array_diff(scandir('lang'), ['.','..']), 1);
unset($lray['english.php']);
$lopts = '';
foreach ($lray as $k => $v) {
	$lopts .= '<option value="'.$k.'"'.($k==$lngSel ? ' selected' : '').'>'.ucfirst(substr($k,0,-4)).'</option>';
}

$action = !empty($_GET['act']) ? $_GET['act'] : null;
$opt_cks = $action=='cks' ? ' selected' : '';
$opt_chk = $action=='chk' ? ' selected' : '';
$opt_scn = $action=='scn' ? ' selected' : '';
if ($action) {
	$dsp_lsel = $action=='cks' ? 'inline-block' : 'none';
} else {
	$dsl_lsel = 'inline-block';
}

echo <<<EOT
<!DOCTYPE html>
<html>
<head>
<title>Language File Check for Coppermine Photo Gallery</title>
<style>
	div {
		padding:6px;
		border:1px solid #CCC;
		background-color:#FFE;
		overflow-x: scroll;
	}
	h2 {
		margin-top:4px;
	}
	h3 {
		margin-bottom:0;
		text-decoration:underline;
	}
	code {
		white-space:nowrap;
	}
	.lvl1 {
		margin-left:2em;
	}
	.lvl2 {
		margin-left:4em;
	}
	div.aform {
		background-color:#EEF;
		padding-top:.7em;
		padding-bottom:.7em;
	}
	#lsel { display:{$dsp_lsel}; }
</style>
<script>
	function actSel (elem) {
		let lnge = document.getElementById('lsel');
		if (elem.value == 'cks') {
			lnge.style.display = 'inline-block';
		} else {
			lnge.style.display = 'none';
		}
	}
</script>
</head>
<body>
<div class="aform">
	<form action="">
		<select name="act" onchange="actSel(this);">
			<option value="cks"{$opt_cks}>Check selected language against English</option>
			<option value="chk"{$opt_chk}>Check all languages against English</option>
			<option value="scn"{$opt_scn}>Scan PHP files for language useage</option>
		</select>
		<select name="lang" id="lsel">
			{$lopts}
		</select>
		<button type="submit" name="doit" value="1">Perform Action</button>
	</form>
</div><br />
EOT;

if ($action) $en = new Lang();

if ($action == 'cks') {
	$action = 'chk';
	$lray = [$lngSel => 1];
}

if ($action == 'scn') {
	$eno = new Lang();
	$enMissing = array();
	scanForUsage($en, '.');
	if ($enMissing) {
		echo '<div><h3>Language references that are not in english.php</h3><br />';
		foreach ($enMissing as $l=>$fr) {
			echo '<b>File:</b>  '.$fr[0].'<br />';
			echo '<b>Ref:</b>  '.$l.' [ '.$fr[1].' ]<br /><br />';
		}
		echo '</div><br />';
	}
	echo '<div><h3>Language string definitions (in english.php) that were not directly referenced in any PHP file</h3><br />';
	splay($en->vars);
	echo'</div>';
} elseif ($action == 'chk') {
	foreach ($lray as $lang => $v) {
		$lobj = new Lang($lang);
		echo '<div><h2>Language file: '.$lang.'</h2>';
		$misses = array_diff_key_recursive($en->vars, $lobj->vars);
		if ($misses) {
			echo "<h3>Missing translations.</h3><br />";
			splay($misses);
		}
		$misses = array_diff_key_recursive($lobj->vars, $en->vars);
		if ($misses) {
			echo "<h3>Translations that could (possibly) be removed.</h3><br />";
			splay($misses);
		}
		echo '</div><br /><br />';
	}
}

function splay ($nodes, $ind=0)
{
	foreach ($nodes as $k=>$var) {
		if ($var) {
			if ($ind) {
				echo '<span class="lvl'.$ind.'">["'.$k.'"]</span>';
				echo is_array($var) ? '<br />' : '&nbsp;=&gt;&nbsp';
			} else {
				echo '<b>Group:</b>  '.$k.'<br />';
			}
			if (is_array($var)) {
				splay($var, $ind+1);
			} else {
				$sc = $ind ? '' : 'lvl1';
				echo '<span class="'.$sc.'">"<code>'.htmlentities($var).'</code>"</span><br />';
			}
		if (!$ind) echo '<br />';
		}
	}
}

function array_diff_key_recursive (array $arr1, array $arr2)
{
	$diff = array_diff_key($arr1, $arr2);
	$intersect = array_intersect_key($arr1, $arr2);

	foreach ($intersect as $k => $v) {
		if (is_array($arr1[$k]) && is_array($arr2[$k])) {
			$d = array_diff_key_recursive($arr1[$k], $arr2[$k]);
			if ($d) {
				$diff[$k] = $d;
			}
		}
	}

	return $diff;
}

function scanForUsage (&$en, $dir)
{
	global $eno, $enMissing;

	foreach (scandir($dir) as $f) {
		if ($f[0] === '.') continue;
		$fpath = ($dir=='.'?'':($dir.'/')).$f;
		if (is_dir($fpath)) {
			if ($fpath!='lang') scanForUsage($en, $fpath);
		} else {
			if (substr($f, -4) != '.php') continue;
			preg_match_all('|\$lang_([^\s\[]+)\[[\'"](\w+)[\'"]\]|', file_get_contents($fpath), $mtchs, PREG_SET_ORDER);
			foreach ($mtchs as $mtch) {
				if (isset($eno->vars['lang_'.$mtch[1]][$mtch[2]])) {
					unset($en->vars['lang_'.$mtch[1]][$mtch[2]]);
				} else {
					if (substr($mtch[1],0,7) != 'plugin_') $enMissing['lang_'.$mtch[1]] = array($fpath,$mtch[2]);
				}
			}
		}
	}
}

?>
</body>
</html>