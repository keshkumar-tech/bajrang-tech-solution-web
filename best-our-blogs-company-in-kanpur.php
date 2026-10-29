<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="images\fevicon.png.webp">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bajarang Tech Solution</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    /* Blogs Section Style */

.blog-item img {
  transition: .5s;
}

.blog-item:hover img {
  transform: scale(1.2);
}

.blog-overlay {
  position: absolute;
  padding: 30px;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  background: linear-gradient(rgba(68, 66, 90, 0), #44425a);
  z-index: 1;
}
  </style>

</head>

<body>

      <?php include('topnav.php') ?>

    <div class="container-fluid bg-primary py-5 mt-5  page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Our Blogs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-black" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-black" href="service.php">Our Services</a></li>
                            <li class="breadcrumb-item"><a class="text-black" href="best-our-blogs-company-in-kanpur.php">Our Blogs</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

   <!-- Blog Start -->
 <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Blogs</h6>
            <h1 class="mb-5">Latest From Our Blogs</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="images/blog-1.jpg" alt="Blog Post 1">
                    <a class="blog-overlay text-decoration-none" href="blog-post-1.html">
                        <h5 class="text-white mb-3">5 Tips to Kickstart Your Career with eTraining</h5>
                        <p class="text-primary m-0">Sep 15, 2024</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="images/blog-2.jpg" alt="Blog Post 2">
                    <a class="blog-overlay text-decoration-none" href="blog-post-2.html">
                        <h5 class="text-white mb-3">How eTraining’s Courses Can Help You Achieve Your Goals</h5>
                        <p class="text-primary m-0">Aug 10, 2024</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="images/blog-3.jpg" alt="Blog Post 3">
                    <a class="blog-overlay text-decoration-none" href="blog-post-3.html">
                        <h5 class="text-white mb-3">Success Stories: How Our Students Transformed Their Careers</h5>
                        <p class="text-primary m-0">Jul 22, 2024</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

  <!-- footer section -->
  <?php include('main-footer.php') ?>
  <!-- footer section -->

</body>
</html>