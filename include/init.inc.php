<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2022 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * include/init.inc.php
 * @since  1.6.20
 */

define('COPPERMINE_VERSION', '1.6.20');
define('COPPERMINE_VERSION_STATUS', 'stable');
// Define path to jQuery for this version of Coppermine
define('CPG_JQUERY_VERSION', 'js/jquery-1.12.4.js');
define('CPG_JQUERY_MIGRATE', 'js/jquery-migrate-1.4.1.js');

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

function cpgGetMicroTime()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}
$cpg_time_start = cpgGetMicroTime();

// Set a flag if register globals is on to show a warning to admin
if (ini_get('register_globals') == '1' || strtolower(ini_get('register_globals')) == 'on') {
    $register_globals_flag = true;
} else {
    $register_globals_flag = false;
}

require_once('include/inspekt.php');

// Set $strict to false to make the superglobals available
$strict = TRUE;

$superCage = Inspekt::makeSuperCage($strict);
// Remove any variables introduced by register_globals, if enabled
$keysToSkip = array('keysToSkip', 'register_globals_flag', 'superCage', 'cpg_time_start', 'key');

if ($register_globals_flag && is_array($GLOBALS)) {
    foreach ($GLOBALS as $key => $value) {
        if (!in_array($key, $keysToSkip) && isset($$key)) {
            unset($$key);
        }
    }
}

// List of valid meta albums - needed for displaying 'no image to display' message
$valid_meta_albums = array('lastcom', 'lastcomby', 'lastup', 'lastupby', 'topn', 'toprated', 'lasthits', 'random', 'search', 'lastalb', 'favpics', 'datebrowse');

// HTML tags replace pairs (used at some places for input validation)
$HTML_SUBST = array('&' => '&amp;', '"' => '&quot;', '<' => '&lt;', '>' => '&gt;', '%26' => '&amp;', '%22' => '&quot;', '%3C' => '&lt;', '%3E' => '&gt;','%27' => '&#39;', "'" => '&#39;');

// Store all reported errors in the $cpgdebugger
require_once('include/debugger.inc.php');

// used for timing purposes
$query_stats = array();
$queries     = array();

// Initialise the $CONFIG array and some other variables
$CONFIG = array();

$PHP_SELF = '';

$possibilities = array(
    'REDIRECT_URL',
    'PHP_SELF',
    'SCRIPT_URL',
    'SCRIPT_NAME',
    'SCRIPT_FILENAME'
);

foreach ($possibilities as $test) {
    if ( ($matches = $superCage->server->getMatched($test, '/([^\/]+\.php)$/')) ) {
        $CPG_PHP_SELF = $matches[1];
        break;
    }
}
/**
 * TODO: $REFERER has a potential for exploitation as the QUERY_STRING is being fetched with getRaw()
 * A probable solution is to parse the query string into its individual key and values and check
 * them against a regex, recombine and use only if all the values are safe else set referer to index.php
 */
$REFERER            = urlencode($CPG_PHP_SELF . (($superCage->server->keyExists('QUERY_STRING') && $superCage->server->getRaw('QUERY_STRING')) ? '?' . $superCage->server->getRaw('QUERY_STRING') : ''));
$ALBUM_SET          = '';
$META_ALBUM_SET     = '';
$FORBIDDEN_SET      = '';
$FORBIDDEN_SET_DATA = array();
$CURRENT_CAT_NAME   = '';
$CAT_LIST           = '';
$LINEBREAK          = "\r\n"; // For compatibility both on Windows as well as *nix

// Define some constants
define('USER_GAL_CAT', 1);
define('FIRST_USER_CAT', 10000);
define('TEMPLATE_FILE', 'template.html');
// Constants used by the cpg_die function
define('INFORMATION', 1);
define('ERROR', 2);
define('CRITICAL_ERROR', 3);

// Include config and functions files
if (file_exists('include/config.inc.php')) {
    ob_start();
    require_once 'include/config.inc.php';
    ob_clean();
} else {
    // error handling: if the config file doesn't exist go to install
    die('<html>
    <head>
      <title>Coppermine not installed yet</title>
      <meta http-equiv="refresh" content="10;url=install.php" />
      <style type="text/css">
      <!--
      body { font-size: 12px; background: #FFFFFF; margin: 20%; color: black; font-family: verdana, arial, helvetica, sans-serif;}
      -->
      </style>
    </head>
    <body>
      <img src="images/coppermine-logo.png" alt="Coppermine Photo Gallery - Your Online Photo Gallery" /><br />
      Coppermine Photo Gallery seems not to be installed correctly, or you are running coppermine for the first time. You\'ll be redirected to the installer. If your browser doesn\'t support redirect, click <a href="install.php">here</a>.
    </body>
</html>');
}

$mb_utf8_regex = '[\xE1-\xEF][\x80-\xBF][\x80-\xBF]|\xE0[\xA0-\xBF][\x80-\xBF]|[\xC2-\xDF][\x80-\xBF]';

require 'include/functions.inc.php';

// Include logger functions
include_once('include/logger.inc.php');

// see http://php.net/mbstring for details
if (function_exists('mb_internal_encoding')) {
    mb_internal_encoding('UTF-8');
}

$CONFIG['TABLE_PICTURES']      = $CONFIG['TABLE_PREFIX'].'pictures';
$CONFIG['TABLE_ALBUMS']        = $CONFIG['TABLE_PREFIX'].'albums';
$CONFIG['TABLE_COMMENTS']      = $CONFIG['TABLE_PREFIX'].'comments';
$CONFIG['TABLE_CATEGORIES']    = $CONFIG['TABLE_PREFIX'].'categories';
$CONFIG['TABLE_CONFIG']        = $CONFIG['TABLE_PREFIX'].'config';
$CONFIG['TABLE_USERGROUPS']    = $CONFIG['TABLE_PREFIX'].'usergroups';
$CONFIG['TABLE_VOTES']         = $CONFIG['TABLE_PREFIX'].'votes';
$CONFIG['TABLE_USERS']         = $CONFIG['TABLE_PREFIX'].'users';
$CONFIG['TABLE_BANNED']        = $CONFIG['TABLE_PREFIX'].'banned';
$CONFIG['TABLE_EXIF']          = $CONFIG['TABLE_PREFIX'].'exif';
$CONFIG['TABLE_FILETYPES']     = $CONFIG['TABLE_PREFIX'].'filetypes';
$CONFIG['TABLE_ECARDS']        = $CONFIG['TABLE_PREFIX'].'ecards';
$CONFIG['TABLE_FAVPICS']       = $CONFIG['TABLE_PREFIX'].'favpics';
$CONFIG['TABLE_BRIDGE']        = $CONFIG['TABLE_PREFIX'].'bridge';
$CONFIG['TABLE_VOTE_STATS']    = $CONFIG['TABLE_PREFIX'].'vote_stats';
$CONFIG['TABLE_HIT_STATS']     = $CONFIG['TABLE_PREFIX'].'hit_stats';
$CONFIG['TABLE_TEMP_MESSAGES'] = $CONFIG['TABLE_PREFIX'].'temp_messages';
$CONFIG['TABLE_CATMAP']        = $CONFIG['TABLE_PREFIX'].'categorymap';
$CONFIG['TABLE_LANGUAGE']      = $CONFIG['TABLE_PREFIX'].'languages';
$CONFIG['TABLE_DICT']          = $CONFIG['TABLE_PREFIX'].'dict';

// Connect to database
list($db_ext, $db_sub) = explode(':', $CONFIG['dbtype'].':');
$db_ext = $db_ext ?: 'mysqli';
require 'include/database/'.$db_ext.'/dbase.inc.php';
$CPGDB = new CPG_Dbase($CONFIG);

if (!$CPGDB->isConnected()) {
    log_write("Unable to connect to database: " . $CPGDB->getError(), CPG_DATABASE_LOG);
    die('<strong>Coppermine critical error</strong>:<br />Unable to connect to database !<br /><br />'.$CPGDB->db_type.' said: <strong>' . $CPGDB->getError() . '</strong>');
}

// Retrieve DB stored configuration
$result = cpg_db_query("SELECT name, value FROM {$CONFIG['TABLE_CONFIG']}");
if (!$result) cpg_db_error('When read CONFIG from database ');
while ( ($row = $result->fetchAssoc()) ) {
    $CONFIG[$row['name']] = $row['value'];
} // while
$result->free();

// Check if Coppermine is allowed to store cookies (cookie consent is required and user has agreed to store cookies)
define('CPG_COOKIES_ALLOWED', ($CONFIG['cookies_need_consent'] && !$superCage->cookie->keyExists($CONFIG['cookie_name'].'_cookies_allowed') ? false : true));

// A space cannot be stored in the config table since the value field is VARCHAR, so %20 is used instead.
if ($CONFIG['keyword_separator'] == '%20') {
    $CONFIG['keyword_separator'] = ' ';
}

if ($CONFIG['log_mode']) {
    spring_cleaning('logs', (!empty($CONFIG['log_retention']) ? $CONFIG['log_retention'] : CPG_DAY * 2));
}

// Record User's IP address
$raw_ip = $superCage->server->testIp('REMOTE_ADDR') ? $superCage->server->getEscaped('REMOTE_ADDR') : '0.0.0.0';

if ($superCage->server->testIp('HTTP_CLIENT_IP')) {
    $hdr_ip = $superCage->server->getEscaped('HTTP_CLIENT_IP');
} else {
    if ($superCage->server->testIp('HTTP_X_FORWARDED_FOR')) {
        $hdr_ip = $superCage->server->getEscaped('X_FORWARDED_FOR');
    } else {
        $hdr_ip = $raw_ip;
    }
}

// Reference 'site_url' to 'ecards_more_pic_target'
$CONFIG['site_url'] =& $CONFIG['ecards_more_pic_target'];

// Set the site_url in js_vars so that it can be used in js
set_js_var('site_url', rtrim($CONFIG['site_url'], '/'));

// Set a constant for the default language and theme (in the gallery config), since it might get replaced during runtime
define('DEFAULT_LANGUAGE', $CONFIG['lang']);
define('DEFAULT_THEME', $CONFIG['theme']);

// Check for GD GIF Create support
if ($CONFIG['thumb_method'] == 'im' || $CONFIG['thumb_method'] == 'imx' || function_exists('imagecreatefromgif')) {
    $CONFIG['GIF_support'] = 1;
} else {
    $CONFIG['GIF_support'] = 0;
}

// Include plugin API
require('include/plugin_api.inc.php');
if ($CONFIG['enable_plugins'] == 1) {
    CPGPluginAPI::load();
}

// Set UDB_INTEGRATION if enabled in admin
if ($CONFIG['bridge_enable'] == 1 && !defined('BRIDGEMGR_PHP')) {
    $BRIDGE = cpg_get_bridge_db_values();
} else {
    $BRIDGE['short_name']              = 'coppermine';
    $BRIDGE['recovery_logon_failures'] = 0;
    $BRIDGE['use_post_based_groups']   = false;
}

define('UDB_INTEGRATION', $BRIDGE['short_name']);

require_once 'bridge/' . UDB_INTEGRATION . '.inc.php';

// Start output buffering
ob_start('cpg_filter_page_html');

// Parse cookie stored user profile
user_get_profile();

// Authenticate
$cpg_udb->authenticate();

// Test if admin mode
$USER['am'] = isset($USER['am']) ? (int)$USER['am'] : 0;
define('GALLERY_ADMIN_MODE', USER_IS_ADMIN && $USER['am']);
define('USER_ADMIN_MODE', USER_ID && USER_CAN_CREATE_ALBUMS && !GALLERY_ADMIN_MODE);

// Set error logging level
// Maze's new error report system
if (!USER_IS_ADMIN) {
    if (!$CONFIG['debug_mode']) {
        $cpgdebugger->stop(); // useless to run debugger because there's no output
    }
    error_reporting(0); // hide all errors for visitors
}

$USER_DATA['allowed_albums'] = array();

if (!GALLERY_ADMIN_MODE) {
    $result = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE moderator_group IN ".USER_GROUP_SET);
    if ($result->numRows()) {
        while ( ($row = $result->fetchAssoc()) ) {
            $USER_DATA['allowed_albums'][] = $row['aid'];
        }
    }
    $result->free();
}

// Set the debug flag to be used in js var
if ($CONFIG['debug_mode'] == 1 || ($CONFIG['debug_mode'] == 2 && GALLERY_ADMIN_MODE)) {
    set_js_var('debug', true);
} else {
    set_js_var('debug', false);
}

// ********************************************************
// * Theme processing - start
// ********************************************************

$CONFIG['theme_config'] = DEFAULT_THEME;        // Save the gallery-configured setting

if ($matches = $superCage->get->getMatched('theme', '/^[A-Za-z0-9_-]+$/')) {
    $USER['theme'] = $matches[0];
    $hasURLtheme = true;
}
if (isset($USER['theme']) && !strstr($USER['theme'], '/') && is_dir('themes/' . $USER['theme'])) {
    $CONFIG['theme'] = strtr($USER['theme'], '$/\\:*?"\'<>|`', '____________');
} else {
    unset($USER['theme']);
}
// If no URL override, give plugins the chance to specify a theme
if (empty($hasURLtheme))
	$CONFIG['theme'] = CPGPluginAPI::filter('theme_name', $CONFIG['theme']);
if (!file_exists('themes/'.$CONFIG['theme'].'/theme.php')) {
    $CONFIG['theme'] = 'curve';
}
$THEME_DIR = 'themes/'.$CONFIG['theme'].'/';
require('themes/'.$CONFIG['theme'].'/theme.php');   // Load configured theme first
require('include/themes.inc.php');                  // All Fallback Theme Templates and Functions

// ********************************************************
// * Theme processing - end
// ********************************************************

if (defined('THEME_HAS_MENU_ICONS')) {
    $ICON_DIR = $THEME_DIR . 'images/icons/';
} else {
    $ICON_DIR = 'images/icons/';
}

set_js_var('icon_dir', $ICON_DIR);

// ********************************************************
// * Language processing --- start
// ********************************************************

require('lang/english.php');                    // Load the default language file: 'english.php'
$CONFIG['lang_config'] = DEFAULT_LANGUAGE;      // Save the gallery-configured setting
$CONFIG['default_lang'] = $CONFIG['lang'];      // Save default language

$enabled_languages_array = array();

$result = cpg_db_query("SELECT lang_id FROM {$CONFIG['TABLE_LANGUAGE']} WHERE enabled='YES'");
while ($row = $result->fetchAssoc()) {
    $enabled_languages_array[] = $row['lang_id'];
}
$result->free();

// Process language selection if present in URI or in user profile or try
// autodetection if default charset is utf-8
if ($matches = $superCage->get->getMatched('lang', '/^[a-z0-9_-]+$/')) {
    $USER['lang'] = $matches[0];
}

// Set the user preference to the language submit by URL parameter or by auto-detection
// Only set the preference if a corresponding file language file exists.
if (isset($USER['lang']) && !strstr($USER['lang'], '/') && file_exists('lang/' . $USER['lang'] . '.php')) {
    $CONFIG['lang'] = strtr($USER['lang'], '$/\\:*?"\'<>|`', '____________');
} elseif ($CONFIG['charset'] == 'utf-8' && $CONFIG['language_autodetect'] != 0) {
    include('include/select_lang.inc.php');
    if (file_exists('lang/' . $USER['lang'] . '.php') == TRUE) {
        if (in_array($USER['lang'], $enabled_languages_array)) {
            $CONFIG['lang'] = $USER['lang'];
        }
    }
} else {
    unset($USER['lang']);
}

if (!file_exists("lang/{$CONFIG['lang']}.php")) {
    $CONFIG['lang'] = 'english';
}

// We finally load the chosen language file if it differs from English
if ($CONFIG['lang'] != 'english') {
    require('lang/' . $CONFIG['lang'] . '.php');
}
set_js_var('lang_close', $lang_common['close']);
if (defined('THEME_HAS_MENU_ICONS')) {
    set_js_var('icon_close_path', $THEME_DIR . 'images/icons/close.png');
} else {
    set_js_var('icon_close_path', 'images/icons/close.png');
}

// ********************************************************
// * Language processing --- end
// ********************************************************

// See if the fav cookie is set; else set it
if ($superCage->cookie->keyExists($CONFIG['cookie_name'] . '_fav')) {
    $FAVPICS = @unserialize(@base64_decode($superCage->cookie->getRaw($CONFIG['cookie_name'] . '_fav')));
    foreach ($FAVPICS as $key => $id ) {
        $FAVPICS[$key] = (int)$id; //protect against sql injection attacks
    }
} else {
    $FAVPICS = array();
}

// If the person is logged in get favs from DB those in the DB have precedence
if (USER_ID > 0) {
    $result = cpg_db_query("SELECT user_favpics FROM {$CONFIG['TABLE_FAVPICS']} WHERE user_id = ".USER_ID);

    $row = $result->fetchAssoc(true);
    if (!empty($row['user_favpics'])) {
        $FAVPICS = @unserialize(@base64_decode($row['user_favpics']));
    } else {
        $FAVPICS = array();
    }
}

// Include the jquery javascript library. Jquery will be included on all pages.
js_include(CPG_JQUERY_VERSION);
js_include(CPG_JQUERY_MIGRATE);

// Include the scripts.js javascript library that contains coppermine-specific
// JavaScript that is being used on all pages.
// Do not remove this line unless you really know what you're doing
js_include('js/scripts.js');

// Include the JavaScript library that takes care of the help system.
js_include('js/jquery.greybox.js');

// Include the elastic plugin for auto-expanding textareas if debug_mode is on
js_include('js/jquery.elastic.js');

// If referer is set in URL and it contains 'http' or 'script' texts then set it to 'index.php' script
/**
 * Use $CPG_REFERER wherever $_GET['referer'] is used
 */
if ( ($matches = $superCage->get->getMatched('referer', '/((\%3C)|<)[^\n]+((\%3E)|>)|(.*http.*)|(.*script.*)|(^[\W].*)/i')) ) {
    $CPG_REFERER = 'index.php';
} else {
    /**
     * Using getRaw() since we are checking the referer in the above if condition.
     */
    $CPG_REFERER = $superCage->get->getRaw('referer');
}

/**
 * CPGPluginAPI::action('page_start',null)
 *
 * Executes page_start action on all plugins
 *
 * @param null
 * @return N/A
 **/

CPGPluginAPI::action('page_start', null);

// load the main template
load_template();
$CONFIG['template_loaded'] = true;

// Remove expired bans
$now = date('Y-m-d H:i:s');
if ($CONFIG['purge_expired_bans'] == 1) {
    cpg_db_query("DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE expiry < '$now'");
}
// Check if the user is banned
$user_id = USER_ID;
// Compose the query
$query_string = "SELECT null FROM {$CONFIG['TABLE_BANNED']} WHERE (";
if (USER_ID) {
    $query_string .= "user_id=$user_id OR ";
}
if ($raw_ip != $hdr_ip) {
    $query_string .= "'$raw_ip' LIKE ip_addr OR '$hdr_ip' LIKE ip_addr ";
} elseif ($raw_ip != '') {
    $query_string .= "'$raw_ip' LIKE ip_addr ";
}
$query_string .= ") AND brute_force=0 LIMIT 1";

$result = cpg_db_query($query_string);
unset($query_string);
if ($result->numRows()) {
    pageheader($lang_common['error']);
    msg_box($lang_common['information'], $lang_errors['banned']);
    pagefooter();
    exit;
}
$result->free();

// Retrieve the "private" album set
if (!GALLERY_ADMIN_MODE && $CONFIG['allow_private_albums']) {
    get_private_album_set();
}

if (!USER_IS_ADMIN && $CONFIG['offline'] && $CPG_PHP_SELF != 'login.php' && $CPG_PHP_SELF != 'update.php') {
    pageheader($lang_errors['offline_title']);
    msg_box($lang_errors['offline_title'], $lang_errors['offline_text']);
    pagefooter();
    exit;
}
//EOF