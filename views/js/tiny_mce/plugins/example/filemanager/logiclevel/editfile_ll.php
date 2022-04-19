<?
if($_POST['Submit']) {

	if($CONFIG['file_edit_permission']) {
	
		$filecontents = str_replace('\"','"',$_POST['filecontents']);
		if($status = File::writeFile($root_path.$path,$filecontents)) {
			$new_name = dirname($path) != "." ? dirname($path)."/".$_POST['newname'] : $_POST['newname'];
			if($path != $new_name) {
				if($CONFIG['rename_permission']) {
					require_once("./../config/config.file.php");
					if(CONFIGFILE::isValid($root_path.$new_name)) {
						if($status = File::renameFile($root_path.$path,$root_path.$new_name))
							$path = $new_name;
						else echo "<script>alert('ERROR: File not renamed! Try again!');</script>"; 
					}
					else echo "<script>alert('Sorry, file not renamed!\\nPossible reasons:\\n- File extension reserved.\\n- File name prefix reserved.\\n- File base name reserved.');</script>";
				}
				elseif($CONFIG['rename_permission_denied_message']) echo "<script>alert('".$CONFIG['rename_permission_denied_message']."');</script>"; 
			}
			echo "<script>openerWindow.execFileCommand('refresh');</script>"; 
		}
		
		if($status)
			echo "<script>alert('File contents sucessfully saved!');</script>"; 
		else echo "<script>alert('ERROR: File contents not saved! Try again!');</script>"; 
	}
	elseif($CONFIG['file_edit_permission_denied_message']) echo "<script>alert('".$CONFIG['file_edit_permission_denied_message']."');</script>"; 
}

$filecontents = File::readFile($root_path.$path);
?>
