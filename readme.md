# Notice / aperçu du "zframework"

Léger Framework php utilisé entre autres sur les sites :

 - hexacat (complètement)
 - hexaplus (très majoritairement) 
 - hexastat (très majoritairement)


# Répertoires et fichiers importants

 - class : contient les controlleurs et "modèles" présents.
 -  views : contient les vues existantes, les feuilles de styles / js.
 -  lib divers librairies (et le fichier functions.php)
 - vendor tout composer.
 - index.php : Chargé d'analyser les appels pour router la bonne classe
   / méthode, gérer les droits primaires. 
  - class/class_dform.php :  Gestionnaire de form, enregistrement / mise    à jour. Gestion des redirections. Différents helpers. Chargement des    layouts
  -  class/class_mail.php helper de mail 
  - class/Core.php : Core de la BDD.
  - class/Core'Autre' : Core de la BDD 'autre'
  - views/layout.php :    Contient le    layout général, celui utilisé par défault sur le site.
  - config.php : Configuration de base, (bdd...)

## Créer une classe / controller routable

L'autoload lit le nom de la classe et permet d'être utilisé. Les noms de fichiers devraient commencer par class_
Exemple  ci-dessous :
class/class_demo.php, pour la class/controller "demo".
La page sera accessible par http://nom-projet/r/demo/hello/


    <?php
    //class/class_demo.php
    class  demo
    {    
    public  $view = array('droit'=>array('1','2','3'),'title_h1'=>"Demo",'body'=>'');
    
    /*
    Petite methode pour afficher un bref hello world.
    */
    public  function  hello($t=null,$p=null,$params=null)
    
    {
    
    $txt = dform::load_layout('demo/hello.php',array('login'=>$_SESSION['login']));
    
    $this->view['body']='Bonjour'  .  $txt;
    
    $this->view['title_h1']="Hello world";
    
    $this->view['alert_info']="Message d'info, tout se passe bien! ";
    
    }
    
    }
    
    ?>

##  Paramètres existant de la propriété "view".

Bien sûr, toutes ces propriétés peuvent être modifés dans les méthodes.
title_h1: titre de page.
body: Contenu de retour.
droit : array(......) : Droit dépendant du projet / utilisateurs. Chaque "groupe" d'utilisateur peut y être entré.
no_route_class : Si true, indique qu'une classe ne peut pas être chargée "magiquement".
no_route (array) : Indique des méthodes non routables.
e_layout : Permet de définir un fichier qui étendra le layout
layout : permet de remplacer complètement le fichier layout.php "défaut".




## Faire une requête sql 


Les requêtes SELECT / UPDATE / INSERT / DELETE sont supportés, retournant un résultat cohérent.
*maquery_sql(\$tableau,\$requete,\$bdd,\$cache,\$param);*
Exemple : 

    $rsql = maquery_sql(array('id'=>2),"SELECT * FROM exemple WHERE exemple_id=:id;");

Retourne sous forme de tableau associatif (comportement par défault) les résultats de la table "exemple" où l'id est celle du premier tableau.
Créé une requête SQL.

    @param $parametres : tableau associatif des paramètres SQL
    @param $requete : requête SQL
    @param $bdd : l'alias de la base de donnée, laisser vide dans le cas de la bdd de l'app
    @param $cache : si on veut utiliser le cache ex array('duration'=>3600,'folder'=>'lecache')
    @param $params : paramètres supplémentaires



## Charger un formulaire

    $txt = dform::render_form("nom_du_model",$tableau,$params);

Permet de charger un formulaire, qui existe (et chargé) dans les fichiers class/model/
De nombreuses configurations existent, à compléter / vérifier la méthode render_form.

Champs supportés :
string,text, id,date,select (multiple/classique),checkbox,radio

La variable s'appelle $dinput, en premier paramètre le "nom du modèle". En deuxième, la clé, similaire à celle qui existe dans la base de donnée.
Exemple fichier class/model/news-model.php

    $dinput['news']['news_id'] = array('type' => 'id');
    $dinput['news']['news_titre'] = array('type' => 'string', 'label' => "Titre");
    $dinput['news']['news_date_debut'] = array('type' => 'date', 'label' => "Date début de publication",'default'=>date('Y-m-d'));
    $dinput['news']['news_date_fin'] = array('type' => 'date', "label" => "Date fin de publication");
    $dinput['news']['news_statut'] = array('type' => 'select', 'label' => 'Statut de la news', 'leftjoin' => array('class_sql' => 'newsm::liste_statut', 'sql' => 'n', 'key' => 'statut', 'value' => 'statut_libelle'));
    $dinput['news']['news_contenu'] = array('type' => 'text', 'label' => "Contenu", 'text_html_admin' => true);
    $dinput['news']['news_createur'] = array('type' => 'login');
    $dinput_param['news'] = array('table' => 'news', 'htmlspecialchars_allowed' => true);


![enter image description here](https://i.ibb.co/M6qh3zF/Capture-d-cran-2022-04-18-20-11-59.png)

Plus d'infos :
Le fonctionnement d'un SELECT tend à appeler une requête SQL, qui peut être réalisée pour enrichir le contenu du tableau.
Le "key" sera la "value" de l'option du select.
La "value" et "value2" seront ce que l'utilisateur voit dans le menu déroulant.


    $dinput['intervenant']['int_id_catint']=array('type'=> 'select','label'=>"Type",'leftjoin'=>array('sql'=>"SELECT  *  FROM CatInt",'key'=>'cat_id_catint','value'=>'cat_description'));

## Enregistrer un formulaire

A l'aide de l'helper : dform::save_form('nom_du_model',$tableau)
Dans l'idéal, si le formulaire est de type "back office", dédié à des administrateurs, il faut prévoir, pour une meilleure clareté l'ajout de la lettre b à la fin de la class.
**Exemple:**
class_news**b**.php


    public  function  add($t=null,$p=null,$params=null)
    {
    $url_projet=url_projet;
    $form = dform::render_form('news');
    $txt = <<<HTML
    
    <form  method='post'  action="$url_projet/r/newsb/add_go/">
    
    $form
    
    <button  class="btn btn-primary mt-2">Créer la news</button>
    
    </form>
    
      
    
    HTML;
    
    $this->view['body']=$txt;
    
    $this->view['title_h1']="Création d'une news";
    
    }
    
      
    
    /**
    
    * <summary>
    
    * Enregistre la news
    
    * </summary>
    
    */
    
    public  function  add_go($t=null,$p=null,$params=null)
    
    {
    
    // Aucune vérification spéciale dans ce test
    
    $rsql = dform::save_form('news',$_POST);
    
    if ($rsql >0)
    
    {
    
    dform::redirect(url_projet .  "/r/newsb/edit/$rsql", array('alert_success' => "Cette news a bien été créée."));
    
    }
    
    else { $this->view['alert_error']="Erreur lors de la création de la news"; print_rdebug($rsql); return  false ; }
    
    }



Un champ de type date sera automatiquement / converti à la date.
Diverses vérifications sont faites (cas d'upload de fichier).
Mais certaines vérifications peuvent nécessiter, une vérification de champ au cas par cas.



## Nomenclature recommandée

class/class_nomclass.php : le fonctionnement classique d'un fichier "public".
class/class_nomclass**b**.php : le back office recommandé.
class/class_nomclass**m**.php la liste des requetes en lecture, avec une méthode "liste" présente, et une liste de tableau.

Bien que souple, Les layouts/vues/css/js devraient être dans les dossiers :
views/module/nom-fichier.php


## Charger un JS

Dans le cas d'un JS occassionnel (pour un module)
*param_sup pourrait enrichi avec array('full_link'=>true), si on souhaite charger un fichier js distant.*

A mettre directement dans le __construct ou dans la méthode...

    dform::asset('nom_fichier.js','js',$param_sup);

Cette ligne chargera le fichier présent dans le répertoire "views/js/nom_fichier.js"


## Charger un CSS

Dans le cas d'un CSS occassionnel (pour un module)
*param_sup pourrait enrichi avec array('full_link'=>true), si on souhaite charger un fichier css distant.*

A mettre directement dans le __construct ou dans la méthode...

    dform::asset('nom_fichier.css','css',$param_sup);

Cette ligne chargera le fichier présent dans le répertoire "views/css/nom_fichier.css"



## Envoyer un mail

Un helper dans la class_mail a été créé pour cela :

/* Sending an email.

Exemple :

mail::send(null,array('from_mail'=>mail_robot,'from_nom'=>mail_robot,'destinataires'=>"jojo1@gmail.com;jojo2@gmail.com",'mail'=>$mail_contenu,'subject'=>"Sujet du mail"));


## Les tables html.

Les tables sont souvent utilisées pour affichier des champs d'administrations.
Il est conséillé d'utiliser les class css (à définir) table ltable mtable table ltable mtable sort_table filter_table export_table

Cela permet de définir une apparence commune, maximisé, d'appliquer la librairie jquery "tablesorter", et de créer un bouton d'export .excel du contenu, dynamisé par la class "to_excel"

## Créer une table SQL

Il est possible de passer par phpmyadmin / gestionnaire SQL, ou d'utiliser le rendu dform "generate_table"
projet/r/dform/generate_table/nom_model.
Ceci affiche une requête SQL à copier coller dans le gestionnaire SQL. ( rien n'est créé automatiquement).

> dform::evolution_bdd_all // indique si un champ a été rajouté dans un model et pas dans la base de donnée




## Communiquer avec l'utilisateur

En cas d'erreur ou de succès, il est possible de charger un snackbar via la fonction javascript "divalert"

<script>

$(document).ready(function()
{
divalert('oui','Vous pouvez créer votre news');
})
</script>


![enter image description here](https://i.ibb.co/2chBJnY/Capture-d-cran-2022-04-18-20-54-07.png)


De la même manière, il est possible d'indiquer après  une redirection une erreur, une info, un succès... via 

    dform::redirect('url',array('alert_error'=>"Message d'erreur');


## AJAX

Une fonction javascript existe. "ajaxpro('url',POST);"
Cette fonction envoie un message au serveur, il est recommandé, pour plus de clarté et éviter le chargement complet du layout, d'appeller l'url via :
http://localhost/ra/class/method/param1/param2/
(/ra/ au lieu de /r/ pour indiquer que la requete est de type AJAX).
Il est à noter que ajaxpro attend un retour javascript du serveur et l'executera via un EVAL.


A noter : tout formulaire ayant la class "submit_ajax" executera automatiquement un appel vers le server de son "method", en envoyant les données du dit formulaire.


