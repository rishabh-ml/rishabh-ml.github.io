<?php
// Page-specific variables
$page_title = "Plumbing Services";
$meta_description = "Professional plumbing services by Syed Rizvi Technical Services L.L.C in Dubai. Reliable solutions for all your plumbing needs.";
$meta_keywords = "Plumbing Services Dubai, Leak Repair, Pipe Installation, Drain Cleaning, Technical Services Dubai, Building Maintenance";
$og_image = "plumbing-banner.svg";
$og_url = "https://srtechnicals.com/plumbing.php";
$twitter_image = "plumbing-banner.svg";
$active_page = "services";

// Include the header
include 'header.php';
?>

<!-- Page Banner -->
<section class="page-banner plumbing-banner">
    <div class="banner-content">
        <h1>Plumbing Services</h1>
        <p>Reliable Solutions for Your Plumbing Needs</p>
    </div>
</section>

<!-- Service Details -->
<section class="service-details">
    <div class="container">
        <h2>Expert Plumbing Services in Dubai</h2>
        <p>
            At <strong>Syed Rizvi Technical Services L.L.C</strong>, we offer comprehensive plumbing services for both residential and commercial properties. Our team of certified plumbers is dedicated to providing prompt, efficient, and cost-effective solutions to all your plumbing problems.
        </p>

        <!-- Service Features -->
        <h3>Our Plumbing Services Include:</h3>
        <ul class="service-features">
            <li>Leak detection and repair</li>
            <li>Pipe installation and replacement</li>
            <li>Drain cleaning and unclogging</li>
            <li>Water heater installation and repair</li>
            <li>Bathroom and kitchen plumbing renovations</li>
            <li>Emergency plumbing services</li>
        </ul>

        <!-- Benefits Section -->
        <h3>Why Choose Our Plumbing Services?</h3>
        <ul class="service-benefits">
            <li>Experienced and licensed plumbers</li>
            <li>24/7 emergency services available</li>
            <li>Upfront pricing with no hidden fees</li>
            <li>High-quality materials and workmanship</li>
            <li>Guaranteed customer satisfaction</li>
        </ul>

        <!-- Call to Action -->
        <div class="service-cta">
            <h3>Facing a Plumbing Issue?</h3>
            <p>
                Don't let plumbing problems disrupt your daily life. Contact us now for prompt and professional plumbing services.
            </p>
            <a href="contact.php" class="btn">Contact Us</a>
        </div>
    </div>
</section>

<!-- Related Services (Optional) -->
<section class="related-services">
    <div class="container">
        <h2>Related Services</h2>
        <div class="service-list">
            <!-- Service Item 1 -->
            <div class="service-item">
                <img src="ac-repair.svg" alt="AC Repair Services">
                <h3>AC Repair and Maintenance</h3>
                <p>Expert air conditioning repair services to keep you cool.</p>
                <a href="ac-work.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 2 -->
            <div class="service-item">
                <img src="electrical.svg" alt="Electrical Services">
                <h3>Electrical Services</h3>
                <p>Professional electrical installations and repairs.</p>
                <a href="electrical.php" class="btn">Learn More</a>
            </div>
            <!-- Add more related services as needed -->
        </div>
    </div>
</section>

<?php
// Include the footer
include 'footer.php';
?>
