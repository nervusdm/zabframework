<?php
$url_projet=$view['url_projet'];
$txt =<<<HTML
<div class="row">
  <div class='col-md-4 offset-md-4'>
    <div class="card">
      <div class="card-header">
        Connectez-vous
      </div>
      <div class="card-body">
        <form method='post' action='$url_projet/r/index/connectGO/'>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Login</label>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-user"></i></span>
              <input type="text" name='login' class="form-control" placeholder="mail@mail.fr">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-lock"></i></span>
              <input type="password" name='password' class="form-control">
            </div>

            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Se connecter</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

HTML;
echo $txt;