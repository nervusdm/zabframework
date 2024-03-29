function init() {
	initVars();
	centerImage();
	setDocumentTitle(current_index);
	hideLoadingBar();
};

function initVars() {
	current_index = current_index < 1 ? 1 : current_index > images_length ? images_length : current_index;
	
	var first_image_row = document.getElementById('first_image_row');
	var previous_image_row = document.getElementById('previous_image_row');
	var next_image_row = document.getElementById('next_image_row');
	var last_image_row = document.getElementById('last_image_row');
	var less_zoom = document.getElementById('less_zoom');
	var plus_zoom = document.getElementById('plus_zoom');
	var image_editor = document.getElementById('image_editor');
	
	var default_class = 'bottom ';
	if(first_image_row && (current_index <= 1 || images_length <= 1) ) {
		first_image_row.className = default_class+'inactive';
	}else {first_image_row.className = default_class+'active';}
	
	if(previous_image_row && (current_index <= 1 || images_length <= 1) ) {
		previous_image_row.className = default_class+'inactive';
	}else {previous_image_row.className = default_class+'active';}
		
	if(next_image_row && (current_index >= images_length || images_length <= 1) ) {
		next_image_row.className = default_class+'inactive';
	}else {next_image_row.className = default_class+'active';}
		
	if(last_image_row && (current_index >= images_length || images_length <= 1) ) {
		last_image_row.className = default_class+'inactive';
	}else {last_image_row.className = default_class+'active';}
	
	var image_path = getCurrentImageName();
	if(image_path == "") {
		less_zoom.className = default_class+'inactive';
		plus_zoom.className = default_class+'inactive';
		image_editor.className = default_class+'inactive';
	}
	else {
		less_zoom.className = default_class+'active';
		plus_zoom.className = default_class+'active';
		image_editor.className = imageEditAccess == 1 ? default_class+'active' : default_class+'inactive';
	}

};

function previewfirstimage() {
	previewimage(1);
};

function previewpreviousimage() {
	previewimage(current_index-1);
};

function previewnextimage() {
	previewimage(current_index+1);
};

function previewlastimage() {
	previewimage(images_length);
};

function previewimage(index) {
	showLoadingBar();
	--index;
	if(index >= 0 && index < images_length && current_index != index+1) {
		var image_path = images_path[index];
		var image_size = images_size[index];
		var image_width = images_width[index];
		var image_height = images_height[index];
		
		var container = document.getElementById("imagesubcontainer");
		if(container && image_path.length > 0) {
			current_index = index+1;
			setDocumentTitle(current_index);
			var current_image_name = getCurrentImageName();
			
			container.className = 'preview_image';
			container.innerHTML = '<img id="imgObject" src="readfile.php?path='+image_path+'" alt="'+current_image_name+'" title="'+current_image_name+'" onerror="imageError();" image_width="'+image_width+'" image_height="'+image_height+'"  />';
		
			var imgObject = document.getElementById('imgObject');
			if(imgObject) {
				imgObject.onload = function() {
					centerImage();
				};
			}
		}
	}
	initVars();
	hideLoadingBar();
};

function checkKey(event) {
	var key = getkey(event);
	switch (key) {
		case 33: previewfirstimage(); break;  // page up
		case 102: previewpreviousimage(); break;  // p
		case 37: previewpreviousimage(); break;  // left arrow
		case 32: previewimage(current_index); break;  // space
		case 110: previewnextimage(); break;  // n
		case 39: previewnextimage(); break;  // right arrow
		case 34: previewlastimage(); break;  // page down
		break;
	}

	if (key == 27)
		window.close(); // escape
};

function getkey(e) {
	if (window.event) {
		return window.event.keyCode;
	} else if (e) {
		return e.keyCode;
	} else {
		return null;
	}
};

function imageError() {
	document.title = 'Preview - Image Error';

	var image = document.getElementById('imgObject');
	image.style.display = "none";
	var container = document.getElementById("imagesubcontainer");
	if(container) {
		container.className = container.className + " error";
		
		var isMSIE = (navigator.appName == "Microsoft Internet Explorer");
		if(!isMSIE) {
			container.style.position = 'absolute';
			container.style.left = '0px';
			container.style.top = '0px';
		}
	}
};

function centerImage() {
	var isMSIE = (navigator.appName == "Microsoft Internet Explorer");
	
	if(!isMSIE) {
		var imagecontainer = document.getElementById('imagecontainer');
		var imagesubcontainer = document.getElementById('imagesubcontainer');
		var imgObject = document.getElementById('imgObject');
		
		var x = Math.round(parseInt(imagecontainer.clientWidth / 2.0) - (imgObject.width / 2.0));
		var y = Math.round(parseInt(imagecontainer.clientHeight / 2.0) - (imgObject.height / 2.0));
		
		if (x < 0)
			x = 0;
	
		if (y < 0)
			y = 0;
	
		imagesubcontainer.style.position = 'absolute';
		imagesubcontainer.style.left = x+'px';
		imagesubcontainer.style.top = y+'px';
	}
};

function getCurrentImageName() {
	var image_path = images_path[current_index-1];
	return getImageBaseName(image_path);
};

function getImageBaseName(image_path) {
	var index = image_path.lastIndexOf('/');
	if(index >= 0)
		image_path = image_path.substring(index+1,image_path.length);
	return image_path;
}

function imageEditor() {
	var image_path = images_path[current_index-1];
	if(image_path != "" && openerWindow)
		openerWindow.imageEdit(image_path);
};

function setDocumentTitle(index) {
	--index;
	var image_path = images_path[index];
	var image_size = images_size[index];
	var image_width = images_width[index];
	var image_height = images_height[index];
	
	document.title = 'Preview - '+getImageBaseName(image_path)+' - '+image_width+'x'+image_height+' - '+image_size;
};

function zoomPlus() {
	var image_path = getCurrentImageName();
	if(image_path != "") {
		var imgObject = document.getElementById('imgObject');
		var new_width = imgObject.getAttribute('image_width') ? imgObject.getAttribute('image_width') * (zoom_size+1) : 0;
		var new_height = imgObject.getAttribute('image_height') ? imgObject.getAttribute('image_height') * (zoom_size+1) : 0;
		
		imgObject.setAttribute('image_width',new_width);
		imgObject.setAttribute('image_height',new_height);
		imgObject.width = new_width;
		imgObject.height = new_height;
		
		centerImage();
	}
};

function zoomMinus() {
	var image_path = getCurrentImageName();
	if(image_path != "") {
		var imgObject = document.getElementById('imgObject');
		var new_width = imgObject.getAttribute('image_width') ? imgObject.getAttribute('image_width') * (1-zoom_size) : 0;
		var new_height = imgObject.getAttribute('image_height') ? imgObject.getAttribute('image_height') * (1-zoom_size) : 0;
		
		imgObject.setAttribute('image_width',new_width);
		imgObject.setAttribute('image_height',new_height);
		imgObject.width = new_width;
		imgObject.height = new_height;
		
		centerImage();
	}
};