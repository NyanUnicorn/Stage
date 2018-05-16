<?php
namespace Service;


class Form{

function getInputPost($name){
  return filter_input(INPUT_POST, $name);
}

function getInputArray($name){
  return filter_input(INPUT_POST, $name , FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
}


function testPasswordConfirm($name1, $name2){
  $toReturn = 0;
  if(getInputPost($name1) == getInputPost($name2)){
    $toReturn = 1;
  }
  return $toReturn;
}

function resetUserInput($_name){
    return 'value="' .  htmlentities(getInputPost($_name)) . '"';
}


function printM($_type, $_string){
  $toEcho = '';
  switch($_type){
    case 'p':
      $toEcho = '<p' . $_string . '</p>';
      break;
    case 'span':
      $toEcho = '<span>' . $_string . '</span>';
      break;
    case 'value':
      $toEcho = 'value="' . $_string . '" ';
      break;
    default:
      break;
  }
  echo $toEcho;
}

}
