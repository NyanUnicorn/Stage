<?php
namespace Repository;

use Service\DB;

class MotifRepository {

  public static function getMotifs(){
    $query = new DB();
    return $query->query("SELECT motif FROM Motif");
  }
}
