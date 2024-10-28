<?php

namespace Core;

class Route
{
    private static array $address;
    private static array $controller;
    private static array $middleWare;
    public static function group(string $address, string $controller, string $middleWare = null): void
    {
        self::$controller[] = $controller;
        self::$address[] = $address;
        self::$middleWare[] = $middleWare;
    }
    public static function ret_group($main_address): array
    {
        $file = file_exists("./middleware/test_mid.php");
        if (in_array($main_address, self::$address) && $file) {
            $key = array_search($main_address, self::$address);
            return [[self::$address[$key], self::$controller[$key], self::$middleWare[$key]], true];
        }
        return [[], false];
    }
}