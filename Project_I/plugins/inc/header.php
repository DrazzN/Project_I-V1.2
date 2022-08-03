<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>elearning</title>
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="plugins/css/bootstrap.css" rel="stylesheet" />
<?php //define('base_url', 'http://localhost/Project_I/'); 
?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
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

<script src="http://localhost/Project_I/plugins/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/Project/plugins/js/bootstrap.min.js"></script>

<script src="http://localhost/Project_I/plugins/js/jquery.slim.min.js"></script>
<script src="http://localhost/Project_I/plugins/js/popper.min.js"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
  body,
  html,
  .ssize {
    height: 100%;
  }

  body {
    background-color: #f8f9fa;
  }

  .bg {
    background-image: url('http://localhost/Project_I/img/lg-back.webp');
    height: 95%;
    width: 100%;
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

  a :active {
    background: none;
  }

  .icon {
    width: 30px;
    height: 30px;
  }

  .sidenav {
    width: 300px;
  }

  .mynav {
    opacity: 1;
  }
</style>
<style>
  * {
    box-sizing: border-box;
  }


  /* Style the header */
  header {
    width: 100%;
    background-color: #666;
    height: 56px;
    padding: 0px;
    font-size: 1rem;
    color: white;
  }

  section {
    /* margin-left: 300px; */
    width: 1980px;
    height: 734px;
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
    text-align: left;
    color: white;
    position: absolute;
    width: 100%;
    height: 300px;
    left: 0px;
  }

  footer div {
    padding: 30px;
  }

  footer div div {
    text-align: left;
  }
</style>
<style>
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
    height: 580px;
  }

  .dashboard-cards {
    /* display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 2rem; */
    margin-top: 1rem;
  }

  .single-card {
    display: flex;
    justify-content: space-between;
    padding: 3rem;
    border-radius: 2px;
    width:310px;
    height:150px
  }

  .single-card h1+span {
    color: var(--text-grey);
  }

  .single-card div:first-child span {
    font-size: 1rem;
    color: var(--text-grey);
  }

  .single-card div:last-child span {
    font-size: 2rem;
    color: var(--main-color);
  }

  .center {
    margin: auto;
    margin-top: 1rem;
    padding: 10px;
  }
</style>