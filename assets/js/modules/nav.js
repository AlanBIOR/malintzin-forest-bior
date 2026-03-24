export const initNavigation = () => {
    const navMenu = document.getElementById('nav-menu'),
          navToggle = document.getElementById('nav-toggle'),
          navLinks = document.querySelectorAll('.nav__link'),
          nav = document.querySelector('.nav'); // Seleccionamos la barra completa

    /* === 1. MOSTRAR / OCULTAR MENÚ (Móvil) === */
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('show-menu');
            navToggle.classList.toggle('is-active'); 
        });
    }

    /* === 2. CERRAR MENÚ AL HACER CLICK (Móvil) === */
    const linkAction = () => {
        if (navMenu) navMenu.classList.remove('show-menu');
        if (navToggle) navToggle.classList.remove('is-active');
    };

    navLinks.forEach(n => n.addEventListener('click', linkAction));

    /* === 3. CAMBIAR FONDO DEL NAV AL HACER SCROLL === */
    // Esta función añade la clase .scrolled que definimos en SCSS
    const scrollHeader = () => {
        // Si el scroll baja más de 50px de altura
        if (window.scrollY >= 50) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    };
    window.addEventListener('scroll', scrollHeader);

    /* === 4. SCROLL SPY (Iluminar sección actual) === */
    const sections = document.querySelectorAll('section[id], header[id]');
    
    if (sections.length > 0) {
        const scrollSpy = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Quitamos active de todos los links
                    navLinks.forEach(link => link.classList.remove('active'));
                    
                    // Buscamos el link que coincida con el ID de la sección visible
                    const activeLink = document.querySelector(`.nav__list a[href="#${entry.target.id}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');
                    }
                }
            });
        }, { 
            // rootMargin ajustado para que el cambio de link active sea natural
            rootMargin: '-30% 0px -60% 0px' 
        });

        sections.forEach(section => scrollSpy.observe(section));
    }
};