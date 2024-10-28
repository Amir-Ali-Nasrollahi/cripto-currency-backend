<?php


namespace Core;
final class App
{

    private string $controller = "test";
    private string $method = "get";
    private array $param = [];

    public function __construct()
    {

        header("Content-type:application/json");
        $input = file_get_contents('php://input');


        $url = explode("/", $_GET['url']);

        $ret_group = Route::ret_group($url[0]);
        // var_dump($ret_group);
        // die();
        if($ret_group[1] == true) {
            $this->controller = $ret_group[0][1];

            switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
                case 'GET':
                    if (!isset($url[1]) || empty($url[1])) {
                        $this->method = 'get';
                    } else {
                        $this->method = "get_by_id";
                        $this->param[] = $url[1]; // $array[] = $test == array_push($array, $test)
                    }
                    break;
                case 'POST':
                    $this->method = 'post';
                    $this->param[] = json_decode($input, true);
                    break;
                case "DELETE":
                    $this->method = 'delete';
                    $this->param[] = $url[1]; // $array[] = $test == array_push($array, $test)
                    break;                
                case 'PUT':
                    $this->method = 'update';
                    $this->param[] = json_decode($input, true);
                    break;
    
            }

            include_once('./controller/' . $this->controller . '.php');
            include_once('./database/' . $this->controller . '_model.php');
            $class = new (ucfirst($this->controller));
            call_user_func_array([$class, $this->method], [$this->param]);
        } else {
            echo json_encode(["status" => 404, "value" => "test"]);
        }   
    }
}
