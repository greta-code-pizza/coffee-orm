<?php

require('vendor/autoload.php');

if($_SERVER['HTTP_HOST'] !=  "toto.com") {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();
}

$path = "mysql:host=".$_ENV['DB_HOST'].":".$_ENV['DB_PORT'].";dbname=".$_ENV['DB_NAME'].";charset=utf8";
	
$pdo = 
  new PDO(
    $path, 
    $_ENV['DB_USER'], 
    $_ENV['DB_PASSWORD']
  );

		
$sqlQuery = 'SELECT name FROM Waiter';

foreach ($pdo->query($sqlQuery) as $waiter) {
  echo "<p>" . $waiter['name'] . "</p>";
}
