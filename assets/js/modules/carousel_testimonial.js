export const initTestimonialCarousel = () => {
    const track = document.querySelector('.testimonials__grid');
    
    if (!track) return;

    const cards = Array.from(track.children);
    if (cards.length === 0) return;

    cards.forEach(card => {
        const clone = card.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        track.appendChild(clone);
    });

    let animationId;
    let scrollSpeed = 0.5;
    let isPaused = false;

    const scroll = () => {
        if (!isPaused) {
            track.scrollLeft += scrollSpeed;

            if (track.scrollLeft >= track.scrollWidth / 2) {
                track.scrollLeft = 0; 
            }
        }
        animationId = requestAnimationFrame(scroll);
    };

    track.addEventListener('mouseenter', () => isPaused = true);
    track.addEventListener('mouseleave', () => isPaused = false);
    track.addEventListener('touchstart', () => isPaused = true, { passive: true });
    track.addEventListener('touchend', () => isPaused = false);

    animationId = requestAnimationFrame(scroll);
};