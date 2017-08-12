<?php
namespace DAO;
/**
 * 数据模型读取抽象类
 * @package DAO
 * @author 帅
 */
abstract class AbstractModel {
    //本类成员
    private static $_instance = null;
    //private function __construct() {}
    //private function __clone() {}

    //abstract protected function getInit();
    public static function __callStatic($name, $args)
    {
        $Model = str_replace('Model','',get_called_class());     //获取模型类名对应数据表名
        array_unshift($args, $Model);                            //将数据表名追加至参数列表数组
        return call_user_func_array(array(DB(),$name),$args);    //调用DB数据库对象的$name方法,参数为$args数组列表值
    }


}