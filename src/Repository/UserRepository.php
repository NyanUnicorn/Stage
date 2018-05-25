<?php

namespace Repository;

use Service\DB;
use Service\ClassTools as Tool;
use Enumeration\Roles;
use Enumeration\Status;

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
  public static function createUser($user, $password){
    $nom = $user->getNom();
    $prenom = $user->getPre();
    $date_nais = $user->getDateNais();
    $date_crea = $user->getDateCrea();
    $adresse = $user->getAdresse();
    $complement = $user->getCompAdresse();
    if(strlen($complement)==0){$complement = NULL;}
    $cd_postale = $user->getCodePostale();
    $ville = $user->getVille();
    $email = $user->getEmail();
    $telephone = $user->getTel();
    $profession = $user->getProfession();
    $role = $user->getRole();
    $motif = $user->getMotif();
    $mdp = $password;
    $status = $user->getStatus();
    $Civilite_id = Tool::civiliteId($user->getCivilite());
    $newsletter = $user->getNewsletter();
    $execute = new DB();
    //$sql = "INSERT INTO `user` (`nom`, `prenom`, `date_nais`, `date_crea`, `adresse`, `complement`, `cd_postale`, `ville`, `email`, `telephone`, `profession`, `role`, `motif`, `mdp`, `status`, `Civilite_id`, `newsletter`)
    //VALUES ('$nom', '$prenom', '$date_nais', '$date_crea', '$adresse', '$complement', '$cd_postale', '$ville', '$email', '$telephone', '$profession', '$role', '$motif', '$mdp', '$status', '$Civilite_id', '$newsletter');";
    $stmt = $execute->prepare("INSERT INTO `user` (`nom`, `prenom`, `date_nais`, `date_crea`, `adresse`, `complement`, `cd_postale`, `ville`, `email`, `telephone`, `profession`, `role`, `motif`, `mdp`, `status`, `Civilite_id`, `newsletter`)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $stmt->execute(array($nom, $prenom, $date_nais, $date_crea, $adresse, $complement, $cd_postale, $ville, $email, $telephone, $profession, $role, $motif, $mdp, $status, $Civilite_id, $newsletter));
    //var_dump();
  }


}
