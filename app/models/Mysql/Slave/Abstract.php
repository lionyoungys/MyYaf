<?php
/**
 * Mysql从数据访问抽象模型
 * @package Mysql
 * @author 帅
 */
namespace Mysql\Slave;


use Tool\Tool;
abstract class AbstractModel
{
    /**
     * 获取数据库连接对象
     *
     * @return object
     */
    public static function _getAdapter()
    {
        static $_instance = null;
        //判断对象是否已创建
        if (!$_instance) {
            $Config = \Yaf_Registry::get('config')->get('Mysql.Slave');    //获取数据库配置
            //创建数据库对象
            $_instance = new \Medoo\Medoo($Config->toArray());
        }
        return $_instance;
    }


    /**
     * 映射模型静态方法
     *
     * @param string $name
     * @param array $args
     * @return void
     */
    public static function __callStatic($name, $args)
    {
        $realModelName = Tool::trimNamespace(get_called_class());
        $Model = str_replace('Model','',$realModelName);     //获取模型类名对应数据表名
        array_unshift($args, $Model);                            //将数据表名追加至参数列表数组
        return call_user_func_array(array(self::_getAdapter(),$name),$args);    //调用DB数据库对象的$name方法,参数为$args数组列表值
    }

}