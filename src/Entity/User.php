<?php

namespace Entity;



//peut-être ortir la fonction age d'ici
use Service\ClassTools as Tool; //change


class User{
  private $id;
  private $nom;
  private $pre;
  private $email;
  private $date_nais;
  private $date_crea;
  private $age;
  private $phone;
  private $adresse;
  private $comp_adr;
  private $cd_postale;
  private $ville;
  private $profession;
  private $motif;
  private $civilite;

  private $role;
  private $status;

  public function __construct($id, $_role, $_status, $_nom, $_pre, $_email, $_dat_nais, $_date_crea, $_phone, $_adresse, $_comp_adr, $_cd_postale, $_ville, $_prof, $_modif){
    $this->role = $_role;
    $this->status = $_status;
    $this->nom = $_nom;
    $this->email = $_email;
    $this->date_nais = $_dat_nais;
    $this->date_crea = $_dat_crea;
    $this->phone = $_phone;
    $this->adresse = $_adresse;
    $this->comp_adr = $_comp_adr;
    $this->cd_postale = $_cd_postale;
    $this->ville = $_ville;
    $this->profession = $_prof;
    $this->motif = $_motif;
    $this->age = Tool::age($this->date_nais);
  }

  public function __construct($id, $_role, $_status, $_nom, $_pre, $_email, $_dat_nais, $_ville, $_civilite){
    $this->role = $_role;
    $this->status = $_status;
    $this->nom = $_nom;
    $this->email = $_email;
    $this->date_nais = $_dat_nais;
    $this->date_crea = $_dat_crea;
    $this->phone = $_phone;
    $this->adresse = $_adresse;
    $this->comp_adr = $_comp_adr;
    $this->cd_postale = $_cd_postale;
    $this->ville = $_ville;
    $this->profession = $_profession;
    $this->motif = $_motif;
    $this->civilite = Tool::civilite($_civilite);
    $this->age = Tool::age($this->date_nais);
  }

  public function getNom(){
    return $this->nom;
  }
  public function setNom($_nom){
    $this->nom = $_nom;
  }

  public function getPre(){
    return $this->pre;
  }
  public function setPre($input){
    $this->pre = $input;
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
    return $this->comp_adr;
  }
  public function setCompAdresse($input){
    $this->comp_adr = $input;
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



}
