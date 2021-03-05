<?php

class Manager {
  private static $pdo = null;

  protected static function dbCnx() {
    if(isset(self::$pdo)) {
      return self::$pdo;
    } else {
      $path = "mysql:host=".$_ENV['DB_HOST'].":".$_ENV['DB_PORT'].";dbname=".$_ENV['DB_NAME'].";charset=utf8";
	
      self::$pdo = new PDO(
        $path, 
        $_ENV['DB_USER'], 
        $_ENV['DB_PASSWORD']
      );

      return self::$pdo;
    }
  }

  public static function all() {

    $child = get_called_class();

    $sqlQuery = "SELECT * FROM `{$child}`";

    $objs = [];

    foreach(self::dbCnx()->query($sqlQuery) as $res) {
      array_push(
        $objs, 
        new $child($res)
      );
    }

    return $objs;
  }
}
