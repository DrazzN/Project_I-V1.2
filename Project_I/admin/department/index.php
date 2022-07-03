<?php
session_start();
$page = 'department';
if ($_SESSION['user'] != 'admin') {
  header("location: ../error.php");
}

include '../../initialize.php';
include "../classes/dbconn.class.php";
include "../classes/department.class.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../plugins/inc/header.php'; ?>
</head>


<body>

  <?php include '../../plugins/inc/topnavbar.php'; ?>


  <div class="d-flex">
    <?php include '../../plugins/inc/sidebar.php'; ?>
    <section class="d-flex">

      <content class="w-100">
        <div class="card card-outline" style="height:100%;">
          <div>
            <h1 class="ps-3 pt-3">Departments</h1>
            <hr>
            <main style="background-color:#f1f5f9">
              <div class="card-body" style="padding-left:10px;">
                <div class="card-header bg-white d-flex">
                  <button type="button" class="btn btn-primary mx-1" data-toggle="modal" data-target="#uploadModal">Add New</button>
                </div>
              </div>

              <div style="overflow-y: scroll; height:450px; padding:0 10px 0 10px">
                <table class="table tabe-hover table-bordered bg-white" id="list">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <!-- <th>Department ID</th> -->
                      <th>Department</th>
                      <th>Course ID</th>
                      <th>Description</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($resultd as $row) {
                      $department_id = $row['department_id'];
                      $department = $row['department'];
                      $course_id = $row['course_id'];
                      $description = $row['description'];
                      echo '
											<tr>
												<th class="text-center">' . $i . '</th>
												<!-- <td><b>' . $department_id . '</b></td> -->												
												<td><b>' . $department . '</b></td>
                        <td><b>' . $course_id . '</b></td>
                        <td><b>' . $description . '</b></td>
												<td class="text-center">
                      <button type="button" class="action_edit btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#updateModal' . $department . '">Edit</button>
											<button type="button" class="action_delete btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#deleteModal' . $department . '">Delete</button>	
                      <!-- Modal -->
                      <div class="modal fade" id="updateModal' . $department . '" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="updateModalLabel">Update Department</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="' . base_url . 'admin/includes/department.inc.php" method="POST">
                              <div class="modal-body">
                              <div class="form-group">
                                  <label for="department_code" class="control-label">Department ID</label>
                                  <input type="text" name="department_code" required="" class="form-control form-control-sm" value="' . $department_id . '">
                                </div>
                                <div class="form-group">
                                  <label for="department" class="control-label">Department</label>
                                  <input type="text" name="department" required="" class="form-control form-control-sm" value="' . $department . '">
                                </div>
                                <div class="form-group">
                                  <label for="course_id" class="control-label">Course ID</label>
                                  <input type="text" name="course_id" id="course_id" required="" class="form-control form-control-sm" value="' . $course_id . '">
                                </div>
                                <div class="form-group">
                                  <label for="description" class="control-label">Description</label>
                                  <input type="text" name="description" required="" class="form-control form-control-sm" value="' . $description . '">
                                </div>
                                <br>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" name="update-submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- Modal-->


                      <!-- Modal -->
                      <div class="modal fade" id="deleteModal' . $department . '" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="' . base_url . 'admin/includes/department.inc.php" method="POST">
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="department_code" class="control-label">Department ID</label>
                                  <input type="text" name="department_code" required="" class="form-control form-control-sm" value="' . $department_id . '">
                                </div>
                                <div class="form-group">
                                  <label for="department" class="control-label">Department</label>
                                  <input type="text" name="department" required="" class="form-control form-control-sm" value="' . $department . '">
                                </div>
                                <br>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" name="delete-submit" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- Modal-->
													
											</td>
											</tr>
											';
                      $i++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </main>
          </div>
        </div>
      </content>

    </section>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadModalLabel">New Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url ?>admin/includes/department.inc.php" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="department_code" class="control-label">Department Code</label>
              <input type="text" name="department_code" id="department_code" required="" class="form-control form-control-sm" value="<?php echo $i ?>">
            </div>
            <div class="form-group">
              <label for="department" class="control-label">Department</label>
              <input type="text" name="department" id="department" required="" class="form-control form-control-sm" value="">
            </div>
            <div class="form-group">
              <label for="course_id" class="control-label">Course ID</label>
              <input type="text" name="course_id" id="course_id" required="" class="form-control form-control-sm" value="">
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
  <!-- Modal -->

  <?php include '../../plugins/inc/footer2.php'; ?>


</body>

</html>