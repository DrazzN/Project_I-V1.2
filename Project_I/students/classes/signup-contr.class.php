<?php

class SignupContr extends Signup {
  private $uid;
  private $pwd;
  private $cpwd;
  private $email;
  public function __construct($uid, $pwd, $cpwd, $email) {
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->cpwd = $cpwd;
    $this->email = $email;
  }

  public function signupUser() {
    if($this->emptyInput() == false) {
      //echo "Empty input!";
      header("location: ../index.php?error=empty");
      exit();
    }
    if($this->invalidUid() == false) {
      //echo "Invalid Username!";
      header("location: ../index.php?error=username");
      exit();
    }
    if($this->invalidEmail() == false) {
      //echo "invalid Email!";
      header("location: ../index.php?error=email");
      exit();
    }
    if($this->pwdMatch() == false) {
      //echo "Passwords don't match!";
      header("location: ../index.php?error=passwordnotmatch");
    }
    if($this->uidTakenCheck() == false) {
      //echo "User or Email taken!";
      header("location: ../index.php?error=useroremailtaken");
      exit();
    }
    $this->setUser($this->uid, $this->pwd, $this->email); 
  }
  private function emptyInput() {
    if (empty($this->uid) || empty($this->pwd) || empty($this->cpwd) || empty($this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;;
  }

  private function invalidUid() {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;;
  }

  private function invalidEmail() {
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;;
  }

  private function pwdMatch() {
    if ($this->pwd !== $this->cpwd) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;;
  }

  private function uidTakenCheck() {
    if (!$this->checkUsers($this->uid, $this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}

?>