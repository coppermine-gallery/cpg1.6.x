/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2019 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * js/util.js
 * @since  1.6.08
 */

function init_utils () {
	jQuery.each($("input[type='radio'][name='action']"), function(){
		$(this).change(function(){
			jQuery.each($("input[type='radio'][name='action']"), function(){
				var ttool = this.getAttribute('id');
				var twrap = '#'+ttool+'_wrapper';
				if (this.checked) {
					$(twrap).load('util.ajax.php', {'_tool':ttool}, function(){$(twrap).css({'display': 'block'});});
				} else {
					$(twrap).css({'display': 'none'});
					$(twrap).html('');
				}
			});
		});
	});
}

function showProgress (done, totl) {
	var pb = document.getElementById("toolprog");
	var p = Math.floor(100 * done / totl);
	pb.style.width = p + '%';
}

var _toolAbort = false;

var processTool = function (totl, formd) {
	$.post('util.ajax.php', formd, function (data) {
			if (_toolAbort) {
				$('#toolmsgs').append('@ ABORTED @<br>');
				$('#backtool').show();
			} else if (data.nxi > 0) {
				showProgress(data.nxi, totl);
				formd.startpic = data.nxi;
				formd.skps = data.skps;
				formd.wrns = data.wrns;
				formd.errs = data.errs;
				// refresh the form token if requested
				if (data.tkn) {
					formd.timestamp = data.tkn[0];
					formd.form_token = data.tkn[1];
				}
				// continue processing
				processTool(totl, formd);
			} else if (data.err) {
				$('#toolpdsp').hide();
				$('#backtool').show();
			} else {
				$('#toolpdsp').hide();
//				showProgress(1,1);
				$('#backtool').show();
			}
			if (data.msg) {
				$('#toolmsgs').append(data.msg);
			}
		}, 'json');
	};

addonload('init_utils()');