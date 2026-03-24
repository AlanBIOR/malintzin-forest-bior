<footer class="main-footer">
    <div class="container footer-grid">
        
        <div class="footer-info">
            <span class="footer-label"><?php echo __('footer_email_title'); ?></span>
            <a href="mailto:info@malintzin.com" class="footer-link">info@malintzin.com</a>
            <p class="mt-2"><?php echo __('footer_email_subtext'); ?></p>
        </div>

        <div class="footer-contact">
            <span class="footer-label"><?php echo __('footer_contact_title'); ?></span>
            <address>
                <?php echo __('footer_address'); ?><br>
                <a href="tel:+<?php echo PHONE_WHATSAPP; ?>" class="footer-link">
                    +<?php echo PHONE_WHATSAPP; ?>
                </a>
            </address>
            <a href="#" class="footer-link--alt"><?php echo __('footer_about'); ?></a>
        </div>

        <div class="footer-social">
            <span class="footer-label"><?php echo __('footer_social_title'); ?></span> 
            <ul class="social-links">
                <li>
                    <a href="https://instagram.com/tu-usuario" target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/tu-usuario" target="_blank" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://facebook.com/AventurasLocalesMALINTZIN" target="_blank" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom container">
        <p><?php echo __('footer_rights'); ?></p>
        <p class="bior-credit"><?php echo __('footer_agency'); ?></p>
    </div>
</footer>

<script type="module" src="assets/js/main.js"></script>
</body>
</html>