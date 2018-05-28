<?php
namespace Repository;

use Service\DB;

class MotifRepository {

  public static function getMotifs(){
    $query = new DB();

    //requete SQL pour recuperer le motif
    return $query->query("SELECT motif FROM Motif");
  }
}
