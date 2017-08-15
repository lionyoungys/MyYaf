<?php
/**
 * Mysql主数据访问抽象模型
 * @package Mysql
 * @author 帅
 */
namespace Mysql;


use Tool\Tool;

abstract class AbstractModel {

    //禁止克隆类
    private function __clone(){}        


    /**
     * 映射模型静态方法
     *
     * @param string $name
     * @param array $args
     * @return void
     */
    public static function __callStatic($name, $args)
    {
        $realModelName = trimNamespace(get_called_class());
        $Model = str_replace('Model','',$realModelName);     //获取模型类名对应数据表名
        array_unshift($args, $Model);                            //将数据表名追加至参数列表数组
        return call_user_func_array(array(DB(),$name),$args);    //调用DB数据库对象的$name方法,参数为$args数组列表值
    }


}