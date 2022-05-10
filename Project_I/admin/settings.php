<?php

include "classes/dbconn.class.php";
class Userdata extends DBConnection
{
	public function getUserdata()
	{
		$stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ?');
		$stmt->execute(["admin"]);
		$item = $stmt->fetch();
		return $item;
	}
}
$data = new Userdata();
$userdata = $data->getUserdata();
class UserProf extends DBConnection
{
  public function getUserProf()
  {
    $stmt = $this->connect()->query('SELECT * FROM profileimg');
		$item = $stmt->fetch();
		return $item;
  }
}
$objprof = new UserProf;
$resultsts = $objprof->getUserProf();

$_SESSION['profile_status'] = $resultsts['status'];
$_SESSION['user_id'] = $userdata['user_id'];
$_SESSION['username'] = $userdata['username'];
$_SESSION['email'] = $userdata['email'];


class Profileimg extends DBConnection {
	public function setStatus() {
		$stmt = $this->connect()->query("UPDATE profileimg SET status = 0 WHERE user_id = ".$_SESSION['user_id'].";");
		$item = $stmt->fetch();
		return $item;
	}
}

?>
