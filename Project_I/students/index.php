<?php
session_start();
$page = 'dashboard';

if (isset($_SESSION['person_ID'])) {
  if ($_SESSION['person_ID'] != 'student') {
    header("location: error.php?error=invalidusertype");
  }
}

include '../initialize.php';
include 'settings.php';
include "classes/users.class.php";

$adata = $obj->getUsers('SELECT COUNT(person), person FROM users GROUP by person;');
$resultco = $objco->getCount();
$resultur = $attco->getuserCount('SELECT COUNT(user_id) FROM users');
$resultcod = $objcod->getCountD();
$resultmsg = $objgmsg->getMessage();
// var_dump($resultmsg);
// var_dump($resultcod);
if (isset($_POST['message'])) {
  if ($_POST['message'] != '') {
    $objsmsg->setMessage($_POST['sdate'], $_POST['message'], $_POST['usern']);
    header("location: index.php");
    
  }
}
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

  <?php include '../plugins/inc/topnavbar.php'; ?>


  <div class="d-flex">
    <?php include '../plugins/inc/sidebar.php'; ?>

    <section class="d-flex">
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
                <div class="single-card bg-white ho mx-3" onclick="userfunc()">
                  <div>
                    <h3 class="fw-bold"><?php echo $resultur[0]['COUNT(user_id)']; ?></h3>
                    <span>Users</span>
                  </div>
                  <div>
                    <span>
                      <ion-icon name="people-outline"></ion-icon>
                    </span>
                  </div>
                </div>
                <div class="single-card bg-white ho mx-3" onclick="coursefunc()">
                  <div>
                    <h3 class="fw-bold"><?php echo $resultco[0]['COUNT(id)']; ?></h3>
                    <span>Courses</span>
                  </div>
                  <div>
                    <span>
                      <ion-icon name="book-outline"></ion-icon>
                    </span>
                  </div>
                </div>
                <div class="single-card bg-white ho mx-3" onclick="dwnfunc()">
                  <div>
                    <h3 class="fw-bold"><?php echo $resultcod[0]["COUNT(id)"]; ?></h3>
                    <span>Downlodables</span>
                  </div>
                  <div>
                    <span>
                      <ion-icon name="download-outline"></ion-icon>
                    </span>
                  </div>
                </div>
                <div class="single-card bg-white ho mx-3" id="messages" onclick="eventfunc()">
                  <div>
                    <h3 class="fw-bold">&nbsp;</h3>
                    <span>Messages</span>
                  </div>
                  <div>
                    <span>
                      <ion-icon name="mail-outline"></ion-icon>
                    </span>
                  </div>
                </div>
              </div>
              <div class="wrapper center align-content-center" style="animation-delay: 2s;width:500px">
                <div class="card" id="messageboard" style="padding:10px;">
                  <div class="card-header">
                    <h3>Message Board<button type="button" class="btn-close" id="closemessage" style="float: right;" aria-label="Close"></button></h3>
                    
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <p style="overflow-y: scroll;height: 150px;padding-left:30px;font-size:16px;">
                        <?php
                        if (isset($resultmsg)) {
                          foreach ($resultmsg as $row) {
                            echo $row['message'].' <span><i>by '.$row['sent_by'].' '.$row['date_sent'].'</i></span>
                            <a href="index.php?deletemsg&message='.$row['message'].'&sent_by='.$row['sent_by'].'&date_sent='.$row['date_sent'].'" class="text-danger">delete</a>
                            <br>';
                          }
                        } else {
                          echo 'No Message';
                        }
                        ?>
                      </p>
                    </blockquote>

                  </div>
                  <!-- <div class="card-footer">
                    <form action="index.php" method="POST" class="d-flex">
                      <input type="hidden" name="usern" value="<?php echo $_SESSION['username'] ?>">
                      <input type="hidden" name="sdate" value="<?php echo date('d-m-Y h:i:sa') ?>">
                      <input type="text" class="form-control me-2" name="message" placeholder="Enter some text...">
                      <button type="submit" class="btn btn-primary" name="submit">Send</button>
                    </form>
                  </div> -->

                </div>
                <canvas id="myChart" style="display:none;"></canvas>
                <canvas id="myChart2" style="display:none;"></canvas>
                <canvas id="myChart3" style="display:none;"></canvas>
              </div>



            </main>

          </div>
        </div>

      </content>
    </section>
  </div>
  <?php include '../plugins/inc/footer2.php'; ?>

  <script>
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797"
    ];

    function userfunc() {
      $("#messageboard").hide();
      $("#myChart2").hide();
      $("#myChart3").hide();
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
      $("#myChart").hide();
      $("#myChart3").hide();
      $("#myChart2").show();
      let xValues = ["Course Available", "Remaining"];
      let remd = <?php echo $resultco[0]['COUNT(id)']; ?>;
      let yValues = [<?php echo $resultco[0]['COUNT(id)'] ?>, 44 - remd]
      var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797"
      ];
      new Chart("myChart2", {
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
      $("#myChart").hide();
      $("#myChart2").hide();
      $("#myChart3").show();

      let xValues = ["Downlodables"];
      let yValues = [<?php echo $resultcod[0]["COUNT(id)"]; ?>];
      new Chart("myChart3", {
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
      $("#myChart2").hide();
      $("#myChart3").hide();
      $("#messageboard").show();
    });
  </script>
</body>

</html>