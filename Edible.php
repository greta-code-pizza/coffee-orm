<?php

class Edible extends Manager {
  private $id;
  private $name;

  public function __construct($data) {
    $this->id = $data["id"];
    $this->name = $data["name"];
  }


  public function info() {
    return "Appuyer sur le bouton : {$this->id}<br/>Café : {$this->name}<br/><br/>";
  }
}