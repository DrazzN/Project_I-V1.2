<?php 

class Dept extends DBConnection{
  public function getDept($spql) {
    $stmt = $this->connect()->query($spql);
    return $stmt;
  }
}

$objd = new Dept;
$resultd = $objd->getDept('SELECT * FROM department');

?>