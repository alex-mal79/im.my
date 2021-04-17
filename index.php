<?php
//Константа безопасности
const VG_ACCESS = true;
//Подключение файловой системы
const DS = DIRECTORY_SEPARATOR;
define('ROOT', dirname(__FILE__));
//Устанавливаем кодировку
header('Content-Type:text/html;charset=utf-8');
session_start();
require_once 'config.php';
require_once ROOT.DS.'core'.DS.'base'.DS.'settings'.DS.'internal_settings.php';