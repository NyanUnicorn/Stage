<?php
require '../src/autoload.php';

use Service\Style;
use Service\Connection;
use Service\Image;

session_start();


$head = Style::includeExternalHead();
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('style_menu') . Style::getStylesheet('navbar');
$foot = Style::includeExternalFoot();

$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');

$uri = $_SERVER['REQUEST_URI'];
$navStatus = Connection::navConnexion();


require '../view/chiropraxie-view.php';
