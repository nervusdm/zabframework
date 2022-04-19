<?php
$login = $view['login'];



$txt =<<<HTML

<div class="card">
  <div class="card-body">
    Bonjour $login ! Ceci est une page de démo.
  </div>
</div>

HTML;
echo $txt;