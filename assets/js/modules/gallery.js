/**
 * Módulo para controlar el Lightbox de la Galería de Imágenes
 */
export const initGallery = () => {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightbox = document.getElementById('gallery-modal');
    
    // Si no estamos en una página con galería, detenemos la ejecución
    if (!lightbox || galleryItems.length === 0) return;

    const lightboxImg = document.getElementById('gallery-lightbox-img');
    const closeBtn = document.querySelector('.gallery-lightbox__close');

    // 1. ABRIR EL LIGHTBOX
    galleryItems.forEach(item => {
        item.addEventListener('click', () => {
            const img = item.querySelector('img');
            if (img) {
                lightboxImg.src = img.src;
                lightboxImg.alt = img.alt;
                lightbox.classList.add('active');
                
                // Evitamos que el usuario haga scroll de fondo
                document.body.style.overflow = 'hidden'; 
            }
        });
    });

    // 2. FUNCIÓN PARA CERRAR EL LIGHTBOX
    const closeLightbox = () => {
        lightbox.classList.remove('active');
        document.body.style.overflow = ''; // Devolvemos el scroll
        
        // Limpiamos el 'src' después de la animación de salida (300ms)
        setTimeout(() => {
            lightboxImg.src = '';
        }, 300);
    };

    // 3. EVENTOS DE CIERRE
    
    // Clic en el botón "X"
    if (closeBtn) {
        closeBtn.addEventListener('click', closeLightbox);
    }

    // Clic en el fondo oscuro
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Presionar la tecla Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && lightbox.classList.contains('active')) {
            closeLightbox();
        }
    });
};