<?php

namespace Core;

class Route
{
    private static array $address;
    private static array $controller;
    public static function group($address, $controller)
    {
        self::$controller[] = $controller;
        self::$address[] = $address;
    }
    public static function ret_group($main_address)
    {

        if (in_array($main_address, self::$address)) {
            $key = array_search($main_address, self::$address);
            return [[self::$address[$key], self::$controller[$key]], true];
        }
        return [[], false];
    }
}