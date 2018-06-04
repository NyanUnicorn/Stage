<?php
require '../src/autoload.php';

/* Ici on demande a la machine d'aller chercher les services
 nous permettant de trouver les pages de style,
connection et les images dans l'explorateur de fichier */
use Service\Style;
use Service\Connection;
use Service\Image;

session_start();


/* $head est utilisé pour appeler le header*/
$head = Style::includeExternalHead();
/* $stylesheet est utilisé pour appeler les pages de style*/
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('header-grid') . Style::getStylesheet('side-nav-grid') . Style::getStylesheet('navbar1') . Style::getStylesheet('page-content');
/* $foot est utilisé pour appeler le footer*/
$foot = Style::includeExternalFoot();

/* $image est un tableau d'image
utilisé ici pour récuperer les logos
*/
$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');

/* $uri est la variable servant a recuperer le nom de la page */
$uri = $_SERVER['REQUEST_URI'];
/* $navStatus determine l'affichage de la navbar selon si l'utilisateur est connecté ou non */
$navStatus = Connection::navConnexion();
$menuStatus = Connection::menuConnexion();

require '../view/chiropraxie-view.php';
