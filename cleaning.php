<?php
// Page-specific variables
$page_title = "Cleaning Services";
$meta_description = "Professional cleaning services by Syed Rizvi Technical Services L.L.C in Dubai. Ensure a spotless and hygienic environment.";
$meta_keywords = "Cleaning Services Dubai, Office Cleaning, Home Cleaning, Deep Cleaning, Technical Services Dubai, Building Maintenance";
$og_image = "cleaning-banner.jpg";
$og_url = "https://srtechnical.com/cleaning.php";
$twitter_image = "cleaning-banner.jpg";
$active_page = "services";

// Include the header
include 'header.php';
?>

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('cleaning-banner.jpg');">
    <div class="banner-content">
        <h1>Cleaning Services</h1>
        <p>Keeping Your Space Spotless and Hygienic</p>
    </div>
</section>

<!-- Service Details -->
<section class="service-details">
    <div class="container">
        <h2>Expert Cleaning Services in Dubai</h2>
        <p>
            At <strong>Syed Rizvi Technical Services L.L.C</strong>, we provide top-notch cleaning services for both residential and commercial properties. Our professional cleaners are dedicated to ensuring your environment is clean, safe, and inviting.
        </p>

        <!-- Service Features -->
        <h3>Our Cleaning Services Include:</h3>
        <ul class="service-features">
            <li>Residential cleaning (apartments, villas)</li>
            <li>Commercial cleaning (offices, retail spaces)</li>
            <li>Deep cleaning and sanitization</li>
            <li>Carpet and upholstery cleaning</li>
            <li>Window and glass cleaning</li>
            <li>Post-construction cleaning</li>
        </ul>

        <!-- Benefits Section -->
        <h3>Why Choose Our Cleaning Services?</h3>
        <ul class="service-benefits">
            <li>Trained and trustworthy staff</li>
            <li>Use of eco-friendly cleaning products</li>
            <li>Flexible scheduling to suit your needs</li>
            <li>Competitive pricing with no compromise on quality</li>
            <li>Commitment to customer satisfaction</li>
        </ul>

        <!-- Call to Action -->
        <div class="service-cta">
            <h3>Ready for a Spotless Space?</h3>
            <p>
                Experience the difference a professional cleaning service can make. Contact us today to schedule your cleaning.
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
                <img data-src="ac-repair.jpg" alt="AC Repair Services">
                <h3>AC Repair and Maintenance</h3>
                <p>Expert air conditioning repair services to keep you cool.</p>
                <a href="ac-work.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 2 -->
            <div class="service-item">
                <img data-src="plumbing.jpg" alt="Plumbing Services">
                <h3>Plumbing Services</h3>
                <p>Professional plumbing solutions for your home and business.</p>
                <a href="plumbing.php" class="btn">Learn More</a>
            </div>
            <!-- Add more related services as needed -->
        </div>
    </div>
</section>

<?php
// Include the footer
include 'footer.php';
?>
