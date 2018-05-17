<?php

namespace Entity;

class Motif{

  private $id;
  private $motif;

<<<<<<< HEAD
  public function __construct($_motif){

=======
  public function __construct($_id,$_motif){
    $this->id = $_id;
>>>>>>> develope
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
