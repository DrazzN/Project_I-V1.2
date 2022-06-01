<?php
session_start();
$page = 'dashboard';
if (isset($_SESSION['user'])) {
  if ($_SESSION['user'] != 'students') {
    header("location: error.php");
  }
}
include '../initialize.php';
include 'settings.php';
include "classes/users.class.php";

$userno = $obj->getUsers('SELECT count(person), person FROM users GROUP by person;');
$adata = $userno->fetchAll();
// echo $adata[1]['person'];
$resultco = $objco->getCount();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../plugins/inc/header.php'; ?>

  <script>
    function a() {
      Swal.fire(
        'Login Successful',
        'Welcome <?php if (isset($_SESSION["username"])) {
                    echo $_SESSION["username"];
                  } ?>', 'success'
      )
    };
  </script>
</head>


<body>
  <section class="d-flex ssize">
    <?php include '../plugins/inc/sidebar.php'; ?>

    <content class="w-100">
      <div class="card card-outline card-primary" style="height:100%;">
        <div>
          <h1 class="ps-3 pt-3">Dashboard</h1>
          <hr>
          <div>
            <p>
              <?php
              if (isset($_GET['error'])) {
                if ($_GET['error'] = 'none') {
                  echo '<script> a(); </script>';
                }
              }

              ?>
            </p>
          </div>
          <div class="d-flex gx-5">
            <div class="dropdown">
              <button type="button" class="btn btn-outline-dark btn-primary dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Total Users <span class="badge rounded-pill bg-light text-dark"><?php echo count($results->fetchAll()); ?></span>
              </button>
              <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">
                <li class="dropdown-item btn">Admin <span class="badge bg-light text-dark"><?php echo $adata[0]['count(person)']; ?></span></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li class="dropdown-item btn">Faculty <span class="badge bg-light text-dark"><?php echo $adata[1]['count(person)']; ?></span></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li class="dropdown-item btn">Students <span class="badge bg-light text-dark"><?php echo $adata[2]['count(person)']; ?></span></li>
              </ul>
            </div>
            <div>
              <button type="button" class="btn btn-outline-dark btn-primary">
                Courses <span class="badge rounded-pill bg-light text-dark"><?php echo $resultco[0]['COUNT(id)']; ?></span>
              </button>
            </div>
            <div>
              <button type="button" class="btn btn-outline-dark btn-primary">
                Downloadables <span class="badge rounded-pill bg-light text-dark">4</span>
              </button>
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