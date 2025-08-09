import { Modal } from 'bootstrap';

export function initModals() {
    // Obtener variables del PHP (se agregan via wp_localize_script)
    const usuarioAutenticado = window.modalData?.usuarioAutenticado || false;
    let idiomaSeleccionado = window.modalData?.idiomaSeleccionado || false;
    const errorPassword = window.modalData?.errorPassword || false;
    
    // Verificar también localStorage como respaldo
    const idiomaEnLocalStorage = localStorage.getItem('idioma_seleccionado') === 'true';
    if (idiomaEnLocalStorage && !idiomaSeleccionado) {
        idiomaSeleccionado = true;
        // Sincronizar con PHP sesión de forma asíncrona
        fetch(window.location.href, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'idioma_seleccionado=1'
        }).catch(() => {});
    }
    
    // Debug: verificar estados
    console.log('Estados modales:', {
        usuarioAutenticado,
        idiomaSeleccionado,
        idiomaEnLocalStorage,
        errorPassword,
        modalData: window.modalData
    });
    
    // Referencias a los modales
    const modalIdiomaElement = document.getElementById('modalIdioma');
    const modalPasswordElement = document.getElementById('modalPassword');
    
    let modalIdioma, modalPassword;
    
    // Inicializar modales si existen
    if (modalIdiomaElement) {
        modalIdioma = new Modal(modalIdiomaElement);
    }
    if (modalPasswordElement) {
        modalPassword = new Modal(modalPasswordElement);
    }
    
    // Función para mostrar modal de idioma
    function mostrarModalIdioma() {
        if (modalPassword) modalPassword.hide();
        if (modalIdioma) {
            modalIdioma.show();
            
            // Manejar selección de idioma - dejar que TranslatePress maneje el cambio
            document.querySelectorAll('.idioma-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    // Marcar idioma como seleccionado en localStorage antes de que TranslatePress redirija
                    localStorage.setItem('idioma_seleccionado', 'true');
                    
                    // También enviar a sesión PHP de forma asíncrona
                    fetch(window.location.href, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'idioma_seleccionado=1'
                    }).catch(() => {
                        // Si falla el fetch, localStorage se mantiene como respaldo
                    });
                    
                    // El enlace redirigirá normalmente con TranslatePress
                });
            });
        }
    }
    
    // Función para mostrar modal de contraseña
    function mostrarModalPassword() {
        if (modalIdioma) modalIdioma.hide();
        if (modalPassword) {
            modalPassword.show();
            
            // Manejar envío de formulario de contraseña
            const formPassword = document.getElementById('formPassword');
            if (formPassword) {
                formPassword.addEventListener('submit', function(e) {
                    const btnAcceder = document.getElementById('btnAcceder');
                    const btnText = btnAcceder.querySelector('.btn-text');
                    const spinner = btnAcceder.querySelector('.spinner-border');
                    
                    // Mostrar loading
                    btnText.textContent = 'Verificando...';
                    spinner.classList.remove('d-none');
                    btnAcceder.disabled = true;
                });
            }
            
            // Botón para cambiar idioma
            const btnCambiarIdioma = document.getElementById('btnCambiarIdioma');
            if (btnCambiarIdioma) {
                btnCambiarIdioma.addEventListener('click', function() {
                    mostrarModalIdioma();
                });
            }
        }
    }
    
    // Manejar cuando se cierra el modal de contraseña (click fuera o ESC)
    if (modalPasswordElement) {
        modalPasswordElement.addEventListener('hidden.bs.modal', function () {
            // Si se cierra el modal de contraseña, mostrar el de idioma
            if (!usuarioAutenticado) {
                setTimeout(() => {
                    mostrarModalIdioma();
                }, 300); // Pequeño delay para la transición
            }
        });
    }
    
    // Lógica inicial para mostrar modales
    if (!idiomaSeleccionado) {
        mostrarModalIdioma();
    } 
    else if (!usuarioAutenticado || errorPassword) {
        mostrarModalPassword();
    }
}
