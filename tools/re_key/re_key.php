<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * tools/re_key/re_key.php
 * @since  1.6.14
 */

/**
 * re_key admin tool (version 1.0)
 * @author	{ron4mac}
 */

/* declare each item separately - not as an entire array() */
$lang['title'] = 'Keyword add, remove or clear. (v1.0)';
$lang['description'] = 'Sample Description';
$lang['how'] = 'Enter keywords to add and ones to remove, or clear them.';
$lang['add_label'] = 'Add keywords (use semicolon):';
$lang['del_label'] = 'Remove keywords (use semicolon):';
$lang['tags_desc'] = 'First, clear the keywords';
$lang['msg_nothing'] = 'Nothing to do.';
$lang['msg_changed'] = 'Changes were made to %d items.';
$lang['msg_error'] = 'Failed to make changes.';


class CPG_ToolRe_key extends AdminTool
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
		<br />'.$this->_('add_label').' <input type="checkbox" name="clr_tags" value="1" class="clr-val" /> '.$this->_('tags_desc')
		.'<br /><input type="text" name="newkeys" style="width:40em" />
		<br /><div class="delk">'.$this->_('del_label')
		.'<br /><input type="text" name="delkeys" style="width:40em" /></div>
		<script type="text/javascript">
		jQuery.each($(".clr-val"), function(){
			$(this).change(function(){
				$(".delk").css("display", (this.checked) ? "none" : "inline-block");
			});
		});
		</script>'
		;
	}

	public function action ()
	{
		global $CONFIG;

		$msg = $this->_('msg_nothing');

		$newk = cpg_db_escape_string(trim($this->scp->getRaw('newkeys')));
		$delk = cpg_db_escape_string(trim($this->scp->getRaw('delkeys')));
		$clr = $this->scp->keyExists('clr_tags');
		$news = $this->keys2keys($newk);
		$dels = $this->keys2keys($delk);
		if (!$clr && !$news && !$dels) return $msg;

		$cnt = 0;
		$rslt = cpg_db_query("SELECT pid,keywords FROM {$this->config['TABLE_PICTURES']}{$this->albstr}");
		while ($piky = $rslt->fetchAssoc()) {
			$curk = $clr ? [] : $this->keys2keys($piky['keywords'], $CONFIG['keyword_separator']);
			$curk = array_merge($curk, $news);
			$curk = array_diff($curk,$dels);
			$keys = cpg_db_escape_string(implode($CONFIG['keyword_separator'], array_keys($curk)));
			cpg_db_query("UPDATE {$this->config['TABLE_PICTURES']} SET keywords='{$keys}' WHERE pid={$piky['pid']}");
			$cnt++;
		}
		$rslt->free();

		if ($cnt) $msg = sprintf($this->_('msg_changed'), $cnt);
		return $msg;
	}

	private function keys2keys ($kstr, $s=';')
	{
		if (empty($kstr)) return [];
		$kray = explode($s, $kstr);
		if (!empty($kray)) {
			array_walk($kray, [$this,'trim_value']);
			$kray = array_combine($kray,$kray);
		}
		return $kray;
	}

	private function trim_value (&$value) 
	{ 
		$value = trim($value); 
	}

}
