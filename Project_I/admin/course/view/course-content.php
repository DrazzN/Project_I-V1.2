<?php
session_start();
$page = 'course';
if ($_SESSION['user'] != 'admin') {
	header("location: ../error.php");
}

include "../../classes/dbconn.class.php";
include "../../classes/course.class.php";
if(isset($_GET['code'])) {
	$_SESSION['subject_name'] = $_GET['name'];
	$_SESSION['subject_code'] = $_GET['code'];
}
echo $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '../../../plugins/inc/header.php'; ?>
</head>


<body>

	<section class="d-flex ssize">
		<content class="w-100">
			<div class="card card-outline" style="height:100%;">
				<div class="d-flex">
					<a href="http://localhost/Project_I/admin/course/index.php"><img class="m-3" src="http://localhost/Project_I/img/ico/arrow-back-circle-outline.svg" style="width:30px; height:30px;" alt=""></a>
					<h1 class="ps-3 pt-3"><?php echo $_SESSION['subject_name']; ?></h1>
				</div>
				<hr>
				<div class="row d-flex">
					<div class="col-2">
					<button type="button" class="btn btn-primary ho" data-toggle="modal" data-target="#uploadModal">
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
                <form action="http://localhost/Project_I/admin/course/assignments/upload.php" method="POST" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" id="subdate" name="subdate" value="<?php echo date('d-m-Y'); ?>" required>
                  </div>
                  <br>
                  <div class="form-group">
                    <input type="file" class="form-control" name="file" required>
                  </div>
                
              </div>
              <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div></form>
            </div>
          </div>
        </div>
					</div>
					<div class="col ">
					<a href="welcome.php" download><ion-icon name="download-outline"></ion-icon>Download </a>
  <ion-icon name="cloud-upload-outline"></ion-icon>
					</div>
				</div>


			</div>
		</content>
	</section>

	<footer>
		<?php include '../../../plugins/inc/footer.php'; ?>
	</footer>

</body>

</html>