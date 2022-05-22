<?php

if (isset($_POST)) {
  //Instantiate class
  include "../classes/dbconn.class.php";
  include "../classes/users.class.php";
  include "../classes/user-contr.class.php";

  if (isset($_POST["add-user-submit"])) {
    //Grabbing the Data
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = md5($_POST["pwd"]);
    $person = $_POST["person"];
    $add = new UserContr($uid, $email, $pwd, $person);

    $add->addUser($uid, $email, $pwd, $person);
    
    // Going to back to User page
    header("location: ../users/index.php?error=added");
  }

  if (isset($_POST["delete-user-submit"])) {
    //Grabbing the Data
    $uid = $_POST["uid"];
    $deletion = new UserDelete($uid);

    $deletion->deleteUser($uid);
    // Going to back to User page
    header("location: ../users/index.php?error=deleted");
  }
  if (isset($_POST["update-user-submit"]))
    //Grabbing the Data
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = md5($_POST["pwd"]);
    $id = $_POST["id"]; {
    $update = new UserUpdate();

    $update->updateUser($uid, $email, $pwd, $id);
    // Going to back to User page
    header("location: ../users/index.php?error=updated");
  }
}
