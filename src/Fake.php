<?php

namespace Switzum\FakeObject;

/**
 * Class Fake
 * @package Switzum\FakeObject
 */
class Fake
{
    /**
     * @param $className
     * @return mixed
     */
    public static function this($className)
    {
        return $className;
    }
}