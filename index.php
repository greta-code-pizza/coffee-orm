<?php

require('vendor/autoload.php');

if($_SERVER['HTTP_HOST'] !=  "toto.com") {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();
}

require("CoffeeORM.php");
require("Waiter.php");
require("Edible.php");
require("Order.php");

$action = $_GET["action"];

$edibles = Edible::all();
$waiters = Waiter::all();
$orders = Order::all();

require "{$action}.php";




// if($action == "listWaiter") {
//   $waiters = Waiter::all();
//   require('listWaiter.php');
// } else if($action == "listEdibles") {
//   require('listEdibles.php');
// } else {
//   require('notFound.php');
// }


