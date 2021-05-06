<?php
namespace core\base\settings;

use core\base\controller\Singleton;
//Основной класс настроек
class Settings{
    use Singleton;
    // Свойтво маршрутов
    private $routes = [
        //Маршруты админ панели
        'admin' => [
            'alias' => 'admin',
            'path' => 'core/admin/controller/',
            'hrUrl' => false,
            'routes' => [

            ]
        ],
        //Пути настроек сайта
        'settings' => [
            'path' => 'core/base/settings/'
        ],
        //Настройки для плигинов
        'plugins' => [
            'path' => 'core/plugins/',
            'hrUrl' => false,
            'dir' => false
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
    private $expansion = 'core/admin/expansion/';

    private $defaultTable = 'auto';

    private $projectTables = [
        'auto' => ['name' => 'Автомобили', 'img' => 'pages.png'],
        'tires' => ['name' => 'Шины']
    ];
    private $templateArr = [
        'text' => ['name', 'phone', 'address'],
        'textarea' => ['content', 'keywords']
    ];
    private $translate = [
        'name' => ['Название', 'Не более 100 символов']
    ];
    private $radio = [
        'visible' => ['Нет', 'Да', 'default' => 'Да']
    ];
    private $rootItems = [
        'name' => 'Корневая',
        'tables' => ['articles']
    ];
    private $blockNeedle = [
        'vg-rows' => [],
        'vg-img' => ['id'],
        'vg-content' => ['model']
    ];
    static public function get($property){
        return self::instance()->$property;
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