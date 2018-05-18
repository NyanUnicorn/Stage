<?php
require '../src/autoload.php';


use Service\Style;
use Service\Connection;
use Service\Image;

session_start();


$head = Style::includeExternalHead();
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('style_menu');
$foot = Style::includeExternalFoot();

$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');
$image['bande'] = Image::displayImage('fond0.png');



$navStatus = Connection::navConnexion();

require '../view/index-view2.php';

?>
