<?
	require_once("./../config/accesscontrol.php");
	
	$group = getUserConfiguration();
	if(file_exists("./../config/useraccesscontrol/".$group."/config.php"))
		require_once("./../config/useraccesscontrol/".$group."/config.php");
?>