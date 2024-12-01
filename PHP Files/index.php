<?php
// Page-specific variables
$page_title = "Home";
$meta_description = "Syed Rizvi Technical Services L.L.C provides expert building maintenance and technical services in Dubai. Discover our services and projects.";
$meta_keywords = "Technical Services Dubai, Building Maintenance, AC Repair, Plumbing Services, Carpentry Work, Interior Design, Burj Khalifa, Ferrari World";
$og_image = "og-image.svg";
$og_url = "https://srtechnicals.com/index.php";
$twitter_image = "twitter-image.svg";
$active_page = "home";

// Include the header
include 'header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <h1>Syed Rizvi Technical Services L.L.C</h1>
    <p>Your Trusted Partner for Technical Services in Dubai</p>
    <a href="contact.php" class="btn">Get in Touch</a>
</section>

<!-- About Us Section -->
<section class="about-us">
    <div class="container">
        <h2>About Us</h2>
        <p>
            At <strong>Syed Rizvi Technical Services L.L.C</strong>, we specialize in providing comprehensive building maintenance and technical services across the UAE. With a commitment to excellence and a team of experienced professionals, we ensure high-quality solutions tailored to your needs.
        </p>
        <a href="about.php" class="btn">Learn More</a>
    </div>
</section>

<!-- Services Overview -->
<section class="services-overview">
    <div class="container">
        <h2>Our Services</h2>
        <div class="service-grid">
            <!-- Service Item 1 -->
            <div class="service-item">
                <img src="ac-repair.svg" alt="AC Repair Services">
                <h3>AC Repair</h3>
                <p>Reliable air conditioning repair services for residential and commercial sectors.</p>
                <a href="ac-work.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 2 -->
            <div class="service-item">
                <img src="plumbing.svg" alt="Plumbing Services">
                <h3>Plumbing Services</h3>
                <p>Professional plumbing solutions to fix leaks, clogs, and other issues.</p>
                <a href="plumbing.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 3 -->
            <div class="service-item">
                <img src="false-ceiling.svg" alt="False Ceiling">
                <h3>False Ceiling</h3>
                <p>Enhance your interiors with custom-designed false ceilings.</p>
                <a href="false-ceiling.php" class="btn">Learn More</a>
            </div>
            <!-- Add more services as needed -->
        </div>
        <div class="explore-services">
            <a href="services.php" class="btn">Explore All Services</a>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects">
    <div class="container">
        <h2>Our Projects</h2>
        <p>
            We have contributed to some of the most iconic structures in the UAE, showcasing our expertise and commitment to excellence.
        </p>
        <div class="project-grid">
            <!-- Project Item 1 -->
            <div class="project-item">
                <img src="burj-khalifa.svg" alt="Burj Khalifa">
                <h3>Burj Khalifa</h3>
                <p>
                    Worked on the world's tallest building, providing services such as external glass cleaning, electrical wiring, and cladding.
                </p>
            </div>
            <!-- Project Item 2 -->
            <div class="project-item">
                <img src="ferrari-world.svg" alt="Ferrari World">
                <h3>Ferrari World</h3>
                <p>
                    Contributed to the iconic Ferrari World with glass fixing, silicone installation, and painting services.
                </p>
            </div>
            <!-- Add more projects as needed -->
        </div>
        <div class="explore-services">
            <a href="projects.php" class="btn">View All Projects</a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us">
    <div class="container">
        <h2>Why Choose Us</h2>
        <div class="reasons-grid">
            <div class="reason">
                <h3>Experienced Professionals</h3>
                <p>Our team consists of certified and skilled professionals committed to delivering top-notch services.</p>
            </div>
            <div class="reason">
                <h3>Quality Assurance</h3>
                <p>We prioritize quality in every project, ensuring that our clients receive the best possible results.</p>
            </div>
            <div class="reason">
                <h3>Customer Satisfaction</h3>
                <p>Your satisfaction is our priority. We work closely with you to meet and exceed your expectations.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <h2>What Our Clients Say</h2>
    <div class="testimonial-slider">
        <div class="testimonial active">
            <p>"Syed Rizvi Technical Services provided exceptional service. Their professionalism is unmatched!"</p>
            <h3>- John Doe, CEO of XYZ Corp</h3>
        </div>
        <div class="testimonial">
            <p>"The team was efficient and reliable. Highly recommend their services to anyone in need."</p>
            <h3>- Jane Smith, Homeowner</h3>
        </div>
        <!-- Add more testimonials as needed -->
    </div>
    <div class="testimonial-nav"></div>
</section>

<?php
// Include the footer
include 'footer.php';
?>
