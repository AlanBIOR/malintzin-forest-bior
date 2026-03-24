<section class="testimonials">
    <div class="container">
        <div class="testimonials__header">
            <h2 class="section-title"><?php echo __('testimonials_title'); ?></h2>
            <p class="section-subtitle"><?php echo __('testimonials_subtitle'); ?></p>
        </div>

        <div class="testimonials__grid">
            <?php 
            // Recorremos los testimonios del idioma actual
            foreach($texts[$lang]['reviews'] as $review): 
            ?>
            <article class="testimonial-card">
                <div class="testimonial-card__icon">
                    <svg viewBox="0 0 24 24" width="40" height="40">
                        <path fill="currentColor" d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H16.017C15.4647 8 15.017 8.44772 15.017 9V12H13.017V9C13.017 7.34315 14.3601 6 16.017 6H19.017C20.6738 6 22.017 7.34315 22.017 9V15C22.017 17.7614 19.7784 20 17.017 20H14.017V21ZM2.01697 21L2.01697 18C2.01697 16.8954 2.9124 16 4.01697 16H7.01697C7.56925 16 8.01697 15.5523 8.01697 15V9C8.01697 8.44772 7.56925 8 7.01697 8H4.01697C3.46468 8 3.01697 8.44772 3.01697 9V12H1.01697V9C1.01697 7.34315 2.36012 6 4.01697 6H7.01697C8.67383 6 10.017 7.34315 10.017 9V15C10.017 17.7614 7.7784 20 5.01697 20H2.01697V21Z"/>
                    </svg>
                </div>

                <blockquote class="testimonial-card__text">
                    "<?php echo $review['texto']; ?>"
                </blockquote>

                <footer class="testimonial-card__author">
                    <strong><?php echo $review['autor']; ?></strong>
                </footer>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>