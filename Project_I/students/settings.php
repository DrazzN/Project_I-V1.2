<?php

include "classes/dbconn.class.php";

class Userdata extends DBConnection
{
	public function getUserdata()
	{
		$sqlp ='SELECT student.user_id, student.firstname, student.lastname, student.course_id, student.contact, users.username, users.email FROM student INNER JOIN USERS ON student.user_id = users.user_id WHERE users.user_id = "' . $_SESSION['userid'] . '"';
		$stmt = $this->connect()->query($sqlp);
		$item = $stmt->fetchAll();
		// var_dump($_SESSION);
		$_SESSION['firstname'] = $item[0]['firstname'];
		$_SESSION['lastname'] = $item[0]['lastname'];
		$_SESSION['course_id'] = $item[0]['course_id'];
		$_SESSION['contact'] = $item[0]['contact'];
	}
}
$data = new Userdata();
$userdata = $data->getUserdata();

// $userdata = $data->getUserdata('SELECT   FROM users  WHERE user_id = "' . $_SESSION['userid'] . '"');
// $_SESSION['username'] = $userdata['username'];

class Userdataset extends DBConnection
{
	public function setUserdata($fname, $lname, $course_id, $contact, $uid)
	{
		$stmt = $this->connect()->prepare('UPDATE student SET firstname = ?, lastname = ?, course_id = ?, contact = ? WHERE user_id = ?');
		if (!$stmt->execute(array($fname, $lname, $course_id, $contact, $uid))) {
			$stmt = null;
			header("location : ../index.php?error=stmtfailed");
			exit();
		}
		$stmt = null;
	}
}

class StudentDept extends DBConnection
{
	public function getUserDept()
	{
		$stmt = $this->connect()->query('SELECT department FROM department WHERE course_id = "' . $_SESSION['course_id'] . '"');
		$item = $stmt->fetchAll();
		$_SESSION['department'] = $item[0]['department'];
	}
}

class UserProf extends DBConnection
{
	public function getUserProf()
	{
		$stmt = $this->connect()->query('SELECT * FROM profileimg');
		$item = $stmt->fetch();
		return $item;
		$stmt = null;
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
