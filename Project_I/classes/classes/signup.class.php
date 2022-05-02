<?php
include 'Dbconn.class.php';
class Signup extends DBConnection
{

  protected function checkUsers($uid, $email)
  {
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
