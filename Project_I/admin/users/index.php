<?php
session_start();
$page = 'users';

if ($_SESSION['user'] != 'admin') {
	header("location: ../error.php");
}

include '../../initialize.php';
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


	<div class="d-flex">
		<?php include '../../plugins/inc/sidebar.php'; ?>
		<section class="d-flex">
			<?php
			if (isset($_GET['action'])) {
				if ($_GET['action'] == 'added') {
					$action = "User Added";
				} else if ($_GET['action'] == 'deleted') {
					$action = "User Deleted";
				} else if ($_GET['action'] == 'updated') {
					$action = "Update Successful";
				}
				echo "<script>
					Swal.fire(
						'" . $action . "',
						'', 'success'
					)
				</script>";
			}

			?>

			<content class="w-100">
				<div class="card card-outline" style="height:100%;">
					<div>
						<h1 class="ps-3 pt-3">Users</h1>
						<hr>
						<main>
							<div class="card-body" style="padding-left:10px;">
								<div class="card-header bg-white d-flex">

									<button type="button" class="btn btn-primary mx-1" data-toggle="modal" data-target="#adduser">Add New</button>
									<!-- Modal -->
									<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="uploadModalLabel">New user</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form action="<?php echo base_url ?>admin/includes/user.inc.php" method="POST" id="manage-user">
													<div class="modal-body">
														<div class="form-group">
															<label for="name">UserName</label>
															<input type="text" name="uid" class="form-control" value="" required>
														</div>
														<div class="form-group">
															<label for="name">Email</label>
															<input type="text" name="email" class="form-control" value="" required>
														</div>
														<div class="form-group">
															<label for="password">Password</label>
															<input type="password" name="pwd" class="form-control" value="">
														</div>
														<div class="form-group">
															<label for="password">Person</label>
															<select name="person">
																<option value="admin">Admin</option>
																<option value="faculty">Faculty</option>
																<option value="student">Student</option>
															</select>
														</div>
													</div>
													<div class="modal-footer">
														<button type="submit" name="add-user-submit" class="btn btn-primary">Add</button>
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
													</div>
												</form>
											</div>
										</div>
									</div>
									<!-- Modal -->
									<br>
									<form action="index.php" method="POST">
										<button type="submit" name="person" class="btn btn-primary" value="admin">View Admin</button>
										<button type="submit" name="person" class="btn btn-primary" value="faculty">View Faculty</button>
										<button type="submit" name="person" class="btn btn-primary" value="student">View Student</button>
									</form>
								</div>
							</div>
							<?php
							if (isset($_POST['person'])) {
								$results = $obj->getUsers('SELECT * FROM users WHERE person = "' . $_POST['person'] . '"');
							}
							?>
							<div style="overflow-y: scroll; height:450px; padding:0 10px 0 10px">
								<table class="table tabe-hover table-bordered bg-white" id="list">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<!-- <th>Avatar</th> -->
											<th>User ID</th>
											<th>Username</th>
											<th>Email</th>
											<th>Action</th>
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
													<img src="' . base_url . 'students/uploads/avatar/profile-' . $user_id . '" alt="" class="img-thumbnail border-rounded" width="75px" height="75px" style="object-fit: cover;">
												</td>-->
												<td><b>' . $user_id . '</b></td>
												<td><b>' . $username . '</b></td>
												<td><b>' . $email . '</b></td>
												<td class="text-center">
													<button type="button" class="action_edit btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#updateModal' . $username . '">Edit</button>
													<button type="button" class="action_delete btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#deleteModal' . $username . '">Delete</button>
													<!-- Modal -->
													<div class="modal fade" id="updateModal' . $username . '" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="updateModalLabel">Update Subject</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<form action="' . base_url . 'admin/includes/user.inc.php" method="POST">
																	<div class="modal-body">
																	<div class="form-group">
																			<label for="id" class="control-label">ID</label>
																			<input type="text" name="id" required="" class="form-control form-control-sm" value="' . $user_id . '">
																		</div>
																		<div class="form-group">
																			<label for="username" class="control-label">Username</label>
																			<input type="text" name="uid" required="" class="form-control form-control-sm" value="' . $username . '">
																		</div>
																		<div class="form-group">
																			<label for="email" class="control-label">Email</label>
																			<input type="text" name="email" required="" class="form-control form-control-sm" value="' . $email . '">
																		</div>
																		<div class="form-group">
																			<label for="pwd" class="control-label">Password</label>
																			<input type="text" name="pwd" class="form-control form-control-sm" value="">
																			<small><i>Leave this blank if you dont want to change the password.</i></small>
																		</div>
																		<br>
																	</div>
																	<div class="modal-footer">
																		<button type="submit" name="update-user-submit" class="btn btn-primary">update</button>
																		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<!-- Modal-->

													
													<!-- Modal -->
													<div class="modal fade" id="deleteModal' . $username . '" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<form action="' . base_url . 'admin/includes/user.inc.php" method="POST">
																	<div class="modal-body">
																		<div class="form-group">
																			<label for="username" class="control-label">Username</label>
																			<input type="text" name="uid" required="" class="form-control form-control-sm" value="' . $user_id . '">
																		</div>
																		<div class="form-group">
																			<label for="username" class="control-label">Username</label>
																			<input type="text" required="" class="form-control form-control-sm" value="' . $username . '">
																		</div>
																		<br>
																	</div>
																	<div class="modal-footer">
																		<button type="submit" name="delete-user-submit" class="btn btn-primary">Delete</button>
																		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<!-- Modal-->
													
											</td>
											</tr>
											';
											$i++;
										}
										?>
									</tbody>
								</table>
							</div>

						</main>
					</div>
				</div>
			</content>
		</section>
	</div>
	<?php include '../../plugins/inc/footer2.php'; ?>

</body>

</html>