<?php 
    global $TRP_LANGUAGE;
    $trp = TRP_Translate_Press::get_trp_instance();
    $url_converter = $trp->get_component('url_converter');

    $idiomas = array(
        'es_CO' => array('nombre' => 'Español', 'bandera' => get_template_directory_uri() . '/images/co.svg'),
        'en_US' => array('nombre' => 'English', 'bandera' => get_template_directory_uri() . '/images/en.svg')
    );
?>

<div class="d-inline-block pt-1 ps-lg-4">
    <div class="w-auto d-flex flex-xl-column-reverse flex-row-reverse align-items-center gap-lg-2 gap-1 text-white fs-p-lg">
        <?php foreach ($idiomas as $codigo => $datos): ?>
            <?php if ($codigo === $TRP_LANGUAGE): ?>
                <span class="language language-active px-2 p-1 text-center">
                    <!-- <img src="<?php echo $datos['bandera']; ?>" alt="<?php echo $datos['nombre']; ?>" class="flag-icon me-1" width="30" height="20"> -->
                    <?php echo $datos['nombre']; ?>
                </span>
            <?php else: ?>
                
                <a class="language px-2 py-1 text-center" href="<?php echo $url_converter->get_url_for_language($codigo); ?>" class="language-inactive">
                    <!-- <img src="<?php echo $datos['bandera']; ?>" alt="<?php echo $datos['nombre']; ?>" class="flag-icon me-1" width="30" height="20"> -->
                    <?php echo $datos['nombre']; ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>