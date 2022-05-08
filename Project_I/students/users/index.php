<?php
session_start();
$page = 'users';
if($_SESSION['user'] != 'student') {
  header("location: ../error.php");
}

include "../classes/dbconn.class.php";
include "../classes/users.class.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../plugins/inc/header.php'; ?>
</head>


<body>
  <header>
    <div class="bg-dark d-flex">
      <div class="col navbar-brand font-weight-bold">
        <a href="http://localhost/Project_I/" class="text-light">eLearning</a>
      </div>
      <!--<div class="col">
        <button class="btn btn-outline-info btn-lg px-4 m-2fw-bold">
          <a class="link-light" href="logout.php">Logout</a>
        </button>
      </div>-->
    </div>
  </header>

  <section class="d-flex">
    <?php include '../../plugins/inc/sidebar.php'; ?>

    <content>
      <div class="card card-outline card-primary" style="height:100%;">
        <div>
          <h1 class="ps-3 pt-3">DashBoard</h1>
          <hr>
          <div>
          <div class="card card-outline card-primary">
				<div class="card-body">
					<table class="table tabe-hover table-bordered" id="list">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Avatar</th>
								<th>Student ID</th>
								<th>Username</th>
								<th>Email</th>
								<!--<th>Action</th>-->
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ($results as $row) {
								$user_id = $row['user_id'];
								$username = $row['username'];
								$email = $row['email'];
								echo '<tr>
								<th class="text-center">' . $i . '</th>
								<td>
									<img src="" alt="" class="img-thumbnail border-rounded" width="75px" height="75px" style="object-fit: cover;">
								</td><td><b>' . $user_id . '</b></td>
							<td><b>' . $username . '</b></td>
							<td><b>' . $email . '</b></td>
							<!--<td class="text-center">
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-block btn-flat dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown" aria-expanded="false">
										Action
									</button>
									<div class="dropdown-menu text-center" role="menu">
										<a class="dropdown-item action_edit" href="#">Edit</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item action_delete" href="#">Delete</a>
									</div>
								</div>
							</td>-->
							</tr>
							';
								$i++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
          </div>
        </div>
      </div>
    </content>
  </section>

  <footer class="">
    <?php include '../../plugins/inc/footer.php'; ?>
  </footer>

</body>

</html>