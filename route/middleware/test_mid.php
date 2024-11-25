<?php

use Core\Middleware;


final class Test_mid  implements Middleware{
    public function check(array|string $request): void {

        $req = (is_string($request)) ? $request : $request[0]['token'];
        if ($req != "123")
            JSON_en(["status" => 403, "value"=>"forbbiden!!"]);
    }
}