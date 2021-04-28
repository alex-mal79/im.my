<?php
namespace core\admin\controller;

use core\base\controller\BaseController;
use core\admin\model\Model;

class IndexController extends BaseController {
    protected function inputData(){
        $db = Model::instance();
        $table = 'auto';
//        $files['img'] ='';
//        $files['gallery_img'] ='';
//        $_POST['id'] = 14;
//        $_POST['brand'] = '';
//        $_POST['model'] = '';
//        $res = $db->edit($table, ['files' => $files]);
//        $res = $db->add($table, [
//            'fields' => ['brand' => 'Honda', 'model' => 'CRV'],
//            'except' => ['brand'],
//            'files' => $files
//            'where' => ['brand' => 'AUDI'],
//            'limit' => '1'
//        ]);
        $res = $db->delete($table, [
//            'fields' => ['brand'],
            'where' => ['id' => 18],
            'join' => [
                [
                    'table' => 'parts',
                    'on' => ['parts_id', 'id']
                ]
            ]
        ]);

            exit('id = ' . $res['id'] . ' brand = ' . $res['brand']);
    }
}