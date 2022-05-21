<?php
session_start();
$page = 'course';
if ($_SESSION['user'] != 'students') {
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


	<section class="d-flex ssize">
		<?php include '../../plugins/inc/sidebar.php'; ?>

		<content class="w-100">
			<div class="card card-outline " style="height:100%;">
				<div>
					<h1 class="ps-3 pt-3">Courses</h1>
					<hr>
					<main>
							<!--<h3 class="px-5 pt-5 font-md-1">First Semister</h3>-->
							<div class="container">
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4 d-flex m-2" style="width:100%;">

									<?php
									$i = 1;
									foreach ($results as $row) {
										$subid = $row['subject_code'];
										$cid = $row['course_id'];
										$sname = $row['description'];
										echo '
								<div class="col">
									<div class="card shadow-sm ho">
									<img src="background/' . $i . '.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="...">
			
										<div class="card-body">
											<h6 class="card-title">' . $sname . '</h6>
											<!--<p class="card-text"></p>-->
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-secondary"><a class="text-dark" href="http://localhost/Project_I/students/course/view/course-content.php?name=' . $sname . '" style="text-decoration:none;">View</a></button>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							';
										$i++;
									}
									?>
								</div>
							</div>
					</main>

				</div>
		</content>
	</section>

	<footer class="">
		<?php include '../../plugins/inc/footer.php'; ?>
	</footer>

</body>

</html>