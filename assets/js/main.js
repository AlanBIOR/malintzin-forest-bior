import { initNavigation } from './modules/nav.js';
import { initCarousel } from './modules/carousel.js';
import { initToursFilter } from './modules/tours.js';
import { initGallery } from './modules/gallery.js'; 

document.addEventListener('DOMContentLoaded', () => {
    initNavigation();
    initCarousel();
    initToursFilter(); 
    initGallery(); 
});