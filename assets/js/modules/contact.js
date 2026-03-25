/**
 * Módulo para procesar el Formulario de Contacto vía Fetch (AJAX)
 * BIOR Web Studio
 */
export const initContactForm = () => {
    const form = document.querySelector('.bior-form');
    if (!form) return;

    // Buscamos o creamos un contenedor para los mensajes
    let messageBox = document.getElementById('form-messages');
    if (!messageBox) {
        messageBox = document.createElement('div');
        messageBox.id = 'form-messages';
        messageBox.style.marginBottom = '1.5rem';
        messageBox.style.padding = '1rem';
        messageBox.style.borderRadius = '8px';
        messageBox.style.textAlign = 'center';
        messageBox.style.display = 'none'; // Oculto por defecto
        form.parentNode.insertBefore(messageBox, form); // Lo insertamos antes del form
    }

    form.addEventListener('submit', async (e) => {
        e.preventDefault(); // Evitamos que la página se recargue

        const submitBtn = form.querySelector('.form-submit');
        const originalBtnText = submitBtn.innerHTML;

        // Estado de "Cargando"
        submitBtn.innerHTML = 'ENVIANDO... <i class="fas fa-spinner fa-spin"></i>';
        submitBtn.disabled = true;
        messageBox.style.display = 'none';

        // Recolectamos los datos del formulario
        const formData = new FormData(form);

        try {
            // Mandamos los datos al PHP
            const response = await fetch('process-contact.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            // Mostramos el mensaje según el resultado
            messageBox.style.display = 'block';
            messageBox.textContent = result.message;

            if (result.status === 'success') {
                messageBox.style.backgroundColor = 'rgba(46, 204, 113, 0.2)';
                messageBox.style.color = '#2ecc71';
                messageBox.style.border = '1px solid #2ecc71';
                form.reset(); // Limpiamos el formulario
            } else {
                messageBox.style.backgroundColor = 'rgba(231, 76, 60, 0.2)';
                messageBox.style.color = '#e74c3c';
                messageBox.style.border = '1px solid #e74c3c';
            }

        } catch (error) {
            messageBox.style.display = 'block';
            messageBox.style.backgroundColor = 'rgba(231, 76, 60, 0.2)';
            messageBox.style.color = '#e74c3c';
            messageBox.style.border = '1px solid #e74c3c';
            messageBox.textContent = 'Error de conexión. Inténtalo más tarde.';
            console.error('Error:', error);
        } finally {
            // Restauramos el botón
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;
        }
    });
};