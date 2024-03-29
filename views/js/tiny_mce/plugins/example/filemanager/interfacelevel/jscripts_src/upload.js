function updateFileNameComplex(form, elm) {
	var fileName = elm.value;
	var elements;
	var name;

	var pos = fileName.lastIndexOf('/');
	pos = pos == -1 ? fileName.lastIndexOf('\\') : pos;

	fileName = cleanFileName(fileName.substring(pos+1));
	
	if (pos > 0) {
		if ((pos = fileName.lastIndexOf('.')) != -1)
			fileName = fileName.substring(0, pos);

		//elements = document.forms['uploadForm'].elements;
		elements = document.getElementById('uploadForm').elements;
		for (i=0; i<elements.length; i++) {
			name = elements[i].getAttribute("name");
			if (name == "filename_"+ form)
				elements[i].value = fileName;
		}
	}
};

function validateExtension(file_name, extensions) {
	var fileExt = "";

	file_name = file_name.toLowerCase();
	extensions = extensions.toLowerCase();

	if (extensions == "" || extensions == "*")
		return true;

	// Get file ext
	if (file_name.lastIndexOf('.') != -1)
		fileExt = file_name.substring(file_name.lastIndexOf('.')+1);

	var extensions = extensions.split(',');
	for (var i=0; i<extensions.length; i++) {
		var ext = extensions[i];
		if (ext != "" && ext == fileExt)
			return true;
	}

	return false;
};

function validateForm(form) {
	form.SubmitBtn.disabled = true;

	var filenamewrited = false;
	
	var elements = form.elements;
	var name, value, filename, filenamevalue, is_valid, is_forbiden;
	for (i=0; i<elements.length; i++) {
		name = elements[i].getAttribute("name");
		value = elements[i].value;

		if (name == null)
			continue;

		//var indexfilename = name.indexOf("filename");
		//var indexfile = name.indexOf("file");
		var isFile = ((name.indexOf("file_") == 0) && (name.indexOf("filename_") == -1)) ? true : false;
		if (isFile) {
			fileid = name.substring(5);
			if (value != "") {
				filenamewrited = true;
		
				filename = document.getElementById('filename_'+fileid);
				if(filename) {
					filenamevalue = filename.value;
					if (filenamevalue != "") {
						is_valid = (validateExtensionFiles && !validateExtension(value, uploadExtensions)) ? false : true;
						is_forbiden = (validateForbidenExtensionFiles && validateExtension(value, forbidenUploadExtensions)) ? true : false;
						if(!is_valid || is_forbiden) {
							if(!is_valid) alert(uploadInvalidExtensionMSG);
							alert(uploadInvalidForbidenExtensionMSG);
							
							elements[i].focus();
							form.SubmitBtn.disabled = false;
							return false;
						}
						document.getElementById('uploadForm').file_indexes.value += ','+fileid;
					} 
					else {
						alert('You must write a filename of the file you want to upload.');
						form.SubmitBtn.disabled = false;
						return false;
					}
				}
			}
		}
	}
	document.getElementById('uploadForm').path.value = openerWindow.path;
	
	if(!filenamewrited) {
		alert('You must choose at least one file to upload.');
		form.SubmitBtn.disabled = false;
		return false;
	}

	form.SubmitBtn.disabled = false;
	return true;
};

var numRows = 0;

function addRow(id, numRowIndex) {
	var html = "";
	
	if(numRowIndex) numRows = numRowIndex;
	else {++numRows;}

	var elm = document.createElement("div");
	elm.id = 'row_' + numRows;

	html += '<hr />';
	html += '<table id="row_' + numRows + '" border="0" cellspacing="0" cellpadding="4" style="text-align:left; ">';
	html += '<tr><td nowrap="nowrap">File to upload:</td>';
	html += '<td><input name="file_' + numRows + '" type="file" size="23" onchange="updateFileNameComplex('+ numRows +', this);" /></td>';
	html += '<td><a href="javascript:delRow(\'row_'+ numRows +'\')" class="mceButtonNormal"><img src="images/toolbaritems/tool_del.gif" alt="Remove" title="Remove" border="0" /></a></td>';
	html += '</tr><tr><td nowrap="nowrap">As file name:</td>';
	html += '<td colspan="2"><input id="filename_' + numRows + '" name="filename_' + numRows + '" type="text" class="inputText" size="35" maxlength="255" style="width: 200px" /></td>';
	 html += '</tr><tr>';
	html += '<td nowrap="nowrap">Overwrite if exists:</td>';
	html += '<td colspan="2"><input id="overwrite_' + numRows + '" name="overwrite_' + numRows + '" type="checkbox" class="inputText" value="1" title="Click on the checkbox to overwrite file." /></td>';
	html += '</tr></table>';

	elm.innerHTML = html;

	document.getElementById(id).appendChild(elm);
};

function delRow(id) {
	var elm = document.getElementById(id);
	if (elm)
		elm.parentNode.removeChild(elm);
};

function init(uploadsNumber) {
	for (var i=1; i < uploadsNumber; i++)
		addRow('addPosition', i);
};

function refreshUpload(outFrameUpload) {
	if(outFrameUpload == 1)
		refreshOutFrameUpload();
	else {refreshInFrameUpload();}
};

function refreshOutFrameUpload() {
	var filelist = parent.document.getElementById('filelist');
	openerWindow = filelist.contentWindow;
	openerWindow.cleanSearchedUrlVarsFromFilelistFormAction();
	openerWindow.execFileCommand('refresh');
};

function refreshInFrameUpload() {
	openerWindow.cleanSearchedUrlVarsFromFilelistFormAction();
	openerWindow.execFileCommand('refresh');
	top.close();
};
