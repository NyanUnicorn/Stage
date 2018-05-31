<?php

namespace Entity;

//Création de l'objet Compteur
class Compteur{

  //Création de ses parametres
  private $id;
  private $libelle;
  private $valeure;
  private $img;

  //constructeur
  public function __construct($id, $libelle, $valeure, $img){

    $this->id = $_id;
    $this->libelle = $_libelle;
    $this->valeure = $_valeure;
    $this->img = $_img;

  }

  public GetLibelle(){

    return $this->libelle;
  }

  public SetLibelle(){

    $this->libelle = $_libelle;
  }

  public GetValeure(){

    return $this->valeure;
  }

  public SetValeure($input){

    $this->valeure = $input;
  }

  public GetImg(){

    return $this->img;
  }

  public SetImg(){

    $this->img = $_img;
  }
  
}

 ?>
