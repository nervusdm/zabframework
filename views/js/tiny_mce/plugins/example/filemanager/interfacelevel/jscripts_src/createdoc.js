function validateForm(form) {
	var docname = form.docname.value;

	if (docname == "") {
		alert('You must write a filename for the new document.');
		return false;
	}

	return true;
};

function preview(path) {
	var iframe = document.getElementById('previewNewDocIframe');
	iframe.src = path;
};

function init() {
};
