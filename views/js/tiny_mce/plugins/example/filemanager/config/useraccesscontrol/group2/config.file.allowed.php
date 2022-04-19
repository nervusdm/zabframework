<?
class CONFIGFILEALLOWED {
		
	/* get a files list of the files that will be allowed. Each element of the list must be a text with the end text of the file base name.*/
	function getAllowedFilesEndsWith() {
		$config = array();
	
		if($_GET['filemanager_type'] == "image") {
			$config[] = ".gif";
			$config[] = ".png";
			$config[] = ".tif";
			$config[] = ".bmp";
			$config[] = ".jpg";
			$config[] = ".raw";
		}
		else
			$config = array('zip','tar','gz','xml','txt','doc','html','htm','gif','jpg','png','bmp','tif','tiff','psd','raw');

		return $config;
	}
}
?>