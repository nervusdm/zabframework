<?
	require_once("./../config/accesscontrol.php");
	
	$group = getUserConfiguration();
	if(file_exists("./../config/useraccesscontrol/".$group."/config.file.php"))
		require_once("./../config/useraccesscontrol/".$group."/config.file.php");
?>
