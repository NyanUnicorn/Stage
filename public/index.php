<?php
require '../src/autoload.php';

/* Ici on demande a la machine d'aller chercher les services
 nous permettant de trouver les pages de style,
connection et les images dans l'explorateur de fichier */
use Service\Style;
use Service\Connection;
use Service\Image;
use Repository\CompteurRepository as ComptRep;

session_start();



$head = Style::includeExternalHead();

$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('navbar1') . Style::getStylesheet('header-grid') . Style::getStylesheet('side-nav-grid') . Style::getStylesheet('page-content') . Style::getStylesheet('font/flaticon');

$foot = Style::includeExternalFoot();



$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');
$image['bande'] = Image::displayImage('fond1.1.png');
$image['iconhand'] = Image::displayImage('hand.png');
$image['iconglobe'] = Image::displayImage('globe.png');
$image['icontable'] = Image::displayImage('table.png');
$image['iconspine'] = Image::displayImage('spine.png');
$image['iconwheel'] = Image::displayImage('roueCrevee.png');
$image['iconcloud'] = Image::displayImage('nuage.jpg');

$resultat = ComptRep::infoCompteur()->fetchAll();


if(isset($resultat)){

  $resKm = ComptRep::recupKm()->fetchAll();

  $resultat[2]['valeure'] = $resKm[0]['valeure'] * 0.271;
}



/* $uri est la variable servant a recuperer le nom de la page */
$uri = $_SERVER['REQUEST_URI'];
/* $navStatus determine l'affichage de la navbar selon si l'utilisateur est connecté ou non */
$navStatus = Connection::navConnexion();
$menuStatus = Connection::menuConnexion();

/*ouverture de la page*/
require '../view/index-view.php';
