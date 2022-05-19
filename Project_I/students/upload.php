<?php
session_start();
if(isset($_POST['submit'])) {
  $fileName = $_FILES["file"]["name"];
  $fileTmpName = $_FILES["file"]["tmp_name"];
  $fileSize = $_FILES["file"]["size"];
  $fileError = $_FILES["file"]["error"];
  $fileType = $_FILES["file"]["type"];
  $fileExt = explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
      if($fileSize < 1000000) {
        $fileNameNew = "profile-".$_SESSION['user_id'].".".$fileActualExt;
        $fileDestination = 'uploads/avatar/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        echo $fileDestination;
        $sqlup = "UPDATE profileimg SET location = '".$fileDestination."' WHERE user_id = ".$_SESSION['user_id'];
        include 'settings.php';

        $objset = new Profileimg;
        $resultset = $objset->setStatus($sqlup);
        header("Location: profile.php?uploadsuccess");
      } else{
        echo 'Your file is too big.';
      }
    } else {
      echo 'There was an error uploading your file.';
    }
  } else {
    echo 'You cannot upload file of this type.';
  }
}
