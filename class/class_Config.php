<?php
class Config
{
    static $confArray;

    public static function read($name)
    {
    	if  (!isset(self::$confArray[$name])) { return false ; }
        return self::$confArray[$name];
    }

    public static function write($name, $value)
    {
        self::$confArray[$name] = $value;
    }

}

?>