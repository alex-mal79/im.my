<?php
//Константа безопасности
const VG_ACCESS = true;
//Подключение файловой системы
const DS = DIRECTORY_SEPARATOR;
define('ROOT', dirname(__FILE__));
//Устанавливаем кодировку
header('Content-Type:text/html;charset=utf-8');
session_start();
//Подключение конфигурационных файлов
require_once 'config.php';
require_once ROOT.DS.'core'.DS.'base'.DS.'settings'.DS.'internal_settings.php';
//Обработка исключений
use core\base\exceptions\RouteException;
use core\base\controller\RouteController;

try{
    RouteController::getInstance()->route();
}
catch (RouteException $e){
    exit($e->getMessage());
}