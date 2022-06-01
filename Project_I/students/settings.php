<?php

include "classes/dbconn.class.php";

class Userdata extends DBConnection
{
	public function getUserdata()
	{
		$sql = 'SELECT student.user_id, student.firstname, student.lastname, student.class_id, student.contact, users.username, users.email FROM student INNER JOIN users ON student.user_id = users.user_id  WHERE users.user_id = "' . $_SESSION['userid'] . '"';
		$stmt = $this->connect()->query($sql);
		$item = $stmt->fetch();
		return $item;
	}
}
$data = new Userdata();

if (isset($page)) {
	if ($page == 'profile') {
		
		$userdata = $data->getUserdata();
		 var_dump($userdata);

		if (!empty($userdata)) {
			// $_SESSION['user_id'] = $userdata['user_id'];
			$_SESSION['firstname'] = $userdata['firstname'];
			$_SESSION['lastname'] = $userdata['lastname'];
			// $_SESSION['username'] = $userdata['username'];
			$_SESSION['level'] = $userdata['class_id'];
			$_SESSION['contact'] = $userdata['contact'];
			$_SESSION['email'] = $userdata['email'];
		} else {
			$_SESSION['firstname'] = "";
			$_SESSION['lastname'] = "";
			// $_SESSION['username'] = "";
			$_SESSION['level'] = "";
			$_SESSION['contact'] = "";
			// $_SESSION['email'] = "";
		}
	}
}

class Userdataset extends DBConnection
{
	public function setUserdata($fname, $lname, $lvl, $contact, $user_id)
	{
		$stmt = $this->connect()->prepare('UPDATE student SET firstname = ?, lastname = ?, class_id = ?, contact = ? WHERE user_id = ?');
		if (!$stmt->execute(array($fname, $lname,$lvl, $contact, $user_id))) {
			$stmt = null;
			header("location : ../index.php?error=stmtfailed");
			exit();
		}
		$stmt = null;
	}
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
$resultsts = $objprof->setStatus('SELECT * FROM profileimg WHERE user_id = "' . $_SESSION['userid'] . '"');
if (isset($resultsts)) {
	$_SESSION['profile_locate'] = $resultsts['location'];
}

class Coursect extends DBConnection
{
	public function getCount()
	{
		$stmt = $this->connect()->query('SELECT COUNT(id) FROM subject');
		$item = $stmt->fetchAll();
		return $item;
	}
}
$objco = new Coursect;
