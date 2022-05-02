<?php
session_start();
$page = 'index';
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
<?php include '../plugins/inc/header.php'; ?>



<body>
  <?php include '../plugins/inc/sidebar.php'; ?>
  <section class="my-container">
    <div class="bg-dark">
      <button class="btn my-4 btn-primary text-light" id="menu-btn">
        <a href="logout.php">Logout</a>
      </button>

    </div>

    <h1>DashBoard</h1>
    <div class="text-light ">

    </div>
    <p>
      <?php echo "<h1>Welcome " . $_SESSION["useruid"] . "</h1>"; ?>

    </p>
  </section>
  <?php include '../plugins/inc/footer.php'; ?>

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script>
    var menu_btn = document.querySelector("#menu-btn")
    var sidebar = document.querySelector("#sidebar")
    var container = document.querySelector(".my-container")
    menu_btn.addEventListener("click", () => {
      sidebar.classList.toggle("active-nav")
      container.classList.toggle("active-cont")
    })
  </script>
</body>

</html>