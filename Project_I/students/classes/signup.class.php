<?php

class Signup extends DBConnection{
  protected function setUser($uid, $pwd, $email, $person) {
    $stmt = $this->connect()->prepare('INSERT INTO users (username, password, email, person) VALUES (?, ?, ?, ?)');
    $hashedPwd = md5($pwd);
    if (!$stmt->execute(array($uid, $hashedPwd, $email, $person))) {
      $stmt = null;
      header("location : ../index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
  protected function setProfile($uid, $email)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ?');
    if (!$stmt->execute(array($uid, $email))) {
      $stmt = null;
      header("location: ../users/index.php?error=stmtfailed");
      exit();
    }
    if ($stmt->rowCount() > 0) {
      $result = $stmt->fetchAll();
      foreach ($result as $result) {
        $id = $result['user_id'] . ' <br>';
      }
      $stmt = $this->connect()->prepare('INSERT INTO student (user_id) VALUES (?)');
      if (!$stmt->execute(array($id))) {
        $stmt = null;
        header("location: ../users/index.php?error=stmtfailed");
        exit();
      }
    } else {
      $stmt = null;
      header("location: ../users/index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
  protected function setProf($uid, $email)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ?');
    if (!$stmt->execute(array($uid, $email))) {
      $stmt = null;
      header("location: ../users/index.php?error=stmtfailed");
      exit();
    }
    if ($stmt->rowCount() > 0) {
      $result = $stmt->fetchAll();
      foreach ($result as $result) {
        $id = $result['user_id'] . ' <br>';
      }
      $stmt = $this->connect()->prepare('INSERT INTO profileimg (user_id) VALUES (?)');
      if (!$stmt->execute(array($id))) {
        $stmt = null;
        header("location: ../users/index.php?error=stmtfailed");
        exit();
      }
    } else {
      $stmt = null;
      header("location: ../users/index.php?error=stmtfailed");
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