<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#example_dlg.title}</title>
	<script type="text/javascript" src="../../tiny_mce_popup.js"></script>
	<script type="text/javascript" src="js/dialog.js"></script>

	<script type="text/javascript">

	function ajouteimg(t) {

tinyMCE.execCommand('mceInsertContent',false,'<img src="'+t+'"/>');


	}
	function ajoutefichier(t) {

tinyMCE.execCommand('mceInsertContent',false,t);

}


	</script>
</head>
<body>


<?php


error_reporting(E_ALL);
ini_set('display_errors','On');
function stripAccents($string){
	return strtr($string,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ',
'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
}




 $uploadpath =  '../../../../img/news/';

if (isset($inutile_car_mis_a_jour_autrement)) { 
if (isset($_POST['file_name'])) { echo 'Ok !' ;}
if (isset($_FILES['file_name'])) {

#// Vérification type de fichier. On interdit forcément le .php.

$file = $_FILES['file_name']['name'] ;
echo $file;
	$w = pathinfo($file);
$w =  $w['extension'];
$extensionautorisee = array('jpg','jpeg','gif','png','zip','pdf');
if (in_array($w,$extensionautorisee)) { echo '<br>Type de format valide.<br>'; }
else { die('Erreur type de format non autorisé.') ;}
$finaldest = $uploadpath . stripAccents($_FILES['file_name']['name']) ;
$finaldestb = str_replace('../','',$finaldest);
echo $finaldestb;
if ($w =='jpg' || $w=='jpeg' | $w=='gif' || $w=='png') {

$rendufinal = "<img src='$finaldestb' style='max-width:450px'/>";
}
else { 
if ($w=='pdf') { $styleicone = '<img style=\'width:32px\' src=\'img/pdf.png\'/>' ; }


	$rendufinal ="<br/><a href='$finaldest'>$styleicone". $_FILES['file_name']['name'] . "</a><br/>"; }
	
$move = move_uploaded_file($_FILES['file_name']['tmp_name'], $finaldest);

if (!$move) {
echo "<br/>Erreur : Le fichier n'a pas pu être uploadé.<br/>";
}

else {
echo "
<script type='text/javascript'>
tinyMCE.execCommand('mceInsertContent',false,\"$rendufinal\");
</script>
";
}



}
?>
Ajouter ici un fichier à mettre dans l'actualité.<br/>



<form method="post" ENCTYPE="multipart/form-data">
	 <input type="file" name="file_name" align="center" enctype="multipart/form-data">

<br/><input type="submit" value='Ajouter le fichier'>
</form>

<hr style="color:blue;width:90%; margin-top:30px"/>

<?php
} # $inutile_car_mis_a_jour_autrement

?>
Explorateur de fichiers<br/>
<iframe style="width:100%;height:700px" src="fsmanager/fsmanager.php">


</iframe>


<?php

function listFolderFiles($dir,$exclude){
    $ffs = scandir($dir);
    echo '<ul class="ulli">';
    foreach($ffs as $ff){
        if(is_array($exclude) and !in_array($ff,$exclude)){
            if($ff != '.' && $ff != '..'){
            if(!is_dir($dir.'/'.$ff)){
            echo '<li><a href="edit_page.php?path='.ltrim($dir.'/'.$ff,'./').'">'.$ff.'</a>';
            } else {
            echo '<li>'.$ff;   
            }
            if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff,$exclude);
            echo '</li>';
            }
        }
    }
    echo '</ul>';
} 


?>
</body>
</html>


