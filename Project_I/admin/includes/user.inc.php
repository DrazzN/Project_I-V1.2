<?php

if (isset($_POST)) {
  //Grabbing the Data
  $subject_code = $_POST["subject_code"];
  $course_id = $_POST["course_id"];
  $level = $_POST["level"];
  $description = $_POST["description"];
  $id = $_POST["id"];
  //Instantiate class
  include "../classes/dbconn.class.php";
  include "../classes/user.class.php";
  include "../classes/user-contr.class.php";
  if (isset($_POST["add-submit"])) {
    $signup = new UserContr($subject_code, $User_id, $level, $description);

    $signup->addSubject();
    // Going to back to User page
    header("location: ../User/index.php?error=added");
  }
  if (isset($_POST["delete-submit"])) {
    $deletion = new Userdelete($subject_code);

    $deletion->deleteSubject($subject_code);
    // Going to back to User page
    header("location: ../User/index.php?error=deleted");
  }
  if (isset($_POST["update-submit"])) {
    $update = new UserUpdate();//$subject_code, $User_id, $level, $description, $id);

    $update->updateSubject($subject_code, $User_id, $level, $description, $id);
    // Going to back to User page
    header("location: ../User/index.php?error=added");
  }
  
  
}
