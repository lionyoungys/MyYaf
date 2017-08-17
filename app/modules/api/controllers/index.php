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
        //echo '这是api的test方法';
        //echo '<hr/>';
        //echo 'current action is:'.$this->getRequest()->getActionName();
        //throw new Exception('错误信息',10002);
        $users = \Mysql\UserModel::select('*',['id[!]'=>2]);
        //$users = UserModel::select('*',['id[!]'=>2]);
        echo '<pre>';
        var_dump($users);
        //goto end;
        echo 'not go to';

        //end:
        echo 'dfd';
        $dataArr = test();
        echo '<hr>';
        echo json_encode($dataArr,TRUE);

    }
}