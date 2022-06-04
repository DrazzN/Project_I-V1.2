<?php
session_start();
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

$_SESSION['user'] = 'students';
echo $_SESSION['person'];
// if ($_SESSION['person'] != 'student') {
//   header("Location : login.php?error=userinvalid");
// } else {
header("Location: ../index.php?error=none");
// }

}
