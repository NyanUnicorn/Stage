<?php
session_start();
require '../src/autoload.php';

//require '../lib/form.php';
use Service\Form;

require '../models/style.php';
require '../models/connections.php';
require '../models/image.php';

if (authenticated()){

}else{
  checkInput();
}


require '../view/connexion-view.php';
