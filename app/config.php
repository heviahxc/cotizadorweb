<?php

//Saber si estamo en servidor lcoal
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));

define('URL', (IS_LOCAL ? 'http://127.0.0.1/cotizador/' : 'url en produccion'));

//Rutas para carpetas
define('DS'       ,    DIRECTORY_SEPARATOR);
define('ROOT'     ,    getcwd().DS);
define('APP'      ,    ROOT.'app'.DS);
define('ASSETS'   ,    ROOT.'assets'.DS);
define('TEMPLATES',    ROOT.'templates'.DS);
define('INCLUDES' ,    TEMPLATES.'includes'.DS);
define('MODULES'  ,    TEMPLATES.'modules'.DS);
define('VIEWS'    ,    TEMPLATES.'views'.DS);
define('UPLOADS'  ,    ROOT.'uploads'.DS);

//ARCHIVOS GENERALES
define('CSS' , URL.'assets/css/');
define('IMG' , URL.'assets/img/');
define('JS'  , URL.'assets/js/');

//Cargar funciones

require_once APP.'functions.php';