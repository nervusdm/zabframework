<?php

$dinput['utilisateur']['ccU_id'] = array('type' => 'id');
$dinput['utilisateur']['ccU_login'] = array('type' => 'string', 'label' => "Login de connexion");
$dinput['utilisateur']['ccU_nom'] = array('type' => 'string', 'label' => "Nom");
$dinput['utilisateur']['ccU_prenom'] = array('type' => 'string', "label" => "Prénom");
$dinput['utilisateur']['ccU_password'] = array('type' => 'string', 'label' => "Mot de passe");

$dinput['utilisateur']['ccU_group'] = array('type' => 'select', 'label' => 'Group', 'leftjoin' => array('sql' => 'SELECT * FROM cc_group ORDER BY ccG_nom ASC ', 'key' => 'ccG_id', 'value' => 'ccG_nom'));

$dinput['utilisateur']['ccU_nom_orthop'] = array('type' => 'string', 'label' => 'Nom 3 lettres orthop');

$dinput_param['utilisateur'] = array('table' => 'cc_utilisateur');


$dinput['intervenant']['ccI_id'] = array('type' => 'id');
$dinput['intervenant']['ccI_raison_sociale'] = array('type' => 'string', 'label' => "Raison sociale");
$dinput['intervenant']['ccI_commune'] = array('type' => 'string', 'label' => "Commune");
$dinput['intervenant']['ccI_adr1'] = array('type' => 'text', 'label' => "Adresse");

$dinput_param['intervenant'] = array('table' => 'cc_intervenant', 'htmlspecialchars' => true);



?>