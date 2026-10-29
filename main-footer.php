  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="icon" type="image/png" href="images\fevicon.png.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer with Aligned Newsletter Sign-Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 40px;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1;
            margin: 10px;
            min-width: 200px;
        }

        h3 {
            margin-bottom: 15px;
            font-size: 18px;
            color:#007bff;
        }

        p {
            margin-bottom: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .social-icons a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }

        .social-icons a:hover {
            background-color: #e68a00;
        }

        .newsletter {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .newsletter input[type="email"] {
            padding: 10px;
            width: 60%;
            border: none;
            border-radius: 4px;
            margin-right: 10px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .newsletter button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            box-sizing: border-box;
        }

        .newsletter button:hover {
            background-color: #e68a00;
        }

        .pay-now-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            text-align: center;
        }

        .pay-now-btn:hover {
            background-color: #e68a00;
        }

        .footer-bottom {
            text-align: center;
            padding: 20px;
            background-color: #222;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Footer Section -->
<footer>
    <div class="footer-container">
        <!-- Web Development & Design Section -->
        <div class="footer-section">
            <h3>Web Development & Design Solutions</h3>
            <p>We have an efficient Web Development service by which you can make your own website. We develop customized website designs.</p>
            <div class="social-icons">
             <a href="https://x.com/BTSolution71507?t=t1E_PmV-ytm3RxljSB7M1Q&s=09"><i class="fab fa-twitter"></i></a>
             <a href="https://www.facebook.com/share/Z1qvGqU88i4MNQsZ/?mibextid=qi2Omg"><i class="fab fa-facebook-f"></i></a>
             <a href="https://www.linkedin.com/in/kesh-kumar-831752259?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
             <a href="https://www.instagram.com/bajarangtechsolution?igsh=eXc0cXN1Yjcxa2V5"><i class="fab fa-instagram"></i></a>
</div>
			
        </div>

        <!-- Get in Touch Section -->
        <div class="footer-section">
            <h3>Get in Touch</h3>
            <p>You have some needs in Design, development or advice, we are here to listen. Don’t hesitate to contact us.</p>
            <p><strong>Phone:</strong> +91-9569648077</p>
            <p><strong>Email:</strong> info@bajarangtechsolution.com</p>
        </div>

        <!-- Quick Links Section -->
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="service.php">Our Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Refund Policy</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>

        <!-- Newsletter Section -->
        <div class="footer-section">
            <h3>Newsletter</h3>
            <p>In case of any queries, please fill up the form below to contact us via email.</p>
           <form class="newsletter" action="mailto:your@email.com" method="post" enctype="text/plain">
    <input type="email" name="email" placeholder="Your Email" required>
    <button type="submit">Sign Up</button>
</form>
            <a href="contact.php" class="pay-now-btn">Pay Now</a>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <p>&copy; 2024 Bajarang Tech Solution. All Rights Reserved.<br>Designed by <a href="bajarangtechsolution.com">Bajarang Tech Solution</a></p>
    </div>
</footer>


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
   <!-- bootstrap js -->
   <script src="js/bootstrap.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
 <!-- jQuery (required by Slick) -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
 <!-- Slick JS -->
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
 
 <script>
   document.addEventListener("DOMContentLoaded", function() {
     const filterLinks = document.querySelectorAll('.filter-menu a');
     const projectItems = document.querySelectorAll('.project-item');
 
     filterLinks.forEach(link => {
         link.addEventListener('click', function(e) {
             e.preventDefault();
 
             filterLinks.forEach(link => link.classList.remove('active'));
             this.classList.add('active');
 
             const filterValue = this.getAttribute('data-filter');
 
             projectItems.forEach(item => {
                 if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
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
   // Ensure to include jQuery
 $(document).ready(function(){
     $('.counter').each(function () {
         $(this).prop('Counter',0).animate({
             Counter: $(this).data('count')
         }, {
             duration: 5000,
             easing: 'swing',
             step: function (now) {
                 $(this).text(Math.ceil(now));
             }
         });
     });
 });
 
 </script>
 <script>
   $(document).ready(function(){
     $('.price_container').slick({
         slidesToShow: 3,
         slidesToScroll: 1,
         autoplay: true,
         autoplaySpeed: 2000,
         dots: true,
         arrows: true,
         responsive: [
             {
                 breakpoint: 1024,
                 settings: {
                     slidesToShow: 3,
                     slidesToScroll: 1,
                     infinite: true,
                     dots: true
                 }
             },
             {
                 breakpoint: 768,
                 settings: {
                     slidesToShow: 2,
                     slidesToScroll: 1
                 }
             },
             {
                 breakpoint: 480,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1
                 }
             }
         ]
     });
 });
 
 </script>
  <!-- footer section -->

</body>
</html>





