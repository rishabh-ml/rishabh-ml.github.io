<?php
$page_title = "Our Projects | Syed Rizvi Technical Services L.L.C";
$meta_description = "Discover the iconic projects completed by Syed Rizvi Technical Services L.L.C, including work on the Burj Khalifa, Ferrari World, and more.";
$meta_keywords = "Projects, Burj Khalifa, Ferrari World, Conrad Hotel";
$og_image = "assets/images/projects-banner.jpg";
$og_url = "https://srtechnical.com/projects.php";
$twitter_image = "assets/images/projects-banner.jpg";
$active_page = "projects";

include 'header.php';
?>

<section class="page-banner" style="background:url('assets/images/projects-banner.jpg') no-repeat center center/cover;">
    <div class="banner-content">
        <h1>Our Projects</h1>
        <p>Iconic Projects Across the UAE</p>
    </div>
</section>

<main>
    <section class="projects-intro">
        <div class="container">
            <h2>Building Landmarks, Setting Standards</h2>
            <p>
                At <strong>Syed Rizvi Technical Services L.L.C</strong>, we take pride in our contributions to some of the UAE’s most iconic structures. Our dedication to quality, safety, and innovation ensures we deliver outstanding results on every project.
            </p>
        </div>
    </section>

    <section class="projects-overview">
        <div class="container">
            <h2>Highlighted Projects</h2>
            <div class="project-grid">
                <div class="project-item">
                    <img src="assets/images/burj-khalifa.jpg" alt="Burj Khalifa">
                    <h3>Burj Khalifa</h3>
                    <p>External glass cleaning, electrical wiring, and cladding on the world’s tallest building.</p>
                </div>
                <div class="project-item">
                    <img src="assets/images/ferrari-world.jpg" alt="Ferrari World">
                    <h3>Ferrari World</h3>
                    <p>Glass fixing, silicone installation, and painting services for this iconic attraction.</p>
                </div>
                <div class="project-item">
                    <img src="assets/images/conrad-hotel.jpg" alt="Conrad Hotel">
                    <h3>Conrad Hotel</h3>
                    <p>Comprehensive technical services including electrical installations and cladding work.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Ready to Start Your Project?</h2>
            <p>Contact us to discuss your requirements and discover how we can help you achieve your vision.</p>
            <a href="contact.php" class="btn">Get in Touch</a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
