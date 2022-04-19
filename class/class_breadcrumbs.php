<?php

/*
$bread[0] = array('url'=>"{$this->url_projet}/rh/formulaireb/liste/","text"=>"Liste des formulaires");
$bread[1] = array('url'=>"{$this->url_projet}/rh/formulaireb/builder/$t","text"=>"Formulaire");

$this->view['breadcrumbs']=$bread;
*/

class breadcrumbs {


static function render($t=null,$p=null,$params=null)
{
if (!is_array($t)) { return false ;}
$txt = null;
foreach($t as $k)
	{
		$url = $k['url'];
		$text = $k['text'];		
		$txt.= "<li class='breadcrumb-item'><a href='$url'>$text</a></li>";


	}	
$txt = "<nav aria-label='breadcrumb'><ol class='breadcrumb'>$txt</ol></nav>";
return $txt ; 

}



}


?>