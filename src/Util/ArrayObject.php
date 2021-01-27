<?php

namespace Dtk\Util;

trait ArrayObject
{
    /**
     * 数组 转 对象
     *
     * @param array $arr 数组
     * @return object
     */
    public static function ArrayToObject($arr)
    {
        if (gettype($arr) != 'array') {
            return;
        }
        foreach ($arr as $k => $v) {
            if (gettype($v) == 'array' || getType($v) == 'object') {
                $arr[$k] = (object)self::ArrayToObject($v);
            }
        }
        return (object)$arr;
    }

    /**
     * 对象 转 数组
     *
     * @param object $obj 对象
     * @return array
     */
    public static function ObjectToArray($obj)
    {
        $obj = (array)$obj;
        foreach ($obj as $k => $v) {
            if (gettype($v) == 'resource') {
                return;
            }
            if (gettype($v) == 'object' || gettype($v) == 'array') {
                $obj[$k] = (array)self::ObjectToArray($v);
            }
        }

        return $obj;
    }
}