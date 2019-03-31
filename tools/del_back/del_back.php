<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * tools/del_back/del_back.php
 * @since  1.6.06
 */

/* declare each item separately - not as an entire array() */
$lang['delete_back'] = 'Delete original image backup for watermarked images';
$lang['delete_back_explanation'] = 'This will delete the backup image. You will save some disk space but not be able anymore to undo the watermark!!! After that the watermark will be permanent.';
$lang['del_error'] = 'Error deleting <em>%s</em>';


class CPG_ToolDel_back extends AdminTool
{
	protected $toolname = 'del_back';

	public function describe ()
	{
		return $this->_('delete_back');
	}

	public function displayUI ()
	{
		return $this->_('delete_back_explanation');
	}

	public function action ()
	{
		$result = cpg_db_query("SELECT filepath, filename FROM {$this->config['TABLE_PICTURES']}{$this->albstr}");

		$i = 0;
		$fullpath = $this->config['fullpath'];
		$orig_pfx = $this->config['orig_pfx'];

		while ($row = $result->fetchAssoc()) {

			$back = $fullpath . $row['filepath'] . $orig_pfx . $row['filename'];

			if (file_exists($back)) {
				if (unlink($back)) {
					printf($this->_('del_orig'), $back);
				} else {
					printf($this->_('del_error'), $back);
					$this->errcnt++;
				}
				$i++;
				echo '<br>';
			}
		}
		$result->free();

		if ($i == 0) {
			$this->done($this->_('nothing_deleted'), 'warning');
		} else {
			$this->done($this->_('complete'));
		}
	}

}