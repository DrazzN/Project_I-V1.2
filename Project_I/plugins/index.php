<!DOCTYPE html>
<html lang="en">
<?php include 'inc/header.php'; ?>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">eLearning</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#learn" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                What You'll Learn
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#" class="dropdown-item">Feature #1</a></li>
                                <li><a href="#" class="dropdown-item">Feature #2</a></li>
                                <li><a href="#" class="dropdown-item">Feature #3</a></li>
                                <li><a href="#" class="dropdown-item">Feature #4</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#instrustors" class="nav-link">
                                Instrustors
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <section class="ssize bg-dark text-light p-5 text-start>
        <div class="container">
            <div class="d-sm-flex py-5 align-items-center justify-content-between">
                <div>
                    <h1>Start Learning<span class="d-sm-flex text-warning">What You Find Interesting</span></h1>
                    <p class="lead my-4">
                        Expand your opportunities withcouirses of your own choice. We
                        provide the tools and skills to teach what you love.
                    </p>
                    <button class="btn btn-primary btn-lg"><a href="http://localhost/Project_I/students/register.php" class="text-light">Start The Enrollment</a></button>
                </div>
                <img class="img-fluid w-50 d-none d-md-block" src="img/flowers.webp" alt="" />
            </div>
        </div>
    </section>

    <section class="bg text-center bg-light bg-image">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5" id="signup-banner">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Login Below.</h1>
                    <p class="fs-4"><button class="btn btn-primary btn-lg"><a href="http://localhost/Project_I/portal.php" class="text-light">Start Session</a></button>
                </p>
                </div>

                <div class="col-md-10 mx-auto col-lg-5">

                </div>
            </div>
        </div>
    </section>
    <?php include 'inc/footer.php'; ?>
</body>

</html>