export const initCarousel = () => {
    const videoCurrent = document.getElementById('hero-video');
    const videoNext = document.getElementById('next-video');
    const dots = document.querySelectorAll('.hero__dots .dot');

    if (!videoCurrent || !videoNext) return;

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
        
        // Manejo de dirección y loop (del 3 al 1 sin errores)
        let nextIndex;
        if (targetIndex !== null) {
            nextIndex = targetIndex;
        } else {
            nextIndex = (currentIndex + 1) % videoSources.length;
        }

        if (nextIndex === currentIndex && targetIndex !== null) return;

        isTransitioning = true;
        
        // Identificamos roles
        const hiddenVideo = videoCurrent.classList.contains('active') ? videoNext : videoCurrent;
        const activeVideo = videoCurrent.classList.contains('active') ? videoCurrent : videoNext;

        // 1. Cargamos el video "tras bambalinas"
        hiddenVideo.src = videoSources[nextIndex];
        hiddenVideo.load();

        hiddenVideo.onloadeddata = () => {
            // 2. Le damos play mientras aún es invisible (opacity 0)
            hiddenVideo.play().then(() => {
                // 3. Superponemos: El nuevo entra a nivel 3, el viejo se queda en 2
                hiddenVideo.style.zIndex = "3";
                activeVideo.style.zIndex = "2";
                
                hiddenVideo.classList.add('active');
                activeVideo.classList.remove('active');
                updateDots(nextIndex);

                // 4. Limpieza tras la transición (1.2s del SCSS)
                setTimeout(() => {
                    activeVideo.pause();
                    // Reseteamos z-index para la próxima conmutación
                    hiddenVideo.style.zIndex = "2";
                    activeVideo.style.zIndex = "1";
                    
                    currentIndex = nextIndex;
                    isTransitioning = false;
                    
                    hiddenVideo.onended = () => playNext();
                }, 1250); 
            }).catch(error => {
                isTransitioning = false;
                console.error("Error conmutando señal de video:", error);
            });
        };
    };

    // Inicialización (Llavazo inicial)
    videoCurrent.src = videoSources[0];
    videoCurrent.load();
    videoCurrent.play().then(() => {
        videoCurrent.classList.add('active');
        updateDots(0);
        videoCurrent.onended = () => playNext();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', (e) => {
            e.preventDefault(); // Evitamos que el hash #inicio mueva el scroll
            playNext(index);
        });
    });
};