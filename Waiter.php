<?php

class Waiter extends Manager {
  private $id;
  private $name;

  public function __construct($data) {
    $this->id = $data["id"];
    $this->name = $data["name"];
  }


  public function info() {
    return "Salut je suis {$this->name} et j'ai l'id {$this->id}";
  }
}