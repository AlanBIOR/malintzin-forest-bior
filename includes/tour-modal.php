<div id="tour-modal" class="modal">
    <div class="modal-content modal-full-hero">
        <button class="close-modal" aria-label="Cerrar">&times;</button>
        
        <div class="modal-hero-bg">
            <img id="modal-img" src="" alt="Tour Background">
            <div class="modal-overlay"></div>
        </div>

        <div class="modal-container">
            <div class="modal-main-content">
                <h2 id="modal-title" class="hero-title"></h2>
                <p id="modal-desc" class="hero-subtitle"></p>
                
                <div class="modal-actions">
                    <a href="https://wa.me/<?php echo PHONE_WHATSAPP; ?>" class="btn-discover" target="_blank">
                        <?php echo __('btn_book'); ?>
                    </a>
                </div>
            </div>

            <div class="modal-footer-stats">
                <div class="stat-item">
                    <span class="stat-number">01</span>
                    <div class="stat-info">
                        <h4><?php echo __('modal_stat_alt'); ?></h4>
                        <p id="modal-stat-alt"></p> </div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">02</span>
                    <div class="stat-info">
                        <h4><?php echo __('modal_stat_diff'); ?></h4>
                        <p id="modal-stat-diff"></p> </div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">03</span>
                    <div class="stat-info">
                        <h4><?php echo __('modal_stat_dur'); ?></h4>
                        <p id="modal-stat-dur"></p> </div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">04</span>
                    <div class="stat-info">
                        <h4><?php echo __('modal_stat_meet'); ?></h4>
                        <p id="modal-stat-meet"></p> </div>
                </div>
            </div>
        </div>
    </div>
</div>