<?
require_once("./../basiclevel/File.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>AJAX & PHP File Manager API</title>
	<META NAME="Description" CONTENT="Free Ajax and PHP File Manager Api, where you can use it to browse directories and files on the server and edit, copy, move, delete, search, upload, download files, create and extract archives, create new directories and files, edit images and files, view thumbnails files and much more... AJAX and PHP FILE MANAGER API is similar to the CPANEL FILE MANAGER API, but much more powerfull. You can implement this api on TinyMCE HTML Editor.">
	<META NAME="KEYWORDS" CONTENT="filemanager,file manager,tinymce,html editor,gestor de ficheiros,ficheiros,file,ajax,php,javascript,jplpinto">
	<style type="text/css">
		body {background-color:#EEEEEE;}
		a, u {color:#000099; cursor:pointer;}
		ul {margin:0px; padding:0px; list-style:none;}
		li {margin-left:20px;}
		table { width:100%;}
		
		a {text-decoration:underline;}
		a:hover {text-decoration:none;}
		
		h1 {margin:0px 0px; padding:0px 0px; color:#550000;}
		h2 {font-size:18px; font-weight:normal; margin:0px 0px; padding:0px 0px:}
		h3 {font-size:16px; font-weight:normal; margin:0px 0px; padding:0px 0px:}
		
		.hide {display:none;}
		.show {display:block;}
		.attention { color:#FF0000; font-size:12px; font-weight:bold;}
		.phpfile { color:#990000; font-size:12px; font-weight:bold;}
		.blue { color:#0000FF;}
		.alineas { font-style:italic; font-size:12px; color:#333333;}
		.config { font-style:italic; font-size:12px; color:#666666;}
		.configuration_files { font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;}
		#cont_home, #cont_demo, #cont_screenshots, #cont_blog, #cont_installation, #cont_tinymce {font-family:sans-serif; font-size:14px; width:100%; /*height:300px;*/ overflow:auto; background-color:#FFFFFF; position:absolute; top:165px; left:0px; bottom:0px; right:0px;}
		
		#root ul { position:absolute; top:165px;}
		* html #root ul {width:800px;}
		#root li {float:left;}
		#root ul li ul { position:inherit;}
		#root ul li { clear:both; float:none;}
		
		#home, #demo, #screenshots, #blog, #installation, #tinymce { background-color:#550000; border:2px outset #EFEFEF; height:20px; width:100px; text-align:center;  margin:0px; padding:0px; padding-top:5px; padding-bottom:5px;}
		#installation {width:180px;}
		#home a, #demo a, #screenshots a, #blog a, #installation a, #tinymce a { text-decoration:none; color:#FFFFFF; font-weight:bold; font-style:italic;}
		#home a:hover, #demo a:hover, #screenshots a:hover, #blog a:hover, #installation a:hover, #tinymce a:hover { text-decoration:none;}
		#home ul, #demo ul, #screenshots ul, #blog ul, #installation ul, #tinymce ul { text-align:left; position:absolute; left:0; padding-top:20px; border:1px solid #000000;}
		#home ul a, #demo ul a, #screenshots ul a, #blog ul a, #installation ul a, #tinymce ul a { text-decoration:underline; color:#000099; font-weight:normal; font-style:normal;}
		#home ul a:hover, #demo ul a:hover, #screenshots ul a:hover, #blog ul a:hover, #installation ul a:hover, #tinymce ul a:hover { text-decoration:none;}
		#home ul li ul, #installation ul li ul, #demo ul li ul, #tinymce ul li ul, #blog ul li ul, #screenshots ul li ul, #screenshots iframe { border:1px solid #EFEFEF;}
		.selected, #home { background-color:#8C0000;}
		#cont_home, #cont_demo, #cont_blog, #cont_installation, #cont_tinymce { overflow:scroll;}
		#cont_screenshots { overflow:auto;}
		#demo ul li ul { position:relative; top:0px;}
		#demo ul li ul { list-style-type:circle;}
		#screenshots ul li ul {top:23px; width:100%; left:20px;}
		#screenshots ul li iframe {padding-right:25px;}
		#installation ul li ul { position:relative; top:0px;}
		
		.version {font-size:12px; font-style:italic; }
	</style>
	<script type="text/javascript">
		var isMSIE = navigator.userAgent.indexOf('MSIE') != -1 ? true : false;
		var menus = Array('home','demo','screenshots','blog','installation','tinymce');
		
		function showAndHideMainCont(liId) {
			for(var i = 0; i < menus.length; ++i) {
				var li = document.getElementById(menus[i]);
				if(li) {
					var id = li.getAttribute('id');
					var uls = li.getElementsByTagName('ul');
					if(uls) {
						var ul = uls.item(0);
						if(ul) {
							ul.style.display = id == liId ? 'block' : 'none';
						}
					}
					
					li.style.backgroundColor = id == liId ? '#8C0000' : '#550000';
				}
			}
		}
		
		function showAndHideCont(li) {
			var uls = li.getElementsByTagName('ul');
			if(uls) {
				var ul = uls.item(0);
				if(ul) {
					ul.style.display = ul.style.display != 'block' ? 'block' : 'none';
				}
			}
		}
		
		window.onload = function() {
			if(isMSIE) {
				var cont, menu;
				for(var i = 0; i < menus.length; ++i) {
					cont = document.getElementById('cont_'+menus[i]);
					menu = document.getElementById(menus[i]);
					if(cont) {
						cont.style.width = (document.body.clientWidth+15)+'px';
					}
				}
			}
		}
	</script>
</head>

<body>
<table width="100%">
  <tr>
	<td colspan="2" align="center"><h1>AJAX & PHP FILE MANAGER API</h1><font class="version">(v 1.2.5 with text, code and tinymce editor)</font>
	<br><h2><b>Now it is easy to manage your server files !!!</b></h2>
	<br>(<a href="../filemanager.zip" target="_blank">DOWNLOAD</a> 2.5 MB)
	</td>
  </tr>
  <tr>
	<td valign="top">
	<ul id="root">
		<li id="home">
			<a onClick="showAndHideMainCont('home');">Home</a>
			<ul id="cont_home" class="show">
				<li>
				<table width="100%">
				  <tr>
					<td valign="top">
						<br>AJAX & PHP FILE MANAGER API is an application where you can easily manage your server files.
						<br>This API is a dynamic web based file management system that will allow you to create a user-friendly online document repository.
						<br><h2><b>You can use it to browse directories and files on the server and edit, copy, move, delete, search, upload, download files, create and extract archives, create new directories and files, edit images and files, view thumbnails files and much more...</b></h2>
						<br>AJAX & PHP FILE MANAGER API is similar to the CPANEL FILE MANAGER API, but much more powerfull.
						<br>		
						<br>		
						<div style="text-align:center; width:100%; height:100%; font-size:11px;">
							<a href="img/filemanager.jpg" target="_blank"><img src="img/filemanager.jpg" width="486" height="200" alt="img/filemanager.jpg"></a>
							<br>(Click on the image to enlarge it)
						</div>
					</td>
				  </tr>
				  <tr>
					<td align="center">
					<br>
					<br><font size="5"><b>Click <a onClick="showAndHideMainCont('demo');">here</a> and try this tool</b></font> 
					<br>
					<br>
					</td>
				  </tr>
				  <tr>
					<td>
					<br>
					<h2>The FileManager api is an application fully tested in several environments and perfectly works in all of them!</h2>
					<br>
					<br>
					</td>
				  </tr>
				</table>
				</li>
			</ul>
		</li>
		<li id="demo">
			<a onClick="showAndHideMainCont('demo');">Demo</a>
			<ul id="cont_demo" class="hide">
				<li>
					<table>
					  <tr>
						<td valign="top">
						To try the File Manager application click on the following links:
						<ul>
							<li>
								<span class="alineas instalation">Full example:</span> the user has all permissions, like an administrator.
								<br>On this example the filemanager api will show the subfiles of the '<span class="phpfile">files/areas/default/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php" target="_blank">filemanager.php</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">Full Image example:</span> the user has all permissions but just can see image files.
								<br>On this example the filemanager api will show the images subfiles of the '<span class="phpfile">files/areas/default/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?filemanager_type=image" target="_blank">filemanager.php?filemanager_type=image</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">Peter example:</span> the user has all permissions, like an administrator.
								<br>On this example the filemanager api will show the subfiles of the '<span class="phpfile">files/areas/peter/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?group_test=peter" target="_blank">filemanager.php?group_test=peter</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">Peter Image example:</span> the user has all permissions but just can see image files.
								<br>On this example the filemanager api will show the images subfiles of the '<span class="phpfile">files/areas/peter/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?group_test=peter&amp;filemanager_type=image" target="_blank">filemanager.php?group_test=peter&amp;filemanager_type=image</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">John example:</span> the user has all permissions, like an administrator.
								<br>On this example the filemanager api will show the subfiles of the '<span class="phpfile">files/areas/john/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?group_test=john" target="_blank">filemanager.php?group_test=john</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">John Image example:</span> the user has all permissions but just can see image files.
								<br>On this example the filemanager api will show the images subfiles of the '<span class="phpfile">files/areas/john/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?group_test=john&amp;filemanager_type=image" target="_blank">filemanager.php?group_test=john&amp;filemanager_type=image</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">Mike example:</span> the user has read, cut, copy, rename, compress, uncompress, edit and download files permissions.
								<br>On this example the filemanager api will show the subfiles of the '<span class="phpfile">files/areas/areax/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?group_test=mike" target="_blank">filemanager.php?group_test=mike</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">Mike Image example:</span> the user has read, cut, copy, rename, compress, uncompress, edit and download image files permissions.
								<br>On this example the filemanager api will show the images subfiles of the '<span class="phpfile">files/areas/areax/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?group_test=mike&amp;filemanager_type=image" target="_blank">filemanager.php?group_test=mike&amp;filemanager_type=image</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">Pallo example:</span> the user has read, create, delete, edit, search and download files permissions. The user hasn't image edit permission.
								<br>On this example the filemanager api will show the subfiles of the '<span class="phpfile">files/areas/areax/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?group_test=pallo" target="_blank">filemanager.php?group_test=pallo</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">Pallo Image example:</span> the user has read, create, delete, edit, search and download image files permissions. The user hasn't image edit permission.
								<br>On this example the filemanager api will show the images subfiles of the '<span class="phpfile">files/areas/areax/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?group_test=pallo&amp;filemanager_type=image" target="_blank">filemanager.php?group_test=pallo&amp;filemanager_type=image</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">Wilson example:</span> the user just has read and search files permissions.
								<br>On this example the filemanager api will show the subfiles of the '<span class="phpfile">files/areas/areax/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?group_test=wilson" target="_blank">filemanager.php?group_test=wilson</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">Wilson Image example:</span> the user just has read and search files permissions.
								<br>On this example the filemanager api will show the images subfiles of the '<span class="phpfile">files/areas/areax/</span>' folder.
								<br><a href="../interfacelevel/filemanager.php?group_test=wilson&amp;filemanager_type=image" target="_blank">filemanager.php?group_test=wilson&amp;filemanager_type=image</a>
								<br><br>
							</li>
							<li>
								<span class="alineas instalation">With Out Permissions example:</span> the user doesn't have any permission.
								<br>On this example the filemanager api will not show any files, because the user doesn't have read permission.
								<br><a href="../interfacelevel/filemanager.php?group_test=none" target="_blank">filemanager.php?group_test=none</a>
								<br><br>
							</li>
						</ul>
						<br>
						<br><span class="attention">NOTE:</span>
						<br>If you want to implement a realible user access control, you should create it with <b>SESSIONS VARS</b> and a <b>DATABASE REPOSITORY</b>.
						<br>Use the <span class="blue">$_SESSION['xxxxx']</span> variables to get your session variables and the user data that you need.
						<br>To call the filemanager with your session id, call it like this: <span class="phpfile">http://www.xpto.com/filemanager/interfacelevel/filemanager.php?PHPSESSID=ef575c96af5dca2f03565f2f71e26718</span>, 
						where <span class="blue">PHPSESSID</span> variable will be your session id.
						<br>
						</td>
					  </tr>
					</table>
				</li>
			</ul>
		</li>
		<li id="screenshots">
			<a onClick="showAndHideMainCont('screenshots');">Screen Shots</a>
			<ul id="cont_screenshots" class="hide">
				<li>
				<table>
				  <tr>
					<td width="25%" valign="top">
						<ul>
							<li><a onClick="document.getElementById('examples').src='img/web_server_directory_tree.jpg';">Web Server Directory Tree</a></li>
							<li><a onClick="document.getElementById('examples').src='img/create_folder.jpg';">Create Folder</a></li>
							<li><a onClick="document.getElementById('examples').src='img/create_document.jpg';">Create Document</a></li>
							<li><a onClick="document.getElementById('examples').src='img/search.jpg';">Search</a></li>
							<li><a onClick="document.getElementById('examples').src='img/upload.jpg';">Upload</a></li>
							<li><a onClick="document.getElementById('examples').src='img/rename.jpg';">Rename</a></li>
							<li><a onClick="document.getElementById('examples').src='img/create_archives.jpg';">Create Archives</a></li>
							<li><a onClick="document.getElementById('examples').src='img/extract_archives.jpg';">Extract Archives</a></li>
							<li><a onClick="document.getElementById('examples').src='img/order_files.jpg';">Order Files</a></li>
							<li><a onClick="document.getElementById('examples').src='img/edit_file.jpg';">Edit File</a></li>
							<li><a onClick="document.getElementById('examples').src='img/edit_image.jpg';">Edit Image</a></li>
							<li><a onClick="document.getElementById('examples').src='img/view_images.jpg';">View Images</a></li>
							<li><a onClick="document.getElementById('examples').src='img/view_thumbnails_files.jpg';">View Thumbnails Files</a></li>
							<li><a onClick="document.getElementById('examples').src='img/file_properties.jpg';">File Properties</a></li>
							<li><a onClick="document.getElementById('examples').src='img/filemanager_information.jpg';">File Manager Information</a></li>
						</ul>
					</td>
					<td width="75%" valign="top">
						<iframe id="examples" name="examples" src="img/view_thumbnails_files.jpg" width="100%" height="260px" frameborder="0"></iframe>
					</td>
				  </tr>
				</table>
				</li>
			</ul>
		</li>
		<li id="blog">
			<a onClick="showAndHideMainCont('blog');">Blog</a>
			<ul id="cont_blog" class="hide">
				<li>
				<table width="100%">
				  <tr>
					<td align="center">
						<h2><a href="../../apis_blog" target="_blank">Go to the FileManager Blog</a></h2>
						<br>
						<a href="../../apis_blog" target="_blank"><img src="filemanager.jpg" border="0"></a>
					</td>
				  </tr>
				 </table>
				 </li>
			</ul>
		</li>
		<li id="installation">
			<a onClick="showAndHideMainCont('installation');">Installation Instructions</a>
			<ul id="cont_installation" class="hide">
				<li>
				<table>
				  <tr>
					<td>
					To install the FileManager application you should execute the following steps:
					<br><br>
					<ol>
						<li>Download the filemanager.rar file to your computer.<br><br></li>
						<li>Extract the archieve to your computer and copy the main folder to any place on your web server.<br><br></li>
						<li>Configure the following configuration files on the config path 'config':
							<ul>
								<li><span class="phpfile">- config/accesscontrol.php</span></li>
								<li><span class="phpfile">- config/useraccesscontrol/&lt;group name&gt;/config.php</span></li>
								<li><span class="phpfile">- config/useraccesscontrol/&lt;group name&gt;/config.file.php</span></li>
							</ul>
							<br>
							To configure these files please read the following configuration info:
							<ol class="configuration_files">
								<li><a onClick="showAndHideCont(this.parentNode);">config/config.php and config/config.file.php files info</a>
									<ul class="hide">
										<li>
											These files call the <span class="phpfile">config/accesscontrol.php</span> file.
											<br>Also they call the correspondent configuration file according to the user group name returned by the <span class="phpfile">config/accesscontrol.php</span> file.
											<br>
											<br><span class="attention">ATTENTION:</span>
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is advisable do not change these files sintaxe.
											<br><br>
										</li>
									</ul>
								</li>
								<li><a onClick="showAndHideCont(this.parentNode);">config/accesscontrol.php file info</a>
									<ul class="hide">
										<li>
											The <span class="phpfile">accesscontrol.php</span> file should contain a user access control implementation, verifying the user is valid or invalid.
											<br>According to the user state, this file will return the correspondent user configuration name, trough the getUserConfiguration() function.
											<br>The user configuration name corresponds to a folder name, which is inside the '<span class="phpfile">config/useraccesscontrol/</span>' directory.
											<br>This directory should contain all the users configuration, ordered by folders.
											<br>
											<br>To better understand the connection between the config/accesscontrol.php file and the users configuration files, please see the readme.gif image.
											<br>
											<img id="readme.gif" src="readme.gif" alt="readme.gif" style="display:none; ">
											<br>
											<br><span class="attention">NOTE:</span>
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you want to create a user access control, it is in the config/accesscontrol.php file that you should do it.
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use the <span class="blue">$_SESSION['xxxxx']</span> variables to get your session variables and the user data that you need.
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To call the filemanager with your session id, call it like this: 
														<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="phpfile">http://www.xpto.com/filemanager/interfacelevel/filemanager.php?PHPSESSID=ef575c96af5dca2f03565f2f71e26718</span>, 
														<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... where <span class="blue">PHPSESSID</span> variable will be your session id.
											<br>
											<br><span class="attention">ATTENTION:</span> 
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It's very important do not change the getUserConfiguration() function name or else you will need to update the <span class="phpfile">config/config.php</span> and the <span class="phpfile">config/config.file.php</span> files.
											<br><br>
										</li>
									</ul>
								</li>
								<li><a onClick="showAndHideCont(this.parentNode);">config/useraccesscontrol folder info</a>
									<ul class="hide">
										<li>
											The users configuration files are in the '<span class="phpfile">config/useraccesscontrol/</span>' folder.
											<br>Each user configuration files are inside a folder with the correspondent user group name.
											<br>If you see the '<span class="phpfile">config/useraccesscontrol/</span>' subfiles, you will see the following folders:
												<span class="alineas">
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- default
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- group1
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- group2
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- group3
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- group4
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- group5
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- withoutpermissions
												</span>
											<br>
											<br>Each of them contain at least two files which contain the user configuration: <span class="phpfile">config.php</span> and <span class="phpfile">config.file.php</span>.
											<br>It's mandatory that each configuration folder contains these two files:
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <span class="phpfile">config.php</span>: contains the general configuration, like the server files root path, the available upload extensions, the user permissions, the apache and php log file and other configurations...  
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <span class="phpfile">config.file.php</span>: contains the configuration of the server files that can be showed or hidden. You can configure the hidden files by the begining, ended or full base or dir name of the file...
											<br>... and it's very important to respect the sintaxe of each file.
											<br>
											<br>To understand each file configuration, please read the information bellow:
											<ul>
												<li>
													<a onClick="showAndHideCont(this.parentNode);">3.1 The 'config.php' file should contain the following configuration</a>
													<ul class="hide">
														<li>
															- <span class="config">$CONFIG['root_path'] = './../files/areas/areax';</span>
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This variable corresponds to the user files main directory, that will be showed by the filemanager application. 
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Each action will be related with the subfiles of this folder.
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This path is relative to the "interfacelevel/" directory.
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is very important that this folder and its sub-folders have the 777 permission.
														</li>
														<li>
															<br>- <span class="config">$CONFIG['root_path_name'] = 'root';</span>
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This variable corresponds to the name that the filemanager will show instead the root path ($CONFIG['root_path']).
															<br>
														</li>
														<li>
															<br>- <span class="config">$CONFIG['dir_templates_path'] = './../files/templates/dirs/';</span>
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This variable corresponds to the folder templates path. This means that every time that you create a folder, you can create it similar to another folder and its subfiles.
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This path is relative to the interfacelevel directory.
														</li>
														<li>
															<br>- <span class="config">$CONFIG['dir_templates_path_name'] = 'templates';</span>
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This variable corresponds to the name that the filemanager will show instead the folder templates path ($CONFIG['dir_templates_path']).
															<br>
														</li>
														<li>
															<br>- <span class="config">$CONFIG['file_templates_path'] = './../files/templates/files/';</span>
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This variable corresponds to the document templates path. This means that every time that you create a document, you can create it similar to another document.
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This path is relative to the interfacelevel directory.
														</li>
														<li>
															<br>- <span class="config">$CONFIG['file_templates_path_name'] = 'templates';</span>
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This variable corresponds to the name that the filemanager will show instead the document templates path ($CONFIG['file_templates_path']).
														</li>
														<li>
															<br>- <span class="config">$CONFIG['uploadExtensions'] = 'gif,jpg,png,bmp,tif,tiff,psd,raw';</span>
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This variable contains the available upload extensions, splited by commas.
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you don't want to limit the upload extensions, this variable should have the following values: false, '' , 'ALL'.
														</li>
														<li>
															<br>- <span class="config">$CONFIG['forbidenUploadExtensions'] = 'php,asp,apsx';</span>
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This variable contains the forbiden upload extensions, splited by commas.
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you don't want to limit the forbiden upload extensions, this variable should have the following values: false, '' , 'NONE'.
														</li>
														<li>
															<br>- <span class="config">$CONFIG['maxuploadsize_MB'] = '15';</span>
																<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This variable is just an interface variable, but if you really wish to limit the upload size, go to config.file.php file and change the return value of the getUploadMaxSizeInBytes() function.
															<br>
														</li>
														<li>
															<br>- The following are information variables that will appear when the user click the info button:
															<ul>
																<li>- <span class="config">$CONFIG['filemanager_homepage'] = 'http://www.jplpinto.com/apis/filemanager/';</span></li>
																<li>- <span class="config">$CONFIG['php_log_path'] = '';</span></li>
																<li>- <span class="config">$CONFIG['server_log_path'] = '';</span></li>
															</ul>
															<br>
														</li>
														<li>
															<br>The following variables correspond to user´s permission actions, like permission to read, create, upload, cut, copy, rename, compress, uncompress, search, edit and download files.
															<ul>
																<li>- <span class="config">$CONFIG['read_permission']</span>: If true the user has read permission or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['create_folder_permission']</span>: If true the user has permission to create folders or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['create_doc_permission']</span>: If true the user has permission to create documents or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['upload_permission']</span>: If true the user has permission to upload files or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['cut_permission']</span>: If true the user has permission to cut and paste files or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['copy_permission']</span>: If true the user has permission to copy and paste files or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['delete_permission']</span>: If true the user has permission to delete files or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['rename_permission']</span>: If true the user has permission to rename files or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['zip_permission']</span>: If true the user has permission to create archieves or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['unzip_permission']</span>: If true the user has permission to extract archieves or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['file_edit_permission']</span>: If true the user has permission to edit files or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['image_edit_permission']</span>: If true the user has permission to edit images or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['search_permission']</span>: If true the user has permission to search files or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['file_download_permission']</span>: If true the user has permission to download files or else the opposite.
																</li>
																<li>- <span class="config">$CONFIG['chmod_available']</span>: If true the user has permission to change the files permission or else the opposite.
																		<br>&nbsp;&nbsp;&nbsp;To attribute true to this variable, check first if your server gives you permission to use the chomd function or else the filemanager will abort.
																</li>
															</ul>
														</li>
														<li>
															<br>The following variables correspond to messages that will be showed if the user doesn't have permission to read, create, upload, cut, copy, rename, compress, uncompress, search, edit and download files. 
															<ul>
																<li>- <span class="config">$CONFIG['read_permission_denied_message'] = 'Sorry You don\'t have Read Permission!';</span></li>
																<li>- <span class="config">$CONFIG['create_folder_permission_denied_message'] = 'Sorry You don\'t permission to create folders!</span></li>
																<li>- <span class="config">$CONFIG['create_doc_permission_denied_message'] = 'Sorry You don\'t permission to create documents!</span></li>
																<li>- <span class="config">$CONFIG['upload_permission_denied_message'] = 'Sorry You don\'t permission to upload files!</span></li>
																<li>- <span class="config">$CONFIG['cut_permission_denied_message'] = 'Sorry You don\'t permission to cut and paste files!</span></li>
																<li>- <span class="config">$CONFIG['copy_permission_denied_message'] = 'Sorry You don\'t permission to copy and paste files!</span></li>
																<li>- <span class="config">$CONFIG['paste_permission_denied_message'] = 'Sorry You don\'t permission to paste files!</span></li>
																<li>- <span class="config">$CONFIG['delete_permission_denied_message'] = 'Sorry You don\'t permission to delete files!</span></li>
																<li>- <span class="config">$CONFIG['rename_permission_denied_message'] = 'Sorry You don\'t permission to rename files!</span></li>
																<li>- <span class="config">$CONFIG['zip_permission_denied_message'] = 'Sorry You don\'t permission to create archieves!</span></li>
																<li>- <span class="config">$CONFIG['unzip_permission_denied_message'] = 'Sorry You don\'t permission to extract archieves!</span></li>
																<li>- <span class="config">$CONFIG['file_edit_permission_denied_message'] = 'Sorry You don\'t permission to edit files!</span></li>
																<li>- <span class="config">$CONFIG['search_permission_denied_message'] = 'Sorry You don\'t permission to search files!';</span></li>
															</ul>
														</li>
														<li>
															<br>- <span class="config">$CONFIG['show_tools_without_perms']</span>: If this variable equals true, than all the actions that the user doesn't has permission will be shown. If this variable is false, than just the actions that the user has permission will be shown.
															<br><br>
														</li>
													</ul>
												</li>
												<li>
													<a onClick="showAndHideCont(this.parentNode);">3.2 The 'config.file.php' file should contain the following configuration</a>
													<ul class="hide">
														<li>
															<pre>
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
															</pre>
														</li>
													</ul>
												</li>
											</ul>
											<br><br>
											<span class="attention">ATTENTION:</span> 
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It's very important to respect the files sintaxe. 
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You cannot change the class and functions name.
											<br>
											<br><span class="attention">NOTE:</span> 
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you desire you can add other functions to order your code.
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you have your own user access control system with user permissions you can create dynamicaly this two files (<span class="phpfile">config.php,config.file.php</span>), instead having multiple configuration files.
											<br><br>
										</li>
									</ul>
									<br>
								</li>
								<li><a onClick="showAndHideCont(this.parentNode);">config.thumbnails.php file info</a>
									<ul class="hide">
										<li>
											The '<span class="phpfile">config.thumbnails.php</span>' file contains the configuration of the thumbnails server files, like the thumbnails width and height, the available extensions, the thumbnails prefix name and path and other configurations...
											<br>This file corresponds to the thumbnails configuration, like:
												<span class="alineas">
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- the thumbnails folder path and/or the thumbnail prefix name. 
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- the default image path that should be showed if the respective file isn't a gif, jpg, jpeg or png file.
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- the error image path that should be showed if the respective file is corrupt.
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- the available image extensions.
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- the thumbnails size, width and height.
												</span>
											<br>
											<br><span class="attention">ATTENTION:</span> 
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is advisable do not change these configurations.
										</li>
									</ul>
								</li>
							</ol>
							<br>
						</li>
						<li>One tip: in php.ini you need to set short_open_tag to On.</li>
					</ol>
					<br><br>
					<b>It is very important to respect the syntax of the configuration files and do not change the classes and functions name. </b>
					</td>
				  </tr>
				</table>
				</li>
			</ul>
		</li>
		<li id="tinymce">
			<a onClick="showAndHideMainCont('tinymce');">TinyMCE</a>
			<ul id="cont_tinymce" class="hide">
				<li>
				<table width="100%">
				  <tr>
					<td align="center">
					<br>
					<br>
					<h2><font size="4"><b><span class="attention">ATTENTION:</span> You can implement this api on TinyMCE HTML Editor:</b></font> </h2>
					<br><img src="img/tinymce.jpg" width="344" height="134" alt="img/tinymce.jpg">
					<br>
					<font size="2">(click <a href="tinymceinstalation.php" target="_blank"><font size="5">here</font></a> to see the instalation info of this api on the TinyMCE HTML Editor)</font>
					<br>
					<font size="2">(click <a href="../../tinymce/tinymce/examples/example_full.htm" target="_blank"><font size="5">here</font></a> to see an example of this api on the TinyMCE HTML Editor)</font>
					</td>
				  </tr>
				 </table>
				 </li>
			</ul>
		</li>
	</ul>
	</td>
	<td align="right"><h3>Done by: <a href="http://www.jplpinto.com/">Joao Pinto</a></h3></td>
  </tr>
</table>
</body>
</html>
