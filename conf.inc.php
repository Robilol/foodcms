<?php
date_default_timezone_set('Europe/Paris');
ini_set("display_errors", 1);
error_reporting(E_ALL);
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "25");

define("DS", DIRECTORY_SEPARATOR);
define("PATH_RELATIVE", "/MVC/");
define("PATH_RELATIVE_PATTERN", "\/MVC\/");

switch ($_SERVER['SERVER_NAME']) {
    case "foodcms.dev":
        define('HOSTNAME', 'foodcms.dev');
        define('DB_HOST', '51.255.160.240');
        define('DB_NAME', 'foodcms2');
        define('DB_USER', 'user');
        define('DB_PWD', 'Donjett0');
        define('DB_PORT', '3306');
        define('DB_PREFIXE', 'food_');
        define('DIR', $_SERVER['DOCUMENT_ROOT']);
        break;
    case "92.222.69.26":
        ini_set("display_errors", 0);
        define('HOSTNAME', 'foodcms.robin-regis.com');
        define('DB_HOST', '127.0.0.1');
        define('DB_NAME', 'foodcms2');
        define('DB_USER', 'user');
        define('DB_PWD', 'Donjett0');
        define('DB_PORT', '3306');
        define('DB_PREFIXE', 'food_');
        define('DIR', $_SERVER['DOCUMENT_ROOT']);
        break;
    case "foodcms.robin-regis.com":
        ini_set("display_errors", 0);
        define('HOSTNAME', 'foodcms.robin-regis.com');
        define('DB_HOST', '127.0.0.1');
        define('DB_NAME', 'foodcms2');
        define('DB_USER', 'user');
        define('DB_PWD', 'Donjett0');
        define('DB_PORT', '3306');
        define('DB_PREFIXE', 'food_');
        define('DIR', $_SERVER['DOCUMENT_ROOT']);
        break;
    default:
        define('HOSTNAME', 'foodcms.dev');
        define('DB_HOST', '51.255.160.240');
        define('DB_NAME', 'foodcms2');
        define('DB_USER', 'user');
        define('DB_PWD', 'Donjett0');
        define('DB_PORT', '3306');
        define('DB_PREFIXE', 'food_');
        define('DIR', $_SERVER['DOCUMENT_ROOT']);
}
