<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
  <link href="<?= url_projet; ?>/ro/views/css/style.css" rel="stylesheet">

  <title><?php echo (isset($view['title_h1'])) ? $view['title_h1'] : '' ?></title>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="<?php echo url_projet; ?>/views/js/jquery.min.js"></script>
<script src="<?= url_projet; ?>/views/js/js-snackbar.js"></script>

<link href="<?= url_projet; ?>/views/css/js-snackbar.css" rel="stylesheet" type="text/css"/>

</head>

<body>






  <div class="jumbotron gradient_blue ">

    <div class="container">
      <div class="col-md-6 col-md-offset-3 centerfy ">
        <h1>
          <?php echo (isset($view['title_h1'])) ? $view['title_h1'] : '' ?>
        </h1>
        <?php echo (isset($view['description'])) ? $view['description'] : '' ?>
      </div>
    </div>
  </div>





  <div class="container">

    <?php
    if (isset($view['alert_success'])) {
      echo "<div class='alert alert-success'>" . $view['alert_success'] . "</div>";
    }
    if (isset($view['alert_error'])) {
      echo "<div class='alert alert-danger'>" . $view['alert_error'] . "</div>";
    }



    ?>
    <?php echo (isset($view['body'])) ? $view['body'] : '' ?>





    <?php echo (isset($view['bottom'])) ? $view['bottom'] : '' ?>

  </div>
</body>

</html>