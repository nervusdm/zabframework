<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>AJAX & PHP File Manager API Installation Info</title>
	<META NAME="Description" CONTENT="Free Ajax and PHP File Manager Api, where you can use it to browse directories and files on the server and edit, copy, move, delete, search, upload, download files, create and extract archives, create new directories and files, edit images and files, view thumbnails files and much more... AJAX and PHP FILE MANAGER API is similar to the CPANEL FILE MANAGER API, but much more powerfull. You can implement this api on TinyMCE HTML Editor.">
	<META NAME="KEYWORDS" CONTENT="filemanager,file manager,tinymce,html editor,gestor de ficheiros,ficheiros,file,ajax,php,javascript,jplpinto">
	<style type="text/css">
		body {background-color:#EEEEEE}
		li {margin:10px;}
	</style>
</head>

<body>
<p style="font-size:18px; ">To install the "<b>AJAX & PHP FILE MANAGER API</b>" into "<b>TinyMCE Html Editor</b>" execute the following steps:</p>
<ol>
	<li> Download the TinyMCE Html Editor in <a href="http://tinymce.moxiecode.com" target="_blank">http://tinymce.moxiecode.com</a></li>
	<li> Read the TinyMCE installation file and install the editor on your server.</li>
	<li> Download the following files:
		<ul>
			<li> <a href="../../tinymce/tinymce_plugins/filemanager_plugin.zip" target="_blank">filemanager_plugin</a></li>
			<li> <a href="../../tinymce/tinymce_plugins/filebrowser_plugin.zip" target="_blank">filebrowser_plugin</a></li>
		</ul>
	</li>
	<li> Extract the two archives to your computer (will be created two directories: filemanager, filebrowser).</li>
	<li> Copy both directories (filemanager and filebrowser) to the <b>tinymce/jscripts/tiny_mce/plugins/</b> directory.</li>
	<li> Open the file which call the TinyMCE Html Editor and write the following script:
		<ul>
			<li>
				<pre>
&lt;script>
function fileBrowserCallBack(field_name, url, type, win) {
	if (eval('typeof(tinyMCE.plugins["filebrowser"].fileSearchBrowser)') == "undefined")
		alert("Callback function: fileSearchBrowser (of the filebrowser plugin) could not be found.");
	else eval("tinyMCE.plugins['filebrowser'].fileSearchBrowser(field_name, url, type, win);");
		
	/*if (eval('typeof(tinyMCE.plugins["filemanager"].fileSearchBrowser)') == "undefined")
		alert("Callback function: fileSearchBrowser (of the filemanager plugin) could not be found.");
	else eval("tinyMCE.plugins['filemanager'].fileSearchBrowser(field_name, url, type, win);");*/
}
&lt;/script>
				</pre>
				<br>
				<b>Note: </b><br>
			</li>
			<li>See an example <a href="../../tinymce/tinymce/examples/example_full.htm" target="_blank">here</a><br><br></li>
		</ul>
	</li>
	<li> On the same file (which call the TinyMCE Html Editor):
		<ul>
			 <li> Add the filemanager and filebrowser plugins, editing the following line code (for example):
					<br>&nbsp; &nbsp; &nbsp; <b>plugins : "filemanager,filebrowser,devkit,style,layer,table,save....</b>
			</li>
			 <li> Check if exists the following variable:
					<br>&nbsp; &nbsp; &nbsp; <b>file_browser_callback : "fileBrowserCallBack",</b>
			</li>
			<li> Add a filebrowser plugin button into the html editor, editing the following line code (for example):
				<br>&nbsp; &nbsp; &nbsp; <b>theme_advanced_buttons1_add_before : "filebrowser,save,newdocument,separator"...</b>
				<br>This second plugin is optional and is used to write the file url into the editor textarea.
				<br>
				<br>
			</li>
		</ul>
	</li>
	<li> Delete the file 'interfacelevel/filemanager.php' and rename one of the following files with the basename 'filemanager.php':
		<ul>
			<li><b>interfacelevel/filemanager_tinymce_readfile.php:</b> This file protects the files root path. This means that everytime the user selects a file, the file root path will be hidden and the user will not know where the file is recorded.</li>
			<li><b>interfacelevel/filemanager_tinymce_rootpath.php:</b>  This file shows the files root path. This means that everytime the user selects a file, the file will be shown with its full path. This isn't safe because the user can access the file directly.</li>
		</ul>
		<br>
	</li>
	<li> Don't forget to configure the following files:
		<ul>
			<li><b>config/accesscontrol.php</b></li>
			<li><b>config/useraccesscontrol/&lt;group name&gt;/config.php</b></li>
			<li><b>config/useraccesscontrol/&lt;group name&gt;/config.file.php</b></li>
		</ul>
		<br>
	</li>
	<li>If something goes wrong please check your previous TinyMCE installation and try to open the <b>tinymce/examples/example_full.htm</b> original file to be sure that everything was OK before.
		<br>If the TinyMCE Html Editor doesn't open successfully, than change the following code line:
		<br> &nbsp; &nbsp; &nbsp; <b>&lt;script language="javascript" type="text/javascript" src="../jscripts/tiny_mce/tiny_mce_dev.js">&lt;/script></b>
		<br>...to: <b>&lt;script language="javascript" type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js">&lt;/script></b> 
		<br>...and voillá, it works...
	</li>
</ol>
<br>
<p align="center" style="font-size:18px; "><b>(To download an example, click here <a href="installation_files_example.zip" target="_blank">installation_files_example.zip</a>)</b></p>
</body>
</html>
