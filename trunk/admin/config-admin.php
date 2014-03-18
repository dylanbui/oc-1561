<?php

define ('__ADMIN_FOLDER', 'admin/');
define ('__ROOT_ADMIN_FOLDER', __ROOT_PATH . '/'. __ADMIN_FOLDER);

// __BASE_URL : /adv_mvc/
define ('__BASE_URL', str_replace(__ADMIN_FOLDER.basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']));

$pageURL = "";
if ($_SERVER["SERVER_PORT"] != "80") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].__BASE_URL;
} else {
	$pageURL .= $_SERVER["SERVER_NAME"].__BASE_URL;
}

// HTTP
define('HTTP_SERVER', "http://{$pageURL}" . __ADMIN_FOLDER);
define('HTTP_CATALOG', "http://{$pageURL}");

// HTTPS
define('HTTPS_SERVER', "http://{$pageURL}" . __ADMIN_FOLDER);
define('HTTPS_CATALOG', "http://{$pageURL}");

// DIR
define('DIR_APPLICATION', __ROOT_ADMIN_FOLDER);
define('DIR_SYSTEM', __ROOT_PATH . '/system/');
define('DIR_DATABASE', __ROOT_PATH . '/system/database/');
define('DIR_LANGUAGE', __ROOT_ADMIN_FOLDER . 'language/');
define('DIR_TEMPLATE', __ROOT_ADMIN_FOLDER . 'view/template/');
define('DIR_CONFIG', __ROOT_PATH . '/system/config/');
define('DIR_IMAGE', __ROOT_PATH . '/image/');
define('DIR_CACHE', __ROOT_PATH . '/system/cache/');
define('DIR_DOWNLOAD', __ROOT_PATH . '/download/');
define('DIR_LOGS', __ROOT_PATH . '/system/logs/');
define('DIR_CATALOG', __ROOT_PATH . '/catalog/');


// // HTTP
// define('HTTP_SERVER', 'http://localsite/opencart-1.5.6.1/upload/admin/');
// define('HTTP_CATALOG', 'http://localsite/opencart-1.5.6.1/upload/');

// // HTTPS
// define('HTTPS_SERVER', 'http://localsite/opencart-1.5.6.1/upload/admin/');
// define('HTTPS_CATALOG', 'http://localsite/opencart-1.5.6.1/upload/');

// // DIR
// define('DIR_APPLICATION', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/admin/');
// define('DIR_SYSTEM', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/system/');
// define('DIR_DATABASE', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/system/database/');
// define('DIR_LANGUAGE', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/admin/language/');
// define('DIR_TEMPLATE', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/admin/view/template/');
// define('DIR_CONFIG', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/system/config/');
// define('DIR_IMAGE', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/image/');
// define('DIR_CACHE', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/system/cache/');
// define('DIR_DOWNLOAD', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/download/');
// define('DIR_LOGS', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/system/logs/');
// define('DIR_CATALOG', '/Volumes/MAC DATA/_htdocs_local/opencart-1.5.6.1/upload/catalog/');

?>