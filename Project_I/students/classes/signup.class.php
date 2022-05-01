<?php

class Signup extends DBConnection{
  protected function setUser($uid, $pwd, $email) {
    $stmt = $this->connect()->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)');
    $hashedPwd = md5($pwd);
    if (!$stmt->execute(array($uid, $hashedPwd, $email))) {
      $stmt = null;
      header("location : ../index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
  protected function checkUsers($uid, $email) {
    $stmt = $this->connect()->prepare("SELECT username FROM users WHERE username = ? OR email = ?;");

    if (!$stmt->execute(array($uid, $email))) {
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
?>