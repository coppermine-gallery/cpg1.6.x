<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * uniload.php
 * @since  1.6.04
 */

// Confirm we are in Coppermine and set the language blocks.
define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);
define('DB_INPUT_PHP', true);
define('ADMIN_PHP', true);

define('H5U_LOG','h5upload');

//file_put_contents('chunklog.txt', print_r($_POST, true).print_r($_FILES, true), FILE_APPEND);

$upload_log ='';
function upldLog ($msg)
{
	global $upload_log;
	$upload_log .= "\n" . time() . ' :: ' . $msg;
}
upldLog('enter uniload');

function uni_exception ($e)
{
	global $superCage;
	$base = $superCage->server->getRaw('DOCUMENT_ROOT') . dirname($superCage->server->getRaw('SCRIPT_NAME'));
	$file = str_replace($base,'',$e->getFile());
	$msg = $e->getMessage() .'<br>'.$file.' line:'.$e->getLine();
	errorOut($lang_upload_php['failure'] . $msg, 0, __FILE__, __LINE__);
}

// return an error when failing to complete
function errorOut ($msg, $code=0, $_file=0, $_line=0)
{
	global $CONFIG, $h5u_debug, $upload_form;

	if ($h5u_debug) {
		$msg .= " #{$code} {$_file} @{$_line}";
		upldLog('FAIL = '.$msg);
		log_write($upload_log, H5U_LOG);
	}

	if ($upload_form == 'upload_swf') {
		$msg = 'error|'.str_replace('<br>',"\n",$msg).'|0';
		die($msg);
	}

	header("HTTP/1.0 430 \"{$msg}\"");
	echo $msg;
	exit();
}

// an override used to capture 'cpg_die' calls
function theme_cpg_die ($msg_code, $msg_text, $msg_string, $css_class, $error_file, $error_line, $output_buffer, $ob)
{
	errorOut($msg_text.$msg_string);
}

function uni_exit ()
{
	global $h5u_debug, $upload_log, $is_simple;
	if ($h5u_debug) {
		upldLog('exit uniload');
		log_write($upload_log, H5U_LOG);
	}
	if (!$is_simple) exit();
}

//chdir(dirname(dirname(dirname(__FILE__))));

set_exception_handler('uni_exception');

// Call basic functions, etc.
require('include/init.inc.php');
require('include/picmgmt.inc.php');

error_reporting(-1);	ini_set('log_errors', '1');
//file_put_contents('plugins/upload_h5a/chunklog.txt', "\nSCF ".print_r($superCage->files->getInt('/Filedata/error'), true), FILE_APPEND);

$h5u_debug = !!($CONFIG['debug_mode']==1 || ($CONFIG['debug_mode']==2 && GALLERY_ADMIN_MODE));

$grpn = USER_ID > 0 ? (int) $USER_DATA['group_id'] : 0;
$grpc = $grpn ? $grpn : '';
$h5u_cfg = isset($CONFIG['upload_h5a'.$grpc]) ? unserialize($CONFIG['upload_h5a'.$grpc]) : unserialize($CONFIG['upload_h5a']);

upldLog('h5u_cfg = '.print_r($h5u_cfg,true));

//################################# MAIN CODE BLOCK ##################################################

function _check_fn_ext ($picname)
{
	global $CONFIG, $lang_db_input_php, $matches;

	// Analyze the file extension using regular expressions.
	if (!preg_match('/(.+)\.(.*?)\Z/', $picname, $matches)) {

		// The file name is invalid.
		$matches[1] = 'invalid_fname';

		// Make a bogus file extension to trigger Coppermine's defenses.
		$matches[2] = 'xxx';
	}

	// If there is no extension, or if the extension is unknown/not permitted by Coppermine, zap the intruder.
	if ($matches[2] == '' || !is_known_filetype($matches)) {
		// We reject the file, and make a note of the error.
		errorOut($lang_db_input_php['err_invalid_fext'].' '.preg_replace('/\//',', ',$CONFIG['allowed_file_extensions']), 0, __FILE__, __LINE__);
	}

	return $matches[2];
}

$matches = $superCage->post->getMatched('method','/^[0-9A-Za-z_]+$/');
$upload_form = $matches[0];
$is_simple = ($upload_form == 'upload_sgl') ? true : false;

// Check to see if user can upload pictures.  Quit with an error if user cannot.
if (!USER_CAN_UPLOAD_PICTURES && !USER_CAN_CREATE_ALBUMS) {
	errorOut($lang_errors['perm_denied'], 0, __FILE__, __LINE__);
}

// Get the album id
if ($superCage->post->keyExists('album')) {
	$sel_album = $superCage->post->getInt('album');
} else {
	$sel_album = 0;
}

// Get public and private albums, and set maximum individual file size.

if (GALLERY_ADMIN_MODE) {
	$public_albums = cpg_db_query("SELECT aid, title, cid, name FROM {$CONFIG['TABLE_ALBUMS']} INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT);
	//select albums that don't belong to a category
	$public_albums_no_cat = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0");
} else {
	$public_albums = cpg_db_query("SELECT aid, title, cid, name FROM {$CONFIG['TABLE_ALBUMS']} INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT . ' AND ((uploads=\'YES\' AND (visibility = \'0\' OR visibility IN '.USER_GROUP_SET.' OR alb_password != \'\')) OR (owner='.USER_ID.'))');
	//select albums that don't belong to a category
	$public_albums_no_cat = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0 AND ((uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.' OR alb_password != \'\')) OR (owner='.USER_ID.'))');
}

if ($public_albums->numRows()) {
	$public_albums_list = cpg_db_fetch_rowset($public_albums, true);
} else {
	$public_albums_list = array();
}

//do the same for non-categorized albums
if ($public_albums_no_cat->numRows()) {
	$public_albums_list_no_cat = cpg_db_fetch_rowset($public_albums_no_cat, true);
} else {
	$public_albums_list_no_cat = array();
}

//merge the 2 album arrays
$public_albums_list = array_merge($public_albums_list, $public_albums_list_no_cat);

if (USER_ID) {
	$user_albums = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . '\' ORDER BY title');
	if ($user_albums->numRows()) {
		$user_albums_list = cpg_db_fetch_rowset($user_albums, true);
	} else {
		$user_albums_list = array();
	}
} else {
	$user_albums_list = array();
}

if (!count($public_albums_list) && !count($user_albums_list)) {
	// there's no album where the user is allowed to upload to
	if (USER_CAN_CREATE_ALBUMS) {
		errorOut($lang_upload_php['err_no_alb_uploadables'].'<br />&nbsp;<br /><a href="albmgr.php" title="'.$lang_user_admin_menu['albmgr_title'].'" class="admin_menu">'.$lang_user_admin_menu['albmgr_lnk'].'</a>', 0, __FILE__, __LINE__);
	} else {
		errorOut($lang_upload_php['err_no_alb_uploadables'], 0, __FILE__, __LINE__);
	}
}

// Get maximum file size
$max_file_size = $h5u_cfg['upldsize'] ? $h5u_cfg['upldsize'] : $CONFIG['max_upl_size'] * 1024;

// Make sure there is no output yet
ob_clean();

if (!checkFormToken()) {
	errorOut($lang_errors['invalid_form_token'], 1, __FILE__, __LINE__);
}

//file_put_contents('chunklog.txt', "\ntok ".print_r($superCage->files->getInt('/Filedata/error'), true), FILE_APPEND);

// process any chunked upload actions
$is_a_chunk = false;
$matches = array();
if ($superCage->post->keyExists('chunkact')) {
	if ($superCage->files->getInt('/Filedata/error')) uni_exit();
	require_once('upchunk.php');
	$chunkObj = new UpChunkObj($superCage->post);
	switch ($superCage->post->getEscaped('chunkact')) {
		case 'pref':
			_check_fn_ext($superCage->post->getEscaped('file'));
			if ($max_file_size && $superCage->post->getInt('size') > $max_file_size)
				errorOut($lang_upload_php['exc_file_size'], 0, __FILE__, __LINE__);
			uni_exit();
			break;
		case 'chnk':
			$is_a_chunk = true;
			break;
		case 'fini':
			break;
		case 'abrt':
			$chunkObj->cleanup();
			uni_exit();
			break;
		default:
			uni_exit();
	}
}

$error_code = $superCage->files->getInt('/Filedata/error');
upldLog('file error code: '.$error_code);

// Check for upload errors
if (!($error_code == '0')) {
	// PHP has detected a file upload error.
	if ($error_code == '1') {
		$error_message = $lang_upload_php['exc_php_ini'];
	} elseif ($error_code == '2') {
		$error_message = $lang_upload_php['exc_file_size'];
	} elseif ($error_code == '3') {
		$error_message = $lang_upload_php['partial_upload'];
	} elseif ($error_code == '4') {
		$error_message = $lang_upload_php['no_upload'];
	} else {
		$error_message = $lang_upload_php['unknown_code'];
	}

	//Make a note in the error array.
	errorOut($error_message, 0, __FILE__, __LINE__);
}

if (!$superCage->files->getRaw('/Filedata/name')) {
	errorOut($lang_upload_php['no_name'], 0, __FILE__, __LINE__);
}

if (!$superCage->files->getRaw('/Filedata/tmp_name')) {
	errorOut($lang_upload_php['no_tmp_name'], 0, __FILE__, __LINE__);
}

// Check to make sure the file was uploaded via POST.
if (!is_uploaded_file($superCage->files->getRaw('/Filedata/tmp_name'))) {
	// We reject the file, and return the error.
	errorOut($lang_upload_php['no_post'], 0, __FILE__, __LINE__);
}

// Check the size of the file if $max_file_size is set to greater than 0
if ($max_file_size && filesize($superCage->files->getRaw('/Filedata/tmp_name')) > $max_file_size) {
	// We reject this files as file size exceeds the value set in config
	errorOut($lang_upload_php['exc_file_size'], 0, __FILE__, __LINE__);
}

if ($is_a_chunk) {
	// accumulate the chunk then exit if the file is not complete
	if (!$chunkObj->addChunk($superCage->files->getRaw('/Filedata/tmp_name'), $superCage->post->getInt('chunkNumber'))) {
		uni_exit();
	}
	$picture_name = $superCage->post->getEscaped('filename');
}

// Get any available file properties
$title = $superCage->post->getEscaped('title');
$caption = $superCage->post->getEscaped('caption');
$keywords = $superCage->post->getEscaped('keywords');
$user1 = $superCage->post->getEscaped('user1');
$user2 = $superCage->post->getEscaped('user2');
$user3 = $superCage->post->getEscaped('user3');
$user4 = $superCage->post->getEscaped('user4');

// Check filename and extension:
// Check that the file uploaded has a valid name and extension, and replace forbidden chars with underscores.
// Initialise the $matches array.
$matches = array();

if (!$is_a_chunk) {
	// If magic quotes is on, remove the slashes it added to the file name.
	if (get_magic_quotes_gpc()) {
		//Using getRaw() as we have custom sanitization code below
		$picture_name = stripslashes($superCage->files->getRaw('/Filedata/name'));
	} else {
		$picture_name = $superCage->files->getRaw('/Filedata/name');
	}
}

$picture_name = CPGPluginAPI::filter('upload_file_name', $picture_name);

if ($superCage->post->getInt('flistitl')) {
	$parts = pathinfo($picture_name);
	$title = $parts['filename'];
}

// Create the holder $picture_name by translating the file name. Translate any forbidden character into an underscore.
$picture_name = replace_forbidden($picture_name);

// Now we need to move the file into the /edit directory.
// We need specify the path for the transitory file.
// Create a prefix for easier human recognition.
$prefix = 'mHTTP_temp_';

//Set the correct file extension.
$suffix = _check_fn_ext($picture_name);		//$matches[2];

// Generate the unique name. Keep generating new names until one that is not in use is found.
do {

	// Create a random seed by taking the first 8 characters of an MD5 hash of a concatenation of the current UNIX epoch time and the current server process ID.
	$seed = substr(md5(uniqid('')), 0, 8);

	// Assemble the file path.
	$path_to_image = './'.$CONFIG['fullpath'].'edit/'. $prefix . $seed . '.' . $suffix;

} while (file_exists($path_to_image));

// Create a holder called $tempname.
$tempname = $prefix . $seed . '.' . $suffix;

if ($is_a_chunk) {
	$chunkObj->combineTo($path_to_image);
	$chunkObj->cleanup();
} else {
	upldLog('start MUF');
	if (!(move_uploaded_file($superCage->files->getRaw('/Filedata/tmp_name'), $path_to_image))) {
		// The file move failed.
		errorOut($lang_upload_php['impossible'], 0, __FILE__, __LINE__);
	}
	upldLog('end MUF');
}

// Change file permission
@chmod($path_to_image, octdec($CONFIG['default_file_mode'])); //silence the output in case chmod is disabled

// Check that an image is valid
if (is_image($path_to_image) && !cpg_getimagesize($path_to_image)) {
	@unlink($path_to_image);
	errorOut($lang_db_input_php['err_invalid_img'], 0, __FILE__, __LINE__);
}

// Create a testing alias.
$picture_alias = $matches[1].'.'.$matches[2];

// Check if user selected an album to upload picture to. If not, die with error.
// added by frogfoot
$album = $superCage->post->getInt('album');

// If no album was select then give an error
if (!$album) {
	errorOut($lang_db_input_php['album_not_selected'], 0, __FILE__, __LINE__);
}

// Check if the album id provided is valid
if (!GALLERY_ADMIN_MODE) {
	$result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album' and (uploads = 'YES' OR category = '" . (USER_ID + FIRST_USER_CAT) . '\' OR owner = \'' . USER_ID . '\')');
	if ($result->numRows() == 0) {
		errorOut($lang_db_input_php['unknown_album'], 1, __FILE__, __LINE__);
	}
	$row = $result->fetchArray(true);
	$category = $row['category'];
} else {
	$result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'");
	if ($result->numRows() == 0) {
		errorOut($lang_db_input_php['unknown_album'], 1, __FILE__, __LINE__);
	}
	$row = $result->fetchArray(true);
	$category = $row['category'];
}

// Pictures are moved in a directory named 10000 + USER_ID
if (USER_ID && $CONFIG['silly_safe_mode'] != 1) {
	$filepath = $CONFIG['userpics'] . (USER_ID + FIRST_USER_CAT);
	$dest_dir = $CONFIG['fullpath'] . $filepath;
	if (!is_dir($dest_dir)) {
		mkdir($dest_dir, octdec($CONFIG['default_dir_mode']));
		if (!is_dir($dest_dir)) {
			errorOut(sprintf($lang_db_input_php['err_mkdir'], $dest_dir), 1, __FILE__, __LINE__);
		}
		@chmod($dest_dir, octdec($CONFIG['default_dir_mode'])); //silence the output in case chmod is disabled
		$fp = fopen($dest_dir . '/index.php', 'w');
		fwrite($fp, ' ');
		fclose($fp);
	}
	// Upload pictures in a sub-directory named according to the album ID
	if ($CONFIG['upload_create_album_directory']) {
		$filepath .= '/'.$album;
		$dest_dir .= '/'.$album;
		if (!is_dir($dest_dir)) {
			mkdir($dest_dir, octdec($CONFIG['default_dir_mode']));
			if (!is_dir($dest_dir)) {
				errorOut(sprintf($lang_db_input_php['err_mkdir'], $dest_dir), 1, __FILE__, __LINE__);
			}
			@chmod($dest_dir, octdec($CONFIG['default_dir_mode'])); //silence the output in case chmod is disabled
			$fp = fopen($dest_dir . '/index.php', 'w');
			fwrite($fp, ' ');
			fclose($fp);
		}
	}
	$dest_dir .= '/';
	$filepath .= '/';
} else {
	$filepath = $CONFIG['userpics'];
	$dest_dir = $CONFIG['fullpath'] . $filepath;
}

// Check that target dir is writable
if (!is_writable($dest_dir)) {
	errorOut(sprintf($lang_db_input_php['dest_dir_ro'], $dest_dir), 1, __FILE__, __LINE__);
}

//Add the Perl regex to break the actual name.
preg_match('/(.+)\.(.*?)\Z/', $picture_alias, $matches);

// Create a unique name for the uploaded file
$nr = 0;
$picture_name = $matches[1] . '.' . $matches[2];
while (file_exists($dest_dir . $picture_name)) {
	$picture_name = $matches[1] . '~' . $nr++ . '.' . $matches[2];
}

// Create path for final location.
$uploaded_pic = $dest_dir . $picture_name;

// Form path to temporary image.
$path_to_image = './'.$CONFIG['fullpath'].'edit/'.$tempname;

// prevent moving the edit directory...
if (is_dir($path_to_image)) {
	errorOut($lang_upload_php['failure'] . " - '$path_to_image'", 0, __FILE__, __LINE__);
}

// Set config for auto-orientation if requested
if ($superCage->post->getInt('autorient')) {
	$CONFIG['autorient'] = 1;
}

// Move the picture into its final location
if (rename($path_to_image, $uploaded_pic)) {

	// Change file permission
	@chmod($uploaded_pic, octdec($CONFIG['default_file_mode'])); //silence the output in case chmod is disabled
	$CURRENT_PIC_DATA = array();
	// Create thumbnail and intermediate image and add the image into the DB
	$result = add_picture($album, $filepath, $picture_name, 0, $title, $caption, $keywords, $user1, $user2, $user3, $user4, $category);

	if ($result !== true) {
		// The file could not be placed.
		$file_placement = 'no';
	} else {
		$CURRENT_PIC_DATA['url_prefix'] = 0;
		// The file was placed successfully.
		$file_placement = 'yes';
		$thumb_url = get_pic_url($CURRENT_PIC_DATA, 'thumb');
	}
} else {
	// The file was not placed successfully.
	$file_placement = 'no';
}

if ($file_placement == 'yes') {
	// The previous picture was placed successfully.
	if ($upload_form == 'upload_swf') {
		echo "success". ($PIC_NEED_APPROVAL ? '1' : '0') . "|" . $thumb_url;
	} else if ($is_simple) {
		if ($PIC_NEED_APPROVAL && $CONFIG['upl_notify_admin_email']) {
			include_once('include/mailer.inc.php');
			cpg_mail('admin', sprintf($lang_db_input_php['notify_admin_email_subject'], $CONFIG['gallery_name']), make_clickable(sprintf($lang_db_input_php['notify_admin_email_body'], USER_NAME, $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .'editpics.php?mode=upload_approval')));
		}
		if (cpg_pw_protected_album_access($CURRENT_PIC_DATA['aid']) === 1) {
			$redirect = "thumbnails.php?album=" . $CURRENT_PIC_DATA['aid'];
		} else {
			$redirect = "displayimage.php?pid=" . $CURRENT_PIC_DATA['pid'];
		}
		cpgRedirectPage($redirect, $lang_db_input_php['info'], $lang_db_input_php['upload_success'], 1);
	}
} else {
	// The previous image placement failed.
	if (isset($result['error'])) {
		if (isset($result['halt_upload'])) {
			errorOut($result['error'], $result['halt_upload'], __FILE__, __LINE__);
	} else {
			errorOut($result['error'], 0, __FILE__, __LINE__);
		}
	} else {
		errorOut($lang_upload_php['no_place'] .'*'. $path_to_image .'*'.$uploaded_pic , 0, __FILE__, __LINE__);
	}
}

uni_exit();
//EOF