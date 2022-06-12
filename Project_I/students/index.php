<?php
session_start();
$page = 'dashboard';
if($_SESSION['person'] !== 'student') {
  header("location: login.php");
}
if (isset($_SESSION['user'])) {
  if ($_SESSION['user'] != 'students') {
    header("location: error.php");
  }
}
include '../initialize.php';
include 'settings.php';
include "classes/users.class.php";
// from users.class.php
$adata = $obj->getUsers('SELECT COUNT(person), person FROM users GROUP by person;');
// from settings.php
$resultco = $objco->getCount();
// from users.class.php
$resultur = $attco->getuserCount('SELECT COUNT(user_id) FROM users');

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

          <main>
            <div class="dashboard-cards d-flex">
              <div class="single-card bg-white ho mx-3 col" onclick="userc()">
                <div>
                  <h1 class="fw-bold"><?php echo $resultur[0]['COUNT(user_id)']; ?></h1>
                  <span>Users</span>
                </div>
                <div>
                  <span>
                    <ion-icon name="people-outline"></ion-icon>
                  </span>
                </div>
              </div>
              <div class="single-card bg-white ho mx-3 col" onclick="coursefunc()">
                <div>
                  <h1 class="fw-bold"><?php echo $resultco[0]['COUNT(id)']; ?></h1>
                  <span>Courses</span>
                </div>
                <div>
                  <span>
                    <ion-icon name="book-outline"></ion-icon>
                  </span>
                </div>
              </div>
              <div class="single-card bg-white ho mx-3 col" onclick="dwnfunc()">
                <div>
                  <h1 class="fw-bold">0</h1>
                  <span>Downlodables</span>
                </div>
                <div>
                  <span>
                    <ion-icon name="download-outline"></ion-icon>
                  </span>
                </div>
              </div>
              <div class="single-card bg-white ho mx-3 col" id="messages" onclick="eventfunc()">
                <div>
                  <h1 class="fw-bold">&nbsp;</h1>
                  <span>Messages</span>
                </div>
                <div>
                  <span>
                    <ion-icon name="mail-outline"></ion-icon>
                  </span>
                </div>
              </div>
            </div>
            <div class="wrapper center" style="width:100%;max-width:600px;">
              <canvas id="myChart"></canvas>
            </div>
            <div class="wrapper center" id="messageboard" style="display:none;animation-delay: 2s;">
              <div class="card">
                <div class="card-header">
                  Message Board
                  <button type="button" class="btn-close" id="closemessage" aria-label="Close"></button>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>No Messages</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>

          </main>


        </div>
      </div>

    </content>
  </section>

  <footer class="">
    <?php include '../plugins/inc/footer.php'; ?>
  </footer>
  <script>
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797"
    ];
  </script>
  <script>
    function userc() {
      $("#messageboard").hide();
      $("#myChart").show();
      let xValues = ["Student", "Faculty", "Admin"];
      let yValues = [<?php echo $adata[2]['COUNT(person)'] . ',' . $adata[1]['COUNT(person)'] . ',' . $adata[0]['COUNT(person)']; ?>];

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
          // title: {
          //   display: true,
          //   text: "Chart"
          // }
        }
      });
    };
  </script>
  <script>
    function coursefunc() {
      $("#messageboard").hide();
      $("#myChart").show();
      let xValues = ["Course Available", "Remaining"];
      let remd = <?php echo $resultco[0]['COUNT(id)']; ?>;
      let yValues = [<?php echo $resultco[0]['COUNT(id)'] ?>, 44 - remd]
      var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797"
      ];
      new Chart("myChart", {
        type: "doughnut",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        }
      });
    }
  </script>
  <script>
    function dwnfunc() {
      $("#messageboard").hide();
      $("#myChart").show();

      let xValues = ["Downloadable"];
      let yValues = [0, 100];
      new Chart("myChart", {
        type: "doughnut",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        }
      });
    }
  </script>
  <script>
    $("#closemessage").click(function() {
      $("#messageboard").hide();
    });

    $("#messages").click(function() {
      $("#myChart").hide();
      $("#messageboard").show();
    });
  </script>
</body>

</html>
