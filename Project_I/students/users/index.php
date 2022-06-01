<?php
session_start();
$page = 'users';
if ($_SESSION['user'] != 'students') {
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
	<section class="d-flex ssize">
		<?php include '../../plugins/inc/sidebar.php'; ?>

		<content class="w-100">
			<div class="card card-outline card-primary" style="height:100%;">
				<div>
					<h1 class="ps-3 pt-3">Users</h1>
					<hr>
					<div>
						<div class="card card-outline card-primary">
							<div class="card-body">
								<div style="overflow-y: scroll; height:100%;">
									<table class="table tabe-hover table-bordered" id="list">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<!-- <th>Avatar</th> -->
												<th>User ID</th>
												<th>Username</th>
												<th>Email</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i = 1;
											foreach ($results as $row) {
												$user_id = $row['user_id'];
												$username = $row['username'];
												$email = $row['email'];

												echo '
											<tr>
												<th class="text-center">' . $i . '</th>
												<!--<td>
													<img src="http://localhost/Project_I/students/uploads/avatar/profile-'. $user_id . '" alt="" class="img-thumbnail border-rounded" width="75px" height="75px" style="object-fit: cover;">
												</td>-->
												<td><b>' . $user_id . '</b></td>
												<td><b>' . $username . '</b></td>
												<td><b>' . $email . '</b></td>
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
			</div>
		</content>
	</section>

	<footer class="">
		<?php include '../../plugins/inc/footer.php'; ?>
	</footer>

</body>

</html>