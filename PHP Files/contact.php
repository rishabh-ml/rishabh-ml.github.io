<?php
// Page-specific variables
$page_title = "Contact Us";
$meta_description = "Get in touch with Syed Rizvi Technical Services L.L.C for expert building maintenance and technical services in Dubai.";
$meta_keywords = "Contact, Technical Services Dubai, Building Maintenance, AC Repair, Plumbing Services";
$og_image = "contact-banner.svg";
$og_url = "https://srtechnicals.com/contact.php";
$twitter_image = "contact-banner.svg";
$active_page = "contact";

// Include the header
include 'header.php';
?>

<!-- Page Banner -->
<section class="page-banner contact-banner">
    <div class="banner-content">
        <h1>Contact Us</h1>
        <p>We'd Love to Hear from You</p>
    </div>
</section>

<!-- Contact Details and Form -->
<section class="contact-section">
    <div class="container">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p>
                Whether you have a question about our services, need a quote, or just want to say hello, our team is ready to answer all your questions.
            </p>
            <ul class="contact-details">
                <li><i class="fas fa-phone"></i> Phone: +971526327914</li>
                <li><i class="fas fa-envelope"></i> Email: contact@srtechnicals.com</li>
                <li><i class="fas fa-map-marker-alt"></i> Address: Office #101, Business Bay, Dubai, UAE</li>
            </ul>
            <div class="social-icons">
                <a href="https://www.facebook.com/YourPage" target="_blank"><i class="fab fa-facebook"></i></a> 
                <a href="https://www.twitter.com/YourProfile" target="_blank"><i class="fab fa-twitter"></i></a> 
                <a href="https://www.instagram.com/YourProfile" target="_blank"><i class="fab fa-instagram"></i></a> 
            </div>
        </div>

        <div class="contact-form-container">
            <h2>Send Us a Message</h2>
            <form id="contact-form" action="https://api.web3forms.com/submit" method="POST">
                <!-- Add your Access Key -->
                <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE">
                <!-- Redirect URL after successful submission (optional) -->
                <input type="hidden" name="redirect" value="https://srtechnicals.com/thank-you.php">
                <!-- Honeypot field to prevent spam (hidden from users) -->
                <input type="checkbox" name="botcheck" id="botcheck" style="display:none;">
                <div class="form-group">
                    <label for="name">Name<span>*</span></label>
                    <input type="text" id="name" name="name" required placeholder="Your Full Name">
                    <div class="error-message"></div>
                </div>
                <div class="form-group">
                    <label for="email">Email<span>*</span></label>
                    <input type="email" id="email" name="email" required placeholder="Your Email Address">
                    <div class="error-message"></div>
                </div>
                <div class="form-group">
                    <label for="message">Message<span>*</span></label>
                    <textarea id="message" name="message" required placeholder="Your Message"></textarea>
                    <div class="error-message"></div>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>
</section>

<!-- Google Map Embed (Optional) -->
<!--
<section class="map-section">
    <div class="map-container">
        <iframe src="YOUR_GOOGLE_MAPS_EMBED_URL" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
-->

<?php
// Include the footer
include 'footer.php';
?>
