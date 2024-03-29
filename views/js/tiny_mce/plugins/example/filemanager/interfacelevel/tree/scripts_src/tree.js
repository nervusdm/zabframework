function callAjaxEvent(url,queryString,func,funcArgs) {
	if(url.indexOf('?') == -1)
		url += '?';

	ajax.get(url+'&'+queryString,func,funcArgs);
};

function init() {
	loadConfiguration(fileConfigURL);
};

function designNodes(responseXML) {
	var node = responseXML.documentElement; 
	if(node) {
		var content = createNode(node,true);
		
		var tree_div = document.getElementById(mainTreeDivID);
		if(tree_div) {
			tree_div.innerHTML = content;
			setOverAndOut(mainTreeDivID);
		}
	}
};

function loadConfiguration(fileConfigURL) {
	var funcArgs = Array(fileDataURL,'',designNodes);
	callAjaxEvent(fileConfigURL,'',loadXMLConfiguration,funcArgs);
};

function setOverAndOut(rootName) {
	var root = document.getElementById(rootName);
	if(root) {
		var lis = root.getElementsByTagName("li");
		for (var i=0; i<lis.length; i++) {
			lis[i].onmouseover=function() {
				this.className=this.className.replace(new RegExp(" out\\b"), "");
				this.className+=" over";
			};
			lis[i].onmouseout=function() {
				this.className=this.className.replace(new RegExp(" over\\b"), "");
				this.className+=" out";
			};
		}
	}
};
