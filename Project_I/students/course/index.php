<?php
include "../classes/dbconn.class.php";
include "../classes/course.class.php";

?>
<!DOCTYPE html>
<html lang="en">

<?php include '../../plugins/inc/header.php'; ?>

<body>
	<div class="d-flex">
		<div class="col-2 ssize bg-light">
			<?php include '../../plugins/inc/sidebar.php'; ?>
		</div>
		<div class="col-10">
			<div class="card card-outline card-primary">
			<!--
			<div class="card-header">
				<div class="card-tools">
					<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="#">
						<img class="img logo" src="http://localhost/Project_I_Public/img/ico/add-circle-sharp.svg" alt="" style="width:20px;height:20px;">Add New</a>
				</div>
			</div>-->

			<main>
				<div class="my-0 bg-light">
					<h3 class="m-5 font-md-1">First Semister</h3>
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
											<h5 class="card-title">' . $cname . '</h5>
											<!--<p class="card-text"></p>-->
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
													<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
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

	<?php include '../../plugins/inc/footer.php'; ?>
</body>

</html>