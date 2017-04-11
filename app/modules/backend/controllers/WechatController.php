<?php

namespace App\Modules\Backend\Controllers;

class WechatController extends ControllerBase{

    public function noticeAction(){
        $this->view->disable();
        $notice=$this->weixin->notice;
        echo "<pre>";
        var_dump($notice->getIndustry());
    }


    public function setindustryAction(){                        //设置所属行业
        $this->view->disable();
        return $this->weixin->notice->setIndustry($this->request->getPost('industry_id','int'));
    }

    public function getindustryAction(){                        //获取所属行业
        $this->view->disable();
        return $this->weixin->notice->getIndustry();
    }

    public function gettemplateAction(){
        $this->view->disable();
        return $this->weixin->notice-> getPrivateTemplates();
    }

}