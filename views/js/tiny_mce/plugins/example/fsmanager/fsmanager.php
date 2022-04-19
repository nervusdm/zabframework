<?php

///////////////////////////////////////////////////
//      P H P   F S   M A N A G E R   1 . 0      //
///////////////////////////////////////////////////
//                                               //
//  This script is FREE - modify it, resell it,  //
//      or use it in any way you please!         //
//                                               //
//    -- Set ROOT directory for FS Manager --    //
//   CAUTION! URL must end with backslash !!!!   //
//                                               //
//   Also, the /fsmanager folder must be located //
//   in the same folder as the script, for css   //
//   markup and file and folder icons to work!   //
//                                               //
//  Default: the same directory as fsmanager.php //
//  $root = "./";                                //
//                                               //
///////////////////////////////////////////////////


ini_set("display_errors",0);error_reporting(0);
// ROOT Directory
$root = "../../../../../img/news/";

@session_start();
if ($_SESSION['group']!='admin') { die('Pas admin') ;}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="type=text/html; charset=ISO-5589-1" />
<title>Gestionnaire de fichier</title>
<link rel="stylesheet" type="text/css" href="fsmanager/fsmanager.css" />
</head>
<body>
<div align="center">
<div id="body_matrix"><div id="body"><div id="body_border">
<div style="width:1000px;height:25px;background:#eee;"><div style="line-height:25px;font-size:12px;color:#669EE9;font-weight:bold;">Gestionnaire de fichier</div></div>
<div id="canvas_matrix"><div id="canvas">
<div id="ums_matrix"><div id="ums">
   <script type="text/javascript">


   </script>
<?php
$a = $_GET['a']; // action
$e = $_GET['e']; // setting
$do = $_GET['do']; // sub-level action
$id = $_GET['id']; // sub-level object

$agent = $_SERVER['HTTP_USER_AGENT']; // browser
$ip = $_SERVER['REMOTE_ADDR']; // remote ip
$ts = $_SERVER['REQUEST_TIME']; // timestamp
$self = $_SERVER['PHP_SELF']; // script source
$key = md5($agent.$ip.$ts.$self); // random md5
$uri = addslashes($_SERVER['REQUEST_URI']); // complete uri
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; // complete uri
$host = $_SERVER['HTTP_HOST']; // http domain name incl prefix
$domain = str_replace(array("www.", "cms.", "cpp."), "", $host); // http domain name
$max_upload = (int)( ini_get('upload_max_filesize') );
$max_post   = (int)( ini_get('post_max_size') );
$max_memory = (int)( ini_get('memory_limit') );
$upload_max = min($max_upload, $max_post, $max_memory);

function file_byte($a_bytes)
 {
     if ($a_bytes < 1024) {
         return $a_bytes .' B';
     } elseif ($a_bytes < 1048576) {
         return round($a_bytes / 1024, 0) .' KB';
     } elseif ($a_bytes < 1073741824) {
         return round($a_bytes / 1048576, 1) . ' MB';
     } elseif ($a_bytes < 1099511627776) {
         return round($a_bytes / 1073741824, 2) . ' GB';
     } elseif ($a_bytes < 1125899906842624) {
         return round($a_bytes / 1099511627776, 2) .' TB';
     } elseif ($a_bytes < 1152921504606846976) {
         return round($a_bytes / 1125899906842624, 2) .' PB';
     } elseif ($a_bytes < 1180591620717411303424) {
         return round($a_bytes / 1152921504606846976, 2) .' EB';
     } elseif ($a_bytes < 1208925819614629174706176) {
         return round($a_bytes / 1180591620717411303424, 2) .' ZB';
     } else {
         return round($a_bytes / 1208925819614629174706176, 2) .' YB';
     }
}

function dirsize($directory) {
   $size = 0;
   foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $file){
      $size+=$file->getSize();
   }
   return $size;
}

function filename_safe($name) {
    $except = array('#', '=', '!', '\\', '/', ':', ';', '*', '?', '"', '<', '>', '|', '{', '}', '%', '@', '¤', '\'', '(', ')', '$', '£', '´', '`', '~', '¨', '^', ',', '&');
    return str_replace($except, '', $name); 
} 

function remdir($dir) {
   if (is_dir($dir)) {
      $objects = scandir($dir);
      foreach ($objects as $object) {
         if ($object != "." && $object != "..") {
            if (filetype($dir."/".$object) == "dir") remdir($dir."/".$object); else unlink($dir."/".$object);
         }
      }
      reset($objects);
      rmdir($dir);
   }
}

$type = $_GET['type'];
if($type == "1") { $type = "dir"; } else { $type = "file"; }

$dir = $_GET['dir'];
if($dir==null || $dir=="." || $dir=="/" || $dir=="./" || $dir[0]=="/" || substr($dir, -2) == ".." || substr($dir, -2) == "./" || substr($dir, -2) == "//" || substr($dir, -1) == "." ) { $dir = $root; }
if(substr($dir, 0, strlen($root)) != $root) { $dir = $root.$dir; }
$path = $dir;

$folder = explode('/', $path, -1);
$count = count(explode('/', $path, -1));
$count = $count-1;

$uri = $_GET['uri'];
$uri_path = explode('/', $uri, -1);
$uri_count = count(explode('/', $uri, -1));
$uri_count = $uri_count-1;
if(strlen($uri)>0 && substr($uri, 0, strlen($root)) != $root) { $uri = $root.$uri ;}

$css_row = 0;

$title = $path;
if($count >= 2)
{
   $title = $folder[0].'/';
   $slashes = $count - 1;
   while($slashes>0)
   {
      $title .= '../';
      $slashes--;
   }
   $title .= $folder[$count];
   $title .= '/';
}

$strip_last = strlen($folder[$count]) + 1;
$up = substr($path, 0, -$strip_last);


if($a == "rename"){

   echo '<div id="h2"><span style="color:#bbb;">Rename ';
   if($type == "dir") { echo "folder"; } else { echo "file"; }
   echo '</span> '.$uri_path[$uri_count].'</div>'."\n";
   echo '<br />'."\n";
   echo '<div style="width:600px;height:24px;border-bottom:1px solid #eee;" align="left">'."\n";
   echo '   <div style="width:300px;float:left;">'."\n";
   echo '   <table align="left" cellspacing="0" cellpadding="0"><tr>'."\n";
   echo '   <td align="left" valign="middle"><span class="f_icon"><img src="fsmanager/';
   if($type == "dir") { echo "folder.png"; } else { echo "file.png"; }
   echo '" height="20" width="20" border="0" /></span></td>'."\n";
   echo '   <td align="left" valign="top"><span class="f_file" style="color:#777;font-weight:bold;">Rename ';
   if($type == "dir") { echo "folder"; } else { echo "file"; }
   echo '   </span></td>'."\n";
   echo '   </tr></table>'."\n";
   echo '   </div>'."\n";
   echo '   <div style="width:300px;float:right;">'."\n";
   echo '   <table align="right" cellspacing="0" cellpadding="0"><tr>'."\n";
   echo '   <td align="right" valign="middle"><a href="fsmanager.php?dir='.$dir.'" class="f_icon" style="margin:0 0 0 15px;"><img src="fsmanager/edit_undo.png" height="20" width="20" border="0" /></a></td>'."\n";
   echo '   <td align="right" valign="top"><a href="fsmanager.php?dir='.$dir.'" class="f_file" style="color:#333;">Annuler</a></td>'."\n";
   echo '   </tr></table>'."\n";
   echo '   </div>'."\n";
   echo '</div>'."\n";
   echo '<div style="width:600px;height:80px;background:#f9f9f9;border-bottom:1px solid #eee;" align="left">'."\n";
   echo '   <form action="fsmanager.php?exec=rename&dir='.$dir.'&uri='.substr($uri, 0, -1).'" method="post">'."\n";
   echo '   <div style="width:600px;" align="center">'."\n";
   echo '   <table align="center" height="80" cellspacing="0" cellpadding="0"><tr>'."\n";
   echo '   <td valign="middle"><img src="fsmanager/';
   if($type == "dir") { echo "folder.png"; } else { echo "file.png"; }
   echo '" height="32" width="32" border="0" /></td>'."\n";
   echo '   <td valign="middle">&nbsp;<input type="text" class="input" style="font-size:14px;" value="'.$uri_path[$uri_count].'" name="rename" /></td>'."\n";
   echo '   <td valign="middle"><input type="submit" class="submit" value=" Rename " name="exec" /></td>'."\n";
   echo '   </tr></table>'."\n";
   echo '   </div>'."\n";
   echo '   </form>'."\n";
   echo '</div>'."\n";

} elseif($a == "upload"){

   echo '<div id="h2"><span style="color:#bbb;">Uploader fichier dans</span> '.$title.'</div>'."\n";
   echo '<br />'."\n";
   echo '<div style="width:600px;height:24px;border-bottom:1px solid #eee;" align="left">'."\n";
   echo '   <div style="width:300px;float:left;">'."\n";
   echo '   <table align="left" cellspacing="0" cellpadding="0"><tr>'."\n";
   echo '   <td align="left" valign="middle"><span class="f_icon"><img src="fsmanager/document_new.png" height="20" width="20" border="0" /></span></td>'."\n";
   echo '   <td align="left" valign="top"><span class="f_file" style="color:#777;font-weight:bold;">Uploader fichier</span></td>'."\n";
   echo '   </tr></table>'."\n";
   echo '   </div>'."\n";
   echo '   <div style="width:300px;float:right;">'."\n";
   echo '   <table align="right" cellspacing="0" cellpadding="0"><tr>'."\n";
   echo '   <td align="right" valign="middle"><a href="fsmanager.php?dir='.$dir.'" class="f_icon" style="margin:0 0 0 15px;"><img src="fsmanager/edit_undo.png" height="20" width="20" border="0" /></a></td>'."\n";
   echo '   <td align="right" valign="top"><a href="fsmanager.php?dir='.$dir.'" class="f_file" style="color:#333;">Annuler</a></td>'."\n";
   echo '   </tr></table>'."\n";
   echo '   </div>'."\n";
   echo '</div>'."\n";
   echo '<div style="width:600px;height:100px;background:#f9f9f9;border-bottom:1px solid #eee;" align="left">'."\n";
   echo '   <form action="fsmanager.php?exec=upload&dir='.$dir.'" method="post" enctype="multipart/form-data">'."\n";
   echo '   <div style="width:600px;" align="center">'."\n";
   echo '   <table align="center" height="100" cellspacing="0" cellpadding="0"><tr>'."\n";
   echo '   <td valign="middle"><img src="fsmanager/document_new.png" height="32" width="32" border="0" /></td>'."\n";
   echo '   <td valign="middle">&nbsp;<input type="file" class="input" style="height:24px;" name="upload" /></td>'."\n";
   echo '   <td valign="middle"><input type="submit" class="submit" value=" Upload " name="exec" /></td>'."\n";
   echo '   </tr><td colspan="3" height="20" valign="top" align="center"><div align="center" style="font-size:11px;">Max filesize: <b>'.$upload_max.'MB</b>! (from server settings)</div></td>';
   echo '   </tr></table>'."\n";
   echo '   </div>'."\n";
   echo '   </form>'."\n";
   echo '</div>'."\n";

} elseif($a == "mkdir"){

   echo '<div id="h2"><span style="color:#bbb;">Nouveau dossier in</span> '.$title.'</div>'."\n";
   echo '<br />'."\n";
   echo '<div style="width:600px;height:24px;border-bottom:1px solid #eee;" align="left">'."\n";
   echo '   <div style="width:300px;float:left;">'."\n";
   echo '   <table align="left" cellspacing="0" cellpadding="0"><tr>'."\n";
   echo '   <td align="left" valign="middle"><span class="f_icon"><img src="fsmanager/folder_new.png" height="20" width="20" border="0" /></span></td>'."\n";
   echo '   <td align="left" valign="top"><span class="f_file" style="color:#777;font-weight:bold;">Nouveau dossier</span></td>'."\n";
   echo '   </tr></table>'."\n";
   echo '   </div>'."\n";
   echo '   <div style="width:300px;float:right;">'."\n";
   echo '   <table align="right" cellspacing="0" cellpadding="0"><tr>'."\n";
   echo '   <td align="right" valign="middle"><a href="fsmanager.php?dir='.$dir.'" class="f_icon" style="margin:0 0 0 15px;"><img src="fsmanager/edit_undo.png" height="20" width="20" border="0" /></a></td>'."\n";
   echo '   <td align="right" valign="top"><a href="fsmanager.php?dir='.$dir.'" class="f_file" style="color:#333;">Annuler</a></td>'."\n";
   echo '   </tr></table>'."\n";
   echo '   </div>'."\n";
   echo '</div>'."\n";
   echo '<div style="width:600px;height:80px;background:#f9f9f9;border-bottom:1px solid #eee;" align="left">'."\n";
   echo '   <form action="fsmanager.php?exec=mkdir&dir='.$dir.'" method="post">'."\n";
   echo '   <div style="width:600px;" align="center">'."\n";
   echo '   <table align="center" height="80" cellspacing="0" cellpadding="0"><tr>'."\n";
   echo '   <td valign="middle"><img src="fsmanager/folder_new.png" height="32" width="32" border="0" /></td>'."\n";
   echo '   <td valign="middle">&nbsp;<input type="text" class="input" style="font-size:14px;" value="" name="mkdir" /></td>'."\n";
   echo '   <td valign="middle"><input type="submit" class="submit" value=" Save " name="exec" /></td>'."\n";
   echo '   </tr></table>'."\n";
   echo '   </div>'."\n";
   echo '   </form>'."\n";
   echo '</div>'."\n";

} else {

   if(isset($_GET['exec'])) {

      $exec = $_GET['exec'];

      if($exec == "mkdir")
      {
         if(($_POST['mkdir']))
         {
            mkdir($dir.filename_safe($_POST['mkdir']));
         }
      }

      if($exec == "unlink")
      {
         if($type == "dir")
         {
            remdir($uri);
         }
         elseif($type == "file")
         {
            unlink($uri);
         }
      }

      if($exec == "rename")
      {
         rename($uri, $dir.filename_safe($_POST['rename']));
      }

      if($exec == "upload")
      {
         if(file_exists($_FILES['upload']['tmp_name'])) {

$file = $_FILES['upload']['name'] ;
   $w = pathinfo($file);
$w =  $w['extension'];
$extensionnonautorise = array('php','html','js','.htaccess');
if (in_array($w,$extensionnonautorise )) { die('Erreur : Type de fichier non autorisé. Arrêt.') ;}



            move_uploaded_file($_FILES['upload']['tmp_name'], $dir.filename_safe($_FILES['upload']['name']));
         }
else {
if ($_FILES['upload']['error'] ==1) { echo "<br/>Erreur. La taille du fichier que vous tentez de télécharger dépasse la limite autorisée par le serveur : " .  $max_upload . "mb" ;}

echo "<br/>Le fichier n'a pas pu être placé sur le serveur.";
}

      }

   }

   if($dir!=null && $dir!=$root)
   {
      //echo '<div id="h2"><span style="color:#bbb;">Pacours.;</span> '.$title.'</div>'."\n";
      echo '<table class="f_row" style="width:600px;" cellspacing="0" cellpadding="0">'."\n";
      echo '<tr>'."\n";
      echo '<td style="border-bottom:1px solid #eee;" colspan="6" align="left" valign="bottom">'."\n";
      echo '   <div style="float:left;width:250px;"><table align="left" cellspacing="0" cellpadding="0"><tr>'."\n";
      echo '      <td class="f_row_td1" align="left" valign="middle"><span class="f_icon"><img src="fsmanager/folder.png" height="20" width="20" border="0" /></span></td>'."\n";
      echo '      <td class="f_row_td2" style="width:100px" align="left" valign="top"><span class="f_file" style="color:#5E98E1;font-weight:bold;">'.substr($folder[$count], 0, 25).'</span></td>'."\n";
      echo '   </tr></table></div>'."\n";
      echo '   <div style="float:right;width:400px;"><table align="right" cellspacing="0" cellpadding="0"><tr>'."\n";
      echo '      <td valign="middle"><table cellspacing="0" cellpadding="0"><tr><td valign="middle"><a class="f_icon" style="margin:0 0 0 15px;" href="fsmanager.php?dir='.$up.'"><img src="fsmanager/go_up.png" height="20" width="20" border="0" /></a></td><td valign="top"><a class="f_file" style="color:#333;" href="fsmanager.php?dir='.$up.'">Up</a></td></tr></table></td>'."\n";
      echo '      <td valign="middle"><table cellspacing="0" cellpadding="0"><tr><td valign="middle"><a class="f_icon" style="margin:0 0 0 15px;" href="fsmanager.php?dir='.$root.'"><img src="fsmanager/folder_home.png" height="20" width="20" border="0" /></a></td><td valign="top"><a class="f_file" style="color:#333;" href="fsmanager.php?dir='.$root.'">Root</a></td></tr></table></td>'."\n";
      echo '      <td valign="middle"><table cellspacing="0" cellpadding="0"><tr><td valign="middle"><a class="f_icon" style="margin:0 0 0 15px;" href="fsmanager.php?a=upload&dir='.$path.'"><img src="fsmanager/document_new.png" height="20" width="20" border="0" /></a></td><td valign="top"><a class="f_file" style="color:#333;" href="fsmanager.php?a=upload&dir='.$path.'">Uploader fichier</a></td></tr></table></td>'."\n";
      echo '      <td valign="middle"><table cellspacing="0" cellpadding="0"><tr><td valign="middle"><a class="f_icon" style="margin:0 0 0 15px;" href="fsmanager.php?a=mkdir&dir='.$path.'"><img src="fsmanager/folder_new.png" height="20" width="20" border="0" /></a></td><td valign="top"><a class="f_file" style="color:#333;" href="fsmanager.php?a=mkdir&dir='.$path.'">Nouveau dossier</a></td></tr></table></td>'."\n";
      echo '   </tr></table></div>'."\n";
      echo '</td>'."\n";
      echo '</tr>'."\n";
   } else {
   //   echo '<div id="h2"><span style="color:#bbb;">Browsing</span> '.$title.'</div>'."\n";
      echo '<table class="f_row" style="width:600px;" cellspacing="0" cellpadding="0">'."\n";
      echo '<tr>'."\n";
      echo '<td style="border-bottom:1px solid #eee;" colspan="6" align="left" valign="bottom">'."\n";
      echo '   <div style="float:left;width:250px;"><table align="left" cellspacing="0" cellpadding="0"><tr>'."\n";
      echo '      <td class="f_row_td1" align="left" valign="middle"><span class="f_icon"><img src="fsmanager/folder_home.png" height="20" width="20" border="0" /></span></td>'."\n";
      echo '      <td class="f_row_td2" style="width:100px" align="left" valign="top"><span class="f_file" style="color:#5E98E1;font-weight:bold;">Root</span></td>'."\n";
      echo '   </tr></table></div>'."\n";
      echo '   <div style="float:right;width:400px;"><table align="right" cellspacing="0" cellpadding="0"><tr>'."\n";
      echo '      <td valign="middle"><table cellspacing="0" cellpadding="0"><tr><td valign="middle"><a class="f_icon" style="margin:0 0 0 15px;" href="fsmanager.php?a=upload&dir='.$path.'"><img src="fsmanager/document_new.png" height="20" width="20" border="0" /></a></td><td valign="top"><a class="f_file" style="color:#333;" href="fsmanager.php?a=upload&dir='.$path.'">Uploader fichier</a></td></tr></table></td>'."\n";
      echo '      <td valign="middle"><table cellspacing="0" cellpadding="0"><tr><td valign="middle"><a class="f_icon" style="margin:0 0 0 15px;" href="fsmanager.php?a=mkdir&dir='.$path.'"><img src="fsmanager/folder_new.png" height="20" width="20" border="0" /></a></td><td valign="top"><a class="f_file" style="color:#333;" href="fsmanager.php?a=mkdir&dir='.$path.'">Nouveau dossier</a></td></tr></table></td>'."\n";
      echo '   </tr></table></div>'."\n";
      echo '</td>'."\n";
      echo '</tr>'."\n";
   }

   $folder = array();
   $dir_handle = @opendir($dir) or die("Unable to open $path");
   $i = 0;
   while($foldername = readdir($dir_handle)) { if($foldername != '.' && $foldername != '..' && $foldername != 'fsmanager' && is_dir($dir.$foldername) == true) { $folder[$i] = $foldername; $i++; } }
   array_multisort(array_map('strtolower', $folder), $folder);
   for($i=0; $i<sizeof($folder); $i++)
   {
      $ext = substr(strrchr($folder[$i], '.'), 1);
      $css_row++;
      echo '<tr class="f_row_s'.($css_row & 1).'">'."\n";
      echo '   <td class="f_row_td1" align="left" valign="middle" style="padding-top:1px;"><a class="f_icon" href="fsmanager.php?dir='.$path.$folder[$i].'/"><img src="fsmanager/folder.png" height="20" width="20" border="0" /></a></td>'."\n";
      echo '   <td class="f_row_td2" align="left" valign="top" style=""><a class="f_file" style="color:#333;" href="fsmanager.php?dir='.$path.$folder[$i].'/">'.substr($folder[$i], 0, 70).'</a></td>'."\n";
      echo '   <td class="f_row_td3" align="left" valign="top" style="padding-top:1px;text-align:right;"><a class="f_file" style="color:#333;" href="fsmanager.php?dir='.$path.$folder[$i].'/">'.file_byte(dirsize($path.$folder[$i])).'</a></td>'."\n";
      echo '   <td class="f_row_td4" align="left" valign="top" style="padding-top:1px;text-align:right;"><a class="f_file" style="color:#333;" href="fsmanager.php?dir='.$path.$folder[$i].'/">'.date("d.m.Y H:i", filemtime($path.$folder[$i])).'</a></td>'."\n";
      echo '   <td class="f_row_td5" align="left" valign="middle" style="padding-top:1px;text-align:right;"><a class="f_icon" href="fsmanager.php?a=rename&type=1&dir='.$dir.'&uri='.$path.$folder[$i].'/" title="Renommer dossier"><img src="fsmanager/edit_rename.png" width="18" height="18" border="0" /></a></td>'."\n";
      echo '   <td class="f_row_td6" align="left" valign="middle" style="padding-top:1px;text-align:right;"><a class="f_icon" href="fsmanager.php?exec=unlink&type=1&dir='.$dir.'&uri='.$path.$folder[$i].'/" title="supprimer dossier"><img src="fsmanager/edit_delete.png" width="16" height="16" border="0" /></a></td>'."\n";
      echo '</tr>'."\n";
   }
   closedir($dir_handle);
   $file = array();
   $dir_handle = @opendir($dir) or die("Unable to open $path");
   $i = 0;
   while($filename = readdir($dir_handle)) { if($filename != '.' && $filename != '..' && $filename != 'fsmanager.php' && is_dir($dir.$filename) != true) { $file[$i] = $filename; $i++; } }
   array_multisort(array_map('strtolower', $file), $file);
   for($i=0; $i<sizeof($file); $i++)
   {
      $ext = substr(strrchr($file[$i], '.'), 1);
      $css_row++;
      echo '<tr class="f_row_s'.($css_row & 1).'">'."\n";
      echo '   <td class="f_row_td1" align="left" valign="middle"><a class="f_icon" href="'.$path.$file[$i].'" target="_BLANK"><img src="fsmanager/'.strtolower($ext).'.png" height="20" width="20" border="0" /></a></td>'."\n";
      
      $w = pathinfo($path.$file[$i]);
      $extensionfichier = $w['extension'];
      $extensionnonimg= array('jpg','jpeg','png','gif');
      $extensionicone = array('pdf','zip','pps','ppt','xls','doc','docx','rtf','txt','xlsx');
      $onclick= '';
if (in_array($w['extension'],$extensionnonimg )) { 
$onclick= "window.parent.ajouteimg(this.href);" ;

}
elseif(in_array($w['extension'],$extensionicone)) {
$onclick= "window.parent.ajoutefichier(\"" . '<a style=\'display:inline-block;height:40px; line-height:40px\' href="+this.href+"><img style=\'width:40px;height:40px\' src=\'img/'.$extensionfichier.'.png\'/><span style=\'vertical-align:top;display:inline-block; margin-left:5px;text-decoration:underline;\'>'.$file[$i].'</span></a><span>&nbsp;</span><br/>' . "\");" ;
$onclick=htmlentities($onclick);
}
else {
$onclick= "window.parent.ajoutefichier(\"" . '<a style=\'display:inline-block;height:40px; line-height:40px\' href="+this.href+">'.$file[$i].'</a><br/>' . "\");" ;

$onclick=htmlentities($onclick);


}


            echo '   <td class="f_row_td2" align="left" valign="top" style="padding-top:1px;"><a onclick="'.$onclick.';return false;" class="f_file" style="color:#333;" href="'.$path.$file[$i].'" target="_BLANK">'.substr($file[$i], 0, 70).'</a></td>'."\n";









      echo '   <td class="f_row_td3" align="left" valign="top" style="padding-top:1px;text-align:right;"><a class="f_file" style="color:#333;" href="'.$path.$file[$i].'" target="_BLANK">'.file_byte(filesize($path.$file[$i])).'</a></td>'."\n";
      echo '   <td class="f_row_td4" align="left" valign="top" style="padding-top:1px;text-align:right;"><a class="f_file" style="color:#333;" href="'.$path.$file[$i].'" target="_BLANK">'.date("d.m.Y H:i", filemtime($path.$file[$i])).'</a></td>'."\n";
      echo '   <td class="f_row_td5" align="left" valign="middle" style="padding-top:1px;text-align:right;"><a class="f_icon" href="fsmanager.php?a=rename&type=2&dir='.$dir.'&uri='.$path.$file[$i].'/" title="Renommer fichier"><img src="fsmanager/edit_rename.png" width="18" height="18" border="0" /></a></td>'."\n";
      echo '   <td class="f_row_td6" align="left" valign="middle" style="padding-top:1px;text-align:right;"><a class="f_icon" href="fsmanager.php?exec=unlink&type=2&dir='.$dir.'&uri='.$path.$file[$i].'" title="Delete file"><img src="fsmanager/edit_delete.png" width="16" height="16" border="0" /></a></td>'."\n";
      echo '</tr>'."\n";

   }
   closedir($dir_handle);
   echo '</table>'."\n";

}

?>
</div></div>
</div></div>
</div></div></div>
</div>
</body>
</html>
