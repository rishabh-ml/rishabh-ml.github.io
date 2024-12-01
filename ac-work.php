<?php
// Page-specific variables
$page_title = "AC Repair and Maintenance";
$meta_description = "Professional AC repair and maintenance services by Syed Rizvi Technical Services L.L.C in Dubai. Keep your environment comfortable.";
$meta_keywords = "AC Repair Dubai, Air Conditioning Maintenance, HVAC Services, Technical Services Dubai, Building Maintenance";
$og_image = "ac-repair-banner.jpg";
$og_url = "https://srtechnical.com/ac-work.php";
$twitter_image = "ac-repair-banner.jpg";
$active_page = "services";

// Include the header
include 'header.php';
?>

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('ac-repair-banner.jpg');">
    <div class="banner-content">
        <h1>AC Repair and Maintenance</h1>
        <p>Ensuring Your Comfort All Year Round</p>
    </div>
</section>

<!-- Service Details -->
<section class="service-details">
    <div class="container">
        <h2>Expert AC Repair Services in Dubai</h2>
        <p>
            At <strong>Syed Rizvi Technical Services L.L.C</strong>, we offer comprehensive AC repair and maintenance services to ensure your air conditioning systems operate efficiently and reliably. Our team of certified technicians is equipped with the latest tools and expertise to handle all types of AC units, providing prompt and professional service.
        </p>

        <!-- Service Features -->
        <h3>Our AC Repair Services Include:</h3>
        <ul class="service-features">
            <li>Diagnosis and troubleshooting of AC issues</li>
            <li>Repair of all major AC brands and models</li>
            <li>Regular maintenance and servicing</li>
            <li>Cleaning of filters and ducts</li>
            <li>Replacement of faulty components</li>
            <li>Emergency repair services</li>
        </ul>

        <!-- Benefits Section -->
        <h3>Why Choose Us for Your AC Needs?</h3>
        <ul class="service-benefits">
            <li>Experienced and certified technicians</li>
            <li>Quick response and timely service</li>
            <li>Competitive pricing with no hidden charges</li>
            <li>Quality parts and materials used</li>
            <li>Customer satisfaction guaranteed</li>
        </ul>

        <!-- Call to Action -->
        <div class="service-cta">
            <h3>Need Immediate Assistance?</h3>
            <p>
                Don't let a faulty AC disrupt your comfort. Contact us now for prompt and reliable AC repair services.
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
                <img data-src="plumbing.jpg" alt="Plumbing Services">
                <h3>Plumbing Services</h3>
                <p>Professional plumbing solutions for your home and business.</p>
                <a href="plumbing.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 2 -->
            <div class="service-item">
                <img data-src="electrical.jpg" alt="Electrical Services">
                <h3>Electrical Services</h3>
                <p>Expert electrical installations and repairs by certified electricians.</p>
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
