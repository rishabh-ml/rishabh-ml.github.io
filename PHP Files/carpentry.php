<?php
// Page-specific variables
$page_title = "Carpentry Services";
$meta_description = "Professional carpentry services by Syed Rizvi Technical Services L.L.C in Dubai. Custom woodworking solutions for your home and business.";
$meta_keywords = "Carpentry Services Dubai, Custom Furniture, Woodworking, Cabinet Installation, Technical Services Dubai, Building Maintenance";
$og_image = "carpentry-banner.svg";
$og_url = "https://srtechnicals.com/carpentry.php";
$twitter_image = "carpentry-banner.svg";
$active_page = "services";

// Include the header
include 'header.php';
?>

<!-- Page Banner -->
<section class="page-banner carpentry-banner">
    <div class="banner-content">
        <h1>Carpentry Services</h1>
        <p>Crafting Excellence in Woodwork</p>
    </div>
</section>

<!-- Service Details -->
<section class="service-details">
    <div class="container">
        <h2>Expert Carpentry Services in Dubai</h2>
        <p>
            At <strong>Syed Rizvi Technical Services L.L.C</strong>, we offer professional carpentry services tailored to meet your specific needs. Our skilled carpenters are dedicated to delivering high-quality workmanship, whether it's for residential or commercial projects.
        </p>

        <!-- Service Features -->
        <h3>Our Carpentry Services Include:</h3>
        <ul class="service-features">
            <li>Custom furniture design and construction</li>
            <li>Kitchen cabinet installation and remodeling</li>
            <li>Door and window frame fabrication</li>
            <li>Wood flooring installation and repair</li>
            <li>Shelving and storage solutions</li>
            <li>Wooden decking and outdoor structures</li>
        </ul>

        <!-- Benefits Section -->
        <h3>Why Choose Our Carpentry Services?</h3>
        <ul class="service-benefits">
            <li>Experienced and skilled carpenters</li>
            <li>Use of high-quality materials</li>
            <li>Attention to detail and craftsmanship</li>
            <li>Customized solutions to fit your style and budget</li>
            <li>Commitment to customer satisfaction</li>
        </ul>

        <!-- Call to Action -->
        <div class="service-cta">
            <h3>Transform Your Space with Custom Carpentry</h3>
            <p>
                Ready to bring your vision to life? Contact us today to discuss your carpentry needs.
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
                <img src="tiling.svg" alt="Tiling and Flooring Services">
                <h3>Tiling and Flooring Services</h3>
                <p>Professional tiling and flooring solutions to enhance your space.</p>
                <a href="tiling.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 2 -->
            <div class="service-item">
                <img src="partition-work.svg" alt="Partition Work Services">
                <h3>Partition Work Services</h3>
                <p>Customized partition solutions to optimize your space.</p>
                <a href="partition-work.php" class="btn">Learn More</a>
            </div>
            <!-- Add more related services as needed -->
        </div>
    </div>
</section>

<?php
// Include the footer
include 'footer.php';
?>
