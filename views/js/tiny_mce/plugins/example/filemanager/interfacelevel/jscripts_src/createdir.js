function init() {
};

function verifyForm() {
	if(document.getElementById('dirname').value)
		return true;
	else {alert('Directory name cannot be empty!');}
	return false;
};

function preview(path) {
	var iframe = document.getElementById('previewNewDirIframe');
	iframe.src = 'previewdirtemplates.php?path='+path;
};
