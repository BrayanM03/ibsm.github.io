<?php
/**
 * Configuración global del sistema Colefy
 */
require_once __DIR__ . '/../vendor/autoload.php';

// 1. DETERMINAR EL PROTOCOLO (http o https)
// Verificamos HTTPS normal, el puerto 443, y también proxies/túneles como Ngrok
$is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') 
            || $_SERVER['SERVER_PORT'] == 443 
            || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');

$protocol = $is_https ? "https://" : "http://";
/* $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 */
// 2. DEFINIR LA URL BASE
// Si estás en local con MAMP/XAMPP, esto asegura que siempre apunte a la carpeta raíz
// 2. DEFINIR LA URL BASE DE FORMA AUTOMÁTICA
// 2. DEFINIR LA URL BASE DE FORMA AUTOMÁTICA
if ($_SERVER['HTTP_HOST'] == 'localhost:8888' || 
    $_SERVER['HTTP_HOST'] == '127.0.0.1:8888' || 
    $_SERVER['HTTP_HOST'] == '192.168.1.152:8888' ||
    $_SERVER['HTTP_HOST'] == 'whole-wound-washboard.ngrok-free.dev' /* <-- CAMBIO AQUÍ: Sin https:// ni / */
) {
    // Si estás en tu Mac (Local) o usando Ngrok
    define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . '/web_ibsm/');
} else {
    // Si estás en el servidor de Amazon (Producción)
    define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . '/');
}
// 3. RUTAS PARA RECURSOS (Assets)
// Esto apunta a donde tienes el CSS, JS e Imágenes de AdminKit
define('VIEWS_URL', BASE_URL . 'views/');
define('ROOT_PATH', dirname(__DIR__) . '/');

//Assets para librerias que se repiten en las vistas
//CSS
define('ASSET_DATATABLES_CSS', 'https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css');
define('ASSET_DATATABLES_RESPONSIVE_CSS','https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css');
define('ASSET_ANIMATE_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

//JS
define('ASSET_FONTAWESOME_JS', 'https://kit.fontawesome.com/5c955c6e98.js');
define('ASSET_SWEETALERT_JS','https://cdn.jsdelivr.net/npm/sweetalert2@11');
define('ASSET_DATATABLES_JS', 'https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js');
define('ASSET_DATATABLES_RESPONSIVE_JS', 'https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

define('API_URL', $_ENV['API_URL']);


?>