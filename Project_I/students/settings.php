<?php

include "classes/dbconn.class.php";

class Userdata extends DBConnection
{
	public function getUserdata($sql)
	{
		$stmt = $this->connect()->prepare($sql);
		$item = $stmt->fetch();
		return $item;
	}
}
$data = new Userdata();

if (isset($page)) {
	if ($page == 'profile') {
		if(isset($_POST['save-submit'])) {
			$sql = "UPDATE student SET firstname=".$_POST['uname'].",lastname=".$_POST['uname'].",contact=".$_POST['uname']." WHERE user_id = ".$_SESSION['user_id'];
		} else{
			$sql = 'SELECT student.user_id, student.firstname, student.lastname, student.contact, users.username, users.email FROM student INNER JOIN users ON student.user_id = users.user_id  WHERE username = "admin"';
		}
	
	} elseif ($page == 'dashboard') {
		$sql = 'SELECT user_id FROM users';
	}

	$userdata = $data->getUserdata($sql);
	// var_dump($userdata);
}
if (isset($userdata)) {
	$_SESSION['user_id'] = $userdata['user_id'];
	$_SESSION['firstname'] = $userdata['firstname'];
	$_SESSION['lastname'] = $userdata['lastname'];
	$_SESSION['username'] = $userdata['username'];
	$_SESSION['contact'] = $userdata['contact'];
	$_SESSION['email'] = $userdata['email'];
}



class UserProf extends DBConnection
{
	public function getUserProf()
	{
		$stmt = $this->connect()->query('SELECT * FROM profileimg');
		$item = $stmt->fetch();
		return $item;
	}
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

