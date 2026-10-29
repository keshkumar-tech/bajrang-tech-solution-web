<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <link rel="icon" type="image/png" href="images\fevicon.png.webp">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bajarang Tech Solution Company</title>


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
  /* Adjust iframe height for mobile and tablet views */
  @media (max-width: 767px) {
    .map_container iframe {
      height: 300px;
    }
  }
  
  /* Add some spacing between form and map on mobile */
  @media (max-width: 767px) {
    .form_container, .map_container {
      margin-bottom: 30px;
    }
  }
  
  /* Ensure iframe takes full height for desktop/laptop */
  .map_container {
    height: 450px;
  }
</style>

</head>

<body>
     
   
    <!-- Header End -->

    <?php include('topnav.php') ?>

         <!-- Header Start -->
	<div class="container-fluid bg-primary py-5 mt-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-black" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-black" href="./etraining/courses.php">Our Courses</a></li>
                            <li class="breadcrumb-item"><a class="text-black" href="service.php">Our Services</a></li>
							<li class="breadcrumb-item active" aria-current="page">Contact Me</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>	 
  <!-- contact section -->
<section class="contact_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Get In Touch</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form_container">
          <form action="contact-form.php" method="POST">
            <div>
              <input type="text" name="name" placeholder="Your Name" required />
            </div>
            <div>
              <input type="email" name="email" placeholder="Your Email" required />
            </div>
            <div>
              <input type="text" name="phone" placeholder="Your Phone" required />
            </div>
            <div>
              <input type="text" class="message-box" name="message" placeholder="Message" required />
            </div>
            <div class="btn_box">
              <button type="submit" style="background-color: #007bff; border: none">
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map_container">
          <iframe
            style="overflow:hidden; border:0; width:100%; height:100%;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56629.7309795083!2d79.58541983069658!3d27.489233834631303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399e33e68a373bad%3A0x6e16558a920a9d0f!2z4KSV4KWH4KS24KSV4KWB4KSu4KS-4KSwIOCkleClgeCkpOCksuClguCkquClgeCksA!5e0!3m2!1shi!2sin!4v1729234973830!5m2!1shi!2sin"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>





  <!-- end contact section -->

  


  <!-- footer section -->
  <?php include('main-footer.php') ?>
  <!-- footer section -->
</body>

</html>