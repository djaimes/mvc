<?php

/***
*   Controlador frontal
*/

error_reporting(E_ALL);
ini_set('display_errors',1);

// Raíz del sistema
define('SERVER_ROOT', '/var/www/palmartec.com/html/mvc');

// URL para ejecutar el sistema
define('SITE_ROOT','http://palmartec.com');

// Ruteador de controladores
require_once(SERVER_ROOT . '/controladores/' . 'router.php');

?>
