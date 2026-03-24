<header class="main-header" id="inicio">
    <?php include 'includes/nav.php'; ?>

    <section class="hero">
        <div class="hero__content container">
            
            <span class="hero__badge"><?php echo __('hero_badge'); ?></span>
            
            <h1 class="hero__title"><?php echo __('hero_title'); ?></h1>
            
            <p class="hero__copy"><?php echo __('hero_copy'); ?></p>
            
            <div class="hero__actions">
                <a href="https://wa.me/<?php echo PHONE_WHATSAPP; ?>" class="btn btn--outline" target="_blank" rel="noopener noreferrer">
                    <?php echo __('btn_book'); ?>
                </a>
            </div>

            <div class="hero__dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            
        </div>
    </section>
</header>