<?php
// Page-specific variables
$page_title = "Contact Us";
$meta_description = "Get in touch with Syed Rizvi Technical Services L.L.C for all your technical and maintenance needs.";
$meta_keywords = "Contact, Technical Services Dubai, AC Repair, Plumbing, Carpentry, Building Maintenance";
$og_image = "assets/images/contact-banner.jpg";
$og_url = "https://srtechnicals.com/contact.php";
$twitter_image = "assets/images/contact-banner.jpg";
$active_page = "contact";

include 'header.php';
?>

<section class="page-banner" style="background: url('assets/images/contact-banner.jpg') no-repeat center center/cover;">
    <div class="banner-content">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you!</p>
    </div>
</section>

<section class="contact-page">
    <div class="contact-container">
       <div class="contact-info">
    <h2>Contact Information</h2>
    <p>Reach out to us for any questions, quotes, or assistance. We're here to help!</p>
    
    <h3>Office Address</h3>
    <p>29 ABU HAIL BUILDING, Dubai, U.A.E</p>

    <h3>Phone</h3>
    <p>Raziq Raza (Managing Director): +971 521483314</p>
    <p>Tariq Raza (Admin Manager): +971 526327914</p>

    <h3>Email</h3>
    <p><a href="mailto:info@srtechnicals.com">info@srtechnicals.com</a></p>
    <p><a href="mailto:contact@srtechnicals.com">contact@srtechnicals.com</a></p>
</div>

        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form method="post" action="send-message.php" id="contact-form">
                <div class="form-group">
                    <label for="name">Your Name *</label>
                    <input type="text" id="name" name="name" required>
                    <div class="error-message"></div>
                </div>
                <div class="form-group">
                    <label for="email">Your Email *</label>
                    <input type="email" id="email" name="email" required>
                    <div class="error-message"></div>
                </div>
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" required>
                    <div class="error-message"></div>
                </div>
                <div class="form-group">
                    <label for="message">Your Message *</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                    <div class="error-message"></div>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
