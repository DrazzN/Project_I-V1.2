<?php
session_start();
$_SESSION['page'] = 'student dashboard';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../plugins/inc/header.php'; ?>
</head>


<body class="ssize">
  <div class="bg-dark">

    <button class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">
      <a class="link-light" href="logout.php">Logout</a>
    </button>
    <?php
    if ($_GET['error'] == 'none') {
      echo '
      <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      Login Successful...!!
      </div>';
      //unset($_SESSION['error']);
    }
    ?>
  </div>

  <div class="d-flex">
    <div class="col-3 ssize bg-light">
      <?php include '../plugins/inc/sidebar.php'; ?>
    </div>
    <div class="col-9">
      <div class="card card-outline card-primary">
        <div>
          <h1>DashBoard</h1>
          <div>
            <p>
              <?php
              //if (!isset($_SESSION['username'])) {
                echo '<h1 class="text-danger">Login required!!</h1>';
              //} else {
                echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
              //}
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php include '../plugins/inc/footer.php'; ?>

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

</body>

</html>