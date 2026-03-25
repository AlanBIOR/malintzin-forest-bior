import { initNavigation } from './modules/nav.js';
import { initCarousel } from './modules/carousel.js';
import { initToursFilter } from './modules/tours.js';
import { initGallery } from './modules/gallery.js';
import { initTestimonialCarousel } from './modules/carousel_testimonial.js';
import { initContactForm } from './modules/contact.js'; // <-- Importar

document.addEventListener('DOMContentLoaded', () => {
    initNavigation();
    initCarousel();
    initToursFilter(); 
    initGallery();
    initTestimonialCarousel();
    initContactForm(); // <-- Inicializar
});