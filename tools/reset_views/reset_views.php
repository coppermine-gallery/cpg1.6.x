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
 * @since  1.6.06
 */

/* declare each item separately - not as an entire array() */
$lang['reset_views'] = 'Reset view counters';
$lang['reset_views_explanation'] = 'Sets all file view counts to zero in the album specified.';
$lang['reset_success'] = 'Reset successful';
$lang['del_error'] = 'Error deleting <em>%s</em>';


class CPG_ToolReset_views extends AdminTool
{
	protected $toolname = 'reset_views';

	public function describe ()
	{
		return $this->_('reset_views');
	}

	public function displayUI ()
	{
		return $this->_('reset_views_explanation');
	}

	public function action ()
	{
		cpg_db_query("UPDATE {$this->config['TABLE_PICTURES']} SET hits = 0{$this->albstr}");
		cpg_db_query("UPDATE {$this->config['TABLE_ALBUMS']} SET alb_hits = 0{$this->albstr}");

		echo $this->_('reset_success');
	}

}