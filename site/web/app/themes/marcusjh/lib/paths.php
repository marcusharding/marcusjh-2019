<?php
define('ROOT_DIR', dirname(__FILE__));
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
define ('MY_TEMPLATE_DIR', $_SERVER["DOCUMENT_ROOT"] . '/app/themes/marcusjh/assets/src/templates/');

// GLOBAL PATH VARIABLES 

$GLOBALS['templatePath'] = '/app/themes/marcusjh/assets/src/templates/';
?>

