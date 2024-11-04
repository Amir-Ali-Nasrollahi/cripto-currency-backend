<?php


namespace Core;
final class App
{
    private string $controller = "users";
    private string $method = "get";
    private array $param = [];

    public function __construct()
    {
        // get request
        header("Content-type:application/json");
        $input = file_get_contents('php://input');
        $url = explode("/", $_GET['url']);


        // check middleware conditions
        $ret_group = Route::ret_group($url[0]);
        include_once "./route/middleware/" . $ret_group[0][2] . ".php";
        $middleWare = new (ucfirst($ret_group[0][2]));


        if ($ret_group[1] == true) {

            switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
                case 'GET':
                    if (!isset($url[2]) || empty($url[2])) {
                        $this->method = 'get';
                        $middleWare->check($url[1]);

                    } else {
                        $this->method = "get_by_id";
                        // $this->param[] = 'test'; // $array[] = $test == array_push($array, $test)
                        $this->param[] = intval($url[1]); // $array[] = $test == array_push($array, $test)
                        $middleWare->check($url[2]);
                    }
                    break;
                case 'POST':
                    $this->method = 'post';
                    $this->param[] = json_decode($input, true);
                    $middleWare->check($input);

                    break;
                case "DELETE":
                    $this->method = 'delete';
                    $this->param[] = intval($url[1]); // $array[] = $test == array_push($array, $test)

                    break;
                case 'PUT':
                    $this->method = 'update';
                    $this->param[] = json_decode($input, true);
                    $middleWare->check($input);

                    break;

            }

            $this->controller = $ret_group[0][1];

            include_once('./controller/' . $this->controller . '.php');
            include_once('./database/' . $this->controller . '_model.php');
            $class = new (ucfirst($this->controller));
            call_user_func_array([$class, $this->method], $this->param);
        } else {
            JSON_en(["status" => 404, "value" => "test"]);
        }
    }
}
