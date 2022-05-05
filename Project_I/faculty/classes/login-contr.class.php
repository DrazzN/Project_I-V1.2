<?php

class LoginContr extends Login {
  private $uid;
  private $pwd;
  //private $person;
  public function __construct($uid, $pwd) {//, $person) {
    $this->uid = $uid;
    $this->pwd = $pwd;
    //$this->person = $person;
  }

  public function loginUser() {
    if($this->emptyInput() == false) {
      $_SESSION['error'] = "Empty input!";
      //echo "Empty input!";
      header("location: ../login.php?error=emptyfield");
      exit();
    }
    $this->getUser($this->uid, $this->pwd);//, $this->person); 
  }
  private function emptyInput() {

    if (empty($this->uid) || empty($this->pwd)){
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}

?>