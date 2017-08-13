<?php
/**
 * 工具类
 * @author yangyunlong
 * @package Tool
 */
namespace Tool;


class Tool
{
    /**
     * 去除类名中的命名空间
     * @param string $name
     * @return string
     */
    public static function trimNamespace($name)
    {
        $dataArr = explode('\\',$name);
        $realName = array_pop($dataArr);
        return $realName;
    }
}