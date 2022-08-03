<?php
session_start();
$page = 'course';

if ($_SESSION['user'] != 'faculty') {
  header("location: ../error.php");
}

include "../../../initialize.php";
include "../../classes/dbconn.class.php";
include "../../classes/course.class.php";
if (isset($_GET['code'])) {
  $_SESSION['subject_name'] = $_GET['name'];
  $_SESSION['subject_code'] = $_GET['code'];
}

$objas = new Assgin;
$resultsas = $objas->getAssign();
$objasi = new AssgnInfo;
$resultsasi = $objasi->getAssigninfo();
if (isset($_POST['delas-submit'])) {
  $objdel->delAssign($_POST['fname']);
  header("Location: course-content.php?opt=assignments&upload=deleted");
} else if (isset($_POST['delmat-submit'])) {
  $objdelM->delMaterials($_POST['name'], $_POST['desc']);
  header("Location: course-content.php?opt=coursematerials&upload=deleted");
} else if (isset($_POST['delin-submit'])) {
  $objdeli->delAssigninfo($_POST['assign_id']);
  header("Location: course-content.php?opt=assignmentsinfo&upload=deleted");
} else if(isset($_POST['md-submit'])) {
  $obj->setSubject($_POST['textmodule'], $_SESSION['subject_code']);
  header("Location: course-content.php?opt=module&upload=success");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../../plugins/inc/header.php'; ?>
</head>


<body>

  <article class="d-flex ssize">
    <?php
    if (isset($_GET['upload'])) {
      if ($_GET['upload'] == 'success') {
        echo "<script>
              Swal.fire(
                'Upload Successful',
                '', 'success'
              );
              </script>";
      } else if ($_GET['upload'] == 'deleted') {
        echo "<script>
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
        </script>";
      }
    }
    ?>
    <content class="w-100 ssize">
      <div class="card card-outline" style="height:100%;">
        <div class="d-flex">
          <a href="<?php echo  base_url ?>faculty/course/index.php"><img class="m-3" src="<?php echo base_url ?>img/ico/arrow-back-circle-outline.svg" style="width:30px; height:30px;" alt=""></a>
          <h1 class="ps-3 pt-3"><?php echo $_SESSION['subject_name']; ?></h1>
        </div>
        <hr>
        <content class="w-100 ssize">
          <div class="row d-flex ssize">
            <div class="col-2 bg-primary">
              <nav class="flex-shrink-0 p-3 bg-light" style="width: 350px;height:100%;" id="sidebar">
                <ul class="nav nav-pills nav-sidebar flex-column nav-flat">
                  <li class="nav-item ho">
                    <a href="course-content.php?opt=module" class="nav-link text-dark active-">Module</a>
                    </li">
                  <li class="nav-item ho">
                    <a href="course-content.php?opt=coursematerials" class="nav-link text-dark">Course Materials</a>
                  </li>
                  <li class="nav-item ho">
                    <a href="course-content.php?opt=assignmentsinfo" class="nav-link text-dark">Assignments Information</a>
                  </li>
                  <li class="nav-item ho">
                    <a href="course-content.php?opt=assignments" class="nav-link text-dark">Submited Assignments</a>
                  </li>
                  <!-- <li class="nav-item ho">
                    <a href="course-content.php?opt=test" class="nav-link text-dark">Test</a>
                  </li> -->
                  <!-- <li class="nav-item ho">
                    <a href="course-content.php?opt=result" class="nav-link text-dark">Assignment Results</a>
                  </li> -->
                </ul>
              </nav>
            </div>

            <div class="col bg-warning">
              <div class="card card-outline ssize">
                <div>
                  <?php
                  if (isset($_GET['opt'])) {
                    if ($_GET['opt'] == 'module') {
                      $ctitle = "Module";
                      $carticle = "Module is not available.";
                    } else if ($_GET['opt'] == 'coursematerials') {
                      $ctitle = "Course Materials";                      
                      $carticle = "Course materials is not available.";
                    } else if ($_GET['opt'] == 'assignmentsinfo') {
                      $ctitle = "Assignments Information";
                      $carticle = "";
                      // $carticle = "Assignments is not available.";
                    } else if ($_GET['opt'] == 'assignments') {
                      $ctitle = "Assignments";
                      $carticle = "";
                      // $carticle = "Assignments is not available.";
                    } else if ($_GET['opt'] == 'test') {
                      $ctitle = "Test";
                      $carticle = "Test is not available.";
                    } else if ($_GET['opt'] == 'result') {
                      $ctitle = "Result";
                      $carticle = "Result is not available.";
                    }
                  } else {
                    $ctitle = "Module";
                    $carticle = "Module is not available.";
                  }
                  ?>
                  <h3 class="ps-3 pt-3"><?php echo $ctitle; ?></h3>
                  <hr>
                  <div class="bg-light text-center">
                    <?php
                    if ($ctitle == 'Assignments') {
                      include '../assignments/assignments.php';
                    } else if ($ctitle == 'Assignments Information') {
                      include '../assignments/assignmentsinfo.php';
                    } else if ($ctitle == 'Course Materials') {
                      include '../materials/course-materials.php';
                    } else if ($ctitle == "Test") {
                      include '../test/test.php';
                    } else if ($ctitle == "Module") {
                      include 'module.php';
                    } else if ($ctitle == "Result") {
                      include '../test/test.php';
                    }
                    ?>
                    <i><?php echo $carticle; ?></i>
                  </div>
                </div>
              </div>

              <!--  -->
            </div>
          </div>
        </content>



      </div>
    </content>
  </article>
  

</body>

</html>