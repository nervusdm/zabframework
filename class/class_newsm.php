<?php
class newsm {
public $view=array('title_h1'=>"Gestion News",'body'=>'','droit'=>array('1','2'),'no_routable_class'=>true);


    //Affichage des status.
    static function liste_statut($t = null, $p = null, $params = null)
    {
        $tableau = null;
        $tableau[] = array('statut' => '', 'statut_libelle' => "Actif : Priorité normale", 'class' => '');
        $tableau[] = array('statut' => 'brouillon', 'statut_libelle' => 'Brouillon (en attente de relecture)', 'class' => 'cmsg black');
        $tableau[] = array('statut' => 'important', 'statut_libelle' => 'Important : En haut de page', 'class' => 'cmsg cmsg_info');

        $tableau[] = array('statut' => 'disabled', 'statut_libelle' => 'Désactivé', 'class' => 'cmsg cmsg_danger');

        if (isset($params['return_key'])) {

            foreach ($tableau as $k => $v) {
                $tabkey[$v['statut']] = $v;
            }


            return $tabkey;
        }

        return $tableau;
    }

    /**
        Retourne la liste des news.
        @params : id 
        @params no_active_only si n'est pas vide, retourne que les news valide.
    */
    static function liste($t=null,$p=null,$params=null) 
    {
        $sql_more_tableau=$sql_more=null;

        if (isset($params['id'])) {
            $sql_more.= " AND news_id=:id ";
            $sql_more_tableau[':id'] = $params['id'];
        }
        if (empty($params['no_active_only'])) 
        {
            $sql_more.= " AND news_statut='on' ";
        }

        $sql="SELECT * from news where 1 $sql_more ";
        $rsql=maquery_sql($sql_more_tableau,$sql);
        return $rsql;

        
    }

}


?>