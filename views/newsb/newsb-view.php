<?php

$rsql = $view['rsql'];
$news_titre = $view['rsql'][0]['news_titre'];
$news_contenu = $view['rsql'][0]['news_contenu'];
/*$rsql = print_r($view['rsql']);*/
$url_projet=url_projet;


$txt =<<<HTML

<div class="row">
    <div class="col">
        <h1>$news_titre</h1>
        <p>$news_contenu</p>
    </div>
</div>

HTML;
echo $txt;

?>