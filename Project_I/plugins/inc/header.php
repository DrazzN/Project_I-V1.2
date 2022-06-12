<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>elearning</title>
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="plugins/css/bootstrap.css" rel="stylesheet" />
<?php //define('base_url', 'http://localhost/Project_I/'); ?>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo base_url ?>plugins/js/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="<?php echo base_url ?>plugins/js/chart.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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

    @media(min-width: 100vh) {
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
    a :active{
        background: none;
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

    /*section {
    }*/

    /* Create two columns/boxes that floats next to each other */
    nav {
      width: 20%;
      height: 100%;
      /* only for demonstration, should be removed */
      background: #ccc;
      padding: 20px;
    }

    content {
      padding: 20px;
      background-color: #f1f1f1;
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
  <style>
		.ho:hover {
      margin-left:10px;
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
      /* display: grid; */
      /* grid-template-columns: repeat(4, 1fr); */
      /* grid-gap: 2rem; */
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