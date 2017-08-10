<?php
/**
 *@name DB
 *@author 杨帅
 *@desc 数据库操作函数文件
 */




/**
 * 获取数据库对象函数
 * @return mixed 数据库对象
 */
function DB() {
    static $_instance = null;
    //判断对象是否已创建
    if (is_null($_instance)) {
        $Config = Yaf_Registry::get('config')->get('DB');    //获取数据库配置
        $DB = [
            'database_type' => $Config->type,
            'database_name' => $Config->dbname,
            'server'        => $Config->host,
            'username'      => $Config->username,
            'password'      => $Config->password,
            'charset'       => $Config->charset,
            'prefix'        => $Config->prefix,
        ];
        if (!empty($Config->port)) $DB['port'] = $Config->port;    //端口为空时默认3306
        //创建数据库对象
        $_instance = new Medoo\Medoo($DB);
    }
    return $_instance;
}