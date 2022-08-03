<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="http://localhost/Project_I/students/course/assignments/upload.php" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadModalLabel">Upload Assignment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="assignid" class="col-form-label">Assignment_id</label>
            <input type="text" class="form-control" id="assignid" name="assign_id" required>
          </div>
          <div class="form-group">
            <label for="description" class="col-form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
          </div>
          <br>
          <div class="form-group">
            <label for="subdate" class="col-form-label">Submition Date</label>
            <input type="text" class="form-control" id="subdate" name="subdate" value="<?php echo date('d-m-Y h:i:sa'); ?>" required>
          </div>
          <br>
          <div class="form-group">
            <input type="file" class="form-control" name="file" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-primary">Upload</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--Modal -->

<button type="button" class="btn btn-primary ho" data-toggle="modal" data-target="#uploadModal">
  <ion-icon name="cloud-upload-outline"></ion-icon>
  Upload Assignment
</button>
<div style="overflow-y: scroll; height:450px;">
  <table class="table tabe-hover table-striped" id="list">
    <thead>
      <tr>
        <th class="text-center">#</th>
        <th>Assignment ID</th>
        <th>Description</th>
        <th>Submitted Date</th>
        <th>Subject Code</th>
        <th>File</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach ($resultsas as $row) {
        $assign_id = $row['assignment_id'];
        $floc = $row['floc'];
        $datein = $row['datein'];
        $desc = $row['fdesc'];
        $sub_id = $row['subject_code'];
        $fname = $row['fname'];

        echo '
              <tr>
                <th class="text-center">' . $i . '</th>
                <td><b>' . $assign_id . '</b></td>
                <td><b>' . $desc . '</b></td>
                <td><b>' . $datein . '</b></td>
                <td><b>' . $sub_id . '</b></td>
                <td><b>' . $fname . '</b></td>
                <td><b><a href="http://localhost/Project_I/students/course/assignments/' . $floc . '" download>
                <ion-icon name="download-outline"></ion-icon>Download
              </a><button class="btn-outline-warning btn-shadow-light text-danger" data-toggle="modal" data-target="#uploadModal' . $assign_id . '" type="submit" name="deleteassign"><ion-icon name="trash-outline"></ion-icon>Delete</button>
              </b>
              <!-- Modal -->
              <div class="modal fade" id="uploadModal' . $assign_id . '" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form action="course-content.php?opt=assignments" method="POST">
                      <div class="modal-header">
                        <h5 class="modal-title" id="uploadModalLabel">Delete Assignment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="fname" class="col-form-label">Do you really want to delete this ?<p> : ' . $fname . '</p></label>
                          <input type="hidden" class="form-control" id="fname" name="fname" value="' . $fname . '">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="delas-submit" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--Modal -->
              </td>
              </tr>';
        $i++;
      }
      echo '
            </tbody>
          </table>
        <div>';
