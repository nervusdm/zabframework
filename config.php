<?php

define("url_projet", "http://localhost/zframework/");
define("lien_projet",url_projet); // alias
define('nom_projet','Mon Projet');
define("aujourdhui",date("Y-m-d H:i:s"));
define("cfg_salt","mpOdsqk,dk,qs00123kksqndjèèèsxKH");
define("lien_image_article",'hupload/images-article');
define("upload_dir","views/upload/");
define("upload_dir_document","hupload/documents/");
define('root_dir',realpath(dirname(__FILE__)));

Config::write('db.host', 'localhost');
Config::write('db.port', '3306');


Config::write('db.basename', 'monprojet');
if (defined('is_test') &&  is_test == true) {
    Config::write('db.basename', 'monprojet_test');
}

Config::write('db.user', 'monprojet');
Config::write('db.password', 'Passw0rd66600!');

Config::write('cle', 'La Vitrine Medicale - Notre Proximite Votre Meilleure Garantie');
Config::write('cleiv', '8642689074268564357014358130856');

Config::write('db.host_ext', 'localhost');
Config::write('db.port_ext', '3306');
Config::write('db.basename_ext', 'test');
Config::write('db.user_ext', 'test');
Config::write('db.password_ext', '12345demo');


?>
