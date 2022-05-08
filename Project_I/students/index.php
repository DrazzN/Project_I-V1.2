<?php
session_start();
$page = 'dashboard';
if($_SESSION['user'] != 'student') {
  header("location: error.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../plugins/inc/header.php'; ?>
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
    <?php include '../plugins/inc/sidebar.php'; ?>

    <content>
      <div class="card card-outline card-primary" style="height:100%;">
        <div>
          <h1 class="ps-3 pt-3">DashBoard</h1>
          <hr>
          <div>
            <p>
              <?php
              if (isset($_GET['error'])) {
                if ($_GET['error'] == 'none') {
                  echo '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Login Successful...!!
                </div>';
                  //unset($_SESSION['error']);
                }
              }
              echo '<h1 class="ps-3">Welcome ';
              if (isset($_SESSION['useruid'])) {
                echo $_SESSION['useruid'];
              }
              echo '</h1>';
              ?>
            </p>
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