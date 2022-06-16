<?php

if (isset($_POST)) {
  //Grabbing the Data
  $department_code = $_POST["department_code"];
  $department = $_POST["department"];
  // $description = $_POST["description"];
  //Instantiate class
  include "../classes/dbconn.class.php";
  include "../classes/department.class.php";
  include "../classes/department-contr.class.php";
  var_dump($_POST);
  if (isset($_POST["add-submit"])) {
    $add = new DepartmentContr($department_code, $department, $_POST["course_id"], $_POST["description"]);

    $add->addDept();
    // Going to back to department page
    header("location: ../department/index.php?action=Added");
  }
  if (isset($_POST["delete-submit"])) {
    $deletion = new Departmentdelete($department);

    $deletion->deleteDept($department);
    // Going to back to department page
    header("location: ../department/index.php?action=Deleted");
  }
  if (isset($_POST["update-submit"])) {
    $update = new DepartmentUpdate();//$department_code, $department_id, $level, $description, $id);

    $update->updateDept($department_code, $department, $_POST["course_id"], $_POST["description"]);
    // Going to back to department page
    header("location: ../department/index.php?action=Updated");
  }
  
}
