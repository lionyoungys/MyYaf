<?php



class IndexController extends \Api\Common
{
    public function indexAction()
    {
        echo '这是api的index方法';
    }

    public function testAction()
    {
        echo '这是api的test方法';
        //CommonController::echoCommon();
        //echo $this->getCommon();
        return false;
    }
}