<?php
// Page-specific variables
$page_title = "Interior Design Services";
$meta_description = "Professional interior design services by Syed Rizvi Technical Services L.L.C in Dubai. Create your dream space with our expert designers.";
$meta_keywords = "Interior Design Dubai, Home Decor, Office Design, Space Planning, Technical Services Dubai, Building Maintenance";
$og_image = "interior-design-banner.svg";
$og_url = "https://srtechnicals.com/interior-design.php";
$twitter_image = "interior-design-banner.svg";
$active_page = "services";

// Include the header
include 'header.php';
?>

<!-- Page Banner -->
<section class="page-banner interior-design-banner">
    <div class="banner-content">
        <h1>Interior Design Services</h1>
        <p>Crafting Spaces That Inspire</p>
    </div>
</section>

<!-- Service Details -->
<section class="service-details">
    <div class="container">
        <h2>Expert Interior Design Services in Dubai</h2>
        <p>
            At <strong>Syed Rizvi Technical Services L.L.C</strong>, we offer comprehensive interior design services that transform your space into a reflection of your style and personality. Our team of experienced designers works closely with you to create functional and aesthetically pleasing environments.
        </p>

        <!-- Service Features -->
        <h3>Our Interior Design Services Include:</h3>
        <ul class="service-features">
            <li>Residential and commercial interior design</li>
            <li>Space planning and layout optimization</li>
            <li>Furniture selection and custom design</li>
            <li>Lighting design and implementation</li>
            <li>Color consultation and material selection</li>
            <li>Project management and execution</li>
        </ul>

        <!-- Benefits Section -->
        <h3>Why Choose Our Interior Design Services?</h3>
        <ul class="service-benefits">
            <li>Experienced and creative designers</li>
            <li>Personalized approach to suit your needs</li>
            <li>Access to a wide range of quality materials</li>
            <li>Attention to detail and craftsmanship</li>
            <li>Commitment to exceeding client expectations</li>
        </ul>

        <!-- Call to Action -->
        <div class="service-cta">
            <h3>Ready to Create Your Dream Space?</h3>
            <p>
                Let us help you bring your vision to life with our expert interior design services. Contact us today to schedule a consultation.
            </p>
            <a href="contact.php" class="btn">Contact Us</a>
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="related-services">
    <div class="container">
        <h2>Related Services</h2>
        <div class="service-list">
            <!-- Service Item 1 -->
            <div class="service-item">
                <img src="carpentry.svg" alt="Carpentry Services">
                <h3>Carpentry Services</h3>
                <p>Custom woodworking solutions to complement your interiors.</p>
                <a href="carpentry.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 2 -->
            <div class="service-item">
                <img src="cleaning.svg" alt="Cleaning Services">
                <h3>Cleaning Services</h3>
                <p>Professional cleaning services for a spotless environment.</p>
                <a href="cleaning.php" class="btn">Learn More</a>
            </div>
            <!-- Add more related services as needed -->
        </div>
    </div>
</section>

<?php
// Include the footer
include 'footer.php';
?>
