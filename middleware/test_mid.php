<?php


final class Test_mid {
    public function check($request) {
        $req = JSON_de($request);
        if ($req->token != "this is test")
            JSON_en(["status" => 403]);
    }
}