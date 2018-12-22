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
$lang['keyword_convert'] = 'Convert keyword separator';
$lang['keyword_from_to'] = 'Convert keyword separator from %s to %s';
$lang['keyword_set'] = 'Set gallery keyword separator to new value';
$lang['keyword_replace_before'] = 'Before conversion, replace %s with %s';
$lang['keyword_replace_after'] = 'After conversion, replace %s with %s';
$lang['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hyphen', '~'=>'tilde');
$lang['keyword_explanation'] = 'This will convert the keyword separator for all your files from one value to another value. See the help documentation for details.';
$lang['del_error'] = 'Error deleting <em>%s</em>';


class CPG_ToolKeyw_conv extends AdminTool
{
	protected $toolname = 'keyw_conv';

	public function describe ()
	{
		return $this->_('keyword_convert');
	}

	public function displayUI ()
	{
		$ks = $this->config['keyword_separator'];

		$keyword_select = '<select size="1" name="%s" class="listbox">';
		foreach ($this->_('keyword_separators') as $key_value=>$key_label) {
			$keyword_select .= '<option value="' . htmlentities($key_value) . '"'.($key_value==$ks?'selected="selected"':'').'>' . $key_label . '</option>';
		}
		$keyword_select .= '</select>';
		$keyword_from_to = sprintf(
								$this->_('keyword_from_to'),
								sprintf($keyword_select,'keyword_from'),
								sprintf($keyword_select,'keyword_to')
							);
		$keyword_set = $this->_('keyword_set');
		$replace_options = array_merge($this->_('keyword_separators'),$this->_('keyword_replace_values'));
		$replace_select = '<select size="1" name="%s" class="listbox">';
		foreach ($replace_options as $key_value=>$key_label) {
			$replace_select .= '<option value="' . htmlentities($key_value) . '">' . $key_label . '</option>';
		}
		$replace_select .= '</select>';
		$keyword_replace1 = sprintf(
								$this->_('keyword_replace_before'),
								sprintf($replace_select,'keyword_replace1_from'),
								sprintf($replace_select,'keyword_replace1_to')
							);
		$keyword_replace2 = sprintf(
								$this->_('keyword_replace_after'),
								sprintf($replace_select,'keyword_replace2_from'),
								sprintf($replace_select,'keyword_replace2_to')
							);

		return '
                <strong>' . $keyword_from_to . ' (2)</strong><br />
                <input type="checkbox" name="keyword_set" checked="checked" value="1" class="nobg" />' . $keyword_set . '<br />
                <input type="checkbox" name="keyword_replace1" value="1" class="nobg" />' . $keyword_replace1 . '<br />
                <input type="checkbox" name="keyword_replace2" value="1" class="nobg" />' . $keyword_replace2 . '<br />
                <br />
                '. $this->_('keyword_explanation');
	}

	public function action ()
	{
		$set_config    = $this->scp->keyExists('keyword_set') ? $this->scp->getInt('keyword_set') : 0;
		$replace_from  = $this->scp->keyExists('keyword_from') ? html_entity_decode($this->scp->getEscaped('keyword_from')) : '';
		$replace_to    = $this->scp->keyExists('keyword_to') ? html_entity_decode($this->scp->getEscaped('keyword_to')) : '';
		$replace1      = $this->scp->keyExists('keyword_replace1') ? $this->scp->getInt('keyword_replace1') : 0;
		$replace1_from = $this->scp->keyExists('keyword_replace1_from') ? html_entity_decode($this->scp->getEscaped('keyword_replace1_from')) : '';
		$replace1_to   = $this->scp->keyExists('keyword_replace1_to') ? html_entity_decode($this->scp->getEscaped('keyword_replace1_to')) : '';
		$replace2      = $this->scp->keyExists('keyword_replace2') ? $this->scp->getInt('keyword_replace2') : 0;
		$replace2_from = $this->scp->keyExists('keyword_replace2_from') ? html_entity_decode($this->scp->getEscaped('keyword_replace2_from')) : '';
		$replace2_to   = $this->scp->keyExists('keyword_replace2_to') ? html_entity_decode($this->scp->getEscaped('keyword_replace2_to')) : '';

		starttable('100%', cpg_fetch_icon('info', 2) . ' ' . $this->_('keyword_convert'), 1);
		echo '    <tr><td><br />';
		$replace_options = array_merge($this->_('keyword_separators'),$this->_('keyword_replace_values'));
		if ($replace1 && strlen($replace1_from) && strlen($replace1_to) && ($replace1_from != $replace1_to)) {
			$sql = "UPDATE `{$this->config['TABLE_PICTURES']}` SET keywords = REPLACE(keywords, '$replace1_from', '$replace1_to')";
			cpg_db_query($sql);
			echo '        '
				. sprintf($this->_('keyword_replace_before'),
					'<strong>' . $replace_options[$replace1_from] . '</strong>',
					'<strong>' . $replace_options[$replace1_to] . '</strong>')
				. ': ' . $this->_('done') . '<br /><br />';
		}
		if (strlen($replace_from) && strlen($replace_to) && ($replace_from != $replace_to)) {
			$sql = "UPDATE `{$this->config['TABLE_PICTURES']}` SET keywords = REPLACE(keywords, '$replace_from', '$replace_to')";
			cpg_db_query($sql);
			echo '        '
				. sprintf($this->_('keyword_from_to'),
					'<strong>' . $replace_options[$replace_from] . '</strong>',
					'<strong>' . $replace_options[$replace_to] . '</strong>')
				. ': ' . $this->_('done') . '<br /><br />';
		}
		if ($replace2 && strlen($replace2_from) && strlen($replace2_to) && ($replace2_from != $replace2_to)) {
			$sql = "UPDATE `{$this->config['TABLE_PICTURES']}` SET keywords = REPLACE(keywords, '$replace2_from', '$replace2_to')";
			cpg_db_query($sql);
			echo '        '
				. sprintf($this->_('keyword_replace_after'),
					'<strong>' . $replace_options[$replace2_from] . '</strong>',
					'<strong>' . $replace_options[$replace2_to] . '</strong>')
				. ': ' . $this->_('done') . '<br /><br />';
		}
		if ($set_config) {
			cpg_config_set('keyword_separator', $replace_to);
			echo "{$this->_('keyword_set')} (<strong>"
				. $this->_('keyword_separators', $replace_to)
				. '</strong>): ' . $this->_('done') . '<br /><br />';
		}

		echo "    </td></tr>";
		endtable();
	}

}