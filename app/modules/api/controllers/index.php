<?php



class IndexController extends \Core\ApiAbstract
{
    public function indexAction()
    {
        echo '这是api的index方法';
    }

    public function testAction()
    {
        //$_SESSION['test'] = 5;
        //echo $_SESSION['test'];
        echo '这是api的test方法';
        echo '<hr/>';
        echo 'current action is:'.$this->getRequest()->getActionName();
    
    }
}