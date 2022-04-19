<?php


//$loader = include_once('../vendor/autoload.php');

include_once('lib/functions.php');
include_once('config.php');

$time_start = microtime(true);


	session_start();


// Chargement des paramètres de routage
$class = (isset($_GET['class'])) ? $_GET['class'] : 'index';
$method =(isset($_GET['method'])) ? $_GET['method'] : 'indexAction';
$param1 =(isset($_GET['param1'])) ? $_GET['param1'] : '';
$param2 = (isset($_GET['param2'])) ? $_GET['param2'] : '';

$ajax = (isset($_GET['ajax'])) ? true : false;







if ($class!='index' && ($method!='indexAction' || $method!='connect')) {  }
if (method_exists($class, $method)) { // On test si la classe et la méthode existe


$classc = New $class;

$classc->url_projet=lien_projet;
$classc->url_projetc=lien_projet. "/r/$class";

if (!isset($_SESSION['login']) && !isset($classc->view['no_need_connect'])) { 
	$tab_no_connect=null;
if (!$ajax)
{
$url_projet=lien_projet;
$_SESSION['url_disconnect'] = "$url_projet/$_SERVER[REQUEST_URI]";
$_SESSION['no_connected'] = true;
}



dform::redirect(lien_projet,$tab_no_connect);
 



	die('Reconnectez vous.') ;



	 }




if (isset($classc->view['droit']) && !droit($classc->view['droit'])) { 
$classc->view['alert_error']="Droit insuffisant";
 }
elseif(isset($classc->view['no_route'][$method])) {  $classc->view['alert_error']="Erreur de routing";         } 
elseif (isset($classc->view['no_route_class']) || isset($classc->view['no_route_class']) || isset($classc->view['class_no_routable'])  ) { $classc->view['alert_error'] = techo("Classe non routable") ; }
else {

if (isset($_SESSION['post'])) { $_POST = $_SESSION['post'] ; unset($_SESSION['post']) ; }

if (isset($classc->view['is_api_class']))
{
	$postdata = file_get_contents("php://input");
    $postdata = json_decode($postdata,true);
	$_POST=$postdata;

	header('Access-Control-Allow-Origin: *');


	header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, PATCH, DELETE');
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');
	
}





$retour = $classc->$method($param1,$param2);
}
if (!isset($classc->view) || $ajax===true) {
die();

}

if (isset($classc->view['silence']) && $classc->view['silence']===true) {  die(); }



if (isset($_SESSION['alert_error'])) { $classc->view['alert_error'] = (isset($classc->view['alert_error'] )) ? $classc->view['alert_error'].'<br/>'. $_SESSION['alert_error'] : $_SESSION['alert_error']; unset($_SESSION['alert_error']); }
if (isset($_SESSION['alert_success'])) { $classc->view['alert_success'] = (isset($classc->view['alert_success'] )) ? $classc->view['alert_success'].'<br/>'. $_SESSION['alert_success'] : $_SESSION['alert_success']; unset($_SESSION['alert_success']);  }
if (isset($_SESSION['alert_warning'])) { $classc->view['alert_warning'] = (isset($classc->view['alert_warning'] )) ? $classc->view['alert_warning'].'<br/>'. $_SESSION['alert_warning'] : $_SESSION['alert_warning']; unset($_SESSION['alert_warning']); }

$view = $classc->view;




if (isset($classc->view['layout'])) { 

if (!file_exists('views/'.$classc->view['layout'])) { throw new Exception("Erreur pas de vue trouvée correspondant", 1);}

	if (!@include('views/'.$classc->view['layout'])) { throw new Exception("Error dans la vue", 1); } ;
										
									}
									elseif(isset($classc->view['elayout']))
{

 

if (!file_exists('views/'.$classc->view['elayout'])) { throw new Exception("Erreur pas de vue elayout trouvée.", 1);}
if (!include('views/'.$classc->view['elayout'])) {



    throw new Exception("Error dans la vue elayout", 1); } ;




$out2 = ob_get_contents();
ob_get_clean();
$view['body']=$out2 . $view['body'];





include('views/layout.php');


}
									
else {

	include('views/layout.php');}



}
if (droit(array('admin')))
{
	$time_end = microtime(true);
	echo $time_end - $time_start;
}







