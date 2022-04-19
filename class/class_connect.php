<?php 
class connect
{
public $view=array('no_routable_class'=>true,'title_h1'=>"Login",'body'=>'');

    public function loginForm($t=null,$p=null,$params=null)

    {
        $url_projet = url_projet;
        $txt=dform::load_layout('connect/login.php',array('url_projet'=>$url_projet));
        return $txt;
    }

    static function test_connect()
    {

        if (!isset($_SESSION['login_id'])) {
            session_destroy();
            session_start();
            dform::redirect(url_projet, array('alert_error' => 'Veuillez vous connecter'));
        }
    }

    public function logout()

    {
        if (!isset($_SESSION['prenom'])) {
            session_destroy();
            session_start();

            dform::redirect(url_projet, array('alert_error' => 'Vous êtes déjà déconnecté.'));
        }
        $prenom = $_SESSION['prenom'];
        session_destroy();
        session_start();
        dform::redirect(url_projet, array('alert_success' => $prenom . ', vous avez bien été deconnecté.'));
    }
    // Gère la connexion depuis le formulaire de connexion
    public function connectGo($t=null,$p=null,$params=null)

    {
        $t = $_POST;




        if (!isset($t['login']) || strlen($t['login']) < 2) {
            dform::redirect(url_projet, array('alert_error' => 'Veuillez entrez votre identifiant (email)'));
        }
        if (!isset($t['password']) || strlen($t['password']) < 3) {
            dform::redirect(url_projet, array('alert_error' => 'Veuillez entrez votre mot de passe.'));
        }

        $login = $t['login'];

        $login = $t['login'];
        $password = $t['password'];
        $rsql = maquery_sql(array(":login" => $login), "SELECT * FROM cc_utilisateur
	LEFT JOIN cc_intervenant ON ccI_id =ccU_id_intervenant
	 WHERE ccU_login=:login
LIMIT 0 , 1");

        $MdpCrypt = utilisateur::crypt_password($password);

        if (isset($rsql[0])) {

            $k = $rsql[0];
 
            if ($MdpCrypt == $rsql[0]['ccU_password'] || !empty($connection_token)) {
                $_SESSION = array();
                @session_destroy();
                @session_start();
                $k = $rsql['0'];
                $_SESSION['int'] = $k['ccU_id_intervenant'];

                $_SESSION['raisonsociale'] = $k['ccI_raison_sociale'];

                $_SESSION['group'] = $k['ccU_group'];

                $_SESSION['usr_id'] = $k['ccU_id'];
                $_SESSION['login_id'] = $k['ccU_id'];
                $_SESSION['login'] = $k['ccU_login'];

                $_SESSION['nom'] = $k['ccU_nom'];

                $_SESSION['prenom'] = $k['ccU_prenom'];

                dform::redirect(url_projet . '/r/demo/hello', array('alert_success' => 'Bienvenue  sur ' . nom_projet . ' ' . $k['ccU_prenom']));
            } else {

                dform::redirect(url_projet, array('alert_error' => 'Mot de passe incorrect.'));
            }
        } else {
            dform::redirect(url_projet, array('alert_error' => 'Vérifiez vos identifiants'));
        }
    }


    static function droit_insuffisant()
    {
        dform::redirect(url_projet, array('alert_error' => 'Droit insuffisant !'));
    }



    
}