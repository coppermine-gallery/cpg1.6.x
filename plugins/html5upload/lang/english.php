<?php
if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

$lang_plugin_html5upload['plug_desc'] = 'Adds HTML5 multi-file upload capabilities, including drag-and-drop';
$lang_plugin_html5upload['plug_info'] = 'This plugin provides a method for multi-file, concurrent file uploads using HTML5 and javascript within capable browsers. Uploaded files are processed by the native CPG processing routines.';

$lang_plugin_html5upload['html5_method'] = 'Multiple files - HTML5-driven';
$lang_plugin_html5upload['html5upload'] = 'HTML5 Upload';
$lang_plugin_html5upload['title'] = 'HTML5 Upload Form';
$lang_plugin_html5upload['upldfiles'] = 'Upload files';
$lang_plugin_html5upload['files'] = 'Files';
$lang_plugin_html5upload['flistitl'] = 'Use file name as title';
$lang_plugin_html5upload['albmSelMsg'] = 'Please select an album first.';
$lang_plugin_html5upload['drop_files'] = 'Or drop files here';
$lang_plugin_html5upload['files_left'] = 'Files queued: ';
$lang_plugin_html5upload['continue'] = 'Continue:';
$lang_plugin_html5upload['gotoedit'] = 'Edit uploaded files';

$lang_plugin_html5upload['maxUplSiz'] = 'Maximum upload file size';	//v1.3
$lang_plugin_html5upload['select'] = 'Number of concurrent uploads';
$lang_plugin_html5upload['acptmime'] = 'Mime type filters for browser file select';
$lang_plugin_html5upload['autoedit'] = 'Automatically go to edit after error-free upload completes';
$lang_plugin_html5upload['incflds'] = 'Include fields:';
$lang_plugin_html5upload['saved'] = 'Your settings have been saved.';
$lang_plugin_html5upload['revert'] = 'Revert to default';	//v1.3

$lang_plugin_html5upload['notavail'] = 'NOT AVAILABLE WITH THIS WEB BROWSER';
$lang_plugin_html5upload['aborted'] = 'aborted';
$lang_plugin_html5upload['type_err'] = 'Cannot upload a file of this type. (extension)';
$lang_plugin_html5upload['size_err'] = 'File is larger than max size allowed.';
$lang_plugin_html5upload['extallow'] = 'Only files with the following extensions are allowed: ';

$lang_plugin_html5upload['q_stop'] = 'stop queue';
$lang_plugin_html5upload['q_resume'] = 'resume queue';
$lang_plugin_html5upload['q_cancel'] = 'cancel queue';

//v1.3.2 chunked
$lang_plugin_html5upload['muf_err'] = 'Error saving chunk #%d for file %s ( %s %s )';
$lang_plugin_html5upload['miss_chnk'] = 'Missing file chunks';
$lang_plugin_html5upload['dest_fail'] = 'Cannot create the destination file: %s';
?>