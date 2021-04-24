<?php
namespace core\admin\controller;

use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController {
    protected function inputData(){
        $db = Model::instance();
        $table = 'auto';
//        $color = ['red', 'blue', 'black'];
        $res = $db->get($table, [
            'fields' => ['id', 'brand'],
            'where' => ['brand' => 'AUDI'],
            'limit' => '1'
        ])[0];
        exit('id = ' . $res['id'] . ' brand = ' . $res['brand']);
    }
}