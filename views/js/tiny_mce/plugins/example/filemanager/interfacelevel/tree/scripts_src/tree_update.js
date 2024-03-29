function updateUlNode(responseXML,funcArgs) {
	var id, func_before, func_after, return_value_of_func_before;
	if(funcArgs) {
		id = funcArgs[0];
		func_before = funcArgs[1];
		func_after = funcArgs[2];
	}
	
	if(func_before) 
		return_value_of_func_before = func_before(id);
	
	if(responseXML) {
		var node = responseXML.documentElement; 
		if(node) {
			applyUlNodeChanges(node);
			setOverAndOut('ul_'+node.getAttribute('id'));
			
			if(func_after) func_after(id,node,return_value_of_func_before);
		}
	}
};

function updateLiNode(responseXML,funcArgs) {
	var id, func_before, func_after, return_value_of_func_before;
	if(funcArgs) {
		id = funcArgs[0];
		func_before = funcArgs[1];
		func_after = funcArgs[2];
	}
	
	if(func_before) 
		return_value_of_func_before = func_before(id);
	
	if(responseXML) {
		var node = responseXML.documentElement;
		if(node) {
			applyLiNodeChanges(node);
			/*updateLi(node);*/
			setOverAndOut('ul_'+node.getAttribute('id'));
			
			if(func_after) func_after(id,node,return_value_of_func_before);
		}
	}
};

function applyUlNodeChanges(xmlNode) {
	if(xmlNode && xmlNode.nodeType == document.ELEMENT_NODE || xmlNode.nodeType == 1) {
		var id = xmlNode.getAttribute('id');
		var tag = xmlNode.nodeName;
		var htmlNode = document.getElementById('ul_'+id);
		
		if(id && htmlNode) {
			var xmlChilds = Array();
			var items = xmlNode.childNodes;
			for (var i = 0; i < items.length; ++i)
				if(items[i].nodeType == document.ELEMENT_NODE || items[i].nodeType == 1)
					xmlChilds[xmlChilds.length] = items[i];
			
			var htmlChilds = Array();
			items = htmlNode.childNodes;
			for (i = 0; i < items.length; ++i)
				if(items[i].nodeType == document.ELEMENT_NODE || items[i].nodeType == 1)
					htmlChilds[htmlChilds.length] = items[i];
			
			applyChildsChanges(xmlChilds,htmlChilds,htmlNode);
			orderChilds(xmlChilds,htmlNode);
			updateChildsClass(htmlNode);
		}
	}
};

function applyLiNodeChanges(xmlNode) {
	if(xmlNode && xmlNode.nodeType == document.ELEMENT_NODE || xmlNode.nodeType == 1) {
		var id = xmlNode.getAttribute('id');
		var tag = xmlNode.nodeName;
		var htmlNode = document.getElementById('li_'+id);
		
		if(id && htmlNode) {
			htmlNode.setAttribute('tag',tag);
			
			var items = xmlNode.childNodes;
			var childsExists = false;
			for (var i = 0; i < items.length && !childsExists; ++i)
				if(items[i].nodeType == document.ELEMENT_NODE || items[i].nodeType == 1)
					childsExists = true;

			var ul = htmlNode.getElementsByTagName('ul').item(0);
			if(childsExists && !ul) {
				insertUl(htmlNode,id);
				ul = htmlNode.getElementsByTagName('ul').item(0);
				updateLi(xmlNode);
			}
			
			if(ul) {
				applyUlNodeChanges(xmlNode);
				updateChildsClass(htmlNode.parentNode);
			}
		}
	}
};

function applyChildsChanges(xmlChilds,htmlChilds,ul) {
	var existedHtmlChilds = Array();
	var xmlChild,htmlChild,xmlId,htmlId,label,childExist;
					
	for (var i = 0; i < xmlChilds.length; ++i) {
		xmlChild = xmlChilds[i];
		xmlId = xmlChild.getAttribute('id');
		
		childExist = false;
		for (var j = 0; j < htmlChilds.length; ++j) {
			htmlChild = htmlChilds[j];
			htmlId = htmlChild.getAttribute('id');

			if(htmlId == 'li_'+xmlId) {
				updateLi(xmlChild);
				applyLiNodeChanges(xmlChild);
				
				childExist = true;
				existedHtmlChilds.push(htmlChild);
				break;
			}
		}

		if(!childExist) {
			insertChild(ul,xmlChild);
			applyLiNodeChanges(xmlChild);
		}
	}
	
	for (i = 0; i < htmlChilds.length; ++i)
		if(arraySearch(htmlChilds[i],existedHtmlChilds) == null)
			removeChild(ul,htmlChilds[i]);
};

function insertUl(htmlNode,id) {
	if(htmlNode) {
		var ul = document.createElement('ul');
		ul.setAttribute('id','ul_'+id);
		ul.className = window.config['mainUlClass'];
		/*ul.setAttribute('class',window.config['mainUlClass']);*/
		htmlNode.appendChild(ul);
	}
};

function insertChild(ul,xmlChild) {
	if(ul) {
		var data = xmlChild.firstChild.data;
		var tag = xmlChild.nodeName;
		var id = xmlChild.getAttribute('id');
		var childHasSubElements = existNodeChilds(xmlChild);
		
		var li = document.createElement('li');
		li.setAttribute('tag',tag);
		li.setAttribute('id','li_'+id);
		li.innerHTML = getConfiguredTag(tag,'html',data,xmlChild.attributes);
		updateLiAttributes(li,tag,data,xmlChild.attributes);
		ul.appendChild(li);
	}
};

function removeChild(ul,htmlChild) {
	ul.removeChild(htmlChild);

	if(!existNodeChilds(ul)) {
		var ulId = ul.getAttribute('id');
		ulId = ulId.substr(3); /*eg: ul_32*/
		var liParent = document.getElementById('li_'+ulId);
		if(liParent)
			liParent.removeChild(ul);
	}
};

function orderChilds(xmlChilds,ul) {
	var j, xmlId, htmlId;
	var htmlChilds = ul.childNodes;
	
	for (var i = 0; i < xmlChilds.length; ++i) {
		xmlId = xmlChilds[i].getAttribute('id');
		
		for (j = i; j < htmlChilds.length; ++j)
			if(htmlChilds[j].nodeType == document.ELEMENT_NODE || htmlChilds[j].nodeType == 1) {
				htmlId = htmlChilds[j].getAttribute('id');
				
				if('li_'+xmlId == htmlId && i != j)
					swapNode(htmlChilds[i],htmlChilds[j]);
					/*htmlChilds[i].swapNode(htmlChilds[j]);*/
			}
	}
};

function updateLi(xmlNode) {
	var data = xmlNode.firstChild.data;
	var tag = xmlNode.nodeName;
	var id = xmlNode.getAttribute('id');
	
	var li = document.getElementById('li_'+id);
	var ul = document.getElementById('ul_'+id);

	if(li) {
		var ulInnerHTML = '';
		if(ul) {
			var ulAttributes = nodeAttributesToString(ul.attributes);
			ulInnerHTML = '<ul '+ulAttributes+'>'+ul.innerHTML+'</ul>';
		}
		li.innerHTML = getConfiguredTag(tag,'html',data,xmlNode.attributes)+ulInnerHTML;
		updateLiAttributes(li,tag,data,xmlNode.attributes);
	}
};

function updateChildsClass(ul) {
	if(ul) {
		var isRoot = isUlRoot(ul);
	
		var htmlChilds = Array();
		items = ul.childNodes;
		for (var i = 0; i < items.length; ++i)
			if(items[i].nodeType == document.ELEMENT_NODE || items[i].nodeType == 1)
				htmlChilds[htmlChilds.length] = items[i];
		
		if(htmlChilds.length > 0) {
			var child,id,className,childHasSubElements;
			var firstChildId = htmlChilds[0].getAttribute('id');
			var lastChildId = htmlChilds[htmlChilds.length-1].getAttribute('id');
			
			for (i = 0; i < htmlChilds.length; ++i) {
				child = htmlChilds[i];
				id = child.getAttribute('id');
				
				var child_ul = child.getElementsByTagName('ul').item(0);
				className = getClassName(id,firstChildId,lastChildId,isRoot,existNodeChilds(child_ul));
				child.className = className;
				/*child.setAttribute('class',className);*/
			}
		}
	}
};

function updateLiAttributes(li,tag,data,xmlNodeAttributes){
	var strLiAttributes = getConfiguredTag(tag,'liAttributes',data,xmlNodeAttributes);
	var arrayLiAttributes = strAttributesToArray(strLiAttributes);
	var attributeName, attributeValue, liAttribute, index1, index2, index3;
	for(var i = 0; i < arrayLiAttributes.length; ++i) {
		attributeName = arrayLiAttributes[i][0];
		attributeValue = arrayLiAttributes[i][1];
	
		if(liAttribute = li.getAttribute(attributeName)) {
			index1 = liAttribute.indexOf(" "+attributeValue);
			index2 = liAttribute == attributeValue ? 0 : -1;
			index3 = liAttribute.indexOf(attributeValue+" ");
			if(index1 == -1 && index2 == -1 && index3 == -1) {
				liAttribute += " "+attributeValue;
				li.setAttribute(attributeName,liAttribute);
			}
		}
		else li.setAttribute(attributeName,attributeValue);
	}
};