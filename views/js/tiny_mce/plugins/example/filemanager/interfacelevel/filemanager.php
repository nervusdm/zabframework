<?
require_once("../logiclevel/sessionstart.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FileManager</title>
<script type="text/javascript">
	function insertURL(url) {
		return null;
	}
</script>

</head>
<frameset id="filemanager_frameset" rows="*" cols="200,*,300" framespacing="0px" subframesnames="dirlist,filelistmanager,preview">
	<frame id="dirlist" name="dirlist" src="dirlist.php?<? echo $_SERVER['QUERY_STRING'];?>&PHPSESSID=<? echo $_GET['PHPSESSID'];?>" frameborder="1px" scrolling="auto" marginwidth="0" marginheight="0" framecols="200" />
	<frame id="filelistmanager" name="filelistmanager" src="filelistmanager.php?<? echo $_SERVER['QUERY_STRING'];?>&PHPSESSID=<? echo $_GET['PHPSESSID'];?>" frameborder="no" scrolling="no" marginwidth="0" marginheight="0" framecols="*" />
	<frame id="preview" name="preview" src="preview.php?<? echo $_SERVER['QUERY_STRING'];?>&PHPSESSID=<? echo $_GET['PHPSESSID'];?>" frameborder="1px" scrolling="auto" marginwidth="0" marginheight="0" framecols="300" />
</frameset>

<noframes><body></body></noframes>

</html>
