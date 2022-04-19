<? 
if($_POST['Submit']) {

	if($CONFIG['create_doc_permission']) {
	
		echo "<script>openerWindow.showLoadingBar();</script>"; 
	
		$file = !empty($path) ? $path.'/'.$_POST['docname'] : $_POST['docname'];
		if(!file_exists($file)) {
			$template = $_POST['template'];
			
			require_once("./../config/config.file.php");
			if(empty($template)) {
				if(CONFIGFILE::isValid($root_path.$file)) {
					if($status = File::createFile($root_path.$file) )
						echo "<script>openerWindow.cleanSearchedUrlVarsFromFilelistFormAction();openerWindow.execFileCommand('refresh');top.close();</script>";
				}
				else echo "<script>alert('Sorry, file name incorrect!\\nPossible reasons:\\n- File extension reserved.\\n- File name prefix reserved.\\n- File base name reserved.');openerWindow.hideLoadingBar();</script>";
			}
			elseif(!empty($template) && file_exists($template)) {
				if(CONFIGFILE::isValid($root_path.$file.".".File::getFileExtension($template))) {
					if($status = File::copyFile($template,$root_path.$file.".".File::getFileExtension($template),1) )
						echo "<script>openerWindow.execFileCommand('refresh');top.close();</script>";
				}
				else echo "<script>alert('Sorry, file name incorrect!\\nPossible reasons:\\n- File extension reserved.\\n- File name prefix reserved.\\n- File base name reserved.');openerWindow.hideLoadingBar();</script>";
			}
			else {
				echo "<script>openerWindow.hideLoadingBar();</script>"; 
				echo "<script>alert('ERROR: File not created! Try again!');</script>";
			}
		}else {
			echo "<script>openerWindow.hideLoadingBar();</script>"; 
			echo "<script>alert('File \"".$file."\" already exist!');</script>";
		}
	}
	elseif($CONFIG['create_doc_permission_denied_message']) echo "<script>alert('".$CONFIG['create_doc_permission_denied_message']."');</script>"; 
}

$templates = File::getDirFiles($CONFIG['file_templates_path']);
?>