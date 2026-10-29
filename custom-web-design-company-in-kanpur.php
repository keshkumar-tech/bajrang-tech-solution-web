<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="icon" type="image/png" href="images\fevicon.png.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Web Design - Bajarang Tech Solution</title>
    <link rel="stylesheet" href="css/services.css">
</head>
<body>
      <?php include('topnav.php') ?>
 <div class="container-fluid bg-primary py-5 mt-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Custom Web Design Company</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-black" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-black" href="./etraining/courses.php">Our Courses</a></li>
                            <li class="breadcrumb-item"><a class="text-black" href="service.php">Our Services</a></li>
							<li class="breadcrumb-item active" aria-current="page">Custom Web Design Company</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
        <!-- Section 1: Intro with gradient background -->
    <section class="section gradient-bg fade-in-up">
        <div class="container">
            <h1>Custom Web Design</h1>
            <h2>Crafting Unique Digital Experiences</h2>
            <p>Bajarang Tech Solution offers custom web design services to help your business stand out with a unique, professional website. We work closely with you to deliver tailored solutions that align with your brand identity and business goals.</p>
            <p>Whether you're a startup or an established company, we create visually appealing, high-performing websites that are optimized for both functionality and user experience.</p>
        </div>
    </section>

    <!-- Section 2: Dark Background with left animation -->
    <section class="section dark-bg fade-in-left">
        <div class="container">
            <h2>Why Choose Custom Web Design?</h2>
            <p>Custom web design offers unparalleled flexibility and uniqueness. Unlike template-based designs, custom designs are made specifically for your brand, ensuring that your website doesn’t just look good, but also delivers an intuitive user experience.</p>
            <p>Our team focuses on crafting clean and responsive designs that cater to the needs of your target audience, helping you convert visitors into loyal customers.</p>
        </div>
    </section>

    <!-- Section 3: Light Background with right animation -->
    <section class="section light-bg fade-in-right">
        <div class="container">
            <h2>Our Design Process</h2>
            <p>We start with understanding your business needs and vision. From there, we move to wireframes and mockups, and once approved, we proceed with development. Our designs are fully responsive, ensuring that your website looks great on any device.</p>
            <p>We also ensure that your website is SEO-friendly, giving your business the best chance to rank well in search engines and attract organic traffic.</p>
            <a href="price.php" class="read-more">Learn More</a>
        </div>
    </section>

    <!-- Section 4: Feature Highlights with gradient background -->
    <section class="section gradient-bg fade-in-up">
        <div class="container">
            <h2>Key Features of Our Custom Web Design Services</h2>
            <p>At Bajarang Tech Solution, we integrate a range of features that enhance the user experience and elevate your brand’s online presence. Our key features include:</p>
            <ul>
                <li><strong>Responsive Design:</strong> We ensure that your website is optimized for all devices, from desktop to mobile.</li>
                <li><strong>SEO-Optimized:</strong> Our designs come with search engine optimization (SEO) best practices to help your site rank higher on Google.</li>
                <li><strong>Custom Branding:</strong> We create a design that reflects your brand’s identity and voice, providing a unique, recognizable digital presence.</li>
                <li><strong>Fast Loading Times:</strong> We prioritize speed, ensuring that your website loads quickly and efficiently, improving both user experience and SEO performance.</li>
                <li><strong>Scalable Design:</strong> Whether your business grows in the future or you need additional features, our designs are scalable and adaptable to your needs.</li>
            </ul>
        </div>
    </section>

    <!-- Section 5: Dark background - Benefits of Custom Web Design -->
    <section class="section dark-bg fade-in-left">
        <div class="container">
            <h2>Benefits of Custom Web Design</h2>
            <p>Investing in a custom web design allows your business to achieve better results compared to template-based websites. Here are the key benefits:</p>
            <ul>
                <li><strong>Stand Out From Competitors:</strong> With a custom design, your website will have a unique look and feel that sets you apart from your competitors.</li>
                <li><strong>Tailored User Experience:</strong> A custom website is designed to provide an optimal user experience, tailored specifically to your target audience.</li>
                <li><strong>Enhanced Flexibility:</strong> You’ll have full control over the functionality, layout, and design, ensuring that the website serves your business needs perfectly.</li>
                <li><strong>Long-Term Investment:</strong> Custom websites are more future-proof, allowing for easier updates and scalability as your business grows.</li>
            </ul>
        </div>
    </section>

    <!-- Section 6: Case Studies with light background -->
    <section class="section light-bg fade-in-right">
        <div class="container">
            <h2>Case Studies: Successful Custom Web Designs</h2>
            <p>Over the years, Bajarang Tech Solution has delivered high-quality custom web designs to a variety of clients. Below are some examples of our work:</p>
            <div class="case-study">
                <h3>Case Study 1: XYZ eCommerce</h3>
                <p>XYZ eCommerce came to us with a vision of creating a sleek, modern online store that reflected their brand values. We delivered a responsive, SEO-optimized eCommerce platform that increased their online sales by 30% within the first six months.</p>
            </div>
            <div class="case-study">
                <h3>Case Study 2: ABC Consulting</h3>
                <p>ABC Consulting needed a professional, informative website to showcase their services. Our custom design helped increase their lead generation by 50%, thanks to improved site navigation and user experience.</p>
            </div>
        </div>
    </section>

    <!-- Section 7: Contact CTA with gradient background -->
    <section class="section gradient-bg fade-in-up">
        <div class="container">
            <h2>Ready to Start Your Project?</h2>
            <p>Contact Bajarang Tech Solution today to get started on your custom web design project. Our team of experts is ready to bring your vision to life and help your business succeed online.</p>
            <a href="contact.php" class="read-more">Get in Touch</a>
        </div>
    </section>
    
	<?php include('main-footer.php') ?>
	
    <script>
        // Add fade-in effect on scroll
        const sections = document.querySelectorAll('.section');
        window.addEventListener('scroll', () => {
            sections.forEach(section => {
                const rect = section.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    section.classList.add('appear');
                }
            });
        });
    </script>

</body>
</html>