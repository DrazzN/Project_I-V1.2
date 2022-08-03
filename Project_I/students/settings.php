<?php

include "classes/dbconn.class.php";

class Userdata extends DBConnection
{
	public function getUserdata()
	{
		$sqlp = 'SELECT student.user_id, student.firstname, student.lastname, student.course_id, student.contact, users.username, users.email FROM student INNER JOIN USERS ON student.user_id = users.user_id WHERE users.user_id = ' . $_SESSION['userid'];
		$stmt = $this->connect()->query($sqlp);
		$item = $stmt->fetch();
		// var_dump($item);
		$_SESSION['firstname'] = $item['firstname'];
		$_SESSION['lastname'] = $item['lastname'];
		$_SESSION['course_id'] = $item['course_id'];
		$_SESSION['contact'] = $item['contact'];
		$stmt = null;
		// var_dump($_SESSION);
		if (isset($_SESSION['course_id']) & $_SESSION['course_id'] != "") {
			$stmt2 = $this->connect()->query('SELECT * FROM department WHERE course_id = ' . $_SESSION['course_id']);
			$item2 = $stmt2->fetch();
			// var_dump($item2);
		
			$_SESSION['department'] = $item2['department'];
			$stmt2 = null;
		} else {
			$_SESSION['department'] = "Not Selected";
		}
	}
}
$data = new Userdata();
$data->getUserdata();

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

// class StudentDept extends DBConnection
// {
// 	public function getUserDept()
// 	{
// 		$stmt = $this->connect()->query('SELECT department FROM department WHERE course_id = "' . $_SESSION['course_id'] . '"');
// 		$item = $stmt->fetchAll();
// 		$_SESSION['department'] = $item['department'];
// 	}
// }

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


class Downloadable extends DBConnection
{
	public function getCountD()
	{
		$stmt = $this->connect()->query('SELECT COUNT(id) FROM subject_materials');
		$item = $stmt->fetchAll();
		return $item;
	}
}
$objcod = new Downloadable;

class Messages extends DBConnection
{
	public function getMessage()
	{
		$stmt = $this->connect()->query('SELECT * FROM message');
		$item = $stmt->fetchAll();
		return $item;
	}
}
$objgmsg = new Messages;

class SetMessages extends DBConnection
{
	public function setMessage($sentd, $message, $by)
	{
		$stmt = $this->connect()->prepare('INSERT INTO message (date_sent , message , sent_by) VALUES(?, ?, ?)');
		if (!$stmt->execute(array($sentd, $message, $by))) {
			$stmt = null;
			header("location : ../index.php?error=stmtfailed");
			exit();
		}
		$stmt = null;
	}
}

$objsmsg = new SetMessages;
