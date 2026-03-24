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

define('PHONE_WHATSAPP', '52'); // Tu número

// 2. Crear un helper para imprimir el texto fácilmente
function __($key) {
    global $texts, $lang;
    return $texts[$lang][$key] ?? $key; // Si no existe la llave, devuelve la llave
}
?>