/**
 * Módulo de Galería (Lightbox Slider con AutoPlay)
 * BIOR Web Studio
 */
export const initGallery = () => {
    // Tomamos TODAS las imágenes (incluso las ocultas por el CSS nth-child)
    const galleryItems = document.querySelectorAll('.gallery-item img');
    const lightbox = document.getElementById('gallery-modal');
    
    if (!lightbox || galleryItems.length === 0) return;

    const lightboxImg = document.getElementById('gallery-lightbox-img');
    const lightboxCaption = document.getElementById('gallery-lightbox-caption');
    const closeBtn = document.querySelector('.gallery-lightbox__close');
    const prevBtn = document.getElementById('gallery-prev');
    const nextBtn = document.getElementById('gallery-next');

    let currentIndex = 0;
    let autoPlayInterval;
    const autoPlayTime = 3000; // 3 segundos por foto

    // Función para actualizar la vista modal con transición suave
    const updateModal = (index) => {
        // Hacemos invisible la imagen actual
        lightboxImg.style.opacity = '0'; 
        if(lightboxCaption) lightboxCaption.style.opacity = '0';

        // Esperamos 300ms a que se desvanezca y luego cambiamos la fuente
        setTimeout(() => {
            lightboxImg.src = galleryItems[index].src;
            lightboxImg.alt = galleryItems[index].alt;
            if(lightboxCaption) lightboxCaption.textContent = galleryItems[index].alt;
            
            // Volvemos a hacerla visible
            lightboxImg.style.opacity = '1'; 
            if(lightboxCaption) lightboxCaption.style.opacity = '0.9';
        }, 300);

        currentIndex = index;
    };

    // --- FUNCIONES DE NAVEGACIÓN ---
    const nextImage = () => {
        let newIndex = (currentIndex + 1) % galleryItems.length;
        updateModal(newIndex);
    };

    const prevImage = () => {
        let newIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
        updateModal(newIndex);
    };

    // --- FUNCIONES DE AUTO-PLAY ---
    const startAutoPlay = () => {
        clearInterval(autoPlayInterval);
        autoPlayInterval = setInterval(nextImage, autoPlayTime);
    };

    const stopAutoPlay = () => {
        clearInterval(autoPlayInterval);
    };

    // 1. ABRIR EL LIGHTBOX AL HACER CLIC EN LA CUADRÍCULA
    galleryItems.forEach((img, index) => {
        img.closest('.gallery-item').addEventListener('click', () => {
            updateModal(index);
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden'; // Bloquea el scroll del fondo
            startAutoPlay(); // Inicia la rotación automática
        });
    });

    // 2. EVENTOS DE LAS FLECHAS
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextImage();
            startAutoPlay(); // Reinicia el timer para que no salte de golpe
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevImage();
            startAutoPlay();
        });
    }

    // 3. EVENTOS DE CIERRE
    const closeLightbox = () => {
        lightbox.classList.remove('active');
        document.body.style.overflow = ''; // Regresa el scroll
        stopAutoPlay();
        // Limpiamos el source después de que se oculta para no dejar "fantasmas"
        setTimeout(() => { lightboxImg.src = ''; }, 300);
    };

    if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
    
    // Cerrar si hace clic fuera de la foto
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) closeLightbox();
    });

    // 4. CONTROL POR TECLADO (Accesibilidad)
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') { nextImage(); startAutoPlay(); }
        if (e.key === 'ArrowLeft') { prevImage(); startAutoPlay(); }
    });

    // 5. PAUSAR SI EL USUARIO PASA EL MOUSE SOBRE LA IMAGEN
    lightboxImg.addEventListener('mouseenter', stopAutoPlay);
    lightboxImg.addEventListener('mouseleave', startAutoPlay);
};