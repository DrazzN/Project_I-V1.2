<?php

include "classes/dbconn.class.php";

class Userdata extends DBConnection
{
	public function getUserdata()
	{
		$sqlp = 'SELECT faculty.user_id, faculty.firstname, faculty.lastname, faculty.course_id, faculty.contact, users.username, users.email FROM faculty INNER JOIN users ON faculty.user_id = users.user_id  WHERE users.user_id = "' . $_SESSION['userid'] . '"';
		$stmt = $this->connect()->query($sqlp);
		$item = $stmt->fetchAll();
		$_SESSION['firstname'] = $item[0]['firstname'];
		$_SESSION['lastname'] = $item[0]['lastname'];
		$_SESSION['course_id'] = $item[0]['course_id'];
		$_SESSION['contact'] = $item[0]['contact'];
	}
}
class FacultyDept extends DBConnection 
{
	Public function getUserDept() {
		$stmt = $this->connect()->query('SELECT department FROM department WHERE course_id = "'.$_SESSION['course_id'].'"');
		$item = $stmt->fetchAll();
		// return $item;
		$_SESSION['department'] = $item[0]['department'];

	}
}


class Userdataset extends DBConnection
{
	public function setUserdata($fname, $lname, $course_id, $contact, $user_id)
	{
		$stmt = $this->connect()->prepare('UPDATE faculty SET firstname = ?, lastname = ?, course_id = ?, contact = ? WHERE user_id = ?');
		if (!$stmt->execute(array($fname, $lname, $course_id, $contact, $user_id))) {
			$stmt = null;
			header("location : ../index.php?error=stmtfailed");
			exit();
		}
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
		$stmt = null;
	}
}
$objprof = new Profileimg;
$resultsts = $objprof->setStatus('SELECT * FROM profileimg WHERE user_id = "' . $_SESSION['userid'] . '"');
if (boolval($resultsts) == true) {
	$_SESSION['profile_locate'] = $resultsts['location'];
}



class Coursect extends DBConnection
{
	public function getCount()
	{
		$stmt = $this->connect()->query('SELECT COUNT(id) FROM subject');
		$item = $stmt->fetchAll();
		return $item;
		$stmt = null;
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
