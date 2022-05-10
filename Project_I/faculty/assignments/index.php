<?php
session_start();
$page = 'assignments';
if ($_SESSION['user'] != 'faculty') {
  header("location: ../error.php");
}


include "../classes/dbconn.class.php";
include "../classes/users.class.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../plugins/inc/header.php'; ?>
</head>


<body>
  <header>
    <div class="bg-dark d-flex">
      <div class="col navbar-brand font-weight-bold">
        <a href="http://localhost/Project_I/" class="text-light">eLearning</a>
      </div>
      <!--<div class="col">
        <button class="btn btn-outline-info btn-lg px-4 m-2fw-bold">
          <a class="link-light" href="logout.php">Logout</a>
        </button>
      </div>-->
    </div>
  </header>

  <section class="d-flex">
    <?php include '../../plugins/inc/sidebar.php'; ?>

    <content>
      <div class="col-9">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">
          Upload Assignment
        </button>

        <!-- Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Assignment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="description" class="col-form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                  </div>
                  <br>
                  <div class="form-group">
                    <input type="file" class="form-control" name="file">
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
        <br>
        <a href="" download="<?php echo $files[$a]; ?>"></a>
        <div class="span9" id="content">
          <div class="row-fluid">
            <div id="block_bg" class="block">
              <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Assignment File Uploaded List</div>
              </div>
              <div class="block-content collapse in">
                <div class="span12">
                  <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                    <thead>
                      <tr>

                        <th>File Name</th>
                        <th>Description</th>
                        <th>Date Upload</th>
                        <th>Upload By</th>
                        <th>Class</th>

                      </tr>

                    </thead>
                    <tbody>

                      <?php
                      $query = mysqli_query($conn, "select * FROM assignment LEFT JOIN teacher ON teacher.teacher_id = assignment.teacher_id 
																				  LEFT JOIN teacher_class ON teacher_class.teacher_class_id = assignment.class_id 
																				  INNER JOIN class ON class.class_id = teacher_class.class_id  ") or die(mysqli_error());
                      while ($row = mysqli_fetch_array($query)) {
                      ?>
                        <tr>
                          <td><?php echo $row['fname']; ?></td>
                          <td><?php echo $row['fdesc']; ?></td>
                          <td><?php echo $row['fdatein']; ?></td>
                          <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
                          <td><?php echo $row['class_name']; ?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /block -->
          </div>


        </div>

      </div>
    </content>
  </section>

  <footer class="">
    <?php include '../../plugins/inc/footer.php'; ?>
  </footer>

</body>

</html>