<?php
class dform {

public $dinput;
static $asset;
public function __construct()


{






}


static function charge_donnee() {






include_once('model/model-news.php');

include_once('model/model-utilisateur.php');



return array('data'=>$dinput,'param'=>$dinput_param);



}

static function render_form($t,$val=null,$params=null)
{
$dinput = dform::charge_donnee();
$dinput_data=$dinput['data'];	
$dinput_param=$dinput['param']; 

$url_projet=url_projet;
if (!isset($dinput_data[$t]))
{
throw new Exception("Erreur lors de la génération de la form. Donnée inconnue.", 1);
return false;
}


$txt='';$count_js_load_js="";$crochet='[]';
$microtime=md5(microtime());

if (isset($params['split'])) { // Le paramètre split permet de découper en plusieurs partie le rendu.
		$split['count']= 0;

foreach($dinput_data[$t] as $kc)
{

if ( isset($kc['type']) && ($kc['type'] =='id'|| $kc['type']=='id_save') ){ continue;}	// Si c'est de type id ou id_save on n'affichera pas alors on ne compte pas
$split['count']++;
}

   $split['division'] = ceil($split['count'] / $params['split'] ) ;  $split['i'] = 0 ;
 $split['division_css'] = 12 / $params['split'] ; 
$txt.="<div class='grid'><div class='col-" . $split['division_css'] . "-12'>";

}
$css =(isset($params['css'])) ? $params['css'] : 'form-group';
$disabled_complet = (isset($params['disabled'])) ? ' disabled ' : null;
foreach($dinput_data[$t] as $k=>$v)

						{

if (isset($params['hide']) && isset($params['hide'][$k]))
{
	continue;
}

$value = isset($val[$k]) ? $val[$k]: '';
$id=(!isset($dinput_param[$t]['name_id'])) ? $k : $k.$microtime;
$id=(!isset($params['name_id'])) ? $id : $id.$microtime;


$required =(isset($v['required'])) ? ' required ' : null;
$is_error=(isset($_POST['error_form'][$k])) ? ' has-error ' : null;

$label_txt = (isset($v['label'])) ? "<label for='$id' class='control-label'>".$v['label']."</label>": '';
$data =(isset($v['data'])) ? $v['data'] : '';
$small_help=null;
if (!empty($v['small_help']))
{

$small_help="<small class='form-text text-muted'>{$v['small_help']}</small>";
}

$data.= (isset($v['helptip'])) ?   ' helptip=\'' . addslashes($v['helptip']) . '\' ' : null;
$data.= $disabled_complet;
$more_class= (isset($v['more_class'])) ? $v['more_class'] : null;
$type =(isset($v['type'])) ? $v['type'] : '';
$placeholder = (isset($v['placeholder'])) ? " placeholder='" . addslashes($v['placeholder']) . "' " : null ; 
$value = (!isset($val[$k]) && isset($v['default'])) ? $v['default'] : $value;
$count_js=(isset($v['count_js'])) ? ' countable2 ' : '' ;
if (!empty($count_js)) { $count_js_load_js = "<script>lance_counter('.countable2');</script>"; }


if (isset($params['split']) && $split['i'] >= $split['division'] )  {

$split['i']=1;
$txt.="</div><div data=" .  $split['i'] ." class='col-" . $split['division_css'] . "-12'>";
 }
 elseif(isset($params['split']) && ($type!='id' || $type!='id_save')) { $split['i']++;} 



 if(!isset($v['hidden']) || $v['hidden'] ===false )
		{
}
		
if ($type=="string" || $type=='number')
{

$tmp_type=($type=='number') ? ' pattern="[0-9]+(\\.[0-9][0-9]?)?" ' : '';
$pattern = (!empty($v['pattern'])) ? "pattern=\"{$v['pattern']}\" " : null;
$txt.="<div class=' $css $is_error'>$label_txt<br/><input $placeholder class='form-control $count_js  $more_class' $tmp_type type='text' id=\"$id\" $data name=\"$k\" $pattern value=\"$value\" $required>$small_help</div>";


}
if ($type=="select_file" && !empty($v['path']))
{
	$path =$v['path'];
	$option_select=null;
	$autocomplete='';
if (!empty($params['autocomplete']))
{
$autocomplete=<<<EOD
<script>
$(document).ready(function()
{
$( "#$id" ).combobox();
});
</script>
EOD;

}
	$crochet_multiple = (!empty($v['multiple'])) ? '[]' : null;
	$option_select="<option value=''></option>";
	if (!empty($value))
	{
		$option_select.="<option selected value='$value'>" . basename($value) . "</option>";
	}
	foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename)
	{
		$nom_fichier = pathinfo($filename);
		$tmp = explode("_",$nom_fichier['filename']);    
		$tmp2 = explode("-",$nom_fichier['filename']); 
		$extension = $nom_fichier['extension'];
		if (empty($nom_fichier['filename'])) { continue ; }
		if ($extension=='php' || $extension=='php5' || $extension=='htaccess') { continue ; }
		$lien_fichier = str_replace(root_dir,'',$filename);

		$option_select.="<option value='$lien_fichier'>{$nom_fichier['filename']}.{$nom_fichier['extension']}</option>";
	}
$option_select="<select class='selectpicker form-select $more_class' data-style='btn-info' id=\"$id\" $data name=\"$k$crochet_multiple\">$option_select</select>";

$value_render= (!empty($value))  ? "<br/>Fichier : <a target='_blank' href='$url_projet/$value'> " .basename($value)  . "</a>" : null ; 

$txt_file="<div class=' $css $is_error'><br/><input name='$k' type='file' id='$id'>$value_render</div>";

	

$txt.="<div class=' $css $is_error'>$label_txt<br/>$option_select</select>$txt_file</div>$autocomplete";


}


if ($type=="text")
{
$txt.="<div class=' $css $is_error'>$label_txt<br/><textarea $required class='form-control $count_js $more_class' $placeholder $data id=\"$id\" name=\"$k\">$value</textarea></div>";

if (isset($v['text_html']))
{

$txt.=<<<EOD
<script>
$(document).ready(function($) {

  tinyMCE.init({
    // General options
relative_urls: false,
    remove_script_host: false,
   cleanup : false,
    verify_html : false,
    mode : "exact",
    elements : "$id",
theme : "advanced",
valid_children : "+body[style]",
        language : "fr",
    plugins : "table,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
    // Theme options
    theme_advanced_buttons1 : "table,bold,italic,underline,strikethrough,|formatselect,fontselect,fontsizeselect",
    theme_advanced_buttons2 : "cut,copy,paste,|,advimage,|,bullist,numlist|,undo,redo,|,link,unlink,anchor|,forecolor,backcolor,code,media,preview",
    //theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
    //theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    theme_advanced_statusbar_location : "bottom",
    theme_advanced_resizing : true,
paste_preprocess : function(pl, o) {
  //example: keep bold,italic,underline and paragraphs
  //o.content = strip_tags( o.content,'<b><u><i><p>' );

  // remove all tags => plain text
},
    
  });
});
</script>
EOD;
dform::asset("tiny_mce/tiny_mce.js","js");
}
if (isset($v['text_html_admin']))
{

$txt.=<<<HTML
<script>
$(document).ready(function($) {

 	tinyMCE.init({
		// General options

relative_urls : false,
		mode : "exact",
    elements : "$id",
theme : "advanced",
        language : "fr",
		plugins : "zupload,example,table,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
		// Theme options
		theme_advanced_buttons1 : "zupload,example,table,bold,italic,underline,strikethrough,|formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist|,undo,redo,|,link,unlink,anchor|,forecolor,backcolor,code,media,preview",
		//theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		//theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
paste_preprocess : function(pl, o) {

},


setup : function(ed) {
          ed.onChange.add(function(ed, l) {
	   $('#$id').val(tinyMCE.get('$id').getContent());
          });
      }





	});
});
</script>
HTML;
dform::asset("tiny_mce/tiny_mce.js","js");


}


}

if ($type=="checkbox")
{
$checked =(( $value==1 || $value=='on' ) || ( isset($v['checked']) && empty($val) )) ?  ' checked ': '';
$txt.="<div class=' $css $is_error'><input type='checkbox' $required id=\"$id\" $data name=\"$k\" $checked>$label_txt<br/></div>";

}
if (($type=="select" || $type=='radio' || $type=='select_checkbox' || $type=='autocomplete') )
{

if (isset($v['leftjoin']['class_sql']))
{
	$rsqls = call_user_func($v['leftjoin']['class_sql']);
}
elseif (isset($v['leftjoin']['class_sql_method']))
{
	$csm  = $v['leftjoin']['class_sql_method'];
	$rsqls= call_user_func_array($csm[0],$csm[1]);
}

else
{

$sqls=$v['leftjoin']['sql'];
$rsqls = maquery_sql(null,$sqls);
}
$multiple= (!empty($v['multiple'])) ? 'multiple' : null;
$crochet_multiple = (!empty($v['multiple'])) ? '[]' : null;
if (!isset($rsqls['0'])) { throw new Exception("Ereur lors de la requete SELECT left join $k", 1);
}
$selectpicker = (empty($multiple)) ? 'selectpicker' : null;
$option_select=($type=="select" || $type=='autocomplete') ?  "<select $multiple $required class='form-select $selectpicker $more_class' data-style='btn-info' id=\"$id\" $data name=\"$k$crochet_multiple\">" : null ;



$option_radio='';
$option_select.=(isset($v['leftjoin']['empty'])) ? "<option value='".addslashes($v['leftjoin']['empty']) . "'></option>" : null;
$key_sf = $v['leftjoin']['key'];
$value_sf=$v['leftjoin']['value']; $value_sf2 = (isset($v['leftjoin']['value2'])) ? $v['leftjoin']['value2'] : '';
$value_sf3 = (isset($v['leftjoin']['value3'])) ? $v['leftjoin']['value3'] : '';
$default=(isset($v['leftjoin']['default'])) ? $v['leftjoin']['default'] : '_no_value_default_';


foreach($rsqls as $ks)
		{

$key_s=$ks[$key_sf];
$value_s=$ks[$value_sf];
$value_s2=(isset($ks[$value_sf2])) ? $ks[$value_sf2] : '' ;
$value_s3= (isset($ks[$value_sf3])) ? $ks[$value_sf3] : '' ;
if (isset($v['leftjoin']['utf8_decode'])) { $value_s = utf8_encode($value_s) ; $value_s2=utf8_encode($value_s2); }




$selected =($value==$key_s && !empty($value) || (!isset($val[$k]) && $key_s==$default)) ? ' selected ' : '';


if (is_array($val) && isset($val[$k]) && is_array($val[$k]))				
{

		$checked ='';
		$selected='';
	foreach($val[$k] as $ksc)
	{ // On parcours le tableau... pas optimisé. A voir sur l'impact des performances en backoffice.


	if ($ksc==$key_s)
	{

	$checked =' checked ';
	$selected = ' selected ';
	break;
	}
	}

}
elseif (is_array($value))				
{


	$checked ='';
	$selected='';

	foreach($value as $ksc)
	{ // On parcours le tableau... pas optimisé. A voir sur l'impact des performances en backoffice.
		$checked ='';


		if (isset($ksc[$k]) && $ksc[$k]==$key_s)
		{
			$checked =' checked ';
			$selected='selected';
			break;
		}
	}

}










$checked =($value==$key_s || is_array($value) && in_array($key_s, $value)) ? ' checked ' : '';
$selected =($value==$key_s || is_array($value) && in_array($key_s, $value)) ? ' selected ' : '';

if ($type=='select' || $type=='autocomplete'){ 
$option_select.="<option $selected value=\"$key_s\">$value_s $value_s2 $value_s3</option>";
}
elseif ($type=='radio'){ 
	$ir = (isset($ir)) ? $ir+1 : 1;
$option_radio.="<input $required $checked  type='radio' id=\"{$id}{$ir}\" $data name=\"$k\" value=\"$key_s\"><label class='label_radio' for='{$id}{$ir}'>$value_s $value_s2</label><br/>";
}
elseif ($type=='select_checkbox'){ 




$option_select.="<input $checked  type='checkbox' id=\"$id\" $data name=\"$k$crochet\" value=\"$key_s\">$value_s $value_s2 <br/>";
}
		}
$option_select.=($type=="select") ? "</select>" : null;
if ( $type=='radio') 
{ 
$txt.="<div class='f $css $is_error'>$label_txt<br/>$option_radio";	
}

else 
{	
	$autocomplete='';
if ($type=='autocomplete')
{

$autocomplete=<<<EOD
<script>

$(document).ready(function()
{
 $( "#$id" ).combobox();
}
);
		</script>


EOD;

}	
if (isset($v['multiple_checkbox']))
{
$autocomplete.=<<<HTML
<script>
$(document).ready(function()
{

$("#$id").multiselect().multiselectfilter();
});

</script>
HTML;
dform::asset("jquery.multiselect.min.js",'js');
dform::asset("jquery.multiselect.filter.min.js",'js');


dform::asset("jquery.multiselect.filter.css",'css');
dform::asset("jquery.multiselect.css",'css');
dform::asset('jquery-ui.css','css');

}





$txt.="<div class=' $css $is_error'>$label_txt<br/>$option_select</select></div>$autocomplete";
}

}



if ($type=='date')
{
$value =datefr_new($value);
$change_year =(isset($v['change_year'])) ? ', changeYear: true,     yearRange: "-110:+1" ' : null ;

$txt.="<div class='$css $is_error'>$label_txt<br/><input type='text' id=\"$id\" $data name=\"$k\" value=\"$value\"></div>";
$txt.=<<<EOD
<script>
$(document).ready(function() {
 $.datepicker.setDefaults($.datepicker.regional['fr']);

$("#$id").datepicker({ dateFormat: "dd-mm-yy",firstDay: 1 $change_year });

});
</script>
EOD;
dform::asset('jquery-ui.css','css');
dform::asset('jquery-ui.custom.min.js','js');
}


if (($type=='id' ||$type=='id_save')  && is_array($val) && (!empty($value) || $value==0 ) ) { $txt.="<input name='$k' $data type='hidden' value=\"$value\">"; }

if ($type=='image')
{
$value_render= (!empty($value))  ? "<a target='_blank' href='$url_projet/$value'>" . basename($value) ."</a>" : null ; 
$txt.="<div class='f$css $is_error'>$label_txt<br/><input name='$k' type='file' id='$id'>$value_render</div>";

}	
if ($type=='file')
{
$value_render= (!empty($value))  ? "Fichier : <a target='_blank' href='$url_projet/$value'> " .basename($value)  . "</a>" : null ; 

$txt.="<div class=' $css $is_error'>$label_txt<br/><input name='$k' type='file' id='$id'>$value_render</div>";

}	

		}





if (isset($params['split'])) { $txt.="</div></div>"; } 
						
$txt.=$count_js_load_js;
return $txt;

}


static function save_form($t=null,$data=null,$param=null)

{

$dinput = dform::charge_donnee();	
$dinput_data=$dinput['data'];	
$dinput_param=$dinput['param'];	
$sql_rule_delete='';
if (!isset($dinput_data[$t]))
{
throw new Exception("Erreur lors de la sauvegarde de la form. Donnée inconnue.", 1);
return false;
}

$sqlk="";$sqlv='';
$sqlku="";$sqlvu='';$sql_rule_update='';
$isql = 0 ;
$lightsave = (isset($param['lightsave'])) ? true : false;
foreach($dinput_data[$t] as $k=>$v)
{
	if ($lightsave ===true && !isset($data[$k])) {  continue ;}

if (isset($v['savesql']) && $v['savesql']===false) { continue ; }
elseif($v['type']=='title') { continue ; }

if($v['type']=='date') { $data[$k] = (isset($data[$k])) ? datesql($data[$k]) : null; }
if ($v['type']=='login_id' && !isset($param['update'])) { $data[$k] = (isset($_SESSION['login_id'])) ? $_SESSION['login_id'] : '0'; }
	
if ($v['type']=='date_create' && !isset($param['update'])) { $data[$k] = aujourdhui; }
elseif ($v['type']=='date_maj') { $data[$k] = aujourdhui; }
elseif($v['type']=='image' && isset($_FILES[$k]['name']) && !empty($_FILES[$k]['name']))  {  

	$retour_img = dform::save_image($k,$v) ;
	if (isset($retour_img['error'])) { $error.="Erreur lors de l'envoi de l'image.<br/>".$retour_img['message'].'<br/>'; continue; }
else { $data[$k] = $retour_img['link'] ; }
	 }
elseif($v['type']=='file' && isset($_FILES[$k]['name']) && !empty($_FILES[$k]['name']))  {  

	$retour_file = dform::save_file($k,$v) ;

	if (isset($retour_file['error'])) { $error.="Erreur lors de l'envoi du fichier.<br/>".$retour_file['message'].'<br/>'; continue; }
else { $data[$k] = $retour_file['link'] ; }
	 }
elseif($v['type']=='checkbox' && !isset($data[$k]) ) {$sqlku.="`$k`='',"; continue;}


if (!isset($data[$k])) { 
continue; }
$value=$data[$k];
if (isset($dinput_param['htmlspecialchars'])) { $value=htmlspecialchars($value); }
if (isset($dinput_param['strip_tags'])) { $value=strip_tags($value); }
if (isset($v['type']) && $v['type']=='id') {
$sql_rule_update.= "(`$k`='$value') AND";
$sql_rule_delete.="(`$k`='$value') AND";
continue;	
}



$sqlk.="`$k`,";
$sqlv.=":$k$isql,";
$arraysql[":$k$isql"] =$value;;
$sqlku.="`$k`=:$k$isql,";
$isql++;
}

$sqlk= substr($sqlk,0,-1);
$sqlv=substr($sqlv,0,-1);
$tablename =$dinput_param[$t]['table'];
if (isset($param['delete'])) 
{

if (empty($sql_rule_delete)) {
throw new Exception("Erreur lors du delete. Aucune condition renseignée.", 1);
return false;
}
$sql_rule_delete = substr($sql_rule_delete,0,-4);
$sql="DELETE FROM $tablename WHERE $sql_rule_delete LIMIT 1";
$rsql = maquery_sql($arraysql,$sql);
return $rsql ;
}

if (isset($param['update']))
{

if (empty($sql_rule_update)) {
throw new Exception("Erreur lors de l'update. Aucune condition renseignée.", 1);
return false;
}

if (empty($sqlk)) { return array("error"=>"Aucune donnée à sauvegarder");}

$sql=substr($sqlku,0,-1);
$sql_rule_update = substr($sql_rule_update,0,-4);

$sql ="UPDATE $tablename SET $sql WHERE $sql_rule_update";

$test =maquery_sql($arraysql,$sql);
return $test;

}	
$sql ="INSERT INTO $tablename
($sqlk)
VALUES ($sqlv)";

$test = maquery_sql($arraysql,$sql);
$test_id = maquery_lastid();

if (!empty($error)) { return array('error'=>$error); }
return $test_id;
return $test;

}

static function liste_form($table,$param=null)
{




}


static function redirect($to=null,$message=null)

{
ob_start();
ob_get_clean();
if (isset($message['alert_error'])) { $_SESSION['alert_error'] = $message['alert_error'] ; }
if (isset($message['alert_success'])) { $_SESSION['alert_success'] = $message['alert_success'] ; }
if (isset($message['alert_warning'])) { $_SESSION['alert_warning'] = $message['alert_warning'] ; }

  header("Location: $to");   
  die();
   
}



static function menu_gen($t,$t_param)
{
$txt='';
foreach($t as $k=>$v)
	{
if (isset($t_param[$k]['allow_grp']) && !droit($t_param[$k]['allow_grp'])) { continue ; }	

if (isset($t_param[$k]['disable_grp']) && droit($t_param[$k]['disable_grp'])) { continue ; }			
if (!isset($_SESSION['membre_centrale']) &&  isset($t_param[$k]['disable_filiale']) && droit_filiale($t_param[$k]['disable_filiale'])) { continue ; }			

$class=(isset($t_param[$k]['class'])) ?  $t_param[$k]['class']  : '' ;	
$class_li=(isset($t_param[$k]['class_li'])) ? $t_param[$k]['class_li'] : '' ;	

$id=(isset($t_param[$k]['id'])) ? ' id="'.$t_param[$k]['id'] . '" ': '' ;	
$lien=(isset($t_param[$k]['lien'])) ? $t_param[$k]['lien'] : '#' ;	
$notification=(isset($t_param[$k]['notification']) && !empty($t_param[$k]['notification'])) ? '<span class="mintooltipmenu">'.$t_param[$k]['notification'].'</span>' : '';
$onclick=(isset($t_param[$k]['onclick'])) ? $t_param[$k]['onclick'] : '';
$icon = (isset($t_param[$k]['icon'])) ? "<i class=\"{$t_param[$k]['icon']}\"></i> " : null;
if (isset($t_param[$k]['dropdown']) && $t_param[$k]['dropdown'] === false )
{
$txt.="<li class='nav-item $class_li'><a $id href='$lien' class=' nav-link' onclick=\"$onclick\">$icon".techo($k)."$notification</a></li>"; // On ouvre le menu dropdown

continue;	
}



$txt.="<li class='nav-item dropdown $class_li'><a class='nav-link dropdown-toggle $class' href='$lien' $onclick data-bs-toggle='dropdown'>$icon".techo($k)."$notification<b class='caret'></b></a><ul class='dropdown-menu'>"; // On ouvre le menu dropdown
foreach($v as $kk=>$vv)
		{
if (isset($vv['allow_grp']) && !droit($vv['allow_grp'])) { continue ; }	
if (isset($vv['disable_grp']) && droit($vv['disable_grp'])) { continue ; }			
if (!isset($_SESSION['membre_centrale']) && isset($vv['disable_filiale']) && droit_filiale($vv['disable_filiale'])) { continue ; }			

$notification=(isset($vv['notification']) && !empty($vv['notification'])) ? '<span class="mintooltipmenuactu">'.$vv['notification'].'</span>' : '';
$lien = (isset($vv['lien'])) ? $vv['lien'] : '#';
$onclick=(isset($vv['onclick'])) ? $vv['onclick'] : '';
$txt.="<li><a href='$lien' class='dropdown-item' $onclick>".techo($kk)."$notification</a></li>";
		}
$txt.="</ul></li>";



	}


return $txt;



}


static function asset($t,$type)
{
self::$asset[$type][$t]=true;

}




static function asset_load($type)
{
	$txt ='';

if (isset(self::$asset[$type]) && is_array(self::$asset[$type]))
{
if ($type=='js' || $type=='javascript')
{
$url_projet=url_projet;
foreach(self::$asset[$type] as $k=>$v)

			{

$txt.="<script type='text/javascript' src='$url_projet/views/js/$k'></script>";



			}


}

elseif ($type=='css' || $type=='style')
{
$url_projet=url_projet;
foreach(self::$asset[$type] as $k=>$v)

			{

$txt.="<link href='$url_projet/views/css/$k' rel='stylesheet'>";



			}



}
return $txt ;
}
}

static function load_layout($layout=nulls,$tableau=null)
{
	$view=$tableau;
if (!file_exists('views/'.$layout)) { throw new Exception("Erreur. Pas de layout correspondant trouvé !", 1);}
ob_start();
if (!include('views/'.$layout)) { throw new Exception("Error dans la vue layout", 1); } ;


$out2 = ob_get_contents();
ob_get_clean();

return $out2;

}




static function save_file($t,$params=null)
{

	$unique_name=(isset($params['unique_name'])) ? '-' . substr(md5(microtime()),0,6)  : null;
	

		$temp = explode(".", $_FILES[$t]["name"]);
	$extension = end($temp);
if (isset($params['type_autorise']) && is_array($params['type_autorise'])) { 

	$allowedExts= $params['type_autorise'] ;

	if ( !in_array($extension, $allowedExts)) { return array('error'=>true,'message'=>'Le fichier ne correspond pas au type accepté','file_type'=>'invalid' . $extension);}


 }
if (!isset($params['path'])) { return array('error'=>true,'message'=>'Pas de dossier de destination indiqué'); }
$path=$params['path']; 
	$nom_path=pathinfo($_FILES[$t]["name"]);

		  $filename = $_FILES[$t]["tmp_name"];

		  $nom_fichier=urlencode($nom_path['filename']);

		  		 $success =  move_uploaded_file($filename,  $path . $nom_fichier . $unique_name . ".$extension" );

		  		  return array('succes'=> $success,'link'=>$path . $nom_fichier . $unique_name . ".$extension" );

}


static function save_image($t,$param=null)
{
	$unique_name=(isset($param['unique_name'])) ? substr(md5(microtime()),0,6) . '-' : null;
$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
	$temp = explode(".", $_FILES[$t]["name"]);
	$extension = end($temp);

if (!isset($param['path'])) { return array('error'=>true,'message'=>'Pas de dossier de destination indiqué'); }
$path=$param['path']; 
	if ( !in_array($extension, $allowedExts)) { return array('error'=>true,'message'=>'Le fichier doit être une image','file_type'=>'invalid' . $extension);}
	 
	  if ($_FILES[$t]["error"] > 0)
		{
			 $response = array(
				"status" => 'error',
				"message" => 'ERROR Return Code: '. $_FILES[$t]["error"],
			);
			 return array('error'=>true,$_FILES[$t]["error"]);

}
		
	  else
		{
			
		  $filename = $_FILES[$t]["tmp_name"];
		  list($width, $height) = getimagesize( $filename );
		  $nom_fichier=urlencode($_FILES[$t]["name"]);
		  		  move_uploaded_file($filename,  $path . $unique_name . $nom_fichier);
		  		  $nom_final = $path . $unique_name . $nom_fichier;
		  		  $image =new simple_image();
		  		  $image->load( $nom_final);

if (isset($param['to_height'])) { 


 $image->resizeToHeight($param['to_height']);
 }
if (isset($param['dimension']) && is_array($param['dimension']) && isset($param['dimension']['0']) && isset($param['dimension']['1'])) { 
 $image->resize($param['dimension'][0],$param['dimension'][1]);

 }

  $image->save($nom_final );

		  		  return array('succes'=>true,'link'=>$path . $unique_name . $nom_fichier);

		 }


}


public function generate_table($t=null,$p=null,$params=null)
{

$dinput = dform::charge_donnee();
$dinput_data=$dinput['data'];	
$dinput_param=$dinput['param']; 
$table_actuelle =(isset($params['table'])) ? $params['table'] : null;

$url_projet=lien_projet;
if (!droit(array('1')) && !droit(array('admin')))
{
throw new Exception("Erreur de droit.", 1);
return false;

}

if (!isset($dinput_data[$t]))
{
throw new Exception("Erreur lors de la génération de la table. Donnée inconnue. $t", 1);
return false;
}


$table=$dinput_param[$t]['table'];
if (empty($table))
{
throw new Exception("Erreur. Nom de la table non spécifiée.", 1);


}


$sql=null; $primary_key=null;
$sql_key=null;
foreach($dinput_data[$t] as $k=>$v)
{
	$more_type=null;
//$type="varchar";
$size_int=(isset($v['maxsize'])) ? $v['maxsize'] : 11 ;
$size_var =(isset($v['maxsize'])) ? $v['maxsize'] : 255 ;
if ($v['type']=='id' || $v['type']=='id_save' || $v['type']=='select' || $v['type']=='login_id' ) { $type="int($size_int)  NOT NULL";
if ($v['type']=='id') { $primary_key.=" `$k`,";}
if ($v['type']=='id_save' || $v['type']=='select') { $sql_key.=" `$k`,";}
}
elseif($v['type']=='string' || $v['type']=='image' || $v['type']=='file' ) { $type="varchar($size_var) ";}
elseif($v['type']=='checkbox' ) { $type="varchar(5) NOT NULL"; $sql_key.=" `$k`,";}

elseif($v['type']=='number' ) { $type="int($size_int) ";}
elseif($v['type']=='text') { $type='text NOT NULL';}
elseif($v['type']=='date') { $type="date NOT NULL ";}
elseif($v['type']=='date_create' || $v['type']=='datemaj') { $type="datetime NOT NULL ";}


if (empty($type)) { echo "DONNEE $k DE TYPE NON CONNUE<br/>"; continue ;}

$sql.="`$k` $type $more_type,\n";


}
if (!empty($primary_key)) { $primary_key= "PRIMARY KEY (" . substr($primary_key,0,-1). "),\n";}
if (!empty($sql_key)) { $sql_key= "KEY (" . substr($sql_key,0,-1). ")\n";}

$sql="CREATE TABLE IF NOT EXISTS `$table`
(
$sql
$primary_key
$sql_key
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

";
echo "Rendu de la table<br/>";

die(nl2br($sql));


}

    /*
     * Log une erreur.
     */
    static function fail($message,$where=null,$params=null)
    {
        $login = (isset($_SESSION['login'])) ? $_SESSION['login'] : null;
        $ip = get_ip();
        $date =date('Y-m-d h:i:s');
        $url_projet=lien_projet;

        $dbt=debug_backtrace();
        $caller =$class = isset($dbt[1]['class']) ? $dbt[1]['class'] : null;
        $caller.= isset($dbt[1]['function']) ? $dbt[1]['function'] : null;
        $method = isset($dbt[1]['function']) ? $dbt[1]['function'] : null;
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $where = $caller . ". $where";
        $content = "{$date}\t{$ip}\t{$login}\t$where\t$actual_link\t$message";

        $tab_sql_error=null;
        $tab_sql_error['class']=$class;
        $tab_sql_error['method']=$method;
        $tab_sql_error['actual_link']=$actual_link;
        $tab_sql_error['message']=$message;
        $tab_sql_error['cle']=(isset($params['cle'])) ? $params['cle'] : null;

        $sql="INSERT INTO `log_error` ( `class`, `function`, `date`, `link`, `data`, `cle`)
 VALUES ( :class, :method, CURRENT_TIMESTAMP, :actual_link, :message, :cle);
";
        $rsql =maquery_sql($tab_sql_error,$sql);
        file_put_contents('error_failz.txt',$content);

        if (!empty($params['mail']))
        {
            $mail_send="d-masson@hexaplus.fr";
            $mail_contenu = "Erreur détecté sur $actual_link.<br/>\n : $content ";
            mail::send(null,array('from_mail'=>mail_robot,'from_nom'=>mail_robot,'to_mail'=>$mail_send,'mail'=>$mail_contenu,'subject'=>techo("Fail détecté $message" . nom_projet)));

        }



    }

	/* from an array, return a html table.

Exemple :
$rsql =  hm_maintenancem::liste_answer();
$txt = dform::array_to_table($rsql,array(
    'htmlcheck'=>array('label'=>'','td_class'=>'td_table_input_checked',"html"=>"<input type='checkbox' value='' class='table_input_checked' name='table_checked[%%sa_id%%]'>"),
    'sa_id'=>array('label'=>'N°'),
    's_nom'=>array('label'=>'Rapport'),
    'sa_date_create'=>array('label'=>'Date maintenance'),
    'sa_login'=>array('label'=>'Utilisateur'),
    'html1'=>array('label'=>'',"html"=>"<a class='btn btn-xs' href='{$this->url_projetc}/history_page_pdf/%%sa_id%%/'><i class='fa far fa-file-pdf'></i></a>")
),array('id_table'=>'table_maintenance'));

*/
	static function array_to_table($rsql = null, $keys = null, $params = null)
	{
		$txt = $table = $thead = null;


		foreach ($keys as $kk) {
			$thead .= "<th>{$kk['label']}</th>";
		}

		foreach ($rsql as $k) {

			$row = "<tr>";
			foreach ($keys as $kk => $vv) {
				$more_class = (!empty($vv['td_class'])) ? " class='{$vv['td_class']}' " : null;
				if (!empty($vv['type']) && $vv['type'] == 'json_decode') {
					$value = json_decode($k[$vv['key']], true);
					$k[$kk] = (isset($value[$vv['key_json']])) ?    ($value[$vv['key_json']]) : null;
				}
				if (!empty($vv['html'])) {

					$pattern = '~\%\%(.*?)\%\%~';
					$value = preg_replace_callback(
						$pattern,
						function ($matches) use ($k) {
							return $k[$matches[1]];
						},
						$vv['html']
					);



					$row .= "<td$more_class>$value</td>";
				} else {
					$row .= "<td>{$k[$kk]}</td>";
				}
			}
			$row .= "</tr>";
			$table .= $row . "\n";
		}
		$id_table = $more_class = null;
		if (!empty($params['id_table'])) {
			$id_table = "id='{$params['id_table']}'";
		}
		if (!empty($params['more_class'])) {
			$more_class = $params['more_class'];
		}
		$txt = <<<HTML
<table class='table filter_table table-striped  ltable mtable sort_table export_table ui-table-reflow $more_class' $id_table>
<thead class="thead-dark">
<tr>$thead</tr>

</thead>
<tbody>$table</tbody>
</table>

HTML;

		return $txt;
	}

						}	



?>