<?php
session_start();
require '../src/autoload.php';

require '../lib/form.php';
require '../models/style.php';
require '../models/connections.php';

if (authenticated()){

}else{
  checkInput();
}


require '../view/connexion-view.php';
