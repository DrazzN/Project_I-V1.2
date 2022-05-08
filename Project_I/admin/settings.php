<?php
session_start();

include "classes/dbconn.class.php";
class Userdata extends DBConnection
{
	public function getUserdata()
	{
		$stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ?');
		$stmt->execute(["admin"]);
		$user = $stmt->fetch();
		return $user;
	}
}
$data = new Userdata();
$userdata = $data->getUserdata();

echo $_SESSION['user_id'] = $userdata['user_id'];

echo $_SESSION['username'] = $userdata['username'];
echo $_SESSION['email'] = $userdata['email'];
echo '<br>';
