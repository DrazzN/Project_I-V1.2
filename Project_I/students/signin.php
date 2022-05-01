<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../plugins/inc/header.php'; ?>

<body class="hold-transition login-page">
  <section class="bg login p-5 text-center bg-light bg-image">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start text-light">
          <h1 class="display-4 fw-bold lh-1 mb-3">Student Login</h1>
          <p class="col-lg-10 fs-4">Sign in to start your session</p>
        </div>

        <div class="wrapper">
          <form action="includes/login.inc.php" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">Signin</button>
            <button class="w-100 btn btn-lg btn-mycolorpic" type="submit">Sign In</button>
            <hr class="my-4">
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>