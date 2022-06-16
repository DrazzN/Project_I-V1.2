<?php

class DepartmentContr extends Department {
  private $department_code;
  private $department;
  private $course_id;
  private $description;
  public function __construct($department_code, $department, $course_id, $description) {
    $this->department_code = $department_code;
    $this->department = $department;
    $this->course_id = $course_id;
    $this->description = $description;
  }
  public function addDept() {
    if($this->emptyInput() == false) {
      $_SESSION['error'] = "Empty input!";
      //echo "Empty input!";
      header("location: ../course/index.php?error=empty");
      exit();
    }
    if($this->subAlreadyinCheck() == false) {
      $_SESSION['error'] = "Already Added!";
      //echo "Empty input!";
      header("location: ../course/index.php?error=alreadyadded");
      exit();
    }
    $this->setDept($this->department_code, $this->department,$this->course_id, $this->description); 
  }
  private function emptyInput() {
    if (empty($this->department_code) || empty($this->department) || empty($this->course_id) || empty($this->description)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
  private function subAlreadyinCheck() {
    if (!$this->checkDept($this->department_code, $this->description)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}
