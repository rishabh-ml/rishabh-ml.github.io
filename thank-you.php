<?php
$page_title = "Thank You | Syed Rizvi Technical Services L.L.C";
$meta_description = "Thank you for contacting Syed Rizvi Technical Services L.L.C. We will get back to you shortly.";
$meta_keywords = "Thank You, Contact Submission";
$og_image = "assets/images/thank-you-banner.jpg";
$og_url = "https://srtechnical.com/thank-you.php";
$twitter_image = "assets/images/thank-you-banner.jpg";
$active_page = "thank-you"; // No specific navigation highlight needed here

include 'header.php';
?>

<section class="page-banner" style="background:url('assets/images/thank-you-banner.jpg') no-repeat center center/cover;">
    <div class="banner-content">
        <h1>Thank You</h1>
        <p>We have received your message and will get back to you shortly.</p>
    </div>
</section>

<main>
    <section class="thank-you-section">
        <div class="container">
            <h2>Your Message Has Been Sent Successfully!</h2>
            <p>Thank you for getting in touch. A member of our team will review your inquiry and respond as soon as possible. We appreciate your interest and look forward to assisting you.</p>
            <p>In the meantime, you can explore our other services or learn more about our company:</p>
            <div class="thank-you-links">
                <a href="services.php" class="btn">View Our Services</a>
                <a href="about.php" class="btn btn-secondary">Learn More About Us</a>
                <a href="index.php" class="btn btn-secondary">Return to Home</a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
