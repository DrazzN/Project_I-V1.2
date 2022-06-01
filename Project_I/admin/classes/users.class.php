<?php
class Users extends DBConnection
{
  public function getUsers($sql)
  {
    $stmt = $this->connect()->query($sql);
    $item = $stmt->fetchAll();
    return $item;
  }
}
$obj = new Users;
$results = $obj->getUsers('SELECT * FROM users WHERE person = "student"');
class User extends DBConnection
{
  protected function setUser($uid, $email, $pwd, $person)
  {
    $stmt = $this->connect()->prepare('INSERT INTO users (username, email, password, person) VALUES (?, ?, ?, ?)');
    if (!$stmt->execute(array($uid, $email, $pwd, $person))) {
      $stmt = null;
      header("location: ../users/index.php?error=stmtfailed");
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
  protected function checkUser($uid)
  {
    $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ?');
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
class UserDelete extends DBConnection
{
  public function deleteUser($uid)
  {
    $stmt = $this->connect()->prepare('DELETE FROM users WHERE user_id = ?');
    if (!$stmt->execute(array($uid))) {
      $stmt = null;
      header("location : ../users/index.php?error=stmtfailed");
      exit();
    }
    $stmt = $this->connect()->prepare('DELETE FROM student WHERE user_id = ?');
    if (!$stmt->execute(array($uid))) {
      $stmt = null;
      header("location : ../users/index.php?error=stmtfailed");
      exit();
    }
    $stmt = $this->connect()->prepare('DELETE FROM profileimg WHERE user_id = ?');
    if (!$stmt->execute(array($uid))) {
      $stmt = null;
      header("location : ../users/index.php?error=stmtfailed");
      exit();
    }
    $stmt = null;
  }
}
class UserUpdate extends DBConnection
{
  public function updateUser($uid, $email, $pwd, $id)
  {
    if ($pwd == '') {
      $stmt = $this->connect()->prepare('UPDATE users SET username = ?, email = ? WHERE user_id = ?');
      if (!$stmt->execute(array($uid, $email, $id))) {
        $stmt = null;
        header("location : ../users/index.php?error=stmtfailed");
        exit();
      }
      $stmt = null;
    } else {
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
class Attendance extends DBConnection
{
  public function updateAtt($sql, $sql2, $uid)
  {
    $stmt = $this->connect()->prepare($sql2);

    if (!$stmt->execute(array())) {
      $stmt = null;
      header("location : attendance.php?error=stmtfailed");
      exit();
    }

    if ($stmt->rowCount() > 0) {
      $resultCheck = true;
      return $resultCheck;
    } else {
      $stmt = null;
      $stmt = $this->connect()->query($sql);
    }
    $stmt = null;
  }
}
$cas = new Attendance;
class Attcount extends DBConnection
{
	public function getuserCount($sql)
	{
		$stmt = $this->connect()->query($sql);
		$item = $stmt->fetchAll();
		return $item;
	}
}
$attco = new Attcount;