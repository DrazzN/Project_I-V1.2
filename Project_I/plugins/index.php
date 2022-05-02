<!DOCTYPE html>
<html lang="en">
<head>
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
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="http://localhost/Project_I/index.php">eLearning</a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                What You'll Learn
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#" class="dropdown-item">Feature #1</a></li>
                                <li><a href="#" class="dropdown-item">Feature #2</a></li>
                                <li><a href="#" class="dropdown-item">Feature #3</a></li>
                                <li><a href="#" class="dropdown-item">Feature #4</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#About" class="nav-link">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#Contacts" class="nav-link">
                                Contacts
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="ssize bg-dark text-light p-5 text-start">
        <div class="container">
            <div class="d-sm-flex py-5 align-items-center justify-content-between">
                <div>
                    <h1>Start Learning<span class="d-sm-flex text-warning">What You Find Interesting</span></h1>
                    <p class="lead my-4">
                        Expand your opportunities withcouirses of your own choice. We
                        provide the tools and skills to teach what you love.
                    </p>
                    <button class="btn btn-primary btn-lg"><a href="http://localhost/Project_I/students/register.php" class="text-light">Start The Enrollment</a></button>
                </div>
                <img class="img-fluid w-50 d-none d-md-block" src="img/flowers.webp" alt="" />
            </div>
        </div>
    </section>
    <section class="bg text-center bg-light bg-image">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5" id="signup-banner">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Login Below.</h1>
                    <p class="fs-4"><button class="btn btn-primary btn-lg"><a href="http://localhost/Project_I/portal.php" class="text-light">Start Session</a></button>
                    </p>
                </div>

                <div class="col-md-10 mx-auto col-lg-5">

                </div>
            </div>
        </div>
    </section>
    </main>
    

    
    <footer class="footer mt-auto py-0 bg-light">
        <div class="container">
            <span class="text-muted">© 1985-2022 Blackboard Inc. All Rights Reserved.
                <a href="#">Help</a>
                <a href="#">Privacy and Terms of Use</a></span>
            <a href="#">Back to top</a>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/Project_I/plugins/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/Project/plugins/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>