<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * tools/change_values/change_values.php
 * @since  1.6.06
 */

/* declare each item separately - not as an entire array() */
$lang['title'] = 'Change values for (or clear) title, description and keywords.';
$lang['description'] = 'Sample Description';
$lang['how'] = 'Set new bulk values for items, or clear them.';
$lang['title_label'] = 'Title:';
$lang['title_desc'] = 'Clear the titles';
$lang['desc_label'] = 'Description:';
$lang['desc_desc'] = 'Clear the descriptions';
$lang['tags_label'] = 'Keywords (use semicolon):';
$lang['tags_desc'] = 'Clear the keywords';
$lang['msg_nothing'] = 'Nothing to do.';
$lang['msg_changed'] = 'Changes were made to %d items.';
$lang['msg_error'] = 'Failed to make changes.';


class CPG_ToolChange_values extends AdminTool
{
	protected $toolname = 'change_values';

	public function describe ()
	{
		return $this->_('title');
	}

	public function displayUI ()
	{
		return '
		<strong>' . $this->_('how') . ' (2):</strong><br />
		<br />'.$this->_('title_label').' <input type="checkbox" name="clr_title" value="1" class="clr-val" /> '.$this->_('title_desc')
		.'<br /><input type="text" name="newtitle" style="width:40em" />
		<br />'.$this->_('desc_label').' <input type="checkbox" name="clr_desc" value="1" class="clr-val" /> '.$this->_('desc_desc')
		.'<br /><textarea name="newdesc" rows="3" cols="80"></textarea>
		<br />'.$this->_('tags_label').' <input type="checkbox" name="clr_tags" value="1" class="clr-val" /> '.$this->_('tags_desc')
		.'<br /><input type="text" name="newkeys" style="width:40em" />
		<script type="text/javascript">
		jQuery.each($(".clr-val"), function(){
			$(this).change(function(){
				$(this).next().next().css("display", (this.checked) ? "none" : "inline-block");
			});
		});
		</script>'
		;
	}

	public function action ()
	{
		$msg = $this->_('msg_nothing');

		$newt = cpg_db_escape_string(trim($this->scp->getRaw('newtitle')));
		$clrt = $this->scp->keyExists('clr_title');
		$newd = cpg_db_escape_string(trim($this->scp->getRaw('newdesc')));
		$clrd = $this->scp->keyExists('clr_desc');
		$newk = cpg_db_escape_string(trim($this->scp->getRaw('newkeys')));
		$clrk = $this->scp->keyExists('clr_tags');
		$sets = array();
		if ($clrt || $newt) $sets[] = 'title=\''.($clrt ? '' : $newt).'\'';
		if ($clrd || $newd) $sets[] = 'caption=\''.($clrd ? '' : $newd).'\'';
		if ($clrk || $newk) $sets[] = 'keywords=\''.($clrk ? '' : $newk).'\'';
		if ($sets) {
			$set = implode(',', $sets);
			if (cpg_db_query("UPDATE {$this->config['TABLE_PICTURES']} SET {$set}{$this->albstr}")) {
				$msg = sprintf($this->_('msg_changed'), cpg_db_affected_rows());
			} else $msg = $this->_('msg_error');
		}

		return $msg;
	}

}