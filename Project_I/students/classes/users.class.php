<?php
class Users extends DBConnection
{
  public function getUsers($sql)
  {
    $stmt = $this->connect()->query($sql);
    return $stmt;
  }
}
$obj = new Users;
$results = $obj->getUsers('SELECT * FROM users WHERE person = "student"');

 
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
// class Attendance extends DBConnection
// {
//   public function updateAtt($sql)
//   {
//     $stmt = $this->connect()->prepare($sql);
//     if (!$stmt->execute()) {
//       $stmt = null;
//       header("location: ../users/index.php?error=stmtfailed");
//       exit();
//     }
//   }
// }
// if (isset($_POST['att-submit'])) {
//   if ($_POST['at'] == 0) {
//     $sqql = 'INSERT INTO attendance (student_id, absent, date) VALUE('.$_POST['user_id'].','.$_POST['at'].', '.$_SESSION['tdate'].')';
//   } else if ($_POST['at'] == 1) {
//     $sqql = 'INSERT INTO attendance (student_id, present, date) VALUE('.$_POST['user_id'].','.$_POST['at'].', '.$_SESSION['tdate'].')';
//   }
// }

// $cas = new Attendance;
// $dasa = $cas->updateAtt($sqql);
// var_dump($dasa);
