<?php
# /!\ Important : /!\


// L'autoloader.
spl_autoload_register(function ($class_name) {
        if (file_exists("./classe-".$class_name . '.php'))
    include "./classe-".$class_name . '.php';
elseif(file_exists("./class/class_".$class_name.'.php'))
{
    include "./class/class_".$class_name.'.php';

}
elseif(file_exists("./ro/class/class_".$class_name.'.php'))
{
    include "./ro/class/class_".$class_name.'.php';
}
        elseif(file_exists("./ro/class/".$class_name.'.php'))
        {
            include "./ro/class/".$class_name.'.php';
        }
});

function joli_nombre($t=null)
{

return $t;
return @number_format($t, 2, '.', ' ');


}


function joli_prix($t=null)
{
return number_format($t, 2, ',', ' ');
}
function joli_prix_pt($t=null)
{
    return number_format($t, 2, '.', ' ');

}

 function help_notice($t=null,$p=null,$params=null)
{
$url = $params['url'];
$url_projet=lien_projet;
$t_message = techo("Une notice d'utilisation a été créée pour ce module. Vous pouvez la consulter à cette adresse :");
$t_lire=techo("Consulter la notice");
$txt = <<<HTML
<div class='grid help_notice notification info'>
  <div class='col-1-12'>
  <img src='$url_projet/img/manual.png' class='img-responsive'/>
  </div>
  <div class='col-11-12'>
  $t_message<br/>
  <a href='$url' class='btn btn-default icon-help'>$t_lire</a>
  </div>
</div>

HTML;
return $txt;

}


function rempty($t=null)
{

if (is_array($t) && count($t) >0) 
    {
    return true ;
    }    
elseif (is_array($t) && count($t) <=0) 
    {
    return false;   
    } 

$t = str_replace(array(" ",'.'),'',$t);
if (isset($t) && $t=='0') { return true ; }
if (empty($t)) { return false ; }
return true ; 


}

function oterAccents($str) {
$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
$str = strtr( $str, $unwanted_array );
return $str;
} 

function majuscule ($t)
{
  return strtoupper(oterAccents($t));
}

function curPageURL() {
 $pageURL = 'http';
 if (isset($_SERVER["HTTPS"]) && $_SERVER['HTTPS'] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

function definition_lang_sql($lang='fr',$preg=true)
{
$rsql = v_traduction::get_traduction($lang);
if (!isset($rsql['0'])) { return false; }
$lang_final =null;
foreach($rsql as $k)
        {
$lang_final[$k['tk_key']]=$k['td_value'];
        }
// if ($_SESSION['login']=='d-masson@hexaplus.fr') { print_r($rsql); echo count($rsql); print_r($lang_final) ; die(); }

return $lang_final;

}


function definition_lang($lang='fr',$preg=true) 
{

$lang_path = realpath(dirname(__FILE__)) . '/../lang/';
//$lang ='fr';
if (!file_exists($lang_path.$lang.'.csv')) {  return false;  }

$row = 1;
if (($handle = fopen($lang_path.$lang.'.csv', "r")) !== FALSE) {
    $i = -1;

    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
$i++;
if ($data['1']=='' || $data['2']=='') { continue  ; }
$lang_mot[$i] = '/'.$data['1'].'/';
$lang_traduction[$i] = '/'.strtoupper($data['2']).'/';
if ($preg===true) 
{
$lang_final['/'.$data['1'].'/is'] = $data['2'];
}
else
{
$lang_final[$data['1']] = $data['2'];

}
    }
    fclose($handle);
}
$keys = array_map('strlen', array_keys($lang_final));
array_multisort($keys, SORT_DESC, $lang_final);
return $lang_final;

}
function process($node, $replaceRules) {
    if($node->hasChildNodes()) {
        $nodes = array();
        foreach ($node->childNodes as $childNode) {
            $nodes[] = $childNode;
        }
        foreach ($nodes as $childNode) {
            if ($childNode instanceof DOMText) {
                $text = preg_replace(
                    array_keys($replaceRules),
                    array_values($replaceRules),
                    $childNode->wholeText);
                $node->replaceChild(new DOMText($text),$childNode);
            }
            else {
                process($childNode, $replaceRules);
            }
        }
    }
}
function translate_ajax($t=null)
{
$hlang = Config::read('hlang');


return $t[1] . strtr($t[2], $hlang) . $t[3];

}

function techo($t,$utf8=false)
{
  //$_='techo';
    //{$_("Le code client")}

    if ( (!isset($_SESSION['lang'])) &&  (!defined('langue') || langue=='fr')) { return $t ; }
$thlang = Config::read('thlang');  
if (empty($thlang))
{ 
$thlang = definition_lang_sql(langue,false); 

Config::write('thlang', $thlang);
}

//$t = str_replace(array('&eacute;','&ucirc;','&acirc;','&eacute;','&ucirc;','&ccedil;','&egrave;'),array('é','ù','â','à','é','û','ç','è'),$t);

if (isset($thlang[$t]) && !empty($thlang[$t])) { return $thlang[$t] ;}
$debug = @debug_backtrace();
$page = (isset($debug[1]['file']) && isset($debug[1]['line'])) ? basename($debug[1]['file']) . ' ' . $debug[1]['line'] : null; 
//if (!isset($thlang[$t])) {v_traduction::add_key(null,array('tk_key'=>$t,'tk_page'=>$page));}
// On désactive l'auto learn
return $t ;
return str_replace(array_keys($thlang), array_values($thlang), $t);

}




function strtr_utf8($str, $from, $to) {
    $keys = array();
    $values = array();
    preg_match_all('/./u', $from, $keys);
    preg_match_all('/./u', $to, $values);
    $mapping = array_combine($keys[0], $values[0]);
    return strtr($str, $mapping);
}








function duration($seconds, $max_periods=10000) {
    $periods = array('année' => 31536000, 'mois' => 2419200, 'semaine' => 604800, 'jour' => 86400, 'heure' => 3600, 'minute' => 60, 'seconde' => 1);
    $i = 1;
    foreach ( $periods as $period => $period_seconds ) {
        $period_duration = floor($seconds / $period_seconds);
        $seconds = $seconds % $period_seconds;
        if ( $period_duration == 0 ) continue;
        $duration[] = $period_duration .' '. $period . ($period_duration > 1 ? 's' : '');
        $i++;
        if ( $i > $max_periods ) break;
    }
    if (!isset($duration) ||is_null($duration)) return '0 m';
    return implode(' ', $duration);
}


    function surligner($mot, $texte, $couleur='yellow') {


$x = preg_replace("/[^0-9a-zA-Z]/","", $mot);
$x = explode(" ",$mot);

foreach($x as $k) {

    $mot_motif = '`('.$k.')`i';
    $mot_sortie = '<span style=\'background-color:'.$couleur.';\'>'.$k.'</span>';
    $texteSurligne = preg_replace($mot_motif, $mot_sortie, $texte);
$texte = $texteSurligne;

}
    return $texteSurligne;



    }


function aleatoirestring($length=10) {
    $original_string = array_merge(range(0,9), range('a','z'), range('A', 'Z'));
    $original_string = implode("", $original_string);
    return substr(str_shuffle($original_string), 0, $length);
}






 function iso_decode ($var)
 {
    $ret = htmlspecialchars($var);
    $ret = str_replace("&agrave;","à" ,$ret);
    $ret = str_replace("&acirc;","â", $ret);
    $ret = str_replace("&#64;","@", $ret);
    $ret = str_replace("&egrave;","è" ,$ret);
    $ret = str_replace("&eacute;","é", $ret);
    $ret = str_replace("&ecirc;","ê" ,$ret);
    $ret = str_replace("&euml;","ë" ,$ret);
    $ret = str_replace("&euro;","¤" ,$ret);
    $ret = str_replace("&icirc;","î" ,$ret);
    $ret = str_replace("&ouml;","ö" ,$ret);
    $ret = str_replace("&ucirc;","û", $ret);
    $ret = str_replace("&ugrave;","ù", $ret);
    $ret = str_replace("&ccedil;","ç", $ret);
    $ret = str_replace("&quot;","\"" ,$ret);
    $ret = str_replace("&lt;","<" ,$ret);
    $ret = str_replace("&gt;",">", $ret);
    return($ret);
 }


function FichierDistantExiste($url) {
   if(!@fopen($url, 'r')) return false;
   else return true;
}


function wordlimit($string, $length = 50, $ellipsis = "[..]")
{
   $words = explode(' ', $string);
   if (count($words) > $length)
       return implode(' ', array_slice($words, 0, $length)) . $ellipsis;
   else
       return $string;
} 

function logit($t=null) {
if (!is_array($t)) { return false ; }
if (!isset($t['type']) || !isset($t['action']) || !isset($t['ref'])) { return false ;}
$nom_fichier = date('Y-m-d') . '-log.txt';
$action = str_replace(array("\t","\n"),'',$t['action']);
$file = @fopen("logit_contenu/$nom_fichier","a+");
$login =  (isset($_SESSION['login'])) ? $_SESSION['login'] : '?';
$ref = trim($t['ref']) . " || ";
$var = date("H:i:s") . " || ". $t['type'] . " || " . "$ref$action" . " || " . $login . "\r\n";
@fwrite($file,$var);
@fclose($file);
}




function droit($t)
{
if  (!isset($_SESSION['login']) || !isset($_SESSION['group'])) { return false; }
    if (!isset($t)) { return false ;}

if (  in_array($_SESSION['group'],$t)) { return true; }

if (in_array('superadmin',$t))
{
    $super_utilisateur = icfg('super_utilisateur'); # Chargement des super utilisateur.
    $super_utilisateur = explode('|', $super_utilisateur); # Séparé par des | login@email.fr|login2@email.fr etc
    if (isset($_SESSION['login']) && in_array($_SESSION['login'],$super_utilisateur)) { # Est un super utilisateur.
        return true;
    }
}



}
function droit_filiale($t) {


if  (!isset($_SESSION['filiale']) || !isset($_SESSION['filiale'])) { return false; }
    if (!isset($t)) { return false ;}
if (!is_array($_SESSION['filiale'])) { return false ;}
if (!is_array($t)) { return false ;}
foreach($t as $k)
{
  if (in_array($k, $_SESSION['filiale']))  {
        return true;
  }
    
}

return false ;
}
function droit_sous($t) {

if  (!isset($_SESSION['login']) || !isset($_SESSION['group_sous'])) { return false; }
    if (!isset($t)) { return false ;}
if (  in_array($_SESSION['group_sous'],$t)) { return true; }
return false;

}


function droit_spec($t=null)
{
if  (empty($t)) { return false ; }
    $tableau =$_SESSION['droit_spec_tab'];
    if ( !is_array($t) && isset($tableau[$t]))
    {
     return true ;
    }
    if (is_array($t))
    {
        foreach($t as $k)
        {

            if (isset($tableau[$k])) {  return true ; }
        }

    }
return false ;


}


function droit_spec_tab($t=null)
{
    if (empty($t)) { return null ; }
    $x = explode('|',$t );
    $tableau =null;


    foreach($x as $k)
    {
        $tableau[$k]=true;
    }

    return $tableau ; 
}




function clean($t)
{
$t = strip_tags($t);
return $t;

}

function taille_dossier($path) {
    $total_size = 0;
    $files = @scandir($path);
    $cleanPath = @rtrim($path, '/'). '/';
if (is_array($files)) {
    foreach($files as $t) {
        if ($t<>"." && $t<>"..") {
            $currentFile = $cleanPath . $t;
            if (is_dir($currentFile)) {
                $size = taille_dossier($currentFile);
                $total_size += $size;
            }
            else {
                $size = @filesize($currentFile);
                $total_size += $size;
            }
        }   
    }
}
    return $total_size;
}





function code_postal($t=null) {
if (!is_numeric($t)) { return $t; }
if (strlen($t) ==4) { return '0'.$t ;}


}
// Lis les configurations globales
function icfg($t,$table=null) {
$t = myr($t);
if ($table=='hs' || $table=='hexastat') {
$sql_cfg_stock = "SELECT * FROM hs_meta_config WHERE hs_mc_nom='$t' LIMIT 1";
$rsql_cfg_stock = maquerysql($sql_cfg_stock);

if (isset($rsql_cfg_stock[0]['hs_mc_var'])) { return $rsql_cfg_stock[0]['hs_mc_var'] ; }
else { return false ;}
}
$rsql = maquerysql("SELECT var_meta_config FROM meta_config WHERE nom_meta_config='$t' LIMIT 1");
if (isset($rsql[0]['var_meta_config'])) { return $rsql[0]['var_meta_config'] ; }
else { return false ;}

}

function date_slash_vers_sql($t=null) {
preg_match('#([0-9]{2})\/([0-9]{2})\/([0-9]{4})#i',$t,$m);   # On extrait une date qui est enregistrée de type 15-01-2012, soit jour-mois-année

if (isset($m[3])) { return $m[3] . '-' . $m[2] . '-'. $m[1] ; }
return $t ;

}
// Permet la mise à jour gestion de configuration système
function icfg_update($t=null,$contenu=null,$table=null) {
$t = myr($t);
$contenu = myr($contenu);





if (strlen($t) > 1) {

$sql ="INSERT INTO meta_config (`nom_meta_config`, `var_meta_config`) VALUES
('$t','$contenu')
ON DUPLICATE KEY UPDATE `var_meta_config`='$contenu';

";



//$sql ="UPDATE meta_config SET var_meta_config='$contenu' WHERE `nom_meta_config`='$t' LIMIT 1";
$rsql = maquerysql($sql);
return true ;
}
return false ;
}





function utf8_encode_array (&$array, $key) {
    if(is_array($array)) {
      array_walk ($array, 'utf8_encode_array');
    } else {
      $array = utf8_encode($array);
    }
}

function utf8_decode_array (&$array, $key) {
    if(is_array($array)) {
      array_walk ($array, 'utf8_decode_array');
    } else {
      $array = ($array);
    }
}
function datefr_new($t=null,$params=null) { return retournedatepropre($t,$params) ; }
function retournedatepropre($t=null,$params=null) {
$tmp = explode(" ",$t); 
if (!@isset($tmp[0])) { return false ;}
$t = $tmp[0];
if ($t=='') { return  ;} # Ca veut dire qu'on a une date de type NULL donc on retourne un gros vide.
preg_match('#([0-9]{4})-([0-9]{1,2})\-([0-9]{1,2})#i',$t,$x);	# On extrait une date qui est enregistrée de type 15-01-2012, soit jour-mois-année
if (!isset($x[2])) {  false; }
$valide = @checkdate($x[2],$x[3],$x[1]);
if ($valide != true) { return  false ; }
if ($x[3] <10 && strlen($x[3]) <2) { $x[3] = 0 . $x[3] ; }
$full = null;
if ( isset($params['full'])) { $full = ' ' . $tmp[1] ; }
return $x[3] . '-' . $x[2] . '-' . $x[1] . $full ;

}

function retournedatepropre_mois($t=null) {
$t = explode(" ",$t); 
if (!@isset($t[0])) { return false ;}
$t = $t[0];
if ($t=='') { return  ;} # Ca veut dire qu'on a une date de type NULL donc on retourne un gros vide.
preg_match('#([0-9]{4})-([0-9]{1,2})\-([0-9]{1,2})#i',$t,$x);   # On extrait une date qui est enregistrée de type 15-01-2012, soit jour-mois-année
if (!isset($x[2])) {  false; }


return  $x[2] . '-' . $x[1] ;

}
function retournedatepropre_mois_jours($t=null,$year=false,$heure=false) {

preg_match('#([0-9]{4})-([0-9]{1,2})\-([0-9]{1,2})#i',$t,$x);   # On extrait une date qui est enregistrée de type 15-01-2012, soit jour-mois-année
if (!isset($x[2])) {  false; }

$x[2] = str_replace(array('01','02','03','04','05','06','07','08','09','10','11','12'),array(techo("Janvier"),techo("Février"),techo("Mars"),techo("Avril"),techo("Mai"),techo("Juin"),techo("Juillet"),techo("Août"),techo("Septembre"),techo("Octobre"),techo("Novembre"),techo("Décembre")),$x[2]);

if($year===true && $heure===true) { $tmp = explode(" ",$t); $txt = $x[3] . ' ' . $x[2]  . ' ' . $x[1] . ' '.$tmp[1];}
elseif ($year==true) {  $txt= $x[3] . ' ' . $x[2]  . ' ' . $x[1]; }
else { $txt = $x[3] . ' ' . $x[2] ; }
return  $txt;

}

function utf8_converter($array)
{
    array_walk_recursive($array, function(&$item, $key){
        if(!mb_detect_encoding($item, 'utf-8', true)){
                $item = utf8_encode($item);
        }
    });
 
    return $array;
}
function utf8_deconverter($array)
{
    array_walk_recursive($array, function(&$item, $key){
        if(mb_detect_encoding($item, 'utf-8', true)){
                $item = ($item);
        }
    });
 
    return $array;
}

function alert($t) {

echo "alert(\"" . $t . "\");";

}

function convertLatin1ToHtml($str) {
    $html_entities = array (
        "&" =>  "&amp;",     #ampersand  
        "á" =>  "&aacute;",     #latin small letter a
        "Â" =>  "&Acirc;",     #latin capital letter A
        "â" =>  "&acirc;",     #latin small letter a
        "Æ" =>  "&AElig;",     #latin capital letter AE
        "æ" =>  "&aelig;",     #latin small letter ae
        "À" =>  "&Agrave;",     #latin capital letter A
        "à" =>  "&agrave;",     #latin small letter a
        "Å" =>  "&Aring;",     #latin capital letter A
        "å" =>  "&aring;",     #latin small letter a
        "Ã" =>  "&Atilde;",     #latin capital letter A
        "ã" =>  "&atilde;",     #latin small letter a
        "Ä" =>  "&Auml;",     #latin capital letter A
        "ä" =>  "&auml;",     #latin small letter a
        "Ç" =>  "&Ccedil;",     #latin capital letter C
        "ç" =>  "&ccedil;",     #latin small letter c
        "É" =>  "&Eacute;",     #latin capital letter E
        "é" =>  "&eacute;",     #latin small letter e
        "Ê" =>  "&Ecirc;",     #latin capital letter E
        "ê" =>  "&ecirc;",     #latin small letter e
        "È" =>  "&Egrave;",     #latin capital letter E
/*... sorry cutting because limitation of php.net ...
... but the principle is it ;) ... */
        "û" =>  "&ucirc;",     #latin small letter u
        "Ù" =>  "&Ugrave;",     #latin capital letter U
        "ù" =>  "&ugrave;",     #latin small letter u
        "Ü" =>  "&Uuml;",     #latin capital letter U
        "ü" =>  "&uuml;",     #latin small letter u
        "Ý" =>  "&Yacute;",     #latin capital letter Y
        "ý" =>  "&yacute;",     #latin small letter y
        "ÿ" =>  "&yuml;",     #latin small letter y
        "" =>  "&Yuml;",     #latin capital letter Y
    );

    foreach ($html_entities as $key => $value) {
        $str = str_replace($key, $value, $str);
    }
    return $str;
} 



function retournedateproprelongue($t=null) {
$t = explode(" ",$t); 
if (!@isset($t[0])) { return false ;}
$heure = $t[1];
$t = $t[0];
preg_match('#([0-9]{4})-([0-9]{1,2})\-([0-9]{1,2})#i',$t,$x);   # On extrait une date qui est enregistrée de type 15-01-2012, soit jour-mois-année
if (!isset($x[2])) {  false; }
$valide = checkdate($x[2],$x[3],$x[1]);
if ($valide != true) { return false; }
if ($x[3] <10 && strlen($x[3]) <2) { $x[3] = 0 . $x[3] ; }

return $x[3] . '-' . $x[2] . '-' . $x[1] . " " . $heure;

}

function retournedatesql($t=null) {
$t = explode(" ",$t); 
if (!@isset($t[0])) { return false ;}
$t = $t[0];
preg_match('#([0-9]{1,2})-([0-9]{1,2})\-([0-9]{4})#i',$t,$x);	# On extrait une date qui est enregistrée de type 15-01-2012, soit jour-mois-année
if (!isset($x[2])) { return false; }
$valide = checkdate($x[2],$x[1],$x[3]);
if ($valide != true) { return false; }
return $x[3] . '-' . $x[2] . '-' . $x[1] ;

}




function verifdatepropre($t=null) {

preg_match('#([0-9]{4})-([0-9]{1,2})\-([0-9]{1,2})#i',$t,$x);	# On extrait une date qui est enregistrée de type 15-01-2012, soit jour-mois-année
if ($x[2]) {
$valide = checkdate($x[2],$x[3],$x[1]);
if ($valide === true) {  return true  ; }
return false ;
}
else { return false ;}	


}
function highlight($t) {
echo "$('$t').effect('highlight',{},3000);\n";

}
function stripAccents($string){
	return strtr(strtolower($string),'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ+',
'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY-');
}

function simple_date_fr($t) {
$ra = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
if (langue=='es')
{
 $ra = array(techo('Janvier'),techo('Février'),techo('Mars'),techo('Avril'),techo('Mai'),techo('Juin'),techo('Juillet'),techo('Août'),techo('Septembre'),techo('Octobre'),techo('Novembre'),techo('Décembre'),techo('Lundi'),techo('Mardi'),techo('Mercredi'),techo('Jeudi'),techo('Vendredi'),techo('Samedi'),techo('Dimanche'));
}



$rab = array("January","February","March","April","May","June","July","August","September","October","November","December",'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
return str_replace($rab,$ra,$t);


}
function datesql($t=null) {
$t = explode(" ",$t); 
if (!@isset($t[0])) { return false ;}
$t = $t[0];
preg_match('#([0-9]{1,2})-([0-9]{1,2})\-([0-9]{4})#i',$t,$x); # On extrait une date qui est enregistrée de type 15-01-2012, soit jour-mois-année
if (!isset($x[2])) { return false; }
$valide = checkdate($x[2],$x[1],$x[3]);
if ($valide != true) { return false; }
return $x[3] . '-' . $x[2] . '-' . $x[1] ;

}

function datediffInWeeks($date1, $date2)
{
    if($date1 > $date2) return datediffInWeeks($date2, $date1);
    $first = DateTime::createFromFormat('Y-m-d', $date1);
    $second = DateTime::createFromFormat('Y-m-d', $date2);
    return floor($first->diff($second)->days/7);
}





function datefr($date,$noarray=false) { # Fonction rapide pour convertir la date sql en quelque chose de français

$date = explode('-',$date);
$mois = array('','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
if (!isset($date[1])) { return false;}
if ($date[1] <10 ) { $date[1] = substr($date[1],0,1); }
if ($noarray===true) {return  @substr($date[2],0,2) . ' ' . $mois[$date[1]] . ' ' . $date[0] ; }
return array(@substr($date[2],0,2),$mois[$date[1]],$date[0]) ;
}

function datefrn($date) { # Fonction rapide pour convertir la date sql en quelque chose de français
if (!isset($date)) { return ;}  
$date = explode('-',$date);
$mois = array('','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
if ($date[1]< 10 && strlen($date[1]) ==2) { $date[1] = substr($date[1],1);  }
return @array(substr($date[2],0,2),$mois[$date[1]],$date[0]) ;
}
function isint( $mixed )
{
    return ( preg_match( '/^\d*$/'  , $mixed) == 1 );
}
function jolilien($str)
{
	if($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
		$str = @mb_convert_encoding($str, 'UTF-8', @mb_detect_encoding($str));
	$str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
	$str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\\1', $str);
	$str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
	$str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
	$str = strtolower( trim($str, '-') );
	return $str;
}

function n($t) {


return iconv("UTF-8", "CP1252", $t);

}

function jse($t) {

return json_encode(utf8_encode(substr($t,1,-1)));

}
// Alias du json_encode, qui permet de préparer / gérer d'eventuels problemes avec l'UTF8
function jseb($t) {

return json_encode($t, JSON_INVALID_UTF8_IGNORE);

}
function esa($t,$max=15000) {

return escape_query(htmlspecialchars(substr($t,0,$max),ENT_HTML401,'ISO-8859-15'));

}
function myr($t=null) { return mysql_escape_mimic($t); }
function mysql_escape_mimic($inp) {
    if(is_array($inp))
        return array_map(__METHOD__, $inp);

    if(!empty($inp) && is_string($inp)) {
        return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
    }

    return $inp;
} 
function escape_query($str) {
    return strtr($str, array(
        "\0" => "",
        "'"  => "&#39;",
        "\"" => "&#34;",
        "\\" => "&#92;",
        // more secure
       // "<"  => "&lt;",
        //">"  => "&gt;",
    ));
}
// Variante deprecated de maquery_sql
function maquerysql($sql=null,$parametre=null) {
$x = maquery_sql(null,$sql,null,null,$parametre);
return $x;
}


function convertArrayKeysToUtf8( $array) {
    $convertedArray = array();
    foreach($array as $key => $value) {
      if(!mb_check_encoding($key, 'UTF-8')) $key = utf8_encode($key);
      if(is_array($value)) $value = convertArrayKeysToUtf8($value);

      $convertedArray[$key] = $value;
    }
    return $convertedArray;
  } 
function utf8DecodeArray($array) {
    $utf8DecodedArray = array();
   
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $utf8DecodedArray[$key] = utf8DecodeArray($value);
            continue;
        }
       
        $utf8DecodedArray[$key] = ($value);
    }
   
    return $utf8DecodedArray;
}

function randalpha($length){

    $rangeMin = pow(36, $length-1); //smallest number to give length digits in base 36
    $rangeMax = pow(36, $length)-1; //largest number to give length digits in base 36
    $base10Rand = mt_rand($rangeMin, $rangeMax); //get the random number
    $newRand = base_convert($base10Rand, 10, 36); //convert it
   
    return $newRand; //spit it out

} 


function quel_navigateur()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
   $ub='MSIE';
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
   
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= (isset($matches['version'][1])) ? $matches['version'][1] : '' ;
        }
    }
    else {
        $version= $matches['version'][0];
    }
   
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
} 




function get_ip(){ 
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){ 
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];} 
elseif(isset($_SERVER['HTTP_CLIENT_IP'])){ 
$ip = $_SERVER['HTTP_CLIENT_IP'];} 
else{ $ip = $_SERVER['REMOTE_ADDR'];} 
return $ip;} 

function detect_os(){$a=$_SERVER['HTTP_USER_AGENT'];if (preg_match('#windows\snt\s5\.1#i',$a))return('Microsoft Windows XP');if (preg_match('#linux\sx86_64#i',$a))return('Linux (64 bits)');if (preg_match('#khtml#i',$a))return('Linux');if (preg_match('#linux#i',$a))return('Linux');if (preg_match('#libwww-fm#i',$a))return('Linux');if (preg_match('#freebsd#i',$a))return('FreeBSD');if (preg_match('#mac\sos\sx#i',$a))return('Mac OS X');if (preg_match('#windows\snt\s6\.1#i',$a))return('Microsoft Windows 7');if (preg_match('#haiku#i',$a))return('Haiku');if (preg_match('#windows\snt\s6\.0;\swow64#i',$a))return('Microsoft Windows Vista (64bits)');if (preg_match('#windows\snt\s6\.0;\swin64#i',$a))return('Microsoft Windows Vista (64bits)');if (preg_match('#windows\snt\s6\.0#i',$a))return('Microsoft Windows Vista');if (preg_match('#sunos#i',$a))return('Open Solaris');if (preg_match('#android#i',$a))return('Android');if (preg_match('#windows\s95#i',$a))return('Microsoft Windows 95');if (preg_match('#windows\snt\s5\.0#i',$a))return('Microsoft Windows 2000');if (preg_match('#windows\snt\s5\.3#i',$a))return('Microsoft Windows Server 2003');if (preg_match('#windows\snt#i',$a))return('Microsoft Windows NT');if (preg_match('#windows\s98#i',$a))return('Microsoft Windows 98');if (preg_match('#windows\sce#i',$a))return('Microsoft Windows Mobile');if (preg_match('#windows\sphone\sos[\s\/]([0-9v]{1,7}(?:\.[0-9a-z]{1,7}){0,7})#i',$a,$c))return('Microsoft Windows Phone version '.$c[1]);if (preg_match('#mac_powerpc#i',$a))return('Mac OS X');if (preg_match('#macintosh#i',$a))return('Macintosh');if (preg_match('#cygwin_nt#i',$a))return('Microsoft Windows 2000');if (preg_match('#os\/2#i',$a))return('Microsoft OS/2');if (preg_match('#symbianos[\s\/]([0-9v]{1,7}(?:\.[0-9a-z]{1,7}){0,7})#i',$a,$c))return('Symbian OS version '.$c[1]);if (preg_match('#symbian-crystal[\s\/]([0-9v]{1,7}(?:\.[0-9a-z]{1,7}){0,7})#i',$a,$c))return('Symbian OS version '.$c[1]);if (preg_match('#offbyone;\swindows\s2000#i',$a))return('Microsoft Windows XP');if (preg_match('#windows\s2000#i',$a))return('Microsoft Windows 2000');if (preg_match('#nintendo\swii#i',$a))return('Nintendo Wii');if (preg_match('#playstation\sportable#i',$a))return('PlayStation Portable');if (preg_match('#iphone\sos\s[\s\/]([0-9v]{1,7}(?:[\._][0-9a-z]{1,7}){0,7})#i',$a,$c))return('iPhone OS version '.$c[1]);return 'OS non identifié';}


function getOS($userAgent) {
  // Create list of operating systems with operating system name as array key 
    $oses = array (
        'iPhone' => '(iPhone)',
        'ios' =>'(ios)',
        'Windows 3.11' => 'Win16',
        'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)', // Use regular expressions as value to identify operating system
        'Windows 98' => '(Windows 98)|(Win98)',
        'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
        'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
        'Windows 2003' => '(Windows NT 5.2)',
        'Windows Vista' => '(Windows NT 6.0)|(Windows Vista)',
        'Windows 7' => '(Windows NT 6.1)|(Windows 7)',
        'Windows 8' =>'(Windows 8)',
        'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
        'Windows ME' => 'Windows ME',
        'Open BSD'=>'OpenBSD',
        'Sun OS'=>'SunOS',
        'Linux'=>'(Linux)|(X11)',
        'Safari' => '(Safari)',
        'Macintosh'=>'(Mac_PowerPC)|(Macintosh)',
        'QNX'=>'QNX',
        'BeOS'=>'BeOS',
        'OS/2'=>'OS/2',
        'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)'
    );

    foreach($oses as $os=>$pattern){ // Loop through $oses array
    // Use regular expressions to check operating system type
        if(preg_match("#$pattern#i", $userAgent)) { // Check if a value in $oses array matches current user agent.
            return $os; // Operating system was matched so return $oses key
        }
    }
    return 'Unknown'; // Cannot find operating system so return Unknown
}


function trouveuneimagedansletexte($t) {
preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $t, $m); # Dans un premier temps on recherche dans le contenu si une image est présente.
if (!isset($m[1]) or substr($m[1],-7) =='pdf.png') { # S'il n'y en a pas, on part à la recherche d'un éventuel lien pdf.

preg_match_all('/< *a[^>]*href *= *["\']?([^"\']*)/i', $t, $m); # Dans un premier temps on recherche dans le contenu si une image est présente.
$i = 0 ;
//print_r($m);


while (isset($m[1][$i])) {
if (substr($m[1][$i],-3) =='pdf') { # C'est qu'on a ce lien pdf
$m[1][$i] = str_replace("%20"," ",$m[1][$i]) ;
$futurnom = 'img/news/miniatures/'  .basename($m[1][$i],'pdf') .'-'. rand(1,99999) . '.png';
    pdftopng(str_replace('/lvmoffice/','',$m[1][$i]),$futurnom) ;
    $m[1] = $futurnom; 
    break;
}
$i++;

}
}
return $m ;

}

function pdftopng($lienpdf,$lienimg) {
$im = new Imagick($lienpdf);
$im->setIteratorIndex(0);
$im->setCompression(Imagick::COMPRESSION_LZW);
$im->setCompressionQuality(90);
$im->writeImage($lienimg);


}
function textecontenupropre($t) {


return strip_tags($t,'<br><b><p><em><u><b><a><img><table><tr><td><strong><font><span><iframe>') ;
}

function sani($t=null)
{
return htmlspecialchars($t,ENT_QUOTES, 'UTF-8');

}


















function nbjours($debut, $fin) { // NbJours("2000-10-20", "2000-10-21") retourne 2
$debut = explode(" ",$debut); $debut=$debut[0];
$fin = explode(" ",$fin); $fin = $fin[0];
  $tDeb = explode("-", $debut);

  $tFin = explode("-", $fin);
if ($tFin[1] < 1 || $tDeb[1] < 1) { return false ;}
  $diff = mktime(0, 0, 0, $tFin[1], $tFin[2], $tFin[0]) - 
          mktime(0, 0, 0, $tDeb[1], $tDeb[2], $tDeb[0]);
  
  return(($diff / 86400)+1);

}

// Détecte internet explorer
function detect_ie()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        return true;
    else
        return false;
}




function retourne_departement($i=null) {
$i = strip_tags($i);
$depts = array();
$depts["01"] = "Ain";
$depts["02"] = "Aisne";
$depts["03"] = "Allier";
$depts["04"] = "Alpes de Haute Provence";
$depts["05"] = "Hautes Alpes";
$depts["06"] = "Alpes Maritimes";
$depts["07"] = "Ardèche";
$depts["08"] = "Ardennes";
$depts["09"] = "Ariège";
$depts["10"] = "Aube";
$depts["11"] = "Aude";
$depts["12"] = "Aveyron";
$depts["13"] = "Bouches du Rhône";
$depts["14"] = "Calvados";
$depts["15"] = "Cantal";
$depts["16"] = "Charente";
$depts["17"] = "Charente Maritime";
$depts["18"] = "Cher";
$depts["19"] = "Corrèze";
$depts["2A"] = "Corse du Sud";
$depts["2B"] = "Haute Corse";
$depts["21"] = "Côte d'Or";
$depts["22"] = "Côtes d'Armor";
$depts["23"] = "Creuse";
$depts["24"] = "Dordogne";
$depts["25"] = "Doubs";
$depts["26"] = "Drôme";
$depts["27"] = "Eure";
$depts["28"] = "Eure et Loir";
$depts["29"] = "Finistère";
$depts["30"] = "Gard";
$depts["31"] = "Haute Garonne";
$depts["32"] = "Gers";
$depts["33"] = "Gironde";
$depts["34"] = "Hérault";
$depts["35"] = "Ille et Vilaine";
$depts["36"] = "Indre";
$depts["37"] = "Indre et Loire";
$depts["38"] = "Isère";
$depts["39"] = "Jura";
$depts["40"] = "Landes";
$depts["41"] = "Loir et Cher";
$depts["42"] = "Loire";
$depts["43"] = "Haute Loire";
$depts["44"] = "Loire Atlantique";
$depts["45"] = "Loiret";
$depts["46"] = "Lot";
$depts["47"] = "Lot et Garonne";
$depts["48"] = "Lozère";
$depts["49"] = "Maine et Loire";
$depts["50"] = "Manche";
$depts["51"] = "Marne";
$depts["52"] = "Haute Marne";
$depts["53"] = "Mayenne";
$depts["54"] = "Meurthe et Moselle";
$depts["55"] = "Meuse";
$depts["56"] = "Morbihan";
$depts["57"] = "Moselle";
$depts["58"] = "Nièvre";
$depts["59"] = "Nord";
$depts["60"] = "Oise";
$depts["61"] = "Orne";
$depts["62"] = "Pas de Calais";
$depts["63"] = "Puy de Dôme";
$depts["64"] = "Pyrénées Atlantiques";
$depts["65"] = "Hautes Pyrénées";
$depts["66"] = "Pyrénées Orientales";
$depts["67"] = "Bas Rhin";
$depts["68"] = "Haut Rhin";
$depts["69"] = "Rhône";
$depts["70"] = "Haute Saône";
$depts["71"] = "Saône et Loire";
$depts["72"] = "Sarthe";
$depts["73"] = "Savoie";
$depts["74"] = "Haute Savoie";
$depts["75"] = "Paris";
$depts["76"] = "Seine Maritime";
$depts["77"] = "Seine et Marne";
$depts["78"] = "Yvelines";
$depts["79"] = "Deux Sèvres";
$depts["80"] = "Somme";
$depts["81"] = "Tarn";
$depts["82"] = "Tarn et Garonne";
$depts["83"] = "Var";
$depts["84"] = "Vaucluse";
$depts["85"] = "Vendée";
$depts["86"] = "Vienne";
$depts["87"] = "Haute Vienne";
$depts["88"] = "Vosges";
$depts["89"] = "Yonne";
$depts["90"] = "Territoire de Belfort";
$depts["91"] = "Essonne";
$depts["92"] = "Hauts de Seine";
$depts["93"] = "Seine St Denis";
$depts["94"] = "Val de Marne";
$depts["95"] = "Val d'Oise";
$depts["97"] = "DOM";

if ( isset($depts[$i])) { return $depts[$i] ;}
else { return false ; }

}



function get_user_browser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $ub = '';
    if(preg_match('/MSIE/i',$u_agent))
    {
        $ub = "ie";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $ub = "firefox";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $ub = "safari";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $ub = "chrome";
    }
    elseif(preg_match('/Flock/i',$u_agent))
    {
        $ub = "flock";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $ub = "opera";
    }

    return $ub;
}





/* 
Gestion du divalert général (message d'erreur, de succès, etc.)
*/
function divalert($quoi,$texte,$ajax=null,$stable=null) {

if ($ajax===true) {
return  "divalert('$quoi',".jseb($texte).",'$stable');";

}
return  "<script>divalert('$quoi','".nl2br(addslashes($texte))."','$stable');</script>";


}



function color_brightness($hex, $percent) {
    // Work out if hash given
    $hash = '';
    if (stristr($hex,'#')) {
        $hex = str_replace('#','',$hex);
        $hash = '#';
    }
    /// HEX TO RGB
    $rgb = array(hexdec(substr($hex,0,2)), hexdec(substr($hex,2,2)), hexdec(substr($hex,4,2)));
    //// CALCULATE 
    for ($i=0; $i<3; $i++) {
        // See if brighter or darker
        if ($percent > 0) {
            // Lighter
            $rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1-$percent));
        } else {
            // Darker
            $positivePercent = $percent - ($percent*2);
            $rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1-$positivePercent));
        }
        // In case rounding up causes us to go to 256
        if ($rgb[$i] > 255) {
            $rgb[$i] = 255;
        }
    }
    //// RBG to Hex
    $hex = '';
    for($i=0; $i < 3; $i++) {
        // Convert the decimal digit to hex
        $hexDigit = dechex($rgb[$i]);
        // Add a leading zero if necessary
        if(strlen($hexDigit) == 1) {
        $hexDigit = "0" . $hexDigit;
        }
        // Append to the hex string
        $hex .= $hexDigit;
    }
    return $hash.$hex;
}












/*----------------------------------------------------------------
@return difference beetween 2 date in days. @begin,@end
*/
function difference_days($begin,$end)
{
    $earlier = new DateTime($begin);
    $later = new DateTime($end);
    
    $abs_diff = $later->diff($earlier)->format("%a"); //3
    return $abs_diff;
}








                                


// Redimensionne une image
function resize_image($filename, $newwidth, $newheight){
    list($width, $height) = getimagesize($filename);
    if($width > $height && $newheight < $height){
        $newheight = $height / ($width / $newwidth);
    } else if ($width < $height && $newwidth < $width) {
        $newwidth = $width / ($height / $newheight);   
    } else {
        $newwidth = $width;
        $newheight = $height;
    }
$info = pathinfo($filename);
$format = $info['extension'];
try {
if ($format=='jpg' || $format=='jpeg' || $format=='JPG') {
    $thumb = imagecreatetruecolor($newwidth, $newheight);
    $source = imagecreatefromjpeg($filename);
    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    return imagejpeg($thumb,$filename,95);
}
if ($format=='png' || $format=='PNG') {
    $thumb = imagecreatetruecolor($newwidth, $newheight);
    $source = imagecreatefrompng($filename);
    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    return imagepng($thumb,$filename,95);
}
}
 catch (Exception $e) {
return false;

}



return false; // pas d'image
}

/*
Créé une requête SQL.
@param $parametres : tableau associatif des paramètres SQL
@param $requete : requête SQL
@param $bdd : l'alias de la base de donnée, laisser vide dans le cas de la bdd de l'app
@param $cache : si on veut utiliser le cache ex array('duration'=>3600,'folder'=>'lecache')
@param $params : paramètres supplémentaires (

*/
function maquery_sql($parametres=null,$requete,$bdd=null,$cache=null,$params=null) {

$cache_it=false;
$cache_active=config::read('cache_sql');
$debug_sql = config::read('debug_sql');

if (defined("log_sql_perf") && log_sql_perf==true)
{
$log=true;
$microtime=microtime(true);
$microtime_start = microtime;

}



if (empty($requete)) {  return false ;}
$time_start = microtime(true);

if ($cache_active !== false &&  is_array($cache) && isset($cache['duration']) && isset($cache['folder']))
{

$parametres_serialize=serialize($parametres).$requete;

$cache_it = true;
$x = cache::read_cache($parametres_serialize,$cache);

if ($x!==false) { return unserialize($x) ; }
}


if ($bdd=='hexaplus')
{
    $core = CoreHexaplus::getInstance();
}

elseif ($bdd=='ext')
{
    $core = CoreExt::getInstance();
} 
elseif ($bdd == 'art' || $bdd == 'hexart') 
{
        $core = CoreArt::getInstance();
}
else {
$core = Core::getInstance();

}




$stmt = $core->dbh->prepare($requete);
if (is_array($parametres)) { 
foreach($parametres as $k=>&$v) {
$stmt->bindParam($k, $v);
}
                                }
$xag = $stmt->execute();



    if (  $xag===false && defined('is_test'))
    {
        $dbt=debug_backtrace();
        $caller = isset($dbt[1]['class']) ? $dbt[1]['class'] : null;
        $caller.= isset($dbt[1]['function']) ? $dbt[1]['function'] : null;


        echo "ERREUR SQL : " . $requete;
        echo "Caller : $caller";
    }

if (defined("log_sql_perf") && log_sql_perf==true)
{
    $duree = number_format(microtime(true) -  $microtime,3);
    $execution_total = number_format(microtime(true) -  $microtime_start,3);

    $txt = "<tr><td>" . nl2br($requete) . "</td><td> $duree </td><td>$execution_total</td></tr>";
    $filename=root_dir . "/zsqllog/" . "sql-" . md5(aujourdhui) . ".html";

    if (!file_exists($filename))
    {
        $url_projet=url_projet;;
        $txt = "<table class='table ltable mtable'><thead><tr><th>Requete</th><th>Durée</th><th>Total script</th></tr></thead><tbody>$txt";
    }
    file_put_contents($filename, $txt,FILE_APPEND);

}


$arr = $stmt->errorInfo();
    $nombre_erreur= Config::read('erreur_sql');
    Config::write('erreur_sql',$nombre_erreur+1);
    Config::write('last_sql_error',json_encode($arr));

if (!empty($arr['1']) && !$xag) {
    logit(array('type'=>'erreur_sql','ref'=>'ERRSQL','action'=>$requete));
    return false ;
}




if (substr($requete,0,6)==="SELECT") {
    // Si on veut un retour en object
    if (isset($params['object']))
    {
    $o = $stmt->fetchAll(PDO::FETCH_OBJ);
    
    }
    else 
    {    
    $o = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
if ($cache_it ===true) { 
cache::write_cache($parametres_serialize,serialize($o),$cache); }


if (!empty($_SESSION['login']) && $debug_sql==$_SESSION['login'])
{

$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
$time_start = microtime(true) - $time_start;
$root_path = root_path;
$file_log = "$root_path/logit_contenu/" . date('Y-m-d-H-i') . '-sql.txt';
$txt_log="_________________________________________________________
". PHP_EOL;
$txt_log.= "Requête : " . $requete . "
". PHP_EOL;
$txt_log.= "Tableau : " . @print_r($parametres,true) . "
" .PHP_EOL;
$txt_log.= "Durée d'éxecution : " . $time_start . PHP_EOL ."
";
$txt_log.= "Durée d'éxecution TOTALE : " . $time . PHP_EOL ."
";
$txt_log.="________________________________________________________
". PHP_EOL;
file_put_contents($file_log, $txt_log, FILE_APPEND );
}












return $o ;
}
if ( substr($requete,0,4)==="SHOW")
{
        $o = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $o ;


}
if (substr($requete,0,6)=="UPDATE") {
$count = $stmt->rowCount();
  
    return $count;
}


if (substr($requete,0,6)=="INSERT" || substr($requete,0,7)=="REPLACE" ) {



    $count = $stmt->rowCount();
    return $count;
}

if (substr($requete,0,6)=="DELETE") {
    $count = $stmt->rowCount();
    return $count;

}
}
// alias de print_rdebug
function pt($array)
{
    print_rdebug($array);
}

// Affiche un joli print_r plus aisément lisible sur navigateur
function print_rdebug($array){
    echo "<pre>".print_r($array,true)."</pre>";
}
// Retourne le dernier id mysql inséré. Des Base de donnée différentes existes pour l'exemple.
function maquery_lastid($bdd=null,$c=null) {


if ($bdd=='orthop')
{

$core = CoreOrthop::getInstance();

}
else if ($bdd=='orthop_ext')
{

$core = CoreOrthopExt::getInstance();

}
else {
$core = Core::getInstance();

}

      $lastId = $core->dbh->lastInsertId($c);

     return $lastId ;
}




function rglob($pattern='*', $flags = 0, $path='')
{
    $paths=glob($path.'*', GLOB_MARK|GLOB_ONLYDIR|GLOB_NOSORT);
    $files=glob($path.$pattern, $flags);
    foreach ($paths as $path) { $files=array_merge($files,rglob($pattern, $flags, $path)); }
    return $files;
}




function load_hook($t=null,$p=null,$params=null)
{
$sql="SELECT * FROM hook WHERE h_hook='". myr($t)."' ";
$rsql = maquerysql($sql);


if (!isset($rsql['0'])) { return false ;}

foreach($rsql as $k)
        {
if (method_exists($k['h_class'], $k['h_function']))
    {
$tmp = New $k['h_class'];
$tmp->{$k['h_function']}(null,null,$params);

    }    

        }  



}


function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}







if (!function_exists('mysql_real_escape_string')) 
{
function mysql_real_escape_string($t=null) { return myr($t) ; }
function mysql_query($t=null)
{
return maquerysql($t);

}

function mysql_error($t=null)
{
return false ;

}

function mysql_fetch_object($t=null)
{
    return $t;
}




}


function days_diff($d1, $d2) {
    if (is_string($d1)) { $d1 = date_create($d1); }
    if (is_string($d2)) { $d2=date_create($d2) ; }
    $x1 = days($d1);
    $x2 = days($d2);

    if ($x1 && $x2) {
        return abs($x1 - $x2);
    }
}

function days($x) {
    if (get_class($x) != 'DateTime') {
        return false;
    }

    $y = $x->format('Y') - 1;
    $days = $y * 365;
    $z = (int)($y / 4);
    $days += $z;
    $z = (int)($y / 100);
    $days -= $z;
    $z = (int)($y / 400);
    $days += $z;
    $days += $x->format('z');

    return $days;
}




function strip_tags_content($text, $tags = '', $invert = FALSE) { 

  preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags); 
  $tags = array_unique($tags[1]); 
    
  if(is_array($tags) AND count($tags) > 0) { 
    if($invert == FALSE) { 
      return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text); 
    } 
    else { 
      return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $text); 
    } 
  } 
  elseif($invert == FALSE) { 
    return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text); 
  } 
  return $text; 
} 


if (!function_exists('getallheaders')) 
{ 
    function getallheaders() 
    { 
           $headers = []; 
       foreach ($_SERVER as $name => $value) 
       { 
           if (substr($name, 0, 5) == 'HTTP_') 
           { 
               $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value; 
           } 
       } 
       return $headers; 
    } 
} 

function findWhere($array, $matching) {
    foreach ($array as $item) {
        $is_match = true;
        foreach ($matching as $key => $value) {

            if (is_object($item)) {
                if (! isset($item->$key)) {
                    $is_match = false;
                    break;
                }
            } else {
                if (! isset($item[$key])) {
                    $is_match = false;
                    break;
                }
            }

            if (is_object($item)) {
                if ($item->$key != $value) {
                    $is_match = false;
                    break;
                }
            } else {
                if ($item[$key] != $value) {
                    $is_match = false;
                    break;
                } 
            }
        }

        if ($is_match) {
            return array('key'=>$key,'value'=>$item);   
        }
    }

    return false;
}


    function strip_defined_tags($str, $tags, $stripContent = false)
    {
        $content = '';
        if (!is_array($tags)) {
            $tags = (strpos($str, '>') !== false ? explode('>', str_replace('<', '', $tags)) : array($tags));
            if (end($tags) == '') array_pop($tags);
        }
        foreach ($tags as $tag) {
            if ($stripContent) {
                $content = '(.+</' . $tag . '(>|\s[^>]*>)|)';
                $str = preg_replace('#</?' . $tag . '(>|\s[^>]*>)' . $content . '#is', '', $str);
            }
            return $str;
        }
    }






function searchArray($array, $search_list) {

    // Create the result array
    $result = array();

    if (!is_array($array)) { return false ; }
    // Iterate over each array element
    foreach ($array as $key => $value) {

        // Iterate over each search condition
        foreach ($search_list as $k => $v) {

            // If the array element does not meet
            // the search condition then continue
            // to the next element
            if (!isset($value[$k]) || $value[$k] != $v)
            {

                // Skip two loops
                continue 2;
            }
        }

        // Append array element's key to the
        //result array
        $result[] = array_merge($value,array('kkey'=>$key));
    }

    // Return result
    return $result;
}

function getAuthorizationHeader()
{
    $headers = null;
    if (isset($_SERVER['Authorization'])) {
        $headers = trim($_SERVER["Authorization"]);
    } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
        $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
    } elseif (function_exists('apache_request_headers')) {
        $requestHeaders = apache_request_headers();
        // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
        $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
        //print_r($requestHeaders);
        if (isset($requestHeaders['Authorization'])) {
            $headers = trim($requestHeaders['Authorization']);
        }
    }
    return $headers;
}

/**
 * get access token from header
 * */
function getBearerToken()
{
    $headers = getAuthorizationHeader();
    // HEADER: Get the access token from the header
    if (!empty($headers)) {
        if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
            return $matches[1];
        }
    }
    return null;
}