<?php
class Users extends DBConnection{
  public function getUsers() {
    $stmt = $this->connect()->query('SELECT * FROM users');
    return $stmt;
  }
}
$obj = new Users;
$results = $obj->getUsers();

class User extends DBConnection{
  protected function setUser($uid, $email, $pwd, $person)
  {
    $stmt = $this->connect()->prepare('INSERT INTO users (username, email, password, person) VALUES (?, ?, ?, ?)');
    if (!$stmt->execute(array($uid, $pwd, $email, $person))) {
      $stmt = null;
      header("location: ../users/index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
  protected function checkUser($uid) {
    $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ?;');
    if (!$stmt->execute(array($uid))) {
      $stmt = null;
      header("location: ../users/index.php?error=stmtfailed");
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
class UserDelete extends DBConnection{
  public function deleteUser($uid) {
   $stmt = $this->connect()->prepare('DELETE FROM users WHERE username = ?');
   if (!$stmt->execute(array($uid))) {
    $stmt = null;
    header("location : ../users/index.php?error=stmtfailed");
    exit();
  }
  $stmt = null;
  }
}

class UserUpdate extends DBConnection{
  public function updateUser($uid, $email, $pwd, $id) {
    if($pwd == '') {
      $stmt = $this->connect()->prepare('UPDATE users SET username = ?, email = ? WHERE user_id = ?');
      if (!$stmt->execute(array($uid, $email, $id))) {
        $stmt = null;
        header("location : ../users/index.php?error=stmtfailed");
        exit();
      }
      $stmt = null;
      }
    else {
      $stmt = $this->connect()->prepare('UPDATE users SET username = ?, email = ?, password = ? WHERE user_id = ?');
    if (!$stmt->execute(array($uid, $email, $pwd, $id))) {
      $stmt = null;
      header("location : ../users/index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
    }
  }
}



