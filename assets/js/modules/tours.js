export const initToursFilter = () => {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const groups = document.querySelectorAll('.category-group');
    const tourTitle = document.getElementById('tour-title');

    if (!filterBtns.length || !groups.length) return;

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

            // 1. UI: Botón Activo
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // 2. Título dinámico: Toma el texto del botón presionado
            if(tourTitle) {
                tourTitle.innerText = btn.innerText;
            }

            // 3. Filtrado: Mostrar el grupo que coincide con el data-filter
            groups.forEach(group => {
                if (group.getAttribute('data-group') === filter) {
                    group.style.display = 'block';
                } else {
                    group.style.display = 'none';
                }
            });
        });
    });

    // Lógica del Modal (Popup)
    document.addEventListener('click', (e) => {
        // Buscamos si el clic fue en el botón o dentro del botón (por si hay un span)
        const openBtn = e.target.closest('.open-tour-modal');
        
        if (openBtn) {
            const modal = document.getElementById('tour-modal');
            if (!modal) return;

            // Llenamos el modal con los dataset del botón
            document.getElementById('modal-title').innerText = openBtn.dataset.name;
            document.getElementById('modal-desc').innerText = openBtn.dataset.desc;
            document.getElementById('modal-img').src = openBtn.dataset.img;
            
            modal.classList.add('is-visible');
            document.body.style.overflow = 'hidden';
        }

        // Cerrar modal: clic en la X o en el fondo oscuro
        if (e.target.classList.contains('close-modal') || e.target.id === 'tour-modal') {
            const modal = document.getElementById('tour-modal');
            modal.classList.remove('is-visible');
            document.body.style.overflow = 'auto';
        }
    });
};