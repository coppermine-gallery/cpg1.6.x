<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2019 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * include/tool.class.php
 * @since  1.6.07
 */
if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

abstract class AdminTool extends CPG_Object
{
	public $progressive = false;

	protected $scp,			// superCage->post object
		$albumid,			// albumid # extracted from post
		$albstr,			// sql album WHERE clause for use in query
		$procnum = 10,		// number of items to process per pass (progressive)
		$skpcnt = 0,		// count of skipped items
		$wrncnt = 0,		// count of warnings
		$errcnt = 0;		// count of errors

	public function __construct (Inspekt_Cage $scp, $lang)
	{
		global $lang_util_php;	// for now we'll merge/use the core language

		parent::__construct();
		$this->scp = $scp;
		$this->albumid = $scp->keyExists('albumid') ? $scp->getInt('albumid') : 0;
		$this->albstr = $this->albumid ? " WHERE aid={$this->albumid}" : '';
		// attempt to load language files
		if (!empty($this->toolname)) {
			$tn = $this->toolname;
			if (is_dir('tools/'.$tn.'/lang')) {
				include 'tools/'.$tn.'/lang/english.php';
				if ($this->config['lang'] != 'english') {
					include 'tools/'.$tn.'/lang/'.$this->config['lang'].'.php';
				}
			}
			$this->lang = array_merge($this->lang, $lang_util_php, $lang);	// for now we'll merge in the core language
		}
	}

	public static function getTool ($tool)
	{
		global $superCage;
		if (!$tool) return null;
		$tclass = 'CPG_Tool'.ucfirst($tool);
		$lang = array();
		include_once 'tools/'.$tool.'/'.$tool.'.php';
		// Create the tool object with the SC post object and any $lang strings that were in the file
		if (class_exists($tclass)) {
			$tobj = new $tclass($superCage->post, $lang);
			return $tobj;
		} else return null;
	}

	// Process the tool
	// return next index along with warning and error counts
	public function _process ()
	{
		if ($this->scp->keyExists('skps')) $this->skpcnt = $this->scp->getInt('skps');
		if ($this->scp->keyExists('wrns')) $this->wrncnt = $this->scp->getInt('wrns');
		if ($this->scp->keyExists('errs')) $this->errcnt = $this->scp->getInt('errs');
		$nxi = $this->process();
		return array('nxi'=>$nxi, 'skps'=>$this->skpcnt, 'wrns'=>$this->wrncnt, 'errs'=>$this->errcnt);
	}

	// Method to display tool completion message with status
	protected function done ($msg, $stat='success')
	{
		if ($this->skpcnt) {
			$stat = 'info';
			$msg .= '<br>'.$this->skpcnt.' '.$this->_('skipped');
		}
		if ($this->wrncnt) {
			$stat = 'warning';
			$msg .= '<br>'.$this->wrncnt.' '.$this->_('warnings');
		}
		if ($this->errcnt) {
			$stat = 'error';
			$msg .= '<br>'.$this->errcnt.' '.$this->_('errors');
		}
		msg_box('', $msg, '', '', $stat);
	}


	//==== PLACEHOLDERS FOR OVERRIDDEN METHODS ====

	// Return a description of the tool
	public function describe ()
	{
		return '';
	}

	// Return the UI elements
	public function displayUI ()
	{
		return '';
	}

	// Perform the (non-progressive) action
	public function action ()
	{
		return false;
	}

	// For progressive tools - return the total number of actions to be taken
	public function total ()
	{
		return 0;
	}

	// For progressive tools - process a number of actions
	// return the index number of the next item to be processed (-1 if none)
	public function process ()
	{
		return -1;
	}

}

abstract class CPG_Object
{
	protected
		$config,	// reference to global $CONFIG
		$lang;		// language strings; merged into by subclasses

	public function __construct ()
	{
		global $CONFIG, $lang_common;
		$this->config =& $CONFIG;
		$this->lang = $lang_common;
		register_shutdown_function(array($this, 'check_for_fatal'));
	}

	public function check_for_fatal ()
	{
		if ($error = error_get_last()) {
			if ($error['type'] == E_ERROR) {
				cpg_die(CRITICAL_ERROR, $error['message'], $error['file'], $error['line']);
			} else {
				cpg_die(ERROR, $error['message'], $error['file'], $error['line']);
			}
		}
	}

	// Method to get language strings
	protected function _ ($str, $ix=null)
	{
		if ($ix && isset($this->lang[$str]) && is_array($this->lang[$str])) {
			return isset($this->lang[$str][$ix]) ? $this->lang[$str][$ix] : ('UNDEFINED:'.$str.'.'.$ix);
		} else {
			return isset($this->lang[$str]) ? $this->lang[$str] : ('UNDEFINED:'.$str);
		}
	}

}

