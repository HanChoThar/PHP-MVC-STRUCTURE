<?php 

class Connection {
  public static function make($config) {
    try{
      $pdo = new PDO("{$config['host']};dbname={$config['dbname']}", $config['username'], $config['password']);
      return $pdo;
    } catch(PDOException $e) {
      echo $e->getMessage();
    }
  }
}