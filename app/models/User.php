<?php
/**
 * @name UserModel
 * @desc user数据获取类, 可以访问数据库，文件，其它系统等
 * @author 帅
 */
class UserModel extends AbstractModel
{
    public function __construct() {

    }   
    
    public function selectSample() {
        return 'Hello World!';
    }

    public function insertSample($arrInfo) {
        return true;
    }

    public static function the()
    {
        var_dump(__CLASS__);
    }
}
