/**
 * BIOR Web Studio - Tours Module
 * Maneja el filtrado de categorías, la inyección dinámica de datos en el Modal 
 * y la generación de enlaces personalizados para WhatsApp.
 */

export const initToursFilter = () => {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const groups = document.querySelectorAll('.category-group');
    const tourTitle = document.getElementById('tour-title');
    const modal = document.getElementById('tour-modal');

    if (!filterBtns.length || !groups.length) return;

    // --- 1. LÓGICA DE FILTRADO ---
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

            // UI: Botón Activo
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Título dinámico
            if(tourTitle) {
                tourTitle.innerText = btn.innerText;
            }

            // Intercambio de grupos
            groups.forEach(group => {
                group.style.display = (group.getAttribute('data-group') === filter) ? 'block' : 'none';
            });
        });
    });

    // --- 2. LÓGICA DEL MODAL DINÁMICO ---
    document.addEventListener('click', (e) => {
        const openBtn = e.target.closest('.open-tour-modal');
        
        if (openBtn) {
            if (!modal) return;

            const tourName = openBtn.dataset.name;

            // Inyectamos los datos básicos
            document.getElementById('modal-title').innerText = tourName;
            document.getElementById('modal-desc').innerText = openBtn.dataset.desc;
            document.getElementById('modal-img').src = openBtn.dataset.img;
            
            // Inyectamos las estadísticas dinámicas
            document.getElementById('modal-stat-alt').innerText = openBtn.dataset.alt;
            document.getElementById('modal-stat-diff').innerText = openBtn.dataset.diff;
            document.getElementById('modal-stat-dur').innerText = openBtn.dataset.dur;
            document.getElementById('modal-stat-meet').innerText = openBtn.dataset.meet;
            
            // --- NUEVO: Lógica de WhatsApp Dinámico ---
            const btnReserve = modal.querySelector('.btn-discover');
            if (btnReserve) {
                const waPhone = '522462236424'; // Teléfono oficial de reservas
                // Armamos el mensaje usando el nombre del tour seleccionado
                const waMessage = `¡Hola! Vengo de su página web y me gustaría recibir más información para reservar el tour: *${tourName}*.`;
                
                // Asignamos el href codificando el mensaje para que respete espacios y caracteres especiales
                btnReserve.href = `https://wa.me/${waPhone}?text=${encodeURIComponent(waMessage)}`;
            }

            // Animación de entrada
            modal.classList.add('is-visible');
            document.body.classList.add('modal-open'); // Clase para bloquear scroll en SCSS
        }

        // --- 3. LÓGICA DE CIERRE ---
        // Cerramos si hace clic en la X, en el fondo oscuro (overlay) o presiona Escape
        const isCloseBtn = e.target.closest('.close-modal');
        const isOverlay = e.target === modal;

        if (isCloseBtn || isOverlay) {
            modal.classList.remove('is-visible');
            document.body.classList.remove('modal-open');
        }
    });

    // Soporte para cerrar con tecla ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('is-visible')) {
            modal.classList.remove('is-visible');
            document.body.classList.remove('modal-open');
        }
    });
};