<?php include 'initialize.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>elearning</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="plugins/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-utilities.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/css/bootstrap-utilities.rtl.min.css">
    <style>
        body,
        html,
        .ssize {
            height: 100%;
        }

        .bg {
            background-image: url('<?php echo base_url; ?>img/lg-back.webp');
            height: 95%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media(min-width: 780px) {
            .form-input {
                width: 45%;
            }
        }

        a {
            text-decoration: none;
        }
        a:hover {
            text-shadow: none !important;
            box-shadow: border-box !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            -webkit-transition: scale(1.1) !important;
            -ms-transform: scale(1.1) !important;
            transform: scale(1.1) !important;
            z-index: 2;
        }
        .ho:hover {
            margin-left: 10px;
            text-shadow: none !important;
            box-shadow: border-box !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            -webkit-transition: scale(1.1) !important;
            -ms-transform: scale(1.1) !important;
            transform: scale(1.1) !important;
            z-index: 2;
        }
    </style>
</head>

<body>
  <header>
  <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark w-100 mt-0">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo base_url; ?>index.php">eLearning</a>

      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ho">
            <a href="about.php" class="nav-link active">
              About
            </a>
          </li>
          <li class="nav-item ho">
            <a href="developers.php" class="nav-link active">
              Developers
            </a>
          </li>
          <li class="nav-item ho">
            <a href="contacts.php" class="nav-link active">
              Contacts
            </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  </header>

  <section>
    <content class="w-100 bg-dark">
      <div class="card card-outline" style="height:100%;">
        <div>
          <h1 class="ps-3 pt-3 text-center">About Us</h1>
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