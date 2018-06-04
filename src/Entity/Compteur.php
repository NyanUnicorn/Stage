<?php

namespace Entity;

//Création de l'objet Compteur
class Compteur{

  //Création de ses parametres
  private $id;
  private $description;
  private $valeure;
  private $img;

  //constructeur
  public function __construct($_id, $_description, $_valeure, $_img){

    $this->id = $_id;
    $this->description = $_description;
    $this->valeure = $_valeure;
    $this->img = $_img;

  }

  public SetDescription(){

    return $this->description;
  }

  public SetDescription(){

    $this->description = $_description;
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
