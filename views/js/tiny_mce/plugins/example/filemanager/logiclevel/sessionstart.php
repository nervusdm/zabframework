<?
error_reporting(1);

session_set_cookie_params(1);
session_name("filemanager_files");
if($_GET['PHPSESSID'])
	session_id($_GET['PHPSESSID']);
$session_exists = session_start();
$_GET['PHPSESSID'] = session_id();

if(!session_is_registered("files_to_copy")) session_register("files_to_copy");
if(!session_is_registered("files_to_cut")) session_register("files_to_cut");
?>
