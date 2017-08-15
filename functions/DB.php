<?php
/**
 *@name DB
 *@author 杨帅
 *@desc 数据库函数文件
 */



/**
 * 获取主数据库对象函数
 * @return object 主数据库对象
 */
function DB() {
    static $_instance = null;
    //判断对象是否已创建
    if (!$_instance) {
        $Config = \Yaf_Registry::get('config')->get('Mysql');    //获取数据库配置
        //创建数据库对象
        $_instance = new \Medoo\Medoo($Config->toArray());
    }
    return $_instance;
}

/**
 * 获取从数据库对象函数
 * @return object 从数据库对象
 */
function DBSlave()
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