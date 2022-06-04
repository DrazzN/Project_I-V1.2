<?php
session_start();
$page = 'profile';

if ($_SESSION['user'] != 'faculty') {
  header("location: error.php");
}
include '../initialize.php';
include 'settings.php';

if (isset($_POST['save-submit'])) {
  $data = new Userdataset();
	$update = $data->setUserdata($_POST['fname'],$_POST['lname'],$_POST['level'],$_POST['contact'],$_POST['uid']);
  header("Location: profile.php?update=success");
}
$data = new Userdata();
$data->getUserdata();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../plugins/inc/header.php'; ?>
  <style>
    .setheight {
      height: 424px;
    }
  </style>
</head>


<body>
  <section class="d-flex ssize">
    <?php include '../plugins/inc/sidebar.php'; ?>

    <content class="w-100">
      <?php 
      if (isset($_GET['update'])) {
        if($_GET['update'] == 'success'){
          echo "<script>
                Swal.fire(
                  'UpdateSuccessful',
                  '', 'success'
                );
                </script>";
        }
      }
      if(isset($_GET['error'])){
        echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '".$_GET['error']."!'
      });
      </script>";
      }
    ?>
      <div class="container">
        <div class="row p-1">
          <div class="col">
            <!-- Profile picture card-->
            <div class="card">
              <div class="card-header">Profile Picture</div>
              <div class="card-body text-center justify-content-center">
                <!-- Profile picture image-->
                <?php if (isset($_SESSION['profile_locate'])) {
                  if ($_SESSION['profile_locate'] == "") {
                    echo '<img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">';
                  } else {
                    echo '<img class="img-account-profile rounded-circle mb-2" src="'.base_url.'faculty/' . $_SESSION['profile_locate'] . '" alt="" style="width:315px;height:315px;>';
                  }
                }
                
                ?>
                <div class="small font-italic text-muted mb-4">
                  <p>JPG or PNG no larger than 5 MB</p>
                  <div class="dropdown-divider">
                  </div>
                  <button type="button" class="btn btn-primary btn-sm ms-3 w-25" data-toggle="modal" data-target="#uploadModal">
                    Upload new image
                  </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="uploadModalLabel">Select Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
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
                <!-- Modal-->
              </div>
            </div>
          </div>

          <div class="col">
            <!-- Account details card-->
            <div class="card">
              <div class="card-header">Account Details</div>
              <div class="card-body">
                <form action="profile.php" method="POST">
                  <div class="mb-3">
                    <label class="small mb-1" for="inputUserid">User ID</label>
                    <input class="form-control" id="inputUserid" type="text" name="uid" value="<?php echo $_SESSION['userid']; ?>" readonly>
                  </div>
                  <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputFirstName">First name</label>
                      <input class="form-control" id="inputFirstName" type="text" name="fname" placeholder="Enter your first name" value="<?php echo $_SESSION['firstname']; ?>">
                    </div>
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputLastName">Last name</label>
                      <input class="form-control" id="inputLastName" type="text" name="lname" placeholder="Enter your last name" value="<?php echo $_SESSION['lastname']; ?>">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                    <input class="form-control" id="inputEmailAddress" type="email" name="email" placeholder="Enter your email address" value="<?php echo $_SESSION['email']; ?>" readonly>
                  </div>
                  <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputPhone">Phone number</label>
                      <input class="form-control" id="inputPhone" type="tel" name="contact" placeholder="Optional Contact number" value="<?php echo $_SESSION['contact']; ?>">
                    </div>
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputDob">Department</label>
                      <input class="form-control" id="inputlvl" type="text" name="level" placeholder="1" value="<?php echo $_SESSION['level']; ?>">
                    </div>
                  </div>
                  <!-- Save changes button-->
                  <button class="btn btn-primary" type="submit" name="save-submit">Save changes</button>

                </form>
              </div>
            </div>
          </div>

        </div>


      </div>
    </content>
  </section>

  <footer class="">
    <?php include '../plugins/inc/footer.php'; ?>
  </footer>

</body>

</html>