<?php

define("URL", "http://localhost/test/cripto-exchange/mvc/");


function JSON_en(array $ar) {
    echo json_encode($ar);
    die();
}
function JSON_de($json) {
    return json_decode($json);
}
