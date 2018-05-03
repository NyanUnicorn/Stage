<?php

function getStylesheet($_name){
  $styleSheet = '<link rel="stylesheet" type="text/css" href="style/' . $_name . '.css">';
  return $styleSheet;

}
