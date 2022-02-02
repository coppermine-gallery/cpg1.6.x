<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2022 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * tools/upd_thumbs/upd_thumbs.php
 * @since  1.6.17
 */

/* declare each item separately - not as an entire array() */
$lang['update'] = 'Update thumbs and/or resized photos';
$lang['update_what'] = 'What should be updated';
$lang['update_thumb'] = 'Only thumbnails';
$lang['update_pic'] = 'Only resized pictures';
$lang['update_both'] = 'Both thumbnails and resized pictures';
$lang['update_full_normal_thumb'] = 'Everything: full-sized, resized and thumbs';
$lang['update_full_normal'] = 'Both resized and full sized (if an original copy is available)';
$lang['update_full'] = 'Just full sized (if an original copy is available)';
//$lang['update_missing'] = 'Only update missing files';
$lang['updating'] = 'Updating thumbs/images';


class CPG_ToolUpd_thumbs extends AdminTool
{
	protected $toolname = 'upd_thumbs';
	public $progressive = true;

	public function describe ()
	{
		return $this->_('update');
	}

	public function procWords ()
	{
		return $this->_('updating');
	}

	public function displayUI ()
	{
		return '
			<strong>' . $this->_('update_what') . ' (2):</strong><br>
			<input type="radio" name="updatetype" id="updatetype1" value="0" class="nobg" /><label for="updatetype1" class="clickable_option">'.$this->_('update_thumb').'</label><br>
			<input type="radio" name="updatetype" id="updatetype2" value="1" class="nobg" /><label for="updatetype2" class="clickable_option">'.$this->_('update_pic').'</label><br>
			<input type="radio" name="updatetype" id="updatetype3" value="2" class="nobg" /><label for="updatetype3" class="clickable_option">'.$this->_('update_both').'</label><br>
			<input type="radio" name="updatetype" id="updatetype5" value="4" class="nobg" /><label for="updatetype5" class="clickable_option">'.$this->_('update_full').'</label><br>
			<input type="radio" name="updatetype" id="updatetype4" value="3" checked="checked" class="nobg" /><label for="updatetype4" class="clickable_option">'.$this->_('update_full_normal').'</label><br>
			<input type="radio" name="updatetype" id="updatetype6" value="5" class="nobg" /><label for="updatetype6" class="clickable_option">'.$this->_('update_full_normal_thumb').'</label>'
			;
	}

	public function total ()
	{
		$result = cpg_db_query("SELECT COUNT(pid) FROM {$this->config['TABLE_PICTURES']}{$this->albstr}");
		list($count) = $result->fetchRow(true);
		return $count;
	}

	public function process ()
	{
		if ($this->scp->keyExists('updatetype')) {
			$updatetype = $this->scp->getInt('updatetype');
		}

		if ($this->scp->keyExists('startpic')) {
			$startpic = $this->scp->getInt('startpic');
		} else {
			$startpic = 0;
		}

		$result = cpg_db_query("SELECT pid, filepath, filename FROM {$this->config['TABLE_PICTURES']}{$this->albstr} LIMIT {$startpic}, {$this->procnum}");
		$count = $result->numRows();
		$loopCounter = 0;

		while ($row = $result->fetchAssoc()) {

			if (is_image($row['filename'])) { // the file is an image --- start

				$loopCounter++;

				if ($loopCounter / 2 == floor($loopCounter / 2)) {
					$tablestyle = 'tableb tableb_alternate';
				} else {
					$tablestyle = 'tableb';
				}

				$image = $this->config['fullpath'] . $row['filepath'] . $row['filename'];
				$normal = $this->config['fullpath'] . $row['filepath'] . $this->config['normal_pfx'] . $row['filename'];
				$thumb = $this->config['fullpath'] . $row['filepath'] . $this->config['thumb_pfx'] . $row['filename'];
				$orig = $this->config['fullpath'] . $row['filepath'] . $this->config['orig_pfx'] . $row['filename'];

				if (file_exists($orig)) {
					$work_image = $orig;
				} else {
					$work_image = $image;
				}

				if (!file_exists($work_image)) {
					printf($this->_('error_not_found').'<br>', $work_image);
					continue;
				}

				$imagesize = cpg_getimagesize($work_image);
				if (!$imagesize[0] || !$imagesize[1]) {
					echo $this->_('filesize_error') . ' <tt>' . $work_image .'</tt><br>';
					$this->errcnt++;
					continue;
				}

				if ($updatetype == 3 || $updatetype == 4 || $updatetype == 5) {
					// resize full-sized picture without watermark (will be applied later) if it's bigger than the max width or height for uploaded pictures
					if (max($imagesize[0], $imagesize[1]) > $this->config['max_upl_width_height']) {
						$resize_method = $this->config['picture_use'] == "thumb" ? ($this->config['thumb_use'] == "ex" ? "any" : $this->config['thumb_use']) : $this->config['picture_use'];
						if (resize_image($work_image, $image, $this->config['max_upl_width_height'], $resize_method, 'false')) {
							$imagesize = cpg_getimagesize($image);
						} else {
							echo $this->_('error_create') . ': <tt>' . $image . '</tt><br>';
							$this->errcnt++;
						}
						if (file_exists($orig)) {
							if (!copy($image, $orig)) {
								echo $this->_('error_create') . ': <tt>' . $orig . '</tt><br>';
								$this->errcnt++;
							}
						}
					}
				}

				if ($updatetype == 0 || $updatetype == 2 || $updatetype == 5) {
					// resize thumbnail
					if (!resize_image($work_image, $thumb, $this->config['thumb_width'], $this->config['thumb_use'], "false", 1)) {
						echo $this->_('error_create') . ': <tt>' . $thumb.'</tt><br>';
						$this->errcnt++;
					}
				}

				if ($updatetype == 1 || $updatetype == 2 || $updatetype == 3 || $updatetype == 5) {
					if ($this->config['make_intermediate'] && cpg_picture_dimension_exceeds_intermediate_limit($imagesize[0], $imagesize[1])) {
						// intermediate sized picture is needed - create/update it
						$resize_method = $this->config['picture_use'] == "thumb" ? ($this->config['thumb_use'] == "ex" ? "any" : $this->config['thumb_use']) : $this->config['picture_use'];
						$watermark = ($this->config['enable_watermark'] == '1' && ($this->config['which_files_to_watermark'] == 'both' || $this->config['which_files_to_watermark'] == 'resized')) ? 'true' : 'false';
						if (!resize_image($work_image, $normal, $this->config['picture_width'], $resize_method, $watermark)) {
							echo $this->_('error_create') . ': <tt>' . $normal . '</tt><br>';
							$this->errcnt++;
						}
					} elseif (file_exists($normal)) {
						// intermediate sized picture isn't needed but exists - delete it
						if (unlink($normal)) {
						//	echo sprintf(str_replace('%s', '<tt>%s</tt>', $this->_('del_intermediate')), $normal) . '<br>';
						} else {
							echo sprintf(str_replace('%s', '<tt>%s</tt>', $this->_('del_error')), $normal) . '<br>';
							$this->errcnt++;
						}
					}
				}

				if ($updatetype == 3 || $updatetype == 4 || $updatetype == 5) {
					if ($this->config['enable_watermark'] == '1' && ($this->config['which_files_to_watermark'] == 'both' || $this->config['which_files_to_watermark'] == 'original')) {
						if (!file_exists($orig)) {
							// create backup of full-sized picture if doesn't exist
							if (copy($image, $orig)) {
							//	echo  '<tt>' . $orig . "</tt> " . $this->_('updated_successfully') . '<br>';
								$backup_file_exists = true;
							} else {
								echo $this->_('error_create') . ': <tt>' . $orig . '</tt><br>';
								$backup_file_exists = false;
								$this->errcnt++;
							}
						} else {
							$backup_file_exists = true;
						}
						if ($backup_file_exists) {
							// watermark full-sized picture
							$wm_max_upl_width_height = (max($imagesize[0], $imagesize[1]) > $this->config['max_upl_width_height']) ? max($imagesize[0], $imagesize[1]) : $this->config['max_upl_width_height']; // use max aspect of original image if it hasn't been resized earlier
							if (resize_image($work_image, $image, $wm_max_upl_width_height, 'any', 'true')) {
							//	echo '<tt>' . $image . "</tt> " . $this->_('updated_successfully') . '<br>';
							} else {
								echo $this->_('error_create') . ': <tt>' . $image . '</tt><br>';
								$this->errcnt++;
							}
						}
					} elseif (file_exists($orig)) {
						// remove watermark from full-sized picture and delete backup file
						if (copy($orig, $image)) {
						//	echo $image . "</tt> " . $this->_('updated_successfully') . '<br>';
							if (unlink($orig)) {
							//	echo sprintf(str_replace('%s', '<tt>%s</tt>', $this->_('del_orig')), $orig) . '<br>';
							} else {
								echo sprintf(str_replace('%s', '<tt>%s</tt>', $this->_('del_error')), $orig) . '<br>';
								$this->errcnt++;
							}
						} else {
							echo $this->_('error_create') . ': <tt>' . $image . '</tt><br>';
							$this->errcnt++;
						}
					}
				}

				$query_up = "UPDATE {$this->config['TABLE_PICTURES']} SET pwidth = '{$imagesize[0]}', pheight = '{$imagesize[1]}' WHERE pid = {$row['pid']}";
				cpg_db_query($query_up);

			} else { // the file is an image --- end
				echo sprintf($this->_('no_image'), '<tt>' . $row['filepath'] . $row['filename'] . '</tt>').'<br>';
				$this->skpcnt++;
			}
		}
		$result->free();

		if ($count == $this->procnum) {
			$startpic += $this->procnum;
		} else {
			$this->done($this->_('finished'));
			$startpic = -1;
		}
		return $startpic;
	}

}