<?php
namespace core\admin\controller;

use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController {
    protected function inputData(){
        $db = Model::instance();
        $table = 'auto';
        $files['gallery_img'] = ["red''.jpg", 'blue.jpg', 'black.jpg'];
        $files['img'] = 'main_img.jpg';
        $_POST['brand'] = 'MAN';
        $res = $db->add($table, [
//            'fields' => ['brand' => 'Honda', 'model' => 'CRV'],
//            'except' => ['brand'],
//            'files' => $files
//            'where' => ['brand' => 'AUDI'],
//            'limit' => '1'
        ]);
        exit('id = ' . $res['id'] . ' brand = ' . $res['brand']);
    }
}