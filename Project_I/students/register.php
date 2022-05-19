<?php
session_start();
$page = 'register';

?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

<head>
  <?php include '../plugins/inc/header.php'; ?>
</head>

<body class="hold-transition login-page">

  <section class="bg login p-5 p-lg-4  text-center bg-light bg-image">
    <?php
    if ($_GET && isset($_SESSION['error'])) {
      echo '
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="btn-close" data-dismiss="alert" aria-hidden="true">&times;</button>
            ' . $_SESSION['error'] . '
        </div>';
        //unset($_SESSION['error']);
    }
    ?>
    <div class="container col-10 col-sm-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col text-start text-light">
          <h1 class="display-4 fw-bold lh-1 mb-3">Student Registration</h1>
          <p class="col-lg-10 fs-4">Sign up to start your session</p>
        </div>
        <div class="col col-xxl-5 col-md-10 col-sm-10 col-lg-10 mx-auto">
          <form action="http://localhost/Project_I/students/includes/signup.inc.php" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Exampl@hotcookie.com" name="email" value="<?php //echo $email; 
                                                                                                                                ?>" required>
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="john" name="uid" value="<?php //echo $student_id; 
                                                                                                              ?>" required>
              <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd" value="<?php //echo $password; 
                                                                                                                          ?>" required>
              <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="cpwd" value="<?php //echo $cpassword; 
                                                                                                                          ?>" required>
              <label for="floatingPassword">Confirm Password</label>
            </div>
            <!--<div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>-->
            <button class="w-100 btn btn-lg btn-mycolorpic" type="submit" name="submit">Sign Up</button>
            <hr class="my-4">
            <small class="text-muted">
              <p>Have an account ?
                <a class="align-content-start text-mycolorpic" href="http://localhost/Project_I/students/login.php">LogIn Here</a>
              </p>
              <a href="http://localhost/Project_I/portal.php">Go Back</a>
            </small>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php include '../plugins/inc/footer.php'; ?>
</body>

</html>