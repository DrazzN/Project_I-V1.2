<?php
class Users extends DBConnection{
  public function getUsers() {
    $stmt = $this->connect()->query('SELECT * FROM users WHERE PERSON = "student"');
    return $stmt;
  }
}
$obj = new Users;
$results = $obj->getUsers();
?>