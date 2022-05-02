<?php
session_start();
$page = 'users';

include "../classes/dbconn.class.php";
include "../classes/users.class.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '../../plugins/inc/header.php'; ?>
</head>


<body>
	<?php include '../../plugins/inc/topnavbar.php'; ?>
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
							<th>Email</th>
							<!--<th>Action</th>-->
						</tr>
					</thead>
					<tbody>
						<?php
						$i=1;
						foreach ($results as $row) {
							$user_id = $row['user_id'];
							$username = $row['username'];
							$email = $row['email'];
							echo '<tr>
								<th class="text-center">'.$i.'</th>
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
	<?php include '../../plugins/inc/footer.php'; ?>
</body>

</html>