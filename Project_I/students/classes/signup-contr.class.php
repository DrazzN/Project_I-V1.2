<?php
session_start();
class SignupContr extends Signup {
  private $uid;
  private $pwd;
  private $cpwd;
  private $email;
  private $person;
  public function __construct($uid, $pwd, $cpwd, $email, $person) {
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->cpwd = $cpwd;
    $this->email = $email;
    $this->person = $person;
  }

  public function signupUser() {
    if($this->emptyInput() == false) {
      //echo "Empty input!";
      $_SESSION['error'] = "Empty input!";
      header("location: ../register.php?error=empty");
      exit();
    }
    if($this->invalidUid() == false) {
      $_SESSION['error'] = "Invalid Username!";
      //echo "Invalid Username!";
      header("location: ../register.php?error=username");
      exit();
    }
    if($this->invalidEmail() == false) {
      $_SESSION['error'] = "Invalid Email!";
      //echo "invalid Email!";
      header("location: ../register.php?error=email");
      exit();
    }
    if($this->pwdMatch() == false) {
      $_SESSION['error'] = "Passwords don't match!";
      //echo "Passwords don't match!";
      header("location: ../register.php?error=passwordnotmatch");
    }
    if($this->uidTakenCheck() == false) {
      $_SESSION['error'] = "User or Email taken!";
      //echo "User or Email taken!";
      header("location: ../register.php?error=useroremailtaken");
      exit();
    }
    $this->setUser($this->uid, $this->pwd, $this->email, $this->person); 
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