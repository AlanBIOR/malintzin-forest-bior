<div class="hexagon-container">
    <?php 
    // 1. Definimos las categorías para que el bucle sepa qué buscar
    $categorias = ['malinche', 'rutas-nevadas', 'mar-nubes'];
    
    foreach($categorias as $cat_slug): ?>
        <div class="category-group" data-group="<?php echo $cat_slug; ?>" style="display: <?php echo ($cat_slug === 'malinche' ? 'block' : 'none'); ?>">
            <?php 
            // Filtrar assets de esta categoría
            $items_cat = array_filter($rutas_assets, function($item) use ($cat_slug) {
                return $item['cat'] === $cat_slug;
            });
            $ids_cat = array_keys($items_cat);
            
            $filas = [3, 2, 1];
            $cursor = 0;

            foreach($filas as $num_items): ?>
                <div class="hexagon-row">
                    <?php for($i = 0; $i < $num_items; $i++): 
                        if(!isset($ids_cat[$cursor])) break;
                        $id = $ids_cat[$cursor];
                        $data = $items_cat[$id];
                        
                        // 2. OBTENEMOS TRADUCCIONES DINÁMICAS (Usando 'desc' para que coincida con languages.php)
                        $nombre = $texts[$lang]['rutas'][$id] ?? $id;
                        $desc_modal = $texts[$lang]['desc'][$id] ?? ''; 
                        
                        $cursor++;
                    ?>
                        <article class="hexagon-item">
                            <div class="hexagon-bg" style="background-image: url('assets/img/<?php echo $data['img']; ?>')"></div>
                            <div class="hexagon-content">
                                <h3><?php echo $nombre; ?></h3>
                                <button type="button" class="btn-hex open-tour-modal" 
                                    data-name="<?php echo $nombre; ?>" 
                                    data-desc="<?php echo $desc_modal; ?>" 
                                    data-img="assets/img/<?php echo $data['img']; ?>">
                                    <?php echo __('btn_hex_action'); ?>
                                </button>
                            </div>
                        </article>
                    <?php endfor; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>