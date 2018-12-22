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
$lang['delete_original'] = 'Delete original size photos';
$lang['delete_original_explanation'] = 'This will remove the full sized pictures.';
$lang['del_cnt'] = '%s Original images were deleted';
$lang['error_not_found'] = 'The file <em>%s</em> was not found';
$lang['del_error'] = 'Error deleting <em>%s</em>';
$lang['err_cnt'] = 'No success in deleteing %s Original images';


class CPG_ToolDel_orig extends AdminTool
{
	protected $toolname = 'del_orig';

	public function describe ()
	{
		return $this->_('delete_original');
	}

	public function displayUI ()
	{
		return $this->_('delete_original_explanation');
	}

	public function action ()
	{
		$dcnt = 0;

		$result = cpg_db_query("SELECT pid, filepath, filename FROM {$this->config['TABLE_PICTURES']}{$this->albstr}");

		while ($row = $result->fetchAssoc()) {

			$pid = $row['pid'];
			$path = $this->config['fullpath'] . $row['filepath'];
			$image = $path . $row['filename'];
			$normal = $path . $this->config['normal_pfx'] . $row['filename'];
			$thumb = $path . $this->config['thumb_pfx'] . $row['filename'];

			if (file_exists($normal)) {

				$deleted = unlink($image);
				$renamed = rename($normal, $image);

				if ($deleted && $renamed) {

					$imagesize = cpg_getimagesize($image); // dimensions
					$image_filesize = filesize($image); // bytes
					$total_filesize = $image_filesize + filesize($thumb);

					cpg_db_query("UPDATE {$this->config['TABLE_PICTURES']} SET "
							."filesize = '$image_filesize', "
							."total_filesize = '$total_filesize', "
							."pwidth = '{$imagesize[0]}', "
							."pheight = '{$imagesize[1]}' "
							."WHERE pid = $pid");

					$dcnt++;

				} elseif (!$renamed) {
					printf($this->_('error_rename').'<br>', $normal, $image);
					$this->errcnt++;
				} else {
					printf($this->_('del_error').'<br>', $image);
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