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
  <style>
    .messages-container-summary .flex-container {
      align-items: center;
      display: flex;
      padding: 0.75rem 0.75rem 0.75rem 1.5rem;
    }

    .messages-container-summary .messages-header .title {
      font-family: "Open Sans", sans-serif;
      font-weight: 600;
      font-size: 1rem;
      margin-bottom: 0.625rem;
      margin-top: 0;
      text-align: left;
    }

    .messages-container-summary:before {
      content: '';
      display: block;
      height: 0.3125rem;
      position: absolute;

      width: 0.625rem;
      height: calc(100% + 0.125rem);
    }

    /* .messages-container-summary:after {
      content: '';
      display: block;
      height: 0.3125rem;
      right: -0.0625rem;
      position: absolute;
      left: -0.0625rem;
      top: -0.0625rem;
      width: 0.625rem;
      height: calc(100% + 0.125rem);
    } */

    .course-color-classic::before {
      background-color: #666;
    }

    /* 
    .course-color-classic::after {
      background-color: #101010;
    } */

    .messages-container-summary .messages-header .subtitle {
      font-size: .875rem;
      text-align: left;
      color: #767676;
      line-height: .875rem;
    }
  </style>
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



                <!---->
                <!-- <div style="overflow-y: scroll; height:700px; padding:0 10px 0 10px">

                </div> -->
              </div>
            </div>
          </div>
          <!-- <div class="">
            <div class="messages-container-summary color-override course-color-classic" style="overflow-y: none;">
              <div class="messages-header js-course-skip-link-target flex-container">
                <div class="flex-column-10">
                  <h3 class="title ellipsis">
                    19/20 Computer Communications (NAMI) (January) (CSY1017-NAMI1)
                  </h3>
                  <div class="subtitle">
                    <span>ID: <bdi>CSY1017-NAMI1-1920</bdi></span>
                  </div>
                  <div class="summary">
                    asdf
                  </div>
                </div>
                <div class="flex-column-2">
                  <div class="information">rtr</div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </content>

    </section>

  </div>


  <?php include '../plugins/inc/footer2.php'; ?>

</body>

</html>