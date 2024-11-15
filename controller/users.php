<?php



/*** 
 * use name space for core classes because this is so important for new mvc
 ***/


use Core\Controller;

class Users extends Controller
{
    private $db;
    public function __construct() {
        $this->db = Controller::MODEL("users");
    }
    public function get()
    {
        $value = $this->db->select();
        JSON_en(["status" => 200, "value" =>$value]);
    }
    public function post(array $request)
    {

        var_dump($request);
        die();
        // $this->db->insert([$request['name'], $request["lastname"], $request["phone_number"]]);

        // JSON_en(["status" => 200, "value" => "insert success fully"]);

    }
    public function update(array $request)
    {

    }
    
    public function delete(int $id)
    {
        
    }
    public function get_by_id(int $id)
    {
        var_dump($id);       
    }
}