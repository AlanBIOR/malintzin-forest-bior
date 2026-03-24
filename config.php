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
define('PHONE_MAIN', PHONE_1); 

// Otros datos de la imagen
define('TOUR_PRICE', '$399 MXN');

// 2. Crear un helper para imprimir el texto fácilmente
function __($key) {
    global $texts, $lang;
    return $texts[$lang][$key] ?? $key; // Si no existe la llave, devuelve la llave
}
?>