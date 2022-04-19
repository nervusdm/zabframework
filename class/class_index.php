<?php

class index {
public $view =  array('title_h1'=>nom_projet,'body'=>'','description'=>"Connexion","layout"=>'index.php', 'no_need_connect'=>true);
protected $connect;
public function __construct()
{
  $this->connect= New connect();
}



// Page par défault
public function indexAction()
		{
      $this->view['body'] = $this->connect->loginForm();
		}


public function connectGo($t=null,$p=null,$params=null)
    {
      $this->connect->connectGo();
      $this->view['body'] = $this->connect->view['body'];
    }


  public function logOut()
  {
    $this->view['body'] = $this->connect->logOut();
  }


}




?>