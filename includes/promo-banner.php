<section id="promos" class="promo-section">
    <div class="promo-card">
        <div class="promo-card__image">
            <img src="assets/img/volante-malintzin.jpeg" alt="<?php echo __('promo_img_alt'); ?>">
            <div class="promo-card__badge"><?php echo __('promo_badge'); ?></div>
        </div>
        
        <div class="promo-card__content">
            <span class="promo-card__tag"><?php echo __('promo_tag'); ?></span>
            <h2><?php echo __('promo_title'); ?></h2>
            <p><?php echo __('promo_subtitle'); ?></p>
            
            <div class="promo-card__details">
                <div class="detail-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span><?php echo __('promo_date'); ?></span>
                </div>
                <div class="detail-item">
                    <i class="fas fa-money-bill-wave"></i>
                    <span><?php echo TOUR_PRICE; ?> <?php echo __('promo_per_person'); ?></span>
                </div>
            </div>

            <div class="promo-card__features">
                <ul>
                    <li><i class="fas fa-check"></i> <?php echo __('promo_feat_1'); ?></li>
                    <li><i class="fas fa-check"></i> <?php echo __('promo_feat_2'); ?></li>
                    <li><i class="fas fa-check"></i> <?php echo __('promo_feat_3'); ?></li>
                    <li><i class="fas fa-check"></i> <?php echo __('promo_feat_4'); ?></li>
                    <li><i class="fas fa-check"></i> <?php echo __('promo_feat_5'); ?></li>
                </ul>
            </div>

            <a href="https://wa.me/52<?php echo PHONE_2; ?>?text=<?php echo urlencode(WA_MSG . ' Estoy interesado en la promoción de $399 MXN.'); ?>" class="btn-promo" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-whatsapp"></i> <?php echo __('btn_reserve_now'); ?>
            </a>
        </div>
    </div>
</section>