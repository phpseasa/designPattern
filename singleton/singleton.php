<?php


/**
 * Class singleton
 * 私有化的构造方法,私有化的clone 方法,私有化的反序列化方法, 私有化的属性. 一个全局的访问函数
 * serialize() 在执行前会先检查类中是否存在__sleep()函数.如果存在则调用之; unserialize() 会先检查并调用__wakeup()函数.
 */
class singleton
{
    private static $instance = null;

    public static function getInstance()
    {
        if (null == static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

}