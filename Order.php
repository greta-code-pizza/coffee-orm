<?php

class Order extends CoffeeORM {
  private $date;
  public function __construct($data) {
    $this->date = $data["createdAt"];
  }

  public function infos() {
    return "{$this->date}";
  }
}