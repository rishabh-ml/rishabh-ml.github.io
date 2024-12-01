<?php
// Page-specific variables
$page_title = "Services";
$meta_description = "Explore the range of services offered by Syed Rizvi Technical Services L.L.C, including AC repair, plumbing, cleaning, and more.";
$meta_keywords = "Services, AC Repair, Plumbing, Cleaning, Carpentry, Technical Services Dubai, Building Maintenance";
$og_image = "services-banner.jpg";
$og_url = "https://srtechnical.com/services.php";
$twitter_image = "services-banner.jpg";
$active_page = "services";

// Include the header
include 'header.php';
?>

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('services-banner.jpg');">
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
                <img data-src="ac-repair.jpg" alt="AC Repair Services">
                <h3>AC Repair</h3>
                <p>Reliable air conditioning repair services for residential and commercial sectors.</p>
                <a href="ac-work.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 2 -->
            <div class="service-item">
                <img data-src="plumbing.jpg" alt="Plumbing Services">
                <h3>Plumbing Services</h3>
                <p>Professional plumbing solutions to fix leaks, clogs, and other issues.</p>
                <a href="plumbing.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 3 -->
            <div class="service-item">
                <img data-src="false-ceiling.jpg" alt="False Ceiling">
                <h3>False Ceiling</h3>
                <p>Enhance your interiors with custom-designed false ceilings.</p>
                <a href="false-ceiling.html" class="btn">Learn More</a>
            </div>
            <!-- Service Item 4 -->
            <div class="service-item">
                <img data-src="tiling.jpg" alt="Wall and Floor Tiling">
                <h3>Wall & Floor Tiling</h3>
                <p>High-quality tiling solutions for residential and commercial spaces.</p>
                <a href="tiling.html" class="btn">Learn More</a>
            </div>
            <!-- Service Item 5 -->
            <div class="service-item">
                <img data-src="carpentry.jpg" alt="Carpentry Services">
                <h3>Carpentry Work</h3>
                <p>Expert carpentry services for custom furniture and woodwork.</p>
                <a href="carpentry.html" class="btn">Learn More</a>
            </div>
            <!-- Service Item 6 -->
            <div class="service-item">
                <img data-src="interior.jpg" alt="Interior Work">
                <h3>Interior Work</h3>
                <p>Transform your space with our professional interior design services.</p>
                <a href="interior.html" class="btn">Learn More</a>
            </div>
            <!-- Service Item 7 -->
            <div class="service-item">
                <img data-src="partitioning.jpg" alt="Partition Services">
                <h3>Partition Work</h3>
                <p>Modern office and residential partition solutions to optimize your space.</p>
                <a href="partition.html" class="btn">Learn More</a>
            </div>
            <!-- Service Item 8 -->
            <div class="service-item">
                <img data-src="cleaning.jpg" alt="Cleaning Services">
                <h3>Cleaning Services</h3>
                <p>Comprehensive cleaning services for a spotless and hygienic environment.</p>
                <a href="cleaning.php" class="btn">Learn More</a>
            </div>
            <!-- Service Item 9 -->
            <div class="service-item">
                <img data-src="rope-access.jpg" alt="Rope Access Services">
                <h3>Rope Access</h3>
                <p>Safe and efficient rope access services for high-rise building maintenance.</p>
                <a href="rope-access.html" class="btn">Learn More</a>
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
