<?php

class Course extends DBConnection{
  protected function setSubject($subject_id, $course_id, $level, $description) {
    $stmt = $this->connect()->prepare('INSERT INTO subject (subject_code, course_id, level, description) VALUES (?, ?, ?. ?)');
    if (!$stmt->execute(array($subject_id, $course_id, $level, $description))) {
      $stmt = null;
      header("location : ../index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
  protected function checkSubject($subject_id, $description) {
    $stmt = $this->connect()->prepare("SELECT subject_code, description FROM subject WHERE subject_code = ? OR description = ?;");

    if (!$stmt->execute(array($subject_id, $description))) {
      $stmt = null;
      header("location : ../index.php?error=stmtfailed");
      exit();
    }

    if ($stmt->rowCount() > 0) {
      $resultCheck = false;
    } else {
      $resultCheck = true;
    }
    return $resultCheck;
  }
}
class Subject extends DBConnection{
  public function getSubject() {
    $stmt = $this->connect()->query('SELECT * FROM subject');
    return $stmt;
  }
}
$obj = new Subject;
$results = $obj->getsubject();
?>
?>