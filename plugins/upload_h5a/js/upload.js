/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2023 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * plugins/upload_h5a/js/upload.js
 * @since  1.6.25
 */
"use strict";
var redirURL = '',
	h5u_albSel = null;

/* a couple of utility functions to avoid using jquery and assist in minification */
// getElementById
function $id(id) {
	return document.getElementById(id);
}
// addEventListener
function $ae(elem, evnt, func) {
	elem.addEventListener(evnt, func, false);
}

/* action to be taken when all files are uploaded */
function H5up_done(okcount, errcnt) {
	var albact = '.php?album=' + h5u_albSel.value;
	if (js_vars.user_id > 0 || js_vars.guest_edit == 1) {
		redirURL = js_vars.site_url + '/editpics' + albact + '&newer_than=' + js_vars.timestamp;
	} else {
		redirURL = js_vars.site_url + '/thumbnails' + albact;
	}

	if (okcount) {
		let pdat = new FormData();
		pdat.append('album', h5u_albSel.value);
		fetch('notifyupload.php', {method: 'POST', body: pdat})
		.then((resp) => resp.text())
		.then((data) => {
			console.log("Success:", data);
			if ((js_vars.autoedit=='1') && (errcnt===0)) window.location = redirURL;
		})
		.catch((error) => {
			console.error("Error:", error);
		});
	}

	$id('gotoedit').style.display = 'table-row';
}

/* encapsulate the entire upload engine in a function */
(function(w, URL, FLDS) {

	var totProgressDiv,
		totProgressDivW,
		progressDiv,
		qCountSpan,

		upQueue = [],
		maxXfer = js_vars.concurrent,
		qStopt = false,
		inPrg = 0,
		total2do = 0,
		totalDone = 0,
		allDone = 0,
		okCount = 0,
		errCount = 0,
		e_st, e_gc,
		s_hd = 'none',
		s_vu = 'inline-block',
		_qCtrl = {
			stop: function () {
				qStopt = true;
				e_st.style.display = s_hd;
				e_gc.style.display = s_vu;
				},
			go: function () {
				qStopt = false;
				e_st.style.display = s_vu;
				e_gc.style.display = s_hd;
				while (upQueue.length && (inPrg < maxXfer)) NextInQueue(false,'go');
				},
			cancel: function () {
				upQueue.length = 0;
				qStopt = false;
				e_gc.style.display = s_hd;
				qCountSpan.innerHTML = 0;
				if (!inPrg) _endUp();
				}
			}
		;

	// ensure album selection, stopping action if none
	function chkAlbmSel(ev) {
		if (!h5u_albSel.value) {
			ev.stopPropagation();
			ev.preventDefault();
			alert(js_vars.h5uM.selAlb);
		}
	}

	// file drag hover
	function FileDragHover(e) {
		e.stopPropagation();
		e.preventDefault();
		e.target.className = (e.type == 'dragover' ? 'hover' : '');
	}

	// file selection
	function FileSelectHandler(e) {
		var files, i, f;

		// here is a good spot to get the tot progress div width
		totProgressDivW = totProgressDiv.offsetWidth;

		// cancel event and hover styling
		FileDragHover(e);

		// make sure that an album is selected first
		if (!h5u_albSel.value) {
			alert(js_vars.h5uM.selAlb);
			return;
		}

		if (allDone) allDone = total2do = totalDone = 0;

		// fetch FileList object
		files = e.target.files || e.dataTransfer.files;

		// process all File objects
		for (i = 0; (f = files[i]); i++) {
			total2do += f.size;
			upQueue.push(f);
			qCountSpan.innerHTML = upQueue.length;
			NextInQueue(false,'fsel');
		}
		if (upQueue.length > maxXfer) e_st.style.display = s_vu;
	}

	function _endUp() {
		if (!qStopt) {
			allDone = 1;
			if (typeof(H5up_done == 'function')) H5up_done(okCount, errCount);
			errCount = okCount = 0;
		}
	}

	function NextInQueue(decr,tag) {
		if (decr) {
			if (tag == 'ufo') okCount++;
			if ((! --inPrg) && (!upQueue.length)) { _endUp(); }
		}
		if (!qStopt && upQueue.length && (!maxXfer || inPrg < maxXfer)) {
			var nxf = upQueue.shift();
			var ufo = new UpldFileObj(nxf);			//console.log(ufo);
			inPrg++;
			qCountSpan.innerHTML = upQueue.length;
		}
		if (upQueue.length <= 0) {
			e_st.style.display = s_hd;
			e_gc.style.display = s_hd;
		}
	}

	// progress bar object
	function ProgressBar(fileObj, sclass) {
		var $ = this;
		
		$.show = function(percent) {
			var p = Math.floor($.pb.offsetWidth * percent);
			$.pb.style.backgroundPosition = p + "px 0";
			if (percent === 1) {
				$.pb.innerHTML = $.fObj.fileName;
				$.pb.className = 'indeterm';
			}
		};
		$.msg = function(msg, err) {
			$.pb.innerHTML += '<br />' + msg;
			if (err) {
				$.pb.className = 'failure';
				errCount++;
			}
		};
		$.remove = function() {
			$.pb._ufo = null;
			progressDiv.removeChild($.pb);
			$.fObj = null;
		};

		// create progress bar
		$.pb = progressDiv.appendChild(document.createElement("p"));
		if (sclass) {
			$.pb.className = sclass;
		}
		$.pb.appendChild(document.createTextNode(fileObj.fileName));
		$.pb.innerHTML += '<img src="' + js_vars.H5uPath + 'css/redX.png" class="abortX" onclick="this.parentNode._ufo.abort(true);" />';
		$.pb._ufo = fileObj;
		$.fObj = fileObj;
		return this;
	}

	function UpdateTotalProgress(adsz) {		//console.log(adsz,totalDone,total2do);
		if (!totProgressDiv) return;
		if (adsz < 0) return;
		totalDone += adsz;
		var p = Math.floor(totProgressDivW * totalDone / total2do);
		totProgressDiv.style.backgroundPosition = p + "px 0";
	}

	function getForm () {
		var frm={}, key, fld;
		for (key in FLDS) {
			fld = FLDS[key];
			var elm = $id(fld);
			if (elm) {
				switch (elm.type) {
				case 'checkbox':
					frm[fld] = elm.checked ? 1 : 0;
					break;
				default:
					frm[fld] = elm.value;
				}
			}
		}
		frm.album = h5u_albSel.value;
		return frm;
	}

	function addData (frmd, data) {
		for (var key in data) {
			frmd.append(key, data[key]);
		}
	}

	// object for a file upload with chunking support
	function UpldFileObj(file) {
		var $ = this, key, query;
		$.upFile = file;
		$.fileName = file.fileName || file.name;
		$.size = file.size;
		$.upState = '';
		$.doChnk = ($.upFile.size > js_vars.maxchunksize);
		$.chnkSize = Math.round(js_vars.maxchunksize / 2) - 3072;
		$.relPath = file.webkitRelativePath || $.fileName;
		$.uniqueId = $.size + '-' + $.relPath.replace(/[^0-9a-zA-Z_-]/img, '');
		$.actSize = 0;
		$.startByte = 0;
		$.lastsz = 0;
		$.numChnks = Math.max(Math.floor($.size / $.chnkSize), 1);
		$.chnkNum = 0;
		$.fData = null;
		$.upForm = getForm();
		$.xhr = new XMLHttpRequest();

		var slfunc = ($.upFile.slice ? 'slice' : ($.upFile.mozSlice ? 'mozSlice' : ($.upFile.webkitSlice ? 'webkitSlice' : 'slice')));

		var endup = function(all) {
			if ($.xhr) {
				$.xhr.upload.onprogress = null;
				$.xhr.onabort = null;
				$.xhr.onerror = null;
				$.xhr.onload = null;
				$.xhr = null;
			}
			$.fData = null;
			if (all && $.pBar) {
				$.pBar.remove();
				$.pBar = null;
			}
			NextInQueue(true,'ufo');
		};

		var fDat = function() {
			$.fData = new FormData();
			addData($.fData, js_vars.fup_payload);
		};

		var state = function() {
			fDat();
			switch ($.upState) {
				case '':
					addData($.fData, $.upForm);
					$.fData.append('Filedata', $.upFile);
					$.upState = 'upld';
					break;
				case 'upld':
					endup(true);
					return;
					break;
			}
			$.xhr.open('POST', URL);
			$.xhr.send($.fData);
		};

		var cstate = function() {
			fDat();
			switch ($.upState) {
				case '':
					//console.log('pref',$.fileName);
					addData($.fData, { chunkact: 'pref', file: $.fileName, size: $.size, album: h5u_albSel.value });
					$.upState = 'chnk';
					break;
				case 'chnk':
					//console.log('chnk',$.chnkNum+1,$.fileName);
					addData($.fData, { chunkact: 'chnk', identifier: $.uniqueId, filename: $.fileName, totalChunks: $.numChnks });
					if ($.chnkNum == $.numChnks) { endup(true); return; }	///////// do stuff here to finish up
					$.startByte = $.chnkNum * $.chnkSize;
					$.endByte = Math.min($.size, ($.chnkNum + 1) * $.chnkSize);
					if ($.size - $.endByte < $.chnkSize) {
						// The last chunk will be bigger than the chunk size, but less than 2*chunkSize
						$.endByte = $.size;
					}
					$.actSize = $.endByte - $.startByte;
					$.fData.append('chunkNumber', ++$.chnkNum);
					if ($.chnkNum == $.numChnks) {
						addData($.fData, $.upForm);
					}
					$.fData.append('Filedata', $.upFile[slfunc]($.startByte, $.endByte));
					$.lastsz = 0;
					break;
				case 'abrt':
					//console.log('abrt',$.fileName);
					$.xhr.timeout = 10000;
					addData($.fData, { chunkact: 'abrt', identifier: $.uniqueId, filename: $.fileName });
					$.upState = 'nil';
					break;
				case 'nil':
					//console.log('nil ',$.fileName);
					endup();
					return;
					break;
			}
			//console.log($.chnkNum, $.fileName);
			$.xhr.open('POST', URL);
			$.xhr.send($.fData);
		};

		var cb = {
			prog: function(e) {
					if (!e.lengthComputable) return;
					var loded = Math.round(e.loaded / e.total * $.actSize);
					if ($.upState == 'chnk' && $.chnkNum) {		//console.log($.actSize,loded,e);
						//var loded = $.loaded;
						$.pBar.show(($.startByte + loded) / $.size);
						UpdateTotalProgress(loded - $.lastsz);
						$.lastsz = loded;
					} else if ($.upState == 'upld') {
						$.pBar.show(e.loaded / e.total);
						loded = Math.round(e.loaded / e.total * $.size);
						UpdateTotalProgress(loded - $.lastsz);
						$.lastsz = loded;
					}
				},
			chng: function(e) {
				//	console.log(this,e);
					if (this.readyState < 4) { return; }
					if (this.status !== 200) {
						UpdateTotalProgress($.size - $.startByte - $.lastsz);
						$.lastsz = $.size;
						if (this.status === 0) {
							$.pBar.msg('-- '+ js_vars.h5uM.aborted, true);
							if ($.doChnk) {
								$.upState = 'abrt';
								cstate();
							} else {
								endup();
							}
						} else {
							$.pBar.msg(this.responseText || this.response || this.statusText || this.status, true);
							endup();
						}
					} else if (this.status === 200) {
						if (this.responseText.length) {
							$.pBar.msg(this.responseText, true);
						} else {
							if ($.doChnk) {
								cstate();
							} else {
								state();
							}
						}
					}
				},
			fail: function(e) {
					$.pBar.msg($.xhr.responseText, true);
					//console.log(e,this);
				}
			};

		$.abort = function(ua) {
			if ($.xhr) {
				var xrs = $.xhr.readyState;
				if (xrs < 4 && xrs !== 0) {
					$.xhr.abort();
				} else {
					cb.abrt();
				}
			} else {
				$.pBar.remove();
				$.pBar = null;
			}
		};

		// put up the progress bar
		$.pBar = new ProgressBar($, $.doChnk ? 'chunked' : '');

		var errM = '';
		var dotParts = file.name.split('.');
		if (dotParts.length == 1 || (typeof(js_vars.allowed_file_types) == 'object' && js_vars.allowed_file_types.indexOf(dotParts.pop().toLowerCase()) < 0)) {
			errM = '<img src="' + js_vars.H5uPath + 'css/info.png" class="infog" onclick="showAllowedExts();" /> ' + js_vars.h5uM.type_err;
		} else if (file.size > js_vars.maxfilesize) {
			errM = js_vars.h5uM.size_err;
		}

		if (errM) {
			$.pBar.msg(errM, true);
			UpdateTotalProgress(file.size);
			$.xhr = null;
			NextInQueue(true,'errM');
			return;
		}

		$.xhr.onreadystatechange = cb.chng;
		$.xhr.upload.onerror = cb.fail;
		$.xhr.upload.onprogress = cb.prog;

		if ($.doChnk) {
			cstate();
		} else {
			state();
		}

		return (this);
	}

	function _setup() {
		var fileselect = $id('upload_field'),
			filedrag = $id('dropArea'),
			xhr;

		if (w.File && w.FileList) {
			qCountSpan = $id('qcount');
			e_st = $id('qstop');
			e_gc = $id('qgocan');

			// file select
			if (fileselect) {
				$ae(fileselect, 'click', chkAlbmSel);
				$ae(fileselect, 'change', FileSelectHandler);
			}

			// is XHR2 available?
			xhr = new XMLHttpRequest();
			if (xhr.upload) {

				// file drop
				$ae(filedrag, 'dragover', FileDragHover);
				$ae(filedrag, 'dragleave', FileDragHover);
				$ae(filedrag, 'drop', FileSelectHandler);
				filedrag.style.display = 'block';

				// progress display area
				totProgressDiv = $id('totprogress');
				progressDiv = $id('fprogress');
			}
			xhr = null;

			h5u_albSel = document.getElementsByName('h5u_album')[0];
		} else {
			$id('h5upldrow').style.display = 'none';
			$id('navailrow').style.display = 'table-row';
		}
	}

	w.H5uQctrl = _qCtrl;

	//$ae(w, "DOMContentLoaded", function(){_setup()});
	// get around cloudfare highjack of DOMContentLoaded
	$ae(document, 'readystatechange', (e) => {
		if (e.target.readyState === 'interactive') {
			_setup();
		} 
	});

})(window,'uniload.php',['autorient','flistitl','title','caption','keywords','user1','user2','user3','user4']);

// explain allowed file types (extensions)
function showAllowedExts() {
	alert(js_vars.h5uM.extallow + js_vars.allowed_file_types.join(', '));
}

function shide_titlrow(elem) {
	var targ = $id('titlrow');
	elem.checked ? targ.style.display = 'none' : targ.style.display = 'table-row';
}

