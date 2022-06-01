<?php
session_start();
$page = 'dashboard';
if (isset($_SESSION['user'])) {
  if ($_SESSION['user'] != 'admin') {
    header("location: error.php");
  }
}
include 'settings.php';
include "classes/users.class.php";

$adata = $obj->getUsers('SELECT COUNT(person), person FROM users GROUP by person;');
// var_dump($adata);
$resultco = $objco->getCount();
$resultur = $attco->getuserCount('SELECT COUNT(user_id) FROM users');
// var_dump($resultur);
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
  <style>
    :root {
      --main-color: #DD2F6E;
      --color-dark: #1D2231;
      --text-grey: #8390A2;
    }

    main {
      margin-top: 2px;
      padding: 2rem 1.5rem;
      background: #f1f5f9;
      min-height: calc(100vh - 150px);
    }

    .dashboard-cards {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 2rem;
      margin-top: 1rem;
    }

    .single-card {
      display: flex;
      justify-content: space-between;
      padding: 3rem;
      border-radius: 2px;
    }

    .single-card h1+span {
      color: var(--text-grey);
    }

    .single-card div:first-child span {
      font-size: 3rem;
      color: var(--text-grey);
    }

    .single-card div:last-child span {
      font-size: 3rem;
      color: var(--main-color);
    }

    .center {
      margin: auto;
      margin-top: 2rem;
      width: 60%;
      padding: 10px;
    }
  </style>
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
            <div class="dashboard-cards">
              <div class="single-card bg-white ho" onclick="userfunc()">
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
              <div class="single-card bg-white ho" onclick="coursefunc()">
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
              <div class="single-card bg-white ho" onclick="dwnfunc()">
                <div>
                  <h1 class="fw-bold">3</h1>
                  <span>Downlodables</span>
                </div>
                <div>
                  <span>
                    <ion-icon name="download-outline"></ion-icon>
                  </span>
                </div>
              </div>
              <div class="single-card bg-white ho" id="messages" onclick="eventfunc()">
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
            <div class="position-absolute top-0 right-0 bg-dark w-25">sdf</div>
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

    function userfunc() {
      $("#messageboard").hide();
      $("#myChart").show();
      let xValues = ["Student", "Faculty", "Admin"];
      let yValues = [<?php echo $adata[2]['COUNT(person)'] . ',' . $adata[1]['COUNT(person)'] . "," . $adata[0]['COUNT(person)']; ?>];
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
          //   text: "World Wide Wine Production 2018"
          // }
        }
      });
    }

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

    function dwnfunc() {
      $("#messageboard").hide();
      $("#myChart").show();

      let xValues = [];
      let yValues = [55, 49, 44];
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