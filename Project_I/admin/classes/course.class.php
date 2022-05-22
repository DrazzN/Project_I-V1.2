<?php

class Course extends DBConnection{
  protected function setSubject($subject_code, $course_id, $level, $description) {
    $stmt = $this->connect()->prepare('INSERT INTO subject (subject_code, course_id, level, description) VALUES (?, ?, ?, ?)');
    if (!$stmt->execute(array($subject_code, $course_id, $level, $description))) {
      $stmt = null;
      header("location : ../index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
  protected function checkSubject($subject_code, $description) {
    $stmt = $this->connect()->prepare('SELECT subject_code, description FROM subject WHERE subject_code = ? OR description = ?;');

    if (!$stmt->execute(array($subject_code, $description))) {
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
  // public function getLevel() {
  //   $stmtlv = $this->connect()->query('SELECT COUNT(level), level FROM subject GROUP BY level;');
  //   return $stmtlv;
  // }
}
$obj = new Subject;
$results = $obj->getsubject();
// $semi = $obj->getLevel();

class Coursedelete extends DBConnection{
  public function deleteSubject($subject_code) {
   $stmt = $this->connect()->prepare('DELETE FROM subject WHERE subject_code = ?');
   if (!$stmt->execute(array($subject_code))) {
    $stmt = null;
    header("location : ../index.php?error=stmtfailed");
    exit();
  }
  $stmt = null;
  }
}

class CourseUpdate extends DBConnection{
  public function updateSubject($subject_code, $course_id, $level, $description, $id) {
    $stmt = $this->connect()->prepare('UPDATE subject SET subject_code= ?, course_id= ?, level= ?, description= ? WHERE id = ?');
    if (!$stmt->execute(array($subject_code, $course_id, $level, $description, $id))) {
      $stmt = null;
      header("location : ../index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
}
class AssginUp extends DBConnection {
  public function uploadAssign($assign_id, $location, $fname, $date, $description, $subject_id, $s_id) {
    $stmt = $this->connect()->prepare('INSERT INTO student_assignment (assignment_id, floc, fname, datein, fdesc, subject_code, student_id) VALUES (?, ?, ?, ?, ?, ?, ?)');
    if (!$stmt->execute(array($assign_id, $location, $fname, $date, $description, $subject_id, $s_id))) {
      $stmt = null;
      header("location : ../index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
}
class Assgin extends DBConnection {
  public function getAssign() {
    $stmt = $this->connect()->prepare('SELECT * FROM student_assignment WHERE subject_code = ?');
    $stmt->execute(array($_SESSION["subject_code"]));
    return $stmt->fetchAll();
  }
}
class DelAssgin extends DBConnection {
  public function delAssign($fname) {
    $stmt = $this->connect()->prepare('DELETE FROM student_assignment WHERE fname = ?');
    $stmt->execute(array($fname));
    return $stmt->fetchAll();
  }
}
$objdel = new DelAssgin;
?>