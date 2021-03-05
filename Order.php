<?php

class Order extends Manager {
  private $date;
  public function __construct($data) {
    $this->date = $data["createdAt"];
  }

  public function infos() {
    return "{$this->date}";
  }
}