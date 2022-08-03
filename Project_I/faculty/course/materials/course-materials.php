<!-- Modal -->
<div class="modal fade" id="uploadmatModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo  base_url ?>faculty/course/materials/upload.php" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadModalLabel">Upload Downloadable</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <!-- <label for="date" class="col-form-label">Date</label> -->
            <input type="hidden" class="form-control" id="date" name="date" value="<?php echo date('d-m-Y'); ?>">
            <input type="hidden" class="form-control" id="teacher_id" name="teacher_id" value="<?php echo $_SESSION['username'] ?>">
            <input type="hidden" class="form-control" id="subject_code" name="subject_code" value="<?php echo $_SESSION['subject_code']; ?>">
          </div>
          <div class="form-group">
            <label for="filename" class="col-form-label">File name</label>
            <input type="text" class="form-control" id="filename" name="filename" required>
          </div>
          <br>
          <div class="form-group">
            <label for="description" class="col-form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
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

<button type="button" class="btn btn-primary ho" data-toggle="modal" data-target="#uploadmatModal">
  <ion-icon name="cloud-upload-outline"></ion-icon>
  Add Downloadable
</button>
<div style="overflow-y: scroll; height:100%;">
  <table class="table tabe-hover table-striped" id="list">
    <thead>
      <tr>
        <!-- <th class="text-center">#</th> -->
        <th>Date Upload</th>
        <th>File Name</th>
        <th>Description</th>
        <th>Uploaded By</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $objas = new Material;
      $resultsas = $objas->getMaterials();
      //  var_dump($_SESSION);
      $i = 1;
      if(empty($resultsas)) {
        $carticle = "Course Materials is not available.";
      }
      $carticle = "";
      foreach ($resultsas as $row) {
        $date = $row['date'];
        $floc = $row['file_location'];
        $name = $row['name'];
        $desc = $row['description'];
        $up_id = $row['uploaded_by'];

        echo '
              <tr>
                <!-- <th class="text-center">' . $i . '</th> -->
                <td><b>' . $date . '</b></td>
                <td><b>' . $name . '</b></td>
                <td><b>' . $desc . '</b></td>
                <td><b>' . $up_id . '</b></td>
                <td><b><a href="' . base_url . 'faculty/course/assignments/' . $floc . '" download>
                <ion-icon name="download-outline"></ion-icon>Download
              </a><button class="btn-outline-warning btn-shadow-light text-danger" data-toggle="modal" data-target="#uploadModal' . $name . $desc . '" type="submit" name="deleteassign"><ion-icon name="trash-outline"></ion-icon>Delete</button>
              </b>
              <!-- Modal -->
              <div class="modal fade" id="uploadModal' . $name . $desc .  '" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form action="course-content.php?opt=coursematerials" method="POST">
                      <div class="modal-header">
                        <h5 class="modal-title" id="uploadModalLabel">Delete Assignment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="fname" class="col-form-label">Do you really want to delete this ?<p> : ' . $name . '</p></label>
                          <input type="hidden" class="form-control" id="item" name="name" value="' . $name . '">
                          <input type="hidden" class="form-control" id="item" name="desc" value="' . $desc . '">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="delmat-submit" class="btn btn-danger">Delete</button>
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
