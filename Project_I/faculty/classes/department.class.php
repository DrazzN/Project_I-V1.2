<?php 

class Department extends DBConnection{
  protected function setDept($department_code, $department, $course_id, $description) {
    $stmt = $this->connect()->prepare('INSERT INTO department (department_id, department, course_id, description) VALUES (?, ?, ?, ?)');
    if (!$stmt->execute(array($department_code, $department, $course_id, $description))) {
      $stmt = null;
      header("location : ../index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
  protected function checkDept($department_code, $description) {
    $stmt = $this->connect()->prepare('SELECT department_id, description FROM department WHERE department_id = ? OR description = ?;');

    if (!$stmt->execute(array($department_code, $description))) {
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


class Departmentdelete extends DBConnection{
  public function deleteDept($department) {
   $stmt = $this->connect()->prepare('DELETE FROM department WHERE department = ?');
   if (!$stmt->execute(array($department))) {
    $stmt = null;
    header("location : ../index.php?error=stmtfailed");
    exit();
  }
  $stmt = null;
  }
}

class DepartmentUpdate extends DBConnection{
  public function updateDept($department_code, $department, $description) {
    $stmt = $this->connect()->prepare('UPDATE department SET department_id= ?, department= ?, description= ? WHERE department_id = ?');
    if (!$stmt->execute(array($department_code, $department, $description, $department_code))) {
      $stmt = null;
      header("location : ../index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
}

class Dept extends DBConnection{
  public function getDept($spql) {
    $stmt = $this->connect()->query($spql);
    return $stmt;
  }
}

$objd = new Dept;
$resultd = $objd->getDept('SELECT * FROM department');

?>