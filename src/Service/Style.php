<?php
namespace Service;



  class Style{
  public static function getStylesheet($_name){
    $styleSheet = '<link rel="stylesheet" type="text/css" href="/style/' . $_name . '.css">';
    return $styleSheet;

  }

  public static function includeExternalHead(){
    require '../models/pieces/head_external.php';
  }

  public static function includeExternalFoot(){
    require '../models/pieces/foot_bootstrap.php';
  }


}
