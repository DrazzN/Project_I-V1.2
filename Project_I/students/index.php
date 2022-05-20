<?php
session_start();
$page = 'dashboard';
if ($_SESSION['user'] != 'students') {
  header("location: error.php");
}
include 'settings.php';
include "classes/users.class.php";

$userno = $obj->getUsers('SELECT count(person), person FROM users GROUP by person;');
$adata = $userno->fetchAll();
// var_dump($userno->fetchAll());
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../plugins/inc/header.php'; ?>

  <script>
    function a() {
      Swal.fire(
        'Login Successful',
        'Welcome <?php if (isset($_SESSION["useruid"])) {
                    echo $_SESSION["useruid"];
                  } ?>', 'success'
      )
    };
  </script>
</head>


<body>
  <section class="d-flex ssize">
    <?php include '../plugins/inc/sidebar.php'; ?>

    <content>
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
                Total Users <span class="badge rounded-pill bg-light text-dark"><?php echo count($results->fetch()); ?></span>
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
                Courses <span class="badge rounded-pill bg-light text-dark">4</span>
              </button>
            </div>
            <div>
              <button type="button" class="btn btn-outline-dark btn-primary">
                Downloadables <span class="badge rounded-pill bg-light text-dark">4</span>
              </button>
            </div>
            <div class="shadow p-3 mb-5 bg-white rounded">
              <div class="d-flex">
                <div class="d-flex  mx-3">
                  <img class="img icon mx-2" src="http://localhost/Project_I/img/ico/cloud-download-sharp.svg" alt="">Primary
                </div>
                <div class="bg-success align-items-center">
                  <div class="font-bold text-lg">Faucet Timer</div>
                  <div>
                    3
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

      <script>
        var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#e8c3b9",
          "#1e7145"
        ];

        new Chart("myChart", {
          type: "doughnut",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "World Wide Wine Production 2018"
            }
          }
        });
      </script>
    </content>
  </section>

  <footer class="">
    <?php include '../plugins/inc/footer.php'; ?>
  </footer>

</body>

</html>