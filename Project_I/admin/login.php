<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../plugins/inc/header.php'; ?>

<body class="hold-transition login-page">
    <section class="bg login bg p-5 text-center bg-light bg-image">

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Admin Login</h1>
                    <p class="col-lg-10 fs-4">Sign in to start your session</p>
                </div>

                <div class="col-md-10 col-sm-8 mx-auto col-lg-5">
                    <form action="http://localhost/Project_I/students/includes/login.inc.php" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="john" name="uid" required>
                            <label for="floatingInput">E-mail / Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Pwd" name="password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <!--<div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>-->
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
                        <hr class="my-4">
                        <small class="text-muted">
                            <a href="http://localhost/Project_I/portal.php">Go Back</a>
                        </small>
                    </form>
                </div>
            </div>
        </div>

        </div>

    </section>
    <?php include '../plugins/inc/footer.php'; ?>
</body>

</html>