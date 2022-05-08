<nav class="flex-shrink-0 p-3 bg-light" style="width: 280px;" id="sidebar">
  <div class="dropdown">
    <a href="#" class="d-flex align-items-start justify-content-start p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="30" height="30" class="rounded-circle">&nbsp;Person
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
      <!--<li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>-->
      <li><a class="dropdown-item" href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/profile.php">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/logout.php">Sign out</a></li>
    </ul>
  </div>
  <hr>
  <ul class="nav nav-pills nav-sidebar flex-column nav-flat">
    <li class="nav-item">
      <a href="http://localhost/Project_I/" class="nav-link text-dark<?php if($page == 'home' ){echo ' active';} ?>" aria-current="page">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/home-outline.svg" alt="">Home</a>
    </li>
    <hr>
    <li class="nav-item">
      <a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/" class="nav-link text-dark<?php if($page == 'dashboard' ){echo 'active';} ?>">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/speedometer-outline.svg" alt="">Dashboard
        </div></a>
    </li>
    <hr>
    <li class="nav-item">
      <a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/course/" class="nav-link text-dark<?php if($page == 'course' ){echo 'active';} ?>">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/apps-outline.svg" alt="">Courses</a>
    </li>
    <hr>
    <li class="nav-item">
      <a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/assignments/" class="nav-link text-dark<?php if($page == 'assignments' ){echo 'active';} ?>">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/library-outline.svg" alt="">Assignnments</a>
    </li>
    <hr>
    <li class="nav-item">
      <a href="http://localhost/Project_I/<?php echo $_SESSION['user']; ?>/users/" class="nav-link text-dark<?php if($page == 'users' ){echo 'active';} ?>">
        <img class="img icon mx-2" src="http://localhost/Project_I/img/person-outline.svg" alt="">Users</a>
    </li>
    <hr>
  </ul>
</nav>
<!--
      <div class="d-flex flex-column flex-shrink-0 bg-light">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
      <hr>
      <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <li class="nav-item">
          <a href="#" class="nav-link py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
            <img class="img icon" src="http://localhost/Project_I/img/home-outline.svg" alt="">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link py-3 border-bottom" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
            <img class="img icon" src="http://localhost/Project_I/img/speedometer-outline.svg" alt="">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link py-3 border-bottom" title="Courses" data-bs-toggle="tooltip" data-bs-placement="right">
            <img class="img icon" src="http://localhost/Project_I/img/apps-outline.svg" alt="">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link py-3 border-bottom" title="Assignments" data-bs-toggle="tooltip" data-bs-placement="right">
            <img class="img icon" src="http://localhost/Project_I/img/library-outline.svg" alt="">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link py-3 border-bottom" title="Users" data-bs-toggle="tooltip" data-bs-placement="right">
            <img class="img icon" src="http://localhost/Project_I/img/person-outline.svg" alt="">
          </a>
        </li>
      </ul>

    </div>-->