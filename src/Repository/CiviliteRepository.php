<?php
namespace Repository;

use Service\DB;

/**/
class CiviliteRepository {

  public static function getCivilite($_civilite){
    $query = new DB();

    /*permet d'acceder à la civilité dans la BDD*/
    return $query->query("SELECT labelle FROM Civilite WHERE id = $_civilite");
  }
}
