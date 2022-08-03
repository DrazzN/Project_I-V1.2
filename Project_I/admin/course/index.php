<?php
session_start();
$page = 'course';

if ($_SESSION['user'] != 'admin') {
	header("location: ../error.php");
}
if (isset($_GET['course_id'])) {
	$_SESSION['sple'] = 'SELECT * FROM subject WHERE course_id = ' . $_GET['course_id'];
} else {
	$_SESSION['sple'] = 'SELECT * FROM subject';
}
include "../../initialize.php";
include "../classes/dbconn.class.php";
include "../classes/course.class.php";
include "../classes/department.class.php";
$results = $obj->getsubject($_SESSION['sple']);
// var_dump($_POST);
// var_dump($_SESSION);
// var_dump($results);


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
				echo "<script>
									Swal.fire(
										'" . $_GET['action'] . " Successful',
										'', 'success'
									);
									</script>";
			}
			?>
			<content class="w-100">
				<div class="card card-outline" style="height:100%;">
					<div>
						<h1 class="ps-3 pt-3">Courses</h1>
						<hr>
						<main style="background-color:#f1f5f9;padding: 0rem 1.5rem;">
							<div class="card-body" style="padding-left:10px;">
								<div class="card-header bg-white d-flex">
									<button type="button" class="btn btn-primary mx-1" data-toggle="modal" data-target="#uploadModal">Add New</button>
								</div>
							</div>

							<div style="overflow-y: scroll; height:450px">
								<?php
								// $setin = false;
								foreach ($resultd as $sect) {
									$dcid = $sect['course_id'];
									if (isset($_GET['course_id']) && $setin = true) {
										// $setin = true;
										echo '<h3 class="px-5 pt-3 font-md-1">' . $_GET['dept'] . '</h3>';
									} else if (!isset($_GET['course_id'])) {
										echo '<h3 class="px-5 pt-3 font-md-1">' . $sect['department'] . ' &nbsp;Course ID : ' . $sect['course_id'] . '</h3>';
									}
									echo '<div class="container">
									<div class="d-flex row row-lg-4 g-4 d-flex m-2" style="width:100%;">';
									// <?php
									$i = 1;
									foreach ($results as $row) {
										$id = $row['id'];
										$subid = $row['subject_code'];
										$cid = $row['course_id'];
										$lvl = $row['level'];
										$sname = $row['description'];
										if ($dcid == $cid) {
											echo
											'<div class="col-lg-4">
														<div class="card shadow-sm">
															<img src="background/' . $i . '.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="...">
															<div class="card-body">
																<h6 class="card-title">' . $sname . '</h6>
																<!--<p class="card-text"></p>-->
																<div class="d-flex justify-content-between align-items-center">
																	<div class="btn-group">
																		<a class="link" href="' . base_url . 'admin/course/view/course-content.php?name=' . $sname . '&code=' . $subid . '" style="text-decoration:none;"><button type="button" class="btn btn-sm btn-outline-primary rounded">View</button></a>
																		<button type="button" class="btn btn-sm btn-outline-primary rounded" data-toggle="modal" data-target="#updateModal' . $subid . '">Edit</button>
																		<button type="button" class="btn btn-sm btn-outline-primary rounded" data-toggle="modal" data-target="#deleteModal' . $subid . '">Delete</button>
																		&nbsp;
																		&nbsp;
																		<img src="' . base_url . 'img/information-circle-outline.svg" style="width:24px; height:24px;" alt="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Subject ID : ' . $subid = $row['subject_code'] . '">																
																		
																		<!-- Update Modal -->
																		<div class="modal fade" id="updateModal' . $subid . '" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
																			<div class="modal-dialog" role="document">
																				<div class="modal-content">
																					<div class="modal-header">
																						<h5 class="modal-title" id="updateModalLabel">Update Subject</h5>
																						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																							<span aria-hidden="true">&times;</span>
																						</button>
																					</div>
																					<form action="' . base_url . 'admin/includes/course.inc.php" method="POST">
																						<div class="modal-body">
																						<div class="form-group">
																								<label for="id" class="control-label">ID</label>
																								<input type="text" name="id" required="" class="form-control form-control-sm" value="' . $id . '">
																							</div>
																							<div class="form-group">
																								<label for="subject_code" class="control-label">Subject Code</label>
																								<input type="text" name="subject_code" required="" class="form-control form-control-sm" value="' . $subid . '">
																							</div>
																							<div class="form-group">
																								<label for="subject_code" class="control-label">Course ID</label>
																								<input type="text" name="course_id" required="" class="form-control form-control-sm" value="' . $cid . '">
																							</div>
																							<div class="form-group">
																								<label for="subject_code" class="control-label">Level</label>
																								<input type="text" name="level" required="" class="form-control form-control-sm" value="' . $lvl . '">
																							</div>
																							<div class="form-group">
																								<label for="description" class="col-form-label">Description</label>
																								<input type="text" class="form-control" name="description" value="' . $sname . '">
																							</div>
																							<br>
																						</div>
																						<div class="modal-footer">
																							<button type="submit" name="update-submit" class="btn btn-primary">update</button>
																							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																						</div>
																					</form>
																				</div>
																			</div>
																		</div>
																		<!-- Update Modal-->
																		
																		<!-- Delete Modal -->
																		<div class="modal fade" id="deleteModal' . $subid . '" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
																			<div class="modal-dialog" role="document">
																				<div class="modal-content">
																					<div class="modal-header">
																						<h5 class="modal-title" id="deleteModalLabel">New Subject</h5>

																					</div>
																					<div class="modal-body">
																						<form action="' . base_url . 'admin/includes/course.inc.php" method="POST">
																							<div class="form-group">
																								<label class="control-label">Do you really want to delete this?
																								<p>Subject Code : <input type="text" name="subject_code" readonly value="' . $subid . '"></p>
																								<p>Course ID : ' . $cid . '</p>
																								<p>Subject : ' . $sname . '</p></label>
																							</div>
																							<br>
																					</div>
																					<div class="modal-footer">
																						<button type="submit" name="delete-submit" class="btn btn-primary">Confirm</button>
																						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
																					</div>
																					</form>
																				</div>
																			</div>
																		</div>
																		<!-- Delete Modal-->

																	</div>
																</div>
															</div>
														</div>
													</div>	';
											$i++;
										}
									}
									echo '</div>
							</div>';
								}

								?>

							</div>
						</main>
					</div>
			</content>
		</section>
	</div>
	<!-- Add Modal -->
	<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="uploadModalLabel">New Subject</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url ?>admin/includes/course.inc.php" method="POST">
					<div class="modal-body">
						<div class="form-group">
							<label for="subject_code" class="control-label">Subject Code</label>
							<input type="text" name="subject_code" id="subject_code" required="" class="form-control form-control-sm" value="">
						</div>
						<div class="form-group">
							<label for="course_id" class="control-label">Course ID</label>
							<input type="text" name="course_id" id="course_id" required="" class="form-control form-control-sm" value="">
						</div>
						<div class="form-group">
							<label for="level" class="control-label">Level</label>
							<input type="text" name="level" id="level" required="" class="form-control form-control-sm" value="">
						</div>
						<div class="form-group">
							<label for="description" class="col-form-label">Description</label>
							<input type="text" class="form-control" id="description" name="description">
						</div>
						<br>
					</div>
					<div class="modal-footer">
						<button type="submit" name="add-submit" class="btn btn-primary">Upload</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Add Modal -->

	<?php include '../../plugins/inc/footer2.php'; ?>

	<script>
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
		var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
			return new bootstrap.Tooltip(tooltipTriggerEl)
		})
	</script>
</body>

</html>