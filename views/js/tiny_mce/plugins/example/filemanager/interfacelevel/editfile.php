<?
require_once("./../logiclevel/init.php");

$editor_type = $_GET["editor_type"];
$tinymce_path = $CONFIG['tinymce_path'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>File Editor</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/buttons.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/dialog.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/editfile.css" rel="stylesheet" type="text/css" media="all" />
	<link href="code_editor/editor.css" rel="stylesheet" type="text/css" media="all" />
	<link href="code_editor/highlight.css" rel="stylesheet" type="text/css" media="all" />
	
	<? if($editor_type == "code") {?>
	<script language="javascript" type="text/javascript" src="code_editor/highlight.js"></script>
	<script language="javascript" type="text/javascript" src="code_editor/editor.js"></script>
	<script language="javascript" type="text/javascript" src="jscripts/general.js"></script>
	<? }
	else if($editor_type == "tinymce") {?>
	<!-- TinyMCE -->
	<script language="javascript" type="text/javascript" src="<?= $tinymce_path;?>jscripts/tiny_mce/tiny_mce.js"></script>
	<script language="javascript" type="text/javascript">
		tinyMCE.init({
			mode : "textareas",
			theme : "advanced",
			plugins : /*flash,*/"form,fullpage,zoom,filemanager,filebrowser,devkit,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
			theme_advanced_buttons1 : "newdocument,save,cancel,|,print,preview,|,search,replace,iespell,|,cut,copy,pastecontrols,|,undo,redo,|,code,fullpage,visualaid,zoom,template,|,fullscreen,help",
			theme_advanced_buttons2 : "styleprops,formatselect,fontselect,fontsizeselect,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,numlist,bullist,indent,outdent,|,backcolor,forecolor",
			theme_advanced_buttons3 : "attribs,|,tablecontrols,|,formcontrols,|,link,unlink,anchor,|,charmap,emotions,image,media,flash,insertdate,inserttime,|,advhr,hr,removeformat,cleanup,|,insertlayer,moveforward,movebackward,absolute,",
			theme_advanced_buttons4 : "visualchars,ltr,rtl,nonbreaking,|,sub,sup,|,cite,abbr,acronym,del,ins,|,filebrowser",
			//theme_advanced_buttons1_add_before : "",
			//theme_advanced_buttons1_add : "",
			//theme_advanced_buttons2_add_before: "",
			//theme_advanced_buttons2_add : "",
			//theme_advanced_buttons3_add_before : "flash",
			//theme_advanced_buttons3_add : "",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_path_location : "bottom",
			content_css : "example_full.css",
		    plugin_insertdate_dateFormat : "%Y-%m-%d",
		    plugin_insertdate_timeFormat : "%H:%M:%S",
			extended_valid_elements : "hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]",
			external_link_list_url : "example_link_list.js",
			external_image_list_url : "example_image_list.js",
			flash_external_list_url : "example_flash_list.js",
			media_external_list_url : "example_media_list.js",
			template_external_list_url : "example_template_list.js",
			file_browser_callback : "fileBrowserCallBack",
			theme_advanced_resize_horizontal : false,
			theme_advanced_resizing : true,
			nonbreaking_force_tab : true,
			apply_source_formatting : true,
			template_replace_values : {
				username : "Jack Black",
				staffid : "991234"
			},
			relat2ive_urls : false,
			rem2ove_script_host : false
		});

		function fileBrowserCallBack(field_name, url, type, win) {
			if (eval('typeof(tinyMCE.plugins["filebrowser"].fileSearchBrowser)') == "undefined")
				alert("Callback function: fileSearchBrowser (of the filebrowser plugin) could not be found.");
			else eval("tinyMCE.plugins['filebrowser'].fileSearchBrowser(field_name, url, type, win);");
			
			/*if (eval('typeof(tinyMCE.plugins["filemanager"].fileSearchBrowser)') == "undefined")
				alert("Callback function: fileSearchBrowser (of the filemanager plugin) could not be found.");
			else eval("tinyMCE.plugins['filemanager'].fileSearchBrowser(field_name, url, type, win);");*/
		}
	</script>
	<!-- /TinyMCE -->
	<? } ?>
</head>
<?
require_once("./../logiclevel/editfile_ll.php");
?>
<body <? if($editor_type == "code") echo 'onLoad="init();"';?> >
<form name="fileeditor" method="post" action="editfile.php?path=<? echo $path."&".$url_vars."&editor_type=".$editor_type;?>">
<div class="mcBorderBottomWhite">
	<div class="mcHeader mcBorderBottomBlack">
		<div class="mcWrapper">
			<div class="mcHeaderLeft">
				<div class="mcHeaderTitle">File Editor</div>
				<div class="mcHeaderTitleText">Content of the file</div>
			</div>

			<div class="mcHeaderRight">&nbsp;</div>
			<br style="clear: both" />
		</div>
	</div>
</div>
<div class="mcContent">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
	  <tr>
		<td width="80">File:</td>
		<td nowrap="nowrap" class="mcHeaderText">
			<? echo dirname($path)."/";
			if($CONFIG['rename_permission'])
				echo '<input type="text" name="newname" id="newname" class="inputText" value="'.basename($path).'" size="70"><font class="mandatoryfield">*</font>';
			else echo basename($path);
			?>
		</td>
		<td class="change_editor">
			<span><a href="editfile.php?path=<? echo $path."&".$url_vars;?>&editor_type=txt">Change to text editor</a></span>
			<span><a href="editfile.php?path=<? echo $path."&".$url_vars;?>&editor_type=code">Change to code editor</a></span>
			<span><a href="editfile.php?path=<? echo $path."&".$url_vars;?>&editor_type=tinymce">Change to tinymce editor</a></span>
		</td>
	  </tr>
	  <tr>
		<td colspan="3">File Contents:</td>
	</table>
	<input type="hidden" name="path" value="<? echo $path;?>" />
	<input type="hidden" name="selected_action" value="editfile" />
	<input type="hidden" name="submitted" value="true" />
	<? 
		if($editor_type == "code") {
			$filecontents = str_replace("\r", "", $filecontents);
			$filecontents = str_replace("\n", "\\n", $filecontents);
			$filecontents = str_replace('"', '\"', $filecontents);
			$filecontents = str_replace("\t", "\\t", $filecontents);
	
			echo '	<iframe name="editor" src="code_edit/editor.html" style="width: 100%; height: 540px;"></iframe>
				<textarea name="filecontents" wrap="off" style="display:none"></textarea>
				<script type="text/javascript">
				function init() {
					var sourcecode = "'.$filecontents.'";
					editor.setContents(sourcecode);
				}
				</script>';
		}
		else if($editor_type == "tinymce") {
			echo '<textarea id="elm1" name="filecontents" rows="15" cols="80" style="width: 100%; height: 540px;">'.$filecontents.'</textarea>';
		}
		else {
			echo '<textarea name="filecontents" wrap="off" style="width: 100%; height: 540px;">'.$filecontents.'</textarea>';
		}
	?>
</div>
<div class="mcFooter mcBorderTopBlack">
	<div class="mcBorderTopWhite">
		<div class="mcWrapper">
			<div class="mcFooterLeft"><input type="submit" name="Submit" value="Save" class="button" onclick="filecontents.value = editor.getContents();"/></div>
			<div class="mcFooterRight"><input type="button" name="Cancel" value="Cancel" class="button" onclick="top.close();" /></div>
			<br style="clear: both" />
		</div>
	</div>
</div>
</form>
</body>

</html>


