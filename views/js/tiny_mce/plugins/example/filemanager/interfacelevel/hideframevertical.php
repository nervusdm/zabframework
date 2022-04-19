<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/framesettools.css" rel="stylesheet" type="text/css" media="all" />
<script language="javascript" type="text/javascript" src="jscripts/framesettoolsvertical.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/preloadimages.js"></script>
</head>

<body class="body_vertical" onLoad="MM_preloadImages('images/tool_frame_left_on.png','images/tool_frame_right_on.png');">
<?
$direction = $_GET['direction'];
if(empty($direction)) $direction = 'left';
?>
<div id="img_frame_id" class="tool_frame_vertical tool_frame_<? echo $direction;?>"
 onmouseover="this.className='tool_frame_vertical tool_frame_<? echo $direction;?>_on';" 
 onmouseout="this.className='tool_frame_vertical tool_frame_<? echo $direction;?>';" 
 onclick="displayInternalFrame('<? echo $_GET['frame_name'];?>'); resizeFileListTable(); changeFramesetImage('img_frame_id','<? echo $_GET['frame_name'];?>','<? echo $direction;?>');" >
</div>

</body>
</html>
