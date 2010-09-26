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

// Check if standalone is installed in a portal like phpNuke
if (is_dir('../../modules') && $_REQUEST['continue_anyway'] != 1) {
    die(
        "<html><body><h1>ERROR</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />
         This version can only be used as standalone!<br />
         Some server setups might display this warning even though you don't have a nuke portal installed - if this is the case for you, <a href=\"" . $PHP_SELF . "?continue_anyway=1\">continue</a> with the install.
         If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)
         <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">coppermine ports</a>
         - do not continue!</body></html>"
         );
} // end check

// Report all errors except E_NOTICE
// This is the default value set in php.ini
error_reporting (E_ALL ^ E_NOTICE);

require('include/sql_parse.php');
// ---------------------------- TEST PREREQUIRED --------------------------- //
function test_fs()
{
    global $errors, $DFLT;
    // include must be writable to create config file
    if (! is_dir($DFLT['cfg_d'])) {
        $errors .= "<hr /><br />A subdirectory called '{$DFLT['cfg_d']}' should normally exist in the directory where you uploaded Coppermine. The installer can't find this directory. Check that you have uploaded all Coppermine files to your server.<br /><br />";
    } elseif (! is_writable($DFLT['cfg_d'])) {
        $errors .= "<hr /><br />The '{$DFLT['cfg_d']}' directory (located in the directory where you uploaded Coppermine) should be writable in order to save your configuration. Use your FTP program to change its mode to 777.<br /><br />";
    }
    // albums must be writable to upload pictures
    if (! is_dir($DFLT['alb_d'])) {
        $errors .= "<hr /><br />A subdirectory called '{$DFLT['alb_d']}' should normally exist in the directory where you uploaded Coppermine. The installer can't find this directory. Check that you have uploaded all Coppermine files to your server.<br /><br />";
    } elseif (! is_writable($DFLT['alb_d'])) {
        $errors .= "<hr /><br />The '{$DFLT['alb_d']}' directory (located in the directory where you uploaded Coppermine) should be writable in order to allow pictures upload. Use your FTP program to change its mode to 777.<br /><br />";
    }
    // userpics must be writable to upload pictures
    if (! is_dir("{$DFLT['alb_d']}/{$DFLT['upl_d']}")) {
        $errors .= "<hr /><br />A subdirectory called '{$DFLT['upl_d']}' should normally exist in the 'albums' directory. The installer can't find this directory. Check that you have uploaded all Coppermine files to your server.<br /><br />";
    } elseif (! is_writable("{$DFLT['alb_d']}/{$DFLT['upl_d']}")) {
        $errors .= "<hr /><br />The '{$DFLT['upl_d']}' directory (located in the 'albums' directory on your server) should be writable in order to allow pictures upload. Use your FTP program to change its mode to 777.<br /><br />";
    }
    // edit must be writable to edit pictures
    if (! is_dir("{$DFLT['alb_d']}/{$DFLT['edit_d']}")) {
        $errors .= "<hr /><br />A subdirectory called '{$DFLT['edit_d']}' should normally exist in the 'albums' directory. The installer can't find this directory. Check that you have uploaded all Coppermine files to your server.<br /><br />";
    } elseif (! is_writable("{$DFLT['alb_d']}/{$DFLT['edit_d']}")) {
        $errors .= "<hr /><br />The '{$DFLT['edit_d']}' directory (located in the 'albums' directory on your server) should be writable in order to allow pictures upload. Use your FTP program to change its mode to 777.<br /><br />";
    }
    // sql directory must exist
    if (! is_dir("{$DFLT['sql_d']}")) {
        $errors .= "<hr /><br />A subdirectory called '{$DFLT['sql_d']}' should normally exist in the directory where you uploaded Coppermine. The installer can't find this directory. Check that you have uploaded all Coppermine files to your server.<br /><br />";
    }
}
// ----------------------------- TEST FUNCTIONS ---------------------------- //
function test_sql_connection()
{
    global $errors;

        if (!function_exists('mysql_connect')){
                $errors .= "<hr /><br />PHP does not have MySQL support enabled.<br /><br />";
         } elseif (! $connect_id = @mysql_connect($_POST['dbserver'], $_POST['dbuser'], $_POST['dbpass'])) {
        $errors .= "<hr /><br />Could not create a mySQL connection, please check the SQL values entered<br /><br />MySQL error was : " . mysql_error() . "<br /><br />";
    } elseif (! mysql_select_db($_POST['dbname'], $connect_id)) {
        $errors .= "<hr /><br />MySQL could not locate a database called '{$_POST['dbname']}' please check the value entered for this<br /><br />";
    }
}

function test_admin_login()
{
    global $errors;

    if ($_POST['admin_username'] == '' || $_POST['admin_password'] == '')
        $errors .= "<hr /><br />It is much better for you to provide a 'username' and a 'password' for the admin.<br /><br />";
    if (!preg_match('/\A\w*\Z/', $_POST['admin_username']) || !preg_match('/\A\w*\Z/', $_POST['admin_password']))
        $errors .= "<hr /><br />Admin username and password must only contain alphanumeric characters.<br /><br />";
}

function test_im()
{
    global $errors, $DFLT, $im_installed;

    $im_installed = false;

    if ($_POST['impath'] != '') {
        if (!preg_match('|/\Z|', $_POST['impath']))
            $_POST['impath'] .= '/';
        if (!is_dir($_POST['impath'])) {
            $errors .= "<hr /><br />The installer can not find the '{$_POST['impath']}' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.<br /><br />";
        } elseif (preg_match('/ /', $_POST['impath'])) {
            $errors .= "<hr /><br />The path you have entered for ImageMagick ('{$_POST['impath']}') contains at least one space. This will cause problems in the script.<br /><br />
                        You must move ImageMagick to another directory.<br /><br />";
        } elseif (!file_exists($_POST['impath'] . 'convert') && !file_exists($_POST['impath'] . 'convert.exe')) {
            $errors .= "<hr /><br />The installer can not find the 'convert' or 'convert.exe' ImageMagick program in directory '{$_POST['impath']}'. Check that you have entered the correct directory name.<br /><br />";
        } else {
            $output = array();
            $tst_image = "{$DFLT['alb_d']}/{$DFLT['upl_d']}/im.gif";
            exec ("{$_POST['impath']}convert images/coppermine-logo.png $tst_image", $output, $result);
            $size = getimagesize($tst_image);
            unlink($tst_image);
            $im_installed = ($size[2] == 1);

            if (!$im_installed)
                $errors .= "<hr /><br />The installer found the ImageMagick 'convert' program in '{$_POST['impath']}', however it can't be executed by the script.<br /><br />
                                        You may consider using GD instead of ImageMagick.<br /><br />";

            if ($result && count($output)) {
                $errors .= "The convert program said:<br /><pre>";
                foreach($output as $line) $errors .= htmlspecialchars($line);
                $errors .= "</pre><br /><br />";
            }
        }
    }

    return $im_installed;
}
// Test is safe_mode is misconfigured
function test_silly_safe_mode()
{
    global $DFLT;

    $test_file = "{$DFLT['alb_d']}/{$DFLT['upl_d']}/dummy/dummy.txt";
    @mkdir(dirname($test_file), 0755);
    $fd = @fopen($test_file, 'w');
    if (!$fd) {
        @rmdir(dirname($test_file));
        return true;
    }
    fclose($fd);
    @unlink($test_file);
    @rmdir(dirname($test_file));
}
// -------------------------- DETECTION FUNCTIONS -------------------------- //
// What package is available for image manipulations
function detect_img_package()
{
    global $errors, $notes, $DFLT, $im_installed;

    $no_img_package_detected = false;

    $tst_image = "{$DFLT['alb_d']}/{$DFLT['upl_d']}/gd2.jpg";
    $size = @getimagesize($tst_image);
    @unlink($tst_image);
    $gd2_installed = ($size[2] == 2);

    if ($im_installed) {
        $_POST['thumb_method'] = 'im';
    } elseif ($gd2_installed) {
        $_POST['thumb_method'] = 'gd2';
    } else {
        $_POST['thumb_method'] = 'gd2';
        $no_img_package_detected = true;
        $notes .= "<hr /><br />Your installation of PHP does not seem to include the 'GD' graphic library extension and you have not indicated that you want to use ImageMagick. Coppermine has been configured to use GD2 because the automatic GD detection sometimes fail. If GD is installed on your system, the script should work else you will need to install ImageMagick.<br /><br />";
    }

    if (!$no_img_package_detected) $notes .= "<br /><br />Your server supports the following image package(s): " . ($im_installed ? ' ImageMagick (im),':'') . ($gd2_installed ? ' GD Library version 2.x (gd2),':'') . " the installer selected '" . $_POST['thumb_method'] . "'.";
    if ($_POST['thumb_method'] == 'gd2')
        $notes .= "<br /><br /><strong>Important :</strong> older versions of the GD graphic library support only JPEG and PNG images. If this is the case for you, then the script will not be able to create thumbnails for GIF images.";
}
// ------------------------- HTML OUTPUT FUNCTIONS ------------------------- //
function html_header()
{

    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache" />
<title>Coppermine - Installation</title>
<link rel="stylesheet" href="css/installer.css" type="text/css" />
</head>
<body>
 <div align="center">
  <div style="width:600px;">
<?php
}

function html_logo()
{

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
        <td valign="top" style="background-color:#EFEFEF"><img src="images/coppermine-logo.png" width="260" height="60" border="0" alt="" /><br />
        </td>
       </tr>
      </table>
<?php
}

function html_installer_locked()
{
    global $DFLT;

    ?>
      <form action="index_old.php" style="margin:0px;padding:0px" name="cpgform" id="cpgform">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableh1" colspan="2"><h2>The installer is locked</h2>
          </td>
         </tr>
         <tr>
          <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2">The installer has already been run successfully once and is now locked.<br /><br />If you want to run the installer again, you first need to delete the '<?php echo $DFLT['cfg_f'] ?>' file that was created in the directory where you put Coppermine. You can do this with any FTP program.
          </td>
         </tr>
         <tr>
          <td colspan="2" align="center" class="tableb"><br />
                  <input type="submit" value="Go to the main page" /><br /><br />
          </td>
         </tr>
        </table>
      </form>
<?php
}

function html_prereq_errors($error_msg)
{

        $continue = isset($_REQUEST['continue_anyway']) ? '?continue_anyway=1' : '';

    ?>
      <form action="install_classic.php<?php echo $continue ?>" method="post" name="cpgform" id="cpgform" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableh1" colspan="2"><h2>Welcome to Coppermine installation</h2>
          </td>
         </tr>
         <tr>
          <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2"> Before you continue with Coppermine installation, there are some problems that need to be fixed.<br /><br /><strong><?php echo $error_msg ?></strong>Once you are done, hit the "Try again" button.<br />
          </td>
         </tr>
         <tr>
          <td colspan="2" align="center"><br />
                  <input type="submit" value="Try again !" /><br /><br />
          </td>
         </tr>
        </table>
      </form>
<?php
}

function html_input_config($error_msg = '')
{
    global $im_installed;

        $continue = isset($_REQUEST['continue_anyway']) ? '?continue_anyway=1' : '';

    ?>
      <form action="install_classic.php<?php echo $continue ?>" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableh1" colspan="2"><h2>Welcome to Coppermine installation</h2>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2">Coppermine is a picture/multimedia gallery script that is being released under GNU GPL v3. Please review the documentation for <a href="docs/copyrights.htm">license details</a>.
          </td>
         </tr>
<?php
    if ($error_msg) {

        ?>
         <tr>
          <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2"> The following errors were encountered and need to be corrected first:<br /><br /><strong><?php echo $error_msg ?></strong>
          </td>
         </tr>
<?php
    }

    ?>
         <tr>
          <td class="tableh1" colspan="2"><strong>Your admin account</strong>
          </td>
         </tr>
         <tr>
          <td class="tableh2" colspan="2"> This section requires information to create your Coppermine administration account. Use only alphanumeric characters. Enter the data carefully !
          </td>
         </tr>
         <tr>
          <td width="40%" class="tableb"><strong>Username</strong>
          </td>
          <td width="60%" class="tableb">
                  <input type="text" class="textinput" name="admin_username" value="<?php echo $_POST['admin_username'] ?>" />
          </td>
         </tr>
         <tr>
          <td width="40%" class="tableb"><strong>Password</strong>
          </td>
          <td width="60%" class="tableb">
                  <input type="text" class="textinput" name="admin_password" value="<?php echo $_POST['admin_password'] ?>" />
          </td>
         </tr>
               <tr>
          <td width="40%" class="tableb"><strong>Email address</strong>
          </td>
          <td width="60%" class="tableb">
                  <input type="text" class="textinput" name="admin_email" value="<?php echo $_POST['admin_email'] ?>" />
          </td>
         </tr>
         <tr>
          <td class="tableh1" colspan="2"><strong>Your MySQL configuration</strong>
          </td>
         </tr>
         <tr>
          <td class="tableh2" colspan="2">This section requires information on how to access your MySQL database. If you don't know how to fill them, check with your webhost support.
          </td>
         </tr>
         <tr>
          <td width="40%" class="tableb"><strong>MySQL Host</strong><br />(localhost is usually OK)
          </td>
          <td width="60%" class="tableb" valign="top">
                  <input type="text" class="textinput" name="dbserver" value="<?php echo ($_POST['dbserver'] ? $_POST['dbserver'] : 'localhost') ?>" />
          </td>
         </tr>
         <tr>
          <td width="40%" class="tableb"><strong>MySQL Database Name</strong>
          </td>
          <td width="60%" class="tableb">
                  <input type="text" class="textinput" name="dbname" value="<?php echo $_POST['dbname'] ?>" />
          </td>
         </tr>
         <tr>
          <td width="40%" class="tableb"><strong>MySQL Username</strong>
          </td>
          <td width="60%" class="tableb">
                  <input type="text" class="textinput" name="dbuser" value="<?php echo $_POST['dbuser'] ?>" />
          </td>
         </tr>
         <tr>
          <td width="40%" class="tableb"><strong>MySQL Password</strong>
          </td>
          <td width="60%" class="tableb">
                  <input type="text" class="textinput" name="dbpass" value="<?php echo $_POST['dbpass'] ?>" />
          </td>
         </tr>
         <tr>
          <td width="40%" class="tableb"><strong>MySQL table prefix</strong><br />(default value is OK; do not use dots!)
          </td>
          <td width="60%" class="tableb" valign="top">
                  <input type="text" class="textinput" name="table_prefix" value="<?php echo ($_POST['table_prefix'] ? $_POST['table_prefix'] : 'cpg16x_') ?>" />
          </td>
         </tr>
         <tr>
          <td class="tableh1" colspan="2"><strong>ImageMagick</strong>
          </td>
         </tr>
         <tr>
          <td class="tableh2" colspan="2">Coppermine can use the <a href="http://www.imagemagick.org/" target="_blank">ImageMagick</a> 'convert' program to create thumbnails. Quality of images produced by ImageMagick is equivalent to GD2.<br /><br />
          If ImageMagick is installed on your system and you want to use it, you need to input the full path to the 'convert' program below. On Windows the path should look like 'c:/ImageMagick/' (use / not \ in the path) and should not contain any space, on Unix is it something like '/usr/bin/X11/'.<br />
          If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will try to use GD2 then by default (which is what most users have). You can change this later as well (in Coppermine's config screen), so don't be afraid if you're not sure what to enter here - leave it blank.
          </td>
         </tr>
         <tr>
          <td width="40%" class="tableb"><strong>ImageMagick path</strong>
          </td>
          <td width="60%" class="tableb" valign="top">
                  <input type="text" class="textinput" name="impath" value="<?php echo $_POST['impath'] ?>" />
          </td>
         </tr>
         <tr>
          <td colspan="2" align="center" class="tableh2"><br />
           <input type="submit" value="Let's Go !" /><br /><br />
          </td>
         </tr>
        </table>
      </form>
   <img src="install.php?test_gd2=1&amp;reload=<?php echo uniqid('') ?>" alt="" width="1" height="1" border="0" alt="" />
<?php
}

function html_install_success($notes)
{
    global $DFLT;

    ?>
      <form action="login.php" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableh1" colspan="2"><h2>Installation completed</h2>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2"> <a href="index.php">Coppermine</a> is now properly configured and ready to roll.<br /><br /><a href="login.php?">Login</a> using the information you provided for your admin account. Do <strong>not</strong> hit back, do <strong>not</strong> re-submit the installer form!<?php echo $notes ?>
          </td>
         </tr>
         <tr>
          <td colspan="2" align="center" class="tableh2"><br />
                   <input type="hidden" name="username" value="<?php echo $_POST['admin_username'] ?>" />
                   <input type="hidden" name="password" value="<?php echo $_POST['admin_password'] ?>" />
                  <input type="submit" name="submitted" value="Let's continue !" /><br /><br />
          </td>
         </tr>
        </table>
      </form>
<?php
}

function html_footer()
{

    ?>
  </div>
 </div>
</body>
</html>
<noscript><plaintext>
<?php
}
// ------------------------- SQL QUERIES TO CREATE TABLES ------------------ //
function create_tables()
{
    global $errors, $DFLT;

    //$PHP_SELF = $_SERVER['PHP_SELF'];
    $gallery_dir = strtr(dirname($_SERVER['PHP_SELF']), '\\', '/');
    $protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
    $gallery_url_prefix = $protocol . '://' . $_SERVER['HTTP_HOST'] . $gallery_dir . (substr($gallery_dir, -1) == '/' ? '' : '/');

    $db_schema = "{$DFLT['sql_d']}/schema.sql";
    $db_basic = "{$DFLT['sql_d']}/basic.sql";

    if (($sch_open = fopen($db_schema, 'r')) === FALSE){
            $errors .= "<hr /><br />The file '$db_schema' could not be found. Check that you have uploaded all Coppermine files to your server<br /><br />";
            return;
    } else {
            $sql_query = fread($sch_open, filesize($db_schema));
                if (($bas_open = fopen($db_basic, 'r')) === FALSE){
                        $errors .= "<hr /><br />The file '$db_basic' could not be found. Check that you have uploaded all Coppermine files to your server<br /><br />";
                    return;
            } else {
                    $sql_query .= fread($bas_open, filesize($db_basic));
            }
    }

    // Insert the admin account
    $sql_query .= "INSERT INTO CPG_users (user_id, user_group, user_active, user_name, user_password, user_lastvisit, user_regdate, user_group_list, user_email, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6, user_actkey ) VALUES (1, 1, 'YES', '{$_POST['admin_username']}', md5('{$_POST['admin_password']}'), NOW(), NOW(), '', '{$_POST['admin_email']}', '', '', '', '', '', '', '');\n";
    // Set configuration values for image package
    $sql_query .= "REPLACE INTO CPG_config VALUES ('thumb_method', '{$_POST['thumb_method']}');\n";
    $sql_query .= "REPLACE INTO CPG_config VALUES ('impath', '{$_POST['impath']}');\n";
    $sql_query .= "REPLACE INTO CPG_config VALUES ('ecards_more_pic_target', '$gallery_url_prefix');\n";
    $sql_query .= "REPLACE INTO CPG_config VALUES ('gallery_admin_email', '{$_POST['admin_email']}');\n";
    // Enable silly_safe_mode if test has shown that it is not configured properly
    if (test_silly_safe_mode() == TRUE) {
        $sql_query .= "REPLACE INTO CPG_config VALUES ('silly_safe_mode', '1');\n";
    }
    // Test write permissions for main dir
    if (!is_writable('.')) {
        $sql_query .= "REPLACE INTO CPG_config VALUES ('default_dir_mode', '0777');\n";
        $sql_query .= "REPLACE INTO CPG_config VALUES ('default_file_mode', '0666');\n";
    }
    // Update table prefix
    $sql_query = preg_replace('/CPG_/', $_POST['table_prefix'], $sql_query);

    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');

    foreach($sql_query as $q) {
        if (! mysql_query($q)) {
            $errors .= "mySQL Error: " . mysql_error() . " on query '$q'<br /><br />";
            return;
        }
    }
}
// ---------------------- CONFIGURATION FILE TEMPLATE ---------------------- //
function build_cfg_file()
{
    global $DFLT;

    return <<<EOT
<?php
// Coppermine configuration file
// MySQL configuration
\$CONFIG['dbserver'] =                         '{$_POST['dbserver']}';        // Your database server
\$CONFIG['dbuser'] =                         '{$_POST['dbuser']}';        // Your mysql username
\$CONFIG['dbpass'] =                         '{$_POST['dbpass']}';                // Your mysql password
\$CONFIG['dbname'] =                         '{$_POST['dbname']}';        // Your mysql database name


// MySQL TABLE NAMES PREFIX
\$CONFIG['TABLE_PREFIX'] =                '{$_POST['table_prefix']}';
?>
EOT;
}

function write_config_file()
{
    global $errors, $DFLT;

    test_im();
    detect_img_package();

    $config = build_cfg_file();
    @unlink($DFLT['cfg_f']);
    if ($fd = @fopen($DFLT['cfg_f'], 'wb')) {
        fwrite($fd, $config);
        fclose($fd);
    } else {
        $errors .= "<hr /><br />Unable to write config file '{$DFLT['cfg_f']}'<br /><br />";
    }
}

// --------------------------------- MAIN CODE ----------------------------- //
// Disable magic_quotes_runtime if active to allow proper reading from .sql files.
if (@get_magic_quotes_runtime()) set_magic_quotes_runtime(0);
// The defaults values
$table_prefix = $_POST['table_prefix'];
$DFLT = array('cfg_d' => 'include', // The config file dir
    'lck_f' => 'include/install.lock', // Name of install lock file
    'cfg_f' => 'include/config.inc.php', // The config file name
    'alb_d' => 'albums', // The album dir
    'upl_d' => 'userpics', // The uploaded pic dir
    'edit_d' => 'edit',
    'sql_d' => 'sql'
    );

$errors = '';
$notes = '';

if ($_GET['test_gd2']) { // GD2 test
    $im = imagecreatetruecolor(1, 1);
    imagejpeg($im, "{$DFLT['alb_d']}/{$DFLT['upl_d']}/gd2.jpg");
    header("Content-type: image/gif");
    fpassthru(fopen('images/spacer.gif'));
} elseif ($_GET['phpinfo'] && !file_exists($DFLT['cfg_f'])) {
    phpinfo();
} else { // The installer
    html_header();
    html_logo();
    if (file_exists($DFLT['cfg_f'])) {
        html_installer_locked();
    } elseif (count($_POST)) {
        test_fs();
        test_sql_connection();
        test_admin_login();

        if ($errors == '') {
            create_tables();
        }
        if ($errors != '') {
            html_input_config($errors);
        } else {
            //Config file should be written only when there are no errors.
            write_config_file();
            html_install_success($notes);
        }
    } else {
        test_fs();
        if ($errors != '')
            html_prereq_errors($errors);
        else {
            html_input_config();
        }
    }
    html_footer();
}

?>
