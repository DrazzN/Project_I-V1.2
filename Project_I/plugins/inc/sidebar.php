<nav class="flex-shrink-0 p-3 bg-light" style="width: 215px;" id="sidebar">
  <div class="bg-dark d-flex">
    <div class="col navbar-brand font-weight-bold">
      <a href="http://localhost/Project_I/" class="text-light">eLearning</a>
    </div>
  </div>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-start justify-content-start p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="<?php echo base_url ?><?php echo $_SESSION['user'] . '/' . $_SESSION['profile_locate']; ?>" alt="" width="30px" height="30px" class="rounded-circle">&nbsp;<?php echo $_SESSION["username"]; ?>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
      <li><a class="dropdown-item" href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/profile.php">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/logout.php">Sign out</a></li>
    </ul>
  </div>
  <hr>
  <ul class="nav nav-sidebar flex-column nav-flat">
    <li class="nav-item ho">
      <a href="http://localhost/Project_I/" class="nav-link text-dark<?php if ($page == 'home') {
                                                                        echo ' active';
                                                                      } ?>" aria-current="page">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/home-outline.svg" alt="">Home</a>
    </li>
    <hr>
    <li class="nav-item ho">
      <a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/" class="nav-link text-dark<?php if ($page == 'dashboard') {
                                                                                                        echo 'active';
                                                                                                      } ?>" >
        <img class="img icon mx-2" src="http://localhost/Project_I/img/speedometer-outline.svg" alt="">Dashboard</a>
    </li>
    <hr>
    <?php
    if (isset($_SESSION['user'])) {
      if ($_SESSION['user'] == 'admin') {
        echo '<li class="nav-item ho">
      <a href="http://localhost/Project_I/'.$_SESSION['user'].'/department/" class="nav-link text-dark';
        if ($page == 'department') {
          echo 'active';
        };
        echo '" >
        <img class="img icon mx-2" src="http://localhost/Project_I/img/calendar-outline.svg" alt="">Department</a>
        
    </li>
    <hr>';
      }
    }
    ?>
    <li class="nav-item ho">
      <a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/course/" class="nav-link text-dark<?php if ($page == 'course') {
                                                                                                                echo 'active';
                                                                                                              } ?>">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/apps-outline.svg" alt="">Courses</a>
    </li>
    <hr>
    <li class="nav-item ho">
      <a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/users/" class="nav-link text-dark<?php if ($page == 'users') {
                                                                                                              echo 'active';
                                                                                                            } ?>">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/person-outline.svg" alt="">Users</a>
    </li>
    <hr>
    <?php
    if (isset($_SESSION['user'])) {
      if ($_SESSION['user'] == 'faculty') {
        echo '<li class="nav-item ho">
      <a href="" class="nav-link text-dark';
        if ($page == 'attendance') {
          echo 'active';
        };
        echo '" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/calendar-outline.svg" alt="">Attendance</a>
        
    </li>
    <hr>';
      }
    }
    ?>
    <li class="nav-item">
      <div class="collapse hide text-left" id="home-collapse">
        <ul class="btn-toggle-nav pb-1">
          <li class="nav-item"><a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/attendancetake.php" class="link-dark rounded">Take</a></li>
          <li class="nav-item"><a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/attendance.php" class="link-dark rounded">View</a></li>
        </ul>
      </div>
    </li>
    <?php
    if (isset($_SESSION['user'])) {
      if ($_SESSION['user'] == 'admin') {
        echo '<li class="nav-item ho">
      <a href="http://localhost/Project_I/'.$_SESSION['user'].'/setup.php" class="nav-link text-dark';
        if ($page == 'setup') {
          echo 'active';
        };
        echo '" >
        <img class="img icon mx-2" src="http://localhost/Project_I/img/calendar-outline.svg" alt="">Setting</a>
        
    </li>
    <hr>';
      }
    }
    ?>
  </ul>
</nav>