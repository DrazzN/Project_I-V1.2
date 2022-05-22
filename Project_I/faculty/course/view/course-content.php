<?php
session_start();
$page = 'course';
if ($_SESSION['user'] != 'faculty') {
  header("location: ../error.php");
}

include "../../classes/dbconn.class.php";
include "../../classes/course.class.php";
if (isset($_GET['code'])) {
  $_SESSION['subject_name'] = $_GET['name'];
  $_SESSION['subject_code'] = $_GET['code'];
}

$objas = new Assgin;
$resultsas = $objas->getAssign();
if(isset($_POST['delas-submit'])){
  $objdel->delAssign($_POST['fname']);
  header("Location: course-content.php?opt=assignments&upload=deleted");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../../plugins/inc/header.php'; ?>
</head>


<body>

  <section class="d-flex ssize">
    <?php
    if (isset($_GET['upload'])) {
      if($_GET['upload'] == 'success'){
        echo "<script>
              Swal.fire(
                'Upload Successful',
                '', 'success'
              );
              </script>";
      } else if($_GET['upload'] == 'deleted'){
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
    <content class="w-100">
      <div class="card card-outline" style="height:100%;">
        <div class="d-flex">
          <a href="http://localhost/Project_I/faculty/course/index.php"><img class="m-3" src="http://localhost/Project_I/img/ico/arrow-back-circle-outline.svg" style="width:30px; height:30px;" alt=""></a>
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
                    <a href="course-content.php?opt=assignments" class="nav-link text-dark">Assignments</a>
                  </li>
                  <li class="nav-item ho">
                    <a href="course-content.php?opt=test" class="nav-link text-dark">Test</a>
                  </li>
                </ul>
              </nav>
            </div>

            <!--  -->
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
                      $carticle = "Course Materials is not available.";
                    } else if ($_GET['opt'] == 'assignments') {
                      $ctitle = "Assignments";
                      $carticle = "";
                      // $carticle = "Assignments is not available.";
                    } else if ($_GET['opt'] == 'test') {
                      $ctitle = "Test";
                      $carticle = "Test is not available.";
                    }
                  } else {
                    $ctitle = "Module";
                    $carticle = "Module is not available.";
                  }
                  ?>
                  <h3 class="ps-3 pt-3"><?php echo $ctitle; ?></h3>
                  <hr>
                  <div class="bg-light text-center">
                    <i><?php echo $carticle; ?></i>
                    <!-- Modal -->
                    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <form action="http://localhost/Project_I/faculty/course/assignments/upload.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-header">
                              <h5 class="modal-title" id="uploadModalLabel">Upload Assignment</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label for="assignid" class="col-form-label">Assignment_id</label>
                                <input type="text" class="form-control" id="assignid" name="assign_id" required>
                              </div>
                              <div class="form-group">
                                <label for="description" class="col-form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description" required>
                              </div>
                              <br>
                              <div class="form-group">
                                <label for="subdate" class="col-form-label">Submition Date</label>
                                <input type="text" class="form-control" id="subdate" name="subdate" value="<?php echo date('d-m-Y h:i:sa'); ?>" required>
                              </div>
                              <br>
                              <div class="form-group">
                                <input type="file" class="form-control" name="file" required>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!--Modal -->
                    <?php
                    if ($ctitle == 'Assignments') {
                      echo '
                      <button type="button" class="btn btn-primary ho" data-toggle="modal" data-target="#uploadModal"><ion-icon name="cloud-upload-outline"></ion-icon>
                        Upload Assignment
                      </button>
                      <div style="overflow-y: scroll; height:100%;">
                        <table class="table tabe-hover table-striped" id="list">
                          <thead>
                            <tr>
                              <th class="text-center">#</th>
                              <th>Assignment ID</th>
                              <th>Description</th>
                              <th>Submitted Date</th>
                              <th>Subject Code</th>
                              <th>File</th>
                              <th>Action</th
                            </tr>
                          </thead>
                          <tbody>';
                      $i = 1;
                      foreach ($resultsas as $row) {
                        $assign_id = $row['assignment_id'];
                        $floc = $row['floc'];
                        $datein = $row['datein'];
                        $desc = $row['fdesc'];
                        $sub_id = $row['subject_code'];
                        $fname = $row['fname'];

                        echo '
                            <tr>
                              <th class="text-center">' . $i . '</th>
                              <td><b>' . $assign_id . '</b></td>
                              <td><b>' . $desc . '</b></td>
                              <td><b>' . $datein . '</b></td>
                              <td><b>' . $sub_id . '</b></td>
                              <td><b>' . $fname . '</b></td>
                              <td><b><a href="http://localhost/Project_I/faculty/course/assignments/'.$floc.'" download>
                              <ion-icon name="download-outline"></ion-icon>Download
                            </a><button class="btn-outline-warning btn-shadow-light text-danger" data-toggle="modal" data-target="#uploadModal' . $assign_id . '" type="submit" name="deleteassign"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                            </b>
                            <!-- Modal -->
                            <div class="modal fade" id="uploadModal' . $assign_id . '" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <form action="course-content.php?opt=assignments" method="POST">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="uploadModalLabel">Upload Assignment</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form-group">
                                        <label for="fname" class="col-form-label">Do you really want to delete this ?<p> : '. $fname . '</p></label>
                                        <input type="hidden" class="form-control" id="fname" name="fname" value="'. $fname . '">
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" name="delas-submit" class="btn btn-primary">Delete</button>
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <!--Modal -->
                            </td>
                            </tr>';
                        $i++;
                      }
                      echo '
                          </tbody>
                        </table>
                      <div>';
                    }
                    ?>

                  </div>
                </div>
              </div>

              <!--  -->
            </div>
          </div>
        </content>



      </div>
    </content>
  </section>

  <footer>
    <?php include '../../../plugins/inc/footer.php'; ?>
  </footer>

</body>

</html>