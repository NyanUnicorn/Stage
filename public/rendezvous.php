<?php
require '../src/autoload.php';


use Service\Style;
use Service\Connection;
use Service\Image;
use Service\Calendar;

session_start();

$RDV = NULL;

if(isset($_SESSION['rdv']) && isset($_SESSION['USER'])  && isset($_GET['myrdv'])){
  if(Calendar::validRendezVous($_SESSION['rdv'], $_GET['myrdv'])){
    $RDV = Calendar::getRdv($_SESSION['rdv'], $_GET['myrdv']);
  }else{
    header('Location: /agenda.php');
  }
}else{
  header('Location: /agenda.php');
}

$USER = $_SESSION['USER'];



//change to Admin when finnished!!!!!!!!!!
if(isset($_GET['option'])){
  if($USER->getRole() == Roles::Admin){
    if($RDV->getStatus() == RdvStatus::Requested){
      Calendar::executeRdvOption($_GET['option'], $RDV);
      //header('Location: /agenda.php');
    }
  }
}


$head = Style::includeExternalHead();
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('navbar1') . Style::getStylesheet('header-grid') . Style::getStylesheet('side-nav-grid') . Style::getStylesheet('page-content') . Style::getStylesheet('font/flaticon');
$foot = Style::includeExternalFoot();

/* $image est un tableau d'image
utilisé ici pour récuperer les logos et le beandeau de la page d'acceuil
*/
$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');
$image['iconhand'] = Image::displayImage('hand.png');
$image['iconglobe'] = Image::displayImage('globe.png');
$image['icontable'] = Image::displayImage('table.png');
$image['iconspine'] = Image::displayImage('spine.png');




/* $uri est la variable servant a recuperer le nom de la page */
$uri = $_SERVER['REQUEST_URI'];
/* $navStatus determine l'affichage de la navbar selon si l'utilisateur est connecté ou non */
$navStatus = Connection::navConnexion();
$menuStatus = Connection::menuConnexion();

/*ouverture de la page*/
require '../view/rendezvous-view.php';
