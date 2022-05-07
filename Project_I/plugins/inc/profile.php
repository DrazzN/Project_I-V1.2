
<?php
session_start();

$_SESSION['page'] = 'profile';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'header.php'; ?>
  <style>
          img#cimg {
            height: 15vh;
            width: 15vh;
            object-fit: cover;
            border-radius: 100% 100%;
          }
        </style>
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
    <?php include 'sidebar.php'; ?>

    <content>
      <div class="card card-outline card-primary" style="height:100%;">
        <div>
          <h1 class="ps-3 pt-3">Profile</h1>
          <hr>
          <div>
          <form action="" id="manage-user">
                <input type="hidden" name="id" value="1">
                <div class="form-group">
                  <label for="name">First Name</label>
                  <input type="text" name="firstname" class="form-control" value="John12" required="">
                </div>
                <div class="form-group">
                  <label for="name">Last Name</label>
                  <input type="text" name="lastname" class="form-control" value="Smith" required="">
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" value="admin" required="">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" value="">
                  <small><i>Leave this blank if you dont want to change the password.</i></small>
                </div>
                <div class="form-group">
                  <label for="" class="control-label">Avatar</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input rounded-circle" id="customFile" name="img"
                      onchange="displayImg(this,$(this))">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                  <img src="http://localhost/elearning/uploads/1649622660_pshs.png" alt="" id="cimg"
                    class="img-fluid img-thumbnail">
                </div>
              </form>
          </div>
        </div>
      </div>
    </content>
  </section>

  <footer class="">
    <?php include 'footer.php'; ?>
  </footer>

</body>

</html>