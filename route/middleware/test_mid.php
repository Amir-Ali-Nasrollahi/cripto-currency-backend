<?php


final class Test_mid {
    public function check($request): void {

        $req = (is_string($request)) ? $request : $request[0]['token'];
        // var_dump($req);
        // die();
        if ($req != "123")
            JSON_en(["status" => 403, "value"=>"forbbiden!!"]);
    }
}