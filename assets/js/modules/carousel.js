export const initCarousel = () => {
    // Usamos nombres más claros, ya que ambos irán rotando sus roles
    const domVideo1 = document.getElementById('hero-video');
    const domVideo2 = document.getElementById('next-video');
    const dots = document.querySelectorAll('.hero__dots .dot');

    if (!domVideo1 || !domVideo2) return;

    const videoSources = [
        'assets/video/malintzin-clouds.mp4',
        'assets/video/forest-drone.mp4',
        'assets/video/hiking-trail.mp4'
    ];

    let currentIndex = 0;
    let isTransitioning = false;

    const updateDots = (index) => {
        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[index]) dots[index].classList.add('active');
    };

    const playNext = (targetIndex = null) => {
        if (isTransitioning) return;
        
        let nextIndex = targetIndex !== null ? targetIndex : (currentIndex + 1) % videoSources.length;
        if (nextIndex === currentIndex && targetIndex !== null) return;

        isTransitioning = true;
        
        // 1. Actualizamos el índice y UI de inmediato para evitar bugs de clics rápidos
        currentIndex = nextIndex;
        updateDots(currentIndex);

        // Identificamos roles basándonos en la clase active
        const activeVideo = domVideo1.classList.contains('active') ? domVideo1 : domVideo2;
        const hiddenVideo = domVideo1.classList.contains('active') ? domVideo2 : domVideo1;

        // 2. Cargamos el video "tras bambalinas"
        hiddenVideo.src = videoSources[nextIndex];
        hiddenVideo.load();

        // 3. Usamos 'canplay' y { once: true } para que se autodestruya el listener
        hiddenVideo.addEventListener('canplay', () => {
            hiddenVideo.play().then(() => {
                // 4. Superponemos
                hiddenVideo.style.zIndex = "3";
                activeVideo.style.zIndex = "2";
                
                hiddenVideo.classList.add('active');
                activeVideo.classList.remove('active');

                // Aseguramos que solo el video visible tenga la orden de avanzar al terminar
                activeVideo.onended = null;
                hiddenVideo.onended = () => playNext();

                // 5. Limpieza tras la transición del SCSS
                setTimeout(() => {
                    activeVideo.pause();
                    hiddenVideo.style.zIndex = "2";
                    activeVideo.style.zIndex = "1";
                    
                    isTransitioning = false;
                }, 1250); 
            }).catch(error => {
                isTransitioning = false;
                console.error("Error conmutando señal de video:", error);
            });
        }, { once: true });
    };

    // Inicialización (Llavazo inicial sin doble carga)
    // Asumimos que el HTML ya cargó el videoSources[0] en domVideo1
    domVideo1.classList.add('active');
    updateDots(0);
    
    // Arrancamos el ciclo
    domVideo1.onended = () => playNext();

    dots.forEach((dot, index) => {
        dot.addEventListener('click', (e) => {
            e.preventDefault(); 
            playNext(index);
        });
    });
};