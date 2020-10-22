<?php
// FRONTEND CONFIG

// HTTP
define('HTTP_SERVER', 'http://www.vizagcart.com/');
define('HTTP_CATALOG', 'http://www.vizagcart.com/');
define('HTTP_IMAGE', 'http://www.vizagcart.com/image/');
define('HTTP_ADMIN', 'http://www.vizagcart.com/admin/');

// HTTPS
define('HTTPS_SERVER', HTTP_SERVER);
define('HTTPS_IMAGE', HTTP_IMAGE);

// DIR
define('DIR_CATALOG', '/home/raja1254/public_html/vizagcart.com/catalog/');
define('DIR_APPLICATION', DIR_CATALOG);
define('DIR_SYSTEM', '/home/raja1254/public_html/vizagcart.com/system/');
define('DIR_DATABASE', DIR_SYSTEM.'database/');
define('DIR_LANGUAGE', DIR_APPLICATION.'language/');
define('DIR_TEMPLATE', DIR_APPLICATION.'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM.'config/');
define('DIR_IMAGE', '/home/raja1254/public_html/vizagcart.com/image/');
define('DIR_CACHE', DIR_SYSTEM.'cache/');
define('DIR_DOWNLOAD', '/home/raja1254/public_html/vizagcart.com/download/');
define('DIR_LOGS', DIR_SYSTEM.'logs/');

// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'vIzAgcArT9');
define('DB_PASSWORD', '!@Raja1254');
define('DB_DATABASE', 'vIzAgcArT9');
define('DB_PREFIX', 'oc_');
?>