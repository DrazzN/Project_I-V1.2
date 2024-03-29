<?php
session_start();

if(isset($_POST['submit'])) {
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx', ' ');

  if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
      if($fileSize < 1000000) {
        $fileNameNew = $_POST['assign_id'].$_POST['subdate'].".".$fileActualExt;
        $fileDestination = 'uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        include '../../settings.php';
        include '../../classes/course.class.php';

        $objseti = new AssginIn;
        $resultseti = $objseti->uploadAssigninfo($_POST['assign_id'], $fileDestination,  $_POST['subdate'], $_POST['description'], $_SESSION['subject_code']);
        header("Location: ../view/course-content.php?opt=assignmentsinfo&upload=success");
      } else{
        header("Location: ../view/course-content.php?error=Your file is too big");
      }
    } else {
      header("Location: ../view/course-content.php?error=There was an error uploading your file");
    }
  } else {
    header("Location: ../view/course-content.php?error=You cannot upload file of this type");
  }

}
