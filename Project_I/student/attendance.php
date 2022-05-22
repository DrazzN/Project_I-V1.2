<?php
session_start();
$page = 'users';
if($_SESSION['user'] != 'admin') {
  header("location: error.php");
}

include "classes/dbconn.class.php";
include "classes/users.class.php";
$_SESSION['tdate'] = $tdate = date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '../plugins/inc/header.php'; ?>
</head>


<body>
	<section class="d-flex ssize">
		<?php include '../plugins/inc/sidebar.php'; ?>

		<content w-100>

			<div>
				<h1>Attendance of <?php echo $_SESSION['tdate']; ?></h1><br>
				
			</div>
			<div style="overflow-y: scroll; height:700px;">
				<div class="col-lg-12">
					<div class="card card-outline card-primary">
						<div class="card-body">
							<form action="" method="POST">
								<table class="table tabe-hover table-bordered" id="list">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<!-- <th>Avatar</th> -->
											<th>Student ID</th>
											<th>Username</th>
											<th>Present</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										foreach ($results as $row) {
											$user_id = $row['user_id'];
											$username = $row['username'];
											echo '
                    <tr>
                      <th class="text-center">' . $i . '</th>
                      <!--<td>
                        <img src="" alt="" class="img-thumbnail border-rounded" width="75px" height="75px" style="object-fit: cover;">
                      </td>-->
                      <td><b>' . $user_id . '</b></td>
                      <td><b>' . $username . '</b></td>
                      <td class="text-center">											
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                          <input type="radio" class="btn-check" data-toggle="modal" data-target="#uploadModalP' . $username . '" id="btncheck1' . $username . '">
                          <label class="btn btn-outline-success rounded-pill" for="btncheck1' . $username . '">Present</label>
													
													<!-- Modal -->
													<div class="modal fade" id="uploadModalP' . $username . '" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<form action="attendance.php" method="POST" enctype="multipart/form-data">
																	<div class="modal-header">
																		<h5 class="modal-title" id="uploadModalLabel">Upload Assignment</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<div class="form-group">
																			<label for="attenp" class="col-form-label">Are you sure ?</label>
																			<input type="hidden" class="form-control" id="attenp" name="at" value=1>
																		</div>
																		<div class="form-group">
																			<input type="hidden" class="form-control" id="uid" name="user_id" value="' . $user_id . '">
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="submit" name="att-submit" class="btn btn-primary">Upload</button>
																		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<!--Modal -->

                          <input type="radio" class="btn-check" data-toggle="modal" data-target="#uploadModalA' . $username . '" id="btncheck2' . $username . '">
                          <label class="btn btn-outline-danger rounded-pill" for="btncheck2' . $username . '">Absent</label>
													
													<!-- Modal -->
													<div class="modal fade" id="uploadModalA' . $username . '" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<form action="attendance.php" method="POST" enctype="multipart/form-data">
																	<div class="modal-header">
																		<h5 class="modal-title" id="uploadModalLabel">Upload Assignment</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<div class="form-group">
																			<label for="attena" class="col-form-label">Are you sure ?</label>
																			<input type="hidden" class="form-control" id="attena" name="at" value=0>
																		</div>	
																		<div class="form-group">
																			<input type="hidden" class="form-control" id="uid" name="user_id" value="' . $user_id . '">
																		</div>																	
																	</div>
																	<div class="modal-footer">
																		<button type="submit" name="att-submit" class="btn btn-primary">Submit</button>
																		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<!--Modal -->

                        </div>
												
                      </td>
                    </tr>
                    ';
											$i++;
										}
										?>
									</tbody>

								</table>
								<!-- <button type="submit" class="btn btn-outline-primary" name="attendance-submit">Submit</button> -->
							</form>
						</div>
						
						<br>


					</div>
				</div>
			</div>
		</content>
		<br>

	</section>

	<footer class="">
		<?php include '../plugins/inc/footer.php'; ?>
	</footer>

</body>

</html>