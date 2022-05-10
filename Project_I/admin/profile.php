<?php
session_start();
$page = 'dashboard';
if ($_SESSION['user'] != 'admin') {
  header("location: error.php");
}
include 'settings.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../plugins/inc/header.php'; ?>
  <style>
    .setheight {
      height:424px;
    }
  </style>
</head>


<body>
  <header>
    <div class="bg-dark d-flex">
      <div class="col navbar-brand font-weight-bold">
        <a href="http://localhost/Project_I/" class="text-light">eLearning</a>
      </div>
    </div>
  </header>

  <section class="d-flex">
    <?php include '../plugins/inc/sidebar.php'; ?>

    <content>
      <div class="container-xl px-4 mt-4">
        <hr class="mt-0 mb-4">
        <div class="d-flex g-4">
          
          <div class="col setheight">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
              <div class="card-header">Profile Picture</div>
              <div class="card-body text-center">
                <!-- Profile picture image-->
                <?php if (isset($_SESSION['profile_status'])) {
                  if ($_SESSION['profile_status'] == 0) {
                    echo '<img class="img-account-profile rounded-circle mb-2" src="http://localhost/Project_I/admin/uploads/avatar/profile-2022973.jpg" alt="" style="width:315px;height:315px;>';
                  } else {
                    echo '<img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">';
                  }
                } 
                ?>
                <div class="small font-italic text-muted mb-4"><p>JPG or PNG no larger than 5 MB</p></div>

                <div class="dropdown-divider">
                </div>
                <!-- Modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#uploadModal">
                Upload new image
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
                <!-- Modal-->


              </div>
            </div>
          </div>

          <div class="col setheight">
            <!-- Account details card-->
            <div class="card mb-4">
              <div class="card-header">Account Details</div>
              <div class="card-body">
                <form>
                  <div class="mb-3">
                    <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                    <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="<?php echo $_SESSION['username']; ?>">
                  </div>
                  <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputFirstName">First name</label>
                      <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                    </div>
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputLastName">Last name</label>
                      <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                    <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="<?php echo $_SESSION['email']; ?>">
                  </div>
                  <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputPhone">Phone number</label>
                      <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                    </div>
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputDob">Date of Birth</label>
                      <input class="form-control" id="inputDob" type="text" name="dob" placeholder="Enter your birthday" value="06/10/1988">
                    </div>
                  </div>
                  <!-- Save changes button-->
                  <button class="btn btn-primary" type="button">Save changes</button>
                </form>
              </div>
            </div>
          </div>

        </div>
        <hr class="mb-0 mt-4">
      
      </div>
    </content>
  </section>

  <footer class="">
    <?php include '../plugins/inc/footer.php'; ?>
  </footer>

</body>

</html>