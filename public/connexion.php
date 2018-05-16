<?php
session_start();
require '../src/autoload.php';

//require '../lib/form.php';
use Service\Form;
use Service\Style;
use Service\Connection;
use Service\Image;
//require '../models/style.php';
//require '../models/connections.php';
//require '../models/image.php';


$head = Style::includeExternalHead();
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('style_form') . Style::getStylesheet('style_menu');
$foot = Style::includeExternalFoot();

$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');

$errors = Connection::logIn();

$navStatus = Connection::navConnexion();


if (Connection::authenticated()){

}else{
  Connection::checkInput();
}


require '../view/connexion-view.php';
