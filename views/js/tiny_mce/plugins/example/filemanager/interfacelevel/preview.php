<?
require_once("./../logiclevel/sessionstart.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File / Directory information</title>
<link href="css/preview.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript" src="jscripts/preloadimages.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/general.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/preview.js"></script>
</head>
<body id="previewBody" onLoad="init();MM_preloadImages('images/back_li_row_down.png');">
<ul>
	<li id="propertiespreview">
		<div class="lipreview" onClick="showAndHideCont('cont_propertiespreview'); changeImageIfContIsOpen('cont_propertiespreview','row_propertiespreview');">
			<img id="dot_propertiespreview" src="images/back_li_dot.png"/>
			<img id="row_propertiespreview" src="images/back_li_row_down.png"/>
			<label>PROPERTIES</label>
		</div>
		<ul id="cont_propertiespreview"><?
			include("./propertiespreview.php");
		?></ul>
	</li>
	<? if($CONFIG['search_permission']) {?>
	<li id="searchpreview">
		<div class="lipreview" onClick="showAndHideCont('cont_searchpreview'); changeImageIfContIsOpen('cont_searchpreview','row_searchpreview');">
			<img id="dot_searchpreview" src="images/back_li_dot.png"/>
			<img id="row_searchpreview" src="images/back_li_row_right.png"/>
			<label>SEARCH FILES</label>
		</div>
		<ul id="cont_searchpreview" style="display:none; ">
			<iframe id="searchPreviewIframe" name="searchPreviewIframe" src="search.php?<? echo $_SERVER['QUERY_STRING'];?>" unselectable="true" atomicselection="true" width="100%" height="220px" marginwidth="0" marginheight="0" topmargin="0" leftmargin="0" frameborder="0" border="0"></iframe>
		</ul>
	</li>
	<? }
	if($CONFIG['cut_permission'] || $CONFIG['copy_permission']) {?>
	<li id="copiedfilespreview">
		<div class="lipreview" onClick="showAndHideCont('cont_copiedfilespreview'); changeImageIfContIsOpen('cont_copiedfilespreview','row_copiedfilespreview');">
			<img id="dot_copiedfilespreview" src="images/back_li_dot.png"/>
			<img id="row_copiedfilespreview" src="images/back_li_row_right.png"/>
			<label>COPIED FILES</label>
		</div>
		<ul id="cont_copiedfilespreview" style="display:none; "><?
			include("./copiedfilespreview.php");
		?></ul>
	</li>
	<? }?>
</ul>
</body>

</html>
