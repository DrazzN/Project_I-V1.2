<!doctype html>
<html lang="en">

<head>
  <?php include '../../plugins/inc/header.php'; ?>
</head>

<body>
  <form action="../includes/course.inc.php" method="POST">

    <label for="subject_code" class="control-label">Subject Code</label>
    <input type="text" name="subject_code" id="subject_code" required="" class="form-control form-control-sm">

    <label for="subject_code" class="control-label">Course ID</label>
    <input type="text" name="course_id" id="course_id" required="" class="form-control form-control-sm">

    <label for="subject_code" class="control-label">Level</label>
    <input type="text" name="level" id="level" required="" class="form-control form-control-sm">

    <label for="description" class="col-form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description">



    <button type="submit" name="submit" class="btn btn-primary">Upload</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

  </form>

  <?php include '../../plugins/inc/footer.php'; ?>
</body>

</html>