<?php
session_start();
$_SESSION['user'] = 'students';
$_SESSION['page'] = 'course';

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
			<!--<div class="col">
        <button class="btn btn-outline-info btn-lg px-4 m-2fw-bold">
          <a class="link-light" href="logout.php">Logout</a>
        </button>
      </div>-->
		</div>
	</header>

	<section class="d-flex">
		<?php include '../../plugins/inc/sidebar.php'; ?>

		<content>
			<div class="card card-outline card-primary" style="height:100%;">
				<div>
					<h1 class="ps-3 pt-3">Courses</h1>
					<hr>
					<div>
						<div class="">
							<div class="card card-outline card-primary">

								<!--<div class="card-header">
									<div class="card-tools">
										<a class="btn btn-block btn-sm btn-flat btn-primary" href="#">
											<img class="img logo" src="http://localhost/Project_I/img/ico/add-circle-sharp.svg" alt="" style="width:20px;height:20px;">Add New</a>
									</div>
								</div>-->

								<main>
									<div class="bg-light">
										<h3 class="px-5 pt-5 font-md-1">First Semister</h3>
										<div class="container">
											<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4 d-flex">

												<?php
												foreach ($results as $row) {
													$subid = $row['subject_code'];
													$cid = $row['course_id'];
													$cname = $row['description'];
													echo '
								<div class="col">
									<div class="card shadow-sm">
										<img src="https://picsum.photos/seed/picsum/200/300" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="...">
			
										<div class="card-body">
											<h6 class="card-title">' . $cname . '</h6>
											<!--<p class="card-text"></p>-->
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
													<!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>-->
												</div>
											</div>
										</div>
									</div>
								</div>
							';
												}
												?>
											</div>
										</div>
									</div>
								</main>
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