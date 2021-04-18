<?php
namespace core\base\controller;

//Основной маршруный контроллер
class RouteController{
    static private $_instance;

    private function __clone(){
    }

    static public function getInstance(){
        if(self::$_instance instanceof self){
            return self::$_instance;
        }
        return self::$_instance = new self();
    }

    private function __construct(){
    }
}