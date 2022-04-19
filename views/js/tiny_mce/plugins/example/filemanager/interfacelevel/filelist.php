<?
require_once("./../logiclevel/sessionstart.php");
require_once("./../logiclevel/init.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File Browser</title>
<link href="css/filelist.css" rel="stylesheet" type="text/css" />
<link href="css/toolbar.css" rel="stylesheet" type="text/css" />
<link href="css/loading.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/paginglist.css" rel="stylesheet" type="text/css" />
<link href="css/filetypes.css" rel="stylesheet" type="text/css" />
<script language="javascript"  type="text/javascript" src="tree/scripts/ajax.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/preloadimages.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/generallist.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/general.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/filelist.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/paginglist.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/toolbar.js"></script>
<script>
	var path = "<? echo $path; ?>";
	var urlVars = "<? echo $url_vars; ?>";
</script>
<? 
require_once("./../logiclevel/filelist_ll.php");
require_once("./../interfacelevel/FileInterface.php");

$php_file_name = "filelist.php";

echo '<script language="javascript" type="text/javascript">
	var disabledTools = "";
	
	var hasCreateFolderPermission = '.$hasCreateFolderPermission.';
	var hasCreateDocPermission = '.$hasCreateDocPermission.';
	var hasUploadPermission = '.$hasUploadPermission.';
	var hasCutPermission = '.$hasCutPermission.';
	var hasCopyPermission = '.$hasCopyPermission.';
	var hasDeletePermission = '.$hasDeletePermission.';
	var hasRenamePermission = '.$hasRenamePermission.';
	var hasZipPermission = '.$hasZipPermission.';
	var hasUnzipPermission = '.$hasUnzipPermission.';
	var hasFileEditPermission = '.$hasFileEditPermission.';
	var hasImageEditPermission = '.$hasImageEditPermission.';
	var hasSearchPermission = '.$hasSearchPermission.';
	var hasPasteAccess = '.$hasPasteAccess.';
	
	urlVars += "&'.$search_url_vars.'";
</script>';
?>
</head>
<body onload="init('<? echo $is_search;?>');MM_preloadImages('images/toolbaritems/selectedtoolbaritems/toggleall.gif','images/toolbaritems/selectedtoolbaritems/rename.gif','images/toolbaritems/selectedtoolbaritems/copy.gif','images/toolbaritems/selectedtoolbaritems/cut.gif','images/toolbaritems/selectedtoolbaritems/edit.gif','images/toolbaritems/selectedtoolbaritems/imagemanager.gif','images/toolbaritems/selectedtoolbaritems/paste.gif','images/toolbaritems/selectedtoolbaritems/props.gif','images/toolbaritems/selectedtoolbaritems/refresh.gif','images/toolbaritems/selectedtoolbaritems/trash.gif','images/toolbaritems/selectedtoolbaritems/unzip.gif','images/toolbaritems/selectedtoolbaritems/upload.gif','images/toolbaritems/selectedtoolbaritems/delete.gif','images/toolbaritems/selectedtoolbaritems/zip.gif','images/toolbaritems/selectedtoolbaritems/createdir.gif','images/toolbaritems/selectedtoolbaritems/createdoc.gif','images/toolbaritems/selectedtoolbaritems/search.gif','images/toolbaritems/selectedtoolbaritems/preview.gif','images/toolbaritems/selectedtoolbaritems/help.gif','images/toolbaritems/selectedtoolbaritems/download.gif','images/im.gif');"> 
<? 
include("./toolbar.php");
?>

<!-- div id="filelisttoolbar"> 
  <table border="0" cellpadding="2" cellspacing="0" width="100%"> 
    <tr id="fileListHeadReal" class="filelistHeadRow"> 
      <td id="selectCol1" class="filelistCol1 filelistHeadCol" align="center" valign="middle"><a href="javascript:execFileCommand('toggleall');" title="Toggle all" onmousedown="return false;"><img id="toggleall" src="images/toolbaritems/box.gif" width="10" height="10" alt="Toggle all" border="0" hspace="3" /></a></td> 
      <td id="iconCol1" class="filelistCol2 filelistHeadCol"><img src="images/spacer.gif" width="10" height="1" /></td> 
      <td id="fnameCol1" class="filelistCol3 filelistHeadCol">Filename</td> 
      <td id="fsizeCol1" class="filelistCol4 filelistHeadCol" align="center">Size</td> 
      <td id="fmodCol1" class="filelistCol5 filelistHeadCol" align="center">Modificationdate</td> 
      <td id="spacerCol1" class="filelistCol6 filelistHeadCol">&nbsp;</td> 
    </tr> 
  </table>
</div --> 
<div id="filelist" class="filelist"> 
  <form id="filelistForm" name="filelistForm" method="post" action="filelist.php?<? echo $_SERVER['QUERY_STRING'];?>"> 
    <table id="filelisttable" border="0" cellpadding="2" cellspacing="0" width="100%"> 
      <tr id="fileListHead" class="filelistHeadRow"> 
        <td id="selectCol2" class="filelistCol1 filelistHeadCol" align="center" valign="middle"><a href="javascript:execFileCommand('toggleall');" title="Toggle all" onmousedown="return false;"><img id="toggleall" src="images/toolbaritems/box.gif" width="16" height="16" alt="Toggle all" border="0" hspace="3" /></a></td> 
        <td id="iconCol2" class="filelistCol2 filelistHeadCol"><img src="images/spacer.gif" width="10" height="1" /></td> 
        <td id="fnameCol2" class="filelistCol3 filelistHeadCol">Filename</td> 
        <td id="fsizeCol2" class="filelistCol4 filelistHeadCol" align="center"><nobr>Size</nobr></td> 
        <td id="fmodCol2" class="filelistCol5 filelistHeadCol" align="center">Modificationdate</td> 
        <td id="spacerCol2" class="filelistCol6 filelistHeadCol">&nbsp;</td> 
      </tr> 
      <tr> 
        <td id="selectCol3" class="filelistCol1"></td> 
        <td id="iconCol3" class="filelistCol2"></td> 
        <td id="fnameCol3" class="filelistCol3 filelistHeadCol"></td> 
        <td id="fsizeCol3" class="filelistCol4"></td> 
        <td id="fmodCol3" class="filelistCol5"></td> 
        <td id="spacerCol3" class="filelistCol6"></td> 
      </tr> 
      
      <?
	  	if(!empty($path)) {
			$go_up = 'filelist.php?path='.File::getFileDirName($path).'&'.$url_vars;
			
		  	echo '<tr onDblClick="document.location=\''.$go_up.'\'"> 
			<td class="filelistCol1"><input type="checkbox" disabled  /></td>
			<td class="filelistCol2"><a href="'.$go_up.'" onmousedown="return false;"><img src="images/filetypes/up_folder.gif" width="16" height="16" alt="Up Directory" title="Up Directory" border="0" class="" /></a></td>
			<td class="filelistCol3 filelistFileName"></td>
			<td class="filelistCol4" nowrap="nowrap"></td>
			<td class="filelistCol5" nowrap="nowrap"></td>
			<td class="filelistCol6"></td>
		  </tr>';
		}
		
		for($i = $begin_index; $i < $end_index; ++$i) {
			if($class_name == "filelistRowEven") $class_name = "filelistRowOdd";
			else $class_name = "filelistRowEven";
			
			echo FileInterface::getHtmlFileList($root_path,$i,$files[$i],$url_vars,$class_name,$permission_classes);
		}
		?> 
    </table> 
    <input type="hidden" name="num_of_items" value="<? echo count($files);?>" /> 
    <input type="hidden" name="selected_action" value="" /> 
    <input type="hidden" name="path" value="<? echo $path;?>" /> 
  </form> 
</div> 

<? 
include("./paginglist.php");
?>

</body>
</html>