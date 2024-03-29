function goToPage(page_number) {
	if(page_number != '') {
		var actual_page = document.getElementById('actualpageinput');
		actual_page.value = page_number;
		reloadPage();
	}
};

function reloadPage() {
	var form = document.getElementById('formpaging');
	var max_page_elements_number = document.getElementById('maxpageelementsnumberinput');
	var actual_page = document.getElementById('actualpageinput');
	var sort_order = document.getElementById('sortorderselect');
	var sort_by = document.getElementById('sortbyselect');

	var max_page_elements_number_value = max_page_elements_number.value;
	var actual_page_value = actual_page.value;
	var sort_order_value = sort_order.options[sort_order.selectedIndex].value;
	var sort_by_value = sort_by.options[sort_by.selectedIndex].value;
	
	var action = form.getAttribute('action');
	if(action) {
		var query_string = action.toString();
		var index = query_string.indexOf('?');
		if(index >= 0) {
			var query_string_aux = query_string.substring(index+1);
			query_string_aux = cleanURLAttribute(query_string_aux,'elements_for_page');
			query_string_aux = cleanURLAttribute(query_string_aux,'actual_page');
			query_string_aux = cleanURLAttribute(query_string_aux,'sort_order');
			query_string_aux = cleanURLAttribute(query_string_aux,'sort_by');
			
			query_string = query_string.substring(0,index+1);
			query_string += query_string_aux+'&elements_for_page='+max_page_elements_number_value+'&actual_page='+actual_page_value+'&sort_order='+sort_order_value+'&sort_by='+sort_by_value;
		}
		else {query_string += '?elements_for_page='+max_page_elements_number_value+'&actual_page='+actual_page_value+'&sort_order='+sort_order_value+'&sort_by='+sort_by_value;}
		
		document.location.href = query_string;
	}
};

window.timeoutId = false;
function clearSubPagingTimeout() {
	if(window.timeoutId) {
		window.clearTimeout(timeoutId);
		window.timeoutId = false;
	}
};

function setSubPagingTimeout() {
	window.timeoutId = window.setTimeout('hideSubPaging()',2000);
};

function showSubPaging() {
	clearSubPagingTimeout();

	var subpaging = document.getElementById('subpaging');
	if(subpaging)
		subpaging.style.display = 'block';
};

function hideSubPaging() {
	var subpaging = document.getElementById('subpaging');
	if(subpaging)
		subpaging.style.display = 'none';

	clearSubPagingTimeout();
};

