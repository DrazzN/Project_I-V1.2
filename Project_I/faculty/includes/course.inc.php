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
  include "../classes/course.class.php";
  include "../classes/course-contr.class.php";
  if (isset($_POST["add-submit"])) {
    $signup = new CourseContr($subject_code, $course_id, $level, $description);

    $signup->addSubject();
    // Going to back to course page
    header("location: ../course/index.php?action=Added");
  }
  if (isset($_POST["delete-submit"])) {
    $deletion = new Coursedelete($subject_code);

    $deletion->deleteSubject($subject_code);
    // Going to back to course page
    header("location: ../course/index.php?action=Deleted");
  }
  if (isset($_POST["update-submit"])) {
    $update = new CourseUpdate();//$subject_code, $course_id, $level, $description, $id);

    $update->updateSubject($subject_code, $course_id, $level, $description, $id);
    // Going to back to course page
    header("location: ../course/index.php?action=Updated");
  }
  
  
}
