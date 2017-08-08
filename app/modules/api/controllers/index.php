<?php

use Api\Controllers;


class IndexController extends CommonController
{
    public function indexAction()
    {
        echo '这是api的index方法';
    }

    public function testAction()
    {
        echo '这是api的test方法';
        echo $this->getCommon();
        return false;
    }
}