<?php

class LoginContr extends Login {
  private $uid;
  private $pwd;
  public function __construct($uid, $pwd) {
    $this->uid = $uid;
    $this->pwd = $pwd;
  }

  public function loginUser() {
    if($this->emptyInput() == false) {
      $_SESSION['error'] = "Empty input!";
      //echo "Empty input!";
      header("location: ../index.php?error=emptyfield");
      exit();
    }
    if($this->uidCheck() == false) {
      $_SESSION['error'] = "inValid input!";
      //echo "Empty input!";
      header("location: ../index.php?error=emptyfield");
      exit();
    }
    $this->getUser($this->uid, $this->pwd); 
  }
  private function emptyInput() {

    if (empty($this->uid) || empty($this->pwd)){
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
  private function uidCheck() {
    if ($this->checkUsers($this->uid, $this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}

?>