<!-- includes/footer.php -->
<footer class="footer">
    <div class="footer-content">
        <!-- Legal -->
        <div class="footer-section">
            <h3>Legal</h3>
            <ul class="legal-links">
                <li><a href="#" onclick="openPopup('terms')">Terms and Conditions</a></li>
                <li><a href="#" onclick="openPopup('privacy')">Privacy Policy</a></li>
                <li><a href="#" onclick="openPopup('disclaimer')">Disclaimer</a></li>
                <li><a href="#" onclick="openPopup('refund')">Refund Policy</a></li>
            </ul>
        </div>

        <!-- Quick Links -->
        <div class="footer-section">
            <h3>Quick Links</h3>
            <div class="vertical-links">
                <div class="link-item"><i class="fas fa-circle"></i><a href="index.php">Home</a></div>
                <div class="link-item"><i class="fas fa-circle"></i><a href="about.php">About Us</a></div>
                <div class="link-item"><i class="fas fa-circle"></i><a href="courses.php">Courses</a></div>
                <div class="link-item"><i class="fas fa-circle"></i><a href="contact.php">Contact</a></div>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="footer-section">
            <h3>Contact Us</h3>
            <ul class="contact-info">
                <li><i class="fas fa-map-marker-alt"></i> Dinanath Lane, Daily Market, Plantsite Rourkela, Dist.-Sundargarh, Odisha-769001</li>
                <li><i class="fas fa-phone"></i> +91 6370516212</li>
                <li><i class="fas fa-envelope"></i> info@vanitecheducation.com</li>
                <li><i class="fas fa-clock"></i> Mon - Sat: 9:00 AM - 7:00 PM</li>
            </ul>
        </div>

        <!-- Newsletter -->
        <div class="footer-section">
            <h3>Newsletter</h3>
            <p>Subscribe to our newsletter for updates and special offers.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit" class="newsletter-button">Subscribe</button>
            </form>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>&copy; 2025 Vanitech. All rights reserved.</p>
        </div>
    </div>

    <!-- Popups -->
    <?php include('footer-popups.php'); ?>

    <script src="js/popup.js"></script>
</footer>
