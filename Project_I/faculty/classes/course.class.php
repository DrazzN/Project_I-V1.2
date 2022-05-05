<?php
class Course extends DBConnection{
  public function getSubject() {
    $stmt = $this->connect()->query('SELECT * FROM subject');
    return $stmt;
  }
}
$obj = new Course;
$results = $obj->getsubject();
?>