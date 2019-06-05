<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * tools/file2title/file2title.php
 * @since  1.6.06
 */

/* declare each item separately - not as an entire array() */
$lang['filename_title'] = 'Filename &rArr; File title';
$lang['filename_how'] = 'How should the file title be modified';
$lang['filename_remove'] = 'Remove extension (.jpg or other) and replace _ (underscores) with spaces';
$lang['filename_euro'] = 'Change 2015_11_23_13_20_20.jpg to 23/11/2015 13:20';
$lang['filename_us'] = 'Change 2015_11_23_13_20_20.jpg to 11/23/2015 13:20';
$lang['filename_time'] = 'Change 2015_11_23_13_20_20.jpg to 13:20';
$lang['notitle'] = 'Apply only for files with empty titles';
$lang['titles_updated'] = '%s Titles Updated.';


class CPG_ToolFile2title extends AdminTool
{
	protected $toolname = 'file2title';

	public function describe ()
	{
		return $this->_('filename_title');
	}

	public function displayUI ()
	{
		return '
			<strong>' . $this->_('filename_how') . ' (2):</strong><br />
			<input type="radio" name="parsemode" id="parsemode1" value="0" checked="checked" class="nobg" /><label for="parsemode1" class="clickable_option">' . $this->_('filename_remove') . '</label><br />
			<input type="radio" name="parsemode" id="parsemode2" value="1" class="nobg" /><label for="parsemode2" class="clickable_option">' . $this->_('filename_euro') . '</label><br />
			<input type="radio" name="parsemode" id="parsemode3" value="2" class="nobg" /><label for="parsemode3" class="clickable_option">' . $this->_('filename_us') . '</label><br />
			<input type="radio" name="parsemode" id="parsemode4" value="3" class="nobg" /><label for="parsemode4" class="clickable_option">' . $this->_('filename_time') . '</label><br />
			<br />
			<input type="checkbox" name="notitle" checked="checked" value="1" class="nobg" />' . $this->_('notitle')
			;
	}

	public function action ()
	{
		// only apply for items with empty titles
		if ($this->scp->getInt('notitle') == 1) {
			$this->albstr .= $this->albstr ? " AND title = ''" : " WHERE title = ''";
		}

		$parsemode = $this->scp->getInt('parsemode');

		$result = cpg_db_query("SELECT pid, filename FROM {$this->config['TABLE_PICTURES']}{$this->albstr}");

//		echo "<h2>{$this->_('titles_wait')}</h2>";

		$file_count = 0;

		while ($row = $result->fetchAssoc()) {

			$filename = $row['filename'];
			$pid = $row['pid'];

			// //////////////////////////////////////////
			// ADD YOUR OWN PARSEMODES HERE //
			// /////////////////////////////////////////
			$pattern = "/(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.+)/";

			switch ($parsemode){

			case 0: // REMOVE EXTENSION AND REPLACE _ WITH SPACES
				$newtitle = preg_replace('/\.\w+$/i', '', $filename);
				$newtitle = str_replace(array("%20","_"), " ", $newtitle);
				break;

			case 1: // CHANGE 2003_11_23_13_20_20.jpg TO 23/11/2003 13:20
				$newtitle = str_replace("%20", " ", $filename);
				$replacement = "$5/$3/$1 $7:$9";
				$newtitle = preg_replace($pattern, $replacement, $newtitle);
				break;

			case 2: // CHANGE 2003_11_23_13_20_20.jpg TO 11/23/2003 13:20
				$newtitle = str_replace("%20", " ", $filename);
				$replacement = "$3/$5/$1 $7:$9";
				$newtitle = preg_replace($pattern, $replacement, $newtitle);
				break;

			case 3: // CHANGE 2003_11_23_13_20_20.jpg TO 13:20
				$newtitle = str_replace("%20", " ", $filename);
				$replacement = "$7:$9";
				$newtitle = preg_replace($pattern, $replacement, $newtitle);
				break;

			} // end switch

			cpg_db_query("UPDATE {$this->config['TABLE_PICTURES']} SET title = '" . addslashes($newtitle). "' WHERE pid = $pid");

			$file_count++;

//			echo "{$this->_('file')} : <strong>$filename</strong> {$this->_('title_set_to')} : <strong>$newtitle</strong><br />" . $LINEBREAK;

		} // end while
		$result->free();

//		echo '<br />' . $LINEBREAK . sprintf($this->_('titles_updated'), $file_count) . '<br />' . $LINEBREAK;
		return sprintf($this->_('titles_updated'), $file_count);
	}

}