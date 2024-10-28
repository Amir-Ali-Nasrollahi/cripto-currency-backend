<?php

/*** 
 * use name space for core classes because this is so important for new mvc
 ***/


use Core\Controller;

class Cripto extends Controller
{
    public function get()
    {
        echo 'test';
    }
    public function post(array $request)
    {
        JSON_en(["status" => 400000]);
        // echo 'test_test_4';
    }
    public function update()
    {

    }
    public function delete()
    {

    }
}