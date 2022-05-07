<?php
session_start();
$_SESSION['user'] = 'admin';
$_SESSION['page'] = 'attendance';

include "classes/dbconn.class.php";
include "classes/users.class.php";

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
<?php include '../plugins/inc/header.php'; ?>
</head>

<body>
  <div class="d-flex">
  <div class="col-2">
    <?php include '../plugins/inc/sidebar.php'; ?>
  </div>
  
  <div class="col-10">
    <div class="bg-dark">
      <button class="btn my-4" id="menu-btn">
      </button>
      <button class="btn my-4 btn-light text-dark" id="menu-btn">
        <a href="logout.php">Logout</a>
      </button>
    </div>

    <h1>Attendance</h1>
    <div class="col-lg-12">
		<div class="card card-outline card-primary">
			<div class="card-body">
				<table class="table tabe-hover table-bordered" id="list">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th>Avatar</th>
							<th>Student ID</th>
							<th>Username</th>
							<th>Present</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i=1;
						foreach ($results as $row) {
							$user_id = $row['user_id'];
							$username = $row['username'];
							echo '<tr>
								<th class="text-center">'.$i.'</th>
								<td>
									<img src="" alt="" class="img-thumbnail border-rounded" width="75px" height="75px" style="object-fit: cover;">
								</td><td><b>' . $user_id . '</b></td>
							<td><b>' . $username . '</b></td>
							<td class="text-center">
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-block btn-flat dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown" aria-expanded="false">
										Action
									</button>
									<div class="dropdown-menu text-center" role="menu">
										<input type="checkbox" class="dropdown-item" name="present" value=1>Present
										<div class="dropdown-divider"></div>
										<input type="checkbox" class="dropdown-item" name="absent" value=0>Absent
									</div>
								</div>
							</td>
							</tr>
							';
							$i++;
						}
						?>
					</tbody>
          
				</table>
        <button type="submit" name="submit">Submit</button>
			</div>
		</div>
	</div>
</div>
  <?php include '../plugins/inc/footer.php'; ?>
</body>

</html>