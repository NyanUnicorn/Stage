<?php
require '../src/autoload.php';

use Service\Form;
use Service\Style;
use Service\Connection;
use Service\Image;
use Entity\User;

session_start();

//Webpage formatting
$head = Style::includeExternalHead();
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('style_form') . Style::getStylesheet('style_menu');
$foot = Style::includeExternalFoot();

//external resources
$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');


//authentication check
if(Connection::authenticated()){
  header('Location: /index.php');
}else{
  $errors = Connection::checkLoginInput();
  $errors = Connection::authentication($errors);
}
//supprimer le mot de passe
if(isset($_POST['password'])){
  $_POST['password'] = NULL;
  header('Location: /connexion.php');
}

//input values
$emailInput = $_SESSION['emailInput'];
$navStatus = Connection::navConnexion();

//open page
require '../view/connexion-view.php';
