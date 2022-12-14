<?php 
session_start();

// Para saber si estamos en servidor local
define('IS_LOCAL' , in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));

// La URL de nuestro proyecto
define('URL'      , (IS_LOCAL ? 'http://127.0.0.1:7879/cursos/udemy_cotizador/' : 'LA URL DE SU SERVIDOR EN PRODUCCIÓN'));

// Rutas para carpetas
define('DS'       , DIRECTORY_SEPARATOR);
define('ROOT'     , getcwd().DS);
define('APP'      , ROOT.'app'.DS);
define('ASSETS'   , ROOT.'assets'.DS);
define('TEMPLATES', ROOT.'templates'.DS);
define('INCLUDES' , TEMPLATES.'includes'.DS);
define('MODULES'  , TEMPLATES.'modules'.DS);
define('VIEWS'    , TEMPLATES.'views'.DS);
define('UPLOADS'  , 'assets/uploads/');

// Para archivos que vayamos a incluir en header o footer (css o js)
define('CSS'      , URL.'assets/css/');
define('IMG'      , URL.'assets/img/');
define('JS'       , URL.'assets/js/');

// Personalización
define('APP_NAME'  , 'Cotizador App');
define('APP_EMAIL' , 'jslocal@localhost.com');
define('TAXES_RATE', 16); // recordar que es un porcentaje
define('SHIPPING'  , 99.50);

// Autoload Composer


// Cargar todas las funciones
require_once APP.'functions.php';