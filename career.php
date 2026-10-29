<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career Opportunities - Bajarang Tech Solution</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
   body {
  font-family: 'Roboto', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #2c2c2c; /* Change to dark color */
  color: #ffffff; /* Change text color for better contrast */
}

.career-section {
  background: linear-gradient(135deg, #00c6ff, #0072ff);
  padding: 50px 0;
  color: white;
}

.career-container {
  display: flex;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.career-content, .career-form {
  flex: 1;
  margin: 20px;
  padding: 20px;
  background-color: white;
  border-radius: 10px;
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
  color: #333;
}

.career-content h2 {
  font-size: 28px;
  margin-bottom: 15px;
  color: #0072ff;
}

.career-content p {
  font-size: 16px;
  line-height: 1.6;
}

.career-form form input, 
.career-form form textarea, 
.career-form form select {
  width: calc(100% - 20px); /* Ensure uniformity in input size */
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box; /* Ensure padding does not affect width */
}

.career-form form input[type="file"] {
  padding: 0;
}

.career-form form button {
  background-color: #0072ff;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.career-form form button:hover {
  background-color: #005bb5;
}

@media (max-width: 767px) {
  .career-container {
    flex-direction: column;
  }

  .career-content, .career-form {
    margin: 0 0 20px 0;
  }
}

.animate-form input:hover,
.animate-form textarea:hover,
.animate-form select:hover {
  border-color: #0072ff;
  transition: border-color 0.3s;
}

.animate-form button {
  position: relative;
  overflow: hidden;
}

.animate-form button::after {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.2);
  transition: left 0.5s ease;
}

.animate-form button:hover::after {
  left: 0;
}

  </style>
</head>

<body>
  <!-- Career Section -->
  <?php include('topnav.php') ?>
  
  <div class="container-fluid bg-primary py-5 mt-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Career Opportunities</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-black" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-black" href="./etraining/courses.php">Our Courses</a></li>
                            <li class="breadcrumb-item"><a class="text-black" href="service.php">Our Services</a></li>
							<li class="breadcrumb-item active" aria-current="page">Our Career</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>	
	
  <section class="career-section">
    <div class="career-container">
      <!-- Form Section -->
      <div class="career-form animate-form">
        <h2>Apply for a Position</h2>
        <form action="career-submit.php" method="POST" enctype="multipart/form-data">
          <input type="text" name="name" placeholder="Your Name" required />
          <input type="email" name="email" placeholder="Your Email" required />
          <input type="text" name="phone" placeholder="Your Phone" required />
          <select name="position" required>
            <option value="">Select Position</option>
            <option value="Web Developer">Web Developer</option>
            <option value="Software Engineer">Software Engineer</option>
            <option value="UI/UX Designer">UI/UX Designer</option>
          </select>
          <input type="file" name="resume" required />
          <textarea name="message" rows="4" placeholder="Your Message"></textarea>
          <button type="submit">Submit Application</button>
        </form>
      </div>

      <!-- Content Section -->
      <div class="career-content">
        <h2>Our Career Opportunities</h2>
        <p>At Bajarang Tech Solution, we are constantly looking for talented individuals to join our growing team. We offer exciting opportunities in both online and offline training environments. Whether you're a fresh graduate or an experienced professional, we provide a platform to enhance your skills and build a rewarding career.</p>
        <p><strong>Online Training:</strong> We offer flexible online training programs that allow you to learn from the comfort of your home. Our courses cover the latest trends and technologies, ensuring that you stay up-to-date with the industry.</p>
        <p><strong>Offline Training:</strong> For those who prefer face-to-face learning, we offer hands-on training in our state-of-the-art facility. Our trainers are industry experts who provide practical knowledge and insights.</p>
      </div>
    </div>
  </section>
  
  <?php include('main-footer.php') ?>
</body>
</html>
