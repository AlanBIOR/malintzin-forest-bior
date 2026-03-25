<section id="galeria" class="gallery-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title"><?php echo __('gallery_title'); ?></h2>
            <p class="section-subtitle"><?php echo __('gallery_subtitle'); ?></p>
        </div>

        <div class="swiper gallery-slider">
            <div class="swiper-wrapper">
                <?php 
                $directorio = 'assets/img/gallery/';
                // Lee PNG, JPG, JPEG, WEBP
                $imagenes = glob($directorio . "*.{jpg,jpeg,png,webp}", GLOB_BRACE);

                // === NUEVO: Frases emocionales para conectar con los clientes ===
                $frases_inspiradoras = [
                    "Momentos Inolvidables",
                    "Nuestra Gran Familia",
                    "Conectando con la Montaña",
                    "Superando Límites Juntos",
                    "Gracias por la Confianza",
                    "El Valor de Explorar",
                    "Espíritu Aventurero",
                    "Pasión por las Alturas",
                    "Respirando Libertad",
                    "Vistas que Inspiran",
                    "Abrazando la Naturaleza",
                    "Juntos en la Cima"
                ];

                if ($imagenes) {
                    natsort($imagenes); 
                    $imagenes = array_values($imagenes); 

                    $total_fotos = count($imagenes);
                    $total_formateado = str_pad($total_fotos, 2, '0', STR_PAD_LEFT);

                    foreach ($imagenes as $indice => $imagen) {
                        $numero_foto = $indice + 1;
                        $num_formateado = str_pad($numero_foto, 2, '0', STR_PAD_LEFT); 
                        
                        // Selecciona una frase de la lista. 
                        // Si hay más fotos que frases, vuelve a empezar la lista mágicamente.
                        $frase_actual = $frases_inspiradoras[$indice % count($frases_inspiradoras)];
                ?>
                        <div class="swiper-slide gallery-slide">
                            <img src="<?php echo $imagen; ?>" loading="lazy" alt="<?php echo $frase_actual; ?> - Malintzin Forest">
                            
                            <div class="slide-info">
                                <h3><?php echo $frase_actual; ?></h3>
                                <p>Malintzin Forest &bull; <?php echo $num_formateado; ?> / <?php echo $total_formateado; ?></p>
                            </div>
                        </div>
                <?php 
                    }
                } else {
                    echo "<p style='color: white; text-align:center;'>Estamos preparando nuestras mejores fotos...</p>";
                }
                ?>
            </div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        
        <div class="gallery-action text-center mt-4" style="margin-top: 4rem;">
            <a href="https://www.facebook.com/share/18MuoAcnzy/" target="_blank" class="btn btn--outline-accent">
                <i class="fab fa-facebook-f"></i> <?php echo __('btn_see_more_ig'); ?>
            </a>
        </div>
    </div>
</section>