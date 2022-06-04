<?php
class Users extends DBConnection
{
  public function getUsers($sql)
  {
    $stmt = $this->connect()->query($sql);
    $item = $stmt->fetchAll();
    return $item;
  }
}
$sqad = 'SELECT * FROM users WHERE person = "student"';
$obj = new Users;
$results = $obj->getUsers($sqad);

class Attcount extends DBConnection
{
	public function getuserCount($sql)
	{
		$stmt = $this->connect()->query($sql);
		$item = $stmt->fetchAll();
		return $item;
	}
}
$attco = new Attcount;