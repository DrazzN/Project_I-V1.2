<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "e_dbase";

try {
	$sql = "mysql:host=" . $server . ";dbname=" . $database;
	$pdo = new PDO($sql, $user, $pass);
	// Set the PDO error mode to exception
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connection success!!";
	$que = "SELECT * FROM subject";
	$results = $pdo->query($que);

	//foreach ($results as $row) {
	//	echo '<p>' .$row['user_id']." ". $row['username'] . '</p>';
	//}
} catch (PDOException $e) {
	echo "Connection Failed " . $e->getCode();
}


?>
<!DOCTYPE html>
<html lang="en">

<?php include '../../plugins/inc/header.php'; ?>

<body>
	<div class="col-lg-12">
		<div class="card card-outline card-primary">
			<div class="card-header">
				<div class="card-tools">
					<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="#">
						<img class="img logo" src="http://localhost/Project_I_Public/img/ico/add-circle-sharp.svg" alt="" style="width:20px;height:20px;">Add New</a>
				</div>
			</div>

			<main>
				<div class="py-0 bg-light">
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
										<img src="img/course (2).jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="...">
			
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
	<div class="modal modal-dismissible fade show" id="uni_modal" role="dialog" aria-modal="true">
		<div role="document" class="modal-dialog modal-md modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">New Subject</h5>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="col-lg-12">
							<div id="msg" class="form-group"></div>
							<form action="" id="manage_subject">
								<input type="hidden" name="id" value="">
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
									<label for="description" class="control-label">Description</label>
									<textarea name="description" id="description" cols="30" rows="3" class="form-control" required=""></textarea>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="submit">Save</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<?php include '../../plugins/inc/footer.php'; ?>
</body>

</html>