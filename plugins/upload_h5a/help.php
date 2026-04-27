<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2026 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * plugins/upload_h5a/help.php
 * @since  1.6.29
 */

$styles = '../../themes/'.htmlentities($_GET['t']).'/style.css';
$hpath = 'help/'.htmlentities(basename($_GET['g'])).'/';
$lang = htmlentities(basename($_GET['l']));
$hfile = file_exists($hpath.$lang.'.html') ? $lang.'.html' : 'english.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo $styles; ?>">
</head>
<body class="nobgimage">
<?php readfile($hpath.$hfile); ?>
</body>
</html>