<?php
class Login extends DBConnection
{
  protected function getUser($uid, $pwd)
  {
    $stmt = $this->connect()->prepare('SELECT password FROM users WHERE username = ? OR email = ?');
    if (!$stmt->execute(array($uid, $pwd))) {
      $stmt = null;
      header("location : ../index.php?error=stmtfailed");
      
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("location : ../index.php?error=usernotfound");
      exit();
    } 
    $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(md5($pwd) == $pwdHashed[0]["password"])
      $checkPwd = true;
    else {
      $checkPwd = false;
    }

    if ($checkPwd == false) {
      $stmt = null;
      header("location : ../index.php?error=wrongpassword");
      exit();
    } elseif ($checkPwd == true) {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND password = ?');
          if (!$stmt->execute(array($uid, $uid, $pwd))) {
            $stmt = null;
            header("location : ../index.php?error=stmtfailed");
          }
          if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location : ../index.php?error=usernotfound");
            exit();
          }

          $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
          session_start();
          $_SESSION["userid"] = $user[0]["user_id"];
          $_SESSION["useruid"] = $user[0]["username"] . '<br>Login success!!';
        }
$stmt = null;
  }
}

?>