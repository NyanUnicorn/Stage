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
//input values
$emailInput = Form::resetUserInput('email');
//
$errors = Connection::checkLoginInput();
<<<<<<< HEAD
$errors = Connection::logIn($errors);
=======
$errors = Connection::authentication($errors);

>>>>>>> c25c14bc5ebea607d645bcf87d8fca00c31e4e96

var_dump($_SESSION['USER']->getNom());

$navStatus = Connection::navConnexion();


<<<<<<< HEAD
if (Connection::authenticated()){
  
=======
if(Connection::authenticated()){

>>>>>>> c25c14bc5ebea607d645bcf87d8fca00c31e4e96
}else{
  Connection::checkInput();
}


require '../view/connexion-view.php';
