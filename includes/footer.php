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
                
                <a href="https://wa.me/52<?php echo PHONE_1; ?>" class="footer-link">
                    <i class="fab fa-whatsapp"></i> +52 <?php echo PHONE_1; ?>
                </a><br>
                
                <a href="https://wa.me/52<?php echo PHONE_2; ?>" class="footer-link">
                    <i class="fab fa-whatsapp"></i> +52 <?php echo PHONE_2; ?>
                </a>
            </address>
            <a href="#about" class="footer-link--alt"><?php echo __('footer_about'); ?></a>
        </div>

        <div class="footer-social">
            <span class="footer-label"><?php echo __('footer_social_title'); ?></span> 
            <ul class="social-links">
                <li>
                    <a href="https://www.facebook.com/share/18MuoAcnzy/" target="_blank" aria-label="Facebook">
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