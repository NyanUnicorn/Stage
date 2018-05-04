<?php

function getStylesheet($_name){
  $styleSheet = '<link rel="stylesheet" type="text/css" href="/style/' . $_name . '.css">';
  return $styleSheet;

}

function includeExternalHead(){
  require 'pieces/head_external.php';
}

function includeExternalFoot(){
  require 'pieces/foot_bootstrap.php';
}
