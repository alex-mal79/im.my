<?php
namespace core\base\settings;

//Основной класс настроек
class Settings{
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

    private $templateArr = [
        'text' => ['name', 'phone', 'address'],
        'textarea' => ['content', 'keywords']
    ];
    private $lal = 'lal';

    private function __construct(){
    }

    private function __clone(){
    }

    static public function get($property){
        return self::instance()->$property;
    }

    static public function instance(){
        if(self::$_instance instanceof self){
            return self::$_instance;
        }
        return self::$_instance = new self();
    }
    //Метод склеивания основных настроек с настройками плагинов
    public function clueProperties($class){
        $baseProperties = [];
        foreach ($this as $name => $item){
            $property = $class::get($name);
            if(is_array($property) && is_array($item)){
                $baseProperties[$name] = $this->arrayMergeRecursive($this->$name, $property);
                continue;
            }
            if(!$property) $baseProperties[$name] = $this->$name;
        }
        return $baseProperties;
    }
    //Метод склеивания массивов
    public function arrayMergeRecursive(){
        $arrays = func_get_args();
        $base = array_shift($arrays);
        foreach ($arrays as $array){
            foreach ($array as $key => $value){
                if(is_array($value) && is_array($base[$key])){
                    $base[$key] = $this->arrayMergeRecursive($base[$key], $value);
                }
                else{
                    if(is_int($key)){
                        if(!in_array($value, $base)) array_push($base, $value);
                        continue;
                    }
                    $base[$key] = $value;
                }
            }
        }
        return $base;
    }
}