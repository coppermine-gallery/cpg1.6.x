<?php
/**************************
  Coppermine Photo Gallery
 **************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

 ************************************
  Coppermine version: 1.6.03
  $HeadURL$
 ************************************/

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