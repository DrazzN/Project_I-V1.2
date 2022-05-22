<?php
session_start();

if(isset($_POST["submit"])){
  //Grabbing the Data
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $cpwd = $_POST["cpwd"];
  $email = $_POST["email"];
  $person = "student";
//Instantiate SignupContr class
include "../classes/dbconn.class.php";
include "../classes/signup.class.php";
include "../classes/signup-contr.class.php";
$signup = new SignupContr($uid, $pwd, $cpwd, $email, $person);
 
//Running error handlers and user signup
$signup->signupUser();
// Going to back to front page
header("location: ../login.php?signup=success");


}
?>