<?php

include "classes/dbconn.class.php";

class Userdata extends DBConnection
{
	public function getUserdata()
	{
		$sqlp = 'SELECT faculty.user_id, faculty.firstname, faculty.lastname, faculty.department_id, faculty.contact, users.username, users.email FROM faculty INNER JOIN users ON faculty.user_id = users.user_id  WHERE users.user_id = "' . $_SESSION['userid'] . '"';
		$stmt = $this->connect()->query($sqlp);
		$item = $stmt->fetchAll();
		$_SESSION['firstname'] = $item[0]['firstname'];
		$_SESSION['lastname'] = $item[0]['lastname'];
		$_SESSION['level'] = $item[0]['department_id'];
		$_SESSION['contact'] = $item[0]['contact'];
	}
}



class Userdataset extends DBConnection
{
	public function setUserdata($fname, $lname, $level, $contact, $user_id)
	{
		$stmt = $this->connect()->prepare('UPDATE faculty SET firstname = ?, lastname = ?, department_id = ?, contact = ? WHERE user_id = ?');
		if (!$stmt->execute(array($fname, $lname, $level, $contact, $user_id))) {
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
