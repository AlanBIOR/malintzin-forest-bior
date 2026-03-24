<div class="hexagon-container">
    <?php 
    $rutas = $texts[$lang]['rutas'];
    $ids = array_keys($rutas);
    
    // Definimos las filas: [cantidad de items]
    $filas = [3, 2, 1];
    $cursor = 0;

    foreach($filas as $num_items): ?>
        <div class="hexagon-row">
            <?php for($i = 0; $i < $num_items; $i++): 
                if(!isset($ids[$cursor])) break;
                $id = $ids[$cursor];
                $nombre = $rutas[$id];
                $imagen = $rutas_assets[$id]['img'];
                $cursor++;
            ?>
                <article class="hexagon-item">
                    <div class="hexagon-bg" style="background-image: url('assets/img/<?php echo $imagen; ?>')"></div>
                    <div class="hexagon-content">
                        <h3><?php echo $nombre; ?></h3>
                        <a href="tour-detalle.php?id=<?php echo $id; ?>" class="btn-hex">
                            <?php echo __('btn_hex_action'); ?>
                        </a>
                    </div>
                </article>
            <?php endfor; ?>
        </div>
    <?php endforeach; ?>
</div>