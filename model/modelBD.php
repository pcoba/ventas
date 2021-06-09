<?php
include_once('../global/config.php');
class DB {
  // (A) CONNECT TO DATABASE
  public $error = "";
  private $pdo = null;
  private $stmt = null;
  function __construct () {
    try {
      $this->pdo = new PDO(
        "mysql:host=".SERVIDOR.";dbname=".BD.";charset=".DB_CHARSET, 
        USUARIO, PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
      );
    } catch (Exception $ex) { die($ex->getMessage()); }
  }

  // (B) CLOSE CONNECTION
  function __destruct(){
    if ($this->stmt!==null) { $this->stmt = null; }
    if ($this->pdo!==null) { $this->pdo = null; }
  }

  // (C) RUN A SELECT QUERY
  function select($sql, $cond=null){
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
      $result = $this->stmt->fetchAll();
      return $result;
    } catch (Exception $ex) { 
      $this->error = $ex->getMessage(); 
      return false;
    }
  }
// (C) RUN A SENTENCE
  function sentencia($sql){
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $result = $this->stmt->execute();
      return $result;
    } catch (Exception $ex) { 
      $this->error = $ex->getMessage(); 
      return false;
    }
  }
  
}
?>