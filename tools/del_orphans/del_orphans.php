<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2018 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * tools/del_orphans/del_orphans.php
 * @since  1.6.06
 */

/* declare each item separately - not as an entire array() */
$lang['delete_orphans'] = 'Delete comments on missing files';
$lang['delete_orphans_explanation'] = 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.';
$lang['searching_orphans'] = 'Searching for orphans, please wait...';
$lang['orphan_comment'] = 'orphan comments found';
$lang['delete_all_orphans'] = 'Delete all orphan comments?';
$lang['del_cnt'] = '%s Original images were deleted';
$lang['error_not_found'] = 'The file <em>%s</em> was not found';
$lang['del_error'] = 'Error deleting <em>%s</em>';
$lang['err_cnt'] = 'No success in deleteing %s Original images';


class CPG_ToolDel_orphans extends AdminTool
{
	protected $toolname = 'del_orphans';

	public function describe ()
	{
		return $this->_('delete_orphans');
	}

	public function displayUI ()
	{
		return $this->_('delete_orphans_explanation');
	}

	public function action ()
	{
		$dcnt = 0;
		$ecnt = 0;
		$count = 0;
		$doall = $this->scp->keyExists('doall');

	//	echo '<pre>';var_dump($this->scp->_source);echo'</pre>';
		echo <<<EOT
			<style type="text/css">
				#uform a:link {
					color:lightcoral;
					text-decoration:underline;
				}
				.cbdiv {
					padding-left: 1em;
				}
			</style>
EOT;

		echo "<h2>{$this->_('searching_orphans')}</h2>";

		if (!$doall && $this->scp->keyExists('del')) {
			// single comment deletion requested
			$single = $this->scp->getInt('del');
			cpg_db_query("DELETE FROM {$this->config['TABLE_COMMENTS']} WHERE msg_id = $single");
		}

		$result = cpg_db_query("SELECT c.pid, msg_id, msg_body FROM {$this->config['TABLE_COMMENTS']} AS c LEFT JOIN {$this->config['TABLE_PICTURES']} AS p ON p.pid = c.pid WHERE p.pid IS NULL");

		$count = $result->numRows();
		if (!$count) {
			$this->done($this->_('no_prob_found'), 'info');
			return;
		}

		echo '<form name="uform" id="uform" action="util.php" method="post">';

		while ($row = $result->fetchAssoc()) {

			$pid = $row['pid'];
			$msg_id = $row['msg_id'];
			$msg_body = $row['msg_body'];

			if ($doall) {
				cpg_db_query("DELETE FROM {$this->config['TABLE_COMMENTS']} WHERE msg_id = $msg_id");
			} else {
				echo "{$this->_('comment')} {$this->_('nonexist')} $pid - <a href=\"#\" onclick=\"return delsngl(event,$msg_id)\">{$this->_('delete')}</a><br /><div class=\"cbdiv\">$msg_body</div>";
			}
		}

		if ($count && !$doall /*!$this->scp->keyExists('del')*/) {

			echo "<br />$count {$this->_('orphan_comment')}<br /><br />";

			if ($count > 1) {
				$icon = cpg_fetch_icon('delete', 2);
				echo <<<EOT
					{$this->_('delete_all_orphans')}
					<button type="submit" class="button" name="doall" value="doall">{$this->_('delete_all')} {$icon}</button>
EOT;
			}
		}

		list($timestamp, $form_token) = getFormToken();
		echo <<<EOT
					<input type="hidden" name="action" value="del_orphans" />
					<input type="hidden" name="del" id="del_id" value="X" />
					<input type="hidden" name="form_token" value="{$form_token}" />
					<input type="hidden" name="timestamp" value="{$timestamp}" />
			</form>
		<script type="text/javascript">
			function delsngl (e, id)
			{
				e.preventDefault();
				e.stopPropagation();
				$('#del_id').val(id);
				document.uform.submit();
				return false;
			}
		</script>
EOT;
		
		$result->free();

		if ($ecnt) printf('<br />'.$this->_('err_cnt').'<br />', $ecnt);

	//	return sprintf('<br />'.$this->_('del_cnt'), $dcnt);
	}

}