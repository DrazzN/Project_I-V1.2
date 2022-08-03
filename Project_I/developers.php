<?php include 'initialize.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
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
  <title>Developers</title>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins'sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      min-height: 100vh;
      background: #161623;
    }

    /* Style the header */
    header {
      top: 0;
      background-color: #666;
      width: 100%;
      height: 56px;
      padding: 0px;
      font-size: 1rem;
      color: white;
    }

    section {
      position: relative;
      width: 100%;
      height: calc(100vh - 150px);
    }

    section::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(#f00242, #f0f424);
      clip-path: circle(50% at right 70%);
    }

    section::after {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(#2196f3, #e91e63);
      clip-path: circle(20% at 10% 10%);
    }

    .contain {
      position: relative;
      z-index: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      margin: 40px 0;
    }

    .contain .card {
      position: relative;
      width: 300px;
      height: 400px;
      background: rgba(255, 255, 255, 0.05);
      margin: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      border-radius: 15px;
      display: flex;
      justify-content: center;
      align-items: center;
      backdrop-filter: blur(10px);
    }

    .contain .card .content {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      opacity: 0.5;
      transition: 0.5s;
    }

    .contain .card:hover .content {
      opacity: 1;
      transform: translateY(-20px);
    }

    .contain .card .content .imgBx {
      position: relative;
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      border: 10px solid rgba(0, 0, 0, 0.25);
    }

    .contain .card .content .imgBx img {
      position: relative;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .contain .card .content .contentBx {
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: 500;
      text-align: center;
      margin: 20px 0 10px;
      line-height: 1.1em;
    }

    .contain .card .content .contentBx h3 span {
      font-size: 12px;
      font-weight: 300;
      text-transform: initial;
    }

    .contain .card .sci {
      position: absolute;
      bottom: 50px;
      display: flex;
    }

    .contain .card .sci li {
      list-style: none;
      margin: 0 10px;
      transform: translateY(40px);
      transition: 0.5s;
      transition-delay: calc(0.1s * var(--i));
    }

    .contain .card:hover .sci li {
      transform: translateY(0px);
      opacity: 1;
    }

    .contain .card .sci li a {
      color: #fff;
      font-size: 24px;
    }

    .icon {
      width: 24px;
      height: 24px;
      filter: invert(48%);
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
  <?php include 'plugins/inc/topnavbar.php'; ?>
  <section class="">

    <div class="contain">
      <div class="card">
        <div class="content">
          <div class="imgBx">
            <ing src="img/logo-facebook.svg">
          </div>
          <div class="contentBx">
            <h3>Bibek Rawat<br><span>Creative Designer</span></h3>
          </div>
        </div>
        <ul class="sci">
          <li style="--i:1">
            <a href="#"><img class="icon" src="img/logo-facebook.svg"></a>
          </li>
          <li style="--i:2">
            <a href="#"><img class="icon" src="img/logo-twitter.svg"></a>
          </li>
          <li style="--i:3">
            <a href="#"><img class="icon" src="img/logo-instagram.svg"></a>
          </li>
        </ul>
      </diV>
      <div class="card">
        <div class="content">
          <div class="imgBx">
            <ing src="img/logo-facebook.svg">
          </div>
          <div class="contentBx">
            <h3>Raj Nakarmi<br><span>Creative Designer</span></h3>
          </div>
        </div>
        <ul class="sci">
          <li style="--i:1">
            <a href="#"><img class="icon" src="img/logo-facebook.svg"></a>
          </li>
          <li style="--i:2">
            <a href="#"><img class="icon" src="img/logo-twitter.svg"></a>
          </li>
          <li style="--i:3">
            <a href="#"><img class="icon" src="img/logo-instagram.svg"></a>
          </li>
        </ul>
      </diV>
    </div>
  </section>
</body>

</html>