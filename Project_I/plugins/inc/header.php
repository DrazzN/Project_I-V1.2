<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Document</title>
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="plugins/css/bootstrap.css" rel="stylesheet" />
<?php define('base_url', 'http://localhost/Project_I/'); ?>
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
        background-image: url('http://localhost/Project_I/img/lg-back.webp');
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

    .btn-mycolorpic {
        background: #6c5ce7;
    }

    .text-mycolorpic {
        color: #6c5ce7;
    }

    a {
        text-decoration: none;
    }
    a :hover{
        background: #eccfcf;
    }

    .icon {
        width: 30px;
        height: 30px;
    }
    .sidenav {
        width: 200px;
    }
    .mynav {
        opacity: 1;
    }
</style>
<style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* Style the header */
    header {
      background-color: #666;
      padding: 0px;
      font-size: 35px;
      color: white;
    }

    section {
      height: 100%;
    }

    /* Create two columns/boxes that floats next to each other */
    nav {
      width: 20%;
      height: 100%;
      /* only for demonstration, should be removed */
      background: #ccc;
      padding: 20px;
    }

    content {
      float: left;
      padding: 20px;
      width: 80%;
      background-color: #f1f1f1;
      height: 100%;
      /* only for demonstration, should be removed */
    }

    /* Clear floats after the columns */
    section::after {
      content: "";
      display: table;
      clear: both;
    }

    /* Style the footer */
    footer {
      background-color: #777;
      padding: 0px;
      text-align: center;
      color: white;
    }
  </style>