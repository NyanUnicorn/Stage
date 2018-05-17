<?php
session_start();
require '../src/autoload.php';

use Service\Form;
use Service\Style;
use Service\Connection;
use Service\Image;

$head = Style::includeExternalHead();
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('style_form') . Style::getStylesheet('style_menu');
$foot = Style::includeExternalFoot();

$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');

$navStatus = Connection::navConnexion();

require '../view/inscription-view.php';


?>
