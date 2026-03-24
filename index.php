<?php 
require_once 'config.php'; 
require_once 'languages.php'; 
include 'includes/head.php'; 
?>

<header class="main-header" id="inicio">
    <?php include 'includes/nav.php'; ?>
    
    <section class="hero">
        <div class="hero__content container">
            <span class="hero__badge"><?php echo __('hero_badge'); ?></span>
            
            <h1 class="hero__title"><?php echo __('hero_title'); ?></h1>
            
            <p class="hero__copy"><?php echo __('hero_copy'); ?></p>
            
            <div class="hero__actions">
                <a href="#tours" class="btn btn--outline"><?php echo __('btn_book'); ?></a>
            </div>

            <div class="hero__dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>
</header>

<main class="home-page">
    <section id="tours" class="tour-section"> 
        <div class="container">
            <nav class="tour-filter">
                <ul>
                    <li class="active"><?php echo __('filter_all'); ?></li>
                    <li><?php echo __('filter_snow'); ?></li>
                    <li><?php echo __('filter_clouds'); ?></li>
                </ul>
            </nav>
            
            <h2 class="section-title"><?php echo __('featured_tours'); ?></h2>

            <?php include 'includes/tour-grid.php'; ?>
        </div> 
    </section>

    <?php if(defined('AD_SLOT_HOME')) : ?>
        <div class="ad-wrapper container" style="margin-bottom: 4rem; text-align: center;">
            <?php echo AD_SLOT_HOME; ?>
        </div>
    <?php endif; ?>

    <?php include 'includes/testimonials.php'; ?>
</main>

<?php 
include 'includes/footer.php'; 
?>