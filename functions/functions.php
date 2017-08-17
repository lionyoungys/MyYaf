<?php
/**
 * @package functions
 * @name functions
 * @author yangyunlong
 * @des 函数文件
 */


 /**
  * 去除类的命名空间只留类名
  * @param string $name
  * @return mixed 无命名空间的类名
  */
function trimNamespace($name)
{
    $dataArr = explode('\\',$name);
    $realName = array_pop($dataArr);
    return $realName;
}


function test(){
    for($i = 0; $i < 5;++$i) {
        yield $i;
    }
}