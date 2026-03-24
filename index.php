<?php 
require_once 'config.php'; 
require_once 'languages.php'; 
include 'includes/head.php'; 
include 'includes/header.php';
?>

<main class="home-page">
    <section id="tours" class="tour-section"> 
        <div class="container">
            <nav class="tour-filter">
                <ul>
                    <li class="filter-btn active" data-filter="malinche">
                        <?php echo __('filter_malinche'); ?>
                    </li>
                    <li class="filter-btn" data-filter="rutas-nevadas">
                        <?php echo __('filter_snow'); ?>
                    </li>
                    <li class="filter-btn" data-filter="mar-nubes">
                        <?php echo __('filter_clouds'); ?>
                    </li>
                </ul>
            </nav>
            
            <h2 class="section-title" id="tour-title">
                <?php echo __('filter_malinche'); ?>
            </h2>

            <?php include 'includes/tour-grid.php'; ?>
        </div> 
    </section>

    <?php include 'includes/promo-banner.php'; ?>

    <?php if(defined('AD_SLOT_HOME')) : ?>
        <div class="ad-wrapper container">
            <?php echo AD_SLOT_HOME; ?>
        </div>
    <?php endif; ?>

    <?php include 'includes/testimonials.php'; ?>
</main>

<?php include 'includes/tour-modal.php'; ?>

<?php 
include 'includes/footer.php'; 
?>