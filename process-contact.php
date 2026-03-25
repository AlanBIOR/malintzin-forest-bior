<?php
require_once 'includes/config.php';

// Le decimos al navegador que vamos a responder en formato JSON
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Por favor, completa todos los campos correctamente.']);
        exit;
    }

    $recipient = CONTACT_EMAIL; 
    $subject = "Nuevo mensaje web - Aventuras Malintzin de: $name";
    
    $email_content = "Has recibido un nuevo mensaje desde el sitio web.\n\n";
    $email_content .= "Nombre: $name\n";
    $email_content .= "Correo: $email\n\n";
    $email_content .= "Mensaje:\n$message\n";

    $email_headers = "From: $name <$email>";

    // Enviamos el correo y devolvemos JSON en lugar de redirigir
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        echo json_encode(['status' => 'success', 'message' => '¡Mensaje enviado con éxito! Nos pondremos en contacto pronto.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Hubo un error en el servidor. Intenta de nuevo o contáctanos por WhatsApp.']);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Acceso denegado.']);
}
?>