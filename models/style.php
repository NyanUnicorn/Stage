<?php

function getStylesheet($_name){
  $styleSheet = '<link rel="stylesheet" type="text/css" href="/style/' . $_name . '.css">';
  return $styleSheet;

}

function includeBootstrapHead(){
  require 'pieces/head_bootstrap.php';
}

function includeBootstrapFoot(){
  require 'pieces/foot_bootstrap.php';
}
