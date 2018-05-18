<?php
namespace Repository;

use Service\DB;

class CiviliteRepository {

  public static function getCivilite($_civilite){
    $query = new DB();
    return $query->query("SELECT labelle FROM Civilite WHERE id = $_civilite");
  }
}
