<?php

namespace Entity;




use Service\Bb;
use Service\ClassTools as Tool;

//creation de l'objet User (Utilisateur)
class User{

  //parametres de l'objet
  private $nom;
  private $prenom;
  private $email;
  private $date_nais;
  private $date_crea;
  private $age;
  private $phone;
  private $adresse;
  private $cadresse;
  private $cd_postale;
  private $ville;
  private $profession;
  private $motif;
  private $newsletter;
  private $role;
  private $status;
  private $civilite;
  private $sessionid;

  //constructeur utilisant deux fonctions
  function __construct() {
        $argv = func_get_args();
        switch( func_num_args() ) {
            case 16:
                self::__construct1($argv[0], $argv[1], $argv[2], $argv[3], $argv[4],
                 $argv[5], $argv[6], $argv[7], $argv[8], $argv[9], $argv[10], $argv[11], $argv[12], $argv[13], $argv[14], $argv[15]);
                break;
            case 9:
                self::__construct2($argv[0], $argv[1], $argv[2], $argv[3], $argv[4], $argv[5], $argv[6], $argv[7], $argv[8]);
                break;
         }
    }
  //fonction n°1 utilisé par le constructeur
  public function __construct1($_role , $_status, $_civilite, $_nom, $_prenom, $_email, $_ddn, $_dcc, $_phone, $_adresse, $_cadresse, $_cp, $_ville, $_profession, $_motif, $_newsletter){
    $this->role = $_role;
    $this->status = $_status;
    $this->civilite = Tool::civilite($_civilite);
    $this->nom = $_nom;
    $this->prenom = $_prenom;
    $this->email = $_email;
    $this->date_nais = $_ddn;
    $this->date_crea = $_dcc;
    $this->phone = $_phone;
    $this->adresse = $_adresse;
    $this->cadresse = $_cadresse;
    $this->cd_postale = $_cp;
    $this->ville = $_ville;
    $this->profession = $_profession;
    $this->motif = $_motif;
    $this->newsletter = $_newsletter;
    $this->sessionid = Tool::generateRandomString(10);
    $this->age = Tool::age($this->date_nais);
  }

  //fonction n°2 utilisé par le constructeur
  public function __construct2($_id, $_role, $_status, $_nom, $_pre, $_email, $_date_nais, $_ville, $_civilite){
    $this->id = $_id;
    $this->role = $_role;
    $this->status = $_status;
    $this->nom = $_nom;
    $this->prenom = $_pre;
    $this->email = $_email;
    $this->date_nais = $_date_nais;
    $this->ville = $_ville;
    $this->sessionid = Tool::generateRandomString(10);
    $this->civilite = Tool::civilite($_civilite);
    $this->age = Tool::age($this->date_nais);
  }

  public function getSessionId(){
    return $this->sessionid;
  }
  public function getNom(){
    return $this->nom;
  }
  public function setNom($_nom){
    $this->nom = $_nom;
  }

  public function getPre(){
    return $this->prenom;
  }
  public function setPre($input){
    $this->prenom = $input;
  }

  public function getEmail(){
    return $this->email;
  }
  public function setEmail($input){
    $this->email = $input;
  }

  public function getDateNais(){
    return $this->date_nais;
  }
  public function setDataNais($input){
    $this->date_nais = $input;
  }

  public function getDateCrea(){
    return $this->date_crea;
  }

  public function getAge(){
    return $this->age;
  }

  public function getTel(){
    return $this->phone;
  }
  public function setTel($input){
    $this->phone = $input;
  }

  public function getAdresse(){
    return $this->adresse;
  }
  public function setAdresse($input){
    $this->adresse = $input;
  }

  public function getCompAdresse(){
    return $this->cadresse;
  }
  public function setCompAdresse($input){
    $this->cadresse = $input;
  }

  public function getCodePostale(){
    return $this->cd_postale;
  }
  public function setCodePostale($input){
    $this->cd_postale = $input;
  }

  public function getVille(){
    return $this->ville;
  }
  public function setVille($input){
    $this->ville = $input;
  }

  public function getProfession(){
    return $this->profession;
  }
  public function setProfession($input){
    $this->profession = $input;
  }

  public function getMotif(){
    return $this->motif;
  }
  public function setMotif($input){
    $this->motif = $input;
  }

  public function getCivilite(){
    return $this->civilite;
  }


  public function getRole(){
    return $this->role;
  }


  public function getStatus(){
    return $this->status;
  }

  public function getNewsletter(){
    return $this->newsletter;
  }

  public function SetNewsletter($input){
    $this->newsletter = $input;
  }

  private function age($_date_nais){
    $ajd = date("Y-m-d");
    $diff = date_diff(date_create($_date_nais), date_create($ajd));
    return $diff->format('%y');
  }

}
