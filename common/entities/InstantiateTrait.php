<?php

namespace common\entities;

trait InstantiateTrait
{
    private static $_protorype;

    public static function instantiate($row)
    {
        if (self::$_protorype === null) {
            $class = get_called_class();
            self::$_protorype = unserialize(sprintf('0:%d:"%s":0:{}', strlen($class), $class));
        }
        $entity = clone  self::$_protorype;
        $entity->init();
        return $entity;
    }
}