<?php
if(!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
 define('APP_PATH',realpath(dirname(__FILE__)));
// echo  define('ROOT_DIR', __DIR__.'/');
 realpath(dirname(__FILE__));
 define('APP_PUBLIC',dirname(__FILE__))    ;
 define('APP_SCRIPT',"http://wwww.employee-app.test" )  ;
 
define('VIEWS_PATH', APP_PATH . DS . 'views' . DS);
define('UPLODES_PATH', APP_PATH . DS . 'uplodes' . DS);

define('TEMPLATE_PATH', APP_PATH . DS . 'views' . DS . 'includes' . DS);



defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', 'password');
defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'employee');
defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', 1);