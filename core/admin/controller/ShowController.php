<?php
namespace core\admin\controller;

class ShowController extends BaseAdmin{
    protected function inputData(){
        $this->execBase();
        $this->createTableData();
        $this->createData(['fields' => ['model', 'gallery_img']]);
    }
    protected function outputData(){

    }
}