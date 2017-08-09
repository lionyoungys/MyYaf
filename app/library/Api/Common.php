<?php

namespace Api;

use \Yaf_Dispatcher;

class Common extends \Yaf_Controller_Abstract
{
    public function init()
    {
        Yaf_Dispatcher::getInstance()->disableView();
    }
}