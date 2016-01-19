<?php
$styles = '../../themes/'.$_GET['t'].'/style.css';
$hpath = 'help/'.$_GET['g'].'/';
$lang = $_GET['l'];
$hfile = file_exists($hpath.$lang.'.html') ? $lang.'.html' : 'english.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="<?=$styles?>">
</head>
<body class="nobgimage">
<?php readfile($hpath.$hfile); ?>
</body>
</html>