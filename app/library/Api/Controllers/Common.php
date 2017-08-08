<?php
namespace Api\Controllers;


class CommonController extends Yaf_Controller_Abstract
{

    
    public function __construct()
    {
        parent::__construct();
        echo '继承common控制器';
        Yaf_Dispatcher::getInstance()->disableView();
    }

    protected function getCommon()
    {
        return '继承common控制器';
    }
}
