<?php
include "classes/dbconn.class.php";
include "classes/users.class.php";
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
      
        <div>
          <h1>Attendance</h1><br>
          <div class="justify-content-end">
            <input type="text" class="form-control" name="datetoday" value="Date :<?php echo date("Y/m/d"); ?>" readonly="readonly" style="height:38px;padding:6px;">
            <label for="dept">Course</label><input type="text" class="form-control" id="deptstyle=" height:38px;padding:6px;">
          </div>
        </div>
        <div style="overflow-y: scroll; height:700px;">
        <div class="col-lg-12">
          <div class="card card-outline card-primary">
            <div class="card-body">
              <table class="table tabe-hover table-bordered" id="list">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>Avatar</th>
                    <th>Student ID</th>
                    <th>Username</th>
                    <th>Present</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($results as $row) {
                    $user_id = $row['user_id'];
                    $username = $row['username'];
                    echo '
                    <tr>
                      <th class="text-center">' . $i . '</th>
                      <td>
                        <img src="" alt="" class="img-thumbnail border-rounded" width="75px" height="75px" style="object-fit: cover;">
                      </td>
                      <td><b>' . $user_id . '</b></td>
                      <td><b>' . $username . '</b></td>
                      <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                          <input type="radio" class="btn-check" name="attendance' . $username . '" id="btncheck1' . $username . '">
                          <label class="btn btn-outline-success rounded-pill" for="btncheck1' . $username . '">Present</label>

                          <input type="radio" class="btn-check" name="attendance' . $username . '" id="btncheck2' . $username . '">
                          <label class="btn btn-outline-danger rounded-pill" for="btncheck2' . $username . '">Absent</label>
                        </div>
                      </td>
                    </tr>
                    ';
                    $i++;
                  }
                  ?>
                </tbody>

              </table>

            </div>

            <br><button type="submit" class="btn btn-outline-primary" name="attendance-submit">Submit</button>


          </div>
        </div>
      </div>
    </content>
    <br>

  </section>

  <footer class="">
    <?php include '../plugins/inc/footer.php'; ?>
  </footer>

</body>

</html>