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



$errors = Connection::checkLoginInput();
$errors = Connection::logIn($errors);

var_dump($_SESSION['USER']->getNom());

$navStatus = Connection::navConnexion();


if (Connection::authenticated()){
  
}else{
  Connection::checkInput();
}


require '../view/connexion-view.php';
