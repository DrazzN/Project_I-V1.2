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

$sqlp = 'SELECT admin.user_id, admin.firstname, admin.lastname, admin.contact, users.username, users.email FROM admin INNER JOIN users ON admin.user_id = users.user_id  WHERE users.user_id = "' . $_SESSION['userid'] . '"';
$userdata = $data->getUserdata($sqlp);
if (isset($userdata)) {
	$_SESSION['user_id'] = $userdata['user_id'];
	$_SESSION['firstname'] = $userdata['firstname'];
	$_SESSION['lastname'] = $userdata['lastname'];
	$_SESSION['username'] = $userdata['username'];
	$_SESSION['contact'] = $userdata['contact'];
}

class Userdataset extends DBConnection
{
	public function setUserdata($fname, $lname, $contact, $user_id)
	{
		$stmt = $this->connect()->prepare('UPDATE admin SET firstname = ?, lastname = ?,  contact = ? WHERE user_id = ?');
		if (!$stmt->execute(array($fname, $lname, $contact, $user_id))) {
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
