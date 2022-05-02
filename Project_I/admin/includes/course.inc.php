<?php
session_start();

if(isset($_POST["submit"])){
  //Grabbing the Data
  $subject_code = $_POST["subject_id"];
  $course_id = $_POST["course_id"];
  $level = $_POST["level"];
  $description = $_POST["description"];
//Instantiate SignupContr class
include "../../classes/dbconn.class.php";
include "../../classes/course.class.php";
include "../../classes/course-contr.class.php";
$signup = new SignupContr($subject_code, $course_id, $level, $description);
 
//Running error handlers and user signup
$signup->signupUser();
// Going to back to front page
header("location: ../index.php?error=none");


}
?>