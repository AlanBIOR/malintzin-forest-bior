import { initNavigation } from './modules/nav.js';
import { initCarousel } from './modules/carousel.js';
import { initToursFilter } from './modules/tours.js';

document.addEventListener('DOMContentLoaded', () => {
    initNavigation();
    initCarousel();
    initToursFilter(); 
});