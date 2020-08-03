<?php
/**
 * Created by PhpStorm.
 * User: liuxingyu
 * Date: 19-12-28
 * Time: 下午5:15
 */
class Arrasess implements ArrayAccess{
    private static $arraysess = array();
    public function offsetExists($offset){
        return isset(self::$arraysess[$offset]);
    }
    public function offsetGet($offset){
        return self::$arraysess[$offset];
    }
    public function offsetSet($offset, $value){
        self::$arraysess[$offset] = $value;
    }
    public function offsetUnset($offset){
        unset(self::$arraysess[$offset]);
    }
}