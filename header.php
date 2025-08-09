<?php
// Iniciar sesión al principio, antes de cualquier HTML
if (!session_id()) {
    session_start();
}

// Verificar si el usuario ya está autenticado - variables globales para uso en JS
global $usuario_autenticado, $idioma_seleccionado, $error_password;
$usuario_autenticado = isset($_SESSION['usuario_autenticado']) && $_SESSION['usuario_autenticado'] === true;
$idioma_seleccionado = isset($_SESSION['idioma_seleccionado']) && $_SESSION['idioma_seleccionado'] === true;
$error_password = false;

// Procesar formulario de contraseña
if (isset($_POST['password_access'])) {
    $password_correcta = 'Cartagena2026'; // Cambia esta contraseña
    
    if ($_POST['password_access'] === $password_correcta) {
        $_SESSION['usuario_autenticado'] = true;
        $usuario_autenticado = true;
        // Limpiar cualquier error previo
        unset($_SESSION['error_password']);
    } else {
        $error_password = 'Contraseña incorrecta';
        $_SESSION['error_password'] = $error_password;
    }
} else {
    // Verificar si hay error previo en sesión
    $error_password = isset($_SESSION['error_password']) ? $_SESSION['error_password'] : false;
}

// Procesar selección de idioma
if (isset($_POST['idioma_seleccionado'])) {
    $_SESSION['idioma_seleccionado'] = true;
    $idioma_seleccionado = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=get_the_title()?></title>

  <!-- meta tag header includes -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
  <meta name="robots" content="index, follow">

  <!-- compatability header includes -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $titulo_principal; ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://use.typekit.net/viz6yyn.css">
  <!-- Beloved Sans -->
  <link rel="stylesheet" href="https://use.typekit.net/htx8tqg.css">

  <style>
    body {
      font-family: "beloved-sans", sans-serif !important;
      font-weight: 700;
      font-style: normal;
    }
  </style>
  
  <!-- wordpress header includes -->
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<!-- Modal de Selección de Idioma -->
<div class="modal fade" id="modalIdioma" tabindex="-1" aria-labelledby="modalIdiomaLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="customSectionBox modal-content p-xl-5 p-3 rounded-4">
            <div class="modal-header border-0">
                <h2 class="font-titulo fs-xl-2 fs-4 text-primary w-100 text-center" id="modalIdiomaLabel">Language / Idioma</h5>
            </div>
            <div class="modal-body text-center">
              <div class="text-center mb-4">
                <p class="fs-xl-5 text-secondary fw-bold" style="line-height: 1.4">Select your preferred language</p>
                <p class="fs-xl-5 text-secondary fw-bold" style="line-height: 1.4">Selecciona el idioma</p>
                <p class="fs-xl-5 text-secondary fw-bold" style="line-height: 1.4">de tu preferencia</p>
              </div>
                <div class="d-flex justify-content-center gap-4">
                        <?php 
                            global $TRP_LANGUAGE;
                            $trp = TRP_Translate_Press::get_trp_instance();
                            $url_converter = $trp->get_component('url_converter');

                            $idiomas = array(
                              'en_US' => array('nombre' => 'English', 'bandera' => get_template_directory_uri() . '/images/en.svg'),
                              'es_CO' => array('nombre' => 'Español', 'bandera' => get_template_directory_uri() . '/images/co.svg')
                            );
                            
                            foreach ($idiomas as $codigo => $datos): 
                        ?>
                            <a href="<?php echo $url_converter->get_url_for_language($codigo); ?>" 
                               class="btn btn-primary idioma-btn"
                               data-idioma="<?php echo $codigo; ?>">
                                <span class="fw-bold"><?php echo $datos['nombre']; ?></span>
                            </a>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Contraseña -->
<div class="modal fade" id="modalPassword" tabindex="-1" aria-labelledby="modalPasswordLabel" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="customSectionBox modal-content px-xl-5 p-3 rounded-4">
            <div class="modal-header border-0">
                <h2 class="font-titulo fs-xl-2 fs-4 text-primary w-100 text-center" id="modalPasswordLabel">Welcome</h2>
            </div>
            <div class="modal-body py-4">
                <form method="POST" id="formPassword">
                    <div class="mb-3">
                        <label for="password_access" class="fs-xl-5 text-secondary fw-bold text-center d-block mb-3" style="line-height: 1.2">Enter here the password we send you <br class="d-none d-xl-block"> to access the website:</label>
                        <div class="row">
                          <div class="col-12 col-xl-5 mx-auto">
                            <input type="password" 
                                   class="form-control bg-white rounded-0 border-0 mb-3" 
                                   id="password_access" 
                                   name="password_access" 
                                   required 
                                   autocomplete="off"
                                   placeholder="PASSWORD">
                            <?php if (isset($error_password)): ?>
                                <div class="text-danger mt-2"><?php echo $error_password; ?></div>
                            <?php endif; ?>
                          </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-4">
                        <button type="submit" class="btn btn-primary border-0" id="btnAcceder">
                            <span class="btn-text">ENTER</span>
                            <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-primary border-0" id="btnCambiarIdioma">
                          CHANGE LANGUAGE
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



  <!-- Header -->
  <header class="position-fixed top-0 left-0 w-100 bg-primary">
    <div class="">
      <div class="container-fluid gx-lg0 py-xl-0 py-1">
        <div class="row gx-0 justify-content-between">
          <div class="col-8 d-flex align-items-center d-xl-none ">
            <div class="text-center">
              <a class="d-block" href="/">
                <h2 class="font-titulo fs-3 text-white">
                  <?php if(wp_is_mobile()): ?>
                    <img width="40" src="<?php echo THEME_IMG; ?>logo.svg" alt="" class="img-fluid d-block">
                  <?php else: ?>
                    <img src="<?php echo THEME_IMG; ?>logo.svg" alt="" class="img-fluid d-block">
                  <?php endif; ?>
                </h2>
              </a>
            </div>
          </div>
          <div class="col-12 d-none d-xl-block">
            <ul class="customHeader d-none d-xl-grid gap-5 py-xl-2 py-1">
              <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 fw-bold text-white letter-spacing-xl-4" href="/#wedding">WEDDING</a></li>
              <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 fw-bold text-white letter-spacing-xl-4" href="/#events">EVENTS</a></li>
              <li class="d-flex justify-content-center align-items-center"><a class="font-titulo fs-3 text-white" href="/">
                <img src="<?php echo THEME_IMG; ?>logo.svg" alt="" class="img-fluid d-block">
              </a></li>
              <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 fw-bold text-white letter-spacing-xl-4" href="/#cartagena">CARTAGENA</a></li>
              <li class="d-flex justify-content-center align-items-center">
                <a class="fs-xl-5 fw-bold text-white letter-spacing-xl-4" href="/#rsvp">R.S.V.P.</a>
              </li>
            </ul>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center d-xl-none gap-2">
            <div class="">
            </div>
            <button type="button" class="pt-1 border-0 bg-transparent p-0 text-white" style="width: 30px" data-toggle-menu>
              <?php get_template_part('template-parts/components/icons/icon-menu'); ?>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Fin Header -->

  <section class="customHeaderMobile position-fixed top-0 right-0 w-100 h-100 pt-3 bg-primary" data-menu-mobile>
    <div class="container-fluid h-100">
      <div class="row h-100">
        <button class="position-absolute top-0 end-0 mt-2 pe-2 p-0 border-0 bg-transparent" style="width: 40px" data-close-menu>
          <?php get_template_part('template-parts/components/icons/icon-close'); ?>
        </button>
        <ul class="customHeader d-flex flex-column justify-content-center align-items-center gap-5 py-xl-2 py-1">
          <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 fw-bold text-white letter-spacing-xl-4" href="/#wedding">WEDDING</a></li>
          <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 fw-bold text-white letter-spacing-xl-4" href="/#events">EVENTS</a></li>
          <li class="d-flex justify-content-center align-items-center"><a class="font-titulo fs-xl-3-small fs-3 text-white" href="/">
            <img src="<?php echo THEME_IMG; ?>logo.svg" alt="" class="img-fluid d-block">
          </a></li>
          <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 fw-bold text-white letter-spacing-xl-4" href="/#cartagena">CARTAGENA</a></li>
          <li class="d-flex justify-content-center align-items-center">
            <a class="fs-xl-5 fw-bold text-white letter-spacing-xl-4" href="/#rsvp">R.S.V.P.</a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Whatsapp -->
  <?php mostrar_boton_whatsapp(); ?>
  <!-- Fin Whatsapp -->