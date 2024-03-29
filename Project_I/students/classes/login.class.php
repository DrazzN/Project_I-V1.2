<?php
class Login extends DBConnection
{
  protected function getUser($uid, $pwd)
  {
    $stmt = $this->connect()->prepare('SELECT password FROM users WHERE username = ? OR email = ?');
    if (!$stmt->execute(array($uid, $pwd))) {
      $stmt = null;
      header("location : ../login.php?error=stmtfailed");
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("location : ../login.php?error=usernotfound");
      exit();
    }
    $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (md5($pwd) == $pwdHashed[0]["password"])
      $checkPwd = true;
    else {
      $checkPwd = false;
    }

    if ($checkPwd == false) {
      $stmt = null;
      header("location : ../login.php?error=wrongpassword");
      exit();
    } 
    elseif ($checkPwd == true) {
      $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND password = ?');
      if (!$stmt->execute(array($uid, $uid, $pwd))) {
        $stmt = null;
        header("location : ../login.php?error=stmtfailed");
      }
      if ($stmt->rowCount() == 0) {
        $stmt = null;
        header("location : ../login.php?error=usernotfound");
        exit();
      }
      $user = $stmt->fetch();
      session_start();
      $_SESSION["userid"] = $user["user_id"];
      $_SESSION["username"] = $user["username"];
      $_SESSION['email'] = $user["email"];
      $_SESSION['person'] = $user["person"];
      $_SESSION["person_ID"] = $user["person"];
      
    }
    $stmt = null;
  }
  protected function checkUsers($uid, $email)
  {
    $stmt = $this->connect()->prepare("SELECT username FROM users WHERE username = ? OR email = ?;");

    if (!$stmt->execute(array($uid, $email))) {
      $stmt = null;
      header("location : ../login.php?error=stmtfailed");
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
