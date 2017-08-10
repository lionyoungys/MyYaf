<?php
/**
 * @name AbstractModel
 * @desc sample数据获取类, 可以访问数据库，文件，其它系统等
 * @author 帅
 */
abstract class AbstractModel {
    //本类成员
    private static $_instance = null;
    private function __construct() {}
    private function __clone() {}

    abstract protected function getInit();


}