/**
 * Módulo de Galería (3D Coverflow con Swiper.js)
 * BIOR Web Studio
 */
export const initGallery = () => {
    const sliderContainer = document.querySelector('.gallery-slider');
    if (typeof Swiper === 'undefined' || !sliderContainer) return;

    const swiper = new Swiper('.gallery-slider', {
        effect: 'coverflow',
        grabCursor: true, 
        centeredSlides: true,
        slidesPerView: 'auto', 
        loop: true, 
        speed: 800, // <--- AQUÍ ESTÁ LA MAGIA: Movimiento cinemático
        coverflowEffect: {
            rotate: 0, 
            stretch: -30, // Acerca un poco más las laterales para que el cambio sea suave
            depth: 300, // Les da más profundidad 3D
            modifier: 1,
            slideShadows: true, 
        },
        autoplay: {
            delay: 4000, // Damos 4 segundos para que el usuario lea "Expedición 01"
            disableOnInteraction: false, 
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: false, 
    });
};