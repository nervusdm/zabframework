<?php
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="iso-8859-1" ?>';

require_once("./../basiclevel/File.php");
require_once("./../config/config.php");
$root_path = $_GET['folders_template'] == 1 ? $CONFIG['dir_templates_path'] : $_GET['root_path_empty'] == 1 ? "" : $CONFIG['root_path'];
if(!empty($root_path) && substr($root_path,strlen($root_path)-1) != "/")
	$root_path .= "/";

$path = $_GET['id'];
$type = $_GET['type'];
$max_level = 1;
designXML($type,$root_path,$path,$max_level);

function designXML($type,$root_path,$path,$max_level) {
	$filename = basename($path);
	
	if($max_level >= 0) {
		--$max_level;
		if(filetype($root_path.$path) == "dir") {
			$tag = $max_level >= 0 && hasSubDirsFiles($root_path.$path,$type) ? "complex" : "complex2";
			
			echo '<'.$tag.' id="'.$path.'">'.$filename;
			designXMLFiles($type,$root_path,$path,$max_level);
			echo '</'.$tag.'>';
		}
		else echo '<simple id="'.$path.'">'.$filename.'</simple>';
	}
}

function designXMLFiles($type,$root_path,$path,$max_level) {
	if($max_level >= 0) {
		$path = File::configureFileName($path);
		$files = File::getDirFiles($root_path.$path);

		for($i = 0; $i < count($files); ++$i) {
			$url = $path.$files[$i][0];
			//$url = str_replace(' ','%20',$url);
			
			if($files[$i][1] == 'dir')
				designXML($type,$root_path,$url,$max_level);
			elseif($type != "dirlist") echo '<simple id="'.$url.'">'.$files[$i][0].'</simple>';
		}
	}
}

function hasSubDirsFiles($path,$type) {
	$sub_files = File::getDirFiles($path);
	for($i = 0; $i < count($sub_files); ++$i) {
		if($sub_files[$i][1] == 'dir' && $type == "dirlist")
			return true;
		elseif($type != "dirlist") return true;
	}
	return false;
}
?>