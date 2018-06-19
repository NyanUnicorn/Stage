<?php
namespace Service;

use Repository\CiviliteRepository as CivRep;
use Repository\UserRepository as UserRep;


class ClassTools{
//fonction qui permet de recuperer la civilite dans la BDD
  public static function civilite($_civilite){
    return CivRep::getCivilite($_civilite);
  }
//fonction qui permet de calculer l'age
  public static function age($_date_nais){
    $ajd = date("Y-m-d");
    $diff = date_diff(date_create($_date_nais), date_create($ajd));
    return $diff->format('%y');
  }
//fonction permetant de récuperer l'id de la civilite dans la BDD
  public static function civiliteId($_input){
    return CivRep::getCiviliteId($_input);
  }
  public static function generateRandomString($length) { //thanks to https://stackoverflow.com/questions/4356289/php-random-string-generator for saving some time
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

}



?>
