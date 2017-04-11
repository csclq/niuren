<?php

namespace App\Modules\Backend\Controllers;

class IndexController extends ControllerBase{

    public function indexAction(){
//        $this->view->disable();
//        echo __METHOD__;
    }

    public function testAction(){
        $this->view->disable();
        echo __METHOD__;
    }

}