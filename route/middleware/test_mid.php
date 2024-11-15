<?php


final class Test_mid {
    public function check($request) {

        $req = (is_string($request)) ? $request : (JSON_de($request))->token;

        if ($req != "123")
            JSON_en(["status" => 403]);

    }
}