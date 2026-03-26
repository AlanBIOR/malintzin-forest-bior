<header class="main-header" id="inicio">
    <?php include 'includes/nav.php'; ?>

    <div class="hero__video-container">
        <video id="hero-video" 
               autoplay 
               muted 
               playsinline 
               poster="assets/img/hero-malintzin.webp" 
               class="hero__video active"
               src="assets/video/malintzin-clouds.mp4"></video>
               
        <video id="next-video" muted playsinline class="hero__video"></video>
    </div>

    <section class="hero">
        <div class="hero__content container">
            
            <span class="hero__badge"><?php echo __('hero_badge'); ?></span>
            
            <h1 class="hero__title"><?php echo __('hero_title'); ?></h1>
            
            <p class="hero__copy"><?php echo __('hero_copy'); ?></p>
            
            <div class="hero__actions">
                <a href="https://wa.me/52<?php echo PHONE_2; ?>?text=<?php echo urlencode(WA_MSG); ?>" class="btn btn--outline" target="_blank" rel="noopener noreferrer">
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