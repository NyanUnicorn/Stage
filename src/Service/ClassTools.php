<?php
namespace Service;

use Repository\CiviliteRepository as CivRep;

class ClassTools{

  public static function civilite($_civilite){
    var_dump(CivRep::getCivilite($_civilite));
    return CivRep::getCivilite($_civilite);
  }

  public static function age($_date_nais){
    $ajd = date("Y-m-d");
    $diff = date_diff(date_create($_date_nais), date_create($ajd));
    return $diff->format('%y');
  }

  public static function civiliteId($_input){
    return CivRep::getCiviliteId($_input);
  }


}



?>
