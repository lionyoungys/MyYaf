<?php



class IndexController extends \Core\ApiAbstract
{
    public function indexAction()
    {
        echo '这是api的index方法';
    }

    public function testAction()
    {
        //$user = DB()->select('User','*',['id[!]'=>2]);
        //echo '<pre>';
        //var_dump($user);
        //var_dump(json_encode($user));
        //SampleModel::the();
        //echo '这是api的test方法';
        //echo '<hr/>';
        //echo 'current action is:'.$this->getRequest()->getActionName();
        //throw new Exception('错误信息',10002);
        $users = UserModel::select('*',['id[!]'=>2]);
        echo '<pre>';
        var_dump($users);

    }
}