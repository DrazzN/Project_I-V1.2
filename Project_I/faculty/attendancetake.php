<?php
session_start();
$page = 'attendance';

if ($_SESSION['user'] != 'faculty') {
	header("location: error.php");
}

include '../initialize.php';
include "classes/dbconn.class.php";
include "classes/users.class.php";

$_SESSION['tdate'] = $tdate = date('Y-m-d');
$chkatt = $obj->getUsers('SELECT * FROM attendance WHERE date = "'.$_SESSION['tdate'].'"');

if(isset($_POST['redo-submit'])){
	$redoact = $obj->getUsers('DELETE FROM attendance WHERE date = "'.$_SESSION['tdate'].'"');
}
if (isset($_POST['att-submit'])) {
	if (isset($_POST['at'])) {
		$dasa = $cas->updateAtt('INSERT INTO attendance (student_id, date, attendance_id) VALUE(' . $_POST['user_id']  . ', "' . $_SESSION['tdate'] . '","' . $_POST['at'] . '")', "SELECT * FROM attendance WHERE student_id = " . $_POST['user_id']  . " AND date = '" . $_SESSION['tdate'] . "'", $_POST['user_id']);
		header("Location: attendancetake.php?error=none");
	}
}
// var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '../plugins/inc/header.php'; ?>
</head>


<body>
	<section class="d-flex ssize">
		<?php include '../plugins/inc/sidebar.php'; ?>

		<content class="w-100">
		<form action="attendancetake.php" method="POST">
			<div>
				<h1>Attendance of <input type="text" name="donedate" value="<?php echo $_SESSION['tdate']; ?>"></h1><br>

			</div>
			<div style="overflow-y: scroll; height:700px;">
				<div class="col-lg-12">
					<div class="card card-outline card-primary">
						<div class="card-body">
							
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
											// $chkatt = $cas->updateAtt("SELECT * FROM attendance WHERE student_id ='". $user_id ."' AND date = '".$_SESSION['tdate']."'");
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
                          <input type="button" class="btn-check" data-toggle="modal" data-target="#uploadModalP' . $username . '" id="btncheck1' . $username . '">
                          <label class="btn btn-outline-success rounded-pill ';
													foreach($chkatt as $row) {
														if($row['student_id'] == $user_id && $row['attendance_id'] == "present") {
															echo 'active';
														}
													}
													echo '" for="btncheck1' . $username . '">Present</label>			
													
                          <input type="button" class="btn-check" data-toggle="modal" data-target="#uploadModalA' . $username . '" id="btncheck2' . $username . '">
                          <label class="btn btn-outline-danger rounded-pill ';
													foreach($chkatt as $row) {
														if($row['student_id'] == $user_id && $row['attendance_id'] == "absent") {
															echo 'active';
														}
													}
													echo '" for="btncheck2' . $username . '">Absent</label>		
												</div>							
													<!-- Present Modal -->
													<div class="modal fade" id="uploadModalP' . $username . '" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<form action="attendancetake.php" method="POST">
																	<div class="modal-header">
																		<h5 class="modal-title" id="uploadModalLabel">Attendance</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<div class="form-group">
																			<label for="attenp" class="col-form-label">Are you sure ?</label>
																			<input type="hidden" class="form-control" id="attenp" name="at" value="present">
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
													<!-- Present Modal -->

													
													<!-- Absent Modal -->
													<div class="modal fade" id="uploadModalA' . $username . '" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<form action="attendancetake.php" method="POST">
																	<div class="modal-header">
																		<h5 class="modal-title" id="uploadModalLabel">Attendance</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<div class="form-group">
																			<label for="attena" class="col-form-label">Are you sure ?</label>
																			<input type="hidden" class="form-control" id="attena" name="at" value="absent">
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

                        
												
                      </td>
                    </tr>
                    ';
											$i++;
										}
										?>
									</tbody>

								</table>
								<button type="submit" class="btn btn-outline-primary" name="redo-submit">Redo</button>
							
						</div>

						<br>


					</div>
				</div>
			</div>
			</form>
		</content>
		<br>

	</section>

		<?php include '../plugins/inc/footer2.php'; ?>


</body>

</html>