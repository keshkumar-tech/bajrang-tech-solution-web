<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="images\fevicon.png.webp">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bajarang Tech Solution Company</title>

  <style>
    .price_section {
      padding: 50px 0;
    }

    .price_container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .box {
      width: 300px; /* Fixed width for each box */
      padding: 15px; /* Added padding for content */
      text-align: center; /* Centered text */
    }

    h2 {
      font-size: 24px;
      margin: 10px 0;
    }

    h6 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .price_features {
      list-style: none;
      padding: 0;
      margin: 15px 0;
    }

    .price_features li {
      margin: 5px 0;
    }

    .btn-box a {
      display: inline-block;
      padding: 10px 20px;
      color: white;
	  background-color:#007bff;
      text-decoration: none;
      margin-top: 10px; /* Space above button */
    }

    .btn-box a:hover {
    }

    @media (max-width: 549px) {
      .box {
        width: 90%; /* One card on mobile */
      }
    }

    @media (min-width: 550px) and (max-width: 991px) {
      /* Tablet: Show 1 price box per row */
      .price_container {
      }

      .price_container .box {
        flex: 1 1 100%; /* Each box takes full width */
        margin-bottom: 20px; /* Add some spacing between boxes */
      }
    }

    @media (min-width: 992px) {
      /* Desktop: Show 3 price boxes side by side */
      .price_container .box {
        flex: 1 1 calc(33% - 30px); /* 3 boxes per row, minus margin */
      }
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
            background: #007bff;
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
		
		
		
  </style>
</head>

<body>

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

  <?php include('topnav.php') ?>

  <!-- Price section -->
  <div class="price-heading">
    <h2>OUR PRICING</h2>
  </div>

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h1 class="mb-5">Our Latest Prices</h1>
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
              <li>100% Responsive Design</li>
              <li>Dynamic Websites</li>
              <li>Admin Access</li>
              <li>Unlimited Content Uploads</li>
              <li>Free SSL Certificate</li>
              <li>Social Media Integration</li>
              <li>Call Button Integration</li>
              <li>WhatsApp Button Integration</li>
              <li>Inquiry Form</li>
              <li>1 Year Free Technical Support for Websites</li>
              <li>Annual Renewal D+H+SSL = ₹2999</li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="contact.php" style="background-color:#007bff;">Pay Now</a>
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
              <li>100% Responsive Design</li>
              <li>Dynamic Websites</li>
              <li>Admin Access</li>
              <li>Unlimited Content Uploads</li>
              <li>Free SSL Certificate</li>
              <li>Social Media Integration</li>
              <li>Call Button Integration</li>
              <li>WhatsApp Button Integration</li>
              <li>Inquiry Form</li>
              <li>1 Year Free Technical Support for Websites</li>
              <li>Annual Renewal D+H+SSL = ₹2999</li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="contact.php" style="background-color:#007bff;">Pay Now</a>
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
              <li>100% Responsive Design</li>
              <li>Dynamic Websites</li>
              <li>Admin Access</li>
              <li>Unlimited Content Uploads</li>
              <li>Free SSL Certificate</li>
              <li>Social Media Integration</li>
              <li>Call Button Integration</li>
              <li>WhatsApp Button Integration</li>
              <li>Inquiry Form</li>
              <li>1 Year Free Technical Support for Websites</li>
              <li>Annual Renewal D+H+SSL = ₹2999</li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="contact.php" style="background-color:#007bff;">Pay Now</a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h2>₹ <span>14,999</span></h2>
            <h6>Landing Pages</h6>
            <ul class="price_features">
              <li>One Year Free Hosting</li>
              <li>After 1 year You Pay Monthly</li>
              <li>4 Email IDs</li>
              <li>Responsive Design</li>
              <li>SEO Optimized</li>
              <li>24/7/365 Tech Support</li>
              <li>100% Responsive Design</li>
              <li>Dynamic Websites</li>
              <li>Admin Access</li>
              <li>Unlimited Content Uploads</li>
              <li>Free SSL Certificate</li>
              <li>Social Media Integration</li>
              <li>Call Button Integration</li>
              <li>WhatsApp Button Integration</li>
              <li>Inquiry Form</li>
              <li>1 Year Free Technical Support for Websites</li>
              <li>Annual Renewal D+H+SSL = ₹2999</li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="contact.php" style="background-color:#007bff;">Pay Now</a>
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
              <li>100% Responsive Design</li>
              <li>Dynamic Websites</li>
              <li>Admin Access</li>
              <li>Unlimited Content Uploads</li>
              <li>Free SSL Certificate</li>
              <li>Social Media Integration</li>
              <li>Call Button Integration</li>
              <li>WhatsApp Button Integration</li>
              <li>Inquiry Form</li>
              <li>1 Year Free Technical Support for Websites</li>
              <li>Annual Renewal D+H+SSL = ₹2999</li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="contact.php" style="background-color:#007bff;"  id="inquiryBtn" >Pay Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Price section -->
  
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

  <!-- Footer section -->
  <?php include('main-footer.php') ?>
  <!-- Footer section -->
  
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

</body>
</html>
