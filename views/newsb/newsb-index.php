<?php

$rsql = $view['rsql'];
$url_projet=url_projet;

$txt = dform::array_to_table($rsql, array(
    'htmlcheck' => array('label' => '', 'td_class' => 'td_table_input_checked', "html" => "<input type='checkbox' value='' class='table_input_checked' name='table_checked[%%news_id%%]'>"),
    'news_id' => array('label' => 'N°'),
    'news_titre' => array('label' => 'Titre'),
    'news_date_debut' => array('label' => 'Date début'),
    'news_date_fin' => array('label' => 'News date fin'),
    'html1' => array('label' => '', "html" => "<a class='btn btn-xs' href='{$url_projet}/r/newsb/edit/%%news_id%%/'><i class='fa far fa-file-edit'></i></a>"),
    'html2' => array('label' => '', "html" => "<a class='btn btn-xs' href='{$url_projet}/r/newsb/view/%%news_id%%/'><i class='fa-solid fa-eye'></i></a>")
), array('id_table' => 'table_news'));

$txt = <<<HTML
<a href='$url_projet/r/newsb/add' class='btn btn-primary mb-1'><i class='fa fa-plus-square'></i> Ajouter</a>
$txt

HTML;
echo $txt ;



?>