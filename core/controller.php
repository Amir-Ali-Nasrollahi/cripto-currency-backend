<?php

namespace Core;

abstract class Controller
{
    abstract public function get();
    abstract public function post(array $request) ;
    abstract public function update() ;
    abstract public function delete() ;

    protected static function JSON_en(array $ar) {
        echo json_encode($ar);
    }
    protected static function JSON_de($json) {
        return json_decode($json);
    }
    protected static function MODEL($model_name) {
        return new (ucfirst($model_name) . "_model") ;
    }
    
}