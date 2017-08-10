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
        //$config = new Yaf_Config_Ini(CONFIG_PATH,'product');
        $config = Yaf_Registry::get('config')->get('DB');
        $user = DB();
        $user2 = DB();
        echo '<pre>';
        var_dump($user);
        var_dump($user2);

        var_dump($config);
        echo '这是api的test方法';
        echo '<hr/>';
        echo 'current action is:'.$this->getRequest()->getActionName();

    }
}