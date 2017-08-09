<?php

namespace Core;

use \Yaf_Dispatcher;

abstract class ApiAbstract extends CommonAbstract
{
    public function init()
    {
        //对象初始化调用
        Yaf_Dispatcher::getInstance()->disableView();
    }
}