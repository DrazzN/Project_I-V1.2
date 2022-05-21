<?php
session_start();
$page = 'course';
if ($_SESSION['user'] != 'admin') {
	header("location: ../error.php");
}

include "../../classes/dbconn.class.php";
include "../../classes/course.class.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '../../../plugins/inc/header.php'; ?>
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

	<section class="d-flex ssize">
		<content class="w-100">
			<div class="card card-outline" style="height:100%;">
				<div class="d-flex">
					<a href="http://localhost/Project_I/admin/course/index.php"><img class="m-3" src="http://localhost/Project_I/img/ico/arrow-back-circle-outline.svg" style="width:30px; height:30px;" alt=""></a>
					<h1 class="ps-3 pt-3"><?php echo $_GET['name']; ?></h1>
				</div>
				<hr>
				<div class="row d-flex">
					<div class="col-2">
						asda
					</div>
					<div class="col ">
						sadas
					</div>
				</div>


			</div>
		</content>
	</section>

	<footer>
		<?php include '../../../plugins/inc/footer.php'; ?>
	</footer>

</body>

</html>