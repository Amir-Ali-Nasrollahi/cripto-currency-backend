<?php

namespace Core;

abstract class Controller
{
    abstract public function get();
    abstract public function post(array $request);
    abstract public function update();
    abstract public function delete();
    public static function MODEL($model_name)
    {
        return new (ucfirst($model_name) . "_model");
    }

}