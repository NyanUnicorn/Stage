<?php
session_start();
require '../src/autoload.php';

//require '../lib/form.php';
use Service\Form;
use Service\Style;
//require '../models/style.php';
require '../models/connections.php';
require '../models/image.php';


$head = Style::includeExternalHead();
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('style_form') . Style::getStylesheet('style_menu');
$foot = Style::includeExternalFoot();


if (authenticated()){

}else{
  checkInput();
}


require '../view/connexion-view.php';
