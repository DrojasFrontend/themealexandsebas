<?php
function enqueue_scripts() {
    // Enqueue CSS
    $mainFilePath = glob( get_template_directory() . '/css/build/main.min.*.css' );
    $mainFileURI = get_template_directory_uri() . '/css/build/' . basename($mainFilePath[0]);
    wp_enqueue_style( 'main_css', $mainFileURI );

    // Enqueue Main JS
    $mainJsFilePath = glob( get_template_directory() . '/js/build/main.min.*.js' );
    $mainJsFileURI = get_template_directory_uri() . '/js/build/' . basename($mainJsFilePath[0]);
    wp_enqueue_script( 'main_js', $mainJsFileURI, array('jquery'), null, true ); // Note el true aquí

    // Localize Script
    wp_localize_script('main_js', 'lm_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    ));

    // Variables para los modales de acceso - usar variables globales del header
    global $usuario_autenticado, $idioma_seleccionado, $error_password;
    
    wp_localize_script('main_js', 'modalData', array(
        'usuarioAutenticado' => isset($usuario_autenticado) ? $usuario_autenticado : false,
        'idiomaSeleccionado' => isset($idioma_seleccionado) ? $idioma_seleccionado : false,
        'errorPassword' => isset($error_password) ? $error_password : false,
    ));
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
?>

