<?php
session_start();
$page = 'student dashboard';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../plugins/inc/header.php'; ?>
</head>


<body class="ssize">
  <div class="bg-dark">
    <button class="btn my-4">
    </button>
    <button class="btn my-4">
      <a class="link-light" href="logout.php">Logout</a>
    </button>
  </div>

  <div class="d-flex">
    <div class="col-2 ssize bg-light">
      <?php include '../plugins/inc/sidebar.php'; ?>
    </div>
    <div class="col-10">
      <div class="card card-outline card-primary">
        <div>
          <h1>DashBoard</h1>
          <div>
            <p>
              <?php echo "<h1>Welcome " . $_SESSION["useruid"] . "</h1>"; ?>
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