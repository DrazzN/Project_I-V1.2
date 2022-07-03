<?php
session_start();
$page = 'setup';
if ($_SESSION['user'] != 'admin') {
  header("location: ../error.php");
}

include '../initialize.php';
include "classes/dbconn.class.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../plugins/inc/header.php'; ?>
</head>


<body>

  <?php include '../plugins/inc/topnavbar.php'; ?>


  <div class="d-flex">
    <?php include '../plugins/inc/sidebar.php'; ?>
    <section class="d-flex ssize">

      <content class="w-100">
        <div class="card card-outline card-primary" style="height:100%;">
          <div>
            <h1 class="ps-3 pt-3">Settings</h1>
            <hr>
            <div>
              <div class="card card-outline card-primary">

                <div class="card-body">
                  <div class="card-header" style="margin-bottom: 30px;">
                    System Information
                  </div>
                  <label for="system_name" class="control-label">System Name</label>
                  <input type="text" class="form-control" id="system_name">
                  <label for="landing_content" class="control-label">Landing Page Content</label>
                  <input type="text" class="form-control" id="landing_content">
                </div>

                <div style="overflow-y: scroll; height:700px; padding:0 10px 0 10px">

                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  </content>
  </section>
  </div>


  <?php include '../plugins/inc/footer2.php'; ?>

</body>

</html>