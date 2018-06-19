<?php

namespace Repository;

use Service\DB;
use Service\ClassTools as Tool;
use Enumeration\Roles;
use Enumeration\Status;

class UserRepository {
  public static function getId($_email){
    $query = new DB();
    $return = $query->query("SELECT id FROM User WHERE email = '$_email' AND status = '1'");
    return $return->fetch();
  }
  public static function getHashedPwd($_email, $_pwd){
    $query = new DB();
    $return = $query->query("SELECT mdp FROM User WHERE email = '$_email' AND status = '1'");
    $hash = $return->fetch();
    return password_verify($_pwd, $hash[0]);
  }
  public static function loginUser($_email, $_pwd){
    $query = new DB();
    $result = 'no_login';
    if(self::getHashedPwd($_email, $_pwd)){
      $result = $query->query("SELECT id, role, status, nom, prenom, email, date_nais, ville, Civilite_id FROM User WHERE email = '$_email'");
    }
    /* permet de trouver les informations d'un utilisateur dans la BDD*/
    return $result;
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

  //recupération d'info sur l'utilisateur connecté
  public static function userInfo($_email){

    $query = new DB;
    return $query->query("SELECT prenom, nom, date_nais, adresse, complement, ville, cd_postale, email, telephone, profession, newsletter, Civilite_id FROM User WHERE email='$_email'");
  }

  //fonction qui permet de créer un utilisateur
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
    $mdp = password_hash($password, PASSWORD_DEFAULT);
    $status = $user->getStatus();
    $Civilite_id = Tool::civiliteId($user->getCivilite());
    $newsletter = $user->getNewsletter();
    $execute = new DB();
    //$sql = "INSERT INTO `user` (`nom`, `prenom`, `date_nais`, `date_crea`, `adresse`, `complement`, `cd_postale`, `ville`, `email`, `telephone`, `profession`, `role`, `motif`, `mdp`, `status`, `Civilite_id`, `newsletter`)
    //VALUES ('$nom', '$prenom', '$date_nais', '$date_crea', '$adresse', '$complement', '$cd_postale', '$ville', '$email', '$telephone', '$profession', '$role', '$motif', '$mdp', '$status', '$Civilite_id', '$newsletter');";
    //permet d'integer les données du nouvel utilisateur a la BDD
    $stmt = $execute->prepare("INSERT INTO `user` (`nom`, `prenom`, `date_nais`, `date_crea`, `adresse`, `complement`, `cd_postale`, `ville`, `email`, `telephone`, `profession`, `role`, `motif`, `mdp`, `status`, `Civilite_id`, `newsletter`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $stmt->execute(array($nom, $prenom, $date_nais, $date_crea, $adresse, $complement, $cd_postale, $ville, $email, $telephone, $profession, $role, $motif, $mdp, $status, $Civilite_id, $newsletter));

  }


}
