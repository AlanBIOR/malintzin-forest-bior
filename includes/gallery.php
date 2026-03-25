<section id="galeria" class="gallery-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title"><?php echo __('gallery_title'); ?></h2>
            <p class="section-subtitle"><?php echo __('gallery_subtitle'); ?></p>
        </div>

        <div class="gallery-grid">
            <?php 
            // 1. Buscamos todas las imágenes en la carpeta 'gallery'
            $directorio = 'assets/img/gallery/';
            // Escanea buscando diferentes formatos
            $imagenes = glob($directorio . "*.{jpg,jpeg,png,webp}", GLOB_BRACE);

            // 2. Si encuentra imágenes, creamos el bucle (foreach)
            if ($imagenes) {
                // Ordenamos naturalmente para que gallery_2 vaya antes que gallery_10
                natsort($imagenes); 

                foreach ($imagenes as $indice => $imagen) {
                    // Creamos un texto alternativo genérico pero limpio
                    $alt_text = "Aventura Malintzin Forest - Foto " . ($indice + 1);
            ?>
                    <div class="gallery-item">
                        <img src="<?php echo $imagen; ?>" alt="<?php echo $alt_text; ?>">
                        <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    </div>
            <?php 
                }
            } else {
                // Mensaje por si la carpeta está vacía
                echo "<p style='color: white; text-align:center;'>Estamos preparando nuestras mejores fotos...</p>";
            }
            ?>
        </div>
        
        <div class="gallery-action text-center mt-4">
            <a href="https://www.facebook.com/share/18MuoAcnzy/" target="_blank" class="btn-outline-primary">
                <i class="fab fa-facebook-f"></i> <?php echo __('btn_see_more_ig'); ?>
            </a>
        </div>
        
        <div id="gallery-modal" class="gallery-lightbox">
            <span class="gallery-lightbox__close" aria-label="Cerrar">&times;</span>
            
            <button class="gallery-lightbox__arrow left" id="gallery-prev" aria-label="Anterior">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="gallery-lightbox__arrow right" id="gallery-next" aria-label="Siguiente">
                <i class="fas fa-chevron-right"></i>
            </button>

            <img class="gallery-lightbox__content" id="gallery-lightbox-img" src="" alt="Vista ampliada">
            <div class="gallery-lightbox__caption" id="gallery-lightbox-caption"></div>
        </div>

    </div>
</section>