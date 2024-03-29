
var numRows = 0;

function addRow(id, numRowIndex) {
	var html = "";
	
	if(numRowIndex) {numRows = numRowIndex;}
	else {++numRows;}

	var elm = document.createElement("div");
	elm.id = 'row_' + numRows;

	html += '<hr/>';
	html += '<table id="row_' + numRows + '" border="0" cellspacing="0" cellpadding="2">';
	html += '<tr><td nowrap="nowrap">All or part of the name:</td>';
	html += '<td><input id="search_file_name_' + numRows + '" name="search_file_name_' + numRows + '" type="text" size="60" class="inputText" value=""/></td>';
	html += '<td><a href="javascript:delRow(\'row_'+ numRows +'\')" class="mceButtonNormal"><img src="images/toolbaritems/tool_del.gif" alt="Remove" title="Remove" border="0" /></a></td>';
	html += '</tr><tr><td nowrap="nowrap">A word of phrase in the file:</td>';
	html += '<td><input id="search_file_word_' + numRows + '" name="search_file_word_' + numRows + '" type="text" size="60" class="inputText" value="" /></td>';
	html += '</tr><tr>';
	html += '<td nowrap="nowrap">Case sensitive:</td>';
	html += '<td><input id="case_sensitive_' + numRows + '" name="case_sensitive_' + numRows + '" type="checkbox" class="inputText" value="1" /></td>';
	html += '</tr>';
	html += '</table>';

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


function showAndHideCont(id) {
	var element = document.getElementById(id);
	if(element)
		element.style.display = element.style.display == 'none' ? 'block' : 'none';
};
		
function replaceRootPath(path) {
	var index = path.indexOf(root_path);
	if(index == 0) {
		var begin = root_path.length;
		var end = path.length;
		path = path.substring(begin,end);
	}
	return path;
};

function updateFileSearchLocation(id) {
	var locationInput = document.getElementById('search_file_location');
	if(locationInput)
		locationInput.value = replaceRootPath(id);
};

function validateForm(form) {
	form.SubmitBtn.disabled = true;
	if(openerWindow && openerWindow.document && openerWindow.document.getElementById('loadingbar'))
		openerWindow.document.getElementById('loadingbar').style.display='block';

	var search_indexes = document.getElementById('search_indexes');
	search_indexes.value = '';
	
	var search_file_location = document.getElementById('search_file_location');
	var search_subfolders = document.getElementById('search_subfolders');
	var is_search_subfolders = search_subfolders.checked ? 1 : '';
	var url = "&search=1&search_file_location="+search_file_location.value+"&search_subfolders="+is_search_subfolders;
	
	var name,value,isFile,search_file_name,search_file_word,case_sensitive,is_case_sensitive;
	var elements = form.elements;
	for (i=0; i<elements.length; i++) {
		name = elements[i].getAttribute("name");
		value = elements[i].value;

		if (name == null)
			continue;

		isFile = name.indexOf("search_file_name_") == 0 ? true : false;
		if (isFile) {
			fileid = name.substring(17);
			if (fileid >= 0) {
				search_file_name = document.getElementById('search_file_name_'+fileid);
				search_file_word = document.getElementById('search_file_word_'+fileid);
				case_sensitive = document.getElementById('case_sensitive_'+fileid);
				is_case_sensitive = case_sensitive.checked ? 1 : '';

				search_indexes.value += ','+fileid;
				
				url += "&search_file_name_"+fileid+"="+search_file_name.value+"&search_file_word_"+fileid+"="+search_file_word.value+"&case_sensitive_"+fileid+"="+is_case_sensitive;
			}
		}
	}
	url += "&search_indexes="+search_indexes.value;	
	
	openerWindow.cleanSearchedUrlVarsFromFilelistFormAction(url);
	openerWindow.execFileCommand('refresh');

	form.SubmitBtn.disabled = false;
	return false;
};
