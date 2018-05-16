<?php

namespace Repository;

use Service\DB;

class UserRepository {
  public static function loginUser($_email, $_pwd){
    $query = new DB();
    return $query->query("SELECT id, role, status, nom, prenom, email, date_nais, ville, Civilite_id FROM User WHERE email = $_email AND mdp = $_pwd");
  }


}
