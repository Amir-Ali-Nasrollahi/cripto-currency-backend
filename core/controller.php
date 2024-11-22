<?php

namespace Core;

abstract class Controller
{
    abstract public function get();
    abstract public function post(array $request);
    abstract public function update(array $request);
    abstract public function delete(int $id);
    abstract public function get_by_id(int $id);
    public static function MODEL($model_name)
    {
        return new (ucfirst($model_name) . "_model");
    }
    public static function upload_file(){
        
    } 

}