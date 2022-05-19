<?php
session_start();
$page = 'portal';
if (isset($_SESSION['user'])) {
  if ($_SESSION['user'] == 'admin') {
    header("Location: admin/index.php");
  } elseif ($_SESSION['user'] == 'faculty') {
    header("Location: faculty/index.php");
  } elseif ($_SESSION['user'] == 'students') {
    header("Location: students/index.php");
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<?php include 'plugins/inc/header.php'; ?>

<body>
  <?php include 'plugins/inc/topnavbar.php'; ?>
  <section class="bg py-5 text-center bg-light bg-imag">
    <div class="container py-0 ssize">
      <div class="row row-cols-md-3 align-items-center py-1 bg-dark">
        <a href="http://localhost/Project_I/admin/login.php" class="">
          <div class="mx-auto col">
            <div class="card shadow">
              <div class="card-body">
                <h1 class="card-title">Admin</h1>
                <img class="img icon" src="http://localhost/Project_I/img/ico/people-sharp.svg" alt="">
                <p class="card-text">
                  <small><i>Signin to Admin pannel.</i></small>
              </div>
            </div>
          </div>
        </a>
        <a href="http://localhost/Project_I/faculty/login.php" class="">
          <div class="mx-auto col">
            <div class="card shadow">
              <div class="card-body">
                <h1 class="card-title">Faculty</h1>
                <img class="img icon" src="http://localhost/Project_I/img/ico/user-tie-solid.svg" alt="">
                <p class="card-text">
                  <small><i>Signin to Faculty Side.</i></small>
              </div>
            </div>
          </div>
        </a>
        <a href="http://localhost/Project_I/students/login.php" class="">
          <div class="mx-auto col">
            <div class="card shadow">
              <div class="card-body">
                <h1 class="card-title">Student</h1>
                <img class="img icon" src="http://localhost/Project_I/img/ico/people-circle-sharp.svg" alt="">
                <p class="card-text">
                  <small><i>Signin or Register.</i></small>
              </div>
            </div>
          </div>
        </a>

      </div>
    </div>
  </section>


  <?php include 'plugins/inc/footer.php'; ?>
</body>

</html>