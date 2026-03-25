<footer class="main-footer">
    <div class="container footer-grid">
        
        <div class="footer-info">
            <span class="footer-label">Malintzin Forest</span>
            <p class="mt-2" style="color: rgba(255,255,255,0.7); margin-bottom: 1rem; font-size: 0.9rem;">
                <?php echo __('footer_brand_desc'); ?>
            </p>
            <a href="mailto:info@malintzin.com" class="footer-link">
                <i class="fas fa-envelope"></i> contacto@malintzin.bior-studio.com
            </a>
        </div>

        <div class="footer-links">
            <span class="footer-label"><?php echo __('footer_quick_links'); ?></span>
            <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 0.8rem;">
                <li><a href="#inicio" class="footer-link--alt"><?php echo __('nav_home'); ?></a></li>
                <li><a href="#tours" class="footer-link--alt"><?php echo __('nav_locations'); ?></a></li>
                <li><a href="#promos" class="footer-link--alt"><?php echo __('nav_promo'); ?></a></li> <li><a href="#galeria" class="footer-link--alt"><?php echo __('nav_gallery'); ?></a></li>
                <li><a href="#contacto" class="footer-link--alt"><?php echo __('nav_contact'); ?></a></li>
            </ul>
        </div>

        <div class="footer-social">
            <span class="footer-label"><?php echo __('footer_follow_us'); ?></span> 
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
        <p>&copy; <?php echo date('Y'); ?> Aventuras Locales MALINTZIN. <?php echo __('footer_rights'); ?></p>
        <p class="bior-credit"><?php echo __('footer_agency'); ?></p>
    </div>
</footer>