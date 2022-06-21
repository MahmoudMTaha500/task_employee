<?php
namespace PHPMVC;
use PHPMVC\LIB\FrontController;

if(!defined('DS')){
    define('DS' , DIRECTORY_SEPARATOR) ;
}
session_start();

require_once "..". DS .'app' . DS . 'config.php';
require_once APP_PATH . DS .'lib' . DS . 'autoload.php';
$frontController = new FrontController();
$frontController->dispatch();