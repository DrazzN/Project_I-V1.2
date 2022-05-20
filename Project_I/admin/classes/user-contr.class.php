<?php

class UserContr extends User {
  private $uid;
  private $email;
  private $pwd;
  private $person;
  public function __construct($uid, $email , $pwd, $person) {
    $this->uid = $uid;
    $this->email = $email;
    $this->pwd = $pwd;
    $this->person = $person;
  }
  public function addUser() {
    if($this->emptyInput() == false) {
      $_SESSION['error'] = "Empty input!";
      //echo "Empty input!";
      header("location: ../user/index.php?error=empty");
      exit();
    }
    if($this->userAlreadyinCheck() == false) {
      $_SESSION['error'] = "Already Added!";
      //echo "Empty input!";
      header("location: ../users/index.php?error=alreadyadded");
      exit();
    }
    $this->setUser($this->uid, $this->email, $this->pwd, $this->person); 
    $this->setProfile($this->uid, $this->email);
    $this->setProf($this->uid, $this->email);
  }
  private function emptyInput() {
    if (empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->person)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
  private function userAlreadyinCheck() {
    if (!$this->checkUser($this->uid)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}

