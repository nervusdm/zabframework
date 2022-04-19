<?php
class demo
{
public $view = array('droit'=>array('1','2','3'),'title_h1'=>"Demo",'body'=>' ! ');





/*
Petite methode pour afficher un bref hello world.
*/
public function hello($t=null,$p=null,$params=null)
{
$txt = dform::load_layout('demo/hello.php',array('login'=>$_SESSION['login']));
$this->view['body']='Bonjour' . $txt;
$this->view['title_h1']="Hello world";
$this->view['alert_info']="Message d'info, tout se passe bien! ";
}

public function bonjour($t=null,$p=null,$params=null)
{
$txt = dform::load_layout('demo/hello.php',array('login'=>$_SESSION['login']));
$this->view['body']='Bonjour' . $txt;
$this->view['title_h1']="Hello world";
$this->view['alert_info']="Message d'info, tout se passe bien! ";
}


}


?>