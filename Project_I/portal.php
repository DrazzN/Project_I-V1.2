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

<head>
  <?php include 'plugins/inc/header.php'; ?>
  <style>
		.ho:hover {
			text-shadow: none !important;
			box-shadow: border-box !important;
			cursor:  pointer !important;
			transition: all 0.3s ease !important;
			-webkit-transition: scale(1.1) !important;
			-ms-transform: scale(1.1) !important;
			transform: scale(1.1) !important;
			z-index: 2;
		}

	</style>
</head>


<body>
  
  <section class="bg text-center bg-light bg-imag">
    <div class="container ssize" style="padding-top:25%;">
      <div class="row row-cols-md-3 py-1 bg-dark">
        <a href="<?php echo base_url; ?>admin/login.php" class="">
          <div class="mx-auto col">
            <div class="card shadow ho">
              <div class="card-body">
                <h1 class="card-title">Admin</h1>
                <img class="img icon" src="<?php echo base_url; ?>img/ico/people-sharp.svg" alt="">
                <p class="card-text">
                  <small><i>Signin to Admin pannel.</i></small>
              </div>
            </div>
          </div>
        </a>
        <a href="<?php echo base_url; ?>faculty/login.php" class="">
          <div class="mx-auto col">
            <div class="card shadow ho">
              <div class="card-body">
                <h1 class="card-title">Faculty</h1>
                <img class="img icon" src="<?php echo base_url; ?>img/ico/user-tie-solid.svg" alt="">
                <p class="card-text">
                  <small><i>Signin to Faculty Side.</i></small>
              </div>
            </div>
          </div>
        </a>
        <a href="<?php echo base_url; ?>students/login.php" class="">
          <div class="mx-auto col">
            <div class="card shadow ho">
              <div class="card-body">
                <h1 class="card-title">Student</h1>
                <img class="img icon" src="<?php echo base_url; ?>img/ico/people-circle-sharp.svg" alt="">
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