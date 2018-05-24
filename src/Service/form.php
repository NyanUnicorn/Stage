<?php
namespace Service;


class Form{

  public static function getInputPost($name){
    return filter_input(INPUT_POST, $name);
  }

  public static function getInputArray($name){
    return filter_input(INPUT_POST, $name , FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
  }


  public static function testPasswordConfirm($name1, $name2){
    $toReturn = 0;
    if(self::getInputPost($name1) === self::getInputPost($name2)){
      $toReturn = 1;
    }
    return $toReturn;
  }

  public static function resetUserInput($_name){
      return 'value="' .  htmlentities(self::getInputPost($_name)) . '"';
  }


  public static function printM($_type, $_string){
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
    return $toEcho;
  }

}
