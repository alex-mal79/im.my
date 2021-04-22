<?php
namespace core\base\controller;

trait BaseMethods{
    //Метод очистки строковых данных
    protected function clearStr($str){
        if(is_array($str)){
            foreach ($str as $key => $item) $str[$key] = trim(strip_tags($item));
            return $str;
        }
        else{
            return trim(strip_tags($str));
        }
    }
    //Метод очистки числовых данных
    protected function clearNum($num){
        return $num * 1;
    }
    //Метод проверки прихода данных по POST
    protected function isPost(){
        return $_SERVER['REQUEST_METHOD']  == 'POST';
    }
    //Метод проверки прихода данныхы AJAX
    protected function isAjax(){
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }
    //Метод перенапрвления
    protected function redirect($http = false, $code){
        if($code){
            $codes = ['301' => 'HTTP/1.1 301 Move Permanently'];
            if($codes[$code]) header($codes[$code]);
        }
        if($http) $redirect = $http;
            else $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
            header("Location: $redirect");
            exit;
    }
    //Метод записи log-файла
    protected function writeLog($message, $file = 'log.txt', $event = 'Fault'){
        $dateTime = new \DateTime();
        $str = $event . ': ' . $dateTime->format('d-m-Y G:i:s') . ' - ' . $message . "\r\n";
        file_put_contents('log/' . $file, FILE_APPEND);
    }
}