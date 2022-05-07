<?php
session_start();

$_SESSION['page'] = 'about';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'plugins/inc/header.php'; ?>
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
    <?php include 'plugins/inc/topnavbar.php'; ?>
  </header>

  <section class="d-flex">
    

    <content>
      <div class="card card-outline card-primary" style="height:100%;">
        <div>
          <h1 class="ps-3 pt-3">DashBoard</h1>
          <hr>
          <div>
            <p>
              <span style="color: rgb(0, 0, 0); font-family: ' Open Sans', Arial, sans-serif; text-align: justify;">
                <span style="font-weight: bolder;">
                  Lorem ipsum dolor sit amet,
                </span>
                 consectetur adipiscing elit. Quisque malesuada, odio ullamcorper ornare pellentesque, orci quam consectetur urna, sed fringilla nunc lorem lacinia quam. Ut pellentesque luctus mi vitae vestibulum. Vivamus scelerisque congue turpis, vel rutrum felis ultricies ac. Duis vitae ligula pellentesque erat fermentum mattis. Ut fringilla blandit est sit amet malesuada. Mauris ultrices interdum tellus nec tincidunt. Nulla malesuada sem lorem. Pellentesque blandit augue eu mi iaculis faucibus. Vestibulum in nisl at turpis bibendum efficitur. Integer dapibus volutpat nisl eget lobortis. Nam sit amet scelerisque felis. Praesent euismod quis eros et facilisis. Vivamus vitae nibh vitae nunc dapibus placerat. Duis ac accumsan enim, at semper tortor. Nunc aliquet augue eu diam semper sodales. Maecenas pulvinar dignissim ex, vel lacinia massa consectetur ut.
              </span>
            </p>
            <p>
              <br>
            </p>
          </div>
        </div>
      </div>
    </content>
  </section>

  <footer class="">
    <?php include 'plugins/inc/footer.php'; ?>
  </footer>

</body>

</html>