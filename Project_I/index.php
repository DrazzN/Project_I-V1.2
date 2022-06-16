<?php
session_start();

include 'initialize.php';
include 'config.php';

class SystemInfo extends DBConnection
{
    public function Info()
    {
        $stmt = $this->connect()->query('SELECT * FROM sys_info');
        $item = $stmt->fetchAll();
        $_SESSION['title'] = $item[0]['title'];
        $_SESSION['content'] = $item[0]['content'];
        $stmt = null;
    }
}
$sysdata = new SystemInfo;
$data = $sysdata->Info();


?>
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
</head>

<body>
    <header>
        <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
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
    <main>
        <section class="ssize bg-dark text-light p-5 text-start">
            <div class="ssize">
                <content>
                    <div class="d-sm-flex py-5 align-items-center justify-content-between">
                        <div>
                            <?php
                            echo $_SESSION['title'];
                            echo $_SESSION['content'];

                            ?>
                            <button class="btn btn-primary btn-lg"><a href="<?php echo base_url; ?>portal.php" class="text-light">Start The Enrollment</a></button>
                        </div>
                        <img class="img-fluid w-50 d-none d-md-block" src="img/flowers.webp" alt="" />
                    </div>
                </content>
            </div>
        </section>

    </main>



    <footer class="footer mt-auto py-0 bg-light">
        <div class="container">
            <span class="text-muted">© 2022 - eLearning</span>
            <a href="#">Back to top</a>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url; ?>plugins/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url; ?>plugins/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>