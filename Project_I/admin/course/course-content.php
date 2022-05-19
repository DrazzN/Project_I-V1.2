<?php
session_start();
$page = 'course';
if ($_SESSION['user'] != 'admin') {
	header("location: ../error.php");
}

include "../classes/dbconn.class.php";
include "../classes/course.class.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '../../plugins/inc/header.php'; ?>
	<style>
		.card img {
			/* change the height to whatever you want */
			height: 100px;
			object-fit: cover;
			display: block;
			width: 100%;
		}
	</style>

</head>


<body>

	<section class="d-flex">
		<content class="w-100">
			<div class="card card-outline card-primary" style="height:100%;">
				<img class="mx-2" src="http://localhost/Project_I/img/ico/arrow-back-circle-outline.svg" style="width:24px; height:24px;" alt=""><div>
        
						<h1 class="ps-3 pt-3">Courses</h1>
						<hr>

				</div>
			</div>
		</content>
	</section>

	<footer>
		<?php include '../../plugins/inc/footer.php'; ?>
	</footer>

</body>

</html>