<?php
session_start();
$page = 'attendance';

if ($_SESSION['user'] != 'faculty') {
	header("location: error.php");
}

include '../initialize.php';
include "classes/dbconn.class.php";
include "classes/users.class.php";
$avialdate = $obj->getUsers('SELECT date FROM attendance GROUP BY date');
$chkatt = $obj->getUsers('SELECT * FROM attendance');

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
			<?php
			foreach ($avialdate as $dval) {
				echo '<div class="accordion accordion-flush" id="accordionFlushExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingOne">
						<button class="accordion-button collapsed btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne' . $dval['date'] . '" aria-expanded="false" aria-controls="flush-collapseOne' . $dval['date'] . '">
							<h1>Attendance of ' . $dval['date'] . '</h1>
						</button>
					</h2>
					<div id="flush-collapseOne' . $dval['date'] . '" class="accordion-collapse collapse" aria-labelledby="flush-headingOne' . $dval['date'] . '" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
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
													<th>Attendance</th>
												</tr>
											</thead>
											<tbody>';

				$i = 1;
				$p = 0;
				$a = 0;
				foreach ($results as $rowud) {
					$user_id = $rowud['user_id'];
					$username = $rowud['username'];
					echo '
														<tr>
															<th class="text-center">' . $i . '</th>
															<!--<td>
																<img src="" alt="" class="img-thumbnail border-rounded" width="75px" height="75px" style="object-fit: cover;">
															</td>-->
															<td><b>' . $user_id . '</b></td>
															<td><b>' . $username . '</b></td>
															<td><b>';


					
						foreach ($chkatt as $row) {
							if ($row['student_id'] == $user_id && $row['date'] == $dval['date']) {
								if ($row['attendance_id'] == "present") {
									echo '<label class="btn btn-outline-success rounded-pill active">P</label>';
									$p++;
								} elseif ($row['student_id'] == $user_id && $row['attendance_id'] == "absent") {
									$a++;
									echo '<label class="btn btn-outline-danger rounded-pill active">A</label>';
								}
					
								// echo $row['student_id'] . ' ' . $row['date'] .' '. $row['attendance_id'] .'<br>';
							}
						}
					
					echo '</b></td>
														</tr>
														
														';
					$i++;
				}
				echo '<tr><td colspan = "4"></td></tr><tr> 
														<th colspan="2" class="text-center"><b>Total</b></td>
														<td><b>Present :' . $p . '</b></td>
														<td><b>Absent :' . $a . '</b></td>
													</tr>

											</tbody>

										</table>
									</div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>';
			}
			?>
			
		</content>
		<br>

	</section>

		<?php include '../plugins/inc/footer2.php'; ?>


</body>

</html>