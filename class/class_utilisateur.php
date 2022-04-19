<?php

class utilisateur {
public $view =  array('title_h1'=>"Gestion des utilisateurs",'body'=>'','description'=>"Gestion des utilisateurs",'droit'=>array(1),
		'no_route'=>array('affichage_tableau')
);



/**
 * <summary>
 * It lists all the users in the database.
 * </summary>
 */
public function liste($t=null,$p=null,$params=null)
{
$url_projet=url_projet;


$txt='';
$sql ="SELECT * FROM cc_utilisateur
LEFT JOIN cc_intervenant ON ccU_id_intervenant=ccI_id

";
$rsql=maquery_sql(array(),$sql);
foreach($rsql as $k)
{
$txt.=$this->affichage_tableau($k);

}
$txt=<<<HTML
<a href='$url_projet/r/utilisateur/add/' class="btn btn-primary mb-1"><i class='fa fa-plus-circle'></i> Ajouter un utilisateur</a>
<table class="table  filter_table sort_table export_table table-striped">
<thead><tr><th>N°</th><th>Login</th><th>Nom</th><th>Prénom</th><th>Intervenant</th><th>Date dernière connection</th><th>Action</th></tr>
</thead>
<tbody>
$txt
</tbody>
</table>
HTML;

$this->view['body']=$txt;
}


/**
 * <summary>
 * Affiche chaque ligne du tableau
 * </summary>
 * <param name="k">The array of data for the current row.</param>
 */
public function affichage_tableau($k)
{
$url_projet=url_projet;
$ccU_nom =$k['ccU_nom'];
$ccU_prenom=$k['ccU_prenom'];
$ccU_login=$k['ccU_login'];
$ccU_id=$k['ccU_id'];
$ccI_raison_sociale=$k['ccI_raison_sociale'];
$action=<<<EOD
<a href='$url_projet/r/utilisateur/edit/$ccU_id'>Modifier</a>
EOD;


$txt="<tr><td>$ccU_id</td><td>$ccU_login</td><td>$ccU_nom</td><td>$ccU_prenom</td><td>$ccI_raison_sociale</td><td></td><td>$action</td></tr>";
return $txt;


}
/**
 * <summary>
 * Ajouter un utilisateur
 * </summary>
 */
public function add($t=null)

{
	$url_projet=url_projet;
	$this->view['description']="Vous permet de créer un utilisateur";
	$this->view['title_h1']="Création utilisateur";
$txt="<div class='row'><div class='col-md-4'><form method='post' action='$url_projet/r/utilisateur/add_go/'>";
$txt.=dform::render_form('utilisateur');
$txt.="<input type='submit' value='Enregistrer' name='save' class='btn btn-primary'>";
$txt.="</form></div></div>";


$this->view['body']=$txt;


}


public function add_go($t=null)

{
$_POST['ccU_login']=$ccU_login=(isset($_POST['ccU_login'])) ? str_replace(" ",'',$_POST['ccU_login']) : null;
$sql ="SELECT * FROM cc_utilisateur WHERE ccU_login=:ccU_login";
$rsql= maquery_sql(array(":ccU_login"=>$ccU_login),$sql);
if (isset($rsql['0'])) { dform::redirect(url_projet.'/r/utilisateur/add/',array('alert_error'=>"Un utilisateur avec le même login existe déjà")); }

if (utilisateur::test_difficulte_password($_POST['ccU_password'])===false) { 
dform::redirect(url_projet.'/r/utilisateur/add/',array('alert_error'=>"Mot de passe trop faible"));
}


$_POST['ccU_password']=utilisateur::crypt_password($_POST['ccU_password']);


dform::save_form('utilisateur',$_POST);

dform::redirect(url_projet.'/r/utilisateur/liste/',array('alert_success'=>"Cet utilisateur a bien été créé"));





}



public function edit($t=null)

{

$sql ="SELECT * FROM cc_utilisateur WHERE ccU_id=:ccU_id";
$rsql = maquery_sql(array(":ccU_id"=>$t),$sql);

if (!isset($rsql['0']))
{

dform::redirect(url_projet.'/r/utilisateur/liste/',array('alert_error'=>"Cet utilisateur ne semble pas exister ?"));

}
$url_projet=url_projet;
$rsql['0']['ccU_password']='';
$txt = "<form method='post' action='$url_projet/r/utilisateur/edit_go/'>";
$txt.= dform::render_form('utilisateur',$rsql['0']);

$txt.="<input type='submit' name='save' value='Enregistrer' class='btn btn-primary'></form>";




$this->view['title_h1']="Modification utilisateur";

$this->view['body']=$txt;
}


public function edit_go($t=null)

{
	
$ccU_password = (isset($_POST['ccU_password'])) ? $_POST['ccU_password'] : null;
if (!empty($ccU_password) )
{



if (utilisateur::test_difficulte_password($ccU_password)===false) { 
dform::redirect(url_projet.'/r/utilisateur/edit/' . $_POST['ccU_id'] ,array('alert_error'=>"Erreur le mot de passe saisi n'est pas assez sécurisé."));


}	
$_POST['ccU_password'] = utilisateur::crypt_password($_POST['ccU_password']);

}
else { unset($_POST['ccU_password']) ; }
dform::save_form('utilisateur',$_POST,array('update'=>true));
dform::redirect(url_projet.'/r/utilisateur/liste/' ,array('alert_success'=>"Modification enregistrée."));


}

static function test_difficulte_password($data)
{
if (strlen($data) < 3) { return false ;}
return true ;

}

static function crypt_password($data)

{

return crypt($data,cfg_salt);

}


public function bloc_utilisateur($t=null)

			{
$url_projet=url_projet;
if (isset($_SESSION['login']))
{
$login=$_SESSION['login'];
$txt = <<<EOD
<div class='row'>
Vous êtes connecté en tant que : $login <br/>
<a href='$url_projet/r/index/logout/'>Se déconnecter</a>
</div>

EOD;
return array('title'=>"Connecté","body"=>$txt);

}


$txt = <<<EOD
<div class='row'>
<form method='post' action='$url_projet/r/index/connect/'>
<div class="form-group"><label class="control-label" for="login">Login de connexion</label><br><input type="text" value="" placeholder='email' name="login" id="login" class="form-control "></div>
<div class="form-group"><label class="control-label" for="login">Mot de passe</label><br><input type="password" value="" placeholder='Mot de passe' name="password" id="password" class="form-control "></div>
<button class="btn btn-info btn-block" type="submit">Se connecter</button>
</form>
</div>

EOD;

return array('title'=>"Connection","body"=>$txt);
			}


}




?>