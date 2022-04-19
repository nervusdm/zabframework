<?
require_once("./../logiclevel/init.php");

$dirname = dirname($path);
$filename = basename($path);

if($_GET['submitfilerename']) {
	$new_name = $_GET['filename'];
	if($new_name != $filename) {
		if($CONFIG['rename_permission']) {
			$full_new_name = $dirname != '.' && !empty($dirname) ? $root_path.$dirname.'/'.$new_name : $root_path.$new_name;
			
			if($status = File::renameFile($root_path.$path,$full_new_name)) {
				require_once("./../config/config.file.php");
				if(CONFIGFILE::isValid($full_new_name)) {
					echo "1"; 
				}
				else {
					File::renameFile($full_new_name,$root_path.$path);
					echo "Sorry, file not renamed!\nPossible reasons:\n- File extension reserved.\n- File name prefix reserved.\n- File base name reserved.";
				}
			}
			else echo "2"; 
		}
		elseif($CONFIG['rename_permission_denied_message']) echo "3";
	}
}
?>
