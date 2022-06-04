<?php include '../initialize.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../plugins/inc/header.php'; ?>
</head>

<body>
  <section class="bg login p-4 text-center bg-light bg-image">
    <div class="container py-0 w-75">
      <div class="mx-auto col-sm col-md-11 col-lg-10">
        <div class="card shadow">
          <div class="card-body">
            <p class="card-text">
            <h2>We can't find that page</h2>
            <p>We're fairly sure that page used to be here, but seems to have gone missing. We do apologise on it's behalf. Please check that you logged in properly.
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?php echo base_url ?>">Go Home</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>