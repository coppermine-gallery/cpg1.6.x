<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * tools/del_norm/del_norm.php
 * @since  1.6.06
 */

/* declare each item separately - not as an entire array() */
$lang['delete_intermediate'] = 'Delete intermediate pictures';
$lang['delete_intermediate_explanation1'] = 'This will delete intermediate (normal) pictures.';
$lang['delete_intermediate_explanation2'] = 'Use this to free up disk space if you have disabled \'Create intermediate pictures\' in config after adding pictures.';
$lang['delete_intermediate_check'] = 'The config option \'Create intermediate pictures\' is currently %s.';
$lang['del_cnt'] = '%s Intermediate images were deleted';
$lang['error_not_found'] = 'The file <em>%s</em> was not found';
$lang['del_error'] = 'Error deleting <em>%s</em>';


class CPG_ToolDel_norm extends AdminTool
{
	protected $toolname = 'del_norm';

	public function describe ()
	{
		return $this->_('delete_intermediate');
	}

	public function displayUI ()
	{
		$ics = ($this->config['make_intermediate'] == 1) ? $this->_('enabled') : $this->_('disabled');
		return
			$this->_('delete_intermediate_explanation1') . '<br>' .
			$this->_('delete_intermediate_explanation2') . '<br>' .
			sprintf($this->_('delete_intermediate_check'), $ics)
			;
	}

	public function action ()
	{
		$result = cpg_db_query("SELECT pid, filepath, filename FROM {$this->config['TABLE_PICTURES']}{$this->albstr}");

		$dcnt = 0;
		$ecnt = 0;
	
		while ($row = $result->fetchAssoc()) {
			$pid = $row['pid'];
			$path = $this->config['fullpath'] . $row['filepath'];
			$image = $path . $row['filename'];
			$normal = $path . $this->config['normal_pfx'] . $row['filename'];
			$thumb = $path . $this->config['thumb_pfx'] . $row['filename'];

			if (file_exists($normal)) {

				if (unlink($normal)) {

					$total_filesize = filesize($image) + filesize($thumb);

					cpg_db_query("UPDATE {$this->config['TABLE_PICTURES']} SET total_filesize = '$total_filesize' WHERE pid = $pid");

				//	printf($this->_('del_intermediate'), $normal);
					$dcnt++;
				} else {
					printf($this->_('del_error').'<br>', $normal);
					$this->errcnt++;
				}
			} else {
				printf($this->_('error_not_found').'<br>', $normal);
				$this->wrncnt++;
			}
		}
		$result->free();

		$this->done(sprintf($this->_('del_cnt'), $dcnt));
	}

}