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

  $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx');

  if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
      if($fileSize < 1000000) {
        $fileNameNew = $_POST['filename'].".".$fileActualExt;
        $fileDestination = 'files/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        include '../../settings.php';
        include '../../classes/course.class.php';

        $objset = new MatUp;
        $resultset = $objset->uploadMaterials($fileNameNew, $_POST['description'], $fileDestination, $_POST['subject_code'], $_POST['teacher_id'], $_POST['date']);
        header("Location: ../view/course-content.php?opt=coursematerials&upload=success");
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


?>