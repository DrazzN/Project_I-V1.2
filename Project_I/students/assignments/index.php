<?php
session_start();
$page = 'assignments';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../plugins/inc/header.php'; ?>
</head>


<body>

  <div>
    <div class="bg-dark">
      <button class="btn my-4">
      </button>
      <button class="btn my-4">
        <a class="link-light" href="logout.php">Logout</a>
      </button>
    </div>
    <div class="d-flex">

      <div class="col-3 bg-light">
        <?php include '../../plugins/inc/sidebar.php'; ?>
      </div>


      <div class="col-9">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">
          Upload Assignment
        </button>

        <!-- Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Assignment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="description" class="col-form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                  </div>
                  <br>
                  <div class="form-group">
                    <input type="file" class="form-control" name="file">
                  </div>
                
              </div>
              <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div></form>
            </div>
          </div>
        </div>
        <br>


      </div>
    </div>
  </div>

  <?php include '../../plugins/inc/footer.php'; ?>

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

</body>

</html>