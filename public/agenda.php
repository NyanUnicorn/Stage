<?php
require '../src/autoload.php';

use Service\Calendar;
use Service\Style;
use Service\Connection;
use Service\Image;

session_start();

if(isset($_GET['load'])){
  if($_GET['load']=='true'){
    Calendar::load();
  }else{
    header('Location: /agenda.php');
  }
}else if(isset($_GET['rdv'])){


}else{


$head = Style::includeExternalHead();
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('navbar1') . Style::getStylesheet('header-grid') . Style::getStylesheet('side-nav-grid') . Style::getStylesheet('page-content') . Style::getStylesheet('font/flaticon');
$foot = Style::includeExternalFoot();

$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');
$image['iconhand'] = Image::displayImage('hand.png');
$image['iconglobe'] = Image::displayImage('globe.png');
$image['icontable'] = Image::displayImage('table.png');
$image['iconspine'] = Image::displayImage('spine.png');


$uri = $_SERVER['REQUEST_URI'];

$navStatus = Connection::navConnexion();
$menuStatus = Connection::menuConnexion();

  require '../view/agenda-view.php';
}
