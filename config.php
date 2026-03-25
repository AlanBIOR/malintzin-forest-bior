<?php
session_start();
require_once 'languages.php';

// 1. Detectar idioma (por defecto español)
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang; // Guardamos en sesión para que se mantenga al navegar
} else {
    $lang = $_SESSION['lang'] ?? 'es'; 
}

// Números de contacto (Extraídos de tu imagen)
define('PHONE_1', '2461086895');
define('PHONE_2', '2462236424');

// Si quieres un número principal para el botón de reserva general:
define('PHONE_MAIN', PHONE_2); 

// Correo principal de contacto
define('CONTACT_EMAIL', 'contacto@malintzin.bior-studio.com');

// Otros datos de la imagen
define('TOUR_PRICE', '$399 MXN');

// ---> NUEVO: Mensaje predefinido base para WhatsApp
define('WA_MSG', '¡Hola! Vengo de su página web y me gustaría recibir más información sobre los tours y ascensos.');

// 2. Crear un helper para imprimir el texto fácilmente
function __($key) {
    global $texts, $lang;
    return $texts[$lang][$key] ?? $key; // Si no existe la llave, devuelve la llave
}
?>