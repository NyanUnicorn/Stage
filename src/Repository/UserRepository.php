<?php

namespace Repository;

use Service\DB;

class UserRepository {
  public static function loginUser($_email, $_pwd){
    $query = new DB();
    return $query->query("SELECT id, role, status, nom, prenom, email, date_nais, ville, Civilite_id FROM User WHERE email = '$_email' AND mdp = '$_pwd'");
  }
  public static function userExist($_email){
    $exists = TRUE;
    $query = new DB();
    $return = $query->query("SELECT email FROM User WHERE email = '$_email'");

    $result = $return->fetchAll();
    if(count($result) == 0){
      $exists = FALSE;
    }
    return $exists;
  }


}
