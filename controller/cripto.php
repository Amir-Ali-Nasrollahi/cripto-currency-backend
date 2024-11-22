<?php

/*** 
 * use name space for core classes because this is so important for new mvc 
 **/


use Core\Controller;

class Cripto extends Controller
{
    public function get()
    {
        echo 'test';
    }
    public function post(array $request)
    {
        JSON_en(["status" => 200]);
    }
    public function update(array $request)
    {
        
    }
    public function delete(int $id)
    {
        
    }
    public function get_by_id(int $id)
    {
    
    }
}