<?php
session_start();
if (isset($_POST["submit"])) {
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
  if (isset($_SESSION["person"])) {
    if ($_SESSION["person"] == "admin") {
      $_SESSION['user'] = 'admin';
      header("location: ../index.php?error=none");
    } else {
      header("location: ../error.php");
    }
  }
}
