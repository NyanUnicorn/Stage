<?php
namespace Service;



  class Style{

    //permet d'inclure toutes les pages de style
    public static function getStylesheet(){
      $output = [];
      $argv = func_get_args();
      switch(func_num_args()){
        case 1:
          $stylsheet = self::getStylesheet1($argv[0]);
          break;
        case 2:
          $stylsheet = self::getStylesheet2($argv[0], $argv[1]);
          break;
      }
      return $stylsheet;
    }
  public static function getStylesheet1($_name){
    $styleSheet = '<link rel="stylesheet" type="text/css" href="/style/' . $_name . '.css">';
    return $styleSheet;
  }
  public static function getStylesheet2($_path, $_name){
    $styleSheet = '<link rel="stylesheet" type="text/css" href="'. $_path .'/'. $_name . '.css">';
    return $styleSheet;
  }
//permet d'inclure les lien bootsraps et diverses bibliothèques
public static function includeExternalHead(){
  $output = [];
  $argv = func_get_args();
  switch(func_num_args()){
    case 0:
      self::includeExternalHead1();
      break;
    case 1:
      self::includeExternalHead2($argv[0]);
      break;
  }
}


  public static function includeExternalHead1(){
    require '../models/pieces/head_external.php';
  }
  public static function includeExternalHead2($_input){
    require $_input.'models/pieces/head_external.php';
  }

//permet d'inclure les bibliothèques javascript
public static function includeExternalFoot(){
  $output = [];
  $argv = func_get_args();
  switch(func_num_args()){
    case 0:
      self::includeExternalFoot1();
      break;
    case 1:
      self::includeExternalFoot2($argv[0]);
      break;
  }
}


  public static function includeExternalFoot1(){
    require '../models/pieces/foot_bootstrap.php';
  }
  public static function includeExternalFoot2($_input){
    require $_input.'models/pieces/foot_bootstrap.php';
  }


}
