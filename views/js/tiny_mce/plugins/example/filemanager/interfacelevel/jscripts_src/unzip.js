function init() {
	showPathContent('');
};

function verifyForm() {
	return true;
};

function showPathContent(dirPath) {
	showLoadingBar();

	var columns = getColumns(zipType);
	var data = getPathSubFiles(dirPath);
	subFiles = data[0];
	subDirs = data[1];
	var html = designTable(zipType,dirPath,columns,subFiles,subDirs);
	document.getElementById('zipelements').innerHTML = html;
	
	hideLoadingBar();
};

function designTable(zipType,dirPath,columns,subFiles,subDirs) {
	var html = '<div class="currentZippedFolder">Current folder: ./'+dirPath+'</div>';
	html += '<table id="zipelementstable" border="0" cellspacing="0" cellpadding="0" width="100%"><thead>';
	html += '<tr class="column">';
	html += '<td class="hidden"><img src="images/toolbaritems/box.gif" alt="Toggle Selection" onclick="toggleAll()" /></td>';
	html += '<td width="16" height="16"></td>';
	for(var i = 0; i < columns.length; ++i)
		html += '<td>'+columns[i]+'</td>';
	html += '</tr></thead><tbody>';
	
	if(dirPath != "") {
		var fileDirName = getDirName(dirPath);
		html += '<tr class="trUp" onDblClick="showPathContent(\''+fileDirName+'\');"><td class="hidden"></td><td><img src="images/filetypes/up_folder.gif" width="16" height="16" alt="Up Directory" title="Up Directory to ./'+fileDirName+'" border="0"/></td><td colspan="'+columns.length+'"></td></tr>';
	}
	
	var trClassName, fullFileName, fileName, size, csize, status, created, statusRed, onDblClick, fileExtension, isDir;
	for(var i = 0; i < subFiles.length; ++i) {
		trClassName = trClassName == "trOdd" ? "trEven" : "trOdd";
		fullFileName = subFiles[i][0];
		fileName = subFiles[i][1];
		size = subFiles[i][2] ? subFiles[i][2] : "";
		size = size == 0 ? "-" : size.replace("Bytes","B");
		
		isDir = existsSubFile(subDirs,fullFileName);
		onDblClick = isDir ? ' onDblClick="showPathContent(\''+fullFileName+'\');"' : "";

		fileExtension = isDir ? "folder_xp" : getFileExtension(fileName);
		
		html += '<tr class="'+trClassName+'" onMouseOver="this.className=\''+trClassName+'_over\'" onMouseOut="this.className=\''+trClassName+'\'" onClick="changeFileListRowClassName(this, \''+trClassName+'\',\'file_'+i+'\');" '+onDblClick+'>';
		html += '<td class="hidden"><input type="checkbox" id="file_'+i+'" name="file_'+i+'" value="'+fullFileName+'" /></td>';
		html += '<td><div class="filetype_icon '+fileExtension+'"></div></td>';
		if(zipType == "zip") {
			csize = subFiles[i][3] ? subFiles[i][3] : "";
			status = subFiles[i][4] ? subFiles[i][4] : "";
			created = subFiles[i][5] ? subFiles[i][5] : "";
			
			csize = csize == 0 ? "-" : csize.replace("Bytes","B");
			if(status == "") status = "-";
			if(created == "") created = "-";
			
			fileName = fileName.length > 35 ? fileName.substring(0,35)+"..." : fileName;
			statusRed = status.toLowerCase() != "ok" ? "statusred" : "statusgreen";
			
			html += '<td width="200px" height="20px" align="left">'+fileName+'</td>';
			html += '<td width="70px" align="right">'+size+'</td>';
			html += '<td width="70px" align="right">'+csize+'</td>';
			html += '<td width="50px" align="center" class="'+statusRed+'">'+status+'</td>';
			html += '<td width="100px" align="center">'+created+'</td>';
		}
		else if(zipType == "gz" || zipType == "tar" || zipType == "tgz") {
			fileName = fileName.length > 50 ? fileName.substring(0,50)+"..." : fileName;
			created = subFiles[i][3] ? subFiles[i][3] : "";
			if(created == "") created = "-";
			
			html += '<td width="300px" height="20px" align="left">'+fileName+'</td>';
			html += '<td width="70px" align="right">'+size+'</td>';
			html += '<td width="100px" align="center">'+created+'</td>';
		}
		html += '</tr>';
	}
	html += '</tbody></table>';
	return html;
};

function getColumns(zipType) {
	if(zipType == "zip")
		return Array('name','size','csize','status','created');
	else if(zipType == "gz" || zipType == "tar" || zipType == "tgz")
		return Array('name','size','created');
};

function getPathSubFiles(dirName) {
	var pathFilesList = Array();
	var subFilesName = Array();
	var subDirsName = Array();
	
	dirName = configureFileName(dirName);
	
	var fileName, subFileName;
	for(var i = 0; i < filesList.length; ++i)  {
		fileName = filesList[i][0];
		fileName = configureFileName(fileName);
		
		subFileName = getSubFileName(fileName,dirName);
		if(subFileName && subFileName != "" && subFileName != "/") {
			if(!existsSubFile(subFilesName,subFileName) && isSubFileDir(dirName,subFileName)) {
				subFilesName.push(subFileName);
				
				if(subFileName == filesList[i][0]) pathFilesList.push(filesList[i]);
				else {pathFilesList.push( Array(subFileName, getBaseName(subFileName)) );}
		//alert(pathFilesList[pathFilesList.length-1].toString());
			}
			
			if(!existsSubFile(subDirsName,subFileName) && fileName.length > subFileName.length) {
				subDirsName.push(subFileName);
			}
		}
	}
	return Array(pathFilesList,subDirsName);
};

function getSubFileName(fileName,dirName) {
	var b_index = dirName != "" ? fileName.indexOf(dirName+'/') : 0;
	if(b_index == 0) {
		var e_index = fileName.indexOf("/",dirName.length+1);
		if(e_index == -1) e_index = fileName.length;
	
		return fileName.substring(0,e_index);
	}
	return false;
};

function existsSubFile(subFilesName,subFileName) {
	for(var i = 0; i < subFilesName.length; ++i)
		if(subFilesName[i] == subFileName)
			return true;
	return false;
};

function isSubFileDir(dirName,subFileName) {
	return subFileName.substring(0,dirName.length) == dirName;
};

function getBaseName(fileName) {
	var index = fileName.lastIndexOf("/");
	return fileName.substring(index+1,fileName.length);
};

function getDirName(fileName) {
	fileName = configureFileName(fileName);
	var index = fileName.lastIndexOf("/");
	return index > 0 ? fileName.substring(0,index) : "";
};

function configureFileName(fileName) {
	if(fileName.substring(fileName.length-1,fileName.length) == "/")
		fileName = fileName.substring(0,fileName.length-1);
	if(fileName.substring(0,1) == "/")
		fileName = fileName.substring(1,fileName.length);
	
	return fileName;
};

function getFileExtension(fileName) {
	var index = fileName.lastIndexOf(".");
	return index > 0 && (index == fileName.length-4 || index == fileName.length-3) ? fileName.substring(index+1,fileName.length) : "";
};

function toggleAll() {
	showLoadingBar();
	
	var formObj = getForm('unzipForm');
	for (var i=0; i<formObj.elements.length; i++) {
		if (formObj.elements[i].type == "checkbox" && !formObj.elements[i].disabled && formObj.elements[i].name != "overwrite")
			formObj.elements[i].checked = formObj.elements[i].checked ? false : true;
	}
	
	var tableObj = document.getElementById('zipelementstable');
	if(tableObj)
		for (i=0; i<tableObj.rows.length; i++) {
			if(tableObj.rows[i].onclick)
				tableObj.rows[i].onclick();
		}
	
	hideLoadingBar();
};

function changeFileListRowClassName(row, class_name, id) {
	var checkbox = document.getElementById(id);

	if(row.className != 'selectedFilelistRow') {
		row.className = 'selectedFilelistRow';
		row.onmouseout = function() {
			row.className = 'selectedFilelistRow';
		};
		row.onmouseover = function() {
			row.className = 'selectedFilelistRow';
		};

		if(checkbox)
			checkbox.checked = true;
	}
	else {
		row.className = class_name;
		row.onmouseout = function() {
			row.className = class_name;
		};
		row.onmouseover = function() {
			row.className = class_name+'_over';
		};
		
		if(checkbox)
			checkbox.checked = false;
	}
};
