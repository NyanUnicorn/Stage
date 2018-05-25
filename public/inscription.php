<?php

require '../src/autoload.php';

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
    var_dump(count($errors));
    $errors = array_merge($errors, Connection::createAccount());
  }
}
var_dump(count($errors));
//$errors = array_merge($errors, Connection::createAccount());









$head = Style::includeExternalHead();
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('style_form') . Style::getStylesheet('style_menu') . Style::getStylesheet('navbar');
$foot = Style::includeExternalFoot();

$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');



$civilites = CivRep::listCivilite()->fetchAll();
$civCount = count($civilites);
$motifs = MotifRep::getMotifs()->fetchAll();
$uri = $_SERVER['REQUEST_URI'];
$navStatus = Connection::navConnexion();

require '../view/inscription-view1.php';


?>
