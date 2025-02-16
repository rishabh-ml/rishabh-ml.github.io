<?php
// Page-specific variables
$page_title = "Our Services | Syed Rizvi Technical Services L.L.C";
$meta_description = "Explore the range of services offered by Syed Rizvi Technical Services L.L.C. From AC repair to interior work, we provide comprehensive maintenance solutions in Dubai.";
$meta_keywords = "Technical Services Dubai, Building Maintenance, AC Repair, Plumbing Services";
$og_image = "assets/images/services-banner.jpg";
$og_url = "https://srtechnical.com/services.php";
$twitter_image = "assets/images/services-banner.jpg";
$active_page = "services";

include 'header.php';
?>

<section class="page-banner services-banner" style="background:url('assets/images/services-banner.jpg') no-repeat center center/cover;">
    <div class="banner-content">
        <h1>Our Services</h1>
        <p>Comprehensive Maintenance and Technical Solutions</p>
    </div>
</section>

<main>
    <section class="services-intro">
        <div class="container">
            <h2>Quality Services Tailored to Your Needs</h2>
            <p>At <strong>Syed Rizvi Technical Services L.L.C</strong>, we offer a wide range of maintenance and technical services designed to keep your property in top condition. Our skilled team is dedicated to delivering exceptional quality, safety, and client satisfaction across all our offerings.</p>
        </div>
    </section>

    <section class="services-overview">
        <div class="container">
            <h2>Our Expert Services</h2>
            <div class="service-grid">
                <div class="service-item card-hover">
                    <img src="assets/images/ac-repair.jpg" alt="AC Repair Services">
                    <h3>AC Repair</h3>
                    <p>Reliable air conditioning repair services to ensure your comfort all year round.</p>
                    <a href="ac-work.php" class="btn">Learn More</a>
                </div>
                <div class="service-item card-hover">
                    <img src="assets/images/plumbing.jpg" alt="Plumbing Services">
                    <h3>Plumbing</h3>
                    <p>Expert plumbing solutions for residential and commercial needs, available 24/7.</p>
                    <a href="plumbing.php" class="btn">Learn More</a>
                </div>
                <div class="service-item card-hover">
                    <img src="assets/images/false-ceiling.jpg" alt="False Ceiling">
                    <h3>False Ceiling</h3>
                    <p>Transform interiors with custom-designed false ceilings for improved aesthetics and ambiance.</p>
                    <a href="false-ceiling.php" class="btn">Learn More</a>
                </div>
                <div class="service-item card-hover">
                    <img src="assets/images/tiling.jpg" alt="Wall and Floor Tiling">
                    <h3>Wall & Floor Tiling</h3>
                    <p>High-quality tiling solutions for homes and businesses, ensuring durability and style.</p>
                    <a href="tiling.php" class="btn">Learn More</a>
                </div>
                <div class="service-item card-hover">
                    <img src="assets/images/carpentry.jpg" alt="Carpentry Services">
                    <h3>Carpentry</h3>
                    <p>Professional carpentry work, from custom furniture to structural woodwork.</p>
                    <a href="carpentry.php" class="btn">Learn More</a>
                </div>
                <div class="service-item card-hover">
                    <img src="assets/images/interior.jpg" alt="Interior Work">
                    <h3>Interior Work</h3>
                    <p>Innovative interior design and fit-outs for a space that reflects your taste and needs.</p>
                    <a href="interior.php" class="btn">Learn More</a>
                </div>
                <div class="service-item card-hover">
                    <img src="assets/images/partitioning.jpg" alt="Partition Work">
                    <h3>Partition Work</h3>
                    <p>Flexible partition solutions to optimize your workspace layout and privacy.</p>
                    <a href="partition.php" class="btn">Learn More</a>
                </div>
                <div class="service-item card-hover">
                    <img src="assets/images/cleaning.jpg" alt="Cleaning Services">
                    <h3>Cleaning</h3>
                    <p>Comprehensive cleaning services for a healthier, more welcoming environment.</p>
                    <a href="cleaning.php" class="btn">Learn More</a>
                </div>
                <div class="service-item card-hover">
                    <img src="assets/images/rope-access.jpg" alt="Rope Access Services">
                    <h3>Rope Access</h3>
                    <p>Safe and efficient rope access solutions for high-rise maintenance and repairs.</p>
                    <a href="rope-access.php" class="btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
