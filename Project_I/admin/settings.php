<?php
session_start();
$_SESSION['user'] = 'admin';
$_SESSION['page'] = 'users';

include "classes/dbconn.class.php";
class Userdata extends DBConnection{
  public function getUserdata($uid) {
		$stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username, $password]);
    $data = $stmt->fetchAll();
}

$data = new Userdata($_SESSION['user']);
$userdata = $data->getUserdata($_SESSION['user']);

	echo $_SESSION['user_id'] = $userdata['user_id'];
	
	echo $_SESSION['username'] = $userdata['username'];
	echo $_SESSION['email'] = $userdata['email'];
	echo '<br>';

?>
