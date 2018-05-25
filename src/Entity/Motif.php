<?php

namespace Entity;

//creation de l'objet Motif
class Motif{

//parametres de l'objet
  private $id;
  private $motif;

  //contructeur
  public function __construct($_id,$_motif){
    $this->id = $_id;
    $this->motif = $_motif;
  }

  public getMotif(){

    return $this->motif;
  }

  public setMotif($_motif){

    $this->motif = $_motif;
  }
}

 ?>
