<?php
// Page-specific variables
$page_title = "Services";
$meta_description = "Explore the range of services offered by Syed Rizvi Technical Services L.L.C, including AC repair, plumbing, carpentry, and more.";
$meta_keywords = "Services, AC Repair, Plumbing, Carpentry, Technical Services Dubai, Building Maintenance";
$og_image = "services-banner.svg";
$og_url = "https://srtechnicals.com/services.php";
$twitter_image = "services-banner.svg";
$active_page = "services";

// Include the header
include 'header.php';
?>

<!-- Page Banner -->
<section class="page-banner services-banner">
    <div class="banner-content">
        <h1>Our Services</h1>
        <p>Comprehensive Solutions Tailored to Your Needs</p>
    </div>
</section>

<!-- Services Content -->
<section class="services-content">
    <div class="container">
        <h2>What We Offer</h2>
        <p>
            At <strong>Syed Rizvi Technical Services L.L.C</strong>, we provide a wide range of technical and maintenance services to meet the diverse needs of our clients. Our team of professionals is equipped with the expertise and tools to deliver high-quality solutions efficiently and effectively.
        </p>

        <div class="service-list">
            <!-- Service Item 1 -->
            <div class="service-item">
                <img src="ac-repair.svg" alt="AC Repair and Maintenance">
                <h3>AC Repair and Maintenance</h3>
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
                <img src="carpentry.svg" alt="Carpentry Services">
                <h3>Carpentry Services</h3>
                <p>Custom woodworking solutions for your home and business.</p>
                <a href="carpentry.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 4 -->
            <div class="service-item">
                <img src="tiling.svg" alt="Tiling and Flooring Services">
                <h3>Tiling and Flooring Services</h3>
                <p>Professional tiling and flooring solutions to enhance your space.</p>
                <a href="tiling.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 5 -->
            <div class="service-item">
                <img src="false-ceiling.svg" alt="False Ceiling Services">
                <h3>False Ceiling Services</h3>
                <p>Enhance your interiors with stylish ceiling solutions.</p>
                <a href="false-ceiling.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 6 -->
            <div class="service-item">
                <img src="partition-work.svg" alt="Partition Work Services">
                <h3>Partition Work Services</h3>
                <p>Customized partition solutions to optimize your space.</p>
                <a href="partition-work.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 7 -->
            <div class="service-item">
                <img src="interior-design.svg" alt="Interior Design Services">
                <h3>Interior Design Services</h3>
                <p>Comprehensive interior design solutions to create your dream space.</p>
                <a href="interior-design.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 8 -->
            <div class="service-item">
                <img src="cleaning.svg" alt="Cleaning Services">
                <h3>Cleaning Services</h3>
                <p>Professional cleaning services for a spotless environment.</p>
                <a href="cleaning.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 9 -->
            <div class="service-item">
                <img src="rope-access.svg" alt="Rope Access Services">
                <h3>Rope Access Services</h3>
                <p>Safe and efficient solutions for high-rise building maintenance.</p>
                <a href="rope-access.php" class="btn">Learn More</a>
            </div>
            <!-- Add more services as needed -->
        </div>
    </div>
</section>

<!-- Why Choose Our Services -->
<section class="why-choose-services">
    <div class="container">
        <h2>Why Choose Our Services</h2>
        <ul class="service-benefits">
            <li>Experienced and certified professionals.</li>
            <li>High-quality materials and equipment.</li>
            <li>Customized solutions to meet your specific needs.</li>
            <li>Competitive pricing without compromising on quality.</li>
            <li>Timely project completion and reliable support.</li>
        </ul>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <h2>Interested in Our Services?</h2>
        <p>
            Contact us today to discuss your requirements and find out how we can assist you.
        </p>
        <a href="contact.php" class="btn">Get in Touch</a>
    </div>
</section>

<?php
// Include the footer
include 'footer.php';
?>
