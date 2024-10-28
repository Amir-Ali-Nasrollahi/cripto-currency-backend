<?php



/*** 
 * use name space for core classes because this is so important for new mvc
 ***/


use Core\Controller;

class Test extends Controller
{
    public function get()
    {

        $new = Controller::MODEL("test");
        $value = $new->select();
        JSON_en(["status" => 200, "value" => $value[0]]);
    }
    public function post(array $request)
    {
        var_dump($request);
    }
    public function update()
    {

    }
    public function delete()
    {

    }
}