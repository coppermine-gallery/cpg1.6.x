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
$lang['refresh_db'] = 'Reload file dimensions and size information.';
$lang['refresh_db_explanation'] = 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.';
$lang['db_refreshing'] = 'Refreshing Database';


class CPG_ToolRefresh extends AdminTool
{
	protected $toolname = 'refresh';
	public $progressive = true;

	// Let's override the parent class and do 50 at a time
	protected $procnum = 50;

	public function describe ()
	{
		return $this->_('refresh_db');
	}

	public function procWords ()
	{
		return $this->_('db_refreshing');
	}

	public function displayUI ()
	{
		return $this->_('refresh_db_explanation');
	}

	public function total ()
	{
		$result = cpg_db_query("SELECT COUNT(pid) FROM {$this->config['TABLE_PICTURES']}{$this->albstr}");
		list($count) = $result->fetchRow(true);
		return $count;
	}

	public function process ()
	{
		$startpic = $this->scp->keyExists('startpic') ? $this->scp->getInt('startpic') : 0;

		$outcome = 'none';

		$result = cpg_db_query("SELECT * FROM {$this->config['TABLE_PICTURES']}{$this->albstr} ORDER BY pid ASC LIMIT {$startpic}, {$this->procnum}");
		$count = $result->numRows();
		$found = 0;

		while ($row = $result->fetchAssoc()) {

			extract($row, EXTR_PREFIX_ALL, 'db');
			$prob = '';

			$full_pic_url = $this->config['fullpath'] . $db_filepath . $db_filename;
			$thumb_url = $this->config['fullpath'] . $db_filepath . $this->config['thumb_pfx'] . $db_filename;
			$normal_url = $this->config['fullpath'] . $db_filepath . $this->config['normal_pfx'] . $db_filename;
			$url = '<a href="' . $this->config["ecards_more_pic_target"] . (substr($this->config["ecards_more_pic_target"], -1) == '/' ? '' : '/') ."displayimage.php?pos=-$db_pid" . '" target="_blank">' . "$db_title ($db_pid)" . '</a>';

			if (file_exists($full_pic_url)) {

				$filesize = filesize($full_pic_url);
				$dimensions = cpg_getimagesize($full_pic_url);

				if ($filesize) {

					$thumb_filesize = filesize($thumb_url);
					$normal_filesize = filesize($normal_url);
					$total_filesize = $filesize + $thumb_filesize + $normal_filesize;

					if ($total_filesize <> $db_total_filesize) {
						$prob .= "{$this->_('incorrect_filesize')}<br>{$this->_('database')}{$db_total_filesize}{$this->_('bytes')}<br>{$this->_('actual')}{$total_filesize}{$this->_('bytes')}<br>";
						cpg_db_query("UPDATE {$this->config['TABLE_PICTURES']} SET total_filesize = '$total_filesize' WHERE pid = '$db_pid' LIMIT 1");
						$outcome = $this->_('updated');
					}

					if ($filesize <> $db_filesize) {
						$prob .= "{$this->_('incorrect_filesize')}<br>{$this->_('database')}{$db_filesize}{$this->_('bytes')}<br>{$this->_('actual')}{$filesize}{$this->_('bytes')}<br>";
						cpg_db_query("UPDATE {$this->config['TABLE_PICTURES']} SET filesize = '$filesize' WHERE pid = '$db_pid' LIMIT 1");
						$outcome = $this->_('updated');
					}

				} else {
					$prob .= $this->_('filesize_error');
					$outcome = $this->_('skipped');
					$this->skpcnt++;
				}

				if ($dimensions) {

					if ($dimensions[0] <> $db_pwidth || $dimensions[1] <> $db_pheight) {
						$prob .= "{$this->_('incorrect_dimension')}<br>{$this->_('database')}{$db_pwidth}x{$db_pheight}<br>{$this->_('actual')}{$dimensions[0]}x{$dimensions[1]}<br>";
						cpg_db_query("UPDATE {$this->config['TABLE_PICTURES']} SET pwidth = '{$dimensions[0]}', pheight = '{$dimensions[1]}' WHERE pid = '$db_pid' LIMIT 1");
						$outcome = $this->_('updated');
					}

				} else {
					$prob .= $this->_('dimension_error');
					$outcome = $this->_('skipped');
					$this->skpcnt++;
				}

			} else {
				$prob .= sprintf($this->_('fullpic_error'), $full_pic_url) . '<br>';
				$outcome = $this->_('cannot_fix');
				$this->errcnt++;
			}

			if (!empty($prob)) {
				echo $url.'<br>'.$prob.' '.$outcome.'<br>';
//				echo "<tr><td class=\"tableb\">$url</td><td class=\"tableb\">$prob</td><td class=\"tableb\">$outcome</td></tr>";
			} else {
//				echo "<tr><td class=\"tableb\">$url</td><td class=\"tableb\">{$this->_('no_prob_detect')}</td><td class=\"tableb\">{$lang_common['ok']}</td></tr>";
			}
		}
		$result->free();

//		if ($outcome == 'none') {
//			echo $this->_('no_prob_found');
//		}

		if ($count == $this->procnum) {
			$startpic += $this->procnum;
		} else {
			$this->done($this->_('finished'));
			$startpic = -1;
		}

		return $startpic;
	}

}