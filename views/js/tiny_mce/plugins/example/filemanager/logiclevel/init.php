<?
$path = trim($_GET['path']);

$strrpos_index = strrpos($path,"/");
if(is_numeric($strrpos_index) && $strrpos_index == strlen($path)-1)
	$path = substr($path,0,strlen($path)-1);
if($path == ".") $path = "";

$get_aux_vars = eregi_replace("(PHPSESSID|filemanager_type|elements_for_page|actual_page|sort_by|sort_order|path|filename|imageaction|zip_file_name|imagePath|selected_action|search|search_file_location|search_subfolders|search_indexes|search_file_name_([0-9]?)|search_file_word_([0-9]?)|case_sensitive_([0-9]?))=([^&\?]*)(&*)","",$_SERVER['QUERY_STRING']);
$url_vars = "&".$get_aux_vars."&PHPSESSID=".$_GET['PHPSESSID']."&filemanager_type=".$_GET['filemanager_type']."&elements_for_page=".$_GET['elements_for_page']."&actual_page=".$_GET['actual_page']."&sort_by=".$_GET['sort_by']."&sort_order=".$_GET['sort_order'];

require_once("./../basiclevel/File.php");
require_once("./../config/config.php");

$root_path = trim($CONFIG['root_path']);
if(!empty($root_path) && substr($root_path,strlen($root_path)-1) != "/")
	$root_path .= "/";
?>