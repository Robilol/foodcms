<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

define("DS", DIRECTORY_SEPARATOR);
define("PATH_RELATIVE", "/MVC/");
define("PATH_RELATIVE_PATTERN", "\/MVC\/");

switch ($_SERVER['SERVER_NAME']) {
    case "foodcms.dev":
        define('DB_HOST', '51.255.160.240');
        define('DB_NAME', 'foodcms');
        define('DB_USER', 'user');
        define('DB_PWD', 'Donjett0');
        define('DB_PORT', '3306');
        define('DB_PREFIXE', 'food_');
        define('DIR', $_SERVER['DOCUMENT_ROOT']);
        break;
    case "92.222.69.26":
        define('DB_HOST', '127.0.0.1');
        define('DB_NAME', 'foodcms');
        define('DB_USER', 'root');
        define('DB_PWD', '1WA1weZz0gD6');
        define('DB_PORT', '3306');
        define('DB_PREFIXE', 'food_');
        define('DIR', $_SERVER['DOCUMENT_ROOT']);
        break;
    default:
        define('DB_HOST', '51.255.160.240');
        define('DB_NAME', 'foodcms');
        define('DB_USER', 'user');
        define('DB_PWD', 'Donjett0');
        define('DB_PORT', '3306');
        define('DB_PREFIXE', 'food_');
        define('DIR', $_SERVER['DOCUMENT_ROOT']);
}