<?php

$dinput['news']['news_id'] = array('type' => 'id');
$dinput['news']['news_titre'] = array('type' => 'string', 'label' => "Titre");
$dinput['news']['news_date_debut'] = array('type' => 'date', 'label' => "Date début de publication",'default'=>date('Y-m-d'));
$dinput['news']['news_date_fin'] = array('type' => 'date', "label" => "Date fin de publication");
$dinput['news']['news_statut'] = array('type' => 'select', 'label' => 'Statut de la news', 'leftjoin' => array('class_sql' => 'newsm::liste_statut', 'sql' => 'n', 'key' => 'statut', 'value' => 'statut_libelle'));
$dinput['news']['news_contenu'] = array('type' => 'text', 'label' => "Contenu", 'text_html_admin' => true);
$dinput['news']['news_createur'] = array('type' => 'login');
$dinput_param['news'] = array('table' => 'news', 'htmlspecialchars_allowed' => true);
