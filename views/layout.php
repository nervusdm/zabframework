<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

  <title><?php echo (isset($view['title_h1'])) ? $view['title_h1'] : '' ?></title>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo url_projet; ?>/views/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="<?= url_projet; ?>/views/css/style.css" rel="stylesheet">
  <script type="text/javascript" src="<?php echo url_projet; ?>/views/js/jquery.min.js"></script>



  
  <script type="text/javascript" src="<?php echo url_projet; ?>/views/js/jquery.tablesorter.min.js"></script>
  <script>
    var lien_projet = '<?= url_projet; ?>'
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?= url_projet; ?>/views/js/js-snackbar.js"></script>

<link href="<?= url_projet; ?>/views/css/js-snackbar.css" rel="stylesheet" type="text/css"/>


</head>

<body>

  <?php
  if (!Config::read('hide_menu')) {
  ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="<?php echo url_projet . '/r/demo/hello/'; ?>"><?php echo nom_projet; ?></a>
        </div>
        <div class="collapse navbar-collapse" id='main_menu_navbar'>
          <ul class="nav navbar-nav">




            <?php
            $url_projet = url_projet;

            $menu_tab_param['Demo'] = array('id' => 't_maquette', 'lien' => '#', 'allow_grp' => array(1, 2,3), 'icon' => 'fa far fa-grin');
            $menu_tab['Demo']['Une page'] = array('lien' => "$url_projet/r/demo/hello/");
            $menu_tab['Demo']['Une autre page'] = array('lien' => "$url_projet/r/maquette/liste/");


    $menu_tab_param['News'] = array('id' => 't_maquette', 'lien' => '#', 'allow_grp' => array(1, 2,3), 'icon' => 'flaticon-website2');
    $menu_tab['News']['Une page'] = array('lien' => "$url_projet/r/demo/hello/");
    $menu_tab['News']['Admin'] = array('lien' => "$url_projet/r/newsb/liste/",'allow_grp'=>array(1,2));

            $menu_tab_param['Paramètres'] = array('id' => 't_maquette', 'lien' => '#', 'allow_grp' => array(1, 2), 'icon' => 'flaticon-website2');
            $menu_tab['Paramètres']['Utilisateurs'] = array('lien' => "$url_projet/r/utilisateur/liste/");
            $menu_tab['Paramètres']['Une autre page'] = array('lien' => "$url_projet/r/maquette/liste/");

            $menu_tab['Se déconnecter']['Se déconnecter'] = array('lien' => "$url_projet/r/index/logout/");
            $menu_tab_param['Se déconnecter'] = array('id' => 't_logout', 'lien' => "$url_projet/r/index/logout/", 'dropdown' => false, 'icon' => 'flaticon-door13');


            echo dform::menu_gen($menu_tab, $menu_tab_param); ?>

          </ul>
        </div>
        <!--/.nav-collapse -->
    </nav>
    </div>

    </div>
  <?php
  }
  ?>
  <div class="container starter-template">
    <h1>
      <?php echo (isset($view['title_h1'])) ? $view['title_h1'] : '' ?>
    </h1>
    <p class="lead">
      <?php echo (isset($view['description'])) ? $view['description'] : '' ?>

    </p>
  </div>


  <div class="container">

    <?php

    if (isset($view['alert_info'])) {
      echo "<div class='alert alert-info'>" . $view['alert_info'] . "</div>";
    }

    if (isset($view['alert_success'])) {
      echo "<div class='alert alert-success'>" . $view['alert_success'] . "</div>";
    }
    if (isset($view['alert_error'])) {
      echo "<div class='alert alert-danger'>" . $view['alert_error'] . "</div>";
    }



    ?>
    <?php echo (isset($view['breadcrumbs'])) ? breadcrumbs::render($view['breadcrumbs']) : '' ?>

    <?php echo (isset($view['body'])) ? $view['body'] : '' ?>


    <script type="text/javascript" src="<?php echo url_projet; ?>/views/js/javascript.js"></script>




    <?php

    echo dform::asset_load('js');
    echo dform::asset_load('css');



    echo (isset($view['bottom'])) ? $view['bottom'] : '' ?>

  </div>
  <div id='m_load_bar'>

  </div>
  <?php
  if (isset($_SESSION['login'])) {
    $url_projet = url_projet;
    echo "<script type='text/javascript'> var timeradc=setInterval(\"ajaxpro('$url_projet/r/what/sdqlkmlkmdsqlkmdqs/','retest=true')\",50000);</script>";
  }
  ?>
</body>

</html>