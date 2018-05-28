<?php
namespace Service;



  class Style{

    //permet d'inclure toutes les pages de style
  public static function getStylesheet($_name){
    $styleSheet = '<link rel="stylesheet" type="text/css" href="/style/' . $_name . '.css">';
    return $styleSheet;

  }
//permet d'inclure les lien bootsraps et diverses bibliothèques
  public static function includeExternalHead(){
    require '../models/pieces/head_external.php';
  }

//permet d'inclure les bibliothèques javascript
  public static function includeExternalFoot(){
    require '../models/pieces/foot_bootstrap.php';
  }


}
