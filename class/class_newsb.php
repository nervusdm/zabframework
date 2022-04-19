<?php
class newsb {

    // Toute classe prend cette méthode $view.
    public $view =  array('title_h1'=>"Gestion News",'body'=>'','droit'=>array('1','2'));


    public function add($t=null,$p=null,$params=null)
    {
        $url_projet=url_projet;
        $form = dform::render_form('news');
        $txt = <<<HTML
<form method='post' action="$url_projet/r/newsb/add_go/">
$form
<button class="btn btn-primary mt-2">Créer la news</button>
</form>
<script>
    $(document).ready(function()
    {
    divalert('oui','Vous pouvez créer votre news');
    })
</script>

HTML;
$this->view['body']=$txt;
$this->view['title_h1']="Création d'une news";
    }

    /**
     * <summary>
     * Enregistre la news
     * </summary>
     */
    public function add_go($t=null,$p=null,$params=null)
    {
        // Aucune vérification spéciale dans ce test
        $rsql = dform::save_form('news',$_POST);
        if ($rsql >0)
        {
            dform::redirect(url_projet . "/r/newsb/edit/$rsql", array('alert_success' => "Cette news a bien été créée."));
        }
        else { $this->view['alert_error']="Erreur lors de la création de la news"; print_rdebug($rsql); return false ; }
    }


    public function edit($id=null,$p=null,$params=null)
    {
        $id = (int)$id;
        $rsql = newsm::liste(null,null,array('id'=>$id, 'no_active_only'=>true));
        if (empty($rsql['0'])) { $this->view['alert_error']="Erreur. News non trouvée ? "; return false ; }
        $form = dform::render_form('news',$rsql[0]);
        $url_projet=url_projet;
        $txt = <<<HTML
            <form method='post' action="$url_projet/r/newsb/edit_go/$id">
            $form
            <button class="btn btn-primary mt-2">Enregistrer</button>
            </form>

        HTML;
        // On affiche le contenu souhaité de la page avec view['body']
        $this->view['body']=$txt;
        // Le titre s'affiche ainsi.
        $this->view['title_h1']="Modification de #$id";
        // On peut charger le breadcrumbs avec view['breadcrumbs'] Géré par la classe breadcrumbs et installé dans le layout.php
        $bread[0] = array('url' => "{$this->url_projetc}/liste/", "text" => "Liste des news");
        $bread[1] = array('url' => "{$this->url_projetc}/edit/$id", "text" => $rsql['0']['news_titre']);
        $this->view['breadcrumbs'] = $bread;

    }

    public function edit_go($id=null,$p=null,$params=null)
    {
        $id = (int)$id;
        $rsql = dform::save_form('news',$_POST,array('update'=>true));
        dform::redirect(url_projet . "/r/newsb/edit/$id", array('alert_success' => "Cette news a bien été modifiée."));
    }
    
    // Chargement de la liste des news
    public function liste($t=null,$p=null,$params=null)
    {
        $rsql = newsm::liste(null,null,array('no_active_only'=>true));
        // On fait appel à un layout qu'on charge. Par défault dans le dossier views/ Dans le tableau on y envoie les données à afficher.
        $this->view['body'] =  dform::load_layout('newsb/newsb-index.php',array('rsql'=>$rsql));
    }

    // Previsiualisation d'une news
    public function view($id=null,$p=null,$params=null)
    {
        $id = (int)$id;
        $this->view['title_h1']="Prévisialusation de votre news #$id";
        
        $rsql = newsm::liste(null,null,array('id'=>$id, 'no_active_only'=>true));
        if (empty($rsql['0'])) { $this->view['alert_error']="Erreur. News non trouvée ? "; return false ; }
        
        $this->view['body'] =  dform::load_layout('newsb/newsb-view.php',array('rsql'=>$rsql));

        $url_projet=url_projet;

        // On peut charger le breadcrumbs avec view['breadcrumbs'] Géré par la classe breadcrumbs et installé dans le layout.php
        $bread[0] = array('url' => "{$this->url_projetc}/liste/", "text" => "Liste des news");
        $bread[1] = array('url' => "{$this->url_projetc}/view/$id", "text" => $rsql['0']['news_titre']);
        $this->view['breadcrumbs'] = $bread;

    }

}


?>