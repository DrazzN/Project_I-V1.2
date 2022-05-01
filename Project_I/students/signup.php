<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <section class="index-login">
    <div class="wrapper">
      <form action="http://localhost/Project_I/students/includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="cpwd" placeholder="confirm Password">
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <button type="submit" name="submit">Signup</button>
      </form>
    </div>
  </section>
</body>
</html>