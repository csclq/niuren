<?php

namespace App\Modules\Frontend\Controllers;



class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function phpinfoAction()
    {
       $this->view->disable();
       phpinfo();
    }

    public function testAction(){
        $this->view->disable();
        var_dump($this->config->application);
        var_dump($_SERVER);
    }

}

