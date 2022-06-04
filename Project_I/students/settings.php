<?php

include "classes/dbconn.class.php";

class Userdata extends DBConnection
{
	public function getUserdata($sqlp)
	{
		$stmt = $this->connect()->prepare($sqlp);
		$stmt->execute();
		$item = $stmt->fetch();
		return $item;
		$stmt=null;
	}
}
$data = new Userdata();
$userdata = $data->getUserdata('SELECT user_id, firstname, lastname, class_id, contact FROM student  WHERE user_id = "' . $_SESSION['userid'] . '"');
// var_dump($userdata);
// var_dump($_SESSION);
if (boolval($userdata) == true) {
	// $_SESSION['user_id'] = $userdata['user_id'];
	$_SESSION['firstname'] = $userdata['firstname'];
	$_SESSION['lastname'] = $userdata['lastname'];
	$_SESSION['level'] = $userdata['user_id'];
	$_SESSION['contact'] = $userdata['contact'];
}
$userdata = $data->getUserdata('SELECT username, email  FROM users  WHERE user_id = "' . $_SESSION['userid'] . '"');
$_SESSION['username'] = $userdata['username'];
// var_dump($userdata);

class Userdataset extends DBConnection
{
	public function setUserdata($fname, $lname, $lvl, $contact, $uid)
	{
		$stmt = $this->connect()->prepare('UPDATE student SET firstname = ?, lastname = ?, class_id = ?, contact = ? WHERE user_id = ?');
		if (!$stmt->execute(array($fname, $lname, $lvl, $contact, $uid))) {
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
		$sstmt = null;
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
