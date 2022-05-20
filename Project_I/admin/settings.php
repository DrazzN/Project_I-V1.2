<?php

include "classes/dbconn.class.php";

class Userdata extends DBConnection
{
	public function getUserdata($sql)
	{
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$item = $stmt->fetch();
		return $item;
	}
}
$data = new Userdata();
if (isset($page)) {
	if ($page == 'profile') {
			$sql = 'SELECT student.user_id, student.firstname, student.lastname, student.contact, users.username, users.email FROM student INNER JOIN users ON student.user_id = users.user_id  WHERE username = "admin"';
		} elseif ($page == 'dashboard') {
		$sql = 'SELECT user_id FROM users';
	}
	
	$userdata = $data->getUserdata($sql);
	// var_dump($userdata);
}
if(isset($_POST['save-submit'])) {
	$sql = "UPDATE student SET firstname=".$_POST['fname'].",lastname=".$_POST['lname']." ,contact=".$_POST['contact']." WHERE user_id = ".$_SESSION['user_id'];
	$update = $data->getUserdata($sql);
}
if (isset($userdata['username'])) {
	$_SESSION['user_id'] = $userdata['user_id'];
	$_SESSION['firstname'] = $userdata['firstname'];
	$_SESSION['lastname'] = $userdata['lastname'];
	$_SESSION['username'] = $userdata['username'];
	$_SESSION['contact'] = $userdata['contact'];
	$_SESSION['email'] = $userdata['email'];
}

class Profileimg extends DBConnection
{
	public function setStatus($sqlup)
	{
		$stmt = $this->connect()->query($sqlup);
		$item = $stmt->fetch();
		return $item;
	}
}
$objprof = new Profileimg;
$resultsts = $objprof->setStatus('SELECT * FROM profileimg');

$_SESSION['profile_locate'] = $resultsts['location'];
