<?php
session_start();
$page = 'assignments';
if($_SESSION['user'] != 'admin') {
  header("location: ../../error.php");
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

  <section class="d-flex ssize">
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
              </div></form>
            </div>
          </div>
        </div>
        <br>


      </div>
    </content>
  </section>

  <footer class="">
    <?php include '../../plugins/inc/footer.php'; ?>
  </footer>

</body>

</html>