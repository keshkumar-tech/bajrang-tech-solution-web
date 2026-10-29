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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
   

   <!-- Icon Font Stylesheet -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />

  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  
   

  <style>
  
  @media (min-width: 550px) and (max-width: 991px) {
  .service_section .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .counter-section .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
}


@media (max-width: 991px) and (min-width: 550px) {
  .recent-projects .projects-grid {
    grid-template-columns: repeat(2, 1fr); /* 2 columns for tablets */
  }
}

@media (max-width: 550px) {
  .recent-projects .projects-grid {
    grid-template-columns: 1fr; /* 1 column for mobile devices */
  }
}

/* Media Query for Tablets (550px to 991px) */
@media (max-width: 991px) and (min-width: 550px) {
    .row.pb-3 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between; /* Align items nicely */
    }

    .col-lg-4 {
        flex: 0 0 48%; /* 2 columns for tablets */
        max-width: 48%;
    }
}

/* Media Query for Mobile (Below 550px) */
@media (max-width: 550px) {
    .col-lg-4 {
        flex: 0 0 100%; /* 1 column for mobile devices */
        max-width: 100%;
    }
}


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

/* Back to Top Button */
.back-to-top {
    position: fixed;
    bottom: 30px;
    right: 50px;
    display: none; /* Hidden by default */
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border-radius: 50%;
    font-size: 18px;
    text-align: center;
    z-index: 1000; /* Ensure it's on top of other elements */
    transition: opacity 0.3s ease;
}

.back-to-top:hover {
    background-color: #0056b3;
    cursor: pointer;
}

.back-to-top i {
    font-size: 20px; /* Icon size */
}


.whatsapp-button {
  position: fixed;
  bottom: 20px;
  left: 20px;
  z-index: 1000;
  display: block;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: #25d366;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  text-align: center;
  line-height: 60px;
  transition: box-shadow 0.3s;
}

.whatsapp-button img {
  width: 40px;
  height: 40px;
  vertical-align: middle;
}

.whatsapp-button:hover {
  box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.4);
}


  /* Floating Inquiry Button */
    #inquiryBtn {
      position: fixed;
      right: 30px;
      bottom: 100px;
      background-color: #28a745;
      color: white;
      padding: 15px;
      border-radius: 50%;
      font-size: 16px;
      border: none;
      cursor: pointer;
      z-index: 1000;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    #inquiryBtn:hover {
      background-color: #218838;
    }

    /* Modal Background */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    /* Modal Content */
    .modal-content {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      width: 80%;
      max-width: 500px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    /* Close Button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: black;
    }

    /* Form Styles */
    .form-container {
      display: flex;
      flex-direction: column;
    }

    .form-container input,
    .form-container textarea {
      margin: 10px 0;
      padding: 10px;
      font-size: 16px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-container button {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-container button:hover {
      background-color: #0056b3;
    }
	
	
.overlay {
  display: flex;
  justify-content: center; /* Center the icons horizontally */
  align-items: center; /* Vertically align the icons if needed */
  gap: 15px; /* Adjust spacing between icons */
}

.overlay a {
  font-size: 25px; /* Set font size for icons */
  color: white; /* Set icon color to white */
  text-decoration: none; /* Remove underline from links */
  transition: color 0.3s ease; /* Smooth transition for hover effect */
  margin-bottom:10px;
}

.overlay a:hover {
  color: #0077b5; /* Change color on hover */
}

/* Frequently Asked Questions */

.faq-container {
            display: flex;
            width: 100%;
            height: 500px;
        }

        /* Left image section */
        .faq-image {
            flex: 1;
            background-image: url('your-image-url.jpg');
            background-size: cover;
            background-position: center;
        }

        /* Right FAQ section */
        .faq-content {
            flex: 1;
            padding: 50px;
            background-color: #1e1e1e;
            overflow-y: auto;
        }

        .faq-content h1 {
            color: #fefefe;
            font-size: 32px;
            margin-bottom: 30px;
        }

        .faq-item {
            margin-bottom: 15px;
            background-color: #333;
            border-radius: 8px;
            overflow: hidden;
        }

        .faq-question {
            font-size: 18px;
            font-weight: 600;
           /* background: linear-gradient(90deg, #ff7e5f, #feb47b); */
			background-color:#007bff;
            padding: 15px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s ease;
        }

        .faq-question i {
            transition: transform 0.3s ease;
        }

        .faq-question.active i {
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            background-color: #222;
            padding: 0 15px;
            transition: max-height 0.3s ease;
        }

        .faq-answer p {
            padding: 15px 0;
            font-size: 16px;
            color: #aaa;
            line-height: 1.6;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .faq-container {
                flex-direction: column;
            }

            .faq-image {
                height: 300px;
            }

            .faq-content {
                padding: 20px;
            }
        }


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

 <!-- Inquiry Button -->
  <button id="inquiryBtn">Inquiry</button>

  <!-- Modal (Popup Form) -->
  <div id="inquiryModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Inquiry Form</h2>
      <div class="form-container">
	  <form action="inquiry-form-insert.php" method="POST">
        <input type="text" id="name" name ="enqname" placeholder="Your Name" required>
        <input type="email" id="email" name="enqemail" placeholder="Your Email" required>
        <input type="tel" id="phone" name="enqphone" placeholder="Your Phone Number" required>
        <textarea id="message" name="enqmessage" placeholder="Your Inquiry" rows="4" required></textarea>
        <button type="submit">Submit</button>
	</form>
      </div>
    </div>
  </div>

  <div class="container-xxl position-relative p-0">
   <?php include('topnav.php') ?>

        <!-- slider section -->
        <section class="slider_section "  style="background-image: url('images/hero-bg.png');">
          <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" >
                <div class="container " >
                  <div class="row" >
                    <div class="col-md-6 " style="margin-top: 30px;">
                      <div class="detail-box">
                        <h1>
                          Best Website Designing<br>
                          Company
                        </h1>
						<p>
						At Bajarang Tech Solution, we specialize in creating responsive and user-friendly websites tailored to your business needs. Let us help you make a lasting impression online!
						</p>
                        <p>
						Ready to take your business to the next level? Contact us today to discuss how our IT services can transform your digital landscape and drive success!
                        </p>
                        <div class="btn-box">
                          <a href="price.php" class="btn1"> 
                            Get Started
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6"  style="margin-top: 30px;">
                      <div class="img-box">
                        <img src="images/hero.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="container ">
                  <div class="row">
                    <div class="col-md-6 " style="margin-top: 30px;">
                      <div class="detail-box">
                        <h1>
                          Best Website Designing<br>
                          Company
                        </h1>
						<p>
						At Bajarang Tech Solution, we specialize in creating responsive and user-friendly websites tailored to your business needs. Let us help you make a lasting impression online!
						</p>
                        <p>
						Ready to take your business to the next level? Contact us today to discuss how our IT services can transform your digital landscape and drive success!
                        </p>
                        <div class="btn-box">
                          <a href="price.php" class="btn1">
                            Get Started
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6" style="margin-top: 30px;">
                      <div class="img-box">
                        <img src="images/hero.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="container ">
                  <div class="row">
                    <div class="col-md-6 " style="margin-top: 30px;">
                       <div class="detail-box">
                        <h1>
                          Best Website Designing<br>
                          Company
                        </h1>
						<p>
						At Bajarang Tech Solution, we specialize in creating responsive and user-friendly websites tailored to your business needs. Let us help you make a lasting impression online!
						</p>
                        <p>
						Ready to take your business to the next level? Contact us today to discuss how our IT services can transform your digital landscape and drive success!
                        </p>
                        <div class="btn-box">
                          <a href="price.php" class="btn1">
                            Get Started
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6" style="margin-top: 30px;">
                      <div class="img-box">
                        <img src="images/hero.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
              <li data-target="#customCarousel1" data-slide-to="1"></li>
              <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
          </div>
    
        </section>
        <!-- end slider section -->
</div>
<!-- Navbar & Hero End -->

  <!-- service section -->
<div class="services-heading">
  <h2>Our Services</h2>
</div>
<section class="service_section layout_padding" style="background-image: url('images/slider8.png');">
  <div class="container">
    <div class="heading_container heading_center">
      <h2 style="color: white;">What Solutions We Provide</h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <!-- Custom Web Design -->
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="img-box">
            <i class="fa fa-laptop-code fa-2x text-white"></i>
          </div>
          <div class="detail-box">
            <h4>Custom Web Design</h4>
            <p>Generators on the Internet tend to repeat predefined chunks as necessary</p>
            <a href="custom-web-design-company-in-kanpur.php">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- E-commerce Web Design -->
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="img-box">
            <i class="fa fa-laptop-code fa-2x text-white"></i>
          </div>
          <div class="detail-box">
            <h4>E-commerce Web Design</h4>
            <p>Generators on the Internet tend to repeat predefined chunks as necessary</p>
            <a href="e-commerce-web-design-company-in-kanpur.php">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- Responsive Web Design -->
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="img-box">
            <i class="fa fa-laptop-code fa-2x text-white"></i>
          </div>
          <div class="detail-box">
            <h4>Responsive Web Design</h4>
            <p>Generators on the Internet tend to repeat predefined chunks as necessary</p>
            <a href="responsive-web-design-company-in-kanpur.php">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- Wordpress Websites -->
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="img-box">
            <i class="fa fa-laptop-code fa-2x text-white"></i>
          </div>
          <div class="detail-box">
            <h4>Wordpress Websites</h4>
            <p>Generators on the Internet tend to repeat predefined chunks as necessary</p>
            <a href="wordpress-websites-company-in-kanpur.php">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- App Development -->
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="img-box">
            <i class="fab fa-android fa-2x text-white"></i>
          </div>
          <div class="detail-box">
            <h4>App Development</h4>
            <p>Generators on the Internet tend to repeat predefined chunks as necessary</p>
            <a href="app-development-company-in-kanpur.php">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- Digital Marketing -->
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="img-box">
            <img src="images/s6.png" alt="">
          </div>
          <div class="detail-box">
            <h4>Digital Marketing</h4>
            <p>Generators on the Internet tend to repeat predefined chunks as necessary</p>
            <a href="best-digital-marketing-company-in-kanpur.php">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- SEO Optimization -->
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="img-box">
            <i class="fa fa-search fa-2x text-white"></i>
          </div>
          <div class="detail-box">
            <h4>SEO Optimization</h4>
            <p>Generators on the Internet tend to repeat predefined chunks as necessary</p>
            <a href="seo-optimization-company-in-kanpur.php">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- Social Media Marketing -->
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="img-box">
            <i class="fab fa-facebook-f fa-2x text-white"></i>
          </div>
          <div class="detail-box">
            <h4>Social Media Marketing</h4>
            <p>Generators on the Internet tend to repeat predefined chunks as necessary</p>
            <a href="social-media-marketing-company-in-kanpur.php">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <!-- Pay Per Click -->
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="img-box">
            <i class="fa fa-thumbs-up fa-2x text-white"></i>
          </div>
          <div class="detail-box">
            <h4>Pay Per Click</h4>
            <p>Generators on the Internet tend to repeat predefined chunks as necessary</p>
            <a href="best-pay-per-click-company-in-kanpur.php">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end service section -->



 <div class="container">
  <div class="row counter-section">
    <div class="col-12 col-md-6 col-lg-3">
      <div class="counter-box">
        <div class="counter-icon">
          <i class="fa fa-trophy"></i>
        </div>
        <span class="counter" data-count="10">0+</span>
        <p>Years Experience</p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="counter-box">
        <div class="counter-icon">
          <i class="fa fa-users"></i>
        </div>
        <span class="counter" data-count="10">0+</span>
        <p>Team Members</p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="counter-box">
        <div class="counter-icon">
          <i class="fa fa-smile-o"></i>
        </div>
        <span class="counter" data-count="451">0+</span>
        <p>Satisfied Clients</p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="counter-box">
        <div class="counter-icon">
          <i class="fa fa-check"></i>
        </div>
        <span class="counter" data-count="120">0+</span>
        <p>Completed Projects</p>
      </div>
    </div>
  </div>
</div>



<section class="about_section layout_padding">
  <div class="container  ">
    <div class="heading_container heading_center">
      <h2>
        About <span>Us</span>
      </h2>
      <p>
	  We pride ourselves on offering a wide range of services, from web design and development to digital marketing solutions. And We Provide Other services like custom web design , E-commerce web design ,Responsive web design ,Wordpress Websites , App development ,Digital Marketing services.
      </p>
    </div>
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <h3>
            We Are Best Website Designing Company
          </h3>
          <p>
		  Welcome to Bajarang Tech Solution, your trusted partner in delivering cutting-edge digital solutions that drive results. With over a decade of experience, we specialize in transforming your ideas into engaging, impactful digital experiences tailored to your business needs. Our team of skilled professionals is dedicated to providing comprehensive, high-quality services that ensure your business thrives in the competitive digital landscape.
          </p>
          <p>
		  At Bajarang Tech Solution, we are passionate about helping businesses succeed online. Whether you are a startup looking to establish a digital presence or an established brand in need of an upgrade, we are here to provide the solutions you need. Our goal is to make sure your online presence reflects the excellence of your products or services.
           </p>
          <a href="about.php">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- why section -->
<div class="chooseus-heading">
  <h2>Why Choose Us</h2>
</div>
<section class="why_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
    </div>
    <div class="why_container">
      <div class="box">
        <div class="img-box">
          <img src="images/w1.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Expert Management
          </h5>
          <p>
            Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
            Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/w2.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Secure Investment
          </h5>
          <p>
            Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
            Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/w3.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Instant Trading
          </h5>
          <p>
            Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
            Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/w4.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Happy Customers
          </h5>
          <p>
            Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
            Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end why section -->

  <div class="portfolio-heading">
    <h2>Our Portfolio</h2>
  </div>

<!-- Portfolio Start -->
<section class="recent-projects">
  <div class="container">
    <h2>Recently Completed Projects</h2>
    
    <!-- Filter Menu -->
    <div class="filter-menu">
      <a href="#" class="filter-link active" data-filter="all">All</a>
      <a href="#" class="filter-link" data-filter="web-design">Web Design</a>
      <a href="#" class="filter-link" data-filter="graphic-design">Graphic Design</a>
    </div>
    
    <!-- Projects Grid -->
    <div class="projects-grid">
      <!-- Web Design Project 1 -->
      <div class="project-item" data-category="web-design">
        <div class="project-img">
          <img src="images/portfolio-1.jpg" alt="Project 1">
          <div class="overlay">
            <a href="#" class="icon-link"><i class="fas fa-link"></i></a>
            <a href="#" class="icon-search"><i class="fas fa-search"></i></a>
          </div>
        </div>
        <div class="project-info">
          <p class="category">Web Design</p>
          <h3>Creative Web Design Project</h3>
        </div>
      </div>

      <!-- Graphic Design Project 1 -->
      <div class="project-item" data-category="graphic-design">
        <div class="project-img">
          <img src="images/portfolio-2.jpg" alt="Project 2">
          <div class="overlay">
            <a href="#" class="icon-link"><i class="fas fa-link"></i></a>
            <a href="#" class="icon-search"><i class="fas fa-search"></i></a>
          </div>
        </div>
        <div class="project-info">
          <p class="category">Graphic Design</p>
          <h3>Innovative Branding Design</h3>
        </div>
      </div>

      <!-- Web Design Project 2 -->
      <div class="project-item" data-category="web-design">
        <div class="project-img">
          <img src="images/portfolio-3.jpg" alt="Project 3">
          <div class="overlay">
            <a href="#" class="icon-link"><i class="fas fa-link"></i></a>
            <a href="#" class="icon-search"><i class="fas fa-search"></i></a>
          </div>
        </div>
        <div class="project-info">
          <p class="category">Web Design</p>
          <h3>Corporate Website Development</h3>
        </div>
      </div>

      <!-- Graphic Design Project 2 -->
      <div class="project-item" data-category="graphic-design">
        <div class="project-img">
          <img src="images/portfolio-4.jpg" alt="Project 4">
          <div class="overlay">
            <a href="#" class="icon-link"><i class="fas fa-link"></i></a>
            <a href="#" class="icon-search"><i class="fas fa-search"></i></a>
          </div>
        </div>
        <div class="project-info">
          <p class="category">Graphic Design</p>
          <h3>Logo Design for Startups</h3>
        </div>
      </div>

      <!-- Web Design Project 3 -->
      <div class="project-item" data-category="web-design">
        <div class="project-img">
          <img src="images/portfolio-5.jpg" alt="Project 5">
          <div class="overlay">
            <a href="#" class="icon-link"><i class="fas fa-link"></i></a>
            <a href="#" class="icon-search"><i class="fas fa-search"></i></a>
          </div>
        </div>
        <div class="project-info">
          <p class="category">Web Design</p>
          <h3>E-Commerce Website Development</h3>
        </div>
      </div>

      <!-- Graphic Design Project 3 -->
      <div class="project-item" data-category="graphic-design">
        <div class="project-img">
          <img src="images/portfolio-6.jpg" alt="Project 6">
          <div class="overlay">
            <a href="#" class="icon-link"><i class="fas fa-link"></i></a>
            <a href="#" class="icon-search"><i class="fas fa-search"></i></a>
          </div>
        </div>
        <div class="project-info">
          <p class="category">Graphic Design</p>
          <h3>Social Media Branding</h3>
        </div>
      </div>  
  </div>
</section>
<!-- Portfolio End -->

  
<div class="chooseus-heading">
  <h2>Our Blogs</h2>
</div>

 <!-- Blog Start -->
 <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center">
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

  <!-- price section -->
 
  <div class="price-heading">
    <h2>Our Pricing</h2>
  </div>

 <section class="price_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h1 class="mb-5">Our Latest Price</h1>
        </div>
        <div class="price_container">
            <div class="box">
                <div class="detail-box">
                    <h2>₹ <span>9,999</span></h2>
                    <h6>WordPress Websites</h6>
                    <ul class="price_features">
                        <li>One Year Free Hosting</li>
                        <li>After 1 year You Pay Monthly</li>
                        <li>4 Email IDs</li>
                        <li>Responsive Website</li>
                        <li>Data Secure</li>
                        <li>24/7/365 Tech Support</li>
                    </ul>
                </div>
                <div class="btn-box">
                    <a href="price.php">See Detail</a>
                </div>
            </div>
            <div class="box">
                <div class="detail-box">
                    <h2>₹ <span>29,999</span></h2>
                    <h6>E-commerce Websites</h6>
                    <ul class="price_features">
                        <li>One Year Free Hosting</li>
                        <li>After 1 year You Pay Monthly</li>
                        <li>4 Email IDs</li>
                        <li>Responsive Website</li>
                        <li>Data Secure</li>
                        <li>24/7/365 Tech Support</li>
                    </ul>
                </div>
                <div class="btn-box">
                    <a href="price.php">See Detail</a>
                </div>
            </div>
            <div class="box">
                <div class="detail-box">
                    <h2>₹ <span>19,999</span></h2>
                    <h6>Custom Websites</h6>
                    <ul class="price_features">
                        <li>One Year Free Hosting</li>
                        <li>After 1 year You Pay Monthly</li>
                        <li>4 Email IDs</li>
                        <li>Responsive Website</li>
                        <li>Data Secure</li>
                        <li>24/7/365 Tech Support</li>
                    </ul>
                </div>
                <div class="btn-box">
                    <a href="price.php">See Detail</a>
                </div>
            </div>
            <div class="box">
                <div class="detail-box">
                    <h2>₹ <span>14,999</span></h2>
                    <h6>Landing Pages</h6>
                    <ul class="price_features">
                        <li>One Year Free Hosting</li>
                        <li>After 1 year You Pay Monthly</li>
                        <li>2 Email IDs</li>
                        <li>Responsive Design</li>
                        <li>SEO Optimized</li>
                        <li>24/7/365 Tech Support</li>
                    </ul>
                </div>
                <div class="btn-box">
                    <a href="price.php">See Detail</a>
                </div>
            </div>
            <div class="box">
                <div class="detail-box">
                    <h2>₹ <span>39,999</span></h2>
                    <h6>Web Applications</h6>
                    <ul class="price_features">
                        <li>One Year Free Hosting</li>
                        <li>After 1 year You Pay Monthly</li>
                        <li>Unlimited Email IDs</li>
                        <li>Responsive & Secure</li>
                        <li>Custom Development</li>
                        <li>24/7/365 Tech Support</li>
                    </ul>
                </div>
                <div class="btn-box">
                    <a href="price.php">See Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- price section -->
  
  <!--Frequently Asked Questions--> 
  
  <div class="faq-container">
        <!-- Left side: Image -->
        <!-- Right side: FAQ content -->
        <div class="faq-content">
            <h1>Frequently Asked Questions</h1>

            <div class="faq-item">
                <div class="faq-question">
                    <span>How long does it take to develop a WordPress website?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>
                        The time required for WordPress website development varies depending on the project's complexity, features, and customization needs. Typically, a basic website can take anywhere from 1 to 4 weeks to develop, while larger or more intricate projects may take several weeks or even months.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>What is the cost of building a WordPress website?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>
                        The cost of building a WordPress website depends on various factors, including the complexity of design, the number of features, and the amount of content. Contact us for a custom quote.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Do you provide ongoing support and maintenance for WordPress websites?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>
                        Yes, we offer ongoing support and maintenance packages to ensure your website runs smoothly, with regular updates, security checks, and performance optimizations.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Can you help migrate my existing website to WordPress?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>
                        Yes, we offer website migration services to WordPress, ensuring a smooth transition with minimal downtime.
                    </p>
                </div>
            </div>

        </div>
    </div>

  <!-- team section -->
  
  <div class="team-heading">
    <h2>Our Expert Team</h2>
  </div>

  <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
          Our <span> Team</span>
        </h2>
      </div>

      <div class="team_container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images\teamfounder.jpg" class="img1" alt="" width="100%" height="130px" style="border-radius:50%">
              </div>
              <div class="detail-box">
                <h5>
                 Kesh Kumar
                </h5>
                <p>
                  Founder & CEO
                </p>
              </div>
		 <div class="overlay">
             <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
             <a href="https://www.linkedin.com/in/kesh-kumar-831752259?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app "><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          </div>
         </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/anjali-team1.jpg" class="img1" alt="" width="100%" height="130px" style="border-radius:50%">
              </div>
              <div class="detail-box">
                <h5>
                 Anjali Kushwaha
                </h5>
                <p>
                  HR & Marketing Head
                </p>
              </div>
		 <div class="overlay">
             <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
             <a href="https://www.linkedin.com/in/anjali-kushwaha-634a23293?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app "><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/priya-team2.jpg" class="img1" alt="" width="100%" height="130px" style="border-radius:50%">
              </div>
              <div class="detail-box">
                <h5>
                  Priya Prajapati
                </h5>
                <p>
                  Project Manager
                </p>
              </div>
          <div class="overlay">
             <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
             <a href="https://www.linkedin.com/in/priya-prajapati-93641a25b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/akanksha-team3.jpg" class="img1" alt="" width="100%" height="130px" style="border-radius:50%">
              </div>
              <div class="detail-box">
                <h5>
                  Akanksha Yadav
                </h5>
                <p>
                  IT & Technical Head
                </p>
              </div>
		 <div class="overlay">
             <a  href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
             <a href="https://www.linkedin.com/in/akanksha-yadav-571943298"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end team section -->
  
  <!-- client section -->
  <div class="client-heading">
    <h2>Our Client</h2>
  </div>
  <section class="client_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          What Say Our Clients!
        </h2>
        <p>
          Even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
        </p>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/toneesclient1.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                           Toneesh Kumar
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                       Bajarang Tech Solution exceeded our expectations with their impeccable technical expertise and seamless execution. They delivered our project ahead of schedule, and their ability to understand our needs and turn them into a functional, user-friendly solution was outstanding. The communication was clear and professional throughout the entire process. We are thrilled with the outcome and look forward to future collaborations.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/anoop-client.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Anoop Kumar
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        Working with Bajarang Tech Solution has been a game-changer for our business. Their team not only provided us with top-notch web development services but also offered valuable insights that helped enhance our online presence. They were highly responsive to any feedback, and their commitment to delivering quality work within the given timeline truly impressed us. We highly recommend them for anyone looking for reliable and innovative tech solutions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/aman-client1.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Aman Kumar
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                         We had a fantastic experience with Bajarang Tech Solution. They took the time to understand our unique requirements and worked tirelessly to deliver exactly what we needed. The website they developed for us is sleek, modern, and fully optimized for performance. Their attention to detail and customer-centric approach really set them apart. We couldn't be happier with the results!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		 <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/toneesclient1.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Abhishek Kumar
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                       <p>
					      Bajarang Tech Solution delivered an exceptional product that exceeded our expectations. Their team is highly skilled, professional, and easy to work with. They took the time to fully understand our business goals and tailored a solution that perfectly matched our needs. The final result was not only aesthetically pleasing but also highly functional. Their after-sales support has also been top-notch. We will definitely work with them again!
					   </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		 <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/anoop-client.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Anoop Kumar
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                     <p>
					  Bajarang Tech Solution has been an invaluable partner for our company's digital transformation. Their technical skills are matched only by their dedication to customer satisfaction. From the initial consultation to the final delivery, they provided expert guidance and ensured everything was done to the highest standard. Their team was always available to answer questions and address any concerns, making the entire process smooth and stress-free.
					 </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->


  <!-- contact section -->

  <div class="contact-heading">
    <h2>Contact Us</h2>
  </div>
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




<!-- Back to Top Button -->
<a href="#" class="back-to-top">
  <i class="fa fa-arrow-up" aria-hidden="true"></i>
</a>

<!-- WhatsApp Button -->
<a href="https://wa.me/919569648077" class="whatsapp-button" target="_blank">
  <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp" />
</a>



  <!-- end contact section -->
  
  <script>
  document.addEventListener('DOMContentLoaded', function () {
  const filterLinks = document.querySelectorAll('.filter-link');
  const projectItems = document.querySelectorAll('.project-item');

  filterLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      // Remove active class from all filter links
      filterLinks.forEach(link => link.classList.remove('active'));

      // Add active class to the clicked filter link
      this.classList.add('active');

      // Get the filter category from the clicked link
      const filter = this.getAttribute('data-filter');

      // Show/Hide project items based on the selected filter
      projectItems.forEach(item => {
        if (filter === 'all' || item.getAttribute('data-category') === filter) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
});

  </script>
  <script>
  // Show the button when the user scrolls down
window.onscroll = function() {
    const backToTopButton = document.querySelector('.back-to-top');
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
};

// Smooth scroll to the top
document.querySelector('.back-to-top').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

  </script>
  
  
  <!-- Tawk.to Chatbot -->
<script type="text/javascript">
var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
(function(){
  var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
  s1.async = true;
  s1.src = 'https://embed.tawk.to/YOUR_PROPERTY_ID/default';
  s1.charset = 'UTF-8';
  s1.setAttribute('crossorigin', '*');
  s0.parentNode.insertBefore(s1, s0);
})();
</script>

<script>
    // Get the modal
    var modal = document.getElementById("inquiryModal");

    // Get the button that opens the modal
    var btn = document.getElementById("inquiryBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
      modal.style.display = "flex";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  
  <script>
        const faqItems = document.querySelectorAll('.faq-question');

        faqItems.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
                const answer = item.nextElementSibling;

                if (item.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    answer.style.maxHeight = 0;
                }
            });
        });
    </script>




  <!-- footer section -->
  <?php include('main-footer.php') ?>;
  <!-- footer section -->
 
</body>

</html>