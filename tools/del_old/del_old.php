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
$lang['delete_old'] = 'Delete files that are older than a set number of days';
$lang['delete_old_explanation'] = 'This will delete files that are older than the number of days you specify (full-size, intermediate, thumbnails). Use this feature to free up disk space.';
$lang['delete_old_warning'] = 'Warning: the files you specify will be deleted for good without further warnings!';
//$lang['deleting_old'] = 'Deleting older images, please wait...';
$lang['older_than'] = 'Delete files older than %s days';
$lang['del_cnt'] = '%s Old images were deleted';
$lang['error_not_found'] = 'The file <em>%s</em> was not found';
$lang['del_error'] = 'Error deleting <em>%s</em>';


class CPG_ToolDel_old extends AdminTool
{
	protected $toolname = 'del_old';

	public function describe ()
	{
		return $this->_('delete_old');
	}

	public function displayUI ()
	{
		return
			$this->_('delete_old_explanation') . '<br>
			<span style="color:red">' . $this->_('delete_old_warning') . '</span><br>' .
			sprintf($this->_('older_than'),'<input type="text" name="day_number" value="365" size="5" class="textinput"/>')
			;
	}

	public function action ()
	{
		$days = $this->scp->getInt('day_number');

		$start = time() - ($days * 86400);

		$ctime = ($this->albstr ? ' AND' : ' WHERE') . ' ctime <= ' . $start;

		$delete_counter = 0;
		$result = cpg_db_query("SELECT pid, filepath, filename FROM {$this->config['TABLE_PICTURES']}{$this->albstr}{$ctime}");

		while ($row = $result->fetchAssoc()) {

			$pid = $row['pid'];
			$path = $this->config['fullpath'] . $row['filepath'];
			$image = $path . $row['filename'];
			$normal = $path . $this->config['normal_pfx'] . $row['filename'];
			$thumb = $path . $this->config['thumb_pfx'] . $row['filename'];

			$files = array('del_intermediate'=>$normal, 'del_orig'=>$image, 'del_thumb'=>$thumb);

			foreach ($files as $kt => $file) {
				if (file_exists($file)) {

					if (unlink($file)) {
				//		printf($this->_($kt), $file);
					} else {
						printf($this->_('del_error').'<br>', $file);
						$this->errcnt++;
					}

				} else {
					printf($this->_('error_not_found').'<br>', $file);
					$this->wrncnt++;
				}
			}

			cpg_db_query("DELETE FROM {$this->config['TABLE_PICTURES']} WHERE pid = $pid");
			cpg_db_query("DELETE FROM {$this->config['TABLE_COMMENTS']} WHERE pid = $pid");
			cpg_db_query("DELETE FROM {$this->config['TABLE_EXIF']} WHERE pid = $pid");

			$delete_counter++;
		}

		$result->free();

		$this->done(sprintf($this->_('affected_records'), $delete_counter));
	}

}