<?php
session_start();
$page = 'course';
if($_SESSION['user'] != 'faculty') {
  header("location: ../error.php");
}

include "../classes/dbconn.class.php";
include "../classes/course.class.php";

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
		</div>
	</header>

	<section class="d-flex">
		<?php include '../../plugins/inc/sidebar.php'; ?>

		<content>
			<div class="card card-outline card-primary" style="height:100%;">
				<div>
					<h1 class="ps-3 pt-3">Courses</h1>
					<hr>
					<div class="card card-outline card-primary">
						<div class="card-header">
							<div class="col-9">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">Add New</button>

								<!-- Modal -->
								<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="uploadModalLabel">New Subject</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form action="http://localhost/Project_I/admin/includes/course.inc.php" method="POST">
												<div class="modal-body">
													<div class="form-group">
														<label for="subject_code" class="control-label">Subject Code</label>
														<input type="text" name="subject_code" id="subject_code" required="" class="form-control form-control-sm" value="">
													</div>
													<div class="form-group">
														<label for="subject_code" class="control-label">Course ID</label>
														<input type="text" name="course_id" id="course_id" required="" class="form-control form-control-sm" value="">
													</div>
													<div class="form-group">
														<label for="subject_code" class="control-label">Level</label>
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

							</div>
							<div class="bg-light">
								<!--<h3 class="px-5 pt-5 font-md-1">First Semister</h3>-->
								<div class="container">
									<div style="overflow-y: scroll; height:700px;">
										<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4 d-flex">
											<?php
												foreach ($results as $row) {
													$id = $row['id'];
													$subid = $row['subject_code'];
													$cid = $row['course_id'];
													$lvl = $row['level'];
													$sname = $row['description'];
													echo '<div class="col">
																	<div class="card shadow-sm">
																		<img src="https://picsum.photos/seed/picsum/200/300" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="...">
																		<div class="card-body">
																			<h6 class="card-title">' . $sname . '</h6>
																			<!--<p class="card-text"></p>-->
																			<div class="d-flex justify-content-between align-items-center">
																				<div class="btn-group">
																					<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
																					<button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#updateModal'.$subid .'">Edit</button>

																					<!-- Modal -->
																					<div class="modal fade" id="updateModal'.$subid .'" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
																						<div class="modal-dialog" role="document">
																							<div class="modal-content">
																								<div class="modal-header">
																									<h5 class="modal-title" id="updateModalLabel">Update Subject</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
																								</div>
																								<form action="http://localhost/Project_I/admin/includes/course.inc.php" method="POST">
																									<div class="modal-body">
																									<div class="form-group">
																											<label for="id" class="control-label">ID</label>
																											<input type="text" name="id" required="" class="form-control form-control-sm" value="'.$id .'">
																										</div>
																										<div class="form-group">
																											<label for="subject_code" class="control-label">Subject Code</label>
																											<input type="text" name="subject_code" required="" class="form-control form-control-sm" value="'.$subid .'">
																										</div>
																										<div class="form-group">
																											<label for="subject_code" class="control-label">Course ID</label>
																											<input type="text" name="course_id" required="" class="form-control form-control-sm" value="'.$cid .'">
																										</div>
																										<div class="form-group">
																											<label for="subject_code" class="control-label">Level</label>
																											<input type="text" name="level" required="" class="form-control form-control-sm" value="'.$lvl .'">
																										</div>
																										<div class="form-group">
																											<label for="description" class="col-form-label">Description</label>
																											<input type="text" class="form-control" name="description" value="'.$sname .'">
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
																					<!-- Modal-->
																					<button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#deleteModal' . $subid . '">Delete</button>

																						<!-- Modal -->
																						<div class="modal fade" id="deleteModal' . $subid . '" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
																							<div class="modal-dialog" role="document">
																								<div class="modal-content">
																									<div class="modal-header">
																										<h5 class="modal-title" id="deleteModalLabel">New Subject</h5>

																									</div>
																									<div class="modal-body">
																										<form action="http://localhost/Project_I/admin/includes/course.inc.php" method="POST">
																											<div class="form-group">
																												<label class="control-label">Do you really want to delete this?
																												<p>Subject Code : <input type="text" name="subject_code" required="" value="' . $subid . '"></p>
																												<p>Course ID : ' . $cid . '</p>
																												<p>Subject : ' . $sname. '</p></label>
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

																						<!--modal-->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>';
												}
											?>
										</div>
									</div>
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