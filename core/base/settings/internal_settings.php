<?php
defined('VG_ACCESS') or die('Access denied');
//Шаблоны сайта
const TEMPLATE = ROOT.DS.'templates'.DS.'default'.DS;
const ADMIN_TEMPLATE = ROOT.DS.'core'.DS.'admin'.DS.'view'.DS;
//Константы безопасности
const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const COOKIE_TIME = 60;
const BLOCK_TIME = 3;
//Константы постраничной навигации
const QTY = 8;
const QTY_LINKS = 3;
//Конствнты путей к стилям и скриптам
const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];
const USER_CSS_JS = [
    'styles' => [],
    'scripts' => []
];
//Автозагрузка классов
function autoloadMainClasses($class_name){
    $class_name = str_replace('\\', '/', $class_name);
    if(!@include_once $class_name . '.php'){
        throw new RouteException('Не верное имя файла для подключения' . $class_name);
    }
}
spl_autoload_register('autoloadMainClasses');