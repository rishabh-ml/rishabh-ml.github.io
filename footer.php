    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <img src="logo-footer.png" alt="Syed Rizvi Logo Footer">
                <p>Syed Rizvi Technical Services L.L.C - Your trusted partner for building maintenance and technical services across the UAE.</p>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php" class="<?php echo ($active_page == 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo ($active_page == 'about') ? 'active' : ''; ?>">About Us</a></li>
                    <li><a href="services.php" class="<?php echo ($active_page == 'services') ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="projects.php" class="<?php echo ($active_page == 'projects') ? 'active' : ''; ?>">Projects</a></li>
                    <li><a href="contact.php" class="<?php echo ($active_page == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Contact Us</h4>
                <p><strong>Phone:</strong> +971 52 1483314</p>
                <p><strong>Email:</strong> contact@syedrizvi.com</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a> 
                    <a href="#"><i class="fab fa-twitter"></i></a> 
                    <a href="#"><i class="fab fa-instagram"></i></a> 
                </div>
            </div>
        </div>
        <p>&copy; <?php echo date('Y'); ?> Syed Rizvi Technical Services L.L.C. All Rights Reserved.</p>
    </footer>

    <!-- Scripts -->
    <!-- GSAP Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <!-- ScrollTrigger Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
    <!-- ScrollToPlugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollToPlugin.min.js"></script>

    <!-- Your Custom Script -->
    <script src="script.js"></script>
</body>
</html>
