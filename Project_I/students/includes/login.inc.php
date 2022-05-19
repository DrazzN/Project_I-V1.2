<?php

if(isset($_POST["submit"])){
  //Grabbing the Data
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
//Instantiate loginContr class
include "../classes/dbconn.class.php";
include "../classes/login.class.php";
include "../classes/login-contr.class.php";
$login = new LoginContr($uid, $pwd);
 
//Running error handlers and user login
$login->loginUser();
// Going to back to front page
session_start();
$_SESSION['user'] = 'students';
header("location: ../index.php?error=none");


}
?>