<?php

require '../src/autoload.php';

/* Ici on demande a la machine d'aller chercher les services
 nous permettant de trouver les formulaires, pages de style,
connection et les images dans l'explorateur de fichier */
use Service\Form;
use Service\Style;
use Service\Connection;
use Service\Image;
use Repository\MotifRepository as MotifRep;
use Repository\UserRepository as UserRep;
use Repository\CiviliteRepository as CivRep;

session_start();

$errors = [];
if(isset($_POST['prenom'])){
  $errors = Connection::checkInscription();
  if(count($errors)<=0){
    $errors = array_merge($errors, Connection::createAccount());
    if(count($errors)<=0){
      Connection::authentication($errors, $_POST['email'], $_POST['pswd']);
    }
  }
}

if(Connection::authenticated()){
  header('Location: /index.php');
}





/* $head est utilisé pour appeler le header*/
$head = Style::includeExternalHead();
/* $stylesheet est utilisé pour appeler les pages de style*/
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('header-grid') . Style::getStylesheet('side-nav-grid') . Style::getStylesheet('style_form') . Style::getStylesheet('navbar1') . Style::getStylesheet('page-content') . Style::getStylesheet('font/flaticon');
/* $foot est utilisé pour appeler le footer*/
$foot = Style::includeExternalFoot();

/* $image est un tableau d'image
utilisé ici pour récuperer les logos
*/
$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');


/* $uri est la variable servant a recuperer le nom de la page */


$civilites = CivRep::listCivilite()->fetchAll();
$civCount = count($civilites);
$motifs = MotifRep::getMotifs()->fetchAll();

/* $uri est la variable servant a recuperer le nom de la page */

$uri = $_SERVER['REQUEST_URI'];
/* $navStatus determine l'affichage de la navbar selon si l'utilisateur est connecté ou non */
$navStatus = Connection::navConnexion();
$menuStatus = Connection::menuConnexion();

/*ouverture de la page*/
require '../view/inscription-view1.php';
?>
