<?php
namespace core\base\settings;

//Основной класс настроек
class Setting{
    static private $_instance;
    // Свойтво маршрутов
    private $routes = [
        //Маршруты админ панели
        'admin' => [
            'name' => 'admin',
            'path' => 'core/admin/controller/',
            'hrUrl' => false
        ],
        //Пути настроек сайта
        'settings' => [
            'path' => 'core/base/settings/'
        ],
        //Настройки для плигинов
        'plugins' => [
            'path' => 'core/plugins/',
            'hrUrl' => false
        ],
        //Настройки пользовательской чати сайта
        'user' => [
            'path' => 'core/user/controller/',
            'hrUrl' => true,
            'routes' => [

            ]
        ],
        //Настройки по умолчанию
        'default' => [
            'controller' => 'IndexController',
            'inputMethod' => 'inputData',
            'outputMethod' => 'outputData'
        ]
    ];

    private function __construct(){
    }

    private function __clone(){
    }

    static public function instance(){
        if(self::$_instance instanceof self){
            return self::$_instance;
        }
        return self::$_instance = new self();
    }
}