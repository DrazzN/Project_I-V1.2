<?php
// include '../../classes/course.class.php';
$op = $obj->getSubject('SELECT module FROM subject WHERE subject_code = "' . $_SESSION['subject_code'] . '"');

var_dump($_POST);
// var_dump($_SESSION);

?>
<form action="course-content.php" method="POST">
 


  <button type="submit" class="btn btn btn-primary" name="md-submit">Save</button>
</form>
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

<?php $carticle = ""; ?>