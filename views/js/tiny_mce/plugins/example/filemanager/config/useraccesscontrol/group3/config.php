<?
	$CONFIG['root_path'] = './../files/areas/areax';//This variable corresponds to the user files main directory, that will be showed by the filemanager application. Each action will be related with the subfiles of this folder. This path is relative to the "interfacelevel/" directory.
	$CONFIG['root_path_name'] = 'mike';
	
	$CONFIG['dir_templates_path'] = './../files/templates/dirs/';//This path is relative to the 'interfacelevel/' directory.
	$CONFIG['dir_templates_path_name'] = 'templates';
	
	$CONFIG['file_templates_path'] = './../files/templates/files/';//This path is relative to the 'interfacelevel/' directory.
	$CONFIG['file_templates_path_name'] = 'templates';
	
	if($_GET['filemanager_type'] == "image")
		$CONFIG['uploadExtensions'] = 'gif,jpg,png,bmp,tif,tiff,psd,raw';
	else $CONFIG['uploadExtensions'] = 'zip,tar,gz,xml,txt,doc,html,htm,gif,jpg,png,bmp,tif,tiff,psd,raw';
	$CONFIG['forbidenUploadExtensions'] = 'php,asp,apsx,cgi';
	$CONFIG['maxuploadsize_MB'] = '15';//This variable is just an interface variable, but if you really wish to limit the upload size, go to config.file.php file and change the return value of the getUploadMaxSizeInBytes() function.
	
	$CONFIG['filemanager_homepage'] = 'http://www.jplpinto.com/apis/filemanager/';
	$CONFIG['php_log_path'] = '';
	$CONFIG['server_log_path'] = '';
	
	/**************** FILE PERMISSIONS **********************/
	$CONFIG['read_permission'] = true;
	$CONFIG['create_folder_permission'] = false;
	$CONFIG['create_doc_permission'] = false;
	$CONFIG['upload_permission'] = false;
	$CONFIG['cut_permission'] = true;
	$CONFIG['copy_permission'] = true;
	$CONFIG['delete_permission'] = false;
	$CONFIG['rename_permission'] = true;
	$CONFIG['chmod_available'] = false;
	
	$CONFIG['zip_permission'] = true;
	$CONFIG['unzip_permission'] = true;
	
	$CONFIG['file_edit_permission'] = true;
	$CONFIG['image_edit_permission'] = true;
	$CONFIG['search_permission'] = false;
	$CONFIG['file_download_permission'] = true;
	/********************************************************/
	
	
	/**************** FILE PERMISSION MESSAGES **********************/
	$CONFIG['read_permission_denied_message'] = 'Sorry You don\'t have Read Permission!';
	$CONFIG['create_folder_permission_denied_message'] = 'Sorry You don\'t permission to create folders!';
	$CONFIG['create_doc_permission_denied_message'] = 'Sorry You don\'t permission to create documents!';
	$CONFIG['upload_permission_denied_message'] = 'Sorry You don\'t permission to upload files!';
	$CONFIG['cut_permission_denied_message'] = 'Sorry You don\'t permission to cut and paste files!';
	$CONFIG['copy_permission_denied_message'] = 'Sorry You don\'t permission to copy and paste files!';
	$CONFIG['paste_permission_denied_message'] = 'Sorry You don\'t permission to paste files!';
	$CONFIG['delete_permission_denied_message'] = 'Sorry You don\'t permission to delete files!';
	$CONFIG['rename_permission_denied_message'] = 'Sorry You don\'t permission to rename files!';
	
	$CONFIG['zip_permission_denied_message'] = 'Sorry You don\'t permission to create archieves!';
	$CONFIG['unzip_permission_denied_message'] = 'Sorry You don\'t permission to extract archieves!';
	
	$CONFIG['file_edit_permission_denied_message'] = 'Sorry You don\'t permission to edit files!';
	$CONFIG['search_permission_denied_message'] = 'Sorry You don\'t permission to search files!';
	/********************************************************/
	
	$CONFIG['show_tools_without_perms'] = true;
	
	/**************** TINYMCE **********************/
	$CONFIG['tinymce_path'] = "../../tinymce/tinymce/";
	/********************************************************/
?>
