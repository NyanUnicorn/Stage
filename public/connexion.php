<?php
require '../src/autoload.php';

/* Ici on demande a la machine d'aller chercher les services
 nous permettant de trouver les formulaires, pages de style,
connection et les images dans l'explorateur de fichier */
use Service\Form;
use Service\Style;
use Service\Connection;
use Service\Image;

/* Recuperation de la classe User*/
use Entity\User;




session_start();

/* $head est utilisé pour appeler le header*/
$head = Style::includeExternalHead();
/* $stylesheet est utilisé pour appeler les pages de style*/
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('header-grid') . Style::getStylesheet('side-nav-grid')  . Style::getStylesheet('style_form') .  Style::getStylesheet('navbar') .  Style::getStylesheet('side-nav-grid') . Style::getStylesheet('page-content')  ;
/* $foot est utilisé pour appeler le footer*/
$foot = Style::includeExternalFoot();


/* $image est un tableau d'image
utilisé ici pour récuperer les logos
*/
$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');


/*Verification de l'authentification*/
if(Connection::authenticated()){
  header('Location: /index.php');
}else{
  /* Verification de l'email et mdp*/
  $errors = Connection::checkLoginInput();
  /* Si pas d'erreurs connexion de l'utilisateur */
  $errors = Connection::authentication($errors);
}
//supprimer le mot de passe
if(isset($_POST['password'])){
  $_POST['password'] = NULL;
  header('Location: /connexion.php');
}

//input values
$emailInput = '';
if(isset($_SESSION['emailInput'])){
  $emailInput = $_SESSION['emailInput'];
}
/* $uri est la variable servant a recuperer le nom de la page */
$uri = $_SERVER['REQUEST_URI'];
/* $navStatus determine l'affichage de la navbar selon si l'utilisateur est connecté ou non */
$navStatus = Connection::navConnexion();

/*ouverture de la page*/
require '../view/connexion-view.php';
