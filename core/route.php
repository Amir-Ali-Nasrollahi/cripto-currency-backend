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

        if (in_array($main_address, self::$address)) {
            $key = array_search($main_address, self::$address);
            $file = file_exists("./route/middleware/".self::$middleWare[$key].".php");
            if($file) {
                return [[self::$address[$key], self::$controller[$key], self::$middleWare[$key]], true];
            }
        }
        return [[], false];
    }
}