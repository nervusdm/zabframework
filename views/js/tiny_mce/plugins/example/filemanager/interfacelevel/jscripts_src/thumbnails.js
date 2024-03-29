var fileSrc = 'thumbnails.php';

function addButtonHandlers(element_id) {
	var targetElm = document.getElementById(element_id);
	if (targetElm) {
		targetElm.onmouseover = buttonEventHandler;
		targetElm.onmouseout = buttonEventHandler;
		targetElm.onmouseup = buttonEventHandler;
		targetElm.onmousedown = buttonEventHandler;
	}
};

function loadImages() {
	var elements = document.getElementsByTagName("img");

	for (var i=0; i<elements.length; i++) {
		if (elements[i].name.indexOf("img_spacer") == 0) {
			/*elements[i].src = elements[i].title;*/
			elements[i].onload = removeLoader;
			elements[i].onerror = removeLoader;
		}
	}
};

function removeLoader(e) {
	e = typeof(e) == "undefined" ? window.event : e;

	var el = e.srcElement ? e.srcElement : e.currentTarget;

	var divel = document.getElementById("thi_" + el.alt);
	
	var a = divel.className.split(' ');
	for (i=0; i<a.length; i++) {
		if (a[i] == "loading") {
			if (e.type == "error") {
				a[i] = 'error';
				//var imgc = document.getElementById("thc_"+ el.alt);
				//imgc.parentNode.removeChild(imgc);
				el.parentNode.removeChild(el);
			} 
			else {
				a[i] = '';
			}
		}
	}
	divel.className = a.join(" ");
};

function init(isSearchAction) {
	if (arguments.callee.done) return;
	arguments.callee.done = true;	

	loadImages();
	correctFileListDivScroll('thwrapperdiv');

	var isGecko = navigator.userAgent.indexOf('Gecko') != -1;

	disabledTools = disabledTools.split(',');

	// Lock down all tools
	setCommandEnabled('createdir', hasCreateFolderPermission);
	setCommandEnabled('createdoc', hasCreateDocPermission);
	setCommandEnabled('refresh', true);
	setCommandEnabled('upload', hasUploadPermission);
	setCommandEnabled('search', hasSearchPermission);
	//setCommandEnabled('props', false);
	setCommandEnabled('cut', false);
	setCommandEnabled('copy', false);
	setCommandEnabled('paste', hasPasteAccess);
	setCommandEnabled('delete', false);
	setCommandEnabled('unzip', false);
	setCommandEnabled('zip', false);
	setCommandEnabled('toggleall', true);
	setCommandEnabled('upfolder', true);
	setCommandEnabled('zoom_out', true);
	setCommandEnabled('zoom_in', true);
	setCommandEnabled('filemanager', true);
	setCommandEnabled('help', true);
	
	/*addButtonHandlers('createdir');
	addButtonHandlers('createdoc');
	addButtonHandlers('refresh');
	addButtonHandlers('upload');
	addButtonHandlers('props');
	addButtonHandlers('cut');
	addButtonHandlers('copy');
	addButtonHandlers('paste');
	addButtonHandlers('delete');
	addButtonHandlers('unzip');
	addButtonHandlers('zip');
	addButtonHandlers('toggleall');
	addButtonHandlers('filemanager');*/
	//addButtonHandlers('search');
	//addButtonHandlers('help');

	fixImagesBug();

	if (errorMsg != "")
		alert(errorMsg);

	//if(!isSearchAction)
		//showPreview(path);
	
	hideLoadingBar();
};

function gotoAnchor(anchor) {
	if ((typeof(anchor) != "undefined") || (anchor != ""))
		document.location.href = "#f_"+ anchor +"";
};

function getFileData(name, path) {
	var parent = document.getElementById("th_"+ name);
	var filediv = document.getElementById("fileinfo");
	var loadinfo = document.getElementById("fileloadinfo");
	var infowrap = document.getElementById("fileinfowrap");
	
	moveDivTo(filediv, getAbsPosition(parent).absLeft+1, getAbsPosition(parent).absTop+20);

	if (current == name) {
		filediv.style.display = 'block';
		return;
	} else {
		current = name;
		filediv.style.display = 'none';
	}

	// Get data
	infowrap.style.display = 'none';
	loadinfo.style.display = 'block';
	filediv.style.display = 'block';
	
	var file = document.getElementById("file_"+name);
	if(file) {
		document.getElementById("fileinfowrap").style.display = 'block';
		document.getElementById("fileloadinfo").style.display = 'none';
		
		var file_type = file.getAttribute("file_type");
		var file_size = file.getAttribute("file_size");
		document.getElementById("file_type").innerHTML = file_type != "" ? file_type : "undefined";
		document.getElementById("file_size").innerHTML = file_size != 0 ? file_size : "0 Bytes";
	}
};

function getImageData(name, path) {
	var parent = document.getElementById("th_"+ name);
	var imgdiv = document.getElementById("imginfo");
	var loadinfo = document.getElementById("loadinfo");
	var infowrap = document.getElementById("infowrap");

	moveDivTo(imgdiv, getAbsPosition(parent).absLeft+1, getAbsPosition(parent).absTop+20);

	if (current == name) {
		imgdiv.style.display = 'block';
		return;
	} else {
		current = name;
		imgdiv.style.display = 'none';
	}

	// Get data
	infowrap.style.display = 'none';
	loadinfo.style.display = 'block';
	imgdiv.style.display = 'block';
	
	var img = document.getElementById("img_"+name);
	if(img) {
		document.getElementById("infowrap").style.display = 'block';
		document.getElementById("loadinfo").style.display = 'none';
		
		var image_type = img.getAttribute("img_type");
		var image_size = img.getAttribute("img_size");
		document.getElementById("img_width").innerHTML = img.getAttribute("img_width");
		document.getElementById("img_height").innerHTML = img.getAttribute("img_height");
		document.getElementById("img_type").innerHTML = image_type != "" ? image_type : "undefined";
		document.getElementById("img_size").innerHTML = image_size != 0 ? image_size : "0 Bytes";
		document.getElementById("img_scale").innerHTML = img.getAttribute("img_scale");
	}
};

function hideFileData(name) {
	var imgdiv = document.getElementById("fileinfo");
	imgdiv.style.display = 'none';
};

function hideImageData(name) {
	var imgdiv = document.getElementById("imginfo");
	imgdiv.style.display = 'none';
};

function getAbsPosition(n) {
	var p = {absLeft : 0, absTop : 0};

	while (n) {
		p.absLeft += n.offsetLeft;
		p.absTop += n.offsetTop;
		n = n.offsetParent;
	}

	return p;
};

function moveDivTo(n, x, y) {

	var elm = document.getElementById("thwrapperdiv");

	n.style.left = (x - elm.scrollLeft) + "px";
	n.style.top = (y - elm.scrollTop) + "px";

	// window.status = "X: " + x + ", Y: " + y;
};


var thumbnails_zoom_width = Array(132,152,172,192,212,232);
var thumbnails_zoom_height = Array(150,170,190,210,220,240);
var thumbnails_selected_zoom = 1;
var thumbnails_zoom_scale = 1;

function thumbnailsZoomOut() {
	showLoadingBar();
	
	if(thumbnails_selected_zoom > 0) {
		--thumbnails_selected_zoom;
		thumbnails_zoom_scale = thumbnails_zoom_width[thumbnails_selected_zoom]/thumbnails_zoom_width[thumbnails_selected_zoom+1];
		thumbnailsZoom();
		
		var zoom_in = document.getElementById('zoom_in');
		if(zoom_in) zoom_in.className = 'mceButtonNormal';
	}
	
	if(thumbnails_selected_zoom == 0) {
		var zoom_out = document.getElementById('zoom_out');
		if(zoom_out) zoom_out.className = 'mceButtonDisabled';
	}
	
	hideLoadingBar();
};

function thumbnailsZoomIn() {
	showLoadingBar();
	
	if(thumbnails_selected_zoom < thumbnails_zoom_width.length-1) {
		++thumbnails_selected_zoom;
		thumbnails_zoom_scale = thumbnails_zoom_width[thumbnails_selected_zoom]/thumbnails_zoom_width[thumbnails_selected_zoom-1];
		thumbnailsZoom();
		
		var zoom_out = document.getElementById('zoom_out');
		if(zoom_out) zoom_out.className = 'mceButtonNormal';
	}
	
	if(thumbnails_selected_zoom == thumbnails_zoom_width.length-1) {
		var zoom_in = document.getElementById('zoom_in');
		if(zoom_in) zoom_in.className = 'mceButtonDisabled';
	}
	
	hideLoadingBar();
};

function thumbnailsZoom() {
	var thwrapperdiv = document.getElementById('thwrapperdiv');
	var divs = thwrapperdiv.getElementsByTagName('div');
	
	var zoom_width = thumbnails_zoom_width[thumbnails_selected_zoom];
	var zoom_height = thumbnails_zoom_height[thumbnails_selected_zoom];

	var th, file_name, thi, thn, img;
	for(var i = 0; i < divs.length; ++i) {
		th = divs[i];
		if(th.id.indexOf('th_') >= 0) {
			file_name = th.id.substring(3,th.id.length);
			
			th.style.width = zoom_width+'px';
			th.style.height = zoom_height+'px';
			th.style.marginBottom = '15px';
			
			thi = document.getElementById('thi_'+file_name);
			if(thi) {
				thi.style.width = zoom_width+'px';
				thi.style.height = zoom_width+'px';
			}
			
			thn = document.getElementById('thn_'+file_name);
			if(thn) {
				thn.style.top = (zoom_width+5)+'px';
				thn.style.width = zoom_width+'px';
			}
			
			img = document.getElementById('img_'+file_name);
			if(img) {
				img.width = Math.round(img.width*thumbnails_zoom_scale);
				img.height = Math.round(img.height*thumbnails_zoom_scale);
			}
		}
	}
	
	document.getElementById("imginfo").style.width = (zoom_width-5)+'px';
	document.getElementById("fileinfo").style.width = (zoom_width-5)+'px';
};