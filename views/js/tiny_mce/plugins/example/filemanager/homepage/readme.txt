											CONFIGURATION FILES INFORMATION

1. config/config.php and config/config.file.php files info:
	
	These files call the config/accesscontrol.php file. 
	Also they call the correspondent configuration file according to the user group name returned by the config/accesscontrol.php file.
	
	ATTENTION: 
		It is advisable do not change these files sintaxe.

2. config/accesscontrol.php file info:

	The accesscontrol.php file should contain a user access control implementation, verifying the user is valid or invalid.
	According to the user state, this file will return the correspondent user configuration name, trough the getUserConfiguration() function.
	The user configuration name corresponds to a folder name, which is inside the 'config/useraccesscontrol/' directory.
	This directory should contain all the users configuration, ordered by folders.
	
	To better understand the connection between the config/accesscontrol.php file and the users configuration files, please see the readme.gif image.
	
	Note:
		If you want to create a user access control, it is in the config/accesscontrol.php file that you should do it.
		Use the $_SESSION['xxxxx'] variables to get your session variables and the user data that you need.
		To call the filemanager with your session id, call it like this: 
			http://www.xpto.com/filemanager/interfacelevel/filemanager.php?PHPSESSID=ef575c96af5dca2f03565f2f71e26718, 
			where PHPSESSID variable will be your session id.
	
	ATTENTION:
		It's very important do not change the getUserConfiguration() function name or else you will need to update the config/config.php and the config/config.file.php files.
	
3. config/useraccesscontrol folder info:

	The users configuration files are in the 'config/useraccesscontrol/' folder.
	Each user configuration files are inside a folder with the correspondent user group name.
	If you see the 'config/useraccesscontrol/' subfiles, you will see the following folders:
		- default
		- group1
		- group2
		- group3
		- group4
		- group5
		- withoutpermissions
		
	Each of them contain at least two files which contain the user configuration: config.php and config.file.php.
	It's mandatory that each configuration folder contains these two files:
		- config.php: contains the general configuration, like the server files root path, the available upload extensions, the user permissions, the apache and php log file and other configurations...  
		- config.file.php: contains the configuration of the server files that can be showed or hidden. You can configure the hidden files by the begining, ended or full base or dir name of the file...
	... and it's very important to respect the sintaxe of each file.
		
	To understand each file configuration, please read the information bellow:
	
		3.1 The 'config.php' file should contain the following configuration:
			
			- $CONFIG['root_path'] = './../files/areas/areax';
				This variable corresponds to the user files main directory, that will be showed by the filemanager application. 
				Each action will be related with the subfiles of this folder.
				This path is relative to the "interfacelevel/" directory.
				It is very important that this folder and its sub-folders have the 777 permission.

			- $CONFIG['root_path_name'] = 'root';
				This variable corresponds to the name that the filemanager will show instead the root path ($CONFIG['root_path']).
			
			- $CONFIG['dir_templates_path'] = './../files/templates/dirs/';
				This variable corresponds to the folder templates path. This means that every time that you create a folder, you can create it similar to another folder and its subfiles.
				This path is relative to the interfacelevel directory.
			- $CONFIG['dir_templates_path_name'] = 'templates';
				This variable corresponds to the name that the filemanager will show instead the folder templates path ($CONFIG['dir_templates_path']).
			
			- $CONFIG['file_templates_path'] = './../files/templates/files/';
				This variable corresponds to the document templates path. This means that every time that you create a document, you can create it similar to another document.
				This path is relative to the interfacelevel directory.
			- $CONFIG['file_templates_path_name'] = 'templates';
				This variable corresponds to the name that the filemanager will show instead the document templates path ($CONFIG['file_templates_path']).
			
			- $CONFIG['uploadExtensions'] = 'gif,jpg,png,bmp,tif,tiff,psd,raw';
				This variable contains the available upload extensions, splited by commas.
				If you don't want to limit the upload extensions, this variable should have the following values:
					- false
					- '' 
					- 'ALL'

			- $CONFIG['forbidenUploadExtensions'] = 'php,asp,apsx';
				This variable contains the forbiden upload extensions, splited by commas.
				If you don't want to limit the forbiden upload extensions, this variable should have the following values:
					- false
					- '' 
					- 'NONE'

			- $CONFIG['maxuploadsize_MB'] = '15';
				This variable is just an interface variable, but if you really wish to limit the upload size, go to config.file.php file and change the return value of the getUploadMaxSizeInBytes() function.
			
			- The following are information variables that will appear when the user click the info button:
				- $CONFIG['filemanager_homepage'] = 'http://www.jplpinto.com/apis/filemanager/';
				- $CONFIG['php_log_path'] = '';
				- $CONFIG['server_log_path'] = '';
			
			The following variables correspond to user´s permission actions, like permission to read, create, upload, cut, copy, rename, compress, uncompress, search, edit and download files. 
				- $CONFIG['read_permission'] = true;
					If true the user has read permission or else the opposite.
				- $CONFIG['create_folder_permission'] = false;
					If true the user has permission to create folders or else the opposite.
				- $CONFIG['create_doc_permission'] = false;
					If true the user has permission to create documents or else the opposite.
				- $CONFIG['upload_permission'] = false;
					If true the user has permission to upload files or else the opposite.
				- $CONFIG['cut_permission'] = false;
					If true the user has permission to cut and paste files or else the opposite.
				- $CONFIG['copy_permission'] = false;
					If true the user has permission to copy and paste files or else the opposite.
				- $CONFIG['delete_permission'] = false;
					If true the user has permission to delete files or else the opposite.
				- $CONFIG['rename_permission'] = false;
					If true the user has permission to rename files or else the opposite.
				- $CONFIG['zip_permission'] = false;
					If true the user has permission to create archieves or else the opposite.
				- $CONFIG['unzip_permission'] = false;
					If true the user has permission to extract archieves or else the opposite.
				- $CONFIG['file_edit_permission'] = false;
					If true the user has permission to edit files or else the opposite.
				- $CONFIG['image_edit_permission'] = false;
					If true the user has permission to edit images or else the opposite.
				- $CONFIG['search_permission'] = true;
					If true the user has permission to search files or else the opposite.
				- $CONFIG['file_download_permission'] = false;
					If true the user has permission to download files or else the opposite.
				- $CONFIG['chmod_available'] = false;
					If true the user has permission to change the files permission or else the opposite.
					To attribute true to this variable, check first if your server gives you permission to use the chomd function or else the filemanager will abort.
			
			
			The following variables correspond to messages that will be showed if the user doesn't have permission to read, create, upload, cut, copy, rename, compress, uncompress, search, edit and download files. 
				- $CONFIG['read_permission_denied_message'] = 'Sorry You don\'t have Read Permission!';
				- $CONFIG['create_folder_permission_denied_message'] = 'Sorry You don\'t permission to create folders!';
				- $CONFIG['create_doc_permission_denied_message'] = 'Sorry You don\'t permission to create documents!';
				- $CONFIG['upload_permission_denied_message'] = 'Sorry You don\'t permission to upload files!';
				- $CONFIG['cut_permission_denied_message'] = 'Sorry You don\'t permission to cut and paste files!';
				- $CONFIG['copy_permission_denied_message'] = 'Sorry You don\'t permission to copy and paste files!';
				- $CONFIG['paste_permission_denied_message'] = 'Sorry You don\'t permission to paste files!';
				- $CONFIG['delete_permission_denied_message'] = 'Sorry You don\'t permission to delete files!';
				- $CONFIG['rename_permission_denied_message'] = 'Sorry You don\'t permission to rename files!';
				- $CONFIG['zip_permission_denied_message'] = 'Sorry You don\'t permission to create archieves!';
				- $CONFIG['unzip_permission_denied_message'] = 'Sorry You don\'t permission to extract archieves!';
				- $CONFIG['file_edit_permission_denied_message'] = 'Sorry You don\'t permission to edit files!';
				- $CONFIG['search_permission_denied_message'] = 'Sorry You don\'t permission to search files!';
			
			
			- $CONFIG['show_tools_without_perms'] = true;
				If this variable equals true, than all the actions that the user doesn't has permission will be shown.
				If this variable is false, than just the actions that the user has permission will be shown.
		
		
		3.2 The 'config.file.php' file should contain the following configuration:
		
			class CONFIGFILE { 
				/*
				* This function will be called for each single file and the '$file' variable corresponds to the file path.
				* If this function returns true, this means that the file is valid or else the opposite.
				* So, it is here that you should filter the files which will be showed by the filemanager application.
				* Bellow is an example that just accept gif, jpg and png files.
				*/
				function isValid($file) {
					/*This is an example*/
						
					$file_extension = '';
					if(!empty($file) && !is_dir($file)) {
						$pos = strrpos(basename($file),".");
						if(is_numeric($pos) && $pos > 0) 
							$file_extension = substr(basename($file),$pos+1);
					} 
					else $file_extension =  'dir';
					
					if($file_extension == "gif" || $file_extension == "png" || $file_extension == "jpg")
						return true;
					else return false;
				}
				
				/*
				* This function contains the maximum upload size that the filemanager will permit.
				* If you don't wish to limit the upload size, this function should return false.
				*/
				function getUploadMaxSizeInBytes() {
					return 52428800;
				}
			}
		
	ATTENTION: 
		It's very important to respect the files sintaxe. 
		You cannot change the class and functions name.
	
	Note: 
		If you desire you can add other functions to order your code.
		If you have your own user access control system with user permissions you can create dynamicaly this two files (config.php,config.file.php), instead having multiple configuration files.


4. config.thumbnails.php file info:
	
	The 'config.thumbnails.php' file contains the configuration of the thumbnails server files, like the thumbnails width and height, the available extensions, the thumbnails prefix name and path and other configurations...
	This file corresponds to the thumbnails configuration, like:
		- the thumbnails folder path and/or the thumbnail prefix name. 
		- the default image path that should be showed if the respective file isn't a gif, jpg, jpeg or png file.
		- the error image path that should be showed if the respective file is corrupt.
		- the available image extensions.
		- the thumbnails size, width and height.
	
	ATTENTION: 
		Is advisable do not change these configurations.
