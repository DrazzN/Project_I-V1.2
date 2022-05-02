<!doctype html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>

</svg>
  <div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
  </div>
  <div class="alert alert-success d-flex align-items-center" role="alert">
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    An example success alert with an icon
  </div>
</div>
  <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
    <div><img class="icon svg" src="http://localhost/Project_I/img/ico/checkmark-circle-success.svg" alt=""></div>
    <div>
      Login Success!!
    </div>
    <button type=" button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <div class="alert alert-warning d-flex align-items-center alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  </div>
  <div class="alert alert-danger" role="alert">
    User not found!!
  </div>

  <div class="modal modal-dismissible fade show" id="uni_modal" role="dialog" aria-modal="true" style="display: block;">
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
  <script>
	alert_toast("success");
</script>
  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>