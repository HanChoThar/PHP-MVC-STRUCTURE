<?php

class QueryBuilder {
  protected $pdo;
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll ($table)
  {
    $statement = $this->pdo->prepare("SELECT * FROM $table");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
  }
  public function insert ($dataArr, $table) {
    // insert into $table ($dataArr) values
    $getDataKeys = array_keys($dataArr);
    $dataCol = implode(",",$getDataKeys);
    $questionMark = "";
    foreach($getDataKeys as $key) {
      $questionMark.= "?,";
    }
    $questionMark=rtrim($questionMark, ",");
    $sql = "insert into $table ($dataCol) values ($questionMark)";
    $statement = $this->pdo->prepare($sql);
    $getdataValues = array_values($dataArr);
    $statement->execute($getdataValues);
  }
  public function delete ($deleteId, $table) {
    $sql = "DELETE FROM $table WHERE id = $deleteId";
    $statement = $this->pdo->prepare($sql);
    $statement->execute();
  }
}