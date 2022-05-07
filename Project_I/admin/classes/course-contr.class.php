<?php

class CourseContr extends Course {
  private $subject_code;
  private $course_id;
  private $level;
  private $description;
  public function __construct($subject_code, $course_id, $level, $description) {
    $this->subject_code = $subject_code;
    $this->course_id = $course_id;
    $this->level = $level;
    $this->description = $description;
  }
  public function addSubject() {
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
    $this->setSubject($this->subject_code, $this->course_id,$this->level, $this->description); 
  }
  private function emptyInput() {
    if (empty($this->subject_code) || empty($this->course_id) || empty($this->level) || empty($this->description)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
  private function subAlreadyinCheck() {
    if (!$this->checkSubject($this->subject_code, $this->description)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}
