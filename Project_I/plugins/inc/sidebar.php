<nav class="flex-shrink-0 p-3 bg-light" style="width: 215px;" id="sidebar">
  <div class="bg-dark d-flex">
    <div class="col navbar-brand font-weight-bold">
      <a href="http://localhost/Project_I/" class="text-light">eLearning</a>
    </div>
  </div>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-start justify-content-start p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="http://localhost/Project_I/<?php echo $_SESSION['user'].'/'.$_SESSION['profile_locate']; ?>" alt="" width="30px" height="30px" class="rounded-circle">&nbsp;<?php echo $_SESSION["username"]; ?>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
      <li><a class="dropdown-item" href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/profile.php">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/logout.php">Sign out</a></li>
    </ul>
  </div>
  <hr>
  <ul class="nav nav-pills nav-sidebar flex-column nav-flat">
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
                                                                                                      } ?>">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/speedometer-outline.svg" alt="">Dashboard
        </div></a>
    </li>
    <hr>
    <li class="nav-item ho">
      <a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/course/" class="nav-link text-dark<?php if ($page == 'course') {
                                                                                                                echo 'active';
                                                                                                              } ?>">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/apps-outline.svg" alt="">Courses</a>
    </li>
    <hr>
    <li class="nav-item ho">
      <a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/assignments/" class="nav-link text-dark<?php if ($page == 'assignments') {
                                                                                                                    echo 'active';
                                                                                                                  } ?>">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/library-outline.svg" alt="">Assignnments</a>
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
      if ($_SESSION['user'] != 'students') {
        echo '<li class="nav-item ho">
      <a href="http://localhost/Project_I/' . $_SESSION['user'] . 'attendance.php" class="nav-link text-dark';
        if ($page == 'attendance') {
          echo 'active';
        };
        echo '">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/person-outline.svg" alt="">Users</a>
    </li><hr>';
      }
    }
    ?>
    
  </ul>
</nav>