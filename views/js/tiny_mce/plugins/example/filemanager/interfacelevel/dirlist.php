<? 
require_once("./../logiclevel/sessionstart.php");
require_once("./../config/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>File List</title>
	<link href="tree/styles/reset.css" rel="stylesheet" />
	<link href="tree/styles/tree.css" rel="stylesheet" />
	<link href="tree/styles/tree-lines.css" rel="stylesheet" />
	<link href="tree/styles/dir-tree.css" rel="stylesheet" />
	<link href="css/loading.css" rel="stylesheet" />
	<style>
	#loadingbar {left:15%;}
	</style>
	<link href="css/dirlist.css" rel="stylesheet" />
	<script language="javascript" type="text/javascript" src="jscripts/preloadimages.js"></script>
	<script language="javascript"  type="text/javascript" src="jscripts/dirlist.js"></script>
	
	<script language="javascript"  type="text/javascript" src="tree/scripts/ajax.js"></script>
	<script language="javascript"  type="text/javascript" src="tree/scripts/tree.js"></script>
	<script language="javascript"  type="text/javascript" src="tree/scripts/tree_creation.js"></script>
	<script language="javascript"  type="text/javascript" src="tree/scripts/tree_update.js"></script>
	<script language="javascript"  type="text/javascript" src="tree/scripts/loadConfiguration.js"></script>
	<script language="javascript"  type="text/javascript" src="tree/scripts/functions.js"></script>
	<script language="javascript"  type="text/javascript" src="tree/scripts/tree_functions.js"></script>
	<script>
		var fileConfigURL = '../config/config_dirlist.xml';
		var fileDataURL = '../logiclevel/dirlist_ll.php?type=dirlist';
		var mainTreeDivID = 'tree';
		
		var root_path = '';
	</script>
</head>

<body onLoad="MM_preloadImages('tree/themes/dir/windows/folder_open.gif','tree/img/plus.gif','tree/img/minus.gif');">
	<div id="folders">
		<img id="dotimg" src="images/back_li_dot.png"/>
		<label>Folders</label>
	</div>
	<div id="divroot">
		<img src="images/minus.gif" id="minusroot"> 
		<img src="images/root.gif" id="imgroot"> 
		<a id="aroot" href="#path=<? echo $CONFIG['root_path_name'];?>" onclick="goToPath('');selectedLabelOfLi('labelroot');"> 
			<label id="labelroot"><? echo $CONFIG['root_path_name'];?></label>
		</a>
	</div>
	<div id="divrootline"></div>
	<div id="tree">
<?
	require_once("./tree/phpcode/HtmlTree.php"); 
	$base_url = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
	$html_tree = new HtmlTree($base_url."/../config/config_dirlist.xml",$base_url."/../logiclevel/dirlist_ll.php?type=dirlist");
	$html_tree->createTreeByGetMethod();
	$html_tree->designTree();
?>
	</div>
</body>

</html>